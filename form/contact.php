<?php 
 $to = "humna.kashif009@gmail.com"; // this is your Email address
 $from = $_POST['InputEmail']; // this is the sender's Email address
 $InputName = $_POST['InputName'];
 $InputSubject = $_POST['InputSubject'];
 $subject = "Form submission";
 $subject2 = "Copy of your form submission";
 $message = $InputName . " " . $InputSubject . " wrote the following:" . "\n\n" . $_POST['InputMessage'];
 $message2 = "Here is a copy of your message " . $InputName . "\n\n" . $_POST['InputMessage'];\

if(!empty($InputName) || !empty($InputSubject)  || !empty($InputEmail) || !empty($InputMessage)){
   

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $InputName . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>