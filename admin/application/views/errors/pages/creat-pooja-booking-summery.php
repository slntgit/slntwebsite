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
	<?php 
	                $this->db->select('*');
                    $this->db->from('slnt_booking_slot_offline');  
                    $this->db->where('id',$this->uri->segment(3));
                    $pujabooking = $this->db->get()->row();
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
 <?php 
    $xcount=1;
?>
	<div class="contentpanel">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
<div class="tab-pane fade in active " id="settings">
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
                        <p>Date  / Time : <span><?php echo $pujabooking->day.', '.$pujabooking->d.'-'.$pujabooking->m.'-'.$pujabooking->y;?>, <?php if($bookingTime->num_rows()>0){ ?> <?=$actbooktime->from_time;?> - <?=$actbooktime->to_time;?> <?php } ?></span></p>
                        <p>Priest Services * : <span><?=$actpujalist->description_charge;?></span></p>
                    </div>
                    <div class="col-12 invoice-details">
                        <h2 class="address head">Payment Details</h2>
                    </div>
                </div>
                <div class="">
<form action="<?=base_url();?>pages/CreatPoojaBookingSummery/<?=$this->uri->segment(3);?>/confirm"  method="post">
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
                               <?php   
                                       echo $pujabooking->pooja_amount;
                                       $totalamt=$totalamt+$pujabooking->pooja_amount;
                                   
                               ?> 
                                
                              
                                </td>
                        </tr>
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
                                        $totalamt=$totalamt+10;
                               ?> 
                                        10
                                <?php  } ?></td>

                            </td>
                        </tr>


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
                  
                </table>
                 <table class="table table-striped tableList" style="width: 100% !important;">
                      <tfoot>
 
                        <tr>
                            <td>
                                <label class="priceWeight">SGD $</label>
                            </td>
                            <td>
                                <input type="text" value="<?=$totalamt;?>" class="form-control totalAmtPujaBooking" readonly="" name="totalamt" id="totalamt" readonly>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <label class="priceWeight">SGD $ (Enter amount after discount)</label>
                            </td>
                            <td>
                                <input type="text" value="<?=$totalamt;?>" class="form-control amounttobepay"  name="amounttobepay" id="amounttobepay" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="priceWeight">Discount SGD $ </label>
                            </td>
                            <td>
                                <input type="text" value="0" class="form-control payamt"  name="payamt" id="payamt"  readonly="" >
                            </td>
                        </tr>
 
 
                        <tr>
                            <td colspan="2" align="center">
                                <input type="submit" value="Confirm Booking" class="btn btn-info" >
                            </td>
                        </tr>
 
 
 
 
                    </tfoot>
                </table>
            </form>
</div>
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
<script>
    $('.amounttobepay').on('keyup',function(){
        var amounttobepay = parseInt($(this).val());
        var totalamt = ($('#totalamt').val());
        var vartd = totalamt-amounttobepay;
        $('#payamt').val(vartd);
    });
</script>
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