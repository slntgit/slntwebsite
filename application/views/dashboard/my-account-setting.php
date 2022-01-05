  
    <div class="container-fluid">
        <div class="row">
                            <div class="col-md-12">
                                <br />
                        <section  class="header-title text-center">
                            <h2   class="title">About Shree Lakshminarayan Temple</h2>
                        </section></div>
    <div class="board">

<div class="tab-content">
<!-- Login & MemberShip Plan  -->
 
 
<div class="tab-pane fade  in active " id="home">
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-login">
  <?php echo $this->session->flashdata('success');?>
<form id="register-form" action="<?=base_url();?>Dashboard/MyAccountSetting/?action=doUpdate" method="post" role="form"  style="display: block;"  >
<div class="row">
    <div class="col-md-4 col-sm-6">
        <div class="form-group">
            <label for="name_title">Name Prefix <abbr class="text-danger">*</abbr></label>
              <select class="form-control" id="name_title" name="name_title">
                    <option value="Mr" <?php if($userDetails->name_title=='Mr'){ echo 'seleted'; } ?>>Mr.</option>
                    <option value="Madam" <?php if($userDetails->name_title=='Madam'){ echo 'seleted'; } ?>>Madam.</option>
                    <option value="Miss" <?php if($userDetails->name_title=='Mss'){ echo 'seleted'; } ?>>Miss.</option>
                    <option value="Dr" <?php if($userDetails->name_title=='Dr'){ echo 'seleted'; } ?>>Dr.</option>
                    <option value="A/Prof" <?php if($userDetails->name_title=='A/Prof'){ echo 'seleted'; } ?>>A/Prof.</option>
                    <option value="Prof" <?php if($userDetails->name_title=='Prof'){ echo 'seleted'; } ?>>Prof.</option>
              </select>
              <?=form_error('name_title');?>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="form-group">
            <label for="first_name">First Name <abbr class="text-danger">*</abbr></label>
            <input type="text" name="first_name" id="first_name" tabindex="1" class="form-control alphabet" placeholder="First name" value="<?=$userDetails->first_name;?>">
            <?=form_error('first_name');?>
        </div>
    </div>

    <div class="col-md-4 col-sm-6">
        <div class="form-group">
            <label for="last_name">Last Name <abbr class="text-danger">*</abbr></label>
            <input type="text" name="last_name" id="last_name" tabindex="1" class="form-control alphabet" placeholder="Last name" value="<?=$userDetails->last_name;?>">
            <?=form_error('last_name');?>
        </div>
    </div>
        <div class="col-md-12 col-sm-12">
        <div class="form-group">
            <label for="email">Email  <abbr class="text-danger">*</abbr></label>
            <input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="<?=$userDetails->email;?>">
            <?=form_error('email');?>
        </div>
    </div>                              

    <div class="col-md-7 col-sm-6">
        <div class="form-group">
            <label for="mobile" class="col-sm-12">Mobile  <abbr class="text-danger">*</abbr></label>
            <div class="row">
                <div class="col-sm-4">
                    <input type="text" name="mobile_code" id="mobile_code"  class="form-control" readonly="" disabled=""  value="+65">    
                </div>
                <div class="col-sm-8">
                    <input type="tel" name="mobile" id="mobile" tabindex="1" class="form-control telephone number" placeholder="Mobile" value="<?=$userDetails->mobile;?>"  maxlength="8">
                </div>

            </div>
            
            
            
            <?=form_error('mobile');?>
    </div>
    </div>   
    <div class="col-md-5 col-sm-6">
        <div class="form-group">
            <label for="office_number">Office Number </label>
            <input type="tel" name="office_number" id="office_number" tabindex="1" class="form-control telephone number" placeholder="Office Number" value="<?=$userDetails->office_number;?>"  maxlength="8">
             <?=form_error('office_number');?>
        </div>
    </div>    
    <div class="col-md-12 col-sm-12">
        <h3>Enter password if you want change </h3>
    </div>
    <div class="col-md-6 col-sm-6">
        <div class="form-group">
            <label for="password">Password  <abbr class="text-danger">*</abbr></label>
            <input type="password" name="password" id="password" tabindex="1" class="form-control" placeholder="Password" value="">
            <?=form_error('password');?>
    </div>
    </div>         

        <div class="col-md-6 col-sm-6">
        <div class="form-group">
            <label for="confirm_password">Confirm Password  <abbr class="text-danger">*</abbr></label>
            <input type="password" name="confirm_password" id="confirm_password" tabindex="1" class="form-control" placeholder="Confirm Password" value="">
            <?=form_error('confirm_password');?>
        </div>
    </div>    
    

    <div class="col-md-12 col-sm-12">
        <div class="form-group">
            <label for="address_1"> Address 1</label>
            <input type="text" name="address_1" id="address_1" tabindex="1" class="form-control" placeholder="Address 1" value="<?=$userDetails->address_1;?>">
             <?=form_error('address_1');?>
       </div>
    </div> 

    <div class="col-md-12 col-sm-12">
        <div class="form-group">
            <label for="address_2"> Address 2</label>
            <input type="text" name="address_2" id="address_2" tabindex="1" class="form-control" placeholder="Address 2" value="<?=$userDetails->address_2;?>">
             <?=form_error('address_2');?>
        </div>
    </div> 
        <div class="col-md-4 col-sm-4">
        <div class="form-group">
            <label for="postal_code">Postal Code <abbr>*</abbr></label>
            <input type="text" name="postal_code" id="postal_code" tabindex="1" class="form-control number" maxlength="6" minlength="6" placeholder="Postal Code" value="<?=$userDetails->postal_code;?>">
             <?=form_error('postal_code');?>
        </div>
    </div> 

</div>
<div class="form-group">
    <div class="row">
        <div class="col-sm-12">
            <button _ngcontent-ngq-c157="" mat-flat-button="" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary">
                <span class="mat-button-wrapper">Update</span>
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
    </div>
 
 
                    <div class="clearfix"></div>
                </div>
            </div>
  
        </div>
    </div>
 
                
                