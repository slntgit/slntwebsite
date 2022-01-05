<!DOCTYPE html>
<html>
<head>
  <title>SLNT Pay with PayPal</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 
<?php 
//$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypal_url = 'https://www.paypal.com/cgi-bin/webscr'; //LIVE PayPal API URL
$paypal_id = 'info@lakshminarayantemple.com'; //Business Email
?>
<?php 
               
            $this->db->select('*');
            $this->db->from('slnt_payment_summery');
            $this->db->where(array('booking_id'=>$this->uri->segment(2),'paystatus'=>0));
            $this->db->order_by('id','DESC');
            $this->db->limit(1);
            $dat=$this->db->get()->row();
?>

</head>
<body  onload="document.paypalpayment.submit()">
<div class="container"style="position: absolute;">
  <div class="row">
    <div class="paymentCont">
            <div class="headingWrap text-center" >
                <h3 class="headingTop text-center">Your Select Payment Pay With PayPal </h3>  
                <img src="<?=base_url();?>assets/loading.gif">
            </div>
              
<form  class="form-horizontal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="opacity: ; z-index: -99999999999999999999;"  name="paypalpayment" >
 
 <div class="form-group"  style="opacity: 0;">
<div class="panel panel-default"  style="opacity: 0;">
<div class="panel-body"  style="opacity: 0;">
<div class="row"  style="opacity: 0;">
<div class="col-sm-6 col-xs-12 text-right" style="opacity: ;">
<input type="submit" name="submit" class="bbt-btn-login" value="Pay now" style="opacity: 0;" />
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Identify your business so that you can collect the payments. --><br>
<input type="hidden" name="business" value="info@lakshminarayantemple.com"  style="opacity: 0;">
<!-- Specify a Buy Now button. -->
<input type="hidden" name="cmd" value="_xclick" style="opacity: 0;">
<!-- Specify details about the item that buyers will purchase. -->
<input type="hidden" name="item_name" value="<?=$dat->payment_id;?>" style="opacity: 0;">
<input type="hidden" name="item_number" value="<?=$dat->booking_id;?>" style="opacity: 0;">
<input type="hidden" name="amount" value="<?=$dat->amt_pay;?>" style="opacity: 0;">
<input type="hidden" name="currency_code" value="SGD" style="opacity: 0;">
<!-- Specify URLs -->
<input type='hidden' name='cancel_return' value='<?= base_url();?>PayWithPayPal/Cancel/<?=$dat->id;?>/<?=$dat->payment_id;?>' style="opacity:0 ;">
<input type='hidden' name='return' value='<?= base_url();?>PayWithPayPal/Success/<?=$dat->id;?>/<?=$dat->payment_id;?>' style="opacity: 0;">
</form>
<script type="text/javascript">
        $(window).load(function(){
                $('#onload').modal('show');
            });
</script>
          
          </div>
    
  </div>
</div>
</body>
</html>
 