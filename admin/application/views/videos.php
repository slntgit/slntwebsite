<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li><a href="<?php echo base_url();?>" style="color: gray !important;">Dashboard</a></li>
					<li> videos</li>
				</ul>
				<h4>videos</h4>
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
<form action="<?php echo base_url();?>pages/videos/update/<?php echo $this->uri->segment(4); ?>" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">

	<input type="hidden" name="lastimage" value="<?php echo $website_edit_image->image;?>">
<?php  } else { ?>
<form action="<?php echo base_url();?>pages/videos/add" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">

<?php } ?>





<div style="font-size: 11px !important; color: red;">


	<?php echo validation_errors();

echo $this->session->flashdata('success');


?></div>
							
<input type="hidden" name="image_category" class="form-control" value="1" id="image_category">


								<div class="form-group">
									<label for="title" class="col-sm-3 control-label"><small>Title </small></label>
									<div class="col-sm-9">
									   <input type="text" name="title" class="form-control" value="<?php if ($this->uri->segment(3)=='edit') { echo $website_edit_image->title; } ?>" id="title">
									</div>
								</div>

 
									   <input type="hidden" name="image" class="form-control" value="0000"  class="form-horizontal" id="image"/>
 
								 
								<div class="form-group">
									<label for="content" class="col-sm-3 control-label"><small>Video  Link </small></label>
									<div class="col-sm-9">
<input type="text" name="content" id="content" class="form-control" value="<?php if ($this->uri->segment(3)=='edit') { echo $website_edit_image->content; } ?>" id="company_logo"/>
									 
 
									</div>
								</div>





								<div class="form-group text-left">
									<div class="col-sm-offset-3 col-sm-7">
										<button class="btn btn-success" type="submit"><span class="fa fa-plus-circle"></span>&nbsp;Save</button>
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
                    
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Member ID (User Id): activate to sort column ascending" style="width: 171px;">Video</th>
                  		
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
                    

                    <td> 
<iframe width="200" height="80" src="https://www.youtube.com/embed/<?php echo $cimage->image; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </td>
                    <td><?php echo $cimage->title; ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="<?php echo base_url();?>pages/videos/edit/<?php echo $cimage->id; ?>" class="btn btn-info btn-xs">Edit</a>
                            <a href="<?php echo base_url();?>pages/videos/delete/<?php echo $cimage->id; ?>" class="btn btn-danger btn-xs">Delete</a>
                           
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
 