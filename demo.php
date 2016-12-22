<?php
$action=$_REQUEST['action'];

    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
        echo "All Fields Are Required. ";
        echo "\r\n";
        echo "<a href='current.html'>Please Fill Out The Form Again</a>";
        }
    else{        
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
        mail("sohaibhsyed@gmail.com", $subject, $message, $from);
        echo "Email sent!";
        header('Location: index.html');
        }
    
?>