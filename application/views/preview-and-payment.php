                            <?php
                            $totalamt = 0.00;
                            $this->db->select('*');
                            $this->db->from('slnt_puja_time');
                            $this->db->where('id',$pujabooking->time_id);
                            $this->db->where('pooja_time',$pujabooking->puja_id);
                            $bookingTime = $this->db->get();
                            $actbooktime = $bookingTime->row();

                          

                            $this->db->select('*');
                            $this->db->from('slnt_puja');
                            $this->db->where('id',$pujabooking->puja_id);
                            $pujaList = $this->db->get();
                            $actpujalist = $pujaList->row();
                            
                            

?>

<div class="tab-pane fade  <?php if($this->uri->segment(2)=='Preview-and-Payment'){ ?> in active <?php } ?>" id="settings">
   <form  class="form-horizontal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="opacity: ; z-index: -99999999999999999999;"  name="paypalpayment" > 
<div id="invoice">
    <div class="invoice">
       <div>
       
                  
            <main>
              
                <div class="row">
                    <div class="col company-details">
                        <h2 class="head">Service Booking Details</h2>
                    </div>
                </div>
                <div class="row contacts invoiceDetailsSection">
                    <div class="col-12 invoice-details">
                        <p>Date  / Time : <span><?php echo date("d M Y", strtotime($pujabooking->sel_date));?>, <?php if($bookingTime->num_rows()>0){ ?> <?=$actbooktime->from_time;?> - <?=$actbooktime->to_time;?> <?php } ?></span></p>
                        <p>Priest Services * : <span><?=$actpujalist->description_charge;?></span></p>
                       <!--  <p>Request for a particular from SLNT  :  Yes</p>
                        <p>Vanue :  <?=$pujabooking->venue;?> / <?=$pujabooking->venue_amount;?></p>
                        <p>Puja Samagri :  <?=$pujabooking->puja_samagri;?></p>
                        <p>Havan Samagri :  <?=$pujabooking->havan_samagri;?></p>
                        <p>Bhog / Prasad :  <?=$pujabooking->bhog_prasad;?></p>
                        <p>Catering :  <?=$pujabooking->catering;?></p> -->
                    </div>
                    
                    <div class="col-12 invoice-details">
                        <h2 class="address head">Payment Details</h2>
                    </div>
                </div>
                
                



<?php 
    $xcount=1;
?>

