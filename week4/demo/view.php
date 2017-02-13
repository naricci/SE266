<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>        
    </head>
    <body>
        <?php
        
           include_once './functions/dbconnect.php';
           include_once './functions/dbData.php';
            
           $results = getAllTestData();
           
           $column = 'datatwo';
           $action = filter_input(INPUT_POST, 'action');
           $dataone = filter_input(INPUT_POST, 'dataone'); 
            
            if ( $action === 'Submit1' ) {
               
            }
            if ( $action === 'Submit2' ) {
                $results = searchTest($column, $dataone);
            }
           
        ?>
        
        <p>Showing <?php echo count($results); ?> results</p>
        <?php include './includes/form1.php'; ?>
        <?php include './includes/form2.php'; ?>
        
        <?php include './includes/show-test-results.html.php'; ?>
           
    </body>
</html>
