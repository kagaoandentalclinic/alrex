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
                        <label for="petname" class="control-label">Pet Name</label>
                        <input type="text" name="petname" id="petname" class="form-control form-control-border"  value ="<?= isset($_GET['petname']) ? $_GET['petname'] : '' ?>" required>
                    </div>
 <div class="form-group">
                        <label for="ehr" class="control-label">Ehrlichia</label>
                        <input type="text" name="ehr" id="ehr" class="form-control form-control-border" required>
                    </div>

 <div class="form-group">
                        <label for="bab" class="control-label">Babesia</label>
                        <input type="text" name="bab" id="bab" class="form-control form-control-border" required>
                    </div>


 <div class="form-group">
                        <label for="ana" class="control-label">Anaplasma</label>
                        <input type="text" name="ana" id="ana" class="form-control form-control-border" required>
                    </div>
                    <div class="form-group">
                        <label for="lym" class="control-label">Lyme Disease</label>
                        <input type="text" name="lym" id="lym" class="form-control form-control-border" required>
                    </div>

            
</fieldset>
</div>
  


<div class="col-lg-6">
                <fieldset>
                    <legend class="text-muted">Client Information</legend>


     <div class="form-group">
                        <label for="tenta" class="control-label">TENTATIVE DIAGNOSIS</label>
                        <input type="text" name="tenta" id="tenta" class="form-control form-control-border" required>
                    </div>

  <div class="form-group">
                        <label for="progno" class="control-label">PROGNOSIS</label>
                        <input type="text" name="progno" id="progno" class="form-control form-control-border" required>
                    </div>

  <div class="form-group">
                        <label for="diff" class="control-label">DIFFERENTAL DIAGNOSIS</label>
                        <input type="text" name="diff" id="diff" class="form-control form-control-border" required>
                    </div>

                    <div class="form-group">
                        <label for="recc" class="control-label">RECCOMENDATION</label>
                        <input type="text" name="recc" id="recc" class="form-control form-control-border" required>
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
                url:_base_url_+"classes/Master.php?f=blood",
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