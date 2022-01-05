<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>Manage Donation</li>
				</ul>
				<h4>All Donation</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">	
				<?=$this->session->flashdata('success');?>
				<form action="<?=base_url();?>pages/CreditDonation/">
					<div class="row">
						<div class="col-sm-4 col-xs-12">
							 <input type="date" name="fromdate" id="fromdate" class="form-control" value="<?php if(isset($_GET['fromdate'])){ echo $_GET['fromdate'];} ?>" required>
						</div>
						<div class="col-sm-4 col-xs-12">
							<input type="date" name="todate" id="todate" class="form-control" value="<?php if(isset($_GET['todate'])){ echo $_GET['todate'];}?>" required>
						</div>
						<div class="col-sm-4 col-xs-12">
							 <button type="submit" class="btn btn-info btn-lg">Search</button>
							 <a href="<?=base_url();?>pages/CreditDonation" type="submit" class="btn btn-info btn-lg">View  All</a>
						</div>
					</div>
					<br />
				</form>
			</div>
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
						<div class="">
								<?php echo $this->session->flashdata('success');?>  
						 <table class="table table-bordered table-striped" id="example">
									<thead>
										<tr>
											<th>#</th>
										 	<th  class="width_action">User ID</th>
											<th  class="width_action">Donation ID </th>
											<th  class="width_action">Amount(SGD)</th>
											<th  class="width_action">Donation Type </th>
											<th  class="width_action">Status</th>
											<th  class="width_action">Donation Date </th>
											<th  class="width_action">Donation Time</th>
											<!-- <th class="width_action">Action</th> -->
										</tr>
									</thead>
									<tbody> 
									<?php $count =1; foreach ($donation_list->result() as $list_donation) { ?>
										<tr>
											<td><?=$count;?></td>
										 	<td  class="width_action"><?=$list_donation->user_id;?></td>
											<td  class="width_action"><?=$list_donation->donation_id;?> </td>
											<td  class="width_action">$ <?=$list_donation->amount;?> SGD</td>
											<td  class="width_action"><?=$list_donation->donation_type;?></td>
											<td  class="width_action">
												<?php if($list_donation->status==1){ ?> 
													<span class="label label-success">Confirmed </span>
												<?php } else { ?> 
													<span class="label label-danger">UnConfirmed </span>
												<?php } ?></td>
											<td  class="width_action"><?=date('d-M-Y',strtotime($list_donation->membership_create_date));?></td>
											<td  class="width_action"><?=$list_donation->membership_create_time;?></td>
										</tr>
									<?php	$count++; } ?>							
									</tbody>
								</table>
								
						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
	
</div> 