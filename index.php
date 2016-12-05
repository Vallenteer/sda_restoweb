<!DOCTYPE html>
<html>
<head>
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
                    <li class="active"><a href="#">Dapur</a></li>
                    <li><a href="#">Kasir</a></li>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Table #1 Kelvin Kristianto</h3>
					</div>
					<div class="panel-body">
						<ul class="list-group">
							<li class="list-group-item done">
								Food #1 - Done
							</li>
							<li class="list-group-item">
								<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								<span style="color:red" class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								Food #2
								<ul>
									<li>Not Spicy</li>
									<li>No MSG</li>
								</ul>
							</li>
							<li class="list-group-item">
								<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								<span style="color:red" class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								Food #3
							</li>
							<li class="list-group-item">
								<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								<span style="color:red" class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								Drink #1
							</li>
							<li class="list-group-item">
								<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								<span style="color:red" class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								Drink #2
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Table #2 Kelvin Kristianto</h3>
					</div>
					<div class="panel-body">
						<ul class="list-group">
							<li class="list-group-item cancel">
								Food #1 - Cancelled
							</li>
							<li class="list-group-item">
								<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								<span style="color:red" class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								Food #2
							</li>
							<li class="list-group-item">
								<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								<span style="color:red" class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								Food #3
							</li>
							<li class="list-group-item">
								<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								<span style="color:red" class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								Drink #1
							</li>
							<li class="list-group-item">
								<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								<span style="color:red" class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								Drink #2
							</li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="col-md-3">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Table #3 Kelvin Kristianto</h3>
					</div>
					<div class="panel-body">
						<ul class="list-group">
							<li class="list-group-item">
								<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								<span style="color:red" class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								Food #1
							</li>
							<li class="list-group-item">
								<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								<span style="color:red" class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								Food #2
							</li>
							<li class="list-group-item">
								<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								<span style="color:red" class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								Food #3
							</li>
							<li class="list-group-item">
								<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								<span style="color:red" class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								Drink #1
							</li>
							<li class="list-group-item">
								<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								<span style="color:red" class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								Drink #2
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Table #4 Kelvin Kristianto</h3>
					</div>
					<div class="panel-body">
						<ul class="list-group">
							<li class="list-group-item">
								<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								<span style="color:red" class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								Food #1
							</li>
							<li class="list-group-item">
								<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								<span style="color:red" class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								Food #2
							</li>
							<li class="list-group-item">
								<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								<span style="color:red" class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								Food #3
							</li>
							<li class="list-group-item">
								<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								<span style="color:red" class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								Drink #1
							</li>
							<li class="list-group-item">
								<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								<span style="color:red" class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								Drink #2
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Table #5 Kelvin Kristianto</h3>
					</div>
					<div class="panel-body text-center" >
						<strong>Finished</strong>
					</div>
				</div>
			</div>
			
			<div class="col-md-3">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Table #6 Kelvin Kristianto</h3>
					</div>
					<div class="panel-body text-center" >
						<strong>Cancelled</strong>
					</div>
				</div>
			</div>			
		</div>	
	</div>
</body>
</html>