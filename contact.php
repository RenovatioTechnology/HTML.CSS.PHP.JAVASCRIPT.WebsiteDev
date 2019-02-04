

<style type="text/css">
body,td,th {
	color: #000;
	font-size: 18px;
	font-family: Arial, Helvetica, sans-serif;
	background-color: #003333;
	font-family: Arial, Helvetica, sans-serif;
	font-style: normal;
	font-weight: normal;
	line-height: normal;
	color: #000;
	font-size: 18px;
	text-decoration: none;
	padding-top: 300px;
	margin-left: 400;
	width: 300px;
}
#info {
	position: absolute;
	height: 200px;
	width: 600px;
	border: 1px dotted #999;
	padding-top: 40px;
	padding-right: 6px;
	padding-bottom: 6px;
	padding-left: 6px;
}
p {
	color: #FFF;
}
</style>
<body>
<div id="info">
<p>Thank you,for your interest in Lloyds Alternative Management, Your email will be answered very soon.</p>
</div>
<?php

/*Email Varibles*/

$emailSubject = ' lloyds Asset';
$webMaster = ' lloydsasset@gmail.com ';

/*Data Variable*/

$Name = $_POST['name'];
$company = $_POST['company'];
$email = $_POST['email'];
$message = $_POST['message'];

$body = <<<EOD
  
<br><hr><br>
*Name: $name <br>
*Company: $company <br>
*Email: $email <br>
*Message: $message <br>
EOD;

$headers = "From: $email\r\n";
$headers .= "Content-type: text/html\r\n";
$success = mail($webMaster, $emailSubject, $body,
$headers);


/*Result*/

$theResults = <<<EOD
<html>
<head>
<title>
<title>sent message</title>
<meta http-equiv="refresh" content="3; URL=http://lloyds-asset.com/contact.html">

</head>
<body>
<div align ="center">Thank you for your interest in Lloyds Alternative Management, Your email will be answered very soon</div> 

  </body>
  </html>

EOD;
echo  "$theResults";
?>



