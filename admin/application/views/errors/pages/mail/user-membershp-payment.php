<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
	<div class="mainpanel">
	 
	<div class="contentpanel">		
		<div class="row">	
			 <div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
						<div class="">
								<?php echo $this->session->flashdata('success');?>  
 						 		<table  cellpadding="0" cellspacing="0" border="0" class="table table-bordered tableList">
               
                            <tbody>
                                <tr>
                                     <td  style="padding: 4px 4px; border:1px solid;  text-align: left !important;">Application ID : <?=$lastmember->membership_id;?></td>
                                     <td  style="padding: 4px 4px; border:1px solid;  text-align: left !important;">Applied Date <?=date('d-M-Y',strtotime($lastmember->membership_buy));?> </td>
                                     <td colspan="2"  style="padding: 4px 4px; border:1px solid;  text-align: left !important;">Application Status : 
                                        <?php if($lastmember->pay_status==0){ ?>
                                            Pending
                                        <?php } else { ?>
                                            Success
                                        <?php }?>
                                        

                                    </td>
                               
                                </tr>

                                <tr>
                                    <td  style="padding: 4px 4px; border:1px solid;  text-align: left !important;" colspan="4">Membership Of Professional Organization / Club </td>
                                </tr>
                                

                                 <tr>
                                     <td  style="padding: 4px 4px; border:1px solid;  text-align: left !important;">Memebership Type *</td>
                                     <td colspan="3"   style="padding: 4px 4px; border:1px solid;  text-align: left !important;"> 
<?=$lastmember->membership_title;?>
                                    </td>
                                </tr>

                                <tr>
                                     <td  style="padding: 4px 4px; border:1px solid;  text-align: left !important;">Name * </td>
                                     <td colspan="3"   style="padding: 4px 4px; border:1px solid;  text-align: left !important;"> 
<?=$lastmember->name_title;?> <?=$lastmember->name_as_nric;?>
                                    </td>
                                </tr> <tr>
                                     <td  style="padding: 4px 4px; border:1px solid;  text-align: left !important;">Gender * </td>
                                     <td colspan="3"   style="padding: 4px 4px; border:1px solid;  text-align: left !important;"> 
<?=$lastmember->gende;?>
                                    </td>
                                </tr> <tr>
                                     <td  style="padding: 4px 4px; border:1px solid;  text-align: left !important;">NRIC / PassPort Number * </td>
                                     <td colspan="3"   style="padding: 4px 4px; border:1px solid;  text-align: left !important;"> 
<?=$lastmember->nric_passport;?>
                                    </td>
                                </tr> <tr>
                                     <td  style="padding: 4px 4px; border:1px solid;  text-align: left !important;">Date Of Birth * </td>
                                     <td colspan="3"   style="padding: 4px 4px; border:1px solid;  text-align: left !important;"> 
<?=$lastmember->days;?>-<?=$lastmember->month;?>-<?=$lastmember->year;?>
                                    </td>
                                </tr> <tr>
                                     <td  style="padding: 4px 4px; border:1px solid;  text-align: left !important;">Nationality * </td>
                                     <td colspan="3"   style="padding: 4px 4px; border:1px solid;  text-align: left !important;"> 
<?=$lastmember->nationality;?> 
                                    </td>
                                </tr> <tr>
                                     <td  style="padding: 4px 4px; border:1px solid;  text-align: left !important;">Address * </td>
                                     <td colspan="3"   style="padding: 4px 4px; border:1px solid;  text-align: left !important;"> 
<?=$lastmember->address_1;?> <?=$lastmember->address_2;?> 
                                    </td>
                                </tr> <tr>
                                     <td  style="padding: 4px 4px; border:1px solid;  text-align: left !important;">Home Tel. * </td>
                                     <td colspan="3"   style="padding: 4px 4px; border:1px solid;  text-align: left !important;"> +65 
<?=$lastmember->home_tel;?>
                                    </td>
                                </tr> <tr>
                                     <td  style="padding: 4px 4px; border:1px solid;  text-align: left !important;">Mobile  * </td>
                                     <td colspan="3"   style="padding: 4px 4px; border:1px solid;  text-align: left !important;"> +65
<?=$lastmember->mobile;?>
                                    </td>
                                </tr> <tr>
                                     <td  style="padding: 4px 4px; border:1px solid;  text-align: left !important;">Email * </td>
                                     <td colspan="3"   style="padding: 4px 4px; border:1px solid;  text-align: left !important;"> 
<?=$lastmember->email;?>
                                    </td>
                                </tr> <tr>
                                     <td  style="padding: 4px 4px; border:1px solid;  text-align: left !important;">Marital Status * </td>
                                     <td colspan="3"   style="padding: 4px 4px; border:1px solid;  text-align: left !important;"> 
<?=$lastmember->marital_status;?>
                                    </td>
                                </tr> <tr>

                                     <td  style="padding: 4px 4px; border:1px solid;  text-align: left !important;"> 
                                        Occupation
                                    </td>
                                     <td colspan="3"   style="padding: 4px 4px; border:1px solid;  text-align: left !important;"> 
<?=$lastmember->occupation;?>
                                    </td>
                                </tr> <tr>
                                     <td  style="padding: 4px 4px; border:1px solid;  text-align: left !important;">Name Of Firm * </td>
                                     <td colspan="3"   style="padding: 4px 4px; border:1px solid;  text-align: left !important;"> 
<?=$lastmember->name_of_firm;?>
                                    </td>
                                </tr> <tr>
                                     <td  style="padding: 4px 4px; border:1px solid;  text-align: left !important;">Address * </td>
                                     <td colspan="3"   style="padding: 4px 4px; border:1px solid;  text-align: left !important;">
<?=$lastmember->emp_address_1;?> <?=$lastmember->emp_postalcode;?>
                                    </td>
                                </tr> <tr>
                                     <td  style="padding: 4px 4px; border:1px solid;  text-align: left !important;">Tel. * </td>
                                     <td colspan="3"   style="padding: 4px 4px; border:1px solid;  text-align: left !important;"> +65 
<?=$lastmember->emp_tel;?>
                                    </td>
                                </tr> 
                                <tr>
                                     <td  style="padding: 4px 4px; border:1px solid;  text-align: left !important;">Email * </td>
                                     <td colspan="3"   style="padding: 4px 4px; border:1px solid;  text-align: left !important;"> 
<?=$lastmember->emp_email;?>
                                    </td>
                                </tr>
                               	<tr>
                                     <td  style="padding: 4px 4px; border:1px solid;  text-align: left !important;">Amount  </td>
                                     <td colspan="3"   style="padding: 4px 4px; border:1px solid;  text-align: left !important;"> $
<?=$lastmember->membership_amount;?> SGD
                                    </td>
                                </tr>
                                
                                
                                	<tr> 
                                     <td colspan="4"   style="padding: 4px 4px; border:1px solid;  text-align: right !important;">
                                           <?php if($lastmember->userfile!=''){ ?>
                                         <img src="<?=base_url();?>../assets/profile/<?=$lastmember->userfile;?>" id="profi" style="max-width:250px !important; width:250px !important;" />
                                         
                                        <?php }?>  
                                    </td>
                                </tr>  
                                
                                
<?php if($lastmember->status==0){ ?>
<tr>
    <td colspan="4" align="center">
           <a href="<?=base_url()?>../Membership/MembershipPay/<?=$lastmember->id;?>" class="btn btn-success" target="_blank">Proceed & Pay of $
<?=$lastmember->membership_amount;?> SGD
    </td>
</tr>
 <?php } ?>

                            </tbody>


                    </table>
						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
	
</div>
</body>
</html>