<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cherry Picks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="icon" type="image/png" href="img/cp.ico">

		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script src="js/script.js" type="text/javascript"></script>
		<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/simplex/bootstrap.min.css" rel="stylesheet">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<?php
		include "tournament.php"; 
		$elements = initialize(htmlspecialchars($_GET['id']));
		$prods = getProds($elements);
		$serialQueue = urlencode(serialize($mqueue));
		//$_POST['queue'] = $serialQueue;
	?>
	<nav class="navbar navbar-inverse" role="navigation">
	  <div class="navbar-header">
	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-responsive-collapse">
				<span class="sr-only">Toggle navigation</span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>
	    <a class="navbar-brand" href="./">Cherry Picks</a>
	  </div>
	  <div class="navbar-collapse collapse" id="navbar-responsive-collapse">
	    <ul class="nav navbar-nav">
	      <li class=""><a href="#">Top Products</a></li>
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
	      <li><a href="#">About</a></li>
	    </ul>
	  </div>
	</nav>

	<div id="container" class="text-center">
	  <h1>Which do you prefer?</h1>	  
		<div class="col-sm-5 col-md-5 vertical-top">
			<h3><?php echo $prods[0]->{"name"}; ?></h3>
			<div class="panel panel-default">
			  <div class="panel-body">
		    	<img class="product" src="<?php echo $prods[0]->{"largeImage"} ?>"/>

					<div class="accordion">
					  <div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a class="accordion-toggle" data-toggle="collapse" data-parent=".accordion" href="#collapseOne">Description
					        <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i></a>
					      </h4>
					    </div>
					    <div id="collapseOne" class="panel-collapse collapse in">
					      <div class="panel-body">
					        <p><?php echo $prods[0]->{"longDescriptionHtml"}; ?></p>
					      </div>
					    </div>
					  </div>
					</div>
			  </div>
			</div>
	  </div>

		<div class="col-sm-2 col-md-2 col-equal-height vertical-center">
		<form class="form-inline" method="post" action="choose2.php">	
			<!-- <img class="cherry-arrow cherry-arrow-left" src="img/thisOneDefault.png"/> -->
			<input type="hidden" name="id" value="<?php echo $elements[0]; ?>"/>
			<input type="hidden" name="loser" value="<?php echo $elements[1]; ?>"/>
			<input type="hidden" name="queue" value="<?php echo $serialQueue; ?>"/>
			<input type="image" src="img/thisOneFinal.png" class="cherry-arrow cherry-arrow-left btTxt " />
		</form>
		<form class="form-inline" method="post" action="choose2.php">	
			<input type="hidden" name="id" value="<?php echo $elements[1]; ?>"/>
			<input type="hidden" name="loser" value="<?php echo $elements[0]; ?>"/>
			<input type="hidden" name="queue" value="<?php echo $serialQueue; ?>"/>
			<input type="image" src="img/thatOneFinal.png" class="cherry-arrow cherry-arrow-right btTxt " />
		</form>
		</div>
		<div class="col-sm-5 col-md-5 vertical-top">	 
			<h3><?php echo $prods[1]->{"name"}; ?></h3>
			<div class="panel panel-default">
			  <div class="panel-body"> 
					<img class="product" src="<?php echo $prods[1]->{"largeImage"} ?>"/>	 
				</div>
				<div class="accordion">
				  <div class="panel panel-default">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				        <a class="accordion-toggle" data-toggle="collapse" data-parent=".accordion" href="#collapseTwo">Description
				        <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i></a>
				      </h4>
				    </div>
				    <div id="collapseTwo" class="panel-collapse collapse in">
				      <div class="panel-body">
				         <p><?php echo $prods[1]->{"longDescriptionHtml"}; ?></p>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<nav class="navbar">
		  <div class="container text-right">
		    <p>Built by: <a href="https://twitter.com/j__eng">@j__eng</a>, <a href="https://twitter.com/wattstopher">@wattstopher</a>, Tina, <a href="https://twitter.com/rahuja4">@rahuja4</a>
		    <br/>At: <a href="http://hackgt.com">HackGT</a> Sept 19-21, 2014</p>
	    </div>
		</nav>
	</div>


</body>
</html>
