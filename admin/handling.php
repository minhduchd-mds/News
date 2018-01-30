<?php
/**
 * Created by PhpStorm.
 * User: Duc
 * Date: 1/30/2018
 * Time: 11:21 PM
 */
require_once 'Db/db.php';
// sql to  edit , delete
$edit_text = "UPDATE post SET lastname='Doe' WHERE id=2";
$result = mysqli_select_db($conn,$edit_text);
// delete
$delete_text = "DELETE FROM post WHERE id=''";
    $result = mysqli_select_db($conn,$delete_text);
    if($delete){

    }else{

    }
