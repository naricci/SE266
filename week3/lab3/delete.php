<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab 3: Delete Page</title>
    </head>
    <body>
        <header>
            <a href="view-all.php">Back to Company List</a>
        </header>
        <br />
        <?php
        
            include './dbconnect.php';
            include './functions.php';
            
            $id = filter_input(INPUT_GET, 'id'); 
            
            $isDeleted = deleteFromCorps($id);           
        ?>
        
        <h1>Record <?php echo $id; ?>
        <?php if ( !$isDeleted ): ?> 
            NOT
        <?php endif; ?>
        Deleted.</h1>
        
    </body>
</html>
