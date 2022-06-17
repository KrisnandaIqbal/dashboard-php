<div class="col-md-10 p-5 pt-4">
    <h3><i class="fa fa-calendar fa-2x"></i> Laporan</h3>


</div>

<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">

            <div class="panel-body">
                <div class="table-responsive">
                    <div>
                        <a href="?page=laporan&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-plus"></i> Upload File</a>
                    </div><br>


                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>

                                <th>Lihat File</th>

                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            $no = 1;

                            $sql = $koneksi->query("select * from tb_laporan");

                            while ($data = $sql->fetch_assoc()) {
                                $lihatpdf = "view.php?id=" . $data['id'];

                            ?>

                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['judul']; ?></td>

                                    <td>
                                        <a href="<?php echo $lihatpdf; ?>">Lihat PDF"</a>
                                    </td>
                                    <td class="text-center">
                                        <a onclick="return confirm('Anda ingin menghapus?')" href="?page=laporan&aksi=hapus&id=<?php echo $data['id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>

                                    </td>
                                </tr>

                            
                            <?php  } ?>
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>