<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
            include './functions/dbconnect.php';
            include './functions/util.php';
            
            $site = filter_input(INPUT_POST, 'site');
            $errors = array();
            
            if ( isPostRequest() ) {
                if ( filter_var($site, FILTER_VALIDATE_URL) === false  ) {
                    $errors[] = 'Site URL is NOT valid.';
                }
                if ( count($errors) === 0) {
                    
                    $html = getPageContent($site);
                    
                    if ( !empty($html) ) {
                        $siteLinks = getLinkMatches($html);
                        
                        // Turn from here down into a function
                        $db = dbconnect();
                        
                        $stmt = $db->prepare("INSERT INTO sites SET date = now(), site = :site");
                        
                        $binds = array(":site" => $site);

                        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                            /* get the last insert ID to use as the relational id */
                            $site_id = $db->lastInsertId();
                            
                            $stmt = $db->prepare("INSERT INTO sitelinks SET site_id = :site_id, link = :link");
                            
                            foreach ($siteLinks as $link) {
                                $binds = array(":site_id" => $site_id, ":link" => $link); 
                                $stmt->execute($binds);
                            }
                            
                            // may need to return false;
                        }
                    }
                    
                    // Save data
                
                }
            }
        ?>
        
        <?php include './templates/error-messages.php'; ?>
        
        <form action="#" method="post">
            Site: <input type="text" name="site" value="<?php echo $site; ?>" />
            <br />
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
