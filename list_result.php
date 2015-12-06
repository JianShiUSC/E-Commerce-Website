<?php
require 'header_login.php';
?>

<html>
<head>
    <style>
        #subtitle1
        {
            width: 88%;
            height: 88px;
            margin-left: 9%;
            margin-top: 10px;
        }
        #product1
        {
            height: 90%;
            width: 10%;
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
            /*border-style: solid;*/
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
            width: 30%;
            float: left;
            background-color: #f2f7ff;
            /*margin-right: 5px;*/
            text-align: center;
            border-width: thin;
            border-color: #0066FF;
            border-style: dotted none dotted none;
        }
        .reminder1
        {
            line-height: 75px;
            font-family: Tahoma, Helvetica, Arial, 宋体, sans-serif;
            font-size: 12px;
        }
        .reminder
        {
            line-height: 40px;
            font-family: Tahoma, Helvetica, Arial, 宋体, sans-serif;
            font-size: 12px;
        }
        .searchtitle
        {
            text-align: center;
            margin: auto;
            width: 100%;
            /*background-color: black;*/
            /*background:rgba(0,0,0,0.7);*/
            margin-top: 70px;
        }
        #searchinfo
        {
            margin-top: 25px;
            margin-bottom: 25px;
            width:600px;
            height:35px;
            border: 1px solid black;
            font-size:12pt;
            border-radius: 3px;
        }
        #search
        {
            width: 100px;
            height: 35px;
            background-color: #00BBFF;
            font-family: Microsoft YaHei;
            font-size: 14px;
            border-radius: 3px;
            color: white;
        }
        #info_border
        {
            height: 37px;
            width: 100%;
            background-color: rgb(200, 200, 200);
        }
        #menu1
        {
            height: 90%;
            float: left;
            /*border-style: solid;*/
        }

        #menu1 li
        {
            list-style: none;
        }

        #menu1 li a
        {
            width: 140px;
            height: 37px;
            text-align:right;
            margin-right:5px;
            font-family: sans-serif;
            font-size: 10pt;
            /*color: white;*/
            display: block;
            text-align: center;
            text-decoration: none;
            line-height: 35px;
            background-color: rgb(190, 190, 190);
        }

        #menu1 li li a{color: black; background-color: white; font-family: sans-serif;font-size: 10pt; text-decoration: none; border-style: solid; border-width: 1px; border-color: white #AAAAAA white#AAAAAA;}

        #menu1 li a:hover{color: #A9A9A9;}

        #menu1 ul{position: absolute; top:235px; visibility: hidden; margin-left: -40px}

        #menu1 li:hover ul{visibility: visible; }
        #noitemsfound
        {
            width: 400px;
            font-family: sans-serif;
            font-size: 10pt;
            /*color: white;*/
            display: block;
            text-align: center;
            text-decoration: none;
            line-height: 35px;
        }
        #menu0
        {
            width: 13%;
            height: 90%;
            float: left;
        }
        #menu2
        {
            float: right;
        }


        #menu1 ul ul {position: absolute; margin-top: -220px; left: 181px; visibility: hidden}

        #menu1 li:hover ul ul {visibility: hidden}

        #menu1 ul li:hover ul {visibility: visible}

        #cryimg
        {
            width: 360px;
            height: 200px;
        }
        #crydiv
        {
            float: left;
            /*border-style: solid;*/
            margin-left: 20%;
            margin-top: 10%;
        }

        #textdiv
        {
            float:left;
            /*border-style: solid;*/
            margin-top: 10%;
            margin-left: 5%;
            font-family: Microsoft YaHei;
        }
        .space
        {
            margin-bottom: 35%;
        }
        .space1
        {
            margin-bottom: 18%;
        }
    </style>
</head>

<body style="background-color: #DDDDDD">

<form action="product.php" method="post">
    <div class="searchtitle">
        <input type="text" id="searchinfo" placeholder="What kind of car do you want?" name="searchinfo"/>
        <input type="submit" id="search" name="search" value="Search"/>
    </div>
</form>

<?php
$sql2 = "SELECT * FROM product WHERE productcategory = '".$_POST[selectvehicletype]."' AND productprice >= '".$_POST[selectminprice]."' AND productprice <= '".$_POST[selectmaxprice]."' AND productcolor LIKE '%".$_POST[selectcolor]."%'";
if($_POST['selectvehicletype'] == 'I don\'t care')
{
    if($_POST['selectcolor'] == 'I don\'t care')
    {
        $sql2 = "SELECT * FROM product WHERE productprice >= '".$_POST[selectminprice]."' AND productprice <= '".$_POST[selectmaxprice]."'";
    }
    else
    {
        $sql2 = "SELECT * FROM product WHERE productprice >= '".$_POST[selectminprice]."' AND productprice <= '".$_POST[selectmaxprice]."' AND productcolor LIKE '%".$_POST[selectcolor]."%'";
    }
}

elseif($_POST['selectcolor'] == 'I don\'t care')
{
    $sql2 = "SELECT * FROM product WHERE productcategory = '".$_POST[selectvehicletype]."' AND productprice >= '".$_POST[selectminprice]."' AND productprice <= '".$_POST[selectmaxprice]."'";
}

