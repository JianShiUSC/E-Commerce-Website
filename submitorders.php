<?php
require 'header_login.php';
session_start();

if(isset($_POST['savebutton_ship']))
{
    $sql_ship = "UPDATE Customer SET shipping_fn='".$_POST['shipping_fn']."', shipping_ln='".$_POST['shipping_ln']."', shipping_apt='".$_POST['shipping_apt']."', shipping_address='".$_POST['shipping_address']."', shipping_zipcode=".$_POST['shipping_zipcode'].", shipping_area_code=".$_POST['shipping_area_code'].", shipping_phone=".$_POST['shipping_phone']." WHERE email='".$_SESSION[email]."'";
    $con = mysql_connect('localhost', 'root', 'Shijian1');
    if(!con)
    {
        die("Connection Failed");
    }
    mysql_select_db('test', $con);
    $res_ship = mysql_query($sql_ship);
    $row_ship = mysql_fetch_assoc($res_ship);
    mysql_close($con);
}
if(isset($_POST['savebutton_bill']))
{
    $sql_bill = "UPDATE Customer SET bill_fn='".$_POST['bill_fn']."', bill_ln='".$_POST['bill_ln']."', ba_apt='".$_POST['ba_apt']."', ba_address='".$_POST['ba_address']."', ba_zipcode=".$_POST['ba_zipcode'].", bill_area_code=".$_POST['bill_area_code'].", bill_phone=".$_POST['bill_phone'].", bill_alt_area_code=".$_POST['bill_alt_area_code'].", bill_alt_phone=".$_POST['bill_alt_phone']." WHERE email='".$_SESSION[email]."'";
    $con = mysql_connect('localhost', 'root', 'Shijian1');
    if(!con)
    {
        die("Connection Failed");
    }
    mysql_select_db('test', $con);
    $res_bill = mysql_query($sql_bill);
    $row_bill = mysql_fetch_assoc($res_bill);
    mysql_close($con);
}
if(isset($_POST['submitorder']))
{
    header('Location: payment.php');
//    $sql_bill = "UPDATE Customer SET bill_fn='".$_POST['bill_fn']."', bill_ln='".$_POST['bill_ln']."', ba_apt='".$_POST['ba_apt']."', ba_address='".$_POST['ba_address']."', ba_zipcode=".$_POST['ba_zipcode'].", bill_area_code=".$_POST['bill_area_code'].", bill_phone=".$_POST['bill_phone'].", bill_alt_area_code=".$_POST['bill_alt_area_code'].", bill_alt_phone=".$_POST['bill_alt_phone']." WHERE email='".$_SESSION[email]."'";
//    $con = mysql_connect('localhost', 'root', 'Shijian1');
//    if(!con)
//    {
//        die("Connection Failed");
//    }
//    mysql_select_db('test', $con);
//    $res_bill = mysql_query($sql_bill);
//    $row_bill = mysql_fetch_assoc($res_bill);
//    mysql_close($con);
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

$checkwhich = $_POST['choosetocheckout'];
if(empty($checkwhich))
{
}
else
{
    $N = count($checkwhich);
    for($i=0; $i < $N; $i++)
    {
        $sql1 = "UPDATE cart SET checkornot = 'checked' WHERE product_price = '".$checkwhich[$i]."'";
        $con1 = mysql_connect('localhost', 'root', 'Shijian1');
        if (!$con1)
        {
            die('Connection Failed');
        }
        mysql_select_db('test', $con1);
        $res1 = mysql_query($sql1);
    }
}


//if(isset($_POST['savebutton_ship']))
//{
//    $sql_ship = "UPDATE Customer SET shipping_fn='".$_POST['shipping_fn']."', shipping_ln='".$_POST['shipping_ln']."', shipping_apt='".$_POST['shipping_apt']."', shipping_address='".$_POST['shipping_address']."', shipping_zipcode=".$_POST['shipping_zipcode'].", shipping_area_code=".$_POST['shipping_area_code'].", shipping_phone=".$_POST['shipping_phone']." WHERE email='".$_SESSION[email]."'";
//    $con = mysql_connect('localhost', 'root', 'Shijian1');
//    if(!con)
//    {
//        die("Connection Failed");
//    }
//    mysql_select_db('test', $con);
//    $res_ship = mysql_query($sql_ship);
//    $row_ship = mysql_fetch_assoc($res_ship);
//    mysql_close($con);
//}
//if(isset($_POST['savebutton_bill']))
//{
//    $sql_bill = "UPDATE Customer SET bill_fn='".$_POST['bill_fn']."', bill_ln='".$_POST['bill_ln']."', ba_apt='".$_POST['ba_apt']."', ba_address='".$_POST['ba_address']."', ba_zipcode=".$_POST['ba_zipcode'].", bill_area_code=".$_POST['bill_area_code'].", bill_phone=".$_POST['bill_phone'].", bill_alt_area_code=".$_POST['bill_alt_area_code'].", bill_alt_phone=".$_POST['bill_alt_phone']." WHERE email='".$_SESSION[email]."'";
//    $con = mysql_connect('localhost', 'root', 'Shijian1');
//    if(!con)
//    {
//        die("Connection Failed");
//    }
//    mysql_select_db('test', $con);
//    $res_bill = mysql_query($sql_bill);
//    $row_bill = mysql_fetch_assoc($res_bill);
//    mysql_close($con);
//}
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
            height: 155px;
            margin-bottom: 30px;
            background-color: white;
            font-family: Arial,sans-serif;
            font-size: 13px;
        }
        #ship_info2
        {
            border-style: solid;
            border-color: black #9c9c9c #9c9c9c;
            margin: 0 auto;
            width: 70%;
            height: 190px;
            margin-bottom: 30px;
            background-color: white;
            font-family: Arial,sans-serif;
            font-size: 13px;
        }
        #order_details
        {
            border-style: solid;
            border-color: black #9c9c9c #9c9c9c;
            margin: 0 auto;
            width: 70%;
            /*height: 30%;*/
            background-color: white;
            /*_height:30%;*/
            /*min-height:30%;*/
        }
        #order_details1
        {
            border-style: solid;
            border-color: #ffa07c;
            margin: 0 auto;
            width: 70%;
            height: 13%;
            background-color: white;
            /*_height:30%;*/
            /*min-height:30%;*/
            margin-bottom: 40px;
        }
        #fill_ship_info
        {
            margin: 0 auto;
            width: 70%;
            height: 30%;
        }
        .title
        {
            width: 70%;
            margin: 0 auto;
            margin-bottom: 5px;
            font-family: Tahoma, Helvetica, Arial, 宋体, sans-serif;
            font-size: 18px;
        }
        #subtitle
        {
            width: 95%;
            height: 50px;
            margin: 0 auto;
            margin-top: 10px;
        }
        #product
        {
            height: 90%;
            width: 36.3%;
            float: left;
            background-color: #f5f5f5;
            margin-right: 5px;
            text-align: center;
        }
        #single_price
        {
            height: 90%;
            width: 15%;
            float: left;
            background-color: #f5f5f5;
            margin-right: 5px;
            text-align: center;
        }
        #quantity
        {
            height: 90%;
            width: 12%;
            float: left;
            background-color: #f5f5f5;
            margin-right: 5px;
            text-align: center;
        }
        #discount
        {
            height: 90%;
            width: 20%;
            float: left;
            background-color: #f5f5f5;
            margin-right: 5px;
            text-align: center;
        }
        #subsum
        {
            height: 90%;
            width: 14%;
            float: left;
            background-color: #f5f5f5;
            margin-right: 5px;
            text-align: center;
        }
        .reminder
        {
            line-height: 40px;
            font-family: Tahoma, Helvetica, Arial, 宋体, sans-serif;
            font-size: 12px;
        }
        .hreflink
        {
            text-decoration: none;
            font-weight: normal;
            color: #0066FF;
        }
        .boldtext
        {
            font-weight: bold;
            margin-left: 2%;
        }
        .ship_info
        {
            margin-left: 5%;
        }
        .ship_info_name
        {
            margin-left: 5%;
            width: 100px;
            height: 32px;
            border-radius: 5px;
            text-indent: 5px;
            margin-right: -50px;
        }
        .ship_info_apt
        {
            margin-left: 5%;
            width: 60px;
            height: 32px;
            border-radius: 5px;
            text-indent: 5px;
            margin-right: -50px;
        }
        .ship_info_address
        {
            margin-left: 5%;
            width: 300px;
            height: 32px;
            border-radius: 5px;
            text-indent: 5px;
            margin-right: -50px;
        }
        .ship_info_area
        {
            margin-left: 5%;
            width: 70px;
            height: 32px;
            border-radius: 5px;
            text-indent: 5px;
            margin-right: -50px;
        }
        .ship_info_phone
        {
            margin-left: 5%;
            width: 100px;
            height: 32px;
            border-radius: 5px;
            text-indent: 5px;
            margin-right: -50px;
        }
        #product1
        {
            height: 90%;
            width: 36.3%;
            float: left;
            background-color: #f2f7ff;
            /*margin-right: 5px;*/
            text-align: center;
            border-width: thin;
            border-color: #0066FF;
            border-style: dotted none dotted none;
        }
        #single_price1
        {
            height: 90%;
            width: 16%;
            float: left;
            background-color: #f2f7ff;
            /*margin-right: 5px;*/
            text-align: center;
            border-width: thin;
            border-color: #0066FF;
            border-style: dotted none dotted none;
        }
        #quantity1
        {
            height: 90%;
            width: 12.5%;
            float: left;
            background-color: #f2f7ff;
            /*margin-right: 5px;*/
            text-align: center;
            border-width: thin;
            border-color: #0066FF;
            border-style: dotted none dotted none;
        }
        #discount1
        {
            height: 90%;
            width: 20.3%;
            float: left;
            background-color: #f2f7ff;
            /*margin-right: 5px;*/
            text-align: center;
            border-width: thin;
            border-color: #0066FF;
            border-style: dotted none dotted none;
        }
        #subsum1
        {
            height: 90%;
            width: 14.2%;
            float: left;
            background-color: #f2f7ff;
            /*margin-right: 5px;*/
            text-align: center;
            border-width: thin;
            border-color: #0066FF;
            border-style: dotted none dotted none;
        }
        #subtitle1
        {
            width: 95%;
            height: 88px;
            margin: 0 auto;
            margin-top: 10px;
        }
        .reminder1
        {
            line-height: 75px;
            font-family: Tahoma, Helvetica, Arial, 宋体, sans-serif;
            font-size: 12px;
        }
        #totalorder
        {
            float: right;
            margin-right: 3%;
        }
        #submitorder
        {
            width: 120px;
            height: 35px;
            background-color: #00BBFF;
            font-family: Microsoft YaHei;
            font-size: 14px;
            border-radius: 3px;
            color: white;
            /*float: right;*/
        }
        #submitbutton
        {
            clear: right;
            float: right;
            margin-right: 3%;
        }
        #hreflink1
        {
            text-decoration: none;
            font-weight: normal;
            color: #0066FF;
            font-family: Tahoma, Helvetica, Arial, 宋体, sans-serif;
            font-size: 12px;
        }
        #totalorder
        {
            font-family: Tahoma, Helvetica, Arial, 宋体, sans-serif;
            font-size: 17px;
            margin-top: 20px;
            margin-bottom: 20px;
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
    </style>
</head>

<body style="background-color: #DDDDDD">
<form method="post" action="submitorders.php">
<div class="title" style="margin-top: 5%">
    <span>1)Confirm Shipping Information</span>
