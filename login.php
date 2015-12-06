<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
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
        .login
        {
            margin-top:25px;
            text-align:right;
            margin-right:30px;
            font-family: sans-serif;
            font-size: 10pt;
            color: white;
        }
        .signup
        {
            margin-top:25px;
            text-align:right;
            margin-right:30px;
            font-family: sans-serif;
            font-size: 10pt;
            color: white;
        }
        #body
        {
            background-size: 100% 18%;
            background-repeat: no-repeat;
            /*background-attachment: fixed;*/
            /*background: url("3.jpg") no-repeat 60px 55px;*/
        }
        .center
        {
            text-align: center;
            margin: auto;
            width: 60%;
        }
        .slogan
        {
            margin-top: 130px;
            font-family: sans-serif;
            font-size: 45pt;
            color: white;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .subslogan
        {
            font-family: Microsoft YaHei;
            font-size: 13pt;
            color: white;
            /*font-weight: bold;*/
        }
        .searchtitle
        {
            text-align: center;
            margin: auto;
            width: 100%;
            background-color: black;
            background:rgba(0,0,0,0.7);
            margin-top: 13%;
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
        #lowerhalf
        {
            background-color: #DDDDDD;
            margin-top: 6px;
            /*margin-bottom: 100px;*/
            /*border: solid;*/
            text-align: center;
        }
        .upreminder
        {
            font-family: "Helvetica Neue";
            font-size: 24pt;
            color: #444444;
            font-weight: bold;
            margin-bottom: 7px;
            margin-top: 40px;
        }
        .lowreminder
        {
            margin-top: 7px;
            font-family: Microsoft YaHei;
            font-size: 13pt;
            color: #444444;
        }
        #videotag
        {
            margin-bottom: 25px;
        }
        .dailylifepic
        {
            margin-left: 10px;
            margin-right: 10px;
            margin-top: 20px;
            width: 314px;
            height: 344px;
        }
        #listallvehicles
        {
            width: 314px;
            height: 42px;
            background-color: #F5F5F5;
            font-weight: bold;
            font-family: Microsoft YaHei;
            font-size: 14px;
            border-radius: 3px;
            color: #444444;
        }
        #div
        {
            /*border: solid;*/
            margin-top: 40px;
            margin-bottom: 50px;
        }
        .abovetext
        {
            font-family: "Helvetica Neue";
            font-weight: 500;
            font-size: 30px;
            position:absolute;
            width: 327px;
            margin-top: 173px;
            color: white;
        }
        #bottomhalf
        {
            /*background-image: url("background.jpg");*/
            background-size: 100%;
            background-color: dimgrey;
            background-repeat: no-repeat;
            text-align: center;
        }
        .info
        {
            color: white;
            font-family: Microsoft YaHei;
            font-size: 10px;
            text-decoration: none;
        }
        .subdiv
        {
            display:inline-block;
            margin-right: 40px;
        }
        .logo
        {
            width: 12px;
            height: 12px;
            margin-right: 5px
        }
        #popupbox
        {
            margin: 0;
            margin-left: 34.6%;
            margin-right: 40%;
            margin-top: 10%;
            padding-top: 10px;
            /*width: 380px;*/
            height: 404px;
            width: 30%;
            /*height: 50%;*/
            position: absolute;
            background: #F0FFFF;
            /*border: solid #000000 2px;*/
            font-family: arial;
            visibility: hidden;
            border-radius: 5px;
        }
        .signuptext
        {
            /*width: 330px;*/
            height: 48px;
            width: 90%;
            font-size: 13px;
            text-indent: 15px;
        }
        .signupbutton
        {
            /*width: 332px;*/
            width: 90%;
            height: 44px;
            background-color: #0066FF;
            font-family: Microsoft YaHei;
            font-size: 14px;
            border-radius: 3px;
            color: white;
            margin-bottom: 10px;
            margin-top: 10px;
        }
        #popupboxbackground
        {

            position: absolute;
            font-family: arial;
            visibility: hidden;
            border-radius: 5px;
        }
        .closewindow
        {
            float: right;
            margin-right: 30px;
            margin-top:30px;
            color: darkgrey;
            text-decoration: none;
            font-size: 23px
        }
        .lawinfo
        {
            font-size: 12px;
            font-family: Microsoft YaHei;
            color: #666666
        }
        #loginpopupbox
        {
            margin: 0;
            margin-left: 34.6%;
            margin-right: 40%;
            margin-top: 10%;
            padding-top: 10px;
            /*width: 380px;*/
            height: 290px;
            width: 30%;
            /*height: 50%;*/
            position: absolute;
            background: #F0FFFF;
            /*border: solid #000000 2px;*/
            font-family: arial;
            visibility: hidden;
            border-radius: 5px;
        }
        #popupboxbackground1
        {

            position: absolute;
            font-family: arial;
            visibility: hidden;
            border-radius: 5px;
        }
        #menu *
        {
            margin: 0;
            padding: 0;
        }

        #menu li
        {
            list-style: none;
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
        .productlink
        {
            text-decoration: none;
        }

        #menu li li a{color: black; background-color: white; font-family: sans-serif;font-size: 10pt; text-decoration: none}

        #menu li a:hover{color: #DDDDDD;}

        #menu ul{position: absolute; top:50px; visibility: hidden;}

        #menu li:hover ul{visibility: visible; }

    </style>

    <script type ="text/javascript">
        var speed = 5000;
        var Pic = [];
        Pic[0] = 'image1.jpg';
        Pic[1] = 'image2.jpg';
        Pic[2] = 'image3.jpg';
        Pic[3] = 'image4.jpg';

        var t;
        var j = 0;
        var p = Pic.length;
        var preLoad = [];
        for (i = 0; i < p; i++)
        {
            preLoad[i] = new Image();
            preLoad[i].src = Pic[i];
        }

        function runBGSlideShow()
        {
            if (document.body)
            {
                document.body.background = Pic[j];
                j = j + 1;
                if (j > (p-1)) j=0;
                t = setTimeout('runBGSlideShow()', speed)
            }
        }
        function signup(showhide)
        {
            if (showhide == "show") {
                document.getElementById('popupboxbackground').style.visibility = "visible";
                document.getElementById('popupbox').style.visibility = "visible";
            }
            else if (showhide == "hide") {
                document.getElementById('popupbox').style.visibility = "hidden";
                document.getElementById('popupboxbackground').style.visibility = "hidden";
            }
        }
        function login(showhide)
        {
            if (showhide == "show") {
                document.getElementById('popupboxbackground1').style.visibility = "visible";
                document.getElementById('loginpopupbox').style.visibility = "visible";
            }
            else if (showhide == "hide") {
                document.getElementById('loginpopupbox').style.visibility = "hidden";
                document.getElementById('popupboxbackground1').style.visibility = "hidden";
            }
        }
        function loginthroughsignup(showhide)
        {
            document.getElementById('popupbox').style.visibility = "hidden";
            document.getElementById('popupboxbackground').style.visibility = "hidden";
            login(showhide);
        }
    </script>
</head>


<body id="body" onload="runBGSlideShow()">
<div id="popupboxbackground" style="background:rgba(0,0,0,0.8); margin: 0; width: 99%; height: 373%">
    <span><a href="javascript:signup('hide');" class="closewindow">✕</a></span>
    <div id="popupbox" >
    <form name="signup" action="" method="post" style="text-align: center">
        <input type="image" src="Toyota.png" style="width:66.8px;height:45.5px; margin-bottom: 10px">
        <input class="signuptext" type="text" name="signupname" placeholder="Full Name">
        <input class="signuptext" type="text" name="signupemail" placeholder="Email">
        <input class="signuptext" type="text" name="signuppassword" placeholder="Password" style="margin-bottom: 10px">
        <p class="lawinfo" style="margin-left:10%; margin-right: 10%;">By creating an account, I accept Toyota's Terms of Service and Honor Code.</p>
        <input class="signupbutton" type="submit" name="signup" value="Sign Up"/><br>
        <HR align=center width=85% color=#C0C0C0  SIZE=0.5 noShade>
        <span class="lawinfo">Already a Toyota member?</span>
        <a href="javascript:loginthroughsignup('show');" class="lawinfo" style="color: black; text-decoration: none">Log in</a>
    </form><br/>
    </div>
</div>

<div id="popupboxbackground1" style="background:rgba(0,0,0,0.8); margin: 0; width: 99%; height: 373%">
    <span><a href="javascript:login('hide');" class="closewindow">✕</a></span>
    <div id="loginpopupbox">
        <form name="login" action="" method="post" style="text-align: center">
            <input type="image" src="Toyota.png" style="width:66.8px;height:45.5px; margin-bottom: 10px">
            <input class="signuptext" type="text" name="loginemail" placeholder="Email">
            <input class="signuptext" type="text" name="loginpassword" placeholder="Password" style="margin-bottom: 10px">
            <input class="signupbutton" type="submit" name="login" value="Log In"/><br>
        </form>
    </div>
</div>


<?php
session_start();
if(isset($_POST['signup']))
{
    $un = $_POST['signupname'];
    $email = $_POST['signupemail'];
    $pw = $_POST['signuppassword'];
    if (strlen($un)>0 && strlen($email)>0 && strlen($pw)>0)
    {
        $sql = "INSERT INTO Customer(email, name, password) VALUES ('".$email."', '".$un."', '".$pw."')";
        $con = mysql_connect('localhost', 'root', 'Shijian1');
        if (!$con)
        {
            die('Connection Failed');
        }
        mysql_select_db('test', $con);
        $res = mysql_query($sql);
        $row = mysql_fetch_assoc($res);
        $_SESSION['name'] = $un;
//        echo $row[name];
    }
    require 'header_login.php';
}
else if(isset($_POST['login']))
{
    $email = $_POST['loginemail'];
    $pw = $_POST['loginpassword'];
    $errmsg = "";
    if (strlen($email) == 0)
    {
        $errmsg = 'Invalid login';
    }
    if (strlen($pw) == 0)
    {
        $errmsg = 'Invalid login';
    }
    if (strlen($email) == 0 && strlen($pw) == 0)
    {
        $errmsg = "";
    }

    if (strlen($email)>0 && strlen($pw)>0)
    {
        $sql = "SELECT * FROM Customer WHERE email = '".$email."' and password = '".$pw."'";
        $sql_extra = "SELECT name FROM Customer WHERE email = '".$email."' and password = '".$pw."'";
        $con = mysql_connect('localhost', 'root', 'Shijian1');
        if (!$con)
        {
            die('Connection Failed');
        }
        mysql_select_db('test', $con);
        $res = mysql_query($sql);
        if (!($row = mysql_fetch_assoc($res)))
        {
            $errmsg = 'Invalid login';
        }
        else
        {
            $icon = $row[icon];
            $name = $row[name];
            $email = $row[email];
            $gender = $row[gender];
            $birth_month = $row[birth_month];
            $birth_day = $row[birth_day];
            $birth_year = $row[birth_year];
            $password = $row[password];
            $shipping_fn = $row[shipping_fn];
            $shipping_ln = $row[shipping_ln];
            $shipping_company = $row[shipping_company];
            $shipping_area_code = $row[shipping_area_code];
            $shipping_phone = $row[shipping_phone];
            $shipping_address = $row[shipping_address];
            $shipping_apt = $row[shipping_apt];
            $shipping_zipcode = $row[shipping_zipcode];
            $notification_email = $row[notification_email];
            $notification_area_code = $row[notification_area_code];
            $notification_phone = $row[notification_phone];
            $bill_fn = $row[bill_fn];
            $bill_ln = $row[bill_ln];
            $bill_area_code = $row[bill_area_code];
            $bill_phone = $row[bill_phone];
            $bill_alt_area_code = $row[bill_alt_area_code];
            $bill_alt_phone = $row[bill_alt_phone];
            $bill_email = $row[bill_email];;
            $ba_company = $row[ba_company];
            $ba_address = $row[ba_address];
            $ba_apt = $row[ba_apt];
            $ba_zipcode = $row[ba_zipcode];
            $card_type = $row[card_type];
            $credit_card_num = $row[credit_card_num];
            $security_code = $row[security_code];
            $expiration_month = $row[expiration_month];
            $expiration_year = $row[expiration_year];
        }
    }
    if (strlen($errmsg)>0)
    {
        echo "<script type='text/javascript'>login('show');</script>";
        echo '<p>'.$errmsg.'</p>';
        require 'header.html';
    }
    else if (!$res)
    {
        echo "<script type='text/javascript'>login('show');</script>";
        require 'header.html';
    }
    else
    {
        $_SESSION['icon'] = $icon;
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['gender'] = $gender;
        $_SESSION['birth_month'] = $birth_month;
        $_SESSION['birth_day'] = $birth_day;
        $_SESSION['birth_year'] = $birth_year;
        $_SESSION['password'] = $password;
        $_SESSION['shipping_fn'] = $shipping_fn;
        $_SESSION['shipping_ln'] = $shipping_ln;
        $_SESSION['shipping_company'] = $shipping_company;
        $_SESSION['shipping_area_code'] = $shipping_area_code;
        $_SESSION['shipping_phone'] = $shipping_phone;
        $_SESSION['shipping_address'] = $shipping_address;
        $_SESSION['shipping_apt'] = $shipping_apt;
        $_SESSION['shipping_zipcode'] = $shipping_zipcode;
        $_SESSION['notification_email'] = $notification_email;
        $_SESSION['notification_area_code'] = $notification_area_code;
        $_SESSION['notification_phone'] = $notification_phone;
        $_SESSION['bill_fn'] = $bill_fn;
        $_SESSION['bill_ln'] = $bill_ln;
        $_SESSION['bill_area_code'] = $bill_area_code;
        $_SESSION['bill_phone'] = $bill_phone;
        $_SESSION['bill_alt_area_code'] = $bill_alt_area_code;
        $_SESSION['bill_alt_phone'] = $bill_alt_phone;
        $_SESSION['bill_email'] = $bill_email;
        $_SESSION['ba_company'] = $ba_company;
        $_SESSION['ba_address'] = $ba_address;
        $_SESSION['ba_apt'] = $ba_apt;
        $_SESSION['ba_zipcode'] = $ba_zipcode;
        $_SESSION['card_type'] = $card_type;
        $_SESSION['credit_card_num'] = $credit_card_num;
        $_SESSION['security_code'] = $security_code;
        $_SESSION['expiration_month'] = $expiration_month;
        $_SESSION['expiration_year'] = $expiration_year;
        require 'header_login.php';
    }
}
else
{
    require 'header.html';
}
?>


<div class = "center">
    <p class="slogan">GO ANYWHERE</p>
    <p class="subslogan">Let's go places and find more you with attitude.</p>
</div>

<form action="product.php" method="post">
<div class="searchtitle">
    <input type="text" id="searchinfo" placeholder="What kind of car do you want?" name="searchinfo"/>
    <input type="submit" id="search" name="search" value="Search"/>
</div>
</form>

<div id="lowerhalf">
    <div id="videotag">
        <video class="video" width="1360" height="412" style="margin-top: 30px" onclick="paused?play():pause();">
            <source src="Toyota.mp4" id="video" type="video/mp4">
        </video>
    </div>
    <HR align=left width=100% color=#D3D3D3 SIZE=2 noShade>

    <div>
        <p class="upreminder">Just for daily life</p>
        <p class="lowreminder">Discover fantastic economic vehicles.</p>
    </div>
    <div>
        <div>
            <a class="productlink" href="product.php?value=RAV4">
            <span class="abovetext">RAV4</span>
            <img src="rav4.jpg" class="dailylifepic">
            </a>
            <a class="productlink" href="product.php?value=Camry">
            <span class="abovetext">Camry</span>
            <img src="camry.jpg" class="dailylifepic">
            </a>
            <a class="productlink" href="product.php?value=Tundra">
            <span class="abovetext">Tundra</span>
            <img src="tundra.jpg" class="dailylifepic">
            </a>
        </div>
        <div id="div">
            <a href="allProducts.php">
            <input type="submit" id="listallvehicles" value="See All Vehicles">
            </a>
        </div>
    </div>
    <div>
        <p class="upreminder">Explore the future</p>
        <p class="lowreminder">See what our future products will be.</p>
    </div>
    <div>
        <div>
            <a class="productlink" href="product.php?value=2016 Avalon">
            <span class="abovetext" style="width: 655px; margin-top: 180px;">2016 Avalon</span>
            <img src="2016avalon.jpg" class="dailylifepic" style="width: 655px;">
            </a>
            <a class="productlink" href="product.php?value=Concept Vehicles">
            <span class="abovetext" style="margin-top: 180px;">Concept Vehicles</span>
            <img src="concept.jpg" class="dailylifepic">
            </a>
        </div>
        <div>
            <a class="productlink" href="product.php?value=2016 Mirai">
            <span class="abovetext" style="margin-top: 180px;">2016 Mirai</span>
            <img src="2016mirai.jpg" class="dailylifepic">
            </a>
            <a class="productlink" href="product.php?value=2016 RAV4 Hybrid">
            <span class="abovetext" style="margin-top: 180px;">2016 RAV4 Hybrid</span>
            <img src="2016rav4hybrid.jpg" class="dailylifepic">
            </a>
            <a class="productlink" href="product.php?value=2016 Corolla">
            <span class="abovetext" style="margin-top: 180px;">2016 Corolla</span>
            <img src="2016corolla.jpg" class="dailylifepic">
            </a>
        </div>
        <div>
            <a class="productlink" href="product.php?value=2016 Camry">
            <span class="abovetext" style="margin-top: 180px;">2016 Camry</span>
            <img src="2016camry.jpg" class="dailylifepic" style="margin-bottom: 50px;">
            </a>
            <a class="productlink" href="product.php?value=2016 Tacoma">
            <span class="abovetext" style="width: 655px; margin-top: 180px;">2016 Tacoma</span>
            <img src="2016tacoma.jpg" class="dailylifepic" style="width: 655px; margin-bottom: 50px">
            </a>
        </div>
    </div>
</div>
<?php
    require 'bottom.html';
?>
<!--<div id="bottomhalf">-->
<!--    <div class="subdiv">-->
<!--        <h2 class="info">Vehicles</h2>-->
<!--        <ul style="list-style-type: none; padding: 0; text-align: left; margin-left: 50px">-->
<!--            <li><a class="info">SUVs</a></li>-->
<!--            <li><a class="info">Trucks</a></li>-->
<!--            <li><a class="info">Crossovers</a></li>-->
<!--            <li><a class="info">Hybrids & Evs</a></li>-->
<!--            <li><a class="info">Hybrid SUVs</a></li>-->
<!--            <li><a class="info">Upcoming Vehicles</a></li>-->
<!--        </ul>-->
<!--    </div>-->
<!--    <div class="subdiv">-->
<!--        <h2 class="info" style="margin-right: 40px">About Toyota</h2>-->
<!--        <ul style="list-style-type: none; padding: 0; text-align: left;">-->
<!--            <li><a class="info">Our Company</a></li>-->
<!--            <li><a class="info">Toyota USA Newsroom</a></li>-->
<!--            <li><a class="info">Careers</a></li>-->
<!--            <li><a class="info">Toyota Worldwide</a></li>-->
<!--            <li><a class="info">Toyota Financial Services</a></li>-->
<!--            <li><a class="info">Toyota Racing</a></li>-->
<!--        </ul>-->
<!--    </div>-->
<!--    <div class="subdiv">-->
<!--        <h2 class="info">Toyota Social</h2>-->
<!--        <ul style="list-style-type: none; padding: 0; text-align: left;">-->
<!--            <li><a href="https://www.facebook.com/toyota" class="info"><img src="fb.png" class="logo">Facebook</a></li>-->
<!--            <li><a href="https://twitter.com/toyota" class="info"><img src="tw.png" class="logo">Twitter</a></li>-->
<!--            <li><a href="https://www.youtube.com/user/ToyotaUSA" class="info"><img src="youtube.png" class="logo">Youtube</a></li>-->
<!--            <li><a href="https://plus.google.com/+toyotausa/about" class="info"><img src="gplus.png" class="logo">Google+</a></li>-->
<!--            <li><a href="https://instagram.com/toyotausa/" class="info"><img src="ins.png" class="logo">Instagram</a></li>-->
<!--            <li><a href="http://www.weibo.com/1979530337/profile?topnav=1&wvr=6" class="info"><img src="weibo.png" class="logo">Weibo</a></li>-->
<!--        </ul>-->
<!--    </div>-->
<!--    <HR align=center width=40% color=#C0C0C0  SIZE=0.5 noShade>-->
<!--    <div class="info" style="text-align: center; margin-top: 30px; padding-bottom: 30px">-->
<!--        © JianShi❤Lareine, Inc.-->
<!--    </div>-->
<!--</div>-->
</body>

</html>