<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 6/5/14
 * Time: 1:37 AM
 */

session_start();

include "db/con_to_db.php";

$thread_id = $_POST['tid'];
$forum_id = $_POST['fid'];
$group_id = $_POST['gid'];
$post_content = $_POST['content'];
$publish_date = date("Y-m-d H:i:s" ,strtotime("now"));
$author = $_SESSION['user'];


// get author id
$select_author = mysql_query("select mid from tb_members where username='$author'");
$author_id = mysql_result($select_author, 0);


// insert post
$new_post = mysql_query("insert into tb_posts(pid, tid, fid, gid, aid, author, authorid, subject, publish_time, message, istop)
 values(NULL, $thread_id, $forum_id, $group_id, NULL, '$author', $author_id, NULL, '$publish_date', '$post_content', 0)", $conn);

$r = mysql_query("update tb_forums set posts=posts+1,
lastpost='$publish_date', lastposter='$author' where fid=$forum_id");

mysql_query("update tb_members set posts=posts+1 where mid=$author_id");


if (!$r) {
    echo mysql_error();
}

if (!$new_post) {
    echo "newpost".mysql_error();
}

if ($new_post and $new_post) {
    echo "success";
} else {
    echo "fail";
}
