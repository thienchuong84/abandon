<?php
//include 'includes/config.php';
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
// update Aug 05, 2015 : function này chưa sử dụng ở trang nào
/*
function checkUser($user,$pass) {
    $conn = mysqli(db_host, db_user, db_pass, db3);

    $sql = "SELECT idUser, user, pass, fullname FROM user
            WHERE user='".$user."' and pass='".$pass."' limit 1";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if(is_array($row)) {
        $_SESSION["id"] = $row["idUser"];
        $_SESSION["user"] = $row["user"];
    }
}*/

// update Aug 05,2015 : function have_navtab_menu($id_of_user) to check what role user have. And query and load tab in setting of user
// Function này là 1 function rất đặc biệt, vì nó kết nối db và trả về 1 multi array
function have_navtab_menu($id_of_user) {
    $conn = mysqli_connect(db_host, db_user, db_pass, db3);

    if(mysqli_connect_error()){
        echo "Failed to connect Database : ".mysqli_connect_error();
    }

    $sql = "SELECT      navtab_menu.* 
            FROM        users
            INNER JOIN  roles_navtab    ON users.idRole = roles_navtab.idRole
            INNER JOIN  navtab_menu ON roles_navtab.idMenu = navtab_menu.idMenu
            WHERE       idUser='{$id_of_user}'";

    $result = mysqli_query($conn, $sql);
    $count = count($result);
    $menu_detail = array();
    for($row=0; $row<$count; $row++){
        $row_of_array = mysqli_fetch_row($result);
        for($col=0; $col<5; $col++){
            $menu_detail[$row][] = $row_of_array[$col];
        }
    }
    mysqli_free_result($result);
    mysqli_close($conn);
    return $menu_detail;
}