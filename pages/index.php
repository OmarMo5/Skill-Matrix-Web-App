<?php
    require "Connectdb.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0 "/>
        <title>ACT</title>
        <script src=""></script>
        <link rel="icon" type="image/x-icon" href="../images/Logo2.png">
        <link rel="stylesheet" href="../css/login1.css"/>
        <link rel="stylesheet" href="../css/login2.css"/>
        <link rel="stylesheet" href="../css/bootstrap.css"/>
        <!-- google font -->
        <link rel="preconnect" href="link rel=" preconnect href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,600;0,700;0,800;1,500&display=swap" rel="stylesheet" />
        <script src="../Js/jquery-3.4.1.min"></script>
    </head>
    <body>
        <div class="header">
            <div class="container">
                 <img class="logo" src="../images/637195238886374495.png" alt="">  
                <div class="links">
                    <span class="icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <ul>
                        <li><a href="https://www.linkedin.com/company/advanced-computer-technology/">linkedin</a></li>
                        <li><a href="https://www.act.eg/"> web sit </a></li>
                        <li><a href="https://www.facebook.com/acteg/">facbook</a></li>
                        <li><a href="https://instagram.com/advanced_computer_technology_?igshid=YmMyMTA2M2Y=">instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- start login -->
        <div class="log"> 
            <div>
                <h1>Login</h1>
                <form method="post" action="">
                    <input class="input-lg form-control" id= "inputform" type="text" required placeholder="username" name="username"/>
                    <br>
                    <input class="input-lg form-control" id= "inputform" type="password" required placeholder="password" name="pass"/>
                    <br>
                    <input type="submit" class="but" style="margin-left:260px;" value="Login" onclick="validateForm()">
                </form>
            </div>
        </div> 
        
    </body>
    <script src="../Js/bootstrap.min.js"></script>
    <script src="../Js/jquery-3.4.1.min.js"></script>
    <script src="../Js/configJs.js"></script>
</html>

<?php
    $res = mysqli_query($conn,"select * from employees");
    $username = "";
    $password = "";

    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(!empty($_POST['username'])&&!empty($_POST['pass'])){
            $username = $_POST['username'];
            $password = $_POST['pass'];
        }
        $dataLogin = mysqli_query($conn,"select * from Users where username = '".$username."' and password = '".$password."'");
        //print_r($dataLogin);
        while($row = mysqli_fetch_array($dataLogin)){
            if($row['password']==$password && $row['username']==$username){
                header("location: Home.php");
            }else{
                header("location: ../ErrorLogIn.html");
            }
        }
    } 
?>
