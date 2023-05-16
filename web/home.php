<?php
 //$con= mysqli_connect("localhost", "root","");
   // mysqli_select_db($con , "userreg");
	//$name = $_POST['name'];
	//$s = "select * from usertable where name = '$name'";
	//$result = mysqli_query($con , $s);
	//$num = mysqli_num_rows($result);
	
	

//echo" Welcom Mr.".$name ;

?>


<html>
    <head>
        <title>home page </title>
			
		<style>
#time {
	
width: 2%;	
	 
}
.btnn{
	font-size: 20px;
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

.arr{

	border:5px solid #5C292B;
	font-size: 22px;
	 //float: center;
 // width: 75%;
  margin-top: 20px;

  
   max-width: 700px;
           margin:auto;
  
    background: #F7F3DD;

  padding: 10px;
  max_width:900px;
	margin:100px auto;
	width:100%;
	position:static;
	
	
}
</style>
                <link rel="stylesheet" type="text/css" href="styley.css">

    </head>
    <body>
	
	<button class="btn"><i class="logout.jpg"> <a href="logout.php" >Logout</a></i></button>
        <h2> 	  </h2>
        
		
		
		<div class="arr">
		<form  action= "form.php" method="POST">
	    Enter Your name <br><input type="text" name="name"  placeholder="Enter your name" requierd>
		<br>Enter Your email <br><input type="email" name="email" id="email" placeholder="am@amxxxxxxxx" requierd>
		<br>Discribe Your problem <br> <textarea rows="8" name="describe"id="describe"  placeholder="discraib your prablem" requierd></textarea>
		<br>Enter Your phone number<br><input type="text" name="phone" id="phone" placeholder="Ex :05XXXXXXX" requierd>
		<br>Place your location <br><input type="text" name="location" id="location" placeholder="Dropp pin Ex: 26.39597122734934, 50.19441361119393" requierd>
		<br>Select a taime <br><br> 
		                        <input type="checkbox" name="time[]" id="time" value="7-8">7-8     am 
		                        <input type="checkbox" name="time[]" id="time" value="8-9"> 8-9    am
		                        <input type="checkbox" name="time[]" id="time" value="9-10"> 9-10   am
		                        <input type="checkbox" name="time[]" id="time" value="10-11"> 10-11  am<br><br>
	    <button type="submit"   class="btnn" > submit</button>

		</form>
		</div>
		
     </body>
</html>