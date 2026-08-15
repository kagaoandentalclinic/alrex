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








<html lang="en" class="" style="height: 100vh;">
 <?php require_once('inc/header.php') ?>

<head>
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap 4 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <!-- Google Maps Places API -->

</head>


<body class="hold-transition">
  <script>
    start_loader()
  </script>
  <style>
    html, body{
      height:100vh !important;
      min-height:100vh !important;
      width:100% !important;
      margin:0;
      padding:0;
    }
 
    .login-title{
      text-shadow: 2px 2px black
    }
    #login{
      flex-direction:column !important;
      min-height:100vh !important;
      justify-content:center !important;
    }
    #login .col-5{
      min-height:100vh !important;
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

  
    <div class="col-5 h-100 bg-gradient">
      

      <div class="d-flex w-100 h-100 justify-content-center align-items-center">




        <div class="card col-sm-12 col-md-6 col-lg-3 card-outline rounded-3 shadow" >
          <div class="card-header rounded-0">
            <div style="text-align:left; margin-bottom:6px;">
              <a href="<?php echo base_url ?>" class="btn btn-outline-secondary btn-sm"><i class="fas fa-home"></i> Home</a>
            </div>




        <center><img src="<?= validate_image($_settings->info('logo')) ?>" alt="" id="logo-img"><br><br>
<b><p class="text-primary">
Unlock Your Driving Potential at Alrex School of Driving!</p></b>
        </center>




       <h6 class="text-center" style="color: black;"><b>Login</b></h6>
          </div>
          <div class="card-body rounded-0">
            <form id="login-frm" action="" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control" autofocus name="username" placeholder="Email">
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
                <div class="col-12 mt-2 text-center">
                  <button class="btn btn-success btn-sm" type="button" data-toggle="modal" data-target="#form_modal"><i class="fas fa-user-plus"></i> Create new account</button>&nbsp;
                  <button class="btn btn-outline-success btn-sm" type="button" data-toggle="modal" data-target="#form_modals"><i class="fas fa-check-circle"></i> Verify Account</button>
                </div>
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

        <h1 style="text-align: center;">Verify your account</h1>
    
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
           
                <div class="form-group">
                
                    <input type="text" name="code" id="code" class="form-control" placeholder="*" value="" maxlength="1" required>
                </div>

&nbsp;
    <div class="form-group">
                   
                    <input type="text" name="code1" id="code1" class="form-control" placeholder="*" value="" maxlength="1" required>
                </div>
&nbsp;
    <div class="form-group">
                   
                    <input type="text" name="code2" id="code2" class="form-control" placeholder="*" value="" maxlength="1" required>
                </div>
&nbsp;
    <div class="form-group">
                   
                    <input type="text" name="code3" id="code3" class="form-control" placeholder="*" value="" maxlength="1" required>
                </div>
&nbsp;
    <div class="form-group">
                   
                    <input type="text" name="code4" id="code4" class="form-control" placeholder="*" value="" maxlength="1" required>
                </div>
