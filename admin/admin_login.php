<html>

<head>
    <link href="../css/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="../css/footer.css" type="text/css" rel="stylesheet">
    <link href="../css/common.css" type="text/css" rel="stylesheet">
    <link href="../css/admin_css/admin_login.css" type="text/css" rel="stylesheet">
</head>

<body>

<div id="main_wrapper">
   <div id="admin_body">

       <form id="admin_login_form">
           <div id="admin_header">
               <a href="../index.php"><img src="../images/title.png"/></a>
           </div>
           <div id="adminError"></div>
           <div class="adminLoginItem">
               <label class="common_label">Username</label>
               <input id="username" class="common_input" type="text" name="username">
           </div>
           <div class="adminLoginItem">
               <label class="common_label">Password</label>
               <input id="password" class="common_input" type="password" name="password">
           </div>
           <div class="adminLoginItem">
               <input class="common_btn" type="button" value="Login" id="adminLoginBtn">
           </div>
       </form>
   </div>
</div>


<div>

</div>
<?php include "../include/footer.inc" ?>
<script src="../js/jquery-1.10.2.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/admin.js"></script>
</body>
</html>