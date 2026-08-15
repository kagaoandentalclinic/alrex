<div class="container-fluid">
    <form action="" id="update-form">
        <input type="hidden" name="id" value="<?= isset($_GET['id']) ? $_GET['id'] : '' ?>">
            

<div class="row">
            <div class="col-lg-6">
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
                        <label for="contact" class="control-label">Contact</label>
                        <input type="text" name="contact" id="contact" class="form-control form-control-border"  value ="<?= isset($_GET['contact']) ? $_GET['contact'] : '' ?>" required>
                    </div>

 <div class="form-group">
                        <label for="petname" class="control-label">Pet Name</label>
                        <input type="text" name="petname" id="petname" class="form-control form-control-border"  value ="<?= isset($_GET['petname']) ? $_GET['petname'] : '' ?>" required>
                    </div>
                     <div class="form-group">
                        <label for="age" class="control-label">Pet Age</label>
                        <input type="text" name="age" id="age" class="form-control form-control-border"  value ="<?= isset($_GET['age']) ? $_GET['age'] : '' ?>" required>
                    </div>
                         <div class="form-group">
                        <label for="sex" class="control-label">Sex</label>
                        <input type="text" name="sex" id="sex" class="form-control form-control-border"  value ="<?= isset($_GET['sex']) ? $_GET['sex'] : '' ?>" required>
                    </div>

        <div class="form-group">
                        <label for="breed" class="control-label">Breed</label>
                        <input type="text" name="breed" id="breed" class="form-control form-control-border"  value ="<?= isset($_GET['breed']) ? $_GET['breed'] : '' ?>" required>
                    </div>





   <div class="form-group">
                        <label for="diag" class="control-label">Patient Case/Diagnosis</label>
                        <textarea type="text" name="diag" id="diag" class="form-control form-control-lg rounded-0" rows="3"  required></textarea>
                    </div>





            
</fieldset>
</div>
  




   <div class="col-lg-6">
                <fieldset>
                    <legend class="text-muted">Other</legend>

                     <div class="form-group">
                        <label for="weight" class="control-label">Weight</label>
                        <input type="text" name="weight" id="weight" class="form-control form-control-border" required>
                    </div>


 <div class="form-group">
                        <label for="temperature" class="control-label">Temperature</label>
                        <input type="text" name="temperature" id="temperature" class="form-control form-control-border" required>
                    </div>

                     <div class="form-group">
                        <label for="heartrate" class="control-label">Heart Rate</label>
                        <input type="text" name="heartrate" id="heartrate" class="form-control form-control-border" required>
                    </div>

    <div class="form-group">
                        <label for="respiratoryrate" class="control-label">Respiratory Rate</label>
                        <input type="text" name="respiratoryrate" id="respiratoryrate" class="form-control form-control-border" required>
                    </div>
 <div class="form-group">
                        <label for="mm" class="control-label">MM</label>
                        <input type="text" name="mm" id="mm" class="form-control form-control-border" required>
                    </div>


                    <div class="form-group">
                        <label for="crt" class="control-label">CRT</label>
                        <input type="text" name="crt" id="crt" class="form-control form-control-border" required>
                    </div>


</fieldset>
</div>

    </form>
</div>
<script>
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
                url:_base_url_+"classes/Master.php?f=admit_patient",
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