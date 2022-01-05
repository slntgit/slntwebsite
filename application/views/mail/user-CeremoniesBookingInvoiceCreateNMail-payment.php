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
	   <div class="contentpanel">		
		  <div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
						<div class="">
						<?php echo $this->session->flashdata('success');?>  
                            <?php 
        $this->db->select('*');
        $this->db->from('slnt_crmn_booking');
        $this->db->where('id',$this->uri->segment(2));
        $this->db->order_by('id','DESC');
        $this->db->limit(1);
        $mybooing = $this->db->get();
    if ($mybooing->num_rows()>0) {
                            $mybooingslot = $mybooing->row();
  	    $this->db->select('*');
		$this->db->from('slnt_arrangedecoration');
		$this->db->where('status',1);
		$this->db->where('id',$mybooingslot->decoration);
		$this->db->order_by('id','DESC');
		$dat_m=$this->db->get();   
                            $totalamt=0.00;
                            $count =1;
                            $this->db->select('*');
                            $this->db->from('slnt_ceremonies');
                            $this->db->where('id',$mybooingslot->cer_evnt_type);
                            $ceremony = $this->db->get();
                            $ceremonydata = $ceremony->row();
                        ?>
            <table class="table table-bordered table-responsive">
 <tbody>
    <tr>
        <th colspan="3">        
            <div class="row">
                <div class="col-sm-12">
                 
        <p class="text-">Your bookings detail will be as below</p>
<?php if($mybooingslot->dueamt>0){  ?>
    <p class="text-danger">Your bookings settled the payment 50% of Deposit. Hence, it will due 5 days before appointed date. It will be due on  <?php  $dues = date('d-m-Y',strtotime($mybooingslot->datetimeids));?>
                                    <?=date('d M Y', strtotime($dues."-5 day"))?>. If due amount will not be refunded and this booking will be cancelled.</p>
                     
                     
<?php  }  ?>

                                        


                                        <p class="text-">We have sent email to your registered email, for your future reference </p>
                                        <p class="text-">See you!</p>

                                    </div>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th></th>
                            <th class="text-left"></th>
                            <th class="text-right">Submitted Date : <?=date('d M Y',strtotime($mybooingslot->create_time))?></th>
                        </tr>
                        <tr>
                            <th colspan="3">Booking Information</th>
                        </tr>

                        <tr>
                            <th colspan="3">Booking ID : <?=$mybooingslot->booking_id;?></th>
                        </tr>

                         <tr>
                            <th colspan="3">Booked Date / Time : <?=date('d M Y h:i:s A',strtotime($mybooingslot->datetimeids));?></th>
                        </tr>

                         <tr>
                            <th colspan="3">Type of Pooja : <?=$ceremonydata->description_charge;?></th>
                        </tr>
                          <tr>
                            <th colspan="3">Venue : 


                                <?php if($mybooingslot->venue==0){  echo 'Yes';  } else { ?>
                                    <p>Home  Address : <?=$mybooingslot->home_address;?></p>
                                    <p>Postal Code : <?=$mybooingslot->postal_code;?></p>
                                    <p><?=$mybooingslot->picup;?> of preis</p>
                                <?php } ?></th>
                        </tr>

                          <tr>
                            <th colspan="3">Catering Menu :  <?php if($mybooingslot->catering==0){  echo 'Yes'; } else { echo 'No'; } ?></th>
                        </tr>

                          <tr>
                            <th colspan="3">Priest Information :

                                <?php 
                                    $this->db->select('*');
                                    $this->db->from('adminlogin');
                                    $this->db->where('id',$mybooingslot->sel_priest);
                                    $pujaListpriest = $this->db->get();
                                    $actpriest = $pujaListpriest->row();
                                ?></th>
                        </tr>
                           <tr>
                            <th colspan="3">Priest ID/Name : <?= $actpriest->name_title;?> <?= $actpriest->name;?> <?= $actpriest->last_name;?></th>
                        </tr>

                        <tr>
                            <th colspan="3">Contact Information : Mobile : +65 <?= $actpriest->mobleno;?> / Email : <?= $actpriest->email;?></th>
                        </tr>

                          <tr>
                            <th colspan="3">Payment Information : </th>
                        </tr>

                        <tr>
                            <th>No</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-right">AMOUNT (SGD)</th>
                        </tr>
                   
                        
                        <tr>
                            <td class="text-left"><?php echo $count; $count++;?></td>
                           <td class="text-left"><?=$ceremonydata->description_charge;?></td>
                            <td class="text-left"><?php
                                $this->db->select('*');
                                $this->db->from('slnt_user_membership');
                                $this->db->where('user_id',$_COOKIE["login_user"]);
                                $this->db->where('pay_status',1);
                                $this->db->order_by('id','DESC');
                                $this->db->limit(1);
                                $membership = $this->db->get();
                                $getmembershipplan = $membership->row();
                                    if($membership->num_rows()>0){
                                       echo $ceremonydata->member_price;
                                       $totalamt=$totalamt+$ceremonydata->member_price;
                                    } else {
                                       echo $ceremonydata->non_member_price; 
                                       $totalamt=$totalamt+$ceremonydata->non_member_price;
                                    }
                                
                               ?> 
                            </td>
                        </tr>
                        
                        
                        
                          <?php if($dat_m->num_rows()>0){ 
                            $decoamt = 0.00;
                            $dfghg = $dat_m->row();
                        ?>
                            	<tr>
                            <td><?php echo $count; $count++;?></td>
                            <td><?=$dfghg->title;?></td>
                            <td><?php
                                $this->db->select('*');
        						$this->db->from('slnt_user_membership');
        						$this->db->where(array('user_id'=>$_COOKIE["login_user"],'pay_status'=>1,'status'=>1));
        						$this->db->order_by('id','DESC');
        						$this->db->limit(1);
        						$user_membership = $this->db->get();
        						$chk=0;
        						if($user_membership->num_rows()>0){
        						     $memrd= $user_membership->row();
                                    $membership_expire=$memrd->membership_expire; 
                                    $membership_buy=$memrd->membership_buy; 
                                    $membership_days=$memrd->membership_days; 
                                    $todaydate = date('Ymd');
                                    $leftdays=$membership_expire-$todaydate;
                                    $date1=date_create(date('Y-m-d'));
                                    $date2=date_create(date('Y-m-d',strtotime($membership_expire)));
                                    $diff=date_diff($date1,$date2);
                                    $chk =$diff->format("%R%a"); 
                                  
        						}
                                
                                if($chk>0){
                                    echo $decoamt = $mybooingslot->decoration_amt;
                                    $totalamt=$totalamt+$mybooingslot->decoration_amt;
                                } else {
                                    echo $decoamt = $mybooingslot->decoration_amt; 
                                       $totalamt=$totalamt+$mybooingslot->decoration_amt;
                                }
                          
                               ?> 
                            </td>
                        </tr>
                        <?php }?>
                        
                        
                        
                        <?php 
                                    $this->db->select('*');
                                    $this->db->from('adminlogin');
                                    $this->db->where('id',$mybooingslot->sel_priest);
                                    $pujaListpriest = $this->db->get();
                         if($pujaListpriest->num_rows()>0){  
                            $actpriest = $pujaListpriest->row();        
                        ?>
                            <tr>
                                <td class="text-left"><?php echo $count; $count++;?></td>
                                <td class="text-left">Preferred Selected Priest Cost</td>
                                <td class="text-left"><?php 
                                        echo $mybooingslot->sel_priest_rs; 
                                        $totalamt=$totalamt+$mybooingslot->sel_priest_rs;
                                    ?>      
                                </td>
                            </tr>
                        <?php }  if($mybooingslot->venue==0){   ?>
                         <tr>
                            <td class="text-left"><?php echo $count; $count++;?></td>
                            <td class="text-left">Temple Fee </td>
                            <td class="text-left"><?php if($mybooingslot->venue==0){  echo $ceremonydata->venue_price; 
                                       $totalamt=$totalamt+$ceremonydata->venue_price; } ?> </td>
                        </tr>
                    <?php } ?>

                     <?php if($mybooingslot->puja_samagri==0){   ?>
                         <tr>
                            <td class="text-left"><?php echo $count; $count++;?></td>
                            <td class="text-left">Pooja  Samagri</td>
                            <td class="text-left"><?php  echo $mybooingslot->pooja_samagri_amt; 
                                       $totalamt=$totalamt+$mybooingslot->pooja_samagri_amt; ?> </td>
                        </tr>
                    <?php } ?>
                        <?php if($mybooingslot->havan_samagri==0){   ?>
                         <tr>
                            <td class="text-left"><?php echo $count; $count++;?></td>
                            <td class="text-left">Havan  Samagri</td>
                            <td class="text-left"><?php  echo $mybooingslot->havan_samagri_amt; 
                                       $totalamt=$totalamt+$mybooingslot->havan_samagri_amt; ?> </td>
                        </tr>
                    <?php } ?>
 
                    <?php if($mybooingslot->bhog_prasad==0){   ?>
                         <tr>
                            <td class="text-left"><?php echo $count; $count++;?></td>
                            <td class="text-left">Bhog Prasad</td>
                            <td class="text-left"><?php  echo $mybooingslot->bhog_prasad_amt; 
                                       $totalamt=$totalamt+$mybooingslot->bhog_prasad_amt; ?> </td>
                        </tr>
                    <?php } ?>
  
 <?php if ($mybooingslot->catering==0) { 
 $mem_status=   $mybooingslot->membership_status; 

                                    

//cate_description
    if ($mybooingslot->catering_items!=NULL) {
     
    $catering=json_decode($mybooingslot->catering_items);

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
                    <tfoot>
                        <tr>
                            <td class="text-left" colspan="2">Net amount to be  settled : </th>
                         
                            <td class="text-left">$<?=$totalamt;?> SGD</td>
                        </tr>
<?php if($mybooingslot->dueamt>0){  ?>
                        <tr>
                            <td class="text-left  text-danger" colspan="2">50% Diposit Payment :  </th>
                         
                            <td class="text-left">$<span class="txt-amount"><?=$totalamt/2;?></span> SGD</td>
                        </tr>
                        <tr>
<td class="text-left text-danger" colspan="2">Due Amount <br />
                                Due Date :  
                                   <?php  $dues = date('d-m-Y',strtotime($mybooingslot->datetimeids));?>
                                    <?=date('d M Y', strtotime($dues."-5 day"))?>
                            </th>
                         
                            <td class="text-left">
                                
<a href="<?=base_url();?>../CeremoniesPaymentBooking/<?=$this->uri->segment(3);?>/<?=$this->uri->segment(4);?>" target="_blank">
Pay Due Amount $<span class="txt-amount"><?=$totalamt/2;?></span> SGD
</a>
                            </td>
                        </tr>
<?php  } else { ?>
        <tr>
                            <td class="text-left" colspan="2">100% Diposit Payment :  </th>
                         
                            <td class="text-left">$<span class="txt-amount"><?=$totalamt;?></span> SGD</td>
                        </tr>
                        <tr>
                            <td class="text-left" colspan="2">Due Amount Payment :  </th>
                        
                            <td class="text-left">$<span class="txt-amount">0</span> SGD</td>
                        </tr>
<?php } ?>
                    </tfoot>
      

        
            </table>
        <?php } ?>
						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
</div>
</body>
</html>