&nbsp;
    <div class="form-group">
                   
                    <input type="text" name="code5" id="code5" class="form-control" placeholder="*" value="" maxlength="1" required>
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
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form method="POST" action="save.php" enctype="multipart/form-data">
        <div class="modal-header bg-dark text-white rounded-0">
          <h5 class="modal-title"><i class="fas fa-user-plus mr-2"></i>Create Account</h5>
        </div>
        <div class="modal-body">


        <button class="btn btn-danger btn-close-modal" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> X</button>

        <h1 style="text-align: center;">Sign Up</h1>
        <p style="text-align: center;">It's quick and easy</p>
        <hr>









        <div class="container-fluid">
            <div id="msg"></div>
                <input type="hidden" name="id" value="">
                <input type="hidden" name="type" value="4">


     

                <!-- Row 1: Name fields -->
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>First Name <span class="text-danger">*</span></label>
                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First name" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Middle Name</label>
                        <input type="text" name="middlename" id="middlename" class="form-control" placeholder="Middle name (optional)">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Last Name <span class="text-danger">*</span></label>
                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last name" required>
                    </div>
                </div>
                <!-- Row 2: DOB, Age, Sex, Civil Status -->
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Date of Birth <span class="text-danger">*</span></label>
                        <input type="date" name="dob" id="dob" class="form-control" onchange="calculateAge()" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label>Age</label>
                        <input type="number" name="age" id="age" class="form-control" readonly placeholder="Auto">
                    </div>
                    <div class="form-group col-md-3">
                        <label>Sex <span class="text-danger">*</span></label>
                        <select name="sex" class="form-control" required>
                            <option value="">-- Select --</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Civil Status <span class="text-danger">*</span></label>
                        <select name="civil" class="form-control" required>
                            <option value="">-- Select --</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Separated">Separated</option>
                        </select>
                    </div>
                </div>
                <!-- Row 3: Contact and Email -->
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label>Contact Number <span class="text-danger">*</span></label>
                        <input type="text" name="number" class="form-control" placeholder="e.g. 09XXXXXXXXX" required>
                    </div>
                    <div class="form-group col-md-7">
                        <label>Email Address <span class="text-danger">*</span></label>
                        <input type="email" name="username" id="username" class="form-control" placeholder="yourname@email.com" required>
                    </div>
                </div>
                <!-- Row 4: Address -->
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Province <span class="text-danger">*</span></label>
                        <select id="province" name="province" class="form-control" onchange="getMunicipalities()" required>
                            <option value="">Select Province</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Municipality / City <span class="text-danger">*</span></label>
                        <select id="municipality" name="city" class="form-control" onchange="getBarangays()" required>
                            <option value="">Select Municipality</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Barangay <span class="text-danger">*</span></label>
                        <select id="barangay" name="barangay" class="form-control" onchange="autoFillZip()" required>
                            <option value="">Select Barangay</option>
                        </select>
                    </div>
                </div>
                <!-- Row 5: Zip Code -->
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label>Zip Code</label>
                        <input type="text" name="zip" id="zip" class="form-control" readonly placeholder="Auto-fill">
                    </div>
                </div>
                 
                    
                      





       



   












                                <input type="hidden" name="address" id="address">
                <!-- Row 6: Password -->
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Password <span class="text-danger">*</span></label>
                        <input type="password" name="password" id="signup-password" class="form-control" placeholder="Create password" required autocomplete="off">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Confirm Password <span class="text-danger">*</span></label>
                        <input type="password" id="signup-cpassword" class="form-control" placeholder="Re-enter password" autocomplete="off">
                    </div>
                </div>
                <!-- Password requirement indicators -->
                <div id="password-requirements" class="mb-3 pl-2">
                    <small class="text-muted d-block mb-1" style="cursor:pointer;user-select:none;" onclick="togglePwReq()">
                        <strong>Password must contain:</strong>
                        <i id="pw-req-icon" class="fa fa-chevron-down ml-1"></i>
                    </small>
                    <div id="pw-req-list" style="display:none;">
                        <small id="req-length"  class="d-block text-danger"><i class="fa fa-times-circle mr-1"></i>At least 8 characters</small>
                        <small id="req-upper"   class="d-block text-danger"><i class="fa fa-times-circle mr-1"></i>At least 1 uppercase letter</small>
                        <small id="req-lower"   class="d-block text-danger"><i class="fa fa-times-circle mr-1"></i>At least 1 lowercase letter</small>
                        <small id="req-number"  class="d-block text-danger"><i class="fa fa-times-circle mr-1"></i>At least 1 number</small>
                        <small id="req-special" class="d-block text-danger"><i class="fa fa-times-circle mr-1"></i>At least 1 special character (!@#$%^&amp;*)</small>
                        <small id="req-match"   class="d-block text-danger"><i class="fa fa-times-circle mr-1"></i>Passwords match</small>
                    </div>
                </div>
                <script>
                function togglePwReq(){
                    var list = document.getElementById('pw-req-list');
                    var icon = document.getElementById('pw-req-icon');
                    if(list.style.display === 'none'){
                        list.style.display = 'block';
                        icon.className = 'fa fa-chevron-up ml-1';
                    } else {
                        list.style.display = 'none';
                        icon.className = 'fa fa-chevron-down ml-1';
                    }
                }
                </script>





<script>
function autoFillZip() {





    var provSel = document.getElementById('province');
    var muniSel = document.getElementById('municipality');
    var bgySel  = document.getElementById('barangay');
    var provinceValue    = (provSel.selectedIndex > 0 ? provSel.options[provSel.selectedIndex].text : '').toLowerCase().replace(/[^\w\s]/g, '');
    var municipalityValue = (muniSel.selectedIndex > 0 ? muniSel.options[muniSel.selectedIndex].text : '').toLowerCase().replace(/[^\w\s]/g, '');
    var barangayvalue    = (bgySel.selectedIndex  > 0 ? bgySel.options[bgySel.selectedIndex].text  : '').toLowerCase().replace(/[^\w\s]/g, '');
  var address = barangayvalue+ ', ' +municipalityValue + ', ' +provinceValue;
    // Mapping of provinces to their respective zip codes
    var zipCodes = {
        // 
        "abra": {
        "bangued": "2800",
        "boliney": "2815",
        "bucay": "2807",
        "bucloc": "2816",
        "daguioman": "2811",
        "danglas": "2804",
        "dolores": "2808",
        "la paz": "2801",
        "lacub": "2817",
        "lagangilang": "2805",
        "lagayan": "2814",
        "langiden": "2809",
        "licuan-baay (licuan)": "2806",
        "luba": "2812",
        "malibcong": "2813",
        "manabo": "2803",
        "penarrubia": "2802",
        "tayum": "2807",
        "tineg": "2810",
        "tubo": "2818",
        "villaviciosa": "2819"
    },
    "agusan del norte": {
        "buenavista": "8601",
        "butuan city": "8600",
        "cabadbaran": "8605",
        "carmen": "8609",
        "jabonga": "8608",
        "kitcharao": "8611",
        "las nieves": "8606",
        "magallanes": "8603",
        "nasipit": "8610",
        "remedios t. romualdez": "8607",
        "santiago": "8602",
        "tubay": "8604"
    },
    "agusan del sur": {
        "bayugan": "8502",
        "bunawan": "8507",
        "esperanza": "8513",
        "la paz": "8503",
        "loreto": "8512",
        "prosperidad": "8500",
        "rosario": "8504",
        "san francisco": "8501",
        "san luis": "8506",
        "santa josefa": "8505",
        "sibagat": "8511",
        "talacogon": "8514",
        "trece martires": "8508",
        "veruela": "8510"
    },
    "aklan": {
        "altavas": "5616",
        "balete": "5614",
        "banga": "5605",
        "batan": "5610",
        "buruanga": "5609",
        "ibajay": "5613",
        "kalibo": "5600",
        "lezo": "5608",
        "libacao": "5612",
        "madalag": "5607",
        "makato": "5611",
        "malay": "5609",
        "malinao": "5606",
        "nabas": "5615",
        "new washington": "5617",
        "numancia": "5601",
        "tangalan": "5604"
    },
    "albay": {
        "bacacay": "4509",
        "camalig": "4502",
        "daraga (locsin)": "4501",
        "guinobatan": "4503",
        "jovellar": "4510",
        "legazpi city": "4500",
        "libon": "4511",
        "ligao city": "4504",
        "malilipot": "4512",
        "malinao": "4508",
        "manito": "4514",
        "oisos": "4507",
        "polangui": "4506",
        "rapu-rapu": "4513",
        "santo domingo": "4505",
        "tabaco city": "4510",
        "tiwi": "4515"
    },
    "antique": {
        "anini-y": "5717",
        "barbaza": "5713",
        "belison": "5709",
        "bugasong": "5714",
        "caluya": "5711",
        "culasi": "5704",
        "hamtic": "5716",
        "la paz": "5702",
        "libertad": "5703",
        "pandan": "5712",
        "patnongon": "5710",
        "san jose": "5700",
        "san remigio": "5708",
        "sebaste": "5705",
        "sibalom": "5715",
        "tibiao": "5707",
        "tobias fora": "5706",
        "valderrama": "5718"
    },
    "apayao": {
        "calanasan (bayag)": "3813",
        "conner": "3810",
        "flora": "3809",
        "kabugao": "3808",
        "luna": "3812",
        "pudtol": "3811",
        "santa marcela": "3807"
    },
    "aurora": {
        "baler": "3200",
        "casiguran": "3204",
        "dilasag": "3206",
        "dinalungan": "3205",
        "dingalan": "3207",
        "dipaculao": "3203",
        "maria aurora": "3202",
        "san luis": "3201"
    },
    "basilan": {
        "akbar": "7304",
        "alamada": "7303",
        "barangay tabuan lasa": "7312",
        "barangay tampakan": "7307",
        "barangay tubigan": "7306",
        "bongao": "7500",
        "hadji muhtamad": "7311",
        "indanan": "7302",
        "jojo": "7310",
        "kalingalan caluang": "7309",
        "lugus": "7411",
        "luuk": "7404",
        "maluso": "7301",
        "mangsee": "7305",
        "marunggas (hadji panglima tahil)": "7413",
        "parang": "7408",
        "pata": "7405",
        "patikul": "7401",
        "sapa-sapa": "7503",
        "siasi": "7412",
        "tandubas": "7502",
        "taong": "7313",
        "tongkil (banguingui)": "7406",
        "tubig tanah": "7308",
        "turtle islands": "7507"
    },
    "bataan": {
        "abucay": "2114",
        "bagac": "2107",
        "balanga city": "2100",
        "dinalupihan": "2110",
        "hermosa": "2111",
        "limay": "2103",
        "mariveles": "2105",
        "morong": "2108",
        "orani": "2112",
        "orion": "2102",
        "pilar": "2101",
        "samal": "2113"
    },
    "batanes": {
        "basco": "3900",
        "itbayat": "3905",
        "ivana": "3902",
        "mahatao": "3901",
        "sabtang": "3904",
        "uyugan": "3903"
    },
    "batangas": {
        "agus": "4214",
        "alitagtag": "4205",
        "balayan": "4213",
        "balete": "4219",
        "batangas city": "4200",
        "bauan": "4201",
        "calaca": "4212",
        "calatagan": "4215",
        "cuenca": "4222",
        "iona": "4224",
        "laurel": "4221",
        "lemery": "4209",
        "lian": "4216",
        "lipa city": "4217",
        "lohika": "4223",
        "lobo": "4227",
        "mabini": "4202",
        "malvar": "4233",
        "mando": "4218",
        "nasugbu": "4231",
        "padre garcia": "4228",
        "rosario": "4225",
        "san jose": "4224",
        "san juan": "4226",
        "san luis": "4210",
        "san nicolas": "4204",
        "san pascual": "4207",
        "santo tomas": "4234",
        "taal": "4203",
        "talisay": "4220",
        "tanauan city": "4232",
        "taysan": "4211",
        "tingloy": "4206",
        "tuy": "4214"
    },
    "benguet": {
        "atok": "2612",
        "baguio city": "2600",
        "bakun": "2616",
        "bokod": "2606",
        "buguias": "2607",
        "itogon": "2604",
        "kabayan": "2613",
        "kapangan": "2615",
        "kibungan": "2614",
        "la trinidad": "2601",
        "mankayan": "2608",
        "sablan": "2610",
        "tuba": "2603",
        "tublay": "2611"
    },
    "biliran": {
        "almeria": "6544",
        "biliran": "6543",
        "cabucgayan": "6542",
        "caibiran": "6541",
        "culaba": "6545",
        "kawayan": "6546",
        "maripipi": "6547",
        "naval": "6540"
    },
    "bohol": {
        "alburquerque": "6306",
        "albuquerque": "6306",
        "alici": "6315",
        "andagao": "6310",
        "antequera": "6337",
        "baclayon": "6301",
        "balilihan": "6342",
        "batuan": "6319",
        "bien unido": "6326",
        "bilar": "6318",
        "buena vista": "6325",
        "calape": "6344",
        "candijay": "6312",
        "carmen": "6319",
        "catigbian": "6341",
        "clarin": "6330",
        "corella": "6339",
        "cortes": "6336",
        "dagooc": "6345",
        "danao": "6347",
        "dauis": "6339",
        "dimiao": "6314",
        "doljo": "6339",
        "dumaluan": "6339",
        "guindulman": "6310",
        "inabanga": "6339",
        "jagna": "6308",
        "lila": "6338",
        "loay": "6307",
        "loboc": "6317",
        "looc": "6328",
        "mabini": "6313",
        "maribojoc": "6327",
        "panglao": "6340",
        "pilar": "6324",
        "pres. carlos p. garcia (pitogo)": "6331",
        "sagbayan": "6332",
        "san isidro": "6335",
        "san miguel": "6316",
        "sevilla": "6343",
        "sierra bullones": "6323",
        "sierra-bullones": "6323",
        "sikatuna": "6348",
        "tagbilaran city": "6300",
        "talibon": "6325",
        "tubigon": "6329",
        "ubay": "6315",
        "valencia": "6346",
        "victorias": "6309",
        "villanueva": "6311"
    },
    "bukidnon": {
        "baungon": "8711",
        "cabanglasan": "8721",
        "damulog": "8714",
        "dangcagan": "8713",
        "don carlos": "8720",
        "impasug-ong": "8709",
        "kadingilan": "8715",
        "kalilangan": "8706",
        "kibawe": "8710",
        "kitaotao": "8716",
        "lantapan": "8712",
        "libona": "8707",
        "malaybalay city": "8700",
        "malitbog": "8723",
        "manolo fortich": "8703",
        "maramag": "8717",
        "pangantucan": "8722",
        "quezon": "8702",
        "san fernando": "8718",
        "sumilao": "8701",
        "talisayan": "8724",
        "valencia city": "8709"
    },
    "bulacan": {
        "angat": "3012",
        "balagtas": "3016",
        "baliuag": "3006",
        "bocaue": "3018",
        "bulacan": "3017",
        "bustos": "3007",
        "calumpit": "3003",
        "guiguinto": "3015",
        "hagonoy": "3002",
        "malolos city": "3000",
        "marilao": "3019",
        "meycauayan city": "3020",
        "norzagaray": "3013",
        "obando": "3021",
        "pandi": "3014",
        "paombong": "3001",
        "plaridel": "3004",
        "pulilan": "3005",
        "san ildefonso": "3010",
        "san jose del monte city": "3023",
        "san miguel": "3011",
        "san rafael": "3008",
        "santa maria": "3022"
    },
    "cagayan": {
        "abad": "3524",
        "alcala": "3507",
        "allacapan": "3523",
        "amulung": "3517",
        "aparri": "3528",
        "bagga": "3519",
        "baggao": "3516",
        "ballesteros": "3510",
        "buguey": "3511",
        "calayan": "3529",
        "camalaniugan": "3520",
        "claveria": "3519",
        "enrile": "3522",
        "gattaran": "3513",
        "gonzaga": "3514",
        "iguaqui": "3525",
        "lal-lo": "3506",
        "lasam": "3527",
        "pamplona": "3505",
        "penablanca": "3504",
        "piat": "3526",
        "ragay": "3518",
        "sanchez mira": "3512",
        "santa ana": "3522",
        "santa praxedes": "3523",
        "santa teresita": "3520",
        "santo niño (faire)": "3508",
        "solana": "3509",
        "tuao": "3503",
        "tuguegarao city": "3500"
    },
    "camarines norte": {
        "basud": "4608",
        "capalonga": "4602",
        "daet": "4600",
        "jose panganiban": "4601",
        "labo": "4604",
        "mercedes": "4603",
        "paracale": "4605",
        "san lorenzo ruiz (imelda)": "4606",
        "san vicente": "4607",
        "santa elena": "4611",
        "talisay": "4610",
        "vinzons": "4609"
    },
    "camarines sur": {
        "baao": "4432",
        "balatan": "4435",
        "bato": "4436",
        "bombon": "4420",
        "buhi": "4433",
        "bula": "4434",
        "cabusao": "4429",
        "calabanga": "4405",
        "camaligan": "4404",
        "canaman": "4410",
        "caramoan": "4429",
        "del gallego": "4403",
        "gainza": "4421",
        "garchitorena": "4422",
        "goa": "4422",
        "iriga city": "4431",
        "lagonoy": "4427",
        "libmanan": "4407",
        "lupi": "4417",
        "magarao": "4403",
        "milaor": "4413",
        "minalabac": "4414",
        "nabua": "4424",
        "nishbini": "4434",
        "pasacao": "4432",
        "pili": "4418",
        "presentacion": "4428",
        "ragay": "4420",
        "sagnay": "4418",
        "san fernando": "4423",
        "san jose": "4416",
        "sipocot": "4409",
        "siruma": "4419",
        "tinambac": "4415"
    },
    "camiguin": {
        "catarman": "9104",
        "guinsiliban": "9102",
        "mahinog": "9103",
        "mambajao": "9100",
        "sagay": "9105"
    },
    "capiz": {
        "cuartero": "5804",
        "dao": "5810",
        "dumalag": "5806",
        "dumarao": "5805",
        "ibaan": "5811",
        "jamindan": "5803",
        "maayon": "5802",
        "mambusao": "5807",
        "panay": "5814",
        "panitan": "5816",
        "pilar": "5815",
        "pontevedra": "5808",
        "pres. manuel a. roxas": "5809",
        "roxas city": "5800",
        "sapi-an": "5801",
        "sigma": "5812",
        "tapaz": "5813"
    },
    "catanduanes": {
        "bagamanoc": "4809",
        "baras": "4801",
        "bate": "4807",
        "caramoran": "4804",
        "gigmoto": "4805",
        "pandan": "4814",
        "panganiban (payo)": "4808",
        "san andres": "4810",
        "san miguel": "4813",
        "vicente (viga)": "4806",
        "virac": "4800"
    },
    "cavite": {
        "alaminos": "4127",
        "alfonso": "4123",
        "amadeo": "4119",
        "bacoor city": "4102",
        "carmona": "4116",
        "cavite city": "4100",
        "dasmariñas city": "4114",
        "general emilio aguinaldo (bailen)": "4124",
        "general mariano alvarez": "4117",
        "general trias": "4107",
        "imus city": "4103",
        "indang": "4122",
        "kawit": "4104",
        "magallanes": "4125",
        "maragondon": "4119",
        "mendez (mendez-nuñez)": "4121",
        "naic": "4110",
        "noveleta": "4105",
        "rosario": "4106",
        "silang": "4118",
        "tagaytay city": "4120",
        "tanza": "4108",
        "ternate": "4111",
        "trece martires city": "4109"
    },
    "cebu": {
        "alcoy": "6023",
        "alegria": "6030",
        "aloguinsan": "6031",
        "argao": "6021",
        "asturias": "6042",
        "badian": "6031",
        "bantayan": "6040",
        "barili": "6036",
        "bogo city": "6010",
        "boljoon": "6024",
        "borbon": "6009",
        "carcar city": "6019",
        "carmen": "6005",
        "catmon": "6006",
        "compostela": "6003",
        "consolacion": "6001",
        "cordova": "6017",
        "daanbantayan": "6013",
        "dalaguete": "6022",
        "danao city": "6004",
        "dumanjug": "6035",
        "ginatilan": "6033",
        "lapu-lapu city (opon)": "6015",
        "liloan": "6002",
        "madridejos": "6053",
        "malabuyoc": "6029",
        "mambaling": "6000",
        "medellin": "6012",
        "minglanilla": "6046",
        "moalboal": "6032",
        "naga city": "6037",
        "oslob": "6025",
        "pilar": "6052",
        "pinamungajan": "6039",
        "poblacion (lapu-lapu city)": "6015",
        "poblacion (liloan)": "6002",
        "poblacion (mandaue city)": "6014",
        "poblacion (san fernando)": "6018",
        "poblacion (sibonga)": "6028",
        "poblacion (talamban)": "6016",
        "poblacion (toledo city)": "6038",
        "poblacion (tuburan)": "6045",
        "poblacion (tudela)": "6054",
        "poro": "6051",
        "ronda": "6034",
        "samat": "6049",
        "san fernando": "6018",
        "san francisco": "6050",
        "san remigio": "6011",
        "santander": "6020",
        "sibonga": "6028",
        "sogod": "6007",
        "tabogon": "6011",
        "tabuelan": "6041",
        "talisay city": "6045",
        "toledo city": "6037",
        "tuburan": "6045",
        "tuuman": "6026",
        "tudela": "6054"
    },
    "davao de oro (compostela valley)": {
        "compostela": "8803",
        "laak (san vicente)": "8802",
        "mabini (doña alicia)": "8801",
        "maco": "8806",
        "maragusan (san mariano)": "8805",
        "monkayo": "8804",
        "montevista": "8807",
        "nabunturan": "8800",
        "new bataan": "8809",
        "pantukan": "8808"
    },
    "davao del norte": {
        "asuncion (saug)": "8102",
        "braulio e. dujali": "8114",
        "carmen": "8103",
        "kapalong": "8113",
        "new corella": "8104",
        "panabo city": "8105",
        "isabela (talaingod)": "8100",
        "tagum city": "8100",
        "talaingod": "8100",
        "san isidro": "8101",
        "santo tomas": "8112",
        "sto. tomas": "8112",
        "sto. tomas (saug)": "8112"
    },
    "davao del sur": {
        "bansalan": "8005",
        "davao city": "8000",
        "digos city": "8002",
        "hagonoy": "8003",
        "kiblawan": "8006",
        "magsaysay": "8007",
        "malalag": "8008",
        "matanao": "8009",
        "padada": "8010",
        "santa cruz": "8004",
        "sulop": "8011"
    },
    "davao occidental": {
        "don marcelino": "8013",
        "jose abad santos (trinidad)": "8014",
        "malita": "8012",
        "santa maria": "8011",
        "sarangani (dagos)": "8015"
    },
    "davao oriental": {
        "baganga": "8204",
        "banaybanay": "8203",
        "boston": "8202",
        "caraga": "8205",
        "cateel": "8201",
        "governor generoso": "8206",
        "lupon": "8207",
        "manay": "8208",
        "mati city": "8200",
        "san isidro": "8209",
        "tarragona": "8210"
    },
    "dinagat islands": {
        "bacuag": "8412",
        "basilisa (rizal)": "8413",
        "cagdianao": "8411",
        "dinagat": "8419",
        "libjo (albor)": "8410",
        "loria": "8418",
        "san jose (cagdianao)": "8417",
        "tubajon": "8416"
    },
    "eastern samar": {
        "arteche": "6821",
        "balangiga": "6812",
        "balangkayan": "6813",
        "borongan city": "6800",
        "can-avid": "6810",
        "dolores": "6814",
        "general macarthur": "6815",
        "giporlos": "6816",
        "guiuan": "6809",
        "hernani": "6824",
        "jipapad": "6823",
        "lawaan": "6822",
        "liguan": "6820",
        "loria": "6818",
        "maslog": "6826",
        "maydolong": "6817",
        "mercedes": "6819",
        "orongan": "6808",
        "saler": "6825",
        "san julian": "6806",
        "san policarpo": "6807",
        "sulat": "6805",
        "taft": "6801"
    },
    "guimaras": {
        "buenavista": "5046",
        "jordan": "5045",
        "nueva valencia": "5044",
        "sibunag": "5043"
    },
    "ifugao": {
        "aguinaldo": "3604",
        "alfonso lista (potia)": "3602",
        "asipulo": "3608",
        "banaue": "3601",
        "hingyon": "3609",
        "hungduan": "3605",
        "kiangan": "3603",
        "lagawe": "3600",
        "lamut": "3607",
        "mayoyao": "3606",
        "tinoc": "3610"
    },
    "ilocos norte": {
        "adams": "2912",
        "badoc": "2904",
        "bangui": "2920",
        "banna": "2909",
        "burgos": "2918",
        "carasi": "2915",
        "currimao": "2903",
        "dingras": "2910",
        "dumalneg": "2902",
        "laoag city": "2900",
        "maira-ira point": "2921",
        "marcos": "2907",
        "nueva era": "2913",
        "pagudpud": "2919",
        "paoay": "2902",
        "pasuquin": "2917",
        "pinili": "2901",
        "san nicolas": "2901",
        "sarrat": "2914",
        "solsona": "2906",
        "vintar": "2911"
    },
    "ilocos sur": {
      "alilem":"2716",
      "banayoyo":"2708",
      "bantay":"2727",
      "burgos":"2724",
      "cabugao":"2732",
      "candon city":"2710",
      "caoayan":"2702",
      "cervantes":"2718",
      "galimuyod":"2709",
      "gregorio del pilar":"2720",
      "lidlidda":"2723",
      "magsingal":"2730",
      "nagbukel":"2725",
      "narvacan":"2704",
      "quirino":"2721",
      "salcedo":"2711",
      "san emilio":"2722",
      "san esteban":"2706",
      "san ildefonso":"2728",
      "san juan":"2731",
      "san vicente":"2726",
      "santa":"2703",
      "santa catalina":"2701",
      "santa cruz":"2713",
      "santa lucia":"2712",
      "santa maria":"2705",
      "santiago":"2707",
      "santo domingo":"2729",
      "sigay":"2719",
      "sinait":"2733",
      "sugpon":"2717",
      "suyo":"2715",
      "tagudin":"2714",
      "vigan city":"2700"
    },
    "iloilo": {
        "ajuy": "5012",
        "alimodian": "5028",
        "anilao": "5009",
        "badiangan": "5035",
        "balasan": "5018",
        "balete": "5016",
        "banate": "5019",
        "barangay agutayan (rodriguez)": "5014",
        "barotac nuevo": "5007",
        "barotac viejo": "5010",
        "batad": "5011",
        "bingawan": "5015",
        "cabatuan": "5031",
        "calinog": "5040",
        "carles": "5019",
        "concepcion": "5013",
        "dingle": "5034",
        "dueñas": "5017",
        "dumangas": "5008",
        "estancia": "5017",
        "guimbal": "5022",
        "ibalgon": "5005",
        "igbaras": "5029",
        "iloilo city": "5000",
        "janiuay": "5034",
        "jordan": "5024",
        "lambunao": "5041",
        "leganes": "5003",
        "lemery": "5042",
        "leoning": "5038",
        "maasin": "5032",
        "mangoso": "5026",
        "miagao": "5023",
        "mina": "5039",
        "new lucena": "5033",
        "otot": "5006",
        "passi city": "5037",
        "pavia": "5001",
        "pototan": "5003",
        "san dionisio": "5012",
        "san enrique": "5036",
        "san joaquin": "5027",
        "san miguel": "5025",
        "san rafael": "5021",
        "santa barbara": "5002",
        "sara": "5018",
        "tigbauan": "5020",
        "tubungan": "5024",
        "zarraga": "5030"
    },
    "isabela": {
        "abinawan": "3305",
        "alamada": "3317",
        "alaminos": "3330",
        "alibagu": "3319",
        "alibug": "3312",
        "allacapan": "3326",
        "ambaguio": "3318",
        "amulung": "3319",
        "antagan": "3329",
        "aurora": "3307",
        "baggao": "3501",
        "baguio": "3314",
        "balagan": "3333",
        "balao": "3321",
        "balayang": "3308",
        "banayoyo": "3331",
        "bantug": "3303",
        "bantugan": "3320",
        "barbarit": "3306",
        "baritao": "3321",
        "barucboc": "3324",
        "bassit": "3311",
        "batacan": "3315",
        "bellen": "3323",
        "besalan": "3316",
        "bintawan": "3326",
        "buenavista": "3332",
        "bulala": "3331",
        "calaccad": "3310",
        "calaccad": "3313",
        "caldiatan": "3324",
        "calindagan": "3309",
        "camalog": "3318",
        "camasi": "3312",
        "camillan": "3314",
        "capeddan": "3302",
        "capucucan": "3315",
        "capurictan": "3328",
        "caralucud": "3334",
        "carig": "3330",
        "carigara": "3325",
        "carilucud": "3334",
        "caritan": "3301",
        "catabban": "3317",
        "cauayan city": "3300",
        "cavite": "3307",
        "cavite city": "3329",
        "cayugan": "3322",
        "cayupag": "3304",
        "columbus": "3302",
        "dagupan": "3328",
        "daramuangan": "3332",
        "delfin albania": "3331",
        "del monte": "3316",
        "delfin albania (magsaysay)": "3331",
        "dianatan": "3329",
        "dibuluan": "3335",
        "dimabuno": "3327",
        "dumarao": "3322",
        "fuyo": "3325",
        "furao": "3320",
        "gacab": "3326",
        "gagabutan": "3306",
        "gammad": "3323",
        "gattaran": "3313",
        "gawang": "3333",
        "goa": "3319",
        "guimbalayan": "3303",
        "gumatdang": "3311",
        "ipil": "3327",
        "jurisdiccion": "3305",
        "la paz": "3309",
        "laba": "3327",
        "labayug": "3311",
        "lacab": "3334",
        "laguma": "3323",
        "laoag": "3320",
        "lasam": "3314",
        "linamanan": "3321",
        "linasinan": "3332",
        "locong": "3335",
        "luzon": "3324",
        "mabini": "3330",
        "macayucayu": "3331",
        "magapit": "3326",
        "magui": "3310",
        "malalam": "3328",
        "maligaya": "3316",
        "marasat": "3325",
        "marasan": "3323",
        "masigun": "3327",
        "masipag": "3313",
        "masiway": "3317",
        "nagbacalan": "3315",
        "namnama": "3330",
        "napaccu grande": "3301",
        "napaccu pequeno": "3304",
        "napo": "3318",
        "nappacu grande": "3301",
        "nappaccu pequeno": "3304",
        "neguan": "3335",
        "nueva era": "3310",
        "osias": "3329",
        "paddaya": "3333",
        "panacol": "3335",
        "panangan": "3312",
        "pananuman": "3325",
        "panay": "3320",
        "panigayan": "3318",
        "patar": "3332",
        "payac": "3333",
        "placido": "3308",
        "plaridel": "3315",
        "port irene": "3302",
        "punta": "3319",
        "quibal": "3328",
        "quibal (villa irinea)": "3328",
        "quinagasan": "3310",
        "quilan": "3303",
        "quilanta": "3324",
        "quilumboa": "3305",
        "quitinan": "3312",
        "quivilag": "3314",
        "ramon": "3316",
        "rasa": "3334",
        "razal": "3326",
        "razal (villa fernando)": "3326",
        "reina mercedes": "3304",
        "reynafe": "3323",
        "roca": "3307",
        "sabang": "3331",
        "sambayat": "3309",
        "san agustin": "3334",
        "san andres": "3310",
        "san antonio": "3322",
        "san fernando": "3306",
        "san fernando (callao)": "3306",
        "san francisco": "3321",
        "san jose": "3305",
        "san jose (pob.)": "3305",
        "san juan": "3327",
        "san juan (tulay)": "3327",
        "san lorenzo": "3308",
        "san marcelino": "3333",
        "san mariano": "3317",
        "san mariano (pob.)": "3317",
        "san mateo": "3313",
        "san miguel": "3315",
        "san miguel (pob.)": "3315",
        "san pedro": "3318",
        "san quinito": "3312",
        "san rafael": "3307",
        "san ramon": "3310",
        "san roque": "3320",
        "san vicente": "3324",
        "sanctuario": "3321",
        "sangbay": "3334",
        "sangbay (villagracia)": "3334",
        "santa barbara": "3323",
        "santa cecilia": "3321",
        "santa clara": "3309",
        "santa maria": "3319",
        "santa rosa": "3302",
        "santo domingo": "3322",
        "santo domingo (pob.)": "3322",
        "santo rosario": "3303",
        "santo rosario (pob.)": "3303",
        "santo tomas": "3311",
        "sarangani": "3325",
        "saraza": "3332",
        "sipu": "3314",
        "sillawit": "3329",
        "sillawit (villa carlos reyes)": "3329",
        "sillawit (villa flores)": "3329",
        "simmulao": "3301",
        "sipa": "3328",
        "siplao": "3322",
        "sipugo": "3325",
        "sirib": "3330",
        "solana": "3316",
        "sulbec": "3332",
        "suyoc": "3335",
        "tabug": "3326",
        "tagaran": "3311",
        "tagaran (villa seca)": "3311",
        "tagaytay": "3334",
        "tangatan": "3329",
        "tao-angan": "3304",
        "taytay": "3333",
        "tuguegarao city": "3500",
        "turod": "3331",
        "urzadan": "3330",
        "ussa": "3305",
        "valentin uz": "3318",
        "victoria": "3324",
        "villamor": "3310",
        "villanueva": "3333",
        "vintar": "3332",
        "villa nuz": "3317",
        "villa perez": "3317",
        "villa reyes": "3323",
        "villa rosario": "3314",
        "villa seca": "3311",
        "villa sur": "3325",
        "villa verde": "3328",
        "villaluna": "3320",
        "villamilagrosa": "3319",
        "villapando": "3322",
        "villarosario": "3314",
        "villasoto": "3327",
        "villasoto (villa nueva)": "3327",
        "villaverde": "3330",
        "villaverde (villa lorenzo)": "3330",
        "villaverde (villa seno)": "3330",
        "villavieja": "3335",
        "villa zen": "3306"
    },
    "kalinga": {
        "balbalan": "3801",
        "calanasan (bayag)": "3816",
        "conner": "3814",
        "flora": "3802",
        "kabugao": "3815",
        "lubuagan": "3803",
        "pasil": "3812",
        "pinukpuk": "3804",
        "rizzal": "3811",
        "tabuk city": "3800",
        "tancha": "3813",
        "tanudan": "3805",
        "tinglayan": "3806"
    },
    "la union": {
        "agoo": "2504",
        "aringay": "2503",
        "bacnotan": "2515",
        "bagulin": "2512",
        "balaoan": "2517",
        "bangar": "2519",
        "bauang": "2501",
        "burgos": "2510",
        "caba": "2502",
        "damortis": "2507",
        "luna": "2518",
        "naguilian": "2511",
        "pugo": "2508",
        "rosario": "2506",
        "san fernando": "2500",
        "san gabriel": "2513",
        "san juan": "2514",
        "santo tomas": "2505",
        "santol": "2516",
        "sudipen": "2520",
        "tubao": "2509"
    },
    "laguna": {
        "alaminos": "4001",
        "bay": "4033",
        "biñan": "4024",
        "botocan": "4006",
        "cabuyao": "4025",
        "calamba": "4027",
        "caluan": "4012",
        "camp vicente lim": "4029",
        "canlubang": "4028",
        "cavinti": "4013",
        "college los baños": "4031",
        "famy": "4021",
        "kalayaan": "4015",
        "laguna technopark": "4034",
        "liliw": "4004",
        "los baños": "4030",
        "luisiana": "4032",
        "lumban": "4014",
        "mabitac": "4020",
        "magdalena": "4007",
        "majayjay": "4005",
        "nagcarlan": "4002",
        "paete": "4016",
        "pagsanjan": "4008",
        "pakil": "4017",
        "pangil": "4018",
        "pila": "4010",
        "rizal": "4003",
        "san pablo city": "4000",
        "san pedro": "4023",
        "siniloan": "4019",
        "sta. cruz": "4009",
        "sta. maria": "4022",
        "sta. rosa": "4026",
        "victoria": "4011"
    },
    "lanao del norte": {
        "bacolod": "9207",
        "baloi": "9211",
        "baroy": "9210",
        "iligan city": "9200",
        "kapatagan": "9216",
        "kauswagan": "9217",
        "kolambugan": "9206",
        "lala": "9218",
        "linamon": "9209",
        "magsaysay": "9205",
        "maigo": "9208",
        "matungao": "9212",
        "munai": "9213",
        "napoleon cabalero (baloi)": "9211",
        "pantao ragat": "9214",
        "pantar": "9215",
        "poona piagapo": "9204",
        "salvador": "9203",
        "santiago": "9202",
        "sapad": "9201",
        "tagoloan": "9221",
        "tangcal": "9220",
        "tubod": "9200"
    },
    "lanao del sur": {
        "bacolod-kalawi (bacolod gr)": "9714",
        "balabagan": "9704",
        "balindong (watu)": "9717",
        "bayang": "9705",
        "binidayan": "9710",
        "buadiposo-buntong": "9709",
        "bubong": "9702",
        "butig": "9703",
        "ganassi": "9706",
        "kapai": "9713",
        "kapatagan": "9707",
        "lumba-bayabao (maguing)": "9716",
        "lumbaca-unayan": "9712",
        "lumbatan": "9711",
        "lumbayanague": "9701",
        "madalum": "9718",
        "madamba": "9708",
        "maguing": "9716",
        "malabang": "9302",
        "marantao": "9715",
        "marawi city": "9700",
        "masiu": "9719",
        "mulondo": "9717",
        "pagayawan (tatarikan)": "9721",
        "piagapo": "9710",
        "picong (sultan gumander)": "9712",
        "poona bayabao (gata)": "9704",
        "pualas": "9705",
        "saguiaran": "9710",
        "sultan dumalondong": "9711",
        "tagoloan ii": "9713",
        "tamparan": "9714",
        "taraka": "9702",
        "tubaran": "9718",
        "tugaya": "9719",
        "wao": "9710"
    },
    "leyte": {
        "abuyog": "6510",
        "alangalang": "6517",
        "alomod": "6527",
        "babatngon": "6534",
        "barugo": "6519",
        "bato": "6525",
        "baybay city": "6521",
        "burauen": "6516",
        "calubian": "6535",
        "capoocan": "6524",
        "carigara": "6529",
        "dagami": "6515",
        "dulag": "6513",
        "hilongos": "6528",
        "hindang": "6520",
        "inopacan": "6522",
        "isabel": "6536",
        "jaro": "6512",
        "javier (bugho)": "6511",
        "julita": "6533",
        "kananga": "6531",
        "la paz": "6532",
        "leyte": "6514",
        "macarthur": "6526",
        "mahaplag": "6537",
        "matag-ob": "6518",
        "matalom": "6523",
        "mayorga": "6519",
        "merida": "6539",
        "ormoc city": "6541",
        "palo": "6501",
        "palompon": "6538",
        "pastrana": "6511",
        "san isidro": "6530",
        "san miguel": "6539",
        "santa fe": "6523",
        "tabango": "6536",
        "tabontabon": "6502",
        "tanauan": "6511",
        "tolosa": "6504",
        "tunga": "6532",
        "villaba": "6531"
    },
    "maguindanao": {
        "ampatuan": "9607",
        "barira": "9611",
        "buldon": "9615",
        "buluan": "9610",
        "datu abdullah sangki": "9614",
        "datu anggal midtimbang": "9613",
        "datu blah tua": "9616",
        "datu piang (dulawan)": "9606",
        "datu salibo": "9608",
        "datu saudi-ampatuan": "9612",
        "datu unsay": "9605",
        "gen. s.k. pendatun": "9617",
        "guindulungan": "9604",
        "mamasapano": "9609",
        "mangudadatu": "9618",
        "pagalungan": "9603",
        "paglat": "9601",
        "pandag": "9619",
        "parang": "9615",
        "rajah buayan": "9602",
        "shariff aguak (maganoy)": "9610",
        "shariff saydona mustapha": "9607",
        "sultan kudarat": "9604",
        "sultan mastura": "9613",
        "sultan sa barongis (lamitan)": "9606",
        "talayan": "9612",
        "talitay": "9608",
        "upi": "9614"
    },
    "marinduque": {
        "boac": "4900",
        "buenavista": "4903",
        "gasan": "4901",
        "mogpog": "4905",
        "santa cruz": "4902",
        "torrijos": "4906"
    },
    "masbate": {
        "aroroy": "5414",
        "baleno": "5407",
        "balud": "5403",
        "batuan": "5406",
        "cataingan": "5405",
        "cawayan": "5409",
        "claveria": "5413",
        "dimasalang": "5417",
        "esperanza": "5410",
        "mabini": "5415",
        "masbate city": "5400",
        "milagros": "5411",
        "mobo": "5412",
        "monreal": "5416",
        "palanas": "5402",
        "pio v. corpuz (limbuhan)": "5408",
        "placer": "5419",
        "san fernando": "5418",
        "san jacinto": "5401",
        "san pascual": "5410",
        "ues": "5417"
    },
    "misamis occidental": {
        "aloran": "7207",
        "baliangao": "7206",
        "bonifacio": "7208",
        "calamba": "7210",
        "clarin": "7209",
        "concepcion": "7211",
        "don marcelino": "7203",
        "jimenez": "7202",
        "lopez jaena": "7204",
        "oroquieta city": "7207",
        "ozamis city": "7200",
        "panaon": "7201",
        "plaridel": "7205",
        "sapid": "7212",
        "sinacaban": "7206",
        "tangub city": "7204",
        "tudela": "7203"
    },
    "misamis oriental": {
        "alandia": "9010",
        "alingalan": "9014",
        "alliance": "9015",
        "alubijid": "9018",
        "bagocboc": "9019",
        "balagnan": "9020",
        "balasicao": "9021",
        "balbalan": "9022",
        "balubad": "9023",
        "bambad": "9024",
        "banbanon": "9025",
        "banilad": "9026",
        "banuyo": "9027",
        "binitinan": "9028",
        "bolisong": "9029",
        "bontongon": "9030",
        "bunawan": "9031",
        "burias": "9032",
        "cagayan de oro city": "9000",
        "calanggaman": "9033",
        "casinglot": "9034",
        "cugman": "9035",
        "culit": "9036",
        "culong": "9037",
        "dimaluna": "9038",
        "domanquil": "9039",
        "gasi": "9040",
        "gumaga": "9041",
        "hindangon": "9042",
        "hinigdaan": "9043",
        "kauyonan": "9044",
        "kibaypay": "9045",
        "lapad": "9046",
        "libertad": "9047",
        "likogon": "9048",
        "lumbia": "9049",
        "lunao": "9050",
        "mabini": "9051",
        "mabulig": "9052",
        "maglambing": "9053",
        "malasag": "9054",
        "mandumol": "9055",
        "maningkil": "9056",
        "manticao": "9057",
        "manuel roxas": "9058",
        "maribojoc": "9059",
        "mocaboc": "9060",
        "mohon": "9061",
        "moloob": "9062",
        "molugan": "9063",
        "naawan": "9064",
        "nunguan": "9065",
        "odomoc": "9066",
        "onayon": "9067",
        "pagsungay": "9068",
        "panampalay": "9069",
        "patag": "9070",
        "payaon": "9071",
        "pigsalabuhan": "9072",
        "plaridel": "9073",
        "porog": "9074",
        "punta silum": "9075",
        "ragatao": "9076",
        "san simon": "9077",
        "santo nino": "9078",
        "sugbongcogon": "9079",
        "taglimao": "9080",
        "tambobong": "9081",
        "tigbawan": "9082",
        "tuod": "9083",
        "vamenta": "9084",
        "villanueva": "9019"
    },
    "mountain province": {
        "barlig": "2624",
        "besao": "2625",
        "bontoc": "2626",
        "natonin": "2627",
        "paracelis": "2628",
        "sabangan": "2629",
        "sadanga": "2630",
        "sagada": "2619",
        "tadian": "2631"
    },
    "negros occidental": {
        "bacolod city": "6100",
        "bago city": "6101",
        "binalbagan": "6107",
        "cadiz city": "6121",
        "calatrava": "6126",
        "candoni": "6111",
        "cataingan": "6128",
        "enrique b. magalona (saravia)": "6118",
        "escalante city": "6124",
        "himamaylan city": "6108",
        "hinigaran": "6113",
        "hinoba-an (asenso)": "6125",
        "iplan": "6102",
        "isabela": "6112",
        "kabankalan city": "6111",
        "la carlota city": "6130",
        "la castellana": "6131",
        "manapla": "6103",
        "moises padilla (magallon)": "6122",
        "murcia": "6129",
        "pontevedra": "6117",
        "pulupandan": "6104",
        "sagay city": "6122",
        "salvador benedicto": "6123",
        "san carlos city": "6127",
        "san enrique": "6115",
        "silay city": "6116",
        "sipalay city": "6110",
        "talisay city": "6115",
        "toboso": "6109",
        "valladolid": "6106",
        "victorias city": "6119"
    },
    "negros oriental": {
        "amlangon": "6213",
        "ayungon": "6210",
        "ayuquitan": "6211",
        "bacnotan": "6212",
        "bagtic": "6214",
        "bais city": "6206",
        "balili": "6208",
        "balugo": "6209",
        "bantayan": "6201",
        "basay": "6203",
        "batangan": "6204",
        "bayawan city (tulong)": "6216",
        "bindoy (payabon)": "6217",
        "cabagnaan": "6205",
        "canlaon city": "6200",
        "catigbian": "6218",
        "cervantes": "6219",
        "dauin": "6209",
        "dumaguete city": "6200",
        "guihulngan city (tayapa)": "6214",
        "jimalalud": "6201",
        "la libertad": "6211",
        "mabinay": "6213",
        "manjuyod": "6207",
        "pamplona": "6208",
        "san jose": "6203",
        "santa catalina": "6205",
        "siaton": "6210",
        "sibulan": "6201",
        "tanjay city": "6204",
        "tayasan": "6215",
        "valencia": "6212",
        "vallehermoso": "6206",
        "zamboanguita": "6202"
    },
    "north cotabato": {
        "alamada": "9406",
        "aleosan": "9405",
        "antipas": "9410",
        "arakan": "9404",
        "banisilan": "9414",
        "carmen": "9407",
        "cotabato city": "9400",
        "kabacan": "9416",
        "kidapawan city": "9400",
        "libungan": "9409",
        "magpet": "9403",
        "makilala": "9402",
        "matalam": "9401",
        "midsayap": "9413",
        "pigcawayan": "9415",
        "pio v. corpuz (alabama)": "9417",
        "pres. roxas": "9411",
        "tulunan": "9412"
    },
    "northern samar": {
        "allen": "6405",
        "biri": "6410",
        "bobon": "6420",
        "capul": "6409",
        "catubig": "6406",
        "gamay": "6408",
        "laoang": "6407",
        "lapinig": "6414",
        "las navas": "6412",
        "lavezares": "6404",
        "llorente": "6417",
        "mabini": "6416",
        "mapanas": "6415",
        "mondragon": "6401",
        "palapag": "6402",
        "pambujan": "6419",
        "rosario": "6418",
        "san isidro": "6403",
        "san jose": "6400",
        "san roque": "6413",
        "san vicente": "6421",
        "silvino lobos": "6409",
        "victoria": "6411"
    },
    "nueva ecija": {
        "aliaga": "3111",
        "bongabon": "3128",
        "cabanatuan city": "3100",
        "cabiao": "3107",
        "carranglan": "3123",
        "cuyapo": "3119",
        "gabaldon (bitulok & sabani)": "3131",
        "gapan city": "3105",
        "general mamerto natividad": "3114",
        "general tinio (papaya)": "3132",
        "guimba": "3115",
        "jaen": "3109",
        "laur": "3129",
        "licab": "3117",
        "llanera": "3126",
        "lupao": "3122",
        "muñoz city": "3119",
        "nampicuan": "3113",
        "palayan city": "3132",
        "pantabangan": "3124",
        "peñaranda": "3106",
        "quezon": "3127",
        "rizal": "3120",
        "san antonio": "3104",
        "san isidro": "3110",
        "san jose city": "3121",
        "san leonardo": "3102",
        "santa rosa": "3101",
        "santo domingo": "3125",
        "talavera": "3114",
        "talugtug": "3116",
        "ueva ecija": "3112",
        "pantabangan": "3124",
        "peñaranda": "3106",
        "quezon": "3127",
        "riza": "3120",
        "san antonio": "3104",
        "san isidro": "3110",
        "san jose city": "3121",
        "san leonardo": "3102",
        "santa rosa": "3101",
        "santo domingo": "3125",
        "talavera": "3114",
        "talugtug": "3116",
        "villaverde": "3118",
        "zaragoza": "3129"
    },
    "nueva vizcaya": {
        "aliqui": "3702",
        "ambaguio": "3703",
        "aro": "3705",
        "bagabag": "3700",
        "bambang": "3701",
        "bayombong": "3700",
        "diadi": "3704",
        "dupax del norte": "3707",
        "dupax del sur": "3706",
        "kasibu": "3711",
        "kayapa": "3709",
        "quezon": "3710",
        "santa fe": "3712",
        "solano": "3709",
        "villaverde": "3713"
    },
    "occidental mindoro": {
        "abra de ilog": "5102",
        "calintaan": "5103",
        "looc": "5107",
        "lubang": "5105",
        "magsaysay": "5104",
        "mamburao": "5106",
        "paluan": "5108",
        "rizal": "5109",
        "sablayan": "5100",
        "san jose": "5101",
        "santa cruz": "5110"
    },
    "oriental mindoro": {
        "baco": "5211",
        "bansud": "5210",
        "bongabong": "5212",
        "bulalacao (san pedro)": "5213",
        "calapan city": "5200",
        "gloria": "5219",
        "magsaysay": "5215",
        "naujan": "5204",
        "pinamalayan": "5205",
        "pola": "5206",
        "puerto galera": "5203",
        "roxas": "5207",
        "san teodoro": "5208",
        "socorro": "5209",
        "victoria": "5214"
    },
    "palawan": {
"aborlan": "5302",
"agutaya": "5320",
"araceli": "5311",
"balabac": "5307",
"batazara": "5306",
"brooke's point": "5305",
"busuanga": "5317",
"cagayancillo": "5321",
"coron": "5316",
"culion": "5315",
"cuyo": "5318",
"dumaran": "5310",
"el nido (baquit)": "5313",
"iwahig penal colony": "5301",
"kalayaan": "5322",
"linapacan": "5314",
"magsaysay": "5319",
"narra (panacan)": "5303",
"puerto princesa city": "5300",
"quezon": "5304",
"roxas": "5308",
"rizal (marcos)": "5323",
"san vicente": "5309",
"sofronio español": "5324",
"taytay": "5312"
},
"pampanga": {
"angeles city": "2009",
"apalit": "2016",
"arayat": "2012",
"bacolor": "2001",
"balibago": "2024",
"basa airbase": "2007",
"candaba": "2013",
"csez, clark": "2023",
"dau, mabalacat": "2026",
"floridablanca": "2006",
"guagua": "2003",
"lubao": "2005",
"mabalacat": "2010",
"macabebe": "2018",
"magalang": "2011",
"masantol": "2017",
"mexico": "2021",
"minalin": "2019",
"porac": "2008",
"san fernando": "2000",
"san luis": "2014",
"san simon": "2015",
"sexmoan (sasmuan)": "2004",
"sta. ana": "2022",
"sta. cruz, lubao": "2025",
"sta. rita": "2002",
"sto. tomas": "2020"
},
"pangasinan": {
"agno": "2408",
"aguilar": "2415",
"alaminos": "2404",
"alcala": "2425",
"anda": "2405",
"asingan": "2439",
"balungao": "2442",
"bani": "2407",
"basista": "2422",
"bautista": "2424",
"bayambang": "2423",
"binalonan": "2436",
"binmaley": "2417",
"bolinao": "2406",
"bugallon": "2416",
"burgos": "2410",
"calasiao": "2418",
"dagupan city": "2400",
"dasol": "2411",
"infanta": "2412",
"labrador": "2402",
"laoac": "2437",
"lingayen": "2401",
"mabini": "2409",
"malasiqui": "2421",
"manaoag": "2430",
"mangaldan": "2432",
"mangatarem": "2413",
"mapandan": "2429",
"natividad": "2446",
"pozorrubio": "2435",
"rosales": "2441",
"san carlos city": "2420",
"san fabian": "2433",
"san jacinto": "2431",
"san manuel": "2438",
"san nicolas": "2447",
"san quintin": "2444",
"sison": "2434",
"sta. barbara": "2419",
"sta. maria": "2440",
"sto. tomas": "2426",
"sual": "2403",
"tayug": "2445",
"umingan": "2443",
"urbiztondo": "2414",
"urdaneta": "2428",
"villasis": "2427"
},
"quezon province": {
"agdangan": "4304",
"alabat": "4333",
"atimonan": "4331",
"buenavista": "4320",
"burdeos": "4340",
"calauag": "4318",
"candelaria": "4323",
"catanauan": "4311",
"dolores": "4326",
"general luna": "4310",
"general nakar": "4338",
"guinayangan": "4319",
"gumaca": "4307",
"hondagua": "4317",
"infanta": "4336",
"jomalig": "4342",
"lopez": "4316",
"lucban": "4328",
"lucena city": "4301",
"macalelon": "4309",
"mauban": "4330",
"mulanay": "4312",
"padre burgos": "4303",
"pagbilao": "4302",
"panukulan": "4337",
"patnanungan": "4341",
"perez": "4334",
"pitogo": "4308",
"plaridel": "4306",
"polilio": "4339",
"quezon": "4332",
"quezon capitol": "4300",
"real": "4335",
"sampaloc": "4329",
"san andres": "4314",
"san antonio": "4324",
"san francisco": "4315",
"san narciso": "4313",
"sariaya": "4322",
"tagkawayan": "4321",
"tayabas": "4327",
"tiaong": "4325",
"unisan": "4305"
},
"quirino": {
"aglipay": "3403",
"cabarroguis": "3400",
"diffun": "3401",
"maddela": "3404",
"nagtipunan": "3405",
"saguday": "3402"
},
"rizal province": {
"angono": "1930",
"antipolo": "1870",
"bagong nayon (cogeo)": "1872",
"baras": "1970",
"binangonan": "1940",
"cainta": "1900",
"cardona": "1950",
"cupang": "1873",
"jala-jala": "1990",
"langhaya": "1874",
"mambagat": "1875",
"mayamot": "1871",
"montalban (rodriguez)": "1860",
"morong": "1960",
"pilillia": "1910",
"san mateo": "1850",
"tanay": "1980",
"taytay": "1920",
"teresa": "1880"
},
"romblon": {
"alcantara": "5509",
"banton (jones)": "5515",
"cajidiocan": "5512",
"calatrava": "5503",
"concepcion": "5516",
"corcuera": "5514",
"ferrol": "5506",
"sta. maria (formerly imelda)": "5502",
"looc": "5507",
"magdiwang": "5511",
"odiongan": "5505",
"romblon": "5500",
"san agustin": "5501",
"san andres": "5504",
"san fernando": "5513",
"san jose": "5510",
"sta. fe": "5508"
},
"samar": {
"almagro": "6724",
"basey": "6720",
"calbayog city": "6710",
"calbiga": "6715",
"catbalogan": "6700",
"daram": "6722",
"gandara": "6706",
"hinabangan": "6713",
"jiabong": "6701",
"marabut": "6721",
"matuguinao": "6708",
"motiong": "6702",
"pagsanghan": "6705",
"pinabacdao": "6716",
"san jorge": "6707",
"san jose de buan": "6723",
"san sebastian": "6714",
"sta. margarita": "6709",
"sta. rita": "6718",
"sto. niño": "6711",
"tagapul-an": "6712",
"talalora": "6719",
"tarangnan": "6704",
"villareal": "6717",
"wright": "6703",
"zumarraga": "6725"
},
"sarangani": {
"alabel": "9501",
"glan": "9517",
"kiamba": "9514",
"maasim": "9502",
"maitum": "9515",
"malapatan": "9516",
"malungon": "9503"
},
"siquijor": {
"enrique villanueva": "6230",
"larena": "6226",
"lazi": "6228",
"maria": "6229",
"san juan": "6227",
"siquijor": "6225"
},
"sorsogon": {
"bacon": "4701",
"barcelona": "4712",
"bulan": "4706",
"bulusan": "4704",
"casiguran": "4702",
"castilla": "4713",
"donsol": "4715",
"gubat": "4710",
"irosin": "4707",
"juban": "4703",
"magallanes": "4705",
"matnog": "4708",
"pilar": "4714",
"prieto diaz": "4711",
"sorsogon": "4700",
"sta. magdalena": "4709"
},
"south cotabato": {
"banga": "9511",
"general santos city": "9500",
"koronadal": "9506",
"lake sebu": "9518",
"norala": "9508",
"polomolok": "9504",
"sto. niño": "9509",
"surallah": "9512",
"tampakan": "9507",
"tantangan": "9510",
"t'boli": "9513",
"tupi": "9505"
},
"southern leyte": {
"anahawan": "6610",
"bontoc": "6604",
"hinunangan": "6608",
"hinundayan": "6609",
"libagon": "6615",
"liloan": "6612",
"limasawa": "6618",
"maasin": "6600",
"macrohon": "6601",
"malitbog": "6603",
"padre burgos": "6602",
"pintuyan": "6614",
"san francisco": "6613",
"san juan (cabalian)": "6611",
"san ricardo": "6617",
"silago": "6607",
"sogod": "6606",
"st. bernard": "6616",
"tomas oppus": "6605"
},
"sultan kudarat": {
"bagumbayan": "9810",
"columbio": "9801",
"esperanza (ampatuan)": "9806",
"isulan": "9805",
"kalamansig": "9808",
"lebak (salaman)": "9807",
"lutayan": "9803",
"mariano marcos": "9802",
"palimbang": "9809",
"pres. quirino": "9804",
"sen. ninoy aquino": "9811",
"tacurong": "9800"
},
"sulu": {
"banguingui (formerly tongkil)": "7406",
"hadji panglima tahil (formerly marungas)": "7413",
"indanan": "7407",
"jolo": "7400",
"kalingalan kalauang": "7416",
"lugus": "7411",
"luuk": "7404",
"maimbung": "7409",
"omar": "7417",
"panamao": "7402",
"pandami": "7418",
"panglima estino": "7415",
"panguntaran": "7414",
"parang": "7408",
"pata": "7405",
"patikul": "7401",
"siasi": "7412",
"talipao": "7403",
"tapul": "7410"
},
"surigao del norte": {
"alegria": "8425",
"bacuag": "8408",
"burgos": "8424",
"claver": "8410",
"dapa": "8417",
"del carmen": "8418",
"gen. luna": "8419",
"gigaquit": "8409",
"mainit": "8407",
"malimono": "8402",
"pilar": "8420",
"placer": "8405",
"san benito": "8423",
"san francisco": "8401",
"san isidro": "8421",
"sison": "8404",
"socorro": "8416",
"sta. monica": "8422",
"surigao city": "8400",
"tagana-an": "8403",
"tubod": "8406"
},
"surigao del sur": {
"barobo": "8309",
"bayabas": "8303",
"bislig": "8311",
"cagwait": "8304",
"cantilan": "8317",
"carmen": "8315",
"carrascal": "8318",
"cortez": "8313",
"hinatuan": "8310",
"lanuza": "8314",
"lianga": "8307",
"lingig": "8312",
"madrid": "8316",
"malixi": "8319",
"marihatag": "8306",
"san agustin": "8305",
"san miguel": "8301",
"tagbina": "8308",
"tago": "8302",
"tandag": "8300"
},
"tarlac": {
"anao": "2310",
"bamban": "2317",
"camiling": "2306",
"capas": "2315",
"concepcion": "2316",
"gerona": "2302",
"la paz": "2314",
"mayantoc": "2304",
"moncada": "2308",
"paniqui": "2307",
"pura": "2312",
"ramos": "2311",
"san clemente": "2305",
"san jose": "2318",
"san manuel": "2309",
"san miguel": "2301",
"sta. ignacia": "2303",
"tarlac": "2300",
"victoria": "2313"
},
"tawi-tawi": {
"bongao": "7500",
"languyan": "7509",
"mapun (formerly cagayan de sulu)": "7508",
"panglima sugala (formerly balimbing)": "7501",
"sapa-sapa": "7503",
"sibutu": "7510",
"simunul": "7505",
"sitangkai": "7506",
"south ubian": "7504",
"turtle island (taganak)": "7507",
"tandu bas": "7502"
},
"zambales": {
"botolan": "2202",
"cabangan": "2203",
"candelaria": "2212",
"castillejos": "2208",
"iba": "2201",
"masinloc": "2211",
"olongapo city": "2200",
"palauig": "2210",
"san antonio": "2206",
"san felipe": "2204",
"san marcelino": "2207",
"san narciso": "2205",
"sta. cruz": "2213",
"subic": "2209"
},
"zamboanga del norte": {
"leon b. postigo (bacungan)": "7125",
"liloy": "7115",
"manukan": "7110",
"mutia": "7107",
"pinan": "7105",
"polanco": "7106",
"rizal": "7104",
"roxas": "7102",
"salug": "7114",
"sergio osmeña": "7108",
"siayan": "7113",
"sibuco": "7122",
"sibutad": "7103",
"sindangan": "7112",
"siocon": "7120",
"siraway": "7121",
"tampilisan": "7116"
},
"zamboanga del sur": {
"aurora": "7020",
"bayog": "7011",
"dimataling": "7032",
"dinas": "7030",
"don mariano marcos": "7022",
"dumalinao": "7015",
"dumingag": "7028",
"guipos": "7042",
"josefina": "7027",
"kumalarang": "7013",
"labangan": "7017",
"lakewood": "7014",
"lapuyan": "7037",
"mahayag": "7026",
"margo sa tubig": "7035",
"midsalip": "7021",
"molave": "7023",
"pagadian city": "7016",
"pitogo": "7033",
"ramon magsaysay": "7024",
"san miguel": "7029",
"san pablo": "7031",
"tabina": "7034",
"tambulig": "7025",
"tigbao": "7043",
"tukuran": "7019",
"vicencio sagun": "7036",
"zamboanga city": "7000"
},
"zamboanga sibugay": {
"alicia": "7005",
"buug": "7018",
"diplahan": "7012",
"imatong": "7007",
"ipil": "7001",
"kabasalan": "7006",
"mabuhay": "7002",
"malangas": "7003",
"naga": "7010",
"olutanga": "7004",
"payao": "7008",
"roseller lim": "7009",
"siay": "7002",
"talusan": "7013",
"titay": "7015",
"tungawan": "7016"
}

};



      //  "ilocos sur": {
      //      "alilem":"2716",
      //      "banayoyo":"2708",
      //      "bantay":"2727",
      //      "burgos":"2724",
      //      "cabugao":"2732",
      //      "candon city":"2710",
      //      "caoayan":"2702",
      //      "cervantes":"2718",
      //      "galimuyod":"2709",
      //      "gregorio del pilar":"2720",
      //      "lidlidda":"2723",
      //      "magsingal":"2730",
      //      "nagbukel":"2725",
      //      "narvacan":"2704",
      //      "quirino":"2721",
      //      "salcedo":"2711",
      //      "san emilio":"2722",
      //      "san esteban":"2706",
      //      "san ildefonso":"2728",
      //      "san juan":"2731",
      //      "san vicente":"2726",
      //      "santa":"2703",
      //      "santa catalina":"2701",
      //      "santa cruz":"2713",
      //      "santa lucia":"2712",
      //      "santa maria":"2705",
      //      "santiago":"2707",
      //      "santo domingo":"2729",
      //      "sigay":"2719",
      //      "sinait":"2733",
      //      "sugpon":"2717",
      //      "suyo":"2715",
      //      "tagudin":"2714",
      //      "vigan city":"2700"
      //   },
 
      //   // Ilocos Norte
      //  "ilocos norte": {
      //       // Add municipalities and their zip codes
      //   },

      //   // La Union
      //  "la union": {
      //       // Add municipalities and their zip codes
      //   },

      //   // Pangasinan
      //  "pangasinan": {
      //       // Add municipalities and their zip codes
      //   },

      //   // Batanes
      //  "batanes": {
      //       // Add municipalities and their zip codes
      //   },

      //   // Cagayan
      //  "cagayan": {
      //       // Add municipalities and their zip codes
      //   },

      //   // Isabela
      //  "isabela": {
      //       // Add municipalities and their zip codes
      //   },

      //   // Nueva Vizcaya
      //  "nueva vizcaya": {
      //       // Add municipalities and their zip codes
      //   }
      // };

    // Fetch the zip code based on the selected province and municipality
    var zipCode = zipCodes[provinceValue.toLowerCase()][municipalityValue.toLowerCase()];

    // If zip code found, fill the zip input field
    if (zipCode) {
        document.getElementById('zip').value = zipCode;
        document.getElementById('address').value = address;
    } else {
        document.getElementById('zip').value ="";
                document.getElementById('address').value = address;
    }
};

// Call autoFillZip() when the municipality dropdown changes
var _munEl = document.getElementById('municipality');
if (_munEl) _munEl.addEventListener('change', autoFillZip);
</script>









        </div><!-- /.container-fluid -->
        </div><!-- /.modal-body -->
        <div class="modal-footer">
            <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
            <button class="btn btn-success" name="save" type="submit"><i class="fas fa-user-plus"></i> Sign Up</button>
        </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal #form_modal -->





























        </div>
      
  
    </div>
  </div>
</div>










<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- Select2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.full.min.js"></script>

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
                        uni_modal("Success","success_msg.php");
                    }, 750);
                } else {
                    $('#msg').html('<div class="alert alert-danger">Username already exist</div>');
                    $("html, body").animate({
                        scrollTop: 0
                    },"fast");
                }
                end_loader();
            }
        });
    });
