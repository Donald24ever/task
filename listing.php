<?php    
$conn = mysqli_connect("localhost", "root", "root", "registration");

// Check if connection established 
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

ini_set('display_errors', '1');
error_reporting(E_ALL);    
    
if(isset($_GET['id'])){    
$sql = "delete from companies where id = '".$_GET['id']."'";    
$result = mysqli_query($conn, $sql);    
}    
    
$sql = "select * from companies";    
$result = mysqli_query($conn, $sql);    
?>    
<html>    
    <body>    
        <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>Id</td>    
                <td>Company Name</td>    
                <td>First Name</td>    
                <td>Last Name</td>    
                <td>Number</td>    
                <td>Address</td>       
            </tr>    
        </table>    
    </body>    
</html>    