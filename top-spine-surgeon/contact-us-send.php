<?php include 'data.php';?>
<?php

if (isset($_POST['submit']))
{
    
    

                $subject = "top-spine-surgeon Dr. Arun Saroha Money Page";

                $message = "<table style='border-collapse: collapse' border='1' cellspacing='0' cellpadding='6'>
                            <tbody>
                                <tr style='background: #47B7E8; color: #ffffff;'>
                                    <th colspan='2'>Contact Information</th>
                                </tr>
                                <tr style='background: #eee;'>
                                    <td>name</td><td>{$_POST['name']}</td>
                                </tr>  
                                 <tr style='background: #eee;'>
                                    <td>Email</td><td>{$_POST['email']}</td>
                                </tr>
 
                                <tr style='background: #eee;'>
                                    <td>Phone</td><td>{$_POST['phone']}</td>
                                </tr>
                                 
                                
                            </tbody>
                        </table>";
                                    
                    $to = "query@convicare.com";
                    $from = $_POST['email'];
                    $headers .= 'MIME-Version: 1.0'."\r\n";
                    $headers ="From: $from \r\n";
                    $headers .= 'Content-type:text/html;charset=iso-8859-1'."\r\n"; 
                    @mail($to,$subject,$message,$headers);
                    $redirect = 'thankyou.html';
                    echo "<script>window.location='{$redirect}';</script>";
                    
                   }

?> 