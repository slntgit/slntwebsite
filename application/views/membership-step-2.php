
<div class="tab-pane   in active " id="profile">
<?php 
    $lastmember = $user_membership->row();
    
    @$memrd = $user_memberfirst->row();
?>
<form method="post" action="<?=base_url();?>Membership/MembershipStep2/saveStep2"> 

<div class="row">
    <div class="col-sm-12">
            <div class="table-reasponsive">
                <table class="table table-reasponsive table-bordered table-striped table-hover tbl_custom">
                    <thead>
                        
                        <tr>
                            <th align="left" colspan="2">
                                <h3 class="head text-left memberShipName">Welcome: <span><?=$userDetails->first_name?> <?=$userDetails->last_name?></span></h3>
                            </th>
                        </tr>
            
            
            
                        <tr>
                            <th align="left" colspan="2">
                           
                                    <p class="text-left">
                                        Your selected membership plan!
                                    </p>
                          
                <div class="text-left">
                    <?php foreach($data_membership->result() as $mem_data){

                    if($lastmember->sel_member_id==$mem_data->id){  ?>
                    <label for="sel_mem_<?=$mem_data->id;?>">
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
                                    <td colspan="2"><h3>Employment Details </h3></td>
                                </tr>
                                 <tr>
                                    <td>Occupation <abbr class="text-danger">*</abbr> </td>
                                    <td> <div class="row">
                                                <div class="col-sm-12">
<input type="text" name="occupation" id="occupation2" value="<?php if(set_value('occupation')){ echo set_value('occupation');} else { echo $memrd->occupation;} ?>" class="form-control">
                                                      <?=form_error('occupation');?>
                                                </div>
                                            </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Name Of  Firm <abbr class="text-danger">*</abbr> </td>
                                    <td> <div class="row">
                                                <div class="col-sm-12">
<input type="text" name="name_of_firm" id="name_of_firm" value="<?php if(set_value('name_of_firm')){ echo set_value('name_of_firm');} else { echo $memrd->name_of_firm;} ?>" class="form-control">
                                                      <?=form_error('name_of_firm');?>
                                                </div>
                                            </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Address <abbr class="text-danger">*</abbr> </td>
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
                                    <td> Tel. <abbr class="text-danger">*</abbr></td>
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
                                    <td>Email <abbr class="text-danger">*</abbr></td>
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
                        $this->db->where(array('user_id'=>$_COOKIE["login_user"]));
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


                            <tfoot>
                                <tr>
                                    <td colspan="2" align="center">
                                   

                                         <a href="<?=base_url();?>Membership/buyNow/<?=$lastmember->sel_member_id;?>"  color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary mat-focus-indicator mat-flat-button mat-button-base mat-primary"style="margin-bottom: 41px;" >
                                            <strong class="mat-button-wrapper text-white">Back </strong>
                                            <div matripple="" class="mat-ripple mat-button-ripple"></div>
                                            <div class="mat-button-focus-overlay"></div>
                                        </a> 
                                        
                                        
                                        <button _ngcontent-ngq-c157="" mat-flat-button="" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary" style="margin-bottom: 41px;">
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
                                                  <input type="tel" name="mobile" id="mobile"  minlength="8" maxlength="8" class="form-control number"  value="<?=set_value('mobile');?>">
                                                    <?=form_error('mobile');?>
                                                </div>
                                            </div>
                                            
                                            
                                            
                </div>
            </div>
             <div class="form-group  row">
                <label for="email" class="col-sm-4">Email</label>
                <div class="col-sm-8">
                   <input type="email" class="form-control" name="email" id="email" placeholder="Enter email"> 
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
.center, .membershipSection {
    margin-top:50px;   
}
.modal.in .modal-dialog {
    -webkit-transform: translate(0,0);
    -ms-transform: translate(0,0);
    -o-transform: translate(0,0);
    transform: translate(0,0);
    z-index: 99999999 !important;
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
<script type="text/javascript">
    $('.submitFamilyFormFIll').on('click',function(){
        var family_name=$('#family_name').val();
        var relation=$('#relation').val();
        var occupation=$('#occupation').val();
        var mobile=$('#mobile').val();
        var email=$('#email').val();
        var slnt_member=$('#slnt_member').val();
        var queryString='family_name='+family_name+'&relation='+relation+'&occupation='+occupation+'&mobile='+mobile+'&email='+email+'&slnt_member='+slnt_member;
                $.ajax({
                       type: "post",
                       url: '<?php echo site_url('Cart/SaveFamily');?>',
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
                                $('#mobile').val('');
                                $('#email').val('');
                                $('#slnt_member').val('');
                                $('#ss').hide(10000); 
                           }
                            
                            //window.location.href=window.location.href;
                       },
                       error: function(){      
                        alert('Error while request..');
                    }
                });
    });

 function deleteMem(str){
     //base_url()Cart/Remove/
                    $.ajax({
                       type: "post",
                       url: '<?php echo site_url('Cart/Remove');?>/'+str,
                       cache: false, 
                       data:str,
                       success: function(response){
                            $('#familyListUser').html(response);
                       },
                       error: function(){      
                        alert('Error while request..');
                    }
                });
 }

</script>