<style>
    .img-thumb-path{
        width:100px;
        height:80px;
        object-fit:scale-down;
        object-position:center center;
    }
</style>

<div class="card ">





<h3><br><center><img src="../uploads/logo1.jpg"  style="width:110px;height:110px;"><br>
<b>
HERITAGE CORDILLERA VETERINARY CLINIC<BR>MEDICINE LIST</BR>

</h3></b>
</center>
	<div class="card-header">
		<h3 class="card-title">List of Product</h3>
		<div class="card-tools">
			<a href="javascript:void(0)" id="create_new" class="btn btn-flat btn-sm btn-primary"><span class="fas fa-plus"></span>  Add New Product</a>
		</div>
	</div>


	<div class="card-body">
		<div class="container-fluid">
        <div class="container-fluid">
			<table class="table table-hover table-striped">
				<colgroup>
					<col width="5%">
					<col width="20%">
					<col width="25%">
					<col width="25%">
					<col width="10%">
					<col width="5%">
						<col width="15%">
					<col width="15%">
				</colgroup>
				<thead>
					<tr>
						<th>#</th>
						<th>Date Expiration</th>
						<th>Medicine Name</th>
						<th>Good For</th>
						<th>Price</th>
							<th>Stock</th>
							<th>Status</th>
							<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$i = 1;
						$categories = $conn->query("SELECT * FROM `category_list`");
						$cat_arr = array_column($categories->fetch_all(MYSQLI_ASSOC),'name','id');
						$qry = $conn->query("SELECT * from `inventory_list` where delete_flag = 0 order by `stock` asc ");
						while($row = $qry->fetch_assoc()):
							$for = '';
							foreach(explode(',',$row['category_ids']) as $v){
								if(isset($cat_arr[$v])){
									if(!empty($for)) $for .= ", ";
									$for.= $cat_arr[$v];
								}
							}
					?>
						<tr>
							<td class="text-center"><?php echo $i++; ?></td>
							<td class=""><?php echo date("M-d-Y",strtotime($row['expired'])) ?></td>
							<td><?php echo ucwords($row['prodname']) ?></td>
							<td class=""><?php echo $for ?></td>
							<td class="text-left"><?php echo number_format($row['price'],2) ?></td>
							<td class=""><?php echo $row['stock'] ?></td>

	<td class="text-center">
								<?php 
 $remaining=$row['stock'];

								if ($remaining<=20) {
										echo '<span class="rounded-pill badge badge-danger">.  Less 20 remaining .</span>';
								}elseif ($remaining<=50) {
									echo '<span class="rounded-pill badge badge-warning">.  Less 50 remaining .</span>';
								}elseif ($remaining<=100) {
									echo '<span class="rounded-pill badge badge-warning">.  Less 100 remaining .</span>';
								}


								else{

								echo '<span class="rounded-pill badge badge-success">.  HIGH  .</span>';		
								}
																?>



							</td>

<td class="text-center">
								<?php 
 $expiredate=date("M-d-Y",strtotime($row['expired']));
 $todays=date("M-d-Y");

								if ( $expiredate<$todays) {
										echo '<span class="rounded-pill badge badge-danger">.  Expired  .</span>';
								}else{

								echo '<span class="rounded-pill badge badge-warning">.  to Expired  .</span>';		
								}
																?>
							</td>




							<td align="center">
								 <button type="button" class="btn btn-flat btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
				                  		Action
				                    <span class="sr-only">Toggle Dropdown</span>
				                  </button>
				                  <div class="dropdown-menu" role="menu">



 <?php if($_settings->userdata('type') == 1): ?>
<a class="dropdown-item view_data" href="javascript:void(0)" data-id ="<?php echo $row['id'] ?>"><span class="fa fa-eye text-dark"></span> View</a>
				                    <div class="dropdown-divider"></div>
				                
    <?php endif; ?>

 <?php if($_settings->userdata('type') == 2): ?>
<a class="dropdown-item view_data" href="javascript:void(0)" data-id ="<?php echo $row['id'] ?>"><span class="fa fa-eye text-dark"></span> View</a>
				                    <div class="dropdown-divider"></div>


				                     <a class="dropdown-item addstock" href="javascript:void(0)" data-id ="<?php echo $row['id'] ?>"><span class="fa fa-plus text-success"></span> Add Stock</a>
				                     <a class="dropdown-item deduct" href="javascript:void(0)" data-id ="<?php echo $row['id'] ?>"><span class="fa fa-minus text-danger"></span> Deduct Stock</a>
				                     <div class="dropdown-divider"></div>
				                    <a class="dropdown-item edit_data" href="javascript:void(0)" data-id ="<?php echo $row['id'] ?>"><span class="fa fa-edit text-primary"></span> Edit</a>
				                    <div class="dropdown-divider"></div>
				                    <a class="dropdown-item delete_data" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>"><span class="fa fa-trash text-danger"></span> Delete</a>
    <?php endif; ?>



				                   
				                  </div>
							</td>
						</tr>
					<?php endwhile; ?>
				</tbody>
			</table>
		</div>
		</div>
	</div>
</div>









 <div class="row">

<div class="col-md-6">

