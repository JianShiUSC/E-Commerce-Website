<?php
session_start();
$sql = "SELECT * FROM cart INNER JOIN product on cart.productid = product.productid WHERE customer_email = '".$_SESSION[email]."'";
$con = mysql_connect('localhost', 'root', 'Shijian1');
if (!$con)
{
    die('Connection Failed');
}
mysql_select_db('test', $con);
$res = mysql_query($sql);
$count = 0;
while($row = mysql_fetch_assoc($res)) {
    echo '
    <div id="product">

        <div id="checkbox">
            <input type="checkbox" name="choosetocheckout[]" class="check" onclick="handleClick(this);" value='.$row[product_price].'>
        </div>

        <div id="pic">
            <img src="' . $row[product_front] . '" id="showpic">
        </div>

        <div id="name">
            <p id="productname">' . $row[productname] . '</p>
        </div>

        <div id="description">
            <p id="details">Color: green</p>
            <p id="details">Category: ' . $row[productcategory] . '</p>
        </div>

        <div id="price">
            <p id="unit_price">' . $row[product_price] . '</p>
        </div>

        <div id="quantity">
            <p id="total_quantity">' . $row[quantity] . '</p>
        </div>

        <div id="total">
            <p id="total_price">' . $row[product_price] * $row[quantity] . '</p>
        </div>

        <div id="operation">
        <a href="remove.php?id='.$row[productid].'" style="text-decoration:none; color:black">
            <p id="handle">remove</p>
        </a>
        </div>
    </div>';
    $count++;
}
if($count == 0)
{
    require "empty_cart.php";
}
?>

<html>
<head>
    <script type="text/javascript">
        var sum = 0;
        function handleClick(cb)
        {
            var checkedValue = 0;
            var inputElements = document.getElementsByClassName('check');
            for(var i=0; inputElements[i]; ++i)
            {
                if(inputElements[i].checked)
                {
                    checkedValue += parseInt(inputElements[i].value);
                }
            }
            document.getElementById("unique").innerHTML = checkedValue;
        }
    </script>
</head>
</html>