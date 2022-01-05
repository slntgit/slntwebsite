<div class="tab-pane fade  <?php if($this->uri->segment(2)=='buyNow'){ ?> in active <?php } ?>" id="profile">
<?php  $memrd= $user_membership->row();?>
    <form method="post" action="<?=base_url();?>Membership/buyNow/<?=$this->uri->segment(3);?>/buyNow" enctype="multipart/form-data"> 

        <h3 class="head text-left memberShipName">Welcome: <span><?=$userDetails->first_name?> <?=$userDetails->last_name?></span></h3>
        <?php if ($user_membership->num_rows()==0) { ?>
            <h2>You don't have any membership plan.</h2>
        <?php } else { ?>
            <h2 class="memberShipSub mb-30">Your membership details are as below.</h2>
        <?php } ?>
        
        
        
    
<div class="row">
    <div class="col-sm-12">
            <div class="table-reasponsive">
                <table class="table table-reasponsive table-bordered table-striped table-hover tableList">
                    <thead>
                        <tr>
                            <th align="center" colspan="2">
                     
                                    <p class="text-left" style="font-size: 1.2em">
                                        Please choose membership  type
                                    </p>
                          
              
                <div class="memberShipSelect">
                    <?php foreach($data_membership->result() as $mem_data){ ?>
                    
                    
                    
                    
                    
                    <label class="btn btn-default btn-lg" for="sel_mem_<?=$mem_data->id;?>">
                            <input type="radio" name="sel_mem" class="sel_membership_plan" id="sel_mem_<?=$mem_data->id;?>" value="<?=$mem_data->id;?>" <?php if($this->uri->segment(3)!=''){ if($this->uri->segment(3)==$mem_data->id){ echo 'checked'; }  } else {  }?> >
                                <?=$mem_data->title;?> $ <?=$mem_data->membership_amount;?> SGD  / <?=$mem_data->membership_days;?>   Days     
                    </label>
    
                    <?php } ?>
 
                </div>
                </th>
            </tr>
                        </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2" id="memberShipDetails">
                                        <?php if($this->uri->segment(3)!=''){
                                            $this->db->select('*');
                                            $this->db->from('slnt_membership');
                                            $this->db->where('id',$this->uri->segment(3));
                                            $mem = $this->db->get();
                                            if ($mem->num_rows()>0) {
                                                $member = $mem->row();
                                                echo '<div class="row">
                                                        <div class="col-md-12">
                                                            <div>'.$member->description.'</div>
                                                        </div>
                                                </div>';  
                                           }                                          
                                        }?>
                                    </td>
                                </tr>
                            <?php if ($user_membership->num_rows()>0) { ?>
                                <tr>
                                    <td>Membership ID </td>
                                    <td> : <?=$memrd->membership_id;?></td>
                                </tr>
                                <tr>
                                    <td>Membership Type </td>
                                    <td> : <?=$memrd->membership_title;?></td>
                                </tr>
                                 <tr>
                                    <td>Expiring Date / Expired date </td>
                                    <td> :  <?=date('d-M-Y',strtotime($memrd->membership_expire));?></td>
                                </tr>
                                 <tr>
                                    <td>Your Membership Since </td>
                                    <td> : <?=date('d-M-Y',strtotime($memrd->membership_buy));?></td>
                                </tr>
                            <?php } ?>
 
                                 <tr>
                                    <td colspan="2">Personal Information </td>
                                </tr>
                                 <tr>
                                    <td>Name (As Per NRIC) </td>
                                    <td> <div class="row">
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="name_title" id="name_title">
<option value="Mr" <?php if(@$memrd->name_title=='Mr'){ echo 'seleted'; } ?>>Mr.</option>
<option value="Madam" <?php if(@$memrd->name_title=='Madam'){ echo 'seleted'; } ?>>Madam.</option>
<option value="Miss" <?php if(@$memrd->name_title=='Mss'){ echo 'seleted'; } ?>>Miss.</option>

