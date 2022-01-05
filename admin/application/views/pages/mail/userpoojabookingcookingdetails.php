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
                             
                            
                            <td  class="text-right">
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