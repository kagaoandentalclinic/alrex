<style>
    #uni_modal .modal-footer{
        display:none;
    }
</style>

<div class="container-fluid">
    <div class="alert alert-success">

Thank You Sir/Ma`am;<br>

Thank you for filling out our sign up form. We are glad that you joined us.<br>
<br>
Have a nice day



    </div>

    <div class="form-group text-right">
        <button class="btn btn-sm btn-dark btn-flat" type="button" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
    </div>
</div>
<script>
    $(function(){
        $('#uni_modal').on('hide.bs.modal',function(){
                    
                    location.href = 'admin/login.php';
        })
    })
</script>