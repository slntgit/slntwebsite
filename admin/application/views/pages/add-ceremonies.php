<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="<?=base_url();?>"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>Manage Ceremonies</li>
				</ul>
				<h4>Add Ceremony Type</h4>
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
 <form action="<?php echo base_url();?>Pages/Add_Ceremonies/edit/<?php echo $this->uri->segment(4); ?>/update" class="" role="form" method="post" accept-charset="utf-8">
						<?php } else { ?>	
 <form action="<?php echo base_url();?>Pages/Add_Ceremonies/insert" class="" role="form" method="post" accept-charset="utf-8">	
						<?php } ?>
					<?php echo $this->session->flashdata('success');?>  
					<div class="form-group col-sm-12">
						<div class="col-sm-2">
							<label class="control-label required" for="description_charge">Ceremony Name <abbr class="text-danger">*</abbr></label>
						</div>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="description_charge" id="description_charge" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->description_charge;  } else {  echo set_value('description_charge'); }?>" autocomplete="off" placeholder="Ceremony Type Name"/>
							<span name ='form_err'><?=form_error('description_charge');?></span>
						</div>
					</div>
<input type="hidden"  name="puja_type" id="puja_type" value="Puja"/>

				 

					<div class="form-group col-sm-12">
						<div class="col-sm-2">
							<label class="control-label required" for="venue_price">Temple Price (SGD)<abbr class="text-danger">*</abbr></label>
						</div>
						<div class="col-sm-10">
							<input type="number" class="form-control" name="venue_price" id="venue_price" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->venue_price;  } else {  echo set_value('venue_price'); }?>" autocomplete="off" placeholder="Amount"/>
							<span name ='form_err'><?=form_error('venue_price');?></span>
						</div>
					</div>




					<div class="form-group col-sm-12">
						<div class="col-sm-2">
							<label class="control-label required" for="member_price">Member Price (SGD) <abbr class="text-danger">*</abbr></label>
						</div>
						<div class="col-sm-10">
							<input type="number" class="form-control" name="member_price" id="member_price" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->member_price;  } else {  echo set_value('member_price'); }?>" autocomplete="off" placeholder="Amount"/>
							<span name ='form_err'><?=form_error('member_price');?></span>
						</div>
					</div>
					<div class="form-group col-sm-12">
						<div class="col-sm-2">
							<label class="control-label required" for="non_member_price">Non-Member Price (SGD) <abbr class="text-danger">*</abbr></label>
						</div>
						<div class="col-sm-10">
							<input type="number" class="form-control" name="non_member_price" id="non_member_price" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->non_member_price;  } else {  echo set_value('non_member_price'); }?>" autocomplete="off" placeholder="Amount"/>
							<span name ='form_err' class="text-danger" id="non_member_price_error"><?=form_error('non_member_price');?></span>
							
							
							
						</div>
					</div>

					<div class="form-group col-sm-12">
						<table class="table table-responsive">
							<tbody>
								<tr>
									<th>Status</th>
									<th>
										<label>
											<input <?php if($this->uri->segment(3)=='edit'){ if($all_packages->status==1){ ?>  checked="checked" <?php }} else { ?> checked="checked" <?php } ?> type="radio" name="status" id="status" value="1" autocomplete="off"/> Active &nbsp; &nbsp;
										</label>
									
										<label>
											<input <?php if($this->uri->segment(3)=='edit'){ if($all_packages->status==0){ ?>  checked="checked" <?php }} else { ?>   <?php } ?>  type="radio" name="status" id="status2" value="0" autocomplete="off"/> Inactive &nbsp; &nbsp;
										</label>
									</th>
								</tr>

								<tr>
									<th>Kalash Sthapna</th>
									<th>
										<label>
<input  <?php if($this->uri->segment(3)=='edit'){ if($all_packages->kalash_sthapna==1){ ?>  checked="checked" <?php }} else { ?> checked="checked" <?php } ?> type="radio" name="kalash_sthapna" id="kalash_sthapna" value="1" autocomplete="off"/> Enable &nbsp; &nbsp;
										</label>
									
										<label>
