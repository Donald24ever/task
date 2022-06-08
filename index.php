<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);
require_once('connection.php');
?>
<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
.container {  
    padding: 50px;  
  background-color: lightblue;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
</style>  
</head>  
<body>
<?php
if(isset($_POST['create'])){
    $companyname    = $_POST['company_name'];
    $firstname      = $_POST['first_name'];
    $lastname       = $_POST['last_name'];
    $number         = $_POST['number'];
    $address        = $_POST['address'];
    
    $sql = "INSERT INTO companies (company_name, first_name, last_name, number, address ) VALUES(?,?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$companyname, $firstname, $lastname, $number, $address]);
    if($result){
        echo 'Successfully saved.';
    }
  }
?>
<form action="index.php" method="POST">  
  <div class="container">  
  <center>  <h1> Client Registration Details</h1> </center>  
  <hr>  
  <label> Company Name </label>   
<input type="text" name="company_name" placeholder= "Companyname" size="15" required />   
<label> FirstName: </label>   
<input type="text" name="first_name" placeholder="firstname" size="15" required />   
<label> Lastname: </label>    
<input type="text" name="last_name" placeholder="Lastname" size="15"required />   
<label>   
Phone :  
</label>  
<input type="text" name="country code" placeholder="Country Code"  value="+44" size="2"/>   
<input type="text" name="number" placeholder="phone no." size="10"/ required>   
Current Address :  
<textarea cols="80" rows="5" name="address" placeholder="Current Address" value="address" required>  
</textarea>  
    <button type="submit" name="create" class="registerbtn">Register</button>    
</form>  
</body>  
</html>  