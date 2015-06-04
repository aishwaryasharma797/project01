<html>
   
<?php

$link = mysqli_connect("localhost", "root", "password", "project1");

$name=$_GET['name'];

$sql_query3="SELECT email, Firstname, Lastname from userdata WHERE Firstname LIKE '$name' OR Lastname LIKE '$name' OR email LIKE '%$name%'";
$query_result = $link->query($sql_query3);

#(if !query_result)
#{ echo "query did not run";
#}


while($row = $query_result->fetch_assoc()) {
   
    echo " <br> </br>email: " . $row["email"];
    echo "     " . "Name: " . $row["Firstname"] . " " . $row["Lastname"];

   
    
    
    }


$link->close();
 ?>
    
    
</html>
