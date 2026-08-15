  <?php 
  $user = $conn->query("SELECT * FROM users where id ='{$_GET['id']}'");
  foreach($user->fetch_array() as $k =>$v){
    $meta[$k] = $v;
  }
  ?>
  <?php if($_settings->chk_flashdata('success')): ?>
  <script>
    alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
  </script>
  <?php endif;?>

  
  <style type="text/css">
    .flex-container{
      display: flex;
    }


  </style>


  <div class="card card-outline ">

  <div class="card-body">
<!-- 
  <h3><br><center><img src="../uploads/ALREXLOGO.png"  style="width:110px;height:110px;"><br>
  <b>
  ALREX DRIVING SCHOOL<BR>SAN ILDEFONSO BRANCH <BR>USER RECORD</BR>

  </b></h3>
  </center>
  <br>


  <p style="text-align:right;">Date: <?php  echo date("Y/m/d");?></p><br>

  <br>


  <table style="width:100%">
    
    <th><b>USER INFORMATION</b></th>

    <tr>
      <td>Name: &nbsp;<b><?php echo isset($meta['firstname']) ? $meta['firstname']: '' ?>&nbsp;<?php echo isset($meta['lastname']) ? $meta['lastname']: '' ?></b></td>
      <td></td>

      <td>Contact Number: <b><?php echo isset($meta['number']) ? $meta['number']: '' ?></b></td>
    </tr>
    <tr>
      <td>Email: <b><?php echo isset($meta['username']) ? $meta['username']: '' ?></b></td>
      <td></td>
    <td>Date of Birth: <b><?php echo isset($meta['dob']) ? $meta['dob']: '' ?></b></td>
    </tr>

    <tr>
      <td>License Number: <b><?php echo isset($meta['license']) ? $meta['license']: '' ?></b></td>
      <td>Type: <b>
          <?php switch ($meta['type']){

      case '	3		 ':echo '	Old	';break;
      case '	4		 ':echo '	New';break;
      case '	2		 ':echo '	Instructor';break;
          }
      ?>
      
  </b></td>
    <td>Student Permit: <b><?php echo isset($meta['studentpermit']) ? $meta['studentpermit']: '' ?></b></td>
    </tr>

    <tr>
      <td>Adderess:<b><?php echo isset($meta['address']) ? $meta['address']: '' ?></b> </td>
      <td></td>
    
    </tr>

    </table>
    <hr>
    <table style="width:100%">

  

    <tr>

      <td>Age: &nbsp;<b><?php echo isset($meta['age']) ? $meta['age']: '' ?></b></td>  
      <td>Sex:&nbsp; <b><?php echo isset($meta['sex']) ? $meta['sex']: '' ?></b></td> 
      <td>Civil Status:&nbsp; <b><?php echo isset($meta['civil']) ? $meta['civil']: '' ?></b></td>
          <td></td>
    </tr>
    <tr>
      <td>Date Joined: <b><?php echo isset($meta['date_added']) ? $meta['date_added']: '' ?></b></td>
        <td> <b></b></td>
            <td><b></b></td>
    </tr>
  </table>


  <hr>



  </div>
  <center>
  <br><br><br><br><br><br><br><br>_____________________________________<br>
  Administration
  </center>
      





  <style>
    img#cimg{
      height: 15vh;
      width: 15vh;
      object-fit: cover;
      border-radius: 100% 100%;
    }
  </style>
  <script>
    function displayImg(input,_this) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
              $('#cimg').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    $('#manage-user').submit(function(e){
      e.preventDefault();
  var _this = $(this)
      start_loader()
      $.ajax({
        url:_base_url_+'classes/Users.php?f=save',
        data: new FormData($(this)[0]),
          cache: false,
          contentType: false,
          processData: false,
          method: 'POST',
          type: 'POST',
        success:function(resp){
          if(resp ==1){
            location.reload()
          }else{
            $('#msg').html('<div class="alert alert-danger">Username already exist</div>')
            end_loader()
          }
        }
      })
    })

  </script>



 -->

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
          <!-- script type="text/javascript" src="../../jquery.ph-locations.js"></script -->
          <script type="text/javascript" src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script>
        










  <style type="text/css">
      #CheckboxContainer{
  width: 900px;
  margin: 20px auto;

  overflow: hidden;

      }
      #TheCheckbox{
          float: left;
          margin: 10px 10px;

      }
      #TheCheckboxLabel{
          margin: 10px 10px;
          overflow: hidden;
      }
  </style>



  <style type="text/css">
      .flex-container{
          display: flex;
      }


  </style>


  <div class="container-fluid">

  <h3><center><img src="../uploads/ALREXLOGO.png"  style="width:80px;height: 80px;"><br><U>
  <b>
  ALREX DRIVING SCHOOL<BR></U>

  </h3></b>
  <br>


  <p style="text-align:right;">Date: <?php  echo date("Y/m/d");?></p>


  </center>
  <!-- <form action="" id="appointment-form">
          <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">

          <dl>
              <dt class="text-muted">Appointment Schedule</dt>

              <dd class=" pl-3"><b> -->



  


                <!-- <div class="flex-container">

  Date: 
  <div class="form-group">
  <input type="text"class="form-control form-control-border" value ="<?php echo isset($meta['schedule']) ? $meta['schedule']: '' ?>" readonly >
                      
                        
      </div> -->




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

    <input type="text" name="clientid" id="clientid" class="form-control form-control-border" placeholder="Juan D. Dela Cruz" value ="<?php echo ucwords($_settings->userdata('id')) ?>" hidden >
  </div>

  <div class="form-group" style="width: 80%;">
    <label  class="control-label">Name</label>
    <input type="text"  id="requestor" name="requestor" class="form-control form-control-border" placeholder="Juan D. Dela Cruz" value ="<?php echo isset($meta['firstname']) ? $meta['firstname']: '' ?>&nbsp;<?php echo isset($meta['middlename']) ? $meta['middlename']: '' ?>&nbsp;<?php echo isset($meta['lastname']) ? $meta['lastname']: '' ?>&nbsp;<?php echo isset($meta['sufix']) ? $meta['sufix']: '' ?>" readonly >
  </div>
  </div>
  <div class="form-group" style="width: 80%;">

    <label >Address</label>
    <input type="text" class="form-control form-control-border" value ="<?php echo isset($meta['address']) ? $meta['address']: '' ?>&nbsp;<?php echo isset($meta['zip']) ? $meta['zip']: '' ?>" readonly >
  </div>

  <div class="flex-container">

  <div class="form-group" style="width: 20%;">
    <label >Birth Date</label>
    <input type="text"  class="form-control form-control-border" value ="<?php echo isset($meta['dob']) ? $meta['dob']: '' ?>" readonly >
  </div>

  &nbsp;&nbsp;

  <div class="form-group" style="width: 4%;">
    <label >Age</label>
    <input type="text"  class="form-control form-control-border" value ="<?php echo isset($meta['age']) ? $meta['age']: '' ?>" readonly >
  </div>


  &nbsp;&nbsp;
  <div class="form-group" style="width: 15%;">
    <label >Civil Status</label>
    <input type="text"class="form-control form-control-border" value ="<?php echo isset($meta['civil']) ? $meta['civil']: '' ?>" readonly >
  </div>

  &nbsp;&nbsp;
  <div class="form-group" style="width: 15%;">
    <label >Sex</label>
    <input type="text" class="form-control form-control-border" value ="<?php echo isset($meta['sex']) ? $meta['sex']: '' ?>" readonly >
  </div>

  </div>

  <div class="flex-container">
  <div class="form-group" style="width: 20%;">
    <label >Contact</label>
    <input type="text"  class="form-control form-control-border" value ="<?php echo isset($meta['number']) ? $meta['number']: '' ?>" readonly >
  </div>
  &nbsp;&nbsp;
  <div class="form-group" style="width: 35%;">
    <label >Email</label>
    <input type="text"  class="form-control form-control-border" value ="<?php echo isset($meta['username']) ? $meta['username']: '' ?>" readonly >
  </div>
  </div>


                  

