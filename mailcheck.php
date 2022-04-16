<?php 
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$email_to = "gsrivathsan2001@gmail.com";
$email_subject = "test";
$message = "<html><head>
<title>Your email at the time</title>
</head>
<body>
<img src=\"http://www.myserver.com/images_folder/my_image.jpg\">
</body>";
mail($email_to, $email_subject , $message,$headers);

?>