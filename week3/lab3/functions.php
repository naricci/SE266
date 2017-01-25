<?php
/**
 * A method to check if a Post request has been made.
 *    
 * @return Boolean
 */
function isPostRequest() {
    return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
}

/* *
 * Creates a new row at bottom of the corps Table.
 * 
 * @return Boolean
 */
function createCorpData($corp, $email, $zipcode, $owner, $phone) {
    $result = false;
    
    $db = getDatabase();
    
    $stmt = $db->prepare("INSERT INTO corps SET corp = :corp, incorp_dt = now(), email = :email, zipcode = :zipcode, owner = :owner, phone = :phone");
    
    $binds = array(
        ":corp"    => $corp,
        ":email"   => $email,
        ":zipcode" => $zipcode,
        ":owner"   => $owner,
        ":phone"   => $phone
    );
    
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $results = true;
    }
    
    return $result;
}

/**
 * Retreives ALL ROWS from corps Table
 * 
 * @return String
 */
function viewAllFromCorps() {
    $db = getDatabase();
    
    $stmt = $db->prepare("SELECT * FROM corps");
    
    $results = array();
    if ($stmt->execute() && $stmt->rowCount() > 0) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }
    
    return $results;
}

/**
 * Retreives a SINGLE ROW from corps Table
 * 
 * @return String
 */
function viewOneFromCorps($id) {
    $db = getDatabase();
    
    $stmt = $db->prepare("SELECT * FROM corps WHERE id = :id");
    
    $binds = array(
        ":id" => $id
    );
    
    $result = array();
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    return $result;
}

/**
 * Deletes a new row from the corps Table.
 * 
 * @return Boolean
 */
function deleteFromCorps($id) {
    $isDeleted = false;
    
    $db = getDatabase();
    
    $stmt = $db->prepare("DELETE FROM corps WHERE id = :id");
    
    $binds = array(
        ":id" => $id
    );
    
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $isDeleted = true;
    }
    
    return $isDeleted;
}

/**
 * Updates a specified row from corps table
 * 
 * @return Boolean
 */
function updateCorpsRow($id, $corp, $email, $zipcode, $owner, $phone) {
    $result = false;
    
    $db = getDatabase();
    
    $stmt = $db->prepare("UPDATE corps SET corp = :corp, email = :email, zipcode = :zipcode, owner = :owner, phone = :phone WHERE id = :id");
    
    $binds = array(
        ":id"      => $id,
        ":corp"    => $corp,
        ":email"   => $email,
        ":zipcode" => $zipcode,
        ":owner"   => $owner,
        ":phone"   => $phone
    );
    
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $result = true;
    }
    
    return $result;  
}