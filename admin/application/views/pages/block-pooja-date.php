<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li><?=$puja_data->description_charge;?></li>
				</ul>
				<h4>Block Pooja Booking</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	<?php 
	    	$this->db->select('*');
        	$this->db->from('slnt_puja_time');
        	$this->db->where('pooja_time',$this->uri->segment(3));
         	$this->db->order_by('id','ASC');
        	$listtime = $this->db->get();
 
	?>
	<div class="contentpanel">	
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
						<div class="">
						<?php if($this->uri->segment(3)=='edit'){ ?>
							<form action="<?php echo base_url();?>Pages/BlockPoojaDate/<?php echo $this->uri->segment(3); ?>/edit/<?php echo $this->uri->segment(4); ?>/update" class="" role="form" id="form" method="post" accept-charset="utf-8">
						<?php } else { ?>	
							<form action="<?php echo base_url();?>Pages/BlockPoojaDate/<?php echo $this->uri->segment(3); ?>/insert" class="" role="form" id="form" method="post" accept-charset="utf-8">	
						<?php } ?>
								 
<?php if($this->session->flashdata('success')){ ?>
    <?php echo $this->session->flashdata('success'); ?> 
<?php } ?>
 			

<div class="form-group col-sm-6">
    <label class="control-label required" for="blockdate">Date Of Block Slot Of Pooja</label>
    <input type="date" class="form-control" name="blockdate" id="blockdate" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->blockdate;  } else {  echo set_value('blockdate'); }?>" autocomplete="off"/>
	<span name ='form_err'><?=form_error('blockdate');?></span>
</div>
 

<div class="form-group col-sm-12">
    <div class="row form-group">
		<div class="col-sm-12">
			<label>Time Slot : </label>
		</div>
		<div class="col-sm-12">
		    
		    <label for="checkAll"><input type="checkbox"  name="time" id="checkAll" value="check all"> All</label>
		   
		    <br />
		    
		    
<?php foreach ($listtime->result() as $rowsdata) { 
					$check ='';
					if ($rowsdata->id==$dataPujaTime) {
						$check ='checked';
					}
					echo '<label for=""><input type="checkbox" class="chkbx"  name="block_time[]" id="" value="'.$rowsdata->id.'" '.$check.'>&nbsp; '.$rowsdata->from_time.'-'.$rowsdata->to_time.'</label>&nbsp;&nbsp;&nbsp;';

				}
?>
		</div>
</div>
<script>
    $("#checkAll").change(function () {
        $("input:checkbox").prop('checked', $(this).prop("checked"));
    });
</script>

</div>
 		<div class="col-sm-12">
			<label>Reason for blocking dates</label>
		</div>
		<div class="col-sm-12">
			 <label class="col-sm-4">
			 	<input type="radio" name="leave_purpose" id="" value="duty at temple" checked=""> Duty at Temple
			 </label>
			 <label class="col-sm-4">
			 	<input type="radio" name="leave_purpose" id="" value="leave"> Leave
			 </label>
		</div>
  <?php if($listtime->num_rows()>0){ ?>

								<div class="form-group col-sm-12">
										<button type="submit" class="btn btn-sm btn-primary" name="submit_prod" id="submit_prod" value="add_product"><?php if($this->uri->segment(3)=='edit'){ echo 'Update';  } else echo 'Save'; ?></button>
								</div>
								
<?php } else { ?>
    <div class="form-group col-sm-12">
            <h2>Add time  slot  of this pooja</h2>
    </div>
<?php } ?>
								
							</form>
	 
                            <table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>#</th>
											<th  class="width_action">Date</th>											 
											<th class="width_action">Time</th>
											<th class="width_action">Action</th>
										</tr>
									</thead>
									<tbody> 
<?php $count=1; foreach($block_time_slot as $times){ 
    	    $this->db->select('*');
        	$this->db->from('slnt_puja_time');
        	$this->db->where('id',$times->block_time);
         	$this->db->order_by('id','ASC');
        	$listtimex = $this->db->get();
        	if($listtimex->num_rows()>0){ 
        	    $scv=$listtimex->row();
?>
<tr>
	<td><?=$count;?></td>
	<td  class="width_action"><?=date('d-M-Y',strtotime($times->blockdate));?></td>											 
	<td class="width_action"><?=$scv->from_time;?> - <?=$scv->to_time;?></td>
	<td class="width_action">
	    <a href="<?=base_url();?>Pages/BlockPoojaDate/17/delete/<?=$times->id;?>" class="btn btn-info">Delete</a>
	</td>
</tr>
<?php $count++; } } ?>
									</tbody>
								</table>
								
						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
	
</div>