</script>



<script>
    function validatePasswords(password, repassword) {
      const minLength = 8;

      if (!password || !repassword) {
        return"";
      }

      if (password !== repassword) {
        return"Passwords do not match.";
      }

      if (password.length < minLength) {
        return"Password must be at least" + minLength +" characters long.";
      }

      if (!/[A-Z]/.test(password)) {
        return"Password must contain at least one uppercase letter.";
      }

      if (!/[a-z]/.test(password)) {
        return"Password must contain at least one lowercase letter.";
      }

      if (!/\d/.test(password)) {
        return"Password must contain at least one numeric character.";
      }

      return"Password is valid!";
    }

    function validatePasswordInput() {
      const passwordInput = document.getElementById("password");
      const repasswordInput = document.getElementById("repassword");
      const validationResult = document.getElementById("validationResult");
      const errorMessage = document.getElementById("errorMessage");

      const password = passwordInput.value;
      const repassword = repasswordInput.value;

      const result = validatePasswords(password, repassword);

      if (result.includes("valid")) {
        validationResult.textContent = result;
        errorMessage.textContent ="";
      } else {
        validationResult.textContent ="";
        errorMessage.textContent = result;
      }
    }

    // Attach the validation function to input events
    var _pwEl = document.getElementById("password");
    var _rpwEl = document.getElementById("repassword");
    if (_pwEl) _pwEl.addEventListener("input", validatePasswordInput);
    if (_rpwEl) _rpwEl.addEventListener("input", validatePasswordInput);
  </script>


