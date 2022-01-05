<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="container mb-5 mt-5">
    <div class="pricing card-deck flex-column flex-md-row mb-3">

        <div class="card card-pricing popular shadow text-center px-3 mb-4">
            <span class="h1 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Donation Summary</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h2 font-weight-normal text-primary text-center mb-0" data-pricing-value="30">Donation Type : <span class="price"><?=$lastDonation->donation_type;?></span></h2>
                <br />
                <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="30">$ <span class="price"><?=$lastDonation->amount;?> SGD</span></h1>
                <br />
                 <form  class="form-horizontal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="opacity: 1; z-index: -99999999999999999999;" id="paypalpayment" name="paypalpayment" >
   
                 <center>
                      <button type="submit" class="btn btn-success btn-lg bg-primary">
                        Pay Now<span class="glyphicon glyphicon-chevron-right"></span>
                    </button>
                 </center>
              
               

 
    <?php 
//$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypal_url = 'https://www.paypal.com/cgi-bin/webscr'; //LIVE PayPal API URL
$paypal_id = 'info@lakshminarayantemple.com'; //Business Email
?>

 
<!-- Identify your business so that you can collect the payments. --><br>
<input type="hidden" name="business" value="info@lakshminarayantemple.com"  style="opacity: 0;">
<!-- Specify a hidden Now button. -->
<input type="hidden" name="cmd" value="_xclick" style="opacity: 0;">
<!-- Specify details about the item that buyers will purchase. -->
<input type="hidden" name="item_name" value="<?=$lastDonation->donation_type;?>" style="opacity: 0;">
<input type="hidden" name="item_number" value="<?=$lastDonation->donation_id;?>" style="opacity: 0;">
<input type="hidden" name="amount" value="<?=$lastDonation->amount;?>" style="opacity: 0;">
<input type="hidden" name="currency_code" value="SGD" style="opacity: 0;">
<!-- Specify URLs -->
<input type='hidden' name='cancel_return' value='<?= base_url();?>Donation/DonationPrintApplication/Cancel/<?=$lastDonation->donation_id;?>/<?=$lastDonation->id;?>' style="opacity: 0;">
<input type='hidden' name='return' value='<?= base_url();?>Donation/DonationPrintApplication/Success/<?=$lastDonation->donation_id;?>/<?=$lastDonation->id;?>' style="opacity: 0;">

<script type="text/javascript">
        $(window).load(function(){
                $('#onload').modal('show');
            });
</script>
 
</form>
            </div>
        
        </div>
      
      
      
      
      
        
    </div>
</div>
<style>
    .card-pricing.popular {
    z-index: 1;
    border: 3px solid #007bff;
}
.card-pricing .list-unstyled li {
    padding: .5rem 0;
    color: #6c757d;
}
.bg-primary {
    background-color: #48263d!important;
    border: 0px solid;
}
.text-primary {
    color: #48263d!important;
}
</style>

 