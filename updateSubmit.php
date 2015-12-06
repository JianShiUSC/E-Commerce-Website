<?php
if(isset($_POST['updatesubmit']))
{
    $icon = $_POST['uploadFile'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['select_gender'];
    $birth_month = $_POST['select_birth_month'];
    $birth_day = $_POST['select_birth_day'];
    $birth_year = $_POST['select_birth_year'];
    $password = $_POST['password'];
    $shipping_fn = $_POST['shipping_fn'];
    $shipping_ln = $_POST['shipping_ln'];
    $shipping_company = $_POST['shipping_company'];
    $shipping_area_code = $_POST['shipping_area_code'];
    $shipping_phone = $_POST['shipping_phone'];
    $shipping_address = $_POST['shipping_address'];
    $shipping_apt = $_POST['shipping_apt'];
    $shipping_zipcode = $_POST['shipping_zipcode'];
    $notification_email = $_POST['notification_email'];
    $notification_area_code = $_POST['notification_area_code'];
    $notification_phone = $_POST['notification_phone'];
    $bill_fn = $_POST['bill_fn'];
    $bill_ln = $_POST['bill_ln'];
    $bill_area_code = $_POST['bill_area_code'];
    $bill_phone = $_POST['bill_phone'];
    $bill_alt_area_code = $_POST['bill_alt_area_code'];
    $bill_alt_phone = $_POST['bill_alt_phone'];
    $bill_email = $_POST['bill_email'];;
    $ba_company = $_POST['ba_company'];
    $ba_address = $_POST['ba_address'];
    $ba_apt = $_POST['ba_apt'];
    $ba_zipcode = $_POST['ba_zipcode'];
    $card_type = $_POST['pay'];
    $credit_card_num = $_POST['credit_card_num'];
    $security_code = $_POST['security_code'];
    $expiration_month = $_POST['expire_month'];
    $expiration_year = $_POST['expire_year'];



    $con = mysql_connect('localhost', 'root', 'Shijian1');
    if(!con)
    {
        die("Connection Failed");
    }
    mysql_select_db('test', $con);

    if(empty($icon))
    {
        $sql = "UPDATE Customer SET email='".$email."', gender='".$gender."', birth_month='".$birth_month."', birth_day=".$birth_day.", birth_year=".$birth_year.", password='".$password."', shipping_fn='".$shipping_fn."', shipping_ln='".$shipping_ln."', shipping_company='".$shipping_company."', shipping_area_code='".$shipping_area_code."', shipping_phone='".$shipping_phone."', shipping_address='".$shipping_address."', shipping_apt='".$shipping_apt."', shipping_zipcode='".$shipping_zipcode."', notification_email='".$notification_email."', notification_area_code='".$notification_area_code."', notification_phone='".$notification_phone."', bill_fn='".$bill_fn."', bill_ln='".$bill_ln."', bill_area_code='".$bill_area_code."', bill_phone='".$bill_phone."', bill_alt_area_code='".$bill_alt_area_code."', bill_alt_phone='".$bill_alt_phone."', bill_email='".$bill_email."', ba_company='".$ba_company."', ba_address='".$ba_address."', ba_apt='".$ba_apt."', ba_zipcode='".$ba_zipcode."', card_type='".$card_type."', credit_card_num='".$credit_card_num."', security_code='".$security_code."', expiration_month=".$expiration_month.", expiration_year=".$expiration_year." WHERE name='".$name."'";
    }
    else
    {
//    $sql = "UPDATE Customer SET firstname='".$firstname."', usertype='".$usertype."', lastname='".$lastname."', salary=".$salary.", age=".$age.", gender='".$gender."', position='".$position."', entrytime='".$entrytime."' WHERE userindex=".$id."";
        $sql = "UPDATE Customer SET icon='" . $icon . "', email='" . $email . "', gender='" . $gender . "', birth_month='" . $birth_month . "', birth_day=" . $birth_day . ", birth_year=" . $birth_year . ", password='" . $password . "', shipping_fn='" . $shipping_fn . "', shipping_ln='" . $shipping_ln . "', shipping_company='" . $shipping_company . "', shipping_area_code='" . $shipping_area_code . "', shipping_phone='" . $shipping_phone . "', shipping_address='" . $shipping_address . "', shipping_apt='" . $shipping_apt . "', shipping_zipcode='" . $shipping_zipcode . "', notification_email='" . $notification_email . "', notification_area_code='" . $notification_area_code . "', notification_phone='" . $notification_phone . "', bill_fn='" . $bill_fn . "', bill_ln='" . $bill_ln . "', bill_area_code='" . $bill_area_code . "', bill_phone='" . $bill_phone . "', bill_alt_area_code='" . $bill_alt_area_code . "', bill_alt_phone='" . $bill_alt_phone . "', bill_email='" . $bill_email . "', ba_company='" . $ba_company . "', ba_address='" . $ba_address . "', ba_apt='" . $ba_apt . "', ba_zipcode='" . $ba_zipcode . "', card_type='" . $card_type . "', credit_card_num='" . $credit_card_num . "', security_code='" . $security_code . "', expiration_month=" . $expiration_month . ", expiration_year=" . $expiration_year . " WHERE name='" . $name . "'";
    }
    mysql_query($sql);
    mysql_close($con);
//    echo "success!!!";
    require("updatesuccess.php");
}
?>