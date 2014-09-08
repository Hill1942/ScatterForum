/**
 * Created by Jack on 6/9/14.
 */


$("#adminLoginBtn").click(function(){
    var name = $("#username").val();
    var pw   = $("#password").val();
    if (name == "") {
        $("#adminError").html("Enter your username");
    } else if(pw == "") {
        $("#adminError").html("Enter your password");
    } else {
        $.post("../deal/admin/deal_adminlogin.php",
            {
                username: name,
                password: pw
            },
            function(data, status){
                if (data == "user_not_exist") {
                    $("#adminError").html("You are not an administrator");
                } else if (data == "wrong_password") {
                    $("#adminError").html("Wrong password. Try again.");
                } else {
                    window.location.href = "admin.php";
                }
            });
    }
});

$(".admin_nav li").click(function() {
    $(".admin_nav li").css("border-bottom", "none");
    $(this).css("border-bottom", "3px solid #FF7676");
    var target = $(this).data("target");
    $(".admin_pane>div").hide();
    $(target).show();
}).mouseenter(function() {
    $(this).addClass("highlight");
}).mouseleave(function() {
    $(this).removeClass("highlight");
});

$("#admin_pane1").show();
$("#admin_nav1").css("border-bottom", "3px solid #FF7676");

$("#groupNewBtn").click(function(){
    var groupName      = $("#groupName").val();
    var groupModerator = $("#groupModerator").val();
    var groupDesc      =  $("#groupDesc").val();
    if (groupName == "") {
        $("#admin_pane1_error1").html("Please Enter Group Name");
    } else if(groupModerator == "") {
        $("#admin_pane1_error1").html("Please Enter Group Moderator");
    } else if (groupDesc == "") {
        $("#admin_pane1_error1").html("Please Enter Group Description");
    } else {
        $.post("../deal/admin/deal_newgroup.php",
            {
                name: groupName,
                moderator: groupModerator,
                desc: groupDesc
            },
            function(data, status){
                if (data == "success") {
                    window.location.href = "../index.php";
                } else {
                    window.alert(data);
                }
            });
    }
});

$("#groupEditBtn").click(function(){
    var editGroupSelect = $("#editGroupSelect").val();
    var newGroupName    = $("#newGroupName").val();
    var newModerator    = $("#newModerator").val();
    var newDesc         = $("#newDesc").val();
    if (editGroupSelect == "#") {
        $("#admin_pane1_error2").html("Please Choose Group");
    } else if(newGroupName == "") {
        $("#admin_pane1_error2").html("Please Enter New Group Name");
    } else if (newModerator == "") {
        $("#admin_pane1_error2").html("Please Enter New Moderator");
    } else if (newDesc == "") {
        $("#admin_pane1_error2").html("Please Give New Group Description");
    } else {
        $.post("../deal/admin/deal_editgroup.php",
            {
                gid:  editGroupSelect,
                name: newGroupName,
                moderator: newModerator,
                desc: newDesc
            },
            function(data, status){
                if (data == "success") {
                    window.location.href = "../index.php";
                } else {
                    window.alert(data);
                }
            });
    }
});

$("#groupDeleteBtn").click(function(){
    var deleteGroupSelect = $("#deleteGroupSelect").val();
    if (deleteGroupSelect == "#") {
        $("#admin_pane1_error3").html("Please Choose Group");
    } else {
        $.post("../deal/admin/deal_deletegroup.php",
            {
                id:  deleteGroupSelect
            },
            function(data, status){
                if (data == "success") {
                    window.location.href = "../index.php";
                } else {
                    window.alert(data);
                }
            });
    }
});
// for index.php quick delete
$(".deleteGroupBtn").click(function(){
    var gid = $(this).text();
    $.post("deal/admin/deal_deletegroup.php",
        {
            id: gid
        },
        function(data, status){
            if (data == "success") {
                window.location.reload();
            } else {
                window.alert(data);
            }
        });
});

$("#forumBtn").click(function(){
    var forumName = $("#forumName").val();
    var forumGid = $("#forumGroup").val();
    var forumDesc =  $("#forumDesc").val();
    if (forumName == "") {
        $("#admin_pane2_error1").html("Please Enter Forum Name");
    } else if(forumGid == "#") {
        $("#admin_pane2_error1").html("Please Choose Forum Group");
    } else if (forumDesc == "") {
        $("#admin_pane2_error1").html("Please Enter Forum Description");
    } else {
        $.post("../deal/admin/deal_newforum.php",
            {
                name: forumName,
                gid: forumGid,
                desc: forumDesc
            },
            function(data, status){
                if (data == "success") {
                    window.location.href = "../index.php";
                } else {
                    window.alert(data);
                }
            });
    }
});

$("#forumEditBtn").click(function(){
    var forumId = $("#editForumSelect").val();
    var forumNewName = $("#newForumName").val();
    var forumGroupTo = $("#forumGroupTo").val();
    var forumNewDesc =  $("#newForumDesc").val();
    if (forumId == "#") {
        $("#admin_pane2_error2").html("Please Choose which forum you want to change");
    } else if (forumNewName == "") {
        $("#admin_pane2_error2").html("Please Enter The New Name");
    } else if(forumGroupTo == "#") {
        $("#admin_pane2_error2").html("Please Choose Forum GroupTo");
    } else if (forumNewDesc == "") {
        $("#admin_pane2_error2").html("Please Enter New Description");
    } else {
        $.post("../deal/admin/deal_editforum.php",
            {
                name: forumNewName,
                fid: forumId,
                desc: forumNewDesc,
                gid: forumGroupTo
            },
            function(data, status){
                if (data == "success") {
                   // window.open("../index.php");   
                   window.location.href = "../index.php";
                } else {
                    window.alert(data);
                }
            });
    }
});


$("#forumDeleteBtn").click(function(){
    var deleteForumSelect = $("#deleteForumSelect").val();
    if (deleteForumSelect == "#") {
        $("#admin_pane2_error3").html("Please Choose Forum");
    } else {
        $.post("../deal/admin/deal_deleteforum.php",
            {
                id:  deleteForumSelect
            },
            function(data, status){
                if (data == "success") {
                    window.location.href = "../index.php";
                } else {
                    window.alert(data);
                }
            });
    }
});

// for index.php quick delete
$(".forumDeleteBtn").click(function(){
    var fid = $(this).text();
    $.post("deal/admin/deal_deleteforum.php",
        {
            id: fid
        },
        function(data, status){
            if (data == "success") {
                window.location.reload();
            } else {
                window.alert(data);
            }
        });
});

// for forum.php quick delete
$(".threadDeleteBtn").click(function(){
    var tid = $(this).text();
    $.post("deal/admin/deal_deletethread.php",
        {
            id: tid
        },
        function(data, status){
            if (data == "success") {
                window.location.reload();
            } else {
                window.alert(data);
            }
        });
});

// for forum.php quick delete
$(".postDeleteBtn").click(function(){
    var pid = $(this).text();
    $.post("deal/admin/deal_deletepost.php",
        {
            id: pid
        },
        function(data, status){
            if (data == "success") {
                window.location.reload();
            } else if (data == "fail") {
                window.alert(data);
            } else {
                window.location.href = "forum.php?fid=" + data;
            }
        });
});




