<?php
	global $mqueue;
	$mqueue = new SplQueue();


	function giveMeArray($marray){
		
	global $mqueue;
		//Put in a dynamic queue
		foreach ($marray as $product){
			$mqueue->enqueue($product);
		}

		//Return one or two (depending on how much is left)
		if ($mqueue->count() > 1){
			$elements = array (
				0 => $mqueue->dequeue(),
				1 => $mqueue->dequeue()
			);
		}	
		else{
			$elements = array(
				0 => $mqueue->dequeue()
			);
		}
		return $elements;
	}

	function reinitQueue($newQueue){
		global $mqueue;
		while($newQueue->count() > 0){
                        $mqueue->enqueue($newQueue->dequeue());
                }
	}

	function sendWinners($thqueue){
		//destroy the current queue
		reinitQueue($thqueue);
		//replace it with our new queue		
	}

	function getWinners(){
		//return the new queue to topResults.php
		global $mqueue;
		return $mqueue;
	}

//Take in array of 10, put in queue
//Return first two elements from queue
  //if only one element left, return the one
//Take in one element, add to end of queue

?>
