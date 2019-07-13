        <div class="col-xs-12 col-md-3">
        <?php foreach ($user as $u){ ?>
            <div class="well">
                <h4>Lokasi <?php echo $u->nama_utama ?></h4>
                <div id="mapp"></div>
                <p align="justify">
                   <?php echo substr($u->deskripsi, 0 , 800)  ?>. . . . .
                </p>
                <address>
                    <strong>Alamat.</strong>
                    <br>
                    <?php echo $u->alamat ?>
                    <br>
                    <abbr title="Phone">Telepon :</abbr> <?php echo $u->telepon ?>
                </address>
                <?php
                    $url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : '';
                ?>
                <a class="btn btn-primary" href="<?=$url?>">Back</a>                
            </div>
            <?php } ?>
        </div>
        <div class="col-xs-12 col-md-9">
            <div class="row">         
                
                <?php foreach ($gambar as $v) { ?>
                <div class="col-sm-6 col-md-5 col-lg-4 point-item-thumbnail">
                    <h4><?php echo substr($v->nama_gbr, 0, 23)  ?></h4>
                    <img class="rounded-circle" src="<?php echo base_url('assets/images/gambar/') . $v->gbr ?>" alt="No Image" >
                    
                </div>
                <?php } ?>     
            </div>
            <div class="row">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li>
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCF9IAT3wT0854y_7-Oph9JDmxL8tY8acU"></script>
        <script src="<?php echo base_url('assets/user/') ?>Bing.js"></script>

        <script type="text/javascript" src="https://leafletjs.com/examples/choropleth/us-states.js"></script>

       <script type="text/javascript">
       
        window.onload = function() {       
        var grmp = new L.TileLayer('https://mt1.google.com/vt/lyrs=r&x={x}&y={y}&z={z}');

        <?php foreach($user as $s){ ?>
        var map = new L.Map('mapp', {
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