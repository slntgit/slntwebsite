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
					<li>Manage Ceremonies Bhog / Prasad</li>
				</ul>
				<h4>Ceremonies  Bhog / Prasad</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">		
			<div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body text-center">
						 <h2> <?=$puja_data->description_charge;?></h2>
						  <a href="<?=base_url();?>pages/Ceremonies_Samagri/<?=$this->uri->segment(3);?>"><span class="btn btn-info btn-lg"> Samagri</span></a>
						  <a href="<?=base_url();?>pages/Ceremonies_BhogPrasad/<?=$this->uri->segment(3);?>"><span class="btn btn-danger btn-lg"> Bhog / Prasad</span></a>
						 
 
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
							<form action="<?php echo base_url();?>Pages/Ceremonies_BhogPrasad/<?=$this->uri->segment(3);?>/edit/<?php echo $this->uri->segment(5); ?>/update" class="" role="form" id="form" method="post" accept-charset="utf-8">
						<?php } else { ?>	
							<form action="<?php echo base_url();?>Pages/Ceremonies_BhogPrasad/<?=$this->uri->segment(3);?>/insert" class="" role="form" id="form" method="post" accept-charset="utf-8">	
						<?php } ?>
					<?php echo $this->session->flashdata('success');?>  
				
 					<div class="form-group col-sm-12">
						<div class="col-sm-4">
							<label class="control-label required" for="bhog_prasad_title">Bhog / Prasad Title <abbr class="text-danger">*</abbr></label>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="bhog_prasad_title" id="bhog_prasad_title" value="<?php if($this->uri->segment(4)=='edit'){ echo $all_packages->bhog_prasad_title;  } else {  echo set_value('bhog_prasad_title'); }?>" autocomplete="off" placeholder="Bhog / Prasad Title"/>
							<span name ='form_err'><?=form_error('bhog_prasad_title');?></span>
						</div>
					</div>
					<div class="form-group col-sm-12">
						<div class="col-sm-4">
							<label class="control-label required" for="bhog_prasad_price">Price <abbr class="text-danger">*</abbr></label>
						</div>
						<div class="col-sm-8">
							<input type="number" class="form-control" name="bhog_prasad_price" id="bhog_prasad_price" value="<?php if($this->uri->segment(4)=='edit'){ echo $all_packages->bhog_prasad_price;  } else {  echo set_value('bhog_prasad_price'); }?>" autocomplete="off" placeholder="Bhog / Prasad Price"/>
							<span name ='form_err'><?=form_error('bhog_prasad_price');?></span>
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
										 	<th  class="width_action">Bhog / Prasad Title</th>
											<th  class="width_action">Bhog / Prasad price </th>
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
											<td><?php echo $myresult->bhog_prasad_title; ?></td>
											<td><?php echo $myresult->bhog_prasad_price; ?></td>
										 
<td>                                                                            
	<a href="<?php echo base_url();?>Pages/Ceremonies_BhogPrasad/<?=$this->uri->segment(3);?>/edit/<?php echo $myresult->id; ?>" title="Edit" class="btn-link btn_size has-tooltip text-info" data-placement="top" data-original-title="Edit" onclick="if (confirm('Are you sure?')){return true;}else{event.stopPropagation(); event.preventDefault();};"><i class="fa fa-edit"></i></a>
	
	<a href="<?php echo base_url();?>Pages/Ceremonies_BhogPrasad/<?=$this->uri->segment(3);?>/delete/<?php echo $myresult->id; ?>" title="inactive" class="btn-link btn_size has-tooltip text-info" data-placement="top" data-original-title="Edit" onclick="if (confirm('Are you sure?')){return true;}else{event.stopPropagation(); event.preventDefault();};"><i class="fa fa-trash"></i></a>
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
    $("#bhog_prasad_title").keypress(function(event){
        var inputValue = event.charCode;
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)){
            event.preventDefault();
        }
    });
});
	</script>
</div>