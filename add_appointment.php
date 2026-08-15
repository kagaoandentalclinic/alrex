<?php
require_once('./config.php');
$schedule = $_GET['schedule'];
?>


<style type="text/css">
    #CheckboxContainer{
width: 100%;
max-width: 100%;
margin: 10px 0;
overflow: hidden;
    }
    #TheCheckbox{
        margin-right: 6px;
    }
    #TheCheckboxLabel{
        overflow: hidden;
    }
</style>



<style type="text/css">
    .flex-container{
        display: flex;
    }


</style>
<!-- CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/css/select2.min.css" rel="stylesheet" />

<!-- JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>


<div class="container-fluid">

<h3><center><img src="../uploads/ALREXLOGO.png"  style="width:80px;height: 80px;"><br><U>
<b>
ALREX DRIVING SCHOOL APPOINTMENT FORM<BR></U>

</h3></b>
</center>







    <form action="" id="appointment-form">
        <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">

        <dl>
            <dt class="text-muted">Appointment Schedule</dt>

            <dd class=" pl-3"><b>



 


               <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Select Date</label>
                            <input type="date" name="schedule" id="schedule" class="form-control form-control-border" placeholder="<?php echo isset($schedule) ? $schedule : '' ?>" value ="<?php echo isset($schedule)? date("Y-m-d",strtotime($schedule)) : "" ?>" required>
                            <div id="slot-info" class="mt-1" style="font-size:0.92em;font-weight:normal;"></div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Select Time</label>
                            <?php
                                $start = new DateTime(date(DATE_ATOM, strtotime('8am')));
                                $end   = new DateTime(date(DATE_ATOM, strtotime('5pm')));
                                $interval = new DateInterval('PT30M');
                                $start->sub($interval);
                                $slots = [];
                                while ($start->add($interval) <= $end) $slots[] = $start->format('h:i a');
                                printf('<select name="time" id="time" class="form-control form-control-border"><option>%s</select>', implode('<option>', $slots));
                            ?>
                        </div>
                    </div>
               </div>
</b></dd>
        </dl>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <fieldset>
                <legend class="text-muted">Personal Information</legend>




<div class="flex-container">
<div class="form-group">

  <input type="text" name="clientid" id="clientid" class="form-control form-control-border" placeholder="Juan D. Dela Cruz" value ="<?php echo ucwords($_settings->userdata('id') ?? '') ?>" hidden >
</div>

<div class="form-group" style="width: 80%;">
  <label  class="control-label">Name</label>
  <input type="text"  id="requestor" name="requestor" class="form-control form-control-border" placeholder="Juan D. Dela Cruz" value ="<?php echo ucwords($_settings->userdata('firstname').' '.$_settings->userdata('middlename').' '.$_settings->userdata('lastname').' '.$_settings->userdata('extension')) ?>" readonly >
</div>
</div>
<div class="form-group">
  <label>Address</label>
  <div class="form-row">
    <div class="col-md-4">
      <label class="small text-muted mb-0">Province</label>
      <input type="text" class="form-control form-control-border mb-1" value="<?= htmlspecialchars($_settings->userdata('province') ?? '') ?>" readonly>
    </div>
    <div class="col-md-4">
      <label class="small text-muted mb-0">Municipality / City</label>
      <input type="text" class="form-control form-control-border mb-1" value="<?= htmlspecialchars($_settings->userdata('city') ?? '') ?>" readonly>
    </div>
    <div class="col-md-4">
      <label class="small text-muted mb-0">Barangay</label>
      <input type="text" class="form-control form-control-border mb-1" value="<?= htmlspecialchars($_settings->userdata('barangay') ?? '') ?>" readonly>
    </div>
  </div>
  <div class="form-row mt-1">
    <div class="col-md-4">
      <input type="text" id="appt-zip" class="form-control form-control-border" placeholder="Zip Code" readonly value="<?= htmlspecialchars($_settings->userdata('zip') ?? '') ?>">
    </div>
  </div>
</div>

