<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="<?=base_url();?>"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>Edit User Membership</li>
				</ul>
				<h4>Edit <?=$mem->name_title;?> <?=$mem->first_name;?> <?=$mem->last_name;?></h4>
			</div>
		</div><!-- media --> 
	</div><!-- pageheader -->
 <?php 
    $memrd = $user_membership->row();
    
?>
	<div class="contentpanel">	
	 	<div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
						<div class="">
	
<form action="<?php echo base_url();?>Pages/MembershipEdit/<?php echo $this->uri->segment(3); ?>/<?php echo $this->uri->segment(4); ?>/insert" class="" rol="form" id="form" method="post" accept-charset="utf-8"  enctype="multipart/form-data">	
<?php echo $this->session->flashdata('success');?>  
 


<!--Start membership edit form fields-->
<style>
    td{
        vertical-align: middle !important;
    }
</style>

    <section class="sectionBookingMembership">
            
            <div class="row">
                <div class="col-sm-12">
                     <div class="table-reasponsive">
                        <table class="table table-reasponsive table-bordered table-striped table-hover tbl_custom">
                            <tbody>
                                <tr>
                                    <td colspan="2">
                                    
                                    <div class="row">
                                            <?php foreach($membership_list as $mem_val){ 
                                            
                                            if($mem_val->id==$memrd->sel_member_id){
                                            ?>
                                                     <div class="item  col-xs-3 col-lg-3">
                                                <div class="thumbnail">
                                                      
                                                    <div class="caption">
                                                        <h4 class="group inner list-group-item-heading">
                                                            <?=$mem_val->title;?></h4>
                                                        <label>
                                                            <?=$mem_val->description;?>
                                                        </label>
                                                        <div class="row">
                                                            <div class="col-xs-12 col-md-12">
                                                                <label class="lead">
<input type="radio" name="sel_member_id" class="sel_member_id" value="<?=$mem_val->id;?>" <?php if($mem_val->id==$memrd->sel_member_id){ echo 'checked'; } ?> />




                                                                   SGD $<?=$mem_val->membership_amount;?> For <?=$mem_val->membership_days;?>
                                                                  </label>
                                                            </div>
                                                             
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } } ?>
                                    </div>
                                    
                                    
                                    
                                    </td>
                                </tr> 
                                
                                
                                
                                <tr>
                                    <td colspan="2"><label>Personal Information</label></td>
                                </tr>
                              
                              
                              
                              
                               <tr>
                                    <td colspan="2">
                                    <div class="row">
                        <div class="col-md-12">
                            <label class="mb-3">
<input onchange="mem_state_user(this.value);" type="radio" name="member_profile_status" value="1"  <?php if(set_value('member_profile_status')){ if(set_value('member_profile_status')==1){  echo 'checked'; } else if($memrd->member_profile_status==1){ echo 'checked'; } }  else if($memrd->member_profile_status==1){ echo 'checked'; }  ?>/>I am member</label>
                            <label class="mb-3">&nbsp;&nbsp;
<input onchange="mem_state_user(this.value);" type="radio" name="member_profile_status" value="0" <?php if(set_value('member_profile_status')){ if(set_value('member_profile_status')==0){  echo 'checked'; } else if($memrd->member_profile_status==0){ echo 'checked'; } }  else if($memrd->member_profile_status==0){ echo 'checked'; } ?>  />I am not a member</label>
                        </div>
                        <div class="col-md-12">
                            <label for="member_id_old">Member ID</label>  
