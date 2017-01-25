<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab 3: Delete Page</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    </head>
    <body>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-default navbar-inverse">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Lab 3:  Corps Delete Page</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="./view-all.php" role="button">Back to List</a></li>
                        <li><a href="./create.php" role="button">Add Company</a></li>
                    </ul>
                </div>
            </div> <!--/container-->
        </nav>
        <br />
        <?php
        
            include './dbconnect.php';
            include './functions.php';
            
            $id = filter_input(INPUT_GET, 'id'); 
            
            $isDeleted = deleteFromCorps($id);           
        ?>
        <div class="container">
            <h1>Record <?php echo $id; ?>
            <?php if ( !$isDeleted ): ?> 
                NOT
            <?php endif; ?>
            Deleted.</h1>
        </div> <!--/container-->
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