</div>
<div id="ship_info">
    <p class="boldtext">Ship To</p>
    <?php
    echo'
    <input type="text" class="ship_info_name" name="shipping_fn" value="'.$row[shipping_fn].'" placeholder="First Name">
    <input type="text" class="ship_info_name" name="shipping_ln" value="'.$row[shipping_ln].'" placeholder="Last Name"><br>
    <input type="text" class="ship_info_apt" name="shipping_apt" value="'.$row[shipping_apt].'" placeholder="Apartment Number">
    <input type="text" class="ship_info_address" name="shipping_address" value="'.$row[shipping_address].'" placeholder="Address">
    <input type="text" class="ship_info_apt" name="shipping_zipcode" value="'.$row[shipping_zipcode].'" placeholder="Zipcode"><br>
    <input type="text" class="ship_info_area" name="shipping_area_code" value="'.$row[shipping_area_code].'" placeholder="Area Code"> <input type="text" class="ship_info_phone" name="shipping_phone" value="'.$row[shipping_phone].'" placeholder="Phone Number">
    <p style="float: right; margin-right: 30px"><input type="submit" name="savebutton_ship" id="save" value="Save"></p>';
?>
</div>

<div class="title" style="margin-top: 5%">
    <span>2)Confirm Billing Information</span>
