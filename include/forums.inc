<?php
$forums_select = mysql_query("select * from tb_forums where gid='$group_id'", $conn);
$forums_rows = mysql_num_rows($forums_select);
while($forums_array = mysql_fetch_array($forums_select)){
?>
    <tr class="forum">
        <td class="forum_header">
            <div class="left"><img class="forum_header_icon" src="images/html5.png"/></div>
            <div class="left forum_title">
                <?php if(!empty($_SESSION["admid"])) { ?>
                    <div class="forumDeleteBtn">
                        <span class="glyphicon glyphicon-trash">
                            <span class="hide"><?php echo $forums_array["fid"]; ?></span>
                        </span>
                    </div>
                <?php } ?>
                <p><a href="forum.php?fid=<?php echo $forums_array["fid"]; ?>"><?php echo $forums_array["name"]; ?></a></p>
                <p><?php echo $forums_array["description"]; ?></p>
            </div>
        </td>
        <td class="forum_statistic">
            <span><?php echo $forums_array["threads"]; ?></span>
            <span> / <?php echo $forums_array["posts"]; ?></span>
        </td>
        <td class="forum_lastpost">
            <p class="lastpost_title"><?php echo $forums_array["lastpost_title"]; ?></p>
            <cite>
                <span><?php echo $forums_array["lastposter"]; ?></span>
                <span><?php echo $forums_array["lastpost"]; ?></span>
            </cite>
        </td>
    </tr>
<?php
}
?>