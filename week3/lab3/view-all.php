<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab 3: View Page</title>
    </head>
    <body>
        <header>
       <!-- <a href="view-all.php">View</a> -->
            <a href="add.php">Add Company</a>
        </header>
        <br />
        <?php
        
        include './dbconnect.php';
        include './functions.php';
        
        $results = viewAllFromCorps();
        ?>
        <!-- Corporations Table -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Company Name</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($results as $row): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['corp']; ?></td>
                    <!-- Read, Update, Delete Buttons -->
                    <td><a href="view-one.php?id=<?php echo $row['id']; ?>">Read</a></td>
                    <td><a href="update.php?id=<?php echo $row['id']; ?>">Update</a></td>            
                    <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>
