

<style>
    
      #calendar {
        width: 100%;
        max-width: 100%;
        min-height: 400px;
        height: auto;
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














<style>
    .fc-event:hover, .fc-event-selected {
        color: black !important;
    }
    a.fc-list-day-text {
        color: black !important;
    }
    .fc-event:hover, .fc-event-selected {
        color: black !important;
        background: var(--light);
        cursor: pointer;
    }

</style>

<?php
$where = '';
$where .= "clientid = '" . $_settings->userdata('id') . "'";

$sched_query = $conn->query("SELECT a.*, p.id as appt_id, p.requestor, p.schedule, p.time, p.status, p.code
                            FROM `users` a
                            INNER JOIN `appointment_list` p ON a.id = p.clientid
                            WHERE $where
                            ORDER BY p.schedule ASC");
$sched_arr = json_encode($sched_query->fetch_all(MYSQLI_ASSOC));
?>
<?php
// $sched_query = $conn->query("SELECT a.*,p.requestor, p.schedule, p.time, p.status FROM `users` a inner join `appointment_list` p on p.clientid  ='".$_settings->userdata('id')."' ");
// $sched_arr = json_encode($sched_query->fetch_all(MYSQLI_ASSOC));
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

        var isMobile = window.innerWidth < 576;
        var calendar = new Calendar(calendarEl, {
                        initialView: isMobile ? 'listWeek' : 'dayGridMonth',
                        headerToolbar: isMobile ? {
                            left  : 'prev,next',
                            center: 'title',
                            right : 'listWeek,dayGridMonth'
                        } : {
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
