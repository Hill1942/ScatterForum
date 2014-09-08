<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 5/30/14
 * Time: 12:16 PM
 */

session_start();

include("db/con_to_db.php");
if (isset($_POST["username"]) and isset($_POST["password"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];

    $username_select = mysql_query("select username from tb_members where username='$username'");
    if (mysql_num_rows($username_select) == 1) {
        $user_select = mysql_query("select * from tb_members
		where username='$username' and password='$password'");
        if (mysql_num_rows($user_select) == 1) {
            $user = mysql_fetch_array($user_select);
            $_SESSION["user"] = $_POST["username"];
           // $_SESSION["userid"] = $user["mid"];
            $_SESSION["admid"] = $user["admid"];
           // $mid = $user["mid"];
           // $current = time();
          //  mysql_query("insert into tb_session(mid, lastactivity) values($mid, $current)", $conn);
            $response = "login_succeed";
        } else {
            $response = "wrong_password";
        }
    } else {
        $response = "user_not_exist";
    }
    echo $response;
}