<input <?php if(set_value('member_profile_status')){ if(set_value('member_profile_status')==0){  echo 'readonly'; } if($memrd->member_profile_status==1){ } } if($memrd->member_profile_status==1){  } ?> value="<?php if(set_value('member_id_old')){ echo set_value('member_id_old');  } else { echo @$memrd->member_id_old; } ?>" type="text" name="member_id_old" class="form-control" id="member_id_old" />
                       <?php echo $this->session->flashdata('member_id_old');?>
                        </div>
                        
                        <div class="col-md-6">
                            <label for="membership_buy">Membership buy date</label>
                            <input type="date" name="membership_buy" id="membership_buy" class="form-control" value="<?=date('Y-m-d',strtotime($memrd->membership_buy))?>" />
                        </div>
                        <div class="col-md-6">
                            <label for="membership_expire">Membership expire date</label>
                            <input type="date" name="membership_expire" id="membership_expire" class="form-control" value="<?=date('Y-m-d',strtotime($memrd->membership_expire))?>" />
                        </div>
                        
                        
                        
                    </div>  
                                    
                                    </td>
                                </tr>
                              
                              
                              
                              
                              
                                <tr>
                                    <td>
                                         <label>Name (As Per NRIC)</label>
                                        <select class="form-control" name="name_title" id="name_title">
                                        <?php if(set_value('name_title')){  ?><option value="<?=set_value('name_title');?>"><?=set_value('name_title');?></option> <?php  } else { ?><?php    } ?>
                                        <option value="Mr" <?php if(set_value('name_title')=='Mr'){ echo 'seleted'; } else { if(@$memrd->name_title=='Mr'){ echo 'seleted'; } } ?>>Mr.</option>
                                        <option value="Madam" <?php if(set_value('name_title')=='Madam'){ echo 'seleted'; } else { if(@$memrd->name_title=='Madam'){ echo 'seleted'; } } ?>>Madam.</option>
                                        <option value="Miss" <?php if(set_value('name_title')=='Miss'){ echo 'seleted'; } else { if(@$memrd->name_title=='Miss'){ echo 'seleted'; } } ?>>Miss.</option>
                                        <option value="Dr" <?php if(set_value('name_title')=='Dr'){ echo 'seleted'; } else { if(@$memrd->name_title=='Dr'){ echo 'seleted'; } } ?>>Dr.</option>
                                        <option value="A/Prof" <?php if(set_value('name_title')=='A/Prof'){ echo 'seleted'; } else { if(@$memrd->name_title=='A/Prof'){ echo 'seleted'; } } ?>>A/Prof.</option>
                                        <option value="Prof" <?php if(set_value('name_title')=='Prof'){ echo 'seleted'; } else { if(@$memrd->name_title=='Prof'){ echo 'seleted'; } } ?>>Prof.</option>
                                    </select>
                                    </td>
                                    <td>
                                         <input type="text" name="name_as_nric" id="name_as_nric" value="<?php if(set_value('name_as_nric')){ echo set_value('name_as_nric');} else { echo $memrd->name_as_nric;} ?>" class="form-control alphabet"><?=form_error('name_as_nric');?>
                                    </td>
                                </tr>
                                
                                
                                  <tr>
                                    <td>
                                       <label>Email Address</label>
                                        <input type="email" name="email" id="email"   class="form-control" value="<?php if(set_value('email')){ echo set_value('email');} else { echo $memrd->email;} ?>"><?=form_error('email');?>
                                    </td>
                                    <td>
                                           <label>Gender</label>
                                            <label for="gende">
 <input type="radio" name="gende" id="gende" <?php if(set_value('gende')=='Male'){ echo 'checked'; } else { if(@$memrd->gende=='Male'){ echo 'checked'; } } ?> value="Male"> Male 
                                            </label>
                                            <label for="Female">