<input  <?php if($this->uri->segment(3)=='edit'){ if($all_packages->kalash_sthapna==0){ ?>  checked="checked" <?php }} else { ?> <?php } ?>  type="radio" name="kalash_sthapna" id="kalash_sthapna2" value="0" autocomplete="off"/> Disable &nbsp; &nbsp;
										</label>
									</th>
								</tr>

								<tr>
									<th>Gotra Sankalp</th>
									<th>
										<label>
<input <?php if($this->uri->segment(3)=='edit'){ if($all_packages->gotra_sankalp==1){ ?>  checked="checked" <?php }} else { ?> checked="checked" <?php } ?>  type="radio" name="gotra_sankalp" id="gotra_sankalp" value="1" autocomplete="off"/> Enable &nbsp; &nbsp;
										</label>
									
										<label>
<input <?php if($this->uri->segment(3)=='edit'){ if($all_packages->gotra_sankalp==0){ ?>  checked="checked" <?php }} else { ?> <?php } ?>  type="radio" name="gotra_sankalp" id="gotra_sankalp2" value="0" autocomplete="off"/> Disable &nbsp; &nbsp;
										</label>
									</th>
								</tr>

								<tr>
									<th>Preeti Bhoj</th>
									<th>
										<label>
 <input <?php if($this->uri->segment(3)=='edit'){ if($all_packages->preeti_bhoge==1){ ?>  checked="checked" <?php }} else { ?> checked="checked" <?php } ?>  type="radio" name="preeti_bhoge" id="preeti_bhoge" value="1" autocomplete="off"/> Enable &nbsp; &nbsp;
										</label>
									
										<label>
 <input <?php if($this->uri->segment(3)=='edit'){ if($all_packages->preeti_bhoge==0){ ?>  checked="checked" <?php }} else { ?> <?php } ?>  type="radio" name="preeti_bhoge" id="preeti_bhoge2" value="0" autocomplete="off"/> Disable &nbsp; &nbsp;
										</label>
									</th>
								</tr>

								<tr>
									<th>Light Meal</th>
									<th>
										<label>
<input  <?php if($this->uri->segment(3)=='edit'){ if($all_packages->light_meal==1){ ?>  checked="checked" <?php }} else { ?> checked="checked" <?php } ?>  type="radio" name="light_meal" id="light_meal" value="1" autocomplete="off"/> Enable &nbsp; &nbsp;
										</label>
									
										<label>
<input  <?php if($this->uri->segment(3)=='edit'){ if($all_packages->light_meal==0){ ?>  checked="checked" <?php }} else { ?> <?php } ?>  type="radio" name="light_meal" id="light_meal2" value="0" autocomplete="off"/> Disable &nbsp; &nbsp;
										</label>
									</th>
								</tr>

								<tr>
									<th>Catering Menu</th>
									<th>
										<label>
<input  <?php if($this->uri->segment(3)=='edit'){ if($all_packages->catering_menu==1){ ?>  checked="checked" <?php }} else { ?> checked="checked" <?php } ?> type="radio" name="catering_menu" id="catering_menu" value="1" autocomplete="off"/> Enable &nbsp; &nbsp;
										</label>
									
										<label>
<input  <?php if($this->uri->segment(3)=='edit'){ if($all_packages->catering_menu==0){ ?>  checked="checked" <?php }} else { ?> <?php } ?> type="radio" name="catering_menu" id="catering_menu2" value="0" autocomplete="off"/> Disable &nbsp; &nbsp;
										</label>
									</th>
								</tr>

								<tr>
									<th>Yajman</th>
									<th>
										<label>
<input  <?php if($this->uri->segment(3)=='edit'){ if($all_packages->yajmans==1){ ?>  checked="checked" <?php }} else { ?> checked="checked" <?php } ?> type="radio" name="yajmans" id="yajmans" value="1" autocomplete="off"/> Enable &nbsp; &nbsp;
										</label>
									
										<label>
