<div class="container-fluid">
    <form action="" id="update-form">
        <input type="hidden" name="id" value="<?= isset($_GET['id']) ? $_GET['id'] : '' ?>">
            <div class="form-group">
                
     <input type="text" class="form-control" name="code" value="<?= isset($_GET['code']) ? $_GET['code'] : '' ?>">
    <input type="text" class="form-control" name="clientid" value="<?= isset($_GET['clientid']) ? $_GET['clientid'] : '' ?>">
                <small class="text-muted ">Status</small>






                <select name="status" id="status" class="form-control form-control-sm form-control-border" required>
                    
                    <option value="2" <?= isset($status) && $status == 2 ? "selected" : "" ?>>Not Attend the Seasion</option>
                    <option value="3" <?= isset($status) && $status == 3 ? "selected" : "" ?>>Done Lesson</option>
                   
                </select>
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
                url:_base_url_+"classes/Master.php?f=update_appointment_status",
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