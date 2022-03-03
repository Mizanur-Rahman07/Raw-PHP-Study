<?php include 'dbcon.php';?>
<?php


if(isset($_POST['submit'])){
    $class_id =$_POST['class_id'];
    $class_name =$_POST['class_name'];
    $class_section =$_POST['class_section'];
    $course_teacher =$_POST['course_teacher'];
 
    $sql = "INSERT INTO form(class_id,class_name,class_section,course_teacher)
    VALUES('$class_id','$class_name','$class_section','$course_teacher')";
    // echo "our insert is successfull"; exit;
    // print_r($_POST);exit;

    
		// insert_db($sql);
}
?>
	<?php

	print("<pre>".print_r($_POST,true)."</pre>"); //exit;
	
	if(isset($_POST['login_submit'])){
			$username = $_POST["username"];
			$password = $_POST["password"];
			
			if($username == 'admin' && $password == '123456') {
				
				   session_start();
   
   
      $_SESSION['logged_in'] = true;

      $_SESSION['username'] = $username;

	  print("<pre>".print_r($_SESSION,true)."</pre>"); //exit;

				
			  header("location:http://localhost/test/"); // Redirecting To Other Page
				// exit;
			}
	}
		
	
/*   if($_POST){
	$username = $_POST["username"];
	$password =$_POST["password"];
	
	//echo;
} */
                       
    ?>
        
        <h2>Login System in PHP</h2>
		<h4> Please fill this from to create an Account<h4>
				
				<form action="" method="POST">
					
					<label for="class">Username :</label>
					<input type ="text" name ="username" id="username" value=<?php if(isset($_POST['username'])){echo $_POST['username'];}?> ><br><br> 
					
					<label for="class">Password :</label>
					<input type ="password" name ="password" id = "password" value=<?php if(isset($_POST['password'])){echo $_POST['password'];}?> ><br><br>
					
					<label for="class">Show password :</label>
					<input type ="checkbox" name ="password" id= "password"><br><br>
					
					
					<input type ="reset" name ="reset" value="reset">

					<input type="submit" name="login_submit" value="submit">
				</form>
		
				
		