<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 6/10/14
 * Time: 9:20 PM
 */

include "../db/con_to_db.php";

$fid = $_POST["id"];

if (mysql_query("DELETE FROM tb_forums WHERE fid=$fid")) {
    echo "success";
} else {
    echo "fail";
}

$r3 = mysql_query("delete from tb_threads where fid=$fid");
$r4 = mysql_query("delete from tb_posts where fid=$fid");


//mysql_close($conn);