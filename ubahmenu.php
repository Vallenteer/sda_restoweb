<html>
    <head>
        <title>Ubah Menu</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- data tables -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"/>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.12/api/sum().js"></script>
    <style>
        table,td,tr,th{
            text-align:center;
        }
    </style>
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
                    <li><a href="kasir.php">Kasir</a></li>
                    <li class="active"><a href="ubahmenu.php">Admin</a></li>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-3">
                    <div class="list-group table-of-contents">
                            <a class="list-group-item active" href="ubahmenu.php">Ubah Menu</a>
                            <a class="list-group-item" href="laporan.php">Laporan Penjualan</a>
                    </div>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-9">
                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>Makanan</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Ubah</th>
                        </tr>
                        <tr>
                            <th colspan="4">Input Data</th>
                        </tr>
                        <tr>
                            <td><input type="text" id="nama0" /></td>
                            <td><input type="text" id="deskripsi0" /></td>
                            <td><input type="text" id="harga0" /></td>
                            <td><input type="submit" onclick="ubah('0')" value="Input" /></td>
                        </tr>
                        <tr>
                            <th colspan="4">Edit Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                            $query = mysqli_query($conn,"SELECT * FROM tb_menu");
                            while($result = mysqli_fetch_array($query, MYSQLI_NUM)){
                        ?>
                        <tr>
                            <td><input type="text" id="nama<?php echo $result[0] ?>" value="<?php echo $result[1] ?>" /></td>
                            <td><input type="text" id="deskripsi<?php echo $result[0] ?>" value="<?php echo $result[2] ?>" /></td>
                            <td><input type="text" id="harga<?php echo $result[0] ?>" value="<?php echo $result[3] ?>" /></td>
                            <td><input type="submit" onclick="ubah('<?php echo $result[0] ?>')" value="Ubah" /></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                    </tfoot>
                </table>   
            </div>
        </div>
        </div>
        <script>
        function ubah(id){
            var namaID = "nama"+id; var deskID = "deskripsi"+id; var hargaID = "harga"+id;
            var nama = document.getElementById(namaID).value;
            var deskripsi = document.getElementById(deskID).value;
            var harga = document.getElementById(hargaID).value;

            var url = "ubah.php?nama="+nama+"&deskripsi="+deskripsi+"&harga="+harga+"&id="+id;
            //alert(url);
            location.href = url;
        }
        $(document).ready( function () {
            $('#table_id').DataTable({
                "paging": false,
                "ordering": false,
                drawCallback: function () {
                var api = this.api();
                $( api.column(3).footer() ).html(
                    api.column( 3, {page:'all'} ).data().sum()
                );
                }
            });
        } );        
        </script>
    </body>
</html>