
		<?php include('dbcon.php');?>
		<?php include('header.php');?>
		<?php
		
		
	
		

		//else{echo 'connected success';}
		
		if(isset($_POST['mizan_submit'])){
			$stu_name = $_POST['stu_name'];
			$f_name = $_POST['f_name'];
			$m_name = $_POST['m_name'];
			$phone_num = $_POST['phone_num'];
			$email = $_POST['email']; 
			$gender = $_POST['gender'];
			$age = $_POST['age'];
			
			$sql = "INSERT INTO student (stu_name,f_name,m_name,phone_num,email,gender,age) VALUES('$stu_name','$f_name','$m_name','$phone_num','$email','$gender','$age')";
		
		insert_db($sql);
		
		}
		
		

		?>
		
		
		<div class="wrapper fix">
			<?php include('my_menu.php');?>
			
			<div class="content-right fix">
							<?php
		
		print("<pre>".print_r($_POST,true)."</pre>"); //exit;
		
		?>
				<div class="M">
				<h2> Add-Student</h2>
				</div>
				<h3>Student Information</h3>
				<form action="" method="POST">
					<label for="student">Student Name :</label>
					<input value="<?php if(isset($_POST['stu_name'])){echo $_POST['stu_name'];}?>" type ="text" name ="stu_name" id="student"><br><br>
					
					<label for="father">Father  Name  :</label>
					<input value="<?php if(isset($_POST['f_name'])){echo $_POST['f_name'];}?>" type ="text" name ="f_name" id="student"><br><br>
					
					<label for="mother">Mother  Name  :</label>
					<input value="<?php if(isset($_POST['m_name'])){echo $_POST['m_name'];}?>" type ="text" name ="m_name" id="student"><br><br>
					
					<label for="phone">Phone Number : </label>
					<input value="<?php if(isset($_POST['phone_num'])){echo $_POST['phone_num'];}?>" type ="text" name ="phone_num" id="student"><br><br>
					
					<label for="email">Email :</label>
					<input value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>" type ="text" name ="email" id="student"><br><br>
					
					<label for="gender">Gender :</label>
						<input type="hidden" name="gender" value=""><br>
						<input type="radio" name="gender" value="Male">Male<br>
					  	<input type="radio" name="gender" value="Female">Female<br>
					  	<input type="radio" name="gender" value="Other">Other<br><br>
					
					<label for="age">Age :</label>
					<input value="<?php if(isset($_POST['age'])){echo $_POST['age'];}?>"  type ="text" name ="age" id="student"><br><br>
					
					<input type="submit" name="mizan_submit" value="submit">
				</form>
			</div>
				
		</div>
		<?php include('footer.php');?>
			
