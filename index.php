<html>
    <?php 
        $realIP = file_get_contents("http://ipecho.net/plain");
    
    ?>
    <head></head>
    <body>

        <h1><?php echo $realIP?></h1>
    </body>
</html>