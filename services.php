<?php 
$cid = isset($_GET['cids']) ? $_GET['cids'] : 'all';
?>







<style>
  #myVideo {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    min-width: 100%;
    min-height: 100%;
  }

  .card {
    opacity: .9;
  }
</style>
<!-- <video autoplay muted loop id="myVideo">
     <source src="uploads/alrexvideo.mp4" type="video/mp4">
</video> -->
<div class="content py-5">
    <h3 class="">Our Services</h3>
<hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <h3>Categories</h3>
                <div class="list-group">
                    <div class="list-group-item list-group-item-action">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="category_all" value="all" <?= $cid =='all' ? "checked" :"" ?>>
                          <label for="category_all" class="custom-control-label">All</label>
                        </div>
                    </div>
                    <?php 
                    $cat_qry = $conn->query("SELECT * FROM `category_list` where delete_flag = 0");
                    while($row = $cat_qry->fetch_assoc()):
                    ?>
                    <div class="list-group-item list-group-item-action">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input category-item" type="checkbox" id="category_<?= $row['id'] ?>" value="<?= $row['id'] ?>" <?= $cid=='all' || in_array($row['id'],explode(',',$cid)) ? "checked" : "" ?>>
                            <label for="category_<?= $row['id'] ?>" class="custom-control-label"><?= $row['name'] ?></label>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="col-md-8">
            <div class="list-group" id="service-list">
            <?php 
                $categories = $conn->query("SELECT * FROM `category_list`");
                $cat_arr = array_column($categories->fetch_all(MYSQLI_ASSOC),'name','id');
                $cwhere = "";
                if($cid != 'all'){
                    $cwhere .= " and ";
                    $_cw = "";
                    foreach(explode(',',$cid) as $v){
                        if(!empty($_cw)) $_cw .= " or ";
                        $_cw .= "CONCAT('|',REPLACE(category_ids,',','|,|'),'|') LIKE '%|{$v}|%'";
                    }
                    $cwhere .= "({$_cw})";
                }
                $services = $conn->query("SELECT * FROM `service_list` where delete_flag = 0 {$cwhere}  order by `name` asc");
                while($row = $services->fetch_assoc()):
                    $for = '';
                    foreach(explode(',',$row['category_ids']) as $v){
                        if(isset($cat_arr[$v])){
                            if(!empty($for)) $for .= ", ";
                            $for.= $cat_arr[$v];
                        }
                    }
                    $for = empty($for) ? "N/A" : $for;
            ?>
                <div class="text-decoration-none list-group-item rounded-0 service-item">
                    <a class="d-flex w-100 text-dark align-items-center" href="#service_<?= $row['id'] ?>" data-toggle="collapse">
                        <div class="col-11">
                            <h3 class="mb-0"><b><?= ucwords($row['name']) ?></b></h3>
                            <small><em>(<?= $for ?>)</em></small>
                        </div>
                        <div class="col-1 text-right">
                            <i class="fa fa-plus collapse-icon"></i>
                        </div>
                    </a>
                    <div class="collapse" id="service_<?= $row['id'] ?>">
                        <hr>
                        <div class="row mx-1">
                            <!-- Left: Description + Requirements -->
                            <div class="col-md-7">
                                <?php if(!empty($row['description'])): ?>
                                <h6 class="text-muted text-uppercase mb-1">Description</h6>
                                <p class="mb-3"><?= html_entity_decode($row['description']) ?></p>
                                <?php endif; ?>
                                <?php if(!empty($row['requirements'])): ?>
                                <h6 class="text-muted text-uppercase mb-1">Requirements</h6>
                                <ul class="mb-0">
                                    <?php foreach(explode("\n", trim($row['requirements'])) as $req): ?>
                                    <?php if(!empty(trim($req))): ?>
                                    <li><?= htmlspecialchars(trim($req)) ?></li>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                                <?php if(!empty($row['duration_hours'])): ?>
                                <p class="mt-2 mb-0"><i class="fa fa-clock"></i> Duration: <strong><?= (int)$row['duration_hours'] ?> hour<?= $row['duration_hours'] != 1 ? 's' : '' ?></strong></p>
                                <?php endif; ?>
                                <?php endif; ?>
                            </div>
                            <!-- Right: Price breakdown -->
                            <div class="col-md-5">
                                <h6 class="text-muted text-uppercase mb-1">Fee Summary</h6>
                                <?php
                                $breakdown = !empty($row['price_breakdown']) ? json_decode($row['price_breakdown'], true) : null;
                                if(!empty($breakdown) && is_array($breakdown)):
                                ?>
                                <table class="table table-sm table-bordered mb-0">
                                    <thead class="thead-light">
                                        <tr><th>Item</th><th class="text-right">Amount</th></tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($breakdown as $item): ?>
                                        <tr>
                                            <td><?= htmlspecialchars($item['item'] ?? '') ?></td>
                                            <td class="text-right">&#8369; <?= number_format((float)($item['amount'] ?? 0), 2) ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr class="table-warning font-weight-bold">
                                            <td>TOTAL</td>
                                            <td class="text-right">&#8369; <?= number_format($row['fee'], 2) ?></td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <?php else: ?>
                                <p class="mb-0"><span class="fa fa-tags"></span> <strong>&#8369; <?= number_format($row['fee'], 2) ?></strong></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php ?>
        </div>
            </div>
        </div>
    </div>