$con2 = mysql_connect('localhost', 'root', 'Shijian1');
if (!$con2)
{
    die('Connection Failed');
}
mysql_select_db('test', $con2);
$res2 = mysql_query($sql2);
$count_times = 0;
while($row2 = mysql_fetch_assoc($res2)) {
    echo '
    <div id="subtitle1">
        <div id="product1">
            <div style="float: left">
                <img src="' . $row2[product_front] . '" style="width: 70px; height: 80%; margin-top: 0%; border-style: solid; border-width: 1px; border-color: #9c9c9c; margin-left: 10px; margin-top: 5px">
            </div>
        </div>

        <div id="single_price1">
            <span class="reminder1">
            ' . $row2[productname] . '
            </span>
        </div>

        <div id="single_price1">
            <span class="reminder1">Unit Price: $
            ' . $row2[productprice] . '
            </span>
        </div>

        <div id="discount1">
            <span class="reminder1">Discount:
            none
            </span>
        </div>
        <div id="subsum1">
            <span class="reminder1">Product Color:
            ' . $row2[productcolor] . '
            </span>
        </div>
    </div>';
    $count_times++;
}

if($count_times == 0)
{
    echo'
<div class="space">
    <div id="info_border">
        <div id="menu0">
        </div>
        <div id="menu1">
            <li>
                <a>Category</a>
                <ul>
                    <li> <a href="" style="border-radius: 4px 4px 0 0; border-color: #AAAAAA #AAAAAA white #AAAAAA;">Cars & Minivan</a>
                        <ul>
                            <li><a style="border-radius: 4px 4px 0 0; border-color: #AAAAAA #AAAAAA white #AAAAAA;" href="product.php?value=Yaris">Yaris</a></li>
                            <li><a href="product.php?value=Corolla">Corolla</a></li>
                            <li><a href="product.php?value=Camry">Camry</a></li>
                            <li><a href="product.php?value=Avalon">Avalon</a></li>
                            <li><a style="border-radius: 0 0 4px 4px; border-color: white #AAAAAA #AAAAAA #AAAAAA;" href="product.php?value=Sienna">Sienna</a></li>
                        </ul>
                    </li>
                    <li> <a href="updatesuccess.php">Trucks</a>
                        <ul>
                            <li><a style="border-radius: 4px 4px 0 0; border-color: #AAAAAA #AAAAAA white #AAAAAA;" href="product.php?value=Tacoma">Tacoma</a></li>
                            <li><a style="border-radius: 0 0 4px 4px; border-color: white #AAAAAA #AAAAAA #AAAAAA;" href="product.php?value=Tundra">Tundra</a></li>
                        </ul>
                    </li>
                    <li> <a href="history.php">Crossovers & SUVs</a>
                        <ul>
                            <li><a style="border-radius: 4px 4px 0 0; border-color: #AAAAAA #AAAAAA white #AAAAAA;" href="product.php?value=RAV4">RAV4</a></li>
                            <li><a href="product.php?value=Venza">Venza</a></li>
                            <li><a href="product.php?value=Highlander">Highlander</a></li>
                            <li><a href="product.php?value=4Runner">4Runner</a></li>
                            <li><a href="product.php?value=Sequoia">Sequoia</a></li>
                            <li><a style="border-radius: 0 0 4px 4px; border-color: white #AAAAAA #AAAAAA #AAAAAA;" href="product.php?value=Land Cruiser">Land Cruiser</a></li>
                        </ul>
                    </li>
                    <li> <a href="test.php">Hybrids & EVs</a>
                        <ul>
                            <li><a style="border-radius: 4px 4px 0 0; border-color: #AAAAAA #AAAAAA white #AAAAAA;" href="product.php?value=Camry Hybrid">Camry Hybrid</a></li>
                            <li><a href="product.php?value=Avalon Hybrid">Avalon Hybrid</a></li>
                            <li><a href="product.php?value=Highlander Hybrid">Highlander Hybrid</a></li>
                            <li><a href="product.php?value=Prius">Prius</a></li>
                            <li><a href="product.php?value=Prius c">Prius c</a></li>
                            <li><a href="product.php?value=Prius Hybrid">Prius Hybrid</a></li>
                            <li><a style="border-radius: 0 0 4px 4px; border-color: white #AAAAAA #AAAAAA #AAAAAA;" href="product.php?value=Prius v">Prius v</a></li>
                        </ul>
                    </li>
                    <li> <a href="" style="border-radius: 0 0 4px 4px; border-color: white #AAAAAA #AAAAAA #AAAAAA;">Upcoming Vehicles</a>
                        <ul>
                            <li><a style="border-radius: 4px 4px 0 0; border-color: #AAAAAA #AAAAAA white #AAAAAA;" href="product.php?value=2016 Corolla">2016 Corolla</a></li>
                            <li><a href="product.php?value=2016 Camry">2016 Camry</a></li>
                            <li><a href="product.php?value=2016 Avalon">2016 Avalon</a></li>
                            <li><a href="product.php?value=2016 Tacoma">2016 Tacoma</a></li>
                            <li><a href="product.php?value=2016 RAV4 Hybrid">2016 RAV4 Hybrid</a></li>
                            <li><a href="product.php?value=2016 Mirai">2016 Mirai</a></li>
                            <li><a style="border-radius: 0 0 4px 4px; border-color: white #AAAAAA #AAAAAA #AAAAAA;" href="product.php?value=Concept Vehicles">Concept Vehicles</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </div>
        <div id="menu2">
            <span id="noitemsfound">No items have been found!</span>
        </div>
    </div>
    <div id="crydiv">
        <input type="image" src="noresult.png" id="cryimg">
    </div>
    <div id="textdiv">
        <p>Sorry, no search results have been found.</p>
        <p>Suggestion:</p>
        <p>1. Change your filter</p>
        <p>2. Check your search keywords</p>
    </div>
    </div>
    ';
}
else
{
    echo'<div class="space1">
    </div>';
}
?>
<?php
require 'bottom.html';
?>
</body>
</html>