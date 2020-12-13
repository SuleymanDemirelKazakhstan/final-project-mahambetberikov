<?php

	$mysqli = new mysqli('127.0.0.1', "root", "root",'laptops');
	$myArray = array();
	if ($a = $mysqli->query("SELECT * FROM gallery")) {
	    while($row = $a->fetch_array(MYSQLI_ASSOC)) {
	        $myArray[] = $row;
	    }
	    $arr = json_encode($myArray);
	    echo $arr;
	}
?>