<div class="card card-outline ">
    <div class="card-header">
        <h3 class="card-title">About to Expired</h3>
    </div>
    <div class="card-body">
        <div class="container-fluid">
    
            <table class="table table-hover table-striped table-bordered">
                <colgroup>
                    <col width="3%">
                    <col width="10%">
                       <col width="10%">
                     <col width="10%">
                  
                
                  
                   
                </colgroup>
                <thead>
                    <tr>
                  
	<th>#</th>
						<th>Date Expiration</th>
						<th>Medicine Name</th>
							<th>Status</th>
				

                    </tr>
                </thead>
                <tbody>
                   			<?php 
						$i = 1;
						 $todayss=date("Y-m-d");
						$categories = $conn->query("SELECT * FROM `category_list`");
						$cat_arr = array_column($categories->fetch_all(MYSQLI_ASSOC),'name','id');
						$qry = $conn->query("SELECT * from `inventory_list` where expired > '$todayss' order by expired asc");
						while($row = $qry->fetch_assoc()):
							$for = '';
							foreach(explode(',',$row['category_ids']) as $v){
								if(isset($cat_arr[$v])){
									if(!empty($for)) $for .= ", ";
									$for.= $cat_arr[$v];
								}}?>
                        <tr>
                            
	<td class="text-center"><?php echo $i++; ?></td>
							<td class=""><?php echo date("M-d-Y",strtotime($row['expired'])) ?></td>
							<td><?php echo ucwords($row['prodname']) ?></td>
					

	<td class="text-center">
								<?php 
 $expiredate=date("M-d-Y",strtotime($row['expired']));
 $todays=date("M-d-Y");

								if ( $expiredate<$todays) {
										echo '<span class="rounded-pill badge badge-danger">.  Expired  .</span>';
								}else{

								echo '<span class="rounded-pill badge badge-warning">.  to Expired  .</span>';		
								}
																?>
							</td>



                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        </div>
    </div>
  </div>


<div class="col-md-6">

<div class="card card-outline ">
    <div class="card-header">
        <h3 class="card-title">Expired</h3>
    </div>
    <div class="card-body">
        <div class="container-fluid">
    
            <table class="table table-hover table-striped table-bordered">
                <colgroup>
                    <col width="3%">
                    <col width="10%">
                       <col width="10%">
                     <col width="10%">
                  
                
                  
                   
                </colgroup>
                <thead>
                    <tr>
                  
	<th>#</th>
						<th>Date Expiration</th>
						<th>Medicine Name</th>
							<th>Status</th>
				

                    </tr>
                </thead>
                <tbody>
                   			<?php 
						$i = 1;
						 $todayss=date("Y-m-d");
						$categories = $conn->query("SELECT * FROM `category_list`");
						$cat_arr = array_column($categories->fetch_all(MYSQLI_ASSOC),'name','id');
						$qry = $conn->query("SELECT * from `inventory_list` where expired < '$todayss' order by expired desc");
						while($row = $qry->fetch_assoc()):
							$for = '';
							foreach(explode(',',$row['category_ids']) as $v){
								if(isset($cat_arr[$v])){
									if(!empty($for)) $for .= ", ";
									$for.= $cat_arr[$v];
								}}?>
                        <tr>
                            
	<td class="text-center"><?php echo $i++; ?></td>
							<td class=""><?php echo date("M-d-Y",strtotime($row['expired'])) ?></td>
							<td><?php echo ucwords($row['prodname']) ?></td>
					

	<td class="text-center">
								<?php 
 $expiredate=date("M-d-Y",strtotime($row['expired']));
 $todays=date("M-d-Y");

								if ( $expiredate<$todays) {
										echo '<span class="rounded-pill badge badge-danger">.  Expired  .</span>';
								}else{

								echo '<span class="rounded-pill badge badge-warning">.  to Expired  .</span>';		
								}
																?>
							</td>



                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        </div>
    </div>
  </div>


  </div>





































<button class="btn btn-dark "  onclick="window.print()">Print</button>
<script>
	$(document).ready(function(){
        $('#create_new').click(function(){
			uni_modal("Add New Product","inventory/manage_service.php",'mid-large')
		})


  $('.deduct').click(function(){
			uni_modal("deduct Stock","inventory/deduct.php?id="+$(this).attr('data-id'),'mid-large')
		})
        $('.addstock').click(function(){
			uni_modal("Add Stock","inventory/addstock.php?id="+$(this).attr('data-id'),'mid-large')
		})


        $('.edit_data').click(function(){
			uni_modal("Update Product Details","inventory/manage_service.php?id="+$(this).attr('data-id'),'mid-large')
		})
		$('.delete_data').click(function(){
			_conf("Are you sure to delete this Product?","delete_product",[$(this).attr('data-id')])
		})
		$('.view_data').click(function(){
			uni_modal("Product Details","inventory/view_service.php?id="+$(this).attr('data-id'),'mid-large')
		})
		$('.table td, .table th').addClass('py-1 px-2 align-middle')
		$('.table').dataTable({
            columnDefs: [
                { orderable: false, targets: 4 }
            ],
        });
	})
	function delete_product($id){
		start_loader();
		$.ajax({
			url:_base_url_+"classes/Master.php?f=delete_product",
			method:"POST",
			data:{id: $id},
			dataType:"json",
			error:err=>{
				console.log(err)
				alert_toast("An error occured.",'error');
				end_loader();
			},
			success:function(resp){
				if(typeof resp== 'object' && resp.status == 'success'){
					location.reload();
				}else{
					alert_toast("An error occured.",'error');
					end_loader();
				}
			}
		})
	}
</script>