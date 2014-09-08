<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 6/18/14
 * Time: 12:31 AM
 */


session_start();

include("db/con_to_db.php");

$mid = $_SESSION["userid"];

$newtime = time();

mysql_query("update tb_session set lastactivity=$newtime where mid=$mid");


