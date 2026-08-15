<?php
require_once('../../config.php');
$existing_remarks = [];
if (!empty($_GET['refnum'])) {
    $ref = $conn->real_escape_string($_GET['refnum']);
    $er = $conn->query("SELECT * FROM student_remarks WHERE refnum='$ref' LIMIT 1");
    if ($er && $er->num_rows > 0) $existing_remarks = $er->fetch_assoc();
}

?>

<div class="container-fluid">
    <p class="text-muted font-weight-bold border-bottom pb-1 mb-3">Remarks Form</p>
    <form action="" id="update-form">
        <input type="hidden" name="id" value="<?= isset($_GET['id']) ? $_GET['id'] : '' ?>">

        <!-- Row 1: Identifiers -->
        <div class="form-row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label small text-muted">User ID</label>
                    <input type="text" name="userid" id="userid" class="form-control form-control-border" value="<?= isset($_GET['userid']) ? $_GET['userid'] : '' ?>" required>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label small text-muted">Appointment Ref.</label>
                    <input type="text" name="refnum" id="refnum" class="form-control form-control-border" value="<?= isset($_GET['refnum']) ? $_GET['refnum'] : '' ?>" required>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label small text-muted">Instructor ID</label>
                    <input type="text" name="instructor" id="instructor" class="form-control form-control-border" value="<?= isset($_GET['instructor']) ? $_GET['instructor'] : '' ?>" required>
                </div>
            </div>
        </div>

        <!-- Row 2: Student Info -->
        <div class="form-row">
            <div class="col-12">
                <div class="form-group">
                    <label class="control-label small text-muted">Student Name</label>
                    <input type="text" name="Student_name" id="Student_name" class="form-control form-control-border" value="<?= isset($_GET['Student_name']) ? $_GET['Student_name'] : '' ?>" required>
                </div>
            </div>
        </div>

        <!-- Row 3: Test Results -->
        <div class="form-row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="written_score" class="control-label small text-muted">Written Test Score (0–100)</label>
                    <?php $ws = $existing_remarks['written_score'] ?? ''; ?>
                    <input type="number" name="written_score" id="written_score" class="form-control form-control-border" min="0" max="100" placeholder="e.g. 85" value="<?= htmlspecialchars($ws) ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="written_result" class="control-label small text-muted">Written Test Result</label>
                    <?php $wr = $existing_remarks['written_result'] ?? ''; ?>
                    <select name="written_result" id="written_result" class="form-control form-control-border">
                        <option value="">-- Select --</option>
                        <option value="PASSED" <?= $wr === 'PASSED' ? 'selected' : '' ?>>PASSED</option>
                        <option value="FAILED" <?= $wr === 'FAILED' ? 'selected' : '' ?>>FAILED</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="practical_result" class="control-label small text-muted">Practical Test Result</label>
                    <?php $pr = $existing_remarks['practical_result'] ?? ''; ?>
                    <select name="practical_result" id="practical_result" class="form-control form-control-border">
                        <option value="">-- Select --</option>
                        <option value="PASSED" <?= $pr === 'PASSED' ? 'selected' : '' ?>>PASSED</option>
                        <option value="FAILED" <?= $pr === 'FAILED' ? 'selected' : '' ?>>FAILED</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Row 4: Session Date & Overall Status -->
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="session_date" class="control-label small text-muted">Session Date</label>
                    <?php $sd = $existing_remarks['session_date'] ?? ''; ?>
                    <input type="date" name="session_date" id="session_date" class="form-control form-control-border" value="<?= htmlspecialchars($sd) ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="overall_status" class="control-label small text-muted">Overall Status</label>
                    <?php $os = $existing_remarks['overall_status'] ?? ''; ?>
                    <select name="overall_status" id="overall_status" class="form-control form-control-border">
                        <option value="">-- Select --</option>
                        <option value="FOR RETAKE" <?= $os === 'FOR RETAKE' ? 'selected' : '' ?>>FOR RETAKE</option>
                        <option value="COMPLETED" <?= $os === 'COMPLETED' ? 'selected' : '' ?>>COMPLETED</option>
                        <option value="ENDORSED TO LTO" <?= $os === 'ENDORSED TO LTO' ? 'selected' : '' ?>>ENDORSED TO LTO</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Row 5: Remarks -->
        <div class="form-row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="remarks" class="control-label small text-muted">Instructor Remarks</label>
                    <textarea name="remarks" id="remarks" class="form-control form-control-border" rows="3" placeholder="Enter instructor remarks..."><?= htmlspecialchars($existing_remarks['remarks'] ?? '') ?></textarea>
                </div>
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
