 <?php
                            $this->db->select('*');
                            $this->db->from('slnt_payment_summery');
                            $this->db->where(array('id'=>$this->uri->segment(5),'payment_id'=>$this->uri->segment(4)));
                            $this->db->order_by('id','DESC');
                            $this->db->limit(1);
                            $booking_details = $this->db->get()->row();
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
 
 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
     <script type="text/javascript">
                             function PrintElem(elem) {
                                var mywindow = window.open('', 'PRINT', 'height=400,width=600');
                                mywindow.document.write('<html><head><title>' + document.title + '</title>');
                                mywindow.document.write('</head><body >');
                                mywindow.document.write(document.getElementById(elem).innerHTML);
                                mywindow.document.write('</body></html>');
                                mywindow.document.close(); // necessary for IE >= 10
                                mywindow.focus(); // necessary for IE >= 10*/
                                mywindow.print();
                                mywindow.close();
                                return true;
                            }
                        </script>
                       <style>
                            table,
                            td,
                            th {
                                border: 1px solid black;
                                padding: 5px;
                            }
                            
                            table {
                                border-collapse: collapse;
                                border-spacing: 0px;
                                width: 100%;
                            }
                        </style>
                        <style>
                            .table-bordered th,
                            .text-wrap table th,
                            .table-bordered td,
                            .text-wrap table td {
                                border: 1px solid rgba(167, 180, 201, .3);
                                font-weight: 700 !important;
                                font-size: 14px;
                            }
                        </style>
<div class="col-12">
    <style type="text/css">
            .error {
                color: red;
                padding: 5px;
            }
    </style>
	<div class="mainpanel">
	   <div class="contentpanel"id="divToPrint">		
		  <div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
						<div class="">
						 
          <div class="table-responsive">
    			<table class="table table-condensed table-bordered" border="1" CELLPADDING=0 CELLSPACING=0>
    				<tbody>
    				    <tr>
    						<td colspan="5" align="center"> 
    							   <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <img src="<?=base_url();?>../assets/print-logo.png" clas="img-responsive" style="max-width: 270px;"> 
                                        </div>
                                    </div>
    						</td>
    					</tr>
    					<?php
    					    $this->db->select('*');
                            $this->db->from('slnt_user_membership');
                            $this->db->where('user_id',$pujabooking->user_id);
                            $this->db->where('pay_status',1);
                            $this->db->order_by('id','DESC');
                            $this->db->limit(1);
                            $membership = $this->db->get();
                            $getmembershipplan = $membership->row();
                            
                            
                            $this->db->select('*');
                			$this->db->from('slnt_member');
                			$this->db->where(array('user_id'=>$pujabooking->user_id));
                			$userDetails=$this->db->get()->row();
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
            Your bookings settled the payment <?=$paymentd->pay_percent;?>% of Diposit. Hence, It will due 5 days before your appointed date. It will be dued on <?=date('Y-M-d', strtotime($dues+"+5 day"))?>. If due, the deposit amount will not be refunded and this booking will be cancelled.</p>
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

      
    					
    					<tr>
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
    					</tr>

    					<tr>
    						<td align="center" colspan="5">
			    					<h4>OFFICIAL RECEIPT</h4>				
    						</td>
    					</tr>

    					<tr>
    						<th colspan="2">
			    				Devotee				
    						</th>
    						<th>
			    				Booking No.					
    						</th>
    						<td colspan="2">
			    				<?=$pujabooking->booking_id;?>				
    						</td>
    					</tr>
    					<tr>
    						<td colspan="2">
			    					<?=$userDetails->name_title?> <?=$userDetails->first_name?> <?=$userDetails->last_name?>			
    						</td>
    						<th>
			    				Booking Date				
    						</th>
    						<td colspan="2"><?=$pujabooking->create_date;?>	
			    					
    						</td>
    					</tr>
    					<tr>
    						<td colspan="2">
			    				<?=$userDetails->address_1?>				
    						</td>
    						<th>
			    				Booked by				
    						</th>
    						<td colspan="2">
			    				<?=$userDetails->name_title?> <?=$userDetails->first_name?> <?=$userDetails->last_name?>				
    						</td>
    					</tr>
    					<tr>
    						<td colspan="2">
			    				<?=$userDetails->address_2?>				
    						</td>
    						<th>
			    				Member Type				
    						</th>
    						<td colspan="2">
			    				<?=$getmembershipplan->membership_title;?>		
    						</td>
    					</tr>
    					<tr>
    						<td colspan="2">
			    				<?=$userDetails->postal_code?>				
    						</td>
    						<th>
			    				Date of Pooja					
    						</th>
    						<td colspan="2">
			    					<span><?php echo date("d M Y", strtotime($pujabooking->sel_date));?></span>				
    						</td>
    					</tr>
    					<tr>
    						<td colspan="2">
			    				Tel: <?=$userDetails->mobile_code?>	 <?=$userDetails->mobile?>				
    						</td>
    						<th>
			    				Time of Pooja				
    						</th>
    						<td colspan="2">
			    				<span>
			    				     <?php if($bookingTime->num_rows()>0){ ?> <?=$actbooktime->from_time;?> - <?=$actbooktime->to_time;?> <?php } ?></span>			
    						</td>
    					</tr>
    					<tr>
    						<td  colspan="2">
			    				Email: <?=$userDetails->email?>		
    						</td>
    						<th>
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

    					<tr>
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
 
                        <tr>
        					<td><strong>S/NO:</strong></td>
        					<td class="text-center"><strong>DESCRIPTION</strong></td>
        					<td class="text-center"><strong>QTY</strong></td>
        					<td class="text-right"><strong> RATE (S$) </strong></td>
        					<td class="text-right"><strong> AMOUNT (S$)  </strong></td>
                        </tr>
    			 
                    
                        <tr>
                            <td><?=++$indcount;?></td>
                            <td><?=$actpujalist->description_charge;?></td>
                            <td  class="text-right">1.00</td>
                            <td  class="text-right">
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
                                 <td  class="text-right">
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
                        <tr>
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
                                     <td class="text-right">
                            <?php if($pujabooking->pre_priest==0){ ?>
                                        0.00
                                <?php } else { 
                               ?> 
                                        1.00
                                <?php  } ?>
                                </td>
                            <td class="text-right">

                                <?php if($pujabooking->pre_priest==0){ ?>
                                        0.00
                                <?php } else { 
                                        $totalamt=$totalamt+10;
                               ?> 
                                        10.00
                                <?php  } ?>
                                </td>
 
                             <td class="text-right">
                            <?php if($pujabooking->pre_priest==0){ ?>
                                        0.00
                                <?php } else { 
                               ?> 
                                        10.00
                                <?php  } ?>
                                </td>

                            </td>
                            
                        </tr>

