<?php
    include "conn.php";
    $id = $_GET['id'];

    $query = mysqli_query($conn,"UPDATE tb_order SET status_pembayaran='Y' WHERE no_meja = $id");
?>
<script>
    location.href = "kasir.php?meja=<?php echo $id ?>";
</script>