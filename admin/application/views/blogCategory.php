<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li><a href="" style="color: #fff;">Dashboard</a></li>
					<li>Add Assignment Type</li>
				</ul>
				<h4>Add Assignment Type</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
						<div class="">
						<?php if($this->uri->segment(3)=='edit'){ ?>
							<form action="<?php echo base_url();?>Pages/blogCategory/edit/<?php echo $this->uri->segment(4); ?>/update" class="" role="form" id="form" method="post" accept-charset="utf-8">
						<?php } else { ?>	
							<form action="<?php echo base_url();?>Pages/blogCategory/insert" class="" role="form" id="form" method="post" accept-charset="utf-8">	
						<?php } ?>
								 
<?php if($this->session->flashdata('success')){ ?>
<div class="alert alert-danger errorHandler no-display"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><?php echo validation_errors(); ?>
    <?php echo $this->session->flashdata('success'); ?></div> <?php } ?>								
<?php if(validation_errors()){ ?>
<div class="alert alert-danger errorHandler no-display">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<?php echo validation_errors(); ?></div> <?php } ?>
<div class="form-group col-sm-6">
   <label class="control-label required" for="name">Title</label>
<input type="text" class="form-control" name="name" id="name" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->name;  } else {  echo set_value('name'); }?>" onKeyUp="cleanStringData(this.value)" autocomplete="off"/>

<input type="hidden" name="cat_it" id="cat_it" value="0">

									<span name ='form_err'></span>
								</div>
<div class="form-group col-sm-6">
   <label class="control-label required" for="cat_it">Url Index</label>
 	<input type="text" name="search_id" id="search_id" class="form-control" readonly="" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->search_id;  } else {  echo set_value('search_id'); }?>" onKeyUp="cleanStringData(this.value)">
 </div>
<!--
								<div class="form-group col-sm-6">
								   <label class="control-label required" for="cat_it">Parent Category</label>
									 <select name="cat_it" id="cat_it"  class="form-control">
									 		<option value="0">No Parent</option>
									<?php 
										foreach($all_category as $parentcategory){
										if ($parentcategory->cat_it==0) {
	
									?>
<option value="<?= $parentcategory->id;?>" <?php if($this->uri->segment(3)=='edit'){ if($parentcategory->id==$all_packages->cat_it){ echo 'selected';} }?>><?= $parentcategory->name;?></option>
									<?php 
											}
										} 
									?>
									 </select>
								 
								</div>-->



							 
									<input type="hidden" name="status" id="name" value="1" autocomplete="off"/>
 
								 


								<div class="form-group col-sm-12">
									<button type="submit" class="btn btn-sm btn-primary" name="submit_prod" id="submit_prod" value="add_product">Add Assignment Type</button>
								</div>
							</form>




							<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>#</th>
										 
											<th  class="width_action">Title</th>											 
									<!--<th  class="width_action">Parent Category</th>	-->										 
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
											<td><?php echo $myresult->name; ?></td>
											<!--<td>
												<?php if($myresult->cat_it==0){ 

													echo 'No Parent'; } else {
			$this->db->select('*');
			$this->db->from('tbl_category');
			$x = array('id' => $myresult->cat_it);
			$this->db->where($x);
        	$parent_dtaa= $this->db->get()->row();
        	echo $parent_dtaa->name;
													} 

													?> </td> -->
											 										
											 
											<td>                                                                            
<a href="<?php echo base_url();?>Pages/blogCategory/edit/<?php echo $myresult->id; ?>/update" title="Edit" class="btn-link btn_size has-tooltip text-info" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
<a href="<?php echo base_url();?>Pages/blogCategory/delete/<?php echo $myresult->id; ?>" title="inactive" class="btn-link btn_size has-tooltip text-info" data-placement="top" data-original-title="Edit"><i class="fa fa-trash"></i></a>
												
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