
<?php
	
	require_once("dbconn.php");
    $db = new db();
    $db->connectdb();
    
    
    $SQL = "SELECT * FROM details";
    $ret = mysql_query($SQL);

        if ($ret)
        {

        	echo "<h3> CRUD Contact Module </h3>";
		    echo "<form name='fromview' method='POST' action='actions.php'>";
            
            echo "&nbsp; &nbsp; &nbsp; <table border='2' width='50%'>";
			echo " <br> <a href =' create.php '> Create new Contact </a>";
			echo "<br> <br>";
          	
            
		    echo "<th> Select </th> <th> Name &nbsp; </th> <th> Contact Details &nbsp;</th> ";


         while ($row = mysql_fetch_assoc($ret)) 
         {
            echo "<tr>";
			
			echo "<td> <input type = 'checkbox' value = $row[id] name = 'checkbox[]' id ='checkbox'> </td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['contact']."</td>";
                                                                        
          
            echo "</tr>";

        }
		
		   echo "</table>";
		   echo "<br> ";
		   echo "  <input type = 'submit' name = 'submit' value = 'DELETE SELECTED' > &nbsp; &nbsp;";
 		   echo "  <input type = 'submit' name = 'submit' value = 'DELETEALL' > &nbsp; &nbsp;";  
 		   echo "  <input type = 'submit' name = 'submit' value = 'EDIT'> </td>";     
		   
	       echo "</form>";

       
          
        }
        else
            die(mysql_error());
    
?>
