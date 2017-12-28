<!-----------------------------------
Variables passed though $_POST
(στα x υπάρχει λάθος)

Κωδικός πρίζας: 			output1 
Υπεύθυνος: 					output2 
IP: 						output3 
Πρόσωπο επικοινωνίας: 		output4 
Τμήμα/Μονάδα: 				output5 
Ημερομ/νια Καταχώρισης: 	output6
Γραφείο/Τμήμα/Κλινική: 		output7 
Ημερομηνία διεκπεραίωσης: 	output8
Όροφος: 					output9 
Κατηγορία: 					output10
Κωδ. Τομέα: 				output11 
Τηλ. Επικοινωνίας:			output12 
Εσωτερικός χώρος: 			output13 
Όνομα Υπολογιστή: 			output14 
Περιγραφή βλάβης: 			output15
Προσθεσμία:					output16
Τεχνική αναφορά:			outout17
------------------------------------>
<?php require ("../database/connect.php"); ?>

<?php	echo "Ο υπεύθυνος1 είναι: ".$output2 = $_POST['responsible1']; ?> <br>
<?php	echo "Ο υπεύθυνος2 είναι: ".$output2_2 = $_POST['responsible2']; ?> <br>
<?php	echo "Το όνομα χρήστη είναι: ".$output4 = $_POST['user_name']; ?> <br>
<?php	echo "Η ημερομηνία που δημιουργήθηκε η βλάβη είναι: ".$output6 = $_POST['start_date']; ?> <br>
<?php	echo "Η ημερομηνία που διεκπαιρεώθηκε η βλάβη είναι: ".$output8 = $_POST['end_date']; ?> <br>
<?php	echo "Η κατηγορία της βλάβης είναι: ".$output10 = $_POST['category']; ?> <br>
<?php	echo "Το τηλέφωνο επικοινωνίας είναι: ".$output12 = $_POST['user_phone']; ?> <br>
<?php	echo "Η πειγραφή της βλάβης είναι: ".$output15 = $_POST['notes']; ?> <br>

<?php	echo "Ο κωδικός πρίζας είναι: ".$output1 = $_POST['outlet_code']; ?> <br>
<?php	echo "Η IP είναι: ".$output3 = $_POST['ip_address']; ?> <br>
<?php	echo "Το Τμήμα/Μονάδα είναι: ".$output5 = $_POST['tmhma_monada']; ?> <br>
<?php	echo "Το Γραφείο/Τμήμα/Κλινική είναι: ".$output7 = $_POST['klinikh']; ?> <br>
<?php	echo "Ο όροφος είναι: ".$output9 = $_POST['orofos']; ?> <br>
<?php	echo "Ο Κωδικός Τομέα είναι: ".$output11 = $_POST['kwdikos_tomea']; ?> <br>
<?php	echo "Ο εσωτερικό χώρος είναι: ".$output13 = $_POST['eswterikos_xwros']; ?> <br>
<?php	echo "Το όνομα υπολογιστή είναι: ".$output14 = $_POST['computer_name']; ?> <br>
<?php	echo "Προθεσμία: ".$output16 = $_POST['final_date']; ?> <br>
<?php	echo "Τεχνική αναφορά: ".$output17 = $_POST['solution']; ?> <br>

<?php
	//$output6 = str_replace("/","-",$output6);
	//$output6 = date("Y/m/d", strtotime($output6));
?>

<?php
	mysql_query("INSERT INTO failures (outlet_code, ip_address, tmhma_monada, klinikh, orofos, kwdikos_tomea, eswterikos_xwros, computer_name, ypeuthynos, ypeuthynos2, user_name, user_phone, start_date, end_date, notes, category, final_date, solution) VALUES('$output1', '$output3','$output5','$output7','$output9','$output11','$output13','$output14','$output2', '$output2_2', '$output4','$output12','$output6','$output8','$output15','$output10','$output16','$output17') ");
	header('Location: ../view/view.php');
?>