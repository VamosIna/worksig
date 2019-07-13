<div class="col-xs-12 col-md-3">
            <div class="well">
                <form  method="post" action="<?php echo base_url()?>c_user/cari" class="form-inline" role="form">
                    <div class="form-group ">
                        <label>Cari Nama</label>
                        <input type="text" class="form-control p-input" name="nama_utama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label >Kabupaten</label>           
                        <select id="id_kab" name="id_kab" class="form-control p-input">
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
        </div>
        <div class="col-xs-12 col-md-8">
            <div class="row">

            <?php foreach ($user as $u) { ?>
                <div class="col-sm-6 col-md-5 col-lg-4 point-item-thumbnail">
                    <center><h4><?php echo substr($u->nama_utama, 0, 23)  ?></h4></center>
                        <img class="rounded-circle" src="<?php echo base_url('assets/images/') . $u->gambar_utama ?>" alt="No Image" >
                      
                        <div class="caption">
                            <p>                                
                                <h4> <?php echo $u->nama_kategori?></h4>
                                <a href="<?php echo base_url()."c_user/detail/".$u->id_utama ?>" class="btn btn-primary">More Info</a>
                            </p>

                        </div>
                    
                </div>
                <?php } ?>               
            </div>         
        </div>
         