<?php
$link = mysql_connect('localhost', 'root', '123456');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('direction');
$tbl_name="dd"; // Table name
$x=0;
$paymentrecvr=$_POST['paymentrecvr'];
$amt=$_POST['amt'];
$tokenno=$_POST['x'];
$y=$x+1;
$y=$tokenno;
$sql="INSERT INTO $tbl_name WHERE paymentrecvr='$paymentrecvr' and amt='$amt' and tokenno='$tokenno'";
string json_encode($tokenno);
?>

~
~
~
~
-- INSERT --                                                  18,1          All

"deposit.php" 23L, 762C                                       1,1           All

