<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/login_style.css" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<?php
			/* Σύνδεση και ταυτοποίηση του χρήστη */
			include('core/database/connect.php');
			
			// Έλεγχος αν έχουν οριστεί
			if ( (isset($_POST['username'])) && ($_POST['password']) ) {
				// έλεγχος αν είναι η όχι κενά
				if( !empty($_POST['username']) && !empty($_POST['password']) ) {
					$username = $_POST['username'];
					$password = md5( $_POST['password'] );
					
					//ευάλωτο με sql-injection
					$sql = mysql_query(" SELECT * FROM users WHERE username='$username' AND password='$password' ");

					if( mysql_num_rows($sql) <> 0 ) {	// Successfully logged in and redirected to the interface
						session_start();
						$_SESSION['user_id'] = "$username";
						header('Location: core/view/view.php');
					}else{	// Input fields are wrong and redirected to login form
						echo "Το όνομα χρήστη και/η ο κωδικός είναι λάθος. Ξαναπροσπαθήστε!";
						header('refresh:4; url=');
					}
				}else {
					echo "Το όνομα χρήστη και/η ο κωδικός είναι κενά. Ξαναπροσπαθήστε!";
				}
			}
		?>
	</head>
	<body>
		<div id="header">
			<div id="header_top">
				<div id="header_left">
					<table>
						<tr>
							<td><img style="border-radius: 5px;" width="350" height="100" src="images/helpdesk_logo/helpdesk_head_1.jpg" value="HELPDESK" /></td>
							<td id="version">V 1.0</td>
						</tr>
					</table>
				</div>
				
				<div id="header_right">
					<form action="" method="post">
						<table>
							<tr>
								<td style="color: white; font-size: 14px; font-weight: bold;"> ΟΝΟΜΑ: </td>
								<td> <input type="text" name="username" /> </td>
								<td style="color: white; font-size: 14px; font-weight: bold;"> ΚΩΔΙΚΟΣ: </td>
								<td> <input type="password" name="password" /> </td>
								<td><input type="submit" name="submit" value="Είσοδος" /></td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
		
		<div id="main">
			<table style="margin-left: auto; margin-right: auto;">
				<tr>
					<td style="padding-top: 25px;"><h2 align="center">Καλως ήρθατε στο HELPDESK...</h2></td>
					<td><img style="border-radius: 5px;" width="35" height="" src="images/happy.png" value="HELPDESK" /></td>
				</tr>
			</table>
			<br /> <br />
			<div id="functions">
				<h4>Οι λειτουργίες που υποστηρίζονται είναι:</h4>
				<ul>
					<li>Προσθήκη νέας βλάβης</li>
					<li>Προβολή των βλαβών σε αναμονή</li>
					<li>Επεξεργασίας μιας ήδη καταχωρημένης βλάβης</li>
					<li>Προβολή ιστορικού με τις ήδη επιλυμένες βλάβες</li>
					<li>Εκτύπωση μιας βλάβης</li>
				</ul>
			</div>
		</div>
			
		<div id="footer">
			<div align="center">Ομάδα Πρακτικής 2012</div>
		</div>
	</body>
</html>