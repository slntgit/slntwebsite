<div class="panel-heading">
    <div class="row">
        <div class="col-xs-12">
            <a href="#" class="active col-xs-6" id="login-form-link">Login</a>
            <a href="#" class="active col-xs-6" id="register-form-link">Register</a>
        </div>
    </div>
</div>
<hr>
<div class="panel-body">
    <div class="row">
    <div class="col-lg-12 ">
        <form id="login-form" action="<?=base_url();?>pujaBooking/login/" method="post" role="form" <?php if($this->uri->segment(2)=='' or $this->uri->segment(2)=='login'){ ?> style="display: block;" <?php } else { ?> style="display: none;" <?php } ?>>
        <div class="col-lg-6 col-md-offset-3">
            <?php echo $this->session->flashdata('success');?>
                <div class="form-group">
                <label>Username <abbr class="text-danger">*</abbr> </label>
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="<?php if(isset($_COOKIE["rem_user"])) {  echo $_COOKIE["rem_user"]; } ?>">
                    <?=form_error('username');?>
                </div>
                <div class="form-group">
                <label>Password <abbr class="text-danger">*</abbr></label>
                    <input value="<?php if(isset($_COOKIE["rem_pass"])) {  echo $_COOKIE["rem_pass"]; } ?>" type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                <?=form_error('password');?>
                </div>
                <div class="form-group text-center">
                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                        <label for="remember"> Remember Me</label>
                </div>
                <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                              

<button _ngcontent-ngq-c157="" mat-flat-button="" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary">
                <span class="mat-button-wrapper">Login & Proceed</span>
                <div matripple="" class="mat-ripple mat-button-ripple"></div>
                <div class="mat-button-focus-overlay"></div>
            </button>   
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center">
            <a href="<?=base_url();?>pujaBooking/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>
</div>
</form>

<form id="register-form" action="<?=base_url();?>pujaBooking/register/" method="post" role="form" <?php if($this->uri->segment(2)=='register'){ ?> style="display: block;" <?php } else { ?> style="display: none;" <?php } ?>>
                                    
<div class="row">
    <div class="col-md-4 col-sm-6">
        <div class="form-group">
            <label for="name_title">Name Prefix <abbr class="text-danger">*</abbr></label>
              <select class="form-control" id="name_title" name="name_title">
                  <option <?php if(set_value('name_title')=='Mr'){ echo 'selected'; }?> value="Mr">Mr.</option>
                  <option <?php if(set_value('name_title')=='Mrs'){ echo 'selected'; }?>  value="Mrs">Mrs.</option>
                  <option <?php if(set_value('name_title')=='Ms'){ echo 'selected'; }?>  value="Ms">Ms.</option>
              </select>
              <?=form_error('name_title');?>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="form-group">
            <label for="first_name">First Name <abbr class="text-danger">*</abbr></label>
            <input type="text" name="first_name" id="first_name" tabindex="1" class="form-control" placeholder="First name" value="<?=set_value('first_name');?>">
            <?=form_error('first_name');?>
        </div>
    </div>

    <div class="col-md-4 col-sm-6">
        <div class="form-group">
            <label for="last_name">Last Name <abbr class="text-danger">*</abbr></label>
            <input type="text" name="last_name" id="last_name" tabindex="1" class="form-control" placeholder="Last name" value="<?=set_value('last_name');?>">
            <?=form_error('last_name');?>
        </div>
    </div>
        <div class="col-md-6 col-sm-6">
        <div class="form-group">
            <label for="email">Email  <abbr class="text-danger">*</abbr></label>
            <input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="<?=set_value('email');?>">
            <?=form_error('email');?>
        </div>
    </div>                              

    <div class="col-md-6 col-sm-6">
        <div class="form-group">
            <label for="mobile" class="col-sm-12">Mobile  <abbr class="text-danger">*</abbr></label>
            <div class="row">
                <div class="col-sm-3">
                    <input type="text" name="mobile_code" id="mobile_code"  class="form-control" readonly="" disabled=""  value="+65">    
                </div>
                <div class="col-sm-9">
                    <input type="tel" name="mobile" id="mobile" tabindex="1" class="form-control telephone" placeholder="Mobile" value="<?=set_value('mobile');?>"  maxlength="8">
                </div>

            </div>
            
            
            
            <?=form_error('mobile');?>
    </div>
    </div>    
    <div class="col-md-4 col-sm-6">
        <div class="form-group">
            <label for="password">Password  <abbr class="text-danger">*</abbr></label>
            <input type="password" name="password" id="password" tabindex="1" class="form-control" placeholder="Password" value="">
            <?=form_error('password');?>
    </div>
    </div>         

        <div class="col-md-4 col-sm-6">
        <div class="form-group">
            <label for="confirm_password">Confirm Password  <abbr class="text-danger">*</abbr></label>
            <input type="password" name="confirm_password" id="confirm_password" tabindex="1" class="form-control" placeholder="Confirm Password" value="">
            <?=form_error('confirm_password');?>
        </div>
    </div>    
    <div class="col-md-4 col-sm-6">
        <div class="form-group">
            <label for="office_number">Office Number </label>
            <input type="tel" name="office_number" id="office_number" tabindex="1" class="form-control telephone" placeholder="Office Number" value="<?=set_value('office_number');?>"  maxlength="8">
             <?=form_error('office_number');?>
        </div>
    </div>    

    <div class="col-md-12 col-sm-12">
        <div class="form-group">
            <label for="address_1"> Address 1</label>
            <input type="text" name="address_1" id="address_1" tabindex="1" class="form-control" placeholder="Address 1" value="<?=set_value('address_1');?>">
             <?=form_error('address_1');?>
       </div>
    </div> 

    <div class="col-md-12 col-sm-12">
        <div class="form-group">
            <label for="address_2"> Address 2</label>
            <input type="text" name="address_2" id="address_2" tabindex="1" class="form-control" placeholder="Address 2" value="<?=set_value('address_2');?>">
             <?=form_error('address_2');?>
        </div>
    </div> 
        <div class="col-md-4 col-sm-4">
        <div class="form-group">
            <label for="postal_code">Postal Code <abbr>*</abbr></label>
            <input type="text" name="postal_code" id="postal_code" tabindex="1" class="form-control" placeholder="Postal Code" value="<?=set_value('postal_code');?>">
             <?=form_error('postal_code');?>
        </div>
    </div> 

</div>
<div class="form-group">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            
            <button _ngcontent-ngq-c157="" mat-flat-button="" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary">
                <span class="mat-button-wrapper">Register & Proceed</span>
                <div matripple="" class="mat-ripple mat-button-ripple"></div>
                <div class="mat-button-focus-overlay"></div>
            </button>  
        </div>
    </div>
</div>
</form>
        </div>
    </div>
</div> 