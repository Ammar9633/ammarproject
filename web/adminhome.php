
<html>
    <head>
        <title>admin page </title>
		<link rel="stylesheet" type="text/css" href="styleyy.css">
		<script src="https://kit.fontawesome.com/3f5c042f91.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="all.min.css">
        <style type="text/css">
	.con{
	max_width:900px;
	margin:100px auto;
	width:100%;
	background-color:#F2F2F1;
	
	}
	table{
	width: 100%;
	border-collapse: collapse;
	border:2px solid #5C292B;
	
	}
	table th{
	background-color:#F7F3DD;
	color:black;
	padding:10px;
	font-size:16px;
	font-family:verdana;
	
	
	}
	table td{
	padding:12px;
	color:#000000;
	font-saize:1em;
	text-align:center;

	
	}
	table tr:nth-child(odd){
	background-color:#CCCCCC	
	}
	.btnn{
		font-color: black;
		font-style: no-underline;
	}
	.btn{
	
	 //background-color: #f2f2f2;
	  float: right;
 
	position: absolute;
    top: 8px;
     right: 16px;
     border:2px solid #5C292B;
  color: #f2f2f2;
  //padding: 12px 16px;
  font-size: 16px;
	//cursor: pointer;
}
.d{
	background-color:wight;
	
	
}
	</style>
        
    </head>
	
	<button class="btn"><i class="logout.jpg"> <a href="logout.php" >Logout</a></i></button>
    <body>
	<div class = "con">
	<table border = "1">
	<tr>
	<th>Order_no</th>
	<th>Name</th>
	<th>Email</th>
	<th>Describtion</th>
	<th>Location</th>
	<th>Time </th>
	<th>Phone</th>
	<th>Operation</th>
	  </tr>  
	  
<?php

$con= mysqli_connect("localhost", "root","");
    mysqli_select_db($con , "userreg");
	$query="SELECT * FROM `form`";
	$connect= mysqli_query($con,$query);
	
	$num=mysqli_num_rows($connect);
 $data= mysqli_fetch_assoc($connect);
 
if($num > 0){
  while($data = mysqli_fetch_assoc($connect)){
  echo"
  <p> 
  <tr>
<td>".$data['order_No']."</td>
<td>".$data['name']."</td>
<td>".$data['email']."</td>
<td>".$data['describe']."</td>
<td>".$data['location']."</td>
<td>".$data['time']."</td>
<td>".$data['phone']."</td>
<td><a class='d' href = 'delete.php?rn	=$data[order_No]'><i class = 'fas fa-trash-alt'></td></i>


</tr>
</p>


";

}
}

?>

</table>	
</div>  
    </body>
</html>














