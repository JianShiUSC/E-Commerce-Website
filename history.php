<?php
session_start();
//$sql = "SELECT * FROM orders INNER JOIN Customer on orders.customer_email = Customer.email WHERE customer_email = '".$_SESSION[email]."'";
//$con = mysql_connect('localhost', 'root', 'Shijian1');
//if(!con)
//{
//    die("Connection Failed");
//}
//mysql_select_db('test', $con);
//$res = mysql_query($sql);
//while($row = mysql_fetch_assoc($res))
//{
//    echo $row[orderid];
//    echo $row[orderdate];
//    echo $row[shipping_address];
//    echo $row[shipping_fn];
//    echo $row[shipping_ln];
//}
//mysql_close($con);
require 'header_login.php';
?>
<html>
<style type="text/css">
    .accordionButton
    {
        width:100%;
        float:left;
        background:#DDDDDD;
        /*border-bottom: 1px solid #FFFFFF;*/
        cursor: pointer;
        padding:3px 0px;
    }
    .accordionButton span
    {
        color:black;
        padding-left:5px;
        font-weight:bold;
        font-family: Microsoft YaHei;
        font-size: 14px;
        margin-top: 40px;
        /*border-style: solid;*/
    }
    .accordionContent
    {
        width:100%;
        float:left;
        background:#DDDDDD;
    }
    .accordionContent p
    {
        color:#333333;
        font-size:14px;
        padding-left:8px;
    }
    .on
    {
        width:100%;
        float:left;
        background:#DDDDDD;
        cursor:pointer;
    }
    .on span {color:#FFFFFF;}
    .over
    {
        width:100%;
        float:left;
        background:#DDDDDD;
        cursor:pointer;
    }
    .over span {color:#FFFFFF;}
    .plusMinus
    {
        font-weight:bold;
        padding-right:4px;
        content:"+";
        width: 0.8%;
        float: left;
        margin-left: 7%;
        margin-right: 9.5%;
        border-style: solid;
    }
    #orderid
    {
        float: left;
        width: 10%;
    }
    #orderdate
    {
        float: left;
        width: 16%;
    }
    #address
    {
        float: left;
        width: 35%;
    }
    #recipient
    {
        float: left;
        width: 13%;
    }

    .reminder
    {
        line-height: 40px;
        font-family: Tahoma, Helvetica, Arial, 宋体, sans-serif;
        font-size: 12px;
    }
    #product1
    {
        height: 90%;
        width: 24%;
        margin-left: 5%;
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
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function()
    {
        $('.accordionButton').click(function()
        {
            $('.accordionButton').removeClass('on');
            $('.accordionContent').slideUp('normal');
            $('.plusMinus').text('+');
            if($(this).next().is(':hidden') == true)
            {
                $(this).addClass('on');
                $(this).next().slideDown('normal');
                $(this).children('.plusMinus').text('-');
            }
        });
        $('.accordionButton').mouseover(function()
        {
            $(this).addClass('over');
        }).mouseout(function()
        {
            $(this).removeClass('over');
        });
        $('.accordionContent').hide();
    });
</script>


<body style="background-color: #DDDDDD">
<?php
$sql = "SELECT * FROM orders INNER JOIN Customer on orders.customer_email = Customer.email WHERE customer_email = '".$_SESSION[email]."'";
$con = mysql_connect('localhost', 'root', 'Shijian1');
if(!con)
{
    die("Connection Failed");
}
mysql_select_db('test', $con);
$res = mysql_query($sql);
while($row = mysql_fetch_assoc($res)) {
//    echo $row[orderid];
//    echo $row[order_date];
//    echo $row[shipping_address];
//    echo $row[shipping_fn];
//    echo $row[shipping_ln];
echo'
<div class="accordionButton">
    <span class="plusMinus">+</span>
    <span id="orderid">Order ID: '.$row[orderid].'</span>
    <span id="orderdate">Order Date: '.$row[order_date].'</span>
    <span id="address">Shipping Address: '.$row[shipping_address].'</span>
    <span id="recipient">Recipient: '.$row[shipping_fn].' '.$row[shipping_ln].'</span>
</div>
<div class="accordionContent">';
    $sql_items = "SELECT * FROM product INNER JOIN orderitems on product.productid = orderitems.productid INNER JOIN orders on orderitems.orderid=orders.orderid WHERE customer_email = '".$_SESSION[email]."' AND orderitems.orderid='$row[orderid]'";
    $con = mysql_connect('localhost', 'root', 'Shijian1');
    if(!con)
    {
        die("Connection Failed");
    }
    mysql_select_db('test', $con);
    $res_items = mysql_query($sql_items);

    echo'
    <div>
        <div id="subtitle1">';
        while($row_items = mysql_fetch_assoc($res_items)) {
            echo '
            <div id="product1">
                <div style="float: left">
                    <img src="' . $row_items[product_front] . '" style="width: 70px; height: 80%; margin-top: 0%; border-style: solid; border-width: 1px; border-color: #9c9c9c; margin-left: 10px; margin-top: 5px">
                </div>
                <div>
                    <div>
                        <span class="reminder">' . $row_items[productname] . '</span>
                    </div>
                    <div>
                        <span class="reminder">Color: white</span>
                    </div>
                </div>
            </div>
            <div id="single_price1">
            <span class="reminder1">Unit Price:
            ' . $row_items[productprice] . '
            </span>
            </div>
            <div id="quantity1">
            <span class="reminder1">Quantity:
            ' . $row_items[quantity] . '
            </span>
            </div>
            <div id="discount1">
            <span class="reminder1">Discount:
            none
            </span>
            </div>
            <div id="subsum1">
            <span class="reminder1">Sum:
            ' . $row_items[productprice] * $row_items[quantity] . '
            </span>
            </div>';
        }
    echo'
        </div>
    </div>
</div>';
//mysql_close($con);
}
?>
</body>
</html>