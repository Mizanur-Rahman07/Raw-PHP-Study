<?php include('header.php');?>
 


		<div class="wrapper fix">
			<?php include('my_menu.php');?>
			
			<div class="content-right fix">
			
		<table class="tacher table">
		<tbody>
		
			<thead>
				<tr>
				<th>Teacher Name</th>
				<th>Father Name</th>
				<th>Mother name</th>
				<th>Phone Number</th>
				<th>Email</th>
				<th>Gender</th>
				<th>Age</th>
				</td>
							</thead>
				<?php
							
							
							$student ['teacher-name']= 'Rahmat';
							$student ['father-name']= 'F-Name';
							$student ['mother-name']= 'M-Name';
							$student ['phone-number']= '0146521756';
							$student ['email']= 'rahmat@dhsjy';
							$student ['gendere']= 'Male';
							$student ['age']= '24';
							
							$list['karim']=$student;
							
				?>

					
						<tbody>
							<tr>
							<td><?php echo 	$list['karim']['teacher-name'];?></td>
							<td><?php echo	$list['karim']['father-name'];?></td>
							<td><?php echo 	$list['karim']['mother-name'];?></td>
							<td><?php echo	$list['karim']['phone-number'];?></td>
							<td><?php echo 	$list['karim']['email'];?></td>                                                                                                                                                                                                                                               
							<td><?php echo 	$list['karim']['gendere'];?></td>
							<td><?php echo 	$list['karim']['age'];?></td>
											
							</tr>
							</tbody>
							<thead>
						<?php
						
								$student ['teacher-name']= 'Nozrul';
								$student ['father-name']= 'F-Name';
								$student ['mother-name']= 'M-Name';
								$student ['phone-number']= '0146521756';
								$student ['email']= 'nozrul@dhsjy';
								$student ['gendere']= 'Male';
								$student ['age']= '26';
								
								$list['Rahim']=$student;
						?>

								<td><?php echo $list['Rahim']['teacher-name'];?></td>
								<td><?php echo $list['Rahim']['father-name'];?></td>
								<td><?php echo $list['Rahim']['mother-name'];?></td>
								<td><?php echo $list['Rahim']['phone-number'];?></td>
								<td><?php echo $list['Rahim']['email'];?></td>
								<td><?php echo $list['Rahim']['gendere'];?></td>
								<td><?php echo $list['Rahim']['age'];?></td>
								
							</tr>
							</tbody>
							</thead>
						
						</table>
					</div>
		
			</div>
	
<?php include('footer.php');?>












    