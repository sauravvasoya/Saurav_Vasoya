<?php
session_start();
require 'connection.php';
require 'user-check.php';
if(isset($_POST["submit"]))
{

    $user_id=$_POST["user_id"];
    $user_name=$_POST["user_name"];
    $phonenumber=$_POST["phonenumber"];
    $user_address=$_POST["user_address"];

    $query_user_update = mysqli_query($connection,"UPDATE `tbl_usermaster` SET `user_name`='{$user_name}',`phonenumber`='{$phonenumber}',`user_address`='{$user_address}' WHERE `user_id`='{$user_id}'");
    
    $order_amount=$_POST["order_amount"];
    $payment_method=$_POST["payment_method"];
    
    $order_date=date("Y-m-d");
    
    $query_order = mysqli_query($connection,"INSERT INTO `tbl_order`(`user_id`, `order_date`, `order_amount`,`order_status`,`payment_method`) VALUES ('{$user_id}','{$order_date}','{$order_amount}','Pending','{$payment_method}')");
    if($query_order)
    {

        $order_id=mysqli_insert_id($connection);

        $query_cart = mysqli_query($connection,"select * from tbl_cart where user_id='{$user_id}'");
        while($row= mysqli_fetch_array($query_cart)){ 
            $query_product = mysqli_query($connection,"select * from tbl_product where product_id='{$row["product_id"]}'");
            $product_data=mysqli_fetch_array($query_product);
            $product_id=$row["product_id"];
            $product_price=$product_data["product_price"];
            $cart_qty=$row["cart_qty"];
            $total = $product_price*$cart_qty;

            $query_order_detail = mysqli_query($connection,"INSERT INTO `tbl_orderdetails`(`order_id`, `product_id`, `quantity`, `order_status`, `order_amount`) VALUES ('{$order_id}','{$product_id}','{$cart_qty}','Pending','{$total}')");
        }

        $query_delete = mysqli_query($connection,"DELETE FROM `tbl_cart` WHERE `user_id`='{$user_id}'");
        if($query_delete)
        {
            echo "<script>alert('Your order added succesfully');window.location='order.php';</script>";
        }
    }
   
} 
?>