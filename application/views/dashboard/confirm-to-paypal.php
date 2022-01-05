<?php 
//$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypal_url = 'https://www.paypal.com/cgi-bin/webscr'; //LIVE PayPal API URL
$paypal_id = 'info@lakshminarayantemple.com'; //Business Email
?>
<center><img src="<?=base_url();?>assets/loading.gif" class="img-responsive" /></center>
<form  class="form-horizontal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="opacity: 1; z-index: -99999999999999999999;" id="paypalpayment" name="paypalpayment" >
 
 

<div class="modal fade in active" style="display: block;" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"  id="onload">

    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
       
        <div class="modal-body">
         Sure you want pay now!
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" data-dismiss="modal">Yes</button>
          <a href="<?=base_url();?>Membership/MembershipPrintApplication" class="btn btn-default" data-dismiss="modal">No</a>
        </div>
      </div>

    </div>
</div>


<div class="form-group"  style="opacity: 0;">
<div class="panel panel-default"  style="opacity: 0;">
<div class="panel-body"  style="opacity: 0;">
<div class="row"  style="opacity: 0;">
<div class="col-sm-6 col-xs-12 text-right" style="opacity: 0;">
<input type="submit" name="submit" class="bbt-btn-login" value="Pay now" style="opacity: 0;" />
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
<input type="hidden" name="item_name" value="<?=$pay_list_member->membership_title;?>" style="opacity: 0;">
<input type="hidden" name="item_number" value="<?=$pay_list_member->membership_id;?>" style="opacity: 0;">
<input type="hidden" name="amount" value="<?=$pay_list_member->membership_amount;?>" style="opacity: 0;">
<input type="hidden" name="currency_code" value="SGD" style="opacity: 0;">
<!-- Specify URLs -->
<input type='hidden' name='cancel_return' value='<?= base_url();?>Membership/MembershipPrintApplication/Cancel/<?=$pay_list_member->membership_id;?>/<?=$pay_list_member->id;?>' style="opacity: 0;">
<input type='hidden' name='return' value='<?= base_url();?>Membership/MembershipPrintApplication/Success/<?=$pay_list_member->membership_id;?>/<?=$pay_list_member->id;?>' style="opacity: 0;">
</form>
<script type="text/javascript">
        $(window).load(function(){
                $('#onload').modal('show');
            });
</script>