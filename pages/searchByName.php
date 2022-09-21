<?php
    
    require "Connectdb.php";
    
    $username = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!empty($_POST['name'])){ 
            $username = $_POST['name'];
            $empQuery = "SELECT			
						E.EmployeeID,E.EmployeeName, E.TEXT1,E.TEXT2,
						p.PositionName, 
						G.GroupName,G.GroupID
                        FROM   
                            employees as E ,
                            Emp_group as G , 
                            position as P  
                        WHERE 
                            E.PositionID = P.PositionID and
                            E.GroupNum = G.GroupNum and E.EmployeeName = '".$username."' ";
	        $resEmp = mysqli_query($conn,$empQuery);

            $empSkills = "SELECT  E.EmployeeID , E.EmployeeName,
                            SG.SkillGroupName , SG.SkillGroupID,
                            S.SkillName ,H.Rating
                        FROM Employees as E,
                            SkillGroup as SG,
                            hasaskill as H,
                            skills as S
                        WHERE 
                            E.EmployeeID = H.Emp_ID and
                            S.SkillID = H.SkillID   and 
                            S.SkillGroupID = SG.SkillGroupNum and E.EmployeeName = '".$username."' " ;
	        $resSkills = mysqli_query($conn,$empSkills);
    

            while($row = mysqli_fetch_array($resEmp)){
                echo "<tr>";
                echo "<th style='padding:20px;'/>".$row['EmployeeName']."</th>";
                echo "<th>".$row['EmployeeID']."</th>";
                echo "<th>".$row['PositionName']."</th>";
                echo "<th>".$row['GroupName']."</th>";
                /* echo "<th>"."</th>"; */
                
                while($row = mysqli_fetch_array($resSkills)){
                    echo "<th>";
                        echo "<form action='' method='post'>";
                        echo "<select name='furit' style='padding:10px;border:2px solid gray;
                                border-radius:15px;width:170px;'>";	
                            echo "<optgroup label='".$row['SkillGroupName']."'>";
                                /* echo "<option value='Banana'>".$row['EmployeeName']."</option>"; */
                                echo "<option value='Orange'>".$row['SkillName']."</option>";
                                echo "<option value='Strawberry'>".$row['Rating']."</option>";
                            echo "</optgroup>";
                        echo "</select>";
                        /* echo "<input type='submit' name='submit' value='Choose Options' />"; */
                        echo "</form>";
                    echo "</th>";
                    break;
                } 
                echo "<th>"."</th>";
                ?>
                
                <th>
                    <a style='text-decoration:none;color:blue;font-size:15px;' 
                    href = 'updateemp.php?empUp=<?php echo $username; ?>' class='btn-adminAction'>Update</a>
                </th>
                <th>
                    <a style='text-decoration:none;color:red;font-size:15px;margin-right:30px;'
                    href = 'DeleteEmp.php?empUp=<?php echo $username; ?>' class='btn-adminAction'>Delete</a>
                </th>

                <!-- echo "<th>"."<a href='updateemp.php' 
                    style='text-decoration:none;color:blue;font-size:15px;'>Update<a/>"."</th>";
                echo "<th>"."<a href='DeleteEmp.php'
                    style='text-decoration:none;color:red;font-size:15px;margin-right:20px;'>Delete</a>"."</th>";
                echo "</tr>"; -->
                <?php
            }
        }
   }
?>