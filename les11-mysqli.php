<?php
include 'includes/config.php';
include 'includes/functions.php';

?>

Sử dụng hàm have_navtab_menu() trong includes/functions.php trả về mãng và query sử dụng <br />

<?php

$menu = have_navtab_menu(1);

//print_r($menu);
//$count = count($menu);
//echo $count;
/*
for($row=0; $row<$count; $row++) {
	print ($menu[$row][3]);
}
*/
//echo is_null($menu)?'NULL':'NOT NULL';

if($menu[0][0]==""){
	echo "mang rong";
}
else {
	echo "mang KO rong \n";
	print_r($menu);
}



?>



<a href="<?php $f="google.com.vn"; echo $f; ?>">google.com.vn</a>