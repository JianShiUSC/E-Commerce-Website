<?php
require 'header_login.php';
?>
<html>
<head>
    <style>
        .abovetext
        {
            font-family: "Helvetica Neue";
            font-weight: 500;
            font-size: 30px;
            position:absolute;
            width: 317px;
            margin-left: 6%;
            margin-right: 10px;
            margin-top: 173px;
            color: white;
        }
        .abovetext1
        {
            font-family: "Helvetica Neue";
            font-weight: 500;
            font-size: 30px;
            position:absolute;
            width: 317px;
            margin-left: 4%;
            margin-right: 10px;
            margin-top: 173px;
            color: white;
        }
        .productlink
        {
            text-decoration: none;
        }
        #lowerhalf
        {
            background-color: #DDDDDD;
            /*text-align: center;*/
        }
        .dailylifepic
        {
            margin-left: 10px;
            margin-right: 10px;
            margin-top: 20px;
            width: 317px;
            height: 211px;
        }
        .slide
        {
            text-align: center;
        }
        .classtitle
        {
            font-family: "microsoft yahei";
            color: rgb(86, 90, 92);
            font-weight: 400;
            margin-bottom: 0;
            margin-top: 3%;
            /*text-align: center;*/
            text-align: left;
            margin-left: 15%;
        }
        .categorydescription
        {
            font-family: "microsoft yahei";
            color: rgb(86, 90, 92);
        }
        .img1
        {
            /*display: block;*/
            position: relative;
            z-index: 1;
            margin-left: 0;
            /*margin-right: 10px;*/
            margin-top: 20px;
        }
        .img2
        {
            position: relative;
            z-index: 2;
            margin-left: -1010px;
            /*margin-right: 10px;*/
            margin-top: 20px;
            margin-right: 810px;
        }
        .img3
        {
            position: relative;
            z-index: 2;
            margin-top: 20px;
        }
    </style>
    <script type="text/javascript">
        var images=new Array();
        var i=0;
        images[0] ="yaris.jpg";
        images[1] ="corolla.jpg";
        images[2] ="camry_slide.jpg";
        images[3] ="avalon.jpg";
        images[4] ="sienna.jpg";
        function next()
        {
            if(i>=images.length)
            {
                i=0;
                document.getElementById('img').src=images[i];
                i++;
            }
            else
            {
                document.getElementById('img').src=images[i];
                i++;
            }
        }
        function previous()
        {
            if(i>=images.length)
            {
                i=images.length;
                document.getElementById('img').src=images[i];
                i--;
            }
            else if(i<=0)
            {
                i=images.length;
                document.getElementById('img').src=images[i-1];
                i--;
            }
            else if(i>images.length)
            {

                document.getElementById('img').src=images[images.length-i];
            }
            else if(i<=images.length || i>0)
            {
                document.getElementById('img').src=images[i-1];
                i--;
            }
        }


        var images1=new Array();
        var i=0;
        images1[0] ="tacoma.jpg";
        images1[1] ="tundra_slide.jpg";
        function next1()
        {
            if(i>=images1.length)
            {
                i=0;
                document.getElementById('img1').src=images1[i];
                i++;
            }
            else
            {
                document.getElementById('img1').src=images1[i];
                i++;
            }
        }

        function previous1()
        {
            if(i>=images1.length)
            {
                i=images1.length;
                document.getElementById('img1').src=images1[i];
                i--;
            }
            else if(i<=0)
            {
                i=images1.length;
                document.getElementById('img1').src=images1[i-1];
                i--;
            }
            else if(i>images1.length)
            {

                document.getElementById('img1').src=images1[images1.length-i];
            }
            else if(i<=images1.length || i>0)
            {
                document.getElementById('img1').src=images1[i-1];
                i--;
            }
        }

        var images2=new Array();
        var i=0;
        images2[0] ="rav4_slide.jpg";
        images2[1] ="venza.jpg";
        images2[2] ="highlander.jpg";
        images2[3] ="4runner.jpg";
        images2[4] ="sequoia.jpg";
        images2[5] ="landcruiser.jpg";
        function next2()
        {
            if(i>=images2.length)
            {
                i=0;
                document.getElementById('img2').src=images2[i];
                i++;
            }
            else
            {
                document.getElementById('img2').src=images2[i];
                i++;
            }
        }
        function previous2()
        {
            if(i>=images2.length)
            {
                i=images2.length;
                document.getElementById('img2').src=images2[i];
                i--;
            }
            else if(i<=0)
            {
                i=images2.length;
                document.getElementById('img2').src=images2[i-1];
                i--;
            }
            else if(i>images2.length)
            {

                document.getElementById('img2').src=images2[images2.length-i];
            }
            else if(i<=images2.length || i>0)
            {
                document.getElementById('img2').src=images2[i-1];
                i--;
            }
        }

        var images3=new Array();
        var i=0;
        images3[0] ="camryhybrid.jpg";
        images3[1] ="avalonhybrid.jpg";
        images3[2] ="highlanderhybrid.jpg";
        images3[3] ="prius_slide.jpg";
        images3[4] ="priusc.png";
        images3[5] ="priushybrid.jpg";
        images3[6] ="priusv.jpg";
        function next3()
        {
            if(i>=images3.length)
            {
                i=0;
                document.getElementById('img3').src=images3[i];
                i++;
            }
            else
            {
                document.getElementById('img3').src=images3[i];
                i++;
            }
        }
        function previous3()
        {
            if(i>=images3.length)
            {
                i=images3.length;
                document.getElementById('img3').src=images3[i];
                i--;
            }
            else if(i<=0)
            {
                i=images3.length;
                document.getElementById('img3').src=images3[i-1];
                i--;
            }
            else if(i>images3.length)
            {

                document.getElementById('img3').src=images3[images3.length-i];
            }
            else if(i<=images3.length || i>0)
            {
                document.getElementById('img3').src=images3[i-1];
                i--;
            }
        }
    </script>

