<head>
	<link rel="stylesheet" type="text/css" href="../css/main_style.css" />
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-7"/>
	<?php
		session_start();
		if( !isset($_SESSION['user_id']) ){
			//echo "Δεν μπορείτε να δείτε το περιεχόμενο γιατί δεν έχετε συνδεθεί! ";
			header('Location: ../index.php');
		}
	?>
</head>