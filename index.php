<!DOCTYPE html>
<html>
<head>
  <title>Dapur</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
	.done{
		color: #22b24c;
	}
	.cancel{
		color: #eb6864;
	}
  </style>
</head>
<body>
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
                    <li class="active"><a href="index.php">Dapur</a></li>
                    <li><a href="kasir.php">Kasir</a></li>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
	<div class="container">
		<div class="row">
			<?php
				include "conn.php";
                $query = mysqli_query($conn,"SELECT DISTINCT no_meja FROM `tb_order` ORDER BY no_meja ASC");
                while($result = mysqli_fetch_array($query, MYSQLI_ASSOC)){
					$meja = $result['no_meja'];
			?>
			<div class="col-md-3">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Table #<?php echo $meja ?></h3>
					</div>
					<div class="panel-body">
						<ul class="list-group">
							<?php
								$sql = "SELECT tb_menu.nama_makanan, tb_order.jumlah_pesanan, tb_order.pesanan_khusus, tb_menu.status_makanan FROM tb_menu JOIN tb_order ON tb_menu.id_menu = tb_order.id_menu WHERE tb_order.no_meja = $meja";
               					$query1 = mysqli_query($conn,$sql);
								while($result = mysqli_fetch_array($query1, MYSQLI_NUM)){
							?>
							<li class="list-group-item">
								<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								<span style="color:red" class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								<?php echo "<b>".$result[1]." ".$result[0]."</b>"."<br/>";
									if(!empty($result[2])){
										echo $result[2];
									}
								?>
							</li>
							<?php
								}
							?>
						</ul>
					</div>
				</div>
			</div>
			<?php
				}
			?>

		</div>
	</div>
</body>
</html>