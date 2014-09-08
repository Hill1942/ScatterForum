<?php
session_start();
include "deal/db/con_to_db.php";
?>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="css/header.css" type="text/css" rel="stylesheet">
    <link href="css/footer.css" type="text/css" rel="stylesheet">
    <link href="css/index.css" type="text/css" rel="stylesheet">
    <link href="css/common.css" type="text/css" rel="stylesheet">
</head>

<body>
<?php include "include/header.inc" ?>


<div id="main_wrapper">
    <div id="main_body">
        <div class="bodytitlebar">

        </div>
        <div id="main_module">
            <div class="module">
                <?php include "include/groups.inc" ?>
            </div>
        </div>
        <div id="link_module">
            <div id="link_module_title">

            </div>
            <ul id="link_module_list">
                <li><a href="http://www.baidu.com">Baidu</a></li>
                <li><a href="http://www.baidu.com">Baidu</a></li>
                <li><a href="http://www.baidu.com">Baidu</a></li>
                <li><a href="http://www.baidu.com">Baidu</a></li>
                <li><a href="http://www.baidu.com">Baidu</a></li>
                <li><a href="http://www.baidu.com">Baidu</a></li>
                <li><a href="http://www.baidu.com">Baidu</a></li>
                <li><a href="http://www.baidu.com">Baidu</a></li>
            </ul>
        </div>
        <div class="bodybottombar">

        </div>
    </div>
</div>



<div>

</div>

<?php include "include/footer.inc" ?>

<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/common.js"></script>
<?php if(!empty($_SESSION["admid"])) { ?>
    <script src="js/admin.js"></script>
<?php } else { ?>

<?php } ?>
</body>
</html>