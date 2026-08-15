<div class="container-fluid">
    <form action="" id="update-form">
        <input type="hidden" name="id" value="<?= isset($_GET['id']) ? $_GET['id'] : '' ?>">
   
     <div class="form-group">

     <input type="hidden" class="form-control" name="code" value="<?= isset($_GET['code']) ? $_GET['code'] : '' ?>">



    <input type="text" class="form-control" name="clientid" value="<?= isset($_GET['clientid']) ? $_GET['clientid'] : '' ?>">
                <small class="text-muted ">Select Date of Appoinment</small>







<input type="date" class="form-control form-control-sm form-control-border" id="schedule" name="schedule">






                    
                        

  <?php 
    $start=new DateTime( date( DATE_ATOM, strtotime('8am') ) );
$end=new DateTime( date( DATE_ATOM, strtotime('5pm') ) );
$interval=new DateInterval('PT30M');

/* ensure the initial time is part of the output */
$start->sub( $interval );
$slots=array();

while( $start->add( $interval ) <= $end )$slots[]=$start->format('h:i a');
printf('<select name="time" id="time" class="form-control form-control-border "><option>%s</select>', implode( '<option>', $slots ) );?>



























</div>








    </form>
</div>

<script>
 









    $(function(){



        $('#update-form').submit(function(e){
            e.preventDefault();
            var _this = $(this)
            $('.pop-msg').remove()
            var el = $('<div>')
                el.addClass("pop-msg alert")
                el.hide()
            start_loader();
            $.ajax({
                url:_base_url_+"classes/Master.php?f=update_appointment_statuss",
                data: new FormData($(this)[0]),
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST',
                dataType: 'json',
                error:err=>{
         
                    end_loader();
                },
                success:function(resp){
                    if(resp.status == 'success'){
                    end_loader();
                        setTimeout(() => {
                            uni_modal("Success","reappointment_message.php?code="+resp.code)
                        

                        }, 750);
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























