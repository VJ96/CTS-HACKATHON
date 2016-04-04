<?php
$link = mysql_connect('localhost', 'root', '123456');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('direction');
$tbl_name="deposit"; // Table name
session_register("FromAccno");
session_register("amount");
$FromAccno=$_POST['FromAccno'];
$amount=$_POST['amount']
//$other=$_POST['other']
$sql="INSERT INTO $tbl_name WHERE FromAccno='$FromAccno' and amount='$amount'";


?>
 
~                   
~                                                                               
~                                                                               
~                                                                               
-- INSERT --                                                  18,1          All

