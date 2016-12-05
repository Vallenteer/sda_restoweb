<?php
    include "conn.php";
    $id = $_GET['id'];
    $nama = $_GET['nama'];
    $deskripsi = $_GET['deskripsi'];
    $harga = $_GET['harga'];

    $sql = "SELECT * FROM tb_menu WHERE id_menu = $id";
    $query = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($query);

    if($num != 0)
    $sql = "UPDATE tb_menu SET nama_makanan='$nama', deskripsi_makanan='$deskripsi', harga='$harga' WHERE id_menu = $id";
    else
    $sql = "INSERT INTO tb_menu (nama_makanan, deskripsi_makanan, harga) VALUES ('$nama', '$deskripsi', $harga)";
    
    $query = mysqli_query($conn,$sql);
?>
<script>
    location.href = "ubahmenu.php";
</script>