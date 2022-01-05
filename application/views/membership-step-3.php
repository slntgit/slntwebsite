
<div class="tab-pane fade  <?php if($this->uri->segment(2)=='MembershipStep3'){ ?> in active <?php } ?>" id="profile">
<?php 
    $lastmember = $user_membership->row();
    $memrd = $user_memberfirst->row();
?>
<form method="post" action="<?=base_url();?>Membership/MembershipStep3/saveStep3"> 
<h3 class="head text-center">Welcome <?=$userDetails->first_name?> <?=$userDetails->last_name?></h3>
<div class="row">
    <div class="col-sm-12">
            <div class="table-reasponsive">
                <table class="table table-reasponsive table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th align="center" colspan="2">
                           
                                    <p class="text-center">
                                        Your selected membership plan!
                                    </p>
                          
                <div class="text-center">
                    <?php foreach($data_membership->result() as $mem_data){

                    if($lastmember->sel_member_id==$mem_data->id){  ?>
                    <label class="btn btn-default btn-lg" for="sel_mem_<?=$mem_data->id;?>">
                        <?=$mem_data->title;?> $ <?=$mem_data->membership_amount;?> SGD  / <?=$mem_data->membership_days;?> Days 
                    </label>
                    <?php } } ?>
  <input type="hidden" name="sel_mem" value="<?=$lastmember->sel_member_id;?>">
                </div>
                </th>
            </tr>
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
                                    <td>Organization Name  </td>
                                    <td> <div class="row">
                                                <div class="col-sm-12">
<input type="text" name="organization_name" id="organization_name" value="<?php if(set_value('organization_name')){ echo set_value('organization_name');} else { echo $memrd->organization_name;} ?>" class="form-control">
                                                      <?=form_error('organization_name');?>
                                                </div>
                                            </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Membership Position </td>
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
                                       <label>Porposer Name </label>
                                    </td>
                                    <td>
<input type="text" name="porposer_name" id="porposer_name" class="form-control"  value="<?php if(set_value('porposer_name')){ echo set_value('porposer_name');} else { echo $memrd->porposer_name;} ?>">
                                    </td>
                                </tr>
                                 <tr>
                                    <td> 
                                       <label>Seconder Name </label>
                                    </td>
                                    <td>
                                        <input type="text" name="secondery_name" id="secondery_name" class="form-control"  value="<?php if(set_value('secondery_name')){ echo set_value('secondery_name');} else { echo $memrd->secondery_name;} ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> 
                                       <label>By Accepting  Below Terms  & Conditions</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> 
 <label><input type="checkbox" name="terms_1" id="terms_1"   <?php if(set_value('terms_1')=='Terms & Conditions 1'){ echo 'checked'; } else { if(@$memrd->terms_1=='Terms & Conditions 1'){ echo 'checked'; } } ?>   value="Terms & Conditions 1"> <a href="<?=base_url('TermsAndCondition');?>"target="_blank"> Terms & Conditions</a></label>
                                    </td>
                                </tr>

                            </tbody>


                            <tfoot>
                                <tr>
                                    <td colspan="2" align="center">
                                     <a href="<?=base_url();?>Membership/MembershipStep2"  color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary mat-focus-indicator mat-flat-button mat-button-base mat-primary">
                                            <strong class="mat-button-wrapper text-white">Back </strong>
                                            <div matripple="" class="mat-ripple mat-button-ripple"></div>
                                            <div class="mat-button-focus-overlay"></div>
                                        </a> 
                                        
                                         <button _ngcontent-ngq-c157="" mat-flat-button="" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary">
                                            <span class="mat-button-wrapper">Next </span>
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
 
<!-- line modal -->
<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        </div>
        <div class="modal-body">
            <form action="" method="post">
              <div class="form-group">
                <label for="family_name" class="col-sm-6">Name</label>
                <div class="col-sm-6">
                   <input type="text" class="form-control" id="family_name" name="family_name" placeholder="Enter name"> 
                </div>
              </div>

              <div class="form-group">
                <label for="relation" class="col-sm-6">Relation</label>
                <div class="col-sm-6">
                   <input type="text" class="form-control" name="relation" id="relation" placeholder="Enter relation"> 
                </div>
              </div>



            <div class="form-group">
                <label for="occupation" class="col-sm-6">Occupation</label>
                <div class="col-sm-6">
                   <input type="text" class="form-control" name="occupation" id="occupation" placeholder="Enter occupation"> 
                </div>
            </div>

            <div class="form-group">
                <label for="mobile" class="col-sm-6">Mobile</label>
                <div class="col-sm-6">
                   <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter mobile"> 
                </div>
            </div>
             <div class="form-group">
                <label for="email" class="col-sm-6">Email</label>
                <div class="col-sm-6">
                   <input type="email" class="form-control" name="email" id="email" placeholder="Enter email"> 
                </div>
            </div>

             <div class="form-group">
                <label for="slnt_member" class="col-sm-6">SLNT Member</label>
                <div class="col-sm-6">
                   <select class="form-control" name="slnt_member" id="slnt_member">
                       <option value="Yes">Yes</option>
                       <option value="No">No</option>
                   </select>
                </div>
            </div>
              <button type="button" class="btn btn-default">Submit</button>
            </form>

        </div>
        <div class="modal-footer">
            <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
                </div>
              
            </div>
        </div>
    </div>
  </div>
</div>
<style type="text/css">
.modal.in .modal-dialog {
    -webkit-transform: translate(0,0);
    -ms-transform: translate(0,0);
    -o-transform: translate(0,0);
    transform: translate(0,0);
    z-index: 99999999 !important;
}
.center {
    margin-top:50px;   
}

.modal-header {
    padding-bottom: 5px;
}

.modal-footer {
        padding: 0;
    }
    
.modal-footer .btn-group button {
    height:40px;
    border-top-left-radius : 0;
    border-top-right-radius : 0;
    border: none;
    border-right: 1px solid #ddd;
}
    
.modal-footer .btn-group:last-child > button {
    border-right: 0;
}
.form-control{
    margin-top: 10px !important;
}
</style>
<style type="text/css">
.telephone, input, select, textarea {
    height: 60px !important;
    border-radius: 30px !important;
    padding: 0.85em 1.8em !important;
    margin-bottom: 5px !important;
    border: 2px solid #F6E0CE !important;
}

.wrapperBoard{
    width:100%;
}
.modal.in .modal-dialog {
    -webkit-transform: translate(0,0);
    -ms-transform: translate(0,0);
    -o-transform: translate(0,0);
    transform: translate(0,0);
    z-index: 99999999 !important;
}
.center, .membershipSection {
    margin-top:50px;   
}

.modal-header {
    padding-bottom: 5px;
}

.modal-footer {
        padding: 0;
    }
    
.modal-footer .btn-group button {
    height:40px;
    border-top-left-radius : 0;
    border-top-right-radius : 0;
    border: none;
    border-right: 1px solid #ddd;
}
    
.modal-footer .btn-group:last-child > button {
    border-right: 0;
}
.form-control{
    margin-top: 10px !important;
}

 @media only screen and (max-width: 799px) {
   table.tbl_custom tbody th,tr,td{
     display:block!important;
 }
 table.tbl_custom thead{
     display:none!important;
 }
 .tmobile{
     display:block;
     color:#000;
     font-size:20px!important;
     padding:6px 0px;
 }
  .footer-section::before {
    width: 280px!important;
    height: 280px!important;
    top: -8%!important;
}
}

 @media only screen and (min-width: 800px) {
 .tmobile{
     display:none;
 }
}
</style>