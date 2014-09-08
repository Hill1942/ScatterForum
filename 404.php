<?php
session_start();
include "deal/db/con_to_db.php";
?>

<html>

<head>
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="css/header.css" type="text/css" rel="stylesheet">
    <link href="css/footer.css" type="text/css" rel="stylesheet">
    <link href="css/common.css" type="text/css" rel="stylesheet">
    <style type="text/css">
        #goback {
            text-align: center;
            font-size: 16px;
            text-shadow: 0 1px 3px #999999;
        }
        #info {
            font-size: 40px;
            width: 600px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            margin-top: 40px;
            color: #ECFAFF;
            text-shadow: 0 1px 8px #000000;
        }
        #error {
            text-align: center;
            font-size: 100px;
            text-shadow: 0 1px 10px #0C0C0C;
            color: #C1DADA;
        }

    </style>
</head>

<body>
<?php include "include/header.inc" ?>


<div id="main_wrapper">
    <div id="main_body">
        <div class="bodytitlebar">

        </div>
        <div id="main_module">
            <div class="module">
                <div id="info">Sorry, the page you request is not here!</div>
                <div id="error">404 Error</div>
                <div id="goback">Click <a href="index.php">here</a> to go back to index! </div>
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