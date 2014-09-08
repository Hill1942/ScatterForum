/**
 * Created by Jack on 5/30/14.
 */

/*
setInterval(updateActivity, 1000);

function updateActivity() {
    $.get("deal/deal_updateSession.php",
        {},
        function(date, status){
    });
}*/

$('#loginModal').on('hidden.bs.modal', function () {
    $(".loginMessage").html("User Login").removeClass("errorMessage");
});

function goto_reply() {
    var href = window.location.href;
    window.location.href= href + "#content_reply"
}

function dealLogin() {
    if (checkLogin()) {
        ajax_submit_login();
    }
}

function checkLogin() {
    var username = document.getElementById('loginForm').username.value;
    if (username == "") {
        $(".loginMessage").html("Please enter username!").addClass("errorMessage");
        return false;
    }
    var password = document.getElementById('loginForm').password.value;
    if (password == "") {
        $(".loginMessage").html("Please give password!").addClass("errorMessage");
        return false;
    }
    $(".loginMessage").html("User Login").removeClass("errorMessage");
    return true;
}

function ajax_submit_login() {
    var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var result = xmlhttp.responseText;
            if (result == "login_succeed") {
                $('#loginModal').modal('hide');
                window.location.href = "index.php";
            } else if (result == "user_not_exist") {
                $(".loginMessage").html("user not exist").addClass("errorMessage");
            } else {
                $(".loginMessage").html("wrong password. Please try again").addClass("errorMessage");
            }
        }
    };
    var username = document.getElementById("loginForm").username.value;
    var password = document.getElementById("loginForm").password.value;

    var sendMessage = "username=" + username + "&password=" + password;

    xmlhttp.open("POST", "deal/deal_login.php", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(sendMessage);
}
function ajax_logout() {
    var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var result = xmlhttp.responseText;
            if (result == "logout") {
                window.location.href = "index.php";
            } else {
                window.alert(result);
            }
        }
    };
    xmlhttp.open("GET", "deal/deal_logout.php", true);
    xmlhttp.send();
}


$("#newpost_submit").click(function(){
    var forum_info = $("#forum_info").html();
    $.post("deal/deal_newpost.php",
        {
            gid: forum_info.split(",")[1],
            fid: forum_info.split(",")[0],
            title: $("#newpost_title").val(),
            content: CKEDITOR.instances.newpost_content.getData()
        },
        function(data, status){
            if (data != "fail") {
                //window.alert(data);
                window.location.href = "content.php?tid=" + data;
            } else {
                window.alert(data);
            }
        });
});

$("#reply_btn").click(function(){
    var content_info = $("#content_info").html();
    $.post("deal/deal_reply.php",
        {
            tid: content_info.split(",")[0],
            gid: content_info.split(",")[1],
            fid: content_info.split(",")[2],
            content: CKEDITOR.instances.reply_content.getData()
        },
        function(data, status){
            if (data != "fail") {
                window.location.reload();
            } else {
                window.alert(data);
            }
        });
});

