<option value="Dr" <?php if(@$memrd->name_title=='Dr'){ echo 'seleted'; } ?>>Dr.</option>
<option value="A/Prof" <?php if(@$memrd->name_title=='A/Prof'){ echo 'seleted'; } ?>>A/Prof.</option>

<option value="Prof" <?php if(@$memrd->name_title=='Prof'){ echo 'seleted'; } ?>>Prof.</option>

                                                    </select>
                                                </div>
                                                <div class="col-sm-8">
<input type="text" name="name_as_nric" id="name_as_nric" value="<?=@$memrd->name_as_nric;?>" class="form-control alphabet">
                                                      <?=form_error('name_as_nric');?>
                                                </div>
                                            </div>
                                    </td>
                                </tr>
                                 <tr>
                                    <td> <label for="gende">Gender</label> </td>
                                    <td> <div class="row">
                                                <div class="col-sm-12">
                                                
                                                    <label for="gende">
<input type="radio" name="gende" id="gende" <?php if(@$memrd->gende=='Male'){ echo 'checked'; } ?> value="Male"> Male 
                                                    </label>
                                                    <label for="Female">
<input type="radio" name="gende" id="Female" <?php if(@$memrd->gende=='Female'){ echo 'checked'; } ?> value="Female"> Female 
                                                    </label>
                                                    <?=form_error('gende');?>
                                                </div>
                                            </div>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>NRIC / PassPort Number </td>
                                    <td> <div class="row">
                                                <div class="col-sm-12">
<input type="text" name="nric_passport" id="nric_passport"  class="form-control"  value="<?=@$memrd->nric_passport;?>" >
                                        <?=form_error('nric_passport');?>
                                                </div>
                                            </div>
                                    </td>
                                </tr>
                                 <tr>
                                    <td> Date Of Birth</td>
                                    <td> <div class="row">
                                        <div class="col-sm-4">
                                            <select class="form-control" name="days" id="days">
                                                <option value="">Day</option>
                                                <?php 
                                                    $days=31;
                                                    $i=1;
                                                    while ($days>=$i) {?>
<option value="<?=$i;?>" <?php if(@$memrd->days==$i){ echo 'selected'; } ?>><?=$i;?></option>
                                               <?php     $i++;}
                                                ?>
                                            </select>
                                            <?=form_error('days');?>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="month" id="month">
                                                <option value="">Month</option>
                                                <?php 
                                                    $month=12;
                                                    $j=1;
                                                    while ($month>=$j) {

                                                        ?>
<option value="<?=$j;?>" <?php if(@$memrd->month==$j){ echo 'selected'; } ?>><?=$j;?></option>
                                               <?php

                                                    $j++;}
                                                ?>
                                            </select>
                                            <?=form_error('month');?>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="year" id="year">
                                                <option value="">Year</option>
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
                                </tr>
                                 <tr>
                                    <td> Nationality</td>
                                    <td> <div class="row">
                                                <div class="col-sm-12">
                                                    <label for="nationality">
<input <?php if(@$memrd->nationality=='Singaporean'){ echo 'checked'; } ?> type="radio" name="nationality" class="nationality" id="nationality" value="Singaporean" checked=""> Singaporean
                                                    </label>

                                                    <label for="nationality2">
<input <?php if(@$memrd->nationality=='Singapore'){ echo 'checked'; } ?> type="radio" name="nationality" class="nationality" id="nationality2" value="Singapore"> Singapore PR
                                                    </label>

                                                    <label for="nationality3">
<input <?php if(@$memrd->nationality=='Other'){ echo 'checked'; } ?> type="radio" name="nationality" class="nationality" id="nationality3" value="Other"> Other
                                                    </label>
<input type="text" name="nationality_other" id="nationality_other" value="<?php if(@$memrd->nationality=='Other'){  echo @$memrd->nationality_other; } ?>" placeholder="Please specify if other" readonly="">
                                                  
                                                </div>
                                                <?=form_error('nationality');?>
                                                <?=form_error('nationality_other');?>
                                            </div>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>Address</td>
                                    <td> <div class="row">
                                                <div class="col-sm-6">
