$(document).ready(function(){
$.ajax({
        type: 'POST',
        url: '../php/test.php',
        dataType: 'json',
        success: function (data) {
            $.each(data, function(key, val){
                $('#test').append('<tbody class=""> <th>'+val.major+'</th> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> </tbody>');
                console.log("success!");
            });
        },
        error: function(jqXHR, textStatus){ 
            console.log("FAIL");
            console.log("error " + textStatus);
            console.log("incoming Text " + jqXHR.responseText);
        }

    });
});