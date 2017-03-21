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
					<li class="menu_item" > <a class="menu_link" href="search.php">ΑΝΑΖΗΤΗΣΗ</a> </li>
					<li class="menu_item" > <a class="menu_link" href="../history/history.php">ΙΣΤΟΡΙΚΟ</a> </li>
				</ul>
			</div>
		</div>
		
		<?php		
			$outlet_code = $_POST['output1'];
			$computer_name = $_POST['output2'];
			$category = $_POST["output3"];
			$ypeuthynos = $_POST['output4'];
			$start_date = $_POST['output5'];
			$end_date = $_POST['output6'];
			$tmhma_monada = $_POST['output7'];
			$klinikh = $_POST['output8'];
			$final_date = $_POST['output10'];
			$orofos = $_POST['output11'];
			$status = $_POST['output12'];
		?><?php	
	
	//echo "ipefthinos2:".$ypeufthynos2;?>
		<div id="main">
			<h2 id="page_title"> ΑΠΟΤΕΛΕΣΜΑΤΑ ΑΝΑΖΗΤΗΣΗΣ </h2> <br>
			<div id="view">
			<?php
				
				// εφαρμογή των κριτηρίων......
					include 'checks1.php';
					include 'checks2.php';
					include 'checks3.php';
					include 'checks4.php';
					include 'checks5.php';
					include 'checks6.php';
					include 'checks7.php';
					include 'checks8.php';
					include 'checks9.php';
					include 'checks11.php';
					include 'checks12.php';
					
					$sql_join= mysql_query(" SELECT * FROM failures WHERE id IN ($matches)");
					$rows = mysql_num_rows($sql_join);
					if($rows == 0){
						?>
							<h3> Δεν βρέθηκαν βλάβες...</h3>
							<?php 
					}else{
						include 'all_data.php';
					}
					
				?>
					
			</div>
		</div>
		<div id="footer">
			<div align="center">Ομάδα Πρακτικής 2012</div>
		</div>
	</body>
</html>
		