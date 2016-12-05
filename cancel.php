<?php
    include "conn.php";
    $id = $_GET['id'];

    $query = mysqli_query($conn,"DELETE FROM tb_order WHERE id_order = $id");
?>
<script>
    location.href = "index.php";
</script>