<?php
    $host="localhost";
    $username="root";
    $password="";
    $dBname="students";
    $conn = new mysqli($host,$username,$password,$dBname);
    if($conn){
        echo"connected";
    }else{
        die("Connection Faild :".$conn->connect_error());
    }