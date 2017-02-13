<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab 4: View Page</title>
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
        <?php

            include_once './functions/dbconnect.php';
            include_once './functions/dbData.php';

            $results = getAllCorpsData();

            $column = columnSelect();

            $action = filter_input(INPUT_POST, 'action');
            $search = filter_input(INPUT_POST, 'search');

            if ($action === 'Submit1') {
                $results = sortCorps($column, $order);
            }
            if ($action === 'Submit2') {
                $results = searchCorps($column, $search);
            }
        
        ?>
            
            <p>Showing <?php echo count($results); ?></p>
            <?php include './includes/form1.php'; ?>
            <?php include './includes/form2.php'; ?>

            <?php include './includes/show-corps-results.php'; ?>
            
            <!-- Corporations Table -->
            <table border="1" class="table table-bordered table-condensed table-responsive">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Company Name</th>
                        <th>Date</th>
                        <th>Email</th>
                        <th>Zip Code</th>
                        <th>Owner</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($results as $row): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['corp']; ?></td>
                        <td><?php echo date("m/d/Y",strtotime($row['incorp_dt'])); ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['zipcode']; ?></td>
                        <td><?php echo $row['owner']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div> <!--/container-->
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
