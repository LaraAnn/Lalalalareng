<?php
    require_once("dbconn.php");
    $db = new db();
    $db->connectdb();
    
    $name = $_POST['name'];
    $contact = $_POST ['contact'];
       
    
    session_start();
    $id = $_SESSION['checkbox'];
    $edit = implode(",",$id);
    $SQL = "UPDATE details set name= '$name', contact= '$contact' WHERE id=$edit";
    
    $ret = mysql_query($SQL);
    if($ret)
        header("location:index.php");
    else
             die(mysql_error());
?>