<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 6/9/14
 * Time: 10:15 PM
 */

session_start();

include("../db/con_to_db.php");
if (isset($_POST["username"]) and isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $username_select = mysql_query("select username from tb_members where username='$username' and admid=1");
    if (mysql_num_rows($username_select) == 1) {
        $user_select = mysql_query("select * from tb_members
		where username='$username' and password='$password'");
        if (mysql_num_rows($user_select) == 1) {
            $user = mysql_fetch_array($user_select);
            $_SESSION["user"] = $_POST["username"];
            $_SESSION["admid"] = $user["admid"];
            $response = "login_succeed";
        } else {
            $response = "wrong_password";
        }
    } else {
        $response = "user_not_exist";
    }
    echo $response;
}