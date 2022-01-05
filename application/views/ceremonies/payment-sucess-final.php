  <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  border: 1px solid
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 13px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

  <div class="container" style="margin-top: 80px;">
            <div id="printableArea2">
                    <div class="row">
                        <div class="col-sm-12 col-lg-12">
                            <div class="card">
                               <div class="card-body">
                                    <div class="table-responsive">
                                        <button onclick="PrintElem('printableArea')" class="btn btn-success btn-xs">Print Invoice</button>
                                    </div>

                                    <?php echo $this->session->flashdata('success');?> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="printableArea">
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
<div class="table-responsive">
    <div class="row">
        <div class="col-sm-12">
        <?php 
            $this->db->select('*');
            $this->db->from('slnt_crmn_booking');
            $this->db->where('userid',$_COOKIE["login_user"]);
            $this->db->where('id',$this->uri->segment(2));
            $this->db->order_by('id','DESC');
            $this->db->limit(1);
            $myboo = $this->db->get()->row();
            $last_pay_amt = $myboo->last_pay_amt;
            $dueamt = $myboo->dueamt;
            $cdueamt = 0.00;
            $last_pay = $last_pay_amt+$dueamt;
            $datan = array(
                'pay_with'=> 'PayPal',
                'last_pay_amt'=> $last_pay,
                'dueamt'=> $cdueamt
            );
            $this->db->where(array(
                'userid'=>$_COOKIE["login_user"],
                'id'=>$this->uri->segment(2))
            );
            $this->db->update('slnt_crmn_booking',$datan);
                $this->db->select('*');
                $this->db->from('slnt_crmn_booking');
                $this->db->where('userid',$_COOKIE["login_user"]);
                $this->db->where('status',1);
                $this->db->where('id',$this->uri->segment(2));
                $this->db->order_by('id','DESC');
                $this->db->limit(1);
                $mybooing = $this->db->get();
    if ($mybooing->num_rows()>0) {
        $mybooingslot = $mybooing->row();
  
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
                                        echo $actpriest->priest_price; 
                                        $totalamt=$totalamt+$actpriest->priest_price;
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
 
     <?php if($mybooingslot->catering==0){   ?>
                  
                    <?php if($mybooingslot->dinner==0){ 
                                    $this->db->select('*');
                                    $this->db->from('slnt_ceremonies_catering');
                                    $this->db->where('puja_id',$mybooingslot->cer_evnt_type);
                                    $this->db->where('catering_type','Dinner');
                                    $priest2 = $this->db->get()->result();
                                    $dinner=0.00;
                                     foreach ($priest2 as $value) {
                                        $dinner=$dinner+$value->catering_price;
                                    }
                                      
                                    $totalamt=$totalamt+$dinner;
                     ?>
                         <tr>
                            <td class="text-left"><?php echo $count; $count++;?></td>
                            <td class="text-left">Dinner</td>
                            <td class="text-left"><?php    echo $dinner; ?> </td>
                        </tr>
                    <?php } ?>

                    <?php if($mybooingslot->lunch==0){ 
                                    $this->db->select('*');
                                    $this->db->from('slnt_ceremonies_catering');
                                    $this->db->where('puja_id',$mybooingslot->cer_evnt_type);
                                    $this->db->where('catering_type','Lunch');
                                    $priest2 = $this->db->get()->result();
                                    $lunch=0.00;
                                     foreach ($priest2 as $value) {
                                        $lunch=$lunch+$value->catering_price;
                                    }
                                      
                                    $totalamt=$totalamt+$lunch;
                     ?>
                         <tr>
                            <td class="text-left"><?php echo $count; $count++;?></td>
                            <td class="text-left">Lunch</td>
                            <td class="text-left"><?php    echo $lunch; ?> </td>
                        </tr>
                    <?php } ?>

                    <?php if($mybooingslot->refreshment==0){ 
                                    $this->db->select('*');
                                    $this->db->from('slnt_ceremonies_catering');
                                    $this->db->where('puja_id',$mybooingslot->cer_evnt_type);
                                    $this->db->where('catering_type','Refreshment');
                                    $priest2 = $this->db->get()->result();
                                    $refreshment=0.00;
                                     foreach ($priest2 as $value) {
                                        $refreshment=$refreshment+$value->catering_price;
                                    }
                                      
                                    $totalamt=$totalamt+$refreshment;
                     ?>
                         <tr>
                            <td class="text-left"><?php echo $count; $count++;?></td>
                            <td class="text-left">Refreshment</td>
                            <td class="text-left"><?php    echo $refreshment; ?></td>
                        </tr>
                    <?php } ?>
                  <?php } ?>
 

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
                         
                            <td class="text-left">$<span class="txt-amount"><?=$totalamt/2;?></span> SGD</td>
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
   
                </td></tr></td></tr></td></tr></td></tr></td></tr></tfoot></table></div></div></div>
                <div class="row">
                        <div class="col-sm-12 col-lg-12">
                            <div class="card">
                               <div class="card-body">
                                    <div class="table-responsive">
                                        <button onclick="PrintElem('printableArea')" class="btn btn-success btn-xs">Print Invoice</button>
                                        <br /> <br />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div></div>
        </div>
                    
        </div>
            
 