<?php
	 header('Content-Type:text/html; charset=UTF-8'); 
?>
<?php	
require '../database/connect.php';
echo "� ���������1 �����: ".$responsible1 = $_POST['responsible1']; ?> <br>
<?php	echo "� ���������2 �����: ".$responsible2 = $_POST['responsible2']; ?> <br>

<?php	echo "�� ����� ������ �����: ".$user_name = $_POST['user_name']; ?> <br>
<?php	//echo "� ���������� ��� ������������� � ����� �����: ".$output6 = $_POST['start_date']; ?> <br>
<?php	echo "� ���������� ��� �������������� � ����� �����: ".$end_date = $_POST['end_date']; ?> <br>
<?php	echo "� ��������� ��� ������ �����: ".$category = $_POST['category']; ?> <br>
<?php	echo "�� �������� ������������ �����: ".$user_phone = $_POST['user_phone']; ?> <br>
<?php	echo "� �������� ��� ������ �����: ".$notes = $_POST['notes']; ?> <br>

<?php	echo "� ������� ������ �����: ".$outlet_code = $_POST['outlet_code']; ?> <br>
<?php	echo "� IP �����: ".$ip_address = $_POST['ip_address']; ?> <br>
<?php	echo "�� �����/������ �����: ".$tmhma_monada = $_POST['tmhma_monada']; ?> <br>
<?php	echo "�� �������/�����/������� �����: ".$klinikh = $_POST['klinikh']; ?> <br>
<?php	echo "� ������ �����: ".$orofos = $_POST['orofos']; ?> <br>
<?php	echo "� ������� ����� �����: ".$kwdikos_tomea = $_POST['kwdikos_tomea']; ?> <br>
<?php	echo "� ��������� ����� �����: ".$eswterikos_xwros = $_POST['eswterikos_xwros']; ?> <br>
<?php	echo "�� ����� ���������� �����: ".$computer_name = $_POST['computer_name']; ?> <br>
<?php	echo "���������: ".$final_date = $_POST['final_date']; ?> <br>
<?php	echo "������� �������: ".$solution = $_POST['solution']; ?> <br>

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