<input type="radio" name="gende" id="Female" <?php if(set_value('gende')=='Female'){ echo 'checked'; } else { if(@$memrd->gende=='Female'){ echo 'checked'; } } ?> value="Female"> Female 
                                            </label>
                                                <?=form_error('gende');?>    
                                     </td>
                                </tr>
                                
                                
                                  <tr>
                                    <td>
                                         <label>Date of Birth</label>
                                        <div class="row">
                                                <div class="col-md-3 days">
                                    <select class="form-control" name="days" id="days">
 <?php if(set_value('days')){  ?><option value="<?=set_value('days');?>"><?=set_value('days');?></option> <?php  } else { ?> <option value="">Day</option><?php    } ?>
                                        <?php 
                                            $days=31;
                                            $i=1;
                                            while ($days>=$i) {?>
 <option value="<?=$i;?>" <?php if(set_value('days')==$i){ echo 'seleted'; } else {  if(@$memrd->days==$i){ echo 'selected'; }  } ?> ><?=$i;?></option>
                                            <?php     $i++;}
                                        ?>
                                    </select>
                                    <?=form_error('days');?>
                                </div>
                                <div class="col-md-4 month">
                                    <select class="form-control" name="month" id="month">
                                        <?php if(set_value('month')){  ?><option value="<?=set_value('month');?>"><?=set_value('month');?></option> <?php  } else { ?> <option value="">Month</option><?php    } ?>
                                        
                                            <?php 
                                                $month=12;
                                                $j=1;
                                                while ($month>=$j) {
                                                    ?>
 <option value="<?=$j;?>" <?php if(set_value('month')==$j){ echo 'seleted'; } else {  if(@$memrd->month==$j){ echo 'selected'; }  } ?>><?=$j;?></option>
                                                <?php
                                                $j++;}
                                            ?>
                                    </select>
                                    <?=form_error('month');?>
                                </div>
                                <div class="col-md-5">
                                    <select class="form-control" name="year" id="year">
 <?php if(set_value('year')){  ?><option value="<?=set_value('year');?>"><?=set_value('year');?></option> <?php  } else { ?> <option value="">Year</option><?php    } ?>
                                            <?php 
                                                $years=date('Y')-120;
                                                $k=date('Y');
                                                while ($years<=$k) {
                                            ?>
                                            <option value="<?=$k;?>" <?php if(@$memrd->year==$k){ echo 'selected'; } ?>><?=$k;?></option>
                                            <?php
                                                $k--;}
                                            ?>
                                    </select>
                                    <?=form_error('year');?>
                                </div>
                                        </div>    
                                    </td>
                                    <td>
                                         <label>NRIC / PassPort Number</label>
                                          <input type="text" name="nric_passport" id="nric_passport"  class="form-control"  value="<?php if(set_value('nric_passport')){ echo set_value('nric_passport');} else { echo $memrd->nric_passport;} ?>" ><?=form_error('nric_passport');?>
                                    </td>
                                </tr>
                                
                                
                                
                                 <tr>
                                    <td>
                                      <label>Nationality</label>
                                       <label for="nationality">
    <input <?php if(set_value('nationality')=='Singaporean'){ echo 'checked'; } else { if(@$memrd->nationality=='Singaporean'){ echo 'checked'; } } ?>  type="radio" name="nationality" class="nationality" id="nationality" value="Singaporean" checked=""> Singaporean
                                    </label>
                                    <label for="nationality2">
    <input <?php if(set_value('nationality')=='Singapore'){ echo 'checked'; } else { if(@$memrd->nationality=='Singapore'){ echo 'checked'; } } ?> type="radio" name="nationality" class="nationality" id="nationality2" value="Singapore"> Singapore PR
                                    </label>
                                    <label for="nationality3">
<input <?php if(set_value('nationality')=='Other'){ echo 'checked'; } else { if(@$memrd->nationality=='Other'){ echo 'checked'; } } ?> type="radio" name="nationality" class="nationality" id="nationality3" value="Other"> Other
                                    </label>
 <input type="text" class="form-control" name="nationality_other" id="nationality_other" value="<?php if(set_value('nationality_other')=='Other'){ set_value('nationality_other'); } else { echo $memrd->nationality_other; } ?>" placeholder="Please specify if other" readonly="">     
                                    <?=form_error('nationality');?>
                                    <?=form_error('nationality_other');?>
                                    </td>
                                    
                                    <td>
                                          <label>Mobile Number</label>
                            <div class="row">
                                
                                <div class="col-md-3">
                                    <input type="tel" name="countrycode" id="countrycode" value="+65" class="form-control" readonly="" disabled="">
                                </div>
                                <div class="col-md-9">
