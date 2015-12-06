<?php
session_start();
$link=$_GET['id'];
$sql = "DELETE FROM cart WHERE productid = '".$link."'";
$con = mysql_connect('localhost', 'root', 'Shijian1');
if (!$con)
{
    die('Connection Failed');
}
mysql_select_db('test', $con);
$res = mysql_query($sql);
header("location: cart.php");
?>