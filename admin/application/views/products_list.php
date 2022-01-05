<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="<?php echo base_url();?>"><i class="glyphicon glyphicon-home"></i></a></li>
					<li><a href="<?php echo base_url();?>" style="color: #666 !important;">Dashboard</a></li>
					<li>List Of Events</li>
				</ul>
				<h4>List Of Events</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
 
   <div class="row">
   	<div style="font-size: 11px !important; color: red; text-align: center">


	<?php echo validation_errors();

echo $this->session->flashdata('success');


?></div>
    <div class="col-sm-12">       
            <a href="<?php echo base_url();?>pages/Events/" class="btn btn-info btn-xs pull-right">Add New</a>        
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
								<th>Date</th>
								<th>Time</th>
								<th>Image</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						 
				<?php $counts=1; foreach($all_products as $mproduct){ ?>		

						<tr>
							<td><?php echo $counts; ?></td>
							<td><?php echo $mproduct->title; ?></td>
							<td><?php echo $mproduct->event_date; ?></td>
							<td><?php 

			$this->db->select('*');
            $this->db->from('event_time_table');
            $where2 = array('eventid' => $mproduct->id);
            $this->db->where($where2);
            $getcount = $this->db->get();
            //echo  $getcount->num_rows();
            foreach ($getcount->result() as $timeTableList) {
            		$this->db->select('*');
					$this->db->from('slnt_events_time');
					$where2 = array('id' => $timeTableList->timeid);
					$this->db->where($where2);
		        	$gettime = $this->db->get();
		        	if ($gettime->num_rows()>0) {
		        		$rcd=$gettime->row();
		        		echo '<span class="btn btn-info btn-xs btn-border">'.$rcd->from_time.' To '.$rcd->to_time.'</span>';
		        	}

            }
		?></td>
						 
							<td><img style="width: 100px;" src="<?php echo base_url();?>../assets/products/<?php echo $mproduct->product_image; ?>">
<a href="<?=base_url();?>pages/more_images/?field=<?php echo $mproduct->id; ?>" class="btn btn-xs btn-default" title="Add more images for <?php echo $mproduct->title; ?>">
	<i class="fa fa-plus-circle" aria-hidden="true"></i>
</a>
							</td>
 							<td>
<a href="<?php echo base_url();?>pages/Events/edit/<?php echo $mproduct->id; ?>"   class="btn btn-xs btn-default" onclick="if (confirm('Are you sure?')){return true;}else{event.stopPropagation(); event.preventDefault();};" >
									<i class="fa fa-pencil"></i> Edit</a>
									
									
<a href="<?php echo base_url();?>pages/Events_list/delete/<?php echo $mproduct->id; ?>" class="btn btn-xs btn-danger" onclick="if (confirm('Are you sure?')){return true;}else{event.stopPropagation(); event.preventDefault();};">Delete</a>

 


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
 