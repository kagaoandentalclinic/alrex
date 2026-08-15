<?php require_once('../config.php') 




?>









<style>
  .btn-close-modal {
    position: absolute;
    right: 10px;
  }
</style>


<style type="text/css">
  .flex-container{
    display: flex;
  }


</style>





<script type="text/javascript">

function calculateAge() {
  // Get the date of birth value from the input field
  var dob = document.getElementById("dob").value;

  // Create a new Date object for the date of birth
  var birthDate = new Date(dob);

  // Create a new Date object for the current date
  var currentDate = new Date();

  // Calculate the age in milliseconds
  var ageInMilliseconds = currentDate - birthDate;

  // Convert the age to years
  var ageInYears = ageInMilliseconds / (1000 * 60 * 60 * 24 * 365.25);

  // Round the age to the nearest whole number
  var age = Math.floor(ageInYears);

  // Set the age value to the age input field
  document.getElementById("age").value = age;
}



</script>










<!DOCTYPE html>








<html lang="en" class="" style="height: auto;">
 <?php require_once('inc/header.php') ?>

<head><!-- Bootstrap 4 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Bootstrap 4 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
</head>



<body class="hold-transition ">
  <script>
    start_loader()
  </script>
  <style>
    html, body{
      height:calc(100%) !important;
      width:calc(100%) !important;
    }
 
    .login-title{
      text-shadow: 2px 2px black
    }
    #login{
      flex-direction:column !important
    }
    #logo-img{
        height:150px;
        width:150px;
        object-fit:scale-down;
        object-position:center center;
        border-radius:100%;
    }
    #login .col-7,#login .col-5{
      width: 100% !important;
      max-width:unset !important
    }
  </style>



  <style>
  .bg-violet {
    background-color: darkblue;
  }
</style>



<style>

#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}


.card {

    opacity: .9;
}
</style>




  <div class="h-100 d-flex align-items-center w-100 bg-dark" id="login">

      <br><br><br><br>
  
    <div class="col-5 h-100 bg-gradient">
      

      <div class="d-flex w-100 h-100 justify-content-center align-items-center">




        <div class="card col-sm-12 col-md-6 col-lg-3 card-outline  rounded-3 shadow">
          <div class="card-header rounded-0">




        <center><img src="<?= validate_image($_settings->info('logo')) ?>" alt="" id="logo-img"><br><br>
<b><p class="text-primary">
Unlock Your Driving Potential at Alrex School of Driving!</p></b>
        </center>




       <h6 class="text-center" style="color: black;"><b>Login</b></h6>
          </div>
          <div class="card-body rounded-0">
            <form id="login-frm" action="" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control" autofocus name="username" placeholder="Mobile number/Email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>

   <button type="submit" class="btn btn-primary btn-block rounded-3"><b>Log In</b></button><br>











 <hr>

              <div class="row">
                <div class="col-8">
             
                </div>
                <!-- /.col --><br>

              <button class="btn btn-success" type="button" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Create new account</button>&nbsp; &nbsp;
               <button class="btn btn-success" type="button" data-toggle="modal" data-target="#form_modals"><span class="glyphicon glyphicon-plus"></span>Verify Account!</button>
                  <hr>
                   <a href="<?php echo base_url ?>"><b>Go to Website</b></a>
                <!-- /.col -->
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>









<div class="modal fade" id="form_modals" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="verify.php" enctype="multipart/form-data">
        <div class="modal-header">
       
        </div>
        <div class="modal-body">
        



        <button class="btn btn-danger btn-close-modal" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> X</button>

        <h1>Verify your account</h1>
        <p>It's quick and easy</p>
        <hr>


    
        <div class="container-fluid">
            <div id="msg"></div>
  <form method="POST" action="admin/verify.php" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo isset($meta['id']) ? $meta['id'] : '' ?>">
           



  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Mobile number/Email" value="" required>
                </div>
  <center>  <label for="code">Enter Code</label></center>
     <div class="flex-container">
           
                <div class="form-group d-flex">
                
                    <input type="text" name="code" id="code" class="otp-field form-control text-center" placeholder="*" value="" required>
                   
                    <input type="text" name="code1" id="code1" class="otp-field form-control text-center" placeholder="*" value="" required>
                   
                    <input type="text" name="code2" id="code2" class="otp-field form-control text-center" placeholder="*" value="" required>
                   
                    <input type="text" name="code3" id="code3" class="otp-field form-control text-center" placeholder="*" value="" required>
                   
                    <input type="text" name="code4" id="code4" class="otp-field form-control text-center" placeholder="*" value="" required>
                   
                    <input type="text" name="code5" id="code5" class="otp-field form-control text-center" placeholder="*" value="" required>
                </div>
&nbsp;





              </div>





       
             <br style="clear:both;"/>
        <div class="modal-footer">

          <button  class="btn btn-success" name="save"><span class="glyphicon glyphicon-save"></span>Verify</button>
        </div>
            </form>
        </div>

        </div>
      
  
    </div>
  </div>
</div>











<div class="modal fade" id="form_modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="save.php" enctype="multipart/form-data">
        <div class="modal-header">
       
        </div>
        <div class="modal-body">
        



        <button class="btn btn-danger btn-close-modal" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> X</button>

        <h1>Sign Up</h1>
        <p>It's quick and easy</p>
        <hr>









        <div class="container-fluid">
            <div id="msg"></div>
  <form method="POST" action="admin/save.php" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo isset($meta['id']) ? $meta['id'] : '' ?>">
                <div class="flex-container">
                    <div class="form-group">
                        <label for="name">First Name</label>
                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First name" value="" required>
                    </div>&nbsp; &nbsp;
                    <div class="form-group">
                        <label for="name">Middle Name</label>
                        <input type="text" name="middlename" id="middlename" class="form-control" placeholder="Middle name" value="" required>
                    </div>&nbsp; &nbsp;
                    <div class="form-group">
                        <label for="name">Last Name</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last name" value="" required>
                    </div>
                </div>

                <div class="form-group">
					<label for="address">Address</label>
            <table>
                <tr>
                    <td>Region</td>
                    <td><select id="region"  name="region" class="form-control"></select></td>
                </tr>
                <tr>
                    <td>Province</td>
                    <td><select id="province" name="province" class="form-control"></select></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><select id="city" name="city" class="form-control"></select></td>
                </tr>
                <tr>
                    <td>Barangay</td>
                    <td><select id="barangay"  name="barangay" class="form-control"></select></td>
                </tr>
            </table>

        </div>


                    <div class="form-group" style="width: 30%;">
                        <label for="name">Zip Code</label>
                        <input type="Number" name="zip" id="zip" class="form-control" value="<?php echo isset($meta['zip']) ? $meta['zip'] : '' ?>">
                    </div>
                </div> 


                		

                <!-- <div class="row gy-2 gx-3 d-flex justify-content-evenly mt-1" >
              <div class="col-auto form-group was-validated">
                <label>Province:</label><br>
                <select class="dropdown-search col-sm" style="border-radius: 5px" id="province" name="province" required>
                      <option value="" >-Select Province-</option>
                </select>
                </div>
                
                <div class="col-auto form-group was-validated">
                <label>Town:</label><br>
                <select class="dropdown-search col-sm" style="border-radius: 5px" id="town" name="town" required>
                      <option value="">-Select Town-</option>
                </select>
                </div>
                
                <div class="col-auto form-group was-validated">
                <label>Barangay:</label><br>
                <select class="dropdown-search col-sm" style="border-radius: 5px" id="barangay" name="barangay" required>
                      <option value="" >-Select Barangay-</option>
                </select>
                </div>
              
                </div>
                <div class="form-group" style="width: 30%;">
                        <label for="name">Zip Code</label>
                        <input type="Number" name="zip" id="zip" class="form-control" value="<?php echo isset($meta['zip']) ? $meta['zip'] : '' ?>">
                    </div> -->

                <div class="flex-container">

		<div class="form-group">
					<label for="dob">Date of Birth: <?php echo isset($meta['dob']) ? $meta['dob']: '' ?></label>

<input type="date" id="dob" name="dob" class="form-control" onchange="calculateAge()">
	</div>




	&nbsp;&nbsp;

	<div class="form-group">
					<label for="age">Age: <?php echo isset($meta['age']) ? $meta['age']: '' ?></label>
<input type="text" id="age" name="age" class="form-control" readonly>


</div>
	&nbsp;&nbsp;




</div>


<div class="flex-container">
                    <div class="form-group">
                        <label for="number">Contact Number</label>
                        <input type="text" name="number" id="number" class="form-control" placeholder="Enter Here.." maxlength="11" pattern="[0-9]+" value="<?php echo isset($meta['number']) ? $meta['number'] : '' ?>" required>
                    </div>

                    &nbsp;&nbsp;

                    <div class="form-group">
                        <label for="civil" class="control-label">Civil Status: <i><?php echo isset($meta['civil']) ? $meta['civil'] : '' ?></i></label>
                        <select name="civil" id="civil" class="custom-select custom-select-md select2">
                            <option value="<?php echo isset($meta['civil']) ? $meta['civil'] : '' ?>"></option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Separated">Separated</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Widowed">Widowed</option>
                        </select>
                    </div>

                    &nbsp;&nbsp;

                    <div class="form-group">
                        <label for="sex" class="control-label">Sex: <i><?php echo isset($meta['sex']) ? $meta['sex'] : '' ?></i></label>
                        <select name="sex" id="sex" class="custom-select custom-select-md select2">
                            <option value="<?php echo isset($meta['sex']) ? $meta['sex'] : '' ?>"></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>




                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Mobile number/Email" value="" required>
                </div>
        <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder="New password" class="form-control" value="" autocomplete="off" <?php echo isset($meta['id']) ? "": 'required' ?>>
    <?php if (isset($_GET['id'])): ?>
        <small class="text-info"><i>Leave this blank if you don't want to change the password.</i></small>
    <?php endif; ?>
</div>

<div class="form-group">
    <label for="repassword">Re-enter Password</label>
    <input type="password" name="repassword" id="repassword" placeholder="Re-enter password" class="form-control" value="" autocomplete="off" <?php echo isset($meta['id']) ? "": 'required' ?>>
    <small id="password-match" class="text-muted"></small>
</div>








                <div class="form-group">
                    <label for="type">User Type</label>
                    <select name="type" id="type" class="custom-select" required>
                        <option value="3" <?php echo isset($meta['type']) && $meta['type'] == 3 ? 'selected' : '' ?>>Old</option>
                        <option value="4" <?php echo isset($meta['type']) && $meta['type'] == 4 ? 'selected' : '' ?>>New</option>
          
                    </select>
                </div>
        
    
       
             <br style="clear:both;"/>
        <div class="modal-footer">

          <button  class="btn btn-success" name="save"><span class="glyphicon glyphicon-save"></span> Sign Up</button>
        </div>
            </form>
        </div>





























        </div>
      
  
    </div>
  </div>
</div>























<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>
  $(document).ready(function(){
    end_loader();
  })
</script>






</body>
</html>

<!-- Script for Address -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
        <!-- <script type="text/javascript" src="../../jquery.ph-locations.js"></script> -->
        <script type="text/javascript" src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script>


        <script type="text/javascript">
            
            var my_handlers = {

                fill_provinces:  function(){

                    var region_code = $(this).val();
                    $('#province').ph_locations('fetch_list', [{"region_code": region_code}]);
                    
                },

                fill_cities: function(){

                    var province_code = $(this).val();
                    $('#city').ph_locations( 'fetch_list', [{"province_code": province_code}]);
                },


                fill_barangays: function(){

                    var city_code = $(this).val();
                    $('#barangay').ph_locations('fetch_list', [{"city_code": city_code}]);
                }
            };

            $(function(){
                $('#region').on('change', my_handlers.fill_provinces);
                $('#province').on('change', my_handlers.fill_cities);
                $('#city').on('change', my_handlers.fill_barangays);

                $('#region').ph_locations({'location_type': 'regions'});
                $('#province').ph_locations({'location_type': 'provinces'});
                $('#city').ph_locations({'location_type': 'cities'});
                $('#barangay').ph_locations({'location_type': 'barangays'});

                $('#region').ph_locations('fetch_list');
            });
        </script>

<!-- End Script for Address -->


<!-- Script for Zip Code -->

<script>

  function autoFillZip() {
    var addressInput = document.getElementById('address').value;
    var zipInput = document.getElementById('zip');

    var barangayMap = {
      'santa cruz sinait': '2733',
         'battog sinait': '2733',
      // Add more barangays and zip codes as needed
    };

    var barangays = Object.keys(barangayMap);
    var matchedBarangay = '';

    for (var i = 0; i < barangays.length; i++) {
      var barangay = barangays[i];

      if (addressInput.toLowerCase().includes(barangay)) {
        matchedBarangay = barangay;
        break;
      }
    }

    if (matchedBarangay !== '') {
      zipInput.value = barangayMap[matchedBarangay];
    } else {
      zipInput.value = '';
    }
  }
</script>

<!-- End Script for Zip Code -->


<!-- Script for OTP verification -->

<script>
  const otp = document.querySelectorAll('.otp-field');
  otp[0].focus();

  otp.forEach((field, index) =>{
    field.addEventListener('keydown', (e)=>{
      if(e.key >= 0 && e.key <= 9){
        otp[index].value = "";
        setTimeout(() =>{
          otp[index+1].focus();
        }, 6);
      }
      else if(e.key === 'Backspace'){
        setTimeout(() =>{
          otp[index-1].focus();
        }, 6);
      }
    });
  });
</script>

<!-- End Script for OTP verification -->




<script>
    $(function () {
        $('.select2').select2({
            width: 'resolve'
        });
    });
    function displayImg(input, _this) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#cimg').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $('#manage-user').submit(function (e) {
        e.preventDefault();
        var _this = $(this);
        start_loader();
        $.ajax({
            url: _base_url_ + 'classes/Users.php?f=save',
            data: new FormData($(this)[0]),
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            type: 'POST',
            success: function (resp) {
                if (resp == 1) {
                    setTimeout(function () {
                        uni_modal("Success", "success_msg.php");
                    }, 750);
                } else {
                    $('#msg').html('<div class="alert alert-danger">Username already exist</div>');
                    $("html, body").animate({
                        scrollTop: 0
                    }, "fast");
                }
                end_loader();
            }
        });
    });
</script>



<script>
    // Function to verify if the passwords match
    function verifyPassword() {
        var password = document.getElementById("password").value;
        var repassword = document.getElementById("repassword").value;
        var passwordMatchText = document.getElementById("password-match");
        
        if (password === repassword) {
            passwordMatchText.textContent = "Passwords match!";
            passwordMatchText.classList.add("text-success");
            passwordMatchText.classList.remove("text-danger");
        } else {
            passwordMatchText.textContent = "Passwords do not match!";
            passwordMatchText.classList.add("text-danger");
            passwordMatchText.classList.remove("text-success");
        }
    }
    
    // Event listener for input changes
    document.getElementById("repassword").addEventListener("input", verifyPassword);
</script>
<script type="text/javascript">
  

function sendCode() {
  var email = document.getElementById("username").value;
  
  // You can perform further actions here, such as sending the code via Gmail
  
  // Example alert to show the email value (replace this with your actual code)
  alert("Sending code to: " + email);
}


</script>





<?php switch ($meta['barangay']){


case '	012801001		 ':echo '	Adams	';break;
case '	012802001		 ':echo '	Bani	';break;
case '	012802002		 ':echo '	Buyon	';break;
case '	012802003		 ':echo '	Cabaruan	';break;
case '	012802004		 ':echo '	Cabulalaan	';break;
case '	012802005		 ':echo '	Cabusligan	';break;
case '	012802006		 ':echo '	Cadaratan	';break;
case '	012802007		 ':echo '	Calioet-Libong	';break;
case '	012802008		 ':echo '	Casilian	';break;
case '	012802009		 ':echo '	Corocor	';break;
case '	012802011		 ':echo '	Duripes	';break;
case '	012802012		 ':echo '	Ganagan	';break;
case '	012802013		 ':echo '	Libtong	';break;
case '	012802014		 ':echo '	Macupit	';break;
case '	012802015		 ':echo '	Nambaran	';break;
case '	012802016		 ':echo '	Natba	';break;
case '	012802017		 ':echo '	Paninaan	';break;
case '	012802018		 ':echo '	Pasiocan	';break;
case '	012802019		 ':echo '	Pasngal	';break;
case '	012802020		 ':echo '	Pipias	';break;
case '	012802021		 ':echo '	Pulangi	';break;
case '	012802022		 ':echo '	Pungto	';break;
case '	012802024		 ':echo '	San Agustin I 	';break;
case '	012802025		 ':echo '	San Agustin II 	';break;
case '	012802027		 ':echo '	San Andres I 	';break;
case '	012802028		 ':echo '	San Andres II 	';break;
case '	012802030		 ':echo '	San Gabriel I 	';break;
case '	012802031		 ':echo '	San Gabriel II 	';break;
case '	012802033		 ':echo '	San Pedro I 	';break;
case '	012802034		 ':echo '	San Pedro II 	';break;
case '	012802036		 ':echo '	San Roque I 	';break;
case '	012802037		 ':echo '	San Roque II 	';break;
case '	012802039		 ':echo '	San Simon I 	';break;
case '	012802040		 ':echo '	San Simon II 	';break;
case '	012802041		 ':echo '	San Vicente 	';break;
case '	012802042		 ':echo '	Sangil	';break;
case '	012802044		 ':echo '	Santa Filomena I 	';break;
case '	012802045		 ':echo '	Santa Filomena II 	';break;
case '	012802046		 ':echo '	Santa Rita 	';break;
case '	012802047		 ':echo '	Santo Cristo I 	';break;
case '	012802048		 ':echo '	Santo Cristo II 	';break;
case '	012802050		 ':echo '	Tambidao	';break;
case '	012802051		 ':echo '	Teppang	';break;
case '	012802052		 ':echo '	Tubburan	';break;
case '	012803001		 ':echo '	Alay-Nangbabaan	';break;
case '	012803002		 ':echo '	Alogoog	';break;
case '	012803003		 ':echo '	Ar-arusip	';break;
case '	012803004		 ':echo '	Aring	';break;
case '	012803005		 ':echo '	Balbaldez	';break;
case '	012803006		 ':echo '	Bato	';break;
case '	012803007		 ':echo '	Camanga	';break;
case '	012803008		 ':echo '	Canaan 	';break;
case '	012803009		 ':echo '	Caraitan	';break;
case '	012803011		 ':echo '	Gabut Norte	';break;
case '	012803012		 ':echo '	Gabut Sur	';break;
case '	012803013		 ':echo '	Garreta 	';break;
case '	012803016		 ':echo '	Labut	';break;
case '	012803017		 ':echo '	Lacuben	';break;
case '	012803018		 ':echo '	Lubigan	';break;
case '	012803020		 ':echo '	Mabusag Norte	';break;
case '	012803021		 ':echo '	Mabusag Sur	';break;
case '	012803022		 ':echo '	Madupayas	';break;
case '	012803023		 ':echo '	Morong	';break;
case '	012803025		 ':echo '	Nagrebcan	';break;
case '	012803026		 ':echo '	Napu	';break;
case '	012803027		 ':echo '	La Virgen Milagrosa	';break;
case '	012803028		 ':echo '	Pagsanahan Norte	';break;
case '	012803029		 ':echo '	Pagsanahan Sur	';break;
case '	012803030		 ':echo '	Paltit	';break;
case '	012803031		 ':echo '	Parang	';break;
case '	012803032		 ':echo '	Pasuc	';break;
case '	012803034		 ':echo '	Santa Cruz Norte	';break;
case '	012803035		 ':echo '	Santa Cruz Sur	';break;
case '	012803036		 ':echo '	Saud	';break;
case '	012803037		 ':echo '	Turod	';break;
case '	012804001		 ':echo '	Abaca	';break;
case '	012804002		 ':echo '	Bacsil	';break;
case '	012804003		 ':echo '	Banban	';break;
case '	012804004		 ':echo '	Baruyen	';break;
case '	012804005		 ':echo '	Dadaor	';break;
case '	012804006		 ':echo '	Lanao	';break;
case '	012804007		 ':echo '	Malasin	';break;
case '	012804008		 ':echo '	Manayon	';break;
case '	012804009		 ':echo '	Masikil	';break;
case '	012804010		 ':echo '	Nagbalagan	';break;
case '	012804011		 ':echo '	Payac	';break;
case '	012804012		 ':echo '	San Lorenzo 	';break;
case '	012804014		 ':echo '	Taguiporo	';break;
case '	012804015		 ':echo '	Utol	';break;
case '	012805001		 ':echo '	Aglipay 	';break;
case '	012805002		 ':echo '	Baay	';break;
case '	012805003		 ':echo '	Baligat	';break;
case '	012805004		 ':echo '	Bungon	';break;
case '	012805005		 ':echo '	Baoa East	';break;
case '	012805006		 ':echo '	Baoa West	';break;
case '	012805007		 ':echo '	Barani 	';break;
case '	012805009		 ':echo '	Ben-agan 	';break;
case '	012805010		 ':echo '	Bil-loca	';break;
case '	012805011		 ':echo '	Biningan	';break;
case '	012805012		 ':echo '	Callaguip 	';break;
case '	012805013		 ':echo '	Camandingan	';break;
case '	012805014		 ':echo '	Camguidan	';break;
case '	012805015		 ':echo '	Cangrunaan 	';break;
case '	012805016		 ':echo '	Capacuan	';break;
case '	012805017		 ':echo '	Caunayan 	';break;
case '	012805018		 ':echo '	Valdez Pob.	';break;
case '	012805019		 ':echo '	Colo	';break;
case '	012805020		 ':echo '	Pimentel	';break;
case '	012805021		 ':echo '	Dariwdiw	';break;
case '	012805022		 ':echo '	Acosta Pob.	';break;
case '	012805023		 ':echo '	Ablan Pob.	';break;
case '	012805024		 ':echo '	Lacub 	';break;
case '	012805025		 ':echo '	Mabaleng	';break;
case '	012805026		 ':echo '	Magnuang	';break;
case '	012805027		 ':echo '	Maipalig	';break;
case '	012805028		 ':echo '	Nagbacalan	';break;
case '	012805029		 ':echo '	Naguirangan	';break;
case '	012805030		 ':echo '	Ricarte Pob.	';break;
case '	012805031		 ':echo '	Palongpong	';break;
case '	012805032		 ':echo '	Palpalicong 	';break;
case '	012805033		 ':echo '	Parangopong	';break;
case '	012805034		 ':echo '	Payao	';break;
case '	012805035		 ':echo '	Quiling Norte	';break;
case '	012805036		 ':echo '	Quiling Sur	';break;
case '	012805037		 ':echo '	Quiom	';break;
case '	012805038		 ':echo '	Rayuray	';break;
case '	012805039		 ':echo '	San Julian 	';break;
case '	012805040		 ':echo '	San Mateo	';break;
case '	012805041		 ':echo '	San Pedro	';break;
case '	012805042		 ':echo '	Suabit 	';break;
case '	012805043		 ':echo '	Sumader	';break;
case '	012805044		 ':echo '	Tabug	';break;
case '	012806001		 ':echo '	Ablan Sarat	';break;
case '	012806002		 ':echo '	Agaga	';break;
case '	012806005		 ':echo '	Bayog	';break;
case '	012806006		 ':echo '	Bobon	';break;
case '	012806007		 ':echo '	Buduan	';break;
case '	012806008		 ':echo '	Nagsurot	';break;
case '	012806009		 ':echo '	Paayas	';break;
case '	012806010		 ':echo '	Pagali	';break;
case '	012806011		 ':echo '	Poblacion	';break;
case '	012806013		 ':echo '	Saoit	';break;
case '	012806014		 ':echo '	Tanap	';break;
case '	012807001		 ':echo '	Angset	';break;
case '	012807003		 ':echo '	Barbaqueso 	';break;
case '	012807004		 ':echo '	Virbira	';break;
case '	012808001		 ':echo '	Anggapang Norte	';break;
case '	012808002		 ':echo '	Anggapang Sur	';break;
case '	012808003		 ':echo '	Bimmanga	';break;
case '	012808004		 ':echo '	Cabuusan	';break;
case '	012808005		 ':echo '	Comcomloong	';break;
case '	012808006		 ':echo '	Gaang	';break;
case '	012808007		 ':echo '	Lang-ayan-Baramban	';break;
case '	012808008		 ':echo '	Lioes	';break;
case '	012808009		 ':echo '	Maglaoi Centro	';break;
case '	012808010		 ':echo '	Maglaoi Norte	';break;
case '	012808011		 ':echo '	Maglaoi Sur	';break;
case '	012808013		 ':echo '	Paguludan-Salindeg	';break;
case '	012808014		 ':echo '	Pangil	';break;
case '	012808015		 ':echo '	Pias Norte	';break;
case '	012808016		 ':echo '	Pias Sur	';break;
case '	012808017		 ':echo '	Poblacion I	';break;
case '	012808018		 ':echo '	Poblacion II	';break;
case '	012808019		 ':echo '	Salugan	';break;
case '	012808020		 ':echo '	San Simeon	';break;
case '	012808021		 ':echo '	Santa Cruz	';break;
case '	012808022		 ':echo '	Tapao-Tigue	';break;
case '	012808023		 ':echo '	Torre	';break;
case '	012808024		 ':echo '	Victoria	';break;
case '	012809001		 ':echo '	Albano 	';break;
case '	012809002		 ':echo '	Bacsil	';break;
case '	012809003		 ':echo '	Bagut	';break;
case '	012809004		 ':echo '	Parado	';break;
case '	012809005		 ':echo '	Baresbes	';break;
case '	012809006		 ':echo '	Barong	';break;
case '	012809007		 ':echo '	Bungcag	';break;
case '	012809009		 ':echo '	Cali	';break;
case '	012809010		 ':echo '	Capasan	';break;
case '	012809011		 ':echo '	Dancel 	';break;
case '	012809012		 ':echo '	Foz	';break;
case '	012809013		 ':echo '	Guerrero 	';break;
case '	012809014		 ':echo '	Lanas	';break;
case '	012809015		 ':echo '	Lumbad	';break;
case '	012809016		 ':echo '	Madamba 	';break;
case '	012809017		 ':echo '	Mandaloque	';break;
case '	012809018		 ':echo '	Medina	';break;
case '	012809019		 ':echo '	Ver	';break;
case '	012809020		 ':echo '	San Marcelino	';break;
case '	012809021		 ':echo '	Puruganan 	';break;
case '	012809022		 ':echo '	Peralta 	';break;
case '	012809023		 ':echo '	Root	';break;
case '	012809024		 ':echo '	Sagpatan	';break;
case '	012809025		 ':echo '	Saludares	';break;
case '	012809026		 ':echo '	San Esteban	';break;
case '	012809027		 ':echo '	Espiritu	';break;
case '	012809028		 ':echo '	Sulquiano	';break;
case '	012809029		 ':echo '	San Francisco	';break;
case '	012809030		 ':echo '	Suyo	';break;
case '	012809031		 ':echo '	San Marcos	';break;
case '	012809032		 ':echo '	Elizabeth	';break;
case '	012810001		 ':echo '	Cabaritan	';break;
case '	012810002		 ':echo '	San Isidro	';break;
case '	012810003		 ':echo '	Kalaw	';break;
case '	012810004		 ':echo '	Quibel	';break;
case '	012811001		 ':echo '	Balioeg	';break;
case '	012811002		 ':echo '	Bangsar	';break;
case '	012811003		 ':echo '	Barbarangay	';break;
case '	012811004		 ':echo '	Bomitog	';break;
case '	012811005		 ':echo '	Bugasi	';break;
case '	012811006		 ':echo '	Caestebanan	';break;
case '	012811008		 ':echo '	Caribquib	';break;
case '	012811009		 ':echo '	Catagtaguen	';break;
case '	012811011		 ':echo '	Crispina	';break;
case '	012811012		 ':echo '	Hilario 	';break;
case '	012811013		 ':echo '	Imelda	';break;
case '	012811014		 ':echo '	Lorenzo 	';break;
case '	012811015		 ':echo '	Macayepyep	';break;
case '	012811016		 ':echo '	Marcos 	';break;
case '	012811017		 ':echo '	Nagpatayan	';break;
case '	012811018		 ':echo '	Valdez	';break;
case '	012811019		 ':echo '	Sinamar	';break;
case '	01281120		 ':echo '	Tabtabagan	';break;
case '	01281121		 ':echo '	Valenciano 	';break;
case '	01281122		 ':echo '	Binacag	';break;
case '	012812001		 ':echo '	Bgy. No. 42, Apaya	';break;
case '	012812002		 ':echo '	Bgy. No. 36, Araniw	';break;
case '	012812003		 ':echo '	Bgy. No. 56-A, Bacsil North	';break;
case '	012812004		 ':echo '	Bgy. No. 56-B, Bacsil South	';break;
case '	012812005		 ':echo '	Bgy. No. 41, Balacad	';break;
case '	012812006		 ':echo '	Bgy. No. 40, Balatong	';break;
case '	012812007		 ':echo '	Bgy. No. 55-A, Barit-Pandan	';break;
case '	012812008		 ':echo '	Bgy. No. 47, Bengcag	';break;
case '	012812009		 ':echo '	Bgy. No. 50, Buttong	';break;
case '	012812010		 ':echo '	Bgy. No. 60-A, Caaoacan	';break;
case '	012812011		 ':echo '	Bry. No. 48-A, Cabungaan North	';break;
case '	012812012		 ':echo '	Bgy. No. 48-B, Cabungaan South	';break;
case '	012812013		 ':echo '	Bgy. No. 37, Calayab	';break;
case '	012812014		 ':echo '	Bgy. No. 54-B, Camangaan	';break;
case '	012812015		 ':echo '	Bgy. No. 58, Casili	';break;
case '	012812016		 ':echo '	Bgy. No. 61, Cataban	';break;
case '	012812017		 ':echo '	Bgy. No. 43, Cavit	';break;
case '	012812019		 ':echo '	Bgy. No. 49-A, Darayday	';break;
case '	012812020		 ':echo '	Bgy. No. 59-B, Dibua North	';break;
case '	012812021		 ':echo '	Bgy. No. 59-A, Dibua South	';break;
case '	012812022		 ':echo '	Bgy. No. 34-B, Gabu Norte East	';break;
case '	012812023		 ':echo '	Bgy. No. 34-A, Gabu Norte West	';break;
case '	012812024		 ':echo '	Bgy. No. 35, Gabu Sur	';break;
case '	012812026		 ':echo '	Bgy. No. 32-C La Paz East	';break;
case '	012812027		 ':echo '	Bgy. No. 33-B, La Paz Proper	';break;
case '	012812028		 ':echo '	Bgy. No. 32-B, La Paz West	';break;
case '	012812029		 ':echo '	Bgy. No. 54-A, Lagui-Sail	';break;
case '	012812030		 ':echo '	Bgy. No. 32-A, La Paz East	';break;
case '	012812031		 ':echo '	Bgy. No. 33-A, La Paz Proper	';break;
case '	012812032		 ':echo '	Bgy. No. 52-B, Lataag	';break;
case '	012812033		 ':echo '	Bgy. No. 60-B, Madiladig	';break;
case '	012812034		 ':echo '	Bgy. No. 38-A, Mangato East	';break;
case '	012812035		 ':echo '	Bgy. No. 38-B, Mangato West	';break;
case '	012812036		 ':echo '	Bgy. No. 62-A, Navotas North	';break;
case '	012812037		 ':echo '	Bgy. No. 62-B, Navotas South	';break;
case '	012812038		 ':echo '	Bgy. No. 46, Nalbo	';break;
case '	012812039		 ':echo '	Bgy. No. 51-A, Nangalisan East	';break;
case '	012812040		 ':echo '	Bgy. No. 51-B, Nangalisan West	';break;
case '	012812041		 ':echo '	Bgy. No. 24, Nstra. Sra. De Consolacion 	';break;
case '	012812042		 ':echo '	Bgy. No. 7-A, Nstra. Sra. De Natividad 	';break;
case '	012812043		 ':echo '	Bgy. No. 7-B, Nstra. Sra. De Natividad 	';break;
case '	012812044		 ':echo '	Bgy. No. 27, Nstra. Sra. De Soledad 	';break;
case '	012812045		 ':echo '	Bgy. No. 13, Nstra. Sra. De Visitacion 	';break;
case '	012812046		 ':echo '	Bgy. No. 3, Nstra. Sra. Del Rosario 	';break;
case '	012812047		 ':echo '	Bgy. No. 57, Pila	';break;
case '	012812048		 ':echo '	Bgy. No. 49-B, Raraburan	';break;
case '	012812049		 ':echo '	Bgy. No. 53, Rioeng	';break;
case '	012812050		 ':echo '	Bgy. No. 55-B, Salet-Bulangon	';break;
case '	012812053		 ':echo '	Bgy. No. 6, San Agustin 	';break;
case '	012812054		 ':echo '	Bgy. No. 22, San Andres 	';break;
case '	012812055		 ':echo '	Bgy. No. 28, San Bernardo 	';break;
case '	012812056		 ':echo '	Bgy. No. 17, San Francisco 	';break;
case '	012812057		 ':echo '	Bgy. No. 4, San Guillermo 	';break;
case '	012812058		 ':echo '	Bgy. No. 15, San Guillermo 	';break;
case '	012812059		 ':echo '	Bgy. No. 12, San Isidro 	';break;
case '	012812060		 ':echo '	Bgy. No. 16, San Jacinto 	';break;
case '	012812061		 ':echo '	Bgy. No. 10, San Jose 	';break;
case '	012812062		 ':echo '	Bgy. No. 1, San Lorenzo 	';break;
case '	012812063		 ':echo '	Bgy. No. 26, San Marcelino 	';break;
case '	012812064		 ':echo '	Bgy. No. 52-A, San Mateo	';break;
case '	012812065		 ':echo '	Bgy. No. 23, San Matias 	';break;
case '	012812066		 ':echo '	Bgy. No. 20, San Miguel 	';break;
case '	012812067		 ':echo '	Bgy. No. 21, San Pedro 	';break;
case '	012812068		 ':echo '	Bgy. No. 5, San Pedro 	';break;
case '	012812069		 ':echo '	Bry. No. 18, San Quirino 	';break;
case '	012812070		 ':echo '	Bgy. No. 8, San Vicente 	';break;
case '	012812071		 ':echo '	Bgy. No. 9, Santa Angela 	';break;
case '	012812072		 ':echo '	Bgy. No. 11, Santa Balbina 	';break;
case '	012812073		 ':echo '	Bgy. No. 25, Santa Cayetana 	';break;
case '	012812074		 ':echo '	Bgy. No. 2, Santa Joaquina 	';break;
case '	012812075		 ':echo '	Bgy. No. 19, Santa Marcela 	';break;
case '	012812076		 ':echo '	Bgy. No. 30-B, Santa Maria	';break;
case '	012812077		 ':echo '	Bgy. No. 39, Santa Rosa	';break;
case '	012812078		 ':echo '	Bgy. No. 14, Santo Tomas 	';break;
case '	012812079		 ':echo '	Bgy. No. 29, Santo Tomas 	';break;
case '	012812080		 ':echo '	Bgy. No. 30-A, Suyo	';break;
case '	012812081		 ':echo '	Bgy. No. 31, Talingaan	';break;
case '	012812082		 ':echo '	Bgy. No. 45, Tangid	';break;
case '	012812083		 ':echo '	Bgy. No. 55-C, Vira	';break;
case '	012812084		 ':echo '	Bgy. No. 44, Zamboanga	';break;
case '	012813001		 ':echo '	Pacifico	';break;
case '	012813003		 ':echo '	Imelda	';break;
case '	012813004		 ':echo '	Elizabeth	';break;
case '	012813005		 ':echo '	Daquioag	';break;
case '	012813006		 ':echo '	Escoda	';break;
case '	012813007		 ':echo '	Ferdinand	';break;
case '	012813008		 ':echo '	Fortuna	';break;
case '	012813009		 ':echo '	Lydia 	';break;
case '	012813010		 ':echo '	Mabuti	';break;
case '	012813011		 ':echo '	Valdez	';break;
case '	012813012		 ':echo '	Tabucbuc	';break;
case '	012813013		 ':echo '	Santiago	';break;
case '	012813014		 ':echo '	Cacafean	';break;
case '	012814001		 ':echo '	Acnam	';break;
case '	012814002		 ':echo '	Barangobong	';break;
case '	012814003		 ':echo '	Barikir	';break;
case '	012814004		 ':echo '	Bugayong	';break;
case '	012814005		 ':echo '	Cabittauran	';break;
case '	012814006		 ':echo '	Caray	';break;
case '	012814007		 ':echo '	Garnaden	';break;
case '	012814008		 ':echo '	Naguillan	';break;
case '	012814009		 ':echo '	Poblacion	';break;
case '	012814010		 ':echo '	Santo Niño	';break;
case '	012814011		 ':echo '	Uguis	';break;
case '	012815001		 ':echo '	Aggasi	';break;
case '	012815003		 ':echo '	Baduang	';break;
case '	012815004		 ':echo '	Balaoi	';break;
case '	012815005		 ':echo '	Burayoc	';break;
case '	012815006		 ':echo '	Caunayan	';break;
case '	012815007		 ':echo '	Dampig	';break;
case '	012815008		 ':echo '	Ligaya	';break;
case '	012815010		 ':echo '	Pancian	';break;
case '	012815011		 ':echo '	Pasaleng	';break;
case '	012815012		 ':echo '	Poblacion 1	';break;
case '	012815013		 ':echo '	Poblacion 2	';break;
case '	012815014		 ':echo '	Saguigui	';break;
case '	012815015		 ':echo '	Saud	';break;
case '	012815016		 ':echo '	Subec	';break;
case '	012815017		 ':echo '	Tarrag	';break;
case '	012815018		 ':echo '	Caparispisan	';break;
case '	012816001		 ':echo '	Bacsil	';break;
case '	012816002		 ':echo '	Cabagoan	';break;
case '	012816003		 ':echo '	Cabangaran	';break;
case '	012816004		 ':echo '	Callaguip	';break;
case '	012816005		 ':echo '	Cayubog	';break;
case '	012816006		 ':echo '	Dolores	';break;
case '	012816007		 ':echo '	Laoa	';break;
case '	012816008		 ':echo '	Masintoc	';break;
case '	012816009		 ':echo '	Monte	';break;
case '	012816010		 ':echo '	Mumulaan	';break;
case '	012816011		 ':echo '	Nagbacalan	';break;
case '	012816012		 ':echo '	Nalasin	';break;
case '	012816013		 ':echo '	Nanguyudan	';break;
case '	012816014		 ':echo '	Oaig-Upay-Abulao	';break;
case '	012816015		 ':echo '	Pambaran	';break;
case '	012816016		 ':echo '	Pannaratan 	';break;
case '	012816017		 ':echo '	Paratong	';break;
case '	012816018		 ':echo '	Pasil	';break;
case '	012816019		 ':echo '	Salbang 	';break;
case '	012816020		 ':echo '	San Agustin	';break;
case '	012816021		 ':echo '	San Blas 	';break;
case '	012816022		 ':echo '	San Juan	';break;
case '	012816025		 ':echo '	San Pedro	';break;
case '	012816028		 ':echo '	San Roque 	';break;
case '	012816029		 ':echo '	Sangladan Pob.	';break;
case '	012816030		 ':echo '	Santa Rita 	';break;
case '	012816031		 ':echo '	Sideg	';break;
case '	012816032		 ':echo '	Suba	';break;
case '	012816033		 ':echo '	Sungadan	';break;
case '	012816034		 ':echo '	Surgui	';break;
case '	012816035		 ':echo '	Veronica	';break;
case '	012817001		 ':echo '	Batuli	';break;
case '	012817002		 ':echo '	Binsang	';break;
case '	012817003		 ':echo '	Nalvo	';break;
case '	012817004		 ':echo '	Caruan	';break;
case '	012817005		 ':echo '	Carusikis	';break;
case '	012817006		 ':echo '	Carusipan	';break;
case '	012817007		 ':echo '	Dadaeman	';break;
case '	012817008		 ':echo '	Darupidip	';break;
case '	012817009		 ':echo '	Davila	';break;
case '	012817010		 ':echo '	Dilanis	';break;
case '	012817011		 ':echo '	Dilavo	';break;
case '	012817012		 ':echo '	Estancia	';break;
case '	012817014		 ':echo '	Naglicuan	';break;
case '	012817015		 ':echo '	Nagsanga	';break;
case '	012817016		 ':echo '	Ngabangab	';break;
case '	012817017		 ':echo '	Pangil	';break;
case '	012817018		 ':echo '	Poblacion 1	';break;
case '	012817019		 ':echo '	Poblacion 2	';break;
case '	012817020		 ':echo '	Poblacion 3	';break;
case '	012817021		 ':echo '	Poblacion 4	';break;
case '	012817022		 ':echo '	Pragata	';break;
case '	012817023		 ':echo '	Puyupuyan	';break;
case '	012817024		 ':echo '	Sulongan	';break;
case '	012817025		 ':echo '	Salpad	';break;
case '	012817026		 ':echo '	San Juan	';break;
case '	012817027		 ':echo '	Santa Catalina	';break;
case '	012817028		 ':echo '	Santa Matilde	';break;
case '	012817029		 ':echo '	Sapat	';break;
case '	012817030		 ':echo '	Sulbec	';break;
case '	012817031		 ':echo '	Surong	';break;
case '	012817032		 ':echo '	Susugaen	';break;
case '	012817033		 ':echo '	Tabungao	';break;
case '	012817034		 ':echo '	Tadao	';break;
case '	012818001		 ':echo '	Ab-abut	';break;
case '	012818002		 ':echo '	Abucay	';break;
case '	012818003		 ':echo '	Anao 	';break;
case '	012818004		 ':echo '	Arua-ay	';break;
case '	012818005		 ':echo '	Bimmanga	';break;
case '	012818006		 ':echo '	Boyboy	';break;
case '	012818007		 ':echo '	Cabaroan 	';break;
case '	012818008		 ':echo '	Calambeg	';break;
case '	012818009		 ':echo '	Callusa	';break;
case '	012818010		 ':echo '	Dupitac	';break;
case '	012818011		 ':echo '	Estancia	';break;
case '	012818012		 ':echo '	Gayamat	';break;
case '	012818013		 ':echo '	Lagandit	';break;
case '	012818014		 ':echo '	Libnaoan	';break;
case '	012818015		 ':echo '	Loing 	';break;
case '	012818016		 ':echo '	Maab-abaca	';break;
case '	012818017		 ':echo '	Mangitayag	';break;
case '	012818018		 ':echo '	Maruaya	';break;
case '	012818019		 ':echo '	San Antonio	';break;
case '	012818020		 ':echo '	Santa Maria	';break;
case '	012818021		 ':echo '	Sucsuquen	';break;
case '	012818022		 ':echo '	Tangaoan	';break;
case '	012818023		 ':echo '	Tonoton	';break;
case '	012819001		 ':echo '	Aglipay	';break;
case '	012819002		 ':echo '	Apatut-Lubong	';break;
case '	012819003		 ':echo '	Badio	';break;
case '	012819004		 ':echo '	Barbar	';break;
case '	012819005		 ':echo '	Buanga	';break;
case '	012819006		 ':echo '	Bulbulala	';break;
case '	012819007		 ':echo '	Bungro	';break;
case '	012819008		 ':echo '	Cabaroan	';break;
case '	012819009		 ':echo '	Capangdanan	';break;
case '	012819010		 ':echo '	Dalayap	';break;
case '	012819011		 ':echo '	Darat	';break;
case '	012819012		 ':echo '	Gulpeng	';break;
case '	012819013		 ':echo '	Liliputen	';break;
case '	012819014		 ':echo '	Lumbaan-Bicbica	';break;
case '	012819015		 ':echo '	Nagtrigoan	';break;
case '	012819016		 ':echo '	Pagdilao 	';break;
case '	012819017		 ':echo '	Pugaoan	';break;
case '	012819018		 ':echo '	Puritac	';break;
case '	012819019		 ':echo '	Sacritan	';break;
case '	012819020		 ':echo '	Salanap	';break;
case '	012819021		 ':echo '	Santo Tomas	';break;
case '	012819022		 ':echo '	Tartarabang	';break;
case '	012819023		 ':echo '	Puzol	';break;
case '	012819024		 ':echo '	Upon	';break;
case '	012819025		 ':echo '	Valbuena 	';break;
case '	012820001		 ':echo '	San Francisco 	';break;
case '	012820002		 ':echo '	San Ildefonso 	';break;
case '	012820003		 ':echo '	San Agustin	';break;
case '	012820004		 ':echo '	San Baltazar 	';break;
case '	012820005		 ':echo '	San Bartolome 	';break;
case '	012820006		 ':echo '	San Cayetano 	';break;
case '	012820007		 ':echo '	San Eugenio 	';break;
case '	012820008		 ':echo '	San Fernando 	';break;
case '	012820009		 ':echo '	San Gregorio 	';break;
case '	012820010		 ':echo '	San Guillermo	';break;
case '	012820011		 ':echo '	San Jose 	';break;
case '	012820012		 ':echo '	San Juan Bautista 	';break;
case '	012820013		 ':echo '	San Lorenzo	';break;
case '	012820014		 ':echo '	San Lucas 	';break;
case '	012820015		 ':echo '	San Marcos	';break;
case '	012820016		 ':echo '	San Miguel 	';break;
case '	012820017		 ':echo '	San Pablo	';break;
case '	012820018		 ':echo '	San Paulo 	';break;
case '	012820019		 ':echo '	San Pedro	';break;
case '	012820020		 ':echo '	San Rufino 	';break;
case '	012820021		 ':echo '	San Silvestre 	';break;
case '	012820022		 ':echo '	Santa Asuncion	';break;
case '	012820023		 ':echo '	Santa Cecilia	';break;
case '	012820024		 ':echo '	Santa Monica	';break;
case '	012821001		 ':echo '	San Agustin 	';break;
case '	012821002		 ':echo '	San Andres	';break;
case '	012821003		 ':echo '	San Antonio	';break;
case '	012821004		 ':echo '	San Bernabe	';break;
case '	012821005		 ':echo '	San Cristobal	';break;
case '	012821006		 ':echo '	San Felipe	';break;
case '	012821007		 ':echo '	San Francisco 	';break;
case '	012821008		 ':echo '	San Isidro	';break;
case '	012821009		 ':echo '	San Joaquin 	';break;
case '	012821010		 ':echo '	San Jose	';break;
case '	012821011		 ':echo '	San Juan	';break;
case '	012821012		 ':echo '	San Leandro 	';break;
case '	012821014		 ':echo '	San Lorenzo	';break;
case '	012821015		 ':echo '	San Manuel	';break;
case '	012821016		 ':echo '	San Marcos	';break;
case '	012821017		 ':echo '	San Nicolas	';break;
case '	012821018		 ':echo '	San Pedro	';break;
case '	012821019		 ':echo '	San Roque	';break;
case '	01282120		 ':echo '	San Vicente 	';break;
case '	01282121		 ':echo '	Santa Barbara 	';break;
case '	01282122		 ':echo '	Santa Magdalena	';break;
case '	01282123		 ':echo '	Santa Rosa	';break;
case '	01282124		 ':echo '	Santo Santiago	';break;
case '	01282125		 ':echo '	Santo Tomas	';break;
case '	012822001		 ':echo '	Aguitap	';break;
case '	012822002		 ':echo '	Bagbag	';break;
case '	012822003		 ':echo '	Bagbago	';break;
case '	012822004		 ':echo '	Barcelona	';break;
case '	012822005		 ':echo '	Bubuos	';break;
case '	012822006		 ':echo '	Capurictan	';break;
case '	012822007		 ':echo '	Catangraran	';break;
case '	012822008		 ':echo '	Darasdas	';break;
case '	012822009		 ':echo '	Juan 	';break;
case '	012822010		 ':echo '	Laureta 	';break;
case '	012822011		 ':echo '	Lipay	';break;
case '	012822012		 ':echo '	Maananteng	';break;
case '	012822013		 ':echo '	Manalpac	';break;
case '	012822014		 ':echo '	Mariquet	';break;
case '	012822015		 ':echo '	Nagpatpatan	';break;
case '	012822016		 ':echo '	Nalasin	';break;
case '	012822017		 ':echo '	Puttao	';break;
case '	012822018		 ':echo '	San Juan	';break;
case '	012822019		 ':echo '	San Julian	';break;
case '	012822020		 ':echo '	Santa Ana	';break;
case '	012822021		 ':echo '	Santiago	';break;
case '	012822022		 ':echo '	Talugtog	';break;
case '	012823001		 ':echo '	Abkir	';break;
case '	012823003		 ':echo '	Alsem	';break;
case '	012823005		 ':echo '	Bago	';break;
case '	012823010		 ':echo '	Bulbulala	';break;
case '	012823011		 ':echo '	Cabangaran	';break;
case '	012823012		 ':echo '	Cabayo	';break;
case '	012823013		 ':echo '	Cabisocolan	';break;
case '	012823014		 ':echo '	Canaam	';break;
case '	012823015		 ':echo '	Columbia	';break;
case '	012823016		 ':echo '	Dagupan	';break;
case '	012823017		 ':echo '	Pedro F. Alviar	';break;
case '	012823019		 ':echo '	Dipilat	';break;
case '	012823022		 ':echo '	Esperanza	';break;
case '	012823023		 ':echo '	Ester	';break;
case '	012823024		 ':echo '	Isic Isic	';break;
case '	012823027		 ':echo '	Lubnac	';break;
case '	012823028		 ':echo '	Mabanbanag	';break;
case '	012823030		 ':echo '	Alejo Malasig	';break;
case '	012823031		 ':echo '	Manarang	';break;
case '	012823033		 ':echo '	Margaay	';break;
case '	012823035		 ':echo '	Namoroc	';break;
case '	012823038		 ':echo '	Malampa	';break;
case '	012823039		 ':echo '	Parparoroc	';break;
case '	012823040		 ':echo '	Parut	';break;
case '	012823047		 ':echo '	Salsalamagui	';break;
case '	012823049		 ':echo '	San Jose	';break;
case '	012823050		 ':echo '	San Nicolas 	';break;
case '	012823051		 ':echo '	San Pedro 	';break;
case '	012823052		 ':echo '	San Ramon 	';break;
case '	012823053		 ':echo '	San Roque 	';break;
case '	012823054		 ':echo '	Santa Maria 	';break;
case '	012823056		 ':echo '	Tamdagan	';break;
case '	012823058		 ':echo '	Visaya	';break;
case '	012901001		 ':echo '	Alilem Daya 	';break;
case '	012901002		 ':echo '	Amilongan	';break;
case '	012901003		 ':echo '	Anaao	';break;
case '	012901004		 ':echo '	Apang	';break;
case '	012901005		 ':echo '	Apaya	';break;
case '	012901006		 ':echo '	Batbato	';break;
case '	012901010		 ':echo '	Daddaay	';break;
case '	012901011		 ':echo '	Dalawa	';break;
case '	012901013		 ':echo '	Kiat	';break;
case '	012902001		 ':echo '	Bagbagotot	';break;
case '	012902002		 ':echo '	Banbanaal	';break;
case '	012902004		 ':echo '	Bisangol	';break;
case '	012902005		 ':echo '	Cadanglaan	';break;
case '	012902006		 ':echo '	Casilagan Norte	';break;
case '	012902007		 ':echo '	Casilagan Sur	';break;
case '	012902008		 ':echo '	Elefante	';break;
case '	012902009		 ':echo '	Guardia	';break;
case '	012902010		 ':echo '	Lintic	';break;
case '	012902011		 ':echo '	Lopez	';break;
case '	012902012		 ':echo '	Montero	';break;
case '	012902013		 ':echo '	Naguimba	';break;
case '	012902014		 ':echo '	Pila	';break;
case '	012902015		 ':echo '	Poblacion	';break;
case '	012903001		 ':echo '	Aggay	';break;
case '	012903002		 ':echo '	An-annam	';break;
case '	012903003		 ':echo '	Balaleng	';break;
case '	012903004		 ':echo '	Banaoang	';break;
case '	012903005		 ':echo '	Bulag	';break;
case '	012903006		 ':echo '	Buquig	';break;
case '	012903007		 ':echo '	Cabalanggan	';break;
case '	012903008		 ':echo '	Cabaroan	';break;
case '	012903009		 ':echo '	Cabusligan	';break;
case '	012903010		 ':echo '	Capangdanan	';break;
case '	012903011		 ':echo '	Guimod	';break;
case '	012903012		 ':echo '	Lingsat	';break;
case '	012903013		 ':echo '	Malingeb	';break;
case '	012903014		 ':echo '	Mira	';break;
case '	012903015		 ':echo '	Naguiddayan	';break;
case '	012903016		 ':echo '	Ora	';break;
case '	012903017		 ':echo '	Paing	';break;
case '	012903018		 ':echo '	Puspus	';break;
case '	012903019		 ':echo '	Quimmarayan	';break;
case '	012903020		 ':echo '	Sagneb	';break;
case '	012903021		 ':echo '	Sagpat	';break;
case '	012903022		 ':echo '	San Mariano	';break;
case '	012903023		 ':echo '	San Isidro	';break;
case '	012903024		 ':echo '	San Julian	';break;
case '	012903026		 ':echo '	Sinabaan	';break;
case '	012903027		 ':echo '	Taguiporo	';break;
case '	012903028		 ':echo '	Taleb	';break;
case '	012903029		 ':echo '	Tay-ac	';break;
case '	012903030		 ':echo '	Barangay 1 	';break;
case '	012903031		 ':echo '	Barangay 2 	';break;
case '	012903032		 ':echo '	Barangay 3 	';break;
case '	012903033		 ':echo '	Barangay 4 	';break;
case '	012903034		 ':echo '	Barangay 5 	';break;
case '	012903035		 ':echo '	Barangay 6 	';break;
case '	012904001		 ':echo '	Ambugat	';break;
case '	012904002		 ':echo '	Balugang	';break;
case '	012904003		 ':echo '	Bangbangar	';break;
case '	012904005		 ':echo '	Bessang	';break;
case '	012904006		 ':echo '	Cabcaburao	';break;
case '	012904007		 ':echo '	Cadacad	';break;
case '	012904008		 ':echo '	Callitong	';break;
case '	012904009		 ':echo '	Dayanki	';break;
case '	012904010		 ':echo '	Lesseb	';break;
case '	012904011		 ':echo '	Lubing	';break;
case '	012904012		 ':echo '	Lucaban	';break;
case '	012904013		 ':echo '	Luna	';break;
case '	012904014		 ':echo '	Macaoayan	';break;
case '	012904015		 ':echo '	Mambug	';break;
case '	012904016		 ':echo '	Manaboc	';break;
case '	012904017		 ':echo '	Mapanit	';break;
case '	012904018		 ':echo '	Poblacion Sur	';break;
case '	012904019		 ':echo '	Nagpanaoan	';break;
case '	012904020		 ':echo '	Dirdirig	';break;
case '	012904022		 ':echo '	Paduros	';break;
case '	012904023		 ':echo '	Patac	';break;
case '	012904024		 ':echo '	Poblacion Norte	';break;
case '	012904026		 ':echo '	Sabangan Pinggan	';break;
case '	012904027		 ':echo '	Subadi Norte	';break;
case '	012904028		 ':echo '	Subadi Sur	';break;
case '	012904029		 ':echo '	Taliao	';break;
case '	012905001		 ':echo '	Alinaay	';break;
case '	012905002		 ':echo '	Aragan	';break;
case '	012905003		 ':echo '	Arnap	';break;
case '	012905004		 ':echo '	Baclig 	';break;
case '	012905005		 ':echo '	Bato	';break;
case '	012905006		 ':echo '	Bonifacio 	';break;
case '	012905007		 ':echo '	Bungro	';break;
case '	012905008		 ':echo '	Cacadiran	';break;
case '	012905009		 ':echo '	Caellayan	';break;
case '	012905010		 ':echo '	Carusipan	';break;
case '	012905011		 ':echo '	Catucdaan	';break;
case '	012905012		 ':echo '	Cuancabal	';break;
case '	012905013		 ':echo '	Cuantacla	';break;
case '	012905014		 ':echo '	Daclapan	';break;
case '	012905015		 ':echo '	Dardarat	';break;
case '	012905016		 ':echo '	Lipit	';break;
case '	012905017		 ':echo '	Maradodon	';break;
case '	012905018		 ':echo '	Margaay	';break;
case '	012905019		 ':echo '	Nagsantaan	';break;
case '	012905020		 ':echo '	Nagsincaoan	';break;
case '	012905021		 ':echo '	Namruangan	';break;
case '	012905022		 ':echo '	Pila	';break;
case '	012905023		 ':echo '	Pug-os	';break;
case '	012905024		 ':echo '	Quezon 	';break;
case '	012905025		 ':echo '	Reppaac	';break;
case '	012905026		 ':echo '	Rizal 	';break;
case '	012905027		 ':echo '	Sabang	';break;
case '	012905028		 ':echo '	Sagayaden	';break;
case '	012905029		 ':echo '	Salapasap	';break;
case '	012905030		 ':echo '	Salomague	';break;
case '	012905031		 ':echo '	Sisim	';break;
case '	012905032		 ':echo '	Turod	';break;
case '	012905033		 ':echo '	Turod-Patac	';break;
case '	012906001		 ':echo '	Allangigan Primero	';break;
case '	012906002		 ':echo '	Allangigan Segundo	';break;
case '	012906003		 ':echo '	Amguid	';break;
case '	012906004		 ':echo '	Ayudante	';break;
case '	012906005		 ':echo '	Bagani Camposanto	';break;
case '	012906006		 ':echo '	Bagani Gabor	';break;
case '	012906007		 ':echo '	Bagani Tocgo	';break;
case '	012906008		 ':echo '	Bagani Ubbog	';break;
case '	012906009		 ':echo '	Bagar	';break;
case '	012906010		 ':echo '	Balingaoan	';break;
case '	012906015		 ':echo '	Bugnay	';break;
case '	012906016		 ':echo '	Calaoaan	';break;
case '	012906017		 ':echo '	Calongbuyan	';break;
case '	012906018		 ':echo '	Caterman	';break;
case '	012906019		 ':echo '	Cubcubboot	';break;
case '	012906020		 ':echo '	Darapidap	';break;
case '	012906022		 ':echo '	Langlangca Primero	';break;
case '	012906023		 ':echo '	Langlangca Segundo	';break;
case '	012906024		 ':echo '	Oaig-Daya	';break;
case '	012906025		 ':echo '	Palacapac	';break;
case '	012906026		 ':echo '	Paras	';break;
case '	012906027		 ':echo '	Parioc Primero	';break;
case '	012906028		 ':echo '	Parioc Segundo	';break;
case '	012906029		 ':echo '	Patpata Primero	';break;
case '	012906030		 ':echo '	Patpata Segundo	';break;
case '	012906031		 ':echo '	Paypayad	';break;
case '	012906032		 ':echo '	Salvador Primero	';break;
case '	012906033		 ':echo '	Salvador Segundo	';break;
case '	012906034		 ':echo '	San Agustin	';break;
case '	012906035		 ':echo '	San Andres	';break;
case '	012906036		 ':echo '	San Antonio 	';break;
case '	012906037		 ':echo '	San Isidro 	';break;
case '	012906038		 ':echo '	San Jose 	';break;
case '	012906039		 ':echo '	San Juan 	';break;
case '	012906040		 ':echo '	San Nicolas	';break;
case '	012906041		 ':echo '	San Pedro	';break;
case '	012906042		 ':echo '	Santo Tomas	';break;
case '	012906043		 ':echo '	Tablac	';break;
case '	012906044		 ':echo '	Talogtog	';break;
case '	012906045		 ':echo '	Tamurong Primero	';break;
case '	012906046		 ':echo '	Tamurong Segundo	';break;
case '	012906048		 ':echo '	Villarica	';break;
case '	012907001		 ':echo '	Anonang Mayor	';break;
case '	012907002		 ':echo '	Anonang Menor	';break;
case '	012907003		 ':echo '	Baggoc	';break;
case '	012907004		 ':echo '	Callaguip	';break;
case '	012907005		 ':echo '	Caparacadan	';break;
case '	012907006		 ':echo '	Fuerte	';break;
case '	012907007		 ':echo '	Manangat	';break;
case '	012907008		 ':echo '	Naguilian	';break;
case '	012907009		 ':echo '	Nansuagao	';break;
case '	012907010		 ':echo '	Pandan	';break;
case '	012907011		 ':echo '	Pantay-Quitiquit	';break;
case '	012907012		 ':echo '	Don Dimas Querubin 	';break;
case '	012907013		 ':echo '	Puro	';break;
case '	012907014		 ':echo '	Pantay Tamurong	';break;
case '	012907015		 ':echo '	Villamar	';break;
case '	012907016		 ':echo '	Don Alejandro Quirolgico 	';break;
case '	012907017		 ':echo '	Don Lorenzo Querubin 	';break;
case '	012908001		 ':echo '	Aluling	';break;
case '	012908002		 ':echo '	Comillas North	';break;
case '	012908003		 ':echo '	Comillas South	';break;
case '	012908004		 ':echo '	Concepcion 	';break;
case '	012908005		 ':echo '	Dinwede East	';break;
case '	012908006		 ':echo '	Dinwede West	';break;
case '	012908007		 ':echo '	Libang	';break;
case '	012908010		 ':echo '	Pilipil	';break;
case '	012908013		 ':echo '	Remedios	';break;
case '	012908014		 ':echo '	Rosario 	';break;
case '	012908015		 ':echo '	San Juan	';break;
case '	012908016		 ':echo '	San Luis	';break;
case '	012908017		 ':echo '	Malaya	';break;
case '	012909001		 ':echo '	Abaya	';break;
case '	012909002		 ':echo '	Baracbac	';break;
case '	012909003		 ':echo '	Bidbiday	';break;
case '	012909004		 ':echo '	Bitong	';break;
case '	012909005		 ':echo '	Borobor	';break;
case '	012909006		 ':echo '	Calimugtong	';break;
case '	012909007		 ':echo '	Calongbuyan	';break;
case '	012909008		 ':echo '	Calumbaya	';break;
case '	012909009		 ':echo '	Daldagan	';break;
case '	012909010		 ':echo '	Kilang	';break;
case '	012909011		 ':echo '	Legaspi	';break;
case '	012909012		 ':echo '	Mabayag	';break;
case '	012909013		 ':echo '	Matanubong	';break;
case '	012909014		 ':echo '	Mckinley	';break;
case '	012909015		 ':echo '	Nagsingcaoan	';break;
case '	012909016		 ':echo '	Oaig-Daya	';break;
case '	012909017		 ':echo '	Pagangpang	';break;
case '	012909018		 ':echo '	Patac	';break;
case '	012909019		 ':echo '	Poblacion	';break;
case '	012909020		 ':echo '	Rubio	';break;
case '	012909021		 ':echo '	Sabangan-Bato	';break;
case '	012909022		 ':echo '	Sacaang	';break;
case '	012909023		 ':echo '	San Vicente	';break;
case '	012909024		 ':echo '	Sapang	';break;
case '	012910001		 ':echo '	Alfonso	';break;
case '	012910002		 ':echo '	Bussot	';break;
case '	012910003		 ':echo '	Concepcion	';break;
case '	012910004		 ':echo '	Dapdappig	';break;
case '	012910005		 ':echo '	Matue-Butarag	';break;
case '	012910007		 ':echo '	Poblacion Norte	';break;
case '	012910008		 ':echo '	Poblacion Sur	';break;
case '	012911001		 ':echo '	Banucal	';break;
case '	012911002		 ':echo '	Bequi-Walin	';break;
case '	012911003		 ':echo '	Bugui	';break;
case '	012911004		 ':echo '	Calungbuyan	';break;
case '	012911005		 ':echo '	Carcarabasa	';break;
case '	012911006		 ':echo '	Labut	';break;
case '	012911007		 ':echo '	Poblacion Norte	';break;
case '	012911008		 ':echo '	Poblacion Sur	';break;
case '	012911009		 ':echo '	San Vicente	';break;
case '	012911010		 ':echo '	Suysuyan	';break;
case '	012911011		 ':echo '	Tay-ac	';break;
case '	012912001		 ':echo '	Alangan	';break;
case '	012912002		 ':echo '	Bacar	';break;
case '	012912006		 ':echo '	Barbarit	';break;
case '	012912007		 ':echo '	Bungro	';break;
case '	012912008		 ':echo '	Cabaroan	';break;
case '	012912010		 ':echo '	Cadanglaan	';break;
case '	012912011		 ':echo '	Caraisan	';break;
case '	012912014		 ':echo '	Dacutan	';break;
case '	012912015		 ':echo '	Labut	';break;
case '	012912017		 ':echo '	Maas-asin	';break;
case '	012912018		 ':echo '	Macatcatud	';break;
case '	012912019		 ':echo '	Namalpalan	';break;
case '	012912020		 ':echo '	Manzante	';break;
case '	012912022		 ':echo '	Maratudo	';break;
case '	012912023		 ':echo '	Miramar	';break;
case '	012912025		 ':echo '	Napo	';break;
case '	012912026		 ':echo '	Pagsanaan Norte	';break;
case '	012912027		 ':echo '	Pagsanaan Sur	';break;
case '	012912028		 ':echo '	Panay Norte	';break;
case '	012912029		 ':echo '	Panay Sur	';break;
case '	012912030		 ':echo '	Patong	';break;
case '	012912031		 ':echo '	Puro	';break;
case '	012912032		 ':echo '	San Basilio 	';break;
case '	012912033		 ':echo '	San Clemente 	';break;
case '	012912034		 ':echo '	San Julian 	';break;
case '	012912035		 ':echo '	San Lucas 	';break;
case '	012912036		 ':echo '	San Ramon 	';break;
case '	012912037		 ':echo '	San Vicente 	';break;
case '	012912038		 ':echo '	Santa Monica	';break;
case '	012912039		 ':echo '	Sarsaracat	';break;
case '	012913001		 ':echo '	Balaweg	';break;
case '	012913002		 ':echo '	Bandril	';break;
case '	012913003		 ':echo '	Bantugo	';break;
case '	012913004		 ':echo '	Cadacad	';break;
case '	012913005		 ':echo '	Casilagan	';break;
case '	012913006		 ':echo '	Cosocos	';break;
case '	012913007		 ':echo '	Lapting	';break;
case '	012913008		 ':echo '	Mapisi	';break;
case '	012913009		 ':echo '	Mission	';break;
case '	012913010		 ':echo '	Poblacion East	';break;
case '	012913011		 ':echo '	Poblacion West	';break;
case '	012913012		 ':echo '	Taleb	';break;
case '	012914001		 ':echo '	Abuor	';break;
case '	012914002		 ':echo '	Ambulogan	';break;
case '	012914004		 ':echo '	Aquib	';break;
case '	012914005		 ':echo '	Banglayan	';break;
case '	012914006		 ':echo '	Bulanos	';break;
case '	012914007		 ':echo '	Cadacad	';break;
case '	012914008		 ':echo '	Cagayungan	';break;
case '	012914009		 ':echo '	Camarao	';break;
case '	012914010		 ':echo '	Casilagan	';break;
case '	012914011		 ':echo '	Codoog	';break;
case '	012914012		 ':echo '	Dasay	';break;
case '	012914013		 ':echo '	Dinalaoan	';break;
case '	012914014		 ':echo '	Estancia	';break;
case '	012914015		 ':echo '	Lanipao	';break;
case '	012914016		 ':echo '	Lungog	';break;
case '	012914017		 ':echo '	Margaay	';break;
case '	012914018		 ':echo '	Marozo	';break;
case '	012914019		 ':echo '	Naguneg	';break;
case '	012914020		 ':echo '	Orence	';break;
case '	012914021		 ':echo '	Pantoc	';break;
case '	012914022		 ':echo '	Paratong	';break;
case '	012914023		 ':echo '	Parparia	';break;
case '	012914024		 ':echo '	Quinarayan	';break;
case '	012914025		 ':echo '	Rivadavia	';break;
case '	012914026		 ':echo '	San Antonio	';break;
case '	012914027		 ':echo '	San Jose 	';break;
case '	012914028		 ':echo '	San Pablo	';break;
case '	012914029		 ':echo '	San Pedro	';break;
case '	012914030		 ':echo '	Santa Lucia 	';break;
case '	012914031		 ':echo '	Sarmingan	';break;
case '	012914032		 ':echo '	Sucoc	';break;
case '	012914033		 ':echo '	Sulvec	';break;
case '	012914034		 ':echo '	Turod	';break;
case '	012914035		 ':echo '	Bantay Abot	';break;
case '	012915001		 ':echo '	Banoen	';break;
case '	012915002		 ':echo '	Cayus	';break;
case '	012915003		 ':echo '	Patungcaleo	';break;
case '	012915004		 ':echo '	Malideg	';break;
case '	012915005		 ':echo '	Namitpit	';break;
case '	012915006		 ':echo '	Patiacan	';break;
case '	012915007		 ':echo '	Legleg 	';break;
case '	012915008		 ':echo '	Suagayan	';break;
case '	012915009		 ':echo '	Lamag	';break;
case '	012916001		 ':echo '	Atabay	';break;
case '	012916002		 ':echo '	Calangcuasan	';break;
case '	012916003		 ':echo '	Balidbid	';break;
case '	012916004		 ':echo '	Baluarte	';break;
case '	012916005		 ':echo '	Baybayading	';break;
case '	012916006		 ':echo '	Boguibog	';break;
case '	012916007		 ':echo '	Bulala-Leguey	';break;
case '	012916008		 ':echo '	Kaliwakiw	';break;
case '	012916010		 ':echo '	Culiong	';break;
case '	012916011		 ':echo '	Dinaratan	';break;
case '	012916012		 ':echo '	Kinmarin	';break;
case '	012916013		 ':echo '	Lucbuban	';break;
case '	012916014		 ':echo '	Madarang	';break;
case '	012916015		 ':echo '	Maligcong	';break;
case '	012916016		 ':echo '	Pias	';break;
case '	012916017		 ':echo '	Poblacion Norte	';break;
case '	012916018		 ':echo '	Poblacion Sur	';break;
case '	012916019		 ':echo '	San Gaspar	';break;
case '	012916020		 ':echo '	San Tiburcio	';break;
case '	012916021		 ':echo '	Sorioan	';break;
case '	012916022		 ':echo '	Ubbog	';break;
case '	012917001		 ':echo '	Cabaroan 	';break;
case '	012917002		 ':echo '	Kalumsing	';break;
case '	012917003		 ':echo '	Lancuas	';break;
case '	012917004		 ':echo '	Matibuey	';break;
case '	012917005		 ':echo '	Paltoc	';break;
case '	012917006		 ':echo '	Sibsibbu	';break;
case '	012917007		 ':echo '	Tiagan	';break;
case '	012917008		 ':echo '	San Miliano	';break;
case '	012918001		 ':echo '	Ansad	';break;
case '	012918002		 ':echo '	Apatot	';break;
case '	012918003		 ':echo '	Bateria	';break;
case '	012918004		 ':echo '	Cabaroan	';break;
case '	012918005		 ':echo '	Cappa-cappa	';break;
case '	012918006		 ':echo '	Poblacion	';break;
case '	012918007		 ':echo '	San Nicolas	';break;
case '	012918008		 ':echo '	San Pablo	';break;
case '	012918009		 ':echo '	San Rafael	';break;
case '	012918010		 ':echo '	Villa Quirino	';break;
case '	012919001		 ':echo '	Arnap	';break;
case '	012919002		 ':echo '	Bahet	';break;
case '	012919003		 ':echo '	Belen	';break;
case '	012919004		 ':echo '	Bungro	';break;
case '	012919006		 ':echo '	Busiing Sur	';break;
case '	012919007		 ':echo '	Busiing Norte	';break;
case '	012919009		 ':echo '	Dongalo	';break;
case '	012919010		 ':echo '	Gongogong	';break;
case '	012919011		 ':echo '	Iboy	';break;
case '	012919013		 ':echo '	Otol-Patac	';break;
case '	012919014		 ':echo '	Poblacion East	';break;
case '	012919015		 ':echo '	Poblacion West	';break;
case '	012919016		 ':echo '	Kinamantirisan	';break;
case '	012919017		 ':echo '	Sagneb	';break;
case '	012919018		 ':echo '	Sagsagat	';break;
case '	012920001		 ':echo '	Bacsil	';break;
case '	012920002		 ':echo '	Baliw	';break;
case '	012920003		 ':echo '	Bannuar 	';break;
case '	012920004		 ':echo '	Barbar	';break;
case '	012920005		 ':echo '	Cabanglotan	';break;
case '	012920006		 ':echo '	Cacandongan	';break;
case '	012920007		 ':echo '	Camanggaan	';break;
case '	012920008		 ':echo '	Camindoroan	';break;
case '	012920009		 ':echo '	Caronoan	';break;
case '	012920010		 ':echo '	Darao	';break;
case '	012920012		 ':echo '	Dardarat	';break;
case '	012920013		 ':echo '	Guimod Norte	';break;
case '	012920014		 ':echo '	Guimod Sur	';break;
case '	012920015		 ':echo '	Immayos Norte	';break;
case '	012920016		 ':echo '	Immayos Sur	';break;
case '	012920017		 ':echo '	Labnig	';break;
case '	012920018		 ':echo '	Lapting	';break;
case '	012920019		 ':echo '	Lira 	';break;
case '	012920020		 ':echo '	Malamin	';break;
case '	012920021		 ':echo '	Muraya	';break;
case '	012920022		 ':echo '	Nagsabaran	';break;
case '	012920023		 ':echo '	Nagsupotan	';break;
case '	012920025		 ':echo '	Pandayan 	';break;
case '	012920027		 ':echo '	Refaro	';break;
case '	012920028		 ':echo '	Resurreccion 	';break;
case '	012920029		 ':echo '	Sabangan	';break;
case '	012920031		 ':echo '	San Isidro	';break;
case '	012920035		 ':echo '	Saoang	';break;
case '	012920037		 ':echo '	Solotsolot	';break;
case '	012920038		 ':echo '	Sunggiam	';break;
case '	012920039		 ':echo '	Surngit	';break;
case '	012920040		 ':echo '	Asilang	';break;
case '	012921001		 ':echo '	Bantaoay	';break;
case '	012921002		 ':echo '	Bayubay Norte	';break;
case '	012921003		 ':echo '	Bayubay Sur	';break;
case '	012921004		 ':echo '	Lubong	';break;
case '	012921005		 ':echo '	Poblacion	';break;
case '	012921006		 ':echo '	Pudoc	';break;
case '	012921007		 ':echo '	San Sebastian	';break;
case '	012922001		 ':echo '	Ampandula	';break;
case '	012922002		 ':echo '	Banaoang	';break;
case '	012922003		 ':echo '	Basug	';break;
case '	012922004		 ':echo '	Bucalag	';break;
case '	012922005		 ':echo '	Cabangaran	';break;
case '	012922006		 ':echo '	Calungboyan	';break;
case '	012922008		 ':echo '	Casiber	';break;
case '	012922009		 ':echo '	Dammay	';break;
case '	012922010		 ':echo '	Labut Norte	';break;
case '	012922011		 ':echo '	Labut Sur	';break;
case '	012922012		 ':echo '	Mabilbila Sur	';break;
case '	012922013		 ':echo '	Mabilbila Norte	';break;
case '	012922014		 ':echo '	Magsaysay District 	';break;
case '	012922015		 ':echo '	Manueva	';break;
case '	012922016		 ':echo '	Marcos 	';break;
case '	012922017		 ':echo '	Nagpanaoan	';break;
case '	012922018		 ':echo '	Namalangan	';break;
case '	012922019		 ':echo '	Oribi	';break;
case '	012922020		 ':echo '	Pasungol	';break;
case '	012922022		 ':echo '	Quezon 	';break;
case '	012922023		 ':echo '	Quirino 	';break;
case '	012922024		 ':echo '	Rancho	';break;
case '	012922025		 ':echo '	Rizal	';break;
case '	012922026		 ':echo '	Sacuyya Norte	';break;
case '	012922027		 ':echo '	Sacuyya Sur	';break;
case '	012922028		 ':echo '	Tabucolan	';break;
case '	012923001		 ':echo '	Cabaroan	';break;
case '	012923002		 ':echo '	Cabittaogan	';break;
case '	012923003		 ':echo '	Cabuloan	';break;
case '	012923004		 ':echo '	Pangada	';break;
case '	012923005		 ':echo '	Paratong	';break;
case '	012923006		 ':echo '	Poblacion	';break;
case '	012923007		 ':echo '	Sinabaan	';break;
case '	012923008		 ':echo '	Subec	';break;
case '	012923009		 ':echo '	Tamorong	';break;
case '	012924001		 ':echo '	Amarao	';break;
case '	012924002		 ':echo '	Babayoan	';break;
case '	012924003		 ':echo '	Bacsayan	';break;
case '	012924004		 ':echo '	Banay	';break;
case '	012924005		 ':echo '	Bayugao Este	';break;
case '	012924006		 ':echo '	Bayugao Oeste	';break;
case '	012924007		 ':echo '	Besalan	';break;
case '	012924008		 ':echo '	Bugbuga	';break;
case '	012924009		 ':echo '	Calaoaan	';break;
case '	012924010		 ':echo '	Camanggaan	';break;
case '	012924011		 ':echo '	Candalican	';break;
case '	012924012		 ':echo '	Capariaan	';break;
case '	012924013		 ':echo '	Casilagan	';break;
case '	012924014		 ':echo '	Coscosnong	';break;
case '	012924015		 ':echo '	Daligan	';break;
case '	012924016		 ':echo '	Dili	';break;
case '	012924017		 ':echo '	Gabor Norte	';break;
case '	012924018		 ':echo '	Gabor Sur	';break;
case '	012924019		 ':echo '	Lalong	';break;
case '	012924020		 ':echo '	Lantag	';break;
case '	012924021		 ':echo '	Las-ud	';break;
case '	012924022		 ':echo '	Mambog	';break;
case '	012924023		 ':echo '	Mantanas	';break;
case '	012924024		 ':echo '	Nagtengnga	';break;
case '	012924025		 ':echo '	Padaoil	';break;
case '	012924026		 ':echo '	Paratong	';break;
case '	012924027		 ':echo '	Pattiqui	';break;
case '	012924028		 ':echo '	Pidpid	';break;
case '	012924029		 ':echo '	Pilar	';break;
case '	012924030		 ':echo '	Pinipin	';break;
case '	012924031		 ':echo '	Poblacion Este	';break;
case '	012924032		 ':echo '	Poblacion Norte	';break;
case '	012924033		 ':echo '	Poblacion Weste	';break;
case '	012924034		 ':echo '	Poblacion Sur	';break;
case '	012924035		 ':echo '	Quinfermin	';break;
case '	012924036		 ':echo '	Quinsoriano	';break;
case '	012924037		 ':echo '	Sagat	';break;
case '	012924038		 ':echo '	San Antonio	';break;
case '	012924039		 ':echo '	San Jose	';break;
case '	012924040		 ':echo '	San Pedro	';break;
case '	012924041		 ':echo '	Saoat	';break;
case '	012924042		 ':echo '	Sevilla	';break;
case '	012924043		 ':echo '	Sidaoen	';break;
case '	012924044		 ':echo '	Suyo	';break;
case '	012924045		 ':echo '	Tampugo	';break;
case '	012924046		 ':echo '	Turod	';break;
case '	012924047		 ':echo '	Villa Garcia	';break;
case '	012924048		 ':echo '	Villa Hermosa	';break;
case '	012924049		 ':echo '	Villa Laurencia	';break;
case '	012925001		 ':echo '	Alincaoeg	';break;
case '	012925002		 ':echo '	Angkileng	';break;
case '	012925003		 ':echo '	Arangin	';break;
case '	012925004		 ':echo '	Ayusan 	';break;
case '	012925005		 ':echo '	Banbanaba	';break;
case '	012925006		 ':echo '	Bao-as	';break;
case '	012925007		 ':echo '	Barangobong 	';break;
case '	012925008		 ':echo '	Buliclic	';break;
case '	012925009		 ':echo '	Burgos 	';break;
case '	012925010		 ':echo '	Cabaritan	';break;
case '	012925011		 ':echo '	Catayagan	';break;
case '	012925012		 ':echo '	Conconig East	';break;
case '	012925013		 ':echo '	Conconig West	';break;
case '	012925014		 ':echo '	Damacuag	';break;
case '	012925015		 ':echo '	Lubong	';break;
case '	012925016		 ':echo '	Luba	';break;
case '	012925017		 ':echo '	Nagrebcan	';break;
case '	012925018		 ':echo '	Nagtablaan	';break;
case '	012925019		 ':echo '	Namatican	';break;
case '	012925020		 ':echo '	Nangalisan	';break;
case '	012925021		 ':echo '	Palali Norte	';break;
case '	012925022		 ':echo '	Palali Sur	';break;
case '	012925023		 ':echo '	Paoc Norte	';break;
case '	012925024		 ':echo '	Paoc Sur	';break;
case '	012925025		 ':echo '	Paratong	';break;
case '	012925026		 ':echo '	Pila East	';break;
case '	012925027		 ':echo '	Pila West	';break;
case '	012925028		 ':echo '	Quinabalayangan	';break;
case '	012925029		 ':echo '	Ronda	';break;
case '	012925030		 ':echo '	Sabuanan	';break;
case '	012925031		 ':echo '	San Juan	';break;
case '	012925032		 ':echo '	San Pedro	';break;
case '	012925033		 ':echo '	Sapang	';break;
case '	012925034		 ':echo '	Suagayan	';break;
case '	012925035		 ':echo '	Vical	';break;
case '	012925036		 ':echo '	Bani	';break;
case '	012926001		 ':echo '	Ag-agrao	';break;
case '	012926002		 ':echo '	Ampuagan	';break;
case '	012926003		 ':echo '	Baballasioan	';break;
case '	012926004		 ':echo '	Baliw Daya	';break;
case '	012926005		 ':echo '	Baliw Laud	';break;
case '	012926006		 ':echo '	Bia-o	';break;
case '	012926007		 ':echo '	Butir	';break;
case '	012926008		 ':echo '	Cabaroan	';break;
case '	012926009		 ':echo '	Danuman East	';break;
case '	012926010		 ':echo '	Danuman West	';break;
case '	012926011		 ':echo '	Dunglayan	';break;
case '	012926012		 ':echo '	Gusing	';break;
case '	012926013		 ':echo '	Langaoan	';break;
case '	012926014		 ':echo '	Laslasong Norte	';break;
case '	012926015		 ':echo '	Laslasong Sur	';break;
case '	012926016		 ':echo '	Laslasong West	';break;
case '	012926017		 ':echo '	Lesseb	';break;
case '	012926018		 ':echo '	Lingsat	';break;
case '	012926019		 ':echo '	Lubong	';break;
case '	012926020		 ':echo '	Maynganay Norte	';break;
case '	012926021		 ':echo '	Maynganay Sur	';break;
case '	012926022		 ':echo '	Nagsayaoan	';break;
case '	012926023		 ':echo '	Nagtupacan	';break;
case '	012926024		 ':echo '	Nalvo	';break;
case '	012926027		 ':echo '	Pacang	';break;
case '	012926028		 ':echo '	Penned	';break;
case '	012926029		 ':echo '	Poblacion Norte	';break;
case '	012926030		 ':echo '	Poblacion Sur	';break;
case '	012926031		 ':echo '	Silag	';break;
case '	012926032		 ':echo '	Sumagui	';break;
case '	012926033		 ':echo '	Suso	';break;
case '	012926034		 ':echo '	Tangaoan	';break;
case '	012926035		 ':echo '	Tinaan	';break;
case '	012927001		 ':echo '	Al-aludig	';break;
case '	012927002		 ':echo '	Ambucao	';break;
case '	012927003		 ':echo '	San Jose	';break;
case '	012927004		 ':echo '	Baybayabas	';break;
case '	012927005		 ':echo '	Bigbiga	';break;
case '	012927006		 ':echo '	Bulbulala	';break;
case '	012927007		 ':echo '	Busel-busel	';break;
case '	012927008		 ':echo '	Butol	';break;
case '	012927009		 ':echo '	Caburao	';break;
case '	012927010		 ':echo '	Dan-ar	';break;
case '	012927011		 ':echo '	Gabao	';break;
case '	012927012		 ':echo '	Guinabang	';break;
case '	012927013		 ':echo '	Imus	';break;
case '	012927014		 ':echo '	Lang-ayan	';break;
case '	012927015		 ':echo '	Mambug	';break;
case '	012927016		 ':echo '	Nalasin	';break;
case '	012927017		 ':echo '	Olo-olo Norte	';break;
case '	012927018		 ':echo '	Olo-olo Sur	';break;
case '	012927019		 ':echo '	Poblacion Norte	';break;
case '	012927020		 ':echo '	Poblacion Sur	';break;
case '	012927021		 ':echo '	Sabangan	';break;
case '	012927022		 ':echo '	Salincub	';break;
case '	012927023		 ':echo '	San Roque	';break;
case '	012927024		 ':echo '	Ubbog	';break;
case '	012928001		 ':echo '	Binalayangan	';break;
case '	012928002		 ':echo '	Binongan	';break;
case '	012928003		 ':echo '	Borobor	';break;
case '	012928004		 ':echo '	Cabaritan	';break;
case '	012928005		 ':echo '	Cabigbigaan	';break;
case '	012928006		 ':echo '	Calautit	';break;
case '	012928007		 ':echo '	Calay-ab	';break;
case '	012928008		 ':echo '	Camestizoan	';break;
case '	012928009		 ':echo '	Casili	';break;
case '	012928010		 ':echo '	Flora	';break;
case '	012928011		 ':echo '	Lagatit	';break;
case '	012928012		 ':echo '	Laoingen	';break;
case '	012928013		 ':echo '	Lussoc	';break;
case '	012928014		 ':echo '	Nalasin	';break;
case '	012928015		 ':echo '	Nagbettedan	';break;
case '	012928016		 ':echo '	Naglaoa-an	';break;
case '	012928017		 ':echo '	Nambaran	';break;
case '	012928018		 ':echo '	Nanerman	';break;
case '	012928019		 ':echo '	Napo	';break;
case '	012928020		 ':echo '	Padu Chico	';break;
case '	012928021		 ':echo '	Padu Grande	';break;
case '	012928022		 ':echo '	Paguraper	';break;
case '	012928023		 ':echo '	Panay	';break;
case '	012928024		 ':echo '	Pangpangdan	';break;
case '	012928025		 ':echo '	Parada	';break;
case '	012928026		 ':echo '	Paras	';break;
case '	012928027		 ':echo '	Poblacion	';break;
case '	012928030		 ':echo '	Puerta Real	';break;
case '	012928031		 ':echo '	Pussuac	';break;
case '	012928032		 ':echo '	Quimmarayan	';break;
case '	012928033		 ':echo '	San Pablo	';break;
case '	012928034		 ':echo '	Santa Cruz	';break;
case '	012928035		 ':echo '	Santo Tomas	';break;
case '	012928036		 ':echo '	Sived	';break;
case '	012928038		 ':echo '	Vacunero	';break;
case '	012928039		 ':echo '	Suksukit	';break;
case '	012929001		 ':echo '	Abaccan	';break;
case '	012929002		 ':echo '	Mabileg	';break;
case '	012929003		 ':echo '	Matallucod	';break;
case '	012929004		 ':echo '	Poblacion	';break;
case '	012929005		 ':echo '	San Elias	';break;
case '	012929006		 ':echo '	San Ramon	';break;
case '	012929007		 ':echo '	Santo Rosario	';break;
case '	012930001		 ':echo '	Aguing	';break;
case '	012930002		 ':echo '	Ballaigui 	';break;
case '	012930003		 ':echo '	Baliw	';break;
case '	012930004		 ':echo '	Baracbac	';break;
case '	012930005		 ':echo '	Barikir	';break;
case '	012930006		 ':echo '	Battog	';break;
case '	012930007		 ':echo '	Binacud	';break;
case '	012930008		 ':echo '	Cabangtalan	';break;
case '	012930009		 ':echo '	Cabarambanan	';break;
case '	012930010		 ':echo '	Cabulalaan	';break;
case '	012930011		 ':echo '	Cadanglaan	';break;
case '	012930012		 ':echo '	Calingayan	';break;
case '	012930013		 ':echo '	Curtin	';break;
case '	012930014		 ':echo '	Dadalaquiten Norte	';break;
case '	012930015		 ':echo '	Dadalaquiten Sur	';break;
case '	012930016		 ':echo '	Duyayyat	';break;
case '	012930017		 ':echo '	Jordan	';break;
case '	012930018		 ':echo '	Calanutian	';break;
case '	012930019		 ':echo '	Katipunan	';break;
case '	012930020		 ':echo '	Macabiag 	';break;
case '	012930021		 ':echo '	Magsaysay	';break;
case '	012930022		 ':echo '	Marnay	';break;
case '	012930023		 ':echo '	Masadag	';break;
case '	012930024		 ':echo '	Nagcullooban	';break;
case '	012930025		 ':echo '	Nagbalioartian	';break;
case '	012930026		 ':echo '	Nagongburan	';break;
case '	012930027		 ':echo '	Namnama 	';break;
case '	012930028		 ':echo '	Pacis	';break;
case '	012930029		 ':echo '	Paratong	';break;
case '	012930030		 ':echo '	Dean Leopoldo Yabes	';break;
case '	012930031		 ':echo '	Purag	';break;
case '	012930032		 ':echo '	Quibit-quibit	';break;
case '	012930033		 ':echo '	Quimmallogong	';break;
case '	012930034		 ':echo '	Rang-ay 	';break;
case '	012930035		 ':echo '	Ricudo	';break;
case '	012930036		 ':echo '	Sabañgan	';break;
case '	012930037		 ':echo '	Sallacapo	';break;
case '	012930038		 ':echo '	Santa Cruz	';break;
case '	012930039		 ':echo '	Sapriana	';break;
case '	012930040		 ':echo '	Tapao	';break;
case '	012930041		 ':echo '	Teppeng	';break;
case '	012930042		 ':echo '	Tubigay	';break;
case '	012930043		 ':echo '	Ubbog	';break;
case '	012930044		 ':echo '	Zapat	';break;
case '	012931001		 ':echo '	Banga	';break;
case '	012931002		 ':echo '	Caoayan	';break;
case '	012931004		 ':echo '	Licungan	';break;
case '	012931005		 ':echo '	Danac	';break;
case '	012931007		 ':echo '	Pangotan	';break;
case '	012931008		 ':echo '	Balbalayang 	';break;
case '	012932001		 ':echo '	Baringcucurong	';break;
case '	012932002		 ':echo '	Cabugao	';break;
case '	012932003		 ':echo '	Man-atong	';break;
case '	012932004		 ':echo '	Patoc-ao	';break;
case '	012932005		 ':echo '	Poblacion	';break;
case '	012932007		 ':echo '	Suyo Proper	';break;
case '	012932008		 ':echo '	Urzadan	';break;
case '	012932009		 ':echo '	Uso	';break;
case '	012933001		 ':echo '	Ag-aguman	';break;
case '	012933002		 ':echo '	Ambalayat	';break;
case '	012933003		 ':echo '	Baracbac	';break;
case '	012933004		 ':echo '	Bario-an	';break;
case '	012933005		 ':echo '	Baritao	';break;
case '	012933006		 ':echo '	Borono	';break;
case '	012933007		 ':echo '	Becques	';break;
case '	012933008		 ':echo '	Bimmanga	';break;
case '	012933009		 ':echo '	Bio	';break;
case '	012933010		 ':echo '	Bitalag	';break;
case '	012933011		 ':echo '	Bucao East	';break;
case '	012933012		 ':echo '	Bucao West	';break;
case '	012933013		 ':echo '	Cabaroan	';break;
case '	012933014		 ':echo '	Cabugbugan	';break;
case '	012933015		 ':echo '	Cabulanglangan	';break;
case '	012933016		 ':echo '	Dacutan	';break;
case '	012933017		 ':echo '	Dardarat	';break;
case '	012933018		 ':echo '	Del Pilar 	';break;
case '	012933019		 ':echo '	Farola	';break;
case '	012933020		 ':echo '	Gabur	';break;
case '	012933021		 ':echo '	Garitan	';break;
case '	012933022		 ':echo '	Jardin	';break;
case '	012933023		 ':echo '	Lacong	';break;
case '	012933024		 ':echo '	Lantag	';break;
case '	012933025		 ':echo '	Las-ud	';break;
case '	012933026		 ':echo '	Libtong	';break;
case '	012933027		 ':echo '	Lubnac	';break;
case '	012933028		 ':echo '	Magsaysay 	';break;
case '	012933029		 ':echo '	Malacañang	';break;
case '	012933030		 ':echo '	Pacac	';break;
case '	012933031		 ':echo '	Pallogan	';break;
case '	012933032		 ':echo '	Pudoc East	';break;
case '	012933033		 ':echo '	Pudoc West	';break;
case '	012933034		 ':echo '	Pula	';break;
case '	012933035		 ':echo '	Quirino 	';break;
case '	012933036		 ':echo '	Ranget	';break;
case '	012933038		 ':echo '	Rizal 	';break;
case '	012933039		 ':echo '	Salvacion	';break;
case '	012933040		 ':echo '	San Miguel	';break;
case '	012933041		 ':echo '	Sawat	';break;
case '	012933044		 ':echo '	Tallaoen	';break;
case '	012933045		 ':echo '	Tampugo	';break;
case '	012933046		 ':echo '	Tarangotong	';break;
case '	012934001		 ':echo '	Ayusan Norte	';break;
case '	012934002		 ':echo '	Ayusan Sur	';break;
case '	012934003		 ':echo '	Barangay I 	';break;
case '	012934004		 ':echo '	Barangay II 	';break;
case '	012934005		 ':echo '	Barangay III 	';break;
case '	012934006		 ':echo '	Barangay IV 	';break;
case '	012934007		 ':echo '	Barangay V 	';break;
case '	012934008		 ':echo '	Barangay VI 	';break;
case '	012934009		 ':echo '	Barraca	';break;
case '	012934010		 ':echo '	Beddeng Laud	';break;
case '	012934011		 ':echo '	Beddeng Daya	';break;
case '	012934012		 ':echo '	Bongtolan	';break;
case '	012934013		 ':echo '	Bulala	';break;
case '	012934014		 ':echo '	Cabalangegan	';break;
case '	012934015		 ':echo '	Cabaroan Daya	';break;
case '	012934016		 ':echo '	Cabaroan Laud	';break;
case '	012934017		 ':echo '	Camangaan	';break;
case '	012934018		 ':echo '	Capangpangan	';break;
case '	012934020		 ':echo '	Mindoro	';break;
case '	012934021		 ':echo '	Nagsangalan	';break;
case '	012934022		 ':echo '	Pantay Daya	';break;
case '	012934023		 ':echo '	Pantay Fatima	';break;
case '	012934024		 ':echo '	Pantay Laud	';break;
case '	012934025		 ':echo '	Paoa	';break;
case '	012934026		 ':echo '	Paratong	';break;
case '	012934027		 ':echo '	Pong-ol	';break;
case '	012934028		 ':echo '	Purok-a-bassit	';break;
case '	012934029		 ':echo '	Purok-a-dackel	';break;
case '	012934030		 ':echo '	Raois	';break;
case '	012934031		 ':echo '	Rugsuanan	';break;
case '	012934032		 ':echo '	Salindeg	';break;
case '	012934033		 ':echo '	San Jose	';break;
case '	012934034		 ':echo '	San Julian Norte	';break;
case '	012934035		 ':echo '	San Julian Sur	';break;
case '	012934036		 ':echo '	San Pedro	';break;
case '	012934037		 ':echo '	Tamag	';break;
case '	012934038		 ':echo '	Barangay VII	';break;
case '	012934039		 ':echo '	Barangay VIII	';break;
case '	012934040		 ':echo '	Barangay IX	';break;
case '	013301001		 ':echo '	Ambitacay	';break;
case '	013301002		 ':echo '	Balawarte	';break;
case '	013301003		 ':echo '	Capas	';break;
case '	013301004		 ':echo '	Consolacion 	';break;
case '	013301005		 ':echo '	Macalva Central	';break;
case '	013301006		 ':echo '	Macalva Norte	';break;
case '	013301007		 ':echo '	Macalva Sur	';break;
case '	013301008		 ':echo '	Nazareno	';break;
case '	013301009		 ':echo '	Purok	';break;
case '	013301010		 ':echo '	San Agustin East	';break;
case '	013301011		 ':echo '	San Agustin Norte	';break;
case '	013301012		 ':echo '	San Agustin Sur	';break;
case '	013301013		 ':echo '	San Antonino	';break;
case '	013301014		 ':echo '	San Antonio	';break;
case '	013301015		 ':echo '	San Francisco	';break;
case '	013301016		 ':echo '	San Isidro	';break;
case '	013301017		 ':echo '	San Joaquin Norte	';break;
case '	013301018		 ':echo '	San Joaquin Sur	';break;
case '	013301019		 ':echo '	San Jose Norte	';break;
case '	01330120		 ':echo '	San Jose Sur	';break;
case '	01330121		 ':echo '	San Juan	';break;
case '	01330122		 ':echo '	San Julian Central	';break;
case '	01330123		 ':echo '	San Julian East	';break;
case '	01330124		 ':echo '	San Julian Norte	';break;
case '	01330125		 ':echo '	San Julian West	';break;
case '	01330126		 ':echo '	San Manuel Norte	';break;
case '	01330127		 ':echo '	San Manuel Sur	';break;
case '	01330128		 ':echo '	San Marcos	';break;
case '	01330129		 ':echo '	San Miguel	';break;
case '	01330130		 ':echo '	San Nicolas Central 	';break;
case '	01330131		 ':echo '	San Nicolas East	';break;
case '	01330132		 ':echo '	San Nicolas Norte 	';break;
case '	01330133		 ':echo '	San Nicolas West	';break;
case '	01330134		 ':echo '	San Nicolas Sur 	';break;
case '	01330135		 ':echo '	San Pedro	';break;
case '	01330136		 ':echo '	San Roque West	';break;
case '	01330137		 ':echo '	San Roque East	';break;
case '	01330138		 ':echo '	San Vicente Norte	';break;
case '	01330139		 ':echo '	San Vicente Sur	';break;
case '	013301040		 ':echo '	Santa Ana	';break;
case '	013301041		 ':echo '	Santa Barbara 	';break;
case '	013301042		 ':echo '	Santa Fe	';break;
case '	013301043		 ':echo '	Santa Maria	';break;
case '	013301044		 ':echo '	Santa Monica	';break;
case '	013301045		 ':echo '	Santa Rita	';break;
case '	013301046		 ':echo '	Santa Rita East	';break;
case '	013301047		 ':echo '	Santa Rita Norte	';break;
case '	013301048		 ':echo '	Santa Rita Sur	';break;
case '	013301049		 ':echo '	Santa Rita West	';break;
case '	013302001		 ':echo '	Alaska	';break;
case '	013302002		 ':echo '	Basca	';break;
case '	013302003		 ':echo '	Dulao	';break;
case '	013302004		 ':echo '	Gallano	';break;
case '	013302005		 ':echo '	Macabato	';break;
case '	013302006		 ':echo '	Manga	';break;
case '	013302007		 ':echo '	Pangao-aoan East	';break;
case '	013302009		 ':echo '	Pangao-aoan West	';break;
case '	013302010		 ':echo '	Poblacion	';break;
case '	013302011		 ':echo '	Samara	';break;
case '	013302012		 ':echo '	San Antonio	';break;
case '	013302014		 ':echo '	San Benito Norte	';break;
case '	013302015		 ':echo '	San Benito Sur	';break;
case '	013302016		 ':echo '	San Eugenio	';break;
case '	013302018		 ':echo '	San Juan East	';break;
case '	013302019		 ':echo '	San Juan West	';break;
case '	013302020		 ':echo '	San Simon East	';break;
case '	013302021		 ':echo '	San Simon West	';break;
case '	013302022		 ':echo '	Santa Cecilia	';break;
case '	013302023		 ':echo '	Santa Lucia	';break;
case '	013302024		 ':echo '	Santa Rita East	';break;
case '	013302025		 ':echo '	Santa Rita West	';break;
case '	013302027		 ':echo '	Santo Rosario East	';break;
case '	013302028		 ':echo '	Santo Rosario West	';break;
case '	013303001		 ':echo '	Agtipal	';break;
case '	013303002		 ':echo '	Arosip	';break;
case '	013303003		 ':echo '	Bacqui	';break;
case '	013303004		 ':echo '	Bacsil	';break;
case '	013303005		 ':echo '	Bagutot	';break;
case '	013303006		 ':echo '	Ballogo	';break;
case '	013303007		 ':echo '	Baroro	';break;
case '	013303008		 ':echo '	Bitalag	';break;
case '	013303009		 ':echo '	Bulala	';break;
case '	013303010		 ':echo '	Burayoc	';break;
case '	013303011		 ':echo '	Bussaoit	';break;
case '	013303012		 ':echo '	Cabaroan	';break;
case '	013303013		 ':echo '	Cabarsican	';break;
case '	013303014		 ':echo '	Cabugao	';break;
case '	013303015		 ':echo '	Calautit	';break;
case '	013303016		 ':echo '	Carcarmay	';break;
case '	013303017		 ':echo '	Casiaman	';break;
case '	013303018		 ':echo '	Galongen	';break;
case '	013303019		 ':echo '	Guinabang	';break;
case '	013303020		 ':echo '	Legleg	';break;
case '	013303021		 ':echo '	Lisqueb	';break;
case '	013303022		 ':echo '	Mabanengbeng 1st	';break;
case '	013303023		 ':echo '	Mabanengbeng 2nd	';break;
case '	013303024		 ':echo '	Maragayap	';break;
case '	013303025		 ':echo '	Nangalisan	';break;
case '	013303026		 ':echo '	Nagatiran	';break;
case '	013303027		 ':echo '	Nagsaraboan	';break;
case '	013303028		 ':echo '	Nagsimbaanan	';break;
case '	013303029		 ':echo '	Narra	';break;
case '	013303030		 ':echo '	Ortega	';break;
case '	013303031		 ':echo '	Paagan	';break;
case '	013303032		 ':echo '	Pandan	';break;
case '	013303033		 ':echo '	Pang-pang	';break;
case '	013303034		 ':echo '	Poblacion	';break;
case '	013303035		 ':echo '	Quirino	';break;
case '	013303036		 ':echo '	Raois	';break;
case '	013303037		 ':echo '	Salincob	';break;
case '	013303038		 ':echo '	San Martin	';break;
case '	013303039		 ':echo '	Santa Cruz	';break;
case '	013303040		 ':echo '	Santa Rita	';break;
case '	013303041		 ':echo '	Sapilang	';break;
case '	013303042		 ':echo '	Sayoan	';break;
case '	013303043		 ':echo '	Sipulo	';break;
case '	013303044		 ':echo '	Tammocalao	';break;
case '	013303045		 ':echo '	Ubbog	';break;
case '	013303046		 ':echo '	Oya-oy	';break;
case '	013303047		 ':echo '	Zaragosa	';break;
case '	013304001		 ':echo '	Alibangsay	';break;
case '	013304002		 ':echo '	Baay	';break;
case '	013304003		 ':echo '	Cambaly	';break;
case '	013304004		 ':echo '	Cardiz	';break;
case '	013304005		 ':echo '	Dagup	';break;
case '	013304006		 ':echo '	Libbo	';break;
case '	013304007		 ':echo '	Suyo 	';break;
case '	013304008		 ':echo '	Tagudtud	';break;
case '	013304009		 ':echo '	Tio-angan	';break;
case '	013304010		 ':echo '	Wallayan	';break;
case '	013305001		 ':echo '	Apatut	';break;
case '	013305002		 ':echo '	Ar-arampang	';break;
case '	013305003		 ':echo '	Baracbac Este	';break;
case '	013305004		 ':echo '	Baracbac Oeste	';break;
case '	013305005		 ':echo '	Bet-ang	';break;
case '	013305006		 ':echo '	Bulbulala	';break;
case '	013305007		 ':echo '	Bungol	';break;
case '	013305008		 ':echo '	Butubut Este	';break;
case '	013305009		 ':echo '	Butubut Norte	';break;
case '	013305010		 ':echo '	Butubut Oeste	';break;
case '	013305011		 ':echo '	Butubut Sur	';break;
case '	013305012		 ':echo '	Cabuaan Oeste 	';break;
case '	013305013		 ':echo '	Calliat	';break;
case '	013305014		 ':echo '	Calungbuyan	';break;
case '	013305015		 ':echo '	Camiling	';break;
case '	013305016		 ':echo '	Guinaburan	';break;
case '	013305017		 ':echo '	Masupe	';break;
case '	013305018		 ':echo '	Nagsabaran Norte	';break;
case '	013305019		 ':echo '	Nagsabaran Sur	';break;
case '	013305020		 ':echo '	Nalasin	';break;
case '	013305021		 ':echo '	Napaset	';break;
case '	013305022		 ':echo '	Pagbennecan	';break;
case '	013305023		 ':echo '	Pagleddegan	';break;
case '	013305024		 ':echo '	Pantar Norte	';break;
case '	013305025		 ':echo '	Pantar Sur	';break;
case '	013305026		 ':echo '	Pa-o	';break;
case '	013305028		 ':echo '	Almeida	';break;
case '	013305029		 ':echo '	Paraoir	';break;
case '	013305030		 ':echo '	Patpata	';break;
case '	013305031		 ':echo '	Dr. Camilo Osias Pob.	';break;
case '	013305032		 ':echo '	Sablut	';break;
case '	013305033		 ':echo '	San Pablo	';break;
case '	013305034		 ':echo '	Sinapangan Norte	';break;
case '	013305035		 ':echo '	Sinapangan Sur	';break;
case '	013305036		 ':echo '	Tallipugo	';break;
case '	013305037		 ':echo '	Antonino	';break;
case '	013306001		 ':echo '	Agdeppa	';break;
case '	013306002		 ':echo '	Alzate	';break;
case '	013306004		 ':echo '	Bangaoilan East	';break;
case '	013306005		 ':echo '	Bangaoilan West	';break;
case '	013306006		 ':echo '	Barraca	';break;
case '	013306007		 ':echo '	Cadapli	';break;
case '	013306008		 ':echo '	Caggao	';break;
case '	013306009		 ':echo '	Consuegra	';break;
case '	013306010		 ':echo '	General Prim East	';break;
case '	013306011		 ':echo '	General Prim West	';break;
case '	013306013		 ':echo '	General Terrero	';break;
case '	013306015		 ':echo '	Luzong Norte	';break;
case '	013306016		 ':echo '	Luzong Sur	';break;
case '	013306018		 ':echo '	Maria Cristina East	';break;
case '	013306019		 ':echo '	Maria Cristina West	';break;
case '	013306020		 ':echo '	Mindoro	';break;
case '	013306021		 ':echo '	Nagsabaran	';break;
case '	013306022		 ':echo '	Paratong Norte	';break;
case '	013306023		 ':echo '	Paratong No. 3	';break;
case '	013306024		 ':echo '	Paratong No. 4	';break;
case '	013306025		 ':echo '	Central East No. 1 	';break;
case '	013306026		 ':echo '	Central East No. 2 	';break;
case '	013306027		 ':echo '	Central West No. 1 	';break;
case '	013306028		 ':echo '	Central West No. 2 	';break;
case '	013306029		 ':echo '	Central West No. 3 	';break;
case '	013306030		 ':echo '	Quintarong	';break;
case '	013306031		 ':echo '	Reyna Regente	';break;
case '	013306032		 ':echo '	Rissing	';break;
case '	013306033		 ':echo '	San Blas	';break;
case '	013306034		 ':echo '	San Cristobal	';break;
case '	013306035		 ':echo '	Sinapangan Norte	';break;
case '	013306036		 ':echo '	Sinapangan Sur	';break;
case '	013306037		 ':echo '	Ubbog	';break;
case '	013307001		 ':echo '	Acao	';break;
case '	013307002		 ':echo '	Baccuit Norte	';break;
case '	013307003		 ':echo '	Baccuit Sur	';break;
case '	013307004		 ':echo '	Bagbag	';break;
case '	013307005		 ':echo '	Ballay	';break;
case '	013307006		 ':echo '	Bawanta	';break;
case '	013307007		 ':echo '	Boy-utan	';break;
case '	013307008		 ':echo '	Bucayab	';break;
case '	013307009		 ':echo '	Cabalayangan	';break;
case '	013307010		 ':echo '	Cabisilan	';break;
case '	013307011		 ':echo '	Calumbaya	';break;
case '	013307012		 ':echo '	Carmay	';break;
case '	013307013		 ':echo '	Casilagan	';break;
case '	013307014		 ':echo '	Central East 	';break;
case '	013307015		 ':echo '	Central West 	';break;
case '	013307016		 ':echo '	Dili	';break;
case '	013307017		 ':echo '	Disso-or	';break;
case '	013307018		 ':echo '	Guerrero	';break;
case '	013307019		 ':echo '	Nagrebcan	';break;
case '	013307020		 ':echo '	Pagdalagan Sur	';break;
case '	013307021		 ':echo '	Palintucang	';break;
case '	013307022		 ':echo '	Palugsi-Limmansangan	';break;
case '	013307023		 ':echo '	Parian Oeste	';break;
case '	013307024		 ':echo '	Parian Este	';break;
case '	013307025		 ':echo '	Paringao	';break;
case '	013307026		 ':echo '	Payocpoc Norte Este	';break;
case '	013307027		 ':echo '	Payocpoc Norte Oeste	';break;
case '	013307028		 ':echo '	Payocpoc Sur	';break;
case '	013307029		 ':echo '	Pilar	';break;
case '	013307030		 ':echo '	Pudoc	';break;
case '	013307031		 ':echo '	Pottot	';break;
case '	013307032		 ':echo '	Pugo	';break;
case '	013307033		 ':echo '	Quinavite	';break;
case '	013307034		 ':echo '	Lower San Agustin	';break;
case '	013307035		 ':echo '	Santa Monica	';break;
case '	013307036		 ':echo '	Santiago	';break;
case '	013307037		 ':echo '	Taberna	';break;
case '	013307038		 ':echo '	Upper San Agustin	';break;
case '	013307039		 ':echo '	Urayong	';break;
case '	013308001		 ':echo '	Agpay	';break;
case '	013308002		 ':echo '	Bilis	';break;
case '	013308003		 ':echo '	Caoayan	';break;
case '	013308004		 ':echo '	Dalacdac	';break;
case '	013308005		 ':echo '	Delles	';break;
case '	013308006		 ':echo '	Imelda	';break;
case '	013308007		 ':echo '	Libtong	';break;
case '	013308008		 ':echo '	Linuan	';break;
case '	013308009		 ':echo '	New Poblacion	';break;
case '	013308010		 ':echo '	Old Poblacion	';break;
case '	013308011		 ':echo '	Lower Tumapoc	';break;
case '	013308012		 ':echo '	Upper Tumapoc	';break;
case '	013309001		 ':echo '	Bautista	';break;
case '	013309002		 ':echo '	Gana	';break;
case '	013309003		 ':echo '	Juan Cartas	';break;
case '	013309004		 ':echo '	Las-ud	';break;
case '	013309005		 ':echo '	Liquicia	';break;
case '	013309006		 ':echo '	Poblacion Norte	';break;
case '	013309007		 ':echo '	Poblacion Sur	';break;
case '	013309009		 ':echo '	San Carlos	';break;
case '	013309010		 ':echo '	San Cornelio	';break;
case '	013309011		 ':echo '	San Fermin	';break;
case '	013309012		 ':echo '	San Gregorio	';break;
case '	013309013		 ':echo '	San Jose	';break;
case '	013309014		 ':echo '	Santiago Norte	';break;
case '	013309015		 ':echo '	Santiago Sur	';break;
case '	013309016		 ':echo '	Sobredillo	';break;
case '	013309017		 ':echo '	Urayong	';break;
case '	013309018		 ':echo '	Wenceslao	';break;
case '	013310001		 ':echo '	Alcala 	';break;
case '	013310002		 ':echo '	Ayaoan	';break;
case '	013310003		 ':echo '	Barangobong	';break;
case '	013310004		 ':echo '	Barrientos	';break;
case '	013310005		 ':echo '	Bungro	';break;
case '	013310006		 ':echo '	Buselbusel	';break;
case '	013310007		 ':echo '	Cabalitocan	';break;
case '	013310008		 ':echo '	Cantoria No. 1	';break;
case '	013310009		 ':echo '	Cantoria No. 2	';break;
case '	013310010		 ':echo '	Cantoria No. 3	';break;
case '	013310011		 ':echo '	Cantoria No. 4	';break;
case '	013310012		 ':echo '	Carisquis	';break;
case '	013310013		 ':echo '	Darigayos	';break;
case '	013310014		 ':echo '	Magallanes 	';break;
case '	013310015		 ':echo '	Magsiping	';break;
case '	013310016		 ':echo '	Mamay	';break;
case '	013310017		 ':echo '	Nagrebcan	';break;
case '	013310018		 ':echo '	Nalvo Norte	';break;
case '	013310019		 ':echo '	Nalvo Sur	';break;
case '	013310020		 ':echo '	Napaset	';break;
case '	013310021		 ':echo '	Oaqui No. 1	';break;
case '	013310022		 ':echo '	Oaqui No. 2	';break;
case '	013310023		 ':echo '	Oaqui No. 3	';break;
case '	013310024		 ':echo '	Oaqui No. 4	';break;
case '	013310025		 ':echo '	Pila	';break;
case '	013310026		 ':echo '	Pitpitac	';break;
case '	013310027		 ':echo '	Rimos No. 1	';break;
case '	013310028		 ':echo '	Rimos No. 2	';break;
case '	013310029		 ':echo '	Rimos No. 3	';break;
case '	013310030		 ':echo '	Rimos No. 4	';break;
case '	013310031		 ':echo '	Rimos No. 5	';break;
case '	013310032		 ':echo '	Rissing	';break;
case '	013310033		 ':echo '	Salcedo 	';break;
case '	013310034		 ':echo '	Santo Domingo Norte	';break;
case '	013310035		 ':echo '	Santo Domingo Sur	';break;
case '	013310036		 ':echo '	Sucoc Norte	';break;
case '	013310037		 ':echo '	Sucoc Sur	';break;
case '	013310038		 ':echo '	Suyo	';break;
case '	013310039		 ':echo '	Tallaoen	';break;
case '	013310040		 ':echo '	Victoria 	';break;
case '	013311001		 ':echo '	Aguioas	';break;
case '	013311002		 ':echo '	Al-alinao Norte	';break;
case '	013311003		 ':echo '	Al-alinao Sur	';break;
case '	013311004		 ':echo '	Ambaracao Norte	';break;
case '	013311005		 ':echo '	Ambaracao Sur	';break;
case '	013311006		 ':echo '	Angin	';break;
case '	013311007		 ':echo '	Balecbec	';break;
case '	013311008		 ':echo '	Bancagan	';break;
case '	013311009		 ':echo '	Baraoas Norte	';break;
case '	013311010		 ':echo '	Baraoas Sur	';break;
case '	013311011		 ':echo '	Bariquir	';break;
case '	013311012		 ':echo '	Bato	';break;
case '	013311013		 ':echo '	Bimmotobot	';break;
case '	013311014		 ':echo '	Cabaritan Norte	';break;
case '	013311015		 ':echo '	Cabaritan Sur	';break;
case '	013311016		 ':echo '	Casilagan	';break;
case '	013311017		 ':echo '	Dal-lipaoen	';break;
case '	013311018		 ':echo '	Daramuangan	';break;
case '	013311019		 ':echo '	Guesset	';break;
case '	01331120		 ':echo '	Gusing Norte	';break;
case '	01331121		 ':echo '	Gusing Sur	';break;
case '	01331122		 ':echo '	Imelda	';break;
case '	01331123		 ':echo '	Lioac Norte	';break;
case '	01331124		 ':echo '	Lioac Sur	';break;
case '	01331125		 ':echo '	Magungunay	';break;
case '	01331126		 ':echo '	Mamat-ing Norte	';break;
case '	01331127		 ':echo '	Mamat-ing Sur	';break;
case '	01331128		 ':echo '	Nagsidorisan	';break;
case '	01331129		 ':echo '	Natividad 	';break;
case '	01331130		 ':echo '	Ortiz 	';break;
case '	01331132		 ':echo '	Ribsuan	';break;
case '	01331133		 ':echo '	San Antonio	';break;
case '	01331134		 ':echo '	San Isidro	';break;
case '	01331135		 ':echo '	Sili	';break;
case '	01331137		 ':echo '	Suguidan Norte	';break;
case '	01331138		 ':echo '	Suguidan Sur	';break;
case '	01331139		 ':echo '	Tuddingan	';break;
case '	013312001		 ':echo '	Ambalite	';break;
case '	013312002		 ':echo '	Ambangonan	';break;
case '	013312003		 ':echo '	Cares	';break;
case '	013312004		 ':echo '	Cuenca	';break;
case '	013312005		 ':echo '	Duplas	';break;
case '	013312007		 ':echo '	Maoasoas Norte	';break;
case '	013312008		 ':echo '	Maoasoas Sur	';break;
case '	013312009		 ':echo '	Palina	';break;
case '	013312010		 ':echo '	Poblacion East	';break;
case '	013312011		 ':echo '	San Luis	';break;
case '	013312012		 ':echo '	Saytan	';break;
case '	013312013		 ':echo '	Tavora East	';break;
case '	013312014		 ':echo '	Tavora Proper	';break;
case '	013312015		 ':echo '	Poblacion West	';break;
case '	013313001		 ':echo '	Alipang	';break;
case '	013313002		 ':echo '	Ambangonan	';break;
case '	013313003		 ':echo '	Amlang	';break;
case '	013313004		 ':echo '	Bacani	';break;
case '	013313005		 ':echo '	Bangar	';break;
case '	013313006		 ':echo '	Bani	';break;
case '	013313007		 ':echo '	Benteng-Sapilang	';break;
case '	013313008		 ':echo '	Cadumanian	';break;
case '	013313009		 ':echo '	Camp One	';break;
case '	013313010		 ':echo '	Carunuan East	';break;
case '	013313011		 ':echo '	Carunuan West	';break;
case '	013313012		 ':echo '	Casilagan	';break;
case '	013313013		 ':echo '	Cataguingtingan	';break;
case '	013313014		 ':echo '	Concepcion	';break;
case '	013313015		 ':echo '	Damortis	';break;
case '	013313016		 ':echo '	Gumot-Nagcolaran	';break;
case '	013313017		 ':echo '	Inabaan Norte	';break;
case '	013313018		 ':echo '	Inabaan Sur	';break;
case '	013313019		 ':echo '	Nagtagaan	';break;
case '	013313020		 ':echo '	Nangcamotian	';break;
case '	013313021		 ':echo '	Parasapas	';break;
case '	013313022		 ':echo '	Poblacion East	';break;
case '	013313023		 ':echo '	Poblacion West	';break;
case '	013313024		 ':echo '	Puzon	';break;
case '	013313026		 ':echo '	Rabon	';break;
case '	013313027		 ':echo '	San Jose	';break;
case '	013313028		 ':echo '	Marcos	';break;
case '	013313029		 ':echo '	Subusub	';break;
case '	013313030		 ':echo '	Tabtabungao	';break;
case '	013313031		 ':echo '	Tanglag	';break;
case '	013313032		 ':echo '	Tay-ac	';break;
case '	013313033		 ':echo '	Udiao	';break;
case '	013313034		 ':echo '	Vila	';break;
case '	013314001		 ':echo '	Abut	';break;
case '	013314002		 ':echo '	Apaleng	';break;
case '	013314003		 ':echo '	Bacsil	';break;
case '	013314004		 ':echo '	Bangbangolan	';break;
case '	013314005		 ':echo '	Bangcusay	';break;
case '	013314006		 ':echo '	Barangay I 	';break;
case '	013314007		 ':echo '	Barangay II 	';break;
case '	013314008		 ':echo '	Barangay III 	';break;
case '	013314009		 ':echo '	Barangay IV 	';break;
case '	013314010		 ':echo '	Baraoas	';break;
case '	013314011		 ':echo '	Bato	';break;
case '	013314012		 ':echo '	Biday	';break;
case '	013314013		 ':echo '	Birunget	';break;
case '	013314014		 ':echo '	Bungro	';break;
case '	013314015		 ':echo '	Cabaroan	';break;
case '	013314016		 ':echo '	Cabarsican	';break;
case '	013314017		 ':echo '	Cadaclan	';break;
case '	013314018		 ':echo '	Calabugao	';break;
case '	013314019		 ':echo '	Camansi	';break;
case '	013314020		 ':echo '	Canaoay	';break;
case '	013314021		 ':echo '	Carlatan	';break;
case '	013314022		 ':echo '	Catbangen	';break;
case '	013314023		 ':echo '	Dallangayan Este	';break;
case '	013314024		 ':echo '	Dallangayan Oeste	';break;
case '	013314025		 ':echo '	Dalumpinas Este	';break;
case '	013314026		 ':echo '	Dalumpinas Oeste	';break;
case '	013314027		 ':echo '	Ilocanos Norte	';break;
case '	013314028		 ':echo '	Ilocanos Sur	';break;
case '	013314029		 ':echo '	Langcuas	';break;
case '	013314030		 ':echo '	Lingsat	';break;
case '	013314031		 ':echo '	Madayegdeg	';break;
case '	013314032		 ':echo '	Mameltac	';break;
case '	013314033		 ':echo '	Masicong	';break;
case '	013314034		 ':echo '	Nagyubuyuban	';break;
case '	013314035		 ':echo '	Namtutan	';break;
case '	013314036		 ':echo '	Narra Este	';break;
case '	013314037		 ':echo '	Narra Oeste	';break;
case '	013314039		 ':echo '	Pacpaco	';break;
case '	013314040		 ':echo '	Pagdalagan	';break;
case '	013314041		 ':echo '	Pagdaraoan	';break;
case '	013314042		 ':echo '	Pagudpud	';break;
case '	013314043		 ':echo '	Pao Norte	';break;
case '	013314044		 ':echo '	Pao Sur	';break;
case '	013314045		 ':echo '	Parian	';break;
case '	013314046		 ':echo '	Pias	';break;
case '	013314047		 ':echo '	Poro	';break;
case '	013314048		 ':echo '	Puspus	';break;
case '	013314049		 ':echo '	Sacyud	';break;
case '	013314050		 ':echo '	Sagayad	';break;
case '	013314051		 ':echo '	San Agustin	';break;
case '	013314052		 ':echo '	San Francisco	';break;
case '	013314053		 ':echo '	San Vicente	';break;
case '	013314054		 ':echo '	Santiago Norte	';break;
case '	013314055		 ':echo '	Santiago Sur	';break;
case '	013314056		 ':echo '	Saoay	';break;
case '	013314057		 ':echo '	Sevilla	';break;
case '	013314058		 ':echo '	Siboan-Otong	';break;
case '	013314059		 ':echo '	Tanqui	';break;
case '	013314060		 ':echo '	Tanquigan	';break;
case '	013315002		 ':echo '	Amontoc	';break;
case '	013315003		 ':echo '	Apayao	';break;
case '	013315004		 ':echo '	Balbalayang	';break;
case '	013315006		 ':echo '	Bayabas	';break;
case '	013315007		 ':echo '	Bucao	';break;
case '	013315008		 ':echo '	Bumbuneg	';break;
case '	013315012		 ':echo '	Lacong	';break;
case '	013315013		 ':echo '	Lipay Este	';break;
case '	013315014		 ':echo '	Lipay Norte	';break;
case '	013315015		 ':echo '	Lipay Proper	';break;
case '	013315016		 ':echo '	Lipay Sur	';break;
case '	013315017		 ':echo '	Lon-oy	';break;
case '	013315019		 ':echo '	Poblacion	';break;
case '	013315020		 ':echo '	Polipol	';break;
case '	013315021		 ':echo '	Daking	';break;
case '	013316001		 ':echo '	Allangigan	';break;
case '	013316002		 ':echo '	Aludaid	';break;
case '	013316003		 ':echo '	Bacsayan	';break;
case '	013316004		 ':echo '	Balballosa	';break;
case '	013316005		 ':echo '	Bambanay	';break;
case '	013316006		 ':echo '	Bugbugcao	';break;
case '	013316007		 ':echo '	Caarusipan	';break;
case '	013316008		 ':echo '	Cabaroan	';break;
case '	013316009		 ':echo '	Cabugnayan	';break;
case '	013316010		 ':echo '	Cacapian	';break;
case '	013316011		 ':echo '	Caculangan	';break;
case '	013316012		 ':echo '	Calincamasan	';break;
case '	013316013		 ':echo '	Casilagan	';break;
case '	013316014		 ':echo '	Catdongan	';break;
case '	013316015		 ':echo '	Dangdangla	';break;
case '	013316016		 ':echo '	Dasay	';break;
case '	013316017		 ':echo '	Dinanum	';break;
case '	013316018		 ':echo '	Duplas	';break;
case '	013316019		 ':echo '	Guinguinabang	';break;
case '	013316020		 ':echo '	Ili Norte 	';break;
case '	013316021		 ':echo '	Ili Sur 	';break;
case '	013316022		 ':echo '	Legleg	';break;
case '	013316023		 ':echo '	Lubing	';break;
case '	013316024		 ':echo '	Nadsaag	';break;
case '	013316025		 ':echo '	Nagsabaran	';break;
case '	013316026		 ':echo '	Naguirangan	';break;
case '	013316027		 ':echo '	Naguituban	';break;
case '	013316028		 ':echo '	Nagyubuyuban	';break;
case '	013316029		 ':echo '	Oaquing	';break;
case '	013316030		 ':echo '	Pacpacac	';break;
case '	013316031		 ':echo '	Pagdildilan	';break;
case '	013316032		 ':echo '	Panicsican	';break;
case '	013316033		 ':echo '	Quidem	';break;
case '	013316035		 ':echo '	San Felipe	';break;
case '	013316036		 ':echo '	Santa Rosa	';break;
case '	013316037		 ':echo '	Santo Rosario	';break;
case '	013316038		 ':echo '	Saracat	';break;
case '	013316039		 ':echo '	Sinapangan	';break;
case '	013316040		 ':echo '	Taboc	';break;
case '	013316041		 ':echo '	Talogtog	';break;
case '	013316042		 ':echo '	Urbiztondo	';break;
case '	013317001		 ':echo '	Ambitacay	';break;
case '	013317002		 ':echo '	Bail	';break;
case '	013317003		 ':echo '	Balaoc	';break;
case '	013317004		 ':echo '	Balsaan	';break;
case '	013317005		 ':echo '	Baybay	';break;
case '	013317006		 ':echo '	Cabaruan	';break;
case '	013317007		 ':echo '	Casantaan	';break;
case '	013317008		 ':echo '	Casilagan	';break;
case '	013317009		 ':echo '	Cupang	';break;
case '	013317010		 ':echo '	Damortis	';break;
case '	013317011		 ':echo '	Fernando	';break;
case '	013317012		 ':echo '	Linong	';break;
case '	013317013		 ':echo '	Lomboy	';break;
case '	013317014		 ':echo '	Malabago	';break;
case '	013317015		 ':echo '	Namboongan	';break;
case '	013317016		 ':echo '	Namonitan	';break;
case '	013317017		 ':echo '	Narvacan	';break;
case '	013317018		 ':echo '	Patac	';break;
case '	013317019		 ':echo '	Poblacion	';break;
case '	013317020		 ':echo '	Pongpong	';break;
case '	013317021		 ':echo '	Raois	';break;
case '	013317022		 ':echo '	Tubod	';break;
case '	013317023		 ':echo '	Tococ	';break;
case '	013317024		 ':echo '	Ubagan	';break;
case '	013318002		 ':echo '	Corrooy	';break;
case '	013318003		 ':echo '	Lettac Norte	';break;
case '	013318004		 ':echo '	Lettac Sur	';break;
case '	013318005		 ':echo '	Mangaan	';break;
case '	013318008		 ':echo '	Paagan	';break;
case '	013318010		 ':echo '	Poblacion	';break;
case '	013318011		 ':echo '	Puguil	';break;
case '	013318012		 ':echo '	Ramot	';break;
case '	013318013		 ':echo '	Sapdaan	';break;
case '	013318014		 ':echo '	Sasaba	';break;
case '	013318015		 ':echo '	Tubaday	';break;
case '	013319001		 ':echo '	Bigbiga	';break;
case '	013319002		 ':echo '	Castro	';break;
case '	013319003		 ':echo '	Duplas	';break;
case '	013319004		 ':echo '	Ipet	';break;
case '	013319005		 ':echo '	Ilocano	';break;
case '	013319006		 ':echo '	Maliclico	';break;
case '	013319007		 ':echo '	Old Central	';break;
case '	013319008		 ':echo '	Namaltugan	';break;
case '	013319010		 ':echo '	Poblacion	';break;
case '	013319011		 ':echo '	Porporiket	';break;
case '	013319013		 ':echo '	San Francisco Norte	';break;
case '	013319014		 ':echo '	San Francisco Sur	';break;
case '	013319015		 ':echo '	San Jose	';break;
case '	013319017		 ':echo '	Sengngat	';break;
case '	013319018		 ':echo '	Turod	';break;
case '	013319019		 ':echo '	Up-uplas	';break;
case '	013319020		 ':echo '	Bulalaan	';break;
case '	013320001		 ':echo '	Amallapay	';break;
case '	013320002		 ':echo '	Anduyan	';break;
case '	013320003		 ':echo '	Caoigue	';break;
case '	013320004		 ':echo '	Francia Sur	';break;
case '	013320005		 ':echo '	Francia West	';break;
case '	013320006		 ':echo '	Garcia	';break;
case '	013320007		 ':echo '	Gonzales	';break;
case '	013320008		 ':echo '	Halog East	';break;
case '	013320009		 ':echo '	Halog West	';break;
case '	013320010		 ':echo '	Leones East	';break;
case '	013320011		 ':echo '	Leones West	';break;
case '	013320012		 ':echo '	Linapew	';break;
case '	013320015		 ':echo '	Magsaysay	';break;
case '	013320016		 ':echo '	Pideg	';break;
case '	013320017		 ':echo '	Poblacion	';break;
case '	013320018		 ':echo '	Rizal	';break;
case '	013320019		 ':echo '	Santa Teresa	';break;
case '	013320020		 ':echo '	Lloren	';break;
case '	015501001		 ':echo '	Allabon	';break;
case '	015501002		 ':echo '	Aloleng	';break;
case '	015501003		 ':echo '	Bangan-Oda	';break;
case '	015501004		 ':echo '	Baruan	';break;
case '	015501005		 ':echo '	Boboy	';break;
case '	015501006		 ':echo '	Cayungnan	';break;
case '	015501007		 ':echo '	Dangley	';break;
case '	015501009		 ':echo '	Gayusan	';break;
case '	015501010		 ':echo '	Macaboboni	';break;
case '	015501011		 ':echo '	Magsaysay	';break;
case '	015501012		 ':echo '	Namatucan	';break;
case '	015501013		 ':echo '	Patar	';break;
case '	015501014		 ':echo '	Poblacion East	';break;
case '	015501015		 ':echo '	Poblacion West	';break;
case '	015501016		 ':echo '	San Juan	';break;
case '	015501017		 ':echo '	Tupa	';break;
case '	015501018		 ':echo '	Viga	';break;
case '	015502002		 ':echo '	Bayaoas	';break;
case '	015502003		 ':echo '	Baybay	';break;
case '	015502004		 ':echo '	Bocacliw	';break;
case '	015502006		 ':echo '	Bocboc East	';break;
case '	015502007		 ':echo '	Bocboc West	';break;
case '	015502008		 ':echo '	Buer	';break;
case '	015502009		 ':echo '	Calsib	';break;
case '	015502010		 ':echo '	Niñoy	';break;
case '	015502011		 ':echo '	Poblacion	';break;
case '	015502012		 ':echo '	Pogomboa	';break;
case '	015502013		 ':echo '	Pogonsili	';break;
case '	015502014		 ':echo '	San Jose	';break;
case '	015502016		 ':echo '	Tampac	';break;
case '	015502017		 ':echo '	Laoag	';break;
case '	015502018		 ':echo '	Manlocboc	';break;
case '	015502019		 ':echo '	Panacol	';break;
case '	015503001		 ':echo '	Alos	';break;
case '	015503002		 ':echo '	Amandiego	';break;
case '	015503003		 ':echo '	Amangbangan	';break;
case '	015503004		 ':echo '	Balangobong	';break;
case '	015503005		 ':echo '	Balayang	';break;
case '	015503006		 ':echo '	Bisocol	';break;
case '	015503007		 ':echo '	Bolaney	';break;
case '	015503008		 ':echo '	Baleyadaan	';break;
case '	015503009		 ':echo '	Bued	';break;
case '	015503010		 ':echo '	Cabatuan	';break;
case '	015503011		 ':echo '	Cayucay	';break;
case '	015503012		 ':echo '	Dulacac	';break;
case '	015503013		 ':echo '	Inerangan	';break;
case '	015503014		 ':echo '	Linmansangan	';break;
case '	015503015		 ':echo '	Lucap	';break;
case '	015503016		 ':echo '	Macatiw	';break;
case '	015503017		 ':echo '	Magsaysay	';break;
case '	015503018		 ':echo '	Mona	';break;
case '	015503019		 ':echo '	Palamis	';break;
case '	015503020		 ':echo '	Pangapisan	';break;
case '	015503021		 ':echo '	Poblacion	';break;
case '	015503022		 ':echo '	Pocalpocal	';break;
case '	015503023		 ':echo '	Pogo	';break;
case '	015503024		 ':echo '	Polo	';break;
case '	015503025		 ':echo '	Quibuar	';break;
case '	015503026		 ':echo '	Sabangan	';break;
case '	015503029		 ':echo '	San Jose	';break;
case '	015503030		 ':echo '	San Roque	';break;
case '	015503031		 ':echo '	San Vicente	';break;
case '	015503032		 ':echo '	Santa Maria	';break;
case '	015503033		 ':echo '	Tanaytay	';break;
case '	015503034		 ':echo '	Tangcarang	';break;
case '	015503035		 ':echo '	Tawintawin	';break;
case '	015503036		 ':echo '	Telbang	';break;
case '	015503037		 ':echo '	Victoria	';break;
case '	015503038		 ':echo '	Landoc	';break;
case '	015503039		 ':echo '	Maawi	';break;
case '	015503040		 ':echo '	Pandan	';break;
case '	015503041		 ':echo '	San Antonio	';break;
case '	015504001		 ':echo '	Anulid	';break;
case '	015504003		 ':echo '	Atainan	';break;
case '	015504004		 ':echo '	Bersamin	';break;
case '	015504005		 ':echo '	Canarvacanan	';break;
case '	015504006		 ':echo '	Caranglaan	';break;
case '	015504007		 ':echo '	Curareng	';break;
case '	015504008		 ':echo '	Gualsic	';break;
case '	015504009		 ':echo '	Kisikis	';break;
case '	015504010		 ':echo '	Laoac	';break;
case '	015504011		 ':echo '	Macayo	';break;
case '	015504012		 ':echo '	Pindangan Centro	';break;
case '	015504013		 ':echo '	Pindangan East	';break;
case '	015504014		 ':echo '	Pindangan West	';break;
case '	015504015		 ':echo '	Poblacion East	';break;
case '	015504016		 ':echo '	Poblacion West	';break;
case '	015504017		 ':echo '	San Juan	';break;
case '	015504018		 ':echo '	San Nicolas	';break;
case '	015504019		 ':echo '	San Pedro Apartado	';break;
case '	015504020		 ':echo '	San Pedro Ili	';break;
case '	015504021		 ':echo '	San Vicente	';break;
case '	015504022		 ':echo '	Vacante	';break;
case '	015505002		 ':echo '	Awile	';break;
case '	015505003		 ':echo '	Awag	';break;
case '	015505004		 ':echo '	Batiarao	';break;
case '	015505005		 ':echo '	Cabungan	';break;
case '	015505006		 ':echo '	Carot	';break;
case '	015505007		 ':echo '	Dolaoan	';break;
case '	015505008		 ':echo '	Imbo	';break;
case '	015505009		 ':echo '	Macaleeng	';break;
case '	015505010		 ':echo '	Macandocandong	';break;
case '	015505011		 ':echo '	Mal-ong	';break;
case '	015505012		 ':echo '	Namagbagan	';break;
case '	015505014		 ':echo '	Poblacion	';break;
case '	015505015		 ':echo '	Roxas	';break;
case '	015505016		 ':echo '	Sablig	';break;
case '	015505018		 ':echo '	San Jose	';break;
case '	015505019		 ':echo '	Siapar	';break;
case '	015505020		 ':echo '	Tondol	';break;
case '	015505021		 ':echo '	Toritori	';break;
case '	015506002		 ':echo '	Ariston Este	';break;
case '	015506003		 ':echo '	Ariston Weste	';break;
case '	015506004		 ':echo '	Bantog	';break;
case '	015506005		 ':echo '	Baro	';break;
case '	015506006		 ':echo '	Bobonan	';break;
case '	015506007		 ':echo '	Cabalitian	';break;
case '	015506008		 ':echo '	Calepaan	';break;
case '	015506009		 ':echo '	Carosucan Norte	';break;
case '	015506010		 ':echo '	Carosucan Sur	';break;
case '	015506011		 ':echo '	Coldit	';break;
case '	015506012		 ':echo '	Domanpot	';break;
case '	015506013		 ':echo '	Dupac	';break;
case '	015506014		 ':echo '	Macalong	';break;
case '	015506015		 ':echo '	Palaris	';break;
case '	015506016		 ':echo '	Poblacion East	';break;
case '	015506017		 ':echo '	Poblacion West	';break;
case '	015506018		 ':echo '	San Vicente Este	';break;
case '	015506019		 ':echo '	San Vicente Weste	';break;
case '	015506020		 ':echo '	Sanchez	';break;
case '	015506021		 ':echo '	Sobol	';break;
case '	015506022		 ':echo '	Toboy	';break;
case '	015507001		 ':echo '	Angayan Norte	';break;
case '	015507002		 ':echo '	Angayan Sur	';break;
case '	015507003		 ':echo '	Capulaan	';break;
case '	015507004		 ':echo '	Esmeralda	';break;
case '	015507005		 ':echo '	Kita-kita	';break;
case '	015507006		 ':echo '	Mabini	';break;
case '	015507007		 ':echo '	Mauban	';break;
case '	015507008		 ':echo '	Poblacion	';break;
case '	015507009		 ':echo '	Pugaro	';break;
case '	015507010		 ':echo '	Rajal	';break;
case '	015507011		 ':echo '	San Andres	';break;
case '	015507012		 ':echo '	San Aurelio 1st	';break;
case '	015507013		 ':echo '	San Aurelio 2nd	';break;
case '	015507014		 ':echo '	San Aurelio 3rd	';break;
case '	015507015		 ':echo '	San Joaquin	';break;
case '	015507016		 ':echo '	San Julian	';break;
case '	015507017		 ':echo '	San Leon	';break;
case '	015507018		 ':echo '	San Marcelino	';break;
case '	015507019		 ':echo '	San Miguel	';break;
case '	015507020		 ':echo '	San Raymundo	';break;
case '	015508001		 ':echo '	Ambabaay	';break;
case '	015508002		 ':echo '	Aporao	';break;
case '	015508003		 ':echo '	Arwas	';break;
case '	015508004		 ':echo '	Ballag	';break;
case '	015508005		 ':echo '	Banog Norte	';break;
case '	015508006		 ':echo '	Banog Sur	';break;
case '	015508007		 ':echo '	Centro Toma	';break;
case '	015508008		 ':echo '	Colayo	';break;
case '	015508009		 ':echo '	Dacap Norte	';break;
case '	015508010		 ':echo '	Dacap Sur	';break;
case '	015508011		 ':echo '	Garrita	';break;
case '	015508012		 ':echo '	Luac	';break;
case '	015508013		 ':echo '	Macabit	';break;
case '	015508014		 ':echo '	Masidem	';break;
case '	015508015		 ':echo '	Poblacion	';break;
case '	015508016		 ':echo '	Quinaoayanan	';break;
case '	015508017		 ':echo '	Ranao	';break;
case '	015508018		 ':echo '	Ranom Iloco	';break;
case '	015508019		 ':echo '	San Jose	';break;
case '	015508020		 ':echo '	San Miguel	';break;
case '	015508021		 ':echo '	San Simon	';break;
case '	015508022		 ':echo '	San Vicente	';break;
case '	015508023		 ':echo '	Tiep	';break;
case '	015508024		 ':echo '	Tipor	';break;
case '	015508025		 ':echo '	Tugui Grande	';break;
case '	015508026		 ':echo '	Tugui Norte	';break;
case '	015508027		 ':echo '	Calabeng	';break;
case '	015509001		 ':echo '	Anambongan	';break;
case '	015509002		 ':echo '	Bayoyong	';break;
case '	015509003		 ':echo '	Cabeldatan	';break;
case '	015509004		 ':echo '	Dumpay	';break;
case '	015509005		 ':echo '	Malimpec East	';break;
case '	015509006		 ':echo '	Mapolopolo	';break;
case '	015509007		 ':echo '	Nalneran	';break;
case '	015509008		 ':echo '	Navatat	';break;
case '	015509009		 ':echo '	Obong	';break;
case '	015509010		 ':echo '	Osmena Sr.	';break;
case '	015509011		 ':echo '	Palma	';break;
case '	015509012		 ':echo '	Patacbo	';break;
case '	015509013		 ':echo '	Poblacion	';break;
case '	015510001		 ':echo '	Artacho	';break;
case '	015510003		 ':echo '	Cabuaan	';break;
case '	015510004		 ':echo '	Cacandongan	';break;
case '	015510006		 ':echo '	Diaz	';break;
case '	015510007		 ':echo '	Nandacan	';break;
case '	015510009		 ':echo '	Nibaliw Norte	';break;
case '	015510010		 ':echo '	Nibaliw Sur	';break;
case '	015510011		 ':echo '	Palisoc	';break;
case '	015510012		 ':echo '	Poblacion East	';break;
case '	015510013		 ':echo '	Poblacion West	';break;
case '	015510014		 ':echo '	Pogo	';break;
case '	015510015		 ':echo '	Poponto	';break;
case '	015510016		 ':echo '	Primicias	';break;
case '	015510017		 ':echo '	Ketegan	';break;
case '	015510018		 ':echo '	Sinabaan	';break;
case '	015510019		 ':echo '	Vacante	';break;
case '	015510020		 ':echo '	Villanueva	';break;
case '	015510021		 ':echo '	Baluyot	';break;
case '	015511001		 ':echo '	Alinggan	';break;
case '	015511002		 ':echo '	Amanperez	';break;
case '	015511003		 ':echo '	Amancosiling Norte	';break;
case '	015511004		 ':echo '	Amancosiling Sur	';break;
case '	015511005		 ':echo '	Ambayat I	';break;
case '	015511006		 ':echo '	Ambayat II	';break;
case '	015511007		 ':echo '	Apalen	';break;
case '	015511008		 ':echo '	Asin	';break;
case '	015511009		 ':echo '	Ataynan	';break;
case '	015511010		 ':echo '	Bacnono	';break;
case '	015511011		 ':echo '	Balaybuaya	';break;
case '	015511012		 ':echo '	Banaban	';break;
case '	015511013		 ':echo '	Bani	';break;
case '	015511014		 ':echo '	Batangcaoa	';break;
case '	015511015		 ':echo '	Beleng	';break;
case '	015511016		 ':echo '	Bical Norte	';break;
case '	015511017		 ':echo '	Bical Sur	';break;
case '	015511018		 ':echo '	Bongato East	';break;
case '	015511019		 ':echo '	Bongato West	';break;
case '	01551120		 ':echo '	Buayaen	';break;
case '	01551121		 ':echo '	Buenlag 1st	';break;
case '	01551122		 ':echo '	Buenlag 2nd	';break;
case '	01551123		 ':echo '	Cadre Site	';break;
case '	01551124		 ':echo '	Carungay	';break;
case '	01551125		 ':echo '	Caturay	';break;
case '	01551127		 ':echo '	Duera	';break;
case '	01551128		 ':echo '	Dusoc	';break;
case '	01551129		 ':echo '	Hermoza	';break;
case '	01551130		 ':echo '	Idong	';break;
case '	01551131		 ':echo '	Inanlorenza	';break;
case '	01551132		 ':echo '	Inirangan	';break;
case '	01551133		 ':echo '	Iton	';break;
case '	01551134		 ':echo '	Langiran	';break;
case '	01551135		 ':echo '	Ligue	';break;
case '	01551136		 ':echo '	M. H. del Pilar	';break;
case '	01551137		 ':echo '	Macayocayo	';break;
case '	01551138		 ':echo '	Magsaysay	';break;
case '	01551139		 ':echo '	Maigpa	';break;
case '	015511040		 ':echo '	Malimpec	';break;
case '	015511041		 ':echo '	Malioer	';break;
case '	015511042		 ':echo '	Managos	';break;
case '	015511043		 ':echo '	Manambong Norte	';break;
case '	015511044		 ':echo '	Manambong Parte	';break;
case '	015511045		 ':echo '	Manambong Sur	';break;
case '	015511046		 ':echo '	Mangayao	';break;
case '	015511047		 ':echo '	Nalsian Norte	';break;
case '	015511048		 ':echo '	Nalsian Sur	';break;
case '	015511049		 ':echo '	Pangdel	';break;
case '	01551150		 ':echo '	Pantol	';break;
case '	01551151		 ':echo '	Paragos	';break;
case '	01551153		 ':echo '	Poblacion Sur	';break;
case '	01551154		 ':echo '	Pugo	';break;
case '	01551155		 ':echo '	Reynado	';break;
case '	01551156		 ':echo '	San Gabriel 1st	';break;
case '	01551157		 ':echo '	San Gabriel 2nd	';break;
case '	01551158		 ':echo '	San Vicente	';break;
case '	01551159		 ':echo '	Sancagulis	';break;
case '	015511060		 ':echo '	Sanlibo	';break;
case '	015511061		 ':echo '	Sapang	';break;
case '	015511062		 ':echo '	Tamaro	';break;
case '	015511063		 ':echo '	Tambac	';break;
case '	015511064		 ':echo '	Tampog	';break;
case '	015511065		 ':echo '	Darawey	';break;
case '	015511066		 ':echo '	Tanolong	';break;
case '	015511067		 ':echo '	Tatarac	';break;
case '	015511068		 ':echo '	Telbang	';break;
case '	015511069		 ':echo '	Tococ East	';break;
case '	015511070		 ':echo '	Tococ West	';break;
case '	015511071		 ':echo '	Warding	';break;
case '	015511072		 ':echo '	Wawa	';break;
case '	015511073		 ':echo '	Zone I 	';break;
case '	015511074		 ':echo '	Zone II 	';break;
case '	015511075		 ':echo '	Zone III 	';break;
case '	015511076		 ':echo '	Zone IV 	';break;
case '	015511077		 ':echo '	Zone V 	';break;
case '	015511078		 ':echo '	Zone VI 	';break;
case '	015511079		 ':echo '	Zone VII 	';break;
case '	015512001		 ':echo '	Balangobong	';break;
case '	015512002		 ':echo '	Bued	';break;
case '	015512003		 ':echo '	Bugayong	';break;
case '	015512004		 ':echo '	Camangaan	';break;
case '	015512005		 ':echo '	Canarvacanan	';break;
case '	015512006		 ':echo '	Capas	';break;
case '	015512007		 ':echo '	Cili	';break;
case '	015512008		 ':echo '	Dumayat	';break;
case '	015512009		 ':echo '	Linmansangan	';break;
case '	015512011		 ':echo '	Mangcasuy	';break;
case '	015512012		 ':echo '	Moreno	';break;
case '	015512013		 ':echo '	Pasileng Norte	';break;
case '	015512014		 ':echo '	Pasileng Sur	';break;
case '	015512015		 ':echo '	Poblacion	';break;
case '	015512016		 ':echo '	San Felipe Central	';break;
case '	015512017		 ':echo '	San Felipe Sur	';break;
case '	015512019		 ':echo '	San Pablo	';break;
case '	015512020		 ':echo '	Sta. Catalina	';break;
case '	015512021		 ':echo '	Sta. Maria Norte	';break;
case '	015512022		 ':echo '	Santiago	';break;
case '	015512023		 ':echo '	Sto. Niño	';break;
case '	015512024		 ':echo '	Sumabnit	';break;
case '	015512025		 ':echo '	Tabuyoc	';break;
case '	015512026		 ':echo '	Vacante	';break;
case '	015513001		 ':echo '	Amancoro	';break;
case '	015513002		 ':echo '	Balagan	';break;
case '	015513003		 ':echo '	Balogo	';break;
case '	015513004		 ':echo '	Basing	';break;
case '	015513005		 ':echo '	Baybay Lopez	';break;
case '	015513006		 ':echo '	Baybay Polong	';break;
case '	015513007		 ':echo '	Biec	';break;
case '	015513008		 ':echo '	Buenlag	';break;
case '	015513009		 ':echo '	Calit	';break;
case '	015513010		 ':echo '	Caloocan Norte	';break;
case '	015513011		 ':echo '	Caloocan Sur	';break;
case '	015513012		 ':echo '	Camaley	';break;
case '	015513013		 ':echo '	Canaoalan	';break;
case '	015513014		 ':echo '	Dulag	';break;
case '	015513015		 ':echo '	Gayaman	';break;
case '	015513016		 ':echo '	Linoc	';break;
case '	015513017		 ':echo '	Lomboy	';break;
case '	015513018		 ':echo '	Nagpalangan	';break;
case '	015513019		 ':echo '	Malindong	';break;
case '	015513020		 ':echo '	Manat	';break;
case '	015513021		 ':echo '	Naguilayan	';break;
case '	015513022		 ':echo '	Pallas	';break;
case '	015513023		 ':echo '	Papagueyan	';break;
case '	015513024		 ':echo '	Parayao	';break;
case '	015513026		 ':echo '	Poblacion	';break;
case '	015513027		 ':echo '	Pototan	';break;
case '	015513028		 ':echo '	Sabangan	';break;
case '	015513029		 ':echo '	Salapingao	';break;
case '	015513030		 ':echo '	San Isidro Norte	';break;
case '	015513031		 ':echo '	San Isidro Sur	';break;
case '	015513032		 ':echo '	Santa Rosa	';break;
case '	015513033		 ':echo '	Tombor	';break;
case '	015513034		 ':echo '	Caloocan Dupo	';break;
case '	015514001		 ':echo '	Arnedo	';break;
case '	015514002		 ':echo '	Balingasay	';break;
case '	015514003		 ':echo '	Binabalian	';break;
case '	015514004		 ':echo '	Cabuyao	';break;
case '	015514005		 ':echo '	Catuday	';break;
case '	015514006		 ':echo '	Catungi	';break;
case '	015514007		 ':echo '	Concordia 	';break;
case '	015514008		 ':echo '	Culang	';break;
case '	015514009		 ':echo '	Dewey	';break;
case '	015514010		 ':echo '	Estanza	';break;
case '	015514011		 ':echo '	Germinal 	';break;
case '	015514012		 ':echo '	Goyoden	';break;
case '	015514013		 ':echo '	Ilogmalino	';break;
case '	015514014		 ':echo '	Lambes	';break;
case '	015514015		 ':echo '	Liwa-liwa	';break;
case '	015514016		 ':echo '	Lucero	';break;
case '	015514017		 ':echo '	Luciente 1.0	';break;
case '	015514018		 ':echo '	Luciente 2.0	';break;
case '	015514019		 ':echo '	Luna	';break;
case '	015514020		 ':echo '	Patar	';break;
case '	015514021		 ':echo '	Pilar	';break;
case '	015514023		 ':echo '	Salud	';break;
case '	015514024		 ':echo '	Samang Norte	';break;
case '	015514025		 ':echo '	Samang Sur	';break;
case '	015514026		 ':echo '	Sampaloc	';break;
case '	015514027		 ':echo '	San Roque	';break;
case '	015514028		 ':echo '	Tara	';break;
case '	015514029		 ':echo '	Tupa	';break;
case '	015514030		 ':echo '	Victory	';break;
case '	015514031		 ':echo '	Zaragoza	';break;
case '	015515001		 ':echo '	Angarian	';break;
case '	015515002		 ':echo '	Asinan	';break;
case '	015515003		 ':echo '	Banaga	';break;
case '	015515004		 ':echo '	Bacabac	';break;
case '	015515005		 ':echo '	Bolaoen	';break;
case '	015515006		 ':echo '	Buenlag	';break;
case '	015515007		 ':echo '	Cabayaoasan	';break;
case '	015515008		 ':echo '	Cayanga	';break;
case '	015515009		 ':echo '	Gueset	';break;
case '	015515010		 ':echo '	Hacienda	';break;
case '	015515011		 ':echo '	Laguit Centro	';break;
case '	015515012		 ':echo '	Laguit Padilla	';break;
case '	015515013		 ':echo '	Magtaking	';break;
case '	015515014		 ':echo '	Pangascasan	';break;
case '	015515015		 ':echo '	Pantal	';break;
case '	015515016		 ':echo '	Poblacion	';break;
case '	015515017		 ':echo '	Polong	';break;
case '	015515018		 ':echo '	Portic	';break;
case '	015515019		 ':echo '	Salasa	';break;
case '	015515020		 ':echo '	Salomague Norte	';break;
case '	015515021		 ':echo '	Salomague Sur	';break;
case '	015515022		 ':echo '	Samat	';break;
case '	015515023		 ':echo '	San Francisco	';break;
case '	015515024		 ':echo '	Umanday	';break;
case '	015516001		 ':echo '	Anapao	';break;
case '	015516003		 ':echo '	Cacayasen	';break;
case '	015516004		 ':echo '	Concordia	';break;
case '	015516005		 ':echo '	Ilio-ilio	';break;
case '	015516006		 ':echo '	Papallasen	';break;
case '	015516007		 ':echo '	Poblacion	';break;
case '	015516008		 ':echo '	Pogoruac	';break;
case '	015516009		 ':echo '	Don Matias	';break;
case '	015516010		 ':echo '	San Miguel	';break;
case '	015516011		 ':echo '	San Pascual	';break;
case '	015516012		 ':echo '	San Vicente	';break;
case '	015516013		 ':echo '	Sapa Grande	';break;
case '	015516014		 ':echo '	Sapa Pequeña	';break;
case '	015516015		 ':echo '	Tambacan	';break;
case '	015517001		 ':echo '	Ambonao	';break;
case '	015517002		 ':echo '	Ambuetel	';break;
case '	015517003		 ':echo '	Banaoang	';break;
case '	015517004		 ':echo '	Bued	';break;
case '	015517005		 ':echo '	Buenlag	';break;
case '	015517006		 ':echo '	Cabilocaan	';break;
case '	015517007		 ':echo '	Dinalaoan	';break;
case '	015517008		 ':echo '	Doyong	';break;
case '	015517009		 ':echo '	Gabon	';break;
case '	015517010		 ':echo '	Lasip	';break;
case '	015517011		 ':echo '	Longos	';break;
case '	015517012		 ':echo '	Lumbang	';break;
case '	015517013		 ':echo '	Macabito	';break;
case '	015517014		 ':echo '	Malabago	';break;
case '	015517015		 ':echo '	Mancup	';break;
case '	015517016		 ':echo '	Nagsaing	';break;
case '	015517017		 ':echo '	Nalsian	';break;
case '	015517018		 ':echo '	Poblacion East	';break;
case '	15517019		 ':echo '	Poblacion West	';break;
case '	015517020		 ':echo '	Quesban	';break;
case '	015517022		 ':echo '	San Miguel	';break;
case '	015517023		 ':echo '	San Vicente	';break;
case '	015517024		 ':echo '	Songkoy	';break;
case '	015517025		 ':echo '	Talibaew	';break;
case '	01551801		 ':echo '	Bacayao Norte	';break;
case '	01551802		 ':echo '	Bacayao Sur	';break;
case '	01551803		 ':echo '	Barangay II	';break;
case '	01551804		 ':echo '	Barangay IV	';break;
case '	01551806		 ':echo '	Bolosan	';break;
case '	01551807		 ':echo '	Bonuan Binloc	';break;
case '	01551808		 ':echo '	Bonuan Boquig	';break;
case '	01551809		 ':echo '	Bonuan Gueset	';break;
case '	01551810		 ':echo '	Calmay	';break;
case '	01551811		 ':echo '	Carael	';break;
case '	01551812		 ':echo '	Caranglaan	';break;
case '	01551813		 ':echo '	Herrero	';break;
case '	01551814		 ':echo '	Lasip Chico	';break;
case '	01551815		 ':echo '	Lasip Grande	';break;
case '	01551816		 ':echo '	Lomboy	';break;
case '	01551817		 ':echo '	Lucao	';break;
case '	01551818		 ':echo '	Malued	';break;
case '	015518019		 ':echo '	Mamalingling	';break;
case '	015518020		 ':echo '	Mangin	';break;
case '	015518021		 ':echo '	Mayombo	';break;
case '	015518022		 ':echo '	Pantal	';break;
case '	015518023		 ':echo '	Poblacion Oeste	';break;
case '	015518024		 ':echo '	Barangay I	';break;
case '	015518025		 ':echo '	Pogo Chico	';break;
case '	015518026		 ':echo '	Pogo Grande	';break;
case '	015518027		 ':echo '	Pugaro Suit	';break;
case '	015518028		 ':echo '	Salapingao	';break;
case '	015518029		 ':echo '	Salisay	';break;
case '	015518030		 ':echo '	Tambac	';break;
case '	015518031		 ':echo '	Tapuac	';break;
case '	015518032		 ':echo '	Tebeng	';break;
case '	015519001		 ':echo '	Alilao	';break;
case '	015519002		 ':echo '	Amalbalan	';break;
case '	015519003		 ':echo '	Bobonot	';break;
case '	015519004		 ':echo '	Eguia	';break;
case '	015519005		 ':echo '	Gais-Guipe	';break;
case '	015519006		 ':echo '	Hermosa	';break;
case '	015519007		 ':echo '	Macalang	';break;
case '	015519008		 ':echo '	Magsaysay	';break;
case '	015519010		 ':echo '	Malacapas	';break;
case '	015519011		 ':echo '	Malimpin	';break;
case '	015519012		 ':echo '	Osmeña	';break;
case '	015519013		 ':echo '	Petal	';break;
case '	015519014		 ':echo '	Poblacion	';break;
case '	015519015		 ':echo '	San Vicente	';break;
case '	015519016		 ':echo '	Tambac	';break;
case '	015519017		 ':echo '	Tambobong	';break;
case '	015519018		 ':echo '	Uli	';break;
case '	015519019		 ':echo '	Viga	';break;
case '	015520002		 ':echo '	Bamban	';break;
case '	015520003		 ':echo '	Batang	';break;
case '	015520004		 ':echo '	Bayambang	';break;
case '	015520005		 ':echo '	Cato	';break;
case '	015520006		 ':echo '	Doliman	';break;
case '	015520007		 ':echo '	Fatima	';break;
case '	015520008		 ':echo '	Maya	';break;
case '	015520009		 ':echo '	Nangalisan	';break;
case '	015520010		 ':echo '	Nayom	';break;
case '	015520011		 ':echo '	Pita	';break;
case '	015520012		 ':echo '	Poblacion	';break;
case '	015520013		 ':echo '	Potol	';break;
case '	015520014		 ':echo '	Babuyan	';break;
case '	015521001		 ':echo '	Bolo	';break;
case '	015521002		 ':echo '	Bongalon	';break;
case '	015521003		 ':echo '	Dulig	';break;
case '	015521004		 ':echo '	Laois	';break;
case '	015521005		 ':echo '	Magsaysay	';break;
case '	015521006		 ':echo '	Poblacion	';break;
case '	015521007		 ':echo '	San Gonzalo	';break;
case '	015521008		 ':echo '	San Jose	';break;
case '	015521009		 ':echo '	Tobuan	';break;
case '	015521010		 ':echo '	Uyong	';break;
case '	015522001		 ':echo '	Aliwekwek	';break;
case '	015522002		 ':echo '	Baay	';break;
case '	015522003		 ':echo '	Balangobong	';break;
case '	015522004		 ':echo '	Balococ	';break;
case '	015522006		 ':echo '	Bantayan	';break;
case '	015522007		 ':echo '	Basing	';break;
case '	015522008		 ':echo '	Capandanan	';break;
case '	015522009		 ':echo '	Domalandan Center	';break;
case '	015522010		 ':echo '	Domalandan East	';break;
case '	015522011		 ':echo '	Domalandan West	';break;
case '	015522013		 ':echo '	Dorongan	';break;
case '	015522014		 ':echo '	Dulag	';break;
case '	015522015		 ':echo '	Estanza	';break;
case '	015522016		 ':echo '	Lasip	';break;
case '	015522017		 ':echo '	Libsong East	';break;
case '	015522018		 ':echo '	Libsong West	';break;
case '	015522019		 ':echo '	Malawa	';break;
case '	015522020		 ':echo '	Malimpuec	';break;
case '	015522021		 ':echo '	Maniboc	';break;
case '	015522022		 ':echo '	Matalava	';break;
case '	015522023		 ':echo '	Naguelguel	';break;
case '	015522025		 ':echo '	Namolan	';break;
case '	015522026		 ':echo '	Pangapisan North	';break;
case '	015522027		 ':echo '	Pangapisan Sur	';break;
case '	015522028		 ':echo '	Poblacion	';break;
case '	015522029		 ':echo '	Quibaol	';break;
case '	015522030		 ':echo '	Rosario	';break;
case '	015522031		 ':echo '	Sabangan	';break;
case '	015522032		 ':echo '	Talogtog	';break;
case '	015522033		 ':echo '	Tonton	';break;
case '	015522034		 ':echo '	Tumbar	';break;
case '	015522035		 ':echo '	Wawa	';break;
case '	015523002		 ':echo '	Bacnit	';break;
case '	015523003		 ':echo '	Barlo	';break;
case '	015523005		 ':echo '	Caabiangaan	';break;
case '	015523006		 ':echo '	Cabanaetan	';break;
case '	015523007		 ':echo '	Cabinuangan	';break;
case '	015523008		 ':echo '	Calzada	';break;
case '	015523009		 ':echo '	Caranglaan	';break;
case '	015523010		 ':echo '	De Guzman	';break;
case '	015523012		 ':echo '	Luna	';break;
case '	015523013		 ':echo '	Magalong	';break;
case '	015523014		 ':echo '	Nibaliw	';break;
case '	015523015		 ':echo '	Patar	';break;
case '	015523016		 ':echo '	Poblacion	';break;
case '	015523017		 ':echo '	San Pedro	';break;
case '	015523018		 ':echo '	Tagudin	';break;
case '	015523020		 ':echo '	Villacorta	';break;
case '	015524001		 ':echo '	Abonagan	';break;
case '	015524002		 ':echo '	Agdao	';break;
case '	015524003		 ':echo '	Alacan	';break;
case '	015524004		 ':echo '	Aliaga	';break;
case '	015524005		 ':echo '	Amacalan	';break;
case '	015524006		 ':echo '	Anolid	';break;
case '	015524007		 ':echo '	Apaya	';break;
case '	015524008		 ':echo '	Asin Este	';break;
case '	015524009		 ':echo '	Asin Weste	';break;
case '	015524010		 ':echo '	Bacundao Este	';break;
case '	015524011		 ':echo '	Bacundao Weste	';break;
case '	015524012		 ':echo '	Bakitiw	';break;
case '	015524013		 ':echo '	Balite	';break;
case '	015524014		 ':echo '	Banawang	';break;
case '	015524015		 ':echo '	Barang	';break;
case '	015524016		 ':echo '	Bawer	';break;
case '	015524017		 ':echo '	Binalay	';break;
case '	015524018		 ':echo '	Bobon	';break;
case '	015524019		 ':echo '	Bolaoit	';break;
case '	015524020		 ':echo '	Bongar	';break;
case '	015524021		 ':echo '	Butao	';break;
case '	015524022		 ':echo '	Cabatling	';break;
case '	015524023		 ':echo '	Cabueldatan	';break;
case '	015524026		 ':echo '	Calbueg	';break;
case '	015524027		 ':echo '	Canan Norte	';break;
case '	015524028		 ':echo '	Canan Sur	';break;
case '	015524029		 ':echo '	Cawayan Bogtong	';break;
case '	015524031		 ':echo '	Don Pedro	';break;
case '	015524032		 ':echo '	Gatang	';break;
case '	015524033		 ':echo '	Goliman	';break;
case '	015524034		 ':echo '	Gomez	';break;
case '	015524035		 ':echo '	Guilig	';break;
case '	015524036		 ':echo '	Ican	';break;
case '	015524037		 ':echo '	Ingalagala	';break;
case '	015524038		 ':echo '	Lareg-lareg	';break;
case '	015524039		 ':echo '	Lasip	';break;
case '	015524040		 ':echo '	Lepa	';break;
case '	015524041		 ':echo '	Loqueb Este	';break;
case '	015524042		 ':echo '	Loqueb Norte	';break;
case '	015524043		 ':echo '	Loqueb Sur	';break;
case '	015524044		 ':echo '	Lunec	';break;
case '	015524045		 ':echo '	Mabulitec	';break;
case '	015524047		 ':echo '	Malimpec	';break;
case '	015524048		 ':echo '	Manggan-Dampay	';break;
case '	015524049		 ':echo '	Nancapian	';break;
case '	015524050		 ':echo '	Nalsian Norte	';break;
case '	015524051		 ':echo '	Nalsian Sur	';break;
case '	015524053		 ':echo '	Nansangaan	';break;
case '	015524054		 ':echo '	Olea	';break;
case '	015524055		 ':echo '	Pacuan	';break;
case '	015524056		 ':echo '	Palapar Norte	';break;
case '	015524057		 ':echo '	Palapar Sur	';break;
case '	015524058		 ':echo '	Palong	';break;
case '	015524059		 ':echo '	Pamaranum	';break;
case '	015524060		 ':echo '	Pasima	';break;
case '	015524061		 ':echo '	Payar	';break;
case '	015524062		 ':echo '	Poblacion	';break;
case '	015524063		 ':echo '	Polong Norte	';break;
case '	015524064		 ':echo '	Polong Sur	';break;
case '	015524065		 ':echo '	Potiocan	';break;
case '	015524066		 ':echo '	San Julian	';break;
case '	015524067		 ':echo '	Tabo-Sili	';break;
case '	015524068		 ':echo '	Tobor	';break;
case '	015524069		 ':echo '	Talospatang	';break;
case '	015524070		 ':echo '	Taloy	';break;
case '	015524071		 ':echo '	Taloyan	';break;
case '	015524072		 ':echo '	Tambac	';break;
case '	015524073		 ':echo '	Tolonguat	';break;
case '	015524074		 ':echo '	Tomling	';break;
case '	015524075		 ':echo '	Umando	';break;
case '	015524076		 ':echo '	Viado	';break;
case '	015524077		 ':echo '	Waig	';break;
case '	015524078		 ':echo '	Warey	';break;
case '	015525002		 ':echo '	Babasit	';break;
case '	015525003		 ':echo '	Baguinay	';break;
case '	015525004		 ':echo '	Baritao	';break;
case '	015525005		 ':echo '	Bisal	';break;
case '	015525007		 ':echo '	Bucao	';break;
case '	015525009		 ':echo '	Cabanbanan	';break;
case '	015525014		 ':echo '	Calaocan	';break;
case '	015525019		 ':echo '	Inamotan	';break;
case '	015525023		 ':echo '	Lelemaan	';break;
case '	015525024		 ':echo '	Licsi	';break;
case '	015525025		 ':echo '	Lipit Norte	';break;
case '	015525026		 ':echo '	Lipit Sur	';break;
case '	015525027		 ':echo '	Parian	';break;
case '	015525028		 ':echo '	Matolong	';break;
case '	015525030		 ':echo '	Mermer	';break;
case '	015525031		 ':echo '	Nalsian	';break;
case '	015525033		 ':echo '	Oraan East	';break;
case '	015525034		 ':echo '	Oraan West	';break;
case '	015525036		 ':echo '	Pantal	';break;
case '	015525037		 ':echo '	Pao	';break;
case '	015525039		 ':echo '	Poblacion	';break;
case '	015525040		 ':echo '	Pugaro	';break;
case '	015525041		 ':echo '	San Ramon	';break;
case '	015525042		 ':echo '	Santa Ines	';break;
case '	015525043		 ':echo '	Sapang	';break;
case '	015525045		 ':echo '	Tebuel	';break;
case '	015526001		 ':echo '	Alitaya	';break;
case '	015526002		 ':echo '	Amansabina	';break;
case '	015526003		 ':echo '	Anolid	';break;
case '	015526004		 ':echo '	Banaoang	';break;
case '	015526005		 ':echo '	Bantayan	';break;
case '	015526006		 ':echo '	Bari	';break;
case '	015526007		 ':echo '	Bateng	';break;
case '	015526008		 ':echo '	Buenlag	';break;
case '	015526009		 ':echo '	David	';break;
case '	015526010		 ':echo '	Embarcadero	';break;
case '	015526011		 ':echo '	Gueguesangen	';break;
case '	015526012		 ':echo '	Guesang	';break;
case '	015526013		 ':echo '	Guiguilonen	';break;
case '	015526014		 ':echo '	Guilig	';break;
case '	015526015		 ':echo '	Inlambo	';break;
case '	015526016		 ':echo '	Lanas	';break;
case '	015526017		 ':echo '	Landas	';break;
case '	015526018		 ':echo '	Maasin	';break;
case '	015526019		 ':echo '	Macayug	';break;
case '	015526020		 ':echo '	Malabago	';break;
case '	015526021		 ':echo '	Navaluan	';break;
case '	015526022		 ':echo '	Nibaliw	';break;
case '	015526023		 ':echo '	Osiem	';break;
case '	015526024		 ':echo '	Palua	';break;
case '	015526025		 ':echo '	Poblacion	';break;
case '	015526026		 ':echo '	Pogo	';break;
case '	015526027		 ':echo '	Salaan	';break;
case '	015526028		 ':echo '	Salay	';break;
case '	015526029		 ':echo '	Tebag	';break;
case '	015526030		 ':echo '	Talogtog	';break;
case '	015527001		 ':echo '	Andangin	';break;
case '	015527002		 ':echo '	Arellano Street 	';break;
case '	015527003		 ':echo '	Bantay	';break;
case '	015527004		 ':echo '	Bantocaling	';break;
case '	015527005		 ':echo '	Baracbac	';break;
case '	015527006		 ':echo '	Peania Pedania	';break;
case '	015527007		 ':echo '	Bogtong Bolo	';break;
case '	015527008		 ':echo '	Bogtong Bunao	';break;
case '	015527009		 ':echo '	Bogtong Centro	';break;
case '	015527010		 ':echo '	Bogtong Niog	';break;
case '	015527011		 ':echo '	Bogtong Silag	';break;
case '	015527012		 ':echo '	Buaya	';break;
case '	015527013		 ':echo '	Buenlag	';break;
case '	015527014		 ':echo '	Bueno	';break;
case '	015527015		 ':echo '	Bunagan	';break;
case '	015527017		 ':echo '	Bunlalacao	';break;
case '	015527018		 ':echo '	Burgos Street 	';break;
case '	015527019		 ':echo '	Cabaluyan 1st	';break;
case '	015527020		 ':echo '	Cabaluyan 2nd	';break;
case '	015527021		 ':echo '	Cabarabuan	';break;
case '	015527022		 ':echo '	Cabaruan	';break;
case '	015527023		 ':echo '	Cabayaoasan	';break;
case '	015527024		 ':echo '	Cabayugan	';break;
case '	015527025		 ':echo '	Cacaoiten	';break;
case '	015527026		 ':echo '	Calomboyan Norte	';break;
case '	015527027		 ':echo '	Calomboyan Sur	';break;
case '	015527028		 ':echo '	Calvo 	';break;
case '	015527029		 ':echo '	Casilagan	';break;
case '	015527030		 ':echo '	Catarataraan	';break;
case '	015527031		 ':echo '	Caturay Norte	';break;
case '	015527032		 ':echo '	Caturay Sur	';break;
case '	015527033		 ':echo '	Caviernesan	';break;
case '	015527034		 ':echo '	Dorongan Ketaket	';break;
case '	015527035		 ':echo '	Dorongan Linmansangan	';break;
case '	015527036		 ':echo '	Dorongan Punta	';break;
case '	015527037		 ':echo '	Dorongan Sawat	';break;
case '	015527038		 ':echo '	Dorongan Valerio	';break;
case '	015527039		 ':echo '	General Luna 	';break;
case '	015527040		 ':echo '	Historia	';break;
case '	015527041		 ':echo '	Lawak Langka	';break;
case '	015527042		 ':echo '	Linmansangan	';break;
case '	015527043		 ':echo '	Lopez 	';break;
case '	015527044		 ':echo '	Mabini 	';break;
case '	015527045		 ':echo '	Macarang	';break;
case '	015527046		 ':echo '	Malabobo	';break;
case '	015527047		 ':echo '	Malibong	';break;
case '	015527048		 ':echo '	Malunec	';break;
case '	015527049		 ':echo '	Maravilla 	';break;
case '	015527050		 ':echo '	Maravilla-Arellano Ext. 	';break;
case '	015527051		 ':echo '	Muelang	';break;
case '	015527052		 ':echo '	Naguilayan East	';break;
case '	015527053		 ':echo '	Naguilayan West	';break;
case '	015527054		 ':echo '	Nancasalan	';break;
case '	015527055		 ':echo '	Niog-Cabison-Bulaney	';break;
case '	015527056		 ':echo '	Olegario-Caoile 	';break;
case '	015527057		 ':echo '	Olo Cacamposan	';break;
case '	015527058		 ':echo '	Olo Cafabrosan	';break;
case '	015527059		 ':echo '	Olo Cagarlitan	';break;
case '	015527060		 ':echo '	Osmeña 	';break;
case '	015527061		 ':echo '	Pacalat	';break;
case '	015527062		 ':echo '	Pampano	';break;
case '	015527063		 ':echo '	Parian	';break;
case '	015527064		 ':echo '	Paul	';break;
case '	015527065		 ':echo '	Pogon-Aniat	';break;
case '	015527066		 ':echo '	Pogon-Lomboy 	';break;
case '	015527067		 ':echo '	Ponglo-Baleg	';break;
case '	015527068		 ':echo '	Ponglo-Muelag	';break;
case '	015527069		 ':echo '	Quetegan	';break;
case '	015527070		 ':echo '	Quezon 	';break;
case '	015527071		 ':echo '	Salavante	';break;
case '	015527072		 ':echo '	Sapang	';break;
case '	015527073		 ':echo '	Sonson Ongkit	';break;
case '	015527074		 ':echo '	Suaco	';break;
case '	015527075		 ':echo '	Tagac	';break;
case '	015527076		 ':echo '	Takipan	';break;
case '	015527077		 ':echo '	Talogtog	';break;
case '	015527078		 ':echo '	Tococ Barikir	';break;
case '	015527079		 ':echo '	Torre 1st	';break;
case '	015527080		 ':echo '	Torre 2nd	';break;
case '	015527081		 ':echo '	Torres Bugallon 	';break;
case '	015527082		 ':echo '	Umangan	';break;
case '	015527083		 ':echo '	Zamora 	';break;
case '	015528001		 ':echo '	Amanoaoac	';break;
case '	015528002		 ':echo '	Apaya	';break;
case '	015528003		 ':echo '	Aserda	';break;
case '	015528004		 ':echo '	Baloling	';break;
case '	015528006		 ':echo '	Coral	';break;
case '	015528007		 ':echo '	Golden	';break;
case '	015528008		 ':echo '	Jimenez	';break;
case '	015528009		 ':echo '	Lambayan	';break;
case '	015528010		 ':echo '	Luyan	';break;
case '	015528012		 ':echo '	Nilombot	';break;
case '	015528013		 ':echo '	Pias	';break;
case '	015528014		 ':echo '	Poblacion	';break;
case '	015528015		 ':echo '	Primicias	';break;
case '	015528016		 ':echo '	Santa Maria	';break;
case '	015528018		 ':echo '	Torres	';break;
case '	015529001		 ':echo '	Barangobong	';break;
case '	015529003		 ':echo '	Batchelor East	';break;
case '	015529004		 ':echo '	Batchelor West	';break;
case '	015529005		 ':echo '	Burgos	';break;
case '	015529006		 ':echo '	Cacandungan	';break;
case '	015529007		 ':echo '	Calapugan	';break;
case '	015529008		 ':echo '	Canarem	';break;
case '	015529009		 ':echo '	Luna	';break;
case '	015529011		 ':echo '	Poblacion East	';break;
case '	015529012		 ':echo '	Poblacion West	';break;
case '	015529013		 ':echo '	Rizal	';break;
case '	015529014		 ':echo '	Salud	';break;
case '	015529015		 ':echo '	San Eugenio	';break;
case '	015529017		 ':echo '	San Macario Norte	';break;
case '	015529018		 ':echo '	San Macario Sur	';break;
case '	015529019		 ':echo '	San Maximo	';break;
case '	015529020		 ':echo '	San Miguel	';break;
case '	015529022		 ':echo '	Silag	';break;
case '	015530001		 ':echo '	Alipangpang	';break;
case '	015530002		 ':echo '	Amagbagan	';break;
case '	015530003		 ':echo '	Balacag	';break;
case '	015530004		 ':echo '	Banding	';break;
case '	015530006		 ':echo '	Bantugan	';break;
case '	015530007		 ':echo '	Batakil	';break;
case '	015530008		 ':echo '	Bobonan	';break;
case '	015530009		 ':echo '	Buneg	';break;
case '	015530010		 ':echo '	Cablong	';break;
case '	015530011		 ':echo '	Castaño	';break;
case '	015530012		 ':echo '	Dilan	';break;
case '	015530013		 ':echo '	Don Benito	';break;
case '	015530014		 ':echo '	Haway	';break;
case '	015530015		 ':echo '	Imbalbalatong	';break;
case '	015530016		 ':echo '	Inoman	';break;
case '	015530017		 ':echo '	Laoac	';break;
case '	015530018		 ':echo '	Maambal	';break;
case '	015530019		 ':echo '	Malasin	';break;
case '	015530020		 ':echo '	Malokiat	';break;
case '	015530021		 ':echo '	Manaol	';break;
case '	015530022		 ':echo '	Nama	';break;
case '	015530023		 ':echo '	Nantangalan	';break;
case '	015530024		 ':echo '	Palacpalac	';break;
case '	015530025		 ':echo '	Palguyod	';break;
case '	015530026		 ':echo '	Poblacion I	';break;
case '	015530027		 ':echo '	Poblacion II	';break;
case '	015530028		 ':echo '	Poblacion III	';break;
case '	015530029		 ':echo '	Poblacion IV	';break;
case '	015530030		 ':echo '	Rosario	';break;
case '	015530031		 ':echo '	Sugcong	';break;
case '	015530032		 ':echo '	Talogtog	';break;
case '	015530033		 ':echo '	Tulnac	';break;
case '	015530034		 ':echo '	Villegas	';break;
case '	015530035		 ':echo '	Casanfernandoan	';break;
case '	015531001		 ':echo '	Acop	';break;
case '	015531002		 ':echo '	Bakit-Bakit	';break;
case '	015531003		 ':echo '	Balingcanaway	';break;
case '	015531004		 ':echo '	Cabalaoangan Norte	';break;
case '	015531005		 ':echo '	Cabalaoangan Sur	';break;
case '	015531006		 ':echo '	Camangaan	';break;
case '	015531007		 ':echo '	Capitan Tomas	';break;
case '	015531008		 ':echo '	Carmay West	';break;
case '	015531009		 ':echo '	Carmen East	';break;
case '	015531010		 ':echo '	Carmen West	';break;
case '	015531012		 ':echo '	Casanicolasan	';break;
case '	015531013		 ':echo '	Coliling	';break;
case '	015531014		 ':echo '	Calanutan	';break;
case '	015531015		 ':echo '	Guiling	';break;
case '	015531016		 ':echo '	Palakipak	';break;
case '	015531017		 ':echo '	Pangaoan	';break;
case '	015531018		 ':echo '	Rabago	';break;
case '	015531019		 ':echo '	Rizal	';break;
case '	01553120		 ':echo '	Salvacion	';break;
case '	01553121		 ':echo '	San Antonio	';break;
case '	01553122		 ':echo '	San Bartolome	';break;
case '	01553123		 ':echo '	San Isidro	';break;
case '	01553124		 ':echo '	San Luis	';break;
case '	01553125		 ':echo '	San Pedro East	';break;
case '	01553126		 ':echo '	San Pedro West	';break;
case '	01553127		 ':echo '	San Vicente	';break;
case '	01553128		 ':echo '	San Angel	';break;
case '	01553129		 ':echo '	Station District	';break;
case '	01553131		 ':echo '	Tomana East	';break;
case '	01553132		 ':echo '	Tomana West	';break;
case '	01553133		 ':echo '	Zone I 	';break;
case '	01553134		 ':echo '	Zone IV 	';break;
case '	01553135		 ':echo '	Carmay East	';break;
case '	01553136		 ':echo '	Don Antonio Village	';break;
case '	01553137		 ':echo '	Zone II 	';break;
case '	01553138		 ':echo '	Zone III 	';break;
case '	01553139		 ':echo '	Zone V 	';break;
case '	015532001		 ':echo '	Abanon	';break;
case '	015532002		 ':echo '	Agdao	';break;
case '	015532003		 ':echo '	Anando	';break;
case '	015532004		 ':echo '	Ano	';break;
case '	015532005		 ':echo '	Antipangol	';break;
case '	015532006		 ':echo '	Aponit	';break;
case '	015532007		 ':echo '	Bacnar	';break;
case '	015532008		 ':echo '	Balaya	';break;
case '	015532009		 ':echo '	Balayong	';break;
case '	015532010		 ':echo '	Baldog	';break;
case '	015532011		 ':echo '	Balite Sur	';break;
case '	015532012		 ':echo '	Balococ	';break;
case '	015532013		 ':echo '	Bani	';break;
case '	015532014		 ':echo '	Bega	';break;
case '	015532015		 ':echo '	Bocboc	';break;
case '	015532016		 ':echo '	Bugallon-Posadas Street 	';break;
case '	015532017		 ':echo '	Bogaoan	';break;
case '	015532018		 ':echo '	Bolingit	';break;
case '	015532019		 ':echo '	Bolosan	';break;
case '	015532020		 ':echo '	Bonifacio 	';break;
case '	015532021		 ':echo '	Buenglat	';break;
case '	015532022		 ':echo '	Burgos Padlan 	';break;
case '	015532023		 ':echo '	Cacaritan	';break;
case '	015532024		 ':echo '	Caingal	';break;
case '	015532025		 ':echo '	Calobaoan	';break;
case '	015532026		 ':echo '	Calomboyan	';break;
case '	015532027		 ':echo '	Capataan	';break;
case '	015532028		 ':echo '	Caoayan-Kiling	';break;
case '	015532029		 ':echo '	Cobol	';break;
case '	015532030		 ':echo '	Coliling	';break;
case '	015532031		 ':echo '	Cruz	';break;
case '	015532032		 ':echo '	Doyong	';break;
case '	015532035		 ':echo '	Gamata	';break;
case '	015532036		 ':echo '	Guelew	';break;
case '	015532037		 ':echo '	Ilang	';break;
case '	015532038		 ':echo '	Inerangan	';break;
case '	015532039		 ':echo '	Isla	';break;
case '	015532040		 ':echo '	Libas	';break;
case '	015532041		 ':echo '	Lilimasan	';break;
case '	015532043		 ':echo '	Longos	';break;
case '	015532044		 ':echo '	Lucban 	';break;
case '	015532045		 ':echo '	Mabalbalino	';break;
case '	015532046		 ':echo '	Mabini 	';break;
case '	015532047		 ':echo '	Magtaking	';break;
case '	015532048		 ':echo '	Malacañang	';break;
case '	015532050		 ':echo '	Maliwara	';break;
case '	015532051		 ':echo '	Mamarlao	';break;
case '	015532052		 ':echo '	Manzon	';break;
case '	015532053		 ':echo '	Matagdem	';break;
case '	015532054		 ':echo '	Mestizo Norte	';break;
case '	015532055		 ':echo '	Naguilayan	';break;
case '	015532056		 ':echo '	Nilentap	';break;
case '	015532057		 ':echo '	Padilla-Gomez	';break;
case '	015532058		 ':echo '	Pagal	';break;
case '	015532060		 ':echo '	Palaming	';break;
case '	015532061		 ':echo '	Palaris 	';break;
case '	015532062		 ':echo '	Palospos	';break;
case '	015532063		 ':echo '	Pangalangan	';break;
case '	015532064		 ':echo '	Pangoloan	';break;
case '	015532065		 ':echo '	Pangpang	';break;
case '	015532066		 ':echo '	Paitan-Panoypoy	';break;
case '	015532067		 ':echo '	Parayao	';break;
case '	015532069		 ':echo '	Payapa	';break;
case '	015532070		 ':echo '	Payar	';break;
case '	015532071		 ':echo '	Perez Boulevard 	';break;
case '	015532072		 ':echo '	Polo	';break;
case '	015532073		 ':echo '	Quezon Boulevard 	';break;
case '	015532074		 ':echo '	Quintong	';break;
case '	015532075		 ':echo '	Rizal 	';break;
case '	015532076		 ':echo '	Roxas Boulevard 	';break;
case '	015532077		 ':echo '	Salinap	';break;
case '	015532078		 ':echo '	San Juan	';break;
case '	015532079		 ':echo '	San Pedro-Taloy	';break;
case '	015532080		 ':echo '	Sapinit	';break;
case '	015532081		 ':echo '	PNR Station Site	';break;
case '	015532082		 ':echo '	Supo	';break;
case '	015532083		 ':echo '	Talang	';break;
case '	015532084		 ':echo '	Tamayo	';break;
case '	015532085		 ':echo '	Tandoc	';break;
case '	015532086		 ':echo '	Tarece	';break;
case '	015532087		 ':echo '	Tarectec	';break;
case '	015532088		 ':echo '	Tayambani	';break;
case '	015532089		 ':echo '	Tebag	';break;
case '	015532090		 ':echo '	Turac	';break;
case '	015532091		 ':echo '	M. Soriano	';break;
case '	015532092		 ':echo '	Tandang Sora	';break;
case '	015533001		 ':echo '	Ambalangan-Dalin	';break;
case '	015533002		 ':echo '	Angio	';break;
case '	015533003		 ':echo '	Anonang	';break;
case '	015533004		 ':echo '	Aramal	';break;
case '	015533006		 ':echo '	Bigbiga	';break;
case '	015533007		 ':echo '	Binday	';break;
case '	015533008		 ':echo '	Bolaoen	';break;
case '	015533009		 ':echo '	Bolasi	';break;
case '	015533010		 ':echo '	Cayanga	';break;
case '	015533011		 ':echo '	Gumot	';break;
case '	015533012		 ':echo '	Inmalog	';break;
case '	015533013		 ':echo '	Lekep-Butao	';break;
case '	015533014		 ':echo '	Longos	';break;
case '	015533015		 ':echo '	Mabilao	';break;
case '	015533016		 ':echo '	Nibaliw Central	';break;
case '	015533017		 ':echo '	Nibaliw East	';break;
case '	015533018		 ':echo '	Nibaliw Magliba	';break;
case '	015533019		 ':echo '	Palapad	';break;
case '	015533020		 ':echo '	Poblacion	';break;
case '	015533021		 ':echo '	Rabon	';break;
case '	015533022		 ':echo '	Sagud-Bahley	';break;
case '	015533023		 ':echo '	Sobol	';break;
case '	015533024		 ':echo '	Tempra-Guilig	';break;
case '	015533025		 ':echo '	Tocok	';break;
case '	015533027		 ':echo '	Lipit-Tomeeng	';break;
case '	015533028		 ':echo '	Colisao	';break;
case '	015533029		 ':echo '	Nibaliw Narvarte	';break;
case '	015533030		 ':echo '	Nibaliw Vidal	';break;
case '	015533031		 ':echo '	Alacan	';break;
case '	015533032		 ':echo '	Cabaruan	';break;
case '	015533033		 ':echo '	Inmalog Norte	';break;
case '	015533034		 ':echo '	Longos-Amangonan-Parac-Parac Fabrica	';break;
case '	015533035		 ':echo '	Longos Proper	';break;
case '	015533036		 ':echo '	Tiblong	';break;
case '	015534001		 ':echo '	Awai	';break;
case '	015534002		 ':echo '	Bolo	';break;
case '	015534003		 ':echo '	Capaoay 	';break;
case '	015534004		 ':echo '	Casibong	';break;
case '	015534005		 ':echo '	Imelda	';break;
case '	015534006		 ':echo '	Guibel	';break;
case '	015534007		 ':echo '	Labney	';break;
case '	015534009		 ':echo '	Magsaysay	';break;
case '	015534010		 ':echo '	Lobong	';break;
case '	015534011		 ':echo '	Macayug	';break;
case '	015534013		 ':echo '	Bagong Pag-asa	';break;
case '	015534014		 ':echo '	San Guillermo	';break;
case '	015534015		 ':echo '	San Jose	';break;
case '	015534016		 ':echo '	San Juan	';break;
case '	015534017		 ':echo '	San Roque	';break;
case '	015534018		 ':echo '	San Vicente	';break;
case '	015534019		 ':echo '	Santa Cruz	';break;
case '	015534020		 ':echo '	Santa Maria	';break;
case '	015534021		 ':echo '	Santo Tomas	';break;
case '	015535001		 ':echo '	San Antonio-Arzadon	';break;
case '	015535003		 ':echo '	Cabacaraan	';break;
case '	015535004		 ':echo '	Cabaritan	';break;
case '	015535005		 ':echo '	Flores	';break;
case '	015535007		 ':echo '	Guiset Norte 	';break;
case '	015535008		 ':echo '	Guiset Sur 	';break;
case '	015535009		 ':echo '	Lapalo	';break;
case '	015535010		 ':echo '	Nagsaag	';break;
case '	015535011		 ':echo '	Narra	';break;
case '	015535013		 ':echo '	San Bonifacio	';break;
case '	015535014		 ':echo '	San Juan	';break;
case '	015535015		 ':echo '	San Roque	';break;
case '	015535016		 ':echo '	San Vicente	';break;
case '	015535018		 ':echo '	Sto. Domingo	';break;
case '	015536001		 ':echo '	Bensican	';break;
case '	015536002		 ':echo '	Cabitnongan	';break;
case '	015536003		 ':echo '	Cabuloan	';break;
case '	015536005		 ':echo '	Cacabugaoan	';break;
case '	015536006		 ':echo '	Calanutian	';break;
case '	015536007		 ':echo '	Calaocan	';break;
case '	015536008		 ':echo '	Camangaan	';break;
case '	015536009		 ':echo '	Camindoroan	';break;
case '	015536010		 ':echo '	Casaratan	';break;
case '	015536011		 ':echo '	Dalumpinas	';break;
case '	015536013		 ':echo '	Fianza	';break;
case '	015536015		 ':echo '	Lungao	';break;
case '	015536016		 ':echo '	Malico	';break;
case '	015536017		 ':echo '	Malilion	';break;
case '	015536018		 ':echo '	Nagkaysa	';break;
case '	015536019		 ':echo '	Nining	';break;
case '	015536020		 ':echo '	Poblacion East	';break;
case '	015536021		 ':echo '	Poblacion West	';break;
case '	015536022		 ':echo '	Salingcob	';break;
case '	015536023		 ':echo '	Salpad	';break;
case '	015536024		 ':echo '	San Felipe East	';break;
case '	015536025		 ':echo '	San Felipe West	';break;
case '	015536026		 ':echo '	San Isidro	';break;
case '	015536027		 ':echo '	San Jose	';break;
case '	015536028		 ':echo '	San Rafael Centro	';break;
case '	015536029		 ':echo '	San Rafael East	';break;
case '	015536030		 ':echo '	San Rafael West	';break;
case '	015536031		 ':echo '	San Roque	';break;
case '	015536032		 ':echo '	Santa Maria East	';break;
case '	015536033		 ':echo '	Santa Maria West	';break;
case '	015536034		 ':echo '	Santo Tomas	';break;
case '	015536035		 ':echo '	Siblot	';break;
case '	015536036		 ':echo '	Sobol	';break;
case '	015537001		 ':echo '	Alac	';break;
case '	015537002		 ':echo '	Baligayan	';break;
case '	015537004		 ':echo '	Bantog	';break;
case '	015537005		 ':echo '	Bolintaguen	';break;
case '	015537006		 ':echo '	Cabangaran	';break;
case '	015537007		 ':echo '	Cabalaoangan	';break;
case '	015537009		 ':echo '	Calomboyan	';break;
case '	015537010		 ':echo '	Carayacan	';break;
case '	015537011		 ':echo '	Casantamarian	';break;
case '	015537012		 ':echo '	Gonzalo	';break;
case '	015537013		 ':echo '	Labuan	';break;
case '	015537014		 ':echo '	Lagasit	';break;
case '	015537015		 ':echo '	Lumayao	';break;
case '	015537016		 ':echo '	Mabini	';break;
case '	015537017		 ':echo '	Mantacdang	';break;
case '	015537018		 ':echo '	Nangapugan	';break;
case '	015537020		 ':echo '	San Pedro	';break;
case '	015537021		 ':echo '	Ungib	';break;
case '	015537022		 ':echo '	Poblacion Zone I	';break;
case '	015537023		 ':echo '	Poblacion Zone II	';break;
case '	015537024		 ':echo '	Poblacion Zone III	';break;
case '	015538001		 ':echo '	Alibago	';break;
case '	015538002		 ':echo '	Balingueo	';break;
case '	015538003		 ':echo '	Banaoang	';break;
case '	015538004		 ':echo '	Banzal	';break;
case '	015538005		 ':echo '	Botao	';break;
case '	015538006		 ':echo '	Cablong	';break;
case '	015538007		 ':echo '	Carusocan	';break;
case '	015538008		 ':echo '	Dalongue	';break;
case '	015538009		 ':echo '	Erfe	';break;
case '	015538010		 ':echo '	Gueguesangen	';break;
case '	015538011		 ':echo '	Leet	';break;
case '	015538012		 ':echo '	Malanay	';break;
case '	015538013		 ':echo '	Maningding	';break;
case '	015538014		 ':echo '	Maronong	';break;
case '	015538015		 ':echo '	Maticmatic	';break;
case '	015538016		 ':echo '	Minien East	';break;
case '	015538017		 ':echo '	Minien West	';break;
case '	015538018		 ':echo '	Nilombot	';break;
case '	015538019		 ':echo '	Patayac	';break;
case '	015538020		 ':echo '	Payas	';break;
case '	015538021		 ':echo '	Poblacion Norte	';break;
case '	015538022		 ':echo '	Poblacion Sur	';break;
case '	015538023		 ':echo '	Sapang	';break;
case '	015538024		 ':echo '	Sonquil	';break;
case '	015538025		 ':echo '	Tebag East	';break;
case '	015538026		 ':echo '	Tebag West	';break;
case '	015538027		 ':echo '	Tuliao	';break;
case '	015538028		 ':echo '	Ventinilla	';break;
case '	015538029		 ':echo '	Primicias	';break;
case '	015539001		 ':echo '	Bal-loy	';break;
case '	015539002		 ':echo '	Bantog	';break;
case '	015539003		 ':echo '	Caboluan	';break;
case '	015539004		 ':echo '	Cal-litang	';break;
case '	015539005		 ':echo '	Capandanan	';break;
case '	015539006		 ':echo '	Cauplasan	';break;
case '	015539008		 ':echo '	Dalayap	';break;
case '	015539009		 ':echo '	Libsong	';break;
case '	015539010		 ':echo '	Namagbagan	';break;
case '	015539011		 ':echo '	Paitan	';break;
case '	015539012		 ':echo '	Pataquid	';break;
case '	015539013		 ':echo '	Pilar	';break;
case '	015539014		 ':echo '	Poblacion East	';break;
case '	015539015		 ':echo '	Poblacion West	';break;
case '	015539016		 ':echo '	Pugot	';break;
case '	015539017		 ':echo '	Samon	';break;
case '	015539018		 ':echo '	San Alejandro	';break;
case '	015539020		 ':echo '	San Mariano	';break;
case '	015539021		 ':echo '	San Pablo	';break;
case '	015539022		 ':echo '	San Patricio	';break;
case '	015539023		 ':echo '	San Vicente	';break;
case '	015539024		 ':echo '	Santa Cruz	';break;
case '	015539025		 ':echo '	Sta. Rosa	';break;
case '	015540001		 ':echo '	La Luna	';break;
case '	015540002		 ':echo '	Poblacion East	';break;
case '	015540003		 ':echo '	Poblacion West	';break;
case '	015540004		 ':echo '	Salvacion	';break;
case '	015540005		 ':echo '	San Agustin	';break;
case '	015540006		 ':echo '	San Antonio	';break;
case '	015540007		 ':echo '	San Jose	';break;
case '	015540008		 ':echo '	San Marcos	';break;
case '	015540009		 ':echo '	Santo Domingo	';break;
case '	015540010		 ':echo '	Santo Niño	';break;
case '	015541001		 ':echo '	Agat	';break;
case '	015541002		 ':echo '	Alibeng	';break;
case '	015541003		 ':echo '	Amagbagan	';break;
case '	015541004		 ':echo '	Artacho	';break;
case '	015541005		 ':echo '	Asan Norte	';break;
case '	015541006		 ':echo '	Asan Sur	';break;
case '	015541007		 ':echo '	Bantay Insik	';break;
case '	015541008		 ':echo '	Bila	';break;
case '	015541009		 ':echo '	Binmeckeg	';break;
case '	015541010		 ':echo '	Bulaoen East	';break;
case '	015541011		 ':echo '	Bulaoen West	';break;
case '	015541012		 ':echo '	Cabaritan	';break;
case '	015541013		 ':echo '	Calunetan	';break;
case '	015541014		 ':echo '	Camangaan	';break;
case '	015541015		 ':echo '	Cauringan	';break;
case '	015541016		 ':echo '	Dungon	';break;
case '	015541017		 ':echo '	Esperanza	';break;
case '	015541018		 ':echo '	Killo	';break;
case '	015541019		 ':echo '	Labayug	';break;
case '	01554121		 ':echo '	Paldit	';break;
case '	01554122		 ':echo '	Pindangan	';break;
case '	01554123		 ':echo '	Pinmilapil	';break;
case '	01554124		 ':echo '	Poblacion Central	';break;
case '	01554125		 ':echo '	Poblacion Norte	';break;
case '	01554126		 ':echo '	Poblacion Sur	';break;
case '	01554127		 ':echo '	Sagunto	';break;
case '	01554128		 ':echo '	Inmalog	';break;
case '	01554129		 ':echo '	Tara-tara	';break;
case '	015542001		 ':echo '	Baquioen	';break;
case '	015542002		 ':echo '	Baybay Norte	';break;
case '	015542003		 ':echo '	Baybay Sur	';break;
case '	015542004		 ':echo '	Bolaoen	';break;
case '	015542005		 ':echo '	Cabalitian	';break;
case '	015542006		 ':echo '	Calumbuyan	';break;
case '	015542007		 ':echo '	Camagsingalan	';break;
case '	015542008		 ':echo '	Caoayan	';break;
case '	015542009		 ':echo '	Capantolan	';break;
case '	015542010		 ':echo '	Macaycayawan	';break;
case '	015542011		 ':echo '	Paitan East	';break;
case '	015542012		 ':echo '	Paitan West	';break;
case '	015542013		 ':echo '	Pangascasan	';break;
case '	015542014		 ':echo '	Poblacion	';break;
case '	015542015		 ':echo '	Santo Domingo	';break;
case '	015542016		 ':echo '	Seselangen	';break;
case '	015542018		 ':echo '	Sioasio East	';break;
case '	015542019		 ':echo '	Sioasio West	';break;
case '	015542020		 ':echo '	Victoria	';break;
case '	015543001		 ':echo '	Agno	';break;
case '	015543002		 ':echo '	Amistad	';break;
case '	015543003		 ':echo '	Barangobong	';break;
case '	015543004		 ':echo '	Carriedo	';break;
case '	015543005		 ':echo '	C. Lichauco	';break;
case '	015543006		 ':echo '	Evangelista	';break;
case '	015543007		 ':echo '	Guzon	';break;
case '	015543008		 ':echo '	Lawak	';break;
case '	015543009		 ':echo '	Legaspi	';break;
case '	015543010		 ':echo '	Libertad	';break;
case '	015543012		 ':echo '	Magallanes	';break;
case '	015543013		 ':echo '	Panganiban	';break;
case '	015543014		 ':echo '	Barangay A 	';break;
case '	015543015		 ':echo '	Barangay B 	';break;
case '	015543016		 ':echo '	Barangay C 	';break;
case '	015543017		 ':echo '	Barangay D 	';break;
case '	015543019		 ':echo '	Saleng	';break;
case '	015543020		 ':echo '	Santo Domingo	';break;
case '	015543022		 ':echo '	Toketec	';break;
case '	015543023		 ':echo '	Trenchera	';break;
case '	015543024		 ':echo '	Zamora	';break;
case '	015544001		 ':echo '	Abot Molina	';break;
case '	015544002		 ':echo '	Alo-o	';break;
case '	015544003		 ':echo '	Amaronan	';break;
case '	015544004		 ':echo '	Annam	';break;
case '	015544005		 ':echo '	Bantug	';break;
case '	015544006		 ':echo '	Baracbac	';break;
case '	015544007		 ':echo '	Barat	';break;
case '	015544008		 ':echo '	Buenavista	';break;
case '	015544010		 ':echo '	Cabalitian	';break;
case '	015544011		 ':echo '	Cabaruan	';break;
case '	015544012		 ':echo '	Cabatuan	';break;
case '	015544013		 ':echo '	Cadiz	';break;
case '	015544014		 ':echo '	Calitlitan	';break;
case '	015544015		 ':echo '	Capas	';break;
case '	015544017		 ':echo '	Carosalesan	';break;
case '	015544018		 ':echo '	Casilan	';break;
case '	015544019		 ':echo '	Caurdanetaan	';break;
case '	015544020		 ':echo '	Concepcion	';break;
case '	015544021		 ':echo '	Decreto	';break;
case '	015544022		 ':echo '	Diaz	';break;
case '	015544023		 ':echo '	Diket	';break;
case '	015544024		 ':echo '	Don Justo Abalos	';break;
case '	015544025		 ':echo '	Don Montano	';break;
case '	015544026		 ':echo '	Esperanza	';break;
case '	015544027		 ':echo '	Evangelista	';break;
case '	015544028		 ':echo '	Flores	';break;
case '	015544029		 ':echo '	Fulgosino	';break;
case '	015544030		 ':echo '	Gonzales	';break;
case '	015544031		 ':echo '	La Paz	';break;
case '	015544032		 ':echo '	Labuan	';break;
case '	015544033		 ':echo '	Lauren	';break;
case '	015544034		 ':echo '	Lubong	';break;
case '	015544035		 ':echo '	Luna Weste	';break;
case '	015544036		 ':echo '	Luna Este	';break;
case '	015544037		 ':echo '	Mantacdang	';break;
case '	015544038		 ':echo '	Maseil-seil	';break;
case '	015544039		 ':echo '	Nampalcan	';break;
case '	015544040		 ':echo '	Nancalabasaan	';break;
case '	015544041		 ':echo '	Pangangaan	';break;
case '	015544042		 ':echo '	Papallasen	';break;
case '	015544044		 ':echo '	Pemienta	';break;
case '	015544046		 ':echo '	Poblacion East	';break;
case '	015544047		 ':echo '	Poblacion West	';break;
case '	015544048		 ':echo '	Prado	';break;
case '	015544049		 ':echo '	Resurreccion	';break;
case '	015544050		 ':echo '	Ricos	';break;
case '	015544051		 ':echo '	San Andres	';break;
case '	015544052		 ':echo '	San Juan	';break;
case '	015544053		 ':echo '	San Leon	';break;
case '	015544054		 ':echo '	San Pablo	';break;
case '	015544055		 ':echo '	San Vicente	';break;
case '	015544056		 ':echo '	Santa Maria	';break;
case '	015544057		 ':echo '	Santa Rosa	';break;
case '	015544058		 ':echo '	Sinabaan	';break;
case '	015544059		 ':echo '	Tanggal Sawang	';break;
case '	015544060		 ':echo '	Cabangaran	';break;
case '	015544061		 ':echo '	Carayungan Sur	';break;
case '	015544062		 ':echo '	Del Rosario	';break;
case '	015545001		 ':echo '	Angatel	';break;
case '	015545002		 ':echo '	Balangay	';break;
case '	015545003		 ':echo '	Batancaoa	';break;
case '	015545004		 ':echo '	Baug	';break;
case '	015545005		 ':echo '	Bayaoas	';break;
case '	015545006		 ':echo '	Bituag	';break;
case '	015545007		 ':echo '	Camambugan	';break;
case '	015545008		 ':echo '	Dalanguiring	';break;
case '	015545009		 ':echo '	Duplac	';break;
case '	015545010		 ':echo '	Galarin	';break;
case '	015545011		 ':echo '	Gueteb	';break;
case '	015545012		 ':echo '	Malaca	';break;
case '	015545013		 ':echo '	Malayo	';break;
case '	015545014		 ':echo '	Malibong	';break;
case '	015545015		 ':echo '	Pasibi East	';break;
case '	015545016		 ':echo '	Pasibi West	';break;
case '	015545017		 ':echo '	Pisuac	';break;
case '	015545018		 ':echo '	Poblacion	';break;
case '	015545019		 ':echo '	Real	';break;
case '	015545020		 ':echo '	Salavante	';break;
case '	015545021		 ':echo '	Sawat	';break;
case '	015546001		 ':echo '	Anonas	';break;
case '	015546003		 ':echo '	Bactad East	';break;
case '	015546004		 ':echo '	Dr. Pedro T. Orata	';break;
case '	015546005		 ':echo '	Bayaoas	';break;
case '	015546007		 ':echo '	Bolaoen	';break;
case '	015546008		 ':echo '	Cabaruan	';break;
case '	015546009		 ':echo '	Cabuloan	';break;
case '	015546011		 ':echo '	Camanang	';break;
case '	015546012		 ':echo '	Camantiles	';break;
case '	015546014		 ':echo '	Casantaan	';break;
case '	015546015		 ':echo '	Catablan	';break;
case '	015546016		 ':echo '	Cayambanan	';break;
case '	015546017		 ':echo '	Consolacion	';break;
case '	015546018		 ':echo '	Dilan Paurido	';break;
case '	015546019		 ':echo '	Labit Proper	';break;
case '	015546020		 ':echo '	Labit West	';break;
case '	015546022		 ':echo '	Mabanogbog	';break;
case '	015546023		 ':echo '	Macalong	';break;
case '	015546024		 ':echo '	Nancalobasaan	';break;
case '	015546025		 ':echo '	Nancamaliran East	';break;
case '	015546026		 ':echo '	Nancamaliran West	';break;
case '	015546027		 ':echo '	Nancayasan	';break;
case '	015546028		 ':echo '	Oltama	';break;
case '	015546029		 ':echo '	Palina East	';break;
case '	015546030		 ':echo '	Palina West	';break;
case '	015546031		 ':echo '	Pinmaludpod	';break;
case '	015546032		 ':echo '	Poblacion	';break;
case '	015546033		 ':echo '	San Jose	';break;
case '	015546034		 ':echo '	San Vicente	';break;
case '	015546035		 ':echo '	Santa Lucia	';break;
case '	015546036		 ':echo '	Santo Domingo	';break;
case '	015546037		 ':echo '	Sugcong	';break;
case '	015546038		 ':echo '	Tipuso	';break;
case '	015546039		 ':echo '	Tulong	';break;
case '	015547001		 ':echo '	Amamperez	';break;
case '	015547002		 ':echo '	Bacag	';break;
case '	015547003		 ':echo '	Barangobong	';break;
case '	015547004		 ':echo '	Barraca	';break;
case '	015547005		 ':echo '	Capulaan	';break;
case '	015547006		 ':echo '	Caramutan	';break;
case '	015547007		 ':echo '	La Paz	';break;
case '	015547008		 ':echo '	Labit	';break;
case '	015547009		 ':echo '	Lipay	';break;
case '	015547010		 ':echo '	Lomboy	';break;
case '	015547011		 ':echo '	Piaz	';break;
case '	015547012		 ':echo '	Zone V 	';break;
case '	015547013		 ':echo '	Zone I 	';break;
case '	015547014		 ':echo '	Zone II 	';break;
case '	015547015		 ':echo '	Zone III 	';break;
case '	015547016		 ':echo '	Zone IV 	';break;
case '	015547017		 ':echo '	Puelay	';break;
case '	015547018		 ':echo '	San Blas	';break;
case '	015547019		 ':echo '	San Nicolas	';break;
case '	015547020		 ':echo '	Tombod	';break;
case '	015547021		 ':echo '	Unzad	';break;
case '	015548001		 ':echo '	Anis	';break;
case '	015548002		 ':echo '	Botigue	';break;
case '	015548003		 ':echo '	Caaringayan	';break;
case '	015548004		 ':echo '	Domingo Alarcio	';break;
case '	015548005		 ':echo '	Cabilaoan West	';break;
case '	015548006		 ':echo '	Cabulalaan	';break;
case '	015548007		 ':echo '	Calaoagan	';break;
case '	015548008		 ':echo '	Calmay	';break;
case '	015548009		 ':echo '	Casampagaan	';break;
case '	015548010		 ':echo '	Casanestebanan	';break;
case '	015548011		 ':echo '	Casantiagoan	';break;
case '	015548012		 ':echo '	Inmanduyan	';break;
case '	015548013		 ':echo '	Poblacion	';break;
case '	015548014		 ':echo '	Lebueg	';break;
case '	015548015		 ':echo '	Maraboc	';break;
case '	015548016		 ':echo '	Nanbagatan	';break;
case '	015548017		 ':echo '	Panaga	';break;
case '	015548018		 ':echo '	Talogtog	';break;
case '	015548019		 ':echo '	Turko	';break;
case '	015548020		 ':echo '	Yatyat	';break;
case '	015548021		 ':echo '	Balligi	';break;
case '	015548022		 ':echo '	Banuar	';break;
case '	0200901001		 ':echo '	Ihubok II	';break;
case '	0200901002		 ':echo '	Ihubok I	';break;
case '	0200901003		 ':echo '	San Antonio	';break;
case '	0200901004		 ':echo '	San Joaquin	';break;
case '	0200901005		 ':echo '	Chanarian	';break;
case '	0200901006		 ':echo '	Kayhuvokan	';break;
case '	0200902006		 ':echo '	Raele	';break;
case '	0200902007		 ':echo '	San Rafael	';break;
case '	0200902008		 ':echo '	Santa Lucia	';break;
case '	0200902009		 ':echo '	Santa Maria	';break;
case '	0200902010		 ':echo '	Santa Rosa	';break;
case '	0200903001		 ':echo '	Radiwan	';break;
case '	0200903002		 ':echo '	Salagao	';break;
case '	0200903003		 ':echo '	San Vicente	';break;
case '	0200903004		 ':echo '	Tuhel 	';break;
case '	0200904001		 ':echo '	Hañib	';break;
case '	0200904002		 ':echo '	Kaumbakan	';break;
case '	0200904003		 ':echo '	Panatayan	';break;
case '	0200904004		 ':echo '	Uvoy 	';break;
case '	0200905001		 ':echo '	Chavayan	';break;
case '	0200905002		 ':echo '	Malakdang 	';break;
case '	0200905003		 ':echo '	Nakanmuan	';break;
case '	0200905004		 ':echo '	Savidug	';break;
case '	0200905005		 ':echo '	Sinakan 	';break;
case '	0200905006		 ':echo '	Sumnanga	';break;
case '	0200906001		 ':echo '	Kayvaluganan 	';break;
case '	0200906002		 ':echo '	Imnajbu	';break;
case '	0200906003		 ':echo '	Itbud	';break;
case '	0200906004		 ':echo '	Kayuganan 	';break;
case '	021501001		 ':echo '	Alinunu	';break;
case '	021501002		 ':echo '	Bagu	';break;
case '	021501003		 ':echo '	Banguian	';break;
case '	021501004		 ':echo '	Calog Norte	';break;
case '	021501005		 ':echo '	Calog Sur	';break;
case '	021501006		 ':echo '	Canayun	';break;
case '	021501007		 ':echo '	Centro 	';break;
case '	021501008		 ':echo '	Dana-Ili	';break;
case '	021501009		 ':echo '	Guiddam	';break;
case '	021501010		 ':echo '	Libertad	';break;
case '	021501011		 ':echo '	Lucban	';break;
case '	021501012		 ':echo '	Pinili	';break;
case '	021501013		 ':echo '	Santa Filomena	';break;
case '	021501014		 ':echo '	Santo Tomas	';break;
case '	021501015		 ':echo '	Siguiran	';break;
case '	021501016		 ':echo '	Simayung	';break;
case '	021501017		 ':echo '	Sirit	';break;
case '	021501018		 ':echo '	San Agustin	';break;
case '	021501019		 ':echo '	San Julian	';break;
case '	02150120		 ':echo '	Santa Rosa	';break;
case '	021502001		 ':echo '	Abbeg	';break;
case '	021502002		 ':echo '	Afusing Bato	';break;
case '	021502003		 ':echo '	Afusing Daga	';break;
case '	021502004		 ':echo '	Agani	';break;
case '	021502005		 ':echo '	Baculod	';break;
case '	021502006		 ':echo '	Baybayog	';break;
case '	021502007		 ':echo '	Cabuluan	';break;
case '	021502008		 ':echo '	Calantac	';break;
case '	021502009		 ':echo '	Carallangan	';break;
case '	021502010		 ':echo '	Centro Norte 	';break;
case '	021502011		 ':echo '	Centro Sur 	';break;
case '	021502012		 ':echo '	Dalaoig	';break;
case '	021502013		 ':echo '	Damurog	';break;
case '	021502014		 ':echo '	Jurisdiction	';break;
case '	021502015		 ':echo '	Malalatan	';break;
case '	021502016		 ':echo '	Maraburab	';break;
case '	021502017		 ':echo '	Masin	';break;
case '	021502018		 ':echo '	Pagbangkeruan	';break;
case '	021502019		 ':echo '	Pared	';break;
case '	021502020		 ':echo '	Piggatan	';break;
case '	021502021		 ':echo '	Pinopoc	';break;
case '	021502022		 ':echo '	Pussian	';break;
case '	021502023		 ':echo '	San Esteban	';break;
case '	021502024		 ':echo '	Tamban	';break;
case '	021502025		 ':echo '	Tupang	';break;
case '	021503001		 ':echo '	Bessang	';break;
case '	021503002		 ':echo '	Binobongan	';break;
case '	021503003		 ':echo '	Bulo	';break;
case '	021503004		 ':echo '	Burot	';break;
case '	021503005		 ':echo '	Capagaran	';break;
case '	021503006		 ':echo '	Capalutan	';break;
case '	021503007		 ':echo '	Capanickian Norte	';break;
case '	021503008		 ':echo '	Capanickian Sur	';break;
case '	021503009		 ':echo '	Cataratan	';break;
case '	021503010		 ':echo '	Centro East 	';break;
case '	021503011		 ':echo '	Centro West 	';break;
case '	021503012		 ':echo '	Daan-Ili	';break;
case '	021503013		 ':echo '	Dagupan	';break;
case '	021503014		 ':echo '	Dalayap	';break;
case '	021503015		 ':echo '	Gagaddangan	';break;
case '	021503016		 ':echo '	Iringan	';break;
case '	021503017		 ':echo '	Labben	';break;
case '	021503018		 ':echo '	Maluyo	';break;
case '	021503019		 ':echo '	Mapurao	';break;
case '	021503020		 ':echo '	Matucay	';break;
case '	021503021		 ':echo '	Nagattatan	';break;
case '	021503022		 ':echo '	Pacac	';break;
case '	021503023		 ':echo '	San Juan	';break;
case '	021503024		 ':echo '	Silagan	';break;
case '	021503025		 ':echo '	Tamboli	';break;
case '	021503026		 ':echo '	Tubel	';break;
case '	021503027		 ':echo '	Utan	';break;
case '	021504001		 ':echo '	Abolo	';break;
case '	021504002		 ':echo '	Agguirit	';break;
case '	021504003		 ':echo '	Alituntung	';break;
case '	021504004		 ':echo '	Annabuculan	';break;
case '	021504005		 ':echo '	Annafatan	';break;
case '	021504006		 ':echo '	Anquiray	';break;
case '	021504007		 ':echo '	Babayuan	';break;
case '	021504008		 ':echo '	Baccuit	';break;
case '	021504009		 ':echo '	Bacring	';break;
case '	021504010		 ':echo '	Baculud	';break;
case '	021504011		 ':echo '	Balauini	';break;
case '	021504012		 ':echo '	Bauan	';break;
case '	021504013		 ':echo '	Bayabat	';break;
case '	021504014		 ':echo '	Calamagui	';break;
case '	021504015		 ':echo '	Calintaan	';break;
case '	021504016		 ':echo '	Caratacat	';break;
case '	021504017		 ':echo '	Casingsingan Norte	';break;
case '	021504018		 ':echo '	Casingsingan Sur	';break;
case '	021504019		 ':echo '	Catarauan	';break;
case '	021504020		 ':echo '	Centro	';break;
case '	021504021		 ':echo '	Concepcion	';break;
case '	021504022		 ':echo '	Cordova	';break;
case '	021504023		 ':echo '	Dadda	';break;
case '	021504024		 ':echo '	Dafunganay	';break;
case '	021504025		 ':echo '	Dugayung	';break;
case '	021504026		 ':echo '	Estefania	';break;
case '	021504027		 ':echo '	Gabut	';break;
case '	021504028		 ':echo '	Gangauan	';break;
case '	021504029		 ':echo '	Goran	';break;
case '	021504030		 ':echo '	Jurisdiccion	';break;
case '	021504031		 ':echo '	La Suerte	';break;
case '	021504032		 ':echo '	Logung	';break;
case '	021504033		 ':echo '	Magogod	';break;
case '	021504034		 ':echo '	Manalo	';break;
case '	021504035		 ':echo '	Marobbob	';break;
case '	021504036		 ':echo '	Masical	';break;
case '	021504037		 ':echo '	Monte Alegre	';break;
case '	021504038		 ':echo '	Nabbialan	';break;
case '	021504039		 ':echo '	Nagsabaran	';break;
case '	021504040		 ':echo '	Nangalasauan	';break;
case '	021504041		 ':echo '	Nanuccauan	';break;
case '	021504042		 ':echo '	Pacac-Grande	';break;
case '	021504043		 ':echo '	Pacac-Pequeño	';break;
case '	021504044		 ':echo '	Palacu	';break;
case '	021504045		 ':echo '	Palayag	';break;
case '	021504046		 ':echo '	Tana	';break;
case '	021504047		 ':echo '	Unag	';break;
case '	021505001		 ':echo '	Backiling	';break;
case '	021505002		 ':echo '	Bangag	';break;
case '	021505003		 ':echo '	Binalan	';break;
case '	021505004		 ':echo '	Bisagu	';break;
case '	021505005		 ':echo '	Centro 1 	';break;
case '	021505006		 ':echo '	Centro 2 	';break;
case '	021505007		 ':echo '	Centro 3 	';break;
case '	021505008		 ':echo '	Centro 4 	';break;
case '	021505009		 ':echo '	Centro 5 	';break;
case '	021505010		 ':echo '	Centro 6 	';break;
case '	021505011		 ':echo '	Centro 7 	';break;
case '	021505012		 ':echo '	Centro 8 	';break;
case '	021505013		 ':echo '	Centro 9 	';break;
case '	021505014		 ':echo '	Centro 10 	';break;
case '	021505015		 ':echo '	Centro 11 	';break;
case '	021505016		 ':echo '	Centro 12 	';break;
case '	021505017		 ':echo '	Centro 13 	';break;
case '	021505018		 ':echo '	Centro 14 	';break;
case '	021505019		 ':echo '	Bukig	';break;
case '	021505020		 ':echo '	Bulala Norte	';break;
case '	021505021		 ':echo '	Bulala Sur	';break;
case '	021505022		 ':echo '	Caagaman	';break;
case '	021505023		 ':echo '	Centro 15 	';break;
case '	021505024		 ':echo '	Dodan	';break;
case '	021505025		 ':echo '	Fuga Island	';break;
case '	021505026		 ':echo '	Gaddang	';break;
case '	021505027		 ':echo '	Linao	';break;
case '	021505028		 ':echo '	Mabanguc	';break;
case '	021505029		 ':echo '	Macanaya	';break;
case '	021505030		 ':echo '	Maura	';break;
case '	021505031		 ':echo '	Minanga	';break;
case '	021505032		 ':echo '	Navagan	';break;
case '	021505033		 ':echo '	Paddaya	';break;
case '	021505034		 ':echo '	Paruddun Norte	';break;
case '	021505035		 ':echo '	Paruddun Sur	';break;
case '	021505036		 ':echo '	Plaza	';break;
case '	021505037		 ':echo '	Punta	';break;
case '	021505038		 ':echo '	San Antonio	';break;
case '	021505039		 ':echo '	Tallungan	';break;
case '	021505040		 ':echo '	Toran	';break;
case '	021505041		 ':echo '	Sanja	';break;
case '	021505042		 ':echo '	Zinarag	';break;
case '	021506001		 ':echo '	Adaoag	';break;
case '	021506002		 ':echo '	Agaman	';break;
case '	021506003		 ':echo '	Alba	';break;
case '	021506004		 ':echo '	Annayatan	';break;
case '	021506005		 ':echo '	Asassi	';break;
case '	021506006		 ':echo '	Asinga-Via	';break;
case '	021506007		 ':echo '	Awallan	';break;
case '	021506008		 ':echo '	Bacagan	';break;
case '	021506009		 ':echo '	Bagunot	';break;
case '	021506011		 ':echo '	Barsat East	';break;
case '	021506012		 ':echo '	Barsat West	';break;
case '	021506013		 ':echo '	Bitag Grande	';break;
case '	021506014		 ':echo '	Bitag Pequeño	';break;
case '	021506015		 ':echo '	Bunugan	';break;
case '	021506016		 ':echo '	Canagatan	';break;
case '	021506017		 ':echo '	Carupian	';break;
case '	021506018		 ':echo '	Catugay	';break;
case '	021506019		 ':echo '	Poblacion	';break;
case '	021506020		 ':echo '	Dabbac Grande	';break;
case '	021506021		 ':echo '	Dalin	';break;
case '	021506022		 ':echo '	Dalla	';break;
case '	021506023		 ':echo '	Hacienda Intal	';break;
case '	021506024		 ':echo '	Ibulo	';break;
case '	021506025		 ':echo '	Imurong	';break;
case '	021506026		 ':echo '	J. Pallagao	';break;
case '	021506027		 ':echo '	Lasilat	';break;
case '	021506028		 ':echo '	Masical	';break;
case '	021506029		 ':echo '	Mocag	';break;
case '	021506030		 ':echo '	Nangalinan	';break;
case '	021506031		 ':echo '	Remus	';break;
case '	021506032		 ':echo '	San Antonio	';break;
case '	021506033		 ':echo '	San Francisco	';break;
case '	021506034		 ':echo '	San Isidro	';break;
case '	021506035		 ':echo '	San Jose	';break;
case '	021506036		 ':echo '	San Miguel	';break;
case '	021506037		 ':echo '	San Vicente	';break;
case '	021506038		 ':echo '	Santa Margarita	';break;
case '	021506039		 ':echo '	Santor	';break;
case '	021506040		 ':echo '	Taguing	';break;
case '	021506041		 ':echo '	Taguntungan	';break;
case '	021506042		 ':echo '	Tallang	';break;
case '	021506043		 ':echo '	Temblique	';break;
case '	021506044		 ':echo '	Taytay	';break;
case '	021506045		 ':echo '	Tungel	';break;
case '	021506046		 ':echo '	Mabini	';break;
case '	021506047		 ':echo '	Agaman Norte	';break;
case '	021506048		 ':echo '	Agaman Sur	';break;
case '	021506049		 ':echo '	C. Verzosa	';break;
case '	021507001		 ':echo '	Ammubuan	';break;
case '	021507002		 ':echo '	Baran	';break;
case '	021507003		 ':echo '	Cabaritan East	';break;
case '	021507004		 ':echo '	Cabaritan West	';break;
case '	021507005		 ':echo '	Cabayu	';break;
case '	021507006		 ':echo '	Cabuluan East	';break;
case '	021507007		 ':echo '	Cabuluan West	';break;
case '	021507008		 ':echo '	Centro East 	';break;
case '	021507009		 ':echo '	Centro West 	';break;
case '	021507010		 ':echo '	Fugu	';break;
case '	021507012		 ':echo '	Mabuttal East	';break;
case '	021507013		 ':echo '	Mabuttal West	';break;
case '	021507014		 ':echo '	Nararagan	';break;
case '	021507015		 ':echo '	Palloc	';break;
case '	021507017		 ':echo '	Payagan East	';break;
case '	021507018		 ':echo '	Payagan West	';break;
case '	021507019		 ':echo '	San Juan	';break;
case '	021507020		 ':echo '	Santa Cruz	';break;
case '	021507021		 ':echo '	Zitanga	';break;
case '	021508001		 ':echo '	Ballang	';break;
case '	021508002		 ':echo '	Balza	';break;
case '	021508003		 ':echo '	Cabaritan	';break;
case '	021508004		 ':echo '	Calamegatan	';break;
case '	021508005		 ':echo '	Centro 	';break;
case '	021508006		 ':echo '	Centro West	';break;
case '	021508007		 ':echo '	Dalaya	';break;
case '	021508008		 ':echo '	Fula	';break;
case '	021508009		 ':echo '	Leron	';break;
case '	021508010		 ':echo '	M. Antiporda	';break;
case '	021508011		 ':echo '	Maddalero	';break;
case '	021508012		 ':echo '	Mala Este	';break;
case '	021508013		 ':echo '	Mala Weste	';break;
case '	021508014		 ':echo '	Minanga Este	';break;
case '	021508015		 ':echo '	Paddaya Este	';break;
case '	021508016		 ':echo '	Pattao	';break;
case '	021508018		 ':echo '	Quinawegan	';break;
case '	021508019		 ':echo '	Remebella	';break;
case '	021508020		 ':echo '	San Isidro	';break;
case '	021508021		 ':echo '	Santa Isabel	';break;
case '	021508022		 ':echo '	Santa Maria	';break;
case '	021508023		 ':echo '	Tabbac	';break;
case '	021508024		 ':echo '	Villa Cielo	';break;
case '	021508025		 ':echo '	San Lorenzo	';break;
case '	021508026		 ':echo '	Minanga Weste	';break;
case '	021508027		 ':echo '	Paddaya Weste	';break;
case '	021508028		 ':echo '	San Juan	';break;
case '	021508029		 ':echo '	San Vicente	';break;
case '	021508030		 ':echo '	Villa Gracia	';break;
case '	021508031		 ':echo '	Villa Leonora	';break;
case '	021509001		 ':echo '	Cabudadan	';break;
case '	021509002		 ':echo '	Balatubat	';break;
case '	021509003		 ':echo '	Dadao	';break;
case '	021509004		 ':echo '	Dibay	';break;
case '	021509005		 ':echo '	Dilam	';break;
case '	021509006		 ':echo '	Magsidel	';break;
case '	021509007		 ':echo '	Naguilian	';break;
case '	021509008		 ':echo '	Poblacion	';break;
case '	021509009		 ':echo '	Babuyan Claro	';break;
case '	021509010		 ':echo '	Centro II	';break;
case '	021509011		 ':echo '	Dalupiri	';break;
case '	021509012		 ':echo '	Minabel	';break;
case '	021510001		 ':echo '	Abagao	';break;
case '	021510002		 ':echo '	Afunan Cabayu	';break;
case '	021510003		 ':echo '	Agusi	';break;
case '	021510004		 ':echo '	Alilinu	';break;
case '	021510005		 ':echo '	Baggao	';break;
case '	021510006		 ':echo '	Bantay	';break;
case '	021510007		 ':echo '	Bulala	';break;
case '	021510009		 ':echo '	Casili Norte	';break;
case '	021510010		 ':echo '	Catotoran Norte	';break;
case '	021510011		 ':echo '	Centro Norte 	';break;
case '	021510012		 ':echo '	Centro Sur 	';break;
case '	021510013		 ':echo '	Cullit	';break;
case '	021510014		 ':echo '	Dacalla-Fugu	';break;
case '	021510015		 ':echo '	Dammang Norte	';break;
case '	021510016		 ':echo '	Dugo	';break;
case '	021510017		 ':echo '	Fusina	';break;
case '	021510018		 ':echo '	Gang-ngo	';break;
case '	021510019		 ':echo '	Jurisdiccion	';break;
case '	021510020		 ':echo '	Luec	';break;
case '	021510021		 ':echo '	Minanga	';break;
case '	021510022		 ':echo '	Paragat	';break;
case '	021510023		 ':echo '	Tagum	';break;
case '	021510024		 ':echo '	Tulutuging	';break;
case '	021510025		 ':echo '	Ziminila	';break;
case '	021510026		 ':echo '	Casili Sur	';break;
case '	021510027		 ':echo '	Catotoran Sur	';break;
case '	021510028		 ':echo '	Dammang Sur	';break;
case '	021510029		 ':echo '	Sapping	';break;
case '	021511001		 ':echo '	Alimoan	';break;
case '	021511002		 ':echo '	Bacsay Cataraoan Norte	';break;
case '	021511003		 ':echo '	Bacsay Mapulapula	';break;
case '	021511004		 ':echo '	Bilibigao	';break;
case '	021511005		 ':echo '	Buenavista	';break;
case '	021511006		 ':echo '	Cadcadir East	';break;
case '	021511007		 ':echo '	Capannikian	';break;
case '	021511008		 ':echo '	Centro I 	';break;
case '	021511009		 ':echo '	Centro II 	';break;
case '	021511010		 ':echo '	Culao	';break;
case '	021511011		 ':echo '	Dibalio	';break;
case '	021511012		 ':echo '	Kilkiling	';break;
case '	021511013		 ':echo '	Lablabig	';break;
case '	021511014		 ':echo '	Luzon	';break;
case '	021511015		 ':echo '	Mabnang	';break;
case '	021511016		 ':echo '	Magdalena	';break;
case '	021511017		 ':echo '	Centro VII	';break;
case '	021511018		 ':echo '	Malilitao	';break;
case '	021511019		 ':echo '	Centro VI	';break;
case '	02151120		 ':echo '	Nagsabaran	';break;
case '	02151121		 ':echo '	Centro IV	';break;
case '	02151122		 ':echo '	Pata East	';break;
case '	02151123		 ':echo '	Pinas	';break;
case '	02151124		 ':echo '	Santiago	';break;
case '	02151125		 ':echo '	Sto. Tomas	';break;
case '	02151126		 ':echo '	Sta. Maria	';break;
case '	02151127		 ':echo '	Tabbugan	';break;
case '	02151128		 ':echo '	Taggat Norte	';break;
case '	02151129		 ':echo '	Union	';break;
case '	02151130		 ':echo '	Bacsay Cataraoan Sur	';break;
case '	02151131		 ':echo '	Cadcadir West	';break;
case '	02151132		 ':echo '	Camalaggoan/D Leaño	';break;
case '	02151133		 ':echo '	Centro III	';break;
case '	02151134		 ':echo '	Centro V	';break;
case '	02151135		 ':echo '	Centro VIII	';break;
case '	02151136		 ':echo '	Pata West	';break;
case '	02151137		 ':echo '	San Antonio	';break;
case '	02151138		 ':echo '	San Isidro	';break;
case '	02151139		 ':echo '	San Vicente	';break;
case '	021511040		 ':echo '	Sto. Niño	';break;
case '	021511041		 ':echo '	Taggat Sur	';break;
case '	021512001		 ':echo '	Alibago	';break;
case '	021512002		 ':echo '	Barangay I 	';break;
case '	021512003		 ':echo '	Barangay II 	';break;
case '	021512006		 ':echo '	Barangay III	';break;
case '	021512007		 ':echo '	Divisoria	';break;
case '	021512008		 ':echo '	Inga	';break;
case '	021512009		 ':echo '	Lanna	';break;
case '	021512010		 ':echo '	Lemu Norte	';break;
case '	021512011		 ':echo '	Liwan Norte	';break;
case '	021512012		 ':echo '	Liwan Sur	';break;
case '	021512013		 ':echo '	Maddarulug Norte	';break;
case '	021512014		 ':echo '	Magalalag East	';break;
case '	021512015		 ':echo '	Maracuru	';break;
case '	021512019		 ':echo '	Barangay IV 	';break;
case '	021512020		 ':echo '	Roma Norte	';break;
case '	021512021		 ':echo '	Barangay III-A	';break;
case '	021512022		 ':echo '	Batu	';break;
case '	021512023		 ':echo '	Lemu Sur	';break;
case '	021512024		 ':echo '	Maddarulug Sur	';break;
case '	021512025		 ':echo '	Magalalag West	';break;
case '	021512026		 ':echo '	Roma Sur	';break;
case '	021512027		 ':echo '	San Antonio	';break;
case '	021513001		 ':echo '	Abra	';break;
case '	021513005		 ':echo '	Aguiguican	';break;
case '	021513006		 ':echo '	Bangatan Ngagan	';break;
case '	021513007		 ':echo '	Baracaoit	';break;
case '	021513008		 ':echo '	Baraoidan	';break;
case '	021513009		 ':echo '	Barbarit	';break;
case '	021513010		 ':echo '	Basao	';break;
case '	021513011		 ':echo '	Cabayu	';break;
case '	021513012		 ':echo '	Calaoagan Bassit	';break;
case '	021513013		 ':echo '	Calaoagan Dackel	';break;
case '	021513014		 ':echo '	Capiddigan	';break;
case '	021513015		 ':echo '	Capissayan Norte	';break;
case '	021513016		 ':echo '	Capissayan Sur	';break;
case '	021513018		 ':echo '	Casicallan Sur	';break;
case '	021513019		 ':echo '	Casicallan Norte	';break;
case '	021513020		 ':echo '	Centro Norte 	';break;
case '	021513021		 ':echo '	Centro Sur 	';break;
case '	021513022		 ':echo '	Cullit	';break;
case '	021513023		 ':echo '	Cumao	';break;
case '	021513024		 ':echo '	Cunig	';break;
case '	021513025		 ':echo '	Dummun	';break;
case '	021513026		 ':echo '	Fugu	';break;
case '	021513027		 ':echo '	Ganzano	';break;
case '	021513028		 ':echo '	Guising	';break;
case '	021513029		 ':echo '	Langgan	';break;
case '	021513030		 ':echo '	Lapogan	';break;
case '	021513031		 ':echo '	L. Adviento	';break;
case '	021513033		 ':echo '	Mabuno	';break;
case '	021513035		 ':echo '	Nabaccayan	';break;
case '	021513036		 ':echo '	Naddungan	';break;
case '	021513037		 ':echo '	Nagatutuan	';break;
case '	021513038		 ':echo '	Nassiping	';break;
case '	021513039		 ':echo '	Newagac	';break;
case '	021513040		 ':echo '	Palagao Norte	';break;
case '	021513041		 ':echo '	Palagao Sur	';break;
case '	021513042		 ':echo '	Piña Este	';break;
case '	021513043		 ':echo '	Piña Weste	';break;
case '	021513044		 ':echo '	San Vicente	';break;
case '	021513045		 ':echo '	Santa Maria	';break;
case '	021513046		 ':echo '	Sidem	';break;
case '	021513047		 ':echo '	Sta. Ana	';break;
case '	021513048		 ':echo '	Tagumay	';break;
case '	021513049		 ':echo '	Takiki	';break;
case '	021513050		 ':echo '	Taligan	';break;
case '	021513051		 ':echo '	Tanglagan	';break;
case '	021513052		 ':echo '	T. Elizaga	';break;
case '	021513053		 ':echo '	Tubungan Este	';break;
case '	021513054		 ':echo '	Tubungan Weste	';break;
case '	021513056		 ':echo '	Bolos Point	';break;
case '	021513057		 ':echo '	San Carlos	';break;
case '	021514001		 ':echo '	Amunitan	';break;
case '	021514002		 ':echo '	Batangan	';break;
case '	021514003		 ':echo '	Baua	';break;
case '	021514004		 ':echo '	Cabanbanan Norte	';break;
case '	021514005		 ':echo '	Cabanbanan Sur	';break;
case '	021514006		 ':echo '	Cabiraoan	';break;
case '	021514007		 ':echo '	Callao	';break;
case '	021514008		 ':echo '	Calayan	';break;
case '	021514009		 ':echo '	Caroan	';break;
case '	021514010		 ':echo '	Casitan	';break;
case '	021514011		 ':echo '	Flourishing 	';break;
case '	021514012		 ':echo '	Ipil	';break;
case '	021514013		 ':echo '	Isca	';break;
case '	021514014		 ':echo '	Magrafil	';break;
case '	021514015		 ':echo '	Minanga	';break;
case '	021514016		 ':echo '	Rebecca	';break;
case '	021514017		 ':echo '	Paradise 	';break;
case '	021514018		 ':echo '	Pateng	';break;
case '	021514019		 ':echo '	Progressive 	';break;
case '	021514020		 ':echo '	San Jose	';break;
case '	021514021		 ':echo '	Santa Clara	';break;
case '	021514022		 ':echo '	Santa Cruz	';break;
case '	021514023		 ':echo '	Santa Maria	';break;
case '	021514024		 ':echo '	Smart 	';break;
case '	021514025		 ':echo '	Tapel	';break;
case '	021515001		 ':echo '	Ajat 	';break;
case '	021515002		 ':echo '	Atulu	';break;
case '	021515003		 ':echo '	Baculud	';break;
case '	021515004		 ':echo '	Bayo	';break;
case '	021515005		 ':echo '	Campo	';break;
case '	021515006		 ':echo '	San Esteban	';break;
case '	021515007		 ':echo '	Dumpao	';break;
case '	021515009		 ':echo '	Gammad	';break;
case '	021515010		 ':echo '	Santa Teresa	';break;
case '	021515011		 ':echo '	Garab	';break;
case '	021515013		 ':echo '	Malabbac	';break;
case '	021515014		 ':echo '	Manaoag	';break;
case '	021515015		 ':echo '	Minanga Norte	';break;
case '	021515016		 ':echo '	Minanga Sur	';break;
case '	021515017		 ':echo '	Nattanzan 	';break;
case '	021515018		 ':echo '	Redondo	';break;
case '	021515019		 ':echo '	Salamague	';break;
case '	021515020		 ':echo '	San Isidro	';break;
case '	021515021		 ':echo '	San Lorenzo	';break;
case '	021515022		 ':echo '	Santa Barbara	';break;
case '	021515023		 ':echo '	Santa Rosa	';break;
case '	021515024		 ':echo '	Santiago	';break;
case '	021515025		 ':echo '	San Vicente	';break;
case '	021516001		 ':echo '	Abagao	';break;
case '	021516002		 ':echo '	Alaguia	';break;
case '	021516003		 ':echo '	Bagumbayan	';break;
case '	021516004		 ':echo '	Bangag	';break;
case '	021516005		 ':echo '	Bical	';break;
case '	021516006		 ':echo '	Bicud	';break;
case '	021516007		 ':echo '	Binag	';break;
case '	021516008		 ':echo '	Cabayabasan	';break;
case '	021516009		 ':echo '	Cagoran	';break;
case '	021516010		 ':echo '	Cambong	';break;
case '	021516011		 ':echo '	Catayauan	';break;
case '	021516012		 ':echo '	Catugan	';break;
case '	021516013		 ':echo '	Centro 	';break;
case '	021516014		 ':echo '	Cullit	';break;
case '	021516015		 ':echo '	Dagupan	';break;
case '	021516016		 ':echo '	Dalaya	';break;
case '	021516017		 ':echo '	Fabrica	';break;
case '	021516018		 ':echo '	Fusina	';break;
case '	021516019		 ':echo '	Jurisdiction	';break;
case '	021516020		 ':echo '	Lalafugan	';break;
case '	021516021		 ':echo '	Logac	';break;
case '	021516022		 ':echo '	Magallungon (Sta. Teresa)	';break;
case '	021516023		 ':echo '	Magapit	';break;
case '	021516024		 ':echo '	Malanao	';break;
case '	021516025		 ':echo '	Maxingal	';break;
case '	021516026		 ':echo '	Naguilian	';break;
case '	021516027		 ':echo '	Paranum	';break;
case '	021516028		 ':echo '	Rosario	';break;
case '	021516029		 ':echo '	San Antonio	';break;
case '	021516030		 ':echo '	San Jose	';break;
case '	021516031		 ':echo '	San Juan	';break;
case '	021516032		 ':echo '	San Lorenzo	';break;
case '	021516033		 ':echo '	San Mariano	';break;
case '	021516034		 ':echo '	Sta. Maria	';break;
case '	021516035		 ':echo '	Tucalana	';break;
case '	021517001		 ':echo '	Aggunetan	';break;
case '	021517002		 ':echo '	Alannay	';break;
case '	021517003		 ':echo '	Battalan	';break;
case '	021517005		 ':echo '	Calapangan Norte	';break;
case '	021517006		 ':echo '	Calapangan Sur	';break;
case '	021517007		 ':echo '	Callao Norte	';break;
case '	021517008		 ':echo '	Callao Sur	';break;
case '	021517009		 ':echo '	Cataliganan	';break;
case '	021517010		 ':echo '	Finugo Norte	';break;
case '	021517012		 ':echo '	Gabun	';break;
case '	021517013		 ':echo '	Ignacio Jurado	';break;
case '	021517014		 ':echo '	Magsaysay	';break;
case '	021517015		 ':echo '	Malinta	';break;
case '	021517016		 ':echo '	Minanga Sur	';break;
case '	021517017		 ':echo '	Minanga Norte	';break;
case '	021517019		 ':echo '	Nicolas Agatep	';break;
case '	021517020		 ':echo '	Peru	';break;
case '	021517021		 ':echo '	Centro I 	';break;
case '	021517022		 ':echo '	San Pedro	';break;
case '	021517023		 ':echo '	Sicalao	';break;
case '	021517024		 ':echo '	Tagao	';break;
case '	021517025		 ':echo '	Tucalan Passing	';break;
case '	021517026		 ':echo '	Viga	';break;
case '	021517027		 ':echo '	Cabatacan East	';break;
case '	021517028		 ':echo '	Cabatacan West	';break;
case '	021517029		 ':echo '	Nabannagan East	';break;
case '	021517030		 ':echo '	Nabannagan West	';break;
case '	021517031		 ':echo '	Centro II 	';break;
case '	021517032		 ':echo '	Centro III 	';break;
case '	021517033		 ':echo '	New Orlins	';break;
case '	021518001		 ':echo '	Abanqueruan	';break;
case '	021518002		 ':echo '	Allasitan	';break;
case '	021518003		 ':echo '	Bagu	';break;
case '	021518004		 ':echo '	Balingit	';break;
case '	021518005		 ':echo '	Bidduang	';break;
case '	021518006		 ':echo '	Cabaggan	';break;
case '	021518007		 ':echo '	Capalalian	';break;
case '	021518008		 ':echo '	Casitan	';break;
case '	021518009		 ':echo '	Centro 	';break;
case '	021518010		 ':echo '	Curva	';break;
case '	021518011		 ':echo '	Gattu	';break;
case '	021518012		 ':echo '	Masi	';break;
case '	021518013		 ':echo '	Nagattatan	';break;
case '	021518014		 ':echo '	Nagtupacan	';break;
case '	021518015		 ':echo '	San Juan	';break;
case '	021518016		 ':echo '	Santa Cruz	';break;
case '	021518017		 ':echo '	Tabba	';break;
case '	021518018		 ':echo '	Tupanna	';break;
case '	021519001		 ':echo '	Aggugaddan	';break;
case '	021519002		 ':echo '	Alimannao	';break;
case '	021519003		 ':echo '	Baliuag	';break;
case '	021519004		 ':echo '	Bical	';break;
case '	021519005		 ':echo '	Bugatay	';break;
case '	021519006		 ':echo '	Buyun	';break;
case '	021519007		 ':echo '	Cabasan	';break;
case '	021519008		 ':echo '	Cabbo	';break;
case '	021519009		 ':echo '	Callao	';break;
case '	021519010		 ':echo '	Camasi	';break;
case '	021519011		 ':echo '	Centro 	';break;
case '	021519012		 ':echo '	Dodan	';break;
case '	021519013		 ':echo '	Lapi	';break;
case '	021519015		 ':echo '	Malibabag	';break;
case '	021519016		 ':echo '	Manga	';break;
case '	021519017		 ':echo '	Minanga	';break;
case '	021519018		 ':echo '	Nabbabalayan	';break;
case '	021519019		 ':echo '	Nanguilattan	';break;
case '	021519020		 ':echo '	Nannarian	';break;
case '	021519021		 ':echo '	Parabba	';break;
case '	021519022		 ':echo '	Patagueleg	';break;
case '	021519023		 ':echo '	Quibal	';break;
case '	021519024		 ':echo '	San Roque	';break;
case '	021519025		 ':echo '	Sisim	';break;
case '	021520001		 ':echo '	Apayao	';break;
case '	021520002		 ':echo '	Aquib	';break;
case '	021520003		 ':echo '	Dugayung	';break;
case '	021520004		 ':echo '	Gumarueng	';break;
case '	021520005		 ':echo '	Macapil	';break;
case '	021520006		 ':echo '	Maguilling	';break;
case '	021520007		 ':echo '	Minanga	';break;
case '	021520008		 ':echo '	Poblacion I	';break;
case '	021520011		 ':echo '	Santa Barbara	';break;
case '	021520012		 ':echo '	Santo Domingo	';break;
case '	021520013		 ':echo '	Sicatna	';break;
case '	021520014		 ':echo '	Villa Rey	';break;
case '	021520015		 ':echo '	Warat	';break;
case '	021520016		 ':echo '	Baung	';break;
case '	021520017		 ':echo '	Calaoagan	';break;
case '	021520018		 ':echo '	Catarauan	';break;
case '	021520019		 ':echo '	Poblacion II	';break;
case '	021520020		 ':echo '	Villa Reyno	';break;
case '	021521001		 ':echo '	Anagguan	';break;
case '	021521002		 ':echo '	Anurturu	';break;
case '	021521003		 ':echo '	Anungu	';break;
case '	021521004		 ':echo '	Baluncanag	';break;
case '	021521005		 ':echo '	Batu	';break;
case '	021521006		 ':echo '	Cambabangan	';break;
case '	021521007		 ':echo '	Capaccuan	';break;
case '	021521008		 ':echo '	Dungan	';break;
case '	021521009		 ':echo '	Duyun	';break;
case '	021521010		 ':echo '	Gaddangao	';break;
case '	021521011		 ':echo '	Gaggabutan East	';break;
case '	021521012		 ':echo '	Illuru Norte	';break;
case '	021521013		 ':echo '	Lattut	';break;
case '	021521014		 ':echo '	Linno-C	';break;
case '	021521015		 ':echo '	Liuan	';break;
case '	021521016		 ':echo '	Mabbang	';break;
case '	021521017		 ':echo '	Mauanan	';break;
case '	021521018		 ':echo '	Masi	';break;
case '	021521019		 ':echo '	Minanga	';break;
case '	02152120		 ':echo '	Nanauatan	';break;
case '	02152121		 ':echo '	Nanungaran	';break;
case '	02152122		 ':echo '	Pasingan	';break;
case '	02152123		 ':echo '	Poblacion	';break;
case '	02152124		 ':echo '	San Juan	';break;
case '	02152125		 ':echo '	Sinicking	';break;
case '	02152126		 ':echo '	Battut	';break;
case '	02152127		 ':echo '	Bural	';break;
case '	02152128		 ':echo '	Gaggabutan West	';break;
case '	02152129		 ':echo '	Illuru Sur	';break;
case '	021522001		 ':echo '	Bangan	';break;
case '	021522002		 ':echo '	Callungan	';break;
case '	021522003		 ':echo '	Centro I 	';break;
case '	021522004		 ':echo '	Centro II 	';break;
case '	021522005		 ':echo '	Dacal	';break;
case '	021522006		 ':echo '	Dagueray	';break;
case '	021522008		 ':echo '	Dammang	';break;
case '	021522009		 ':echo '	Kittag	';break;
case '	021522010		 ':echo '	Langagan	';break;
case '	021522011		 ':echo '	Magacan	';break;
case '	021522012		 ':echo '	Marzan	';break;
case '	021522013		 ':echo '	Masisit	';break;
case '	021522014		 ':echo '	Nagrangtayan	';break;
case '	021522015		 ':echo '	Namuac	';break;
case '	021522016		 ':echo '	San Andres	';break;
case '	021522017		 ':echo '	Santiago	';break;
case '	021522018		 ':echo '	Santor	';break;
case '	021522019		 ':echo '	Tokitok	';break;
case '	021523001		 ':echo '	Casagan	';break;
case '	021523002		 ':echo '	Casambalangan	';break;
case '	021523003		 ':echo '	Centro 	';break;
case '	021523004		 ':echo '	Diora-Zinungan	';break;
case '	021523005		 ':echo '	Dungeg	';break;
case '	021523006		 ':echo '	Kapanikian	';break;
case '	021523007		 ':echo '	Marede	';break;
case '	021523008		 ':echo '	Palawig	';break;
case '	021523009		 ':echo '	Batu-Parada	';break;
case '	021523010		 ':echo '	Patunungan	';break;
case '	021523011		 ':echo '	Rapuli	';break;
case '	021523012		 ':echo '	San Vicente	';break;
case '	021523013		 ':echo '	Santa Clara	';break;
case '	021523014		 ':echo '	Santa Cruz	';break;
case '	021523015		 ':echo '	Visitacion 	';break;
case '	021523016		 ':echo '	Tangatan	';break;
case '	021524001		 ':echo '	Cadongdongan	';break;
case '	021524002		 ':echo '	Capacuan	';break;
case '	021524003		 ':echo '	Centro I 	';break;
case '	021524004		 ':echo '	Centro II 	';break;
case '	021524005		 ':echo '	Macatel	';break;
case '	021524008		 ':echo '	Portabaga	';break;
case '	021524009		 ':echo '	San Juan	';break;
case '	021524010		 ':echo '	San Miguel	';break;
case '	021524011		 ':echo '	Salungsong	';break;
case '	021524012		 ':echo '	Sicul	';break;
case '	021525001		 ':echo '	Alucao	';break;
case '	021525002		 ':echo '	Buyun	';break;
case '	021525003		 ':echo '	Centro East 	';break;
case '	021525004		 ':echo '	Dungeg	';break;
case '	021525005		 ':echo '	Luga	';break;
case '	021525006		 ':echo '	Masi	';break;
case '	021525007		 ':echo '	Mission	';break;
case '	021525011		 ':echo '	Simpatuyo	';break;
case '	021525012		 ':echo '	Villa	';break;
case '	021525013		 ':echo '	Aridowen	';break;
case '	021525014		 ':echo '	Caniugan	';break;
case '	021525015		 ':echo '	Centro West	';break;
case '	021525016		 ':echo '	Simbaluca	';break;
case '	021526001		 ':echo '	Abariongan Ruar	';break;
case '	021526002		 ':echo '	Abariongan Uneg	';break;
case '	021526003		 ':echo '	Balagan	';break;
case '	021526004		 ':echo '	Balanni	';break;
case '	021526006		 ':echo '	Cabayo	';break;
case '	021526007		 ':echo '	Calapangan	';break;
case '	021526008		 ':echo '	Calassitan	';break;
case '	021526009		 ':echo '	Campo	';break;
case '	021526010		 ':echo '	Centro Norte 	';break;
case '	021526011		 ':echo '	Centro Sur 	';break;
case '	021526012		 ':echo '	Dungao	';break;
case '	021526014		 ':echo '	Lattac	';break;
case '	021526015		 ':echo '	Lipatan	';break;
case '	021526016		 ':echo '	Lubo	';break;
case '	021526017		 ':echo '	Mabitbitnong	';break;
case '	021526018		 ':echo '	Mapitac	';break;
case '	021526019		 ':echo '	Masical	';break;
case '	021526020		 ':echo '	Matalao	';break;
case '	021526021		 ':echo '	Nag-uma	';break;
case '	021526022		 ':echo '	Namuccayan	';break;
case '	021526023		 ':echo '	Niug Norte	';break;
case '	021526024		 ':echo '	Niug Sur	';break;
case '	021526025		 ':echo '	Palusao	';break;
case '	021526026		 ':echo '	San Manuel	';break;
case '	021526027		 ':echo '	San Roque	';break;
case '	021526028		 ':echo '	Santa Felicitas	';break;
case '	021526029		 ':echo '	Santa Maria	';break;
case '	021526030		 ':echo '	Sidiran	';break;
case '	021526031		 ':echo '	Tabang	';break;
case '	021526032		 ':echo '	Tamucco	';break;
case '	021526033		 ':echo '	Virginia	';break;
case '	021527001		 ':echo '	Andarayan North	';break;
case '	021527002		 ':echo '	Lannig	';break;
case '	021527003		 ':echo '	Bangag	';break;
case '	021527004		 ':echo '	Bantay	';break;
case '	021527005		 ':echo '	Basi East	';break;
case '	021527006		 ':echo '	Bauan East	';break;
case '	021527007		 ':echo '	Cadaanan	';break;
case '	021527008		 ':echo '	Calamagui	';break;
case '	021527009		 ':echo '	Carilucud	';break;
case '	021527010		 ':echo '	Cattaran	';break;
case '	021527011		 ':echo '	Centro Northeast 	';break;
case '	021527012		 ':echo '	Centro Northwest 	';break;
case '	021527013		 ':echo '	Centro Southeast 	';break;
case '	021527014		 ':echo '	Centro Southwest 	';break;
case '	021527015		 ':echo '	Lanna	';break;
case '	021527016		 ':echo '	Lingu	';break;
case '	021527017		 ':echo '	Maguirig	';break;
case '	021527018		 ':echo '	Nabbotuan	';break;
case '	021527019		 ':echo '	Nangalisan	';break;
case '	021527020		 ':echo '	Natappian East	';break;
case '	021527021		 ':echo '	Padul	';break;
case '	021527022		 ':echo '	Palao	';break;
case '	021527023		 ':echo '	Parug-parug	';break;
case '	021527024		 ':echo '	Pataya	';break;
case '	021527025		 ':echo '	Sampaguita	';break;
case '	021527026		 ':echo '	Maddarulug	';break;
case '	021527030		 ':echo '	Ubong	';break;
case '	021527033		 ':echo '	Dassun	';break;
case '	021527034		 ':echo '	Furagui	';break;
case '	021527035		 ':echo '	Gadu	';break;
case '	021527036		 ':echo '	Iraga	';break;
case '	021527037		 ':echo '	Andarayan South	';break;
case '	021527038		 ':echo '	Basi West	';break;
case '	021527039		 ':echo '	Bauan West	';break;
case '	021527040		 ':echo '	Calillauan	';break;
case '	021527041		 ':echo '	Gen. Eulogio Balao	';break;
case '	021527042		 ':echo '	Natappian West	';break;
case '	021527043		 ':echo '	Malalam-Malacabibi	';break;
case '	021528001		 ':echo '	Accusilian	';break;
case '	021528002		 ':echo '	Alabiao	';break;
case '	021528003		 ':echo '	Alabug	';break;
case '	021528004		 ':echo '	Angang	';break;
case '	021528005		 ':echo '	Bagumbayan	';break;
case '	021528006		 ':echo '	Barancuag	';break;
case '	021528007		 ':echo '	Battung	';break;
case '	021528008		 ':echo '	Bicok	';break;
case '	021528009		 ':echo '	Bugnay	';break;
case '	021528010		 ':echo '	Bulagao	';break;
case '	021528011		 ':echo '	Cagumitan	';break;
case '	021528012		 ':echo '	Cato	';break;
case '	021528013		 ':echo '	Culung	';break;
case '	021528014		 ':echo '	Dagupan	';break;
case '	021528015		 ':echo '	Fugu	';break;
case '	021528016		 ':echo '	Lakambini	';break;
case '	021528017		 ':echo '	Lallayug	';break;
case '	021528019		 ':echo '	Malummin	';break;
case '	021528020		 ':echo '	Mambacag	';break;
case '	021528021		 ':echo '	San Vicente	';break;
case '	021528022		 ':echo '	Mungo	';break;
case '	021528023		 ':echo '	Naruangan	';break;
case '	021528024		 ':echo '	Palca	';break;
case '	021528025		 ':echo '	Pata	';break;
case '	021528026		 ':echo '	San Juan	';break;
case '	021528027		 ':echo '	San Luis	';break;
case '	021528028		 ':echo '	Sto. Tomas	';break;
case '	021528029		 ':echo '	Taribubu	';break;
case '	021528030		 ':echo '	Villalaida	';break;
case '	021528031		 ':echo '	Poblacion I	';break;
case '	021528032		 ':echo '	Poblacion II	';break;
case '	021528033		 ':echo '	Malalinta	';break;
case '	021529001		 ':echo '	Annafunan East	';break;
case '	021529002		 ':echo '	Atulayan Norte	';break;
case '	021529003		 ':echo '	Bagay	';break;
case '	021529005		 ':echo '	Centro 1 	';break;
case '	021529006		 ':echo '	Centro 4 	';break;
case '	021529007		 ':echo '	Centro 5 	';break;
case '	021529008		 ':echo '	Centro 6 	';break;
case '	021529009		 ':echo '	Centro 7 	';break;
case '	021529010		 ':echo '	Centro 8 	';break;
case '	021529011		 ':echo '	Centro 9 	';break;
case '	021529013		 ':echo '	Centro 10 	';break;
case '	021529014		 ':echo '	Centro 11 	';break;
case '	021529015		 ':echo '	Buntun	';break;
case '	021529016		 ':echo '	Caggay	';break;
case '	021529017		 ':echo '	Capatan	';break;
case '	021529018		 ':echo '	Carig	';break;
case '	021529019		 ':echo '	Caritan Norte	';break;
case '	021529020		 ':echo '	Caritan Sur	';break;
case '	021529021		 ':echo '	Cataggaman Nuevo	';break;
case '	021529022		 ':echo '	Cataggaman Viejo	';break;
case '	021529023		 ':echo '	Gosi Norte	';break;
case '	021529024		 ':echo '	Larion Alto	';break;
case '	021529025		 ':echo '	Larion Bajo	';break;
case '	021529026		 ':echo '	Libag Norte	';break;
case '	021529027		 ':echo '	Linao East	';break;
case '	021529029		 ':echo '	Namabbalan Norte	';break;
case '	021529030		 ':echo '	Pallua Norte	';break;
case '	021529031		 ':echo '	Pengue	';break;
case '	021529032		 ':echo '	Tagga	';break;
case '	021529033		 ':echo '	Tanza	';break;
case '	021529034		 ':echo '	Ugac Norte	';break;
case '	021529035		 ':echo '	Centro 2 	';break;
case '	021529036		 ':echo '	Centro 3 	';break;
case '	021529037		 ':echo '	Centro 12 	';break;
case '	021529038		 ':echo '	Annafunan West	';break;
case '	021529039		 ':echo '	Atulayan Sur	';break;
case '	021529040		 ':echo '	Caritan Centro	';break;
case '	021529041		 ':echo '	Cataggaman Pardo	';break;
case '	021529042		 ':echo '	Dadda	';break;
case '	021529043		 ':echo '	Gosi Sur	';break;
case '	021529044		 ':echo '	Leonarda	';break;
case '	021529045		 ':echo '	Libag Sur	';break;
case '	021529046		 ':echo '	Linao Norte	';break;
case '	021529047		 ':echo '	Linao West	';break;
case '	021529048		 ':echo '	Namabbalan Sur	';break;
case '	021529049		 ':echo '	Pallua Sur	';break;
case '	021529050		 ':echo '	Reyes	';break;
case '	021529051		 ':echo '	San Gabriel	';break;
case '	021529052		 ':echo '	Ugac Sur	';break;
case '	0203101001		 ':echo '	Amistad	';break;
case '	0203101002		 ':echo '	Antonino 	';break;
case '	0203101003		 ':echo '	Apanay	';break;
case '	0203101004		 ':echo '	Aurora	';break;
case '	0203101005		 ':echo '	Bagnos	';break;
case '	0203101006		 ':echo '	Bagong Sikat	';break;
case '	0203101007		 ':echo '	Bantug-Petines	';break;
case '	0203101008		 ':echo '	Bonifacio	';break;
case '	0203101009		 ':echo '	Burgos	';break;
case '	0203101010		 ':echo '	Calaocan 	';break;
case '	0203101011		 ':echo '	Callao	';break;
case '	0203101012		 ':echo '	Dagupan	';break;
case '	0203101013		 ':echo '	Inanama	';break;
case '	0203101014		 ':echo '	Linglingay	';break;
case '	0203101015		 ':echo '	M.H. del Pilar	';break;
case '	0203101016		 ':echo '	Mabini	';break;
case '	0203101017		 ':echo '	Magsaysay 	';break;
case '	0203101018		 ':echo '	Mataas na Kahoy	';break;
case '	0203101019		 ':echo '	Paddad	';break;
case '	020310120		 ':echo '	Rizal	';break;
case '	020310121		 ':echo '	Rizaluna	';break;
case '	020310122		 ':echo '	Salvacion	';break;
case '	020310123		 ':echo '	San Antonio 	';break;
case '	020310124		 ':echo '	San Fernando	';break;
case '	020310125		 ':echo '	San Francisco	';break;
case '	020310126		 ':echo '	San Juan	';break;
case '	020310127		 ':echo '	San Pablo	';break;
case '	020310128		 ':echo '	San Pedro	';break;
case '	020310129		 ':echo '	Santa Cruz	';break;
case '	020310130		 ':echo '	Santa Maria	';break;
case '	020310131		 ':echo '	Santo Domingo	';break;
case '	020310132		 ':echo '	Santo Tomas	';break;
case '	020310133		 ':echo '	Victoria	';break;
case '	020310134		 ':echo '	Zamora	';break;
case '	020312001		 ':echo '	Allangigan	';break;
case '	020312002		 ':echo '	Aniog	';break;
case '	020312003		 ':echo '	Baniket	';break;
case '	020312004		 ':echo '	Bannawag	';break;
case '	020312005		 ':echo '	Bantug	';break;
case '	020312006		 ':echo '	Barangcuag	';break;
case '	020312007		 ':echo '	Baui	';break;
case '	020312008		 ':echo '	Bonifacio	';break;
case '	020312009		 ':echo '	Buenavista	';break;
case '	020312010		 ':echo '	Bunnay	';break;
case '	020312011		 ':echo '	Calabayan-Minanga	';break;
case '	020312012		 ':echo '	Calaccab	';break;
case '	020312013		 ':echo '	Calaocan	';break;
case '	020312014		 ':echo '	Kalusutan	';break;
case '	020312015		 ':echo '	Campanario	';break;
case '	020312016		 ':echo '	Canangan	';break;
case '	020312017		 ':echo '	Centro I 	';break;
case '	020312018		 ':echo '	Centro II 	';break;
case '	020312019		 ':echo '	Centro III 	';break;
case '	020312020		 ':echo '	Consular	';break;
case '	020312021		 ':echo '	Cumu	';break;
case '	020312022		 ':echo '	Dalakip	';break;
case '	020312023		 ':echo '	Dalenat	';break;
case '	020312024		 ':echo '	Dipaluda	';break;
case '	020312025		 ':echo '	Duroc	';break;
case '	020312026		 ':echo '	Lourdes	';break;
case '	020312027		 ':echo '	Esperanza	';break;
case '	020312028		 ':echo '	Fugaru	';break;
case '	020312029		 ':echo '	Liwliwa	';break;
case '	020312030		 ':echo '	Ingud Norte	';break;
case '	020312031		 ':echo '	Ingud Sur	';break;
case '	020312032		 ':echo '	La Suerte	';break;
case '	020312033		 ':echo '	Lomboy	';break;
case '	020312034		 ':echo '	Loria	';break;
case '	020312035		 ':echo '	Mabuhay	';break;
case '	020312036		 ':echo '	Macalauat	';break;
case '	020312037		 ':echo '	Macaniao	';break;
case '	020312038		 ':echo '	Malannao	';break;
case '	020312039		 ':echo '	Malasin	';break;
case '	020312040		 ':echo '	Mangandingay	';break;
case '	020312041		 ':echo '	Minanga Proper	';break;
case '	020312042		 ':echo '	Pappat	';break;
case '	020312043		 ':echo '	Pissay	';break;
case '	020312044		 ':echo '	Ramona	';break;
case '	020312045		 ':echo '	Rancho Bassit	';break;
case '	020312046		 ':echo '	Rang-ayan	';break;
case '	020312047		 ':echo '	Salay	';break;
case '	020312048		 ':echo '	San Ambrocio	';break;
case '	020312049		 ':echo '	San Guillermo	';break;
case '	020312050		 ':echo '	San Isidro	';break;
case '	020312051		 ':echo '	San Marcelo	';break;
case '	020312052		 ':echo '	San Roque	';break;
case '	020312053		 ':echo '	San Vicente	';break;
case '	020312054		 ':echo '	Santo Niño	';break;
case '	020312055		 ':echo '	Saranay	';break;
case '	020312056		 ':echo '	Sinabbaran	';break;
case '	020312058		 ':echo '	Victory	';break;
case '	020312059		 ':echo '	Viga	';break;
case '	020312060		 ':echo '	Villa Domingo	';break;
case '	020313001		 ':echo '	Apiat	';break;
case '	020313002		 ':echo '	Bagnos	';break;
case '	020313003		 ':echo '	Bagong Tanza	';break;
case '	020313004		 ':echo '	Ballesteros	';break;
case '	020313005		 ':echo '	Bannagao	';break;
case '	020313006		 ':echo '	Bannawag	';break;
case '	020313007		 ':echo '	Bolinao	';break;
case '	020313008		 ':echo '	Caipilan	';break;
case '	020313009		 ':echo '	Camarunggayan	';break;
case '	020313010		 ':echo '	Dalig-Kalinga	';break;
case '	020313011		 ':echo '	Diamantina	';break;
case '	020313012		 ':echo '	Divisoria	';break;
case '	020313013		 ':echo '	Esperanza East	';break;
case '	020313014		 ':echo '	Esperanza West	';break;
case '	020313015		 ':echo '	Kalabaza	';break;
case '	020313016		 ':echo '	Rizaluna	';break;
case '	020313017		 ':echo '	Macatal	';break;
case '	020313018		 ':echo '	Malasin	';break;
case '	020313019		 ':echo '	Nampicuan	';break;
case '	020313020		 ':echo '	Villa Nuesa	';break;
case '	020313021		 ':echo '	Panecien	';break;
case '	020313022		 ':echo '	San Andres	';break;
case '	020313023		 ':echo '	San Jose 	';break;
case '	020313024		 ':echo '	San Rafael	';break;
case '	020313025		 ':echo '	San Ramon	';break;
case '	020313026		 ':echo '	Santa Rita	';break;
case '	020313027		 ':echo '	Santa Rosa	';break;
case '	020313028		 ':echo '	Saranay	';break;
case '	020313029		 ':echo '	Sili	';break;
case '	020313030		 ':echo '	Victoria	';break;
case '	020313031		 ':echo '	Villa Fugu	';break;
case '	020313032		 ':echo '	San Juan 	';break;
case '	020313033		 ':echo '	San Pedro-San Pablo 	';break;
case '	0203104001		 ':echo '	Andabuen	';break;
case '	0203104002		 ':echo '	Ara	';break;
case '	0203104003		 ':echo '	Binogtungan	';break;
case '	0203104004		 ':echo '	Capuseran	';break;
case '	0203104005		 ':echo '	Dagupan	';break;
case '	0203104006		 ':echo '	Danipa	';break;
case '	0203104007		 ':echo '	District II 	';break;
case '	0203104008		 ':echo '	Gomez	';break;
case '	0203104009		 ':echo '	Guilingan	';break;
case '	0203104010		 ':echo '	La Salette	';break;
case '	0203104011		 ':echo '	Makindol	';break;
case '	0203104012		 ':echo '	Maluno Norte	';break;
case '	0203104013		 ':echo '	Maluno Sur	';break;
case '	0203104014		 ':echo '	Nacalma	';break;
case '	0203104015		 ':echo '	New Magsaysay	';break;
case '	0203104016		 ':echo '	District I 	';break;
case '	0203104017		 ':echo '	Punit	';break;
case '	0203104018		 ':echo '	San Carlos	';break;
case '	0203104019		 ':echo '	San Francisco	';break;
case '	0203104021		 ':echo '	Santa Cruz	';break;
case '	0203104022		 ':echo '	Sevillana	';break;
case '	0203104023		 ':echo '	Sinipit	';break;
case '	0203104024		 ':echo '	Lucban	';break;
case '	0203104025		 ':echo '	Villaluz	';break;
case '	0203104026		 ':echo '	Yeban Norte	';break;
case '	0203104027		 ':echo '	Yeban Sur	';break;
case '	0203104028		 ':echo '	Santiago	';break;
case '	0203104029		 ':echo '	Placer	';break;
case '	0203104030		 ':echo '	Balliao	';break;
case '	020315001		 ':echo '	Bacnor East	';break;
case '	020315002		 ':echo '	Bacnor West	';break;
case '	020315004		 ':echo '	Caliguian 	';break;
case '	020315005		 ':echo '	Catabban	';break;
case '	020315006		 ':echo '	Cullalabo Del Norte	';break;
case '	020315007		 ':echo '	Cullalabo San Antonio	';break;
case '	020315008		 ':echo '	Cullalabo Del Sur	';break;
case '	020315009		 ':echo '	Dalig	';break;
case '	020315012		 ':echo '	Malasin	';break;
case '	020315013		 ':echo '	Masigun	';break;
case '	020315014		 ':echo '	Raniag	';break;
case '	020315015		 ':echo '	San Bonifacio	';break;
case '	020315016		 ':echo '	San Miguel	';break;
case '	020315017		 ':echo '	San Roque	';break;
case '	0203106001		 ':echo '	Aggub	';break;
case '	0203106002		 ':echo '	Anao	';break;
case '	0203106003		 ':echo '	Angancasilian	';break;
case '	0203106004		 ':echo '	Balasig	';break;
case '	0203106005		 ':echo '	Cansan	';break;
case '	0203106006		 ':echo '	Casibarag Norte	';break;
case '	0203106007		 ':echo '	Casibarag Sur	';break;
case '	0203106008		 ':echo '	Catabayungan	';break;
case '	0203106009		 ':echo '	Cubag	';break;
case '	0203106010		 ':echo '	Garita	';break;
case '	0203106011		 ':echo '	Luquilu	';break;
case '	0203106012		 ':echo '	Mabangug	';break;
case '	0203106013		 ':echo '	Magassi	';break;
case '	0203106015		 ':echo '	Ngarag	';break;
case '	0203106016		 ':echo '	Pilig Abajo	';break;
case '	0203106017		 ':echo '	Pilig Alto	';break;
case '	0203106018		 ':echo '	Centro 	';break;
case '	0203106019		 ':echo '	San Bernardo	';break;
case '	0203106020		 ':echo '	San Juan	';break;
case '	0203106021		 ':echo '	Saui	';break;
case '	0203106022		 ':echo '	Tallag	';break;
case '	0203106023		 ':echo '	Ugad	';break;
case '	0203106024		 ':echo '	Union	';break;




}?>,








<?php switch ($meta['city']){



case '	012801		 ':echo '	Adams	';break;
case '	012802		 ':echo '	Bacarra	';break;
case '	012803		 ':echo '	Badoc	';break;
case '	012804		 ':echo '	Bangui	';break;
case '	012806		 ':echo '	Burgos	';break;
case '	012807		 ':echo '	Carasi	';break;
case '	012808		 ':echo '	Currimao	';break;
case '	012809		 ':echo '	Dingras	';break;
case '	012810		 ':echo '	Dumalneg	';break;
case '	012811		 ':echo '	Banna	';break;
case '	012813		 ':echo '	Marcos	';break;
case '	012814		 ':echo '	Nueva Era	';break;
case '	012815		 ':echo '	Pagudpud	';break;
case '	012816		 ':echo '	Paoay	';break;
case '	012817		 ':echo '	Pasuquin	';break;
case '	012818		 ':echo '	Piddig	';break;
case '	012819		 ':echo '	Pinili	';break;
case '	012820		 ':echo '	San Nicolas	';break;
case '	012821		 ':echo '	Sarrat	';break;
case '	012822		 ':echo '	Solsona	';break;
case '	012823		 ':echo '	Vintar	';break;
case '	012901		 ':echo '	Alilem	';break;
case '	012902		 ':echo '	Banayoyo	';break;
case '	012903		 ':echo '	Bantay	';break;
case '	012904		 ':echo '	Burgos	';break;
case '	012905		 ':echo '	Cabugao	';break;
case '	012907		 ':echo '	Caoayan	';break;
case '	012908		 ':echo '	Cervantes	';break;
case '	012909		 ':echo '	Galimuyod	';break;
case '	012910		 ':echo '	Gregorio del Pilar	';break;
case '	012911		 ':echo '	Lidlidda	';break;
case '	012912		 ':echo '	Magsingal	';break;
case '	012913		 ':echo '	Nagbukel	';break;
case '	012914		 ':echo '	Narvacan	';break;
case '	012915		 ':echo '	Quirino	';break;
case '	012916		 ':echo '	Salcedo	';break;
case '	012917		 ':echo '	San Emilio	';break;
case '	012918		 ':echo '	San Esteban	';break;
case '	012919		 ':echo '	San Ildefonso	';break;
case '	012920		 ':echo '	San Juan	';break;
case '	012921		 ':echo '	San Vicente	';break;
case '	012922		 ':echo '	Santa	';break;
case '	012923		 ':echo '	Santa Catalina	';break;
case '	012924		 ':echo '	Santa Cruz	';break;
case '	012925		 ':echo '	Santa Lucia	';break;
case '	012926		 ':echo '	Santa Maria	';break;
case '	012927		 ':echo '	Santiago	';break;
case '	012928		 ':echo '	Santo Domingo	';break;
case '	012929		 ':echo '	Sigay	';break;
case '	012930		 ':echo '	Sinait	';break;
case '	012931		 ':echo '	Sugpon	';break;
case '	012932		 ':echo '	Suyo	';break;
case '	012933		 ':echo '	Tagudin	';break;
case '	013301		 ':echo '	Agoo	';break;
case '	013302		 ':echo '	Aringay	';break;
case '	013303		 ':echo '	Bacnotan	';break;
case '	013304		 ':echo '	Bagulin	';break;
case '	013305		 ':echo '	Balaoan	';break;
case '	013306		 ':echo '	Bangar	';break;
case '	013307		 ':echo '	Bauang	';break;
case '	013308		 ':echo '	Burgos	';break;
case '	013309		 ':echo '	Caba	';break;
case '	013310		 ':echo '	Luna	';break;
case '	013311		 ':echo '	Naguilian	';break;
case '	013312		 ':echo '	Pugo	';break;
case '	013313		 ':echo '	Rosario	';break;
case '	013315		 ':echo '	San Gabriel	';break;
case '	013316		 ':echo '	San Juan	';break;
case '	013317		 ':echo '	Santo Tomas	';break;
case '	013318		 ':echo '	Santol	';break;
case '	013319		 ':echo '	Sudipen	';break;
case '	013320		 ':echo '	Tubao	';break;
case '	015501		 ':echo '	Agno	';break;
case '	015502		 ':echo '	Aguilar	';break;
case '	015504		 ':echo '	Alcala	';break;
case '	015505		 ':echo '	Anda	';break;
case '	015506		 ':echo '	Asingan	';break;
case '	015507		 ':echo '	Balungao	';break;
case '	015508		 ':echo '	Bani	';break;
case '	015509		 ':echo '	Basista	';break;
case '	015510		 ':echo '	Bautista	';break;
case '	015511		 ':echo '	Bayambang	';break;
case '	015512		 ':echo '	Binalonan	';break;
case '	015513		 ':echo '	Binmaley	';break;
case '	015514		 ':echo '	Bolinao	';break;
case '	015515		 ':echo '	Bugallon	';break;
case '	015516		 ':echo '	Burgos	';break;
case '	015517		 ':echo '	Calasiao	';break;
case '	015519		 ':echo '	Dasol	';break;
case '	015520		 ':echo '	Infanta	';break;
case '	015521		 ':echo '	Labrador	';break;
case '	015522		 ':echo '	Lingayen 	';break;
case '	015523		 ':echo '	Mabini	';break;
case '	015524		 ':echo '	Malasiqui	';break;
case '	015525		 ':echo '	Manaoag	';break;
case '	015526		 ':echo '	Mangaldan	';break;
case '	015527		 ':echo '	Mangatarem	';break;
case '	015528		 ':echo '	Mapandan	';break;
case '	015529		 ':echo '	Natividad	';break;
case '	015530		 ':echo '	Pozorrubio	';break;
case '	015531		 ':echo '	Rosales	';break;
case '	015533		 ':echo '	San Fabian	';break;
case '	015534		 ':echo '	San Jacinto	';break;
case '	015535		 ':echo '	San Manuel	';break;
case '	015536		 ':echo '	San Nicolas	';break;
case '	015537		 ':echo '	San Quintin	';break;
case '	015538		 ':echo '	Santa Barbara	';break;
case '	015539		 ':echo '	Santa Maria	';break;
case '	015540		 ':echo '	Santo Tomas	';break;
case '	015541		 ':echo '	Sison	';break;
case '	015542		 ':echo '	Sual	';break;
case '	015543		 ':echo '	Tayug	';break;
case '	015544		 ':echo '	Umingan	';break;
case '	015545		 ':echo '	Urbiztondo	';break;
case '	015547		 ':echo '	Villasis	';break;
case '	015548		 ':echo '	Laoac	';break;
case '	020901		 ':echo '	Basco 	';break;
case '	020902		 ':echo '	Itbayat	';break;
case '	020903		 ':echo '	Ivana	';break;
case '	020904		 ':echo '	Mahatao	';break;
case '	020905		 ':echo '	Sabtang	';break;
case '	020906		 ':echo '	Uyugan	';break;
case '	021501		 ':echo '	Abulug	';break;
case '	021502		 ':echo '	Alcala	';break;
case '	021503		 ':echo '	Allacapan	';break;
case '	021504		 ':echo '	Amulung	';break;
case '	021505		 ':echo '	Aparri	';break;
case '	021506		 ':echo '	Baggao	';break;
case '	021507		 ':echo '	Ballesteros	';break;
case '	021508		 ':echo '	Buguey	';break;
case '	021509		 ':echo '	Calayan	';break;
case '	021510		 ':echo '	Camalaniugan	';break;
case '	021511		 ':echo '	Claveria	';break;
case '	021512		 ':echo '	Enrile	';break;
case '	021513		 ':echo '	Gattaran	';break;
case '	021514		 ':echo '	Gonzaga	';break;
case '	021515		 ':echo '	Iguig	';break;
case '	021516		 ':echo '	Lal-Lo	';break;
case '	021517		 ':echo '	Lasam	';break;
case '	021518		 ':echo '	Pamplona	';break;
case '	021519		 ':echo '	Peñablanca	';break;
case '	021520		 ':echo '	Piat	';break;
case '	021521		 ':echo '	Rizal	';break;
case '	021522		 ':echo '	Sanchez-Mira	';break;
case '	021523		 ':echo '	Santa Ana	';break;
case '	021524		 ':echo '	Santa Praxedes	';break;
case '	021525		 ':echo '	Santa Teresita	';break;
case '	021526		 ':echo '	Santo Niño	';break;
case '	021527		 ':echo '	Solana	';break;
case '	021528		 ':echo '	Tuao	';break;
case '	0203101		 ':echo '	Alicia	';break;
case '	020312		 ':echo '	Angadanan	';break;
case '	020313		 ':echo '	Aurora	';break;
case '	0203104		 ':echo '	Benito Soliven	';break;
case '	020315		 ':echo '	Burgos	';break;
case '	0203106		 ':echo '	Cabagan	';break;
case '	0203107		 ':echo '	Cabatuan	';break;
case '	0203109		 ':echo '	Cordon	';break;
case '	0203110		 ':echo '	Dinapigue	';break;
case '	0203111		 ':echo '	Divilacan	';break;
case '	0203112		 ':echo '	Echague	';break;
case '	0203113		 ':echo '	Gamu	';break;
case '	0203115		 ':echo '	Jones	';break;
case '	0203116		 ':echo '	Luna	';break;
case '	0203117		 ':echo '	Maconacon	';break;
case '	0203118		 ':echo '	Delfin Albano	';break;
case '	0203119		 ':echo '	Mallig	';break;
case '	0203120		 ':echo '	Naguilian	';break;
case '	0203121		 ':echo '	Palanan	';break;
case '	0203122		 ':echo '	Quezon	';break;
case '	0203123		 ':echo '	Quirino	';break;
case '	0203124		 ':echo '	Ramon	';break;
case '	0203125		 ':echo '	Reina Mercedes	';break;
case '	0203126		 ':echo '	Roxas	';break;
case '	0203127		 ':echo '	San Agustin	';break;
case '	0203128		 ':echo '	San Guillermo	';break;
case '	0203129		 ':echo '	San Isidro	';break;
case '	0203130		 ':echo '	San Manuel	';break;
case '	0203131		 ':echo '	San Mariano	';break;
case '	0203132		 ':echo '	San Mateo	';break;
case '	0203133		 ':echo '	San Pablo	';break;
case '	0203134		 ':echo '	Santa Maria	';break;
case '	0203136		 ':echo '	Santo Tomas	';break;
case '	0203137		 ':echo '	Tumauini	';break;
case '	0205001		 ':echo '	Ambaguio	';break;
case '	0205002		 ':echo '	Aritao	';break;
case '	0205003		 ':echo '	Bagabag	';break;
case '	0205004		 ':echo '	Bambang	';break;
case '	0205005		 ':echo '	Bayombong 	';break;
case '	0205006		 ':echo '	Diadi	';break;
case '	0205007		 ':echo '	Dupax del Norte	';break;
case '	0205008		 ':echo '	Dupax del Sur	';break;
case '	0205009		 ':echo '	Kasibu	';break;
case '	0205010		 ':echo '	Kayapa	';break;
case '	0205011		 ':echo '	Quezon	';break;
case '	0205012		 ':echo '	Santa Fe	';break;
case '	0205013		 ':echo '	Solano	';break;
case '	0205014		 ':echo '	Villaverde	';break;
case '	0205015		 ':echo '	Alfonso Castaneda	';break;
case '	0205701		 ':echo '	Aglipay	';break;
case '	0205702		 ':echo '	Cabarroguis 	';break;
case '	0205703		 ':echo '	Diffun	';break;
case '	0205704		 ':echo '	Maddela	';break;
case '	0205705		 ':echo '	Saguday	';break;
case '	0205706		 ':echo '	Nagtipunan	';break;
case '	0300801		 ':echo '	Abucay	';break;
case '	0300802		 ':echo '	Bagac	';break;
case '	0300804		 ':echo '	Dinalupihan	';break;
case '	0300805		 ':echo '	Hermosa	';break;
case '	0300806		 ':echo '	Limay	';break;
case '	0300807		 ':echo '	Mariveles	';break;
case '	0300808		 ':echo '	Morong	';break;
case '	0300809		 ':echo '	Orani	';break;
case '	0300810		 ':echo '	Orion	';break;
case '	0300811		 ':echo '	Pilar	';break;
case '	0300812		 ':echo '	Samal	';break;
case '	031401		 ':echo '	Angat	';break;
case '	031402		 ':echo '	Balagtas	';break;
case '	031404		 ':echo '	Bocaue	';break;
case '	031405		 ':echo '	Bulacan	';break;
case '	031406		 ':echo '	Bustos	';break;
case '	031407		 ':echo '	Calumpit	';break;
case '	031408		 ':echo '	Guiguinto	';break;
case '	031409		 ':echo '	Hagonoy	';break;
case '	031411		 ':echo '	Marilao	';break;
case '	031413		 ':echo '	Norzagaray	';break;
case '	031414		 ':echo '	Obando	';break;
case '	031415		 ':echo '	Pandi	';break;
case '	031416		 ':echo '	Paombong	';break;
case '	031417		 ':echo '	Plaridel	';break;
case '	031418		 ':echo '	Pulilan	';break;
case '	031419		 ':echo '	San Ildefonso	';break;
case '	031421		 ':echo '	San Miguel	';break;
case '	031422		 ':echo '	San Rafael	';break;
case '	031423		 ':echo '	Santa Maria	';break;
case '	031424		 ':echo '	Doña Remedios Trinidad	';break;
case '	0304901		 ':echo '	Aliaga	';break;
case '	0304902		 ':echo '	Bongabon	';break;
case '	0304904		 ':echo '	Cabiao	';break;
case '	0304905		 ':echo '	Carranglan	';break;
case '	0304906		 ':echo '	Cuyapo	';break;
case '	0304907		 ':echo '	Gabaldon	';break;
case '	0304909		 ':echo '	General Mamerto Natividad	';break;
case '	0304910		 ':echo '	General Tinio	';break;
case '	0304911		 ':echo '	Guimba	';break;
case '	0304912		 ':echo '	Jaen	';break;
case '	0304913		 ':echo '	Laur	';break;
case '	0304914		 ':echo '	Licab	';break;
case '	0304915		 ':echo '	Llanera	';break;
case '	0304916		 ':echo '	Lupao	';break;
case '	0304918		 ':echo '	Nampicuan	';break;
case '	0304920		 ':echo '	Pantabangan	';break;
case '	0304921		 ':echo '	Peñaranda	';break;
case '	0304922		 ':echo '	Quezon	';break;
case '	0304923		 ':echo '	Rizal	';break;
case '	0304924		 ':echo '	San Antonio	';break;
case '	0304925		 ':echo '	San Isidro	';break;
case '	0304927		 ':echo '	San Leonardo	';break;
case '	0304928		 ':echo '	Santa Rosa	';break;
case '	0304929		 ':echo '	Santo Domingo	';break;
case '	0304930		 ':echo '	Talavera	';break;
case '	0304931		 ':echo '	Talugtug	';break;
case '	0304932		 ':echo '	Zaragoza	';break;
case '	0305402		 ':echo '	Apalit	';break;
case '	0305403		 ':echo '	Arayat	';break;
case '	0305404		 ':echo '	Bacolor	';break;
case '	0305405		 ':echo '	Candaba	';break;
case '	0305406		 ':echo '	Floridablanca	';break;
case '	0305407		 ':echo '	Guagua	';break;
case '	0305408		 ':echo '	Lubao	';break;
case '	0305410		 ':echo '	Macabebe	';break;
case '	0305411		 ':echo '	Magalang	';break;
case '	0305412		 ':echo '	Masantol	';break;
case '	0305413		 ':echo '	Mexico	';break;
case '	0305414		 ':echo '	Minalin	';break;
case '	0305415		 ':echo '	Porac	';break;
case '	0305417		 ':echo '	San Luis	';break;
case '	0305418		 ':echo '	San Simon	';break;
case '	0305419		 ':echo '	Santa Ana	';break;
case '	0305420		 ':echo '	Santa Rita	';break;
case '	0305421		 ':echo '	Sto. Tomas	';break;
case '	0305422		 ':echo '	Sasmuan	';break;
case '	0306901		 ':echo '	Anao	';break;
case '	0306902		 ':echo '	Bamban	';break;
case '	0306903		 ':echo '	Camiling	';break;
case '	0306904		 ':echo '	Capas	';break;
case '	0306905		 ':echo '	Concepcion	';break;
case '	0306906		 ':echo '	Gerona	';break;
case '	0306907		 ':echo '	La Paz	';break;
case '	0306908		 ':echo '	Mayantoc	';break;
case '	0306909		 ':echo '	Moncada	';break;
case '	0306910		 ':echo '	Paniqui	';break;
case '	0306911		 ':echo '	Pura	';break;
case '	0306912		 ':echo '	Ramos	';break;
case '	0306913		 ':echo '	San Clemente	';break;
case '	0306914		 ':echo '	San Manuel	';break;
case '	0306915		 ':echo '	Santa Ignacia	';break;
case '	0306917		 ':echo '	Victoria	';break;
case '	0306918		 ':echo '	San Jose	';break;
case '	0307101		 ':echo '	Botolan	';break;
case '	030712		 ':echo '	Cabangan	';break;
case '	030713		 ':echo '	Candelaria	';break;
case '	0307104		 ':echo '	Castillejos	';break;
case '	030715		 ':echo '	Iba 	';break;
case '	0307106		 ':echo '	Masinloc	';break;
case '	0307108		 ':echo '	Palauig	';break;
case '	0307109		 ':echo '	San Antonio	';break;
case '	0307110		 ':echo '	San Felipe	';break;
case '	0307111		 ':echo '	San Marcelino	';break;
case '	0307112		 ':echo '	San Narciso	';break;
case '	0307113		 ':echo '	Santa Cruz	';break;
case '	0307114		 ':echo '	Subic	';break;
case '	0307701		 ':echo '	Baler 	';break;
case '	0307702		 ':echo '	Casiguran	';break;
case '	0307703		 ':echo '	Dilasag	';break;
case '	0307704		 ':echo '	Dinalungan	';break;
case '	0307705		 ':echo '	Dingalan	';break;
case '	0307706		 ':echo '	Dipaculao	';break;
case '	0307707		 ':echo '	Maria Aurora	';break;
case '	0307708		 ':echo '	San Luis	';break;
case '	041001		 ':echo '	Agoncillo	';break;
case '	041002		 ':echo '	Alitagtag	';break;
case '	041003		 ':echo '	Balayan	';break;
case '	041004		 ':echo '	Balete	';break;
case '	041006		 ':echo '	Bauan	';break;
case '	041008		 ':echo '	Calatagan	';break;
case '	041009		 ':echo '	Cuenca	';break;
case '	041010		 ':echo '	Ibaan	';break;
case '	041011		 ':echo '	Laurel	';break;
case '	041012		 ':echo '	Lemery	';break;
case '	041013		 ':echo '	Lian	';break;
case '	041015		 ':echo '	Lobo	';break;
case '	041016		 ':echo '	Mabini	';break;
case '	041017		 ':echo '	Malvar	';break;
case '	041018		 ':echo '	Mataasnakahoy	';break;
case '	041019		 ':echo '	Nasugbu	';break;
case '	04120		 ':echo '	Padre Garcia	';break;
case '	04121		 ':echo '	Rosario	';break;
case '	04122		 ':echo '	San Jose	';break;
case '	04123		 ':echo '	San Juan	';break;
case '	04124		 ':echo '	San Luis	';break;
case '	04125		 ':echo '	San Nicolas	';break;
case '	04126		 ':echo '	San Pascual	';break;
case '	04127		 ':echo '	Santa Teresita	';break;
case '	04129		 ':echo '	Taal	';break;
case '	04130		 ':echo '	Talisay	';break;
case '	04132		 ':echo '	Taysan	';break;
case '	04133		 ':echo '	Tingloy	';break;
case '	04134		 ':echo '	Tuy	';break;
case '	042101		 ':echo '	Alfonso	';break;
case '	04212		 ':echo '	Amadeo	';break;
case '	042104		 ':echo '	Carmona	';break;
case '	042107		 ':echo '	General Emilio Aguinaldo	';break;
case '	042110		 ':echo '	Indang	';break;
case '	042111		 ':echo '	Kawit	';break;
case '	042112		 ':echo '	Magallanes	';break;
case '	042113		 ':echo '	Maragondon	';break;
case '	042114		 ':echo '	Mendez	';break;
case '	042115		 ':echo '	Naic	';break;
case '	042116		 ':echo '	Noveleta	';break;
case '	042117		 ':echo '	Rosario	';break;
case '	042118		 ':echo '	Silang	';break;
case '	042120		 ':echo '	Tanza	';break;
case '	042121		 ':echo '	Ternate	';break;
case '	042123		 ':echo '	Gen. Mariano Alvarez	';break;
case '	043401		 ':echo '	Alaminos	';break;
case '	043402		 ':echo '	Bay	';break;
case '	043406		 ':echo '	Calauan	';break;
case '	043407		 ':echo '	Cavinti	';break;
case '	043408		 ':echo '	Famy	';break;
case '	043409		 ':echo '	Kalayaan	';break;
case '	043410		 ':echo '	Liliw	';break;
case '	043411		 ':echo '	Los Baños	';break;
case '	043412		 ':echo '	Luisiana	';break;
case '	043413		 ':echo '	Lumban	';break;
case '	043414		 ':echo '	Mabitac	';break;
case '	043415		 ':echo '	Magdalena	';break;
case '	043416		 ':echo '	Majayjay	';break;
case '	043417		 ':echo '	Nagcarlan	';break;
case '	043418		 ':echo '	Paete	';break;
case '	043419		 ':echo '	Pagsanjan	';break;
case '	043420		 ':echo '	Pakil	';break;
case '	043421		 ':echo '	Pangil	';break;
case '	043422		 ':echo '	Pila	';break;
case '	043423		 ':echo '	Rizal	';break;
case '	043426		 ':echo '	Santa Cruz 	';break;
case '	043427		 ':echo '	Santa Maria	';break;
case '	043429		 ':echo '	Siniloan	';break;
case '	043430		 ':echo '	Victoria	';break;
case '	045601		 ':echo '	Agdangan	';break;
case '	045602		 ':echo '	Alabat	';break;
case '	045603		 ':echo '	Atimonan	';break;
case '	045605		 ':echo '	Buenavista	';break;
case '	045606		 ':echo '	Burdeos	';break;
case '	045607		 ':echo '	Calauag	';break;
case '	045608		 ':echo '	Candelaria	';break;
case '	045610		 ':echo '	Catanauan	';break;
case '	045615		 ':echo '	Dolores	';break;
case '	045616		 ':echo '	General Luna	';break;
case '	045617		 ':echo '	General Nakar	';break;
case '	045618		 ':echo '	Guinayangan	';break;
case '	045619		 ':echo '	Gumaca	';break;
case '	045620		 ':echo '	Infanta	';break;
case '	045621		 ':echo '	Jomalig	';break;
case '	045622		 ':echo '	Lopez	';break;
case '	045623		 ':echo '	Lucban	';break;
case '	045625		 ':echo '	Macalelon	';break;
case '	045627		 ':echo '	Mauban	';break;
case '	045628		 ':echo '	Mulanay	';break;
case '	045629		 ':echo '	Padre Burgos	';break;
case '	045630		 ':echo '	Pagbilao	';break;
case '	045631		 ':echo '	Panukulan	';break;
case '	045632		 ':echo '	Patnanungan	';break;
case '	045633		 ':echo '	Perez	';break;
case '	045634		 ':echo '	Pitogo	';break;
case '	045635		 ':echo '	Plaridel	';break;
case '	045636		 ':echo '	Polillo	';break;
case '	045637		 ':echo '	Quezon	';break;
case '	045638		 ':echo '	Real	';break;
case '	045639		 ':echo '	Sampaloc	';break;
case '	045640		 ':echo '	San Andres	';break;
case '	045641		 ':echo '	San Antonio	';break;
case '	045642		 ':echo '	San Francisco	';break;
case '	045644		 ':echo '	San Narciso	';break;
case '	045645		 ':echo '	Sariaya	';break;
case '	045646		 ':echo '	Tagkawayan	';break;
case '	045648		 ':echo '	Tiaong	';break;
case '	045649		 ':echo '	Unisan	';break;
case '	045801		 ':echo '	Angono	';break;
case '	045803		 ':echo '	Baras	';break;
case '	045804		 ':echo '	Binangonan	';break;
case '	045805		 ':echo '	Cainta	';break;
case '	045806		 ':echo '	Cardona	';break;
case '	045807		 ':echo '	Jala-Jala	';break;
case '	045808		 ':echo '	Rodriguez	';break;
case '	045809		 ':echo '	Morong	';break;
case '	045810		 ':echo '	Pililla	';break;
case '	045811		 ':echo '	San Mateo	';break;
case '	045812		 ':echo '	Tanay	';break;
case '	045813		 ':echo '	Taytay	';break;
case '	045814		 ':echo '	Teresa	';break;
case '	1704001		 ':echo '	Boac 	';break;
case '	1704002		 ':echo '	Buenavista	';break;
case '	1704003		 ':echo '	Gasan	';break;
case '	1704004		 ':echo '	Mogpog	';break;
case '	1704005		 ':echo '	Santa Cruz	';break;
case '	1704006		 ':echo '	Torrijos	';break;
case '	1705101		 ':echo '	Abra De Ilog	';break;
case '	170512		 ':echo '	Calintaan	';break;
case '	170513		 ':echo '	Looc	';break;
case '	1705104		 ':echo '	Lubang	';break;
case '	170515		 ':echo '	Magsaysay	';break;
case '	1705106		 ':echo '	Mamburao 	';break;
case '	1705107		 ':echo '	Paluan	';break;
case '	1705108		 ':echo '	Rizal	';break;
case '	1705109		 ':echo '	Sablayan	';break;
case '	1705110		 ':echo '	San Jose	';break;
case '	1705111		 ':echo '	Santa Cruz	';break;
case '	1705201		 ':echo '	Baco	';break;
case '	1705202		 ':echo '	Bansud	';break;
case '	1705203		 ':echo '	Bongabong	';break;
case '	1705204		 ':echo '	Bulalacao	';break;
case '	1705206		 ':echo '	Gloria	';break;
case '	1705207		 ':echo '	Mansalay	';break;
case '	1705208		 ':echo '	Naujan	';break;
case '	1705209		 ':echo '	Pinamalayan	';break;
case '	1705210		 ':echo '	Pola	';break;
case '	1705211		 ':echo '	Puerto Galera	';break;
case '	1705212		 ':echo '	Roxas	';break;
case '	1705213		 ':echo '	San Teodoro	';break;
case '	1705214		 ':echo '	Socorro	';break;
case '	1705215		 ':echo '	Victoria	';break;
case '	1705301		 ':echo '	Aborlan	';break;
case '	1705302		 ':echo '	Agutaya	';break;
case '	1705303		 ':echo '	Araceli	';break;
case '	1705304		 ':echo '	Balabac	';break;
case '	1705305		 ':echo '	Bataraza	';break;
case '	1705306		 ':echo '	BrookeS Point	';break;
case '	1705307		 ':echo '	Busuanga	';break;
case '	1705308		 ':echo '	Cagayancillo	';break;
case '	1705309		 ':echo '	Coron	';break;
case '	1705310		 ':echo '	Cuyo	';break;
case '	1705311		 ':echo '	Dumaran	';break;
case '	1705312		 ':echo '	El Nido	';break;
case '	1705313		 ':echo '	Linapacan	';break;
case '	1705314		 ':echo '	Magsaysay	';break;
case '	1705315		 ':echo '	Narra	';break;
case '	1705317		 ':echo '	Quezon	';break;
case '	1705318		 ':echo '	Roxas	';break;
case '	1705319		 ':echo '	San Vicente	';break;
case '	1705320		 ':echo '	Taytay	';break;
case '	1705321		 ':echo '	Kalayaan	';break;
case '	1705322		 ':echo '	Culion	';break;
case '	1705323		 ':echo '	Rizal	';break;
case '	1705324		 ':echo '	Sofronio Española	';break;
case '	1705901		 ':echo '	Alcantara	';break;
case '	1705902		 ':echo '	Banton	';break;
case '	1705903		 ':echo '	Cajidiocan	';break;
case '	1705904		 ':echo '	Calatrava	';break;
case '	1705905		 ':echo '	Concepcion	';break;
case '	1705906		 ':echo '	Corcuera	';break;
case '	1705907		 ':echo '	Looc	';break;
case '	1705908		 ':echo '	Magdiwang	';break;
case '	1705909		 ':echo '	Odiongan	';break;
case '	1705910		 ':echo '	Romblon 	';break;
case '	1705911		 ':echo '	San Agustin	';break;
case '	1705912		 ':echo '	San Andres	';break;
case '	1705913		 ':echo '	San Fernando	';break;
case '	1705914		 ':echo '	San Jose	';break;
case '	1705915		 ':echo '	Santa Fe	';break;
case '	1705916		 ':echo '	Ferrol	';break;
case '	1705917		 ':echo '	Santa Maria	';break;
case '	050501		 ':echo '	Bacacay	';break;
case '	050502		 ':echo '	Camalig	';break;
case '	050503		 ':echo '	Daraga	';break;
case '	050504		 ':echo '	Guinobatan	';break;
case '	050505		 ':echo '	Jovellar	';break;
case '	050507		 ':echo '	Libon	';break;
case '	050509		 ':echo '	Malilipot	';break;
case '	050510		 ':echo '	Malinao	';break;
case '	050511		 ':echo '	Manito	';break;
case '	050512		 ':echo '	Oas	';break;
case '	050513		 ':echo '	Pio Duran	';break;
case '	050514		 ':echo '	Polangui	';break;
case '	050515		 ':echo '	Rapu-Rapu	';break;
case '	050516		 ':echo '	Santo Domingo	';break;
case '	050518		 ':echo '	Tiwi	';break;
case '	051601		 ':echo '	Basud	';break;
case '	051602		 ':echo '	Capalonga	';break;
case '	051603		 ':echo '	Daet 	';break;
case '	051604		 ':echo '	San Lorenzo Ruiz	';break;
case '	051605		 ':echo '	Jose Panganiban	';break;
case '	051606		 ':echo '	Labo	';break;
case '	051607		 ':echo '	Mercedes	';break;
case '	051608		 ':echo '	Paracale	';break;
case '	051609		 ':echo '	San Vicente	';break;
case '	051610		 ':echo '	Santa Elena	';break;
case '	051611		 ':echo '	Talisay	';break;
case '	051612		 ':echo '	Vinzons	';break;
case '	051701		 ':echo '	Baao	';break;
case '	051702		 ':echo '	Balatan	';break;
case '	051703		 ':echo '	Bato	';break;
case '	051704		 ':echo '	Bombon	';break;
case '	051705		 ':echo '	Buhi	';break;
case '	051706		 ':echo '	Bula	';break;
case '	051707		 ':echo '	Cabusao	';break;
case '	051708		 ':echo '	Calabanga	';break;
case '	051709		 ':echo '	Camaligan	';break;
case '	051710		 ':echo '	Canaman	';break;
case '	051711		 ':echo '	Caramoan	';break;
case '	051712		 ':echo '	Del Gallego	';break;
case '	051713		 ':echo '	Gainza	';break;
case '	051714		 ':echo '	Garchitorena	';break;
case '	051715		 ':echo '	Goa	';break;
case '	051717		 ':echo '	Lagonoy	';break;
case '	051718		 ':echo '	Libmanan	';break;
case '	051719		 ':echo '	Lupi	';break;
case '	051720		 ':echo '	Magarao	';break;
case '	051721		 ':echo '	Milaor	';break;
case '	051722		 ':echo '	Minalabac	';break;
case '	051723		 ':echo '	Nabua	';break;
case '	051725		 ':echo '	Ocampo	';break;
case '	051726		 ':echo '	Pamplona	';break;
case '	051727		 ':echo '	Pasacao	';break;
case '	051728		 ':echo '	Pili 	';break;
case '	051729		 ':echo '	Presentacion	';break;
case '	051730		 ':echo '	Ragay	';break;
case '	051731		 ':echo '	Sagñay	';break;
case '	051732		 ':echo '	San Fernando	';break;
case '	051733		 ':echo '	San Jose	';break;
case '	051734		 ':echo '	Sipocot	';break;
case '	051735		 ':echo '	Siruma	';break;
case '	051736		 ':echo '	Tigaon	';break;
case '	051737		 ':echo '	Tinambac	';break;
case '	052001		 ':echo '	Bagamanoc	';break;
case '	052002		 ':echo '	Baras	';break;
case '	052003		 ':echo '	Bato	';break;
case '	052004		 ':echo '	Caramoran	';break;
case '	052005		 ':echo '	Gigmoto	';break;
case '	052006		 ':echo '	Pandan	';break;
case '	052007		 ':echo '	Panganiban	';break;
case '	052008		 ':echo '	San Andres	';break;
case '	052009		 ':echo '	San Miguel	';break;
case '	052010		 ':echo '	Viga	';break;
case '	052011		 ':echo '	Virac 	';break;
case '	054101		 ':echo '	Aroroy	';break;
case '	05412		 ':echo '	Baleno	';break;
case '	05413		 ':echo '	Balud	';break;
case '	054104		 ':echo '	Batuan	';break;
case '	05415		 ':echo '	Cataingan	';break;
case '	054106		 ':echo '	Cawayan	';break;
case '	054107		 ':echo '	Claveria	';break;
case '	054108		 ':echo '	Dimasalang	';break;
case '	054109		 ':echo '	Esperanza	';break;
case '	054110		 ':echo '	Mandaon	';break;
case '	054112		 ':echo '	Milagros	';break;
case '	054113		 ':echo '	Mobo	';break;
case '	054114		 ':echo '	Monreal	';break;
case '	054115		 ':echo '	Palanas	';break;
case '	054116		 ':echo '	Pio V. Corpuz	';break;
case '	054117		 ':echo '	Placer	';break;
case '	054118		 ':echo '	San Fernando	';break;
case '	054119		 ':echo '	San Jacinto	';break;
case '	054120		 ':echo '	San Pascual	';break;
case '	054121		 ':echo '	Uson	';break;
case '	056202		 ':echo '	Barcelona	';break;
case '	056203		 ':echo '	Bulan	';break;
case '	056204		 ':echo '	Bulusan	';break;
case '	056205		 ':echo '	Casiguran	';break;
case '	056206		 ':echo '	Castilla	';break;
case '	056207		 ':echo '	Donsol	';break;
case '	056208		 ':echo '	Gubat	';break;
case '	056209		 ':echo '	Irosin	';break;
case '	056210		 ':echo '	Juban	';break;
case '	056211		 ':echo '	Magallanes	';break;
case '	056212		 ':echo '	Matnog	';break;
case '	056213		 ':echo '	Pilar	';break;
case '	056214		 ':echo '	Prieto Diaz	';break;
case '	056215		 ':echo '	Santa Magdalena	';break;
case '	060401		 ':echo '	Altavas	';break;
case '	060402		 ':echo '	Balete	';break;
case '	060403		 ':echo '	Banga	';break;
case '	060404		 ':echo '	Batan	';break;
case '	060405		 ':echo '	Buruanga	';break;
case '	060406		 ':echo '	Ibajay	';break;
case '	060407		 ':echo '	Kalibo 	';break;
case '	060408		 ':echo '	Lezo	';break;
case '	060409		 ':echo '	Libacao	';break;
case '	060410		 ':echo '	Madalag	';break;
case '	060411		 ':echo '	Makato	';break;
case '	060412		 ':echo '	Malay	';break;
case '	060413		 ':echo '	Malinao	';break;
case '	060414		 ':echo '	Nabas	';break;
case '	060415		 ':echo '	New Washington	';break;
case '	060416		 ':echo '	Numancia	';break;
case '	060417		 ':echo '	Tangalan	';break;
case '	060601		 ':echo '	Anini-Y	';break;
case '	060602		 ':echo '	Barbaza	';break;
case '	060603		 ':echo '	Belison	';break;
case '	060604		 ':echo '	Bugasong	';break;
case '	060605		 ':echo '	Caluya	';break;
case '	060606		 ':echo '	Culasi	';break;
case '	060607		 ':echo '	Tobias Fornier	';break;
case '	060608		 ':echo '	Hamtic	';break;
case '	060609		 ':echo '	Laua-An	';break;
case '	060610		 ':echo '	Libertad	';break;
case '	060611		 ':echo '	Pandan	';break;
case '	060612		 ':echo '	Patnongon	';break;
case '	060613		 ':echo '	San Jose 	';break;
case '	060614		 ':echo '	San Remigio	';break;
case '	060615		 ':echo '	Sebaste	';break;
case '	060616		 ':echo '	Sibalom	';break;
case '	060617		 ':echo '	Tibiao	';break;
case '	060618		 ':echo '	Valderrama	';break;
case '	061901		 ':echo '	Cuartero	';break;
case '	061902		 ':echo '	Dao	';break;
case '	061903		 ':echo '	Dumalag	';break;
case '	061904		 ':echo '	Dumarao	';break;
case '	061905		 ':echo '	Ivisan	';break;
case '	061906		 ':echo '	Jamindan	';break;
case '	061907		 ':echo '	Ma-Ayon	';break;
case '	061908		 ':echo '	Mambusao	';break;
case '	061909		 ':echo '	Panay	';break;
case '	061910		 ':echo '	Panitan	';break;
case '	061911		 ':echo '	Pilar	';break;
case '	061912		 ':echo '	Pontevedra	';break;
case '	061913		 ':echo '	President Roxas	';break;
case '	061915		 ':echo '	Sapi-An	';break;
case '	061916		 ':echo '	Sigma	';break;
case '	061917		 ':echo '	Tapaz	';break;
case '	063001		 ':echo '	Ajuy	';break;
case '	063002		 ':echo '	Alimodian	';break;
case '	063003		 ':echo '	Anilao	';break;
case '	063004		 ':echo '	Badiangan	';break;
case '	063005		 ':echo '	Balasan	';break;
case '	063006		 ':echo '	Banate	';break;
case '	063007		 ':echo '	Barotac Nuevo	';break;
case '	063008		 ':echo '	Barotac Viejo	';break;
case '	063009		 ':echo '	Batad	';break;
case '	063010		 ':echo '	Bingawan	';break;
case '	063012		 ':echo '	Cabatuan	';break;
case '	063013		 ':echo '	Calinog	';break;
case '	063014		 ':echo '	Carles	';break;
case '	063015		 ':echo '	Concepcion	';break;
case '	063016		 ':echo '	Dingle	';break;
case '	063017		 ':echo '	Dueñas	';break;
case '	063018		 ':echo '	Dumangas	';break;
case '	063019		 ':echo '	Estancia	';break;
case '	063020		 ':echo '	Guimbal	';break;
case '	063021		 ':echo '	Igbaras	';break;
case '	063023		 ':echo '	Janiuay	';break;
case '	063025		 ':echo '	Lambunao	';break;
case '	063026		 ':echo '	Leganes	';break;
case '	063027		 ':echo '	Lemery	';break;
case '	063028		 ':echo '	Leon	';break;
case '	063029		 ':echo '	Maasin	';break;
case '	063030		 ':echo '	Miagao	';break;
case '	063031		 ':echo '	Mina	';break;
case '	063032		 ':echo '	New Lucena	';break;
case '	063034		 ':echo '	Oton	';break;
case '	063036		 ':echo '	Pavia	';break;
case '	063037		 ':echo '	Pototan	';break;
case '	063038		 ':echo '	San Dionisio	';break;
case '	063039		 ':echo '	San Enrique	';break;
case '	063040		 ':echo '	San Joaquin	';break;
case '	063041		 ':echo '	San Miguel	';break;
case '	063042		 ':echo '	San Rafael	';break;
case '	063043		 ':echo '	Santa Barbara	';break;
case '	063044		 ':echo '	Sara	';break;
case '	063045		 ':echo '	Tigbauan	';break;
case '	063046		 ':echo '	Tubungan	';break;
case '	063047		 ':echo '	Zarraga	';break;
case '	064503		 ':echo '	Binalbagan	';break;
case '	064505		 ':echo '	Calatrava	';break;
case '	064506		 ':echo '	Candoni	';break;
case '	064507		 ':echo '	Cauayan	';break;
case '	064508		 ':echo '	Enrique B. Magalona	';break;
case '	064511		 ':echo '	Hinigaran	';break;
case '	064512		 ':echo '	Hinoba-an	';break;
case '	064513		 ':echo '	Ilog	';break;
case '	064514		 ':echo '	Isabela	';break;
case '	064517		 ':echo '	La Castellana	';break;
case '	064518		 ':echo '	Manapla	';break;
case '	064519		 ':echo '	Moises Padilla	';break;
case '	064520		 ':echo '	Murcia	';break;
case '	064521		 ':echo '	Pontevedra	';break;
case '	064522		 ':echo '	Pulupandan	';break;
case '	064525		 ':echo '	San Enrique	';break;
case '	064529		 ':echo '	Toboso	';break;
case '	064530		 ':echo '	Valladolid	';break;
case '	064532		 ':echo '	Salvador Benedicto	';break;
case '	067901		 ':echo '	Buenavista	';break;
case '	067902		 ':echo '	Jordan 	';break;
case '	067903		 ':echo '	Nueva Valencia	';break;
case '	067904		 ':echo '	San Lorenzo	';break;
case '	067905		 ':echo '	Sibunag	';break;
case '	0701201		 ':echo '	Alburquerque	';break;
case '	0701202		 ':echo '	Alicia	';break;
case '	0701203		 ':echo '	Anda	';break;
case '	0701204		 ':echo '	Antequera	';break;
case '	0701205		 ':echo '	Baclayon	';break;
case '	0701206		 ':echo '	Balilihan	';break;
case '	0701207		 ':echo '	Batuan	';break;
case '	0701208		 ':echo '	Bilar	';break;
case '	0701209		 ':echo '	Buenavista	';break;
case '	0701210		 ':echo '	Calape	';break;
case '	0701211		 ':echo '	Candijay	';break;
case '	0701212		 ':echo '	Carmen	';break;
case '	0701213		 ':echo '	Catigbian	';break;
case '	0701214		 ':echo '	Clarin	';break;
case '	0701215		 ':echo '	Corella	';break;
case '	0701216		 ':echo '	Cortes	';break;
case '	0701217		 ':echo '	Dagohoy	';break;
case '	0701218		 ':echo '	Danao	';break;
case '	0701219		 ':echo '	Dauis	';break;
case '	0701220		 ':echo '	Dimiao	';break;
case '	0701221		 ':echo '	Duero	';break;
case '	0701222		 ':echo '	Garcia Hernandez	';break;
case '	0701223		 ':echo '	Guindulman	';break;
case '	0701224		 ':echo '	Inabanga	';break;
case '	0701225		 ':echo '	Jagna	';break;
case '	0701226		 ':echo '	Getafe	';break;
case '	0701227		 ':echo '	Lila	';break;
case '	0701228		 ':echo '	Loay	';break;
case '	0701229		 ':echo '	Loboc	';break;
case '	0701230		 ':echo '	Loon	';break;
case '	0701231		 ':echo '	Mabini	';break;
case '	0701232		 ':echo '	Maribojoc	';break;
case '	0701233		 ':echo '	Panglao	';break;
case '	0701234		 ':echo '	Pilar	';break;
case '	0701235		 ':echo '	President Carlos P. Garcia	';break;
case '	0701236		 ':echo '	Sagbayan	';break;
case '	0701237		 ':echo '	San Isidro	';break;
case '	0701238		 ':echo '	San Miguel	';break;
case '	0701239		 ':echo '	Sevilla	';break;
case '	0701240		 ':echo '	Sierra Bullones	';break;
case '	0701241		 ':echo '	Sikatuna	';break;
case '	0701243		 ':echo '	Talibon	';break;
case '	0701244		 ':echo '	Trinidad	';break;
case '	0701245		 ':echo '	Tubigon	';break;
case '	0701246		 ':echo '	Ubay	';break;
case '	0701247		 ':echo '	Valencia	';break;
case '	0701248		 ':echo '	Bien Unido	';break;
case '	0702201		 ':echo '	Alcantara	';break;
case '	0702202		 ':echo '	Alcoy	';break;
case '	0702203		 ':echo '	Alegria	';break;
case '	0702204		 ':echo '	Aloguinsan	';break;
case '	0702205		 ':echo '	Argao	';break;
case '	0702206		 ':echo '	Asturias	';break;
case '	0702207		 ':echo '	Badian	';break;
case '	0702208		 ':echo '	Balamban	';break;
case '	0702209		 ':echo '	Bantayan	';break;
case '	0702210		 ':echo '	Barili	';break;
case '	0702212		 ':echo '	Boljoon	';break;
case '	0702213		 ':echo '	Borbon	';break;
case '	0702215		 ':echo '	Carmen	';break;
case '	0702216		 ':echo '	Catmon	';break;
case '	0702218		 ':echo '	Compostela	';break;
case '	0702219		 ':echo '	Consolacion	';break;
case '	0702220		 ':echo '	Cordova	';break;
case '	0702221		 ':echo '	Daanbantayan	';break;
case '	0702222		 ':echo '	Dalaguete	';break;
case '	0702224		 ':echo '	Dumanjug	';break;
case '	0702225		 ':echo '	Ginatilan	';break;
case '	0702227		 ':echo '	Liloan	';break;
case '	0702228		 ':echo '	Madridejos	';break;
case '	0702229		 ':echo '	Malabuyoc	';break;
case '	0702231		 ':echo '	Medellin	';break;
case '	0702232		 ':echo '	Minglanilla	';break;
case '	0702233		 ':echo '	Moalboal	';break;
case '	0702235		 ':echo '	Oslob	';break;
case '	0702236		 ':echo '	Pilar	';break;
case '	0702237		 ':echo '	Pinamungajan	';break;
case '	0702238		 ':echo '	Poro	';break;
case '	0702239		 ':echo '	Ronda	';break;
case '	0702240		 ':echo '	Samboan	';break;
case '	0702241		 ':echo '	San Fernando	';break;
case '	0702242		 ':echo '	San Francisco	';break;
case '	0702243		 ':echo '	San Remigio	';break;
case '	0702244		 ':echo '	Santa Fe	';break;
case '	0702245		 ':echo '	Santander	';break;
case '	0702246		 ':echo '	Sibonga	';break;
case '	0702247		 ':echo '	Sogod	';break;
case '	0702248		 ':echo '	Tabogon	';break;
case '	0702249		 ':echo '	Tabuelan	';break;
case '	0702252		 ':echo '	Tuburan	';break;
case '	0702253		 ':echo '	Tudela	';break;
case '	0704601		 ':echo '	Amlan	';break;
case '	0704602		 ':echo '	Ayungon	';break;
case '	0704603		 ':echo '	Bacong	';break;
case '	0704605		 ':echo '	Basay	';break;
case '	0704607		 ':echo '	Bindoy	';break;
case '	0704609		 ':echo '	Dauin	';break;
case '	0704612		 ':echo '	Jimalalud	';break;
case '	0704613		 ':echo '	La Libertad	';break;
case '	0704614		 ':echo '	Mabinay	';break;
case '	0704615		 ':echo '	Manjuyod	';break;
case '	0704616		 ':echo '	Pamplona	';break;
case '	0704617		 ':echo '	San Jose	';break;
case '	0704618		 ':echo '	Santa Catalina	';break;
case '	0704619		 ':echo '	Siaton	';break;
case '	0704620		 ':echo '	Sibulan	';break;
case '	0704622		 ':echo '	Tayasan	';break;
case '	0704623		 ':echo '	Valencia	';break;
case '	0704624		 ':echo '	Vallehermoso	';break;
case '	0704625		 ':echo '	Zamboanguita	';break;
case '	0706101		 ':echo '	Enrique Villanueva	';break;
case '	070612		 ':echo '	Larena	';break;
case '	070613		 ':echo '	Lazi	';break;
case '	0706104		 ':echo '	Maria	';break;
case '	070615		 ':echo '	San Juan	';break;
case '	0706106		 ':echo '	Siquijor 	';break;
case '	0802601		 ':echo '	Arteche	';break;
case '	0802602		 ':echo '	Balangiga	';break;
case '	0802603		 ':echo '	Balangkayan	';break;
case '	0802605		 ':echo '	Can-Avid	';break;
case '	0802606		 ':echo '	Dolores	';break;
case '	0802607		 ':echo '	General Macarthur	';break;
case '	0802608		 ':echo '	Giporlos	';break;
case '	0802609		 ':echo '	Guiuan	';break;
case '	0802610		 ':echo '	Hernani	';break;
case '	0802611		 ':echo '	Jipapad	';break;
case '	0802612		 ':echo '	Lawaan	';break;
case '	0802613		 ':echo '	Llorente	';break;
case '	0802614		 ':echo '	Maslog	';break;
case '	0802615		 ':echo '	Maydolong	';break;
case '	0802616		 ':echo '	Mercedes	';break;
case '	0802617		 ':echo '	Oras	';break;
case '	0802618		 ':echo '	Quinapondan	';break;
case '	0802619		 ':echo '	Salcedo	';break;
case '	0802620		 ':echo '	San Julian	';break;
case '	0802621		 ':echo '	San Policarpo	';break;
case '	0802622		 ':echo '	Sulat	';break;
case '	0802623		 ':echo '	Taft	';break;
case '	0803701		 ':echo '	Abuyog	';break;
case '	0803702		 ':echo '	Alangalang	';break;
case '	0803703		 ':echo '	Albuera	';break;
case '	0803705		 ':echo '	Babatngon	';break;
case '	0803706		 ':echo '	Barugo	';break;
case '	0803707		 ':echo '	Bato	';break;
case '	0803710		 ':echo '	Burauen	';break;
case '	0803713		 ':echo '	Calubian	';break;
case '	0803714		 ':echo '	Capoocan	';break;
case '	0803715		 ':echo '	Carigara	';break;
case '	0803717		 ':echo '	Dagami	';break;
case '	0803718		 ':echo '	Dulag	';break;
case '	0803719		 ':echo '	Hilongos	';break;
case '	0803720		 ':echo '	Hindang	';break;
case '	0803721		 ':echo '	Inopacan	';break;
case '	0803722		 ':echo '	Isabel	';break;
case '	0803723		 ':echo '	Jaro	';break;
case '	0803724		 ':echo '	Javier	';break;
case '	0803725		 ':echo '	Julita	';break;
case '	0803726		 ':echo '	Kananga	';break;
case '	0803728		 ':echo '	La Paz	';break;
case '	0803729		 ':echo '	Leyte	';break;
case '	0803730		 ':echo '	Macarthur	';break;
case '	0803731		 ':echo '	Mahaplag	';break;
case '	0803733		 ':echo '	Matag-Ob	';break;
case '	0803734		 ':echo '	Matalom	';break;
case '	0803735		 ':echo '	Mayorga	';break;
case '	0803736		 ':echo '	Merida	';break;
case '	0803739		 ':echo '	Palo	';break;
case '	0803740		 ':echo '	Palompon	';break;
case '	0803741		 ':echo '	Pastrana	';break;
case '	0803742		 ':echo '	San Isidro	';break;
case '	0803743		 ':echo '	San Miguel	';break;
case '	0803744		 ':echo '	Santa Fe	';break;
case '	0803745		 ':echo '	Tabango	';break;
case '	0803746		 ':echo '	Tabontabon	';break;
case '	0803748		 ':echo '	Tanauan	';break;
case '	0803749		 ':echo '	Tolosa	';break;
case '	0803750		 ':echo '	Tunga	';break;
case '	0803751		 ':echo '	Villaba	';break;
case '	0804801		 ':echo '	Allen	';break;
case '	0804802		 ':echo '	Biri	';break;
case '	0804803		 ':echo '	Bobon	';break;
case '	0804804		 ':echo '	Capul	';break;
case '	0804805		 ':echo '	Catarman 	';break;
case '	0804806		 ':echo '	Catubig	';break;
case '	0804807		 ':echo '	Gamay	';break;
case '	0804808		 ':echo '	Laoang	';break;
case '	0804809		 ':echo '	Lapinig	';break;
case '	0804810		 ':echo '	Las Navas	';break;
case '	0804811		 ':echo '	Lavezares	';break;
case '	0804812		 ':echo '	Mapanas	';break;
case '	0804813		 ':echo '	Mondragon	';break;
case '	0804814		 ':echo '	Palapag	';break;
case '	0804815		 ':echo '	Pambujan	';break;
case '	0804816		 ':echo '	Rosario	';break;
case '	0804817		 ':echo '	San Antonio	';break;
case '	0804818		 ':echo '	San Isidro	';break;
case '	0804819		 ':echo '	San Jose	';break;
case '	0804820		 ':echo '	San Roque	';break;
case '	0804821		 ':echo '	San Vicente	';break;
case '	0804822		 ':echo '	Silvino Lobos	';break;
case '	0804823		 ':echo '	Victoria	';break;
case '	0804824		 ':echo '	Lope De Vega	';break;
case '	0806001		 ':echo '	Almagro	';break;
case '	0806002		 ':echo '	Basey	';break;
case '	0806004		 ':echo '	Calbiga	';break;
case '	0806006		 ':echo '	Daram	';break;
case '	0806007		 ':echo '	Gandara	';break;
case '	0806008		 ':echo '	Hinabangan	';break;
case '	0806009		 ':echo '	Jiabong	';break;
case '	0806010		 ':echo '	Marabut	';break;
case '	0806011		 ':echo '	Matuguinao	';break;
case '	0806012		 ':echo '	Motiong	';break;
case '	0806013		 ':echo '	Pinabacdao	';break;
case '	0806014		 ':echo '	San Jose De Buan	';break;
case '	0806015		 ':echo '	San Sebastian	';break;
case '	0806016		 ':echo '	Santa Margarita	';break;
case '	0806017		 ':echo '	Santa Rita	';break;
case '	0806018		 ':echo '	Santo Niño	';break;
case '	0806019		 ':echo '	Talalora	';break;
case '	0806020		 ':echo '	Tarangnan	';break;
case '	0806021		 ':echo '	Villareal	';break;
case '	0806022		 ':echo '	Paranas	';break;
case '	0806023		 ':echo '	Zumarraga	';break;
case '	0806024		 ':echo '	Tagapul-An	';break;
case '	0806025		 ':echo '	San Jorge	';break;
case '	0806026		 ':echo '	Pagsanghan	';break;
case '	0806401		 ':echo '	Anahawan	';break;
case '	0806402		 ':echo '	Bontoc	';break;
case '	0806403		 ':echo '	Hinunangan	';break;
case '	0806404		 ':echo '	Hinundayan	';break;
case '	0806405		 ':echo '	Libagon	';break;
case '	0806406		 ':echo '	Liloan	';break;
case '	0806408		 ':echo '	Macrohon	';break;
case '	0806409		 ':echo '	Malitbog	';break;
case '	0806410		 ':echo '	Padre Burgos	';break;
case '	0806411		 ':echo '	Pintuyan	';break;
case '	0806412		 ':echo '	Saint Bernard	';break;
case '	0806413		 ':echo '	San Francisco	';break;
case '	0806414		 ':echo '	San Juan	';break;
case '	0806415		 ':echo '	San Ricardo	';break;
case '	0806416		 ':echo '	Silago	';break;
case '	0806417		 ':echo '	Sogod	';break;
case '	0806418		 ':echo '	Tomas Oppus	';break;
case '	0806419		 ':echo '	Limasawa	';break;
case '	0807801		 ':echo '	Almeria	';break;
case '	0807802		 ':echo '	Biliran	';break;
case '	0807803		 ':echo '	Cabucgayan	';break;
case '	0807804		 ':echo '	Caibiran	';break;
case '	0807805		 ':echo '	Culaba	';break;
case '	0807806		 ':echo '	Kawayan	';break;
case '	0807807		 ':echo '	Maripipi	';break;
case '	0807808		 ':echo '	Naval 	';break;
case '	0907203		 ':echo '	Katipunan	';break;
case '	0907204		 ':echo '	La Libertad	';break;
case '	0907205		 ':echo '	Labason	';break;
case '	0907206		 ':echo '	Liloy	';break;
case '	0907207		 ':echo '	Manukan	';break;
case '	0907208		 ':echo '	Mutia	';break;
case '	0907209		 ':echo '	Piñan	';break;
case '	0907210		 ':echo '	Polanco	';break;
case '	0907211		 ':echo '	Pres. Manuel A. Roxas	';break;
case '	0907212		 ':echo '	Rizal	';break;
case '	0907213		 ':echo '	Salug	';break;
case '	0907214		 ':echo '	Sergio Osmeña Sr.	';break;
case '	0907215		 ':echo '	Siayan	';break;
case '	0907216		 ':echo '	Sibuco	';break;
case '	0907217		 ':echo '	Sibutad	';break;
case '	0907218		 ':echo '	Sindangan	';break;
case '	0907219		 ':echo '	Siocon	';break;
case '	0907220		 ':echo '	Sirawai	';break;
case '	0907221		 ':echo '	Tampilisan	';break;
case '	0907222		 ':echo '	Jose Dalman	';break;
case '	0907223		 ':echo '	Gutalac	';break;
case '	0907224		 ':echo '	Baliguian	';break;
case '	0907225		 ':echo '	Godod	';break;
case '	0907226		 ':echo '	Bacungan	';break;
case '	0907227		 ':echo '	Kalawit	';break;
case '	0907302		 ':echo '	Aurora	';break;
case '	0907303		 ':echo '	Bayog	';break;
case '	0907305		 ':echo '	Dimataling	';break;
case '	0907306		 ':echo '	Dinas	';break;
case '	0907307		 ':echo '	Dumalinao	';break;
case '	0907308		 ':echo '	Dumingag	';break;
case '	0907311		 ':echo '	Kumalarang	';break;
case '	0907312		 ':echo '	Labangan	';break;
case '	0907313		 ':echo '	Lapuyan	';break;
case '	0907315		 ':echo '	Mahayag	';break;
case '	0907317		 ':echo '	Margosatubig	';break;
case '	0907318		 ':echo '	Midsalip	';break;
case '	0907319		 ':echo '	Molave	';break;
case '	0907323		 ':echo '	Ramon Magsaysay	';break;
case '	0907324		 ':echo '	San Miguel	';break;
case '	0907325		 ':echo '	San Pablo	';break;
case '	0907327		 ':echo '	Tabina	';break;
case '	0907328		 ':echo '	Tambulig	';break;
case '	0907330		 ':echo '	Tukuran	';break;
case '	0907333		 ':echo '	Lakewood	';break;
case '	0907337		 ':echo '	Josefina	';break;
case '	0907338		 ':echo '	Pitogo	';break;
case '	0907340		 ':echo '	Sominot	';break;
case '	0907341		 ':echo '	Vincenzo A. Sagun	';break;
case '	0907343		 ':echo '	Guipos	';break;
case '	0907344		 ':echo '	Tigbao	';break;
case '	0908301		 ':echo '	Alicia	';break;
case '	0908302		 ':echo '	Buug	';break;
case '	0908303		 ':echo '	Diplahan	';break;
case '	0908304		 ':echo '	Imelda	';break;
case '	0908305		 ':echo '	Ipil 	';break;
case '	0908306		 ':echo '	Kabasalan	';break;
case '	0908307		 ':echo '	Mabuhay	';break;
case '	0908308		 ':echo '	Malangas	';break;
case '	0908309		 ':echo '	Naga	';break;
case '	0908310		 ':echo '	Olutanga	';break;
case '	0908311		 ':echo '	Payao	';break;
case '	0908312		 ':echo '	Roseller Lim	';break;
case '	0908313		 ':echo '	Siay	';break;
case '	0908314		 ':echo '	Talusan	';break;
case '	0908315		 ':echo '	Titay	';break;
case '	0908316		 ':echo '	Tungawan	';break;
case '	1001301		 ':echo '	Baungon	';break;
case '	1001302		 ':echo '	Damulog	';break;
case '	1001303		 ':echo '	Dangcagan	';break;
case '	1001304		 ':echo '	Don Carlos	';break;
case '	1001305		 ':echo '	Impasug-ong	';break;
case '	1001306		 ':echo '	Kadingilan	';break;
case '	1001307		 ':echo '	Kalilangan	';break;
case '	1001308		 ':echo '	Kibawe	';break;
case '	1001309		 ':echo '	Kitaotao	';break;
case '	1001310		 ':echo '	Lantapan	';break;
case '	1001311		 ':echo '	Libona	';break;
case '	1001313		 ':echo '	Malitbog	';break;
case '	1001314		 ':echo '	Manolo Fortich	';break;
case '	1001315		 ':echo '	Maramag	';break;
case '	1001316		 ':echo '	Pangantucan	';break;
case '	1001317		 ':echo '	Quezon	';break;
case '	1001318		 ':echo '	San Fernando	';break;
case '	1001319		 ':echo '	Sumilao	';break;
case '	1001320		 ':echo '	Talakag	';break;
case '	1001322		 ':echo '	Cabanglasan	';break;
case '	1001801		 ':echo '	Catarman	';break;
case '	1001802		 ':echo '	Guinsiliban	';break;
case '	1001803		 ':echo '	Mahinog	';break;
case '	1001804		 ':echo '	Mambajao 	';break;
case '	1001805		 ':echo '	Sagay	';break;
case '	1003501		 ':echo '	Bacolod	';break;
case '	1003502		 ':echo '	Baloi	';break;
case '	1003503		 ':echo '	Baroy	';break;
case '	1003505		 ':echo '	Kapatagan	';break;
case '	1003506		 ':echo '	Sultan Naga Dimaporo	';break;
case '	1003507		 ':echo '	Kauswagan	';break;
case '	1003508		 ':echo '	Kolambugan	';break;
case '	1003509		 ':echo '	Lala	';break;
case '	1003510		 ':echo '	Linamon	';break;
case '	1003511		 ':echo '	Magsaysay	';break;
case '	1003512		 ':echo '	Maigo	';break;
case '	1003513		 ':echo '	Matungao	';break;
case '	1003514		 ':echo '	Munai	';break;
case '	1003515		 ':echo '	Nunungan	';break;
case '	1003516		 ':echo '	Pantao Ragat	';break;
case '	1003517		 ':echo '	Poona Piagapo	';break;
case '	1003518		 ':echo '	Salvador	';break;
case '	1003519		 ':echo '	Sapad	';break;
case '	1003520		 ':echo '	Tagoloan	';break;
case '	1003521		 ':echo '	Tangcal	';break;
case '	1003522		 ':echo '	Tubod 	';break;
case '	1003523		 ':echo '	Pantar	';break;
case '	1004201		 ':echo '	Aloran	';break;
case '	1004202		 ':echo '	Baliangao	';break;
case '	1004203		 ':echo '	Bonifacio	';break;
case '	1004204		 ':echo '	Calamba	';break;
case '	1004205		 ':echo '	Clarin	';break;
case '	1004206		 ':echo '	Concepcion	';break;
case '	1004207		 ':echo '	Jimenez	';break;
case '	1004208		 ':echo '	Lopez Jaena	';break;
case '	1004211		 ':echo '	Panaon	';break;
case '	1004212		 ':echo '	Plaridel	';break;
case '	1004213		 ':echo '	Sapang Dalaga	';break;
case '	1004214		 ':echo '	Sinacaban	';break;
case '	1004216		 ':echo '	Tudela	';break;
case '	1004217		 ':echo '	Don Victoriano Chiongbian	';break;
case '	1004301		 ':echo '	Alubijid	';break;
case '	1004302		 ':echo '	Balingasag	';break;
case '	1004303		 ':echo '	Balingoan	';break;
case '	1004304		 ':echo '	Binuangan	';break;
case '	1004306		 ':echo '	Claveria	';break;
case '	1004309		 ':echo '	Gitagum	';break;
case '	1004310		 ':echo '	Initao	';break;
case '	1004311		 ':echo '	Jasaan	';break;
case '	1004312		 ':echo '	Kinoguitan	';break;
case '	1004313		 ':echo '	Lagonglong	';break;
case '	1004314		 ':echo '	Laguindingan	';break;
case '	1004315		 ':echo '	Libertad	';break;
case '	1004316		 ':echo '	Lugait	';break;
case '	1004317		 ':echo '	Magsaysay	';break;
case '	1004318		 ':echo '	Manticao	';break;
case '	1004319		 ':echo '	Medina	';break;
case '	1004320		 ':echo '	Naawan	';break;
case '	1004321		 ':echo '	Opol	';break;
case '	1004322		 ':echo '	Salay	';break;
case '	1004323		 ':echo '	Sugbongcogon	';break;
case '	1004324		 ':echo '	Tagoloan	';break;
case '	1004325		 ':echo '	Talisayan	';break;
case '	1004326		 ':echo '	Villanueva	';break;
case '	112301		 ':echo '	Asuncion	';break;
case '	112303		 ':echo '	Carmen	';break;
case '	112305		 ':echo '	Kapalong	';break;
case '	112314		 ':echo '	New Corella	';break;
case '	112318		 ':echo '	Santo Tomas	';break;
case '	112322		 ':echo '	Talaingod	';break;
case '	112323		 ':echo '	Braulio E. Dujali	';break;
case '	112324		 ':echo '	San Isidro	';break;
case '	112401		 ':echo '	Bansalan	';break;
case '	112404		 ':echo '	Hagonoy	';break;
case '	112406		 ':echo '	Kiblawan	';break;
case '	112407		 ':echo '	Magsaysay	';break;
case '	112408		 ':echo '	Malalag	';break;
case '	112410		 ':echo '	Matanao	';break;
case '	112411		 ':echo '	Padada	';break;
case '	112412		 ':echo '	Santa Cruz	';break;
case '	112414		 ':echo '	Sulop	';break;
case '	112501		 ':echo '	Baganga	';break;
case '	112502		 ':echo '	Banaybanay	';break;
case '	112503		 ':echo '	Boston	';break;
case '	112504		 ':echo '	Caraga	';break;
case '	112505		 ':echo '	Cateel	';break;
case '	112506		 ':echo '	Governor Generoso	';break;
case '	112507		 ':echo '	Lupon	';break;
case '	112508		 ':echo '	Manay	';break;
case '	112510		 ':echo '	San Isidro	';break;
case '	112511		 ':echo '	Tarragona	';break;
case '	1108201		 ':echo '	Compostela	';break;
case '	1108202		 ':echo '	Laak	';break;
case '	1108203		 ':echo '	Mabini	';break;
case '	1108204		 ':echo '	Maco	';break;
case '	1108205		 ':echo '	Maragusan	';break;
case '	1108206		 ':echo '	Mawab	';break;
case '	1108207		 ':echo '	Monkayo	';break;
case '	1108208		 ':echo '	Montevista	';break;
case '	1108209		 ':echo '	Nabunturan 	';break;
case '	1108210		 ':echo '	New Bataan	';break;
case '	1108211		 ':echo '	Pantukan	';break;
case '	1108601		 ':echo '	Don Marcelino	';break;
case '	1108602		 ':echo '	Jose Abad Santos	';break;
case '	1108603		 ':echo '	Malita 	';break;
case '	1108604		 ':echo '	Santa Maria	';break;
case '	1108605		 ':echo '	Sarangani	';break;
case '	1204701		 ':echo '	Alamada	';break;
case '	1204702		 ':echo '	Carmen	';break;
case '	1204703		 ':echo '	Kabacan	';break;
case '	1204705		 ':echo '	Libungan	';break;
case '	1204706		 ':echo '	Magpet	';break;
case '	1204707		 ':echo '	Makilala	';break;
case '	1204708		 ':echo '	Matalam	';break;
case '	1204709		 ':echo '	Midsayap	';break;
case '	1204710		 ':echo '	MLang	';break;
case '	1204711		 ':echo '	Pigkawayan	';break;
case '	1204712		 ':echo '	Pikit	';break;
case '	1204713		 ':echo '	President Roxas	';break;
case '	1204714		 ':echo '	Tulunan	';break;
case '	1204715		 ':echo '	Antipas	';break;
case '	1204716		 ':echo '	Banisilan	';break;
case '	1204717		 ':echo '	Aleosan	';break;
case '	1204718		 ':echo '	Arakan	';break;
case '	1206302		 ':echo '	Banga	';break;
case '	1206311		 ':echo '	Norala	';break;
case '	1206312		 ':echo '	Polomolok	';break;
case '	1206313		 ':echo '	Surallah	';break;
case '	1206314		 ':echo '	Tampakan	';break;
case '	1206315		 ':echo '	Tantangan	';break;
case '	1206316		 ':echo '	TBoli	';break;
case '	1206317		 ':echo '	Tupi	';break;
case '	1206318		 ':echo '	Santo Niño	';break;
case '	1206319		 ':echo '	Lake Sebu	';break;
case '	1206501		 ':echo '	Bagumbayan	';break;
case '	1206502		 ':echo '	Columbio	';break;
case '	1206503		 ':echo '	Esperanza	';break;
case '	1206504		 ':echo '	Isulan 	';break;
case '	1206505		 ':echo '	Kalamansig	';break;
case '	1206506		 ':echo '	Lebak	';break;
case '	1206507		 ':echo '	Lutayan	';break;
case '	1206508		 ':echo '	Lambayong	';break;
case '	1206509		 ':echo '	Palimbang	';break;
case '	1206510		 ':echo '	President Quirino	';break;
case '	1206512		 ':echo '	Sen. Ninoy Aquino	';break;
case '	1208001		 ':echo '	Alabel 	';break;
case '	1208002		 ':echo '	Glan	';break;
case '	1208003		 ':echo '	Kiamba	';break;
case '	1208004		 ':echo '	Maasim	';break;
case '	1208005		 ':echo '	Maitum	';break;
case '	1208006		 ':echo '	Malapatan	';break;
case '	1208007		 ':echo '	Malungon	';break;
case '	1381701		 ':echo '	Pateros	';break;
case '	1400101		 ':echo '	Bangued 	';break;
case '	140012		 ':echo '	Boliney	';break;
case '	140013		 ':echo '	Bucay	';break;
case '	1400104		 ':echo '	Bucloc	';break;
case '	140015		 ':echo '	Daguioman	';break;
case '	1400106		 ':echo '	Danglas	';break;
case '	1400107		 ':echo '	Dolores	';break;
case '	1400108		 ':echo '	La Paz	';break;
case '	1400109		 ':echo '	Lacub	';break;
case '	1400110		 ':echo '	Lagangilang	';break;
case '	1400111		 ':echo '	Lagayan	';break;
case '	1400112		 ':echo '	Langiden	';break;
case '	1400113		 ':echo '	Licuan-Baay	';break;
case '	1400114		 ':echo '	Luba	';break;
case '	1400115		 ':echo '	Malibcong	';break;
case '	1400116		 ':echo '	Manabo	';break;
case '	1400117		 ':echo '	Peñarrubia	';break;
case '	1400118		 ':echo '	Pidigan	';break;
case '	1400119		 ':echo '	Pilar	';break;
case '	1400120		 ':echo '	Sallapadan	';break;
case '	1400121		 ':echo '	San Isidro	';break;
case '	1400122		 ':echo '	San Juan	';break;
case '	1400123		 ':echo '	San Quintin	';break;
case '	1400124		 ':echo '	Tayum	';break;
case '	1400125		 ':echo '	Tineg	';break;
case '	1400126		 ':echo '	Tubo	';break;
case '	1400127		 ':echo '	Villaviciosa	';break;
case '	1401101		 ':echo '	Atok	';break;
case '	140113		 ':echo '	Bakun	';break;
case '	1401104		 ':echo '	Bokod	';break;
case '	140115		 ':echo '	Buguias	';break;
case '	1401106		 ':echo '	Itogon	';break;
case '	1401107		 ':echo '	Kabayan	';break;
case '	1401108		 ':echo '	Kapangan	';break;
case '	1401109		 ':echo '	Kibungan	';break;
case '	1401110		 ':echo '	La Trinidad 	';break;
case '	1401111		 ':echo '	Mankayan	';break;
case '	1401112		 ':echo '	Sablan	';break;
case '	1401113		 ':echo '	Tuba	';break;
case '	1401114		 ':echo '	Tublay	';break;
case '	1402701		 ':echo '	Banaue	';break;
case '	1402702		 ':echo '	Hungduan	';break;
case '	1402703		 ':echo '	Kiangan	';break;
case '	1402704		 ':echo '	Lagawe 	';break;
case '	1402705		 ':echo '	Lamut	';break;
case '	1402706		 ':echo '	Mayoyao	';break;
case '	1402707		 ':echo '	Alfonso Lista	';break;
case '	1402708		 ':echo '	Aguinaldo	';break;
case '	1402709		 ':echo '	Hingyon	';break;
case '	1402710		 ':echo '	Tinoc	';break;
case '	1402711		 ':echo '	Asipulo	';break;
case '	1403201		 ':echo '	Balbalan	';break;
case '	1403206		 ':echo '	Lubuagan	';break;
case '	1403208		 ':echo '	Pasil	';break;
case '	1403209		 ':echo '	Pinukpuk	';break;
case '	1403211		 ':echo '	Rizal	';break;
case '	1403214		 ':echo '	Tanudan	';break;
case '	1403215		 ':echo '	Tinglayan	';break;
case '	1404401		 ':echo '	Barlig	';break;
case '	1404402		 ':echo '	Bauko	';break;
case '	1404403		 ':echo '	Besao	';break;
case '	1404404		 ':echo '	Bontoc 	';break;
case '	1404405		 ':echo '	Natonin	';break;
case '	1404406		 ':echo '	Paracelis	';break;
case '	1404407		 ':echo '	Sabangan	';break;
case '	1404408		 ':echo '	Sadanga	';break;
case '	1404409		 ':echo '	Sagada	';break;
case '	1404410		 ':echo '	Tadian	';break;
case '	1408101		 ':echo '	Calanasan	';break;
case '	140812		 ':echo '	Conner	';break;
case '	140813		 ':echo '	Flora	';break;
case '	1408104		 ':echo '	Kabugao 	';break;
case '	140815		 ':echo '	Luna	';break;
case '	1408106		 ':echo '	Pudtol	';break;
case '	1408107		 ':echo '	Santa Marcela	';break;
case '	1600201		 ':echo '	Buenavista	';break;
case '	1600204		 ':echo '	Carmen	';break;
case '	1600205		 ':echo '	Jabonga	';break;
case '	1600206		 ':echo '	Kitcharao	';break;
case '	1600207		 ':echo '	Las Nieves	';break;
case '	1600208		 ':echo '	Magallanes	';break;
case '	1600209		 ':echo '	Nasipit	';break;
case '	1600210		 ':echo '	Santiago	';break;
case '	1600211		 ':echo '	Tubay	';break;
case '	1600212		 ':echo '	Remedios T. Romualdez	';break;
case '	1600302		 ':echo '	Bunawan	';break;
case '	1600303		 ':echo '	Esperanza	';break;
case '	1600304		 ':echo '	La Paz	';break;
case '	1600305		 ':echo '	Loreto	';break;
case '	1600306		 ':echo '	Prosperidad 	';break;
case '	1600307		 ':echo '	Rosario	';break;
case '	1600308		 ':echo '	San Francisco	';break;
case '	1600309		 ':echo '	San Luis	';break;
case '	1600310		 ':echo '	Santa Josefa	';break;
case '	1600311		 ':echo '	Talacogon	';break;
case '	1600312		 ':echo '	Trento	';break;
case '	1600313		 ':echo '	Veruela	';break;
case '	1600314		 ':echo '	Sibagat	';break;
case '	1606701		 ':echo '	Alegria	';break;
case '	1606702		 ':echo '	Bacuag	';break;
case '	1606704		 ':echo '	Burgos	';break;
case '	1606706		 ':echo '	Claver	';break;
case '	1606707		 ':echo '	Dapa	';break;
case '	1606708		 ':echo '	Del Carmen	';break;
case '	1606710		 ':echo '	General Luna	';break;
case '	1606711		 ':echo '	Gigaquit	';break;
case '	1606714		 ':echo '	Mainit	';break;
case '	1606715		 ':echo '	Malimono	';break;
case '	1606716		 ':echo '	Pilar	';break;
case '	1606717		 ':echo '	Placer	';break;
case '	1606718		 ':echo '	San Benito	';break;
case '	1606719		 ':echo '	San Francisco	';break;
case '	1606720		 ':echo '	San Isidro	';break;
case '	1606721		 ':echo '	Santa Monica	';break;
case '	1606722		 ':echo '	Sison	';break;
case '	1606723		 ':echo '	Socorro	';break;
case '	1606725		 ':echo '	Tagana-An	';break;
case '	1606727		 ':echo '	Tubod	';break;
case '	1606801		 ':echo '	Barobo	';break;
case '	1606802		 ':echo '	Bayabas	';break;
case '	1606804		 ':echo '	Cagwait	';break;
case '	1606805		 ':echo '	Cantilan	';break;
case '	1606806		 ':echo '	Carmen	';break;
case '	1606807		 ':echo '	Carrascal	';break;
case '	1606808		 ':echo '	Cortes	';break;
case '	1606809		 ':echo '	Hinatuan	';break;
case '	1606810		 ':echo '	Lanuza	';break;
case '	1606811		 ':echo '	Lianga	';break;
case '	1606812		 ':echo '	Lingig	';break;
case '	1606813		 ':echo '	Madrid	';break;
case '	1606814		 ':echo '	Marihatag	';break;
case '	1606815		 ':echo '	San Agustin	';break;
case '	1606816		 ':echo '	San Miguel	';break;
case '	1606817		 ':echo '	Tagbina	';break;
case '	1606818		 ':echo '	Tago	';break;
case '	1608501		 ':echo '	Basilisa	';break;
case '	1608502		 ':echo '	Cagdianao	';break;
case '	1608503		 ':echo '	Dinagat	';break;
case '	1608504		 ':echo '	Libjo	';break;
case '	1608505		 ':echo '	Loreto	';break;
case '	1608506		 ':echo '	San Jose 	';break;
case '	1608507		 ':echo '	Tubajon	';break;
case '	1900703		 ':echo '	Lantawan	';break;
case '	1900704		 ':echo '	Maluso	';break;
case '	1900705		 ':echo '	Sumisip	';break;
case '	1900706		 ':echo '	Tipo-Tipo	';break;
case '	1900707		 ':echo '	Tuburan	';break;
case '	1900708		 ':echo '	Akbar	';break;
case '	1900709		 ':echo '	Al-Barka	';break;
case '	1900710		 ':echo '	Hadji Mohammad Ajul	';break;
case '	1900711		 ':echo '	Ungkaya Pukan	';break;
case '	1900712		 ':echo '	Hadji Muhtamad	';break;
case '	1900713		 ':echo '	Tabuan-Lasa	';break;
case '	1903601		 ':echo '	Bacolod-Kalawi	';break;
case '	1903602		 ':echo '	Balabagan	';break;
case '	1903603		 ':echo '	Balindong	';break;
case '	1903604		 ':echo '	Bayang	';break;
case '	1903605		 ':echo '	Binidayan	';break;
case '	1903606		 ':echo '	Bubong	';break;
case '	1903607		 ':echo '	Butig	';break;
case '	1903609		 ':echo '	Ganassi	';break;
case '	1903610		 ':echo '	Kapai	';break;
case '	1903611		 ':echo '	Lumba-Bayabao	';break;
case '	1903612		 ':echo '	Lumbatan	';break;
case '	1903613		 ':echo '	Madalum	';break;
case '	1903614		 ':echo '	Madamba	';break;
case '	1903615		 ':echo '	Malabang	';break;
case '	1903616		 ':echo '	Marantao	';break;
case '	1903618		 ':echo '	Masiu	';break;
case '	1903619		 ':echo '	Mulondo	';break;
case '	1903620		 ':echo '	Pagayawan	';break;
case '	1903621		 ':echo '	Piagapo	';break;
case '	1903622		 ':echo '	Poona Bayabao	';break;
case '	1903623		 ':echo '	Pualas	';break;
case '	1903624		 ':echo '	Ditsaan-Ramain	';break;
case '	1903625		 ':echo '	Saguiaran	';break;
case '	1903626		 ':echo '	Tamparan	';break;
case '	1903627		 ':echo '	Taraka	';break;
case '	1903628		 ':echo '	Tubaran	';break;
case '	1903629		 ':echo '	Tugaya	';break;
case '	1903630		 ':echo '	Wao	';break;
case '	1903631		 ':echo '	Marogong	';break;
case '	1903632		 ':echo '	Calanogas	';break;
case '	1903633		 ':echo '	Buadiposo-Buntong	';break;
case '	1903634		 ':echo '	Maguing	';break;
case '	1903635		 ':echo '	Picong	';break;
case '	1903636		 ':echo '	Lumbayanague	';break;
case '	1903637		 ':echo '	Amai Manabilang	';break;
case '	1903638		 ':echo '	Tagoloan Ii	';break;
case '	1903639		 ':echo '	Kapatagan	';break;
case '	1903640		 ':echo '	Sultan Dumalondong	';break;
case '	1903641		 ':echo '	Lumbaca-Unayan	';break;
case '	1906601		 ':echo '	Indanan	';break;
case '	1906602		 ':echo '	Jolo 	';break;
case '	1906603		 ':echo '	Kalingalan Caluang	';break;
case '	1906604		 ':echo '	Luuk	';break;
case '	1906605		 ':echo '	Maimbung	';break;
case '	1906606		 ':echo '	Hadji Panglima Tahil	';break;
case '	1906607		 ':echo '	Old Panamao	';break;
case '	1906608		 ':echo '	Pangutaran	';break;
case '	1906609		 ':echo '	Parang	';break;
case '	1906610		 ':echo '	Pata	';break;
case '	1906611		 ':echo '	Patikul	';break;
case '	1906612		 ':echo '	Siasi	';break;
case '	1906613		 ':echo '	Talipao	';break;
case '	1906614		 ':echo '	Tapul	';break;
case '	1906615		 ':echo '	Tongkil	';break;
case '	1906616		 ':echo '	Panglima Estino	';break;
case '	1906617		 ':echo '	Lugus	';break;
case '	1906618		 ':echo '	Pandami	';break;
case '	1906619		 ':echo '	Omar	';break;
case '	1907001		 ':echo '	Panglima Sugala	';break;
case '	1907002		 ':echo '	Bongao 	';break;
case '	1907003		 ':echo '	Mapun	';break;
case '	1907004		 ':echo '	Simunul	';break;
case '	1907005		 ':echo '	Sitangkai	';break;
case '	1907006		 ':echo '	South Ubian	';break;
case '	1907007		 ':echo '	Tandubas	';break;
case '	1907008		 ':echo '	Turtle Islands	';break;
case '	1907009		 ':echo '	Languyan	';break;
case '	1907010		 ':echo '	Sapa-Sapa	';break;
case '	1907011		 ':echo '	Sibutu	';break;
case '	1908701		 ':echo '	Barira	';break;
case '	1908702		 ':echo '	Buldon	';break;
case '	1908704		 ':echo '	Datu Blah T. Sinsuat	';break;
case '	1908705		 ':echo '	Datu Odin Sinsuat	';break;
case '	1908706		 ':echo '	Kabuntalan	';break;
case '	1908707		 ':echo '	Matanog	';break;
case '	1908708		 ':echo '	Northern Kabuntalan	';break;
case '	1908709		 ':echo '	Parang	';break;
case '	1908710		 ':echo '	Sultan Kudarat	';break;
case '	1908711		 ':echo '	Sultan Mastura	';break;
case '	1908712		 ':echo '	Talitay	';break;
case '	1908713		 ':echo '	Upi	';break;
case '	1908801		 ':echo '	Ampatuan	';break;
case '	1908802		 ':echo '	Buluan	';break;
case '	1908803		 ':echo '	Datu Abdullah Sangki	';break;
case '	1908804		 ':echo '	Datu Anggal Midtimbang	';break;
case '	1908805		 ':echo '	Datu Hoffer Ampatuan	';break;
case '	1908806		 ':echo '	Datu Paglas	';break;
case '	1908807		 ':echo '	Datu Piang	';break;
case '	1908808		 ':echo '	Datu Salibo	';break;
case '	1908809		 ':echo '	Datu Saudi Ampatuan	';break;
case '	1908810		 ':echo '	Datu Unsay	';break;
case '	1908811		 ':echo '	Gen. S.K. Pendatun	';break;
case '	1908812		 ':echo '	Guindulungan	';break;
case '	1908813		 ':echo '	Mamasapano	';break;
case '	1908814		 ':echo '	Mangudadatu	';break;
case '	1908815		 ':echo '	Pagagawan	';break;
case '	1908816		 ':echo '	Pagalungan	';break;
case '	1908817		 ':echo '	Paglat	';break;
case '	1908818		 ':echo '	Pandag	';break;
case '	1908819		 ':echo '	Rajah Buayan	';break;
case '	1908820		 ':echo '	Shariff Aguak	';break;
case '	1908821		 ':echo '	Shariff Saydona Mustapha	';break;
case '	1908822		 ':echo '	South Upi	';break;
case '	1908823		 ':echo '	Sultan Sa Barongis	';break;
case '	1908824		 ':echo '	Talayan	';break;

}?>,




<?php switch ($meta['province']){

case '	128	':	echo '	Ilocos Norte	';break;
case '	0129	':	echo '	Ilocos Sur	';break;
case '	0133':	echo '	La Union	';break;
case '	0155':	echo '	Pangasinan	';break;
case '	0209':	echo '	Batanes	';break;
case '	0215':	echo '	Cagayan	';break;
case '	0231':	echo '	Isabela	';break;
case '	025':	echo '	Nueva Vizcaya	';break;
case '	0257':	echo '	Quirino	';break;
case '	0308':	echo '	Bataan	';break;
case '	0314':	echo '	Bulacan	';break;
case '	0349':	echo '	Nueva Ecija	';break;
case '	0354':	echo '	Pampanga	';break;
case '	0369':	echo '	Tarlac	';break;
case '	0371':	echo '	Zambales	';break;
case '	0377':	echo '	Aurora	';break;
case '	041':	echo '	Batangas	';break;
case '	0421':	echo '	Cavite	';break;
case '	0434':	echo '	Laguna	';break;
case '	0456':	echo '	Quezon	';break;
case '	0458':	echo '	Rizal	';break;
case '	174':	echo '	Marinduque	';break;
case '	1751':	echo '	Occidental Mindoro	';break;
case '	1752':	echo '	Oriental Mindoro	';break;
case '	1753':	echo '	Palawan	';break;
case '	1759':	echo '	Romblon	';break;
case '	055':	echo '	Albay	';break;
case '	0516':	echo '	Camarines Norte	';break;
case '	0517':	echo '	Camarines Sur	';break;
case '	052':	echo '	Catanduanes	';break;
case '	0541':	echo '	Masbate	';break;
case '	0562':	echo '	Sorsogon	';break;
case '	0604':	echo '	Aklan	';break;
case '	0606':	echo '	Antique	';break;
case '	0619':	echo '	Capiz	';break;
case '	063':	echo '	Iloilo	';break;
case '	0645':	echo '	Negros Occidental	';break;
case '	0679':	echo '	Guimaras	';break;
case '	07012':	echo '	Bohol	';break;
case '	07022':	echo '	Cebu	';break;
case '	07046':	echo '	Negros Oriental	';break;
case '	07061':	echo '	Siquijor	';break;
case '	08026':	echo '	Eastern Samar	';break;
case '	08037':	echo '	Leyte	';break;
case '	08048':	echo '	Northern Samar	';break;
case '	0806':	echo '	Samar	';break;
case '	08064':	echo '	Southern Leyte	';break;
case '	08078':	echo '	Biliran	';break;
case '	09072':	echo '	Zamboanga del Norte	';break;
case '	09073':	echo '	Zamboanga del Sur	';break;
case '	09083':	echo '	Zamboanga Sibugay	';break;
case '	10013':	echo '	Bukidnon	';break;
case '	10018':	echo '	Camiguin	';break;
case '	10035':	echo '	Lanao del Norte	';break;
case '	10042':	echo '	Misamis Occidental	';break;
case '	10043':	echo '	Misamis Oriental	';break;
case '	1123':	echo '	Davao del Norte	';break;
case '	1124':	echo '	Davao del Sur	';break;
case '	1125':	echo '	Davao Oriental	';break;
case '	11082':	echo '	Davao de Oro	';break;
case '	11086':	echo '	Davao Occidental	';break;
case '	12047':	echo '	Cotabato	';break;
case '	12063':	echo '	South Cotabato	';break;
case '	12065':	echo '	Sultan Kudarat	';break;
case '	1208':	echo '	Sarangani	';break;
case '	14001':	echo '	Abra	';break;
case '	14011':	echo '	Benguet	';break;
case '	14027':	echo '	Ifugao	';break;
case '	14032':	echo '	Kalinga	';break;
case '	14044':	echo '	Mountain Province	';break;
case '	14081':	echo '	Apayao	';break;
case '	16002':	echo '	Agusan del Norte	';break;
case '	16003':	echo '	Agusan del Sur	';break;
case '	16067':	echo '	Surigao del Norte	';break;
case '	16068':	echo '	Surigao del Sur	';break;
case '	16085':	echo '	Dinagat Islands	';break;
case '	19007':	echo '	Basilan	';break;
case '	19036':	echo '	Lanao del Sur	';break;
case '	19066':	echo '	Sulu	';break;
case '	1907':	echo '	Tawi-Tawi	';break;
case '	19087':	echo '	Maguindanao del Norte	';break;
case '	19088':	echo '	Maguindanao del Sur	';break;



}?>  

<?php switch ($meta['region']){


case	13	:	echo '	National Capital Region (NCR)	';break;
case	14	:	echo '	Cordillera Administrative Region (CAR)	';break;
case	1	:	echo '	Region I (Ilocos Region)	';break;
case	2	:	echo '	Region II (Cagayan Valley)	';break;
case	3	:	echo '	Region III (Central Luzon)	';break;
case	4	:	echo '	Region IV-A (CALABARZON)	';break;
case	17	:	echo '	MIMAROPA Region	';break;
case	5	:	echo '	Region V (Bicol Region)	';break;
case	6	:	echo '	Region VI (Western Visayas)	';break;
case	7	:	echo '	Region VII (Central Visayas)	';break;
case	8	:	echo '	Region VIII (Eastern Visayas)	';break;
case	9	:	echo '	Region IX (Zamboanga Peninsula)	';break;
case	1	:	echo '	Region X (Northern Mindanao)	';break;
case	11	:	echo '	Region XI (Davao Region)	';break;
case	12	:	echo '	Region XII (SOCCSKSARGEN)	';break;
case	16	:	echo '	Region XIII (Caraga)	';break;


}?>


