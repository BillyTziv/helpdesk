<?php
	 header('Content-Type:text/html; charset=UTF-8'); 
?>
<?php	
require '../database/connect.php';
echo "Ο υπεύθυνος1 είναι: ".$responsible1 = $_POST['responsible1']; ?> <br>
<?php	echo "Ο υπεύθυνος2 είναι: ".$responsible2 = $_POST['responsible2']; ?> <br>

<?php	echo "Το όνομα χρήστη είναι: ".$user_name = $_POST['user_name']; ?> <br>
<?php	//echo "Η ημερομηνία που δημιουργήθηκε η βλάβη είναι: ".$output6 = $_POST['start_date']; ?> <br>
<?php	echo "Η ημερομηνία που διεκπαιρεώθηκε η βλάβη είναι: ".$end_date = $_POST['end_date']; ?> <br>
<?php	echo "Η κατηγορία της βλάβης είναι: ".$category = $_POST['category']; ?> <br>
<?php	echo "Το τηλέφωνο επικοινωνίας είναι: ".$user_phone = $_POST['user_phone']; ?> <br>
<?php	echo "Η πειγραφή της βλάβης είναι: ".$notes = $_POST['notes']; ?> <br>

<?php	echo "Ο κωδικός πρίζας είναι: ".$outlet_code = $_POST['outlet_code']; ?> <br>
<?php	echo "Η IP είναι: ".$ip_address = $_POST['ip_address']; ?> <br>
<?php	echo "Το Τμήμα/Μονάδα είναι: ".$tmhma_monada = $_POST['tmhma_monada']; ?> <br>
<?php	echo "Το Γραφείο/Τμήμα/Κλινική είναι: ".$klinikh = $_POST['klinikh']; ?> <br>
<?php	echo "Ο όροφος είναι: ".$orofos = $_POST['orofos']; ?> <br>
<?php	echo "Ο Κωδικός Τομέα είναι: ".$kwdikos_tomea = $_POST['kwdikos_tomea']; ?> <br>
<?php	echo "Ο εσωτερικό χώρος είναι: ".$eswterikos_xwros = $_POST['eswterikos_xwros']; ?> <br>
<?php	echo "Το όνομα υπολογιστή είναι: ".$computer_name = $_POST['computer_name']; ?> <br>
<?php	echo "Προθεσμία: ".$final_date = $_POST['final_date']; ?> <br>
<?php	echo "Τεχνική αναφορά: ".$solution = $_POST['solution']; ?> <br>

<?php	echo "Status: ".$status = $_POST['status']; ?> <br>
<?php	echo "ID: ".$id = $_POST['id']; ?> <br>

<?php
	//$output6 = str_replace("/","-",$output6);
	//$output6 = date("Y/m/d", strtotime($output6));
?>
<?php
	
	$sql = mysql_query(" UPDATE failures SET `status`='$status', `ypeuthynos`='$responsible1', `ypeuthynos2`='$responsible2', 
	`user_phone`='$user_phone', `notes`='$notes', `user_name`='$user_name', `end_date`='$end_date',
	`final_date`='$final_date', `category`='$category', `computer_name`='$computer_name', `eswterikos_xwros`='$eswterikos_xwros',
	`solution`='$solution', `kwdikos_tomea`='$kwdikos_tomea', `tmhma_monada`='$tmhma_monada', `orofos`='$orofos', `klinikh`='$klinikh',
	`ip_address`='$ip_address', `outlet_code`='$outlet_code', `end_date`='$end_date' WHERE failures.id='$id' " );
	
	if ( $sql == false) {
		echo "Fail!";
	}else{
		echo "Success!";
	}
	header('Location: ../view/view.php');
?>
