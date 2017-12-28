<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
</head>
<body>
	<?php
		mysql_connect('localhost', 'root', 'Pra123root') or die('Could not connect to database man!');
		mysql_select_db('helpdesk') or die('Could not select database!');
		mysql_query("SET NAMES 'utf8'");
		$search_term = $_POST['search_term'];
	
		$search = mysql_query(" SELECT outlet_code, orofos, klinikh, tmhma_monada FROM data WHERE `outlet_code` LIKE '%$search_term%' OR `computer_name` LIKE '%$search_term%' OR `klinikh` LIKE '%$search_term%' ");
	?> 
		<select size="13px" name="search_result"  style="width: 100%" > 
			<?php    
			$padding = "&nbsp;&nbsp;&nbsp;"; 
			while( $results_row = mysql_fetch_assoc($search)) {
				echo "<option value='$results_row[outlet_code]'>"."$results_row[outlet_code]"."$padding.$results_row[tmhma_monada]"."$padding.$results_row[klinikh]"."$padding.$results_row[orofos]"."</option>"; 
			} 
			?>
		</select>
</body>
</html>