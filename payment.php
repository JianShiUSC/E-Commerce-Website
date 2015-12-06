<?php
require 'header_login.php';
if(isset($_POST['savebutton']))
{
    $sql = "UPDATE Customer SET bill_fn='".$_POST['bill_fn']."', bill_ln='".$_POST['bill_ln']."', card_type='".$_POST['pay']."', credit_card_num='".$_POST['num']."', expiration_month=".$_POST['month'].", expiration_year=".$_POST['year']." WHERE email='".$_SESSION[email]."'";
    $con = mysql_connect('localhost', 'root', 'Shijian1');
    if(!con)
    {
        die("Connection Failed");
    }
    mysql_select_db('test', $con);
    $res = mysql_query($sql);
    $row = mysql_fetch_assoc($res);
    mysql_close($con);
}

$sql = "SELECT * FROM Customer WHERE email = '".$_SESSION[email]."'";
$con = mysql_connect('localhost', 'root', 'Shijian1');
if (!$con)
{
    die('Connection Failed');
}
mysql_select_db('test', $con);
$res = mysql_query($sql);
$row = mysql_fetch_assoc($res);
if(isset($_POST['checkout']))
{
    date_default_timezone_set("America/Los_Angeles");
    $date = date("m/d/Y");
//    echo $date;
//    echo $row['card_type'];
//    echo $_SESSION[email];
//    echo $row[shipping_address];
//    echo $row[ba_address];
//    echo $_SESSION['total_amount'];
    $sql_orders = "INSERT INTO orders(order_date, payment_method, shipping_address, billing_address, customer_email, order_total) VALUES ('$date', '".$row['card_type']."', '".$row[shipping_address]."', '".$row[ba_address]."', '".$_SESSION[email]."', '".$_SESSION['total_amount']."')";
    $con = mysql_connect('localhost', 'root', 'Shijian1');
    if(!con)
    {
        die("Connection Failed");
    }
    mysql_select_db('test', $con);
    $res_orders = mysql_query($sql_orders);
    $row_orders = mysql_fetch_assoc($res_orders);


    $sql_select = "SELECT MAX(orderid) AS max_orderid FROM orders";
    $con = mysql_connect('localhost', 'root', 'Shijian1');
    if(!con)
    {
        die("Connection Failed");
    }
    mysql_select_db('test', $con);
    $res_select = mysql_query($sql_select);
    $row_select = mysql_fetch_assoc($res_select);
//    echo $row_select[max_orderid];

    $sql_cart = "SELECT * FROM cart WHERE checkornot = 'checked'";
    $con = mysql_connect('localhost', 'root', 'Shijian1');
    if(!con)
    {
        die("Connection Failed");
    }
    mysql_select_db('test', $con);
    $res_cart = mysql_query($sql_cart);
    while($row_cart = mysql_fetch_assoc($res_cart)) {
//        echo $row_cart[productid];
//        echo $row_cart[quantity];
//        echo $row_cart[product_price];
        $sql_items = "INSERT INTO orderitems(orderid, productid, quantity, product_price) VALUES (".$row_select[max_orderid].", ".$row_cart[productid].", ".$row_cart[quantity].", ".$row_cart[product_price].")";
        mysql_select_db('test', $con);
        $res_items = mysql_query($sql_items);
        $row_items = mysql_fetch_assoc($res_items);
    }

    $sql_delete_cart = "DELETE FROM cart WHERE checkornot = 'checked'";
    $con = mysql_connect('localhost', 'root', 'Shijian1');
    if(!con)
    {
        die("Connection Failed");
    }
    mysql_select_db('test', $con);
    $res_delete_cart = mysql_query($sql_delete_cart);
    $row_delete_cart = mysql_fetch_assoc($res_delete_cart);

//    header('location:checkout_success.php');
}
?>
<html>
<head>
    <style>
    #ship_info
    {
    border-style: solid;
    border-color: black #9c9c9c #9c9c9c;
    margin: 0 auto;
    width: 70%;
    height: 280px;
    margin-bottom: 3%;
    background-color: white;
    font-family: Arial,sans-serif;
    font-size: 13px;
    }
    .title
    {
        width: 70%;
        margin: 0 auto;
        margin-bottom: 5px;
        font-family: Tahoma, Helvetica, Arial, 宋体, sans-serif;
        font-size: 18px;
    }
    .hreflink
    {
        text-decoration: none;
        font-weight: normal;
        color: #0066FF;
        font-family: Tahoma, Helvetica, Arial, 宋体, sans-serif;
        font-size: 12px;
    }
    .ship_info
    {
        margin-left: 2%;
    }
    .inputinfo1
    {
        width: 150px;
        height: 32px;
        border-radius: 5px;
        text-indent: 5px;
    }
    .inputinfo
    {
        width: 100px;
        height: 32px;
        border-radius: 5px;
        text-indent: 5px;
    }
    .inputinfo2
    {
        width: 50px;
        height: 32px;
        border-radius: 5px;
        text-indent: 5px;
    }
    .creditcard
    {
        vertical-align: top;
    }
    .creditcardimg
    {
        width: 48px;
        height: 30px
    }
    #save
    {
        width: 70px;
        height: 25px;
        background-color: #00BBFF;
        font-family: Microsoft YaHei;
        font-size: 11px;
        border-radius: 3px;
        color: white;
    }
    #save1
    {
        width: 155px;
        height: 35px;
        background-color: #00BBFF;
        font-family: Microsoft YaHei;
        font-size: 14px;
        border-radius: 3px;
        color: white;
    }
    #proceed
    {
        margin-left: 44%;
        margin-bottom: 10%;
    }
    </style>
