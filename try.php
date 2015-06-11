# project01





<?php

session_start();
?>
<html lang="en">
    
       <script>
       
   function loginvalidation(){

       
        
       //alert("you've entered the ajax call");
       
      var ajaxReq = new XMLHttpRequest();
            
           ajaxReq.onreadystatechange = function(){
       
      if(ajaxReq.readyState == 4){
         
          var ajaxdisplay = document.getElementById('div2');
          ajaxdisplay.innerHTML = ajaxReq.responseText;         
   
      }}
       
         var emailid = document.getElementById('mail2').value; 
         var pass = document.getElementById('pass2').value;
         var queryString = "?pass=" + pass + "&mail=" + emailid; 
         ajaxReq.open("GET", "loginserver.php" + queryString, true);
         ajaxReq.send(null);  
               
              // alert("query string sent successfully");
       
    }
           
           
            function ajaxfunc(){
          //  alert("Hello - ajaxfunc() is being called here"); // 
        
         var ajaxReq = new XMLHttpRequest(); //1
            
    
            
          ajaxReq.onreadystatechange = function(){
              
              
              
              
              
   
    //alert("entered state change function");//6  getting displayed 4 times ... that means the state is being changed 4 times but is not reaching 4 ..what about !=4 
              
      if(ajaxReq.readyState == 4){
         
          var ajaxdisplay = document.getElementById('div1');
          ajaxdisplay.innerHTML = ajaxReq.responseText;
    
          
          //alert("If readystate running"); // not running => problem area --> state is not changing n readystate - 4 means request finished and response is ready
      }
              
            
     if(http.readyState == 0){
      //  alert("Request not initialized"); // Not running either !!    
    }
              
                      
     if(http.readyState == 1){
       // alert("Server connection not espatblished"); // Not running either !!    
    }
              
                      
     if(http.readyState == 2){
      //  alert("Request not recievd"); // Not running either !!    
    }
              
                      
     if(http.readyState == 3){
      //  alert("Request not processing"); // Not running either !!    
   
          }
              
              }  
         // alert("State not yet changed "); //2
            
         var name = document.getElementById('name').value; //3
         var queryString = "?name=" + name ; //4
            
           // alert("reached generation of query string");
            
         ajaxReq.open("GET", "searchserver.php" + queryString, true); //5
            
           // alert("reaching out to searchserver.php");  // resuming after running in state change function
            
         ajaxReq.send(null);  // 7 
            
           // alert("after sending ajaxrequest");
     }
    
    
    </script>

<head>
<link rel="stylesheet" type="text/css" href="http://127.0.0.1:9999/phpmyadmin/project01/first.css">
</head>
    

 <label id="reg"> Register here</label>     
<form id='register' action='#' method='post' accept-charsest='UTF-8'>
<label id="email"> Email</label> <input type="email" name="mail" id="mail" required> <br><br>
    <label id="passlabel">Password</label> <input type="password" name="pass" id="pass" required>
    <label id="fname"> Firstname</label> <input type="text" name="first" id="first" required>
    <label id="lname"> Lastname </label> <input type="text" name="last" id="last">
    <input type="submit" value="Submit" id="submit" name="submit">
    
    </form>
    
    
    <label id="login2"> Login! </label>
    <form id='login'method='post' accept-charset='UTF-8'>
    <label id="email"> Email</label> <input type="text" name="mail2" id="mail2" > <br><br>
    <label id="passlabel">Password</label> <input type="password" name="pass2" id="pass2">
    <input type="button"  value="Login" id="submit3" name="Submit3" onclick='loginvalidation()'>
    <div id="div2"> </div>
    </form>

    <?php


$hour=DATE("H");
echo "$hour checkpoint13";
#$time = substr($hour, 0, 2);
#echo $time;

if((intval(strval($hour))) < 12)   
{
   echo "its working  -----"; // add bakground image code
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
