<?php
    session_start();
?>
<html>
<head lang="en">
    <style>
        .listcar
        {
            float: right;
            margin-top:19px;
            text-align:right;
            margin-right:15px;
            width: 140px;
            height: 28px;
            font-size: 10pt;
            font-weight: bold;
            font-family: sans-serif;
            color: white;
            background-color: #0088A8;
            text-align: center;
            border-radius: 5px;

        }
        .cart_text
        {
            margin-top:25px;
            text-align:right;
            margin-right:40px;
            font-family: sans-serif;
            font-size: 10pt;
            color: white;
        }
        .cart
        {
            margin-top:18px;
            text-align:right;
            margin-right:5px;
            height: 25px;
            width: 25px
        }
        #menu *
        {
            margin: 0;
            padding: 0;
            z-index: 3;
        }

        #menu li
        {
            list-style: none;
            color: black;
        }

        #menu li a
        {
            width: 140px;
            height: 50px;
            text-align:right;
            margin-right:5px;
            font-family: sans-serif;
            font-size: 10pt;
            color: white;
            display: block;
            text-align: center;
            text-decoration: none;
            line-height: 63px;
        }

        #menu li li a{color: black; background-color: white; font-family: sans-serif;font-size: 10pt; text-decoration: none; border-style: solid; border-width: 1px; border-color: white #AAAAAA white#AAAAAA;}

        #menu li a:hover{color: #A9A9A9;}

        #menu ul{position: absolute; top:50px; visibility: hidden;}

        #menu li:hover ul{visibility: visible; }
    </style>
</head>

<body>
<div>
    <header>
        <form method="post" action="buildvehicle.php">
        <input type="submit" class="listcar" value="List Your Vehicle">
        </form>
        <a href="login.php" style="float: left">
            <img src="Toyota.png" style="width:66.8px;height:45.5px;margin-top:10px;margin-left:10px">
        </a>
        <a href="cart.php" style="float: right; text-decoration: none">
            <p class="cart_text">Cart</p>
        </a>
        <a href="cart.php" style="float: right; text-decoration: none">
            <img class="cart" src="cart.png">
        </a>

        <div id="menu" style="float: right;">
            <li>
                <?php
                    session_start();
//                    echo $row[name];
                    echo "<a>$_SESSION[name]</a>";
                ?>
                <ul>
                    <li> <a href="" style="border-radius: 4px 4px 0 0; border-color: #AAAAAA #AAAAAA white #AAAAAA;">Your Orders</a></li>
                    <li> <a href="updatesuccess.php">Wish Lists</a></li>
                    <li> <a href="history.php">History</a></li>
                    <li> <a href="test.php">Edit Profile</a></li>
                    <li> <a href="" style="border-radius: 0 0 4px 4px; border-color: white #AAAAAA #AAAAAA #AAAAAA;">Log Out</a></li>
                </ul>
            </li>
        </div>

    </header>
</div>
<br>
<br>

</body>
</html>