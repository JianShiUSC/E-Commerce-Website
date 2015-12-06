<?php
session_start();
require 'header_login.php';

$sql = "SELECT * FROM cart INNER JOIN product on cart.productid = product.productid WHERE customer_email = '".$_SESSION[email]."'";
$con = mysql_connect('localhost', 'root', 'Shijian1');
if (!$con)
{
    die('Connection Failed');
}
mysql_select_db('test', $con);
$res = mysql_query($sql);
$count_time = 0;
while($row = mysql_fetch_assoc($res))
{
    $count_time++;
}
?>

<html>
<head>
    <style>
        #title
        {
            /*border-style: solid;*/
            /*border-width: 1px;*/
            /*border-color: #CCC;*/
            width: 70%;
            height: 4%;
            margin: 50px auto;
            margin-bottom: -20px;
        }
        #product
        {
            border-style: solid;
            border-width: 1px;
            border-color: #CCC;
            width: 70%;
            height: 15%;
            margin: 50px auto;
            background-color: rgb(237, 239, 237);
        }
        #checkbox
        {
            /*border-style: solid;*/
            width: 5%;
            height: 95%;
            float: left;
            /*margin-right: 100px;*/
        }
        #pic
        {
            /*border-style: solid;*/
            width: 13%;
            height: 95%;
            float: left;
            /*border-style: solid;*/
        }
        #name
        {
            /*border-style: solid;*/
            width: 15%;
            height: 95%;
            float: left;
            /*margin-left: 40%;*/
        }
        #description
        {
            /*border-style: solid;*/
            width: 20%;
            height: 95%;
            /*margin-left: 40%;*/
            float: left;
        }
        #price
        {
            /*border-style: solid;*/
            width: 11%;
            height: 95%;
            /*margin-left: 40%;*/
            float: left;
        }
        #quantity
        {
            /*border-style: solid;*/
            width: 12%;
            height: 95%;
            /*margin-left: 40%;*/
            float: left;
        }
        #total
        {
            /*border-style: solid;*/
            width: 11%;
            height: 95%;
            /*margin-left: 40%;*/
            float: left;
        }
        #operation
        {
            /*border-style: solid;*/
            width: 13%;
            height: 95%;
            /*margin-left: 40%;*/
            float: left;
        }


        #sub1
        {
            /*border-style: solid;*/
            width: 10%;
            height: 95%;
            float: left;
            /*margin-right: 100px;*/
        }
        #sub2
        {
            /*border-style: solid;*/
            width: 18%;
            height: 95%;
            float: left;
            /*border-style: solid;*/
        }
        #sub3
        {
            /*border-style: solid;*/
            width: 10%;
            height: 95%;
            float: left;
            margin-left: 27.5%;
        }
        #sub4
        {
            /*border-style: solid;*/
            width: 12%;
            height: 95%;
            float: left;
        }
        #sub5
        {
            /*border-style: solid;*/
            width: 11%;
            height: 95%;
            float: left;
        }
        #sub6
        {
            /*border-style: solid;*/
            width: 13%;
            height: 95%;
            margin-left: 40%;
            float: left;
        }



        .check
        {
            margin-top: 100%;
            margin-left: 30%;
        }
        #showpic
        {
            width: 90%;
            height: 90%;
            margin-top: 6%;
            margin-left: 3%;
        }
        #productname
        {
            margin-left: 7%;
            font-family: tahoma;
        }
        #details
        {
            margin-left: 7%;
            font-family: tahoma;
            color: #9c9c9c;
        }
        #unit_price
        {
            margin-left: 15%;
            font-family: tahoma;
            font-weight: bold;
        }
        #total_quantity
        {
            margin-left: 20%;
            font-family: tahoma;
        }
        #total_price
        {
            margin-left: 7%;
            font-family: tahoma;
            font-weight: bold;
            color: #f40;
        }
        #handle
        {
            margin-left: 20%;
            font-family: tahoma;
        }
        .productinfo
        {
            margin-left: 20%;
            font-family: tahoma;
        }
        #checkall
        {
            margin-top: 20%;
            margin-left: 10%;
        }
        #checkalltext
        {
            font-family: tahoma;
            font-size: 10px;
        }
        #conclusion2
        {
            /*border-style: solid;*/
            width: 25%;
            height: 95%;
            float: left;
            /*border-style: solid;*/
        }
        #conclusion3
        {
            /*border-style: solid;*/
            width: 20%;
            height: 95%;
            float: left;
            margin-left: 27.5%;
        }
        #conclusion4
        {
            /*border-style: solid;*/
            width: 11%;
            height: 95%;
            float: left;
        }
        .coninfo
        {
            font-family: tahoma;
            font-size: 10px;
            /*margin-top: 30%;*/
        }
        #checkout
        {
            width: 100px;
            height: 35px;
            background-color: #00BBFF;
            font-family: Microsoft YaHei;
            font-size: 14px;
            border-radius: 3px;
            color: white;
            margin-left: 50%;
            margin-top: 10%;
        }

    </style>
    <script type="text/javascript">
//        function test()
//        {
//            echo "shijianzuishuaile";
//        }
    function toggle(source)
    {
        checkboxes = document.getElementsByName('choosetocheckout[]');
        for(var i=0, n=checkboxes.length;i<n;i++)
        {
            checkboxes[i].checked = source.checked;
        }
    }
    </script>
</head>
<body style="background-color: #DDDDDD">
    <?php
    if($count_time != 0) {
    echo '
<form method="post" action="submitorders.php">
<div id="title">
    <div id="sub1">
        <input type="checkbox" name="checkall" id="checkall" onClick="toggle(this)"><span id="checkalltext">check all</span>
    </div>
    <div id="sub2">
        <p class="productinfo">Product Information</p>
    </div>
    <div id="sub3">
        <p class="productinfo" style="margin-left: -12%">Unit Price($)</p>
    </div>
    <div id="sub4">
        <p class="productinfo" style="margin-left: 0">Quantity</p>
    </div>
    <div id="sub5">
        <p class="productinfo" style="margin-left: -13%">Total Price($)</p>
    </div>
    <div id="sub5">
        <p class="productinfo" style="margin-left: 3%">Operation</p>
    </div>
</div>';}
?>

<?php
require "listcart.php";
?>

    <?php
    if($count_time != 0) {
        echo '
<div style="width:70%; height:7%; margin:0 auto;border-style: solid;border-width: 1px;border-color: #CCC; background-color: #e5e5e5; margin-bottom: 12%">
    <div id="sub1">
        <input type="checkbox" name="checkall" id="checkall" onClick="toggle(this)"><span id="checkalltext">check all</span>
    </div>

    <div id="conclusion2" style="margin-top: 1.5%">
        <span class="coninfo">Delete</span>
        <span class="coninfo" style="margin-left:25px">Add to Wish Lists</span>
    </div>

    <div id="conclusion3" style="text-align: center; margin-top: 1.5%">
        <span class="productinfo" style="margin-left: -20%">Total Price($):
            <span id="unique"></span>
        </span>
    </div>

    <div id="conclusion4">
        <input type="submit" value="Checkout" id="checkout">
    </div>
</div>
</form>';
    }
    ?>

<?php
require 'bottom.html';
?>
</body>
</html>
