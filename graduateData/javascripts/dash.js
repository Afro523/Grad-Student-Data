$(document).ready(function(){

    //On document ready create event listener
    $("#submit").click(function(){
        $.ajax({
            type: "POST",
            url: "../php/dash.php",
            cache: false,
            data: {action: 'getBachelors'},
            error: function(xhr, status, error) {
            alert(status);
            alert(xhr.responseText);
        },
            success: function(results){
            alert(results);
            }
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


