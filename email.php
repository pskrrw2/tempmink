<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";


//$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->Port       = '587';
$mail->SMTPSecure = "tls";
$mail->Host       = "email-smtp.ap-south-1.amazonaws.com";
$mail->Username   = "rajankasture2002@gmail.com";
$mail->Password   = "AKIA5OBDL3V32MDQKKR5,BOigsFUZ2q31yiPtZ2ECk4HhgAQsGlthDm+gM53+6FYk";

$email=$_POST['email'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];


$mail->IsHTML(true);



$mail->SetFrom("$email", '$name');
$mail->addAddress("minkshadelivery@gmail.com", 'Admin');

$mail->Subject = "MESSAGE From $name";
$content = "<b>Hello Admin!
Contact From $name</b>
</br>
<p>Name: ". $name."</p>
<p>Address:". $address."</p>
<p>Email:". $email."</p>
<p>Phone:". $phone."</p>";
$mail->MsgHTML($content); 

$mail1 = new PHPMailer();
$mail1->IsSMTP();
$mail1->Mailer = "smtp";


//$mail1->SMTPDebug  = 1;  // Enable verbose debug output
$mail1->SMTPAuth   = TRUE;
$mail1->Port       = '587';
$mail1->SMTPSecure = "tls";
$mail1->Host       = "email-smtp.ap-south-1.amazonaws.com";
$mail1->Username   = "rajankasture2002@gmail.com";
$mail1->Password   = "AKIA5OBDL3V32MDQKKR5,BOigsFUZ2q31yiPtZ2ECk4HhgAQsGlthDm+gM53+6FYk";


$mail1->SetFrom("minkshadelivery@gmail.com", 'Minksha');
$mail1->addAddress("$email", '$name');
$mail1->Subject = "Thanks For Getting in Touch";
$content1 = "<b>Hello $name!<br/>
<br/>
Thank you for showing your interest in Minksha A2 milk and organic farms<br/>  
Get ready for a blissful experience with <br/>
1. Pune's only A2 certified brand <br/>
2. Pure desi Gir cow's milk<br/>
2. Glass bottle packaging<br/>
3. Delivery to doorstep<br/>

Book your order today to and Avail interesting discounts on our Minksha app.<br/>
Here are the ways you can book your order:<br/>

1) App link: <br/>
https://play.google.com/store/apps/details?id=com.minksha.minkshaapp<br/>
2) Connect with us on call @73 8585 0824  <br/>

FREE HOME DELIVERY<br/>
Thank you<br/>
Team Minksha</b>.<br/>
</br>";

$mail1->MsgHTML($content1); 

if (!$mail->Send() || !$mail1->Send()) {
    header('Location:thankyou.html');
} else {
    header('Location:thankyou.html');
}
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";


//$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->Port       = '587';
$mail->SMTPSecure = "tls";
$mail->Host       = "email-smtp.ap-south-1.amazonaws.com";
$mail->Username   = "rajankasture2002@gmail.com";
$mail->Password   = "AKIA5OBDL3V32MDQKKR5,BOigsFUZ2q31yiPtZ2ECk4HhgAQsGlthDm+gM53+6FYk";

$email=$_POST['email'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];


$mail->IsHTML(true);



$mail->SetFrom("$email", '$name');
$mail->addAddress("minkshadelivery@gmail.com", 'Admin');

$mail->Subject = "MESSAGE From $name";
$content = "<b>Hello Admin!
Contact From $name</b>
</br>
<p>Name: ". $name."</p>
<p>Address:". $address."</p>
<p>Email:". $email."</p>
<p>Phone:". $phone."</p>";
$mail->MsgHTML($content); 

$mail1 = new PHPMailer();
$mail1->IsSMTP();
$mail1->Mailer = "smtp";


//$mail1->SMTPDebug  = 1;  // Enable verbose debug output
$mail1->SMTPAuth   = TRUE;
$mail1->Port       = '587';
$mail1->SMTPSecure = "tls";
$mail1->Host       = "email-smtp.ap-south-1.amazonaws.com";
$mail1->Username   = "rajankasture2002@gmail.com";
$mail1->Password   = "AKIA5OBDL3V32MDQKKR5,BOigsFUZ2q31yiPtZ2ECk4HhgAQsGlthDm+gM53+6FYk";


$mail1->SetFrom("minkshadelivery@gmail.com", 'Minksha');
$mail1->addAddress("$email", '$name');
$mail1->Subject = "Thanks For Getting in Touch";
$content1 = "<b>Hello $name!<br/>
<br/>
Thank you for showing your interest in Minksha A2 milk and organic farms<br/>  
Get ready for a blissful experience with <br/>
1. Pune's only A2 certified brand <br/>
2. Pure desi Gir cow's milk<br/>
2. Glass bottle packaging<br/>
3. Delivery to doorstep<br/>

Book your order today to and Avail interesting discounts on our Minksha app.<br/>
Here are the ways you can book your order:<br/>

1) App link: <br/>
https://play.google.com/store/apps/details?id=com.minksha.minkshaapp<br/>
2) Connect with us on call @73 8585 0824  <br/>

FREE HOME DELIVERY<br/>
Thank you<br/>
Team Minksha</b>.<br/>
</br>";

$mail1->MsgHTML($content1); 

if (!$mail->Send() || !$mail1->Send()) {
    header('Location:thankyou.html');
} else {
    header('Location:thankyou.html');
}
