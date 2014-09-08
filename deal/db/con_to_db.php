<?php
/**
 * Created by PhpStorm.
 * User: Kaidi
 * Date: 5/25/14
 * Time: 11:58 PM
 */

$conn = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT, SAE_MYSQL_USER, SAE_MYSQL_PASS);
if ($conn) {
    mysql_select_db(SAE_MYSQL_DB, $conn);
}
else {
    echo "<script>alert('Database Error!');</script>;";
}






