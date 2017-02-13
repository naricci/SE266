<?php

function getAllCorpsData(){
    $db = dbconnect();
           
    $stmt = $db->prepare("SELECT * FROM corps");

    $results = array();
    
    if ($stmt->execute() && $stmt->rowCount() > 0) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return $results;
}

/*
 * $stmt = $db->prepare("SELECT * FROM test ORDER BY $column $order");
 */
function searchCorps($column, $search){
    $db = dbconnect();
  
    $stmt = $db->prepare("SELECT * FROM corps WHERE $column LIKE :search");
    
    $search = '%'.$search.'%';

    $binds = array(
        ":search" => $search
    );
    
    $results = array();

    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    return $results;
}


function sortCorps($column, $order) {
    $db = dbconnect();
    
    $column = 'id'; // make an array to hold all columns?
    $order = 'ASC'; // make an array to hold both order types?
    
    $stmt = $db->prepare("SELECT * FROM corps ORDER BY $column $order");
    
    $results = array();
    
    if ($stmt->execute() && $stmt->rowCount() > 0) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}


function columnSelect() {
    $db = dbconnect();
    
    $stmt = $db->prepare("SELECT $column FROM corps");
    
    $binds = array(
        ":id" => $id,
        ":corp" => $corp,
        ":email" => $email,
        ":zipcode" => $zipcode,
        ":owner" => $owner,
        ":phone" => $phone
    );
    
    $results = array();
    
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    return $results;
}