<div class="row">
    <div class="col-12 col-sm-4 col-md-4">
        <div class="form-group">
            <label>Birth Date</label>
            <input type="text" class="form-control form-control-border" value="<?php echo ucwords($_settings->userdata('dob') ?? '') ?>" readonly>
        </div>
    </div>
    <div class="col-12 col-sm-4 col-md-4">
        <div class="form-group">
            <label>Civil Status</label>
            <input type="text" class="form-control form-control-border" value="<?php echo ucwords($_settings->userdata('civil') ?? '') ?>" readonly>
        </div>
    </div>
    <div class="col-12 col-sm-4 col-md-4">
        <div class="form-group">
            <label>Sex</label>
            <input type="text" class="form-control form-control-border" value="<?php echo ucwords($_settings->userdata('sex') ?? '') ?>" readonly>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-sm-4 col-md-4">
        <div class="form-group">
            <label>Contact</label>
            <input type="text" class="form-control form-control-border" value="<?php echo ucwords($_settings->userdata('number') ?? '') ?>" readonly>
        </div>
    </div>
    <div class="col-12 col-sm-8 col-md-8">
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control form-control-border" value="<?php echo $_settings->userdata('username') ?>" readonly>
        </div>
    </div>
</div>


                

<!-- 
 <div class="form-group" style="display: none;">
    <label for="category_id" class="control-label">category:</label>
    <selectname="category_id" id="category_id" required>
        <option value="4" selected>New</option>
    </select>
</div>


 <div class="form-group" style="width: 40%;">
                    <label for="service_id" class="control-label ">Service(s)</label>
                    
                    <select name="service_id" id="service_id" class="form-control form-control-border select2">
                    
                        <option value="N/A"></option>
                        <option value="Theoretical Driving Course">TDC (Theoretical Driving Course)</option>
                        <option value="Practical Driving Courses">PDC (Practical Driving Courses)</option>
                        <option value="Special Tutorial Lesson">STL (Special Tutorial Lesson)</option>
                    </select>
                </div> -->


                   
 <input type="hidden" name="category_id" id="category_id" class="form-control form-control-border"  value ="2" required>

  <label for="service_id" class="control-label">Service`s</label>

<div class="form-group w-100">
    <div class="row">
    <?php
    $list11 = $conn->query("SELECT * FROM service_list where delete_flag = 0 ".(isset($service_id) && !empty($service_id) ? " or id in ('{$service_id}')" : "")." order by name asc");
    while ($row00 = $list11->fetch_assoc()) {
        $sn = $row00["name"];
        $id00 = $row00["id"];
        echo "<div class='col-12 col-sm-6 col-md-4 py-1'>";
        echo "<div class='icheck-primary d-inline'>";
        echo "<input type='checkbox' name='service_id[]' id='service_id$id00' value='$id00'>";
        echo "<label for='service_id$id00'>$sn</label>";
        echo "</div></div>";
    }
    ?>
    </div>
</div>


</div>


 <div class="flex-container">

  <div class="form-group">

        <label for="application" class="control-label">Type of Application</label>
        <select id="application" name="application" class="form-control form-control-border select2">
        <option value="NewStudentPermit">NEW STUDENT PERMIT</option>
        <option value="NONPROFFESSIONAL">NEW NON-PROFFESSIONAL</option>
        <option value="RENEWAL">RENEWAL</option>
        <option value="ADDITIONALRESTRICTIONCODE">ADDITIONAL RESTRICTION CODE</option>
        <option value="NEWPROFFESSIONAL">NEW PROFFESSIONAL</option>
     
        <!-- Add more option as needed -->
    </select>
    </div>
    
    

    &nbsp;&nbsp;
    <div class="form-group"> 
    <label for="dl" class="control-label">RESTRICTION/DL-CODE</label>
    <!-- <select id="dl" name="dl" class="form-control form-control-border select2"></select> -->
    <select name="dl[]" id="dl" class="form-control form-control-border select2" multiple>

</select>
</div>

<script>
  $(document).ready(function() {
    $('.select2').select2();
  });
</script>

 &nbsp;&nbsp; 
<div class="form-group">
                         <label for="at" class="control-label">AT</label>

                        <select name="at" id="at" class="form-control form-control-border select2">
                             <option value="N/A">N/A</option>
                            
                            <option value="AT">AT</option>

  
 
                        </select>

                    </div>  


 &nbsp;&nbsp; 

<div class="form-group">
                        <label for="mt" class="control-label">MT</label>

                        <select name="mt" id="mt" class="form-control form-control-border select2">
                             <option value="N/A">N/A</option>
                            
                            <option value="MT">MT</option>

  
 
                        </select>

                    </div> 



</div> 
<br>


 <div class="flex-container">
     <div class="form-group">
                        <label for="stud_permit" class="control-label">STUDENT PERMIT NUMBER</label>
                        <input type="text" name="stud_permit" id="stud_permit" class="form-control form-control-border" placeholder="(e.g.F123456789)" value ="<?php echo ucwords($_settings->userdata('studentpermit') ?? '') ?>" required>
                    </div>

 &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp; 
     <div class="form-group">
                        <label for="license" class="control-label">DRIVER`S LICENSE NUMBER</label>
                        <input type="text" name="license" id="license" class="form-control form-control-border" placeholder="N08888888" value ="<?php echo ucwords($_settings->userdata('license') ?? '') ?>" required>
                    </div>
