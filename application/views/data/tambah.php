<div class="content-wrapper">
    <h3 class="text-primary mb-4">Tambah Data</h3>
    <div class="row mb-2">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-block">
                    <h5 class="card-title mb-4">Form Tambah Data Gambar</h5>
                    <?= form_open_multipart('c_adm_utama/proses_input') ?>
                    <div class="form-group">
                        <label >Nama</label>
                        <input type="text" class="form-control p-input" name="nama_utama" placeholder="Nama" id="nama_utama" required>
                    </div>
                    <div class="form-group">
                        <label >Alamat</label>
                        <input type="text" class="form-control p-input" name="alamat" placeholder="Alamat" id="alamat" required>
                    </div>
                    <div class="form-group">
                        <label >Kecamatan</label>           
                        <select id="id_kec" name="id_kec" class="form-control p-input">          
                            <?php
                            foreach ($dpd_kec->result() as $row)
                                echo "<option value='" . $row->id_kec . "'>" . $row->nama_kec . "</option>";
                            ?>  
                        </select>
                    </div>
                     <div class="form-group">
                        <label >Telepon</label>
                        <input type="text" class="form-control p-input" name="telepon" placeholder="Telepon" id="telepon" required>
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
                        <input type="text" class="form-control p-input" name="lat" placeholder="Latitude" id="lat" required>
                    </div>
                    <div class="form-group">
                        <label >Longitude</label>
                        <input type="text" class="form-control p-input" name="long" placeholder="Longitude" id="long" required>
                    </div>                       
                    <div class="form-group">
                        <label for="exampleTextarea">Deskripsi</label>
                        <textarea class="form-control p-input" id="deskripsi" name="deskripsi" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input name="userfile" type="file" class="form-control-file" required>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="<?php echo base_url('c_adm_utama/index') ?>" class="btn btn-warning">Batal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>