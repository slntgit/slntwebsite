<?php if(@$this->input->post('amount')!=''){ $_SESSION['amount']=$this->input->post('amount');}?>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/events.css">
<div _ngcontent-ngq-c159="" class="main-site about-main-site">
        <app-landing-home _nghost-ngq-c160="" class="ng-star-inserted">
        <section class="section-gap banner-section-inner aboutUs-page">
            <div class="overlay"></div>
            <div class="container">
                <section class="header-title d-flex justify-content-center align-content-center">
                    <h1 class="title">Donation</h1>
                </section>
            </div>
        </section>
<section _ngcontent-ngq-c160="" class="about-section">
    <div _ngcontent-ngq-c160="" class="container">
    <form class="form-horizontal form-pricing" method="post" action="<?=base_url();?>Donation/PayNow" role="form">
    <div class="price-form">
      
<div id="member_yes_not">

<?php if($this->uri->segment(3)=='Cancel'){ ?>
    <h1 class="text-danger">Donation transaction was cancelled!</h1>
<?php } ?>





 <?php if (isset($_COOKIE["login_user"])) { } else {?>
 
    <div class="row donation-section donationSectionPage">
        <div class="col-sm-12">
            <?php if (isset($_COOKIE["login_user"])) { } else {?>
                <div class="wapperDonation">
                    <div class="loginDonation d-flex align-item-center">
                        <h4 class="subTitle">Are you a member *</h4>
                        <div class="loginDonationForm">
                            <label for="are_you_member">
                                <input type="radio" name="are_you_member" id="are_you_member"class="member_yes_not_chk"  value="1" checked=""> Yes
                            </label>
                            &nbsp;&nbsp;
                            <label for="are_you_member_no">
                                <input type="radio" name="are_you_member" id="are_you_member_no" class="member_yes_not_chk" value="0"> No
                            </label>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
       <div class="col-md-6 col-sm-12 loginDonationForm"  id="logindetails">
        <div class="row">
                <div class="col-sm-12" id="rspnduserlogin">

                </div>
            </div>
            <div class="row">   
                <div class="col-12 loginDonationForm">
                    <div class="col-md-12">
                        <label for="username" class="text-theme"><strong>Username *</strong></label>
                        <input type="text" name="username" id="username" value="" placeholder="Username *" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <label for="password" class="text-theme"><strong>Password *</strong></label>
                        <input type="password" name="password" id="password" value="" placeholder="Password *" class="form-control">
                    </div>
                    <div class="col-sm-12 col-xs-12">
                        <button type="button" color="primary" id="userlogin" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary userlogin w-100">
                            <span class="mat-button-wrapper userlogin">Login to Account</span><div matripple="" class="mat-ripple mat-button-ripple"></div><div class="mat-button-focus-overlay"></div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="wapperDonation">
                <h4 class="subTitle mb-4">Donation Details</h4>
                <div class="listDonationDetails">
                    <?php $count=0; foreach($donate_category as $dnscat){ ?>
                    <label for="donation_type_<?=$count;?>" class="label label-default" >
                    <input type="radio" name="donation_type" id="donation_type_<?=$count;?>" value="<?=$dnscat->name;?>"> <?=$dnscat->name;?> &nbsp; &nbsp;
                    </label>
                    <?php $count++;} ?>
                    <?=form_error('donation_type');?>
                </div>
                
   <div class="row">
    <div class="col-sm-12 chooesBtn">
        <h2 for="memberid" class="titleHead">
            Choose Donation Slab
        </h2>
<?php;  $othercount =0; $count=0; foreach($donation_slab as $donation){
if($donation->name==$_SESSION['amount']){
    
} else {
    $othercount++;
}
?>

<label for="donation<?=$count;?>" class="btn sel-item btn-info select-dona" data-value="<?=$donation->name;?>" onclick="setdonation('<?=$donation->name;?>');">

<input type="radio" value="<?=$donation->name;?>" <?php if($this->input->post('amount')){  if($donation->name==$this->input->post('amount')){ echo 'checked';} }  else { if(isset($_SESSION['amount'])){  if($donation->name==$_SESSION['amount']){ echo 'checked';}  } }?> name="cer_evnt_type" id="donation<?=$count;?>" />
            <?=$donation->name;?>
        </label>
<?php $count++;} ?>
          <label for="donation_o" class="btn sel-item btn-info select-dona" data-value="0" onclick="setdonation('0');">
            <input type="radio" value="0" name="cer_evnt_type" id="donation_o" <?php if($this->input->post('cer_evnt_type')){  if($this->input->post('cer_evnt_type')==0){ echo 'checked';} } if($othercount>0){ echo 'checked';} ?> />
            Other
        </label>
        
    </div>
</div>
                
                
                <div class="amtDonationinput d-flex align-item-center">
                    <div class="lavName">
                        <label for="amount" class="">Amount ($ SGD): </label>
                    </div>
                    <div class="inputDont">
                        <input type="number" id="amount" name="amount" value="<?php if($this->input->post('amount')){   echo $this->input->post('amount'); } else { if(isset($_SESSION['amount'])){echo $_SESSION['amount'];} }?>" class="form-control">
                        <?=form_error('amount');?>
                    </div>
                </div>
            </div>
        </div>
        
        
         
        
        
        
    </div>
    <?php } ?>  
        
        
        
        
        
        
    <?php if (isset($_COOKIE["login_user"])) { ?>
    <section class="row membershipDonation">
        <div  class="col-sm-12 col-xs-12" id="usermemeberdetaisl">
            <div class="jumbotron">
                <?php  if($user_membership->num_rows()>0){ 
                    $mylastmemberid=$user_membership->row();
                ?>
                <div class="row">
                    <div  class="col-sm-6 text-left padding-top-10">
                        <label>Membership  ID</label>
                    </div>
                    <div  class="col-sm-6 text-left padding-top-10">
                        <label><?=$mylastmemberid->membership_id;?></label>
                    </div>
                </div>

                <div class="row">
                    <div  class="col-sm-6 text-left padding-top-10">
                        <label>Membership  Type</label>
                    </div>
                    <div  class="col-sm-6 text-left padding-top-10">
                        <label><?=$mylastmemberid->membership_title;?></label>
                    </div>
                </div>

                <div class="row">
                    <div  class="col-sm-6 text-left padding-top-10">
                        <label>Expiring Date / Expired Date</label>
                    </div>
                    <div  class="col-sm-6 text-left padding-top-10">
                        <label><?=date('d-M-y',strtotime($mylastmemberid->membership_expire));?></label>
                    </div>
                </div>
                <div class="row">
                    <div  class="col-sm-6 text-left padding-top-10">
                        <label>Your   member since</label>
                    </div>
                    <div  class="col-sm-6 text-left padding-top-10">
                        <label><?=date('d-M-y',strtotime($mylastmemberid->membership_buy));?></label>
                    </div>
                </div>
                <div class="row">
                    <div  class="col-sm-12 text-left">
                        <hr />
                        <label>Personal Information</label>
                        <hr />
                    </div>
                </div>
                <div class="row">
                    <div  class="col-sm-6 text-left padding-top-10">
                        <label><strong>Name (As   per  NRIC) :</strong> <?=$mylastmemberid->name_as_nric;?></label>
                    </div>
                    <div  class="col-sm-6 text-left padding-top-10">
                        <label><strong>Address :</strong> <?=$mylastmemberid->address_1;?> <?=$mylastmemberid->address_2;?></label>
                    </div>
                </div>
                <div class="row">
                    <div  class="col-sm-6 text-left padding-top-10">
                        <label><strong>Gender :</strong> <?=$mylastmemberid->gende;?></label>
                    </div>
                    <div  class="col-sm-6 text-left padding-top-10">
                        <label><strong>Home Tel :</strong> +65 <?=$mylastmemberid->home_tel;?></label>
                    </div>
                </div>
                    
                <div class="row">
                    <div  class="col-sm-6 text-left padding-top-10">
                        <label><strong>NRIC / PassPort Number :</strong> <?=$mylastmemberid->nric_passport;?></label>
                    </div>
                    <div  class="col-sm-6 text-left padding-top-10">
                        <label><strong>Mobile : +65</strong> <?=$mylastmemberid->mobile;?></label>
                    </div>
                </div>

                <div class="row">
                    <div  class="col-sm-6 text-left padding-top-10">
                        <label><strong>Date Of  Birth :</strong> <?=$mylastmemberid->days;?>-<?=$mylastmemberid->month;?>-<?=$mylastmemberid->year;?></label>
                    </div>
                    <div  class="col-sm-6 text-left padding-top-10">
                        <label><strong>Email :</strong> <?=$mylastmemberid->email;?></label>
                    </div>
                </div>

                <div class="row">
                    <div  class="col-sm-6 text-left padding-top-10">
                        <label><strong>Nationality :</strong> 
                            <?=$mylastmemberid->nationality;?>
                            <?php 
                                if ($mylastmemberid->nationality=='Other') {
                                   echo $mylastmemberid->nationality_other;
                                }
                            ?>
                        </label>
                    </div>
                    <div  class="col-sm-6 text-left padding-top-10">
                        <label><strong>Marital Status :</strong> <?=$mylastmemberid->nationality_other;?></label>
                    </div>
                </div>
                <?php } else { ?>
                <div class="row">
                    <div  class="col-sm-12 text-center padding-top-10 activateMembership">
                        <label>You don't have any active membership plan yet!</label>
                        <a href="<?=base_url();?>applyMembership">Activate Membership Plan</a>
                    </div>
                       
                </div>
                <?php    } ?>
            </div>
        </div>
    </div>
    <?php  } else { }?>
       
    </div>
      
    <section class="donationAmountTransfer">
        
        


        <?php if (isset($_COOKIE["login_user"])) { ?>   
        <section class="donationLoginafter">
            <div class="wapperDonation">
                <h4 class="subTitle mb-4">Donation Details</h4>
                <div class="listDonationDetails">
                    <?php $count=0; foreach($donate_category as $dnscat){ ?>
                    <label for="donation_type_<?=$count;?>" class="label label-default" >
                        <input type="radio" name="donation_type" id="donation_type_<?=$count;?>" value="<?=$dnscat->name;?>"> <?=$dnscat->name;?> &nbsp; &nbsp;
                    </label>
                    <?php $count++;} ?>
                    <?=form_error('donation_type');?>
                </div>
                
                <div class="row">
    <div class="col-sm-12 chooesBtn">
        <h2 for="memberid" class="titleHead">
            Choose Donation Slab
        </h2>
<?php;  $othercount =0; $count=0; foreach($donation_slab as $donation){
if($donation->name==$_SESSION['amount']){
    
} else {
    $othercount++;
}
?>

<label for="donation<?=$count;?>" class="btn sel-item btn-info select-dona" data-value="<?=$donation->name;?>" onclick="setdonation('<?=$donation->name;?>');">

<input type="radio" value="<?=$donation->name;?>" <?php if($this->input->post('amount')){  if($donation->name==$this->input->post('amount')){ echo 'checked';} }?> name="cer_evnt_type" id="donation<?=$count;?>" />
            <?=$donation->name;?>
        </label>
<?php $count++;} ?>
          <label for="donation_o" class="btn sel-item btn-info select-dona" data-value="0" onclick="setdonation('0');">
            <input type="radio" value="0" name="cer_evnt_type" id="donation_o" <?php if($this->input->post('cer_evnt_type')){  if($this->input->post('cer_evnt_type')==0){ echo 'checked';} } if($othercount>0){ echo 'checked';} ?> />
            Other
        </label>
        
    </div>
</div>
                <div  class="amtDonationinput d-flex align-item-center">
                    
                    <div class="lavName">
                        <label for="amount" class="">Amount ($ SGD): </label>
                    </div>
                    <!-- <label for="amount" class="col-sm-12 control-label text-left">Amount ($ SGD): </label> -->
                    <div class="inputDont">
                        <input type="number" id="amount" name="amount" value="<?php if($this->input->post('amount')){   echo $this->input->post('amount'); } else { if(isset($_SESSION['amount'])){echo $_SESSION['amount'];} }?>" class="form-control">
                        <?=form_error('amount');?>
                    </div>
                </div>
            </div>
        </section>
    
        <?php } ?>
        <section class="donationsectionStart">
            <div class="wapperDonation">
                <h4 class="subTitle mb-4">Donation Amount Transfer Type *</h4>
                    <div class="row">
                        <div class="col-md-6 listDonationDetails">
                            <label for="visa_credit_card">
                                <input type="radio" name="donat_transfer_type" class="chk_pay_type" id="visa_credit_card" value="Visa  Credit Card"> Visa Credit Card &nbsp; &nbsp;
                            </label>
                            <label for="mastercard">
                                <input type="radio" name="donat_transfer_type" class="chk_pay_type" id="mastercard" value="Mastercard Credit/ Debit Card"> Mastercard Credit/ Debit Card &nbsp; &nbsp;
                            </label>
                            <label for="americal_express_credit_card">
                                <input type="radio" name="donat_transfer_type" class="chk_pay_type" id="americal_express_credit_card" value="American Express  Credit Card"> American Express Credit Card &nbsp; &nbsp;
                            </label>
                        </div>
                        <div class="col-md-6 listDonationDetails">
                            
                            <label for="bank_transfer">
                                <input type="radio" name="donat_transfer_type" class="chk_pay_type" id="bank_transfer" value="Bank Transfer"> Bank Transfer &nbsp; &nbsp;
                            </label>
                            <label for="cheque">
                                <input type="radio" name="donat_transfer_type" class="chk_pay_type" id="cheque" value="Cheque"> Cheque &nbsp; &nbsp;
                            </label>
                            <label for="paypal">
                                <input type="radio" name="donat_transfer_type" class="chk_pay_type" id="paypal" value="PayPal"> PayPal &nbsp; &nbsp;
                            </label>
                        </div>
                    </div>
                    <?=form_error('donat_transfer_type');?>
                    
                <div  class="col-sm-12 col-xs-12">
                        <label for="transection_ref"><strong>Enter Transaction  number for bank transfer and cheque</strong></label>
                        <input type="text" name="transection_ref" id="transection_ref" value="" class="form-control">
                </div>
            </div>
            
            
            
            <button _ngcontent-ngq-c157="" mat-flat-button="" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary">
                <span class="mat-button-wrapper">Submit</span>
                <div matripple="" class="mat-ripple mat-button-ripple"></div>
                <div class="mat-button-focus-overlay"></div>
            </button>
        </section>
    </section>
    </div>
            
</form>
                     
                </div>
            </section>
        </app-landing-home>
</div>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">

<style type="text/css">
.sel-item input[type=radio] {
    position: relative !important;
    z-index: 1 !important;
    opacity: 1 !important;
}
.price-box {
    margin: 0 auto;
    background: #E9E9E9;
    border-radius: 10px;
    padding: 40px 15px;
    width: 500px;
}

.ui-widget-content {
    border: 1px solid #bdc3c7;
    background: #e1e1e1;
    color: #222222;
    margin-top: 4px;
}

.ui-slider .ui-slider-handle {
    position: absolute !important;
    z-index: 2 !important;
    width: 3.2em !important;
    height: 2.2em !important;
    cursor: default !important;
    margin: 0 -20px auto !important;
    text-align: center !important;  
    line-height: 30px !important;
    color: #FFFFFF !important;
    font-size: 15px !important;
}

.ui-corner-all {
    /*border-radius: 20px;*/
}

.ui-slider-horizontal .ui-slider-handle {
    top: -3em !important;
}

.ui-state-default,
.ui-widget-content .ui-state-default {
    background: #393a40 !important;
}

.ui-slider-horizontal .ui-slider-handle {
    margin-left: -0.5em !important;
}

.ui-slider .ui-slider-handle {
    cursor: pointer;
}

.ui-slider a,
.ui-slider a:focus {
    cursor: pointer;
    outline: none;
}

.price, .lead p {
    font-weight: 600;
    font-size: 32px;
    display: inline-block;
    line-height: 60px;
}

h4.great {
    background: #00ac98;
    margin: 0 0 55px -60px;
    padding: 7px 15px;
    color: #ffffff;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    display: inline-block;
    -moz-box-shadow:    2px 4px 5px 0 #ccc;
    -webkit-box-shadow: 2px 4px 5px 0 #ccc;
    box-shadow:         2px 4px 5px 0 #ccc;
}

.price-slider {
    margin-bottom: 70px;
}

.form-pricing {
    background: #ffefe2;
    padding: 20px;
    border-radius: 4px;
}

.price-form {
    /* padding: 20px; */
    border-radius: 4px;
}

.form-group {
    margin-bottom: 0;
}

.form-group span.price {
    font-weight: 200;
    display: inline-block;
    color: #7f8c8d;
    font-size: 14px;
}

.help-text {
    display: block;
    margin-top: 32px;
    margin-bottom: 10px;
    color: #737373;
    position: absolute;
    font-weight: 200;
    text-align: right;
    width: 188px;
}
.price-form label {
   color: #ffefe2;
    font-weight: 200;
    font-size: 14px;
}
.ui-slider-range-min {
    background: #2980b9;
}
.ui-slider-label-inner {
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-top: 10px solid #393a40;
    display: block;
    left: 50%;
    margin-left: -10px;
    position: absolute;
    top: 100%;
    z-index: 99;
} 
.sel-item {
    max-width: 100% !important;
    margin: 1%;
    text-align: center;
}
</style>
<script type="text/javascript">
    $('.member_yes_not_chk').on('click',function(){
        var thisval = $(this).val();
         if (thisval==1) {
            $('#logindetails').show(2000);
         } else if (thisval==0) {
             $('#logindetails').hide(2000);
         }
    });

    $('#userlogin').on('click',function(){
        var username=$('#username').val();
        var password=$('#password').val();
         var queryString='username='+username+'&password='+password;
            $.ajax({
                type: "post",
                url: '<?php echo site_url('PujaBooking/LoginUser');?>',
                cache: false, 
                data:queryString,
                success: function(response){
                    $('#rspnduserlogin').html(response);
                },
                error: function(){      
                alert('Error while request..');
            }
        });
    });
$('.chk_pay_type').on('click',function(){
    var chk_pay_type= $(this).val();
    if (chk_pay_type=='Bank Transfer' || chk_pay_type=='Cheque') {
        $('#transection_ref').removeAttr('readonly');
        $('#transection_ref').attr('required','required');
    } else {
        $('#transection_ref').attr('readonly','readonly');
        $('#transection_ref').removeAttr('required');
        
    }
});

function setdonation(str){
    $('#amount').val(str);
    if(parseInt(str)==0){
        $('#amount').removeAttr('readonly');
    }else {
        $('#amount').attr('readonly','readonly');
    }
    
}

</script>