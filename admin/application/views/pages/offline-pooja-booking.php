<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="<?php echo base_url();?>"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>Manage Bookings</li>
				</ul>
				<h4>Offline Pooja  Bookings</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
 
   <div class="row">
   	<div style="font-size: 11px !important; color: red; text-align: center">


	<?php echo validation_errors();

echo $this->session->flashdata('success');


?></div>
</div><!-- media -->
	<div class="contentpanel">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">
				<div class="table-responsive">
					<table id="example" class="table table-striped table-bordered " style="width:100%">
						<thead>
							<tr>
								<th>#</th>
								<th>Booking ID</th>
								<th>Booking Date</th>
								<th>Pooja Title</th>
								<th>Name</th>
								<th>Amount</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						 
				<?php $counts=1; foreach($pujabooking as $mproduct){ ?>		

						<tr>
							<td><?php echo $counts; ?></td>
							<td><?php echo $mproduct->booking_id; ?></td>
							<td><?php echo $mproduct->day; ?>, <?php echo $mproduct->d; ?>-<?php echo date('M',strtotime($mproduct->m)); ?>-<?php echo date('Y',strtotime($mproduct->y)); ?></td>
							<td><?php echo $mproduct->title; ?></td>
							<td><?php echo $mproduct->name_title; ?> <?php echo $mproduct->name; ?> <?php echo $mproduct->last_name; ?> </td>
							<td><?php echo $mproduct->amounttobepay; ?></td>
 							<td>
<a href="<?php echo base_url();?>pages/CreatPoojaBookingPrint/<?php echo $mproduct->id; ?>" class="btn btn-xs btn-default">
<i class="fa fa-print" aria-hidden="true"></i>  Print</a>
 


							</td>
						</tr>	
							
				<?php $counts++; } ?>


						</tbody>
					</table>
				</div>	
			
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
	
</div>
 