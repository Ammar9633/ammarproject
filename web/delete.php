<html>
    <head>
        <title>admin page </title>
		<link rel="stylesheet" type="text/css" href="styleyy.css">
        <style type="text/css">
		
	
	
	
	.style{
		font-size: 30px;
	margin-bottom: 5px;
	color: black;
	font-weight: 400;
	max-width: 400px;
   margin: auto;
   border:3px solid #5C292B;
   background-color: #f2f2f2;
   text-align: center;
   width: 50%;
   bottom:50%;		
		
	}
	.btn{
	
	 //background-color: #f2f2f2;
	  //float: right;
 
	//position: absolute;
    //bottom	: 8px;
    // right: 16px;
     border:2px solid ;
     //color: #f2f2f2;
  //padding: 12px 16px;
  font-size: 16px;
	//cursor: pointer;
}
	</style>
        
    </head>
	

   

<div class="style">
<?php

$con= mysqli_connect("localhost", "root","");
    mysqli_select_db($con , "userreg");
	error_reporting(0);
	
	$order_No = $_GET['rn'];
	$qeury=" DELETE FROM `form` WHERE `order_No` = '$order_No' ";
	
	$data= mysqli_query($con,$qeury);

	if($data){
		
		echo nl2br(" Deleted Successfully. ");
		//header('location:delete.php');
	
	
	}
	else{
			echo " unsuccess deleted";
			//header('location:delete.php');
	

		
	}
	

?>

<br><br>
<button class="btn"><i class="fas fa-arrow-circle-left"> <a href="adminhome.php" >Back</a></i></button> <br><br>
<i class="fas fa-arrow-circle-left"></i>
 </div>

    </body>
</html>
