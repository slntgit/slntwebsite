<style type="text/css">
	.btn-danger{
		background: red !important;
	}
</style>
<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
		 
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="<?=base_url();?>"><i class="glyphicon glyphicon-home"></i></a></li>
					<li><?=$puja_data->description_charge;?></li>
				</ul>
				<h4> Manage Pooja Samagri</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
		<div class="contentpanel">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body text-center">
						 <h2> <?=$puja_data->description_charge;?></h2>
						  <a href="<?=base_url();?>pages/Samagri/<?php if($this->uri->segment(3)=='edit'){ $this->uri->segment(4);} else { echo $this->uri->segment(3);} ?>"><span class="btn btn-danger btn-lg"> Samagri</span></a>
						  <a href="<?=base_url();?>pages/BhogPrasad/<?php if($this->uri->segment(3)=='edit'){ $this->uri->segment(4);} else { echo $this->uri->segment(3);} ?>"><span class="btn btn-info btn-lg"> Bhog / Prasad</span></a>
						  
						  
						  <a href="<?=base_url();?>pages/Catering/<?php if($this->uri->segment(3)=='edit'){ $this->uri->segment(4);} else { echo $this->uri->segment(3);} ?>"><span class="btn btn-primary btn-lg"> Catering Menu</span></a>
						  
						  <a href="<?=base_url();?>pages/Pooja_Time/<?php if($this->uri->segment(3)=='edit'){ $this->uri->segment(4);} else { echo $this->uri->segment(3);} ?>"><span class="btn btn-primary btn-lg">Manage Time</span></a>
 
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
							<form action="<?php echo base_url();?>Pages/Samagri/<?=$this->uri->segment(3);?>/edit/<?php echo $this->uri->segment(5); ?>/update" class="" role="form" id="form" method="post" accept-charset="utf-8">
						<?php } else { ?>	
							<form action="<?php echo base_url();?>Pages/Samagri/<?=$this->uri->segment(3);?>/insert" class="" role="form" id="form" method="post" accept-charset="utf-8">	
						<?php } ?>
					<?php echo $this->session->flashdata('success');?>  
					<div class="form-group col-sm-12">
						<div class="col-sm-4">
							<label class="control-label required" for="samagri_type">Samagri Type <abbr class="text-danger">*</abbr></label>
						</div>
						<div class="col-sm-8">
							
<select name="samagri_type" id="samagri_type" class="form-control">
	<option <?php if($this->uri->segment(4)=='edit'){ if($all_packages->samagri_type=='Puja Samagri'){ echo 'selected'; } }?> value="Puja Samagri">Puja Samagri</option>
	<option <?php if($this->uri->segment(4)=='edit'){ if($all_packages->samagri_type=='Havan Samagri'){ echo 'selected'; } }?> value="Havan Samagri">Havan Samagri</option>
</select>
							<span name ='form_err'><?=form_error('samagri_type');?></span>
						</div>
					</div>




 					<div class="form-group col-sm-12">
						<div class="col-sm-4">
							<label class="control-label required" for="samagri_title">Samagri Title <abbr class="text-danger">*</abbr></label>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="samagri_title" id="samagri_title" value="<?php if($this->uri->segment(4)=='edit'){ echo $all_packages->samagri_title;  } else {  echo set_value('samagri_title'); }?>" autocomplete="off" placeholder="Samagri Title"/>
							<span name ='form_err'><?=form_error('samagri_title');?></span>
						</div>
					</div>
					<div class="form-group col-sm-12">
						<div class="col-sm-4">
							<label class="control-label required" for="samagri_price">Price <abbr class="text-danger">*</abbr></label>
						</div>
						<div class="col-sm-8">
<input type="number" class="form-control" name="samagri_price" id="samagri_price" value="<?php if($this->uri->segment(4)=='edit'){ echo $all_packages->samagri_price;  } else {  echo set_value('samagri_price'); }?>" autocomplete="off" placeholder="Samagri Price"/>
							<span name ='form_err'><?=form_error('samagri_price');?></span>
						</div>
					</div>



	<div class="form-group col-sm-12">
						<div class="col-sm-4">
							<label class="control-label required" for="measurement">Quantity<abbr class="text-danger">*</abbr></label>
						</div>
						<div class="col-sm-8">
<input type="number" class="form-control" name="measurement" id="measurement" value="<?php if($this->uri->segment(4)=='edit'){ echo $all_packages->measurement;  } else {  echo set_value('measurement'); }?>" autocomplete="off" placeholder="Enter Quantity"/>
							<span name ='form_err'><?=form_error('measurement');?></span>
						</div>
					</div>



				    <div class="form-group col-sm-12">
						<div class="col-sm-4">
							<label class="control-label required" for="unit_of_measurement">Unit of Measurement <abbr class="text-danger">*</abbr></label>
						</div>
						<div class="col-sm-8">
                            <select class="form-control" name="unit_of_measurement" id="unit_of_measurement">
<option value="Kg" <?php if($this->uri->segment(4)=='edit'){ if($all_packages->unit_of_measurement=='Kg'){ echo 'selected'; } } else {  if(set_value('unit_of_measurement')=='Kg'){ echo 'selected'; }  }?>>Kg</option>
<option value="Gram" <?php if($this->uri->segment(4)=='edit'){ if($all_packages->unit_of_measurement=='Gram'){ echo 'selected'; } } else {  if(set_value('unit_of_measurement')=='Gram'){ echo 'selected'; }  }?>>Gram</option>
                            </select>
 							<span name ='form_err'><?=form_error('unit_of_measurement');?></span>
						</div>
					</div>
					
					
					
					<div class="form-group col-sm-12">
						 <button type="submit" class="btn btn-sm btn-primary" name="submit_prod" id="submit_prod" value="add_product"><?php if($this->uri->segment(4)=='edit'){ echo 'Update';  } else echo 'Save'; ?></button>
							</div>
					</form>





					 <table class="table table-bordered table-striped" id="example">
									<thead>
										<tr>
											<th>#</th>
										 	<th  class="width_action">Samagri Type</th>
										 	<th  class="width_action">Samagri Title</th>
											<th  class="width_action">Samagri price </th>
											<th  class="width_action">Measurement </th>
											<th  class="width_action">Unit of Measurement </th>
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
											<td><?php echo $myresult->samagri_type; ?></td>
											<td><?php echo $myresult->samagri_title; ?></td>
											<td><?php echo $myresult->samagri_price; ?></td>
											<td><?php echo $myresult->measurement; ?></td>
											<td><?php echo $myresult->unit_of_measurement; ?></td>
										 
<td>                                                                            
	<a href="<?php echo base_url();?>Pages/Samagri/<?=$this->uri->segment(3);?>/edit/<?php echo $myresult->id; ?>" title="Edit" class="btn-link btn_size has-tooltip text-info" data-placement="top" data-original-title="Edit" onclick="if (confirm('Are you sure?')){return true;}else{event.stopPropagation(); event.preventDefault();};"><i class="fa fa-edit"></i></a>
	
	<a href="<?php echo base_url();?>Pages/Samagri/<?=$this->uri->segment(3);?>/delete/<?php echo $myresult->id; ?>" title="inactive" class="btn-link btn_size has-tooltip text-info" data-placement="top" data-original-title="Edit" onclick="if (confirm('Are you sure?')){return true;}else{event.stopPropagation(); event.preventDefault();};"><i class="fa fa-trash"></i></a>
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
	<script>
	    $(document).ready(function(){
    $("#samagri_title").keypress(function(event){
        var inputValue = event.charCode;
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)){
            event.preventDefault();
        }
    });
});
	</script>
</div>