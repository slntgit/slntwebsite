<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li><a href="<?php echo base_url();?>" style="color: gray !important;">Dashboard</a></li>
					<li> Manage Gallery</li>
				</ul>
				<h4>Manage Category</h4>
			
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
<form action="<?php echo base_url();?>pages/imageGalleryCategory/update/<?php echo $this->uri->segment(4); ?>" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
 
<?php  } else { ?>
<form action="<?php echo base_url();?>pages/imageGalleryCategory/add" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">

<?php } ?>





<div class="text-success" style="font-size: 11px !important; text-align: center;">
 <?php
echo $this->session->flashdata('success');


?></div>
	 

						<div class="form-group">
							<label for="title" class="col-sm-3 control-label"><small>Category Title </small></label>
									<div class="col-sm-9">
<input type="text" name="title" class="form-control" value="<?php if ($this->uri->segment(3)=='edit') { echo $website_edit_image->name; } ?>" id="title">

<?php echo form_error('title');?>
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
            		<th>Title</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
<?php
	$count=1;
  foreach($categories as $cimage){?>
	<tr>
		<td class="sorting_1"><?php echo $count;?></td>
       <td><?php echo $cimage->name; ?></td>
       <td>
       		<div class="btn-group">
			<a href="<?php echo base_url();?>pages/imageGalleryCategory/edit/<?php echo $cimage->id; ?>" onclick="if (confirm('Are you sure?')){return true;}else{event.stopPropagation(); event.preventDefault();};" class="btn btn-info btn-xs">Edit</a>
			<a href="<?php echo base_url();?>pages/imageGalleryCategory/delete/<?php echo $cimage->id; ?>" onclick="return confirm('Are you sure want to delete?')" onclick="if (confirm('Are you sure?')){return true;}else{event.stopPropagation(); event.preventDefault();};" class="btn btn-danger btn-xs">Delete</a>
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