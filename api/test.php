<body>
        versão: <strong><span id="ver"></span></strong><br/>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>
                    $.ajax({
                        url: "https://version.common.freefiremobile.com/live/ver.php?version=1.65.1&device=android",
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                                $("#ver").text(data.remote_version);
                        },  
                    });
        </script>
    </body>
</html>