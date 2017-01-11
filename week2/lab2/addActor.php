<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab 2 - Add Actor Page</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Lab 2</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="viewActor.php">View Actors</a></li>
                        <li class="active"><a href="addActor.php">Add Actor</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br />
        <?php
        include './dbconnect.php';
        include './functions.php';
        include './crud.php';
        
        $results = '';

        if (isPostRequest()) {
            
            $firstname = filter_input(INPUT_POST, 'firstname');
            $lastname = filter_input(INPUT_POST, 'lastname');
            $dob = filter_input(INPUT_POST, 'dob');
            $height = filter_input(INPUT_POST, 'height');
            $confirm = createActorData($firstname, $lastname, $dob, $height);
            
            if ( $confirm === false ) {
                $results = 'Actor Added';
            } else {
                $results = 'Actor NOT Added';
            }
        }
        ?>


        <h1><?php echo $results; ?></h1>

        <form method="post" action="#">
            <div class="form-group">
                First Name <input type="text" value="" name="firstname" class="form-control" />
            </div>
            <div class="form-group">
                Last Name <input type="text" value="" name="lastname" class="form-control" />
            </div>
            <div class="form-group">
                DOB <input type="date" value="" name="dob" class="form-control" />
            </div>
            <div class="form-group">
                Height <input type="text" value="" name="height" class="form-control" />
            </div>
            <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-default" class="form-control" />
            </div>
        </form>
    </body>
</html>
