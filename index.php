<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Pannello di controllo Arduino veloxitis project">
    <meta name="author" content="Davide Sirchia">

    <title>Pannello di controllo Veloxitis</title>

    <!-- Bootstrap core CSS -->
    <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Speedometer CSS -->
    <link href="libs/speedometer/css/speedometer.css" rel="stylesheet">
    
    <!-- style CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Veloxitis</a>
        </div>
      </div>
    </nav>

    <div class="container-fluid" style="margin-top: 30px;">
        <div class="main">
        	<h1 class="page-header">Display</h1>
        	<div class="center col-xs-12 col-sm-6 col-md-5" style="margin: 0 auto;">
        		<div id="tachimetro" class="tachimetro"></div>
        	</div>
        	<div class="col-xs-12 col-sm-6 col-md-7">
					<div class="table-responsive">
						<span class="cruscotto"></span>
						<table class="table">
							<thead>
								<tr>
									<th>Tempo Sensore 1</th>
									<th>Tempo Sensore 2</th>
									<th>Velocit&agrave;</th>
									<th>Data</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td id="time_1">0</td>
									<td id="time_2">0</td>
									<td id="speed">0</td>
									<td id="date">0</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    <!-- Speedometer -->
    <script src="libs/speedometer/js/speedometer.js"></script>
    
    <script src="js/script.js"></script>
    
  </body>
</html>