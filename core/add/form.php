<!-----------------------
	-- NAMES --
	start_date
	end_date
	category
	responsible1
	responsible2
	outlet_code
	ip_address
	computer_name
	tmhma_monada
	klinikh
	orofos
	kwdikos_tomea
	eswterikos_xwros
	user_name
	user_hpone
	final_date
	notes
	solution
	status
------------------------>
<html>
 <head> 
      <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
   </head> 
<body>
<div id="step2_data">
	<form method="post" action="insert.php">
		<div id="add_table1">
			<table >
				<tr> <!-- Ημερομηνία Καταχώρησης [start_date]-->
					<th>Ημερ/νια Καταχώρισης</th>
					<!--<td><input type="date" name="start_date" /></td>-->
					<td style="text-align: center; ">
						<input type="hidden" name="start_date" <?php echo "value='".date('Y/m/d')."'"; ?> />
						<?php echo date('d/m/Y'); ?>
					</td>
				</tr>
				
				<tr> <!-- Ημερομηνία Διεκπεραίωσης [end_date] -->
					<th>Ημερ/νία Διεκπεραίωσης</th>
					<td><input type="date" name="end_date" /></td>
				</tr>
	
				<tr>
					<!----------- ypefthinos --------------->
					<th>Πρώτος Υπεύθυνος</th>
					<td>
						<?php
							$responsible=" SELECT real_name FROM users ";
							$result1 = mysql_query ($responsible);
						?>
						<select name="responsible1">
							<option value=""></option>
							<?php
								while($nt=mysql_fetch_array($result1)){
									echo "<option value='".$nt[real_name]."'>".$nt[real_name]."</option>";
								}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<!----------- ypefthinos --------------->
					<th>Δεύτερος Υπεύθυνος</th>
					<td> <?php
							$query=" SELECT real_name FROM users ";
							$result2 = mysql_query ($query);
						?>
						<select name="responsible2">
							<option value=""></option>
							<?php
								while($nt = mysql_fetch_array($result2)){
									echo "<option value='".$nt[real_name]."'>".$nt[real_name]."</option>";
								}
							?>
						</select>
					</td>
				</tr>
				
				<tr> <!-- Κατηγορία -->
					<th>Κατηγορία</th>
					<td>
						<?php
							/* Παίρνω τις κατηγορίες απο την βάση */
							$category_query = "SELECT category FROM categories ";
							$result = mysql_query($category_query);
						?>
						
						<select name="category">
							<option value=""></option>
							<?php
								while( $nt = mysql_fetch_array($result) ) {
									echo "<option value='".$nt[category]."'>".$nt[category]."</option>";
								}
							?>
						</select>
					</td>
				</tr>
			</table>
		</div>	
			
			
		<div id="add_table2">
			<table>
				<tr> <!-- Κωδικός Πρίζας [outlet_code] -->
					<th>Κωδικός Πρίζας</th>
					<td>
						<?php
							if ( empty($res) && empty($res) ) {
						?>
								<input type="text" name="outlet_code" />
						<?php
							}else {
						?>
								<?php echo $outlet_code = mysql_result($sql, 0, 1); ?>
								<input type="hidden" name="outlet_code" <?php echo "value='".$outlet_code."' " ?> />
						<?php
							}
						?>
					</td>
				</tr>
				
				<tr> <!-- Διεύθυνση IP [ip_address] -->	
					<th>IPv4 Διεύθυνση</th>
					<td>
						<?php
							if ( empty($res) && empty($res) ) {
						?>
								<input type="text" name="ip_address" />
						<?php
							}else {
						?>
								<?php echo $ip_address = mysql_result($sql, 0, 2); ?>
								<input type="hidden" name="ip_address" <?php echo "value='".$ip_address."' " ?> />
						<?php
							}
						?>
					</td>
				</tr>
				
				<tr> <!-- Όνομα Υπολογιστή [computer_name] -->
					<th>Όνομα Υπολογιστή</th>
					<td>
						<?php
							if ( empty($res) && empty($res) ) {
						?>
								<input type="text" name="computer_name" />
						<?php
							}else {
						?>
								<?php echo $computer_name = mysql_result($sql, 0, 8); ?>
								<input type="hidden" name="computer_name" <?php echo "value='".$computer_name."' " ?> />
						<?php
							}
						?>
					</td>
				</tr>
			</table>
		</div>
		
		<div id="add_table3">
			<table >
				<tr> <!-- Τμήμα/Μονάδα [tmhma_monada] -->
					<th>Τμήμα/Μονάδα</th>
					<td>
						<?php
							if ( empty($res) && empty($res) ) {
						?>
								<?php
									$tmhma_monada_query=" SELECT DISTINCT tmhma_monada FROM data ";
									$result = mysql_query ($tmhma_monada_query);
								?>
								<select name="tmhma_monada">
									<option value=""></option>
									<?php
										while($nt=mysql_fetch_array($result)){
											echo "<option value='".$nt[tmhma_monada]."'>".$nt[tmhma_monada]."</option>";
										}
									?>
								</select>
						<?php
							}else {
						?>
								<?php
									$tmhma_monada = mysql_result($sql, 0, 3);
									echo $tmhma_monada;
								?>
								<input type="hidden" name="tmhma_monada" <?php echo "value='".$tmhma_monada."' " ?> />
						<?php
							}
						?>
					</td>
				</tr>
				
				<tr> <!-- Γραφείο/Τμήμα/Κλινική [klinikh] -->
					<th>Γραφείο/Τμήμα/Κλινική</th>
					<td>
						<?php
							if ( empty($res) && empty($res) ) {
						?>
								<?php
									$query=" SELECT DISTINCT klinikh FROM data ";
									$result = mysql_query ($query);
								?>
								<select name="klinikh">
									<option value=""></option>
									<?php
										while($nt=mysql_fetch_array($result)){
											echo "<option value='".$nt[klinikh]."'>".$nt[klinikh]."</option>";
										}
									?>
								</select>
						<?php
							}else {
						?>
								<?php
									$klinikh = mysql_result($sql, 0, 4);
									echo $klinikh;
								?>
								<input type="hidden" name="klinikh" <?php echo "value='".$klinikh."' " ?> />
						<?php
							}
						?>
					</td>
				</tr>
				
					<tr> <!-- Όροφος Κτιρίου [orofos] -->
					<th>Όροφος Κτιρίου</th>
					<td>
						<?php
							if ( empty($res) && empty($res) ) {
						?>
								<?php
									$query="SELECT DISTINCT orofos FROM data ";
									$result = mysql_query ($query);
								?>
								<select name="orofos">
									<option value=""></option>
									<?php
										while($nt2=mysql_fetch_array($result)){
											$nt = str_replace("'"," ",$nt2);
											echo "<option value='".$nt[orofos]."'>".$nt[orofos]."</option>";
										}
									?>
								</select>
						<?php
							}else {
						?>
								<?php
									$temp = mysql_result($sql, 0, 5);
									$orofos = str_replace("'"," ",$temp);
									echo $orofos;
								?>
								<input type="hidden" name="orofos" <?php echo "value='".$orofos."' " ?> />
						<?php
							}
						?>
					</td>
				</tr>
				
				<tr> <!-- Κωδικός Τομέα [kwdikos tomea] -->
					<th>Κωδικός Τομέα</th>
					<td>
						<?php
							if ( empty($res) && empty($res) ) {
						?>
								<?php
									$query="SELECT DISTINCT kwdikos_tomea FROM data ";
									$result = mysql_query ($query);
								?>
								<select name="kwdikos_tomea">
									<option value=""></option>
									<?php
										while($nt=mysql_fetch_array($result)){
											echo "<option value='".$nt[kwdikos_tomea]."'>".$nt[kwdikos_tomea]."</option>";
										}
									?>
								</select>
						<?php
							}else {
						?>
								<?php
									$temp = mysql_result($sql, 0, 6);
									$kwdikos_tomea = str_replace("'"," ",$temp);
									echo $kwdikos_tomea;
								?>
								<input type="hidden" name="kwdikos_tomea" <?php echo "value='".$kwdikos_tomea."' " ?> />
						<?php
							}
						?>
						
						
						
					</td>
				</tr>
				
				<tr> <!-- Εσωτερικός χώρος [eswterikos xwros] -->
					<th>Εσωτερικός χώρος</th>
					<td>
						<?php
							if ( empty($res) && empty($res) ) {
						?>
								<?php
									$query="SELECT DISTINCT eswterikos_xwros FROM data ";
									$result = mysql_query ($query);
								?>
								<select name="eswterikos_xwros">
									<option value=""></option>
									<?php
										while($nt=mysql_fetch_array($result)){
											echo "<option value='".$nt[eswterikos_xwros]."'>".$nt[eswterikos_xwros]."</option>";
										}
									?>
								</select>
						<?php
							}else {
						?>
								<?php
									$temp = mysql_result($sql, 0, 7);
									$eswterikos_xwros = str_replace("'"," ",$temp);
									echo $eswterikos_xwros;
								?>
								<input type="hidden" name="eswterikos_xwros" <?php echo "value='".$eswterikos_xwros."' " ?> />
						<?php
							}
						?>
						
					</td>
				</tr>
			</table>
		</div>
		
		<div id="add_table4">
			<table >
				<tr><!-- Πρόσωπο επικοινωνίας [user_name] -->
					<th>Πρόσωπο Eπικοινωνίας</th>	
					<td>
					<input type="text" style="color:grey;" value="Πρόσωπο Eπικοινωνίας"  onclick="this.value=''" onblur="formDefault(this)" name="user_name" />
					</td>
				</tr>
				<tr><!-- Τηλέφωνο Επικοινωνίας [user_phone] -->
					<th>Τηλέφωνο Επικοινωνίας</th>
					<td>
						<input type="tel" style="color:grey;" value="τηλέφωνο επικοινωνίας"  onclick="this.value=''" onblur="formDefault(this)" name="user_phone" />
					</td>
				
				</tr>
				<tr><!-- Προθεσμία [final_date] -->
					<th>Προθεσμία Διεκπεραίωσης</th>
					<td><input type="date" name="final_date" /></td>
				</tr>
			</table>
		</div>
		
		<div id="add_table5">
			<table>
				<tr>
					<th>Σύντομη περιγραφή</th>
					<th>Τεχνική αναφορά</th>
				</tr>
				<tr>
					<td>
						<textarea style="color:grey;" value="Περιγράψτε την βλάβη"  onclick="this.value=''" onblur="formDefault(this)" name="notes"></textarea>
					</td>
					<td>
						<textarea name="solution" style="color:grey;" value="τηλέφωνο επικοινωνίας"  onclick="this.value=''" onblur="formDefault(this)"></textarea>
					</td>
				</tr>
			</table>
		</div>
		
		<div id="add_table6">
			<table>
				<th> Επιλέξτε αν αποκαταστάθηκε η βλάβη</th>
				<td> <input type="checkbox" name="status" value="1" /> </td>
			</table>
		</div>
		<div id="add_last_submit">
			<input type="submit" name="ok" value="Εισαγωγή βλάβης" />
		</div>
	</form>
</div>
</body>
</html>