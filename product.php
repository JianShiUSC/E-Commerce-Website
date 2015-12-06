<?php
session_start();
require 'header_login.php';
//echo $_POST['searchinfo'];
//echo $_POST['search'];
if($_POST['search']=='Search')
{
    $_SESSION['cartype'] = $_POST['searchinfo'];
    $cartype = $_SESSION['cartype'];
}
elseif($_POST['addwishlist'])
{
    $cartype = $_SESSION['cartype'];
//    echo $cartype;
}
elseif($_POST['addcart'])
{
    $cartype = $_SESSION['cartype'];
}
else
{
    $_SESSION['cartype'] =  $_GET['value'];
    $cartype = $_SESSION['cartype'];
}
    $sql = "SELECT * FROM product WHERE productname = '".$cartype."'";
    $con = mysql_connect('localhost', 'root', 'Shijian1');
    if (!$con)
    {
        die('Connection Failed');
    }
    mysql_select_db('test', $con);
    $res = mysql_query($sql);
    $row = mysql_fetch_assoc($res);

    $_SESSION['productid'] = $row[productid];
    $_SESSION['productname'] = $row[productname];
    $_SESSION['productprice'] = $row[productprice];
    $_SESSION['productcategory'] = $row[productcategory];
    $_SESSION['product_front'] = $row[product_front];


