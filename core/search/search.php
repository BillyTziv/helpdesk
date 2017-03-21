<?php
	 header('Content-Type:text/html; charset=UTF-8'); 
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../../css/search_style.css" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<?php
			session_start();
			if( !isset($_SESSION['user_id']) ){
				//echo "Δεν μπορείτε να δείτε το περιεχόμενο γιατί δεν έχετε συνδεθεί! ";
				header('Location: ../index.php');
			}else {
				include '../database/connect.php';
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
		
		<div id="main">
			<h2 id="add_title">Αναζητηση βλαβης</h2>
			<div id="add_main_inside">
				<div id="step1">
					<div id="add_step_title">Επιλογή κριτηρίων για αναζήτηση</div>
						<div id="step2_data">
							<form method="post" action="search_results.php">
								<div id="add_table1">
									<table>
										<tr>
											<th>Κωδικός Πρίζας :</th>
											<td>
												<?php
													$query=" SELECT DISTINCT outlet_code FROM failures";
													$result = mysql_query ($query);
													if($result == false){
														echo "problem with mysql_query";
													}
												?>
												<select name="output1">
													<option value=""> </option>
												<?php
													while($nt=mysql_fetch_array($result)){
														echo "<option value='".$nt[outlet_code]."'>".$nt[outlet_code]."</option>";	
													}
													echo "</select>";
												?>
											</td>
										</tr>
										<tr>									
											<th>Όνομα Υπολογιστή :</th>
											<td>
												<?php
													$query=" SELECT DISTINCT computer_name FROM failures";
													$result = mysql_query ($query);
													if($result == false){
														echo "problem with mysql_query";
													}
												?>
												<select name="output2">
													<option value=""> </option>
												<?php
													while($nt=mysql_fetch_array($result)){
														echo "<option value='".$nt[computer_name]."'>".$nt[computer_name]."</option>";
													}
													echo "</select>";
												?>
											</td>
										</tr>
									</table>
								</div>
								<div id="add_table2">
									<table>
										<tr>
											<th>Κατηγορία :</th>
											<td>
												<?php
													$query=" SELECT DISTINCT category FROM failures ORDER BY category";
													$result = mysql_query ($query);
													if($result == false){
														echo "problem with mysql_query";
													}
												?>
												<select name="output3">
													<option value=""> </option>
												<?php
													while($nt=mysql_fetch_array($result)){
														echo "<option value='".$nt[category]."'>".$nt[category]."</option>";
													}
													echo "</select>";
												?>
											</td>
										</tr>
										<tr>											
											<th>Πρώτος Υπεύθυνος :</th>
											<td>
												<?php
													$query=" SELECT DISTINCT ypeuthynos FROM failures ORDER BY ypeuthynos";
													$result = mysql_query ($query);
													if($result == false){
														echo "problem with mysql_query";
													}
												?>
												<select name="output4">
													<option value=""> </option>
												<?php
													while($nt=mysql_fetch_array($result)){
														echo "<option value='".$nt[ypeuthynos]."'>".$nt[ypeuthynos]."</option>";
													}
													echo "</select>";
												?>
											</td>
										</tr>
										<tr>
											<th>Ημερομηνία Καταχώρησης :</th>
											<td>
												<?php
													$query=" SELECT DISTINCT start_date FROM failures ORDER BY start_date";
													$result = mysql_query ($query);
													if($result == false){
														echo "problem with mysql_query";
													}
												?>
												<select name="output5">
													<option value=""> </option>
												<?php
													while($nt=mysql_fetch_array($result)){
														$nt1[start_date] = date('d/m/Y', strtotime(date($nt[start_date])));
														echo "<option value=$nt[start_date]>".$nt1[start_date]."</option>";
													}
													echo "</select>";
												?>
											</td>
										</tr>
										<tr>
											<th>Ημερομηνία Διεκπεραίωσης :</th>
											<td>
												<?php
													$query=" SELECT DISTINCT end_date FROM failures ORDER BY end_date";
													$result = mysql_query ($query);
													if($result == false){
														echo "problem with mysql_query";
													}
												?>
												<select name="output6">
													<option value=""> </option>
												<?php
													while($nt=mysql_fetch_array($result)){
														$nt1[end_date] = date('d/m/Y', strtotime(date($nt[end_date])));
														echo "<option value=$nt[end_date]>".$nt1[end_date]."</option>";
													}
													echo "</select>";
												?>
											</td>
										</tr>
										<tr>
											<th>Προθεσμία Διεκπεραίωσης :</th>
											<td>
												<?php
													$query=" SELECT DISTINCT final_date FROM failures ORDER BY final_date";
													$result = mysql_query ($query);
													if($result == false){
														echo "problem with mysql_query";
													}
												?>
												<select name="output10">
													<option value=""> </option>
												<?php
													while($nt=mysql_fetch_array($result)){
														$nt1[final_date] = date('d/m/Y', strtotime(date($nt[final_date])));
														echo "<option value=$nt[final_date]>".$nt1[final_date]."</option>";
													}
													echo "</select>";
												?>
											</td>
										</tr>
									</table>
								</div>
								<div id="add_table3">
									<table>
										<tr>
											<th>Τμήμα/Μονάδα :</th>
											<td>
												<?php
													$query=" SELECT DISTINCT tmhma_monada FROM failures ORDER BY tmhma_monada ";
													$result = mysql_query ($query);
													if($result == false){
														echo "problem with mysql_query";
													}
												?>
												<select name="output7">
													<option value=""> </option>
												<?php
													while($nt=mysql_fetch_array($result)){
														echo "<option value='".$nt[tmhma_monada]."'>".$nt[tmhma_monada]."</option>";
													}
													echo "</select>";
												?>
											</td>
										</tr>
										<tr>
											<th>Κλινική :</th>
											<td>
												<?php
													$query=" SELECT DISTINCT klinikh FROM failures ORDER BY klinikh ";
													$result = mysql_query ($query);
												?>
												<select name="output8">
													<option value=""> </option>
												<?php
													while($nt=mysql_fetch_array($result)){
														echo "<option value='".$nt[klinikh]."'>".$nt[klinikh]."</option>";
													}
													echo "</select>";
												?>
											</td>
										</tr>
										<tr>
											<th>Όροφος :</th>
											<td>
												<?php
													$query=" SELECT DISTINCT orofos FROM failures ORDER BY orofos ";
													$result = mysql_query ($query);
												?>
												<select name="output11">
													<option value=""> </option>
												<?php
													while($nt=mysql_fetch_array($result)){
														echo "<option value='".$nt[orofos]."'>".$nt[orofos]."</option>";
													}
													echo "</select>";
												?>
											</td>
										</tr>
									</table>
								</div>
								<div id="add_table3">
									<table>
										<tr>
											<th>Κατάσταση βλάβης :</th>
											<td>
												<select name="output12">
													<option value=""></option>
													<option value="-1">Άλυτες</option>
													<option value="1"> Λυμένες</option>
													<option value="2"> Όλες</option>
												</select>
											</td>
										</tr>
									</table>
								</div>
								<br>
								<div id="add_last_submit">
									<input type="submit" name="submit" value="Αναζήτηση" />
							</div>
							</form>
						</div>
				</div>
			</div>
		</div>
		<div id="footer">
			Ομάδα Πρακτικής 2012
		</div>
	</body>
</html>