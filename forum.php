<?php
session_start();
include "deal/db/con_to_db.php";
?>

<html>

<head>
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="css/header.css" type="text/css" rel="stylesheet">
    <link href="css/footer.css" type="text/css" rel="stylesheet">
    <link href="css/forums.css" type="text/css" rel="stylesheet">
    <link href="css/forum.css" type="text/css" rel="stylesheet">
    <link href="css/common.css" type="text/css" rel="stylesheet">
    <script src="ckeditor/ckeditor.js"></script>
</head>

<body>
<?php include "include/header.inc" ?>


<div id="main_wrapper">
    <div id="main_body">
        <div class="bodytitlebar">
        </div>
        <?php include "include/control.inc"; ?>
        <div id="main_module">
            <div class="module">
                <table class="full">
                    <?php include "include/threads.inc" ?>
                </table>
            </div>
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