<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
//Kết nối
$ketnoi = mysqli_connect('localhost','thuyallnet_chanle','thuyallnet_chanle','thuyallnet_chanle') or die('Vui lòng kết nối database');
mysqli_query($ketnoi,"SET NAMES 'UTF8'");
//thời gian
$tenmien = 'https://nguvailon.com';
$thoigian = date('d/m/Y - H:i:s');
$time = time();
$ip = $_SERVER['REMOTE_ADDR'];



function id_post($length){
        $id_post = openssl_random_pseudo_bytes($length);
        $id_post = bin2hex($id_post);
        return $id_post;

    }
?>