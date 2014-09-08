<div class="modal fade" id="newpostModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="margin-top: 80px">
        <div id="newpostModalContent" class="modal-content">
            <a href="#" class="appleCloseBtn" data-dismiss="modal" aria-hidden="true" style="top: -15px;left: -15px;"></a>
            <div class="modal-body">
                <form id="newpostForm" method="post" action="">
                    <h3 class="loginMessage">Write Some Inspiration</h3>
                    <input id="newpost_title" name="post_title" type="text">
                    <textarea name="newpost_content" id="newpost_content"></textarea>
                    <script>
                        CKEDITOR.replace( 'newpost_content' );
                    </script>
                    <div id="newpost_control">
                        <input id="newpost_submit" name="post_submit" type="button" value="publish">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>