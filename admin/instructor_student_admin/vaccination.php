<?php
require_once('../../config.php');
?>

<div class="container-fluid">
    <form action="" id="update-form">
        <input type="hidden" name="id" value="<?= isset($_GET['id']) ? $_GET['id'] : '' ?>">

        <div class="row">
            <div class="col-lg-12">
                <fieldset>
                    <legend class="text-muted">Remarks form</legend>
                    <div class="form-group">
                        <label for="userid" class="control-label">User ID</label>
                        <input type="text" name="userid" id="userid" class="form-control form-control-border" value="<?= isset($_GET['userid']) ? $_GET['userid'] : '' ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="refnum" class="control-label">Appointment Ref.</label>
                        <input type="text" name="refnum" id="refnum" class="form-control form-control-border" value="<?= isset($_GET['refnum']) ? $_GET['refnum'] : '' ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="Student_name" class="control-label">Student Name</label>
                        <input type="text" name="Student_name" id="Student_name" class="form-control form-control-border" value="<?= isset($_GET['Student_name']) ? $_GET['Student_name'] : '' ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="instructor" class="control-label">Instructor ID</label>
                        <input type="text" name="instructor" id="instructor" class="form-control form-control-border" value="<?= isset($_GET['instructor']) ? $_GET['instructor'] : '' ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="remarks" class="control-label">Remarks</label>
                        <input type="text" name="remarks" id="remarks" class="form-control form-control-border" value="" required>
                    </div>
                </fieldset>
            </div>
        </div>
    </form>
</div>

<script>
    $(function() {
        $('#update-form').submit(function(e) {
            e.preventDefault();
            var _this = $(this);
            $('.pop-msg').remove();
            var el = $('<div>');
            el.addClass("pop-msg alert");
            el.hide();
            start_loader();
            $.ajax({
                url: _base_url_ + "classes/Master.php?f=healthcares",
                data: new FormData($(this)[0]),
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                dataType: 'json',
                error: function(err) {
               location.reload();
                },
                success: function(resp) {
                    if (resp.status == 'success') {
                        location.reload();
                    } else if (resp.msg) {
                        el.addClass("alert-danger");
                        el.text(resp.msg);
                        _this.prepend(el);
                    } else {
                        el.addClass("alert-danger");
                        el.text("An error occurred due to an unknown reason.");
                        _this.prepend(el);
                    }
                    el.show('slow');
                    $('html, body,.modal').animate({ scrollTop: 0 }, 'fast');
                    end_loader();
                }
            });
        });
    });
</script>