<input type="text" name="address_1" id="address_1"  class="form-control"  value="<?=@$memrd->address_1;?>" placeholder="Block  & Street">
                                        <?=form_error('address_1');?>
                                                </div>
                                                <div class="col-sm-6">
<input type="text" name="address_2" id="address_2"   class="form-control" value="<?=@$memrd->address_2;?>" placeholder="Unit No.">
                                        <?=form_error('address_2');?>
                                                </div>

                                                <div class="col-sm-6">
                                                    <br />
<input type="text" name="postal_code" id="postal_code"  minlength="6" maxlength="6"  class="form-control  number" value="<?=@$memrd->postal_code;?>" placeholder="Postal Code">
                                        <?=form_error('postal_code');?>
                                                </div>
                                            </div>
                                    </td>
                                </tr>
                                 <tr>
                                    <td> Home Tel </td>
                                    <td> <div class="row">
                                                <div class="col-sm-4">
<input type="tel" name="home_tel_code" id="home_tel_code" value="+65" class="form-control" readonly="" disabled="">
                                                </div>
                                                <div class="col-sm-8">
<input type="tel" name="home_tel" id="home_tel" minlength="8" maxlength="8" class="form-control number"  value="<?=@$memrd->home_tel;?>">
                                        <?=form_error('home_tel');?>
                                                </div>
                                            </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> Mobile </td>
                                    <td> <div class="row">
                                                <div class="col-sm-4">
                                                    <input type="tel" name="countrycode" id="countrycode" value="+65" class="form-control" readonly="" disabled="">
                                                </div>
                                                <div class="col-sm-8">
 <input type="tel" name="mobile" id="mobile"  minlength="8" maxlength="8" class="form-control number"  value="<?=@$memrd->mobile;?>">
                                                    <?=form_error('mobile');?>
                                                </div>
                                            </div>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>Email </td>
                                    <td> 
                                        <div class="row">
                                            <div class="col-sm-12">
 <input type="email" name="email" id="email"   class="form-control" value="<?=@$memrd->email;?>">
                                                    <?=form_error('email');?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                 <tr>
                                    <td> Marital Status</td>
                                    <td> 
                                        <div class="row">
                                                <div class="col-sm-12">
       <label for="marital_status">
<input type="radio" name="marital_status" <?php if(@$memrd->marital_status=='Married'){ echo 'checked'; } ?>   id="marital_status" value="Married" checked=""> Married
        </label>
        <label for="marital_status2">
<input type="radio" name="marital_status" <?php if(@$memrd->marital_status=='UnMarried'){ echo 'checked'; } ?>   id="marital_status2" value="UnMarried"> UnMarried
        </label>
        <label for="divorced">
<input type="radio" name="marital_status" <?php if(@$memrd->marital_status=='Divorced'){ echo 'checked'; } ?>   id="divorced" value="Divorced"> Divorced
        </label>
        <label for="widow">
<input type="radio" name="marital_status" <?php if(@$memrd->marital_status=='Widow'){ echo 'checked'; } ?>   id="widow" value="Widow"> Widow
        </label>







                                                </div>
                                                <?=form_error('marital_status');?>
                                            </div>
                                    </td>
                                </tr>
                                  <tr>
                                    <td>Profile  Pic (In jpg/png/jpeg file format allowed)</td>
                                    <td> 
                                        <input type="file"  name="userfile" id="profile_pic"  />
                                            <?php if($file_error!=''){?>
        <h5 class="memberShipSub mb-30 text-danger"><?=$file_error;?></h5>
        
       <?php } ?>
                                        <div id="profile_pic_view" >
                                            
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
    readURL(this);
});
                                        </script>
                                     </td>
                                </tr>
                            </tbody>


                            <tfoot>
                                <tr>
                                    <td colspan="2" align="center">
                                  

                                         <button _ngcontent-ngq-c157="" mat-flat-button="" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary">
                                            <span class="mat-button-wrapper"> Buy & Proceed</span>
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
</style>