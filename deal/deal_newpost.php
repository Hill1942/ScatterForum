<?php
/**
 * Created by PhpStorm.
 * User: Kaidi
 * Date: 5/30/14
 * Time: 4:48 PM
 */
session_start();

include("db/con_to_db.php");

$forum_id = $_POST['fid'];
$group_id = $_POST['gid'];
$thread_subject = $_POST['title'];
$post_content = $_POST['content'];
$publish_date = date("Y-m-d H:i:s" ,strtotime("now"));
$author = $_SESSION['user'];

// get author id
$select_author = mysql_query("select mid from tb_members where username='$author'");
$author_id = mysql_result($select_author, 0);

// get next thread_id
$result = mysql_query("show table status like 'tb_threads'");
$next_tid = mysql_result($result, 0, 'Auto_increment');

// insert thread
$new_thread = mysql_query("insert into tb_threads(tid, fid, gid, aid, icontype, author, authorid,
subject, publish_time, lastpost, lastposter, views, replies, digest, attachment)
 values($next_tid, $forum_id, $group_id, NULL, NULL, '$author', $author_id,
 '$thread_subject', '$publish_date', '$publish_date', '$author', NULL, NULL, NULL, NULL)", $conn);

if (!$new_thread) {
    echo "newthread".mysql_error();
}

// insert post
$new_post = mysql_query("insert into tb_posts(pid, tid, fid, gid, aid, author, authorid, subject, publish_time, message, istop)
 values(NULL, $next_tid, $forum_id, $group_id, NULL, '$author', $author_id, '$thread_subject', '$publish_date', '$post_content', 1)", $conn);

//update forum
$r = mysql_query("update tb_forums set threads=threads+1, posts=posts+1,
lastpost='$publish_date', lastposter='$author', lastpost_title='$thread_subject' where fid=$forum_id");

//update user
mysql_query("update tb_members set threads=threads+1, posts=posts+1 where mid=$author_id");

if (!$r) {
    echo mysql_error();
}

if (!$new_post) {
    echo "newpost".mysql_error();
}

if ($new_post and $new_post) {
    echo $next_tid;
} else {
    echo "fail";
}















