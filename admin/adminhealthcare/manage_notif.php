<?php
require_once('../../config.php');

$row = [];
if(isset($_GET['id'])){
    $rid = (int)$_GET['id'];
    $qry = $conn->query("SELECT * FROM student_remarks WHERE id = $rid");
    if($qry && $qry->num_rows > 0){
        $row = $qry->fetch_assoc();
    }
}
?>

<div class="container-fluid">
    <?php if(empty($row)): ?>
        <div class="alert alert-warning">Record not found.</div>
    <?php else: ?>
    <table class="table table-bordered">
        <tr><th style="width:35%">Student Name</th><td><?php echo htmlspecialchars($row['Student_name']); ?></td></tr>
        <tr><th>Appointment Code</th><td><?php echo htmlspecialchars($row['refnum']); ?></td></tr>
        <tr><th>Session Date</th><td><?php echo $row['session_date']; ?></td></tr>
        <tr><th>Remarks</th><td><?php echo htmlspecialchars($row['remarks']); ?></td></tr>
        <tr><th>Written Score</th><td><?php echo $row['written_score']; ?></td></tr>
        <tr><th>Written Result</th><td><?php echo htmlspecialchars($row['written_result']); ?></td></tr>
        <tr><th>Practical Result</th><td><?php echo htmlspecialchars($row['practical_result']); ?></td></tr>
        <tr><th>Overall Status</th><td><?php echo htmlspecialchars($row['overall_status']); ?></td></tr>
        <tr><th>Date Created</th><td><?php echo $row['date_created']; ?></td></tr>
    </table>
    <?php endif; ?>
</div>
