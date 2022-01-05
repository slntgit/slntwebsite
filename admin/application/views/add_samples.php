<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li><a href="" style="color: #fff;">Dashboard</a></li>
					<li>Manage  Samples</li>
				</ul>
				<h4>Manage  Samples</h4>
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
							<form action="<?php echo base_url();?>Pages/add_samples/edit/<?php echo $this->uri->segment(4); ?>/update" class="" role="form" id="form" method="post" accept-charset="utf-8">
						<?php } else { ?>	
							<form action="<?php echo base_url();?>Pages/add_samples/insert" class="" role="form" id="form" method="post" accept-charset="utf-8">	
						<?php } ?>
								 
<?php if($this->session->flashdata('success')){ ?>
<div class="alert alert-danger errorHandler no-display">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<?php echo validation_errors(); ?>
    <?php echo $this->session->flashdata('success'); ?> 
	</div> 
<?php } ?>
								
								
<?php if(validation_errors()){ ?>
<div class="alert alert-danger errorHandler no-display">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<?php echo validation_errors(); ?>
     
	</div> 
<?php } ?>


						

								

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
								 
								</div>

<div class="form-group col-sm-6">
								   <label class="control-label required" for="name">Title</label>
<input type="text" class="form-control" name="name" id="name" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->name;  } else {  echo set_value('name'); }?>" autocomplete="off"/>
									<span name ='form_err'></span>
								</div>



							 <div class="form-group col-sm-12">
								   <label class="control-label required" for="name">visible Text</label>

   <textarea name="visibl_text" class="ckeditor" id="editor1"><?php if($this->uri->segment(3)=='edit'){ echo $all_packages->visibl_text;  } else { echo set_value('visibl_text');}?></textarea>
									<span name ='form_err'></span>
								</div>


								<div class="form-group col-sm-12">
								   <label class="control-label required" for="hide_text">InVisible Text</label>
   <textarea name="hide_text" class="ckeditor" id="editor1"><?php if($this->uri->segment(3)=='edit'){ echo $all_packages->hide_text;  } else { echo set_value('hide_text');}?></textarea>
									<span name ='form_err'></span>
								</div>
								 


								<div class="form-group col-sm-12">
									<button type="submit" class="btn btn-sm btn-primary" name="submit_prod" id="submit_prod" value="add_product">Save</button>
								</div>
							</form>


						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
</div>