if(isset($_POST['addwishlist']))
{
    $sql2 = "INSERT INTO wishlists(productid, customer_email) VALUES (".$_SESSION[productid].", '".$_SESSION[email]."')";
    $con2 = mysql_connect('localhost', 'root', 'Shijian1');
    if (!$con2)
    {
        die('Connection Failed');
    }
    mysql_select_db('test', $con2);
    $res2 = mysql_query($sql2);
}
if(isset($_POST['addcart']))
{
    $sql3 = "INSERT INTO cart(productid, quantity, product_price, customer_email) VALUES (".$_SESSION[productid].", ".$_POST['quantity'].", ".$_SESSION[productprice].", '".$_SESSION[email]."')";
    $con3 = mysql_connect('localhost', 'root', 'Shijian1');
    if (!$con3)
    {
        die('Connection Failed');
    }
    mysql_select_db('test', $con3);
    $res3 = mysql_query($sql3);
}
?>
<html>
    <head>
        <style>
            #bigpic
            {
                width: 400px;
                height: 400px;
                background-color: white;
                border-color: rgb(237, 239, 237);
                border-width: 2px;
                border-style: solid;
            }
            .smallpic
            {
                width: 60px;
                height: 60px;
                margin-right: 6.6px;
                margin-left: 6.6px;
                margin-top: 10px;
                background-color: white;
                border-color: rgb(237, 239, 237);
                border-width: 2px;
                border-style: solid;
            }
            #bigposition
            {
                margin-top: 5%;
                margin-left: 10%;
            }
            #smallposition
            {
                margin-left: 10%;
            }
            #leftscreen
            {
                float: left;
                width: 450px;
                height: 500px;
                margin-right: 50px;
            }
            #productname
            {
                font-family: 'microsoft yahei';
                font-size: 21px;
            }
            #buyinstance
            {
                width: 150px;
                height: 35px;
                background-color: #00BBFF;
                font-family: Microsoft YaHei;
                font-size: 14px;
                border-radius: 3px;
                color: white;
            }
            #addtocart
            {
                width: 150px;
                height: 35px;
                background-color: #00BBFF;
                font-family: Microsoft YaHei;
                font-size: 14px;
                border-radius: 3px;
                color: white;
            }
            #addtowishlists
            {
                width: 150px;
                height: 35px;
                background-color: #00BBFF;
                font-family: Microsoft YaHei;
                font-size: 14px;
                border-radius: 3px;
                color: white;
            }
            #submitbutton
            {
                margin-top: 10%;
            }
            .title
            {
                margin-bottom: 32px;
                font-family: Microsoft YaHei;
                /*font-weight: bold;*/
                font-size: 12px;
                margin-right: 20px
            }
            #quantity
            {
                width: 3%;
                height: 4%;
            }
            #down
            {
                width: 3%;
                height: 4%;
                background-color: #00BBFF;
                font-family: Microsoft YaHei;
                font-size: 14px;
                border-radius: 3px;
                color: white;
            }
            #up
            {
                width: 3%;
                height: 4%;
                background-color: #00BBFF;
                font-family: Microsoft YaHei;
                font-size: 14px;
                border-radius: 3px;
                color: white;
            }
            .colorframe
            {
                width: 35px;
                height: 35px;
                margin-left: 5px;
                margin-right: 5px;
                border-color: rgb(237, 239, 237);
                border-width: 2px;
                border-style: solid;
                float: left;
            }

            #loginpopupbox
            {
                margin: 0;
                margin-left: 34.6%;
                margin-right: 40%;
                margin-top: -10%;
                padding-top: 10px;
                /*width: 380px;*/
                height: 200px;
                width: 30%;
                /*height: 50%;*/
                position: absolute;
                background: #F0FFFF;
                /*border: solid #000000 2px;*/
                font-family: arial;
                visibility: visible;
                border-radius: 5px;
                -webkit-box-shadow: 0 0 10px #888;
                box-shadow: 0 0 10px #888;
            }
            #loginpopupbox1
            {
                margin: 0;
                margin-left: 34.6%;
                margin-right: 40%;
                margin-top: -10%;
                padding-top: 10px;
                /*width: 380px;*/
                height: 200px;
                width: 30%;
                /*height: 50%;*/
                position: absolute;
                background: #F0FFFF;
                /*border: solid #000000 2px;*/
                font-family: arial;
                visibility: visible;
                border-radius: 5px;
                -webkit-box-shadow: 0 0 10px #888;
                box-shadow: 0 0 10px #888;
            }
            .closewindow
            {
                float: right;
                margin-right: 20px;
                margin-top:-10%;
                color: darkgrey;
                text-decoration: none;
                font-size: 23px

            }
            #right_symbol
            {
                margin-top: 10%;
                /*float: left;*/
                /*border-style: solid;*/
            }
            #false_symbol
            {
                margin-top: 0;
            }
            #mention_text
            {
                /*float: left;*/
                margin-bottom: 5%;
                color: green;
            }
            #gotocart
            {
                width: 100px;
                height: 35px;
                background-color: #00BBFF;
                font-family: Microsoft YaHei;
                font-size: 14px;
                border-radius: 3px;
                color: white;
            }
            #contineshop
            {
                font-size: 14px;
                text-decoration: none;
                margin-left: 7%;
            }
            #contineshop:hover
            {
                text-decoration: underline;
            }
        </style>

        <link href="css/elements.css" rel="stylesheet">
        <script src="js/my_js.js"></script>
        <script type="text/javascript">
            function show(showhide)
            {
                if (showhide == 1) {
                    document.getElementById('loginpopupbox').style.visibility = "visible";
                }
                else if (showhide == 0) {
                    document.getElementById('loginpopupbox').style.visibility = "hidden";
                }
            }

            function show1(showhide)
            {
                if (showhide == 1) {
                    document.getElementById('loginpopupbox1').style.visibility = "visible";
                }
                else if (showhide == 0) {
                    document.getElementById('loginpopupbox1').style.visibility = "hidden";
                }
            }

            function setQuantity(upordown)
            {
                var quantity = document.getElementById('quantity');
                if (quantity.value > 1)
                {
                    if (upordown == 1)
                    {
                        ++document.getElementById('quantity').value;
                    }
                    else
                    {
                        --document.getElementById('quantity').value;
                    }
                }
                else if (quantity.value == 1)
                {
                    if (upordown == 1)
                    {
                        ++document.getElementById('quantity').value;
                    }
                }
                else
                {
                    document.getElementById('quantity').value=1;
                }
            }

            function chooseColor(divObj)
            {
                if(document.getElementById("whiteframe"))
                {
                    document.getElementById("whiteframe").style.borderColor = "rgb(237, 239, 237)";
                }
                if(document.getElementById("brownframe"))
                {
                    document.getElementById("brownframe").style.borderColor = "rgb(237, 239, 237)";
                }
                if(document.getElementById("greyframe"))
                {
                    document.getElementById("greyframe").style.borderColor = "rgb(237, 239, 237)";
                }
                if(document.getElementById("greenframe"))
                {
                    document.getElementById("greenframe").style.borderColor = "rgb(237, 239, 237)";
                }
                if(document.getElementById("blackframe"))
                {
                    document.getElementById("blackframe").style.borderColor = "rgb(237, 239, 237)";
                }
                if(document.getElementById("redframe"))
                {
                    document.getElementById("redframe").style.borderColor = "rgb(237, 239, 237)";
                }
                if(document.getElementById("blueframe"))
                {
                    document.getElementById("blueframe").style.borderColor = "rgb(237, 239, 237)";
                }
                if(document.getElementById("silverframe"))
                {
                    document.getElementById("silverframe").style.borderColor = "rgb(237, 239, 237)";
                }
                if(document.getElementById("orangeframe"))
                {
                    document.getElementById("orangeframe").style.borderColor = "rgb(237, 239, 237)";
                }
                if(document.getElementById("pearlframe"))
                {
                    document.getElementById("pearlframe").style.borderColor = "rgb(237, 239, 237)";
                }
                divObj.style.borderColor = "black";
            }
        </script>
    </head>

    <body style="background-color: #DDDDDD">
    <?php
    if(!$row[productname])
    {
        require 'noSearchResult.php';
    }
    else
    {
    echo'
    <form method="post" action="product.php">
        <div id="leftscreen">
            <div id="bigposition">

                <img id="bigpic" src="'.$row[product_front].'">
            </div>
            <div id="smallposition">
                <img class="smallpic" src="'.$row[product_front].'" onclick="bigpic.src=\''.$row[product_front].'\'">
                <img class="smallpic" src="'.$row[product_left].'" onclick="bigpic.src=\''.$row[product_left].'\'">
                <img class="smallpic" src="'.$row[product_right].'" onclick="bigpic.src=\''.$row[product_right].'\'">
                <img class="smallpic" src="'.$row[product_rear].'" onclick="bigpic.src=\''.$row[product_rear].'\'">
                <img class="smallpic" src="'.$row[product_interior].'" onclick="bigpic.src=\''.$row[product_interior].'\'">
            </div>
        </div>
        <div>
            <div>
                <h1 id="productname">
                    '.$row[productname].'
                </h1>
            </div>
            <HR align=center width=30% color=#C0C0C0 SIZE=0.5 noShade style="margin-left: 0">


            <div>
                <p class="title">Price: $
                    '.$row[productprice].'
                </p>
                <p class="title">Models:</p>
                <div style="float: none">
                    <p class="title" style="float: left;">Color:';
                        if(strpos($row[productcolor], "white") !== false)
                        {
                            echo "
                                <div class='colorframe' name='whiteframe' id='whiteframe' style='background-color: white;' onclick='chooseColor(this);'>
                                </div>
                                ";
                        }
                        if(strpos($row[productcolor], "brown") !== false)
                        {
                            echo "
                                <div class='colorframe' name='brownframe' id='brownframe' style='background-color: brown;' onclick='chooseColor(this);'>
                                </div>
                                ";
                        }
                        if(strpos($row[productcolor], "grey") !== false)
                        {
                            echo "
                                <div class='colorframe' name='greyframe' id='greyframe' style='background-color: grey;' onclick='chooseColor(this);'>
                                </div>
                                ";
                        }
                        if(strpos($row[productcolor], "green") !== false)
                        {
                            echo "
                                <div class='colorframe' name='greenframe' id='greenframe' style='background-color: green;' onclick='chooseColor(this);'>
                                </div>
                                ";
                        }
                        if(strpos($row[productcolor], "black") !== false)
                        {
                            echo "
                                <div class='colorframe' name='blackframe' id='blackframe' style='background-color: black;' onclick='chooseColor(this);'>
                                </div>
                                ";
                        }
                        if(strpos($row[productcolor], "red") !== false)
                        {
                            echo "
                                <div class='colorframe' name='redframe' id='redframe' style='background-color: red;' onclick='chooseColor(this);'>
                                </div>
                                ";
                        }
                        if(strpos($row[productcolor], "blue") !== false)
                        {
                            echo "
                                <div class='colorframe' name='blueframe' id='blueframe' style='background-color: blue;' onclick='chooseColor(this);'>
                                </div>
                                ";
                        }
                        if(strpos($row[productcolor], "silver") !== false)
                        {
                            echo "
                                <div class='colorframe' name='silverframe' id='silverframe' style='background-color: silver;' onclick='chooseColor(this);'>
                                </div>
                                ";
                        }
                        if(strpos($row[productcolor], "orange") !== false)
                        {
                            echo "
                                <div class='colorframe' name='orangeframe' id='orangeframe' style='background-color: orange;' onclick='chooseColor(this);'>
                                </div>
                                ";
                        }
                        if(strpos($row[productcolor], "pearl") !== false)
                        {
                            echo "
                                <div class='colorframe' name='pearlframe' id='pearlframe' style='background-color: #F0EAD6;' onclick='chooseColor(this);'>
                                </div>
                                ";
                        }
                        echo '
                    </p>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div id="quantity-option" style="float: none">
                    <p class="title">Quantity:
                        <input type="button" id="down" onclick="setQuantity(0)" value="-">
                        <input type="text" id="quantity" name="quantity" value="1">
                        <input type="button" id="up" onclick="setQuantity(1)" value="+">
                    </p>
                </div>

                <input id="buyinstance" type="submit" name="buynow" value="Buy with 1-Click">
                <input id="addtocart" type="submit" name="addcart" value="Add to Cart">
                <input id="addtowishlists" type="submit" name="addwishlist" value="Add to Wish Lists">
            </div>
        </div>
    </form>';}


    if(isset($_POST['addcart']))
    {
        echo '
        <div id="loginpopupbox">
            <form name="login" action="cart.php" style="text-align: center">
                <div id="false_symbol">
                    <span><a href="javascript:show(0);" class="closewindow">✕</a></span>
                </div>

                <div id="right_symbol">
                    <img src="right.png" style="width:40px;height:40px; margin-bottom: 10px">
                </div>

                <div id="mention_text">
                    <span>Added to Cart</span>
                </div>
                <div>
                    <input type="submit" value="Cart" id="gotocart">
                    <a href="javascript:show(0);" id="contineshop">Continue Shopping</a>
                </div>
            </form>
        </div>
        ';
    }

    if(isset($_POST['addwishlist']))
    {
        echo '
        <div id="loginpopupbox1">
            <form name="login" action="updatesuccess.php" style="text-align: center">
                <div id="false_symbol">
                    <span><a href="javascript:show1(0);" class="closewindow">✕</a></span>
                </div>

                <div id="right_symbol">
                    <img src="right.png" style="width:40px;height:40px; margin-bottom: 10px">
                </div>

                <div id="mention_text">
                    <span>Added to Wishlist</span>
                </div>
                <div>
                    <input type="submit" value="Wishlist" id="gotocart">
                    <a href="javascript:show1(0);" id="contineshop">Continue Shopping</a>
                </div>
            </form>
        </div>
        ';
    }
    ?>
    </body>
</html>