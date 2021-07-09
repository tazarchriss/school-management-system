<?php
    $host='127.0.0.1';
    $user='root';
    $pass='';
    $dbase='students';
    $conn= mysqli_connect($host,$user,$pass,$dbase);

    if(!$conn){
        die('could not connect:'.mysqli_error());
    }
    echo  'connected successfully!';
    mysqli_close($conn);
    ?>