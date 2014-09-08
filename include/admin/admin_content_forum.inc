<div class="panelItem">
    <div class="panelItemTitle">Create New Forum</div>
    <div id="admin_pane2_error1" class="adminError"></div>
    <div class="panelItemContent">
        <form>
            <div class="panelItemFormItem">
                <label class="common_label">Forum Name</label>
                <input id="forumName" class="common_input" type="text">
            </div>
            <div class="panelItemFormItem">
                <label class="common_label">Group</label>
                <select id="forumGroup" class="common_select">
                    <option value="#">Choose Group</option>
                    <?php
                    mysql_data_seek($groups_select, 0);
                    while ($groups_array = mysql_fetch_array($groups_select)) {
                    ?>
                        <option value="<?php echo $groups_array["group_id"]; ?>"><?php echo $groups_array["title"]; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="panelItemFormItem">
                <label class="common_label">Description</label>
                <input id="forumDesc" style="width: 600px" class="common_input" type="text">
            </div>
            <div class="panelItemFormItem">
                <input style="margin-left: 103px" class="common_btn" type="button" value="Confirm" id="forumBtn">
            </div>
        </form>
    </div>
</div>

<div class="panelItem">
    <div class="panelItemTitle">Edit A Forum</div>
    <div id="admin_pane2_error2" class="adminError"></div>
    <div class="panelItemContent">
        <form>
            <div class="panelItemFormItem">
                <label class="common_label">Forum Name</label>
                <select id="editForumSelect" class="common_select">
                    <option value="#">Choose Forum</option>
                    <?php
                    $forums_select = mysql_query("select fid, name from tb_forums");
                    $forums_rows = mysql_num_rows($forums_select);
                    while ($forums_array = mysql_fetch_array($forums_select)) {
                    ?>
                        <option value="<?php echo $forums_array["fid"]; ?>"><?php echo $forums_array["name"]; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="panelItemFormItem">
                <label class="common_label">New Name</label>
                <input id="newForumName" class="common_input" type="text">
            </div>
            <div class="panelItemFormItem">
                <label class="common_label">Group To</label>
                <select id="forumGroupTo" class="common_select">
                    <option value="#">Choose Group</option>
                    <?php
                    mysql_data_seek($groups_select, 0);
                    while ($groups_array = mysql_fetch_array($groups_select)) {
                        ?>
                        <option value="<?php echo $groups_array["group_id"]; ?>"><?php echo $groups_array["title"]; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="panelItemFormItem">
                <label class="common_label">New Description</label>
                <input id="newForumDesc" style="width: 600px" class="common_input" type="text">
            </div>
            <div class="panelItemFormItem">
                <input style="margin-left: 103px" class="common_btn" type="button" value="Confirm" id="forumEditBtn">
            </div>
        </form>
    </div>
</div>

<div class="panelItem">
    <div class="panelItemTitle">Delete A Forum</div>
    <div id="admin_pane2_error3" class="adminError"></div>
    <div class="panelItemContent">
        <form>
            <div class="panelItemFormItem">
                <label class="common_label">Forum Name</label>
                <select id="deleteForumSelect" class="common_select">
                    <option value="#">Choose Forum</option>
                    <?php
                    $forums_select = mysql_query("select fid, name from tb_forums");
                    $forums_rows = mysql_num_rows($forums_select);
                    while ($forums_array = mysql_fetch_array($forums_select)) {
                    ?>
                        <option value="<?php echo $forums_array["fid"]; ?>"><?php echo $forums_array["name"]; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="panelItemFormItem">
                <input style="margin-left: 103px" class="common_btn" type="button" value="Confirm" id="forumDeleteBtn">
            </div>
        </form>
    </div>
</div>




















