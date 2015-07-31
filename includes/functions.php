
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
function query_abandon($date,$caller){
    // create connection
    $conn = new mysqli(db_host, db_user, db_pass, db1); //echo "connect succesful";
    
    // check connection
    if(mysqli_connect_error()) {
        die("Database connection fail : ".mysqli_connect_error());
    }

    // declare mysql statement, compare date, can use DATE(caldate) LIKE '$abandon_date' | calldate LIKE '$abandon_date %'
    $sql="
        SELECT calldate, src, dst, channel, dstchannel, lastapp, lastdata, duration, billsec, disposition FROM asteriskcdrdb
        WHERE DATE(calldate)='$date' AND src='$caller'
    ";

    // query result
    $result = $conn->query($sql);

    // neu la 1 empty array , se xu ly sau
    // if ($result->num_rows > 0)
    /* tmp_disable
    if ($result->num_rows > 0) {
        // khai bao empty array
        $tmp_array = array(
            // query tung row va gan vao mang 
            while($row = $result->mysqli_fetch_assoc()) {
                array($row["calldate"],$row["src"],$row["dst"],$row["channel"],$row["dstchannel"],$row["lastapp"],$row["lastdata"],$row["duration"],$row["billsec"],$row["disposition"]);
            };
        );
    }
    */
    $result->free();        
            
    $conn->close();

    return $tmp_array;
}

?>