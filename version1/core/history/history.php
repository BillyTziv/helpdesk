<?php
	 header('Content-Type:text/html; charset=UTF-8'); 
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../../css/history_style.css" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		
		<?php
			session_start();
			if( !isset($_SESSION['user_id']) ){
				//echo "Δεν μπορείτε να δείτε το περιεχόμενο γιατί δεν έχετε συνδεθεί! ";
				header('Location: ../index.php');
			}
		?>
		<?php
			function real_name() {
				require '../database/connect.php';
				$id = $_SESSION['user_id'];
				$r = mysql_query(" SELECT real_name FROM users WHERE `username`='$id' ");
				return mysql_result($r, 0, 0);
			}
		?>
	</head>
	<body>
		<div id="header">
			<div id="header_top">
				<div id="header_left">
					<table>
						<tr>
							<td><img style="border-radius: 5px;" width="350" height="100" src="../../images/helpdesk_logo/helpdesk_head_1.jpg" value="HELPDESK" /></td>
							<td id="version">V 1.0</td>
						</tr>
					</table>
				</div>
				
				<div id="header_right">
					<table>
						<tr>
							<td id="header_right_info">Συνδεθήκατε ως:</td>
							<td>
								<div id="header_right_name"> <?php echo real_name(); ?> </div>
							</td>
						</tr>
						<tr>
							<td style="width: 30px; ">
								<table>
									<tr>
										<td><a href="../functions/logout.php"><img height="29px" width="29px" src="../../images/logout.png" value="asd"/></a></tD>
										<td><a href="../functions/logout.php">Αποσύνδεση</a></td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</div>
			</div>
			
			<div id="header_menu">
				<ul id="menu_list">
					<li class="menu_item" > <a class="menu_link" href="../add/add.php">ΠΡΟΣΘΗΚΗ</a> </li>
					<li class="menu_item" > <a class="menu_link" href="../view/view.php">ΠΡΟΒΟΛΗ</a> </li>
					<li class="menu_item" > <a class="menu_link" href="../search/search.php">ΑΝΑΖΗΤΗΣΗ</a> </li>
					<li class="menu_item" > <a class="menu_link" href="history.php">ΙΣΤΟΡΙΚΟ</a> </li>
				</ul>
			</div>
		</div>
		
		<div id="main">
			<h2 id="page_title"> ΙΣΤΟΡΙΚΟ </h2> <br>
			<div id="view">
					<?php
						include 'data.php';
					?>
			</div>
		</div>
		
		<div id="footer">
			<div align="center">Ομάδα Πρακτικής 2012</div>
		</div>
	</body>
</html>