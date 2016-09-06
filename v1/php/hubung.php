<?php
if(isset($_POST["submit"])) {
  $receiver = "nadzmix@gmail.com"; // reveicver of mailto // onepage2u@gmail.com
  $senderName = $_POST["nama"]; // sender name
  $senderEmail = $_POST["emel"]; // sender email of mailto
  $senderMessage = $_POST["komen"]; // sender message/comment

  $subject = "[onebook.com.my] " . $senderName; // setup mail subject
  $message = "This email was sent by " . $senderName . " (" . $senderEmail . ") through onebook.com.my.\n\n" . $senderMessage; // setup mail body

  mail($receiver, $subject, $message); // email onebook.com.my
}
?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width; initial-scale=1" />

    <title>onebook.com.my</title>

    <!-- stylesheets -->
    <link href="css/framework/bootstrap.min.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <p>
      Your message has been sent. Return to <a href="../index.html">Homepage</a>
    </p>
  </body>
</html>
