<script type="text/javascript">
    function validasi(form) {
        if (form.nim.value == "") {
            alert("NIM Tidak Boleh Kosong");
            form.nim.focus();
            return (false);
        }
        if (form.nama.value == "") {
            alert("Nama Tidak Boleh Kosng");
            form.nama.focus();
            return (false);
        }
        if (form.tmpt_lahir.value == "") {
            alert("tempat Lahir Tidak Boleh Kosong");
            form.tmpt_lahir.focus();
            return (false);
        }
        if (form.prodi.value == "") {
            alert("Prodi Tidak Boleh Kosong");
            form.prodi.focus();
            return (false);
        }

    }
</script>

<div class="panel panel-default">
    <div class="panel-heading">
        Upload Laporan
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">

                <form method="POST" onsubmit="return validasi(this)">
                    <div class="form-group">
                        <label>Judul</label>
                        <input class="form-control" name="judul" id="judul" required />

                    </div>

                    <div class="form-group">
                        <label>Nama File</label>
                        <input class="form-control" type="file" name="nama_file" id="nama_file" required />

                    </div>



                    <div>

                        <input type="submit" name="simpan" value="Upload" class="btn btn-primary">
                    </div>
            </div>

            </form>
        </div>
    </div>
</div>
</div>

<?php
$tipe_file = $_FILES['nama_file']['name'];
if ($tipe_file == "application/pdf/word") {


    $judul = ($_POST['judul']);
    $nama_file = ($_POST['nama_file']['name']);
    $sql = $koneksi->query("insert into tb_laporan (judul)values('$judul')");

    $query = mysqli_query($koneksi, "SELECT id FROM tb_laporan ORDER BY id DESC LIMIT 1");
    $data = mysqli_fetch_array($query);

    $genarate = date("ymd_his_") . rand(1111, 9999);
    $nama_baru = $genarate . ".pdf";
    $file_temp = $_FILES(['nama_file']['tmp_name']);
    $folder = "files";
    $upload = move_uploaded_file($file_temp, "$folder/$nama_file");

    if ($simpan) {
        if ($upload) {
            mysqli_query($koneksi, "UPDATE tb_laporan SET nama_file='$nama_baru' WHERE id='$data'[id]");


?>
            <script type="text/javascript">
                alert("Data Berhasil Disimpan");
                window.location.href = "?page=laporan";
            </script>
<?php

        }
    }
}

?>