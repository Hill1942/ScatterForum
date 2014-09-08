<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 5/30/14
 * Time: 1:37 PM
 */


session_start();

include("db/con_to_db.php");
session_destroy();

$response = "logout";

echo $response;

