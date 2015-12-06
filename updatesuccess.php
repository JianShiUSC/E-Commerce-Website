<?php
    require 'header_login.php';
?>
<html>
<head>
    <style>
        #verify
        {
            text-align: center;
            border: solid;
            width: 228px;
            height: 47px;
            border-width: 1px 1px 0 1px;
            margin-left: 60%;
            border-color: rgb(220, 224, 224);
            background-color: rgb(237, 239, 237);
            font-family: Circular, 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: rgb(86, 90, 92);
        }
        #verifyinfo
        {
            border: solid;
            width: 228px;
            border-width: 1px;
            height: 275px;
            margin-left: 60%;
            border-color: rgb(220, 224, 224);
            background-color: white;
        }
        #about
        {
            background-color: rgb(237, 239, 237);
            text-align: center;
            border: solid;
            width: 228px;
            height: 47px;
            border-width: 1px 1px 0 1px;
            margin-left: 60%;
            margin-top: 12%;
            border-color: rgb(220, 224, 224);
            font-family: Circular, 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: rgb(86, 90, 92);
        }
        #aboutinfo
        {
            border: solid;
            width: 228px;
            height: 230px;
            border-width: 1px;
            margin-left: 60%;
            border-color: rgb(220, 224, 224);
            background-color: white;
        }
        #img
        {
            margin-top: 15%;
            margin-left: 60%;
            margin-bottom: 12%;
        }
        .correct
        {
            width: 15px;
            height: 15px;
            margin-right: 10px;
        }
        .details
        {
            /*margin-left: 20px;*/
            font-family: Circular, 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: rgb(86, 90, 92);
            /*line-height: 1;*/
            margin:0.6em 20px;
        }
        .personinfo
        {
            margin-left: 20px;
            font-family: Microsoft YaHei;
            color: rgb(86, 90, 92);
            font-weight: 400;
        }
        .details1
        {
            margin-left: 20px;
            font-family: Circular, 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: rgb(86, 90, 92);
            /*line-height: 1;*/
            margin-bottom: 0.3em;
        }
        .details2
        {
            margin-left: 20px;
            font-family: Circular, 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #AAAAAA;
            /*line-height: 1;*/
            /*margin:0.3em 20px;*/
            margin-bottom: 1em;
            margin-top: 0;
        }
        .details3
        {
            font-family: Circular, 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #AAAAAA;
            margin:0.6em 45px;
        }
        #link
        {
            text-decoration: none;
            margin-left: 20px;
            font-family: Microsoft YaHei;
            /*color: rgb(86, 90, 92);*/
            font-weight: 400;
            font-size: 14px;
        }
        #wishlist
        {
            margin-top: 100px;
            height: 700px;
        }
    </style>
</head>
<body style="background-color: #DDDDDD">
<?php
$sql = "SELECT * FROM Customer WHERE name = '".$_SESSION[name]."'";
$con = mysql_connect('localhost', 'root', 'Shijian1');
if (!$con)
{
    die('Connection Failed');
}
mysql_select_db('test', $con);
$res = mysql_query($sql);
$row = mysql_fetch_assoc($res);
//echo $row[gender];
//echo $row[icon];
echo '
    <div style="float: left">

        <div id="img">
            <img src="'.$row[icon].'" width="230px" height="230px"/>
        </div>

        <div id="verify">
            <p>Verified Information</p>
        </div>
        <div id="verifyinfo">
            <p class="details" style="margin-top: 25px"><img src="done.png" class="correct">Email Address</p>
            <p class="details3" style="margin-left: 45px">'.$row[email].'</p>
            <p></p>
            <p class="details"><img src="done.png" class="correct">Phone Number</p>
            <p class="details3" style="margin-left: 45px">'.$row[shipping_area_code].'-'.$row[shipping_phone].'</p>
            <p class="details"><img src="done.png" class="correct">Shipping Address</p>
            <p class="details3" style="">'.$row[shipping_address].'</p>
        </div>

        <div id="about">
            <p>About Me</p>
        </div>
        <div id="aboutinfo">
            <p class="details1" style="margin-top: 25px">Company</p>
            <p class="details2">'.$row[shipping_company].'</p>
            <p class="details1">Gender</p>
            <p class="details2">'.$row[gender].'</p>
            <p class="details1">Birthday</p>
            <p class="details2">'.$row[birth_month].'-'.$row[birth_day].'-'.$row[birth_year].'</p>
        </div>
    </div>
    <div style="margin-top: 3%; margin-left: 450px">
        <h1 class="personinfo">Hey, I am '.$row[name].'!</h1>
        <p class="personinfo" style="font-weight:bold">'.$row[shipping_apt].' '.$row[shipping_address].'</p>';
        if(!empty($row[shipping_company]))
        {
            echo'
            <p class="personinfo" style="font-size: 15px">Works(Studies) at '.$row[shipping_company].'</p>';
        }
        echo'
        <a href="test.php" id="link">Edit Profile</a>
        <div id="wishlist">
            <h1 class="personinfo">Wish Lists</h1>';
            $sql = "SELECT DISTINCT * FROM wishlists INNER JOIN product on wishlists.productid = product.productid WHERE customer_email = '".$_SESSION[email]."'";
            $con = mysql_connect('localhost', 'root', 'Shijian1');
            if (!$con)
            {
                die('Connection Failed');
            }
            mysql_select_db('test', $con);
            $res = mysql_query($sql);
            while($row = mysql_fetch_assoc($res))
            {
//                echo $row[product_cover];
                echo '<a href="product.php?value='.$row[productname].'" style="text-decoration:none">
                <img src="'.$row[product_left].'" style="width: 200px; height:200px; margin-right: 20px; margin-bottom: 10px">
                </a>
                ';
            }
        echo'</div>
    </div>
</body>';
?>

</html>
<?php
    require 'bottom.html';
?>