<script type="text/javascript">
  

function sendCode() {
  var email = document.getElementById("username").value;
  
  // You can perform further actions here, such as sending the code via Gmail
  
  // Example alert to show the email value (replace this with your actual code)
  alert("Sending code to:" + email);
}


</script>




<script src="<?php echo base_url ?>dist/js/addressData.js"></script>
<script>
(function() {
    var sel = document.getElementById('province');
    if (sel && window.alrexZipCodes) {
        Object.keys(window.alrexZipCodes).forEach(function(key) {
            var label = key.split(' ').map(function(w) {
                return w.charAt(0).toUpperCase() + w.slice(1);
            }).join(' ');
            var o = document.createElement('option');
            o.value = label; o.textContent = label;
            sel.appendChild(o);
        });
    }
})();

function getMunicipalities() {
    var provSel = document.getElementById('province');
    var muniSel = document.getElementById('municipality');
    var bgySel  = document.getElementById('barangay');
    muniSel.innerHTML = '<option value="">Select Municipality</option>';
    bgySel.innerHTML  = '<option value="">Select Barangay</option>';
    document.getElementById('zip').value = '';
    var provName = provSel.value;
    if (!provName || !window.alrexZipCodes) return;
    var keyExact = provName.toLowerCase();
    var keyStripped = keyExact.replace(/[^\w\s]/g, '').trim();
    var munis = window.alrexZipCodes[keyExact] || window.alrexZipCodes[keyStripped];
    if (!munis) return;
    Object.keys(munis).forEach(function(m) {
        var label = m.split(' ').map(function(w) {
            return w.charAt(0).toUpperCase() + w.slice(1);
        }).join(' ');
        var o = document.createElement('option');
        o.value = label; o.textContent = label;
        muniSel.appendChild(o);
    });
}

