<?php
    session_start();
    $password = $_POST['password'];
    $mail = $_POST['mail'];

    //Database connection
    $conn = mysqli_connect('localhost','root','LInux##12','nmt');

    //perform query
    $query="SELECT * FROM login WHERE email='$mail' AND password='$password'";
    
    $results = mysqli_query($conn, $query);
    if(mysqli_num_rows($results)==1){
        include('file.html');
    }
    else{
        include('index.html');
        echo '<script> alert("invalid! email/password") </script>';
    }
?>
