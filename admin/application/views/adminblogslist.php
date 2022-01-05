 <div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li><a href="">Dashboard</a></li>
					<li>Manage Blogs</li>
				</ul>
				<h4>Manage Blogs</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">		
		<div class="row">
			<div class="col-sm-12 col-md-12 ">
				<a href="<?= base_url();?>pages/adminblogs/" class="btn btn-info btn-xs pull-right">Add Blog</a>
				<br />
				<br />
			</div>



	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
      <div class="table-responsive">
  
					<table id="example" class="table table-striped table-bordered " style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Image</th>
                                                        <th>title</th>
                                                        <th>Date</th>
                                                        <th>Post  By</th>
														<th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $count=1; foreach($result->result() as $user) {?>
                                                    <tr>
                                                        <td><?php echo $count;?></td>
                                                        <td><img src="<?= base_url();?>../assets/blogs/<?php echo $user->image; ?>" style="width: 100px;"></td>
                                                        <td><?php echo $user->title; ?></td>
                                                        <td><?php echo $user->postdate; ?></td>
                                                        <td><?php echo $user->post_by; ?></td>
                                                       
 

                                        <td> 


<a  onclick='javascript:confirmationDelete($(this));return false;'  href="<?php echo base_url();?>Pages/adminblogslist/delete/<?php echo $user->bid; ?>" class="btn btn-link ml-auto"><i class="fa fa-trash-o" aria-hidden="true"></i></a>

<a href="<?php echo base_url();?>Pages/adminblogs/edit/<?php echo $user->bid; ?>" class="btn btn-link ml-auto">
<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
</a>




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