  <div class="mainpanel">
        <div class="pageheader">
        <div class="media">
            <div class="media-body">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fa fa-print" aria-hidden="true"></i></a></li>
                    <li>Print Invoice</li>
                </ul>
                <h4>Print Invoice</h4>
            </div>
        </div><!-- media -->
    </div><!-- pageheader -->
	
	 				<?php
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
                   



					?>



	<div class="contentpanel">		
		<div class="row">	
		 	<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body" id="divToPrint">
						<div class="">
								  <div class="row contacts">
					                    <div class="col invoice-to">
					                        <div class="text-gray-light ">
					                            <h4 class="pull-right">Submitted Date : <?=$pujabooking->create_date;?></h4>
					                        </div>
					                    </div>
					                    <div class="col invoice-details">
					                        <div class="address"><strong>Booking Information</strong></div>
					                        <hr />
					                        <h1 class="invoice-id"><strong>Booking ID : </strong> <?=$pujabooking->booking_id;?></h1>
					                        <div class="date"><strong>Booked Date  / Time : </strong><?php echo date("d M Y", strtotime($pujabooking->sel_date));?>, <?php if($bookingTime->num_rows()>0){ ?> <?=$actbooktime->from_time;?> - <?=$actbooktime->to_time;?> <?php } ?></div>
					                        <div class="date"><strong>Type of Pooja :</strong> <?=$actpujalist->description_charge;?></div>
					                        

