<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="<?=base_url();?>"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>Manage Yajman Type</li>
				</ul>
				<h4>Add Yajman Type</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">
	    <div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default text-right" style="padding:10px;">
				    <a href="<?=base_url();?>pages/View_Event_Yajman" class="btn btn-info">View All Yajman</a>
				</div>
		</div><!-- media -->
	</div><!-- pageheader -->	    	
        <div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
						<div class="">
						<?php if($this->uri->segment(3)=='edit'){ ?>
<form action="<?php echo base_url();?>Pages/Add_Event_Yajman/edit/<?php echo $this->uri->segment(4); ?>/update" class="" role="form" id="form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
						<?php } else { ?>	
<form action="<?php echo base_url();?>Pages/Add_Event_Yajman/insert" class="" role="form" id="form" method="post" accept-charset="utf-8" enctype="multipart/form-data">	
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
  
                    <input  type="hidden" name="puja_type" id="puja_type" value="Yajman" autocomplete="off"/>  
						 
				 
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
								<button type="submit" class="btn btn-sm btn-primary" name="submit_prod" id="submit_prod" value="add_product"><?php if($this->uri->segment(3)=='edit'){ echo 'Update';  } else echo 'Submit'; ?></button>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
</div>
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
  
$(document).ready(function(){
    $("#description_charge").keypress(function(event){
        var inputValue = event.charCode;
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)){
            event.preventDefault();
        }
    });
});
    </script>  