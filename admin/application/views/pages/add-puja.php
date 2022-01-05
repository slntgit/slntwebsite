<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="<?=base_url();?>"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>Manage Booking Type</li>
				</ul>
				<h4>
<?php if($this->uri->segment(3)=='edit'){ echo 'Edit'; } else { echo 'Add'; } ?>

			Pooja Type</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">	
	<?php if($this->uri->segment(3)=='edit'){ ?>
	
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body text-center">
						 <h2> <?=$all_packages->description_charge;?></h2>
						 
						 <?php if($all_packages->pooja_samgri==1 || $all_packages->havan_samagri==1){ ?>
						    <a href="<?=base_url();?>pages/Samagri/<?=$this->uri->segment(4);?>"><span class="btn btn-primary btn-lg"> Samagri</span></a>
						 <?php } ?>
						 <?php if($all_packages->catering_menu==1){ ?><a href="<?=base_url();?>pages/Catering/<?=$this->uri->segment(4);?>"><span class="btn btn-primary btn-lg"> Catering Menu</span></a><?php } ?>
						 <?php if($all_packages->blog_prasads==1){ ?><a href="<?=base_url();?>pages/BhogPrasad/<?=$this->uri->segment(4);?>"><span class="btn btn-info btn-lg"> Bhog / Prasad</span></a><?php } ?>

						  <a href="<?=base_url();?>pages/Pooja_Time/<?=$this->uri->segment(4);?>"><span class="btn btn-primary btn-lg">Manage Time</span></a>
 
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
 	<?php } ?>
	
	
	
	
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
						<div class="">
						<?php if($this->uri->segment(3)=='edit'){ ?>
<form action="<?php echo base_url();?>Pages/Add_Pooja/edit/<?php echo $this->uri->segment(4); ?>/update" class="" role="form" id="form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
						<?php } else { ?>	
<form action="<?php echo base_url();?>Pages/Add_Pooja/insert" class="" role="form" id="form" method="post" accept-charset="utf-8" enctype="multipart/form-data">	
						<?php } ?>
					<?php echo $this->session->flashdata('success');?>  
					<div class="form-group col-sm-12">
						<div class="col-sm-2">
							<label class="control-label required" for="description_charge">Pooja Name <abbr class="text-danger">*</abbr></label>
						</div>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="description_charge" id="description_charge" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->description_charge;  } else {  echo set_value('description_charge'); }?>" autocomplete="off" placeholder="Pooja Type Name"/>
							<span name ='form_err'><?=form_error('description_charge');?></span>
						</div>
					</div>


					<div class="form-group col-sm-12">
						<div class="col-sm-2">
							<label class="control-label required" for="puja_type">Pooja Type <abbr class="text-danger">*</abbr></label>
						</div>
						<div class="col-sm-10">
							<label>
<input <?php if($this->uri->segment(3)=='edit'){ if($all_packages->puja_type=='Puja'){ ?>  checked="checked" <?php }  } else { ?>  checked="checked" <?php }?> type="radio" name="puja_type" id="puja_type" value="Puja" autocomplete="off"/> Pooja &nbsp; &nbsp;
							</label>
							<label>
<input <?php if($this->uri->segment(3)=='edit'){ if($all_packages->puja_type=='Yajman'){ ?>  checked="checked" <?php } } ?> type="radio" name="puja_type" id="puja_type" value="Yajman" autocomplete="off"/> Yajman &nbsp; &nbsp;
							</label>
