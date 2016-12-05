<?php
    include "conn.php";
    $id = $_GET['id'];

    $query = mysqli_query($conn,"UPDATE tb_order SET status_makanan='Y' WHERE id_order = $id");
?>
<script>
    location.href = "index.php";
</script>