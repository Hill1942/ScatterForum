<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 6/9/14
 * Time: 4:10 PM
 */
include "../db/con_to_db.php";

$gid = $_POST["id"];

if (mysql_query("DELETE FROM tb_groups WHERE group_id=$gid")) {
    echo "success";
} else {
    echo "fail";
}

$r2 = mysql_query("delete from tb_forums where gid=$gid");
$r3 = mysql_query("delete from tb_threads where gid=$gid");
$r4 = mysql_query("delete from tb_posts where gid=$gid");


//mysql_close($conn);