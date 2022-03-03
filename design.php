<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	 <link rel="stylesheet" href="design.css"> 
</head>
<body>

	<div id="wrapper">
	
		<div id="top_bar">
		<h1>This is Top bar</h1>
		
		</div>
		
		<div id="main_body">
		
				<div id="left_bar">
					<div class="content-left fix">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Contact Us</a>
							<li><a href="#">PHP</a>
									<ul class ="sub_menu"> 
									<a href="#">Php sub menu</a>
									</ul>
							</li>
							<li><a href="#">This is Website</a></li>
							<li><a href="#">Visit our Website</a></li>	
						</ul>
						
					</div>
				</div>
				
				<?php include('form.php');?>
		
		</div>
	
	
		<div id="bottom_bar">
		 <h2>This is footer</h2>
		</div>
		
	</div>
		
</body>
</html>







