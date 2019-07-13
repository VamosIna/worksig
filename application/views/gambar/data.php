<div class="content-wrapper">
    <h3 class="text-primary mb-4">Data Gambar</h3>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-block">                                    
                <div class="table-responsive">
                    <a href="<?php echo base_url('c_gambar/tambah') ?>" class="btn btn-primary">Tambah Data</a>  
                    </br>                                     
                    </br>                                     
                    <table id="tbl" class="table center-aligned-table">
                        <thead>
                            <tr class="text-primary">
                                <th>No</th>
                                <th>ID GAMBAR</th>
                                <th>NAMA UTAMA</th>
                                <th>NAMA GAMBAR</th>    
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
                                <tr class="">
                                    <td><?php echo $no++ ?></td>                                                        
                                    <td><?php echo $u->id_data_gbr ?></td>                                    
                                    <td><?php echo $u->nama_utama ?></td> 
                                    <td><?php echo $u->nama_gbr ?></td>
                                    <th><img src="<?php echo base_url('assets/images/gambar/') . $u->gbr ?>" alt="no img" class="rounded" width="40"
                                             height="40" /></th> 
                                    <td><a href="<?php echo base_url('c_gambar/ubah/') . $u->id_data_gbr ?>" class="btn btn-warning btn-sm">Edit</a></td>
                                    <td><a href="<?php echo base_url('c_gambar/hapus/') . $u->id_data_gbr ?>" class="btn btn-danger btn-sm">Hapus</a></td>                                                            
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>                          
            </div>
        </div>
    </div>
</div>
</div>              