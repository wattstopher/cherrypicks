<?php //include 'databaseUtilities.php';

function addEntry($table, $name, $cat, $product_id){

	$con = mysql_connect('cherrypicks.me', 'root', 'sexypassword!');
	echo 'connecting to the database';


	mysql_close($con);
	//Figure out category_id
	//Will have a table in the database listing them all, but for now just store it as one.
/*	$category_id = 1;	
	$con = new mysqli_connect('cherrypicks.me','root','sexypassword!');		

	$sql_statement_1 = "INSERT INTO " . $table . " (name, product_category, points, category_id, product_id)";
	$sql_statement_2 = "VALUES ('".$name."', '". $cat . "', '0', '". $category_id . "', '" . $product_id . "')";
	$sql_statement_full = $sql_statement_1 . " " . $sql_statement_2;

	if (mysqli_query($con, $sql_statement_full)){
		echo 'successfully updated entry<br>';
	{
	else(){
		echo 'ERROR: Unable to connect to the database<br>';
	}*/
}

addEntry('bestbuy', 'cat', 'cat', '1');

?>

