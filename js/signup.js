/**
 * Created by Jack on 5/26/14.
 */


var name_is_taken = false;


function deal_signup() {
    if (check_signup()) {
        ajax_submit_signup();
    }
}

function ajax_submit_signup() {
    var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var result = xmlhttp.responseText;
            //window.alert(result);
            if (result == "signup_succeed") {
                $("#signup").hide();
                $("#signup_succeed").show();
                setTimeout("window.location.href='index.php'", 3000);
            } else {
            }
        }
    };

    var username = document.getElementById("signup").username.value;
    var password = document.getElementById("signup").password.value;
    var pwconfirm = document.getElementById("signup").pwconfirm.value;
    var email = document.getElementById("signup").email.value;
    var signupSub = document.getElementById("signup").signupSub.value;

    var sendMessage = "username=" + username + "&password=" + password +
        "&pwconfirm=" + pwconfirm + "&email=" + email + "&signupSub=" + signupSub;

    xmlhttp.open("POST", "deal/deal_signup.php", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(sendMessage);
}

function check_signup() {
    var username = document.getElementById("signup").username.value;
    if (username == "") {
        $(".signupMessage").html("Please enter a username!").addClass("errorMessage");
        return false;
    }

    var password = document.getElementById("signup").password.value;
    if (password == "") {
        if (!name_is_taken) {
            $(".signupMessage").html("Please choose a password!").addClass("errorMessage");
        }
        return false;
    }

    var pwconfirm = document.getElementById("signup").pwconfirm.value;
    if (pwconfirm != password) {
        if (!name_is_taken) {
            $(".signupMessage").html("Password do not match!").addClass("errorMessage");
        }
        return false;
    }

    var email = document.getElementById("signup").email.value;
    if (email == "") {
        if (!name_is_taken) {
            $(".signupMessage").html("Please give your email!").addClass("errorMessage");
        }
        return false;
    }

    if (!check_email_format()) {
        $(".signupMessage").html("Wrong email format!").addClass("errorMessage");
        return false;
    }

    if (name_is_taken) {
        $(".signupMessage").html("The username has been used!").addClass("errorMessage");
        return false;
    }

    $(".signupMessage").html("Welcome to Scatter Web").removeClass("errorMessage");
    return true;
}

function ajax_check_username() {
    var username = document.getElementById("signup").username.value;

    var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var result = xmlhttp.responseText;
            if (result == "N") {
                $(".signupMessage").html("The username has been used!").addClass("errorMessage");
                name_is_taken = true;
            } else {
                $(".signupMessage").html("Welcome to Scatter Web").removeClass("errorMessage");
                name_is_taken = false;
            }
        }
    };

    xmlhttp.open("GET", "deal/deal_signup_username.php?username=" + username, true);
    xmlhttp.send();
}

function check_password() {
    if (!name_is_taken) {
        $(".signupMessage").html("Welcome to Scatter Web").removeClass("errorMessage");
    }
}

function check_email_format() {
    var email = document.getElementById("signup").email.value;
    var Expression=/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
    var objExp = new RegExp(Expression);
    return objExp.test(email);
}

















