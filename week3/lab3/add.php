<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab 3: Create Page</title>
    </head>
    <body>
        <header>
            <a href="view-all.php">Back to Company List</a>
            <a href="add.php">Add Another Company</a>
        </header>
        <br />
        <?php
        include './dbconnect.php';
        include './functions.php';
        
        $results = '';

        if (isPostRequest()) {
            
            $corp = filter_input(INPUT_POST, 'corp');
            $email = filter_input(INPUT_POST, 'email');
            $zipcode = filter_input(INPUT_POST, 'zipcode');
            $owner = filter_input(INPUT_POST, 'owner');
            $phone = filter_input(INPUT_POST, 'phone');
            $confirm = createCorpData($corp, $incorp_dt, $email, $zipcode, $owner, $phone);
            
            if ( $confirm === false ) {
                $results = 'Company Added';
            } else {
                $results = 'Company NOT Added';
            }
        }
        ?>

        <!-- Confirm whether company data was added or not -->
        <h1><?php echo $results; ?></h1>

        <form method="post" action="#">            
            Company <input type="text" value="" name="corp" />
            <br />
            Email <input type="text" value="" name="email" />
            <br />
            Zip Code <input type="text" value="" name="zipcode" />
            <br />
            Owner <input type="text" value="" name="owner" />
            <br />
            Phone <input type="text" value="" name="phone" />
            <br />
            
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
