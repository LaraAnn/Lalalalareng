<?php

	require_once("dbconn.php");
	$db = new db();
	$db->connectdb();
	
	$id = addslashes($_POST['Id']);
	$name = addslashes($_POST['name']);
	$contact = addslashes($_POST['contact']);
	
	
	$SQL = "INSERT INTO details (id, name, contact) VALUES ('$id','$name','$contact')";
	
	$ret = mysql_query($SQL);

        if ($ret)
            header("Location:index.php");
        else
            die(mysql_error());

?>