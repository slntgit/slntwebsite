
<div class="tab-pane fade  <?php if($this->uri->segment(2)=='Membership_success'){ ?> in active <?php } ?>" id="profile">
    <form method="post" action="<?=base_url();?>pujaBooking/Membership/buyNow">           
        <h3 class="head text-left">Welcome back <?=$userDetails->first_name?> <?=$userDetails->last_name?></h3>
        <div class="row">
            <div class="col-sm-12">
                <div class="table-reasponsive">
                    <h2>Your payment completed successfully.</h2>
                    <h4>Now you complete your booking with membership price</h4>

                     <a href="<?=base_url();?>pujaBooking/Services-Date-Time" mat-flat-button="" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary text-white">
                                            <span class="mat-button-wrapper">Next & Proceed</span>
                                            <div matripple="" class="mat-ripple mat-button-ripple"></div>
                                            <div class="mat-button-focus-overlay"></div>
                                        </a>  

                </div>
            </div>
        </div>
    </form>
</div>