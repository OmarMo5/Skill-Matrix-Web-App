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

        <!--This Part Special To Operations-->
    <section id="addEmp">
        <div>
            <form method="post">
                <h2 class="text-center">New Employee</h2>
                <table>
                    <tr>
                        <td><label>Employee Id</label></td>
                        <td><input class="input-lg form-control" name="empid" type="text" required/></td>
                    </tr>
                    <tr>
                        <td><label>Employee Name</label></td>
                        <td><input class="input-lg form-control" name="empname" type="text" required/></td>
                    </tr>
					<tr>
                        <td><label>Notes One</label></td>
                        <td><input class="input-lg form-control" name="note" type="text" required/></td>
                    </tr>
                    <tr>
                        <td><label>Comment Details</label></td>
                        <td><input class="input-lg form-control" name="comment type="text" required/></td>
                    </tr>
					<tr>
                        <td><label>Employee Position Id</label></td>
                        <td><input class="input-lg form-control" name="empPosid" type="number" required/></td>
                    </tr>
                    <tr>
                        <td><label>Employee Group Number</label></td>
                        <td><input class="input-lg form-control" name="empgroupnum" type="number" required/></td>
                    </tr>
                </table>
                <button id="btnAddEmpClose" class="btn btn-danger">Close</button>
                <input id="btnAddEmp" class="btn btn-danger" value="submit" type="button"/>
			</form>
        </div>
    </section>

			<!-- This part Special To Configrutions -->
    <section id="emp">
        <div>
            <form method="post">
                <h2 class="text-center">Employee Group</h2>
                <table>
                    <tr>
                        <td><label>Group Name</label></td>
                        <td><input class="input-lg form-control" name="groupemp" type="text" required/></td>
                    </tr>
                    <tr>
                        <td><label>Group Id</label></td>
                        <td><input class="input-lg form-control" name="groupid" type="text" required/></td>
                    </tr>
                </table>
                <button id="btn1" class="btn btn-danger">Close</button>
                <input id="btnAdd2" class="btn btn-danger" value="submit" type="button"/>
			</form>
        </div>
    </section>

    <section id="Position">
        <div>
            <form method="post">
                <h2 class="text-center">Employee Position</h2>
                <table>
                    <tr>
                        <td><label>Position name</label></td>
                        <td><input class="input-lg form-control" name="posname" type="text" required/></td>
                    </tr>
                    <!-- <tr>
                        <td><label>Position Id</label></td>
                        <td><input class="input-lg form-control" name="posid" type="text" required/></td>
                    </tr> -->
                </table>
                <button id="btn2" class="btn btn-danger">Close</button>
                <input id="btnAdd2" class="btn btn-danger" value="submit" type="button"/>
            </form>
        </div>
    </section>

    <section id="skillGroup">
        <div>
            <form method="post">
                <h2 class="text-center">Skill Group</h2>
                <table>
                    <tr>
                        <td><label>Skill Group Name</label></td>
                        <td><input class="input-lg form-control" name="groupskillname" type="text" required/></td>
                    </tr>
                    <tr>
                        <td><label>Skill Group Id</label></td>
                        <td><input class="input-lg form-control" name="groupskillid" type="text" required/></td>
                    </tr>
                </table>
                <button id="btn3" class="btn btn-danger">Close</button>
                <input id="btnAdd2" class="btn btn-danger" value="submit" type="button"/>
            </form>
        </div>
    </section>

    <section id="skill">
        <div>
            <form method="post">
                <h2 class="text-center">Skill</h2>
                <table>
                    <tr>
                        <td><label>Skill Name</label></td>
                        <td><input class="input-lg form-control" name="skillname" type="text" required/></td>
                    </tr>
                    <tr>
                        <td><label>Skill Group Id</label></td>
                        <td><input class="input-lg form-control" name="skillid" type="text" required/></td>
                    </tr>
                </table>
                <button id="btn4" class="btn btn-danger">Close</button>
                <input id="btnAdd2" class="btn btn-danger" value="submit" type="button"/>
            </form>
        </div>
    </section>

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
