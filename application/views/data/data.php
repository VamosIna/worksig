<div class="content-wrapper">
    <h3 class="text-primary mb-4">Data Utama</h3>               
    <div class="col-lg-12">
        <div class="card">
            <div class="card-block">                                    
                <div class="table-responsive">
                    <a href="<?php echo base_url('c_adm_utama/tambah') ?>" class="btn btn-primary">Tambah Data</a> </br>                                      
                    <br> 

                    <table id="tbl" class="table center-aligned-table">
                        <thead>
                            <tr class="text-primary">
                                <th>No</th>         
                                <!-- <th>ID</th> -->
                                <th>NAMA UTAMA</th>
                                <th>KECAMATAN</th>
                                <th>ALAMAT</th>
                                <th>TELEPON</th>
                                <th>KATEGORI</th>
                                <th>DESKRIPSI</th>
                                <th>GAMBAR</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>    
                            <?php
                            $no = 1;
                            foreach ($user as $u) {
                                ?>
                                <tr>                                
                                    <td><?php echo $no++ ?></td>                         
                                    <!-- <td><?php echo $u->id_utama ?></td> -->
                                    <td><?php echo $u->nama_utama ?></td>
                                    <td><?php echo $u->nama_kec ?></td>
                                    <td><?php echo substr($u->alamat, 0, 25) ?> . . . . .</td>
                                    <td><?php echo $u->telepon ?></td>
                                    <td><?php echo $u->nama_kategori ?></td>                              
                                    <td><?php echo substr($u->deskripsi, 0, 25) ?> . . . . .</td>
                                    <th><img src="<?php echo base_url('assets/images/') . $u->gambar_utama ?>" alt="no img" class="rounded" width="40"
                                             height="40" /></th>                                 
                                    <td><a href="<?php echo base_url('c_adm_utama/ubah/') . $u->id_utama ?>" class="btn btn-warning btn-sm">Edit</a></td>
                                    <td><a href="<?php echo base_url('c_adm_utama/hapus/') . $u->id_utama ?>" class="btn btn-danger btn-sm">Hapus</a></td>                                                            
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>                                       
                </div>
            </div>
        </div>
    </div>
</div>
