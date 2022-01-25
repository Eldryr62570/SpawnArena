<?php 
    
    $to = 'jordan.moulin62570@gmail.com';
    $subject = $_POST["subject"];
    $message = '<h1> Problème du client :'.$_POST["message"].'</h1>';
    $headers[]= 'MIME-Version: 1.0'; 
    $headers[]= 'Content-type: text/html; charset=iso-8859-1';
    mail($to, $subject, $message, implode("\r\n", $headers));

    
    header("Location:presentation.php");
?>