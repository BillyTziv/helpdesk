<?php
	 header('Content-Type:text/html; charset=UTF-8'); 
?>
<?php
	include '../database/connect.php';
	$sql_join = mysql_query(" SELECT * FROM failures WHERE failures.id='$id' ");
?>
<div id="step2_data">
	<form method="post" action="edit_problem.php">
		<div id="edit_table_part1">
			<br />
			<table id="add_table1">
				<tr> <!-- Ημερομηνία καταχώρησης [start_date] -->
					<th >
						Ημερ/νια Καταχώρησης
					</th>
					<td>
						<?php
							$date = mysql_result($sql_join, 0, 10);
							if ( $date == "0000-00-00") {
						?>
								<input type="date" name="start_date" />
						<?php
							}else{
						?>
								<input type="date" name="start_date" value="<?php echo date('Y-m-d', strtotime(date($date))); ?>" />
						<?php }
						
						?>
					</td>
				</tr>
				
				<tr> <!-- Ημερομηνία διεκπεραίωσης [end_date] -->
					<th>
						Ημερομηνία διεκπεραίωσης
					</th>		
					<td>
						<?php
							$date2 = mysql_result($sql_join, 0, 11);
							if ( $date2 == "0000-00-00") {
						?>
								<input type="date" name="end_date" />
						<?php
							}else{
						?>
							<input type="date" name="end_date" value="<?php echo date('Y-m-d', strtotime($date2)); ?>" />

						<?php
							}
						
						?>
					</td>
				</tr>
	
				<tr> <!-- Υπεύθυνος1 [responsible1] -->
					<th>Πρώτος Υπεύθυνος</th> 
					<td>
						<select name="responsible1">
							<?php 
								$output7 = mysql_result($sql_join, 0, 14);
								echo "<option value='".$output7."'>".$output7."</option>";

								$temp = mysql_query("SELECT DISTINCT real_name FROM users ");
								while($nt = mysql_fetch_array($temp)){	//Array or records stored in $nt
									echo "<option value=$nt[real_name]>".$nt[real_name]."</option>";
								}
							?>
						</select>
					</td>
				</tr>
				
				<tr> <!-- Υπεύθυνος2 [responsible2] -->
					<th>Δεύτερος Υπεύθυνος</th> 
					<td>
						<select name="responsible2">
							<?php 
								$output7 = mysql_result($sql_join, 0, 15);
								echo "<option value='".$output7."'>".$output7."</option>";

								$temp = mysql_query("SELECT DISTINCT real_name FROM users ");
								while($nt = mysql_fetch_array($temp)){	//Array or records stored in $nt
									echo "<option value=$nt[real_name]>".$nt[real_name]."</option>";
								}
							?>
						</select>
					</td>
				</tr>
				
				<tr>
					<!-------------- kathgoria ----------->
					<th>Κατηγορία</th>
					<td> <?php
							$query="SELECT category FROM categories ";
							$result = mysql_query ($query);
						?>
							<select name="category">
						<?php
								$output7 = mysql_result($sql_join, 0, 13);
								echo "<option value='".$output7."'>".$output7."</option>"
								//echo "<option value=$output7>".$output7."</option>";
						?>
						<?php
							while($nt=mysql_fetch_array($result)){
								echo "<option value=$nt[category]>".$nt[category]."</option>";
							}
							echo "</select>";
						?>
					</td>
				</tr>
			</table>
			<br />
			<table id="add_table2">
				<tr>
					<!----------- outlet_code --------------->
					<th>Κωδικός Πρίζας</th>
					<td>
						<select name="outlet_code">
							<?php 
							$output8 = mysql_result($sql_join, 0, 2);
							echo "<option value=$output8>".$output8."</option>";

							$temp = mysql_query("SELECT DISTINCT outlet_code FROM data ");
							while($nt = mysql_fetch_array($temp)){	//Array or records stored in $nt
								echo "<option value=$nt[outlet_code]>".$nt[outlet_code]."</option>";
							}
						echo "</select>";// Closing of list box
						?>
					</td>
				</tr>
				
				<tr>
					<!----------- ip_address --------------->
					<th>IPv4 Address</th>
					<td>
						<select name="ip_address">
						<?php 
							$output9 = mysql_result($sql_join, 0, 3);
							echo "<option value=$output9>".$output9."</option>";

							$temp = mysql_query("SELECT ip_address FROM data ");
							while($nt = mysql_fetch_array($temp)){	//Array or records stored in $nt
								echo "<option value=$nt[ip_address]>".$nt[ip_address]."</option>";
							}
						echo "</select>";// Closing of list box
						?>
					</td>
				</tr>
				
				
				<tr>
					<!----------- Όνομα Υπολογιστή --------------->
					<th>Όνομα Υπολογιστή</th>
					<td>
						<select name="computer_name">
							<?php 
							$output6 = mysql_result($sql_join, 0, 4);
							echo "<option value='$output6'>".$output6."</option>";
							
							$temp = mysql_query("SELECT DISTINCT computer_name FROM data ");
							$x = mysql_num_rows($temp);
							
							while($nt = mysql_fetch_array($temp)){	//Array or records stored in $nt
								echo "<option value=$nt[computer_name]>".$nt[computer_name]."</option>";
							}
						echo "</select>";// Closing of list box
						?>
					</td>
					<!--<input type="hidden" name="output14" <?php //echo "value=".$output14." " ?> />-->
				</tr>
			</table>
			<br />
			<table id="add_table3">
				<tr>
					<!----------- Τμήμα/Μονάδα --------------->
					<th>Τμήμα/Μονάδα</th>
					<td>
						<select name="tmhma_monada">
							<?php 
							$output3 = mysql_result($sql_join, 0, 5);
							echo "<option value='".$output3."'>".$output3."</option>";
							
							
							$temp = mysql_query("SELECT DISTINCT tmhma_monada FROM data ");
							while($nt = mysql_fetch_array($temp)){	//Array or records stored in $nt
								echo "<option value=$nt[tmhma_monada]>".$nt[tmhma_monada]."</option>";
							}
						echo "</select>";// Closing of list box
						?>
					</td>
				</tr>		
				
				<tr>
