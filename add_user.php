<?php require_once('./config.php');

if (isset($_GET['id']) && $_GET['id'] > 0) {
    $user = $conn->query("SELECT * FROM users where id ='{$_GET['id']}'");
    foreach ($user->fetch_array() as $k => $v) {
        $meta[$k] = $v;
    }
}

if ($_settings->chk_flashdata('success')):
?>

<script>
    alert_toast("<?php echo $_settings->flashdata('success') ?>", 'success')
</script>
<?php endif; ?>
<style type="text/css">
    .flex-container {
        display: flex;
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
<video autoplay muted loop id="myVideo">
    <source src="uploads/website.mp4" type="video/mp4">
</video>
<div class="card card-outline col-8">
    <div class="card-body">
        <h1>Sign Up</h1>
        <p>It's quick and easy</p>
        <hr>
        <div class="container-fluid">
            <div id="msg"></div>
            <form action="" id="manage-user">
                <input type="hidden" name="id" value="<?php echo isset($meta['id']) ? $meta['id'] : '' ?>">
                <div class="flex-container">
                    <div class="form-group">
                        <label for="name">First Name</label>
                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First name" value="<?php echo isset($meta['firstname']) ? $meta['firstname'] : '' ?>">
                    </div>&nbsp; &nbsp;
                    <div class="form-group">
                        <label for="name">Last Name</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last name" value="<?php echo isset($meta['lastname']) ? $meta['lastname'] : '' ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" value="<?php echo isset($meta['username']) ? $meta['username'] : '' ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="New password" class="form-control" value="" autocomplete="off" <?php echo isset($meta['id']) ? "": 'required' ?>>
                    <?php if (isset($_GET['id'])): ?>
                    <small class="text-info"><i>Leave this blank if you don't want to change the password.</i></small>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="type">User Type</label>
                    <select name="type" id="type" class="custom-select" required>
                        <option value="3" <?php echo isset($meta['type']) && $meta['type'] == 3 ? 'selected' : '' ?>>Staff</option>
                        <option value="4" <?php echo isset($meta['type']) && $meta['type'] == 4 ? 'selected' : '' ?>>Faculty</option>
                        <option value="5" <?php echo isset($meta['type']) && $meta['type'] == 5 ? 'selected' : '' ?>>Student</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="type">Address</label>
                    <table>
                        <tr>
                            <td>Region</td>
                            <td>
                                <select id="region" name="region" class="form-control"></select>
                            </td>
                        </tr>
                        <tr>
                            <td>Province</td>
                            <td>
                                <select id="province" name="province" class="form-control"></select>
                            </td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td>
                                <select id="city" name="city" class="form-control"></select>
                            </td>
                        </tr>
                        <tr>
                            <td>Barangay</td>
                            <td>
                                <select id="barangay" name="barangay" class="form-control"></select>
                            </td>
                        </tr>
                    </table>
                </div>
                <button class="btn btn-lg btn-primary mr-2" form="manage-user">Create Account</button>
                <a class="btn btn-lg btn-secondary" href="index.php">Back</a>
            </form>
        </div>
    </div>
</div>
<style>
    img#cimg {
        height: 15vh;
        width: 15vh;
        object-fit: cover;
        border-radius: 100% 100%;
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
<script src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script>
<script>
    var my_handlers = {
        fill_provinces: function () {
            var region_code = $(this).val();
            $('#province').ph_locations('fetch_list', [{
                "region_code": region_code
            }]);
        },
        fill_cities: function () {
            var province_code = $(this).val();
            $('#city').ph_locations('fetch_list', [{
                "province_code": province_code
            }]);
        },
        fill_barangays: function () {
            var city_code = $(this).val();
            $('#barangay').ph_locations('fetch_list', [{
                "city_code": city_code
            }]);
        }
    };
    $(function () {
        $('#region').on('change', my_handlers.fill_provinces);
        $('#province').on('change', my_handlers.fill_cities);
        $('#city').on('change', my_handlers.fill_barangays);
        $('#region').ph_locations({
            'location_type': 'regions'
        });
        $('#province').ph_locations({
            'location_type': 'provinces'
        });
        $('#city').ph_locations({
            'location_type': 'cities'
        });
        $('#barangay').ph_locations({
            'location_type': 'barangays'
        });
        $('#region').ph_locations('fetch_list');
    });
</script>
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
        var formData = new FormData($(this)[0]);
        ['province', 'city', 'barangay'].forEach(function(field) {
            var sel = document.getElementById(field);
            if (sel && sel.selectedIndex >= 0) {
                var text = sel.options[sel.selectedIndex].text;
                formData.set(field, (text && text.indexOf('--') === -1) ? text : '');
            }
        });
        $.ajax({
            url: _base_url_ + 'classes/Users.php?f=save',
            data: formData,
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
