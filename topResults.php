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
      <?php 
         include 'keys.inc';
         include 'knockout.php';

         $winner_skus = unserialize(urldecode(htmlspecialchars($_POST['top'])));
         $winner = htmlspecialchars($_POST['winner']);
         $second = htmlspecialchars($_POST['second']);


         $prod1 = "http://api.remix.bestbuy.com/v1/products(sku={$winner_skus[0]})?show=name,salePrice,largeImage,url&format=json&apiKey={$GLOBALS['BESTBUYKEY']}";
         $prod2 = "http://api.remix.bestbuy.com/v1/products(sku={$winner_skus[1]})?show=name,salePrice,largeImage,url&format=json&apiKey={$GLOBALS['BESTBUYKEY']}";
         $prod3 = "http://api.remix.bestbuy.com/v1/products(sku={$winner_skus[2]})?show=name,salePrice,largeImage,url&format=json&apiKey={$GLOBALS['BESTBUYKEY']}";
         $prod4 = "http://api.remix.bestbuy.com/v1/products(sku={$second})?show=name,salePrice,largeImage,url&format=json&apiKey={$GLOBALS['BESTBUYKEY']}";
         $prod5 = "http://api.remix.bestbuy.com/v1/products(sku={$winner})?show=name,salePrice,largeImage,url&format=json&apiKey={$GLOBALS['BESTBUYKEY']}";
         $prod1 = json_decode(file_get_contents($prod1));
         $prod2 = json_decode(file_get_contents($prod2));
         $prod3 = json_decode(file_get_contents($prod3));
         $prod4 = json_decode(file_get_contents($prod4));
         $prod5 = json_decode(file_get_contents($prod5));

         $winners = array(
            0 => $prod1->{"products"}[0], 
            1 => $prod2->{"products"}[0], 
            2 => $prod3->{"products"}[0], 
            3 => $prod4->{"products"}[0],
            4 => $prod5->{"products"}[0]  
         );
      ?>
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
      <div id="container" class="text-center">
      <h1>Final Results</h1>
      <!-- <div class="col-sm-6 col-md-6"> -->
         <h3>Your Top 5 Picks</h3>
         <!-- <div class="panel panel-default"> -->
         <div class="panel-body">
         <ol>
            <li>
               <div class="panel-group" id="accordion1">
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4 class="panel-title">
                           <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne"><?php echo $winners[4]->{"name"}; ?>
                           <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
                           </a>
                        </h4>
                     </div>
                     <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                           <img class="product" src="<?php echo $winners[4]->{'largeImage'}; ?>"/>
                           <p>Price: $<?php echo $winners[4]->{"salePrice"}; ?></p>
                           <a href="<?php echo $winners[4]->{'url'}; ?>">Purchase on Best Buy</a>
                        </div>
                     </div>
                  </div>
               </div>
            </li>
            <li>
               <div class="panel-group" id="accordion2">
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4 class="panel-title">
                           <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"><?php echo $winners[3]->{"name"}; ?>
                           <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i></a>
                        </h4>
                     </div>
                     <div id="collapseTwo" class="panel-collapse collapse in">
                        <div class="panel-body">
                           <img class="product" src="<?php echo $winners[3]->{'largeImage'}; ?>"/>
                           <p>Price: $<?php echo $winners[3]->{"salePrice"}; ?></p>
                           <a href="<?php echo $winners[3]->{'url'} ?>">Purchase on Best Buy</a>
                        </div>
                     </div>
                  </div>
               </div>
            </li>
            <li>
               <div class="panel-group" id="accordion3">
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4 class="panel-title">
                           <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree"><?php echo $winners[2]->{"name"}; ?>
                           <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i></a>
                        </h4>
                     </div>
                     <div id="collapseThree" class="panel-collapse collapse in">
                        <div class="panel-body">
                           <img class="product" src="<?php echo $winners[2]->{'largeImage'}; ?>"/>
                           <p>Price: $<?php echo $winners[2]->{"salePrice"}; ?></p>
                           <a href="<?php echo $winners[2]->{'url'}; ?>">Purchase on Best Buy</a>
                        </div>
                     </div>
                  </div>
               </div>
            </li>
            <li>
               <div class="panel-group" id="accordion4">
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4 class="panel-title">
                           <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="#collapseFour"><?php echo $winners[1]->{"name"}; ?>
                           <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i></a>
                        </h4>
                     </div>
                     <div id="collapseFour" class="panel-collapse collapse in">
                        <div class="panel-body">
                           <img class="product" src="<?php echo $winners[1]->{'largeImage'}; ?>"/>
                           <p>Price: $<?php echo $winners[1]->{"salePrice"}; ?></p>
                           <a href="<?php echo $winners[1]->{"url"} ?>">Purchase on Best Buy</a>
                        </div>
                     </div>
                  </div>
               </div>
            </li>
            <li>
               <div class="panel-group" id="accordion5">
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h4 class="panel-title">
                           <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion5" href="#collapseFive"><?php echo $winners[0]->{"name"}; ?>
                           <i class="indicator glyphicon glyphicon-chevron-down  pull-right"></i></a>
                        </h4>
                     </div>
                     <div id="collapseFive" class="panel-collapse collapse in">
                        <div class="panel-body">
                           <img class="product" src="<?php echo $winners[0]->{'largeImage'}; ?>"/>
                           <p>Price: $<?php echo $winners[0]->{"salePrice"}; ?></p>
                           <a href="<?php echo $winners[0]->{"url"} ?>">Purchase on Best Buy</a>
                        </div>
                     </div>
                  </div>
               </div>
            </li>
         </ol>
         <!-- </div> -->
         <!-- </div> -->
         <!-- </div> -->
         <!-- <div class="col-sm-6 col-md-6">
            <h3>Overall Top 5 Picks</h3>
            <div class="panel panel-default">
               <div class="panel-body">
                  <ol>
                     <li>Sorry, not enough info yet :[</li>
                  </ol>
               </div>
            </div>
         </div> -->
      </div>
      <div class="container">
         <nav class="navbar">
            <div class="container text-right">
               <p>Built by: <a href="https://twitter.com/j__eng">@j__eng</a>, <a href="https://twitter.com/wattstopher">@wattstopher</a>, Tina, <a href="https://twitter.com/rahuja4">@rahuja4</a>
                  <br/>At: <a href="http://hackgt.com">HackGT</a> Sept 19-21, 2014
               </p>
            </div>
         </nav>
      </div>
   </body>
</html>
