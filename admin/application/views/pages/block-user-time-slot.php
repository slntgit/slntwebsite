<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>Block Priest for Booking </li>
				</ul>
				<h4><?=$user_details->name_title;?> <?=$user_details->name;?> <?=$user_details->last_name;?></h4>
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
							<form action="<?php echo base_url();?>Pages/BlockUserTimeSlot/<?php echo $this->uri->segment(3); ?>/edit/<?php echo $this->uri->segment(4); ?>/update" class="" role="form" id="form" method="post" accept-charset="utf-8">
						<?php } else { ?>	
							<form action="<?php echo base_url();?>Pages/BlockUserTimeSlot/<?php echo $this->uri->segment(3); ?>/insert" class="" role="form" id="form" method="post" accept-charset="utf-8">	
						<?php } ?>
								 
<?php if($this->session->flashdata('success')){ ?>
    <?php echo $this->session->flashdata('success'); ?> 
<?php } ?>
 			


<div class="col-sm-4">
<div class="form-group">
	<label class="control-label required" for="block_date">Date</label>
	<input type="date" class="form-control" name="block_date" id="block_date" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->block_date;  } else { echo set_value('block_date'); }?>" autocomplete="off" />
	<span name='form_err'><?=form_error('block_date');?></span>
</div>
</div>

<!--  <div class="col-sm-4">-->
<!--<div class="form-group">-->
<!--	<label class="control-label required" for="fromtime">From Time</label>-->
<!--	<input type="text" class="form-control tpicker " name="fromtime" id="fromtime" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->fromtime;  } else { echo set_value('fromtime'); }?>" autocomplete="off" />-->
<!--	<span name='form_err'><?=form_error('fromtime');?></span>-->
<!--</div>-->
<!--</div>-->

<!--  <div class="col-sm-4">-->
<!--<div class="form-group">-->
<!--	<label class="control-label required" for="totime">To Time</label>-->
<!--	<input type="text" class="form-control tpicker" name="totime" id="totime" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->totime;  } else { echo set_value('totime'); }?>" autocomplete="off" />-->
<!--	<span name='form_err'><?=form_error('totime');?></span>-->
<!--</div>-->
<!--</div>-->

 
 		<div class="col-sm-12">
			<label>Purpose of Leave</label>
		</div>
		<div class="col-sm-12">
			 <label class="col-sm-4">
			 	<input type="radio" name="leave_purpose" id="" value="duty at temple" checked=""> Duty at Temple
			 </label>
			 <label class="col-sm-4">
			 	<input type="radio" name="leave_purpose" id="" value="leave"> Leave
			 </label>
		</div>
 
								<div class="form-group col-sm-12">
										<button type="submit" class="btn btn-sm btn-primary" name="submit_prod" id="submit_prod" value="add_product"><?php if($this->uri->segment(3)=='edit'){ echo 'Update';  } else echo 'Save'; ?></button>
								</div>
								
 
								
							</form>
	 <table id="example" class="table table-striped table-bordered " style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <!--<th>From Time</th>-->
                                <!--<th>To Time</th>-->
                                <th>Purpose of Leave</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                         
                <?php $counts=1; foreach($all_block_date->result() as $mproduct){ ?>        

                        <tr>
                            <td><?php echo $counts; ?></td>
                            <td><?php echo date('d-M-Y',strtotime($mproduct->block_date)); ?></td>
                            <!--<td><?php echo $mproduct->fromtime; ?></td>-->
                            <!--<td><?php echo $mproduct->totime; ?></td>-->
                            <td><?php echo $mproduct->leave_purpose; ?></td>
                            <td>
  <a href="<?php echo base_url();?>pages/BlockUserTimeSlot/<?php echo $this->uri->segment(3); ?>/delete/<?php echo $mproduct->id; ?>" class="btn btn-xs btn-danger" onclick="if (confirm('Are you sure?')){return true;}else{event.stopPropagation(); event.preventDefault();};">Delete</a> 

 


                            </td>
                        </tr>   
                            
                <?php $counts++; } ?>


                        </tbody>
                    </table>
								
						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
</div>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
 
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script>
    $(document).ready(function(){
    $('input.tpicker').timepicker({});
});
</script>