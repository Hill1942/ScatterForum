<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 6/9/14
 * Time: 5:06 PM
 */

include "../db/con_to_db.php";

$gid = $_POST["gid"];
$forumName = $_POST["name"];
$forumDesc = $_POST["desc"];

//$result = mysql_query("show table status like 'tb_forums'");
//$next_tid = mysql_result($result, 0, 'Auto_increment');

//status 1 for visible, 0 for invisible
$new_forum = mysql_query("insert into tb_forums(gid, name, description, status, threads, posts)
 values($gid, '$forumName', '$forumDesc', 1, 0, 0)", $conn);

if (!$new_forum) {
    echo mysql_error();
}

if ($new_forum) {
    echo "success";
} else {
    echo "fail";
}