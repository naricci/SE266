<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab 3: Update Page</title>
    </head>
    <body>
        <?php
        
            include './dbconnect.php';
            include './functions.php';

            $result = '';
            if (isPostRequest()) {
                $id = filter_input(INPUT_POST, 'id');
                $corp = filter_input(INPUT_POST, 'corp');
                $email = filter_input(INPUT_POST, 'email');
                $zipcode = filter_input(INPUT_POST, 'zipcode');
                $owner = filter_input(INPUT_POST, 'owner');
                $phone = filter_input(INPUT_POST, 'phone');
                
                $updated = updateFromCorps($id, $corp, $email, $zipcode, $owner, $phone);
                if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                   $result = 'Record updated';
                } else {
                    $result = 'Record NOT updated';
                }
                
            } else {
                $id = filter_input(INPUT_GET, 'id');
                
                if ( !isset($id) ) {
                    exit('Record not found');
                }
                
                $row = viewOneFromCorps($id);
                $corp = $row['corp'];
                $email = $row['email'];
                $zipcode = $row['zipcode'];
                $owner = $row['owner'];
                $phone = $row['phone'];
            }
        
        ?>
        
        <h1><?php echo $result; ?></h1>
        
        <form method="post" action="#">            
            Company Name <input type="text" value="<?php echo $corp; ?>" name="corp" />
            <br />
            Email <input type="text" value="<?php echo $email; ?>" name="email" />
            <br />  
            Zip Code <input type="text" value="<?php echo $zipcode; ?>" name="zipcode" />
            <br />  
            Owner <input type="text" value="<?php echo $owner; ?>" name="owner" />
            <br />
            Phone <input type="text" value="<?php echo $phone; ?>" />
            <br />
            <input type="hidden" value="<?php echo $id; ?>" name="id" /> 
            <input type="submit" value="Update" />
        </form>
        
        <p> <a href="view-all">Back to Company List</a></p>
        
    </body>
</html>
