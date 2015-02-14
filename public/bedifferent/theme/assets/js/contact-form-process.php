<?php
    $to = "david.runnels@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $headers = "From: $from";
    $subject = "$contactsubject from: $name @ $from";

    $fields = array();
    $fields{"name"} = "Name";
    $fields{"email"} = "Email";
    $fields{"contactsubject"} = "Subject";
    $fields{"phone"} = "Phone";
    $fields{"message"} = "Message";

    $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>