<html>
<head>
    
</head>

<body>

     <h3>CRUD Contact Module </h3>
    <form method="POST" action="create2.php">
     <input type = 'Submit' name = 'back' id = 'back' value = 'BACK' 
        onclick = \"window.location.assign('index.php');\" > 

    <table border=2>
        <tr>
            <td>Name : </td>
            <td><input type="text" name="name" id="name" value=""></td>
        </tr>
        
        <tr>
            <td>Contact : </td>
            <td><input type="text" name="contact" id="contact" value=""></td>
        </tr>
        
        <tr>
            <td colspan="2"><center><input type="submit"></center></td>
        </tr>
            
        
    </table>
    </form>
</body>
</html>