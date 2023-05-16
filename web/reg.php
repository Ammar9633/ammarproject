   
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>user login and reg </title>
	    <link rel="stylesheet" type="text/css" href="styleyy.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
		
		
		.style{
			font-size: 30px;
	margin-bottom: 5px;
	color: black;
	font-weight: 400;
	max-width: 400px;
   margin: auto;
   border:3px solid #5C292B;
   text-align: center;
   width: 50%;
   bottom:50%;
	
	 
  
  
    background: #F7F3DD;
 
  padding: 10px;
			
			
		}
		
		.btn{
	
	 //background-color: #f2f2f2;
	  //float: right;
 
	//position: absolute;
    //bottom	: 8px;
    // right: 16px;
     border:2px solid  ;
     //color: #f2f2f2;
  //padding: 12px 16px;
  font-size: 16px;
	//cursor: pointer;
}
		</style>
    </head>
	

	<body>
	<div = class="style" >
	<?php
  $con= mysqli_connect("localhost", "root","");
    mysqli_select_db($con , "userreg");
	
	$email = $_POST["email"];
	$name = $_POST["user"];
	$pass = $_POST["password"];
	
	$s = "select * from usertable where name = '$name'";
	$result = mysqli_query($con , $s);
	$num = mysqli_num_rows($result);
	
	if($num == 1){ 
	echo" username already taken";
	} else{
	$reg = " insert into usertable(name , password , email) values ('$name' , '$pass' , '$email')";
	mysqli_query($con , $reg);
	echo nl2br(" Welcom Mr.".$name.". \n you have ben regestered successfully. ");
	}

  ?>
  <br><br>
<button class="btn"><i class="logout.jpg"> <a href="login.html" >Login</a></i></button>  <br><br>
  </div>
  </body>
  </html>
	