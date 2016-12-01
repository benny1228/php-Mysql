<?php
//echo $getdata;
$conn = mysqli_connect("localhost","root","root");
mysqli_select_db($conn,"test01");
$result = mysqli_query($conn,'SELECT datax,datay FROM get_data');
echo "<table>";
while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" ."x"."</td><td>". $row['datax'] . "</td><td>"."y"."</td><td>" . $row['datay'] . "</td></tr>";  //$row['index'] the index here is a field name
}
echo "</table>";
mysqli_close($conn);
?>
