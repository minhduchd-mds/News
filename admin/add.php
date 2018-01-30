<?php include('post.php') ?>
<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trang admin</title>
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
                <a href="#" class="brand-logo center"><img src="../images/text-lines.png"></a>
            </div>
        </div>
    </nav>
    <!--Quảng Cáo -->
    <div class="container">
        <div id="advertisement"></div>
    </div>
</header>
<div class="container">
    <div class="section">
        <div class="row">
            <!--            Bẳng điều khiển-->
            <div class="col s12 xl5 xl5">
                <div class="setting">
                    <div class="card horizontal">
                        <div class="card-image">
                            <img src="../images/user-account.jpg" class="responsive-img">
                            <span class="mb-2"><?php  if (isset($_SESSION['username'])) : ?>
                                    <h5 class="color-00b0ff"><?php echo $_SESSION['username']; ?></h5>
                                <?php endif ?>
                                <a href="setting.php?logout='1'" class="right mb-2">Đăng xuất</a>
                                <?php if (isset($_SESSION['success'])) : ?>
                                    <div class="error success" >
                                    <h3>
                                        <?php
                                        echo $_SESSION['success'];
                                        unset($_SESSION['success']);
                                        ?>
                                    </h3>
                                </div>
                                <?php endif?></span>
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <div class="collection">
                                    <a href="setting.php" class="collection-item">Hồ sơ cá nhân</a>
                                    <a href="add.php" class="collection-item active">Bài viết</a>
                                    <a href="#updatephoto" class="collection-item">Cập nhập quảng cáo</a>
                                    <a href="#forder" class="collection-item">Thêm thư mục</a>
                                    <a href="#alllist" class="collection-item">Danh sách bài viết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--   Main -->
            <div class="col s12 xl7 x7">
<!--                Post Text-->
                <div class="card-panel row">
                    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Thêm</a>
                    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Delete</a>
                    <div class="col s12 xl12">
                        <div class="add"></div>
                        <?php
                        $post_text="SELECT * FROM post LIMIT 5";
                        // sql to delete a record
                        $result = mysqli_query($conn,$post_text);
                        $url="http://localhost/News/";
                        if(isset($_SESSION['username'])){
                            echo "<table class='highlight'>
                            <thead>
                            <tr>
                            <th>Id</th>
                                <th>category</th>
                                <th>kind</th>
                                <th>images</th>
                                <th>title</th>
                                <th>Content</th>
                                    </tr></thead>";
                            $i = 0;
                            while($row = mysqli_fetch_array($result)) {

                                $id = $row['id'];
                                $url_img = $row['images'];
                                echo "<tbody>";
                                echo "<tr>";
                                echo "<td>" . $i . "</td>";
                                echo "<td>" . $row['category'] . "</td>";
                                echo "<td>" . $row['kind'] . "</td>";
                                echo "<td><img class='img_table' src='".$url. $url_img ."' /></td>";
                                echo "<td>" . $row['title'] . "</td>";
                                echo "<td>
                            <a href='post.php?id=<?php echo $id;?>' >Sửa</a>
                            <a href='".$id."' >Xóa</a></td>";
                                echo "</tr>";
                                echo "</tbody>"
                                ;
                                $i++;
                            }
                            echo "</table>";
                        }
                        mysqli_close($conn);
                        ?>
                    </div>
                    <!-- Modal Structure -->
                    <div id="modal1" class="modal">
                        <div class="modal-content">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="Placeholder" name="title" type="text" class="validate">
                                        <label for="first_name">Tiêu đề</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="last_name" type="text" name="category" class="validate">
                                        <label for="last_name">Danh mục</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="Thể loại" name="kind" type="text" class="validate">
                                        <label for="first_name">Thể loại</label>
                                    </div>
                                    <div class="file-field input-field col s6">
                                        <div class="btn">
                                            <span>File</span>
                                            <input type="file" name="images" multiple>
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="Tải lên hình ảnh ">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="textarea1" name="content" class="materialize-textarea"></textarea>
                                        <label for="textarea1">Nội dung</label>
                                    </div>
                                </div>
                                <input name="add-html" class="modal-action modal-close" type="submit" value="Thêm">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<!--Main JS-->
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>