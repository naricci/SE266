<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
            include './functions/dbconnect.php';
            include './functions/util.php';
            
            $site = filter_input(INPUT_POST, 'site');
            $errors = array();
            
            if ( isPostRequest() ) {
                if ( filter_var($site, FILTER_VALIDATE_URL) === false  ) {
                    $errors[] = 'Site URL is NOT valid.';
                }
                if ( count($errors) === 0) {
                    // Save data
                }
            }
        ?>
        
        <?php include './templates/error-messages.php'; ?>
        
        <form action="#" method="post">
            Site: <input type="text" name="site" value="<?php echo $site; ?>" />
            <br />
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
