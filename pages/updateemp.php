<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee</title>
    <link rel="stylesheet" href="../css/updateStyle.css"/>
    <link rel="stylesheet" href="../css/bootstrap.css"/>
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <script src="../Js/bootstrap.min.js"></script>
    <script src="../Js/jquery-3.4.1.min.js"></script>
</head>
<body>
    
    <?php
        require "Connectdb.php";

        $getData = htmlspecialchars($_GET['empId']);
        $empQuery = "SELECT			
						E.EmployeeID,E.EmployeeName, E.TEXT1,E.TEXT2,
						p.PositionName,p.PositionID, 
						G.GroupName,G.GroupID
                        FROM   
                            employees as E ,
                            Emp_group as G , 
                            position as P  
                        WHERE 
                            E.PositionID = P.PositionID and
                            E.GroupNum = G.GroupNum and E.EmployeeID = '".$getData."' ";
        $resEmp = mysqli_query($conn,$empQuery);

        $empSkills = "SELECT  
                        E.EmployeeID , E.EmployeeName,
                        SG.SkillGroupName , SG.SkillGroupID,
                        S.SkillName ,H.Rating
                    FROM 
                        Employees as E,
                        SkillGroup as SG,
                        hasaskill as H,
                        skills as S
                    WHERE 
                        E.EmployeeID = H.Emp_ID and
                        S.SkillID = H.SkillID   and 
                        S.SkillGroupID = SG.SkillGroupNum and E.EmployeeID = '".$getData."' " ;
        $resSkills = mysqli_query($conn,$empSkills); 

        $getAllData = array(5);
        while($row = mysqli_fetch_array($resEmp)){
            $getAllData[0] = $row['EmployeeID'];
            $getAllData[1] = $row['EmployeeName'];
            $getAllData[2] = $row['PositionName'];
            $getAllData[3] = $row['GroupName'];
        }
        $allSkills = array("");
        $rateSkills= array();
        while($row1 = mysqli_fetch_array($resSkills)){
            array_push($allSkills,$row1["SkillName"]);  
            array_push($rateSkills,$row1["Rating"]); 
        }
    ?>

    <div id="update">
		<h2>Update Employee</h2>
        <form method="post" action="">
		<table>
            <div id="row1">
				<label for="fname">employee name</label>
				<input type="text" value='<?php echo $getAllData[1]; ?>' id="name" name="name" class="input-lg form-control">
			</div>
			
			<div id="row2">
				<label for="id">employee Id</label>
				<input type="text" value='<?php echo $getAllData[0]; ?>' id="Id" name="id" class="input-lg form-control">
            </div>
			
			<div id="row3">
				<label for="pos">employee position</label>
				<input type="text" value='<?php echo $getAllData[2]; ?>' id="pos" name="pos" class="input-lg form-control">
            </div>
			
			<div id="row4">
				<label for="group">employee group</label>
				<input type="text" value='<?php echo $getAllData[3]; ?>' id="group" name="group" class="input-lg form-control">
            </div>

			<div id="row5">
				<label for="group">employee Skills</label><br>
                <?php
                    for($x=1;$x<count($allSkills);$x++){
                        echo "<input style='margin-top:-30px;margin-right:-80px;' type='checkbox' name='skill' value='skills'/>"; 
                        echo "<label for='skill' style='margin-right:-110px;font-size: 20px;color:black;'>".$allSkills[$x]."</label>";
                        echo "<br/>";
                    }
                ?>
            </div>
            <input type="submit" value="Update" class="input-lg form-control"> 
			</table>
        </form>
    </div>

    <?php
       
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $NewEmpName = $_POST['name'];
            $NewEmpId = $_POST['id'];
            $NewEmpPos = $_POST['pos'];

            $alryEmpName = $getAllData[1];
            $alryEmpId = $getAllData[0];
            $alryEmpPos = $getAllData[2];

            if($NewEmpName != $alryEmpName){
                $updateEmpname = "UPDATE employees SET EmployeeName = '".$NewEmpName."' 
                                WHERE EmployeeID = '".$getData."'";
                mysqli_query($conn,$updateEmpname);
            }

            if($NewEmpId != $alryEmpId){
                $updateEmpid = "UPDATE employees SET EmployeeID = '".$NewEmpId."'
                                WHERE EmployeeID = '".$getData."'";
                mysqli_query($conn,$updateEmpid);
            }

            if($NewEmpPos != $alryEmpPos){
                $updateEmppos = "UPDATE position SET PositionName = '".$NewEmpPos."' 
                                WHERE PositionID = '".$row['PositionID']."'";
                mysqli_query($conn,$updateEmppos);
            }

        }
    ?>

</body>
<script src="../Js/bootstrap.min.js"></script>
<script src="../Js/jquery-3.4.1.min.js"></script>
</html> 