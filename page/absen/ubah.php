<?php

$id_nim = $_GET['id_nim'];

$sql = $koneksi->query("select * from tb_buku where id_nim='$id_nim'");

$tampil = $sql->fetch_assoc();


?>

<div class="panel panel-default">
    <div class="panel-heading">
        Ubah Data
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">

                <form method="POST">
                    <?php if ($_SESSION['admin']) { ?>
                        <div class="form-group">
                            <label>Nim</label>
                            <input class="form-control" name="nim" value="<?php echo $tampil['nim']; ?>" />

                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control" name="nama" value="<?php echo $tampil['nama']; ?>" />

                        </div>

                        <div class="form-group">
                            <label>Tanggal</label>
                            <input class="form-control" type="date" name="tanggal" value="<?php echo $tampil['tanggal']; ?>" />

                        </div>
                    <?php } ?>

                    <div class="form-group">
                        <label> Status</label>
                        <select class="form-control" name="status">
                            <option value="Hadir" <?php if ($status == 'Hadir') {
                                                        echo "selected";
                                                    } ?>>Hadir</option>
                            <option value="TidakHadir" <?php if ($status == 'TidakHadir') {
                                                            echo "selected";
                                                        } ?>>Tidak Hadir</option>


                        </select>
                    </div>

                    <div>

                        <input type="submit" name="simpan" value="Submit" class="btn btn-primary">
                    </div>
            </div>

            </form>
        </div>
    </div>
</div>
</div>


<?php

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$status = $_POST['status'];


$simpan = $_POST['simpan'];


if ($simpan) {

    $sql = $koneksi->query("update tb_buku set nim='$nim', nama='$nama', tanggal='$tanggal', status='$status' where id_nim='$id_nim'");

    if ($sql) {
?>
        <script type="text/javascript">
            alert("Ubah Berhasil Disimpan");
            window.location.href = "?page=absen";
        </script>
<?php
    }
}

?>