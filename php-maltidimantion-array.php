<?php include('header.php');

	$man['teacher-name']='Jasim';
	$man['father-name']='Kawsar';
	$man['mother-name']='Rokeya';
	$man['phone-no']='01745769245';
	$man['email']='jasim@gmail.com';
	$man['gender']='male';
	$man['age']='21';
		
	$man1['teacher-name']='Sabina';
	$man1['father-name']='Rezaul';
	$man1['mother-name']='jorina';
	$man1['phone-no']='Bola jabe na vai ';
	$man1['email']='sabina@gmail.com ';
	$man1['gender']='female';
	$man1['age']='17';

	$man2['teacher-name']='Badsha';
	$man2['father-name']='Rahmat';
	$man2['mother-name']='doli';
	$man2['phone-no']='012464796 ';
	$man2['email']='badsha@gmail.com ';
	$man2['gender']='male';
	$man2['age']='35';

	$man3['teacher-name']='Jasim';
	$man3['father-name']='Kawsar';
	$man3['mother-name']='Rokeya';
	$man3['phone-no']='01745769245';
	$man3['email']='jasim@gmail.com';
	$man3['gender']='male';
	$man3['age']='21';
		
	$man4['teacher-name']='Sabina';
	$man4['father-name']='Rezaul';
	$man4['mother-name']='jorina';
	$man4['phone-no']='Bola jabe na vai ';
	$man4['email']='sabina@gmail.com ';
	$man4['gender']='female';
	$man4['age']='17';

	$man5['teacher-name']='Badsha';
	$man5['father-name']='Rahmat';
	$man5['mother-name']='doli';
	$man5['phone-no']='012464796 ';
	$man5['email']='badsha@gmail.com ';
	$man5['gender']='male';
	$man5['age']='35';
		
$mizan=array($man,$man1,$man2,$man3,$man4,$man5);

?>



		<div class="wrapper fix">
			<?php include('my_menu.php');?>
			<div class="content-right fix">
				<table class="tacher table">
				
				<thead>
					<tr>
						<th>Teacher Name</th>
						<th>Father name</th>
						<th>Mother name</th>
						<th>Phone no</th>
						<th>Email</th>
						<th>gender</th>
						<th>Age</th>
					</tr>
				</thead>
								

				<tbody>
				<?php foreach ($mizan as $valu) { 
					?>
							<tr>
								<td><?php echo $valu['teacher-name'];?></td>
								<td><?php echo $valu['father-name'];?></td>
								<td><?php echo $valu['mother-name'];?></td>
								<td><?php echo $valu['phone-no'];?></td>
								<td><?php echo $valu['email'];?></td>
								<td><?php echo $valu['gender'];?></td>
								<td><?php echo $valu['age'];?></td>
							</tr>
					<?php
				} ?>
					

				</tbody>
				
			</table>
			</div>
		</div>
	
			
		
		

			

		
		
				
	
						
					

<?php include('footer.php');?>












    










    