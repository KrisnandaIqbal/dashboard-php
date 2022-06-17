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
        if (form.tanggal.value == "") {
            alert("Tanggal Tidak Boleh Kosong");
            form.tanggal.focus();
            return (false);
        }
        if (form.status.value == "") {
            alert("Status Boleh Kosong");
            form.status.focus();
            return (false);
        }

    }
</script>

<div class="panel panel-default">
    <div class="panel-heading">
        Tambah Data Mahasiswa
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">

                <form method="POST" onsubmit="return validasi(this)">
                    <div class="form-group">
                        <label>NIM</label>
                        <input class="form-control" type="number" name="nim" id="nim" />

                    </div>

                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" name="nama" id="nama" />

                    </div>


                    <div class="form-group">
                        <label>Tanggal</label>
                        <input class="form-control" type="date" name="tanggal" id="tgl" />

                    </div>


                    <div class="form-group">
                        <label> Status</label>
                        <select class="form-control" name="status">
                            <option> == ==</option>
                            <option value="-">-</option>
                        </select>
                    </div>

                    <div>

                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
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

    $sql = $koneksi->query("insert into tb_buku (nim, nama, tanggal, status )values('$nim', '$nama', '$tanggal', '$status')");

    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan");
            window.location.href = "?page=absen";
        </script>
<?php
    }
}

?>