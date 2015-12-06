<html>
<head>
    <style>
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
        #menu3
        {
            width: 30%;
            height: 90%;
            float: right;
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
        #space
        {
            margin-bottom: 35%;
        }
    </style>
</head>

<body>
<div id="space">

    <form action="product.php" method="post">
    <div class="searchtitle">
        <input type="text" id="searchinfo" placeholder="What kind of car do you want?" name="searchinfo"/>
        <input type="submit" id="search" name="search" value="Search"/>
    </div>
    </form>

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
        <?php
        echo'
        <p>Sorry, there is no product related to "'.$_POST['searchinfo'].'".</p>
';?>
        <p>Suggestion:</p>
        <p>1. Check your input</p>
        <p>2. Change your search keywords</p>
    </div>
</div>
</body>
<?php
require 'bottom.html';
?>
</html>