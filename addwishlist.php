<?php
    session_start();
    if(isset($_POST['addwishlist']))
    {
        $sql = "INSERT INTO wishlists(productid, customer_email) VALUES (".$_SESSION[productid].", '".$_SESSION[email]."')";
        $con = mysql_connect('localhost', 'root', 'Shijian1');
        if (!$con)
        {
            die('Connection Failed');
        }
        mysql_select_db('test', $con);
        $res = mysql_query($sql);
    }
    if(isset($_POST['addcart']))
    {
        $sql = "INSERT INTO cart(productid, quantity, product_price, customer_email) VALUES (".$_SESSION[productid].", ".$_POST['quantity'].", ".$_SESSION[productprice].", '".$_SESSION[email]."')";
        $con = mysql_connect('localhost', 'root', 'Shijian1');
        if (!$con)
        {
            die('Connection Failed');
        }
        mysql_select_db('test', $con);
        $res = mysql_query($sql);
    }
?>