<!--							<label>-->
<!--<input <?php if($this->uri->segment(3)=='edit'){ if($all_packages->puja_type=='Refreshment'){ ?>  checked="checked" <?php }}?>  type="radio" name="puja_type" id="puja_type" value="Refreshment" autocomplete="off"/> Refreshment &nbsp; &nbsp;-->
<!--							</label>-->
<!--							<label>-->
<!-- <input <?php if($this->uri->segment(3)=='edit'){ if($all_packages->puja_type=='Tempal Charges'){ ?>  checked="checked" <?php }}?>  type="radio" name="puja_type" id="puja_type" value="Tempal Charges" autocomplete="off"/> Temple Charges &nbsp; &nbsp;-->
<!--							</label>-->
							<span name ='form_err'><?=form_error('puja_type');?></span>
						</div>
					</div>

					<div class="form-group col-sm-12">
						<div class="col-sm-2">
							<label class="control-label required" for="venue_price">Temple  Price (SGD) </label>
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
						<div class="col-sm-12">
						    <hr />
							<h3 class="control-label required" for="non_member_price">Promotion</h3>
						</div>
						<div class="col-sm-12">
						    <div class="row">
						        <div class="col-md-6">
						            <label>Date From </label>
						            <input value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->from_date;  } else {  echo set_value('from_date'); }?>" type="date" min='<?=date('Y-m-d');?>'  name="from_date" id="from_date" class="form-control" />
						        </div>
						         <div class="col-md-6">
						             <label>Date To </label>
						            <input value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->to_date;  } else {  echo set_value('to_date'); }?>" type="date" min='<?=date('Y-m-d');?>'  name="to_date" id="to_date" class="form-control" />
						        </div>
						        
						    </div>
						    
						    <div class="row">
						        <div class="col-md-6">
						            <label>Member Price (SGD)  </label>
						            <input value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->offer_mem_price;  } else {  echo set_value('offer_mem_price'); }?>" type="number"   name="offer_mem_price" id="offer_mem_price" class="form-control" placeholder="Amount" />
						        </div>
						         <div class="col-md-6">
						             <label>Non-Member Price (SGD)  </label>
						            <input value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->offer_non_mem_price;  } else {  echo set_value('offer_non_mem_price'); }?>" type="number"  name="offer_non_mem_price" id="offer_non_mem_price" class="form-control" placeholder="Amount" />
						        </div>
						        
						    </div>
						    <span name ='form_err' class="text-danger" id="non_member_price_error2"></span>
						    
						</div>
							<div class="col-sm-12">
						    <hr /> 
						</div>
						
						
					</div>			
					
					
					
					
					
					
					
					
					
					
					
					
					<div class="form-group col-sm-12">
						<div class="col-sm-2">
							<label class="control-label required" for="puja_image">Image</label>
						</div>
						<div class="col-sm-10">
							<input type="file" class="form-control" name="puja_image" id="puja_image"  placeholder="Non-Member Price SGD"/>
							<span name ='form_err' class="text-danger" id="non_member_price_error"><?=$profile_pic;?></span>
							<?php if($this->uri->segment(3)=='edit'){?>
                            <input type="hidden" value="<?php echo $all_packages->puja_image; ?>" name="old_puja_image" />
                            <?php } ?>
<h4>Note : </h4>	
<p>Recommanded Size : 800 px x 800 px</p>
<p>Recommanded File: jpg,png,</p>
<p>Recommanded File Size: Max 3 MB</p>
						</div>
					</div>

<?php if($this->uri->segment(3)=='edit'){?>
                         
<div class="form-group col-sm-12">
	<div class="col-sm-12">
			<img src="<?=base_url();?>../assets/temple/<?php echo $all_packages->puja_image; ?>" style="max-width:220px;" class="pull-right" />			    
    </div>
</div>						    
<?php } ?>
					
					
					

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
									<th>Havan Samagri</th>
									<th>
										<label>
<input  <?php if($this->uri->segment(3)=='edit'){ if($all_packages->havan_samagri==1){ ?>  checked="checked" <?php }} else { ?> checked="checked" <?php } ?> type="radio" name="havan_samagri" id="havan_samagri" value="1" autocomplete="off"/> Enable &nbsp; &nbsp;
										</label>
									
										<label>
<input  <?php if($this->uri->segment(3)=='edit'){ if($all_packages->havan_samagri==0){ ?>  checked="checked" <?php }} else { ?> <?php } ?>  type="radio" name="havan_samagri" id="kalash_sthapna2" value="0" autocomplete="off"/> Disable &nbsp; &nbsp;
										</label>
									</th>
								</tr>

								<tr>
									<th>Pooja Samagri</th>
									<th>
										<label>
<input <?php if($this->uri->segment(3)=='edit'){ if($all_packages->pooja_samgri==1){ ?>  checked="checked" <?php }} else { ?> checked="checked" <?php } ?>  type="radio" name="pooja_samgri" id="pooja_samgri" value="1" autocomplete="off"/> Enable &nbsp; &nbsp;
										</label>
									
										<label>
<input <?php if($this->uri->segment(3)=='edit'){ if($all_packages->pooja_samgri==0){ ?>  checked="checked" <?php }} else { ?> <?php } ?>  type="radio" name="pooja_samgri" id="gotra_sankalp2" value="0" autocomplete="off"/> Disable &nbsp; &nbsp;
										</label>
									</th>
								</tr>

<!--								<tr>-->
<!--									<th>Preeti Bhoj</th>-->
<!--									<th>-->
<!--										<label>-->
<!-- <input <?php if($this->uri->segment(3)=='edit'){ if($all_packages->preeti_bhoge==1){ ?>  checked="checked" <?php }} else { ?> checked="checked" <?php } ?>  type="radio" name="preeti_bhoge" id="preeti_bhoge" value="1" autocomplete="off"/> Enable &nbsp; &nbsp;-->
<!--										</label>-->
									
