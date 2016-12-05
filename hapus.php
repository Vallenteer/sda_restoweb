<?php
    include "conn.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_menu WHERE id_menu = $id";
    $query = mysqli_query($conn,$sql);
?>
<script>
    location.href = "ubahmenu.php";
</script>