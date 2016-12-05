<html>
    <head>
        <title>Kasir</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- data tables -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css"/>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>
    </head>
    <body>
        <?php
            include "conn.php";
        ?>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="index.php">Dapur</a></li>
                    <li class="active"><a href="kasir.php">Kasir</a></li>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-3">
                    <div class="list-group table-of-contents">
                        <?php
                            $query = mysqli_query($conn,"SELECT DISTINCT no_meja FROM `tb_order` ORDER BY no_meja ASC");
                            while($result = mysqli_fetch_array($query, MYSQLI_ASSOC)){
                            if(!empty($_GET['meja']) && $_GET['meja'] == $result['no_meja']){
                        ?>                        
                            <a class="list-group-item active" href="kasir.php?meja=<?php echo $result['no_meja'] ?>">Meja <?php echo $result['no_meja'] ?></a>
                        <?php
                            }else{
                        ?>
                            <a class="list-group-item" href="kasir.php?meja=<?php echo $result['no_meja'] ?>">Meja <?php echo $result['no_meja'] ?></a>
                        <?php
                            }}
                        ?>
                    </div>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-9">
                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>Makanan</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if(!empty($_GET['meja'])){
                            $no_meja = $_GET['meja'];
                            $query = mysqli_query($conn,"SELECT tb_menu.nama_makanan, tb_order.jumlah_pesanan, tb_menu.harga FROM tb_menu JOIN tb_order ON tb_menu.id_menu = tb_order.id_menu WHERE tb_order.no_meja = '$no_meja'");
                            while($result = mysqli_fetch_array($query, MYSQLI_NUM)){
                        ?>
                        <tr>
                            <td><?php echo $result[0] ?></td>
                            <td><?php echo $result[1] ?></td>
                            <td><?php echo $result[2] ?></td>
                        </tr>
                        <?php
                            }}
                        ?>
                    </tbody>
                </table>                
                
            </div>
        </div>
        </div>
        <script>
        $(document).ready( function () {
            $('#table_id').DataTable({
                "paging": false
            });
        } );        
        </script>
    </body>
</html>