<?php

$to 		= 'query@convicare.com';
$headers	= 'Dr. Arun Saroha Website';
$subject = 'Dr. Arun Saroha Website';

//All form values
$output 	= "Contact Information
                                 Name:{$_POST['name']}
                                 Phone No:{$_POST['phone']}
                                 Message:{$_POST['message']}
                                
                                 
                                
                               ";

$send		= mail($to, $subject, $output, $headers);
	$redirect = 'thankyou.html';
               
echo "<script>window.location='{$redirect}';</script>";