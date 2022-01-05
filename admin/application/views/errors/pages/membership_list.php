<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="<?php echo base_url();?>"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>Membership List</li>
				</ul>
				<h4>Membership List</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
 
   <div class="row">
   	<div style="font-size: 11px !important; color: red; text-align: center">


	<?php echo validation_errors();

echo $this->session->flashdata('success');


?></div>
    <div class="col-sm-12">       
            <a href="<?php echo base_url();?>pages/Membership/" class="btn btn-info btn-xs pull-right">Add New</a>        
    </div>
		</div><!-- media -->
	<div class="contentpanel">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">
				<div class="table-responsive">
					<table id="example" class="table table-striped table-bordered " style="width:100%">
						<thead>
							<tr>
								<th>#</th>
								<th>Title</th>
								<th>Days</th>
								<th>Amount</th>
								<th>Description</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						 
				<?php $counts=1; foreach($all_products as $mproduct){ ?>		

						<tr>
							<td><?php echo $counts; ?></td>
							<td><?php echo $mproduct->title; ?></td>
							<td><?php echo $mproduct->membership_days; ?></td>
							<td><?php echo $mproduct->membership_amount; ?></td>
							<td><?php echo $mproduct->description; ?></td>
							<td><?php if ($mproduct->status==1) {
								echo 'Active';
							} else { echo 'Inactive'; } ?></td>
						 
 							<td>
<a href="<?php echo base_url();?>pages/Membership/edit/<?php echo $mproduct->id; ?>"   class="btn btn-xs btn-default" onclick="if (confirm('Are you sure?')){return true;}else{event.stopPropagation(); event.preventDefault();};">
									<i class="fa fa-pencil"></i> Edit</a>
<a href="<?php echo base_url();?>pages/Membership_list/delete/<?php echo $mproduct->id; ?>" class="btn btn-xs btn-danger"  onclick="if (confirm('Are you sure?')){return true;}else{event.stopPropagation(); event.preventDefault();};">Delete</a>

 


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
 