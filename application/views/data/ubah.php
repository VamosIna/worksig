<div class="content-wrapper">
    <h3 class="text-primary mb-4">Ubah Data Gambar</h3>
    <div class="row mb-2">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-block">
                    <h5 class="card-title mb-4">Form Ubah Data Gambar</h5>
                    <?php foreach ($user as $r) { ?>
                        <?= form_open_multipart('c_adm_utama/proses_ubah/' . $r->id_utama) ?>                 

                        <div class="form-group">
                            <label >Nama</label>
                            <input type="text" class="form-control p-input" name="nama_utama" placeholder="Nama" id="nama_utama" value="<?php echo $r->nama_utama ?>" required>
                        </div>
                        <div class="form-group">
                            <label >Alamat</label>
                            <input type="text" class="form-control p-input" name="alamat" placeholder="Alamat" value="<?php echo $r->alamat ?>" id="alamat" required>
                        </div>
                        <div class="form-group">
                        <label >Kabupaten</label>           
                        <select id="id_kab" name="id_kab" class="form-control p-input">          
                            <?php
                            foreach ($dpd_kab->result() as $row)
                                echo "<option value='" . $row->id_kab . "'>" . $row->nama_kab . "</option>";
                            ?>  
                        </select>
                    </div>
                         <div class="form-group">
                            <label >Telepon</label>
                            <input type="text" class="form-control p-input" name="telepon" placeholder="Telepon" value="<?php echo $r->telepon ?>" id="telepon" required>
                    </div>
                        <div class="form-group">
                            <label >Kategori</label>                                      
                            <select id="id_kategori" name="id_kategori" class="form-control p-input">          
                                <?php
                                foreach ($dpd_kategori->result() as $row)
                                    echo "<option value='" . $row->id_kategori . "'>" . $row->nama_kategori . "</option>";
                                ?>  
                            </select>
                    </div>
                        <div class="form-group">
                            <label >Latitude</label>
                            <input type="text" class="form-control p-input" name="lat" placeholder="Latitude" id="lat" value="<?php echo $r->lat ?>" required>
                        </div>
                        <div class="form-group">
                            <label >Longitude</label>
                            <input type="text" class="form-control p-input" name="long" placeholder="Longitude" id="long" value="<?php echo $r->long ?>" required>
                        </div>                       
                        <div class="form-group">
                            <label for="exampleTextarea">Deskripsi</label>
                            <textarea class="form-control p-input" id="deskripsi" name="deskripsi" rows="4"><?php echo $r->deskripsi ?></textarea>
                    </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <input name="userfile" type="file" class="form-control-file" required>
                        </div>                    
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="<?php echo base_url('c_adm_utama/index') ?>" class="btn btn-warning">Batal</a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>