<input type="tel" name="mobile" id="mobile"  minlength="8" maxlength="8" class="form-control number"  value="<?php if(set_value('mobile')){ echo set_value('mobile');} else { echo $memrd->mobile;} ?>">
                                    <?=form_error('mobile');?>
                                </div>
                            </div>
                                     </td>
                                </tr>
                                  
                                
                                
                                
                                
                                
                                    <tr>
                                    <td>
                                      <label>Home Telephone Number</label>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <input type="tel" name="countrycode" id="countrycode" value="+65" class="form-control" readonly="" disabled="">
                                            </div>
                                            <div class="col-md-9">
                                                <input type="tel" name="home_tel" id="home_tel" minlength="8" maxlength="8" class="form-control number"  value="<?php if(set_value('home_tel')){ echo set_value('home_tel');} else { echo $memrd->home_tel;} ?>">
                                                <?=form_error('home_tel');?>
                                            </div>
                                        </div>
                                    </td>
                                    
                                    <td>
                                           <label>Marital Status</label>  
                                        <div class="row">
                                            <div class="col-sm-12">
                                                 <label for="marital_status">
        <input type="radio" name="marital_status" <?php if(set_value('marital_status')=='Singaporean'){ echo 'checked'; } else { if(@$memrd->marital_status=='Married'){ echo 'checked'; } } ?>  id="marital_status" value="Married" checked=""> Married
                                    </label>
                                    <label for="marital_status2">
        <input type="radio" name="marital_status" id="marital_status2" value="UnMarried" <?php if(set_value('marital_status')=='UnMarried'){ echo 'checked'; } else { if(@$memrd->marital_status=='UnMarried'){ echo 'checked'; } } ?>> UnMarried
                                    </label>
                                    <label for="divorced">
        <input type="radio" name="marital_status"     id="divorced" value="Divorced" <?php if(set_value('marital_status')=='Divorced'){ echo 'checked'; } else { if(@$memrd->marital_status=='Divorced'){ echo 'checked'; } } ?>> Divorced
                                    </label>
                                    <label for="widow">
        <input type="radio" name="marital_status"   id="widow" value="Widow" <?php if(set_value('marital_status')=='Widow'){ echo 'checked'; } else { if(@$memrd->marital_status=='Widow'){ echo 'checked'; } } ?>> Widow
                                    </label>
                                    <?=form_error('marital_status');?>
                                
                                            </div>       
                                        </div>
                                     </td>
                                </tr>
                                  <tr>
                                      <td colspan="2">
                                            <div class="row">
                                <div class="col-md-12">
                                    <label>Address</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="address_1" id="address_1"  class="form-control"  value="<?php if(set_value('address_1')){ echo set_value('address_1');} else { echo $memrd->address_1;} ?>" placeholder="Block  & Street">
                                    <?=form_error('address_1');?></div>
                                <div class="col-md-4">
                                    <input type="text" name="address_2" id="address_2"   class="form-control" value="<?php if(set_value('address_2')){ echo set_value('address_2');} else { echo $memrd->address_2;} ?>" placeholder="Unit No.">
                                    <?=form_error('address_2');?>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="postal_code" id="postal_code"  minlength="6" maxlength="6"  class="form-control  number" value="<?php if(set_value('postal_code')){ echo set_value('postal_code');} else { echo $memrd->postal_code;} ?>" placeholder="Postal Code">
                                    <?=form_error('postal_code');?></div>
                            </div>

                                      </td>
                                  </tr>
                                
                            </tbody>
                        </table>  
                    </div>
                </div>
        </div>
        
        
    <div class="row">
        <div class="col-sm-12">
            <div class="table-reasponsive">
                <table class="table table-reasponsive table-bordered table-striped table-hover tbl_custom">
               
                            <tbody>
                                
                                <?php if($lastmember->membership_id!=''){ ?>
                                <tr>
                                    <td>Membership ID </td>
                                    <td> : <?=$lastmember->membership_id;?></td>
                                </tr>
                                <?php } ?>
                                <tr>
                                    <td colspan="2"><h3>Employment Details </h3></td>
                                </tr>
                                 <tr>
                                    <td>Occupation * </td>
                                    <td> <div class="row">
                                                <div class="col-sm-12">