</div> 

                </fieldset>





<p>*Any payments made by the applicant, once they are paid, is <b>NONREFUNDABLE</b>.<br>
<span style="color: red;">Note: leave it blank if not applicable</span></p>




            </div>
           
        

            </div>


         
        </div>
    </form>
</div>
<script>
 
    $(function(){


        $('#uni_modal #appointment-form').submit(function(e){
            e.preventDefault();
            var _this = $(this)
            $('.pop-msg').remove()
            var el = $('<div>')
                el.addClass("pop-msg alert")
                el.hide()

            // Age limit check: must be at least 17 years old to book
            var userDob = '<?php echo $_settings->userdata('dob') ?>';
            if (userDob) {
                var today = new Date();
                var birth = new Date(userDob);
                var age = today.getFullYear() - birth.getFullYear();
                var m = today.getMonth() - birth.getMonth();
                if (m < 0 || (m === 0 && today.getDate() < birth.getDate())) age--;
                if (age < 17) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Age Restriction',
                        html: '<p>You must be at least <strong>17 years old</strong> to book an appointment.</p><p>Your current age is <strong>' + age + '</strong>.</p>'
                    });
                    return;
                }
            }

            start_loader();
            $.ajax({
                url:_base_url_+"classes/Master.php?f=save_appointment",
				data: new FormData($(this)[0]),
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST',
                dataType: 'json',
				error:err=>{
					console.log(err)
					alert_toast("Please make sure to fill everything (check the Services list)",'error');
					end_loader();
				},
                success:function(resp){
                    if(resp.status == 'success'){
                    end_loader();
                        setTimeout(() => {
                         uni_modal("Success", "success_msg.php?code=" + resp.code )

                            
                        }, 750);
                    }else if(!!resp.msg){
                        el.addClass("alert-danger")
                        el.text(resp.msg)
                        _this.prepend(el)
                    }else{
                        el.addClass("alert-danger")
                        el.text("Please make sure to fill everything (check the Services list)")
                        _this.prepend(el)
                    }
                    el.show('slow')
                    $('html,body,.modal').animate({scrollTop:0},'fast')
                    end_loader();
                }
            })
        })
    })
</script>


<script>
    // DL codes per application type (Student Permit has no DL code)
    const res = {
        NONPROFFESSIONAL: ["A", "A1", "B", "B1", "B2"],
        RENEWAL : ["A", "A1", "B", "B1", "B2"],
        ADDITIONALRESTRICTIONCODE : ["A", "A1", "B", "B1", "B2"],
        NEWPROFFESSIONAL : ["A", "A1", "B", "B1", "B2"]
    };

    // Function to update DL dropdown (hidden for Student Permit)
    function updateDlDropdown() {
        const selectedApplication = $("#application").val();
        const dlDropdown = $("#dl");
        const dlGroup = dlDropdown.closest('.form-group');

        if (selectedApplication === 'NewStudentPermit') {
            // Student Permit applicants have no DL/restriction code requirement
            dlGroup.hide();
            dlDropdown.val(null);
        } else {
            dlGroup.show();
            dlDropdown.empty();
            if (res[selectedApplication]) {
                res[selectedApplication].forEach(dl => {
                    dlDropdown.append($("<option>").text(dl));
                });
            }
        }
    }

    // Initial setup
    $(document).ready(function () {
        updateDlDropdown();
        $("#application").change(function () {
            updateDlDropdown();
        });
    });
</script>

<script>
$(function(){
    function checkSlots(date) {
        var $info = $('#slot-info');
        if (!date) { $info.html(''); return; }
        $.getJSON(_base_url_ + 'classes/Master.php?f=get_slot_count&date=' + date, function(data) {
            var avail = data.available;
            var max   = data.max;
            if (avail <= 0) {
                $info.html('<span class="badge badge-danger">Fully Booked — 0 of ' + max + ' slots available</span>');
            } else if (avail <= Math.ceil(max * 0.3)) {
                $info.html('<span class="badge badge-warning">' + avail + ' of ' + max + ' slots remaining</span>');
            } else {
                $info.html('<span class="badge badge-success">' + avail + ' of ' + max + ' slots available</span>');
            }
        });
    }

    // Check on load if date is pre-filled
    checkSlots($('#schedule').val());

    // Check whenever date changes
    $('#schedule').on('change', function(){
        checkSlots($(this).val());
    });
});
</script>


