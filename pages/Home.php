<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACT International</title>
    <style>
    </style>
    <link rel="icon" type="image/x-icon" href="../images/Logo2.png">
    <link rel="stylesheet" href="../css/bootstrap.css"/>
    <link rel="stylesheet" href="../css/home.css"/>
    <script src="../Js/jquery-3.4.1.min"></script>
    <script src="../Js/HomeConf.js"></script>
    
</head>
<body>
    <section class="navbar">
        <div class="inner">
            <div id="ig">
                <img src="../images/637195238886374495.png"/>
            </div>
            <div id="drop">                

                <div class="tab">
                    <a href="./search.php">Skill Matrix</a>
                    <button class="tablinks" onclick="openCity(event, 'Paris')" id="Con">Configrautions</button>
                    <button class="tablinks" onclick="openCity(event, 'Tokyo')" id="Con">Employee Operations</button>
                    <!--<button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">LogIn</button>-->                
                     <a href="./index.php">LogOut</a>
                </div>

                <div id="London" class="tabcontent">
                </div>

                <div id="Paris" class="tabcontent">
                    <h3><a id="showGroupEmp" href="#">Employee</a></h3>
                    <div id="empGroup" style="margin-left:15%;">
                        <h4><a id="empgroup" href="#">Employee Group</a></h4>
                        <h4><a id="emppos" href="#">Employee Position</a></h4>
                    </div>

                    <h3><a id="showGroupSkill" href="#">Skill</a></h3>
                    <div id="empskills" style="margin-left:15%;">
                        <h4><a id="empgroupskill" href="#">Skill Group</a></h4>
                        <h4><a id="empskillname" href="#">Skill Name</a></h4>
                    </div>
                </div>

                <div id="Tokyo" class="tabcontent">
                    <h3><a id="addNewEmp" href="#">Add New Employee</a></h3>
                    <h3><a id="delEmp" href="#">Delete Employee</a></h3>
                </div>

                <div id="London" class="tabcontent">
                </div>
            </div>
        </div>
    </section>

    <?php
        require "AddNewEmp.php";
    ?>

    <?php
        require "AddNewGroup.php";
    ?>

    <?php
        require "AddNewPos.php";
    ?>

    <?php
        require "AddNewGroupSkill.php";
    ?>
    
    <?php
        require "AddNewSkill.php";
    ?>

    <script>
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }
        
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();

    </script>
    </body>
    <script src="../Js/bootstrap.min.js"></script>
    <script src="../Js/jquery-3.4.1.min.js"></script>
    <script src="../Js/configJs.js"></script>
    <script src="../Js/HomeConf.js"></script>

</html>
