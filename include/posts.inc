<?php

$thread_id = $_GET["tid"];
$select_thread = mysql_query("select fid, gid from tb_threads where tid='$thread_id'");
$select_thread_row = mysql_num_rows($select_thread);
if ($select_thread_row != 1) {
?>
    <script>window.location.href="404.php"</script>
<?php
}
?>

<?php
$group_id = mysql_result($select_thread, 0, "gid");
$forum_id = mysql_result($select_thread, 0, "fid");

$select_posts = mysql_query("select * from tb_posts where tid='$thread_id'", $conn);


while ($posts_array = mysql_fetch_array($select_posts)) {
    $authorid = $posts_array["authorid"];
    $author = mysql_query("select * from tb_members where mid=$authorid");
    $author_array = mysql_fetch_array($author);
?>
    <div class="post">
        <div class="left author_info" >
            <ul>
                <li><a href="#" class="post_author"><?php echo $posts_array["author"]; ?></a></li>
                <li><img src="images/avatar.jpg"/></li>

                <li><span>thread</span><?php echo $author_array["threads"]; ?></li>
                <li><span>reply</span><?php echo $author_array["posts"]; ?></li>
                <li><span>score</span><?php echo $author_array["credit"]; ?></li>
                <li><span>xcoin</span><?php echo $author_array["xcoin"]; ?></li>
                <li><span>active</span>XXX</li>
            </ul>
        </div>
        <div class="left post_item">
            <div class="post_item_control">
                <div style="padding-top: 7px" class="left">
                    <span style="margin: 0 10px 0 5px">Publish at &nbsp;<?php echo $posts_array["publish_time"]; ?></span>
                    <span><a href="#">Only show author</a></span>
                </div>
                <?php if(!empty($_SESSION["admid"])) { ?>
                    <div class="left postDeleteBtn">
                    <span class="glyphicon glyphicon-trash">
                        <span class="hide"><?php echo $posts_array["pid"]; ?></span>
                    </span>
                    </div>
                <?php } ?>

                <div style="padding-top: 7px" class="right">
                    <span>Jump to</span>
                    <input style="width:30px; height: 20px" type="text">
                    <span style="margin-left: 10px">Host</span>
                </div>
            </div>
            <div class="post_item_article">
                <div class="post_item_title"><?php echo $posts_array["subject"]; ?></div>
                <div class="post_item_content"><?php echo $posts_array["message"]; ?></div>
            </div>
        </div>
    </div>
    <div class="post_divider"></div>

<?php
}
?>

<div class="hide" id="forum_info"><?php echo $forum_id.",".$group_id ?></div>
<div class="hide" id="content_info"><?php echo $thread_id.",".$group_id.",".$forum_id ?></div>