</head>
<body id="lowerhalf">

<div style="margin-top: 40px">
    <div class="slide">
        <h1 class="classtitle">Cars & Minivan</h1>
        <div style="margin: 0 auto">
            <img class="img1" src="camry_slide.jpg" style="width: 1000px; height: 436px; margin-left: 10px" id="img"/>
            <img class="img2" src="left_arrow.png" style="width: 100px; height: 100px; margin-bottom: 160px" value="Previous" onclick="previous()" />
            <img class="img3" src="right_arrow.png" style="width: 100px; height: 100px; margin-bottom: 160px" value="Next" onclick="next()"/>
        </div>
    </div>
    <div style="width: 1000px; margin: 0 auto">
        <span class="categorydescription">
            <?php
            $sql = "SELECT * FROM productcategory WHERE productcategoryname = 'Cars & Minivan'";
            $con = mysql_connect('localhost', 'root', 'Shijian1');
            if (!$con)
            {
                die('Connection Failed');
            }
            mysql_select_db('test', $con);
            $res = mysql_query($sql);
            $row = mysql_fetch_assoc($res);
            echo $row[productcategorydescription];
            ?>
        </span>
    </div>

    <div style="width: 1020px; margin: 0 auto; float: none">
        <?php
        $sql = "SELECT * FROM product WHERE productcategory = 'Cars & Minivan'";
        $con = mysql_connect('localhost', 'root', 'Shijian1');
        if (!$con)
        {
            die('Connection Failed');
        }
        mysql_select_db('test', $con);
        $res = mysql_query($sql);
        $count = 0;
        while($row = mysql_fetch_assoc($res))
        {
            if($count %3 != 0)
            {
                echo '<a class="productlink" href="product.php?value='.$row[productname].'">
                    <span class="abovetext" style="margin-top: 105px;">'.$row[productname].'</span>
                    <img src="'.$row[product_img_index].'" class="dailylifepic">
                </a>';
            }
            else
            {
                echo '<a class="productlink" href="product.php?value='.$row[productname].'">
                    <span class="abovetext" style="margin-top: 105px; display: block">'.$row[productname].'</span>
                    <img src="'.$row[product_img_index].'" class="dailylifepic">
                </a>';
            }
            $count++;
        }
        ?>
    </div>
    <HR align=center width=70% color=#C0C0C0  SIZE=0.5 noShade style="margin-top: 3%">


    <div class="slide">
        <h1 class="classtitle">Trucks</h1>
        <div style="margin: 0 auto">
            <img class="img1" src="tacoma.jpg" style="width: 1000px; height: 436px; margin-left: 10px" id="img1"/>
            <img class="img2" src="left_arrow.png" style="width: 100px; height: 100px; margin-bottom: 160px" value="Previous" onclick="previous1()" />
            <img class="img3" src="right_arrow.png" style="width: 100px; height: 100px; margin-bottom: 160px" value="Next" onclick="next1()"/>
        </div>
    </div>
    <div style="width: 1000px; margin: 0 auto">
        <span class="categorydescription">
            <?php
            $sql = "SELECT * FROM productcategory WHERE productcategoryname = 'Trucks'";
            $con = mysql_connect('localhost', 'root', 'Shijian1');
            if (!$con)
            {
                die('Connection Failed');
            }
            mysql_select_db('test', $con);
            $res = mysql_query($sql);
            $row = mysql_fetch_assoc($res);
            echo $row[productcategorydescription];
            ?>
        </span>
    </div>
    <div style="width: 1020px; margin: 0 auto">
        <?php
        $sql = "SELECT * FROM product WHERE productcategory = 'Trucks'";
        $con = mysql_connect('localhost', 'root', 'Shijian1');
        if (!$con)
        {
            die('Connection Failed');
        }
        mysql_select_db('test', $con);
        $res = mysql_query($sql);
        $count = 0;
        while($row = mysql_fetch_assoc($res))
        {
            if($count %3 != 0)
            {
                echo '<a class="productlink" href="product.php?value='.$row[productname].'">
                    <span class="abovetext" style="margin-top: 105px;">'.$row[productname].'</span>
                    <img src="'.$row[product_img_index].'" class="dailylifepic">
                </a>';
            }
            else
            {
                echo '<a class="productlink" href="product.php?value='.$row[productname].'">
                    <span class="abovetext" style="margin-top: 105px; display: block">'.$row[productname].'</span>
                    <img src="'.$row[product_img_index].'" class="dailylifepic">
                </a>';
            }
            $count++;
        }
        ?>
    </div>
    <HR align=center width=70% color=#C0C0C0  SIZE=0.5 noShade style="margin-top: 3%">


    <div class="slide">
        <h1 class="classtitle">Crossovers & SUVs</h1>
        <div style="margin: 0 auto">
            <img class="img1" src="highlander.jpg" style="width: 1000px; height: 436px; margin-left: 10px" id="img2"/>
            <img class="img2" src="left_arrow.png" style="width: 100px; height: 100px; margin-bottom: 160px" value="Previous" onclick="previous2()" />
            <img class="img3" src="right_arrow.png" style="width: 100px; height: 100px; margin-bottom: 160px" value="Next" onclick="next2()"/>
        </div>
    </div>
    <div style="width: 1000px; margin: 0 auto">
        <span class="categorydescription">
            <?php
            $sql = "SELECT * FROM productcategory WHERE productcategoryname = 'Crossovers & SUVs'";
            $con = mysql_connect('localhost', 'root', 'Shijian1');
            if (!$con)
            {
                die('Connection Failed');
            }
            mysql_select_db('test', $con);
            $res = mysql_query($sql);
            $row = mysql_fetch_assoc($res);
            echo $row[productcategorydescription];
            ?>
        </span>
    </div>
    <div style="width: 1020px; margin: 0 auto">
        <?php
        $sql = "SELECT * FROM product WHERE productcategory = 'Crossovers & SUVs'";
        $con = mysql_connect('localhost', 'root', 'Shijian1');
        if (!$con)
        {
            die('Connection Failed');
        }
        mysql_select_db('test', $con);
        $res = mysql_query($sql);
        $count = 0;
        while($row = mysql_fetch_assoc($res))
        {
            if($count %3 != 0)
            {
                echo '<a class="productlink" href="product.php?value='.$row[productname].'">
                    <span class="abovetext" style="margin-top: 105px;">'.$row[productname].'</span>
                    <img src="'.$row[product_img_index].'" class="dailylifepic">
                </a>';
            }
            else
            {
                echo '<a class="productlink" href="product.php?value='.$row[productname].'">
                    <span class="abovetext" style="margin-top: 105px; display: block">'.$row[productname].'</span>
                    <img src="'.$row[product_img_index].'" class="dailylifepic">
                </a>';
            }
            $count++;
        }
        ?>
    </div>
    <HR align=center width=70% color=#C0C0C0  SIZE=0.5 noShade style="margin-top: 3%">

    <div class="slide">
        <h1 class="classtitle">Hybrids & EVs</h1>
        <div style="margin: 0 auto">
            <img class="img1" src="prius_slide.jpg" style="width: 1000px; height: 436px; margin-left: 10px" id="img3"/>
            <img class="img2" src="left_arrow.png" style="width: 100px; height: 100px; margin-bottom: 160px" value="Previous" onclick="previous3()" />
            <img class="img3" src="right_arrow.png" style="width: 100px; height: 100px; margin-bottom: 160px" value="Next" onclick="next3()"/>
        </div>
    </div>
    <div style="width: 1000px; margin: 0 auto">
                <span class="categorydescription">
                    <?php
                    $sql = "SELECT * FROM productcategory WHERE productcategoryname = 'Hybrids & EVs'";
                    $con = mysql_connect('localhost', 'root', 'Shijian1');
                    if (!$con)
                    {
                        die('Connection Failed');
                    }
                    mysql_select_db('test', $con);
                    $res = mysql_query($sql);
                    $row = mysql_fetch_assoc($res);
                    echo $row[productcategorydescription];
                    ?>
                </span>
    </div>
    <div style="width: 1020px; margin: 0 auto">
        <?php
        $sql = "SELECT * FROM product WHERE productcategory = 'Hybrids & EVs'";
        $con = mysql_connect('localhost', 'root', 'Shijian1');
        if (!$con)
        {
            die('Connection Failed');
        }
        mysql_select_db('test', $con);
        $res = mysql_query($sql);
        $count = 0;
        while($row = mysql_fetch_assoc($res))
        {
            if($count %3 != 0)
            {
                echo '<a class="productlink" href="product.php?value='.$row[productname].'">
                    <span class="abovetext1" style="margin-top: 105px;">'.$row[productname].'</span>
                    <img src="'.$row[product_img_index].'" class="dailylifepic">
                </a>';
            }
            else
            {
                echo '<a class="productlink" href="product.php?value='.$row[productname].'">
                    <span class="abovetext1" style="margin-top: 105px; display: block">'.$row[productname].'</span>
                    <img src="'.$row[product_img_index].'" class="dailylifepic">
                </a>';
            }
            $count++;
        }
        ?>
    </div>
    <HR align=center width=70% color=#C0C0C0  SIZE=0.5 noShade style="margin-top: 3%">
</div>
<?php
require 'bottom.html';
?>

</body>
</html>