<?php
    $server_name = 'localhost';
    $user_name = 'root';
    $pass_word = '';
    $db = 'users';
    $conn = mysqli_connect($server_name, $user_name, $pass_word, $db);
    if(!$conn){
        die('Unable to connect!')."<br>";
    }
    $trans_server = 'localhost';
    $user_name = 'root';
    $pass_word = '';
    $db = 'transhistory';
    $conn1 = mysqli_connect($server_name, $user_name, $pass_word, $db);
    if(!$conn1){
        die('Unable to connect!')."<br>";
    }
?>