<?php $pages = array("1" => 12, "2" => 25, "3" => 22, "4" => 22, "5" => 25, "6" => 9, "7" => 55, "8" => 18, "9" => 16, "10" => 16, "11" => 24, "12" => 24, "13" => 17, "14" => 16, "15" => 25, "16" => 55, "17" => 55, "18" => 22, "19" => 18, "20" => 55, "21" => 18, "22" => 18, "23" => 24, "24" => 16, "25" => 12,); ?>
<style>
	.ck-editor__editable {
		min-height: 200px;
	}

</style>
<!-- Page content -->
<div class="page-content">
	<?php require_once(__DIR__ . "/left_nav.php"); ?>
	<!-- Main content -->
	<div class="content-wrapper">

		<!-- Page header -->
		<div class="page-header page-header-light">
			<div class="page-header-content header-elements-md-inline">
				<div class="page-title d-flex">
					<h4><span class="font-weight-semibold">Orders</span></h4>
					<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
				</div>
			</div>
		</div>
		<!-- /page header -->


		<!-- Content area -->
		<div class="content">
			<!-- Fieldset legend -->
			<div class="row">
				<div class="col-md-12">

					<!-- Basic legend -->
					<div class="card">
						<div class="card-body">
							<table class="table">
								<thead>
									<tr>
										<td>ID</td>
										<td>Customer</td>
										<td>Total Quantity</td>
										<td>Total Amount</td>
										<td>Status</td>
										<td>Action</td>
									</tr>
								</thead>
								<tbody>
									<?php //if (count($shipping_details) > 0) { ?>
									<?php foreach ($orders as $detail) { ?>
									<tr>
										<td><?php echo $detail->orderId ?></td>
										<td><?php echo $detail->name ?></td>
										<td><?php echo $detail->date ?></td>
										<td><?php echo $detail->totalAmount ?></td>
										<td><?php echo $detail->status ?></td>
										<td>
										<!-- data-target="#modal_form_horizontal" -->
											<button class="btn btn-default btn-sm" data-toggle="modal"
											data-target="#modal_form_horizontal"
												onClick="getOrderItems('<?php echo $detail->orderId;?>')">
												Details
											</button>
											<?php echo $detail->status=='Pending' ? '<button class="btn btn-danger btn-sm" onClick="disapproveOrder('.$detail->orderId.')">Disapprove</button> <button class="btn btn-success btn-sm" onClick="approveOrder('.$detail->orderId.')">Approve</button>' : ($detail->status=='Approved'? '<button class="btn btn-danger btn-sm" onClick="disapproveOrder('.$detail->orderId.')">Disapprove</button>': '<button class="btn btn-success btn-sm" onClick="approveOrder('.$detail->orderId.')">Approve</button>') ;?>
											<div id="modal_form_horizontal" class="modal fade" tabindex="-1"
												aria-hidden="true" style="display: none;">
												<div class="modal-dialog modal-lg">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title">Order Details</h5>
															<button type="button" class="close"
																data-dismiss="modal">×</button>
														</div>

														<form action="<?= base_url() ?>save_in_db.php"
															method="post" class=" form-horizontal">
															<div class="modal-body">
																<table class="table">
																	<thead>
																		<tr>
																			<td>ID</td>
																			<td>Product</td>
																			<td>Quantity</td>
																			<td>Unit Price</td>
																			<td>Total Amount</td>
																		</tr>
																	</thead>
																	<tbody id='orderItemsId'>
																		<?php //if (count($shipping_details) > 0) { ?>
																		<?php //foreach ($shipping_details as $detail) { ?>
																		<tr >
																			<td>1</td>
																			<td>Item</td>
																			<td>1</td>
																			<td>Rs.1000</td>
																			<td>Rs 1000</td>
																		</tr>
																		<?php //} ?>
																		<?php //} ?>
																	</tbody>
																</table>
															</div>

															<div class="modal-footer">
																<button type="button" class="btn btn-link"
																	data-dismiss="modal">Close</button>
																<!-- <button type="submit" name="submit_btn_add_courier" class="btn bg-primary">Submit form</button> -->
															</div>
														</form>
													</div>
												</div>
											</div>
										</td>
									</tr>
									<?php } ?>
									<?php //} ?>
								</tbody>
							</table>
						</div>
					</div>
					<!-- /basic legend -->

				</div>
			</div>
			<!-- /fieldset legend -->
		</div>
		<!-- /content area -->

	<script>
		function getOrderItems(orderId){
		$.ajax({
				type: "post",
				url: "<?php echo base_url('admin/orderItems'); ?>",
				data: {orderId:orderId},
				cache: false,
				success: function(res){
					if(res!=null){
							var html='';
							res.forEach(element => {
								html +='<tr><td>'+element.orderItemId+'</td><td>'+element.product_name+'</td><td>'+element.qty+'</td><td>'+element.price+'</td><td>'+(element.qty*element.price)+'</td></tr>';	
							})
							$('#orderItemsId').html(html)
					}
					else{
					//	$('#orderItemsId').html('');
					}	   
				}
			});
		}
		function approveOrder(id){
		$.ajax({
				type: "post",
				url: "<?php echo base_url('admin/updateOrderStatus'); ?>",
				data: {
					status:'Approved',
					id:id
					},
				cache: false,
				success: function(res){
					console.log(res);
					window.location.replace("<?php echo base_url('admin/orders'); ?>");	   
				}
			});
		}
		function disapproveOrder(id){
		$.ajax({
				type: "post",
				url: "<?php echo base_url('admin/updateOrderStatus'); ?>",
				data: {
					status:'Disapprove',
					id:id
					},
				cache: false,
				success: function(res){
					console.log(res);
					window.location.replace("<?php echo base_url('admin/orders'); ?>");	   
				}
			});
		}
	</script>
