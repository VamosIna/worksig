        <div class="col-xs-12 col-md-3">
            <div class="well">
                <form  method="post" action="<?php echo base_url()?>c_user/cari" class="form-inline" role="form">
                    <div class="form-group ">
                        <label>Cari Nama</label>
                        <input type="text" class="form-control" style="width: 250px" name="nama_utama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label >Kabupaten</label>           
                        <select style="width: 250px" id="id_kab" name="id_kab" class="form-control">
                            <option value = ''>-- Pilih Kab / Kota --</option>
                            <?php
                            foreach ($dpd_kab->result() as $row)
                                echo "<option value='" . $row->id_kab . "'>" . $row->nama_kab . "</option>";
                            ?>  
                        </select>
                    </div>
                    <div>
                        <br>
                        <button type="submit" class="btn btn-primary">
                            Cari
                        </button>                    
                    </div>
                </form>             
            </div>
            <?php foreach ($user as $u){ ?>
                <div class="well">                
                    <div id="mapp-detail"></div>                
                </div>
            <?php } ?>
        </div>

        <?php foreach ($user as $u) { ?>
            <div class="col-xs-12 col-md-9">
                <div class="row point-info">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><?php echo $u->nama_utama ?></h4>
                        </div>
                        <div class="panel-body">
                            <p align="justify"><img class="img-detail" src="<?php echo base_url('assets/images/').$u->gambar_utama ?>" align="left">
                                <?php echo $u->deskripsi; ?>
                            </p>
                            <address>
                                <strong>Koordinat</strong>
                                <br>
                                Latitude : <?php echo $u->lat ?>
                                <br>
                                Langitude : <?php echo $u->long ?>
                                <br>                           
                                
                            </address>
                            <address>
                                <strong>Alamat</strong>
                                <br>
                                <?php echo $u->alamat; ?>
                                <br>                           
                                
                            </address>

                            <address>
                                <strong>Telepon</strong>
                                <br>
                                <abbr title="Phone">Telepon:</abbr> <?php echo $u->telepon; ?>
                            </address>

                            <div id="point-gallery-slide" class="carousel slide">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <?php $no = 0;                                 
                                    foreach ($gambar as $g) { 
                                        if($no == 0){
                                            echo "<li data-target='#point-gallery-slide' data-slide-to='0' class='active'></li>
                                            ";
                                        }else{
                                            echo "<li data-target='#point-gallery-slide' data-slide-to='".$no."'></li>
                                            ";
                                        }
                                        $no++;
                                    } ?>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <?php $no = 0;
                                    foreach ($gambar as $h) {
                                        if($no == 0) {
                                           echo "<div class='item active'>
                                           <iframe src='".base_url('assets/images/gambar/').$h->gbr."' alt='No Image' scrolling = 'no' frameborder='no'></iframe>
                                           <div class='carousel-caption'>
                                           <h3> Foto ".$h->nama_gbr."</h3>                                        
                                           </div>
                                           </div>
                                           ";   
                                       }else{
                                        echo "<div class='item'>
                                        <iframe class='rounded-slide' src='".base_url('assets/images/gambar/').$h->gbr."' alt='No Image' scrolling = 'no' frameborder='no'></iframe>
                                        <div class='carousel-caption'>
                                        <h3>".$h->nama_gbr."</h3>                                        
                                        </div>
                                        </div>
                                        ";
                                    }
                                    $no++; } ?>
                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control" href="#point-gallery-slide" data-slide="prev"> <span class="icon-prev"></span> </a>
                                <a class="right carousel-control" href="#point-gallery-slide" data-slide="next"> <span class="icon-next"></span> </a>
                            </div>

                        </div>
                        <div class="panel-footer">
                            <a href="<?php echo base_url('c_user/gallery/').$u->id_utama ?>" class="btn btn-primary">View in Gallery</a>
                        </div>
                    </div>
                </div>
            </div> 
        <?php } ?>

        <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCF9IAT3wT0854y_7-Oph9JDmxL8tY8acU"></script>
        <script src="<?php echo base_url('assets/user/') ?>Bing.js"></script>

        <script type="text/javascript" src="https://leafletjs.com/examples/choropleth/us-states.js"></script>

        <script type="text/javascript">
         
            window.onload = function() {       
                var grmp = new L.TileLayer('https://mt1.google.com/vt/lyrs=r&x={x}&y={y}&z={z}');

                <?php foreach($user as $s){ ?>
                    var map = new L.Map('mapp-detail', {
                        center: new L.LatLng(<?php echo $s->lat.",".$s->long; ?>),
                        zoom: 9, 
                        layers: [grmp],
                        zoomControl : false
                    });
                    
                    var malang = L.marker([<?php echo $s->lat.",".$s->long ?>])
                    .bindPopup('<h5><?php echo $s->nama_utama ?></h5>')
                    .addTo(map);
                    
                <?php } ?>
            }          
        </script>
        