<?php 
    session_start();
    $to = 'jordan.moulin62570@gmail.com';
    $subject = $_POST["subject"];
    $tel = $_POST["tel"];
    $age = $_POST["age"];
    $message = $_POST["message"];
    $mail = $_POST["mail"];
   
    try{
        $db = new PDO(
            'mysql:host=localhost;dbname=spawnarena;charset=utf8',
            'root',
        );
    }
    catch(Exeption $e){
        die('Erreur : ' . $e->getMessage());
    }


    $query = 'INSERT INTO'

    /*
    $message = '<h1> Problème du client :'.$_POST["message"].'</h1>';
    $headers[]= 'MIME-Version: 1.0'; 
    $headers[]= 'Content-type: text/html; charset=iso-8859-1';
    mail($to, $subject, $message, implode("\r\n", $headers));

    //On met true dans la session pour verifier si on a bien envoyé le mail
    if(isset($_SESSION)){
        $_SESSION["mysession"] = true;
    }
        */
    header("Location:presentation.php");
?>