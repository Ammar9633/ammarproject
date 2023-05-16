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


       $name = $_POST["name"];
	  
	   $email = $_POST["email"];
	   $describe = $_POST["describe"];
	   $location = $_POST["location"];	
	   $phone = $_POST["phone"];	
	    $time = $_POST["time"];
		$check = implode(",", $time);

	   
	     $con = mysqli_connect("localhost", "root","");
          mysqli_select_db($con , "userreg");
		 
		
		 
        
			 
		 
		 if(!empty($name) && !empty($email) && !empty($describe) && !empty($location) && !empty($time) && !empty($phone)){
       $sql = "INSERT INTO `form`(`name` , `email`, `describe`, `location`, `time`, `phone`) 
	   VALUES ('$name' ,'$email','$describe','$location','$check','$phone')";
	   echo "Thnk you Mr.    ".$name;
	   echo "<br/> Form submitted successfully <br/>";
	   
		
		//$number = mysqli_query($con , $query);
		
		//$total = mysqli_num_rows($number);
		//$res = mysqli_fetch_assoc($number);
      //  echo $res['order_No'];		
		//if(mysqli_num_rows($number) ){
		//while($row = mysqli_fetch_assoc($number)){
				
		//}
		//echo  "Your Order number is : ". $row['order_No'];
		//}
		
	//	$total = mysqli_num_rows($number);
		//$re = mysqli_fetch_assoc($number);
		//echo  "Your Order number is : ". $re['order_No'];
	  
	   //echo "<br/> Your order number ";
       $result = mysqli_query($con , $sql);
		// $s = "select * from form where name = '$name'";
	    //$result = mysqli_query($con , $s);
	    //$num = mysqli_num_rows($result);
		 }	
	   else{
		   echo "All filed are requierd";
		   die();
	   }
	     
		 $query1 = "select count(*) from `form`";
	   $query = "select * from `form` Order by order_No DESC LIMIT 1";
	   $sqll = mysqli_query($con , $query);
	   $print =  mysqli_fetch_row($sqll);
		 echo "<br/> Your order number : ".$print[0];
		//$sql = " insert into form(name,email,describe,location,time,phone) values('$name' , '$email' , '$describe' , '$location' , '$time' , '$phone')";
	   
	   
	   
	  
	  //if($result){
	    //  echo "Form submitted successfully";
	  //}
	 //else{
       // echo "not submitted";
	  //}
	  // $text = $name. " " .$email ; 
	   
	   //fwrite($data_file,$text );
	   //fclose($data_file);
	  //$to = "adminhome.html";
	   
	  // $subject = "mail";

	  // $text = "name =" .$name ."\n\r email = ".$email
	   
	   
	   //if(isset($_POST['submit'])){	 // the post form has been submitted
	   //echo "name :".$_POST['name'].'<br />';
	   //echo "email :".$_POST['email'].'<br />';
	   //echo "dec :".$_POST['dec'].'<br />';
	   //echo "location :".$_POST['location'].'<br />';
	   //echo "time :".$_POST['time'];
	   //header('adminhome.html');
		
	   
?>
<br><br>
<button class="btn"><i class="logout.jpg"> <a href="login.html" >Logout</a></i></button>  <br><br>
</div>
  </body>
  </html>