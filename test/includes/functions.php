<?php
include 'includes/config.php';
// function convert date from m/d/y -> y-m-d , ex: 07/31/2015 -> 2015-07-31
function convertDateAsterisk($d) {
    //help: use trim function to strip whitespace (or other character) from the beginning and end of string
    $date = trim(substr($d,6,4).'-'.substr($d,0,2).'-'.substr($d,3,2));        
    return $date;    
}

// test input variables
// used in: ajax_mjn_abandon_test.php, login.php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $dat = htmlspecialchars($data);
    return $data;
}

// checkUser() function : query to db and authenticated.
// used in: login.php
function checkUser($user,$pass) {
    $conn = mysqli(db_host, db_user, db_name, db3);

    $sql = "SELECT idUser, user, pass, fullname FROM user
            WHERE user='".$user."' and pass='".$pass."' limit 1";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if(is_array($row)) {
        $_SESSION["id"] = $row["idUser"];
        $_SESSION["user"] = $row["user"];
    }
}

?>