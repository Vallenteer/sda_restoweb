<html>
    <head>
        <title>Monggo</title>
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
                    <li><a href="#">Dapur</a></li>
                    <li class="active"><a href="#">Kasir</a></li>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-3">
                    <div class="list-group table-of-contents">
                        <?php
                            $query = mysqli_query($conn,"SELECT DISTINCT no_meja FROM `tb_order` ORDER BY no_meja ASC");
                            while($result = mysqli_fetch_array($conn,$query)){
                        ?>                        
                            <a class="list-group-item" href="#Dapur">Meja <?php echo $result[0] ?></a>
                        <?php
                            }
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
                        <tr>
                            <td>Row 1 Data 1</td>
                            <td>Row 1 Data 2</td>
                            <td>Row 1 Data 2</td>
                        </tr>
                        <tr>
                            <td>Row 2 Data 1</td>
                            <td>Row 2 Data 2</td>
                            <td>Row 2 Data 2</td>
                        </tr>
                    </tbody>
                </table>                
                
            </div>
        </div>
        </div>
        <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );        
        </script>
    </body>
</html>