</div>

<!-- How to Book Guide -->
<div class="content py-3">
    <div class="container-fluid">
        <div class="card card-outline card-primary rounded-0 shadow">
            <div class="card-header rounded-0">
                <h4 class="card-title"><i class="fa fa-book mr-2"></i>How to Book</h4>
            </div>
            <div class="card-body">
                <ol class="pl-3">
                    <li class="mb-2">Create an account or log in at the ALREX Driving School portal.</li>
                    <li class="mb-2">Go to <strong>Book Appointment</strong> and choose your desired driving course or service.</li>
                    <li class="mb-2">Select a preferred <strong>date and time slot</strong> from the available schedule.</li>
                    <li class="mb-2">Review your booking details and confirm your appointment.</li>
                    <li class="mb-2">Wait for an <strong>email or SMS confirmation</strong> from our staff.</li>
                    <li class="mb-0">Arrive at the school on your scheduled date with all required documents ready.</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- Citizens Charter -->
<div class="content py-3">
    <div class="container-fluid">
        <div class="card card-outline card-success rounded-0 shadow">
            <div class="card-header rounded-0">
                <h4 class="card-title"><i class="fa fa-shield-alt mr-2"></i>Citizens Charter</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="text-uppercase text-muted mb-2">Our Commitments</h6>
                        <ul>
                            <li>Provide quality driving education in a safe and professional environment.</li>
                            <li>Process booking requests promptly and fairly.</li>
                            <li>Maintain transparency in fees and service inclusions.</li>
                            <li>Employ certified and competent driving instructors.</li>
                            <li>Respond to client concerns within 24 hours on business days.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="text-uppercase text-muted mb-2">Client Rights</h6>
                        <ul>
                            <li>Receive clear information about course content, fees, and schedules.</li>
                            <li>Expect courteous and professional service from all staff.</li>
                            <li>Be informed of any changes to your appointment in a timely manner.</li>
                            <li>Request a re-schedule in cases of valid and documented reasons.</li>
                            <li>File a complaint or feedback through our official channels without fear of reprisal.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function _category_filter(){
        if($('#category_all').is(":checked") == true){
            location.href="./?page=services"
        }else{
            var cids = [];
            $('.category-item:checked').each(function(){
                cids.push($(this).val())
            })
            cids = encodeURI(cids.join(","))
            location.href="./?page=services&cids="+cids
        }
    }
    $(function(){
        $('#category_all').change(function(){
            if($(this).is(":checked") == true){
                $('.category-item').prop("checked",true)
                _category_filter()
            }else{
                $('.category-item').prop("checked",false)
            }
        })
        $('.category-item').change(function(){
            if($('.category-item:checked').length < $('.category-item').length){
                $('#category_all').prop("checked",false)
            }else{
                $('#category_all').prop("checked",true)
            }
            _category_filter()
        })
        $('.collapse').on('show.bs.collapse', function () {
            $(this).parent().siblings().find('.collapse').collapse('hide')
            $(this).parent().siblings().find('.collapse-icon').removeClass('fa-plus fa-minus')
            $(this).parent().siblings().find('.collapse-icon').addClass('fa-plus')
            $(this).parent().find('.collapse-icon').removeClass('fa-plus fa-minus')
            $(this).parent().find('.collapse-icon').addClass('fa-minus')
            console.log($(this).parent().offset().top - $(this).parent().height())
             $("html, body").animate({scrollTop:$(this).parent().offset().top},'fast')
        })
        $('.collapse').on('hidden.bs.collapse', function () {
            $(this).parent().find('.collapse-icon').removeClass('fa-plus fa-minus')
            $(this).parent().find('.collapse-icon').addClass('fa-plus')
        })

        $('#search').on("input",function(e){
            var _search = $(this).val().toLowerCase()
            $('#service-list .service-item').each(function(){
                var _txt = $(this).text().toLowerCase()
                if(_txt.includes(_search) === true){
                    $(this).toggle(true)
                }else{
                    $(this).toggle(false)
                }
                if($('#service-list .service-item:visible').length <= 0){
                    $("#no_result").show('slow')
                }else{
                    $("#no_result").hide('slow')
                }
            })
        })
    })
    
</script>