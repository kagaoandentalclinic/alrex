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




  <div class="h-100 d-flex align-items-center w-100 bg-violet" id="login">

      <br><br><br><br>
  
    <div class="col-5 h-100 bg-gradient">
      

      <div class="d-flex w-100 h-100 justify-content-center align-items-center">




        <div class="card col-sm-12 col-md-6 col-lg-3 card-outline  rounded-3 shadow">
          <div class="card-header rounded-0">




        <center><img src="<?= validate_image($_settings->info('logo')) ?>" alt="" id="logo-img"><br><br>
<b><p class="text-primary">
Unlock Your Driving Potential at Alrex School of Driving!</p></b>
        </center>




            <h6 class="text-purle text-center"><b>Login</b></h6>
          </div>
          <div class="card-body rounded-0">
            <form id="login-frm" action="" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control" autofocus name="username" placeholder="Email">
                <div class="input-group-append">
                  <div class="input-group-text"><span class="fas fa-user"></span></div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <div class="input-group-append">
                  <div class="input-group-text"><span class="fas fa-lock"></span></div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-block rounded-3"><b>Log In</b></button>
              <hr>
              <div class="row">
                <div class="col-12 mt-2 text-center">
                  <button class="btn btn-success btn-sm" type="button" data-toggle="modal" data-target="#form_modal"><i class="fas fa-user-plus"></i> Create new account</button>&nbsp;
                  <button class="btn btn-outline-success btn-sm" type="button" data-toggle="modal" data-target="#form_modals"><i class="fas fa-check-circle"></i> Verify Account</button>
                </div>
              </div>
              <hr>
              <a href="<?php echo base_url ?>"><b>Go to Website</b></a>
            </form>
          </div>
          
          </div>
        </div>
      </div>
    </div>
  </div>









<div class="modal fade" id="form_modals" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
       
        </div>
        <div class="modal-body">
        



        <button class="btn btn-danger btn-close-modal" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> X</button>

        <h1>Verify your account</h1>
        <p>It's quick and easy</p>
        <hr>


    
        <div class="container-fluid">
            <div id="msg"></div>
  <form method="POST" action="verify.php" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo isset($meta['id']) ? $meta['id'] : '' ?>">
           



  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Mobile number/Email" value="" required>
                </div>


           
                <div class="form-group">
                    <label for="code">Enter Code</label>
                    <input type="text" name="code" id="code" class="form-control" placeholder="200349" value="" required>
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











<div class="modal fade" id="form_modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
       
        </div>
        <div class="modal-body">
        



        <button class="btn btn-danger btn-close-modal" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> X</button>

        <h1>Sign Up</h1>
        <p>It's quick and easy</p>
        <hr>









        <div class="container-fluid">
            <div id="msg"></div>
  <form method="POST" action="save.php" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo isset($meta['id']) ? $meta['id'] : '' ?>">
                <div class="flex-container">
                    <div class="form-group">
                        <label for="name">First Name</label>
                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First name" value="" required>
                    </div>&nbsp; &nbsp;
                    <div class="form-group">
                        <label for="name">Last Name</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last name" value="" required>
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