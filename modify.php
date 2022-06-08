
<?php  
$conn = mysqli_connect("localhost", "root", "root", "registration");

// Check if connection established 
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}  
    ini_set('display_errors', '1');
    error_reporting(E_ALL);


    $sql = "select * from companies";   
$result = mysqli_query($conn, $sql);    
while($row = mysqli_fetch_object($result)){    
        
 ?>  
    <html>
     <body>
      <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1"> 
       <tr>  
            <td> 
                <?php echo $row->id;?>  
            </td>  
            <td><a href="company2.php?companyID=<?php echo $row->id;?>">   
           <?php echo $row->company_name;?>  
            </td>  
            <td>  
                <?php echo $row->first_name;?>  
            </td>  
            <td>  
                <?php echo $row->last_name;?>  
            </td>  
            <td>  
                <?php echo $row->number;?>  
            </td>  
            <td>  
                <?php echo $row->address;?>  
            </td>  
            <td> <a href="listing.php?id =     
                <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Delete    
            </a> | <a href="index.php?id =     
                <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Edit    
            </a> </td>  
            <tr> 
</table> 
</body>
</html>
            <?php } ?>  