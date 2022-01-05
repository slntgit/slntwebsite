<div _ngcontent-ngq-c159=""  class="main-site about-main-site">
        <app-landing-home _nghost-ngq-c160="" class="ng-star-inserted">
            <section _ngcontent-ngq-c160="" class="section-gap about-section">
                <div _ngcontent-ngq-c160="" class="container">
                    <section _ngcontent-ngq-c160="" class="header-title">
                        <h2 _ngcontent-ngq-c160="" class="title">Donation</h2>
                    </section>
<form class="form-horizontal form-pricing" method="post" action="<?=base_url();?>Donation/PayNow" role="form">
    <div class="price-form text-center">
       <footer>
            <button onclick="PrintDiv();" type="button" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary">
                <span class="mat-button-wrapper">Print</span>
                <div matripple="" class="mat-ripple mat-button-ripple"></div>
                <div class="mat-button-focus-overlay"></div>
            </button>
        </footer>

        <div class="row"    id="divToPrint">
            <div class="col-sm-12 text-left">
                <hr>
                <label><strong>Donation Details</strong></label>
                <hr>
            </div>

            <div class="col-sm-12">
                <div class="table-responsive">
                         <table class="table table-responsive">
                            <tbody>
                                <tr>
                                    <td><strong>Donation Type : </strong></td>
                                    <td><?=$lastDonation->donation_type;?></td>
                                </tr>

                                <tr>
                                    <td><strong>Amount ($ SGD): </strong></td>
                                    <td><?=$lastDonation->amount;?></td>
                                </tr>


                                <tr>
                                    <td><strong>Donation Amount Transfer Type : </strong></td>
                                    <td><?=$lastDonation->donation_type;?></td>
                                </tr>

                                <tr>
                                    <td><strong>Donation Type : </strong></td>
                                    <td><?=$lastDonation->donat_transfer_type;?></td>
                                </tr> 
<?php if($lastDonation->transection_ref!=''){ ?>   
                                <tr>
                                    <td><strong>Transaction number for bank transfer and cheque  : </strong></td>
                                    <td><?=$lastDonation->transection_ref;?></td>
                                </tr>

 <?php } ?>
                                <tr>
                                    <td><strong>Status: </strong></td>
                                    <td><label class="text-success">Donation pay successfully</label></td>
                                </tr>  



                                <tr>
                                    <td><strong>Donation ID : </strong></td>
                                    <td><label class="text-success"><?=$lastDonation->donation_id;?></label></td>
                                </tr> 

                            </tbody>
                        </table>
                </div>
               
 
            </div>
 
        
        </div>

    </div>
</form>
                     
                </div>
            </section>

        </app-landing-home>
</div>


<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">

<style type="text/css">
    
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
    background: #ffffff;
    padding: 20px;
    border-radius: 4px;
}

.price-form {
    background: #ffffff;
    margin-bottom: 10px;
    padding: 20px;
    border: 1px solid #eeeeee;
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
    font-weight: 200;
    font-size: 21px;
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
.padding-top-10{
    padding-top: 10px !important;
}
</style>
<script type="text/javascript">
    $('.member_yes_not_chk').on('click',function(){
        var thisval = $(this).val();
         if (thisval==1) {
            $('#logindetails').css('display','block');
         } else if (thisval==0) {
             $('#logindetails').css('display','none');
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



</script>
<script type="text/javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=600,height=600');
        popupWin.document.open();
        popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
     </script>
