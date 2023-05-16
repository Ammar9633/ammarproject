<?php
  $con= mysqli_connect("localhost", "root","");
    mysqli_select_db($con , "userreg");
	
	$id = $_POST["id"];
	$pass = $_POST["password"];
	
	$s = "SELECT * FROM `admintable` WHERE id = '$id' && password = '$pass'";
	$result = mysqli_query($con , $s);
	$num = mysqli_num_rows($result);
	
	
	//if($num['id'] == $id && $num['password']== $pass){
		//header('location:login.html');
		
	//}else{
		///header('location:home.php');
		
	//}
	
	
	
	
	
	
	if($num == 1){ 
     //$_SESSION['id'] = $id;	
	header('location:adminhome.php');
	} else{
	header('location:admin.html');

	}
	
	
	
	
	
	
	//if(isset($_POST["submit"])){
		//if($id == 'id' && $pass == 'password'  ){
			
				
			//	header('location:home.php');
			//}else{
		//header('location:login.html');
				
		//}
		//}
		
	

 
  
  ?>