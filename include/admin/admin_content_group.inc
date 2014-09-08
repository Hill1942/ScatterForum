<div class="panelItem">
    <div class="panelItemTitle">Create New Group</div>
    <div id="admin_pane1_error1" class="adminError"></div>
    <div class="panelItemContent">
        <form>
            <div class="panelItemFormItem">
                <label class="common_label">Group Name</label>
                <input id="groupName" class="common_input" type="text">
            </div>
            <div class="panelItemFormItem">
                <label class="common_label">Moderator</label>
                <input id="groupModerator" class="common_input" type="text">
                <select style="margin-left: 10px" class="common_select">
                    <option value="0">Choose</option>
                    <option value="1">Kaidi</option>
                    <option value="2">Kaidan</option>
                    <option value="3">Tali</option>
                </select>
            </div>
            <div class="panelItemFormItem">
                <label class="common_label">Description</label>
                <input id="groupDesc" style="width: 600px" class="common_input" type="text">
            </div>
            <div class="panelItemFormItem">
                <input style="margin-left: 103px" class="common_btn" type="button" value="Confirm" id="groupNewBtn">
            </div>
        </form>
    </div>
</div>
<div class="panelItem">
    <div class="panelItemTitle">Edit A Group</div>
    <div id="admin_pane1_error2" class="adminError"></div>
    <div class="panelItemContent">
        <form>
            <div class="panelItemFormItem">
                <label class="common_label">Group</label>
                <select id="editGroupSelect" class="common_select">
                    <option value="#">Choose Group</option>
                    <?php
                    while ($groups_array = mysql_fetch_array($groups_select)) {
                        ?>
                        <option value="<?php echo $groups_array["group_id"]; ?>"><?php echo $groups_array["title"]; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="panelItemFormItem">
                <label class="common_label">New Name</label>
                <input id="newGroupName" class="common_input" type="text">
            </div>
            <div class="panelItemFormItem">
                <label class="common_label">New Moderator</label>
                <input id="newModerator" class="common_input" type="text">
            </div>
            <div class="panelItemFormItem">
                <label class="common_label">New Description</label>
                <input id="newDesc" style="width: 600px" class="common_input" type="text">
            </div>
            <div class="panelItemFormItem">
                <input style="margin-left: 103px" class="common_btn" type="button" value="Confirm" id="groupEditBtn">
            </div>
        </form>
    </div>
</div>
<div class="panelItem">
    <div class="panelItemTitle">Delete A Group</div>
    <div id="admin_pane1_error3" class="adminError"></div>
    <div class="panelItemContent">
        <form>
            <div class="panelItemFormItem">
                <label class="common_label">Group</label>
                <select id="deleteGroupSelect" class="common_select">
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
                <input style="margin-left: 103px" class="common_btn" type="button" value="Confirm" id="groupDeleteBtn">
            </div>
        </form>
    </div>
</div>
























