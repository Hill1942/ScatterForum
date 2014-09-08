<html>

<head>
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="css/header.css" type="text/css" rel="stylesheet">
    <link href="css/footer.css" type="text/css" rel="stylesheet">
    <link href="css/signup.css" type="text/css" rel="stylesheet">
    <link href="css/common.css" type="text/css" rel="stylesheet">
</head>

<body>
<?php include "include/header.inc" ?>

<div id="signup_wrapper">
    <div id="signup_body">
        <div class="bodytitlebar">

        </div>
        <div id="signup_main">
            <form id="signup" method="post" action="">
                <h3 class="signupMessage">Welcome to Scatter Web</h3>
                <div style="height: 220px">
                    <div id="signupForm">
                        <div class="signupFormItem">
                            <label>Username</label>
                            <input type="text" name="username" onkeyup="ajax_check_username()">
                        </div>
                        <div class="signupFormItem">
                            <label>Password</label>
                            <input type="password" name="password" onkeyup="check_password()">
                        </div>
                        <div class="signupFormItem">
                            <label>Confirm</label>
                            <input type="password" name="pwconfirm">
                        </div>
                        <div class="signupFormItem">
                            <label>Email</label>
                            <input type="text" name="email">
                        </div>
                    </div>
                    <div id="signupExtra">
                        <p>
                            Embrace the Fancy Web
                        </p>
                        <p>
                            Already have account? <a href="#" data-toggle="modal" data-target="#loginModal">Login</a>
                        </p>
                    </div>
                </div>
                <div id="signupEnter">
                    <input id="signupBtn" type="button" name="signupSub" value="Signup" onclick="deal_signup()">
                    <input id="signupCheckbox" type="checkbox" checked="checked">
                    <span>I have read and accepted the <a href="#">User Agreement</a></span>
                </div>
            </form>
            <div id="signup_succeed">
                <p>Congratulations! You are a member now.You can hang out at our forum or go to fill your information <a href="#">here</a></p>
                <p>If your broswer don't take you back to the index, please click <a href="index.php">here</a></p>
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
<script src="js/signup.js"></script>
</body>
</html>