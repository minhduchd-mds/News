
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tin tức</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <!--Import Style-->
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    <header>
        <nav id="nav">
            <div class="nav-wrapper">
               <div class="container">
                   <a href="#" class="brand-logo"><img src="images/text-lines.png"></a>
                   <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                   <ul class="right hide-on-med-and-down">
                       <li><a href="#">Trang Chủ</a></li>
                       <li><a class="dropdown-button" href="#" data-beloworigin="true" data-activates="kinh">Kinh Tế</a></li>
                       <li><a class="dropdown-button" href="#" data-beloworigin="true" data-activates="giao">Giáo Dục</a></li>
                       <li><a class="dropdown-button" href="#" data-beloworigin="true" data-activates="the">Thể Thao</a></li>
                       <li><a class="dropdown-button" href="#" data-beloworigin="true" data-activates="giai">Giải Trí</a></li>
                       <li><a href="#" >Pháp Luật</a></li>
                       <li><a class="dropdown-button" href="#" data-beloworigin="true" data-activates="cong">Công Nghệ</a></li>
                       <li><a class="dropdown-button" href="#" data-beloworigin="true" data-activates="lam">Làm Đẹp</a></li>
                       <li><a  href="admin/index.php">Đăng nhập</a></li>
                       <li class="button-"><a href="#"><i class="material-icons">search</i></a></li>
                   </ul>
                   <ul class="side-nav" id="mobile-demo">
                       <li><a href="#">Trang Chủ</a></li>
                       <li><a href="#">Kinh Tế</a></li>
                       <li><a href="#">Giáo Dục</a></li>
                       <li><a href="#">Thể Thao</a></li>
                       <li><a href="#">Giải Trí</a></li>
                       <li><a href="#" >Pháp Luật</a></li>
                       <li><a href="#">Công Nghệ</a></li>
                       <li><a href="#">Làm Đẹp</a></li>
                       <li class="button-"><a href="#" onclick="them()"><i class="material-icons">search</i></a></li>
                   </ul>
               </div>
            </div>
        </nav>
        <!-- Dropdown Kinh TẾ -->
        <ul id="kinh" class="dropdown-content">
            <li><a href="#">Kinh doanh</a></li>
            <li><a href="#">Lao động vs việc làm</a></li>
            <li><a href="#">Tài chính </a></li>
            <li><a href="#">Chứng khoán</a></li>
        </ul>
        <!-- Dropdown Giáo Dục-->
        <ul id="giao" class="dropdown-content">
            <li><a href="#">Du học</a></li>
            <li><a href="#">Đào Tạo</a></li>
        </ul>
        <!-- Dropdown Thể Thao-->
        <ul id="the" class="dropdown-content">
            <li><a href="#">Bóng đá nước Ngoài</a></li>
            <li><a href="#">Bóng đá Việt Nam</a></li>
        </ul>
        <!-- Dropdown Giải Trí-->
        <ul id="giai" class="dropdown-content">
            <li><a href="#">Âm nhạc</a></li>
            <li><a href="#">Điện ảnh</a></li>
        </ul>
        <!-- Dropdown Công Nghệ-->
        <ul id="cong" class="dropdown-content">
            <li><a href="#">Công nghệ thông tin</a></li>
            <li><a href="#">Khoa học tự nhiên</a></li>
        </ul>
        <!-- Dropdown Làm Đẹp-->
        <ul id="lam" class="dropdown-content">
            <li><a href="#">Làm tóc</a></li>
            <li><a href="#">Bí quyết</a></li>
            <li><a href="#">Làm đẹp mỗi ngày</a></li>
        </ul>
        <!--Quảng Cáo -->
        <div class="container">
            <div id="advertisement"></div>
        </div>
    </header>
    <div class="main">
        <div class="container">
            <!--New Item-->
            <div class="section">
                <div class="row">
                    <div id="text"></div>
                </div>
            </div>
        </div>
    </div>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--Main JS-->
    <script type="text/javascript" src="js/main.js"></script>
    <!--<script type="text/javascript" src="admin/js/add.js"></script>-->
</body>
</html>