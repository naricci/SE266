<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab 3: Update Page</title>
        
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
                    <a class="navbar-brand" href="#">Lab 3:  Corps Update Page</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="./view-all.php" role="button">Back to List</a></li>
                        <li><a href="./create.php" role="button">Add Company</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br />
        <?php
        
            include './dbconnect.php';  
            include './functions.php';

            $result = '';
            if (isPostRequest()) {
                $id      = filter_input(INPUT_POST, 'id');
                $corp    = filter_input(INPUT_POST, 'corp');
                $email   = filter_input(INPUT_POST, 'email');
                $zipcode = filter_input(INPUT_POST, 'zipcode');
                $owner   = filter_input(INPUT_POST, 'owner');
                $phone   = filter_input(INPUT_POST, 'phone');
                
                $updated = updateCorpsRow($id, $corp, $email, $zipcode, $owner, $phone);
                if ($updated === true) {
                   $result = 'Record updated';
                } else {
                    $result = 'Record NOT updated';
                }
                
            } else {
                $id = filter_input(INPUT_GET, 'id');
                
                if ( !isset($id) ) {
                    exit('Record not found');
                }
                
                $row     = viewOneFromCorps($id);
                $corp    = $row['corp'];
                $email   = $row['email'];
                $zipcode = $row['zipcode'];
                $owner   = $row['owner'];
                $phone   = $row['phone'];
            }
        
        ?>
        <div class="container">
            <h1><?php echo $result; ?></h1>

            <form method="post" action="#">   
                <div class="form-group">
                    Company Name <input type="text" value="<?php echo $corp; ?>" name="corp" class="form-control" />
                </div><br />
                <div class="form-group">
                    Email <input type="text" value="<?php echo $email; ?>" name="email" class="form-control" />
                </div><br />  
                <div class="form-group">
                    Zip Code <input type="text" value="<?php echo $zipcode; ?>" name="zipcode" class="form-control" />
                </div><br /> 
                <div class="form-group">
                    Owner <input type="text" value="<?php echo $owner; ?>" name="owner" class="form-control" />
                </div><br />
                <div class="form-group">
                    Phone <input type="text" value="<?php echo $phone; ?>" name="phone" class="form-control" />
                </div><br />
                <div class="form-group">
                    <input type="hidden" value="<?php echo $id; ?>" name="id" /> 
                    <input type="submit" value="Update" class="btn btn-primary form-control" />
                </div>
            </form>
        </div> <!--/container-->
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
