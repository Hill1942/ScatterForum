<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 5/27/14
 * Time: 11:58 AM
 */

include "db/con_to_db.php";

if (isset($_GET["username"])) {
    $username = $_GET["username"];
    $finds = mysql_query("select * from tb_members where username ='".$username."'", $conn);

    if (mysql_num_rows($finds) >= 1) {
        $response = "N";
    } else {
        $response = "Y";
    }
    echo $response;
}

