<div class="tab-pane fade  <?php if($this->uri->segment(2)=='buyNow'){ ?> in active <?php } ?>" id="profile">
<?php  $memrd= $user_membership->row(); ?>
    <form method="post" action="<?=base_url();?>Membership/buyNow/<?=$this->uri->segment(3);?>/buyNow" enctype="multipart/form-data"> 
        <section class="membershipSection membershipBooking p-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="memberShipName">
                        <h3 class="">Welcome: <span><?=$userDetails->first_name?> <?=$userDetails->last_name?></span></h3>
                            <?php if ($user_membership->num_rows()==0) { ?>
                        <h2>You don't have any membership plan.</h2>
                            <?php } else { ?>
                        <h2 class="memberShipSub mb-30">Your membership details are as below.</h2>
                            <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row m-auto text-center">
                <?php 
                    foreach ($data_membership->result() as $mem_data) {
                ?>
                <label class="col-md-3 princing-item red" for="sel_mem_<?=$mem_data->id;?>">
                    <div class="wapperMember">
                        <div class="pricing-divider ">
                            <h3><?=$mem_data->title;?></h3>
                            <h4 class="my-0 display-2  font-weight-normal mb-3"><span class="h3">$</span> <?=$mem_data->membership_amount;?> <span class="h5">/<?=$mem_data->membership_days;?> Days</span></h4>
                        </div>
                        <div class="card-body mt-0">
                            <?=$mem_data->description;?>
                        </div>
                        <div class="checkButSelectes">
                        <input type="radio" name="sel_mem" class="sel_membership_plan" id="sel_mem_<?=$mem_data->id;?>" value="<?=$mem_data->id;?>" <?php if($this->uri->segment(3)!=''){ if($this->uri->segment(3)==$mem_data->id){ echo 'checked'; }  } else {  }?> >
                        </div>
                    </div>
                </label>
                <?php   
                } ?> 
            </div>
        </section>

        <section class="sectionBookingMembership">
            <div class="row">
    
    <div class="col-sm-12">
            <div class="table-reasponsive">
                <table class="table table-reasponsive tableList">
                  
                            <tbody>
                               
                            <?php if ($user_membership->num_rows()>0) {
                            if($memrd->membership_id!=''){ 
                            ?>
                                <tr>
                                    <td>Membership ID </td>
                                    <td> : <?=$memrd->membership_id;?></td>
                                </tr>
                                
                                <?php } ?>
                                <tr>
                                    <td>Membership Type </td>
                                    <td> : <?=$memrd->membership_title;?></td>
                                </tr>
                                 <tr>
                                    <td>Expiring Date / Expired date </td>
                                    <td> :  <?=date('d-M-Y',strtotime($memrd->membership_expire));?></td>
                                </tr>
                                 <tr>
                                    <td>You are  Member Since </td>
                                    <td> : <?=date('d-M-Y',strtotime($memrd->membership_buy));?></td>
                                </tr>
                            <?php } ?>
                        </tbody>

                    </table>


                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-md-8">
                
                <div class="memberFormBo relative">
                <h3 class="mb-3">Personal Information</h3>
                <div class="wrapperForm">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-12">
                                    <p>Name (As Per NRIC) <abbr class="text-danger">*</abbr></p>
                                </div>
                                <div class="col-md-4">    
                                    <select class="form-control" name="name_title" id="name_title">
<?php if(set_value('name_title')){  ?><option value="<?=set_value('name_title');?>"><?=set_value('name_title');?></option> <?php  } else { ?><?php    } ?>
<option value="Mr" <?php if(set_value('name_title')=='Mr'){ echo 'seleted'; } else { if(@$memrd->name_title=='Mr'){ echo 'seleted'; } } ?>>Mr.</option>
<option value="Madam" <?php if(set_value('name_title')=='Madam'){ echo 'seleted'; } else { if(@$memrd->name_title=='Madam'){ echo 'seleted'; } } ?>>Madam.</option>
<option value="Miss" <?php if(set_value('name_title')=='Miss'){ echo 'seleted'; } else { if(@$memrd->name_title=='Miss'){ echo 'seleted'; } } ?>>Miss.</option>
<option value="Dr" <?php if(set_value('name_title')=='Dr'){ echo 'seleted'; } else { if(@$memrd->name_title=='Dr'){ echo 'seleted'; } } ?>>Dr.</option>
<option value="A/Prof" <?php if(set_value('name_title')=='A/Prof'){ echo 'seleted'; } else { if(@$memrd->name_title=='A/Prof'){ echo 'seleted'; } } ?>>A/Prof.</option>
<option value="Prof" <?php if(set_value('name_title')=='Prof'){ echo 'seleted'; } else { if(@$memrd->name_title=='Prof'){ echo 'seleted'; } } ?>>Prof.</option>
                                    </select>
                                </div>
                                <div class="col-md-8">
 <input type="text" name="name_as_nric" id="name_as_nric" value="<?php if(set_value('name_as_nric')){ echo set_value('name_as_nric');} else { echo $memrd->name_as_nric;} ?>" class="form-control alphabet"><?=form_error('name_as_nric');?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-12">
                                            <p>Email Address <abbr class="text-danger">*</abbr></p>
                                        </div>
                                        <div class="col-12">
 <input type="email" name="email" id="email"   class="form-control" value="<?php if(set_value('email')){ echo set_value('email');} else { echo $memrd->email;} ?>"><?=form_error('email');?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <p>Gender <abbr class="text-danger">*</abbr></p>
                                        </div>
                                        <div class="col-12">
                                            <label for="gende">
 <input type="radio" name="gende" id="gende" <?php if(set_value('gende')=='Male'){ echo 'checked'; } else { if(@$memrd->gende=='Male'){ echo 'checked'; } } ?> value="Male"> Male 
                                            </label>
                                            <label for="Female">
<input type="radio" name="gende" id="Female" <?php if(set_value('gende')=='Female'){ echo 'checked'; } else { if(@$memrd->gende=='Female'){ echo 'checked'; } } ?> value="Female"> Female 
                                            </label>
                                                <?=form_error('gende');?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row dateofbirth">
                                <div class="col-12">
                                    <p>Date of Birth <abbr class="text-danger">*</abbr></p>
                                </div>
                                <div class="col-3 days">
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
                                <div class="col-4 month">
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
                                <div class="col-5">
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
                            <div class="row NRICPassPortNumber">
                                <div class="col-12">
                                    <p>NRIC / PassPort Number <abbr class="text-danger">*</abbr></p>
                                </div>
                                <div class="col-12">
 <input type="text" name="nric_passport" id="nric_passport"  class="form-control" onkeypress="return /[A-Z0-9]/i.test(event.key)"  pattern="[A-Z0-9]+"  value="<?php if(set_value('nric_passport')){ echo set_value('nric_passport');} else { echo $memrd->nric_passport;} ?>" ><?=form_error('nric_passport');?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p>Nationality <abbr class="text-danger">*</abbr></p>
                                </div>
                                <div class="col-12">
                                    <label for="nationality">
    <input <?php if(set_value('nationality')=='Singaporean'){ echo 'checked'; } else { if(@$memrd->nationality=='Singaporean'){ echo 'checked'; } } ?>  type="radio" name="nationality" class="nationality" id="nationality" value="Singaporean" checked=""> Singaporean
                                    </label>
                                    <label for="nationality2">
    <input <?php if(set_value('nationality')=='Singapore'){ echo 'checked'; } else { if(@$memrd->nationality=='Singapore'){ echo 'checked'; } } ?> type="radio" name="nationality" class="nationality" id="nationality2" value="Singapore"> Singapore PR
                                    </label>
                                    <label for="nationality3">
<input <?php if(set_value('nationality')=='Other'){ echo 'checked'; } else { if(@$memrd->nationality=='Other'){ echo 'checked'; } } ?> type="radio" name="nationality" class="nationality" id="nationality3" value="Other"> Other
                                    </label>
 <input type="text" name="nationality_other" id="nationality_other" value="<?php if(set_value('nationality_other')=='Other'){ set_value('nationality_other'); } else { echo $memrd->nationality_other; } ?>" placeholder="Please specify if other" readonly="">     
                                    <?=form_error('nationality');?>
                                    <?=form_error('nationality_other');?>       
                                </div>
                            </div>
                            <div class="row mobile">
                                <div class="col-12">
                                    <p>Mobile Number <abbr class="text-danger">*</abbr></p>
                                </div>
                                <div class="col-3">
                                    <input type="tel" name="countrycode" id="countrycode" value="+65" class="form-control" readonly="" disabled="">
                                </div>
                                <div class="col-9">
<input type="tel" name="mobile" id="mobile"  minlength="8" maxlength="8" class="form-control number"  value="<?php if(set_value('mobile')){ echo set_value('mobile');} else { echo $memrd->mobile;} ?>">
                                    <?=form_error('mobile');?>
                                </div>
                            </div>
                            <div class="row mobile">
                                <div class="col-12">
                                    <p>Home Telephone Number</p>
                                </div>
                                <div class="col-3">
                                    <input type="tel" name="countrycode" id="countrycode" value="+65" class="form-control" readonly="" disabled="">
                                </div>
                                <div class="col-9">
                                    <input type="tel" name="home_tel" id="home_tel" minlength="8" maxlength="8" class="form-control number"  value="<?php if(set_value('home_tel')){ echo set_value('home_tel');} else { echo $memrd->home_tel;} ?>">
                                    <?=form_error('home_tel');?>
                                </div>
                            </div>
                            <div class="row address">
                                <div class="col-12">
                                    <p>Address <abbr class="text-danger">*</abbr></p>
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
                            <div class="row">
                                <div class="col-12">
                                    <p>Marital Status <abbr class="text-danger">*</abbr></p>
                                </div>
                                <div class="col-12">
                                    
                                    <label for="marital_status">
        <input type="radio" name="marital_status" <?php if(set_value('marital_status')=='Single'){ echo 'checked'; } else { if(@$memrd->marital_status=='Single'){ echo 'checked'; } } ?>  id="marital_status" value="Single" checked=""> Single
                                    </label>
                                    
                                    
                                    <label for="marital_status">
        <input type="radio" name="marital_status" <?php if(set_value('marital_status')=='Married'){ echo 'checked'; } else { if(@$memrd->marital_status=='Married'){ echo 'checked'; } } ?>  id="marital_status" value="Married" checked=""> Married
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
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <section class="summarySection text-center">
                    <h3>Upload Profile  Pic </h3>
                    <h5>(Only jpg/png/jpeg file format allowed)</h5>
                     <div class="col-12">
                        <input type="file"  name="userfile" id="profile_pic" class="form-control mb-30 mt-30"  />
                        <?php if($file_error!=''){?>
                            <h5 class="memberShipSub mb-30 text-danger">
                            <?=$file_error;?>
                            </h5>
                        <?php } ?>
                        
                        <?php 
                          $this->db->select('*');
    						$this->db->from('slnt_user_membership');
    						$this->db->where(array('user_id'=>$_COOKIE["login_user"],'pay_status'=>0,'final_submit_status'=>0));
    						$this->db->order_by('id','ASC');
    						$this->db->limit(1);
    						$usvvbb = $this->db->get();
                            
                        ?>
                        <h5 class="memberShipSub mb-30 text-danger" id="file-error">
                        </h5>
                        <div id="profile_pic_view" >
                            <?php if($usvvbb->num_rows()>0 ){ $upfile = $usvvbb->row();  if($upfile->userfile!=''){ ?>
                            <img src="<?=base_url();?>assets/profile/<?=$upfile->userfile;?>" id="profi" style="max-width:250px !important; width:250px !important;" />      
                            <?php } } ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>


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
                                        </script>
<div class="row">
    
    <div class="col-sm-12">
            <div class="table-reasponsive">
                <table class="table table-reasponsive tableList">
                            <tfoot>
                                <tr>
                                    <td colspan="2" align="center">
                                  

                                         <button _ngcontent-ngq-c157="" mat-flat-button="" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary">
                                            <span class="mat-button-wrapper">Next</span>
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
        
        
        
        
    </form>
</div>
<script>
    $('.nationality').on('click',function(){
        var takeval = $(this).val();
        if(takeval=='Other'){
            $('#nationality_other').removeAttr('readonly');
        }  else {
            $('#nationality_other').attr('readonly','readonly');
        }
    });
</script>
<style type="text/css">
.profi{
    max-width:300px !important;
    width:300px !important;
}
    .btn-default{
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border: 1px solid #ffefe2;
        padding: .375rem .75rem;
        background: #ffefe2;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: .25rem;
        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }
 
.about-main-site {
    /* padding-top: 20px !important; */
    padding-bottom: 0px !important;
}
.section-gap {
        /* padding: 0px 0 !important; */
        /* background: #ffefe2; */
    }
.display-2 {
    font-size: 2rem !important;
}
input[type="radio"].sel_membership_plan {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    display: inline-block;
    width: 22px !important;
    height: 22px !important;
    padding: 3px !important;
    background-clip: content-box;
    border-radius: 50%;
    border: 2px solid #ffffff !important;
    background-color: rgb(255 255 255) !important;
    margin: 0 8px -5px 0 !important;
    cursor: pointer;
}
input[type="radio"].sel_membership_plan:checked {
    background-color: #48263d !important;
}
.sectionBookingMembership .summarySection {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    padding: 30px 40px;
    border-radius: 15px;
    -webkit-box-shadow: 0 0 23px -8px #48263d8a;
    box-shadow: 0 0 23px -8px #48263d8a;
    height: auto !important;
    width: 100%;
    background-color: #fff;
}
.mb-30 {
    overflow: hidden !important;
}
</style>