<input type="text" name="occupation" id="occupation2" value="<?php if(set_value('occupation')){ echo set_value('occupation');} else { echo $memrd->occupation;} ?>" class="form-control">
                                                      <?=form_error('occupation');?>
                                                </div>
                                            </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Name Of  Firm * </td>
                                    <td> <div class="row">
                                                <div class="col-sm-12">
<input type="text" name="name_of_firm" id="name_of_firm" value="<?php if(set_value('name_of_firm')){ echo set_value('name_of_firm');} else { echo $memrd->name_of_firm;} ?>" class="form-control">
                                                      <?=form_error('name_of_firm');?>
                                                </div>
                                            </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Address * </td>
                                    <td> 
                                        <div class="row">
                                                <div class="col-sm-8">
<input type="text" name="emp_address_1" id="emp_address_1"  class="form-control"  value="<?php if(set_value('emp_address_1')){ echo set_value('emp_address_1');} else { echo $memrd->emp_address_1;} ?>" placeholder="Block / Street / Unit Number">
                                        <?=form_error('emp_address_1');?>
                                                </div>
                                                <div class="col-sm-4">
<input type="text" name="emp_postalcode" id="emp_postalcode"  minlength="6" maxlength="6"  class="form-control number" value="<?php if(set_value('emp_postalcode')){ echo set_value('emp_postalcode');} else { echo $memrd->emp_postalcode;} ?>" placeholder="Postal Code">
                                        <?=form_error('emp_postalcode');?>
                                                </div>

                                                
                                            </div>
                                    </td>
                                </tr>
                                  <tr>
                                    <td> Tel. </td>
                                    <td> <div class="row">
                                                <div class="col-sm-4">
                                                    <input type="tel" name="emp_home_tel_code" id="emp_home_tel_code" value="+65" class="form-control" readonly="" disabled="">
                                                </div>
                                                <div class="col-sm-8">
 <input type="tel" name="emp_tel" id="emp_tel" minlength="8" maxlength="8" class="form-control number" value="<?php if(set_value('emp_tel')){ echo set_value('emp_tel');} else { echo $memrd->emp_tel;} ?>">
                                        <?=form_error('emp_tel');?>
                                                </div>
                                            </div>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>Email </td>
                                    <td> 
                                        <div class="row">
                                            <div class="col-sm-12">
<input type="emp_email" name="emp_email" id="emp_email"   class="form-control"  value="<?php if(set_value('emp_email')){ echo set_value('emp_email');} else { echo $memrd->emp_email;} ?>">
                                                    <?=form_error('emp_email');?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>


                                 <tr>
                                    <td> 
                                       <label>Family  Details</label>
                                    </td>

                                    <td align="right"> 
                                       <label> <a href="#" data-toggle="modal" data-target="#squarespaceModal"  class="btn btn-info btn-sm pull-right">Add New Family Member</a></label>
                                    </td>


                                </tr>
                                <tr>
                                    <td colspan="3" >
                                        <table class="table table-reasponsive table-bordered tableList">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Relation</th>
                                                        <th>Occupation</th>
                                                        <th>Mobile</th>
                                                        <th>Email</th>
                                                        <th>SLNT Member</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="familyListUser">
                                                    <?php 
                                                    $this->db->select('*');
                        $this->db->from('family_list');
                        $this->db->where(array('user_id'=>$mem->user_id));
                        $this->db->order_by('id','DESC');
                        $familyList = $this->db->get();

                        foreach ($familyList->result() as $familyListUser) {
                                                    echo ' <tr>
                                                        <td><lable class="tmobile">Name </lable>'.$familyListUser->family_name.'</td>
                                                        <td><lable class="tmobile">Relation </lable>'.$familyListUser->relation.'</td>
                                                        <td><lable class="tmobile">Occupation </lable>'.$familyListUser->occupation.'</td>
                                                        <td><lable class="tmobile">Mobile </lable>'.$familyListUser->mobile.'</td>
                                                        <td><lable class="tmobile">Email </lable>'.$familyListUser->email.'</td>
                                                        <td><lable class="tmobile">SLNT Member </lable>'.$familyListUser->slnt_member.'
<a href="javascript:void();" onclick="deleteMem('.$familyListUser->id.')" class="text-danger removeItem"><i class="fa fa-remove"></i></a>
                                                        </td>
                                                        
                                                    </tr>';
                         }  
                                                    ?>
                                                </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                    </table>
                </div>
            </div>
            
            
            
             <div class="col-sm-12">
            <div class="table-reasponsive">
                <table class="table table-reasponsive table-bordered table-striped table-hover">
                    <thead>
                        
                        </thead>
                            <tbody>
                                <?php if($lastmember->membership_id!=''){ ?>
                                <tr>
                                    <td>Membership ID </td>
                                    <td> : <?=$lastmember->membership_id;?></td>
                                </tr>
                                <?php } ?>
                                <tr>
                                    <td colspan="2">Membership Of Professional Organization / Club </td>
                                </tr>
                                 <tr>
                                    <td>Organization Name * </td>
                                    <td> <div class="row">
                                                <div class="col-sm-12">
