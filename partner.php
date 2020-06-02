

<?php
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$message=$_POST["message"];
$subject = $POST["subject"];
$to="support@sravathi.co.in"; // Receiver Email ID, Replace with your email ID
			            	$subject="Partner request form submitted by $name";
						
                            $headers="From: ".$email;
							 
							 $msg="Name : $name \n\n Email: $email \n\n  Contact No: $phone \n\n Subject: $subject \n\n\n\n Message: $message";
							if($retval == true){
							echo 'success';
								
							}
							else{
							echo 'failed';
								
							}
?>