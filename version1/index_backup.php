<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/login_style.css" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<?php
			include('core/database/connect.php');
			if( !empty($_POST['username']) && !empty($_POST['password']) ) {
				$username = $_POST['username'];
				$password = $_POST['password'];
				$password = md5($password);
				$sql = mysql_query(" SELECT * FROM users WHERE username='$username' AND password='$password' ");
				if( $sql == false) {
					echo "makaka";
				}
				
				if( mysql_num_rows($sql) <> 0) {	// Successfully logged in and redirected to the interface
					session_start();
					$_SESSION['user_id'] = "$username";
					header('Location: core/view/view.php');
				}else{	// Input fields are wrong and redirected to login form
					echo "Λάθος κωδικός και όνομα χρήστη!";
					header('refresh:2; url=');
				}
			}
		?>
	</head>
	<body>
		<div id="header">
			<div id="header_top">
				<div id="header_left">
					HELPDESK
				</div>
				
				<div id="header_right">
					<form action="" method="post">
						<table>
							<tr>
								<td style="color: white; font-size: 12px"> ΟΝΟΜΑ: </td>
								<td> <input type="text" name="username" /> </td>
								<td style="color: white; font-size: 12px"> ΚΩΔΙΚΟΣ: </td>
								<td> <input type="password" name="password" /> </td>
								<td><input type="submit" name="submit" value="Είσοδος" /></td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
		
		<div id="main">
			<h2 align="center">Καλως ήρθατε στο HELPDESK. Την εφαρμογή που θα σας αλλάξει τη ζωή!</h2><br> <br>
			<div align="center">
				<i>Εισάγετε τα στοιχεία σας στην φόρμα πάνω δεξιά για να δείτε ένα <b>ΜΑΓΙΚΟ ΜΕΝΟΥ!</b></i>
			</div>
		</div>
		
		<div id="footer">
	<div align="center">Ομάδα Πρακτικής 2012</div>
</div>
	</body>
</html>