<input type="text" name="organization_name" id="organization_name" value="<?php if(set_value('organization_name')){ echo set_value('organization_name');} else { echo $memrd->organization_name;} ?>" class="form-control">
                                                      <?=form_error('organization_name');?>
                                                </div>
                                            </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Membership Position * </td>
                                    <td> <div class="row">
                                                <div class="col-sm-12">
<input type="text" name="membership_position" id="membership_position" value="<?php if(set_value('membership_position')){ echo set_value('membership_position');} else { echo $memrd->membership_position;} ?>" class="form-control">
                                                      <?=form_error('membership_position');?>
                                                </div>
                                            </div>
                                    </td>
                                </tr>
 


                                 <tr>
                                    <td colspan="2"> 
                                       <label>Volunteer Services</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> 
                                       <label>Are you or family member interested to serve as volunterrs of temple</label>
                                       <label for="serves_as_volunterrs">
<input type="radio" name="serves_as_volunterrs" id="serves_as_volunterrs" value="Yes"  <?php if(set_value('serves_as_volunterrs')=='Yes'){ echo 'checked'; } else { if(@$memrd->serves_as_volunterrs=='Yes'){ echo 'checked'; } } ?>> Yes
                                       </label>
                                        <label for="no_serves_as_volunterrs">
 <input type="radio" name="serves_as_volunterrs" id="no_serves_as_volunterrs" value="No"  <?php if(set_value('serves_as_volunterrs')=='No'){ echo 'checked'; } else { if(@$memrd->serves_as_volunterrs=='No'){ echo 'checked'; } } ?>> No
                                       </label>
                                    </td>
                                </tr>
                                 <tr>
                                    <td colspan="2"> 
                                       <label>Please Advice Your Interest</label>

                                       <?php 
                                            $this->db->select('*');
                                            $this->db->from('slnt_type_interest');
                                            $this->db->order_by('name','DESC');
                                            $dlisofintrst = $this->db->get()->result();
                                            foreach ($dlisofintrst as $slnt_intrst) { ?>
    <label for="interest_<?=$slnt_intrst->id;?>">
        <input type="radio" name="interest" class="other_intrst"  id="interest_<?=$slnt_intrst->id;?>" value="<?=$slnt_intrst->name;?>" <?php if(set_value('interest')==$slnt_intrst->name){ echo 'checked'; } else { if(@$memrd->interest==$slnt_intrst->name){ echo 'checked'; } } ?> > <?=$slnt_intrst->name;?>
    </label> 
                                         <?php   }
                                       ?>

                                       <label for="other_intrst">
<input type="radio" name="interest"  <?php if(set_value('other_intrst')=='Other'){ echo 'checked'; } else { if(@$memrd->interest=='Other'){ echo 'checked'; } } ?>  id="other_intrst" class="other_intrst" value="Other"> Other
                                       </label>


                                     <input type="text" name="interest_other" id="interest_other" placeholder="If your other specify" value="<?php if(set_value('other_intrst')=='Other'){ echo set_value('other_intrst'); } else { if(@$memrd->interest=='Other'){ echo $memrd->interest_other; } } ?> " class="form-control" readonly="">    
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> 
                                       <label>Reference  To Porpose Your Application</label>
                                    </td>
                                </tr>

                                 <tr>
                                    <td> 
                                       <label>Porposer Name *</label>
                                    </td>
                                    <td>
