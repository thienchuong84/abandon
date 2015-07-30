
<?php
// function convert date from m/d/y -> y-m-d , ex: 07/31/2015 -> 2015-07-31
function convertDateAsterisk($d) {
    //help: use trim function to strip whitespace (or other character) from the beginning and end of string
    $date = trim(substr($d,6,4).'-'.substr($d,0,2).'-'.substr($d,3,2));        
    return $date;    
}

// test input variables
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $dat = htmlspecialchars($data);
    return $data;
}

// connect db and close connection
function db_connect(){
    // create connection
    $conn = new mysqli(db_host, db_user, db_pass);
    
    // check connection
    if(mysqli_connect_error()) {
        die("Database connection fail : ".mysqli_connect_error());
    }        
}

function db_close() {
    $conn -> close();
}





?>