</div>
<div id="ship_info2">
    <p class="boldtext">Ship To</p>
<!--    --><?php
//    echo'
//    <p class="ship_info">'.$row[bill_fn].' '.$row[bill_ln].'</p>
//    <p class="ship_info">'.$row[ba_apt].' '.$row[ba_address].' '.$row[ba_zipcode].'</p>
//    <p class="ship_info">Phone: '.$row[bill_area_code].'-'.$row[bill_phone].', '.$row[bill_alt_area_code].'-'.$row[bill_alt_phone].'</p>';
//    ?>
    <?php
    echo'
    <input type="text" class="ship_info_name" name="bill_fn" value="'.$row[bill_fn].'" placeholder="First Name">
    <input type="text" class="ship_info_name" name="bill_ln" value="'.$row[bill_ln].'" placeholder="Last Name"><br>
    <input type="text" class="ship_info_apt" name="ba_apt" value="'.$row[ba_apt].'" placeholder="Apartment Number">
    <input type="text" class="ship_info_address" name="ba_address" value="'.$row[ba_address].'" placeholder="Address">
    <input type="text" class="ship_info_apt" name="ba_zipcode" value="'.$row[ba_zipcode].'" placeholder="Zipcode"><br>
    <input type="text" class="ship_info_area" name="bill_area_code" value="'.$row[bill_area_code].'" placeholder="Area Code"> <input type="text" class="ship_info_phone" name="bill_phone" value="'.$row[bill_phone].'" placeholder="Phone Number"><br>
    <input type="text" class="ship_info_area" name="bill_alt_area_code" value="'.$row[bill_alt_area_code].'" placeholder="Area Code"> <input type="text" class="ship_info_phone" name="bill_alt_phone" value="'.$row[bill_alt_phone].'" placeholder="Phone Number">
    <p style="float: right; margin-right: 30px"><input type="submit" name="savebutton_bill" id="save" value="Save"></p>';
    ?>