<input type="text" name="porposer_name" id="porposer_name" class="form-control"  value="<?php if(set_value('porposer_name')){ echo set_value('porposer_name');} else { echo $memrd->porposer_name;} ?>">
                                    </td>
                                </tr>
                                 <tr>
                                    <td> 
                                       <label>Seconder Name *</label>
                                    </td>
                                    <td>
                                        <input type="text" name="secondery_name" id="secondery_name" class="form-control"  value="<?php if(set_value('secondery_name')){ echo set_value('secondery_name');} else { echo $memrd->secondery_name;} ?>">
                                    </td>
                                </tr>
                              
                                <tr>
                                    <td colspan="2"> 
                                    
                                        <h3>Upload Profile  Pic </h3>
                                        <h5>(Only jpg/png/jpeg file format allowed)</h5>
                                         <div class="col-md-12">
                                            <input type="file"  name="userfile" id="profile_pic" class="form-control mb-30 mt-30"  />
                                            <?php if($file_error!=''){?>
                                                <h5 class="memberShipSub mb-30 text-danger">
                                                <?=$file_error;?>
                                                </h5>
                                            <?php } ?>
                                            <h5 class="memberShipSub mb-30 text-danger" id="file-error">
                                            </h5>
                                            <div id="profile_pic_view" >
                                                <?php if($memrd->userfile!=''){ ?>
                                                    <img src="<?=base_url();?>../assets/profile/<?=$memrd->userfile;?>" style="max-width:200px;" />
                                                <?php }?>               
                                            </div>
                                        </div>
                                    
                                    </td>
                                </tr>
        <input type="hidden" name="user_id" id="user_id" value="<?=$mem->user_id;?>" />
                            
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" align="center">
                                         <button  onclick="if (confirm('Are you sure want to save this record?')){return true;}else{event.stopPropagation(); event.preventDefault();};"  class="btn btn-info">
                                            <span class="mat-button-wrapper">Save</span>
                                            <div matripple="" class="mat-ripple mat-button-ripple"></div>
                                            <div class="mat-button-focus-overlay"></div>
                                        </button>  
                                    </td>
                                </tr>
                            </tfoot>
                    </table>
                </div>
            </div>
    </div>    
        
        
        
        
        
        
        
    </section>
   </form>

<!-- line modal -->
<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        </div>
        <div class="modal-body">
            <form action="" method="post">
              <div class="form-group  row">
                <label for="family_name" class="col-sm-4">Name</label>
                <div class="col-sm-8">
 
                   <input type="text" class="form-control alphabet" id="family_name" name="family_name" placeholder="Enter name"> 
                </div>
              </div>

              <div class="form-group  row">
                <label for="relation" class="col-sm-4">Relation</label>
                <div class="col-sm-8">
                   <input type="text" class="form-control" name="relation" id="relation" placeholder="Enter relation"> 
                </div>
              </div>



            <div class="form-group  row">
                <label for="occupation" class="col-sm-4">Occupation</label>
                <div class="col-sm-8">
                   <input type="text" class="form-control" name="occupation" id="occupation" placeholder="Enter occupation"> 
                </div>
            </div>

            <div class="form-group row">
                <label for="mobile" class="col-sm-4">Mobile</label>
                <div class="col-sm-8">
                   <div class="row">
                        <div class="col-sm-4">
                            <input type="tel" name="countrycode" id="countrycode" value="+65" class="form-control" readonly="" disabled="">
                        </div>
                                                <div class="col-sm-8">
                                                  <input type="tel" name="mobile" id="fmobile"  minlength="8" maxlength="8" class="form-control number"  value="<?=set_value('mobile');?>">
                                                    <?=form_error('mobile');?>
                                                </div>
                                            </div>
                                            
                                            
                                            
                </div>
            </div>
             <div class="form-group  row">
                <label for="email" class="col-sm-4">Email</label>
                <div class="col-sm-8">
                   <input type="email" class="form-control" name="email" id="femail" placeholder="Enter email"> 
                </div>
            </div>

             <div class="form-group  row">
                <label for="slnt_member" class="col-sm-4">SLNT Member</label>
                <div class="col-sm-8">
                   <select class="form-control" name="slnt_member" id="slnt_member">
                       <option value="Yes">Yes</option>
                       <option value="No">No</option>
                   </select>
                   <div class="text-center"><center id="ss"></center></div>
                </div>
                
            </div>
           
              <button type="button" class="btn btn-default submitFamilyFormFIll">Submit</button>
            </form>

        </div>
        <div class="modal-footer">
            <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                <div class="btn-group text-center" role="group">
                    <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
                </div>
              
            </div>
        </div>
    </div>
  </div>
