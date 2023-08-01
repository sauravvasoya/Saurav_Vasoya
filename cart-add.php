<?php
session_start();
require 'connection.php';
require 'user-check.php';
if(isset($_POST["submit"]))
{
    $user_id=$get_user_id;
    $product_id=$_POST["product_id"];
    $query_cart = mysqli_query($connection,"SELECT * FROM `tbl_cart` WHERE `user_id`='{$user_id}' and `product_id`='{$product_id}'");
    $count_cart=mysqli_num_rows($query_cart);
    if($count_cart==0)
    {
    $query_ins = mysqli_query($connection,"INSERT INTO `tbl_cart`( `user_id`, `product_id`, `cart_qty`) VALUES ('{$user_id}','{$product_id}','1')");
    if($query_ins)
    {
        echo "<script>alert('Your product added to cart succesfully');window.location='cart-list.php';</script>";
    }
    }
    else{
        echo "<script>alert('This product already exist in cart!');window.location='cart-list.php';</script>";
        
    }
} 
?>