function getBarangays() {
    var provSel = document.getElementById('province');
    var muniSel = document.getElementById('municipality');
    var bgySel  = document.getElementById('barangay');
    bgySel.innerHTML = '<option value="">Select Barangay</option>';
    document.getElementById('zip').value = '';
    var provName = provSel.value;
    var muniName = muniSel.value;
    if (!provName || !muniName) return;

    // Try local data first (covers Ilocos Sur, La Union, Pangasinan, Ilocos Norte)
    var addrData = window.alrexAddressData;
    if (addrData && addrData.provinces) {
        var prov = addrData.provinces.find(function(p) {
            return p.name.toLowerCase() === provName.toLowerCase();
        });
        if (prov && prov.municipalities) {
            var muni = prov.municipalities.find(function(m) {
                return m.name.toLowerCase() === muniName.toLowerCase();
            });
            if (muni && muni.barangays && muni.barangays.length) {
                muni.barangays.forEach(function(b) {
                    var o = document.createElement('option');
                    o.value = b.trim(); o.textContent = b.trim();
                    bgySel.appendChild(o);
                });
                return;
            }
        }
    }

    // Fallback: fetch from PSGC via server endpoint (cached after first load)
    bgySel.innerHTML = '<option value="" disabled selected>Loading barangays…</option>';
    fetch('get_barangays.php?province=' + encodeURIComponent(provName) + '&city=' + encodeURIComponent(muniName))
        .then(function(r) { return r.json(); })
        .then(function(barangays) {
            bgySel.innerHTML = '<option value="">Select Barangay</option>';
            if (!barangays || barangays.length === 0) {
                var o = document.createElement('option');
                o.value = 'N/A'; o.textContent = 'N/A';
                bgySel.appendChild(o);
                bgySel.value = 'N/A';
                autoFillZip();
                return;
            }
            barangays.forEach(function(b) {
                var o = document.createElement('option');
                o.value = b; o.textContent = b;
                bgySel.appendChild(o);
            });
        })
        .catch(function() {
            bgySel.innerHTML = '<option value="">Select Barangay</option>';
            var o = document.createElement('option');
            o.value = 'N/A'; o.textContent = 'N/A';
            bgySel.appendChild(o);
            bgySel.value = 'N/A';
        });
}
</script>


