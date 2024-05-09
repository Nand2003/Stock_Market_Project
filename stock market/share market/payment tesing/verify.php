<?php

require('config.php');

session_start();

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    
             

             /*use PHPMailer\PHPMailer\PHPMailer;
             use PHPMailer\PHPMailer\SMTP;
             use PHPMailer\PHPMailer\Exception;*/
             
             require ("./include/PHPMailer.php");
             require ("./include/SMTP.php");
             
             require ("./include/Exception.php");
             
             $mail = new PHPMailer\PHPMailer\PHPMailer(true);
             
                                           
             //Set PHPMailer to use SMTP.
             $mail->isSMTP();            
             //Set SMTP host name                          
             $mail->Host = "smtp.gmail.com";
             //Set this to true if SMTP host requires authentication to send email
             $mail->SMTPAuth = true;                          
             //Provide username and password     
             $mail->Username = "nandthaker2003@gmail.com";                 
             $mail->Password = "nand2003";                           
             //If SMTP requires TLS encryption then set it
             $mail->SMTPSecure = "tls";                           
             //Set TCP port to connect to
             $mail->Port = 587;                                   
             
             $mail->From = "nandthaker2003@gmail.com";
             $mail->FromName = "Nand Thaker";
             
             $mail->addAddress("harshj0107@gmail.com", "Nand");
             
             $mail->isHTML(true);
             
             $mail->Subject = "Nand";
             $mail->Body = '<i>YOUR PAYMENT DONE WITH RUPEES '.$_SESSION["amount"].' </i>';
             $mail->AltBody = "This is the plain text version of the email content";
             
             try {
                 $mail->send();
                 echo "Message has been sent successfully";
             } catch (Exception $e) {
                 echo "Mailer Error: " . $mail->ErrorInfo;
             }
             
             
             $html = "<p>Your payment was successful</p>
             <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";


}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
