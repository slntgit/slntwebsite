                <div _ngcontent-ngq-c159="" class="main-site  about-main-site">
                    <app-landing-home _nghost-ngq-c160="" class="ng-star-inserted">
                        <section class="section-gap banner-section-inner aboutUs-page">
                                <div class="overlay"></div>
                                <div class="container">
                                    <section class="header-title d-flex justify-content-center align-content-center">
                                        <h1 class="title">Membership Plans</h1>
                                    </section>
                                </div>
                        </section>
                        
                    </app-landing-home>
                <div class="container bg-gradient membershipSection p-5">
                    <?php if (isset($_COOKIE["login_user"])) {
                        $this->db->select('*');
						$this->db->from('slnt_user_membership');
                        $this->db->where(array('user_id'=>$_COOKIE["login_user"],'pay_status'=>1,'final_submit_status'=>1,'status'=>1)); 
                        $this->db->order_by('id','DESC');
						$this->db->limit(1);
						$user_membership = $this->db->get();
						if($user_membership->num_rows()>0){
						     
						    $memrd= $user_membership->row();
                            $membership_expire=$memrd->membership_expire; 
                            $membership_buy=$memrd->membership_buy; 
                            $membership_days=$memrd->membership_days; 
                            $todaydate = date('Ymd');
                            $leftdays=$membership_expire-$todaydate;
                            $date1=date_create(date('Y-m-d'));
                            $date2=date_create(date('Y-m-d',strtotime($membership_expire)));
                            $diff=date_diff($date1,$date2);
                            $chk =$diff->format("%R%a"); 
                            $states=0.00;
                             if($chk>=0 && $chk<=30){
                                 $states='is expiring within '.$chk;
                            } else if($chk<0){
                                $states='was expired overdue '.$chk;
                            }
                            $this->db->select('*');
    						$this->db->from('slnt_member');
    						$this->db->where(array('user_id'=>$_COOKIE["login_user"]));
    						$userDetails=$this->db->get()->row();
                        ?>
                             <h1 class="head text-left memberShipName">Welcome: <span><?=$userDetails->first_name?> <?=$userDetails->last_name?></span></h1>
                                <h4>You are already member with <?=$memrd->membership_title;?> membership.</h4>
                                <h3>Your membership details are as below.</h3>
<?php  if($chk<=30){ ?>
 
    <div class="col-sm-12">
            <div class="table-reasponsive">
                    <table class="table table-reasponsive table-bordered table-striped tableList">
                        <thead>
                            <tr>
                                <th align="center" colspan="2">
                                    <p class="text-center" style="    color: #ffefe2;">
                                        Your membership <?= $states;?> days. If you want to have Pooja booking with membership price, Would you like to renew your membership with current Pooja Booking? If so, You wil get membership price for current Pooja Booking.
                                    </p>
                   
                    </th>
                </tr>
            </thead>
            </table>
        </div>
    </div>
                    <?php }
						}
                     }
                ?>
                    
                    
                    <div class="row m-auto text-center">
        
                        <?php 
                            foreach ($membership_list as $membershipresult) {
                            
                        ?>


                        <div class="col-md-3 princing-item red">
                            <div class="wapperMember">
                                <div class="pricing-divider ">
                                    <h3><?=$membershipresult->title;?></h3>
                                    <!--<h4 class="my-0 display-2  font-weight-normal mb-3"><span class="h3">$</span> <?=$membershipresult->membership_amount;?> <span class="h5">/<?=$membershipresult->membership_days;?> Days</span></h4>-->
                                    <h4 class="my-0 display-2  font-weight-normal mb-3"><span class="h3">$</span> <?=$membershipresult->membership_amount;?></h4>
                                </div>
                                <div class="card-body mt-0">
                                    <?=$membershipresult->description;?>
                                    <a href="<?=base_url();?>Membership/buyNow/<?=$membershipresult->id;?>" class="btn btn-lg btn-block  btn-custom text-light">Apply Now</a>
                                </div>
                            </div>
                        </div>
       <?php   
    } ?>     
        <div class="col-sm-12 text-center">
          
             <?php 
             
             if($_SESSION['user']['last']=='poojaBooking' || $_SESSION['user']['last']=='poojaBooking/' || $_SESSION['user']['last']=='poojaBooking/Membership/' || $_SESSION['user']['last']=='Ceremonies/ChoosEvents'){  ?>
             <br /> <br />
     <center>


      <?php if($_SESSION['user']['last']=='Ceremonies/ChoosEvents'){ ?>
         <a href="<?=base_url();?><?=$_SESSION['user']['last'];?>?action=skip" mat-flat-button="" color="primary"class="btn btn-lg  btn-custom text-light">
      <?php  } else { ?>
        <a href="<?=base_url();?>poojaBooking/skip" mat-flat-button="" color="primary"class="btn btn-lg  btn-custom text-light">
      <?php  } ?>
                <span class="mat-button-wrapper">Skip & Continue</span>
                <div matripple="" class="mat-ripple mat-button-ripple"></div>
                <div class="mat-button-focus-overlay"></div>
            </a> 
</center> 
        <?php } ?>
           
    </div>     
              
      </div>
    </div>
</div>
<style>
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
</style>