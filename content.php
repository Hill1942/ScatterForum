<?php
session_start();
include "deal/db/con_to_db.php";
?>

<html>
<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="css/header.css" type="text/css" rel="stylesheet">
    <link href="css/footer.css" type="text/css" rel="stylesheet">
    <link href="css/content.css" type="text/css" rel="stylesheet">
    <link href="css/common.css" type="text/css" rel="stylesheet">
    <script src="ckeditor/ckeditor.js" type="text/javascript"></script>
</head>

<body>
<?php include "include/header.inc" ?>


<div id="main_wrapper">
    <div id="main_body">
        <div class="bodytitlebar">

        </div>
        <div id="main_module">
            <?php include "include/newpost.inc"; ?>
            <div class="content_control">
                <div class="left">
                    <?php if(!empty($_SESSION["user"])) { ?>
                        <button data-toggle="modal" data-target="#newpostModal">New Thread</button>
                        <button onclick="goto_reply()">Reply</button>
                    <?php } else { ?>

                    <?php } ?>
                </div>
                <div class="right">
                    <span>Return to Index</span>
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">7</a>
                    <a href="#">8</a>
                </div>
            </div>
            <div id="content_main">
                <?php include "include/posts.inc" ?>
            </div>
            <div id="content_end">
                <div class="left">
                    <?php if(!empty($_SESSION["user"])) { ?>
                        <button data-toggle="modal" data-target="#newpostModal">New Thread</button>
                    <?php } else { ?>

                    <?php } ?>
                </div>
                <div class="right">
                    <span>Return to Index</span>
                </div>
            </div>
            <?php if(!empty($_SESSION["user"])) { ?>
                <div id="content_reply">
                    <div class="left" id="content_reply_imgDiv">
                        <img src="images/avatar.jpg">
                    </div>
                    <div class="left" id="content_reply_div">
                        <form>
                            <textarea name="reply_content" id="reply_content"></textarea>
                            <script>
                                CKEDITOR.replace('reply_content');
                            </script>
                            <input id="reply_btn" type="button" value="Submit">
                        </form>
                    </div>
                </div>
            <?php } else { ?>

            <?php } ?>
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