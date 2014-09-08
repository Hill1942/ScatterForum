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

    </div>

</div>


<?php include "../include/footer.inc" ?>

<script src="../js/jquery-1.10.2.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/common.js"></script>
<script src="../js/admin.js"></script>
</body>
</html>
