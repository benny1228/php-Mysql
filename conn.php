<?php
$getdata = file_get_contents('php://input');
// ($getdata);
$conn = mysqli_connect("localhost","root","root");
mysqli_select_db($conn,"test01");//選擇數據庫
var_dump(json_decode($getdata));

$data = json_decode($getdata, true);

$dataname=$data['data']['name'];
  $datax = $data['data']['x'];
  $datay = $data['data']['y'];
  $dataz = $data['data']['z'];
$sql = "UPDATE get_data SET datax='$datax',datay='$datay' WHERE data_name='$dataname'";
mysqli_query($conn,$sql);
mysqli_close($conn);
?>
