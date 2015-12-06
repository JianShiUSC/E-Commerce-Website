<html>
<head>
    <style>
        #cart
        {
            width: 200px;
            height: 200px;
        }
        #image
        {
            float: left;
            margin-top: 5%;
            margin-left: 10%;
            margin-right: 5%;
        }
        #suggestion
        {
            margin-top: 7%;
            margin-bottom: 20%;
        }

        .searchtitle
        {
            text-align: center;
            margin: auto;
            width: 100%;
            margin-top: 13%;
        }
        #searchinfo
        {
            margin-top: -20px;
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
        #title
        {
            font-weight: bold;
            font-family: font-familyTahoma, Helvetica, Arial, 宋体, sans-serif;
        }
        .suggest
        {
            font-family: font-familyTahoma, Helvetica, Arial, 宋体, sans-serif;
        }
        .link
        {
            text-decoration: none;
        }
        .link:hover
        {
            color: #00BBFF;
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

<HR align=left width=100% color=#D3D3D3 SIZE=2 noShade>

<div id="image">
    <img src="empty_cart.png" id="cart">
</div>
<div id="suggestion">
    <p id="title">Your shopping cart is empty now, come and start your shopping trip! You can:</p>
    <p class="suggest">view <a href="updatesuccess.php" class="link">Wishlists</a></p>
    <p class="suggest">view <a href="history.php" class="link">History Orders</a></p>
</div>
</body>
</html>