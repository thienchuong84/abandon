
<?php
include 'includes/functions.php';

if(isset($_POST['tmpSubmit1'])){
    
    if($_POST['tmpDate1'] == ""){
        $d = strtotime("yesterday");// echo $d; // value: 1438120800
        $abandon_date = date("Y-m-d", $d); // echo $abandon_date; // value: 2015-07-29
    } else {
        //$d = $_POST['tmpDate1']; // value: 07/31/2015        
        //$abandon_date = trim(substr($d,6,4).'-'.substr($d,0,2).'-'.substr($d,3,2)); // echo $abandon_date; // value: 2015-07-29 
        
        // define function to use
        $abandon_date = convertDateAsterisk($_POST['tmpDate1']); // echo $abandon_date;
    }
    
    $callerid = $_POST['tmpCallerid1']; // echo $callerid;
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
            <td>calldate</td>
            <td>src</td>
            <td>dst</td>
            <td>channel</td>
            <td>dstchannel</td>
            <td>lastapp</td>
            <td>lastdata</td>
            <td>duration</td>
            <td>billsec</td>
            <td>disposition</td>
          </tr>      
        </tbody>
      </table>
    </div>
  </div>
</div><!-- end div row table -->