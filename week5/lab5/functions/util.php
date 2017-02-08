<?php

/**
 * A method to check if a Post request has been made.
 *    
 * @return boolean
 */
function isPostRequest() {
    return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
}

/**
 * A method to curl a URL and return the html.
 * 
 * @return string
 */
function getPageContent($url) {
    // create curl variable
    $curl = curl_init(); 
    // set the url
    curl_setopt($curl, CURLOPT_URL, $url);
    // return the transfer as a resource
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    // $output contains the output string
    $output = curl_exec($curl);
    // close curl resource to free up system memory
    curl_close($curl);
    // return the output of the curl
    return $output;
}