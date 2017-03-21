<?php
	 header('Content-Type:text/html; charset=UTF-8'); 
?>

<html>
<head>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<?php
			include '../database/connect.php';
			 $id = $_POST['id'];
			$sql_join = mysql_query(" SELECT * FROM failures WHERE failures.id='$id' ");
			if($sql_join == false){
				echo "exoume problima sto mysql_query";
			}
		?>
</head>

<body>
	<div id="main_form">
		<div id="header_form">
			<div id="info">
				<div id="info_left">
					<img width="125" height="100" src="images/image.png" />
				</div>
				<div id="info_center">
					ΥΠΟΥΡΓΕΙΟ ΥΓΕΙΑΣ ΚΑΙ ΚΟΙΝΩΝΙΚΗΣ ΑΛΛΗΛΕΓΓΥΗΣ <br />
					<b>ΠΑΝΕΠΙΣΤΗΜΙΑΚΟ ΓΕΝΙΚΟ</b> <br />
					<b>ΝΟΣΟΚΟΜΕΙΟ ΙΩΑΝΝΙΝΩΝ </b><br />
					<table>
						<tr>
							<td>ΜΟΝΑΔΑ: </td>
							<td><input type="text"  name="tmhma_monada" value="<?php echo mysql_result($sql_join, 0, 5); ?>" /><br></td>
						</tr>
						<tr>
							<td>ΚΛΙΝΙΚΗ: </td>
							<td><input type="text"  name="klinikh" value="<?php echo mysql_result($sql_join, 0, 6); ?>" /></td>
						</tr>
				</table>
				</div>
				<div id="info_right">
					<table>
						<tr>
							<td>Ημ/νία:</td>
							<td><input type="hidden" name="start_date" <?php echo "value='".date('Y/m/d')."'"; ?> />
							<?php echo date('d/m/Y'); ?></td>
						</tr>
						<tr>
							<td>Αρ.πρωτ:</td>
							<td><input type="text" name="protocol_number" /></td>
						</tr>
					</table>
				</div>
			</div>
			<div id="header_title">
				ΑΙΤΗΣΗ ΠΑΡΟΧΗΣ ΜΗΧΑΝΟΓΡΑΦΙΚΩΝ ΥΠΗΡΕΣΙΩΝ
			</div>
		</div>
		<div id="block1">
			<div class="block_title">
				 ΣΤΟΙΧΕΙΑ ΑΙΤΟΥΝΤΟΣ 
			</div>
			<div id="block1_data">
				<table>
					<tr>
						<td> Επώνυμο:</td>
						<td> <input type="text" name="sur_name" /> </td>
						<td> Όνομα:</td>
						<td> <input type="text" name="first_name" /> </td>
						<td> Πατρώνυμο:</td>
						<td> <input type="text" name="father_name" /> </td>
					</tr>
					<tr>
						<td> Τμήμα/Κλινική:</td>
						<td> <input type="text" name="tmhma_klinikh" /> </td>
						<td> Τηλέφ:</td>
						<td> <input type="text" name="phone" value="<?php echo mysql_result($sql_join, 0, 17); ?>"  /> </td>
						<td> LAN Outlet:</td>
						<td> <input type="text" name="lan_outlet" /> </td>
					</tr>
				</table>
			</div>
		</div>
		<div id="block2">
			<div class="block_title">
				ΚΑΤΗΓΟΡΙΑ ΑΙΤΟΥΜΕΝΩΝ ΥΠΗΡΕΣΙΩΝ
			</div>
			<div id="block2_data">
				Επιλέξτε ένα απο τα παρακάτω: <br /> <br />
				<form id="block2_choice" action="" method="">
					<table>
						<tr>
							<td>1. Αποκατάσταση βλάβης ή δυσλειτουργίας εξοπλισμού </td> 
							<td> <input type="radio" name="service" value="1" /> </td>
						</tr>
						<tr>
							<td>2. Αποκατάσταση πρόσβασης στο Τοπικό Δίκτυο του Νοσοκομείου </td>
							<td> <input type="radio" name="service" value="2" /> </td>
						</tr>
						<tr>
							<td>3. Αποκατάσταση πρόσβασης στο Διαδίκτυο ή ηλεκτρονικό Ταχυδρομείο </td>
							<td><input type="radio" name="service" value="3" /> </td>
						</tr>
						<tr>
							<td>4. Αποκατάσταση πρόσβασης σε Εφαρμογή του Πληροφοριακού Συστήματος</td>  
							<td> <input type="radio" name="service" value="4" /></td>
						</tr>
						<tr>
							<td>5. Υποστήριξη μέσω εφαρμογών υφιστάμενης εφαρμογής του Πληροφοριακού Συστήματος του Νοσοκομείου</td> 
							<td> <input type="radio" name="service" value="5" /></td>
						</tr>
						<tr>
							<td>6. Δημιουργία report εκτός εφαρμογής σε έντυπη ή ηλεκτρονική μορφή</td> 
							<td> <input type="radio" name="service" value="6" /> </td> 
						</tr>
						<tr>
							<td>7. Εκπόνηση μελέτης - αναφοράς</td>  
							<td> <input type="radio" name="service" value="7" /> </td>
						</tr>
						<tr>
							<td>8. Έκδοση στατιστικών αποτελεσμάτων</td>  
							<td> <input type="radio" name="service" value="8" /></td> 
						</tr>
						<tr>
							<td>9. Υποστήριξη του υλικού χρήστη ή χρηστών</td>  
							<td> <input type="radio" name="service" value="9" /></td> 
						</tr>
						<tr>
							<td>10. Εκπαίδευση χρήστη ή χρηστών</td>  
							<td> <input type="radio" name="service" value="10" /></td> 
						</tr>
						<tr>
							<td>11. Υπηρεσίες Ιατρικής Φωτογραφίας</td> 
							<td> <input type="radio" name="service" value="11" /></td> 
						</tr>
						<tr>
							<td>12. Κάτι άλλο: <input size="100px" type="text" name="service_field" /></td>  
							<td> <input type="radio" name="sex" value="female" /></td> 
						</tr>
						<tr>
					</table>
				</form>
			</div>
		</div>
		<div id="block3">
			<div class="block_title">
				ΠΕΡΙΓΡΑΦΗ ΑΙΤΟΥΜΕΝΩΝ ΜΗΧΑΝΟΓΡΑΦΙΚΩΝ ΥΠΗΡΕΣΙΩΝ
			</div>
			<div id="block3_data">
				<textarea name="notes" <?php echo "value='".mysql_result($sql_join, 0, 18)."'" ?> rows="3" cols="99"> <?php echo $output9 = mysql_result($sql_join, 0, 18); ?> </textarea>
			</div>
			<div id="block3_footer">
				<table cellpadding="5px" cellspacing="5px;">
					<tr>
						<td>Παρατηρήσεις: </td>
						<td>Υπογραφή προϋστάμενου του Τμήματος:</td>
					</tr>
					<tr>
						<td> <textarea rows="3px" cols="46px"> </textarea> </td>
						<td> <textarea rows="3px" cols="46px"> </textarea> </td>
					</tr>
				</table>
			</div>
		</div>
		<div id="block4">
			<div class="block_title">
				ΕΙΣΗΓΗΣΗ ΥΠΗΡΕΣΙΑΣ ΠΛΗΡΟΦΟΡΙΚΗΣ
			</div>
			<div id="block4_data">
				Οι αιτούμενες υπηρρεσίες είναι πραγματοποιήσιμες απο την Υ. Πληροφορικής;
				<form action="" method="POST">
					ΝΑΙ <input type="radio" name="epilogh" value="yes" />
					ΟΧΙ <input type="radio" name="epilogh" value="no" />
				</form> 
			</div>
		</div>
		<div id="block5">
			<div id="block5_table">
				<table>
					<tr id="block5_table_tr">
						<td> α/α</td>
						<td> Απαιτούμενες εργασίες</td>
						<td> Πιθανό κόστος</td>
					</tr>
					<tr>
						<td class="aa"> <input  class="aa" type="text" name=""/> </td>
						<td class="ergasies"> <input class="ergasies" type="text" name=""/> </td>
						<td> <input type="text" name=""/> </td>
					</tr>
					<tr>
						<td class="aa"> <input class="aa"  type="text" name=""/> </td>
						<td class="ergasies"> <input class="ergasies" type="text" name=""/> </td>
						<td> <input type="text" name=""/> </td>
					</tr>
					<tr>
						<td class="aa"> <input class="aa" type="text" name=""/> </td>
						<td class="ergasies"> <input class="ergasies" type="text" name=""/> </td>
						<td> <input type="text" name=""/> </td>
					</tr>
					<tr>
						<td class="aa"> <input class="aa" type="text" name=""/> </td>
						<td class="ergasies"> <input class="ergasies" type="text" name=""/> </td>
						<td> <input type="text" name=""/> </td>
					</tr>
				</table>
				<table cellpadding="5px" cellspacing="5px;">
					<tr>
						<td>Παρατηρήσεις: </td>
						<td>Ο Διευθυντής:</td>
					</tr>
					<tr>
						<td> <textarea rows="3px" cols="46px"> </textarea> </td>
						<td> <textarea rows="3px" cols="46px"> </textarea> </td>
					</tr>
				</table>
				Εισήγηση:
				<form action="" method="POST">
					ΝΑΙ <input type="radio" name="epilogh" value="yes" />
					ΟΧΙ <input type="radio" name="epilogh" value="no" />
					ΑΛΛΟ <input type="text" name="epilogh" value="" />
				</form> 
			</div>
		</div>
	</div>
	<div id="footer_form">
		Π.Γ.Ν. ΙΩΑΝΝΙΝΩΝ. - Υπηρεσία Πληροφορικής - Τηλ.  26510 99441 & 558 - 559
	</div>
</body>
</html>
</html>