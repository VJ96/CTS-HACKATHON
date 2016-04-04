<?php
$link = mysql_connect('localhost', 'root', '123456');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('direction');
$tbl_name="creddeb"; // Table name
//ion_register("cardBlock");
//session_register("PinRecovery");
//session_register("other");
$cardBlock=$_POST['cardBlock'];
$PinRecovery=$_POST['PinRecovery'];
$other=$_POST['other'];
$sql="INSERT INTO $tbl_name WHERE cardBlock='$cardBlock' and PinRecovery='$PinRecovery'  other="$other";


?>
                                                                               
~                   
