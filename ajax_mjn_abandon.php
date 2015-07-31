<?php
include 'includes/functions.php';
include 'includes/config.php';

// set null for variables
$d = $abandon_date = $callerid = "";

if(isset($_POST['tmpSubmit1'])){
    
    // check variables
    $tmpDate1 = test_input($_POST['tmpDate1']);
    $tmpCallerid1 = test_input($_POST['tmpCallerid1']);
    
    if($tmpDate1 == ""){
        $d = strtotime("yesterday");// echo $d; // value: 1438120800
        $abandon_date = date("Y-m-d", $d); // echo $abandon_date; // value: 2015-07-29
    } else {
        //$d = $_POST['tmpDate1']; // value: 07/31/2015        
        //$abandon_date = trim(substr($d,6,4).'-'.substr($d,0,2).'-'.substr($d,3,2)); // echo $abandon_date; // value: 2015-07-29 
        
        // define function to use
        $abandon_date = convertDateAsterisk($tmpDate1); // echo $abandon_date;
    }
    
    $callerid = $tmpCallerid1; // echo $callerid;
}
?>
<div class="row">
  <div class="col-md-12">            
    <div class="table-responsive">
      <table class="table table-hover">
        <thread>
          <tr>
            <th>calldate</th>
            <th>src</th>
            <th>dst</th>
            <th>channel</th>
            <th>dstchannel</th>
            <th>lastapp</th>
            <th>lastdata</th>
            <th>duration</th>
            <th>billsec</th>
            <th>disposition</th>
          </tr>
        </thread>
        <tbody>  
          <tr>
            <?php 
            // have two variables is $abandon_date and $callerid , call query_abandon() function use this 2 variables
            $tmp_array = query_abandon($abandon_date,$callerid);
            
            // use count() to get so hang trong 1 array, dua vao for su dung. VD: count($tmp_array)
            $arrlength = count($tmp_array);

            for($row=0; $row < $arrlength; $row++){
                for($col=0; $col<10; $col++){
                    echo "<td>".$tmp_array[$row][$col]."</td>";                   
                }
            }
            ?>

          </tr>      
        </tbody>
      </table>
    </div>
  </div>
</div><!-- end div row table -->