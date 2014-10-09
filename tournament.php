
<?php
  include 'keys.inc';
  include 'knockout.php';

	function initialize($prodId){
		//$prodId = htmlspecialchars($_GET['id']);
		$categoryUrl = "http://api.remix.bestbuy.com/v1/products(customerReviewAverage>2.8&categoryPath.id={$prodId})?show=sku&format=json&apiKey={$GLOBALS['BESTBUYKEY']}";
  	$categoryJson = file_get_contents($categoryUrl);
		$products = json_decode($categoryJson)->{"products"};
	
		$skuArray = array(); 
		$size = sizeOf($products);
		for($i = 0; $i < $size; $i++){
			$skuArray[$i] = $products[$i]->{"sku"};
		} 
		$productTwo_desc = "test";
		return giveMeArray($skuArray);
	}

	function reinitialize($queue, $newElement){
		reinitQueue($queue);
		$skuArray = array(
				0 => $newElement
				);
		return giveMeArray($skuArray);
	}

	function getProds($elements){
		$prodOne_url = "http://api.remix.bestbuy.com/v1/products(sku={$elements[0]})?show=name,salePrice,manufacturer,largeImage,customerReviewAverage,modelNumber,longDescriptionHtml&format=json&apiKey={$GLOBALS['BESTBUYKEY']}";
		$prodTwo_url = "http://api.remix.bestbuy.com/v1/products(sku={$elements[1]})?show=name,salePrice,manufacturer,largeImage,customerReviewAverage,modelNumber,longDescriptionHtml&format=json&apiKey={$GLOBALS['BESTBUYKEY']}";
		$prodOne_json = file_get_contents($prodOne_url);
		$prodTwo_json = file_get_contents($prodTwo_url);
		$prodOne = json_decode($prodOne_json);
		$prodTwo = json_decode($prodTwo_json);
		$prods = array(
			0 => $prodOne->{"products"}[0],
			1 => $prodTwo->{"products"}[0]
		);
		return $prods;
	}
	
	function test(){
		return "hi";
	}




?>
