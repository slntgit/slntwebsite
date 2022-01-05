 
<?php                
    $memrd= $user_membership->row();

//    print_r($memrd);
// $membership_expire=$memrd->membership_expire;
// $membership_buy=$memrd->membership_buy;
// $membership_days=$memrd->membership_days;   
// $membership_expire = date('Y-m-d',strtotime($membership_expire));
// $membership_buy = date('Y-m-d',strtotime($membership_buy));
// $date2 = date("Y-m-d",strtotime($membership_expire));
// $date1 = date("Y-m-d",strtotime($membership_buy));
//  $diff = strtotime($date2) - strtotime($date1);
// echo $dateDiff  = abs(round($diff / 86400));
//exit();
//$years = floor($diff / (365*60*60*24));
///$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
//$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
//$expirydate=date('Ymd',strtotime($membership_expire."-20 Days"));  
                    if ($dayepired>15) {
                         redirect('Ceremonies/ChoosEvents');
                    } 
                 
?>
    <form method="post" action="<?=base_url();?>Ceremonies/buyNowMembership"> 
       <h3 class="head text-left">Welcome <?=$userDetails->first_name?> <?=$userDetails->last_name?></h3>
       <h2>Your membership details are as below.</h2>
 <div class="row">
    <div class="col-sm-12">
            <div class="table-reasponsive">
                <table class="table table-reasponsive table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th align="center" colspan="2">
<p class="text-center text-danger">
    

Your membership

<?php if($dayepired<0){ ?>
  was  expired  on Date : <?= date('d-m-Y',strtotime($membership_expire));?>. 
<?php  } else { ?> 
    is  expiring  within <?= $dayepired;?> days.
<?php } ?>  

If you want to have Pooja booking with membership price, Would you like to renew your membership with current Pooja Booking? If so, You wil get membership price for current Pooja Booking.
</p>
                <div class="text-center">
                    <?php foreach($data_membership->result() as $mem_data){ 
                        if ($mem_data->id==$memrd->sel_member_id) {
                          

                        ?>
                    <label class="btn btn-default btn-lg" for="sel_mem_<?=$mem_data->id;?>">
                            Renewal Amount For 
                                <?=$mem_data->title;?> Package$ <br />SGD <?=$mem_data->membership_amount;?> For <?=$mem_data->membership_days;?>   Days     
                    </label>
    
 <?php
                        }

                     } ?>
 
                </div>
                </th>
            </tr>
                        </thead>
                            <tbody>
                                 
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
                                                
                                                <div class="col-sm-12">
                                                    <?=$memrd->name_title;?>
                                                     <?=$memrd->name_as_nric;?>
                                                </div>
                                            </div>
                                    </td>
                                </tr>
                                 <tr>
                                    <td> <label for="gende">Gender</label> </td>
                                    <td> <div class="row">
                                                <div class="col-sm-12">
                                                <?=$memrd->gende;?>
                                                </div>
                                            </div>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>NRIC / PassPort Number </td>
                                    <td> <div class="row">
                                                <div class="col-sm-12">
                                                     <?=$memrd->nric_passport;?>
                                                </div>
                                            </div>
                                    </td>
                                </tr>
                                 <tr>
                                    <td> Date Of Birth</td>
                                    <td> <div class="row">
                                        <div class="col-sm-12">

                                            <?=$memrd->days;?>-<?=$memrd->month;?>-<?=$memrd->year;?>

                                        </div>
                                    
                                                
                                            </div>
                                    </td>
                                </tr>
                                 <tr>
                                    <td> Nationality</td>
                                    <td> <div class="row">
                                                <div class="col-sm-12">
                                                    <?php 
                                                    echo $memrd->nationality;  
                                                        if ($memrd->nationality=='Other') {
                                                            echo ' ('. $memrd->nationality_other.')';
                                                        } else {
                                                            
                                                        }
                                                    ?>

                                                   
                                                </div>
                                                
                                            </div>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>Address</td>
                                    <td> <div class="row">
                                                <div class="col-sm-6">
                                              
                                        <?=$memrd->address_1;?>
                                                </div>
                                                <div class="col-sm-6">
                                    
                                        <?=$memrd->address_2;?>
                                                </div>

                                                <div class="col-sm-6">
                                                    <br />

                                                    <?=$memrd->postal_code;?>
                                                    
                                                </div>
                                            </div>
                                    </td>
                                </tr>
                                 <tr>
                                    <td> Home Tel </td>
                                    <td> <div class="row">
                                                <div class="col-sm-12">
                                                  +65 <?=$memrd->home_tel;?>
                                                </div>
                                               
                                            </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> Mobile </td>
                                    <td> <div class="row">
                                                <div class="col-sm-12">
                                                     +65 <?=$memrd->mobile;?>
                                                </div>
                                            </div>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>Email </td>
                                    <td> 
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <?=$memrd->email;?>
                                               
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                 <tr>
                                    <td> Marital Status</td>
                                    <td> 
                                        <div class="row">
                                                <div class="col-sm-12">
                                                     <?=$memrd->marital_status;?>
                                                </div>
                                               
                                            </div>
                                    </td>
                                </tr>
                            </tbody>


                            <tfoot>
                                <tr>
                                    <td colspan="2">
                                    <a href="<?=base_url();?>Ceremonies/ChoosEvents" mat-flat-button="" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary text-white">
                                            <span class="mat-button-wrapper">Skip & Proceed</span>
                                            <div matripple="" class="mat-ripple mat-button-ripple"></div>
                                            <div class="mat-button-focus-overlay"></div>
                                        </a>  

                                        <!--   <a href="<?=base_url();?>Dashboard/MyMembership" mat-flat-button="" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary text-white pull-right">
                                            <span class="mat-button-wrapper">Renew / Proceed</span>
                                            <div matripple="" class="mat-ripple mat-button-ripple"></div>
                                            <div class="mat-button-focus-overlay"></div>
                                        </a>   -->



                                        <button _ngcontent-ngq-c157="" mat-flat-button="" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary pull-right">
                                            <span class="mat-button-wrapper">Renew / Buy & Proceed</span>
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
 