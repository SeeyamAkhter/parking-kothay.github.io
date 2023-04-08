<?php
    $Name = $_POST['Name'];
    $email = $_POST['email'];
    $message = $_POST['Message'];

    $conn = new mysqli ('localhost', 'root', '', '', 'contact');
    if ($conn -> connect_error){
        die('Connection Failed  : '.$conn->connect_error);
    }
    else {
        $stmt = $conn->prepare("insert into connect(Name, email, message) value(?, ?, ?)");
        
    }
?>