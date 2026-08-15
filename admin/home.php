<style>
    #cover-img{
        object-fit:cover;
        object-position:center center;
        width: 100%;
        height: 100%;
    }
    .fc-event-title-container{
        text-align:center;
    }
    .fc-event-title.fc-sticky{
        font-size:2em;
    }
</style>

<?php if($_settings->userdata('type') == 1): ?>
<!-- //admin main dashboards and direct link after log in
//place here the content you want for admin or add more -->
 <?php endif; ?>

<?php if($_settings->userdata('type') == 4): ?>
 <!-- // Student Dashboard and direct link after login
//place here the content you want for Student or add more -->
<a href="<?php echo base_url ?>admin/?page=appointment_calendar_user" class="nav-link nav-appointment_calendar_user
">
                       
 <?php endif; ?>

<?php if($_settings->userdata('type') == 2): ?>
  <!-- // instructor Dashboard and direct link after login
 //place here the content you want for instructor or add more -->
 <?php endif; ?>

<?php 
$appointments = $conn->query("SELECT * FROM `appointment_list` where `status` in (0,1) and date(`schedule`) >= '".date("Y-m-d")."' ");
$appoinment_arr = [];
while($appointments && $row = $appointments->fetch_assoc()){
    if(!isset($appoinment_arr[$row['schedule']])) $appoinment_arr[$row['schedule']] = 0;
    $appoinment_arr[$row['schedule']] += 1;
}
?>

<h1>Welcome to <?php echo $_settings->info('name') ?></h1>





 <?php if($_settings->userdata('type') == 1): ?>




<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">On Process</h3>
    </div>
    <div class="card-body">
        <div class="container-fluid">
        <div class="container-fluid">
            <table class="table table-hover table-striped table-bordered">
                <colgroup>
                    <col width="5%">
                    <col width="20%">
                    <col width="20%">
                    <col width="25%">
                  
                </colgroup>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Date Created</th>
                        <th>Code</th>
                        <th>Client Name</th>
                           <th>Instructor ID</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php 
                   
                        $i = 1;
                        $qry = $conn->query("SELECT * from `appointment_list` where status='1' && delete_flag=0  order by unix_timestamp(`schedule`) asc ");
                        while($qry && $row = $qry->fetch_assoc()):
                    ?>
                        <tr>
                          
                            <td class="text-center">00<?php echo $i++; ?></td>
                            <td class=""><B><?php echo date("M d, Y",strtotime($row['schedule'])) ?>  <?php echo date("h:m",strtotime($row['time'])) ?></B></td>
                            <td><?php echo ($row['code']) ?></td>
                            <td class=""><p class="truncate-1"><?php echo ucwords($row['requestor']) ?></p></td>
                            <td><?php echo ($row['instructor_id']) ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>

<hr class="border-info">
<div class="row">
    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-info elevation-1"><i class="fas fa-th-list"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Services</span>
            <span class="info-box-number text-right">
                  <h1>  <?php 
                    echo $conn->query("SELECT * FROM `service_list` ")->num_rows;
                ?></h1>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-primary elevation-1"><i class="fas fa-calendar-day"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Pending Request</span>
            <span class="info-box-number text-right">
              <h1>  <?php 
                    echo $conn->query("SELECT * FROM `appointment_list` where `status` = 0 ")->num_rows;
                ?></h1>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-success elevation-1"><i class="fas fa-calendar-day"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Confirmed Request</span>
            <span class="info-box-number text-right">
                 <h1> <?php 
                    echo $conn->query("SELECT * FROM `appointment_list` where `status` = 1 ")->num_rows;
                ?></h1>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-danger elevation-1"><i class="fas fa-calendar-day"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Cancelled Request</span>
            <span class="info-box-number text-right">
                 <h1> <?php 
                    echo $conn->query("SELECT * FROM `appointment_list` where `status` = 2 ")->num_rows;
                ?></h1>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

   <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-danger elevation-1"><i class="fas fa-calendar-day"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Instructor Incharge</span>
            <span class="info-box-number text-right">
                 <h1> <?php 
                    echo $conn->query("SELECT * FROM `appointment_list` where `status` = 4 ")->num_rows;
                ?></h1>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>



<br>


    <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-primary elevation-1"><i class="fas fa-id-card-alt"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Old Student</span>
            <span class="info-box-number text-right">
                 <h1> <?php 
                    echo $conn->query("SELECT * FROM `users` where `type` = 3 ")->num_rows;
                ?></h1>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

  <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-warning elevation-1"><i class="fas fa-id-card-alt"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">New Student</span>
            <span class="info-box-number text-right">
                 <h1> <?php 
                    echo $conn->query("SELECT * FROM `users` where `type` = 4 ")->num_rows;
                ?></h1>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>









 <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-info elevation-1"><i class="fas fa-id-card-alt"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">TOTAL Student</span>
            <span class="info-box-number text-right">
                 <h1> <?php 
                    echo $conn->query("SELECT * FROM `users` where type IN (3, 4, 5) ")->num_rows;
                ?></h1>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>





 <div class="col-12 col-sm-12 col-md-6 col-lg-3">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-info elevation-1"><i class="fas fa-id-card-alt"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Instructor</span>
            <span class="info-box-number text-right">
                 <h1> <?php 
                    echo $conn->query("SELECT * FROM `users` where type=2 ")->num_rows;
                ?></h1>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>



