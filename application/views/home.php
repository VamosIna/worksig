    <div class="jumbotron">                
        <center><p>
            Tempat Wisata Jawa Timur
        </p></center>
        <form  method="post" action="<?php echo base_url()?>c_user/cari" class="form-inline" role="form">
                    <center><div class="form-group">                        
                        <input style="width: 200px" type="text" class="form-control p-input" name="nama_utama" placeholder="Cari Nama">
                    </div>
                    <br>
                    <div class="form-group">                                
                        <select style="width: 200px" id="id_kab" name="id_kab" class="form-control p-input">
                            <option value = ''>-- Pilih Kab / Kota --</option>     
                            <?php
                            foreach ($dpd_kab->result() as $row)
                                echo "<option value='" . $row->id_kab . "'>" . $row->nama_kab . "</option>";
                            ?>                         
                        </select>
                    </div>
                    <div>                        
                        <button type="submit" class="btn btn-default">
                            Search
                        </button>                    
                    </div></center>
                </form>
        <br>
            <center><a class="btn btn-primary btn-lg" href="<?php echo base_url('c_user/index') ?>">Or Go To Map</a></center>                       
    </div>
    
    <div class="container">
    <?php         
    foreach ($semua as $u) { 
        ?>
    <div class="col-xs-4 col-xs-4 col-md-4 col-lg-4">        
        <img class="rounded-circle-home" src="<?php echo base_url('assets/images/').$u->gambar_utama ?>">
        <h3><?php echo substr($u->nama_utama, 0, 25) ?> </h3>
        
        <p align="justify">
            <?php echo substr($u->deskripsi, 0, 120) ?> . . .
        </p>
        <div class="caption">
        <p>                                
        <a href="<?php echo base_url()."c_user/detail/".$u->id_utama ?>" class="btn btn-primary">Detail</a>
        </p>
        </div>
        
    </div>
<?php } ?>
 </div>
  <nav class="navbar navbar-default nav-fixed-top" role="navigation" id="app-nav-bar" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <center><h4>Copyrights Ambiguity 2020 Lulus Semua Amin</h4></center>
</nav> 
    

        