<!-- 


  <div class="form-group" style="width: 40%;">
                      <label for="service_id" class="control-label " value ="<?php echo isset($meta['services']) ? $meta['services']: '' ?>">Service(s)</label>
                      
                    
                  </div>



  <div class="flex-container">

    <div class="form-group">

          <label for="application" class="control-label">Type of Application</label>
          <select id="application" name="application" class="form-control form-control-border select2">
          <option value="newStudentPermit">NEW STUDENT PERMIT</option>
          <option value="NONPROFFESSIONAL">NEW NON-PROFFESSIONAL</option>
          <option value="RENEWAL">RENEWAL</option>
          <option value="ADDITIONALRESTRICTIONCODE">ADDITIONAL RESTRICTION CODE</option>
          <option value="NEWPROFFESSIONAL">NEW PROFFESSIONAL</option>
      
      </select>
      </div>

      &nbsp;&nbsp;
      <div class="form-group"> 
      <label for="dl" class="control-label">RESTRICTION/DL-CODE</label>
      <select id="dl" name="dl" class="form-control form-control-border select2"></select>
  </div>


  &nbsp;&nbsp; 
  <div class="form-group">
                          <label for="at" class="control-label">AT</label>
                          <input type="text"  name="at" id="at" class="form-control form-control-border" style="width: 20%;" value ="<?php echo isset($meta['at']) ? $meta['at']: '' ?>" required>

                      </div>  


  &nbsp;&nbsp; 

  <div class="form-group">
                          <label for="mt" class="control-label">MT</label>
                          <input type="text"  name="mt" id="mt" class="form-control form-control-border" style="width: 20%;" value ="<?php echo isset($meta['mt']) ? $meta['mt']: '' ?>" required>

                      </div> 



  </div> 


  <div class="flex-container">
      <div class="form-group">
                          <label for="stud_permit" class="control-label">STUDENT PERMIT NUMBER</label>
                          <input type="text" name="stud_permit" id="stud_permit" class="form-control form-control-border"  value ="<?php echo isset($meta['studentpermit']) ? $meta['studentpermit']: '' ?>" required>
                      </div>

  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp; 
      <div class="form-group">
                          <label for="license" class="control-label">DRIVER`S LICENSE NUMBER</label>
                          <input type="text" name="license" id="license" class="form-control form-control-border"  value ="<?php echo isset($meta['license']) ? $meta['license']: '' ?>" required>
                      </div>
  </div>  -->

                  </fieldset>



  <center>
  <br><br>______________________________________________<br>
  Administration
  <p>*Any payments made by the applicant, once they are paid, is <B>NONREFUNDABLE</B></p>
  </center>


              </div>
            
          

              </div>


          
          </div>
      </form>