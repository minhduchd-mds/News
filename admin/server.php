<?php
require_once 'Db/db.php';
    $username ='';
    $errors = array();
    $_SESSION['success'] = "";
// LOGIN USER
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);

        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: setting.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
    mysqli_close($conn);
}
// lấy ra danh sách database
$sql=("SELECT * FROM user WHERE id='' ORDER BY id");
if ($user=mysqli_query($db,$sql))
{
    // Fetch one and one row
    while ($row=mysqli_fetch_row($user))
    {
        printf ("%s (%s)\n",$row[0],$row[1]);
    }
    // Free result set
    mysqli_free_result($user);
}
//   logout user
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
}
