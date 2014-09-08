<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 6/10/14
 * Time: 2:00 PM
 */


include "../db/con_to_db.php";

$gid = $_POST["gid"];
$name = $_POST['name'];
$moderator = $_POST['moderator'];
$desc = $_POST['desc'];

$r = mysql_query("update tb_groups set title='$name', moderators='$moderator', description='$desc' where group_id=$gid");

echo mysql_error();

if ($r) {
    echo "success";
} else {
    echo "fail";
}


