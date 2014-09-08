<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 6/10/14
 * Time: 10:05 PM
 */

include "../db/con_to_db.php";

$tid = $_POST["id"];

$select_posts = mysql_query("select gid, fid from tb_posts where tid=$tid");
$posts_rows = mysql_num_rows($select_posts);
$fid = mysql_result($select_posts, 0, 'fid');

if (mysql_query("DELETE FROM tb_threads WHERE tid=$tid")) {
    $r = mysql_query("update tb_forums set posts=posts-$posts_rows, threads=threads-1 where fid=$fid");
    echo "success";
} else {
    echo "fail";
}

$r4 = mysql_query("delete from tb_posts where tid=$tid");


//mysql_close($conn);