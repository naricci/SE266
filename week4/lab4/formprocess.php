<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Processing</title>
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
                    <a class="navbar-brand" href="#">Lab 4:  Corps View Page</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="http://narportfolio.me" role="button">Home</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br />
        
        <!-- Main Content Container -->
        <div class="container">
            <h1>My Forms</h1>
            <?php

                $action = filter_input(INPUT_POST, 'action');
                $column = filter_input(INPUT_POST, 'column');
                $search = filter_input(INPUT_POST, 'search');
                $order = filter_input(INPUT_POST, 'order');

                include './includes/form1.php';
                include './includes/form2.php';
                
                if ( $action === 'Submit1' ) {
                    echo 'Submitted Form 1' . ' ';
                    echo $column . ' ' . $order;
                }
                if ( $action === 'Submit2' ) {
                    echo 'Submitted Form 2' . ' ';
                    echo $column . ' ' . $search;
                }

                
                
            ?>
        </div>
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>