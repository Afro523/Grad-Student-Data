$(document).ready(function(){

    //Run ajax on ready to get all majors listed before population of data
    setupMajors();

    //On document ready create event listener
    $("#submit").click(function(){
        var studentTotal = 0;
        $.getJSON('../php/dash.php', function(data){
            $.each(data, function(key, val){
                $('#output').append('<td id="' + key +'">'+val.lastname + ', '+ val.firstname +'</td>');
                studentTotal++;
            });
            $("#studentTotal").append(studentTotal);
        });
    return false;
    });
    

    $("#bachExpand").click(function(){
        $('.drill').collapse('toggle');

    });

    $("#healthExpand").click(function(){
        $('.drill2').collapse('toggle');
    });

    $("#nyHealthExpand").click(function(){
        $('.drillHealthNy').collapse('toggle');
    });

    $("#pvHealthExpand").click(function(){
        $('.drillHealthPv').collapse('toggle');
    });
});

function setupMajors(){
    $.ajax({
        type: 'POST',
        url: '../php/microServices/healthMajors.php',
        dataType: 'json',
        success: function (data) {
            $.each(data, function(key, val){
                $('#nyHealthBody').after('<tbody class="drillHealthNy drill3 collapse" > <th>'+val.major+'</th> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> </tbody>');
                $('#pvHealthBody').after('<tbody class="drillHealthPv drill3 collapse" > <th>'+val.major+'</th> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> </tbody>');
            console.log("success!");
        });
        },
        error: function(jqXHR, textStatus){ 
            console.log("FAIL");
            console.log("error " + textStatus);
            console.log("incoming Text " + jqXHR.responseText);
        }

    });
    $.ajax({
        type: 'POST',
        url: '../php/microServices/dysonMajors.php',
        dataType: 'json',
        success: function (data) {
            $.each(data, function(key, val){
                $('#nyDysonBody').after('<tbody class="drillDysonNy drill3 collapse" > <th>'+val.major+'</th> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> </tbody>');
                $('#pvDysonBody').after('<tbody class="drillDysonPv drill3 collapse" > <th>'+val.major+'</th> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> </tbody>');
            console.log("success!");
        });
        },
        error: function(jqXHR, textStatus){ 
            console.log("FAIL");
            console.log("error " + textStatus);
            console.log("incoming Text " + jqXHR.responseText);
        }

    });
  /*  $.getJSON('../php/microServices/healthMajors.php'), function(data){
        $.each(data, function(key, val){
            $('#test').append('<th>'+val.major+'</th> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td>');        
            console.log(data);
        });
        
    };*/

};


