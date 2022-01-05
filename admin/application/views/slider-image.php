<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li><a href="<?php echo base_url();?>" style="color: gray !important;">Dashboard</a></li>
					<li> Setting</li>
				</ul>
				<h4>Images Gallery</h4>
			
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
						<div class="">


<?php if ($this->uri->segment(3)=='edit') { ?>
<form action="<?php echo base_url();?>pages/imageGallery/update/<?php echo $this->uri->segment(4); ?>" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">

	<input type="hidden" name="lastimage" value="<?php echo $website_edit_image->image;?>">
<?php  } else { ?>
<form action="<?php echo base_url();?>pages/imageGallery/add" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">

<?php } ?>





<div class="text-success" style="font-size: 11px !important; text-align: center;">
 <?php
echo $this->session->flashdata('success');


?></div>
		<div class="row">
			<div class="col-sm-12">
				
				<a href="javascript:void();" data-toggle="modal" data-target="#memberDetails" class="btn btn-success btn-xs">Add New Category</a>
				
				<a href="<?=base_url();?>pages/imageGalleryCategory" class="btn btn-success btn-xs">Manage Category</a>

			</div>
		</div>					



								<div class="form-group">
									<label for="image_category" class="col-sm-3 control-label"><small>Category * </small>



									</label>
									<div class="col-sm-9">
									  
										<select class="form-control" name="image_category" id="image_category">


<?php foreach($categories as $category){?>
<option value="<?=$category->id;?>" <?php if ($this->uri->segment(3)=='edit') { if($website_edit_image->type==$category->id){ echo 'selected';} } ?>><?=$category->name;?></option>
<?php }?>




										</select>
									</div>
								</div>

								<div class="form-group">
									<label for="title" class="col-sm-3 control-label"><small>Title </small></label>
									<div class="col-sm-9">
									   <input type="text" name="title" class="form-control" value="<?php if ($this->uri->segment(3)=='edit') { echo $website_edit_image->title; } ?>" id="title">
									</div>
								</div>
<div class="form-group">
	 <label for="company_logo" class="col-sm-3 control-label">
 	<small></small></label>
<div class="col-sm-9">
	<label class="label label-info filetype1" for="filetype1">
		<input type="radio" name="uploadtype"  id="filetype1" value="video" <?php if($this->uri->segment(3)=='edit'){ if($website_edit_image->uploadtype=='video'){ echo 'checked=""'; }} ?>>
		Add YouTube Video
	</label>
&nbsp;
	<label class="label label-info filetype1" for="filetype">
		<input type="radio" name="uploadtype" id="filetype" value="image" <?php if($this->uri->segment(3)=='edit'){ if($website_edit_image->uploadtype=='image'){ echo 'checked=""'; }} else { ?> checked="" <?php } ?>>
		Add Image / PDf
	</label>
</div>

</div>
						
 <div class="form-group" id="images" <?php if($this->uri->segment(3)=='edit'){ if($website_edit_image->uploadtype=='image'){ } else { echo 'style="display:none;"';} }  ?>>
							 <label for="company_logo" class="col-sm-3 control-label">
							 	<small>Select Image or PDF (JPG/PNG/PDF)</small></label>
									<div class="col-sm-9">
									   <input type="file" name="company_logo"  class="form-horizontal" id="company_logo"/>
									   	<div style="font-size: 11px !important; color: red;">
											<?php  echo $this->session->flashdata('image_error');?>
										</div>
									</div>
								</div>



 <div class="form-group" id="videos" <?php if($this->uri->segment(3)=='edit'){ if($website_edit_image->uploadtype=='video'){ } else { echo 'style="display:none;"';} } else {?> style="display: none;" <?php } ?>>
 <label for="company_logo" class="col-sm-3 control-label">
 	<small>Enter YouTube Video</small></label>
									<div class="col-sm-9">
										<input type="text" name="youtubevideo"  class="form-control" id="youtubevideo"/>
									   
										</div>
									</div>




								</div>

								<div class="form-group text-left">
									<div class="col-sm-offset-3 col-sm-7">
											<button type="submit" class="btn btn-sm btn-primary" name="submit_prod" id="submit_prod" value="add_product"><?php if($this->uri->segment(3)=='edit'){ echo 'Update';  } else echo 'Save'; ?></button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->
		<script type="text/javascript">
			$('.filetype1').on('click',function(){
				var valuitem = $(this).find('input').val();
				 if (valuitem=='video') {
				 	$('#videos').css('display','block');
				 	$('#youtubevideo').attr('required','required');
				 	$('#images').css('display','none');
				 	$('#company_logo').removeAttr('required','required');
				 } else {
				 	$('#images').css('display','block');
				 	$('#company_logo').attr('required','required');
				 	$('#videos').css('display','none');
				 	$('#youtubevideo').removeAttr('required','required');
				 }
			});
		</script>  
	<div class="row">
    <div class="col-sm-12">



