<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
		 
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="<?=base_url();?>"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>Pooja Time Slots</li>
				</ul>
				<h4> Pooja Time Slots</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	<style type="text/css">
	.btn-danger{
		background: red !important;
	}
</style>
	<div class="contentpanel">	
	
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body text-center">
						 <h2> <?=$puja_data->description_charge;?></h2>
						  <a href="<?=base_url();?>pages/Samagri/<?php if($this->uri->segment(3)=='edit'){ $this->uri->segment(4);} else { echo $this->uri->segment(3);} ?>"><span class="btn btn-primary btn-lg"> Samagri</span></a>
						  <a href="<?=base_url();?>pages/BhogPrasad/<?php if($this->uri->segment(3)=='edit'){ $this->uri->segment(4);} else { echo $this->uri->segment(3);} ?>"><span class="btn btn-info btn-lg"> Bhog / Prasad</span></a>
						  
						  
						  <a href="<?=base_url();?>pages/Catering/<?php if($this->uri->segment(3)=='edit'){ $this->uri->segment(4);} else { echo $this->uri->segment(3);} ?>"><span class="btn btn-primary btn-lg"> Catering Menu</span></a>
						  
						  <a href="<?=base_url();?>pages/Pooja_Time/<?php if($this->uri->segment(3)=='edit'){ $this->uri->segment(4);} else { echo $this->uri->segment(3);} ?>"><span class="btn btn-danger btn-lg">Manage Time</span></a>
 
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
 	
 	
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
						<div class="">
						<?php if($this->uri->segment(4)=='edit'){ ?>
							<form action="<?php echo base_url();?>Pages/Pooja_Time/<?=$this->uri->segment(3);?>/edit/<?php echo $this->uri->segment(5); ?>/update" class="" role="form" id="form" method="post" accept-charset="utf-8">
						<?php } else { ?>	
							<form action="<?php echo base_url();?>Pages/Pooja_Time/insert" class="" role="form" id="form" method="post" accept-charset="utf-8">	
						<?php } ?>
					<?php echo $this->session->flashdata('success');?>  

					<input type="hidden" name="pooja_time" value="<?=$this->uri->segment(3);?>"> 
					<div class="form-group col-sm-12">
						<div class="col-sm-3 col-xs-12">
							<label class="control-label required" for="pooja_date">Select Day Of Pooja <abbr class="text-danger">*</abbr></label>
				 
						    <select name="pooja_date" id="pooja_date" class="form-control">
						        <option value="">Select Days</option>
						        <option value="Sun">Sunday</option>
						        <option value="Mon">Monday</option>
						        <option value="Tue">Tuesday</option>
						        <option value="Wed">Wednesday</option>
						        <option value="Thu">Thursday</option>
						        <option value="Fri">Friday</option>
						        <option value="Sat">Saturday</option>
						    </select>
						  
						</div>
						
				 
						<div class="col-sm-3 col-xs-12">
							<label class="control-label required" for="from_time">From Time <abbr class="text-danger">*</abbr></label>
					 
							<input type="text" class="form-control tpicker" name="from_time" id="from_time" value="<?php if($this->uri->segment(4)=='edit'){ echo $all_packages->from_time;  } else {  echo set_value('from_time'); }?>" autocomplete="off" placeholder="From Time"/>
							<span name ='form_err'><?=form_error('from_time');?></span>
						</div>
					 
						<div class="col-sm-3 col-xs-12">
							<label class="control-label required" for="to_time">To Time <abbr class="text-danger">*</abbr></label>
							<input type="text" class="form-control tpicker" name="to_time" id="to_time" value="<?php if($this->uri->segment(4)=='edit'){ echo $all_packages->to_time;  } else {  echo set_value('to_time'); }?>" autocomplete="off" placeholder="To Time"/>
							<span name ='form_err'><?=form_error('to_time');?></span>
						</div>
					<div class="col-sm-3 col-xs-12">
                        <button type="submit" class="btn btn-sm btn-primary" name="submit_prod" id="submit_prod" value="add_product" style="margin-top: 30px;">Save</button>
					</div>
						
					</div>

				 
					</form>





					 <table class="table table-bordered table-striped" id="example">
									<thead>
										<tr>
											<th>#</th>
										 	<th  class="width_action">Pooja Date</th><th  class="width_action">From  Time</th>
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
											<td><?php echo $myresult->pooja_date; ?></td>	<td><?php echo $myresult->from_time; ?></td>
											<td><?php echo $myresult->to_time; ?></td>
										 
<td>                                                                            
	<a href="<?php echo base_url();?>Pages/Pooja_Time/<?=$this->uri->segment(3);?>/edit/<?php echo $myresult->id; ?>" title="Edit" class="btn-link btn_size has-tooltip text-info" data-placement="top" data-original-title="Edit"  onclick="if (confirm('Are you sure?')){return true;}else{event.stopPropagation(); event.preventDefault();};"><i class="fa fa-edit"></i></a>
	
	<a href="<?php echo base_url();?>Pages/Pooja_Time/<?=$this->uri->segment(3);?>/delete/<?php echo $myresult->id; ?>" title="inactive" class="btn-link btn_size has-tooltip text-info" data-placement="top" data-original-title="Edit"  onclick="if (confirm('Are you sure?')){return true;}else{event.stopPropagation(); event.preventDefault();};"><i class="fa fa-trash"></i></a>
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
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
 
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script>
    $(document).ready(function(){
    $('input.tpicker').timepicker({});
});
</script>