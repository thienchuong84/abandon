<?php

function Getconnection($host,$user,$pass,$db) {
	if(mysqli_connect_error()){
        echo "Failed to connect Database NEW : ".mysqli_connect_error();
    }

	return mysqli_connect($host, $user, $pass, $db);
}




function have_navbar_menu($sql, $conn) {
   
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








/* su dung ben html

    $conn = Getconnection(db_host, db_user, db_pass, db3);

    $sql = "SELECT      navtab_menu.* 
    FROM        users
    INNER JOIN  roles_navtab    ON users.idRole = roles_navtab.idRole
    INNER JOIN  navtab_menu ON roles_navtab.idMenu = navtab_menu.idMenu
    WHERE       idUser='{$_SESSION["id"]}'";

	$array = have_navbar_menu($sql, $conn);

    if($menu[0][0]!="") { 
    $count = count($menu);
    for($row=0; $row<$count; $row++) {
		echo $menu[$row][0]; echo $menu[$row][1];
    }

*/




?>