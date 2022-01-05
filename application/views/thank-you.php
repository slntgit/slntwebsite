 <?php
            $this->db->select('*');
            $this->db->from('slnt_payment_summery');
            $this->db->where(array('id'=>$this->uri->segment(3),'payment_id'=>$this->uri->segment(4)));
            $this->db->order_by('id','DESC');
            $this->db->limit(1);
            $booking_details = $this->db->get()->row();
            $datan = array(
                'paystatus'=>  1,
                'paywith'=>'PayPal'
            );
            $this->db->where(array('id'=>$this->uri->segment(3),'payment_id'=>$this->uri->segment(4),'paystatus'=>0));
            $this->db->update('slnt_payment_summery',$datan);
 
                            $this->db->select('*');
                            $this->db->from('slnt_booking_slot');
                            $this->db->where('id',$booking_details->booking_id); 
                            $this->db->order_by('id','DESC');
                            $pujabo = $this->db->get();

                            $pujabooking = $pujabo->row();
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

                            $this->db->select('*');
                            $this->db->from('slnt_payment_summery');
                            $this->db->where('booking_id',$pujabooking->id);
                            $this->db->where('paystatus',1);
                            $this->db->order_by('id','ASC');
                            $paymentdetails = $this->db->get();

                             
                            $this->db->select('*');
                            $this->db->from('slnt_payment_summery');
                            $this->db->where('booking_id',$pujabooking->id);
                            $this->db->where('paystatus',1);
                            $this->db->order_by('id','DESC');
                            $this->db->limit(1);
                            $paymentd = $this->db->get()->row();
                           
  

 ?>
<div class="tab-pane fade <?php if($this->uri->segment(2)=='Thank-You'){ ?> in active <?php } ?>" id="doner">


                    </div>
<style>
    h2 {
    font-size: 18px !important;
}
</style>
<script type="text/javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=600,height=600');
        popupWin.document.open();
        popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
     </script>
 
                <div class="row">
                    <div class="col company-details text-center">
                        
                        <?php if($pujabooking->booking_id!=''){ ?>
                        <h2 class="name head">Thank you for your Booking.</h2>
                        <?php } else { ?>
                            <h2 class="name head">Your <?=$pujabooking->puja_type;?> booking cancelled.</h2>
                        <?php } ?>
                        <p>Your <?=$Pujabooking->puja_type;?> booking details will  be as below:</p>
                    </div>
                </div>
    					 
	<div class="container"  id="divToPrint">
   	<div class="row">
    	<div class="col-md-12">
			<div class="table-responsive">
    			<table class="table table-condensed table-bordered" border="1" CELLPADDING=0 CELLSPACING=0>
    				<tbody>
    				    <tr>
    						<td colspan="5" align="center"> 
    							   <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <img src="<?=base_url();?>assets/BookingLogoNew.png" clas="img-responsive" style="width:100%;height:auto;"> 
                                        </div>
                                    </div>
    						</td>
    					</tr>
    					<?php
    					    $this->db->select('*');
                            $this->db->from('slnt_user_membership');
                            $this->db->where('user_id',$_COOKIE["login_user"]);
                            $this->db->where('pay_status',1);
                            $this->db->order_by('id','DESC');
                            $this->db->limit(1);
                            $membership = $this->db->get();
                            $getmembershipplan = $membership->row();
    					?>
    					
    					 
                  
<?php if($paymentd->due_amt>0.00){

    ?>  
<tr>
    						<td colspan="5" align="center"> 
    							
                <div class="row">
                    <div class="col company-details">
    <?php  

    $due_date=$paymentd->paydate;
    $dues = date('Ymd',strtotime($due_date));?>
            <p class="text-danger">
           Please note all outstanding payments must be made 3 days before date of pooja. An email has been sent to you for future reference.</p>
                        <p>We have sent email to your for your future refernece.</p>
                        <p>See you!</p>
                                      </div>
                </div>
    						</td>
    					</tr>
<?php 

} ?>
<style>
 
table td {
    border: 0.2px solid #c1c1c1;
    padding-left:10px !important;
}
 
