<?php 

##########################################################################################

# Vote Form Handler Function for Severe Weather Guide 

# Author: Mike Poisel
# Created: 06.09.14

##########################################################################################
session_start();

if(!isset($_POST['formdata'])){
	
	$_POST['first_name'] = '';
	$_POST['last_name'] = '';
	$_POST['email'] = '';
	$_POST['zip'] = '';
	$message = '';
}

if($_POST['formdata'] == 'yes') {
		
	$submission_error = NULL;
	
	$allmissing_message = '<div id="error_msg">&#42;All Information is required.</div>';
	$notvalidemail_message = '<div id="error_msg">&#42;Please enter a valid email and agree to the terms.</div>';
	$duplicateemail_message = '<div id="error_msg">&#42;Only one entry per email address is allowed.</div>';
	$thanks_message = '<div id="error_msg">Thank you for entering!</div>';

	if(!$_POST['first_name'] || !$_POST['last_name'] || !$_POST['email'] || !$_POST['zip'] || !$_POST['terms_and_conditions']) {
				
		$submission_error = 'yes';
		$message = $allmissing_message;
				
	}

	if(is_null($submission_error)) {
			
		$notvalidemail_error = NULL;
		
		$email = $_POST['email'];
		
		function valid_email($email) {
		
			return preg_match("/([a-z0-9_-]+(\.[a-z0-9_-]+)?@[a-z0-9_-]+\.[a-z0-9_-]{2,4}(\.[a-z0-9_-]{2,4})?)/i",$email);
							  
		
		}
		
		if(!valid_email($email)) {
			
			$notvalidemail_error = 'yes';
			$message = $notvalidemail_message;
		
		}
			
	}
		
	if(is_null($submission_error) && is_null($notvalidemail_error)) { 
				
		include '../../phpclasses/qdatabase.class.php';
		mysql_select_db('patchology') or die('Could not select database:'. mysql_error());
		
		$sql = "SELECT email FROM patchologyentrants WHERE email = '".$_POST['email']."'";
		
		$dbresult = mysql_query($sql) or die(mysql_error());

		if(mysql_result($dbresult,0) == $_POST['email']) {
			
			### DEBUG ###
			#print '<p>1</p>'; /*Affirmative*/
			### DEBUG ###
			
			$message = $duplicateemail_message;
			
		} else {
			
			$sql = "INSERT INTO patchologyentrants (first_name, last_name, email, zip, sign_up_modlux, confirm_terms, submission_ip) VALUES ('" . $_POST['first_name'] . "','" . $_POST['last_name'] . "', '" . $_POST['email'] . "', '" . $_POST['zip'] .  "', '" . $_POST['sign_up_modlux'] .  "', '" . $_POST['terms_and_conditions'] . "', '" . $_SERVER['REMOTE_ADDR'] . "')";
			
			$dbresult = mysql_query($sql) or die(mysql_error());
			
			
			
			$message = $thanks_message;
			
			
			
			$_POST['first_name'] = '';
			$_POST['last_name'] = '';
			$_POST['email'] = '';
			$_POST['zip'] = '';
			
			
			$message = '<div id="error_msg">Your entry has been received. Thank You!</div> <style>span, form input, textarea, p.borne, form input.form_submit, .checkbox, p.checkbox_copy, p.checkbox_copy_2, .btn {display:none;}</style>';
			//redirect to advertizer's website with a 2 second delay
			//header("refresh:2; url=http://www.losaltosdeeros.com/");
			
		}
	
	}
	
}

     

?>