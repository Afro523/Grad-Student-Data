 <html>
<script   src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
 <script type="text/javascript">

 $(document).ready(function() {

    $("#display").click(function() {                

      $.ajax({    //create an ajax request to load_page.php
        type: "GET",
        url: "sqlstuff.php",             
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#responsecontainer").html(response); 
            //alert(response);
        }

    });
});
});

</script>

<body>
<h3 align="center">Manage Student Details</h3>
<table border="1" align="center">
   <tr>
       <td> <input type="button" id="display" value="Display All Data" /> </td>
   </tr>
</table>
<div id="responsecontainer" align="center">

</div>

</body>
</html>