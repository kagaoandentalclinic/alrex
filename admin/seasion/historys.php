<div class="container-fluid">
    <form action="" id="update-form">
        <input type="hidden" name="id" value="<?= isset($_GET['id']) ? $_GET['id'] : '' ?>">
            

<div class="row">
            <div class="col-lg-12">
                <fieldset>
                    <legend class="text-muted">Client Information</legend>
                    <div class="form-group">
                        <label for="code" class="control-label">Client ID</label>
                        <input type="text" name="code" id="code" class="form-control form-control-border"  value ="<?= isset($_GET['code']) ? $_GET['code'] : '' ?>" required>
                    </div>
                

 <div class="form-group">
                        <label for="owner_name" class="control-label">Client Name</label>
                        <input type="text" name="owner_name" id="owner_name" class="form-control form-control-border"  value ="<?= isset($_GET['owner_name']) ? $_GET['owner_name'] : '' ?>" required>
                    </div>



 <div class="form-group">
                        <label for="petname" class="control-label">Pet Name</label>
                        <input type="text" name="petname" id="petname" class="form-control form-control-border"  value ="<?= isset($_GET['petname']) ? $_GET['petname'] : '' ?>" required>
                    </div>







 <div class="form-group">
                        <label for="clinical" class="control-label">clinical history</label>
                        <input type="text" name="clinical" id="clinical" class="form-control form-control-border" required>
                    </div>


 <div class="form-group">
                        <label for="diet" class="control-label">diet</label>
                        <input type="text" name="diet" id="diet" class="form-control form-control-border" >
                    </div>

                     <div class="form-group">
                        <label for="chef" class="control-label">Chef</label>
                        <input type="text" name="chef" id="chef" class="form-control form-control-border" >
                    </div>

  <input type='file' name="mukha" id="mukha" onchange="readURL(this);" />
    <img id="blah" src="#" alt="your image" />
            
</fieldset>
</div>
  
<?php

// connect to database


// file properties
$file = $_FILES['mukha']['tmp_name'];

if (!isset($file))
  echo "Please select a profile pic";
else
{
  $image = addslashes(file_get_content($_FILES['mukha']['tmp_name']));
  $image_name = addslashes($FILES['mukha']['name']);
  $image_size = getimagesize($_FILES['mukha']['tmp_name']);

  if ($image_size==FALSE)
    echo "That isn't a image.";
  else
  {
    $insert = mysql_query("INSERT INTO history set img='$image', code='$code'");
  }
}
?>





    </form>
</div>
<script>

  function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }



    $(function(){
        $('#update-form').submit(function(e){
            e.preventDefault()
            var _this = $("#entry-form")
            $('.pop-msg').remove()
            var el = $('<div>')
                el.addClass("pop-msg alert")
                el.hide()
            start_loader();
            $.ajax({
                url:_base_url_+"classes/Master.php?f=vaccination_history",
				data: new FormData($(this)[0]),
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST',
                dataType: 'json',
				error:err=>{
					console.log(err)
					alert_toast("An error occured",'error');
					end_loader();
				},
                success:function(resp){
                    if(resp.status == 'success'){
                        location.reload();
                    }else if(!!resp.msg){
                        el.addClass("alert-danger")
                        el.text(resp.msg)
                        _this.prepend(el)
                    }else{
                        el.addClass("alert-danger")
                        el.text("An error occurred due to unknown reason.")
                        _this.prepend(el)
                    }
                    el.show('slow')
                    $('html, body,.modal').animate({scrollTop:0},'fast')
                    end_loader();
                }
            })
        })
    })
</script>