</div>


<div class="title">
    <span>3)Confirm Order Details</span>
</div>
<div id="order_details">
    <div id="subtitle">
        <div id="product">
            <span class="reminder">
            Product
            </span>
        </div>
        <div id="single_price">
            <span class="reminder">
            Price($)
            </span>
        </div>
        <div id="quantity">
            <span class="reminder">
            Quantity
            </span>
        </div>
        <div id="discount">
            <span class="reminder">
            Discount($)
            </span>
        </div>
        <div id="subsum">
            <span class="reminder">
            Sum($)
            </span>
        </div>
    </div>
    <?php
    $total = 0;
    $sql2 = "SELECT * FROM cart INNER JOIN product on cart.productid = product.productid WHERE checkornot = 'checked'";
    $con2 = mysql_connect('localhost', 'root', 'Shijian1');
    if (!$con2)
    {
        die('Connection Failed');
    }
    mysql_select_db('test', $con2);
    $res2 = mysql_query($sql2);
    while($row2 = mysql_fetch_assoc($res2)) {
        echo '
    <div id="subtitle1">
        <div id="product1">
            <div style="float: left">
                <img src="'.$row2[product_front].'" style="width: 70px; height: 80%; margin-top: 0%; border-style: solid; border-width: 1px; border-color: #9c9c9c; margin-left: 10px; margin-top: 5px">
            </div>
            <div>
                <div>
                    <span class="reminder">'.$row2[productname].'</span>
                </div>
                <div>
                    <span class="reminder">Color: white</span>
                </div>
            </div>
        </div>
        <div id="single_price1">
            <span class="reminder1">
            '.$row2[productprice].'
            </span>
        </div>
        <div id="quantity1">
            <span class="reminder1">
            '.$row2[quantity].'
            </span>
        </div>
        <div id="discount1">
            <span class="reminder1">
            none
            </span>
        </div>
        <div id="subsum1">
            <span class="reminder1">
            '.$row2[productprice] * $row2[quantity].'
            </span>
        </div>
    </div>';
        $total += $row2[productprice]*$row2[quantity];
        $_SESSION['total_amount'] = $total;
    }
?>
</div>
<div id="order_details1">
    <div id="totalorder">Order Total: $<?php echo"$total"?></div>
    <div id="submitbutton">
        <a href="cart.php" id="hreflink1">Return to cart &nbsp;&nbsp;</a>
        <input id="submitorder" name="submitorder" type="submit" value="Submit Order">
    </div>
</div>
<?php
require 'bottom.html';
?>
</form>
</body>
</html>