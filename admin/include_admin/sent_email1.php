<?php 



require "PHPMailer/PHPMailerAutoLoad.php";
require "PHPMailer/class.phpmailer.php";


if(isset($_POST['fromemail']) && isset($_POST['toemail'])){

    $fromemail=$_POST['fromemail'];
   $toemail=$_POST['toemail'];
   $subject=$_POST['subject'];
    $fromname=$_POST['fromname'];
    $frompass=$_POST['frompass'];
    $toname=$_POST['toname'];
   $compose=$_POST['compose'];
  // $file=$_FILES['file']['name'];
  // move_uploaded_file($_FILES['file']['tmp_name'],$file);
 



   $mail=new PHPMailer();

   //SMTP
   //$mail->SMTPDebug = 4;
   $mail->isSMTP();
   $mail->Host="smtp.gmail.com";
   $mail->SMTPAuth=true;
   $mail->Username="linthikeaungtgo@gmail.com";
   $mail->Password="*****************";
   $mail->Port=587;
   $mail->SMTPSecure="tls";//tls


   //Email
   $mail->setFrom($fromemail,$fromname);
   $mail->addAddress($toemail,$toname);
   $mail->addReplyTo($fromemail);
   
   $mail->Subject=$subject;
   $mail->isHTML(true);

   $mail->Body=$compose;
   $mail->addAttachment('linthike.thantzin.ml/trend_image/forest.jpg');
 
  

   if($mail->send()){
       $status="success";
       $response="Email is sent";
   
   }
   else{
       $status="fail";
       $response="Email is not sent ! Something was wrong <br><br>".$mail->ErrorInfo;
   }
   exit(json_encode(array("status"=>$status,"response"=>$response)));

}



?>