</head>
<body style="background-color: #DDDDDD">
<form method="post" action="payment.php">
<div class="title" style="margin-top: 5%">
    <span>4)Payment Method</span>
    <span class="ship_info">(Toyota accepts all major credit and debit cards.)</span>
<!--    <a href="test.php" class="hreflink"> Change</a>-->
</div>
<div id="ship_info">
    <p class="ship_info">Card Type:
        <p>
        <input type="radio" class="creditcard" value="visa" name="pay" style="margin-left: 2%" checked <?php if($row['card_type'] == 'visa') echo "checked";?>><img src="visa.png" class="creditcardimg">
        <input type="radio" class="creditcard" value="mastercard" name="pay" <?php if($row['card_type'] == 'mastercard') echo "checked";?>><img src="mastercard.png" class="creditcardimg">
        <input type="radio" class="creditcard" value="americanexpress" name="pay" <?php if($row['card_type'] == 'americanexpress') echo "checked";?>><img src="amex.png" class="creditcardimg">
        <input type="radio" class="creditcard" value="discover" name="pay" <?php if($row['card_type'] == 'discover') echo "checked";?>><img src="discover.png" class="creditcardimg">
        </p>
    </p>
    <p class="ship_info">Name on Card: <?php echo '<input type="text" name="bill_fn" placeholder="First Name" class="inputinfo" value="'.$row[bill_fn].'">';?> <?php echo '<input type="text" name="bill_ln" placeholder="Last Name" class="inputinfo" value="'.$row[bill_ln].'">';?></p>
    <p class="ship_info">Card Number: <?php echo '<input type="text" name="num" placeholder="Card Number" class="inputinfo1" value="'.$row[credit_card_num].'">';?></p>
    <p class="ship_info">Expiration Date: <?php echo '<input type="text" name="month" placeholder="Month" class="inputinfo2" value="'.$row[expiration_month].'">';?> / <?php echo '<input type="text" placeholder="Year" name="year" class="inputinfo2" value="'.$row[expiration_year].'">';?></p>
    <p style="float: right; margin-right: 30px"><input type="submit" name="savebutton" id="save" value="Save"></p>
</div>
<div id="proceed">
    <input type="submit" id="save1" name="checkout" value="Proceed to checkout">
</div>
<?php
require 'bottom.html';
?>
</form>
</body>
</html>