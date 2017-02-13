<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>My Forms</h1>
        <?php
        
        $action = filter_input(INPUT_POST, 'action');
        $dataone = filter_input(INPUT_POST, 'dataone');
        $datatwo = filter_input(INPUT_POST, 'datatwo');
        
        if ( $action === 'Submit1' ) {
            echo 'submited form 1';
            echo $dataone;
            echo $datatwo;
        }
        if ( $action === 'Submit2' ) {
            echo 'submited form 2';
            echo $dataone;
            echo $datatwo;
        }
        
        include './includes/form1.php';
        include './includes/form2.php';
        
        ?>
    </body>
</html>
