<?php


define ('DB_SERVER', $databases['host']);
define ('DB_USERNAME', $databases['username']);
define ('DB_PASSWORD', $databases['password']);
define ('DB_DATABASE', $databases['database']);


 
	$mysqli = new mysqli (DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);


	if (mysqli_connect_errno()) {
  		trigger_error ('DB Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
  		exit ('Sorry!  We were unable to connect to the database.  Please try again.');
	}

	function db_update ($table, $array, $column, $id, $add='') {
  		global $mysqli;
  		$unquote = array('NULL', 'NOW()');
  		foreach ($array as $key => $value) {
    		if (is_numeric($value) || in_array($value, $unquote)) {
      		$data[] = '`' . $key . '`=' . $value;
    		} else {
      		$data[] = '`' . $key . "`='{$value}'";
    		}
  		} // end of foreach 
  		$id = (is_numeric($id)) ? $id : "'{$id}'";
  		db_query ("UPDATE `{$table}` SET " . implode(', ', $data) . " WHERE `{$column}`={$id} {$add}");
  		return $mysqli->affected_rows;
	} // end of db_update function
 
 
	function db_insert ($table, $array) {
  		global $mysqli;
  		$unquote = array('NULL', 'NOW()');
  		foreach ($array as $key => $value) {
    		$columns[] = $key;
    		if (is_numeric($value) || in_array($value, $unquote)) {
      		$data[] = $value;
    		} else {
      		$data[] = "'{$value}'";
    		}
  		}  // end of foreach   		 		
  		db_query ('INSERT INTO `' . $table . '` (`' . implode('`, `', $columns) . '`) VALUES (' . implode(', ', $data) . ')');
 		 return $mysqli->insert_id;
	} // end of db_insert function


	function escape_data ($data) {
  		global $mysqli;
  		if (get_magic_quotes_gpc()) $data = stripslashes($data);
  		return $mysqli->real_escape_string(trim($data));
	} // end of escape_data function


	function db_query ($query) {
  		global $mysqli;
  		if (!$result = $mysqli->query ($query)) trigger_error("Query: {$query}<br />Error: {$mysqli->error}");
  		return $result;
	} // end of db_query function   


/*

$result = db_query ("SELECT data FROM table WHERE column='{$value}'"); 
while (list($data) = $result->fetch_row()) { 
  $html .= $data . '<br />'; 
}


$username = escape_data ("Hacker'); DROP TABLE users;--");



$insert = array(); 
$insert['name'] = 'username'; 
$insert['password'] = 'password'; 
$insert['email'] = 'email@address.com'; 
$userid = db_insert('user', $insert);



$update = array(); 
$update['confirmed'] = 'Y'; 
db_update ('users', $update, 'user_id', 1);


*/




















?> 