</div> <br /> <br />
			</div><!-- col-sm-12 --> <br />
		<div class="row">
    <div class="col-sm-12">
        <table id="example" class="table table-striped table-bordered dataTable no-footer" style="width:100%" role="grid" aria-describedby="example_info">
            <thead>
                <tr role="row">
                    <th>#</th>
                    <th>Image For</th>
                    <th>Image</th>
            		<th>Title</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
<?php
	$count=1;
foreach($website_image as $cimage){
?>
	<tr>
		<td class="sorting_1"><?php echo $count;?></td>
         <td>

<?php foreach($categories as $category){?>
	 <?php if($cimage->type==$category->id){ ?>
	 	<?php  echo $category->name;?>
	 	<!-- <a href="" class="label label-danger" title="Remove this category and remove all data of this category"><i class="fa fa-remove"></i></a> -->
	 <?php }  ?> 
<?php }?>
</td>
                    <td>
                    	<?php if($cimage->uploadtype=='video'){ ?>
                    		<img src="http://img.youtube.com/vi/<?php echo $cimage->image; ?>/hqdefault.jpg" style="max-width: 100px;" />
                    	<?php } else {
                    		if($cimage->extension=='pdf'){
                    	?>
                    <a href="<?php echo base_url();?>../assets/setting/<?php echo $cimage->image; ?>" target="_blank">	
                    	<img src="<?php echo base_url();?>../assets/pdf.png" style="max-width: 100px;" />
                    </a>
                    	<?php 
                    		} else {
                    	?>
                    		<img src="<?php echo base_url();?>../assets/setting/<?php echo $cimage->image; ?>" style="max-width: 100px;" />
                    	<?php } 
                    	}?>
                    </td>
                    <td><?php echo $cimage->title; ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="<?php echo base_url();?>pages/imageGallery/edit/<?php echo $cimage->id; ?>" class="btn btn-info btn-xs">Edit</a>
 <a href="<?php echo base_url();?>pages/imageGallery/delete/<?php echo $cimage->id; ?>" onclick="return confirm('Are you sure want to delete?')" class="btn btn-danger btn-xs">Delete</a>
                           
                        </div>
                    </td>
                </tr>

<?php $count++; } ?>



                
            </tbody>
        </table>
    </div>
</div>


	</div><!-- contentpanel -->
	
</div>
< 
<!-- End Associated Member Modal -->
 
 
<!-- Member Modal -->
<div id="memberDetails" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" >Manage Category</h4>
      </div>
      <div class="modal-body" id="model_body2">
        <form action="<?=base_url();?>pages/imageGallery/saveCategory" method="post">
        	<div class="row">
        		<div class="col-sm-12">
        			<label for="category">Category Title * </label>
        			<input type="text" name="category" id="category" class="form-control" required="">
        		</div>
        	</div>

        	<div class="row">
        		<div class="col-sm-12">
        			<br />
        			<br />
        			<button class="btn btn-success pull-right">Save</button>
        		</div>
        	</div>



        </form>
      </div>
       
    </div>

  </div>
</div>
<!-- End Member Modal -->