<!--										<label>-->
<!-- <input <?php if($this->uri->segment(3)=='edit'){ if($all_packages->preeti_bhoge==0){ ?>  checked="checked" <?php }} else { ?> <?php } ?>  type="radio" name="preeti_bhoge" id="preeti_bhoge2" value="0" autocomplete="off"/> Disable &nbsp; &nbsp;-->
<!--										</label>-->
<!--									</th>-->
<!--								</tr>-->

<!--								<tr>-->
<!--									<th>Light Meal</th>-->
<!--									<th>-->
<!--										<label>-->
<!--<input  <?php if($this->uri->segment(3)=='edit'){ if($all_packages->light_meal==1){ ?>  checked="checked" <?php }} else { ?> checked="checked" <?php } ?>  type="radio" name="light_meal" id="light_meal" value="1" autocomplete="off"/> Enable &nbsp; &nbsp;-->
<!--										</label>-->
									
<!--										<label>-->
<!--<input  <?php if($this->uri->segment(3)=='edit'){ if($all_packages->light_meal==0){ ?>  checked="checked" <?php }} else { ?> <?php } ?>  type="radio" name="light_meal" id="light_meal2" value="0" autocomplete="off"/> Disable &nbsp; &nbsp;-->
<!--										</label>-->
<!--									</th>-->
<!--								</tr>-->

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
									<th>Bhog / Prasad</th>
									<th>
										<label>
<input  <?php if($this->uri->segment(3)=='edit'){ if($all_packages->blog_prasads==1){ ?>  checked="checked" <?php }} else { ?> checked="checked" <?php } ?> type="radio" name="blog_prasads" id="blog_prasads" value="1" autocomplete="off"/> Enable &nbsp; &nbsp;
										</label>
									
										<label>
<input  <?php if($this->uri->segment(3)=='edit'){ if($all_packages->blog_prasads==0){ ?>  checked="checked" <?php }} else { ?> <?php } ?> type="radio" name="blog_prasads" id="blog_prasads2" value="0" autocomplete="off"/> Disable &nbsp; &nbsp;
										</label>
									</th>
								</tr>
								
								
								
								
								
							</tbody>
						</table>
					</div>
<input type="hidden" name="yajmans" id="yajmans" value="0" /> 
<input type="hidden" name="refreshment" id="refreshment" value="0"/>
<input type="hidden" name="temple_charges" id="temple_charges" value="0"/>
<div class="form-group col-sm-12">
	<div class="col-sm-12">
	    	<label class="control-label required">Pooja Description</label>
		<textarea class="form-control ckeditor" id="editor1" name="description"><?php if($this->uri->segment(3)=='edit'){ echo $all_packages->description; } else { echo set_value('description');} ?></textarea>			    
    </div>
</div>						    
 
					 



						
  


							<div class="form-group col-sm-12">
								<button type="submit" class="btn btn-sm btn-primary" name="submit_prod" id="submit_prod" value="add_product"><?php if($this->uri->segment(3)=='edit'){ echo 'Update';  } else echo 'Submit'; ?></button>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
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
            
            
            
             $("input#offer_mem_price").focusout(function() {  
                var member_price = parseFloat($('#offer_mem_price').val());
                var non_member_price = parseFloat($('#offer_non_mem_price').val());
                if(member_price>non_member_price){
                   $('#offer_non_mem_price').html('<span class="text-danger">Non membership amount must be greater than or equal to membership amount</span>'); 
                   $('#offer_non_mem_price').val('');
                } else {
                    $('#offer_non_mem_price').html('');
                }
            }) .trigger("focusout"); 
            
            
              $("input#offer_non_mem_price").focusout(function() {  
                var member_price = parseFloat($('#offer_mem_price').val());
                var non_member_price = parseFloat($('#offer_non_mem_price').val());
                if(member_price>non_member_price){
                   $('#non_member_price_error2').html('Non membership amount must be greater than or equal to membership amount'); 
                   $('#offer_non_mem_price').val('');
                } else {
                    $('#offer_non_mem_price').html('');
                }
            }) .trigger("focusout"); 
            
            
            
            
            
        });  
  
// $(document).ready(function(){
//     $("#description_charge").keypress(function(event){
//         var inputValue = event.charCode;
//         if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)){
//             event.preventDefault();
//         }
//     });
// });
    </script>  
</div>