<script>
$(function(){
    function checkReq(reqId, condition) {
        if (condition) {
            $('#' + reqId).removeClass('text-danger').addClass('text-success')
                .find('i').removeClass('fa-times-circle').addClass('fa-check-circle');
        } else {
            $('#' + reqId).removeClass('text-success').addClass('text-danger')
                .find('i').removeClass('fa-check-circle').addClass('fa-times-circle');
        }
        return condition;
    }

    function validatePassword() {
        var pw  = $('#signup-password').val();
        var cpw = $('#signup-cpassword').val();
        var ok  = true;
        ok &= checkReq('req-length',  pw.length >= 8);
        ok &= checkReq('req-upper',   /[A-Z]/.test(pw));
        ok &= checkReq('req-lower',   /[a-z]/.test(pw));
        ok &= checkReq('req-number',  /\d/.test(pw));
        ok &= checkReq('req-special', /[\W_]/.test(pw));
        ok &= checkReq('req-match',   pw.length > 0 && pw === cpw);
        return !!ok;
    }

    $('#signup-password, #signup-cpassword').on('input', validatePassword);

    // Block form submit if password requirements not met
    $('form[action="save.php"]').on('submit', function(e) {
        if (!validatePassword()) {
            e.preventDefault();
            Swal.fire({
                icon: 'warning',
                title: 'Password Requirements Not Met',
                text: 'Please ensure your password meets all the requirements listed.'
            });
        }
    });

    // Update hidden address field when barangay changes
    $('#barangay').on('change', function() {
        var prov = $('#province').val();
        var muni = $('#municipality').val();
        var bgy  = $(this).val();
        if (prov || muni || bgy) {
            $('#address').val([bgy, muni, prov].filter(Boolean).join(', '));
        }
    });
});
</script>


