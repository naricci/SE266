<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab 3: Read Page</title>
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
            
            $result = viewOneFromCorps($id);
          
        ?>
        <!-- Table to display specific company from list -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Company Name</th>
                    <th>Date</th>
                    <th>Email</th>
                    <th>Zip Code</th>
                    <th>Owner</th>
                    <th>Phone</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $result['id']; ?></td>
                    <td><?php echo $result['corp']; ?></td>        
                    <td><?php echo  date("F j, Y, g:i a",strtotime($result['incorp_dt'])); ?></td>
                    <td><?php echo $result['email']; ?></td>        
                    <td><?php echo $result['zipcode']; ?></td>        
                    <td><?php echo $result['owner']; ?></td>        
                    <td><?php echo $result['phone']; ?></td>        
                    <td><a href="Update.php?id=<?php echo $result['id']; ?>">Update</a></td>            
                    <td><a href="Delete.php?id=<?php echo $result['id']; ?>">Delete</a></td>             
                </tr>          
            </tbody>
        </table>
    </body>
</html>
