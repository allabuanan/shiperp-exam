<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <button id="get-api">Use API</button>
    <h1>First provider module image</h1><br>
    <img src="" id="api-image" height="400px" width="400px">
    
    <script type="text/javascript">
        $('#get-api').click(function(event) {
            $.ajax({
                method: "GET",
                url: "http://localhost:8000/api/providermodules",
                contentType: 'application/json',
                dataType: 'json',
                success: function(r) {
                    var res = r;
                    console.log(res.modules[0].url)
                    var link = res.modules[0].url;
                    $.ajax({
                        method: "GET",
                        url: link,
                        contentType: 'application/json',
                        dataType: 'json',
                        success: function(r) {
                            var res = r;
                            console.log(res.image)
                            document.getElementById("api-image").src = res.image;
                        },
                        error: function(r) {
                            console.log(r)
                        }
                    });
                },
                error: function(r) {
                    console.log(r)
                }
            });
        }); 
    </script>
</body>
</html>