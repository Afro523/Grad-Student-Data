$("#json-one").change(function() {  
    var $dropdown = $(this);  
    
    $.getJSON("testData.json", function(data) {  
                  
        var key = $dropdown.val();  
        var vals = [];  
                                          
        switch(key) {  
            case 'beverages':  
                vals = data.beverages.split(",");  
                break;  
            case 'snacks':  
                vals = data.snacks.split(",");  
                break;  
            case 'base':  
                vals = ['Please choose from above'];  
            }  
                          
        var $jsontwo = $("#json-two");  
        $jsontwo.empty();  
        $.each(vals, function(index, value) {  
            $jsontwo.append("<option>" + value + "</option>");  
        });  
    }); 
});  