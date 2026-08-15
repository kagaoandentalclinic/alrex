<style>
    #uni_modal .modal-footer{
        display:none;
    }
</style>

<div class="container-fluid">
    <div class="alert alert-success">
        <p>ALREX: Re Appointment Request has been successfully set.</p>
    </div>

    <div class="form-group text-right">
        <button class="btn btn-sm btn-dark btn-flat" type="button" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
    </div>
</div>
<script>
    $(function(){
        $('#uni_modal').on('hide.bs.modal',function(){
            location.reload()
        })
    })
</script>