<!----------------------------- Γραφείο/Τμήμα/Κλινική --------------->
					<th>Γραφείο/Τμήμα/Κλινική</th>
					<td>
						<select name="klinikh">
							<?php 
							$output4 = mysql_result($sql_join, 0, 6);
							echo "<option value='".$output4."'>".$output4."</option>";

							$temp = mysql_query("SELECT DISTINCT klinikh FROM data ");
							while($nt = mysql_fetch_array($temp)){	//Array or records stored in $nt
								echo "<option value=$nt[klinikh]>".$nt[klinikh]."</option>";
							}
						echo "</select>";// Closing of list box
						?>
					</td>
				</tr>
				
				<tr>
					<!----------- Όροφος Κτιρίου --------------->
					<th>Όροφος Κτιρίου</th>
					<td>
						<select name="orofos">
							<?php 
							$output5 = mysql_result($sql_join, 0, 7);
							echo "<option value='".$output5."'>".$output5."</option>";

							$temp = mysql_query("SELECT DISTINCT orofos FROM data ");
							while($nt = mysql_fetch_array($temp)){	//Array or records stored in $nt
								echo "<option value=$nt[orofos]>".$nt[orofos]."</option>";
							}
						echo "</select>";// Closing of list box
						?>
					</td>
				</tr>
				
				
				<tr>
<!-------------------------- Κωδικός Τομέα ------------------------------>
					<th>Κωδικός Τομέα</th>
					<td>
						<select name="kwdikos_tomea">
						<?php 
							$output11 = mysql_result($sql_join, 0, 8);
							echo "<option value='".$output11."'>".$output6."</option>";

							$temp = mysql_query("SELECT DISTINCT kwdikos_tomea FROM data ");
							while($nt = mysql_fetch_array($temp)){	//Array or records stored in $nt
								echo "<option value=$nt[kwdikos_tomea]>".$nt[kwdikos_tomea]."</option>";
							}
						?>
						</select>
					</td>
					
				</tr>
				<tr> <!-- Εσωτερικός χώρος [eswterikos_xwros] -->
					<th>Εσωτερικός χώρος</th>
					<td>
						<select name="eswterikos_xwros">
						<?php 
							$output11 = mysql_result($sql_join, 0, 9);
							echo "<option value=$output11>".$output11."</option>";

							$temp = mysql_query("SELECT DISTINCT eswterikos_xwros FROM data ");
							while($nt = mysql_fetch_array($temp)){	//Array or records stored in $nt
								echo "<option value=$nt[eswterikos_xwros]>".$nt[eswterikos_xwros]."</option>";
							}
						?>
						</select>
					</td>
				</tr>
			</table>
			
			<br />
			
			<table id="add_table4">
				<tr>
<!------------------------- Πρόσωπο επικοινωνίας ------------------------>
					<th>Πρόσωπο Eπικοινωνίας</th>
					<td> <input type="text" name="user_name" value="<?php echo $user_name = mysql_result($sql_join, 0, 16); ?>" /> </td>
				</tr>
				<tr>
<!------------------------- Τηλέφωνο Επικοινωνίας ----------------------->
					<th>Τηλέφωνο Επικοινωνίας</th>
					<td>
						<input type="text" name="user_phone" value="<?php echo $output8 = mysql_result($sql_join, 0, 17); ?>" />
					</td>
				
				</tr>
				<tr>
				
<!---------------------------- Προθεσμία -------------------------------->
					<th>Προθεσμία Διεκπεραίωσης</th>
					<td>
						<?php
							$date3 = mysql_result($sql_join, 0, 12);
							if ( $date3 == "0000-00-00") {
						?>
								<input type="date" name="final_date" />
						<?php
							}else{
						?>
								<input type="date" name="final_date" value="<?php echo date('Y-m-d', strtotime(date($date3))); ?>" />
						<?php }
						
						?>
					</td>
				</tr>
				
			</table>
		</div>

		<br />

			<div id="add_table5">
				<table>
					<!----------- notes ------------------>
					<tr>
						<th>Σύντομη περιγραφή</th>
						<th>Τεχνική αναφορά</th>
					</tr>
					<tr>
						<td>
							<textarea name="notes" <?php echo "value='".mysql_result($sql_join, 0, 18)."'" ?> rows="10" cols="40"> <?php echo $output9 = mysql_result($sql_join, 0, 18); ?> </textarea>
						</td>
						<td>
							<textarea name="solution" <?php echo "value='".mysql_result($sql_join, 0, 19)."'" ?> rows="10" cols="40"> <?php echo $output9 = mysql_result($sql_join, 0, 19); ?> </textarea>
						</td>
					</tr>
				</table>
			</div>				
				<br />

			<div id="add_table6">
				<table>
					<th> Επιλέξτε αν αποκαταστάθηκε η βλάβη</th>
					<td> <input type="checkbox" name="status" value="1" /> </td>
				</table>
			</div>
			
			<div id="add_last_submit">
				<input type="hidden" value='<?php echo $id; ?>' name="id" />
				<input type="submit" name="submit" value="Ανανέωση" />
			</div>
	</form>
</div>