<?php
	if(!empty($orofos))
	{	
		$sql = mysql_query(" SELECT id FROM failures WHERE orofos='$orofos' ");
		if($sql == false){
			echo "exoyme problima";
		}
		
		$rows = mysql_num_rows($sql);
		for($i=0; $i<$rows; $i++){
			$array[$i] = mysql_result($sql,$i,0);
		}
		
		$matches = implode(',', $array);
		
		if(!empty($final_date))
		{
			if(!empty($final_date)){
				$sql = mysql_query(" SELECT id FROM failures WHERE final_date='$final_date' AND id IN ($matches)");
				if($sql == false){
					echo "exoyme problima";
				}
				$rows = mysql_num_rows($sql);

				if($rows == 0){
					$array=array(0);
				}
				else{
					if($rows <= $i){
						for($j=0; $j<$i; $j++){
							$array[$j] = 0;
						}
					}

					for($i=0; $i<$rows; $i++){
						$array[$i] = mysql_result($sql,$i,0);
					}
				}
				$matches = implode(',', $array);
			}
		}
		if(!empty($outlet_code)){	//outlet_code
			$sql = mysql_query(" SELECT id FROM failures WHERE outlet_code='$outlet_code' AND id IN ($matches)");
			if($sql == false){
				echo "exoyme problima";
			}
			$rows = mysql_num_rows($sql);
			
			if($rows == 0){
				$array=array(0);
			}
			else{
				if($rows <= $i){
					for($j=0; $j<$i; $j++){
						$array[$j] = 0;
					}
				}

				for($i=0; $i<$rows; $i++){
					$array[$i] = mysql_result($sql,$i,0);
				}
			}
			$matches = implode(',', $array);
		}
		if(!empty($computer_name)){	//computer_name
			$sql = mysql_query(" SELECT id FROM failures WHERE computer_name='$computer_name' AND id IN ($matches)");
			if($sql == false){
				echo "exoyme problima";
			}
			$rows = mysql_num_rows($sql);
			
			if($rows == 0){
				$array=array(0);
			}
			else{
				if($rows <= $i){
					for($j=0; $j<$i; $j++){
						$array[$j] = 0;
					}
				}
				for($i=0; $i<$rows; $i++){
					$array[$i] = mysql_result($sql,$i,0);
				}
			}
			$matches = implode(',', $array);
		}
		if(!empty($category)){	//category
			$sql = mysql_query(" SELECT id FROM failures WHERE category='$category' AND id IN ($matches)");
			if($sql == false){
				echo "exoyme problima";
			}
			$rows = mysql_num_rows($sql);

			if($rows == 0){
				$array=array(0);
			}
			else{
				if($rows <= $i){
					for($j=0; $j<$i; $j++){
						$array[$j] = 0;
					}
				}
				for($i=0; $i<$rows; $i++){
					$array[$i] = mysql_result($sql,$i,0);
				}
			}
			$matches = implode(',', $array);
		}
		if(!empty($ypeuthynos)){	//ypeuthynos
			$sql = mysql_query(" SELECT id FROM failures WHERE ypeuthynos='$ypeuthynos' AND id IN ($matches)");
			if($sql == false){
				echo "exoyme problima";
			}
			$rows = mysql_num_rows($sql);
			if($rows == 0){
				$array=array(0);
			}
			else{
				if($rows <= $i){
					for($j=0; $j<$i; $j++){
						$array[$j] = 0;
					}
				}

				for($i=0; $i<$rows; $i++){
					$array[$i] = mysql_result($sql,$i,0);
				}
			}
			$matches = implode(',', $array);
		}
		if(!empty($start_date)){
			$sql = mysql_query(" SELECT id FROM failures WHERE start_date='$start_date' AND id IN ($matches)");
			if($sql == false){
				echo "exoyme problima";
			}
			$rows = mysql_num_rows($sql);

			if($rows == 0){
				$array=array(0);
			}
			else{
				if($rows <= $i){
					for($j=0; $j<$i; $j++){
						$array[$j] = 0;
					}
				}

				for($i=0; $i<$rows; $i++){
					$array[$i] = mysql_result($sql,$i,0);
				}
			}
			$matches = implode(',', $array);
		}
		if(!empty($end_date)){
			$sql = mysql_query(" SELECT id FROM failures WHERE end_date='$end_date' AND id IN ($matches)");
			if($sql == false){
				echo "exoyme problima";
			}
			$rows = mysql_num_rows($sql);

			if($rows == 0){
				$array=array(0);
			}
			else{
				if($rows <= $i){
					for($j=0; $j<$i; $j++){
						$array[$j] = 0;
					}
				}

				for($i=0; $i<$rows; $i++){
					$array[$i] = mysql_result($sql,$i,0);
				}
			}
			$matches = implode(',', $array);
		}
		if(!empty($tmhma_monada)){	
			$sql = mysql_query(" SELECT id FROM failures WHERE tmhma_monada='$tmhma_monada' AND id IN ($matches)");
			if($sql == false){
				echo "exoyme problima";
			}
			$rows = mysql_num_rows($sql);

			if($rows == 0){
				$array=array(0);
			}
			else{
				if($rows <= $i){
					for($j=0; $j<$i; $j++){
						$array[$j] = 0;
					}
				}

				for($i=0; $i<$rows; $i++){
					$array[$i] = mysql_result($sql,$i,0);
				}
			}
			$matches = implode(',', $array);
		}
		if(!empty($klinikh)){	
			$sql = mysql_query(" SELECT id FROM failures WHERE klinikh='$klinikh' AND id IN ($matches)");
			if($sql == false){
				echo "exoyme problima";
			}
			$rows = mysql_num_rows($sql);

			if($rows == 0){
				$array=array(0);
			}
			else{
				if($rows <= $i){
					for($j=0; $j<$i; $j++){
						$array[$j] = 0;
					}
				}

				for($i=0; $i<$rows; $i++){
					$array[$i] = mysql_result($sql,$i,0);
				}
			}
			$matches = implode(',', $array);
		}
		if(!empty($ypeuthynos2)){	//ypeuthynos
			$sql = mysql_query(" SELECT id FROM failures WHERE ypeuthynos2='$ypeuthynos2' AND id IN ($matches)");
			if($sql == false){
				echo "exoyme problima";
			}
			$rows = mysql_num_rows($sql);
			if($rows == 0){
				$array=array(0);
			}
			else{
				if($rows <= $i){
					for($j=0; $j<$i; $j++){
						$array[$j] = 0;
					}
				}

				for($i=0; $i<$rows; $i++){
					$array[$i] = mysql_result($sql,$i,0);
				}
			}
			$matches = implode(',', $array);
		}
		
		if(!empty($status)){
			if($status == "-1")
			{
				$sql = mysql_query(" SELECT id FROM failures WHERE status=0 AND id IN ($matches)");
			}
			else if($status == "1"){
				$sql = mysql_query(" SELECT id FROM failures WHERE status=1 AND id IN ($matches)");
			}
			else{
				$sql = mysql_query(" SELECT id FROM failures WHERE id IN ($matches)");
			}
			if($sql == false){
				echo "exoyme problima";
			}
			$rows = mysql_num_rows($sql);

			if($rows == 0){
				$array=array(0);
			}
			else{
				if($rows <= $i){
					for($j=0; $j<$i; $j++){
						$array[$j] = 0;
					}
				}

				for($i=0; $i<$rows; $i++){
					$array[$i] = mysql_result($sql,$i,0);
				}
			}
			$matches = implode(',', $array);
		}
	}
?>