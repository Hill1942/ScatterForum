<div class="forum_control">
    <div class="left">
        <?php if(!empty($_SESSION["user"])) { ?>
            <button data-toggle="modal" data-target="#newpostModal">New Thread</button>
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

<?php include "newpost.inc" ?>