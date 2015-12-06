<?php
require 'header_login.php';
?>
<html>
<head>
    <style>
        #vehicletype
        {
            margin-top: 10%;
            margin-bottom: 1%;
        }
        select
        {
            background: #f8f8f8;
            height: 35px;
        }
        span
        {
            /*border-style: solid;*/
            width: 400px;
            display: inline-block;
            font-family: sans-serif;
            margin-left: 30%;
        }
        #minprice
        {
            margin-bottom: 1%;
        }
        #maxprice
        {
            margin-bottom: 1%;
        }
        #color
        {
            margin-bottom: 1%;
        }
        #search
        {
            margin-top: 5%;
            width: 100px;
            height: 35px;
            background-color: #00BBFF;
            font-family: Microsoft YaHei;
            font-size: 14px;
            border-radius: 3px;
            color: white;
        }
        #searchbutton
        {
            text-align: center;
            margin-bottom: 15%;
        }
    </style>
</head>

<body style="background-color: #DDDDDD">
<form id="searchresult" method="post" action="list_result.php">
<div id="vehicletype">
    <span>Select the vehicle type you like: </span>
    <select id="vehicleframe" name="selectvehicletype">
        <option>Cars & Minivan</option>
        <option>Trucks</option>
        <option>Crossovers & SUVs</option>
        <option>Hybrids & EVs</option>
        <option>Upcoming Vehicles</option>
        <option>I don't care</option>
    </select>
</div>

<div id="minprice">
    <span>Select the bottom price: </span>
<select name="selectminprice">
    <option>14000</option>
    <option>16000</option>
    <option>18000</option>
    <option>20000</option>
    <option>23000</option>
    <option>26000</option>
    <option>29000</option>
    <option>32000</option>
    <option>35000</option>
    <option>38000</option>
    <option>41000</option>
    <option>45000</option>
    <option>50000</option>
</select>
</div>

<div id="maxprice">
    <span>Select the maximal price you could afford: </span>
<select name="selectmaxprice">
    <option>16000</option>
    <option>18000</option>
    <option>20000</option>
    <option>23000</option>
    <option>26000</option>
    <option>29000</option>
    <option>32000</option>
    <option>35000</option>
    <option>38000</option>
    <option>41000</option>
    <option>45000</option>
    <option>50000</option>
    <option>90000</option>
</select>
</div>

<div id="color">
    <span>Select the color you want: </span>
<select name="selectcolor">
    <option>white</option>
    <option>black</option>
    <option>red</option>
    <option>green</option>
    <option>blue</option>
    <option>silver</option>
    <option>grey</option>
    <option>pearl</option>
    <option>brown</option>
    <option>orange</option>
    <option>I don't care</option>
</select>
</div>

<div id="searchbutton">
        <input type="submit" value="Search" id="search" name="searchbutton">
</div>
</form>
<?php
require 'bottom.html';
?>
</body>
</html>