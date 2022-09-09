$(document).ready(function(){
	
    /*This part special to Configrutions*/
    $("#empGroup").hide();
    $("#showGroupEmp").click(function(){
        $("#empGroup").show();
        $("#empskills").hide();
    });

    $("#empskills").hide();
    $("#showGroupSkill").click(function(){
        $("#empskills").show();
        $("#empGroup").hide();
    });

    //To add employee and position
    $("#emp").hide();
    $("#Position").hide();
    $("#empgroup").click(function(){
        $("#emp").slideDown(2000);
    });
    $("#emppos").click(function(){
        $("#Position").slideDown(2000);
    });

    //To add group skill and skill
    $("#skillGroup").hide();
    $("#skill").hide();
    $("#empgroupskill").click(function(){
        $("#skillGroup").fadeIn(1000);
    });
    $("#empskillname").click(function(){
        $("#skill").fadeIn(1000);
    });

    $("#btn1").click(function(){
        $("#emp").slideUp(1000);
    });
    $("#btn2").click(function(){
        $("#Position").slideUp(1000);
    });
    $("#btn3").click(function(){
        $("#skillGroup").fadeOut(1000);
    });
    $("#btn4").click(function(){
        $("#skill").fadeOut(1000);
    });

    $(".tabcontent").hide();
    $("#tablinks").click(function(){
        $(".tabcontent").show();
    });

        /*This Part Special To Operations*/
    $("#addEmp").hide();
    $("#addNewEmp").click(function(){
        $("#addEmp").fadeIn(2000);
    });
    $("#btnAddEmpClose").click(function(){
        $("#addEmp").fadeOut(1000)
    });
});