<?php
session_start();
?>
<html>
<head>
    <title>Online Store</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../css/index.css" />
    <link rel="stylesheet" type="text/css" href="css/user/user.css" />
    <link rel="stylesheet" type="text/css" href="../css/common.css" />
    <script src="js/geo.js" type="text/javascript"></script>
</head>
<body onload="setup();preselect('陕西省');">
<?php include "include/header.inc" ?>

<div style="margin-top: 100px" id="mainContent">
    <div id="storeItemList">
        <div id="buyer_center">
            <div class="left" id="buyerControl">
                <div id="buyerAvatar"><img id="buyerAvatarImg" src="../images/avatar.jpg"></div>
                <ul>
                    <li class="buyerControlItem" data-target="#buyer_basicInfo">
                        <span>Account Info</span>
                    </li>
                    <li class="buyerControlItem" data-target="#buyer_security">
                        <span>Security</span>
                    </li>
                    <li class="buyerControlItem" data-target="#buyer_collection">
                        <span>Collection</span>
                    </li>
                    <li class="buyerControlItem" data-target="#buyer_history">
                        <span>Order History</span>
                    </li>
                    <li class="buyerControlItem" data-target="#buyer_address">
                        <span>Address</span>
                    </li>
                    <li class="buyerControlItem" data-target="#buyer_notification">
                        <span>Notification</span>
                    </li>
                    <li class="buyerControlItem" data-target="#buyer_game">
                        <span>My Game</span>
                    </li>
                </ul>
            </div>
            <div class="left buyerContent" id="buyer_basicInfo">

            </div>
            <div class="left buyerContent" id="buyer_security">

            </div>
            <div class="left buyerContent" id="buyer_collection">

            </div>
            <div class="left buyerContent" id="buyer_history">

            </div>
            <div class="left buyerContent" id="buyer_address">

            </div>
            <div class="left buyerContent" id="buyer_notification">

            </div>
            <div class="left buyerContent" id="buyer_game">

            </div>
        </div>
    </div>

</div>





<script src="../js/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/buyer.js" type="text/javascript"></script>
<script src="../js/common.js" type="text/javascript"></script>
</body>
</html>