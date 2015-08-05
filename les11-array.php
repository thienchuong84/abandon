


<?php
$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";


function test_array() {
	$cars = array
	  (
	  array("Volvo",22,18),
	  array("BMW",15,13),
	  array("Saab",5,2),
	  array("Land Rover",17,15)
	  );
	return $cars;
}
$foo = test_array();

for ($i=0; $i < count($foo); $i++){
	echo "<p><b>Row number : $i</b></p>";
	echo "<ul>";
	for($col=0; $col<3; $col++){
		echo "<li>".$foo[$i][$col]."</li>";
	}
	echo "</ul>";
}


?>





<br/><br /><br />
<?php
    $array = array("Foo", "Bar", "Baz");
    print "First time...\n";

    while (list($var, $val) = each($array)) {
        print "$var is $val\n";
    }

    print "Second time...\n";

    while (list($var, $val) = each($array)) {
        print "$var is $val\n";
    }
?>
<br /><br />

<?php
    $array["a"] = "Foo";
    $array["b"] = "";
    $array["c"] = "Baz";
    $array["d"] = "Wom";

    while (list($var, $val) = each($array)) {
        print "$var is $val\n";
    }
?>
<br /><br />

<?php
    $myarray['foo'] = "bar";
    print "This is from an array: {$myarray['foo']}\n";
?>
<br /><br />

<?php
    $array["a"] = "Foo";
    $array["b"] = "Bar";
    $array["c"] = "Baz";
    $array["d"] = "Wom";

    $str = serialize($array);
    $strenc = urlencode($str);
    print $str . "\n";
    print $strenc . "\n";
?><br />
<?php
    $arr = unserialize(urldecode($strenc));
    var_dump($arr);
?><br /><br />

<?php
    $myarray = array("Apples", "Oranges", "Pears");
    $size = count($myarray);
    print_r($myarray);
?><br />
<?php
    $myarray = array("Apples", "Oranges", "Pears");
    $size = count($myarray);
    $output = print_r($myarray, true);
    print $output;
?>

<?php
    $foo = array (
        0 => 'Apples',
        1 => 'Oranges',
        2 => 'Pears',
    );
?><br /><br>

<?php
    $array[] = "Foo";
    $array[] = "Bar";
    $array[] = "Baz";
    var_dump($array);
?><br />
<?php
    $array["a"] = "Foo";
    $array["b"] = "Bar";
    $array["c"] = "Baz";
    var_dump($array);
?>