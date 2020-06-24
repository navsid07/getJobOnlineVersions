<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Codeigniter Auto-Complete using jQuery</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
 
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#university").autocomplete({
                source : function(request, response) {
                    $.ajax({
                        //type: "GET",
                        url : "https://get-job.online/Employee/auto",
                        dataType : "json",
                        cache: false,
                        data : {
                            q : request.term
                        },
                        success : function(data) {
                            //alert(data);
                            //console.log(data);
                            response(data);
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.log(textStatus+" "+errorThrown);
                        }
                    });
                },
                minLength : 2
            });
        });
    </script>
</head>
<body>
    <div style="width: 600px; margin: auto;">
        <h3>Codeigniter Auto-Complete using jQuery</h3>
        <fieldset>
            <legend>Search Here</legend>
            <p>
                <input type="text" name="search" id="university" style="width: 560px; margin: auto;" />
            </p>
        </fieldset>
    </div>
</body>
</html>