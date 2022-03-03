<?php
			session_start();
			print("<pre>".print_r($_POST,true)."</pre>"); //exit;
			print("<pre>".print_r($_SESSION,true)."</pre>"); //exit;

			if(!isset($_SESSION['logged_in'])) {

				header("location:http://localhost/test/form.php"); // Redirecting To Other Page

			}

			?>
		
		<?php include('header.php');?>
		<div class="wrapper fix">
			
			<?php include('my_menu.php');?>

			
   
		
			
			<div class="content-right fix">
				<div class="mizan">
					<div class="jamal"><h2>Artical One</h2>
					</div>
					
					<p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
					
					</p>
				
				</div>
				
				
				<div class="mizan">
					<h2 class="jamal">Artical Two</h2>
					
					<p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
					
					</p>
				
				</div>
				
			</div>
				
		</div>
		<?php include('footer.php');?>
			
