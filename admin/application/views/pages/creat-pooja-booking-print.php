 <div class="mainpanel">
	<div class="pageheader">
		<div class="media">
		
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>Manage  Bookings</li>
				</ul>
				<h4>Pooja Booking Summery</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	<div class="contentpanel">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
<div>
<div id="invoice">
    <div class="invoice">
       <div>
            <main>
                <?php
                            $this->db->select('*');
                            $this->db->from('slnt_booking_slot_offline');
                            $this->db->where('id',$this->uri->segment(3)); 
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

 ?>
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
  		 
	<div  id="divToPrint">
   	<div class="row">
    	<div class="col-md-12">
			<div class="">
    			<table class="table table-condensed table-bordered" CELLPADDING=0 CELLSPACING=0>
    				<tbody>
    				    <tr>
    						<td colspan="5" align="center"> 
    							   <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <!--<img src="<?=base_url();?>../assets/print-logo.png" clas="img-responsive" style="max-width: 270px;"> -->
                                            <img src="<?=base_url();?>../assets/BookingLogoNew.png" clas="img-responsive" style="width: 100%;height:auto;">
                                        </div>
                                    </div>
    						</td>
    					</tr>
                        <style>
                         
                        table td {
                            border: 0.2px solid #c1c1c1;
                            padding-left:10px !important;
                        }
                         
                        </style>
    					<!--<tr align="center">-->
    					<!--	<td colspan="5"> -->
    					<!--		<strong>SIDDH PEETH SHREE LAKSHMINARAYAN TEMPLE</strong>-->
    					<!--	</td>-->
    					<!--</tr>-->
    					<!--<tr align="center">-->
    					<!--	<td colspan="5">-->
			    		<!--			5 Chander Road, Singapore 219528-->
    					<!--	</td>-->
    					<!--</tr>-->
    					<!--<tr align="center">-->
    					<!--	<td colspan="5">-->
			    		<!--			Tel: 62930195 Fax: 629000000 Email: admin@spslnt.org.sg-->
    					<!--	</td>-->
    					<!--</tr>-->
    					<!--<tr align="center">-->
    					<!--	<td colspan="5">-->
			    		<!--			Web: spslnt.org.sg UEN NO: S67SS0019D-->
    					<!--	</td>-->
    					<!--</tr>-->

    					<tr align="center">
    						<td align="center" colspan="5">
			    					<h4>OFFICIAL RECEIPT</h4>				
    						</td>
    					</tr>

    					<tr align="center">
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
    					<tr align="center">
    						<td colspan="2">
			    					<?=$pujabooking->name_title?> <?=$pujabooking->name?> <?=$pujabooking->last_name?>			
    						</td>
    						<th>
			    				Booking Date				
    						</th>
    						<td colspan="2">
    						    
    						    <?=date('d-M-Y',strtotime($pujabooking->create_date));?>	
    						     <?=$pujabooking->create_time;?>	
			    					
    						</td>
    					</tr>
    					<tr align="center">
    						<td colspan="2">
			    				<?=$pujabooking->u_address?>				
    						</td>
    						<th>
			    				Booked by				
    						</th>
    						<td colspan="2">
    						    <?php 
    						    
    						    
    						    
    						        $this->db->select('*');
                                    $this->db->from('adminlogin');
                                    $this->db->where('email',$pujabooking->booking_created_by);
                                    $pujaLists = $this->db->get();
                                    $actpujalists = $pujaLists->row();
    						    ?>
			    				<?=$actpujalists->name?> <?=$actpujalists->first_name?> <?=$actpujalists->last_name?>				
    						</td>
    					</tr>
    					<tr align="center">
    						<td colspan="2">
			    				<?=$pujabooking->u_city?>	<?=$pujabooking->u_postalcode?>				
    						</td>
    						<td>
			    			
    						</td>
    						<td colspan="2">
			    					
    						</td>
    					</tr>
    					<tr align="center">
    						<td colspan="2">
			    				<?=$pujabooking->u_postalcode?>				
    						</td>
    						<th>
			    				Date of Pooja					
    						</th>
    						<td colspan="2">
			    					<span><?php echo $pujabooking->day;?>, <?php echo $pujabooking->d;?>-<?php echo date('M',strtotime($pujabooking->m));?>-<?php echo $pujabooking->y;?></span>				
    						</td>
    					</tr>
    					<tr align="center">
    						<td colspan="2">
			    				Tel: +65	 <?=$pujabooking->mobleno?>				
    						</td>
    						<th>
			    				Time of Pooja				
    						</th>
    						<td colspan="2">
			    				<span>
			    				     <?php if($bookingTime->num_rows()>0){ ?> <?=$actbooktime->from_time;?> - <?=$actbooktime->to_time;?> <?php } ?></span>			
    						</td>
    					</tr>
    					<tr align="center">
    						<td  colspan="2">
			    				Email: <?=$pujabooking->email?>		
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
                        <tr align="center">
        					<td><strong>S/NO:</strong></td>
        					<td class="text-center"><strong>DESCRIPTION</strong></td>
        					<td class="text-center"><strong>QTY</strong></td>
        					<td class="text-right"><strong> RATE (S$) </strong></td>
        					<td class="text-right"><strong> AMOUNT (S$)  </strong></td>
                        </tr>
    			 
                    
                        <tr align="center">
                            <td>01</td>
                            <td><?=$pujabooking->title;?></td>
                            <td  class="text-right">1.00</td>
                            <td  class="text-right">
                               <?php 
                           
  
                                       echo $pujabooking->pooja_amount;
                                       $totalamt=$totalamt+$pujabooking->pooja_amount;

                               ?> 
                                
                              
                                </td>
                                 <td  class="text-right">
                               <?php 
                        
                                       echo $pujabooking->pooja_amount;
                             
                                 
                                
                               ?> 
                                
                              
                                </td>
                        </tr>
                        <tr align="center">
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
                                        $totalamt=$totalamt+$pujabooking->sel_priest_rs;
                                    echo $pujabooking->sel_priest_rs;
                                 } ?>
                                </td>
 
                             <td class="text-right">
                            <?php if($pujabooking->pre_priest==0){ ?>
                                        0.00
                                <?php } else {
                                    echo $pujabooking->sel_priest_rs;
                                } ?>
                                </td>

                            </td>
                            
                        </tr>


                         <tr align="center">
                            <td>03</td>
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
                       


                        <tr align="center">
                            <td>04</td>
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
                         <tr align="center">
                            <td>05</td>
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
                        <tr align="center">
                            <td>06</td>
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

                       
<?php if ($pujabooking->catering==0) { 

$mem_status=$pujabooking->membership_status;
                                    

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



    <tr align="center">
        <td>7</td>
        <td colspan="3">
            <h4>Catering</h4>
                     
        </td>
        <td align="right"><?=$totalofcatering = $aditional+$itemamount;?></td>
         <?php  $totalamt = $totalamt+$totalofcatering;?>  
    </tr>
     <tr align="center">
        <td colspan="6" align="left" class="text-left">
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

                <tr align="center">
                    <td>note_for_catering </td>
                    <td><?php echo $catering->note_for_catering;?></td>
                    <td></td>
                </tr>

                <tr align="center">
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
                <!--<tr>-->
                <!--    <td colspan="4" class="priceWeight">Total</td>-->
                <!--    <td  class="text-right" class="priceWeight">SGD $<?=$totalamt;?></td>-->
                <!-- </tr>-->
                 
                 <tr align="center">
                    <td class=""><strong></strong></td>
                    <td class=""><strong></strong></td>
                    <td class=""><strong></strong></td>
                    <td  class="priceWeight"><strong>Total</strong></td>
                    <td  class="shu-bold" class="priceWeight"><strong> SGD $<?=$totalamt;?></strong></td>
                 </tr>
                
                <tr align="center" >
                    <td class=""><strong></strong></td>
                    <td class=""><strong></strong></td>
                    <td class=""><strong></strong></td>
                    <td class="priceWeight"><strong>Paid</strong></td>
                    <td class="shu-bold" class="priceWeight"><strong>SGD $<?=$pujabooking->amounttobepay;?></strong></td>
                 </tr>
    
                   <tr align="center">
                    <td class=""><strong></strong></td>
                    <td class=""><strong></strong></td>
                    <td class=""><strong></strong></td>
                    <td class="priceWeight"><strong>Balance Change</strong></td>
                    <td class="shu-bold" class="priceWeight"><strong>SGD $<?=$totalamt-$pujabooking->amounttobepay;?></strong></td>
                 </tr>
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
        <!--<p><strong>Created By  :</strong> <?php 
                                    $this->db->select('*');
                                    $this->db->from('adminlogin');
                                    $this->db->where('adminusername',$pujabooking->booking_created_by);
                                    $pujaListpriest = $this->db->get();
                                    $actpriest = $pujaListpriest->row();
                                    if($pujaListpriest->num_rows()>0){
                                        echo $actpriest->name_title.' '.$actpriest->name.' '.$actpriest->last_name; echo '( '.$actpriest->adminusername.' )';
                                    }
        ?></p>-->
        
        <p><strong>Created By  :</strong> SPSLNT admin(admin@spslnt.org.sg)</p>
    </td>
</tr>
    				</tfoot>

    			</table>
    			
    			
    		</div>
    	</div>
    </div>
</div></div>
   
   <footer class="text-center">
                  <button onclick="PrintDiv();" type="button" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary">
                                        <span class="mat-button-wrapper">Print</span>
                                        <div matripple="" class="mat-ripple mat-button-ripple"></div>
                                        <div class="mat-button-focus-overlay"></div>
                                    </button>
                                    
            </footer>
<br /><br />
 
            </main>
        </div>
        <div></div>
    </div>
</div>   
</div>
 
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
</div>

<style>
.head{
    font-size:16px; font-weight:700; color:#333;
}
    .searchData{
        background: #002147 !important;
        padding: 5px !important;
       <?php if(isset($_GET['poojaId'])){ echo ' display:none;'; }else {  echo ' display:';  } ?>
    }
    .text-white{
        color:#fff;
    }
    .searchdata{
            font-size: 14px;
            background:#ffffff52;
            padding: 10px;
            margin: 2px;
    }
</style>
  
  
		  
		  
		  	  <style type="text/css">
		  	@import url(http://fonts.googleapis.com/css?family=Roboto);

/****** LOGIN MODAL ******/
.loginmodal-container {
  padding: 30px;
  max-width: 350px;
  width: 100% !important;
  background-color: #F7F7F7;
  margin: 0 auto;
  border-radius: 2px;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  overflow: hidden;
  font-family: roboto;
}

.loginmodal-container h1 {
  text-align: center;
  font-size: 1.8em;
  font-family: roboto;
}

.loginmodal-container input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  position: relative;
}

.loginmodal-container input[type=text], input[type=password] {
  height: 44px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.loginmodal-container input[type=text]:hover, input[type=password]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.loginmodal {
  text-align: center;
  font-size: 14px;
  font-family: 'Arial', sans-serif;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
/* border-radius: 3px; */
/* -webkit-user-select: none;
  user-select: none; */
}

.loginmodal-submit {
  /* border: 1px solid #3079ed; */
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #4d90fe;
  padding: 17px 0px;
  font-family: roboto;
  font-size: 14px;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.loginmodal-submit:hover {
  /* border: 1px solid #2f5bb7; */
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}

.loginmodal-container a {
  text-decoration: none;
  color: #666;
  font-weight: 400;
  text-align: center;
  display: inline-block;
  opacity: 0.6;
  transition: opacity ease 0.5s;
} 

.login-help{
  font-size: 12px;
}
		  </style>