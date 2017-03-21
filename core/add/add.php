<?php
	 header('Content-Type:text/html; charset=UTF-8'); 
	 session_start(); 
	 if( !isset($_SESSION['user_id']) ){ 
		//echo "Δεν μπορείτε να δείτε το περιεχόμενο γιατί δεν έχετε συνδεθεί! "; 
		//header('Location: ../index.php'); 
	 }else { 
		include '../database/connect.php'; 
	 } 
   
	 function real_name() { 
		require '../database/connect.php'; 
		$id = $_SESSION['user_id']; 
		$r = mysql_query(" SELECT real_name FROM users WHERE `username`='$id' "); 
		return mysql_result($r, 0, 0); 
	 } 
	 if(isset($_POST['search_result'])){ 
		$name = $_POST['search_result']; 
	 } 
	 if(!empty($name)){ 
		$sql = mysql_query(" SELECT * FROM data WHERE  outlet_code='$name'");    
	 } 
	
?> 
	  
<html> 
   <head> 
      <link rel="stylesheet" type="text/css" href="../../css/add_style.css" /> 
      <meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
      <script type="text/javascript" src="jquery-1.7.2.min.js"></script> 
      <script type="text/javascript" src="search.js"></script> 
      <script type="text/javascript"> 
         function formDefault(theInput) { 
            if (theInput.value =='') { 
               theInput.value = theInput.defaultValue; 
            } 
         } 
      </script> 
      
   </head> 
   <body> 
      <div id="header"> 
         <div id="header_top"> 
            <div id="header_left"> 
               <table> 
                  <tr> 
                     <td><img style="border-radius: 5px;" width="350" height="100" src="../../images/helpdesk_logo/helpdesk_head_1.jpg" value="HELPDESK" /></td> 
                     <td id="version">V 1.0</td> 
                  </tr> 
               </table> 
            </div> 
             
            <div id="header_right"> 
                     <table> 
                        <tr> 
                           <td id="header_right_info">Συνδεθήκατε ως:</td> 
                           <td> 
                              <div id="header_right_name"> <?php echo real_name(); ?> </div> 
                           </td> 
                        </tr> 
                        <tr> 
                           <td style="width: 30px; "> 
                              <table> 
                                 <tr> 
                                    <td><a href="../functions/logout.php"><img height="29px" width="29px" src="../../images/logout.png" value="asd"/></a></tD> 
                                    <td><a href="../functions/logout.php">Αποσύνδεση</a></td> 
                                 </tr> 
                              </table> 
                           </td> 
                        </tr> 
                     </table> 
            </div> 
         </div> 
          
         <div id="header_menu"> 
            <ul id="menu_list"> 
               <li class="menu_item" > <a class="menu_link" href="add.php">ΠΡΟΣΘΗΚΗ</a> </li> 
               <li class="menu_item" > <a class="menu_link" href="../view/view.php">ΠΡΟΒΟΛΗ</a> </li> 
               <li class="menu_item" > <a class="menu_link" href="../search/search.php">ΑΝΑΖΗΤΗΣΗ</a> </li> 
               <li class="menu_item" > <a class="menu_link" href="../history/history.php">ΙΣΤΟΡΙΚΟ</a> </li> 
            </ul> 
         </div> 
      </div> 
       
      <div id="main"> 
         <h2 id="add_title"> Eισαγωγη νεας βλαβης </h2> 
         <div id="add_main_inside"> 
          
            <!-- STEP 1 --> 
            <div id="step1"> 
               <div id="add_step_title">Βήμα 1: Αναζήτηση</div> 
               <?php include('search.php'); ?> 
            </div> 
             
            <!-- STEP 2 --> 
            <div id="step2"> 
               <div id="add_step_title">Βήμα 2: Εισαγωγή στοιχείων</div> 
               <?php 
                  if(isset($sql)){ 
                     $res = mysql_result($sql, 0, 0); 
                  } 
                  require 'form.php';
               ?> 
            </div> 
         </div> 
      </div> 
       
      <div id="footer"> 
         Ομάδα Πρακτικής 2012 
      </div> 
   </body> 
</html>