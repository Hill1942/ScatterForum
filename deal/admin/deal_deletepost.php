<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 6/10/14
 * Time: 10:12 PM
 */

include "../db/con_to_db.php";

$pid = $_POST["id"];

$sql = "SELECT fid, tid, istop from tb_posts where pid=$pid";
$result = mysql_query($sql, $conn);

$istop =  mysql_result($result, 0, 'istop');
$tid =  mysql_result($result, 0, 'tid');
$fid =  mysql_result($result, 0, 'fid');


if ($istop == 1) {
    $select_posts = mysql_query("select gid from tb_posts where tid=$tid");
    $posts_rows = mysql_num_rows($select_posts);
    if (mysql_query("DELETE FROM tb_posts WHERE tid=$tid")) {
        $r = mysql_query("update tb_forums set posts=posts-$posts_rows, threads=threads-1 where fid=$fid");
        echo $fid;
        mysql_query("delete from tb_threads where tid=$tid");
    } else {
        echo "fail";
    }
} else {
    if (mysql_query("DELETE FROM tb_posts WHERE pid=$pid")) {
        $r = mysql_query("update tb_forums set posts=posts-1 where fid=$fid");
        echo "success";
    } else {
        echo "fail";
    }
}

