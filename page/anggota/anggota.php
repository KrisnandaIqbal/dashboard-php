<div class="col-md-10 p-5 pt-4">
    <h3><i class="fa fa-laptop fa-2x"></i> Data Mahasiswa</h3>


</div>
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">

            <div class="panel-body">
                <div class="table-responsive">
                    <?php if ($_SESSION['admin']) { ?>
                        <div>
                            <a href="?page=anggota&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-plus"></i> Tambah Data</a>
                        </div><br>
                    <?php } ?>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Prodi</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            $no = 1;

                            $sql = $koneksi->query("select * from tb_anggota");

                            while ($data = $sql->fetch_assoc()) {

                                $jk = ($data['jk'] == 'l') ? "Laki-laki" : "Prempuan";
                            ?>

                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['nim']; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['tempat_lahir']; ?></td>
                                    <td><?php echo $data['tgl_lahir']; ?></td>
                                    <td><?php echo $jk; ?></td>
                                    <td><?php echo $data['prodi']; ?></td>
                                    <td class="text-center">
                                        <a href="?page=anggota&aksi=ubah&id=<?php echo $data['nim']; ?>" class="btn btn-warning"><i class="fa fa-edit"></i> Ubah</a>
                                        <a onclick="return confirm('Anda ingin menghapus?')" href="?page=anggota&aksi=hapus&id=<?php echo $data['nim']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>

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