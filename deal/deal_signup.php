<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 5/26/14
 * Time: 12:09 AM
 */

include "db/con_to_db.php";

if (isset($_POST["signupSub"]) and $_POST["signupSub"] == "Signup") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $pwconfirm = $_POST["pwconfirm"];
    $email = $_POST["email"];

    if ($password == $pwconfirm) {
        $new_account = mysql_query("insert into tb_members(username, password, email, admid, threads, posts, credit, xcoin)
         values('$username', '$password', '$email', 0, 0, 0, 0, 10)", $conn);
        if ($new_account) {
            session_start();
            $_SESSION['user'] = $_POST['username'];
            $response = "signup_succeed";
        } else {
            echo "new_account".mysql_error();
            $response = "signup_fail";
        }
        echo $response;
    } else {
        echo "<script>alert('The passwords do not match！');window.location.href='../signup.php';</script>;";
    }
}







