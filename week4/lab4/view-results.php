<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>View Results</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    </head>
    <body>
        <?php
        
           include_once './functions/dbconnect.php';
           include_once './functions/dbData.php';
        
           $results = sortCorps($column, $order);
        ?>
        
        <div class="container">
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Corps</th>
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
                        <td><?php echo $row['corps']; ?></td>
                        <td><?php echo date("m/d/Y",strtotime($row['incorp_dt'])); ?></td>
                        <td><?php echo $row['email']; ?></td> 
                        <td><?php echo $row['zipcode']; ?></td> 
                        <td><?php echo $row['owner']; ?></td> 
                        <td><?php echo $row['phone']; ?></td> 
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
       
    </body>
</html>
