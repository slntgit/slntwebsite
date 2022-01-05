<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="<?=base_url();?>"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>Manage Ceremonies</li>
				</ul>
				<h4> Ceremonies Time</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
						<div class="">
						<?php if($this->uri->segment(4)=='edit'){ ?>
							<form action="<?php echo base_url();?>Pages/Ceremonies_Time/<?=$this->uri->segment(3);?>/edit/<?php echo $this->uri->segment(5); ?>/update" class="" role="form" id="form" method="post" accept-charset="utf-8">
						<?php } else { ?>	
							<form action="<?php echo base_url();?>Pages/Ceremonies_Time/insert" class="" role="form" id="form" method="post" accept-charset="utf-8">	
						<?php } ?>
					<?php echo $this->session->flashdata('success');?>  

					<input type="hidden" name="pooja_time" value="<?=$this->uri->segment(3);?>"> 
 					<div class="form-group col-sm-12">
						<div class="col-sm-4">
							<label class="control-label required" for="from_time">From Time <abbr class="text-danger">*</abbr></label>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="from_time" id="from_time" value="<?php if($this->uri->segment(4)=='edit'){ echo $all_packages->from_time;  } else {  echo set_value('from_time'); }?>" autocomplete="off" placeholder="From Time"/>
							<span name ='form_err'><?=form_error('from_time');?></span>
						</div>
					</div>
					<div class="form-group col-sm-12">
						<div class="col-sm-4">
							<label class="control-label required" for="to_time">To Time <abbr class="text-danger">*</abbr></label>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="to_time" id="to_time" value="<?php if($this->uri->segment(4)=='edit'){ echo $all_packages->to_time;  } else {  echo set_value('to_time'); }?>" autocomplete="off" placeholder="To Time"/>
							<span name ='form_err'><?=form_error('to_time');?></span>
						</div>
					</div>

				 
					<div class="form-group col-sm-12">
						<button type="submit" class="btn btn-sm btn-primary" name="submit_prod" id="submit_prod" value="add_product">Save</button>
							</div>
					</form>





					 <table class="table table-bordered table-striped" id="example">
									<thead>
										<tr>
											<th>#</th>
										 	<th  class="width_action">From  Time</th>
											<th  class="width_action">To Time </th>
											<th class="width_action">Action</th>
										</tr>
									</thead>
									<tbody> 

									<?php 
										$count =1;
										foreach($puja_list as $myresult){
									?>	
																			
										<tr>
											<td><?php echo $count; ?></td>
											<td><?php echo $myresult->from_time; ?></td>
											<td><?php echo $myresult->to_time; ?></td>
										 
<td>                                                                            
	<a href="<?php echo base_url();?>Pages/Ceremonies_Time/<?=$this->uri->segment(3);?>/edit/<?php echo $myresult->id; ?>" title="Edit" class="btn-link btn_size has-tooltip text-info" data-placement="top" data-original-title="Edit" onclick="if (confirm('Are you sure?')){return true;}else{event.stopPropagation(); event.preventDefault();};"><i class="fa fa-edit"></i></a>
	
	<a href="<?php echo base_url();?>Pages/Ceremonies_Time/<?=$this->uri->segment(3);?>/delete/<?php echo $myresult->id; ?>" title="inactive" class="btn-link btn_size has-tooltip text-info" data-placement="top" data-original-title="Edit" onclick="if (confirm('Are you sure?')){return true;}else{event.stopPropagation(); event.preventDefault();};"><i class="fa fa-trash"></i></a>
</td>       

</tr>

<?php $count++; } ?>										
									</tbody>
								</table>
						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
	
</div>