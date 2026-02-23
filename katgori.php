 <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="index.php? page= Peminjaman">official DataTables documentation</a>.</p>
 


<!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <!-- <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div> -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama kategori</th>

                                            <th>Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama kategori  </th>
                                                <?php if($SESION ['user']['level']-- 'admin')?>
                                            <th>aksi </th>
                                            <?php endif; ?>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
                                        $i=1;
                                        $query = mysqli_query($koneksi,"SELECT * FROM kategori");
                                        while ($data=mysqli_fetch_array($query)) :

                    
                                        ?>
                                        <tr>
                                            <td> <?= $i++; ?></td>
                                            <td><?=$data['kategori']; ?></td>
                                            <td>
                                               <a href="page=kategori_ubah&&id=<?=$data['id_kategori']; ?>class="btn btn-info>ubah</a>
                                                <a href="page=kategori_hapus&&id=<?=$data['id_kategori']; ?>onclick="return confirm(' apakah anda yakkin ingin menghapus ini')

                                                class="btn btn-danger">ubah </a>
                                               
                                            
                                        </tr>
                                        <<?php endwhile; ?>

                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>