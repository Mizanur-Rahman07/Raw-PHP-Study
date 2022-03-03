<?php include('header.php');?>

	
	<div class="wrapper fix">
			<?php include('my_menu.php');?>
			<div class="content-right fix">
				<table class="tacher table">
				<?php
				$student [1]= 'Borkot';
				$student [2]= 'F-Name';
				$student [3]= 'M-Name';
				$student [4]= '0146521756';
				$student [5]= 'hffy@dhsjy';
				$student [6]= 'Male';
				$student [7]= '24';
				
				?>

					<thead>
						<tr>
							<th>Teacher Name</th>
							<th>Teacher course</th>
							<th>Teacher Quality</th>
							<th>Phone Number</th>
							<th>Email</th>
							<th>Gender</th>
							<th>Age</th>
							</td>
							</thead>
							<tbody>
							<tr>
								<td><?php echo $student[1];?></td>
								<td><?php echo $student[2];?></td>
								<td><?php echo $student[3];?></td>
								<td><?php echo $student[4];?></td>
								<td><?php echo $student[5];?></td>
								<td><?php echo $student[6];?></td>
								<td><?php echo $student[7];?></td>
								
							</tr>
							</tbody>
							<thead>
							<?php
								$student [1]= 'Borkot';
								$student [2]= 'F-Name';
								$student [3]= 'M-Name';
								$student [4]= '0146521756';
								$student [5]= 'hffy@dhsjy';
								$student [6]= 'Male';
								$student [7]= '24';
							?>

								<td><?php echo $student[1];?></td>
								<td><?php echo $student[2];?></td>
								<td><?php echo $student[3];?></td>
								<td><?php echo $student[4];?></td>
								<td><?php echo $student[5];?></td>
								<td><?php echo $student[6];?></td>
								<td><?php echo $student[7];?></td>
								
							</tr>
						
							</thead>
						
						</table>
			</div>
		</div>
	
<?php include('footer.php');?>

