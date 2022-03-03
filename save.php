<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mizan";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";



			if(isset($_POST['mizan_submit'])){

				$st_name = $_POST['ent_name'];
				$father_name = $_POST['father_name'];
				$mother_name = $_POST['mother_name'];
				$gmail = $_POST['gmail'];
				$phone_number = $_POST['phone_number'];		
				$age = $_POST['age'];
			
			//print_r($_POST);
			
			$sql = "INSERT INTO connection  (student_name,father_name,mother_name,gmail,phone_Number,age) VALUES('$st_name','$father_name','$mother_name','$gmail','$phone_number','$age')";
			
			
			//if (mysqli_query($conn, $sql)) {
			//  echo "New record created successfully";
			//} else {
			//  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			//
			
			//}
		
		//}
	
?>

				<h3>Student Information</h3>
				
				<form action="" method="POST">
					
					
				
					<label for="student">Student Name :</label>
					<input type ="text" name ="ent_name" id="student" ><br><br>
					
					<label for="father">Father  Name  :</label>
					<input type ="text" name ="father_name" ><br><br>
					
					<label for="mother">Mother  Name  :</label>
					<input type ="text" name ="mother_name"><br><br>
					
					<label for="gmail">Email :</label>
					<input type ="text" name ="gmail" ><br><br>
					
					<label for="phone">Phone Number : </label>
					<input type ="text" name ="phone_number"><br><br>
					
					<label for="age">Age :</label>
					<input type ="text" name ="age" ><br><br>
					
					<input type="submit" name="mizan_submit" value="submit">
				</form>
			</div>
				
	
			
