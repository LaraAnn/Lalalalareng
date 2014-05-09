<?php

	require_once("dbconn.php");
	$db = new db();
	$db -> connectdb();
	
	function delete()
		{
		
		$id = $_POST['checkbox'];
		//print_r ($id);
		
	
		echo $idDelete = implode (",",$id);
		$SQL = "DELETE FROM details WHERE id in ($idDelete)";
		$ret = mysql_query ($SQL);
	
		if (ret)
			header("location:index.php");
		else
			die (mysql_error());
		}
		
	function deleteall()
		{
		$id = $_POST['checkbox'];
		//print_r ($id);
	
		$idDelete = implode (",",$id);
		$SQL = "DELETE FROM details ";
		$ret = mysql_query ($SQL);
	
		if (ret)
			header("location:index.php");
		else
			die (mysql_error());
		}
		
	
		
		function edit()
		{
			$id = $_POST['checkbox'];
			//print_r($id);
			session_start();
			$_SESSION['checkbox'] = $_POST['checkbox'];
			
			 $edit = implode(",",$id);
			 $SQL = "SELECT * from details WHERE id =$edit";
			
			
			
			$ret = mysql_query($SQL);
	
			if($ret)
				$row = mysql_fetch_assoc($ret);
			else
				die(mysql_error());
				
				
		echo"<html>";
		
		echo "<td colspan = 1>  <input type = 'Submit' name = 'btnAddcategory' id = 'btnAddcategory' value = 'BACK' 
		onclick = \"window.location.assign('viewall.php');\" >  </td>";
		
		echo "<form method = 'POST' action = 'update.php' >";
		echo "<table border =2>";
		
		
		
		echo "<tr>";
		echo "<td colspan = 8> <h4> <center> Edit Record </center></h4> </td>";
		echo "</tr>";
	
		
		
		echo"<tr>";
		echo"<td> name: </td>";
		echo"<td> <input type = 'text' name = 'name' id = 'name' value = '{$row['name']}'> </td>";
		echo"</tr>";
		
		echo"<tr>";
		echo"<td> contact: </td>";
		echo"	<td> <input type = 'text' name = 'contact' id = 'contact' value = '{$row['contact']}'> </td>";
		echo"</tr>";
		
		
		
		echo"<tr>";
		echo"<td colspan = 2> <center> <input type = 'Submit' name = 'save' id = 'save' value = 'SAVE'> </center> </td>";
		echo"</tr>";
		echo"</table>";
		echo"</form>";
		echo"</body>";
		echo"</html>";
		}	
		
		
	
		
	switch ($_POST['submit'])
	{
		case "DELETE SELECTED":
		delete();
		break;
		
		case "DELETEALL":
		deleteall();
		break;
		
			
		case "EDIT":
		edit();
		break;
		
		
	}
	?>