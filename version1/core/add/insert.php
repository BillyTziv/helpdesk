<!-----------------------------------
Variables passed though $_POST
(��� x ������� �����)

������� ������: 			output1 
���������: 					output2 
IP: 						output3 
������� ������������: 		output4 
�����/������: 				output5 
������/��� �����������: 	output6
�������/�����/�������: 		output7 
���������� �������������: 	output8
������: 					output9 
���������: 					output10
���. �����: 				output11 
���. ������������:			output12 
���������� �����: 			output13 
����� ����������: 			output14 
��������� ������: 			output15
����������:					output16
������� �������:			outout17
------------------------------------>
<?php require ("../database/connect.php"); ?>

<?php	echo "� ���������1 �����: ".$output2 = $_POST['responsible1']; ?> <br>
<?php	echo "� ���������2 �����: ".$output2_2 = $_POST['responsible2']; ?> <br>
<?php	echo "�� ����� ������ �����: ".$output4 = $_POST['user_name']; ?> <br>
<?php	echo "� ���������� ��� ������������� � ����� �����: ".$output6 = $_POST['start_date']; ?> <br>
<?php	echo "� ���������� ��� �������������� � ����� �����: ".$output8 = $_POST['end_date']; ?> <br>
<?php	echo "� ��������� ��� ������ �����: ".$output10 = $_POST['category']; ?> <br>
<?php	echo "�� �������� ������������ �����: ".$output12 = $_POST['user_phone']; ?> <br>
<?php	echo "� �������� ��� ������ �����: ".$output15 = $_POST['notes']; ?> <br>

<?php	echo "� ������� ������ �����: ".$output1 = $_POST['outlet_code']; ?> <br>
<?php	echo "� IP �����: ".$output3 = $_POST['ip_address']; ?> <br>
<?php	echo "�� �����/������ �����: ".$output5 = $_POST['tmhma_monada']; ?> <br>
<?php	echo "�� �������/�����/������� �����: ".$output7 = $_POST['klinikh']; ?> <br>
<?php	echo "� ������ �����: ".$output9 = $_POST['orofos']; ?> <br>
<?php	echo "� ������� ����� �����: ".$output11 = $_POST['kwdikos_tomea']; ?> <br>
<?php	echo "� ��������� ����� �����: ".$output13 = $_POST['eswterikos_xwros']; ?> <br>
<?php	echo "�� ����� ���������� �����: ".$output14 = $_POST['computer_name']; ?> <br>
<?php	echo "���������: ".$output16 = $_POST['final_date']; ?> <br>
<?php	echo "������� �������: ".$output17 = $_POST['solution']; ?> <br>

<?php
	//$output6 = str_replace("/","-",$output6);
	//$output6 = date("Y/m/d", strtotime($output6));
?>

<?php
	mysql_query("INSERT INTO failures (outlet_code, ip_address, tmhma_monada, klinikh, orofos, kwdikos_tomea, eswterikos_xwros, computer_name, ypeuthynos, ypeuthynos2, user_name, user_phone, start_date, end_date, notes, category, final_date, solution) VALUES('$output1', '$output3','$output5','$output7','$output9','$output11','$output13','$output14','$output2', '$output2_2', '$output4','$output12','$output6','$output8','$output15','$output10','$output16','$output17') ");
	header('Location: ../view/view.php');
?>