</style>

      
    					
    					<!--<tr>
    						<td colspan="5"> 
    							<strong>SIDDH PEETH SHREE LAKSHMINARAYAN TEMPLE</strong>
    						</td>
    					</tr>
    					<tr>
    						<td colspan="5">
			    					5 Chander Road, Singapore 219528
    						</td>
    					</tr>
    					<tr>
    						<td colspan="5">
			    					Tel: 62930195 Fax: 629000000 Email: admin@spslnt.org.sg
    						</td>
    					</tr>
    					<tr>
    						<td colspan="5">
			    					Web: spslnt.org.sg UEN NO: S67SS0019D
    						</td>
    					</tr>-->

    					<tr>
    						<td align="center" colspan="5">
			    					<h4>OFFICIAL RECEIPT</h4>				
    						</td>
    					</tr>

    					<tr align="center">
    						<th colspan="2" align="center">
			    				Devotee				
    						</th>
    						<th align="center">
			    				Booking No.					
    						</th>
    						<td colspan="2" align="center">
			    				<?=$pujabooking->booking_id;?>				
    						</td>
    					</tr>
    					<tr align="center">
    						<td colspan="2" align="center">
			    					<?=$userDetails->name_title?> <?=$userDetails->first_name?> <?=$userDetails->last_name?>			
    						</td>
    						<th align="center">
			    				Booking Date				
    						</th>
    						<td colspan="2" align="center"><?=date('d-M-Y',strtotime($pujabooking->create_date));?>	
			    					
    						</td>
    					</tr>
    					<tr align="center">
    						<td colspan="2" align="center">
			    				<?=$userDetails->address_1?>				
    						</td>
    						<th align="center">
			    				Booked by				
    						</th>
    						<td colspan="2" align="center">
			    				<?=$userDetails->name_title?> <?=$userDetails->first_name?> <?=$userDetails->last_name?>				
    						</td>
    					</tr>
    					<tr align="center">
    						<td colspan="2" align="center">
			    				<?=$userDetails->address_2?>				
    						</td>
    						<th align="center">
			    				Member Type				
    						</th>
    						<td colspan="2" align="center">
			    				<?=$getmembershipplan->membership_title;?>		
    						</td>
    					</tr>
    					<tr align="center">
    						<td colspan="2" align="center">
			    				<?=$userDetails->postal_code?>				
    						</td>
    						<th align="center">
			    				Date of Pooja					
    						</th>
    						<td colspan="2" align="center">
			    					<span><?php echo date("d M Y", strtotime($pujabooking->sel_date));?></span>				
    						</td>
    					</tr>
    					<tr align="center">
    						<td colspan="2" align="center">
			    				Tel: <?=$userDetails->mobile_code?>	 <?=$userDetails->mobile?>				
    						</td>
    						<th align="center">
			    				Time of Pooja				
    						</th>
    						<td colspan="2" align="center">
			    				<span>
			    				     <?php if($bookingTime->num_rows()>0){ ?> <?=$actbooktime->from_time;?> - <?=$actbooktime->to_time;?> <?php } ?></span>			
    						</td>
    					</tr>
    					<tr align="center">
    						<td  colspan="2" align="center">
			    				Email: <?=$userDetails->email?>		
    						</td>
    						<th align="center">
			    				Priest Transport				
    						</th>
    						<td colspan="2">
			    				   <?php if($pujabooking->venue==0){ ?>
                            <div class="date"><span>At Temple</span> </div>
                                <?php } else { ?>
                            <div class="date"><span>At your place</span></div>
                            <div class="date">Address : <span><?=$pujabooking->home_address;?></span></div>
                            <div class="date">Postal Code : <span><?=$pujabooking->postal_code;?></span></div>
                            
                            
                            
                            <div class="date">For priest : <span><?=$pujabooking->picup;?></span></div>
                            
                            <div class="date">Journey Time From <span><strong><?=$pujabooking->time_range_from;?></strong> To <strong><?=$pujabooking->time_range_to;?></strong></span></div>
                            
                            
                            
                            
                            
                            
                                <?php } ?>
                                 				
    						</td>
    					</tr>

    					<tr align="center">
    						<td colspan="2">
			    				 		
    						</td>
    						<th>
			    				Priest Name/Mobile No.					
    						</th>
    						<td colspan="2">
			    			<?php if($pujabooking->pre_priest==1){

                            $this->db->select('*');
                            $this->db->from('adminlogin');
                            $this->db->where('id',$pujabooking->sel_priest);
                            $pujaLisprt = $this->db->get();
                            $prestl = $pujaLisprt->row();

                                             ?>
                                                <div class="col-12 invoice-details">
                                                    
<div class="address"><span><?=$prestl->name_title;?> <?=$prestl->name;?></span> / <span> +65 <?=$prestl->mobleno;?></span></div>
 
                                                </div>
                                            <?php } ?>
                                            
                                            
    						</td>
    					</tr>

    					<!--<tr>-->
    					<!--	<td>-->
			    		<!--		Address of Pooja to be performed: 		-->
    					<!--	</td>-->
    					<!--	<td colspan="2">-->
			    		<!--		if different from addressee					-->
    					<!--	</td>-->
    					<!--</tr>-->
