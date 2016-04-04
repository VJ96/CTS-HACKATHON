<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="123456"; // Mysql password
$db_name="direction"; // Database name
$tbl_name="login"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$custid=$_POST['custid'];
$passwd=$_POST['passwd'];
$sql = "INSERT INTO login (custid,passwd)
VALUES ($custid,$passwd)";
$sql="select passwd from login where custid=".$custid;
echo $sql;

echo "Wrong Username or Password";

?>

