
<!DOCTYPE html>
<html lang="en">
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
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Veloxitis</a>
        </div>
      </div>
    </nav>

    <div class="container-fluid" style="margin-top: 30px;">
      <div class="row">
        <div class="col-xs-12 main">
        	<h1 class="page-header">Display</h1>
        	<div class="center" style="margin: 0 auto;">
        		<div id="tachimetro" class="tachimetro"></div>
        	</div>
<!--           <h2 class="sub-header">Section title</h2> -->
<!--           <div class="table-responsive"> -->
<!--             <table class="table table-striped"> -->
<!--               <thead> -->
<!--                 <tr> -->
<!--                   <th>#Id</th> -->
<!--                   <th>Velocit&agrave; rilevata</th> -->
<!--                   <th>Data</th> -->
<!--                 </tr> -->
<!--               </thead> -->
<!--               <tbody> -->
<!--                 <tr> -->
<!--                   <td>1</td> -->
<!--                   <td>150 km / h</td> -->
<!--                   <td>18/06/2016</td> -->
<!--                 </tr> -->
<!--               </tbody> -->
<!--             </table> -->
<!--           </div> -->
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