<?php } if($pujabooking->venue==0){ ?>
                         <tr>
                            <td><?=++$indcount;?></td>
                            <td>
                                <?php if($pujabooking->venue==0){ ?>
                                    At Temple 
                                <?php } else { ?> 
                                    At your place.
                                <?php  } ?></td>
                                <td  class="text-right">1.00</td>
                            <td  class="text-right">
                                <?php if($pujabooking->venue==0){ ?> 
                                    <?=$actpujalist->venue_price;?>
                                <?php
                                $totalamt=$totalamt+$actpujalist->venue_price;

                                 } else { ?>
                                   0.00
                                <?php  } ?>
                                </td>
                                
                                <td  class="text-right">
                                <?php if($pujabooking->venue==0){ ?> 
                                    <?=$actpujalist->venue_price;?>
                                <?php
 
                                 } else { ?>
                                   0.00
                                <?php  } ?>
                                </td>
                        </tr>
                       

<?php } if($pujabooking->puja_samagri==0){ ?>
                        <tr>
                            <td><?=++$indcount;?></td>
                            <td>
                                Puja Samagri 
                            </td>
                            <td class="text-right">
                                <?php if($pujabooking->puja_samagri==1){ ?>
                                    0.00 
                                <?php } else { ?> 
                                    <?='1.00';?>
                                <?php } ?>
                            </td>
                            <td class="text-right">
                                <?php if($pujabooking->puja_samagri==1){ ?>
                                    0.00 
                                <?php } else { ?> 
                                    <?=$pujabooking->pooja_samagri_amt;?>
                                <?php  $totalamt=$totalamt+$pujabooking->pooja_samagri_amt; } ?>
                            </td>
                            <td class="text-right">
                                <?php if($pujabooking->puja_samagri==1){ ?>
                                    0.00 
                                <?php } else { ?> 
                                    <?=$pujabooking->pooja_samagri_amt;?>
                                <?php } ?>
                            </td>
                        </tr>
                        <?php } if($pujabooking->havan_samagri==0){ ?>
                         <tr>
                            <td><?=++$indcount;?></td>
                            <td>
                                Havan Samagri 
                            </td>
                            <td  class="text-right">
                                <?php if($pujabooking->havan_samagri==1){ ?>
                                    0.00 
                                <?php } else { ?> 
                                    <?='1.00';?>
                                <?php } ?>
                            </td>
                            <td  class="text-right">
                                <?php if($pujabooking->havan_samagri==1){ ?>
                                    0.00 
                                <?php } else { ?> 
                                    <?=$pujabooking->havan_samagri_amt;?>
                                <?php $totalamt=$totalamt+$pujabooking->havan_samagri_amt; } ?>
                            </td>
                             <td  class="text-right">
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
                             <td  class="text-right">
                                <?php if($pujabooking->bhog_prasad==1){ ?>
                                    0.00 
                                <?php } else { ?> 
                                    <?='1.00';?>
                                    <?php } ?>
                            </td>
                            
                            <td  class="text-right">
                                <?php if($pujabooking->bhog_prasad==1){ ?>
                                    0.00 
                                <?php } else { ?> 
                                    <?=$pujabooking->bhog_prasad_amt;?>
                                <?php $totalamt=$totalamt+$pujabooking->bhog_prasad_amt; } ?>
                            </td>
                            
                            <td  class="text-right">
                                <?php if($pujabooking->bhog_prasad==1){ ?>
                                    0.00 
                                <?php } else { ?> 
                                    <?=$pujabooking->bhog_prasad_amt;?>
                                    <?php } ?>
                            </td>
                            
                            
                        </tr>
<?php } if($pujabooking->lunch==0){ ?>
                        <tr>
                            <td><?=++$indcount;?></td>
                            <td>
                                Lunch
                                
                               
                                
                            </td>
                            <td  class="text-right"> <?php 
                               if($pujabooking->lunch==1){ 
                                    echo 0;
                                } else {  
                                    echo '<strong>( Selected No. Of Guest "';
                                        if($pujabooking->lunch_member==1){
                                            echo '0-50';
                                        } else if($pujabooking->lunch_member==2){
                                            echo '50-100';
                                        } else if($pujabooking->lunch_member==3){
                                            echo '100-150';
                                        } else if($pujabooking->lunch_member==4){
                                            echo '150-200';
                                        } else if($pujabooking->lunch_member==5){
                                            echo '200-250';
                                        } else if($pujabooking->lunch_member==6){
                                            echo '250-300';
                                        } else if($pujabooking->lunch_member==7){
                                            echo '300-350';
                                        } else if($pujabooking->lunch_member==8){
                                            echo '350-400';
                                        } else if($pujabooking->lunch_member==9){
                                            echo '400-450';
                                        } else if($pujabooking->lunch_member==10){
                                            echo '450-500';
                                        }
                                    echo '")</strong>';
                                }?></td>
                            <td  class="text-right">
                               <?php 
                                $lunch=0.00;
                               if($pujabooking->lunch==1){ 
                                    echo $lunch;
                                } else {
                                    $lunch=$pujabooking->tot_lunch*$pujabooking->lunch_member;
                                    echo $lunch;
                                    $totalamt=$totalamt+$lunch;
                                }?>
                            </td>
                            <td  class="text-right">
                               <?php 
                          
                               if($pujabooking->lunch==1){ 
                                    echo $lunch;
                                } else {
                                    echo $lunch;
                                }?>
                            </td>
                        </tr>
                        <?php } if($pujabooking->dinner==0){ ?>
                        <tr>
                            <td><?=++$indcount;?></td>
                            <td>
                                Dinner
                            </td>
                            <td  class="text-right">
                               <?php 
                               if($pujabooking->dinner==1){ 
                                    echo 0;
                                } else {  
                                    echo '<strong>( Selected No. Of Guest "';
                                        if($pujabooking->dinner_member==1){
                                            echo '0-50';
                                        } else if($pujabooking->dinner_member==2){
                                            echo '50-100';
                                        } else if($pujabooking->dinner_member==3){
                                            echo '100-150';
                                        } else if($pujabooking->dinner_member==4){
                                            echo '150-200';
                                        } else if($pujabooking->dinner_member==5){
                                            echo '200-250';
                                        } else if($pujabooking->dinner_member==6){
                                            echo '250-300';
                                        } else if($pujabooking->dinner_member==7){
                                            echo '300-350';
                                        } else if($pujabooking->dinner_member==8){
                                            echo '350-400';
                                        } else if($pujabooking->dinner_member==9){
                                            echo '400-450';
                                        } else if($pujabooking->dinner_member==10){
                                            echo '450-500';
                                        }
                                    echo '")</strong>';
                                }?>
                            </td>
                            <td  class="text-right">
                               <?php 
                               $dinner=0.00;
                               if($pujabooking->dinner==1){ 
                                    echo $dinner;
                                } else {
                                    $dinner=$pujabooking->tot_dinner*$pujabooking->dinner_member;
                                    
                                        echo $dinner;
                                        $totalamt=$totalamt+$dinner;
                                }?>
                            </td>
                             <td  class="text-right">
                               <?php 
                                
                               if($pujabooking->dinner==1){ 
                                    echo $dinner;
                                } else {
                                        echo $dinner;
                                }?>
                            </td>
                        </tr>
                        
                        <?php }  if($pujabooking->refeshments==0){ ?>
                         <tr>
                            <td><?=++$indcount;?></td>
                            <td>
                                Refeshments
                            </td>
                            <td  class="text-right">
                                 <?php 
                               $refeshments=0.00;
                               if($pujabooking->refeshments==1){ 
                                
                                } else { 
                                     $refeshments=$pujabooking->tot_refreshment*$pujabooking->refreshment_member;
                                    
                                          $refeshments; $totalamt=$totalamt+$refeshments;
                                }?>
                                 <?php 
                               if($pujabooking->refeshments==1){ 
                                    
                                } else {  
                                    echo '<strong>( Selected No. Of Guest "';
                                        if($pujabooking->refreshment_member==1){
                                            echo '0-50';
                                        } else if($pujabooking->refreshment_member==2){
                                            echo '50-100';
                                        } else if($pujabooking->refreshment_member==3){
                                            echo '100-150';
                                        } else if($pujabooking->refreshment_member==4){
                                            echo '150-200';
                                        } else if($pujabooking->refreshment_member==5){
                                            echo '200-250';
                                        } else if($pujabooking->refreshment_member==6){
                                            echo '250-300';
                                        } else if($pujabooking->refreshment_member==7){
                                            echo '300-350';
                                        } else if($pujabooking->refreshment_member==8){
                                            echo '350-400';
                                        } else if($pujabooking->refreshment_member==9){
                                            echo '400-450';
                                        } else if($pujabooking->refreshment_member==10){
                                            echo '450-500';
                                        }
                                    echo '")</strong>';
                                }?>
                                
                                </td>
                            <td class="text-right">
                               <?php 
                               if($pujabooking->refeshments==1){ 
                                    echo $refeshments;
                                } else {
                                    echo $refeshments; 
                                }?>
                            </td>
                             <td class="text-right">
                               <?php 
                               if($pujabooking->refeshments==1){ 
                                    echo $refeshments;
                                } else {
                                    echo $refeshments; 
                                }?>
                            </td>
                        </tr>
                        <?php } ?>
                        
                        
                    </tbody>
             
            <tfoot>
                <tr>
                    <td colspan="4" class="priceWeight">Total</td>
                    <td  class="text-right" class="priceWeight">SGD $<?=$totalamt;?></td>
                 </tr>
<?php if($paymentdetails->num_rows()>0){

$due_amts=0;
$due_date='';
 foreach ($paymentdetails->result() as $paydel) {
 $due_amts=$paydel->due_amt;

 $due_date=$paydel->paydate; ?>
        <tr class="paymentPaidPreview">
            <td  colspan="3">Deposit Payment: <span><?=$paydel->pay_percent;?></span>%</td>
            <td  class="text-right">Paid SGD <span>$<?=$paydel->amt_pay;?></span></td>
            <td  class="text-right">Due SGD <span>$<?=$paydel->due_amt;?></span></td>
        </tr>
 <?php  


} ?>
<?php if($due_amts>0){ ?>
    <tr>
        <td colspan="5"  class="text-right">Due Amount : $<?=$due_amts;?> SGD<br /> Due Date :
            <?php $dues = date('Ymd',strtotime($due_date));?>
            <?=date('Y-M-d', strtotime($dues+"+5 day"))?>
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
                    
    				</tfoot>

    			</table>
    			
    			
    		</div>
       
						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
	</div>
</body>
</html>