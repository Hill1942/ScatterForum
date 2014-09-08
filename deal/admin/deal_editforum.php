<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 6/9/14
 * Time: 5:06 PM
 */

include "../db/con_to_db.php";

$fid = $_POST["fid"];
$gid = $_POST["gid"];
$name = $_POST["name"];
$desc = $_POST["desc"];

//$result = mysql_query("show table status like 'tb_forums'");
//$next_tid = mysql_result($result, 0, 'Auto_increment');

//status 1 for visible, 0 for invisible
$r = mysql_query("update tb_forums set name='$name', gid='$gid', description='$desc' where fid=$fid");

if (!$r) {
    echo mysql_error();
}

if ($r) {
    echo "success";
} else {
    echo "fail";
}