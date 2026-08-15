</style>
<style>
aside.main-sidebar { background: #0d1b2a !important; }
aside.main-sidebar *, aside.main-sidebar h2, aside.main-sidebar a,
aside.main-sidebar p, aside.main-sidebar span, aside.main-sidebar i,
aside.main-sidebar .nav-link, aside.main-sidebar .nav-header { color: #ffffff !important; }
aside.main-sidebar .nav-header { color: #adc4d0 !important; font-weight:700; font-size:0.7rem; text-transform:uppercase; letter-spacing:0.08em; }
</style>
<!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4 sidebar-no-expand">
        <!-- Brand Logo -->
        <a href="<?php echo base_url ?>admin" class="brand-link bg-transparent text-sm border-info shadow-sm bg-gradient-dark">
        <img src="<?php echo validate_image($_settings->info('logo'))?>" alt="Store Logo" class="brand-image img-circle elevation-3 bg-black" style="width: 1.8rem;height: 1.8rem;max-height: unset;object-fit:scale-down;object-position:center center">
        <span class="brand-text font-weight-light"><?php echo $_settings->info('short_name') ?></span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-transition os-host-scrollbar-horizontal-hidden">
          <div class="os-resize-observer-host observed">
            <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
          </div>
          <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
            <div class="os-resize-observer"></div>
          </div>
          <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 646px;"></div>
          <div class="os-padding">
            <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
              <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
                <!-- Sidebar user panel (optional) -->
                <div class="clearfix"></div>
                <!-- Sidebar Menu -->
                <nav class="mt-4">
                   <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-compact nav-flat nav-child-indent nav-collapse-hide-child" data-widget="treeview" role="menu" data-accordion="false">
                    



 <?php if($_settings->userdata('type') == 6): ?>
 <?php  include 'dbconnection.php' ?>
<h2 align="center">  SUPER ADMIN</h2>

                   </li>
     <?php 

$nsospendingssd=0;
$where = '';
            $where .= "  ";
          $resultqqqq=$conn->query("SELECT * FROM `users` $where ")->num_rows;
          $nsospendingssd=$resultqqqq;?>
      <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=adminuser/list" class="nav-link nav-adminuser_list">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                          User
                        </p><span class="badge">Total <?php echo $nsospendingssd ?></span>
                      </a>
                    </li>
     <?php 

$nsospendingss=0;
$where = '';
            $where .= "  ";
          $resultqqqq=$conn->query("SELECT * FROM `appointment_list` $where ")->num_rows;
          $nsospendingss=$resultqqqq;?>
                      <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=addminappointment" class="nav-link nav-addminappointment">
                        <i class="nav-icon fas fa-calendar-day"></i>
                        <p>
                         Appointment List
                        </p>  <span class="badge">Total <?php echo $nsospendingss ?></span>
                      </a>
                    </li>


                     <?php 

$nsospendings=0;
$where = '';
            $where .= "  ";
          $resultqqqq=$conn->query("SELECT * FROM `healthcare` $where ")->num_rows;
          $nsospendings=$resultqqqq;?>
                       <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=adminhealthcare" class="nav-link nav-adminhealthcare">
                        <i class="nav-icon fas fa-calendar-day"></i>
                        <p>
                         Healthcare list
                        </p>
                          <span class="badge">Total <?php echo $nsospendings ?></span>
                      </a>
                    </li>

                   

  <?php 

$nsospending=0.00;
$where = '';
            $where .= " where `read`=0  ";
          $resultqqqq=$conn->query("SELECT * FROM `notification` $where ")->num_rows;
          $nsospending=$resultqqqq;?>
                      <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=adminnotif" class="nav-link nav-adminnotif">
                        <i class="nav-icon fas fa-bell"></i>
                        <p>
                       Notification logs
                        </p>
                          <span class="badge">unread <?php echo $nsospending ?></span>
                      </a>
                    </li>


   <li class="nav-header">Archiver</li>
    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=archive" class="nav-link nav-archive">
                        <i class="nav-icon  fas fa-id-card-alt"></i>
                        <p>
                          Archive
                        </p>
                      </a>
                    </li>

   <li class="nav-header">Setting</li>
      <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=system_info" class="nav-link nav-system_info">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                          Settings
                        </p>
                      </a>
                    </li>



     <?php endif; ?>


 <!-- Student & Staff of UNP -->
 <?php if($_settings->userdata('type') == 3): ?>

<h2 align="center">STUDENT</h2>


 <li class="nav-header">Set an Appointment</li>

  <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=setappointment" class="nav-link nav-setappointment">
                        <i class="nav-icon fas fa-calendar-day"></i>
                        <p>
                            Book Appointment
                        </p>
                      </a>
                    </li>



  <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=client_appointment" class="nav-link nav-client_appointment">
                        <i class="nav-icon fas fa-calendar-day"></i>
                        <p>
                         Appointment List
                        </p>
                      </a>
                    </li>
<?php  include 'dbconnection.php' ?>

  <?php 

$nsospending=0.00;
$where = '';
            $where .= " where `read`=0 && `clientid`  ='".$_settings->userdata('id')."' ";
          $resultqqqq=$conn->query("SELECT * FROM `notification` $where ")->num_rows;
          $nsospending=$resultqqqq;?>



<li class="nav-header">Calendar</li>
     <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=appointment_calendar_user" class="nav-link nav-appointment_calendar_user
">
                        <i class="nav-icon far fa-address-book"></i>
                        <p>
                    View Appointment
                        </p>
                      </a>
                    </li>












  <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=notification" class="nav-link nav-notification">
                        <i class="nav-icon fas fa-bell"></i>
                        <p>
                       Notification
                    
                        </p>
                          <span class="badge">unread <?php echo $nsospending ?></span>
                      </a>
                    </li>



       <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=chart" class="nav-link nav-chart">
                        <i class="nav-icon fas fa-question-circle"></i>
                        <p>
                          Records Report
                        </p>
                      </a>
                    </li>









     <?php endif; ?>




 <?php if($_settings->userdata('type') == 4): ?>


<h2 align="center">STUDENT</h2>


 <li class="nav-header"> Appointment</li>

  <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=setappointment" class="nav-link nav-setappointment">
                        <i class="nav-icon fas fa-calendar-day"></i>
                        <p>
                          Book Appointment
                        </p>
                      </a>
                    </li>


  <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=client_appointment" class="nav-link nav-client_appointment">
                        <i class="nav-icon fas fa-calendar-day"></i>
                        <p>
                         Appointment List
                        </p>
                      </a>
                    </li>

<?php  include 'dbconnection.php' ?>

  <?php  

$nsospending=0.00;
$where = '';
            $where .= " where `read`=0 && `clientid`  ='".$_settings->userdata('id')."' ";
          $resultqqqq=$conn->query("SELECT * FROM `notification` $where ")->num_rows;
          $nsospending=$resultqqqq;?>



<li class="nav-header">Calendar</li>
     <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=appointment_calendar_user" class="nav-link nav-appointment_calendar_user
">
                        <i class="nav-icon far fa-address-book"></i>
                        <p>
                    View Appointment
                        </p>
                      </a>
                    </li>







  <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=notification" class="nav-link nav-notification">
                        <i class="nav-icon fas fa-bell"></i>
                        <p>
                       Notification
                            
                        </p>
                          <span class="badge">unread <?php echo $nsospending ?></span>
                      </a>
                    </li>

                        <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=chart" class="nav-link nav-chart">
                        <i class="nav-icon fas fa-question-circle"></i>
                        <p>
                          Records Report
                        </p>
                      </a>
                    </li>


     <?php endif; ?>



 <?php if($_settings->userdata('type') == 5): ?>
<h2 align="center">Client 5 </h2>



<?php  include 'dbconnection.php' ?>



 <li class="nav-header">Set an Appointment</li>

  <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=setappointment" class="nav-link nav-setappointment">
                        <i class="nav-icon fas fa-calendar-day"></i>
                        <p>
                             Book Appointment
                        </p>
                      </a>
                    </li>



  <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=client_appointment" class="nav-link nav-client_appointment">
                        <i class="nav-icon fas fa-calendar-day"></i>
                        <p>
                         Appointment List
                        </p>
                      </a>
                    </li>

<?php  include 'dbconnection.php' ?>

  <?php 

$nsospending=0.00;
$where = '';
            $where .= " where `read`=0 && `clientid`  ='".$_settings->userdata('id')."' ";
          $resultqqqq=$conn->query("SELECT * FROM `notification` $where ")->num_rows;
          $nsospending=$resultqqqq;?>
          <li class="nav-header">Calendar</li>
     <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=appointment_calendar_user" class="nav-link nav-appointment_calendar_user
">
                        <i class="nav-icon far fa-address-book"></i>
                        <p>
                    View Appointment
                        </p>
                      </a>
                    </li>

  <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=notification" class="nav-link nav-notification">
                        <i class="nav-icon fas fa-bell"></i>
                        <p>
                       Notification
                
                        </p>
                           <span class="badge">unread <?php echo $nsospending ?></span>
                      </a>
                    </li>


                        <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=chart" class="nav-link nav-chart">
                        <i class="nav-icon fas fa-question-circle"></i>
                        <p>
                          Records Report
                        </p>
                      </a>
                    </li>


     <?php endif; ?>

 <?php if($_settings->userdata('type') == 2): ?>

<h2 align="center">INSTRUCTOR </h2>


   <li class="nav-item dropdown">
                      <a href="./" class="nav-link nav-home">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                          Dashboard
                        </p>
                      </a>
                    </li>






<?php  include 'dbconnection.php' ?>

  <?php 

$nsospendings=0.00;
$where = '';
            $where .= " where read='0' ";
          $seee=$conn->query("SELECT * FROM `appointment_list` WHERE `status`=1 && instructor_id='".$_settings->userdata('id')."'      ")->num_rows;
          $nsospendings=$seee;?>

                      <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=instructor_student" class="nav-link nav-seasion">
                        <i class="nav-icon fas fa-file-medical"></i>
                        <p>
                         My Student
                        </p>
                              <span class="badge"> <?php echo $seee ?></span>
                      </a>
                    </li>


<?php  include 'dbconnection.php' ?>

  <?php 

$nsospendings=0.00;
$where = '';
            $where .= " where read='0' ";
          $seee=$conn->query("SELECT * FROM `appointment_list` WHERE `status`=3 && instructor_id='".$_settings->userdata('id')."'      ")->num_rows;
          $nsospendings=$seee;?>

                      <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=done_lesson" class="nav-link nav-seasion">
                        <i class="nav-icon fas fa-file-medical"></i>
                        <p>
                         Completed Lesson
                        </p>
                              <span class="badge"> <?php echo $seee ?></span>
                      </a>
                    </li>
















                    
         <?php endif; ?>

                 
 <?php if($_settings->userdata('type') == 1): ?>

<h2 align="center">ADMIN </h2>


<?php  include 'dbconnection.php' ?>

  <?php 

$nsospending=0.00;
$where = '';
            $where .= " where read='0' ";
          $resultqqqq=$conn->query("SELECT * FROM `notification` WHERE `read`=0")->num_rows;
          $nsospending=$resultqqqq;?>

  <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=notification_logs" class="nav-link nav-notification_logs">
                        <i class="nav-icon fas fa-bell"></i>
                        <p>
                       Notification logs
                        </p>
                                           <span class="badge">unread <?php echo $nsospending ?></span>
                      </a>
                    </li>


              
  <li class="nav-header">Students on Process</li>

<?php  include 'dbconnection.php' ?>

  <?php 

$nsospendings=0.00;
$where = '';
            $where .= " where read='0' ";
          $seee=$conn->query("SELECT * FROM `appointment_list` WHERE `status`=1 && instructor_id=''")->num_rows;
          $nsospendings=$seee;?>

                      <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=seasion" class="nav-link nav-seasion">
                        <i class="nav-icon fas fa-file-medical"></i>
                        <p>
                         Assign Instructor
                        </p>
                              <span class="badge"> <?php echo $seee ?></span>
                      </a>
                    </li>

<?php  include 'dbconnection.php' ?>

  <?php 

$nsospendings=0.00;
$where = '';
            $where .= " where read='0' ";
          $seesse=$conn->query("SELECT * FROM `appointment_list` WHERE `status`=0 && instructor_id='' ")->num_rows;
          $nsospendings=$seesse;?>
      <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=appointments_emergency" class="nav-link nav-appointments_emergency">
                        <i class="nav-icon fas fa-calendar-day"></i>
                        <p>
                          Not Paid Appointment Slot!
                        </p>
                        <span class="badge"> <?php echo $seesse ?></span>
                      </a>
                    </li>
   


 <li class="nav-header">Results</li>
     <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=completed" class="nav-link nav-completed">
                        <i class="nav-icon far fa-address-book"></i>
                        <p>
                          Completed Course
                        </p>
                      </a>
                    </li>
     <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=instructor_student_admin" class="nav-link nav-instructor_student_admin">
                        <i class="nav-icon far fa-address-book"></i>
                        <p>
                          Results
                        </p>
                      </a>
                    </li>




       


                    <li class="nav-header">Calendar</li>
     <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=appointment_calendar" class="nav-link nav-appointment_calendar
">
                        <i class="nav-icon far fa-address-book"></i>
                        <p>
                    View Appointment
                        </p>
                      </a>
                    </li>










 <li class="nav-header">Comments & Recomendation</li>


<?php  include 'dbconnection.php' ?>

  <?php 

$nsospendings=0.00;
$where = '';
            $where .= " where read='0' ";
          $resultqqqq=$conn->query("SELECT * FROM `message_list` WHERE `status`=0")->num_rows;
          $nsospendings=$resultqqqq;?>
                    <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=inquiries" class="nav-link nav-inquiries">
                        <i class="nav-icon fas fa-question-circle"></i>
                        <p>
                          Inquiries
                        </p>
                        <span class="badge">unread <?php echo $nsospendings ?></span>
                      </a>
                    </li>






          
  <li class="nav-header">Appointment Information</li>
           



     <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=client" class="nav-link nav-client">
                        <i class="nav-icon far fa-address-book"></i>
                        <p>
                          Appointment List
                        </p>
                      </a>
                    </li>

                     


   <li class="nav-header">Archiver</li>
    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=archive" class="nav-link nav-archive">
                        <i class="nav-icon  fas fa-id-card-alt"></i>
                        <p>
                          Archive
                        </p>
                      </a>
                    </li>

   <li class="nav-header">Setting</li>



                             <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=user/list" class="nav-link nav-user_list">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                          Instructor
                        </p>
                      </a>
                    </li>


      <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=student/list" class="nav-link nav-patient_list">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                          Student
                        </p>
                      </a>
                    </li>

  <li class="nav-header">Office Schedule</li>



                        <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=schedule_settings" class="nav-link nav-schedule_settings">
                        <i class="nav-icon fas fa-calendar-day"></i>
                        <p>
                          Schedule Settings
                        </p>
                      </a>
                    </li>




              <li class="nav-header">Maintenance</li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=categories" class="nav-link nav-categories">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                          Category List
                        </p>
                      </a>
                    </li>

                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=services" class="nav-link nav-services">
                        <i class="nav-icon fas fa-th-list"></i>
                        <p>
                          Service List
                        </p>
                      </a>
                    </li>




  <li class="nav-header">Generate Report</li>
                   <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=report" class="nav-link nav-report">
                        <i class="nav-icon fas fa-calendar-day"></i>
                        <p>
                         Report(Appointment)
                        </p>
                      </a>
                    </li>

  <li class="nav-item">
                      <a href="<?php echo base_url ?>admin/?page=report_list" class="nav-link nav-report_list">
                        <i class="nav-icon fas fa-calendar-day"></i>
                        <p>
                         Report(Student)
                        </p>
                      </a>
                    </li>

                    <?php endif; ?>

                  </ul>
                </nav>
                <!-- /.sidebar-menu -->
              </div>
            </div>
          </div>
          <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
              <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
            </div>
          </div>
          <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
              <div class="os-scrollbar-handle" style="height: 55.017%; transform: translate(0px, 0px);"></div>
            </div>
          </div>
          <div class="os-scrollbar-corner"></div>
        </div>
        <!-- /.sidebar -->
      </aside>
      <script>
        var page;
    $(document).ready(function(){
      page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
      page = page.replace(/\//gi,'_');

      if($('.nav-link.nav-'+page).length > 0){
             $('.nav-link.nav-'+page).addClass('active')
        if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
            $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
          $('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
        }
        if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
          $('.nav-link.nav-'+page).parent().addClass('menu-open')
        }

      }
      
		$('#receive-nav').click(function(){
      $('#uni_modal').on('shown.bs.modal',function(){
        $('#find-transaction [name="tracking_code"]').focus();
      })
			uni_modal("Enter Tracking Number","transaction/find_transaction.php");
		})
    })
  </script>