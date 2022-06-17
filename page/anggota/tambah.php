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
                        <label>Tempat Lahir</label>
                        <input class="form-control" name="tmpt_lahir" id="tmpt_lahir" />

                    </div>

                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input class="form-control" type="date" name="tgl_lahir" id="tgl" />

                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label><br />
                        <label class="checkbox-inline">
                            <input type="checkbox" value="l" name="jk" /> Laki-laki
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" value="p" name="jk" /> Perempuan
                        </label>


                    </div>

                    <div class="form-group">
                        <label> Prodi</label>
                        <select class="form-control" name="prodi">
                            <option> == Pilih Prodi ==</option>
                            <option value="TI">TI</option>
                            <option value="Kimia">Kimia</option>
                            <option value="Matematika">Matematika</option>
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
$tmpt_lahir = $_POST['tmpt_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];

$simpan = $_POST['simpan'];


if ($simpan) {

    $sql = $koneksi->query("insert into tb_anggota (nim, nama, tempat_lahir, tgl_lahir, jk, prodi )values('$nim', '$nama', '$tmpt_lahir', '$tgl_lahir', '$jk', '$prodi')");

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