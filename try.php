# project01

<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="http://127.0.0.1:9999/phpmyadmin/project01/first.css">
</head>

 <label id="register"> Register here</label>     
<form id='login' action='#' method='post' accept-charset='UTF-8'>
<label id="email"> Email</label> <input type="email" name="mail" id="mail" required> <br><br>
    <label id="passlabel">Password</label> <input type="password" name="pass" id="pass" required>
    <label id="fname"> Firstname</label> <input type="text" name="first" id="first" required>
    <label id="lname"> Lastname </label> <input type="text" name="last" id="last">
    <input type="submit" value="Submit" id="submit" name="submit">
    
    </form>
    <?php

$hour=DATE("H");
echo "$hour";
#$time = substr($hour, 0, 2);
#echo $time;

if((intval(strval($hour))) < 12)   
{
   echo "its working"; // add bakground image code
}


$link = mysqli_connect("localhost", "root", "password", "project1");

$fname = $_POST['first'];
$lname = $_POST['last'];
$email = $_POST['mail'];
$password= $_POST['pass'];



$sql = "INSERT INTO userdata (email, Lastname, Firstname, Password) VALUES ('$email', '$lname', '$fname', '$password')";
$res=mysqli_query($link, $sql);


if($res){
echo '<script language="javascript">';
echo 'alert("Records Added Succesfully :)")';
echo '</script>';
}
 
// close connection
mysqli_close($link);

?>
</body>
</html>   
