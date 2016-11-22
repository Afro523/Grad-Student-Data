$(document).ready(function(){
    $("#submit").click(function(){
    var schoolSelect = $("#schoolDrop").val();
    var campusSelect = $("#campusDrop").val();
    var levelSelect = $("#levelDrop").val();
    var approvedSelect = $("#approvedDrop").val();
    var reviewedSelect = $("#reviewedDrop").val();

    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'school1='+ schoolSelect + '&campus1='+ campusSelect + '&level1='+ levelSelect + '&approved1='+ approvedSelect + '&review1=' + reviewedSelect;
        if(schoolSelect=='' && campusSelect=='' && levelSelect=='' && verifySelect==''&& reviewedSelect==''){
            alert("No Filter Selected");
        }   else {
            // AJAX Code To Submit Form.
            $.ajax({
            type: "POST",
            url: "../php/dash.php",
            cache: false,
            data: dataString,   
            success: function(result){
            alert(result);
            }
        });
    }
    return false;
    });
});