</div>
 
 <script>
 
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            
             $('#profile_pic_view').html('<img src="" id="profi" style="max-width:250px !important; width:250px !important;" />');
             $('#profi').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#profile_pic").change(function(){
     var fileExtension = ['jpeg', 'jpg', 'png'];
        if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
            $('#file-error').html("Only formats are allowed : "+fileExtension.join(', '));
            $('#profile_pic_view').html('');
        } else {
            $('#file-error').html('');
             readURL(this);
        }
     
});
    $('.other_intrst').on('click',function(){
        var oth = $(this).val();
            if(oth=='Other'){
                    $('#interest_other').removeAttr('readonly');
                    $('#interest_other').attr('required','required');

                } else {
                    $('#interest_other').attr('readonly','readonly');
                    $('#interest_other').val('');
                    $('#interest_other').removeAttr('required');

                }
    });
    $('.nationality').on('click',function(){
                var loval = $(this).val();
                if(loval=='Other'){
                    $('#nationality_other').removeAttr('readonly');
                    $('#nationality_other').attr('required','required');

                } else {
                    $('#nationality_other').attr('readonly','readonly');
                    $('#nationality_other').val('');
                    $('#nationality_other').removeAttr('required');

                }
            });
</script>
 <script type="text/javascript">
    $('.submitFamilyFormFIll').on('click',function(){
        var family_name=$('#family_name').val();
        var login_user='<?=$mem->user_id;?>';
        var relation=$('#relation').val();
        var occupation=$('#occupation').val();
        var mobile=$('#fmobile').val();
        var email=$('#femail').val();
        var slnt_member=$('#slnt_member').val();
        var queryString='family_name='+family_name+'&relation='+relation+'&occupation='+occupation+'&mobile='+mobile+'&email='+email+'&slnt_member='+slnt_member+'&login_user='+login_user;
                $.ajax({
                       type: "post",
                       url: '<?php echo site_url('Pages/SaveFamily');?>',
                       cache: false, 
                       data:queryString,
                       success: function(response){
                           if(response==0){
                                $('#ss').show();
                                $('#ss').html('<h5 class="text-danger">All Field are mendetory</h5>');
                           } else {
                              $('#familyListUser').html(response);
                                $('#ss').show();
                                $('#ss').html('<h5 class="text-success">Member add successfully..</h5>');
                                $('#family_name').val('');
                                $('#relation').val('');
                                $('#occupation').val('');
                                $('#fmobile').val('');
                                $('#femail').val('');
                                $('#slnt_member').val('');
                                $('#ss').hide(1000); 
                           }
                            
                            //window.location.href=window.location.href;
                       },
                       error: function(){      
                        alert('Error while request..');
                    }
                });
    });

 function deleteMem(str){
     var login_user='<?=$mem->user_id;?>';
     var QueryString = 'str='+str+'&login_user='+login_user;
                    $.ajax({
                       type: "post",
                       url: '<?php echo site_url('Pages/Remove');?>/'+str+'/'+login_user,
                       cache: false, 
                       data:QueryString,
                       success: function(response){
                            $('#familyListUser').html(response);
                       },
                       error: function(){      
                        alert('Error while request..');
                    }
                });
 }

</script>
<?php  echo "<style>  .tmobile { display:none;} </style>"; ?>
 
						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
 
</div><!-- contentpanel -->
	
</div>