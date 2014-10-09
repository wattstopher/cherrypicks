<?php
#**********************************
#          productInfo            *
#                                 *
# Container class for Top 10      *
#**********************************
/*class productInfo{
	public $name;
	public $id;
};*/

#***********************************
#            Add Entry             *
# adds entry to specifc table      *
#                                  *
# input:                           *
#        table (currently bestbuy) *
#        name of product           *
#        category of product       *
#***********************************
function addEntry($table, $name, $cat, $product_id){
	echo 'entering addEntry';
/*	$con = new mysqli_connect('cherrypicks.me','root','sexypassword!','cherrypick');		
	echo 'connecting to the database';
	//Figure out category_id
	//Will have a table in the database listing them all, but for now just store it as one.
	$category_id = 1;	

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
echo "HELLO!";
function writeMsg() {
  echo "Hello world!";
}

#***********************************
#            Add Point             *
# gives a product another point    *
#                                  *
# input:                           *
#        table (currently bestbuy) *
#        name of product           *
#***********************************
function addPoint($table, $name){
/*
	$con = new mysqli_connect('cherrypicks.me','root','sexypassword!','cherrypick'); 

	//First, get the old points and increment by one
	
	$points = mysqli_query($con, $sql_statement);
	$points = $points + 1;

	//Then update the entry in the database
	$sql_statement = "UPDATE " . $table . " SET points='" . $points . "' WHERE name='".$name."';";

	$points->close();
	mysqliquery($con, $sql_statement_full);*/
}

#***********************************
#        Request Top Ten           *
# Goes to the database and finds   *
# the top 10 thing                 *
#                                  * 
# input:                           *
#        table (currently bestbuy) *
#        category                  *
# output:                          *
#        a product struct array[10]*
#            =>name                *
#            =>id                  *
#***********************************
function requestTopTen($table, $category){

	$con = mysqli_connect();

	//First, grab the first ten of a certain category. Order them, put them in a data stucture.
	$sql_statement_name = "SELECT name from '" . $table .  "' WHERE product_category='" . $category . "';";
	$sql_statement_id = "SELECT id from '" . $table .  "' WHERE product_category='" . $category . "';";		

	$name_chunk = mysqliquery($con, $sql_statement_name);
	$id_chunk = mysqliquery($con, $sql_statement_id);		


	$top_ten = array(

	);


	//While we still have entries in the category
	//Grab an entry (starting at 11) 
	//If greater than any of the entries at spot X.
	//Pop off the last one, move all spots <=X down 1, insert entry at X
	//Next entry　 
}

?>
