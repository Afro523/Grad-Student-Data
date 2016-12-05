$(document).ready(function(){
$.ajax({
        type: 'POST',
        url: '../php/test.php',
        dataType: 'json',
        success: function (data) {
            processData(data);
        },
        error: function(jqXHR, textStatus){ 
            console.log("FAIL");
            console.log("error " + textStatus);
            console.log("incoming Text " + jqXHR.responseText);
        }

    });
});

function processData(data) {
    var empFtStud = 0;
    var empPtStud = 0;
    var contEdEnrolled = 0;
    var contEdPlanning = 0;
    var milStud = 0;
    var volStud = 0;
    var seekStud = 0;
    var notSeekStud = 0;
    var totalEmpFtStud = 0;
    var totalEmpPtStud = 0;
    var totalContEdEnrolled = 0;
    var totalContEdPlanning = 0;
    var totalMil = 0;
    var totalVol = 0;
    var totalSeek = 0;
    var totalNotSeek = 0;
    var totalStud = 0;


    //Iterate through each array and fill values in
    $.each(data, function(key, val){
        //First Setup grandTotals

        if (val.EmpFT != null){
            totalEmpFtStud += parseInt(val.EmpFT);
        }

        if (val.EmpPT != null){
            totalEmpPtStud += parseInt(val.EmpPT);
        }

        if (val.ContEdEnrolled != null){
            totalContEdEnrolled += parseInt(val.ContEdEnrolled);
        }

        if (val.ContEdPlanning != null){
            totalContEdPlanning += parseInt(val.ContEdPlanning);
        }

        if (val.Seeking != null){
            totalSeek += parseInt(val.Seeking);
        }

        totalStud += parseInt(val.Graduates);

        //Build Rows in Table and Populate with Arrays
        

    });
    
    //Append grandTotals
    $('#grandTotals').append('<tr class="info"><th>Grand Totals</th><th>'+ totalEmpFtStud +'</th><th>'+ (totalEmpFtStud/totalStud) *100 +'%</th><th> '+ totalEmpPtStud +' </th><th> '+ (totalEmpPtStud/totalStud) * 100 +'% </th><th> '+totalContEdEnrolled+' </th><th> '+(totalContEdEnrolled / totalStud)*100 +'% </th><th> '+totalContEdPlanning+' </th><th> '+(totalContEdPlanning/totalStud) * 100+'% </th><th> </th><th> </th><th> </th><th> </th><th> '+totalSeek+' </th><th> '+(totalSeek/totalStud)*100+'% </th><th> </th><th> </th><th>'+totalStud+' </th><th>'+((totalStud/totalStud)*100)+'% </th> </tr>');
}