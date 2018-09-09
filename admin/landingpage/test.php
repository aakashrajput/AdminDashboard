<?php

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"spartanshub");
  $result = mysqli_query($link,"select * from client_reg");
  $num_rows = mysqli_num_rows($result);

echo "$num_rows Rows\n";

?>
