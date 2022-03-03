
		<?php include('header.php');?>
		
		<?php 
				
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "mizan";
		
		//https://www.w3schools.com/php/php_mysql_insert.asp
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
		//else{echo 'connected success';}
		
		if(isset($_POST['submit'])){
			$teacher_name = $_POST['teacher_name'];
			$teacher_course = $_POST['teacher_course'];
			$teacher_quality = $_POST['teacher_quality'];
			$phone_number = $_POST['phone_number'];
			$gmail = $_POST['gmail']; 
			$gender = $_POST['gender'];
			$age = $_POST['age'];
				
			$sql = "INSERT INTO teacher (teacher_name,teacher_course,teacher_quality,phone_number,gmail,gender,age) VALUES('$teacher_name','$teacher_course','$teacher_quality','$phone_number','$gmail','$gender','$age')";
		
				if ($conn->query($sql) === TRUE) {
					
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
			
			$conn->close();
		}
		
		
		?>
		
		
		
		<div class="wrapper fix">
			<?php include('my_menu.php');?>
			
			<div class="content-right fix">
			<?php
		
		print("<pre>".print_r($_POST,true)."</pre>"); //exit;
		
		?>
				<div class="M">
				<h2> Add-Teacher</h2>
				</div>
				<h3>Teacher Information</h3>
				<form action="" method="POST">

					<label for="teacher">Teacher Name :</label>
					<input type ="text" name ="teacher_name" id="teacher" value="<?php if(isset($_POST['teacher_name'])){echo $_POST['teacher_name'];}?>" ></label><br><br>
					
					<label for="teacher">Teacher Course:</label>
					<input value="<?php if(isset($_POST['teacher_course'])){echo $_POST['teacher_course'];}?>" type ="text" name ="teacher_course" id="teacher_course"></label><br><br>
					
					<label for="teacher">Teacher Quality  :</label>
					<input value="<?php if(isset($_POST['teacher_quality'])){echo $_POST['teacher_quality'];}?>" type ="text" name ="teacher_quality" id="teacher_quality"></label><br><br>
					
					<label for="phone">Phone Number : </label>
					<input value="<?php if(isset($_POST['phone_number'])){echo $_POST['phone_number'];}?>" type ="text" name ="phone_number" id="phone_number"></label><br><br>
					
					<label for="email">Gmail :</label>
					<input value="<?php if(isset($_POST['gmail'])){echo $_POST['gmail'];}?>" type ="text" name ="gmail" id="gmail"></label><br><br>
					
					<label for="gender">Gender :</label>
					<input value="<?php if(isset($_POST['gender'])){echo $_POST['gender'];}?>" type ="text" name ="gender" id="gender"></label><br><br>
					
					<label for="age">Age :</label>
					<input value="<?php if(isset($_POST['age'])){echo $_POST['age'];}?>" type ="text" name ="age" id="age"></label><br><br>
					
					<input type="submit" name="submit" value="submit">
				</form>
			</div>
				
		</div>
		<?php include('footer.php');?>
			
