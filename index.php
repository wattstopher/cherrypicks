<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cherry Picks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="image/png" href="img/cp.ico">

		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script src="js/typeahead.jquery.js" type="text/javascript"></script>
		<script src="js/autocomplete.js" type="text/javascript"></script>
		<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/simplex/bootstrap.min.css" rel="stylesheet">
		 <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/style.css">
</head>

<body>
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
	      <li><a href="about.php">About</a></li>
	    </ul>
	  </div>
	</nav>


	<div class="page-header text-center">
		<img id="logo" src="img/cherryPicks.png"/>
		<h2><small>Let us find what you're looking for</small></h2>
	</div>

	<div class="jumbotron text-center">
	  <h2>What type of product?</h2>	  
		<div class="">
			<div id="cat-input" >
				<form class="form-inline" method="get" action="choose.php">
				 <div class="">
				    <div class="input-group col-sm-8 col-md-6">
							<input type="hidden" name="id" id="cat-id" class="form-control"/>
				      <input type="text" id="cat-name" class="form-control" placeholder="Pick a Best Buy category"/>
				      <span class="input-group-btn input-group-btn-edit">
				        <input id="submit-button" class="btn btn-default" type="submit" value="Go!"/>
				      </span>    
				    </div>
				  </div>
        </form>
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
