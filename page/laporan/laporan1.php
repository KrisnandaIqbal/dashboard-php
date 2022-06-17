<?php

?>

<link rel="stylesheet" href="../css/custom.css">

<div class="col-md-10 p-5 pt-4 ">
    <h3><i class="fa fa-calendar fa-2x"></i> Laporan</h3>
    <hr>
</div>
<form action="./upload.php" method="POST" enctype="multipart/form-data">
    <table width="100%">
        <thead>
            <tr>
                <td width=" 150">Judul</td>
                <td>
                    <input type="text" name="judul" required size="50">
                </td>
            </tr>
            <tr>
                <td width="150">File PDF</td>
                <td>
                    <input type="file" name="nama_file" required>
                </td>
                <td>
                    <input type="submit" name="btn" value="Upload Laporan">
                </td>
            </tr>


            </tbody>
    </table>
</form>
<hr>
<b>Data Laporan</b>
<hr>
<table width="100%" border="1">
    <tr>
        <th width="50">No</th>
        <th>Laporan</th>
        <th width="100">Lihat File</th>
        <th width="50">Hapus</th>
    </tr>
    <?php
    $no = 1;
    $sql = $koneksi->query("select * from tb_laporan");
    while ($data = $sql->fetch_assoc()) {
        $lihatpdf = "view.php?id=" . $data['id'];
        $hapus    = "hapus.php?id=" . $data['id'];

    ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['judul']; ?></td>
            <td>
                <a href="<?php echo $lihatpdf; ?>">Lihat PDF"</a>
            </td>
            <td>
                <a onclick="return confirm('Anda ingin menghapus?')" href="?page=laporan&aksi=hapus&id=<?php echo $data['id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
            </td>
        </tr>
    <?php
        $no++;
    }
    ?>

</table>

</div>