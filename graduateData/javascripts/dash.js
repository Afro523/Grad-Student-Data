$(document).ready(function(){

    //On document ready create event listener
    $("#submit").click(function(){
        var studentTotal = 0;
        $.getJSON('../php/dash.php', function(data){
            $.each(data, function(key, val){
                //$('#output').append('<td id="' + key +'">'+val.lastname + ', '+ val.firstname +'</td>');
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

});


