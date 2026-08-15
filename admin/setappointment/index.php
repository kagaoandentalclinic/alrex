
<style>
    .fc-event-title-container{
        text-align:center;
    }
    .fc-event-title.fc-sticky{
        font-size:1em;
    }
      #appointmentCalendar {
        height: 530px;
        width: 900px;    
        /* Adjust the height as per your requirement */
    }
</style>


<?php 
$wheres= "clientid = '" . $_settings->userdata('id') . "'";
$appointments = $conn->query("SELECT * FROM `appointment_list` where `status` in (0,1) and $wheres and date(schedule) >= '".date("Y-m-d")."' ");
$appoinment_arr = [];
while($row = $appointments->fetch_assoc()){
    if(!isset($appoinment_arr[$row['schedule']])) $appoinment_arr[$row['schedule']] = 0;
    $appoinment_arr[$row['schedule']] += 1;
}
?>
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-outline card-primary rounded-0 shadow">
                <div class="card-header rounded-0">
                        <h4 class="card-title">Appointment Availability</h4>
                </div>
                <div class="card-body" align="center">
                   <div id="appointmentCalendar"></div>
                </div>
            </div>
        </div>
    </div>
</div><script>
    var calendar;
    var appointment = $.parseJSON('<?= json_encode($appoinment_arr) ?>') || {};
    start_loader();
    $(function(){
        var date = new Date();
        var d    = date.getDate(),
            m    = date.getMonth(),
            y    = date.getFullYear();
        var Calendar = FullCalendar.Calendar;

        let maxAppointment = <?= $_settings->info('max_appointment') ?>; // Assuming $_settings->info('max_appointment') retrieves the value

        let text = maxAppointment > 0 ? "available" : "not available";

        calendar = new Calendar(document.getElementById('appointmentCalendar'), {
            headerToolbar: {
                left  : false,
                center: 'title',
            },
            selectable: true,
            themeSystem: 'bootstrap',
            // Random default events
            events: [
                {
                    daysOfWeek: [0,1,2,3,4,5,6], // these recurrent events move separately
                    title: text, // Set the text value here
                    allDay: true,
                }
            ],
            eventDidMount: function(info) {
                if (appointment[info.event.startStr]) {
                    // Check if an appointment exists for the day
                    $(info.el).find('.fc-event-title.fc-sticky').text("Appointment Set");
                    $(info.el).css('background-color', 'red'); // Set background color to red
                } else {
                    // Display availability
                    $(info.el).find('.fc-event-title.fc-sticky').text(info.event.title);

                    // Update background color based on title
                    if (info.event.title === "available") {
                        $(info.el).css('background-color', 'green');
                    } else if (info.event.title === "not available") {
                        $(info.el).css('background-color', 'red');
                    }
                }

                end_loader();
            },
            eventClick: function(info) {
                console.log(info.el);
                if ($(info.el).find('.fc-event-title.fc-sticky').text() === 'available') {
                    uni_modal("Set an Appointment", "../add_appointment.php?schedule=" + info.event.startStr, "mid-large");
                }
            },
            validRange: {
                start: moment(date).format("YYYY-MM-DD"),
            },
            editable: true
        });

        calendar.render();
    });
</script>





<!-- 
<script>
    var calendar;
    var appointment = $.parseJSON('<?= json_encode($appoinment_arr) ?>') || {};
    start_loader();
    $(function(){
        var date = new Date()
        var d    = date.getDate(),
            m    = date.getMonth(),
            y    = date.getFullYear()
        var Calendar = FullCalendar.Calendar;

        calendar = new Calendar(document.getElementById('appointmentCalendar'), {
            headerToolbar: {
                left  : false,
                center: 'title',
            },
            selectable: true,
            themeSystem: 'bootstrap',
            //Random default events
            events: [
                {
                    daysOfWeek: [0,1,2,3,4,5,6], // these recurrent events move separately
                    title:'<?= $_settings->info('max_appointment') ?>',
                    allDay: true,
                    }
            ],
            eventClick: function(info) {
                   console.log(info.el)
                   if($(info.el).find('.fc-event-title.fc-sticky').text() > 0)
                    uni_modal("Set an Appointment","../add_appointment.php?schedule="+info.event.startStr,"mid-large")
                },
            validRange:{
                start: moment(date).format("YYYY-MM-DD"),
            },
            eventDidMount:function(info){
                $(info.el).css('background-color', 'green');
                
                // console.log(appointment)
                if(!!appointment[info.event.startStr]){
                    var available = parseInt(info.event.title) - parseInt(appointment[info.event.startStr]);
                     $(info.el).find('.fc-event-title.fc-sticky').text(available)
                    
                }
                end_loader()
            },
            editable  : true
        });

    calendar.render();
    })
</script>  -->

<!-- <script>
   var calendar;
    var appointment = $.parseJSON('<?= json_encode($appoinment_arr) ?>') || {};
    start_loader();
    $(function(){
        var date = new Date()
        var d    = date.getDate(),
            m    = date.getMonth(),
            y    = date.getFullYear()
        var Calendar = FullCalendar.Calendar;

        let maxAppointment = <?= $_settings->info('max_appointment') ?>; // Assuming $_settings->info('max_appointment') retrieves the value

        calendar = new Calendar(document.getElementById('appointmentCalendar'), {
            headerToolbar: {
                left  : false,
                center: 'title',
            },
            selectable: true,
            themeSystem: 'bootstrap',
            // Random default events
            eventClick: function(info) {
                console.log(info.el);
                if ($(info.el).find('.fc-event-title.fc-sticky').text() === 'available') {
                    uni_modal("Set an Appointment","../add_appointment.php?schedule="+info.event.startStr,"mid-large");
                }
            },
            validRange: {
                start: moment(date).format("YYYY-MM-DD"),
            },
            eventDidMount: function(info) {
                if (!!appointment[info.event.startStr]) {
                    var available = parseInt(appointment[info.event.startStr]);
                    // Update the event title text based on availability
                    if (available < maxAppointment) {
                        info.event.setProp('title', 'available');
                        $(info.el).css('background-color', 'green');
                    } else {
                        info.event.setProp('title', 'not available');
                        $(info.el).css('background-color', 'red');
                    }
                    $(info.el).find('.fc-event-title.fc-sticky').text(info.event.title);
                }

                end_loader();
            },
            eventClick: function(info) {
                console.log(info.el);
                if (info.event.title === "available") {
                    uni_modal("Set an Appointment","../add_appointment.php?schedule="+info.event.startStr,"mid-large");
                } else {
                    alert("Maximum appointment limit reached.");
                }
            },
            validRange:{
                start: moment(date).format("YYYY-MM-DD"),
            },
            editable: true
        });

        calendar.render();
    });
</script> -->