<?php $indcount=0;?>
 
                        <tr align="center">
        					<td><strong>S/NO:</strong></td>
        					<td class="text-center"><strong>DESCRIPTION</strong></td>
        					<td class="text-center"><strong>QTY</strong></td>
        					<td class="text-center"><strong> RATE (S$) </strong></td>
        					<td class="text-center"><strong> AMOUNT (S$)  </strong></td>
                        </tr>
    			 
                    
                        <tr align="center">
                            <td><?=++$indcount;?></td>
                            <td><?=$actpujalist->description_charge;?></td>
                            <td  class="">1.00</td>
                            <td  class="">
                               <?php 
                            
                                    
                                    if($membership->num_rows()>0){
                                        if($pujabooking->offer_mem_price>0){
                                            echo $pujabooking->offer_mem_price;
                                            $totalamt=$totalamt+$pujabooking->offer_mem_price;
                                        } else {
                                            echo $actpujalist->member_price;
                                            $totalamt=$totalamt+$actpujalist->member_price;
                                        }

                                    } else {
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
                                 <td  class="">
                               <?php 
                            $this->db->select('*');
                            $this->db->from('slnt_user_membership');
                            $this->db->where('user_id',$_COOKIE["login_user"]);
                            $this->db->where('pay_status',1);
                            $this->db->order_by('id','DESC');
                            $this->db->limit(1);
                            $membership = $this->db->get();
                            $getmembershipplan = $membership->row();
                            
                                    if($membership->num_rows()>0){
                                        if($pujabooking->offer_mem_price>0){
                                            echo $pujabooking->offer_mem_price;
                                            //$totalamt=$totalamt+$pujabooking->offer_mem_price;
                                        } else {
                                            echo $actpujalist->member_price;
                                            //$totalamt=$totalamt+$actpujalist->member_price;
                                        }

                                    } else {
                                        if($pujabooking->offer_non_mem_price>0){
                                            echo $pujabooking->offer_non_mem_price;
                                            //$totalamt=$totalamt+$pujabooking->offer_non_mem_price;
                                        } else {
                                            echo $actpujalist->non_member_price;
                                            //$totalamt=$totalamt+$actpujalist->non_member_price;
                                        }
                                     
                                    }
                                
                                
                               ?> 
                                
                              
                                </td>
                        </tr>
                        
                        <?php  if($pujabooking->pre_priest==1){ ?>
                        <tr align="center">
                            <td><?=++$indcount;?></td>
                            <td>
                                <?php if($pujabooking->pre_priest==0){ ?>
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
                                     <td class="">
                            <?php if($pujabooking->pre_priest==0){ ?>
                                        0.00
                                <?php } else { 
                               ?> 
                                        1.00
                                <?php  } ?>
                                </td>
                            <td class="">

                                <?php if($pujabooking->pre_priest==0){ ?>
                                        0.00
                                <?php } else { 
                                        $totalamt=$totalamt+$pujabooking->sel_priest_rs;
                                        echo $pujabooking->sel_priest_rs;
                                 } ?>
                                </td>
 
                             <td class="">
                            <?php if($pujabooking->pre_priest==0){ ?>
                                        0.00
                                <?php } else { 
                                    echo $pujabooking->sel_priest_rs;
                                } ?>
                                </td>

                            </td>
                            
                        </tr>

<?php } if($pujabooking->venue==0){ ?>
                         <tr align="center">
                            <td><?=++$indcount;?></td>
                            <td>
                                <?php if($pujabooking->venue==0){ ?>
                                    At Temple 
                                <?php } else { ?> 
                                    At your place.
                                <?php  } ?></td>
                                <td  class="">1.00</td>
                            <td  class="">
                                <?php if($pujabooking->venue==0){ ?> 
                                    <?=$actpujalist->venue_price;?>
                                <?php
                                $totalamt=$totalamt+$actpujalist->venue_price;

                                 } else { ?>
                                   0.00
                                <?php  } ?>
                                </td>
                                
                                <td  class="">
                                <?php if($pujabooking->venue==0){ ?> 
                                    <?=$actpujalist->venue_price;?>
                                <?php
 
                                 } else { ?>
                                   0.00
                                <?php  } ?>
                                </td>
                        </tr>
                       

<?php } if($pujabooking->puja_samagri==0){ ?>
                        <tr align="center">
                            <td><?=++$indcount;?></td>
                            <td>
                                Puja Samagri 
                            </td>
                            <td class="">
                                <?php if($pujabooking->puja_samagri==1){ ?>
                                    0.00 
                                <?php } else { ?> 
                                    <?='1.00';?>
                                <?php } ?>
                            </td>
                            <td class="">
                                <?php if($pujabooking->puja_samagri==1){ ?>
                                    0.00 
                                <?php } else { ?> 
                                    <?=$pujabooking->pooja_samagri_amt;?>
                                <?php  $totalamt=$totalamt+$pujabooking->pooja_samagri_amt; } ?>
                            </td>
                            <td class="">
                                <?php if($pujabooking->puja_samagri==1){ ?>
                                    0.00 
                                <?php } else { ?> 
                                    <?=$pujabooking->pooja_samagri_amt;?>
                                <?php } ?>
                            </td>
                        </tr>
                        <?php } if($pujabooking->havan_samagri==0){ ?>
                         <tr align="center">
                            <td><?=++$indcount;?></td>
                            <td>
                                Havan Samagri 
                            </td>
                            <td  class="">
                                <?php if($pujabooking->havan_samagri==1){ ?>
                                    0.00 
                                <?php } else { ?> 
                                    <?='1.00';?>
                                <?php } ?>
                            </td>
                            <td  class="">
                                <?php if($pujabooking->havan_samagri==1){ ?>
                                    0.00 
                                <?php } else { ?> 
                                    <?=$pujabooking->havan_samagri_amt;?>
                                <?php $totalamt=$totalamt+$pujabooking->havan_samagri_amt; } ?>
                            </td>
                             <td  class="">
                                <?php if($pujabooking->havan_samagri==1){ ?>
                                    0.00 
                                <?php } else { ?> 
                                    <?=$pujabooking->havan_samagri_amt;?>
                                <?php } ?>
                            </td>
                        </tr>
                        <?php } if($pujabooking->bhog_prasad==0){ ?>
                        <tr>
                            <td><?=++$indcount;?></td>
                            <td>
                                Bhog / Prasad
                            </td>
                             <td  class="">
                                <?php if($pujabooking->bhog_prasad==1){ ?>
                                    0.00 
                                <?php } else { ?> 
                                    <?='1.00';?>
                                    <?php } ?>
                            </td>
                            
                            <td  class="">
                                <?php if($pujabooking->bhog_prasad==1){ ?>
                                    0.00 
                                <?php } else { ?> 
                                    <?=$pujabooking->bhog_prasad_amt;?>
                                <?php $totalamt=$totalamt+$pujabooking->bhog_prasad_amt; } ?>
                            </td>
                            
                            <td  class="">
                                <?php if($pujabooking->bhog_prasad==1){ ?>
                                    0.00 
                                <?php } else { ?> 
                                    <?=$pujabooking->bhog_prasad_amt;?>
                                    <?php } ?>
                            </td>
                            
                            
                        </tr>
<?php }  ?>

<?php if ($pujabooking->catering==0) {  ?>

<?php
     if ($pujabooking->catering_items!=NULL) {
     
    $catering=json_decode($pujabooking->catering_items);
?>

                        <?php 
                            $itemamount=0.00;
                            $pax = explode('|', $catering->pax_n_price);
                                
                    ?> 
                        <?php 

                        if($pujabooking->membership_status==1){ 
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
                            <td><?=++$indcount;?></td>
                            <td colspan="3">
                                Catering
                            </td>
                             
                            
                            <td  class="">
                                <?=$totalofcatering = $aditional+$itemamount;?>
                            </td>
                            <?php  $totalamt = $totalamt+$totalofcatering;?>  
                            
                        </tr>

                        <tr>
                            <td colspan="5" align="center" style="padding: 0.75rem">

<table class="table table-condensed table-bordered" style="width: 100%" border="1" CELLPADDING=0 CELLSPACING=0>
                                
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
                    ?>
                        <hr />

<?php echo $pujabooking->cate_description;?>

                    </td>
                    <td>
                        <?php if($pujabooking->membership_status==1){ 
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

 <?php   } ?>
 <?php   } ?>
                     
                      
                        
                    </tbody>
             
            <tfoot>
                <tr align="center">
                    <td class=""><strong></strong></td>
                    <td class=""><strong></strong></td>
                    <td class=""><strong></strong></td>
                    <td  class="priceWeight"><strong>Total</strong></td>
                    <td  class="shu-bold" class="priceWeight"><strong> SGD $<?=$totalamt;?></strong></td>
                 </tr>
<?php if($paymentdetails->num_rows()>0){

$due_amts=0;
$due_date='';
 foreach ($paymentdetails->result() as $paydel) {
 $due_amts=$paydel->due_amt;

 $due_date=$paydel->paydate; ?>
        <tr class="paymentPaidPreview">
            <td  colspan="3">Deposit Payment: <span><?=$paydel->pay_percent;?></span>%</td>
            <td  class="" align="center">Paid SGD <span>$<?=$paydel->amt_pay;?></span></td>
            <td  class="" align="center">Due SGD <span>$<?=$paydel->due_amt;?></span></td>
        </tr>
 <?php  


} ?>
<?php if($due_amts>0){ ?>
    <tr>
        <td colspan="5"  class="text-right">Due Amount : $<?=$due_amts;?> SGD
        </td>
    </tr>
<?php } ?>
<?php } else { ?>
    <tr>
        <td colspan="4">Due Amount   </td>
        <td  class="text-right"><?=$totalamt;?></td>
    </tr>
<?php } ?>

<tr>
    <td colspan="5">
        <p><strong>Note For Temple :</strong> <?=$pujabooking->note_for_temple;?></p>
    </td>
</tr>


<tr>
    <td colspan="5">
        <p><strong>Is the booking for self? :</strong> <?=$pujabooking->booking_for;?></p>
    </td>
</tr>

<tr>
    <td colspan="5">
        <p><strong>Created by :</strong> SPSLNT admin(admin@spslnt.org.sg)</p>
    </td>
</tr>
                    
    				</tfoot>

    			</table>
    			
    			
    		</div>
    	</div>
    </div>
</div></div>
   
   <footer class="text-center" style="margin-top: 47px;">
                  <button onclick="PrintDiv();" type="button" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary" style="margin-bottom: 41px;">
                                        <span class="mat-button-wrapper" >Print</span>
                                        <div matripple="" class="mat-ripple mat-button-ripple"></div>
                                        <div class="mat-button-focus-overlay"></div>
                                    </button>
                                    

            </footer>
<br /><br />
 <style>
.table-bordered th, .table-bordered td {
    border: 1px solid #48263d !important;
}
.shu-bold{
    font-weight: 900!important;
}

@media only screen and (min-width: 899px) {
  #myTab {
    margin-left: 75px !important;
  }
}




 </style>