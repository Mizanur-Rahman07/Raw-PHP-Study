<?php include('header.php');?>
	
		<div class="wrapper fix">
			<?php include('my_menu.php');
			?>
			<div class="content-right fix">
			<table class="tacher table">
				<?php
				
				$man = array(
					'teacher-name' => 'Rezaul',
					'father-name' => 'F-Name',
					'mother-name' => 'M-Name',
					'phone-no' => '01755463308',
					'email' => 'rezaul@gmail.com',
					'gender' => 'Male',
					'age' => '24',
					);
		
				?>
				
				
				<thead>
				<tr>
					<th>Teacher Name</th>
					<th>Father name</th>
					<th>Mother name</th>
					<th>Phone no</th>
					<th>Email</th>
					<th>gender</th>
					<th>Age</th>
				</td>
				</thead>
	

				<tbody>
					<tr>
						<td><?php echo $man['teacher-name'];?></td>
						<td><?php echo $man['father-name'];?></td>
						<td><?php echo $man['mother-name'];?></td>
						<td><?php echo $man['phone-no'];?></td>
						<td><?php echo $man['email'];?></td>
						<td><?php echo $man['gender'];?></td>
						<td><?php echo $man['age'];?></td>
					
					</tr>
				</tbody>
				
				<?php
				
				$man = array(
					'teacher-name' => 'Rahman',
					'father-name' => 'Abdul',
					'mother-name' => 'Majeda',
					'phone-no' => '017551245',
					'email' => 'rahman@gmail.com',
					'gender' => 'Male',
					'age' => '30',
					);
		
				?>
				
	

				<tbody>
					<tr>
						<td><?php echo $man['teacher-name'];?></td>
						<td><?php echo $man['father-name'];?></td>
						<td><?php echo $man['mother-name'];?></td>
						<td><?php echo $man['phone-no'];?></td>
						<td><?php echo $man['email'];?></td>
						<td><?php echo $man['gender'];?></td>
						<td><?php echo $man['age'];?></td>
					
					</tr>
				</tbody>
				
				<?php
				
				$man = array(
					'teacher-name' => 'Khalek',
					'father-name' => 'Badsha',
					'mother-name' => 'Halima',
					'phone-no' => '017524576',
					'email' => 'khalek@gmail.com',
					'gender' => 'Male',
					'age' => '35',
					);
		
				?>
				
	

				<tbody>
					<tr>
						<td><?php echo $man['teacher-name'];?></td>
						<td><?php echo $man['father-name'];?></td>
						<td><?php echo $man['mother-name'];?></td>
						<td><?php echo $man['phone-no'];?></td>
						<td><?php echo $man['email'];?></td>
						<td><?php echo $man['gender'];?></td>
						<td><?php echo $man['age'];?></td>
					
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	
		<?php
	$a=10;
	if ($a==10){
		echo 'ok';
	}
	?>


<?php include('footer.php');?>












    