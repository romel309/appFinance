<?php

  if(isset($_POST["irate"]) && isset($_POST["loan"]) && isset($_POST["npay"])){
    $calendar='';
    $totalpay=0;
    $month=11;
    $year=2019;
    $labels="";
    $data="";
    $rate = $_POST["irate"]/100;
    $fv = 0;
    $pv = -$_POST["loan"];
    $type = 0;
    $nper = $_POST["npay"];

    $payment = (-$fv - $pv * pow(1 + $rate, $nper)) /
      (1 + $rate * $type) /
      ((pow(1 + $rate, $nper) - 1) / $rate);
    $payment = number_format($payment, 2, '.', '');
    $captbpast = -$pv;
    $capast = 0;

    include("../examples/results.html");
  }else{
     header("location: calculations.php");
    //include("calculations.php");
  }

?>
