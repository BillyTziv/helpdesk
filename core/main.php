<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/main_style.css" />
		<meta http-equiv="content-type" content="text/html; charset=UTF=8"/>
		<?php
			session_start();
			if( !isset($_SESSION['user_id']) ){
				//echo "��� �������� �� ����� �� ����������� ����� ��� ����� ��������! ";
				header('Location: ../index.php');
			}
		?>
	</head>
	<body>
		<?php
			function real_name() {
				$id = $_SESSION['user_id'];
				include 'database/connect.php';
				$r = mysql_query(" SELECT real_name FROM users WHERE `username`='$id' ");
				return mysql_result($r, 0, 0);
			}
		?>
		<div id="header">
			<div id="header_top">
				<div id="header_left">
					<img width="350" height="100" src="../images/helpdesk_logo/helpdesk_head_1.jpg" value="HELPDESK" />
				</div>
				
				<div id="header_right">
							<table>
								<tr>
									<td id="header_right_info">����������� ��:</td>
									<td>
										<div id="header_right_name"> <?php echo real_name(); ?> </div>
									</td>
								</tr>
							</table>
							<table>
								<tr>
									<td> <img height="29px" width="29px" src="../images/logout.png" value="asd"/> </td>
									<td> <a href="../functions/logout.php">����������</a> </td>
								</tr>
							</table>
						</div>
			</div>
			
			<div id="header_menu">
				<ul id="menu_list">
					<li class="menu_item" > <a class="menu_link" href="add/add.php">��������</a> </li>
					<li class="menu_item" > <a class="menu_link" href="view/view.php">�������</a> </li>
					<li class="menu_item" > <a class="menu_link" href="search/search.php">���������</a> </li>
					<li class="menu_item" > <a class="menu_link" href="#history">��������</a> </li>
				</ul>
			</div>
		</div>
		
		<div id="main">
			<!-- add new page here -->
		</div>
		
		<div id="footer">
			<div align="center">����� ��������� 2012</div>
		</div>
	</body>
</html>