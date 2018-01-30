<?php
session_start();

// connect to database
$conn = mysqli_connect('localhost', 'root', '', 'news-mds');
// connect to database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// Change character set to utf8
mysqli_set_charset($db,"utf8");
mysqli_set_charset($conn,"utf8");

// Thông tin chung
$_DOMAIN = 'http://localhost/News/admin/';
// lấy url hình ảnh
$url="http://localhost/News/";
date_default_timezone_set('Asia/Ho_Chi_Minh');
$date_current = '';
$date_current = date("Y-m-d H:i:sa");