<input  <?php if($this->uri->segment(3)=='edit'){ if($all_packages->yajmans==0){ ?>  checked="checked" <?php }} else { ?> <?php } ?> type="radio" name="yajmans" id="yajmans2" value="0" autocomplete="off"/> Disable &nbsp; &nbsp;
										</label>
									</th>
								</tr>


								<tr>
									<th>Refreshment</th>
									<th>
										<label>
<input  <?php if($this->uri->segment(3)=='edit'){ if($all_packages->refreshment==1){ ?>  checked="checked" <?php }} else { ?> checked="checked" <?php } ?> type="radio" name="refreshment" id="refreshment" value="1" autocomplete="off"/> Enable &nbsp; &nbsp;
										</label>
									
										<label>
<input  <?php if($this->uri->segment(3)=='edit'){ if($all_packages->refreshment==0){ ?>  checked="checked" <?php }} else { ?> <?php } ?> type="radio" name="refreshment" id="refreshment2" value="0" autocomplete="off"/> Disable &nbsp; &nbsp;
										</label>
									</th>
								</tr>

								<tr>
									<th>Temple Charges</th>
									<th>
										<label>
 <input <?php if($this->uri->segment(3)=='edit'){ if($all_packages->temple_charges==1){ ?>  checked="checked" <?php }} else { ?> checked="checked" <?php } ?> type="radio" name="temple_charges" id="temple_charges" value="1" autocomplete="off"/> Enable &nbsp; &nbsp;
										</label>
									
										<label>
 <input <?php if($this->uri->segment(3)=='edit'){ if($all_packages->temple_charges==0){ ?>  checked="checked" <?php }} else { ?> <?php } ?> type="radio" name="temple_charges" id="temple_charges2" value="0" autocomplete="off"/> Disable &nbsp; &nbsp;
										</label>
									</th>
								</tr>

                                <tr>
									<th>Solomnization & Room Certificate Option</th>
									<th>
										<label>
 <input <?php if($this->uri->segment(3)=='edit'){ if($all_packages->solomnization==1){ ?>  checked="checked" <?php }} else { ?> checked="checked" <?php } ?> type="radio" name="solomnization" id="solomnization" value="1" autocomplete="off"/> Enable &nbsp; &nbsp;
										</label>
									
										<label>
 <input <?php if($this->uri->segment(3)=='edit'){ if($all_packages->solomnization==0){ ?>  checked="checked" <?php }} else { ?> <?php } ?> type="radio" name="solomnization" id="solomnization2" value="0" autocomplete="off"/> Disable &nbsp; &nbsp;
										</label>
									</th>
								</tr>





							</tbody>
						</table>
					</div>




					 



						
  


							<div class="form-group col-sm-12">
 <button type="submit" class="btn btn-sm btn-primary" name="submit_prod" id="submit_prod" value="add_product"><?php if($this->uri->segment(3)=='edit'){ echo 'Update';  } else echo 'Save'; ?></button>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
		<script>
	    $(document).ready(function(){
    $("#description_charge").keypress(function(event){
        var inputValue = event.charCode;
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)){
            event.preventDefault();
        }
    });
});
	</script>
		<script>  
	
/*
member_price
non_member_price*/	
        $(document).ready(function() {  
            $("input#member_price").focusout(function() {  
                var member_price = parseFloat($('#member_price').val());
                var non_member_price = parseFloat($('#non_member_price').val());
                if(member_price>non_member_price){
                   $('#non_member_price_error').html('<span class="text-danger">Non membership amount must be greater than or equal to membership amount</span>'); 
                   $('#non_member_price').val('');
                } else {
                    $('#non_member_price_error').html('');
                }
            }) .trigger("focusout"); 
            
            
              $("input#non_member_price").focusout(function() {  
                var member_price = parseFloat($('#member_price').val());
                var non_member_price = parseFloat($('#non_member_price').val());
                if(member_price>non_member_price){
                   $('#non_member_price_error').html('Non membership amount must be greater than or equal to membership amount'); 
                   $('#non_member_price').val('');
                } else {
                    $('#non_member_price_error').html('');
                }
            }) .trigger("focusout"); 
        });  
    </script>  
</div>