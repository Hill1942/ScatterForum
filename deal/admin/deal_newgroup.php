<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 6/9/14
 * Time: 3:38 PM
 */

include "../db/con_to_db.php";

$groupName = $_POST["name"];
$groupModerator = $_POST["moderator"];
$groupDesc = $_POST["desc"];

//$result = mysql_query("show table status like 'tb_groups'");
//$next_tid = mysql_result($result, 0, 'Auto_increment');

$new_group = mysql_query("insert into tb_groups(group_id, title, description, moderators, allow_view)
 values(NULL, '$groupName', '$groupDesc', '$groupModerator', NULL)", $conn);

if ($new_group) {
    echo "success";
} else {
    echo "fail";
}

