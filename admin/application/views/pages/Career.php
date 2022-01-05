<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					 
					<li>Career</li>
				</ul>
				<h4>Career</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">		
	<div class="row">
    <div class="col-sm-12">
        <table id="example" class="table table-striped table-bordered dataTable no-footer" style="width:100%" role="grid" aria-describedby="example_info">
            <thead>
                <tr role="row">
                    <th class="sorting_asc">#</th>
                    <th class="sorting">Name</th>
                    <th class="sorting">Email</th>
                    <th class="sorting">Mobile</th>
                    <th class="sorting">DOB</th>
                   
                    <th class="sorting">Address</th>
                   
                    <th class="sorting">Action</th>
                </tr>
            </thead>
            <tbody>

                

<?php
	$count=1;
foreach($website_image as $cimage){


?>

                <tr role="row" class="odd">
                    <td class="sorting_1"><?php echo $count;?></td>
                    
                    <td><?php echo $cimage->first_name; ?> <?php echo $cimage->last_name; ?></td>
                    <td><?php echo $cimage->email; ?></td>
                    <td>+65 <?php echo $cimage->contact_no; ?></td>
                    <td><?php echo date('d-M-Y',strtotime($cimage->date_of_birth)); ?></td>
              
                    <td>
                    	<p><strong>Add. : </strong> <?php echo $cimage->full_address; ?></p>
                    	<p><strong>City : </strong> <?php echo $cimage->city; ?></p>
                    	<p><strong>State : </strong> <?php echo $cimage->state; ?></p>
                    	<p><strong>Country : </strong> <?php echo $cimage->country; ?></p>
                    	<p><strong>Postal Code : </strong> <?php echo $cimage->postal_code; ?></p>

                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="<?php echo base_url();?>pages/Career/delete/<?php echo $cimage->id; ?>" class="btn btn-danger btn-xs" onclick="if (confirm('Are you sure?')){return true;}else{event.stopPropagation(); event.preventDefault();};">Delete</a>

                            <a href="<?=base_url();?>../assets/career/<?php echo $cimage->resume; ?>" class="btn btn-danger btn-xs" target="_blank">View Resume</a>


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
 