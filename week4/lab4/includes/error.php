<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Error!</title>
    </head>
    <body>
        <h1>Sorry there was an issue...</h1>
        <h2>
        <?php        
            if ( isset($message) ) {
              echo $message;  
            }            
        ?>
        </h2>
    </body>
</html>
