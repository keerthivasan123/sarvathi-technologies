<?php
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$message=$_POST["message"];
$subject = $_POST["subject"];
$to="support@sravathi.co.in"; // Receiver Email ID, Replace with your email ID
			            	$subject='Contact Form Submit from Sravathi website';
						
                            $headers="From: ".$email;
							 
							 $msg="Name : $name \n\n Email: $email \n\n  Contact No: $phone \n\n Subject: $subject \n\n\n\n Message: $message";
							$retval = mail ($to,$subject,$msg,$headers);
							if($retval == true){
							echo 'success';
								
							}
							else{
							echo 'failed';
								
							}
?>