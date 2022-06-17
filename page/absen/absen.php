<div class="col-md-10 p-5 pt-4">
    <h3><i class="fa fa-edit fa-2x"></i> Absensi</h3>


</div>

<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">

            <div class="panel-body">
                <div class="table-responsive">
                    <?php if ($_SESSION['admin']) { ?>
                        <div>
                            <a href="?page=absen&aksi=tambah" class="btn btn-success" style="margin-top:  8px;"><i class="fa fa-plus"></i> Tambah Data Absensi</a>
                        </div><br>
                    <?php } ?>

                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nim</th>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Status</th>

                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            $no = 1;

                            $sql = $koneksi->query("select * from tb_buku");

                            while ($data = $sql->fetch_assoc()) {

                            ?>

                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['nim']; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['tanggal']; ?></td>
                                    <td><?php echo $data['status']; ?></td>
                                    <td class="text-center">
                                        <a href="?page=absen&aksi=ubah&id_nim=<?php echo $data['id_nim']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Absen</a>


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