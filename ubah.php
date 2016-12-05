<?php
    include "conn.php";
    $id = $_GET['id'];
    $nama = $_GET['nama'];
    $deskripsi = $_GET['deskripsi'];
    $harga = $_GET['harga'];

    $sql = "UPDATE tb_menu SET nama_makanan='$nama', deskripsi_makanan='$deskripsi', harga='$harga' WHERE id_menu = $id";
    echo $sql;
    $query = mysqli_query($conn,$sql);
?>
<script>
    location.href = "ubahmenu.php";
</script>