<div class="">

                <table class="table table-striped tableList" style="width: 100% !important;">
                    <thead>
                        <tr>
                            <th style="max-width: 10%;">Sr.No.</th>
                            <th  style="max-width: 70%;"  class="text-left">DESCRIPTION</th>
                            <th  style="max-width: 20%;" class="text-left">AMOUNT (SGD)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?=$xcount;?></td>
                            <td><?=$actpujalist->description_charge;?></td>
                            <td>
                               <?php // $getmembershipplan = $membership->row(); 
                               
                               $this->db->select('*');
                            $this->db->from('slnt_user_membership');
                            $this->db->where('user_id',$_COOKIE["login_user"]);
                            $this->db->where('pay_status',1);
                            $this->db->order_by('id','DESC');
                            $this->db->limit(1);
                            $membership = $this->db->get();
                            $getmembershipplan = $membership->row();
                            $mem_status =0;
                                    if($membership->num_rows()>0){
                                        $mem_status=1;
                                        if($pujabooking->offer_mem_price>0){
                                            echo $pujabooking->offer_mem_price;
                                            $totalamt=$totalamt+$pujabooking->offer_mem_price;
                                        } else {
                                            echo $actpujalist->member_price;
                                            $totalamt=$totalamt+$actpujalist->member_price;
                                        }

                                    } else {
                                        $mem_status=0;
                                        if($pujabooking->offer_non_mem_price>0){
                                            echo $pujabooking->offer_non_mem_price;
                                            $totalamt=$totalamt+$pujabooking->offer_non_mem_price;
                                        } else {
                                            echo $actpujalist->non_member_price;
                                            $totalamt=$totalamt+$actpujalist->non_member_price;
                                        }
                                    }
                                
                               ?> 
                                
                              
                                </td>
                        </tr>
                        <?php



                                 if($pujabooking->pre_priest==0){ } else {?>
                        <tr>
                            <td><?=++$xcount;?></td>
                            <td>
                                <?php



                                 if($pujabooking->pre_priest==0){ ?>
                                    No PRIEST PREFERRED 
                                <?php } else { 

                                    $this->db->select('*');
                                    $this->db->from('adminlogin');
                                    $this->db->where('id',$pujabooking->sel_priest);
                                    $pujaListpriest = $this->db->get();
                                    $actpriest = $pujaListpriest->row();
                                    echo $actpriest->adminusername;
                                } ?>
                                    
                                </td>

                            <td>

                                <?php if($pujabooking->pre_priest==0){ ?>
                                        0.00
                                <?php } else { 
                                        $totalamt=$totalamt+$pujabooking->sel_priest_rs;
                                        echo $pujabooking->sel_priest_rs;
                                 } ?></td>

                            </td>
                        </tr>
<?php } ?>
<?php if($pujabooking->venue==0){ ?>
                         <tr>
                            <td><?=++$xcount;?></td>
                            <td>
                                <?php if($pujabooking->venue==0){ ?>
                                    At Temple 
                                <?php } else { ?> 
                                    At your place.
                                <?php  } ?></td>
                            <td>

                                <?php if($pujabooking->venue==0){ ?> 
                                    <?=$actpujalist->venue_price;?>
                                <?php
                                $totalamt=$totalamt+$actpujalist->venue_price;

                                 } else { ?>
                                   0.00
                                <?php  } ?></td>
                        </tr>
                       <?php } ?>

                            <?php if($pujabooking->puja_samagri==1){ ?>
                                   
                                <?php } else { ?> 
                        <tr>
                            <td><?=++$xcount;?></td>
                            <td>
                                Puja Samagri 
                            </td>
                            <td>
                                <?php if($pujabooking->puja_samagri==1){ ?>
                                    0.00 
                                <?php } else { ?> 
                                    <?=$pujabooking->pooja_samagri_amt;?>
                                <?php  $totalamt=$totalamt+$pujabooking->pooja_samagri_amt; } ?>
                            </td>
                        </tr>
                        <?php  } if($pujabooking->havan_samagri==1){ ?>
                                   
                                <?php } else { ?> 
                         <tr>
                            <td><?=++$xcount;?></td>
                            <td>
                                Havan Samagri 
                            </td>
                            <td>
                                <?php if($pujabooking->havan_samagri==1){ ?>
                                    0.00 
                                <?php } else { ?> 
                                    <?=$pujabooking->havan_samagri_amt;?>
                                <?php $totalamt=$totalamt+$pujabooking->havan_samagri_amt; } ?>
                            </td>
                        </tr>
                         <?php } if($pujabooking->bhog_prasad==1){ ?>
                                   
                                <?php } else { ?>
                        <tr>
                            <td><?=++$xcount;?></td>
                            <td>
                                Bhog / Prasad
                            </td>
                            <td>
                                <?php if($pujabooking->bhog_prasad==1){ ?>
                                    0.00 
                                <?php } else { ?> 
                                    <?=$pujabooking->bhog_prasad_amt;?>
                                <?php $totalamt=$totalamt+$pujabooking->bhog_prasad_amt; } ?>
                            </td>
                        </tr>
  <?php  }  ?>