</div>
<hr>   <?php endif; ?>
<br>
<?php if(in_array($_settings->userdata('type'), [1,2])): ?>
<div class="card card-outline card-primary rounded-0 shadow">
    <div class="card-header rounded-0">
            <h4 class="card-title">Calendar</h4>
    </div>
   
    

<style>
    
      #calendar {
        height: 530px;
        width: 100%;
        max-width: 100%;
    }
</style>
<?php
 $sched_arr=array();
?>
<hr>
<div class="container">
  <div class="card">
    <div class="card-body">
        <div id="calendar"></div>
    </div>
  </div>
</div>






<?php
$sched_query = $conn->query("SELECT a.*, p.id as appt_id, p.code, p.requestor, p.schedule, p.time, p.status FROM `users` a inner join `appointment_list` p on a.id = p.clientid");
$sched_arr = json_encode($sched_query->fetch_all(MYSQLI_ASSOC));
?>
<script>
    $(function(){
        $('.select2').select2()
        var Calendar = FullCalendar.Calendar;
        var date = new Date()
        var d    = date.getDate(),
            m    = date.getMonth(),
            y    = date.getFullYear()
        var scheds = $.parseJSON('<?php echo ($sched_arr) ?>');

        var calendarEl = document.getElementById('calendar');

        var calendar = new Calendar(calendarEl, {
                        initialView:"dayGridMonth",
                        headerToolbar: {
                            right : "dayGridWeek,dayGridMonth,listDay prev,next"
                        },
                        buttonText:{
                            dayGridWeek :"Week",
                            dayGridMonth :"Month",
                            listDay :"Day",
                            listWeek :"Week",
                        },
                        themeSystem: 'bootstrap',
                        //Random default events
                        events:function(event,successCallback){
                            var days = moment(event.end).diff(moment(event.start),'days')
                            var events = []
                            Object.keys(scheds).map(k=>{   var bg = '';
    if (scheds[k].status == 0)
    bg = '#007bff'; // Blue color as primary
else if (scheds[k].status == 1)
    bg = '#28a745'; // Green color as success
else if (scheds[k].status == 3)
    bg = '#28a745'; // Red color as danger
else if (scheds[k].status == 2)
    bg = '#dc3545'; // Cyan color as info
else
    bg = '#17a2b8'; // Cyan color as default

                                console.log(bg)
                                events.push({
                                    id          : scheds[k].appt_id,
                                    title          : scheds[k].requestor,
                                        start: moment(scheds[k].schedule + ' ' + scheds[k].time).format('YYYY-MM-DD[T]HH:mm'),
                                    backgroundColor: bg, 
                                    borderColor: bg, 
                                    });
                            })
                            console.log(events)
                            successCallback(events)

                        },
                        eventClick:(info)=>{
                            uni_modal("Appointment Details","appointment_calendar/view_details.php?id="+info.event.id)
                        },
                        editable  : false,
                        selectable: true,
                        selectAllow: function(select) {
                                console.log(moment(select.start).format('dddd'))
                            if(moment().subtract(1, 'day').diff(select.start) < 0 && (moment(select.start).format('dddd') != 'Saturday' && moment(select.start).format('dddd') != 'Sunday'))
                                return true;
                            else
                                return false;
                        }
                        });

                        calendar.render();
                        // $('#calendar').fullCalendar()
        $('#location').change(function(){
            location.href = "./?lid="+$(this).val();
        })
    })
</script>

<hr>
</div>
</div>
<?php endif; ?>

<?php if(in_array($_settings->userdata('type'), [3,4,5])): ?>
<?php
$my_id = (int)$_settings->userdata('id');
$student_appts_q = $conn->query("SELECT `id`, `code`, `schedule`, `time`, `status` FROM `appointment_list` WHERE `clientid` = '{$my_id}'");
$student_appts = $student_appts_q ? $student_appts_q->fetch_all(MYSQLI_ASSOC) : [];
?>
<div class="card card-outline card-success rounded-0 shadow mt-3">
    <div class="card-header rounded-0">
        <h4 class="card-title">My Appointment Schedule</h4>
    </div>
    <div class="card-body">
        <style>
            #student-calendar { width: 100%; max-width: 100%; }
        </style>
        <div id="student-calendar"></div>
    </div>
</div>
<script>
$(function(){
    var studentAppts = <?= json_encode($student_appts) ?>;
    var studentCalEl = document.getElementById('student-calendar');
    var studentCal = new FullCalendar.Calendar(studentCalEl, {
        initialView: 'dayGridMonth',
        headerToolbar: { right: 'dayGridMonth,listMonth prev,next' },
        buttonText: { dayGridMonth: 'Month', listMonth: 'List' },
        themeSystem: 'bootstrap',
        events: function(info, successCallback) {
            var events = studentAppts.map(function(a) {
                var bg;
                if (a.status == 0)      bg = '#007bff';
                else if (a.status == 1) bg = '#28a745';
                else if (a.status == 3) bg = '#28a745';
                else                    bg = '#dc3545';
                return {
                    id: a.id,
                    title: a.code || 'Appointment',
                    start: a.schedule.substring(0, 10),
                    backgroundColor: bg,
                    borderColor: bg
                };
            });
            successCallback(events);
        },
        eventClick: function(info) {
            uni_modal('Appointment Details', '<?= base_url ?>admin/appointment_calendar_user/view_details.php?id=' + info.event.id);
        }
    });
    studentCal.render();
});
</script>
<?php endif; ?>

