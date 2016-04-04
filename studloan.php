<?php
$link = mysql_connect('localhost', 'root', '123456');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('direction');
$tbl_name="studloan"; // Table name
$amount=$_POST['amount'];
$time=$_POST['time']
$sql="INSERT INTO $tbl_name WHERE amount='$amount' and time='$time'";


?>
