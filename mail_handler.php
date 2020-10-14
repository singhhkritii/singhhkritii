<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $service = $_POST['work'];

    $email_from = 'singhh.kritii31@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                      "User Email: $visitor_email.\n".
                        "Service: $service.\n".
                          "User Message: $subject.\n";

    $to = "kritii.singhh31@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
?>
