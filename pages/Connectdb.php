<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "skillmattix";
    $conn = mysqli_connect($host,$user,$pass,$db);

    $res = mysqli_query($conn,"select * from employees");
    $username = "";
    $password = "";

    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(!empty($_POST['username'])&&!empty($_POST['pass'])){
            $username = $_POST['username'];
            $password = $_POST['pass'];
        }
        $dataLogin = mysqli_query($conn,"select * from Users where username = '".$username."' and password = '".$password."'");
        print_r($dataLogin);
        while($row = mysqli_fetch_array($dataLogin)){
            if($row['password']==$password && $row['username']==$username){
                header("location: Home.php");
            }else{
                header("location: ../ErrorLogIn.html");
            }
        }
    } 
?>