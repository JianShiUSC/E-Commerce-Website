<?php
    require 'header_login.php';
$sql = "SELECT * FROM Customer WHERE name = '".$_SESSION[name]."'";
//$sql_extra = "SELECT name FROM Customer WHERE email = '".$email."' and password = '".$pw."'";
$con = mysql_connect('localhost', 'root', 'Shijian1');
if (!$con)
{
    die('Connection Failed');
}
mysql_select_db('test', $con);
$res = mysql_query($sql);
$row = mysql_fetch_assoc($res);
?>
<html>
<head>
    <style>
        .profile
        {
            margin-bottom: 32px;
            font-family: Microsoft YaHei;
            /*font-weight: bold;*/
            font-size: 12px;
        }
        .title
        {
            font-family: Microsoft YaHei;
            /*font-weight: bold;*/
            font-size: 24px;
        }
        .inputinfo
        {
            width: 382px;
            height: 32px;
            border-radius: 5px;
            text-indent: 5px;
        }
        .select
        {
            border:1px solid #ccc;
            height:32px;
            font-size:12px;
            position:relative;
            zoom:1;
            width:69px;
            background-color: white;
        }
        .subtitle
        {
            font-family: Microsoft YaHei;
            font-weight: bold;
            font-size: 12px;
        }
        .creditcard
        {
            vertical-align: top;
            margin-left: 20px;
        }
        .mentioninfo
        {
            font-family: Microsoft YaHei;
            /*font-weight: bold;*/
            font-size: 10px;
        }
        #expireinfo
        {
            font-family: Microsoft YaHei;
            /*font-weight: bold;*/
            font-size: 12px;
        }
        .greytext
        {
            font-family: 'Microsoft YaHei';
            font-size: 10px;
            color: #7d7d7d;
        }
        ul
        {
            margin-left: -6%;
            color: #7d7d7d;
        }
        .error
        {
            font-size:9pt;
            color:red;
            font-family: "Microsoft YaHei";
        }
        #submit
        {
            /*float:right;*/
            /*margin-right:110px;*/
            margin-top: 2%;
            margin-left: 47%;
            margin-bottom: 2%;
            width: 100px;
            height: 35px;
            background-color: #00BBFF;
            font-family: Microsoft YaHei;
            font-size: 14px;
            border-radius: 3px;
            color: white;
        }
        .creditcardimg
        {
            width: 48px;
            height: 30px
        }
        #uploadicon
        {
            margin-top: 15px;
            font-family: 'Microsoft YaHei';
        }
    </style>
    <script type="text/javascript">
        function checkEmail()
        {
            var email = document.getElementById("email").value;
            var t = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
            if(!t.test(email))
            {
                return false;
            }
            else
            {
                return true;
            }
        }
        function checkEmail1()
        {
            var snemail = document.getElementById("snemail").value;
            var t = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
            if(!t.test(snemail))
            {
                return false;
            }
            else
            {
                return true;
            }
        }
        function checkEmail2()
        {
            var bcemail = document.getElementById("bcemail").value;
            var t = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
            if(!t.test(bcemail))
            {
                return false;
            }
            else
            {
                return true;
            }
        }
        function checkareacode1()
        {
            var saareacode = document.getElementById("saareacode").value;
            var t = /^\d{3,}$/;
            if(!t.test(saareacode))
            {
                return false;
            }
            else
            {
                return true;
            }
        }
        function checkphone1()
        {
            var saphone = document.getElementById("saphone").value;
            var t = /^\d{7,}$/;
            if(!t.test(saphone))
            {
                return false;
            }
            else
            {
                return true;
            }
        }
        function checkzipcode1()
        {
            var sazipcode = document.getElementById("sazipcode").value;
            var t = /^\d{5,10}$/;
            if(!t.test(sazipcode))
            {
                return false;
            }
            else
            {
                return true;
            }
        }
        function checkphone2()
        {
            var snareacode = document.getElementById("snareacode").value;
            var snmobile = document.getElementById("snmobile").value;
            var t1 = /^\d{3,}$/;
            var t2 = /^\d{7,}$/;
            if((snmobile.length!=0 && snareacode.length!=0 && t1.test(snareacode) && t2.test(snmobile)) || (snmobile.length==0 && snareacode.length==0))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        function checkphone3()
        {
            var bcareacode = document.getElementById("bcareacode").value;
            var bcphone = document.getElementById("bcphone").value;
            var t1 = /^\d{3,}$/;
            var t2 = /^\d{7,}$/;
            if((t1.test(bcareacode) && t2.test(bcphone)))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        function checkphone4()
        {
            var bcareacodealternate = document.getElementById("bcareacodealternate").value;
            var alternatephone = document.getElementById("alternatephone").value;
            var t1 = /^\d{3,}$/;
            var t2 = /^\d{7,}$/;
            if((bcareacodealternate.length!=0 && alternatephone.length!=0 && t1.test(bcareacodealternate) && t2.test(alternatephone)) || (bcareacodealternate.length==0 && alternatephone.length==0))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        function checkzipcode2()
        {
            var bazipcode = document.getElementById("bazipcode").value;
            var t = /^\d{5,10}$/;
            if(!t.test(bazipcode))
            {
                return false;
            }
            else
            {
                return true;
            }
        }
        function checkcreditcard()
        {
            var cardnum = document.getElementById("cardnum").value;
            var securitycode = document.getElementById("securitycode").value;
            var t1 = /^\d{16,}$/;
            var t2 = /^\d{3,}$/;
            if((t1.test(cardnum) && t2.test(securitycode)))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        function checkvalidatity()
        {
            var fname = document.getElementById("firstname").value;
            var gender = document.getElementById("gender").value;
            var password = document.getElementById("password").value;
            var sfirstname = document.getElementById("sfirstname").value;
            var slastname = document.getElementById("slastname").value;
            var sasa = document.getElementById("sasa").value;
            var bcfirstname = document.getElementById("bcfirstname").value;
            var bclastname = document.getElementById("bclastname").value;
            var basa = document.getElementById("basa").value;
            var expiremonth = document.getElementById("expiremonth").value;
            var expireyear = document.getElementById("expireyear").value;
            if(fname.length == 0)
            {
                document.getElementById("firstnameerror").innerHTML = "invalid";
            }
            else
            {
                document.getElementById("firstnameerror").innerHTML = "";
            }
            if(!checkEmail())
            {
                document.getElementById("emailerror").innerHTML = "invalid";
            }
            else
            {
                document.getElementById("emailerror").innerHTML = "";
            }
            if(gender == "Gender")
            {
                document.getElementById("gendererror").innerHTML = "invalid";
            }
            else
            {
                document.getElementById("gendererror").innerHTML = "";
            }
            if(password.length == 0)
            {
                document.getElementById("passworderror").innerHTML = "invalid";
            }
            else
            {
                document.getElementById("passworderror").innerHTML = "";
            }
            if(sfirstname.length == 0 || slastname.length == 0)
            {
                document.getElementById("sanameerror").innerHTML = "invalid";
            }
            else
            {
                document.getElementById("sanameerror").innerHTML = "";
            }
            if(!checkEmail1())
            {
                document.getElementById("snemailerror").innerHTML = "invalid";
            }
            else
            {
                document.getElementById("snemailerror").innerHTML = "";
            }
            if(sasa.length == 0)
            {
                document.getElementById("sasaerror").innerHTML = "invalid";
            }
            else
            {
                document.getElementById("sasaerror").innerHTML = "";
            }
            if(bcfirstname.length == 0 || bclastname.length == 0)
            {
                document.getElementById("bcnameerror").innerHTML = "invalid";
            }
            else
            {
                document.getElementById("bcnameerror").innerHTML = "";
            }
            if(!checkEmail2())
            {
                document.getElementById("bcemailerror").innerHTML = "invalid";
//                validity = false;
            }
            else
            {
                document.getElementById("bcemailerror").innerHTML = "";
            }
            if(!checkareacode1() || !checkphone1())
            {
                document.getElementById("asphoneerror").innerHTML = "invalid";
//                validity = false;
            }
            else
            {
                document.getElementById("asphoneerror").innerHTML = "";
            }
            if(!checkzipcode1())
            {
                document.getElementById("saziperror").innerHTML = "invalid";
//                validity = false;
            }
            else
            {
                document.getElementById("saziperror").innerHTML = "";
            }
            if(checkphone2())
            {
                document.getElementById("saphoneerror2").innerHTML = "";
//                validity = false;
            }
            else
            {
                document.getElementById("saphoneerror2").innerHTML = "invalid";
            }
            if(checkphone3())
            {
                document.getElementById("bcphoneerror").innerHTML = "";
//                validity = false;
            }
            else
            {
                document.getElementById("bcphoneerror").innerHTML = "invalid";
            }
            if(checkphone4())
            {
                document.getElementById("altbcphoneerror").innerHTML = "";
//                validity = false;
            }
            else
            {
                document.getElementById("altbcphoneerror").innerHTML = "invalid";
            }
            if(basa.length == 0)
            {
                document.getElementById("bastreeterror").innerHTML = "invalid";
            }
            else
            {
                document.getElementById("bastreeterror").innerHTML = "";
            }
            if(!checkzipcode2())
            {
                document.getElementById("baziperror").innerHTML = "invalid";
//                validity = false;
            }
            else
            {
                document.getElementById("baziperror").innerHTML = "";
            }
            if(!checkcreditcard())
            {
                document.getElementById("crediterror").innerHTML = "invalid";
//                validity = false;
            }
            else
            {
                document.getElementById("crediterror").innerHTML = "";
            }
            if(expiremonth=="Month" || expireyear=="Year")
            {
                document.getElementById("expireerror").innerHTML = "invalid";
            }
            else
            {
                document.getElementById("expireerror").innerHTML = "";
            }

//            var picfile = document.getElementById("uploadicon").value.split('/').pop().split('\\').pop();
//            document.getElementById("demo").innerHTML = picfile;

//            var select_gender = document.getElementById("gender");
//            var option_gender = select_gender.options[select_gender.selectedIndex].text;
//            alert(option_gender);
        }
    </script>
</head>
<body style="background-color: #DDDDDD">
<form method="POST" action='updateSubmit.php'>
    <fieldset style="width: 70%; margin: 0 auto; margin-top:50px; background-color: white; border-color: #F5F5F5">
        <div>
            <br>
            <span class="title">Profile</span>
            <fieldset style="border-style: none">
                <HR align=center width=98% color=#C0C0C0  SIZE=0.5 noShade>
                <?php
                echo'
                <div style="float: left; margin-top: 4%; margin-left: 8%">
                    <img src="'.$row[icon].'" width="200px" height="200px"/>
                    <br>
                    <input type="file" name="uploadFile" id="uploadicon"/>
                </div>'
                ?>
                <div style="float: right; margin-right: 6%; margin-top: 15px">
                    <?php
                    echo'
                    <p>
                        <input class="inputinfo" type="text" id="firstname" name="name" style="width: 300px" value="'.$row[name].'" readonly><span class="error" id="firstnameerror"></span>
                    </p>
                    <p>
                        <input class="inputinfo" type="text" id="email" name="email" style="width: 300px" value="'.$row[email].'"><span class="error" id="emailerror"></span>
                    </p>';
                    ?>

                    <p>
                        <select class="select" id="gender" name="select_gender" style="width: 80px">
                            <option value="Gender">Gender</option>
                            <option value="Male"<?php if($row[gender] == 'Male') echo "selected";?>>Male</option>
                            <option value="Female"<?php if($row[gender] == 'Female') echo "selected";?>>Female</option>
                            <option value="Other"<?php if($row[gender] == 'Other') echo "selected";?>>Other</option>
                        </select><span class="error" id="gendererror" style="font-size:9pt; color:red;"></span>
                    </p>


                    <p>
                        <select class="select" id="month" name="select_birth_month" style="width: 95px; margin-right: 4px">
                            <option value="January"<?php if($row[birth_month] == 'January') echo "selected";?>>January</option>
                            <option value="February"<?php if($row[birth_month] == 'February') echo "selected";?>>February</option>
                            <option value="March"<?php if($row[birth_month] == 'March') echo "selected";?>>March</option>
                            <option value="April"<?php if($row[birth_month] == 'April') echo "selected";?>>April</option>
                            <option value="May"<?php if($row[birth_month] == 'May') echo "selected";?>>May</option>
                            <option value="June"<?php if($row[birth_month] == 'June') echo "selected";?>>June</option>
                            <option value="July"<?php if($row[birth_month] == 'July') echo "selected";?>>July</option>
                            <option value="August"<?php if($row[birth_month] == 'August') echo "selected";?>>August</option>
                            <option value="September"<?php if($row[birth_month] == 'September') echo "selected";?>>September</option>
                            <option value="October"<?php if($row[birth_month] == 'October') echo "selected";?>>October</option>
                            <option value="November"<?php if($row[birth_month] == 'November') echo "selected";?>>November</option>
                            <option value="December"<?php if($row[birth_month] == 'December') echo "selected";?>>December</option>
                        </select>
                        <select class="select" id="day" style="margin-right: 4px" name="select_birth_day">
                            <option value="1"<?php if($row[birth_day] == 1) echo "selected";?>>1</option>
                            <option value="2"<?php if($row[birth_day] == 2) echo "selected";?>>2</option>
                            <option value="3"<?php if($row[birth_day] == 3) echo "selected";?>>3</option>
                            <option value="4"<?php if($row[birth_day] == 4) echo "selected";?>>4</option>
                            <option value="5"<?php if($row[birth_day] == 5) echo "selected";?>>5</option>
                            <option value="6"<?php if($row[birth_day] == 6) echo "selected";?>>6</option>
                            <option value="7"<?php if($row[birth_day] == 7) echo "selected";?>>7</option>
                            <option value="8"<?php if($row[birth_day] == 8) echo "selected";?>>8</option>
                            <option value="9"<?php if($row[birth_day] == 9) echo "selected";?>>9</option>
                            <option value="10"<?php if($row[birth_day] == 10) echo "selected";?>>10</option>
                            <option value="11"<?php if($row[birth_day] == 11) echo "selected";?>>11</option>
                            <option value="12"<?php if($row[birth_day] == 12) echo "selected";?>>12</option>
                            <option value="13"<?php if($row[birth_day] == 13) echo "selected";?>>13</option>
                            <option value="14"<?php if($row[birth_day] == 14) echo "selected";?>>14</option>
                            <option value="15"<?php if($row[birth_day] == 15) echo "selected";?>>15</option>
                            <option value="16"<?php if($row[birth_day] == 16) echo "selected";?>>16</option>
                            <option value="17"<?php if($row[birth_day] == 17) echo "selected";?>>17</option>
                            <option value="18"<?php if($row[birth_day] == 18) echo "selected";?>>18</option>
                            <option value="19"<?php if($row[birth_day] == 19) echo "selected";?>>19</option>
                            <option value="20"<?php if($row[birth_day] == 20) echo "selected";?>>20</option>
                            <option value="21"<?php if($row[birth_day] == 21) echo "selected";?>>21</option>
                            <option value="22"<?php if($row[birth_day] == 22) echo "selected";?>>22</option>
                            <option value="23"<?php if($row[birth_day] == 23) echo "selected";?>>23</option>
                            <option value="24"<?php if($row[birth_day] == 24) echo "selected";?>>24</option>
                            <option value="25"<?php if($row[birth_day] == 25) echo "selected";?>>25</option>
                            <option value="26"<?php if($row[birth_day] == 26) echo "selected";?>>26</option>
                            <option value="27"<?php if($row[birth_day] == 27) echo "selected";?>>27</option>
                            <option value="28"<?php if($row[birth_day] == 28) echo "selected";?>>28</option>
                            <option value="29"<?php if($row[birth_day] == 29) echo "selected";?>>29</option>
                            <option value="30"<?php if($row[birth_day] == 30) echo "selected";?>>30</option>
                            <option value="31"<?php if($row[birth_day] == 31) echo "selected";?>>31</option>
                        </select>
                        <select class="select" id="year" name="select_birth_year">
                            <option value="1997"<?php if($row[birth_year] == 1997) echo "selected";?>>1997</option>
                            <option value="1996"<?php if($row[birth_year] == 1996) echo "selected";?>>1996</option>
                            <option value="1995"<?php if($row[birth_year] == 1995) echo "selected";?>>1995</option>
                            <option value="1994"<?php if($row[birth_year] == 1994) echo "selected";?>>1994</option>
                            <option value="1993"<?php if($row[birth_year] == 1993) echo "selected";?>>1993</option>
                            <option value="1992"<?php if($row[birth_year] == 1992) echo "selected";?>>1992</option>
                            <option value="1991"<?php if($row[birth_year] == 1991) echo "selected";?>>1991</option>
                            <option value="1990"<?php if($row[birth_year] == 1990) echo "selected";?>>1990</option>
                            <option value="1989"<?php if($row[birth_year] == 1989) echo "selected";?>>1989</option>
                            <option value="1988"<?php if($row[birth_year] == 1988) echo "selected";?>>1988</option>
                            <option value="1987"<?php if($row[birth_year] == 1987) echo "selected";?>>1987</option>
                            <option value="1986"<?php if($row[birth_year] == 1986) echo "selected";?>>1986</option>
                            <option value="1985"<?php if($row[birth_year] == 1985) echo "selected";?>>1985</option>
                            <option value="1984"<?php if($row[birth_year] == 1984) echo "selected";?>>1984</option>
                            <option value="1983"<?php if($row[birth_year] == 1983) echo "selected";?>>1983</option>
                            <option value="1982"<?php if($row[birth_year] == 1982) echo "selected";?>>1982</option>
                            <option value="1981"<?php if($row[birth_year] == 1981) echo "selected";?>>1981</option>
                            <option value="1980"<?php if($row[birth_year] == 1980) echo "selected";?>>1980</option>
                            <option value="1979"<?php if($row[birth_year] == 1979) echo "selected";?>>1979</option>
                            <option value="1978"<?php if($row[birth_year] == 1978) echo "selected";?>>1978</option>
                            <option value="1977"<?php if($row[birth_year] == 1977) echo "selected";?>>1977</option>
                            <option value="1976"<?php if($row[birth_year] == 1976) echo "selected";?>>1976</option>
                            <option value="1975"<?php if($row[birth_year] == 1975) echo "selected";?>>1975</option>
                            <option value="1974"<?php if($row[birth_year] == 1974) echo "selected";?>>1974</option>
                            <option value="1973"<?php if($row[birth_year] == 1973) echo "selected";?>>1973</option>
                            <option value="1972"<?php if($row[birth_year] == 1972) echo "selected";?>>1972</option>
                            <option value="1971"<?php if($row[birth_year] == 1971) echo "selected";?>>1971</option>
                            <option value="1970"<?php if($row[birth_year] == 1970) echo "selected";?>>1970</option>
                            <option value="1969"<?php if($row[birth_year] == 1969) echo "selected";?>>1969</option>
                            <option value="1968"<?php if($row[birth_year] == 1968) echo "selected";?>>1968</option>
                            <option value="1967"<?php if($row[birth_year] == 1967) echo "selected";?>>1967</option>
                            <option value="1966"<?php if($row[birth_year] == 1966) echo "selected";?>>1966</option>
                            <option value="1965"<?php if($row[birth_year] == 1965) echo "selected";?>>1965</option>
                            <option value="1964"<?php if($row[birth_year] == 1964) echo "selected";?>>1964</option>
                            <option value="1963"<?php if($row[birth_year] == 1963) echo "selected";?>>1963</option>
                            <option value="1962"<?php if($row[birth_year] == 1962) echo "selected";?>>1962</option>
                            <option value="1961"<?php if($row[birth_year] == 1961) echo "selected";?>>1961</option>
                            <option value="1960"<?php if($row[birth_year] == 1960) echo "selected";?>>1960</option>
                            <option value="1959"<?php if($row[birth_year] == 1959) echo "selected";?>>1959</option>
                            <option value="1958"<?php if($row[birth_year] == 1958) echo "selected";?>>1958</option>
                            <option value="1957"<?php if($row[birth_year] == 1957) echo "selected";?>>1957</option>
                            <option value="1956"<?php if($row[birth_year] == 1956) echo "selected";?>>1956</option>
                            <option value="1955"<?php if($row[birth_year] == 1955) echo "selected";?>>1955</option>
                            <option value="1954"<?php if($row[birth_year] == 1954) echo "selected";?>>1954</option>
                            <option value="1953"<?php if($row[birth_year] == 1953) echo "selected";?>>1953</option>
                            <option value="1952"<?php if($row[birth_year] == 1952) echo "selected";?>>1952</option>
                            <option value="1951"<?php if($row[birth_year] == 1951) echo "selected";?>>1951</option>
                            <option value="1950"<?php if($row[birth_year] == 1950) echo "selected";?>>1950</option>
                            <option value="1949"<?php if($row[birth_year] == 1949) echo "selected";?>>1949</option>
                            <option value="1948"<?php if($row[birth_year] == 1948) echo "selected";?>>1948</option>
                            <option value="1947"<?php if($row[birth_year] == 1947) echo "selected";?>>1947</option>
                            <option value="1946"<?php if($row[birth_year] == 1946) echo "selected";?>>1946</option>
                            <option value="1945"<?php if($row[birth_year] == 1945) echo "selected";?>>1945</option>
                            <option value="1944"<?php if($row[birth_year] == 1944) echo "selected";?>>1944</option>
                            <option value="1943"<?php if($row[birth_year] == 1943) echo "selected";?>>1943</option>
                            <option value="1942"<?php if($row[birth_year] == 1942) echo "selected";?>>1942</option>
                            <option value="1941"<?php if($row[birth_year] == 1941) echo "selected";?>>1941</option>
                            <option value="1940"<?php if($row[birth_year] == 1940) echo "selected";?>>1940</option>
                            <option value="1939"<?php if($row[birth_year] == 1939) echo "selected";?>>1939</option>
                            <option value="1938"<?php if($row[birth_year] == 1938) echo "selected";?>>1938</option>
                            <option value="1937"<?php if($row[birth_year] == 1937) echo "selected";?>>1937</option>
                            <option value="1936"<?php if($row[birth_year] == 1936) echo "selected";?>>1936</option>
                            <option value="1935"<?php if($row[birth_year] == 1935) echo "selected";?>>1935</option>
                            <option value="1934"<?php if($row[birth_year] == 1934) echo "selected";?>>1934</option>
                            <option value="1933"<?php if($row[birth_year] == 1933) echo "selected";?>>1933</option>
                            <option value="1932"<?php if($row[birth_year] == 1932) echo "selected";?>>1932</option>
                            <option value="1931"<?php if($row[birth_year] == 1931) echo "selected";?>>1931</option>
                            <option value="1930"<?php if($row[birth_year] == 1930) echo "selected";?>>1930</option>
                            <option value="1929"<?php if($row[birth_year] == 1929) echo "selected";?>>1929</option>
                            <option value="1928"<?php if($row[birth_year] == 1928) echo "selected";?>>1928</option>
                            <option value="1927"<?php if($row[birth_year] == 1927) echo "selected";?>>1927</option>
                            <option value="1926"<?php if($row[birth_year] == 1926) echo "selected";?>>1926</option>
                            <option value="1925"<?php if($row[birth_year] == 1925) echo "selected";?>>1925</option>
                            <option value="1924"<?php if($row[birth_year] == 1924) echo "selected";?>>1924</option>
                            <option value="1923"<?php if($row[birth_year] == 1923) echo "selected";?>>1923</option>
                            <option value="1922"<?php if($row[birth_year] == 1922) echo "selected";?>>1922</option>
                            <option value="1921"<?php if($row[birth_year] == 1921) echo "selected";?>>1921</option>
                            <option value="1920"<?php if($row[birth_year] == 1920) echo "selected";?>>1920</option>
                            <option value="1919"<?php if($row[birth_year] == 1919) echo "selected";?>>1919</option>
                            <option value="1918"<?php if($row[birth_year] == 1918) echo "selected";?>>1918</option>
                            <option value="1917"<?php if($row[birth_year] == 1917) echo "selected";?>>1917</option>
                            <option value="1916"<?php if($row[birth_year] == 1916) echo "selected";?>>1916</option>
                            <option value="1915"<?php if($row[birth_year] == 1915) echo "selected";?>>1915</option>
                        </select>
                    </p>
                    <?php
                    echo'
                    <p>
                        <input class="inputinfo" id="password" type="text" name="password" style="width: 300px" value="'.$row[password].'"><span class="error" id="passworderror" style="font-size:9pt; color:red;"></span>
                    </p>';
//                    $select = $_POST['select_gender'];
//                    echo $select;
//                    ?>
                </div>
                <div style="float: right; margin-right: 3%; text-align: right">
                    <p class="profile" style="margin-top: 37px">Name</p>
                    <p class="profile">Email</p>
                    <p class="profile">I am</p>
                    <p class="profile">Birth Date</p>
                    <p class="profile">Password</p>
                </div>
            </fieldset>

            <span class="title">Shipping Address</span>
            <fieldset style="border-style: none">
                <HR align=center width=98% color=#C0C0C0  SIZE=0.5 noShade>
                <div style="float: left; margin-left: 6%">
                    <p class="subtitle" style="margin-left: -5%">Shipping Address</p>
                    <?php
                    echo'
                    <p>
                        <input type="text" class="inputinfo" id="sfirstname" name="shipping_fn" placeholder="First Name" style="width: 140px; margin-right: 4px"  value="'.$row[shipping_fn].'">
                        <input type="text" class="inputinfo" id="slastname" name="shipping_ln" placeholder="Last Name" style="width: 234px"  value="'.$row[shipping_ln].'">
                        <span class="error" id="sanameerror"></span>
                    </p>
                    <p>
                        <input type="text" class="inputinfo" id="scompanyname" name="shipping_company" placeholder="Company Name (optional)" value="'.$row[shipping_company].'">
                    </p>
                    <p>
                        <input type="text" class="inputinfo" id="saareacode" maxlength="3" name="shipping_area_code" placeholder="Area Code" style="width: 101px; margin-right: 4px" value="'.$row[shipping_area_code].'">
                        <input type="text" class="inputinfo" id="saphone" maxlength="8" name="shipping_phone" placeholder="Primary Phone" style="width: 273px" value="'.$row[shipping_phone].'">
                        <span class="error" id="asphoneerror"></span>
                    </p>
                    <p>
                        <input type="text" class="inputinfo" id="sasa" name="shipping_address" placeholder="Street Address" value="'.$row[shipping_address].'">
                        <span class="error" id="sasaerror"></span>
                    </p>
                    <p>
                        <input type="text" class="inputinfo" id="aptnum" name="shipping_apt" placeholder="Apt, Suite, Bldg. (optional)" value="'.$row[shipping_apt].'">
                    </p>
                    <p>
                        <input type="text" class="inputinfo" id="sazipcode" maxlength="10" name="shipping_zipcode" placeholder="ZIP Code" style="width: 101px" value="'.$row[shipping_zipcode].'">
                        <span class="mentioninfo">Enter ZIP for City and State</span>
                        <span class="error" id="saziperror"></span>
                    </p>'
                    ?>
                </div>

                <div style="float: right; margin-right: 6%">
                    <p class="subtitle" style="margin-left: -5%">Shipping Notifications</p>
                    <?php
                    echo'
                    <p>
                        <input type="text" class="inputinfo" id="snemail" name="notification_email" placeholder="Email Address" value="'.$row[notification_email].'">
                        <span class="error" id="snemailerror"></span>
                    </p>
                    <p>
                        <input type="text" class="inputinfo" id="snareacode" name="notification_area_code" placeholder="Area Code" maxlength="3" style="width: 101px; margin-right: 4px" value="'.$row[notification_area_code].'">
                        <input type="text" class="inputinfo" id="snmobile" name="notification_phone" placeholder="Mobile Phone (optional)" maxlength="8" style="width: 273px" value="'.$row[notification_phone].'">
                        <span class="error" id="saphoneerror2"></span>
                    </p>'
                    ?>
                    <p class="subtitle" style="margin-left: -5%">Toyota Shipping Policy</p>
                    <ul>
                        <li><p class="greytext">Signature may be required for delivery</p></li>
                        <li><p class="greytext">We do not ship to P.O. boxes</p></li>
                        <li><p class="greytext">Delivery estimates below include item preparation and shipping time</p></li>
                        <li><p class="greytext">We do not ship directly to APO/FPO addresses.</p></li>
                    </ul>
                </div>
            </fieldset>

            <span class="title">Payment</span>
            <fieldset style="border-style: none">
                <HR align=center width=98% color=#C0C0C0  SIZE=0.5 noShade>
                <div style="float: left;margin-left: 6%">
                    <p class="subtitle" style="margin-left: -5%">Billing Contact</p>
                    <?php
                    echo'
                    <p>
                        <input type="text" class="inputinfo" id="bcfirstname" name="bill_fn" placeholder="First Name" style="width: 140px; margin-right: 4px" value="'.$row[bill_fn].'">
                        <input type="text" class="inputinfo" id="bclastname" name="bill_ln" placeholder="Last Name" style="width: 234px" value="'.$row[bill_ln].'">
                        <span class="error" id="bcnameerror"></span>
                    </p>
                    <p>
                        <input type="text" class="inputinfo" id="bcareacode" name="bill_area_code" placeholder="Area Code" maxlength="3" style="width: 101px; margin-right: 4px" value="'.$row[bill_area_code].'">
                        <input type="text" class="inputinfo" id="bcphone" name="bill_phone" placeholder="Primary Phone" maxlength="8" style="width: 273px" value="'.$row[bill_phone].'">
                        <span class="error" id="bcphoneerror"></span>
                    </p>
                    <p>
                        <input type="text" class="inputinfo" id="bcareacodealternate" name="bill_alt_area_code" placeholder="Area Code" maxlength="3" style="width: 101px; margin-right: 4px" value="'.$row[bill_alt_area_code].'">
                        <input type="text" class="inputinfo" id="alternatephone" name="bill_alt_phone" placeholder="Alternate Phone (optional)" maxlength="8" style="width: 273px" value="'.$row[bill_alt_phone].'">
                        <span class="error" id="altbcphoneerror"></span>
                    </p>
                    <p>
                        <input type="text" class="inputinfo" id="bcemail" name="bill_email" placeholder="Email Address" value="'.$row[bill_email].'">
                        <span class="error" id="bcemailerror"></span>
                    </p>'
                    ?>
                </div>

                <div style="float: right;margin-right: 6%">
                    <p class="subtitle" style="margin-left: -5%">Billing Address</p>
                    <?php
                    echo'
                    <p>
                        <input type="text" class="inputinfo" id="bacompanyname" name="ba_company" placeholder="Company Name (optional)" value="'.$row[ba_company].'">
                    </p>
                    <p>
                        <input type="text" class="inputinfo" id="basa" name="ba_address" placeholder="Street Address" value="'.$row[ba_address].'">
                        <span class="error" id="bastreeterror"></span>
                    </p>
                    <p>
                        <input type="text" class="inputinfo" id="baaptnum" name="ba_apt" placeholder="Apt, Suite, Bldg. (optional)" value="'.$row[ba_apt].'">
                    </p>
                    <p>
                        <input type="text" class="inputinfo" id="bazipcode" name="ba_zipcode" placeholder="ZIP Code" maxlength="10" style="width: 101px" value="'.$row[ba_zipcode].'">
                        <span class="mentioninfo">Enter ZIP for City and State</span>
                        <span class="error" id="baziperror"></span>
                    </p>'
                    ?>
                </div>
                <div style="float: left; margin-left: 6%">
                    <p class="subtitle" style="margin-left: -5%">Payment Method</p>
                    <p>
                        <input type="radio" class="creditcard" value="visa" name="pay" style="margin-left: 0" checked <?php if($row['card_type'] == 'visa') echo "checked";?>><img src="visa.png" class="creditcardimg">
                        <input type="radio" class="creditcard" value="mastercard" name="pay" <?php if($row['card_type'] == 'mastercard') echo "checked";?>><img src="mastercard.png" class="creditcardimg">
                        <input type="radio" class="creditcard" value="americanexpress" name="pay" <?php if($row['card_type'] == 'americanexpress') echo "checked";?>><img src="amex.png" class="creditcardimg">
                        <input type="radio" class="creditcard" value="discover" name="pay" <?php if($row['card_type'] == 'discover') echo "checked";?>><img src="discover.png" class="creditcardimg">
                    </p>
                    <?php
                    echo'
                    <p>
                        <input type="text" class="inputinfo" id="cardnum" name="credit_card_num" placeholder="Debit/Credit Card Number" maxlength="16" style="width: 244px;margin-right: 4px" value="'.$row[credit_card_num].'">
                        <input type="text" class="inputinfo" id="securitycode" name="security_code" placeholder="Security Code" maxlength="3" style="width: 130px" value="'.$row[security_code].'">
                        <span class="error" id="crediterror"></span>
                    </p>
                    '
                    ?>
                    <p>
                        <span id="expireinfo">Expires</span>
                        <select class="select" id="expiremonth" style="margin-right: 4px" name="expire_month">
                            <option value="Month">Month</option>
                            <option value="1"<?php if($row['expiration_month'] == 1) echo "selected";?>>1</option>
                            <option value="2"<?php if($row['expiration_month'] == 2) echo "selected";?>>2</option>
                            <option value="3"<?php if($row['expiration_month'] == 3) echo "selected";?>>3</option>
                            <option value="4"<?php if($row['expiration_month'] == 4) echo "selected";?>>4</option>
                            <option value="5"<?php if($row['expiration_month'] == 5) echo "selected";?>>5</option>
                            <option value="6"<?php if($row['expiration_month'] == 6) echo "selected";?>>6</option>
                            <option value="7"<?php if($row['expiration_month'] == 7) echo "selected";?>>7</option>
                            <option value="8"<?php if($row['expiration_month'] == 8) echo "selected";?>>8</option>
                            <option value="9"<?php if($row['expiration_month'] == 9) echo "selected";?>>9</option>
                            <option value="10"<?php if($row['expiration_month'] == 10) echo "selected";?>>10</option>
                            <option value="11"<?php if($row['expiration_month'] == 11) echo "selected";?>>11</option>
                            <option value="12"<?php if($row['expiration_month'] == 12) echo "selected";?>>12</option>
                        </select>
                        <select class="select" id="expireyear" name="expire_year">
                            <option value="Year">Year</option>
                            <option value="2015"<?php if($row['expiration_year'] == 2015) echo "selected";?>>2015</option>
                            <option value="2016"<?php if($row['expiration_year'] == 2016) echo "selected";?>>2016</option>
                            <option value="2017"<?php if($row['expiration_year'] == 2017) echo "selected";?>>2017</option>
                            <option value="2018"<?php if($row['expiration_year'] == 2018) echo "selected";?>>2018</option>
                            <option value="2019"<?php if($row['expiration_year'] == 2019) echo "selected";?>>2019</option>
                            <option value="2020"<?php if($row['expiration_year'] == 2020) echo "selected";?>>2020</option>
                            <option value="2021"<?php if($row['expiration_year'] == 2021) echo "selected";?>>2021</option>
                            <option value="2022"<?php if($row['expiration_year'] == 2022) echo "selected";?>>2022</option>
                            <option value="2023"<?php if($row['expiration_year'] == 2023) echo "selected";?>>2023</option>
                            <option value="2024"<?php if($row['expiration_year'] == 2024) echo "selected";?>>2024</option>
                            <option value="2025"<?php if($row['expiration_year'] == 2025) echo "selected";?>>2025</option>
                            <option value="2026"<?php if($row['expiration_year'] == 2026) echo "selected";?>>2026</option>
                            <option value="2027"<?php if($row['expiration_year'] == 2027) echo "selected";?>>2027</option>
                            <option value="2028"<?php if($row['expiration_year'] == 2028) echo "selected";?>>2028</option>
                            <option value="2029"<?php if($row['expiration_year'] == 2029) echo "selected";?>>2029</option>
                            <option value="2030"<?php if($row['expiration_year'] == 2030) echo "selected";?>>2030</option>
                            <option value="2031"<?php if($row['expiration_year'] == 2031) echo "selected";?>>2031</option>
                            <option value="2032"<?php if($row['expiration_year'] == 2032) echo "selected";?>>2032</option>
                            <option value="2033"<?php if($row['expiration_year'] == 2033) echo "selected";?>>2033</option>
                            <option value="2034"<?php if($row['expiration_year'] == 2034) echo "selected";?>>2034</option>
                            <option value="2035"<?php if($row['expiration_year'] == 2035) echo "selected";?>>2035</option>
                        </select>
                        <span class="error" id="expireerror"></span>
                    </p>
                </div>
            </fieldset>
        </div>
    </fieldset>
    <input type="submit" id="submit" name="updatesubmit" value="Save" onClick="checkvalidatity()"/>
    <?php
        require 'bottom.html';
    ?>
</form>
</body>
</html>