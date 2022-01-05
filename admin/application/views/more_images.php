<?php /*if(isset($_GET['field'])){

	$_SESSION['field']['field']=$_GET['field'];



 ?>
<script type="text/javascript">
	window.location.href='<?php echo base_url();?>pages/more_images/';
</script>

<?php } */ ?>
<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="<?=base_url();?>"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>Add more image of event  </li>
				</ul>
				<h4>Add more image of event </h4>
				
				
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
<form action="<?php echo base_url();?>pages/more_images/edit/update/?field=<?=$_GET['field'];?>&editid=<?=$_GET['editid'];?>" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">

	<input type="hidden" name="lastimage" value="<?php echo $website_edit_image->image;?>">
<?php  } else { ?>
<form action="<?php echo base_url();?>pages/more_images/add?field=<?=$_GET['field'];?>" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">

<?php } ?>





<div style="font-size: 11px !important; color: red;">


	<?php echo validation_errors();

echo $this->session->flashdata('success');


?></div>
							

								<input type="hidden" name="image_category" value="<?php if(isset($_SESSION['field']['field'])){ echo $_SESSION['field']['field']; }?>">
								<div class="form-group">
									<label for="title" class="col-sm-3 control-label"><small>Title </small></label>
									<div class="col-sm-9">
									   <input type="text" name="title" class="form-control" value="<?php if ($this->uri->segment(3)=='edit') { echo $website_edit_image->title; } ?>" id="title">
									</div>
								</div>


								<div class="form-group">
									<label for="company_logo" class="col-sm-3 control-label"><small>Select Image</small></label>
									<div class="col-sm-9">
									   <input type="file" name="company_logo"  class="form-horizontal" id="company_logo"/>
									   	<div style="font-size: 11px !important; color: red;">
											<?php  echo $this->session->flashdata('image_error'); ?>
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
	<div class="row">
    <div class="col-sm-12">
        <table id="example" class="table table-striped table-bordered dataTable no-footer" style="width:100%" role="grid" aria-describedby="example_info">
            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 18px;">#</th>
                   <!--  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 137px;">Image For</th> -->
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Member ID (User Id): activate to sort column ascending" style="width: 171px;">Image</th>
                  		
                  		 <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Member ID (User Id): activate to sort column ascending" style="width: 171px;">Title</th>

                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 64px;">Action</th>
                </tr>
            </thead>
            <tbody>

                

<?php
	$count=1;
foreach($website_image as $cimage){


?>

                <tr role="row" class="odd">
                    <td class="sorting_1"><?php echo $count;?></td>
                    <td><img src="<?php echo base_url();?>../assets/events/<?php echo $cimage->image; ?>" style="max-width: 100px;" /></td>
                    <td><?php echo $cimage->title; ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="<?php echo base_url();?>pages/more_images/edit?field=<?=$_GET['field'];?>&editid=<?php echo $cimage->id; ?>" class="btn btn-info btn-xs"  onclick="if (confirm('Are you sure?')){return true;}else{event.stopPropagation(); event.preventDefault();};">Edit</a>
 <a href="<?php echo base_url();?>pages/more_images/delete?field=<?=$_GET['field'];?>&editid=<?php echo $cimage->id; ?>" class="btn btn-danger btn-xs"  onclick="if (confirm('Are you sure?')){return true;}else{event.stopPropagation(); event.preventDefault();};">Delete</a>
                           
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
 