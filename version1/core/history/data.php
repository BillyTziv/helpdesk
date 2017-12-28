<?php
	 header('Content-Type:text/html; charset=UTF-8'); 
?>

<?php
	/* Σύνδεση με την βάση */
	require '../database/connect.php';

	/* Παίρνω τις γραμμές απο το sql ερώτημα */
	$sql_join = mysql_query(" SELECT * FROM failures WHERE `status`='1' ");
	$rows = mysql_num_rows($sql_join);
?>
<div id="view_table"> 
	<table>
		<tr>
			<th class="table_headers" >#</th>
			<th class="table_headers" >Πρίζα</th>
			<th class="table_headers" >IP</th>
			<th class="table_headers" >Υπολογιστής</th>
			<th class="table_headers" >Τμήμα/Μονάδα</th>
			<th class="table_headers" >Κλινική</th>
			<th class="table_headers" >Όροφος</th>
			<th class="table_headers" >Κωδ/ός<br>Τομέα</th>
			<th class="table_headers" >Εσωτ/κός<br>Χώρος</th>
			<th class="table_headers" >Ημερ/νία<br>Καταχ/σης</th>
			<th class="table_headers" >Ημερ/νία<br>Διεκ/σης</th>
			<th class="table_headers" >Προθεσμία</th>
			<th class="table_headers" >Κατηγορία</th>
			<th class="table_headers" >Υπεύθυνος1</th>
			<th class="table_headers" >Υπεύθυνος2</th>
			<th class="table_headers" >Πρόσωπο<br>Επικοιν/νιας</th>
			<th class="table_headers" >Τηλέφωνο<br>Επικοιν/ιας</th>
			<th class="table_headers" >Περιγραφή</th>
			<th class="table_headers" >Τεχνική<br>Αναφορά</th>
			<th class="table_headers" ><img height=25px width=25px src="../../images/edit.png" /></th>
		</tr>
	<?php
		for($i=0; $i<$rows; $i++) {
			if($i%2 == 0){
	?>
				<tr id="line1" >
					<?php for($j=1; $j<20; $j++){ ?>
							<td>
								<?php
								if ( $j == 1 ) {
									echo $prob_id = mysql_result($sql_join, $i, $j);
									
								}else if ( $j == 10) {
									$temp = mysql_result($sql_join, $i, $j);
									
									$date = date("d/m/Y", strtotime($temp));
									echo str_replace("-","/",$date);
								}else if( ($j == 11) && (mysql_result($sql_join, $i, $j) == "0000-00-00") ) {
									echo "";
								}else if( ($j == 12) && (mysql_result($sql_join, $i, $j) == "0000-00-00") ) {
									echo "";
								}else if( ($j == 11) && (mysql_result($sql_join, $i, $j) != "0000-00-00") ) {
									$temp = mysql_result($sql_join, $i, $j);
									
									$date = date("d/m/Y", strtotime($temp));
									echo str_replace("-","/",$date);
								}else if( ($j == 12) && (mysql_result($sql_join, $i, $j) != "0000-00-00") ) {
									$temp = mysql_result($sql_join, $i, $j);
									
									$date = date("d/m/Y", strtotime($temp));
									echo str_replace("-","/",$date);
								}else {
									echo mysql_result($sql_join, $i, $j);
								}
								?>
							</td>
					<?php } ?>
					<!----- Κουμπάκι επεξεργασίας ----->
					<td>
						<form action="../edit/edit.php" method="post">
							<input type="hidden" value='<?php echo $prob_id; ?>' name="id" />
							<input type="submit" value="EDIT" name="edit"/>
						</form>
					</td>
				</tr>
		
		<?php
			}else{
		?>
		
		<!-------------------- Άσπρες γραμμές --------------------->
				<tr id="line2" >
					<?php for($j=1; $j<20; $j++){ ?>
							<td>
								<?php
								if ( $j == 1 ) {
									echo $prob_id = mysql_result($sql_join, $i, $j);
									
								}else if ( $j == 10) {
									$temp = mysql_result($sql_join, $i, $j);
									
									$date = date("d/m/Y", strtotime($temp));
									echo str_replace("-","/",$date);
								}else if( ($j == 11) && (mysql_result($sql_join, $i, $j) == "0000-00-00") ) {
									echo "";
								}else if( ($j == 12) && (mysql_result($sql_join, $i, $j) == "0000-00-00") ) {
									echo "";
								}else if( ($j == 11) && (mysql_result($sql_join, $i, $j) != "0000-00-00") ) {
									$temp = mysql_result($sql_join, $i, $j);
									
									$date = date("d/m/Y", strtotime($temp));
									echo str_replace("-","/",$date);
								}else if( ($j == 12) && (mysql_result($sql_join, $i, $j) != "0000-00-00") ) {
									$temp = mysql_result($sql_join, $i, $j);
									
									$date = date("d/m/Y", strtotime($temp));
									echo str_replace("-","/",$date);
								}else {
									echo mysql_result($sql_join, $i, $j);
								}
								?>
							</td>
					<?php } ?>
					<!----- Κουμπάκι επεξεργασίας ----->
					<td>
						<form action="../edit/edit.php" method="post">
							<input type="hidden" value='<?php echo $prob_id; ?>' name="id" />
							<input type="submit" value="EDIT" name="edit"/>
						</form>
					</td>
				</tr>
		
	<?php
			} 
		}
	?>
	</table>
</div>