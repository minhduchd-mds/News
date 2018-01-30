<?php
/**
 *
 * Created by PhpStorm.
 * User: Duc
 * Date: 1/28/2018
 * Time: 4:40 PM
 */
require_once 'Db/db.php';
require_once 'server.php';

//  tạo fooder lấy cổng cho hình ảnh
$file_path="http://localhost/News/";
if(isset($_SESSION['username'])) {
    if (isset($_POST['add-html'])) {
        $category = mysqli_real_escape_string($conn, $_POST['category']);
        $kind = mysqli_real_escape_string($conn, $_POST['kind']);
//    $images =  mysqli_real_escape_string($conn, $_POST['images']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $content = mysqli_real_escape_string($conn, $_POST['content']);

        // Nếu người dùng có chọn file để upload photo
        $dir = "../upload/";
        $url_text = "../post/";
        $name_img = stripslashes($_FILES['images']['name']);
        $source_img = $_FILES['images']['tmp_name'];

        // Lấy ngày, tháng, năm hiện tại
        $day_current = substr($date_current, 8, 2);
        $month_current = substr($date_current, 5, 2);
        $year_current = substr($date_current, 0, 4);

        // Tạo folder năm hiện tại
        if (!is_dir($dir . $year_current)) {
            mkdir($dir . $year_current . '/');
        }

        // Tạo folder tháng hiện tại
        if (!is_dir($dir . $year_current . '/' . $month_current)) {
            mkdir($dir . $year_current . '/' . $month_current . '/');
        }

        // Tạo folder ngày hiện tại
        if (!is_dir($dir . $year_current . '/' . $month_current . '/' . $day_current)) {
            mkdir($dir . $year_current . '/' . $month_current . '/' . $day_current . '/');
        }

        $path_img = $dir . $year_current . '/' . $month_current . '/' . $day_current . '/' . $name_img; // Đường dẫn thư mục chứa file
//    $file_url = $url_text.$year_current.'/'.$month_current.'/'.$day_current.'/'.$name_img;
        move_uploaded_file($source_img, $path_img); // Upload file
        $url_img = substr($path_img, 3); // Đường dẫn file

//    insert sql
        $query = "INSERT INTO post (category, kind, images, title, content ) 
					  VALUES('$category', '$kind', '$url_img', '$title', '$content')";
        mysqli_query($conn, $query);
        header("location: add.php");

    }
}else {
    header("location: index.php");
}