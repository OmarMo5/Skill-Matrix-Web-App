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
</head>
<body>
    
    <!--This Part Special To Operations-->
    <section id="addEmp">
        <div>
            <form method="post" action="">
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
                        <td><input class="input-lg form-control" name="note" type="text" /></td>
                    </tr>
                    <tr>
                        <td><label>Comment Details</label></td>
                        <td><input class="input-lg form-control" name="comment" type="text" /></td>
                    </tr>
					<tr>
                        <td><label>Employee Position Id</label></td>
                        <td><input class="input-lg form-control" name="empPosid" type="number" /></td>
                    </tr>
                    <tr>
                        <td><label>Employee Group Number</label></td>
                        <td><input class="input-lg form-control" name="empgroupnum" type="number" /></td>
                    </tr>
                </table>
                <button id="btnAddEmpClose" class="btn btn-danger">Close</button>
                <button id="btnAddEmp" class="btn btn-danger" name="add">Add Emp</button>
                <!-- <input id="btnAddEmp" class="btn btn-danger" value="submit" type="submit"/> -->
			</form>
        </div>
    </section>

    <?php
        
        require "Connectdb.php";

        $nameEmp = "";
        $idEmp = "";
        if(isset($_POST['empid'])) $nameEmp = $_POST["empid"];
        if(isset($_POST['empname'])) $idEmp = $_POST["empname"];

        if(isset($_POST["add"])){
            $empQuery = "INSERT INTO employees VALUE('$idEmp','$nameEmp','have TEFOL','Not has IELTS')";
            mysqli_query($conn,$empQuery);
        }
    ?>

    <script>
    </script>
    </body>

</html>