<?php if($pujabooking->venue==0){ ?>
 <div class="date"><strong>Vanue :  At Temple</strong></div>
<?php } else { ?>
	<div class="date"><strong>Vanue : At your place</strong></div>
	<div class="date"><strong>Address :<?=$pujabooking->home_address;?></strong> </div>
	<div class="date"><strong>Postal Code : <?=$pujabooking->postal_code;?></strong></div>
	<div class="date"><strong>For priest : <?=$pujabooking->picup;?></strong></div>

<?php } ?>
<?php if($pujabooking->catering==0){ ?>
<div class="date"><strong>Catering Menu : Yes</strong></div>
<?php } ?>




						                    </div>
						  					<hr />

											<?php if($pujabooking->pre_priest==1){

                            $this->db->select('*');
                            $this->db->from('adminlogin');
                            $this->db->where('id',$pujabooking->sel_priest);
                            $pujaLisprt = $this->db->get();
                            $prestl = $pujaLisprt->row();

											 ?>
												<div class="col invoice-details">
													<div class="address"><strong>Priest Information</strong></div>
														<hr />
													<div class="address"><strong>Priest Name  : </strong>
														<?=$prestl->name_title;?> <?=$prestl->name;?>
															
														</div>
													<hr />
													<div class="address"><strong>Contact :</strong> +65 <?=$prestl->mobleno;?></div>
													<hr />  
												</div>
											<?php } ?>

					                </div>
					                 <div class="col invoice-details">
					                        <div class="address"><strong>Payment Information</strong></div>
					                         
					                </div>
					            
                <table border="0" cellspacing="0" cellpadding="0"  class="table table-striped" style="width: 100% !important;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-right">AMOUNT <br /> (SGD)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
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
                            
                                    if($membership->num_rows()>0){
                                       echo $actpujalist->member_price;
                                       $totalamt=$totalamt+$actpujalist->member_price;
                                    } else {
                                       echo $actpujalist->non_member_price; 
                                       $totalamt=$totalamt+$actpujalist->non_member_price;
                                    }
                                
                               ?> 
                                
                              
                                </td>
                        </tr>
                        <tr>
                            <td>02</td>
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
                                        $totalamt=$totalamt+10;
                               ?> 
                                        10
                                <?php  } ?></td>

                            </td>
                        </tr>


                         <tr>
                            <td>03</td>
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
                       


                        <tr>
                            <td>04</td>
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
                         <tr>
                            <td>05</td>
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
                        <tr>
                            <td>06</td>
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

                        <tr>
                            <td>07</td>
                            <td>
                                Lunch
                            </td>
                            <td>
                               <?php 
                               if($pujabooking->lunch==1){ 
                                    echo 0.00;
                                } else {
                                    $this->db->select('*');
                                    $this->db->from('slnt_bhog_catering');
                                    $this->db->where('puja_id',$pujabooking->puja_id);
                                    $this->db->where('catering_type','Lunch');
                                    $priest2 = $this->db->get()->result();
                                    $lunch=0.00;
                                     foreach ($priest2 as $value) {
                                        $lunch=$lunch+$value->catering_price;
                                        }
                                        echo $lunch;

                                        $totalamt=$totalamt+$lunch;
                                }?>
                            </td>
                        </tr>
                        <tr>
                            <td>08</td>
                            <td>
                                Dinner
                            </td>
                            <td>
                               <?php 
                               if($pujabooking->dinner==1){ 
                                    echo 0.00;
                                } else {
                                    $this->db->select('*');
                                    $this->db->from('slnt_bhog_catering');
                                    $this->db->where('puja_id',$pujabooking->puja_id);
                                    $this->db->where('catering_type','Dinner');
                                    $priest2d = $this->db->get()->result();
                                    $dinner=0.00;
                                     foreach ($priest2d as $valued) {
                                        $dinner=$dinner+$valued->catering_price;
                                    }
                                        echo $dinner;
                                        $totalamt=$totalamt+$dinner;
                                }?>
                            </td>
                        </tr>
                        
                         <tr>
                            <td>09</td>
                            <td>
                                Refeshments
                            </td>
                            <td>
                               <?php 
                               if($pujabooking->refeshments==1){ 
                                    echo 0.00;
                                } else {
                                    $this->db->select('*');
                                    $this->db->from('slnt_bhog_catering');
                                    $this->db->where('puja_id',$pujabooking->puja_id);
                                    $this->db->where('catering_type','Refreshment');
                                    $priest2dr = $this->db->get()->result();
                                    $refeshments=0.00;
                                     foreach ($priest2dr as $valuedr) {
                                        $refeshments=$refeshments+$valuedr->catering_price;
                                    }
                                        echo $refeshments; $totalamt=$totalamt+$refeshments;
                                }?>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
			</tfoot>
        </table>
		<table border="0" cellspacing="0" cellpadding="0"  class="table table-striped" style="width: 100% !important;">
        	<tfoot>
            	<tr>
                	<td></td>
                	<td>Total</td>
                    <td>$ <?=$totalamt;?> SGD</td>
                 </tr>
<?php if($paymentdetails->num_rows()>0){

$due_amts=0;
$due_date='';
 foreach ($paymentdetails->result() as $paydel) {
 $due_amts=$paydel->due_amt;

 $due_date=$paydel->paydate; ?>
 		<tr>
            <td><?=$paydel->pay_percent;?>% Deposit Payment : </td>
            <td>$<?=$paydel->amt_pay;?> SGD Paid</td>
            <td>$<?=$paydel->due_amt;?> SGD Due</td>
		</tr>
 <?php	


} ?>
<?php if($due_amts>0){ ?>
    <tr>
    	<td colspan="3">Due Amount : $<?=$due_amts;?> SGD<br /> Due Date :
			<?php $dues = date('Ymd',strtotime($due_date));?>
			<?=date('Y-M-d', strtotime($dues+"+5 day"))?>
		</td>
    </tr>
<?php } ?>
<?php } else { ?>
  					<tr>
                            <td colspan="2">Due Amount   </td>
                            <td><?=$totalamt;?></td>
                        </tr>


<?php } ?>

                    </tfoot>
                </table>


						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
<div class="row">
	<div class="col-sm-12">
<center><button onclick="PrintDiv();" class="btn btn-warnig"> Print</button></center>	
	</div>
</div>
</div>


<script type="text/javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=600,height=600');
        popupWin.document.open();
        popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
     </script>
    