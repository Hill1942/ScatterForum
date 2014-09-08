<div id="header_wrapper">
    <div id="header">
        <div id="header_title">
            <a href="index.php"><img src="images/title.png"/></a>
        </div>
        <ul id="header_menu">
            <?php if(!empty($_SESSION["user"])) { ?>
                <li>
                    <a href="#"><?php echo $_SESSION['user']; ?></a>
                </li>
                <li>
                    <a href="javascript:void(0)"  onclick="ajax_logout()">Logout</a>
                </li>
            <?php } else { ?>
                <li>
                    <a href="#" data-toggle="modal" data-target="#loginModal">Login</a>
                </li>
                <li>
                    <a href="signup.php">Signup</a>
                </li>
            <?php } ?>
            <li>
                <a href="#">Follow me</a>
            </li>
        </ul>
        <form>
            <div id="header_search">
                <img src="images/search.png"/>
                <input type="text">
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="margin-top: 140px">
        <div id="loginModalContent" class="modal-content">
            <a href="#" class="appleCloseBtn" data-dismiss="modal" aria-hidden="true" style="top: -15px;left: -15px;"></a>
            <div class="modal-body">
                <form id="loginForm" method="post" action="">
                    <h3 class="loginMessage">User Login</h3>
                    <div style="height: 220px">
                        <div id="loginFormMain">
                            <div class="loginFormItem">
                                <label>Username</label>
                                <input name="username" type="text">
                            </div>
                            <div class="loginFormItem">
                                <label>Password</label>
                                <input name="password" type="password">
                            </div>
                            <div class="loginFormItem">
                                <label>Security Question</label>
                            </div>
                        </div>
                        <div id="loginExtra">
                            <h4>
                                No account? <a href="signup.php">Signup</a>
                            </h4>
                            <p>
                                Forget Password? <a href="#">Find Password</a>
                            </p>
                            <p>
                                Can't Login? <a href="#">See help</a>
                            </p>
                        </div>
                    </div>
                    <div id="loginEnter">
                        <input id="loginBtn" value="Login" type="button" onclick="dealLogin()">
                        <input id="loginCheckBox" type="checkbox" checked="checked">
                        <span>Remember me</span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>












