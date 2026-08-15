<?php
require_once('../../config.php');
if(isset($_GET['id'])){
    $qry = $conn->query("SELECT * FROM `inventory_list` where id = '{$_GET['id']}'");
    if($qry->num_rows > 0){
        $res = $qry->fetch_array();
        foreach($res as $k => $v){
            if(!is_numeric($k))
            $$k = $v;
        }
    }
}
?>
<style>
    #cimg{
        object-fit:scale-down;
        object-position:center center;
        height:200px;
        width:200px;
    }
</style>
<div class="container-fluid">
    <form action="" id="service-form">
        <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">


    <div class="form-group">
            <label for="one" class="control-label">Add Stock</label>
            <input type="number" step="any" name="one" id="one" class="form-control form-control-border text-right" placeholder="Enter the number to add" value ="" required>
        </div>

   <div class="form-group">
            <label for="stock" class="control-label">Stock</label>
            <input type="number" step="any" name="stock" id="stock" class="form-control form-control-border text-right" placeholder="Enter stock" value ="<?php echo isset($stock) ? $stock : 0 ?>" required>
        </div>






    </form>
</div>


<script>








    $(function(){
        $('#uni_modal').on('shown.bs.modal',function(){
            $('#category_ids').select2({
                placeholder:"Please Select Pet Type(s) here.",
                width:'100%',
                dropdownParent:$('#uni_modal')
            })
            $('.summernote').each(function(){
                var _this = $(this);
                _this.summernote({
                    height:'15vh',
                    placeholder:_this.attr('data-placeholder'),
                })
            })
        })
        $('#uni_modal #service-form').submit(function(e){
            e.preventDefault();
            var _this = $(this)
            $('.pop-msg').remove()
            var el = $('<div>')
                el.addClass("pop-msg alert")
                el.hide()
            start_loader();
            $.ajax({
                url:_base_url_+"classes/Master.php?f=add_stock",
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
                    if(resp.stock == 'success'){
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
                    $('html,body,.modal').animate({scrollTop:0},'fast')
                    end_loader();
                }
            })
        })
    })
</script>