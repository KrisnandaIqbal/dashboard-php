<?php

$id = $_GET['id'];

$koneksi->query("delete from tb_laporan where id='$_GET[id]'");

?>


<script type="text/javascript">
    window.location.href = "?page=laporan";
</script>