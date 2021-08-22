<body>
<?php
$v = exec("ping " . "version.common.freefiremobile.com");
$h = explode('ms', $v);
$i =  $h[2];
$media = explode("=",$i);

echo "<h2>TESTE Ping FF</h2>";
if($media[1]>999){$media = '<h4 id = "ping_style">Ping: 999+</h4>';echo $media;}else{echo '<h4 id = "ping_style">Ping: '.$media[1].'</h4>';}
?>
    <script>
    var ping =<?php echo$media[1];?>

        if(ping<=120&&ping>0){ping_style.style.color="green"}
        if(ping<=300&&ping>=120){ping_style.style.color="#D7DF01"}
        if(ping<=600&&ping>=320){ping_style.style.color="orange"}
        if(ping>=600){ping_style.style.color="red"}
    </script>
</body>