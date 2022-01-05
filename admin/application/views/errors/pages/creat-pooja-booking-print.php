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
                                            <img src="<?=base_url();?>../assets/print-logo.png" clas="img-responsive" style="max-width: 270px;"> 
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
			    					<?=$pujabooking->name_title?> <?=$pujabooking->name?> <?=$pujabooking->last_name?>			
    						</td>
    						<th>
			    				Booking Date				
    						</th>
    						<td colspan="2">
    						    
    						    <?=$pujabooking->create_date;?>	
    						     <?=$pujabooking->create_time;?>	
			    					
    						</td>
    					</tr>
    					<tr>
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
    					<tr>
    						<td colspan="2">
			    				<?=$pujabooking->u_city?>	<?=$pujabooking->u_postalcode?>				
    						</td>
    						<td>
			    			
    						</td>
    						<td colspan="2">
			    					
    						</td>
    					</tr>
    					<tr>
    						<td colspan="2">
			    				<?=$pujabooking->u_postalcode?>				
    						</td>
    						<th>
			    				Date of Pooja					
    						</th>
    						<td colspan="2">
			    					<span><?php echo $pujabooking->day;?>, <?php echo $pujabooking->d;?>-<?php echo $pujabooking->m;?>-<?php echo $pujabooking->y;?></span>				
    						</td>
    					</tr>
    					<tr>
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
    					<tr>
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
                        <tr>
        					<td><strong>S/NO:</strong></td>
        					<td class="text-center"><strong>DESCRIPTION</strong></td>
        					<td class="text-center"><strong>QTY</strong></td>
        					<td class="text-right"><strong> RATE (S$) </strong></td>
        					<td class="text-right"><strong> AMOUNT (S$)  </strong></td>
                        </tr>
    			 
                    
                        <tr>
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


                         <tr>
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
                       


                        <tr>
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
                         <tr>
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
                        <tr>
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

                        <tr>
                            <td>07</td>
                            <td>
                                Lunch
                            </td>
                            <td  class="text-right"> <?php 
                          
                               if($pujabooking->lunch==1){ 
                                    echo '0.00';
                                } else {
                                    echo '1.00';
                                }?></td>
                            <td  class="text-right">
                               <?php 
                                $lunch=0.00;
                               if($pujabooking->lunch==1){ 
                                    echo $lunch;
                                } else {
                                    $this->db->select('*');
                                    $this->db->from('slnt_bhog_catering');
                                    $this->db->where('puja_id',$pujabooking->puja_id);
                                    $this->db->where('catering_type','Lunch');
                                    $priest2 = $this->db->get()->result();
                                   
                                     foreach ($priest2 as $value) {
                                        $lunch=$lunch+$value->catering_price;
                                        }
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
                        <tr>
                            <td>08</td>
                            <td>
                                Dinner
                            </td>
                            <td  class="text-right">
                               <?php 
                                
                               if($pujabooking->dinner==1){ 
                                    echo '0.00';
                                } else {
                                        echo '1.00';
                                }?>
                            </td>
                            <td  class="text-right">
                               <?php 
                               $dinner=0.00;
                               if($pujabooking->dinner==1){ 
                                    echo $dinner;
                                } else {
                                    $this->db->select('*');
                                    $this->db->from('slnt_bhog_catering');
                                    $this->db->where('puja_id',$pujabooking->puja_id);
                                    $this->db->where('catering_type','Dinner');
                                    $priest2d = $this->db->get()->result();
                                    
                                     foreach ($priest2d as $valued) {
                                        $dinner=$dinner+$valued->catering_price;
                                    }
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
                        
                         <tr>
                            <td>09</td>
                            <td>
                                Refeshments
                            </td>
                            <td  class="text-right">
                                 <?php 
                               $refeshments=0.00;
                               
                               if($pujabooking->refeshments==1){ 
                                    echo '0.00';
                                } else {
                                    $this->db->select('*');
                                    $this->db->from('slnt_bhog_catering');
                                    $this->db->where('puja_id',$pujabooking->puja_id);
                                    $this->db->where('catering_type','Refreshment');
                                    $priest2dr = $this->db->get()->result();
     
                                     foreach ($priest2dr as $valuedr) {
                                        $refeshments=$refeshments+$valuedr->catering_price;
                                    }
                                        echo '1.00'; 
                                        $totalamt=$totalamt+$refeshments;
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
                    </tbody>
             
            <tfoot>
                <tr>
                    <td colspan="4" class="priceWeight">Total</td>
                    <td  class="text-right" class="priceWeight">SGD $<?=$totalamt;?></td>
                 </tr>
                
                <tr>
                    <td colspan="4" class="priceWeight">Collected Amount</td>
                    <td  class="text-right" class="priceWeight">SGD $<?=$pujabooking->amounttobepay;?></td>
                 </tr>
    
                   <tr>
                    <td colspan="4" class="priceWeight">Discount Amount</td>
                    <td  class="text-right" class="priceWeight">SGD $<?=$totalamt-$pujabooking->amounttobepay;?></td>
                 </tr>
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