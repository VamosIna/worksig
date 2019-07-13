<div class="content-wrapper">
    <h3 class="text-primary mb-4">Tambah Data</h3>
    <div class="row mb-2">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-block">
                    <h5 class="card-title mb-4">Form Tambah Data Gambar</h5>
                    <?= form_open_multipart('c_gambar/proses_input') ?>
                    <div class="form-group">
                        <label >Nama</label>
                        <input type="text" class="form-control p-input" name="nama_gbr" placeholder="Nama" id="nama_gbr" required>
                    </div>
                    <div class="form-group">
                        <label >Untuk Kategori Utama</label>                                      
                        <select id="id_utama" name="id_utama" class="form-control p-input">          
                            <?php
                            foreach ($dpd_utama->result() as $row)
                                echo "<option value='" . $row->id_utama . "'>" . $row->nama_utama . "</option>";
                            ?>  
                        </select>
                    </div>                   

                    <div class="form-group">
                        <label>Gambar</label>
                        <input name="userfile" type="file" class="form-control-file" required>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="<?php echo base_url('c_gambar/index') ?>" class="btn btn-warning">Batal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>