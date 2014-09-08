<?php
session_start();
if (!empty($_SESSION["admid"])) {
    include "../deal/db/con_to_db.php";
    ?>
<?php } else { ?>
    <script>window.location.href="admin_login.php";</script>
<?php } ?>

<html>

<head>
    <link href="../css/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="../css/header.css" type="text/css" rel="stylesheet">
    <link href="../css/footer.css" type="text/css" rel="stylesheet">
    <link href="../css/common.css" type="text/css" rel="stylesheet">
    <link href="../css/admin_css/admin.css" type="text/css" rel="stylesheet">
</head>

<body>

<div id="title">
    <a id="titleContent" href="admin.php">Control Panel</a>
</div>

<div id="wrapper">
    <?php include "../include/admin/admin_control.inc" ?>
    <div id="admin_content">
        <div>
            <ul class="admin_nav">
                <li id="admin_nav1" data-target="#admin_pane1">
                    group
                </li>
                <li data-target="#admin_pane2">
                    forum
                </li>
                <li data-target="#admin_pane3">
                    thread
                </li>
                <li data-target="#admin_pane4">
                    post
                </li>
            </ul>
            <?php
            $groups_select = mysql_query("select * from tb_groups");
            $groups_rows = mysql_num_rows($groups_select);
            ?>
            <div class="admin_pane">
                <div id="admin_pane1" class="admin_nav_pane">
                    <?php include "../include/admin/admin_content_group.inc" ?>
                </div>
                <div id="admin_pane2" class="admin_nav_pane">
                    <?php include "../include/admin/admin_content_forum.inc" ?>
                </div>
                <div id="admin_pane3" class="admin_nav_pane">sgsagb</div>
                <div id="admin_pane4" class="admin_nav_pane">asdfga</div>
            </div>
        </div>
    </div>

</div>


<?php include "../include/footer.inc" ?>

<script src="../js/jquery-1.10.2.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/common.js"></script>
<script src="../js/admin.js"></script>
</body>
</html>
