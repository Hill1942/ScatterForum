<?php

$forum_id = $_GET['fid'];
$select_gids = mysql_query("select gid from tb_forums where fid='$forum_id'");
$select_gids_row = mysql_num_rows($select_gids);
if ($select_gids_row != 1) {
?>
    <script>window.location.href="404.php"</script>
<?php
}
?>

<?php
$gid_array = mysql_fetch_array($select_gids);

$select_threads = mysql_query("select * from tb_threads where fid='$forum_id'");

while ($threads_array = mysql_fetch_array($select_threads)) {
    $publish_time = $threads_array["publish_time"];
    $publish_date = date("Y-m-d", strtotime($publish_time));
    $lastpost = $threads_array["lastpost"];
    $lastpost_date = date("Y-m-d", strtotime($lastpost));

?>
    <tr class="thread">
        <td class="thread_title">
            <div class="left"><img class="thread_title_icon" src="images/html5.png"/></div>
            <div class="left">
                <p><a href="content.php?tid=<?php echo $threads_array["tid"] ?>"><?php echo $threads_array["subject"]; ?></a></p>
            </div>
            <?php if(!empty($_SESSION["admid"])) { ?>
                <div class="threadDeleteBtn">
                <span class="glyphicon glyphicon-trash">
                    <span class="hide"><?php echo $threads_array["tid"]; ?></span>
                </span>
                </div>
            <?php } ?>

        </td>
        <td class="thread_author">
            <span class="up"><?php echo $threads_array["author"]; ?></span>
            <span><?php echo $publish_date; ?></span>
        </td>
        <td class="thread_statistic">
            <span class="up"><?php echo $threads_array["replies"]; ?></span>
            <span><?php echo $threads_array["views"]; ?></span>
        </td>
        <td class="thread_lastpost">
            <span class="up"><?php echo $threads_array["lastposter"]; ?></span>
            <span><?php echo $lastpost_date; ?></span>
        </td>
    </tr>

<?php
}
?>
<div class="hide" id="forum_info"><?php echo $forum_id.",".$gid_array["gid"] ?></div>