<?php if ($pujabooking->catering==0) { 


                                    

//cate_description
    if ($pujabooking->catering_items!=NULL) {
     
    $catering=json_decode($pujabooking->catering_items);

                                    $this->db->select('*');
                                    $this->db->from('slnt_catering_menus');
                                    $this->db->where('id',$catering->menus);
                                    $pujaL = $this->db->get();
                                    $actpr = $pujaL->row();
$cate_description=$actpr->menu_items;
    ?>
 
                  
                        <?php 
                            $itemamount=0.00;
                            $pax = explode('|', $catering->pax_n_price);
                                
                    ?> 
                        <?php if($mem_status==1){ 
                              $itemamount = $pax[1];
                        } else {
                              $itemamount = $pax[2];

                        } ?>

                        <?php  
                      
                            $aditional =0.00;
                    foreach($catering->items as $aditem){
                        $itm = explode('|', $aditem);
  
                        $aditional=$aditional+$itm[1];
                    }
               
                    ?>



    <tr>
        <td><?=++$xcount;?></td>
        <td>
            <h4>Catering</h4>
                     
        </td>
        <td><?=$totalofcatering = $aditional+$itemamount;?></td>
         <?php  $totalamt = $totalamt+$totalofcatering;?>  
    </tr>
     <tr>
        <td colspan="3" align="left" class="text-left">
            <table class="table table-striped">
                <tr>
                    <td>Menu Name</td>
                    <td><?php echo $catering->menus_title;?></td>
                    <td></td>
                </tr>


                <tr>
                    <td>No. of Pax </td>
                    <td><?php 
                           
                            $pax = explode('|', $catering->pax_n_price);
                                echo 'Pax of '.$pax[0];
                    ?></td>
                    <td>
                        <?php if($mem_status==1){ 
                            echo $pax[1];
                        } else {
                            echo $pax[2];

                        } ?>

                    </td>
                </tr>

                <tr>
                    <td>note_for_catering </td>
                    <td><?php echo $catering->note_for_catering;?></td>
                    <td></td>
                </tr>

                <tr>
                    <td>Additional Items </td>
                    <td><?php  
                            $item='';
                            $rate='';
                      
                    foreach($catering->items as $aditem){
                        $itm = explode('|', $aditem);

                        $item = $item.'<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>'.$itm[0].'<br />';
                        $rate = $rate.$itm[1].'<br />';
                         
                    }
                    echo  $item;
                    ?></td>
                    <td>
                       <?php  echo $rate;?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
 
    
<?php  
    } 
} ?>



                    </tbody>
                  
                </table>
                 <table class="table table-striped tableList" style="width: 100% !important;">
                      <tfoot>
                  
                       <!--  <tr>
                            <td colspan="2">
                               <p> Discount for membership <br />10% on total amount</p>
                            </td>
                            <td>30.00</td>
                        </tr>
                        <tr>
                            <td colspan="3"><hr /></td>
                        </tr>
                        <tr>
                            <td colspan="2">Net Amount to be settled</td>
                            <td>270.00</td>
                        </tr>
 -->
 <?php 

                                    $mm_data = array('membership_status' => $mem_status, 'cate_description' => $cate_description );
                                    $this->db->where('id',$pujabooking->id);
                                    $this->db->update('slnt_booking_slot',$mm_data);


//$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypal_url = 'https://www.paypal.com/cgi-bin/webscr'; //LIVE PayPal API URL
$paypal_id = 'info@lakshminarayantemple.com'; //Business Email
     
            $this->db->select('*');
            $this->db->from('slnt_payment_summery');
            $this->db->where(array('booking_id'=>$pujabooking->id,'paystatus'=>0));
            $this->db->order_by('id','DESC');
            $this->db->limit(1);
            $datx=$this->db->get();
            if ($datx->num_rows()==0) {
                        $amt_pay=$totalamt*100/100;
                        $due_amt=$totalamt-$amt_pay;
                        $datan = array(
                            'paydate'=>  date('d-m-Y'), 
                            'paytime'=>  date('H:i:s A'),
                            'total'=>  $totalamt,
                            'payment_id'=>  time(),
                            'pay_percent'=> 100,
                            'amt_pay'=>  $amt_pay, 
                            'due_amt'=>  $due_amt,
                            'booking_id'=>  $pujabooking->id,
                            'paywith'=>''
                    );
                    
                    $this->db->insert('slnt_payment_summery',$datan);
                ?>
                <script type="text/javascript">
                     window.location.href=window.location.href;
                </script>
                <?php 
            } 
            $dat=$datx->row(); 

            
