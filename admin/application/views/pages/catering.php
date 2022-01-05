<style type="text/css">
	.btn-danger{
		background: red !important;
	}
</style>

<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
		 
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="<?=base_url();?>"><i class="glyphicon glyphicon-home"></i></a></li>
					<li><?=$puja_data->description_charge;?></li>
				</ul>
				<h4>Manage Catering</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">	
	<div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body text-center">
						 <h2> <?=$puja_data->description_charge;?></h2>
  
  
<?php if($puja_data->pooja_samgri==1 or $puja_data->havan_samagri==1){ ?>						  <a href="<?=base_url();?>pages/Samagri/<?php if($this->uri->segment(3)=='edit'){ $this->uri->segment(4);} else { echo $this->uri->segment(3);} ?>"><span class="btn btn-info btn-lg"> Samagri</span></a>
<?php } ?>
<?php if($puja_data->catering_menu==1){ ?>						  <a href="<?=base_url();?>pages/Catering/<?php if($this->uri->segment(3)=='edit'){ $this->uri->segment(4);} else { echo $this->uri->segment(3);} ?>"><span class="btn btn-danger btn-lg"> Catering Menu</span></a>
<?php } ?>
<?php if($puja_data->blog_prasads==1){ ?>						  <a href="<?=base_url();?>pages/BhogPrasad/<?php if($this->uri->segment(3)=='edit'){ $this->uri->segment(4);} else { echo $this->uri->segment(3);} ?>"><span class="btn btn-info btn-lg"> Bhog / Prasad</span></a>
<?php } ?>
  
  
  
  
  
  <a href="<?=base_url();?>pages/Pooja_Time/<?php if($this->uri->segment(3)=='edit'){ $this->uri->segment(4);} else { echo $this->uri->segment(3);} ?>"><span class="btn btn-primary btn-lg">Manage Time</span></a>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  	
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
						<div class="">
						<?php if($this->uri->segment(4)=='edit'){ ?>
							<form action="<?php echo base_url();?>Pages/Catering/<?=$this->uri->segment(3)?>/edit/<?php echo $this->uri->segment(5); ?>/update" class="" role="form" id="form" method="post" accept-charset="utf-8">
						<?php } else { ?>	
							<form action="<?php echo base_url();?>Pages/Catering/<?=$this->uri->segment(3)?>/insert" class="" role="form" id="form" method="post" accept-charset="utf-8">	
						<?php } ?>
					<?php echo $this->session->flashdata('success');?>  
					
					<div class="form-group col-sm-12">
						<div class="col-sm-4">
							<label class="control-label required" for="catering_type">Catering Type <abbr class="text-danger">*</abbr></label>
						</div>
						<div class="col-sm-8">
							
<select name="catering_type" id="catering_type" class="form-control">
	<option <?php if($this->uri->segment(4)=='edit'){ if($all_packages->catering_type=='Lunch'){ echo 'selected'; } }?> value="Lunch">Lunch</option>
	<option <?php if($this->uri->segment(4)=='edit'){ if($all_packages->catering_type=='Dinner'){ echo 'selected'; } }?> value="Dinner">Dinner</option>
	<option <?php if($this->uri->segment(4)=='edit'){ if($all_packages->catering_type=='Refreshment'){ echo 'selected'; } }?> value="Refreshment">Refreshment</option>
</select>
							<span name ='form_err'><?=form_error('catering_type');?></span>
						</div>
					</div>


 					<div class="form-group col-sm-12">
						<div class="col-sm-4">
							<label class="control-label required" for="catering_title">Catering Title <abbr class="text-danger">*</abbr></label>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="catering_title" id="catering_title" value="<?php if($this->uri->segment(4)=='edit'){ echo $all_packages->catering_title;  } else {  echo set_value('catering_title'); }?>" autocomplete="off" placeholder="Catering Title"/>
							<span name ='form_err'><?=form_error('catering_title');?></span>
						</div>
					</div>	
					<div class="form-group col-sm-12">
						<div class="col-sm-4">
							<label class="control-label required" for="catering_price">Catering Price <abbr class="text-danger">*</abbr></label>
						</div>
						<div class="col-sm-8">
							<input type="number" class="form-control" name="catering_price" id="catering_price" value="<?php if($this->uri->segment(4)=='edit'){ echo $all_packages->catering_price;  } else {  echo set_value('catering_price'); }?>" autocomplete="off" placeholder="Catering Price"/>
							<span name ='form_err'><?=form_error('catering_price');?></span>
						</div>
					</div>

				 
					<div class="form-group col-sm-12">
						 <button type="submit" class="btn btn-sm btn-primary" name="submit_prod" id="submit_prod" value="add_product"><?php if($this->uri->segment(4)=='edit'){ echo 'Update';  } else echo 'Save'; ?></button>
							</div>
					</form>





					 <table class="table table-bordered table-striped" id="example">
									<thead>
										<tr>
											<th>#</th>
										 	<th  class="width_action">Catering Type</th>
										 	<th  class="width_action">Catering Title</th>
											<th  class="width_action">Catering price </th>
											<th class="width_action">Action</th>
										</tr>
									</thead>
									<tbody> 

									<?php 
										$count =1;
										foreach($puja_list as $myresult){
									?>	
																			
										<tr>
											<td><?php echo $count; ?></td>
											<td><?php echo $myresult->catering_type; ?></td>
											<td><?php echo $myresult->catering_title; ?></td>
											<td><?php echo $myresult->catering_price; ?></td>
										 
<td>                                                                            
	<a href="<?php echo base_url();?>Pages/Catering/<?=$this->uri->segment(3)?>/edit/<?php echo $myresult->id; ?>" title="Edit" class="btn-link btn_size has-tooltip text-info" data-placement="top" data-original-title="Edit" onclick="if (confirm('Are you sure?')){return true;}else{event.stopPropagation(); event.preventDefault();};"><i class="fa fa-edit"></i></a>
	
	<a href="<?php echo base_url();?>Pages/Catering/<?=$this->uri->segment(3)?>/delete/<?php echo $myresult->id; ?>" title="inactive" class="btn-link btn_size has-tooltip text-info" data-placement="top" data-original-title="Edit" onclick="if (confirm('Are you sure?')){return true;}else{event.stopPropagation(); event.preventDefault();};"><i class="fa fa-trash"></i></a>
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
	<script>
	    $(document).ready(function(){
    $("#catering_title").keypress(function(event){
        var inputValue = event.charCode;
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)){
            event.preventDefault();
        }
    });
});
	</script>
</div>