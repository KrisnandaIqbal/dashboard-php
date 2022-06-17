<?php


$id = $_GET['id'];

$sql = $koneksi->query("select * from tb_anggota where nim = '$id'");

$tampil = $sql->fetch_assoc();

$jk = $tampil['jk'];
$prodi = $tampil['prodi'];


?>

<div class="panel panel-default">
    <div class="panel-heading">
        Ubah Data
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <form method="POST">
                    <div class="form-group">
                        <label>NIM</label>
                        <input class="form-control" name="nim" value="<?php echo $tampil['nim'] ?>" />

                    </div>

                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" name="nama" value="<?php echo $tampil['nama'] ?>" />

                    </div>

                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input class="form-control" name="tmpt_lahir" value="<?php echo $tampil['tempat_lahir'] ?>" />

                    </div>

                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input class="form-control" type="date" name="tgl_lahir" value="<?php echo $tampil['tgl_lahir'] ?>" />

                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label><br />
                        <label class="checkbox-inline">
                            <input type="checkbox" value="l" name="jk" <?php echo ($jkl == 'l') ? "checked" : ""; ?> /> Laki-laki
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" value="p" name="jk" <?php echo ($jkl == 'p') ? "checked" : ""; ?> /> Perempuan
                        </label>


                    </div>

                    <div class="form-group">
                        <label> Prodi</label>
                        <select class="form-control" name="prodi">
                            <option value="TeknologiInformasi" <?php if ($prodi == 'TI') {
                                                                    echo "selected";
                                                                } ?>>TI</option>
                            <option value="Matematika" <?php if ($prodi == 'Matematika') {
                                                            echo "selected";
                                                        } ?>>Matematika</option>
                            <option value="Biologi" <?php if ($prodi == 'Biologi') {
                                                        echo "selected";
                                                    } ?>>Biologi</option>

                        </select>
                    </div>

                    <div>

                        <input type="submit" name="simpan" value="Ubah" class="btn btn-primary">
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
$tmpt_lahir = $_POST['tmpt_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];

$simpan = $_POST['simpan'];


if ($simpan) {

    $sql = $koneksi->query("update  tb_anggota set nama='$nama', tempat_lahir='$tmpt_lahir', tgl_lahir='$tgl_lahir', jk='$jk', prodi='$prodi' where nim='$id' ");
    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan");
            window.location.href = "?page=anggota";
        </script>
<?php
    }
}

?>