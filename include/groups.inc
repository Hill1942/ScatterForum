<?php

$groups_select = mysql_query("select * from tb_groups");
$groups_rows = mysql_num_rows($groups_select);

while ($groups_array = mysql_fetch_array($groups_select)) {
    $group_id = $groups_array["group_id"];
?>
    <div class="group">
        <div class="group_subject">
            <div class="left group_title">
                <span><?php echo $groups_array["title"] ?></span>
            </div>
            <div class="left group_description">
                <span><?php echo $groups_array["description"] ?></span>
            </div>
            <?php if(!empty($_SESSION["admid"])) { ?>
                <div class="left deleteDiv deleteGroupBtn">
                    <span class="glyphicon glyphicon-trash">
                        <span class="hide"><?php echo $group_id ?></span>
                    </span>
                </div>
            <?php } ?>
            <div class="right group_moderators">
                <span class="">moderator:</span>
                <span><?php echo $groups_array["moderators"] ?></span>
            </div>
        </div>
        <table class="group_content">
            <?php include "forums.inc" ?>
        </table>
    </div>
<?php
}
?>