<!DOCTYPE html>
<html>
<head>
    <title> Skill Matrix </title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0 " />
    <link rel="icon" type="image/x-icon" href="../images\Logo2.png">
    <!-- linking the stylesheet(CSS) -->
    <link rel="stylesheet" href="../css/bootstrap.css"/>
    <link rel="stylesheet" href="../css/search.css" />
    <link rel="stylesheet" href="../css/normalize.css" />
    <!-- google font -->
    <link rel="preconnect" href="link rel=" preconnect href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,600;0,700;0,800;1,500&display=swap" rel="stylesheet" />

    <script src="../Js/scriptJsLayout.js"></script>

</head>

<body>
    <div class="header">
        <div class="container">
            <img class="logo" src="../images/637195238886374495.png" alt="">
        </div>
    </div>
    <div class="table">
        <form method="post" action="">
        <table id="dataTable">
            <div class="insearch">
                <tr>
                    <th>
                        <input type="text" name="name" class="search-input" placeholder="Full Name" id="name_ofsearch">
                    </th>
                    <th>
                        <input type="text" name="id" class="search-input" placeholder="ID" id="ideofsearch">
                    </th>
                    <th>
                        <input type="text" name="pos" class="search-input" placeholder="Position" id="positionofsearch">
                    </th>
                    <th>
                        <input type="text" name="group" class="search-input" placeholder="Group" id="groupofsearch">
                    </th>
                    <!-- <th>
                        <input type="text" name="skill" class="search-input" placeholder="skill" id="skill">
                    </th> -->
                    <th>
                        <input type="text" name="skillgroup" class="search-input" placeholder="groupskill" id="groupskill">
                    </th>
                    <th><input type="submit" name="show" value="Search" class="input-lg form-control"/></th>
                    <th><button style="margin-left:15px;" class="bt btn-primary form-control" 
                                id="btnExportToCsv" type="button" class="button">Extract to CSV</button></th>
                </tr>

                <tr id="row2">
                    <th>
                        <p style="font-style: oblique;text-align: center;margin-top:50px;font-size:22px;
                           color:gray;border-right:2px solid orange;padding: 10px;font-family: 'Courier New', Courier, monospace;">Employee Name</p>
                    </th>
                    <th>
                        <p style="font-style: oblique;text-align: center;margin-top:50px;font-size:22px;
                           color:gray;border-right:2px solid orange;padding:10px;font-family: 'Courier New', Courier, monospace;">Employee ID</p>
                    </th>
                    <th>
                        <p style="font-style: oblique;text-align: center;margin-top:50px;font-size:22px;
                            color:gray;border-right:2px solid orange;padding:10px;font-family: 'Courier New', Courier, monospace;">Employee Position</p>
                    </th>
                    <th>
                        <p style="font-style: oblique;text-align: center;margin-top:50px;font-size:22px;
                            color:gray;border-right:2px solid orange;padding:10px;font-family: 'Courier New', Courier, monospace;">Employee Group</p>
                    </th>
                    <!-- <th>
                        <p style="font-style: oblique;text-align: center;margin-top:50px;font-size:22px;
                            color:gray;border-right:2px solid orange;padding:10px;font-family: 'Courier New', Courier, monospace;">Employee Skill</p>
                    </th> -->
                    <th>
                        <p style="font-style: oblique;text-align: center;margin-top:50px;font-size:22px;
                            color:gray;border-right:2px solid orange;padding:10px;font-family: 'Courier New', Courier, monospace;">Employee Group Skill</p>
                    </th>
                </tr>

                <div id="genericSearch">

                    <?php
                    
                        if( empty($_POST['name']) && empty($_POST['id']) && empty($_POST['pos']) 
                            && empty($_POST['group']) && empty($_POST['skill']) && empty($_POST['skillgroup']) ){
                            require "searchGeneric.php";
                        }
                        if(!empty($_POST['name'])){
                            require "searchByName.php";
                        }
                        if(!empty($_POST['id'])){
                            require "searchById.php";
                        }
                        if(!empty($_POST['pos'])){
                            require "searchByPosition.php";
                        }

                    ?>

                </div>

            </div>
        </table>
        </form>
    </div>

</body>
<script src="../Js/bootstrap.min.js"></script>
<script src="../Js/jquery-3.4.1.min.js"></script>
<script src="../Js/configJs.js"></script>
<script src="../Js/scriptJsLayout.js"></script>

<script>
    const dataTable = document.getElementById("dataTable");
    const btnExportToCsv = document.getElementById("btnExportToCsv");

    btnExportToCsv.addEventListener("click", () => {
        const exporter = new TableCSVExporter(dataTable);
        const csvOutput = exporter.convertToCSV();
        
        const csvBlob = new Blob([csvOutput], { type: "text/csv" });
        const blobUrl = URL.createObjectURL(csvBlob);
        const anchorElement = document.createElement("a");

        anchorElement.href = blobUrl;
        anchorElement.download = "skillMatrix.csv";
        anchorElement.click();

        setTimeout(() => {
            URL.revokeObjectURL(blobUrl);
        }, 500);
    });
</script>
</html>