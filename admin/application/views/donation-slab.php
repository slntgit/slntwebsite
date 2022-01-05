<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li>
					    <a href="#">
					        <i class="glyphicon glyphicon-home"></i>
					   </a>
					</li>
					<li>Donation</li>
				</ul>
				<h4>Donation Slab</h4>
			</div>
		</div><!-- media -->
	</div>
<!-- pageheader -->
	
	<div class="contentpanel">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
						<div class="">
						<?php if($this->uri->segment(3)=='edit'){ ?>
							<form action="<?php echo base_url();?>Pages/DonationSlab/edit/<?php echo $this->uri->segment(4); ?>/update" class="" role="form" id="form" method="post" accept-charset="utf-8">
						<?php } else { ?>	
							<form action="<?php echo base_url();?>Pages/DonationSlab/insert" class="" role="form" id="form" method="post" accept-charset="utf-8">	
						<?php } ?>
								 
<?php if($this->session->flashdata('success')){ ?>
    <?php echo $this->session->flashdata('success'); ?> 
<?php } ?>
								
								
<?php if(validation_errors()){ ?>
<div class="alert alert-danger errorHandler no-display">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<?php echo validation_errors(); ?>
</div> 
<?php } ?>

<div class="form-group col-sm-6">
		<label class="control-label required" for="name">Category</label>
		
<select class="form-control" name="cat_it" id="cat_it" >
    <?php foreach($donation_category as $donocat){ ?>
<option value="<?=$donocat->id;?>" <?php if($this->uri->segment(3)=='edit'){ if($donocat->id==$all_packages->cat_it){ echo 'selected';}  }?>><?=$donocat->name;?></option>
    <?php }?>
</select>
</div>
 

						

								<div class="form-group col-sm-6">
								   <label class="control-label required" for="name">Amount in ($)</label>
<input type="text" class="form-control" name="name" id="name" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->name;  } else {  echo set_value('name'); }?>" autocomplete="off"/>
 
									<span name ='form_err'></span>
								</div>
 


							 
									<input type="hidden" name="status" id="name" value="1" autocomplete="off"/>
 
								 


								<div class="form-group col-sm-12">
										<button type="submit" class="btn btn-sm btn-primary" name="submit_prod" id="submit_prod" value="add_product"><?php if($this->uri->segment(3)=='edit'){ echo 'Update';  } else echo 'Save'; ?></button>
								</div>
							</form>




							<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>#</th>
										 
											<th  class="width_action">Amount in ($)</th>							 
											<th  class="width_action">Category</th>							 
											<th class="width_action">Action</th>
										</tr>
									</thead>
									<tbody> 

<?php 
									$count =1;
										foreach($all_category as $myresult){
									?>	
																			
										<tr>
											<td><?php echo $count; ?></td>
											<td>$ <?php echo $myresult->name; ?> SGD</td>
											<td>
											
											<?php 
                                                $this->db->select('*');
                                            	$this->db->from('tbl_category');
                                            	$this->db->where('id',$myresult->cat_it);
                                                $all_category = $this->db->get()->row();
											
											    echo @$all_category->name; ?> 
											
											</td>
										<td>                                                                            
<a href="<?php echo base_url();?>Pages/DonationSlab/edit/<?php echo $myresult->id; ?>" title="Edit" class="btn-link btn_size has-tooltip text-info" data-placement="top" data-original-title="Edit"  onclick="if (confirm('Are you sure?')){return true;}else{event.stopPropagation(); event.preventDefault();};"><i class="fa fa-edit"></i></a>
<a href="<?php echo base_url();?>Pages/DonationSlab/delete/<?php echo $myresult->id; ?>" title="inactive" class="btn-link btn_size has-tooltip text-info" data-placement="top" data-original-title="Edit"  onclick="if (confirm('Are you sure?')){return true;}else{event.stopPropagation(); event.preventDefault();};"><i class="fa fa-trash"></i></a>
												
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