?>
                        <tr>
                            <td>
                                <label class="priceWeight">SGD $</label>
                            </td>
                            <td>
                                <input type="text" value="<?=$totalamt;?>" class="form-control totalAmtPujaBooking" style="width: 100% !important;" readonly="" name="totalamt" id="totalamt" readonly>
                            </td>
                        </tr>


                        <tr>
                            <td><label class="priceWeight">Payment Amount :</label> </td>
                            <td>
                                <label name="pay_percent" onchange="calprice(this.value);" class="prceDept">
                                    <!--<option value="50" <?php if($dat->pay_percent==50){ ?>selected="selected"<?php } ?>>50% Deposit </option>-->
                                    <option value="100"  <?php if($dat->pay_percent==100){ ?>selected="selected"<?php } ?>>100% Deposit </option>
                                </label>
                            </td>
                        </tr>
                     
                        <tr>
                            <td>
                              <label class="priceWeight">  Amount  to paid</label>
                            </td>
                            <td>
                                <label id="selamts" class="priceWeight">SGD $ <?=$dat->amt_pay;?></label>
                            </td>
                        </tr>
                        <tr>
                    		<td colspan="3">
                    			<label>
                    				<input type="checkbox" name="tnc" id="tnc" required="" /> <a href="<?=base_url('TermsAndCondition');?>" target="_blank" > I agree to the Terms  & Conditions
                    			</a></label>
                    		</td>
                    	</tr>
                        <tr>
                            <td>

                                <label class="priceWeight"> Payment Type :</label>

                            </td>
                            <td>
 

 
 <div class="form-group"  style="opacity: 1;">
<div class="panel panel-default"  style="opacity: 1;">
<div class="panel-body"  style="opacity: 1;">
<div class="row"  style="opacity:1;"><div class="col-sm-12 col-xs-12" >
<!-- <input type="image" class="paypalImage"> -->
<input type="submit" name="submit" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary text-white paypalImage" value="" />
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
<input type="hidden" name="business" value="info@lakshminarayantemple.com"  style="opacity: 0;"><input type="hidden" name="cmd" value="_xclick" style="opacity: 0;"><input type="hidden" name="item_name" value="<?=$actpujalist->description_charge;?>" style="opacity: 0;"><input type="hidden" name="item_number" value="<?=@$pujabooking->id;?>" style="opacity: 0;"><input type="hidden" name="amount" id="payamtamount" value="<?=$dat->amt_pay;?>" style="opacity: 0;"><input type="hidden" name="currency_code" value="SGD" style="opacity: 0;"><input type='hidden' name='cancel_return' value='<?= base_url();?>PayWithPayPal/Cancel/<?=@$dat->id;?>/<?=@$dat->payment_id;?>' style="opacity:1 ;"><input type='hidden' name='return' value='<?= base_url();?>PayWithPayPal/Success/<?=@$dat->id;?>/<?=@$dat->payment_id;?>' style="opacity: 1;">
</form>

                               

 
                            </td>
                        </tr>


                    </tfoot>
                </table>
                 
</div>
            </main>
       <!--      <footer>
                  <button type="submit" href="<?=base_url();?>pujaBooking/Thank-You?bkid=<?=$pujabooking->id;?>" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary text-white">
                                        <span class="mat-button-wrapper">Save & Proceed</span>
                                        <div matripple="" class="mat-ripple mat-button-ripple"></div>
                                        <div class="mat-button-focus-overlay"></div>
                                    </button>
            </footer> -->
         
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>   
</div>
<script type="text/javascript">
    function calprice(asr) {
        var totalamt=parseFloat($('#totalamt').val());
         var pers =parseFloat(asr);
         var amt = totalamt*pers/100;

         $('#payamtamount').val(amt);
         $('#selamts').html('$'+amt+' SGD');
          var queryString='pay_percent='+pers+'&totalamt='+totalamt+'&payid='+<?=$dat->id;?>+'&payment_id='+<?=$dat->payment_id;?>;
                 $.ajax({
                       type: "post",
                       url: '<?php echo site_url('PoojaBooking/PayNowUpdate');?>',
                       cache: false, 
                       data:queryString,
                       success: function(response){
                           
                       },
                       error: function(){      
                        alert('Error while request..');
                    }
                });
    }
</script>