<style>
 @media(min-width : 768px){
    .tab-content {
    overflow: hidden!important;
    margin-top: 100px !important;
    margin-bottom:10px !important;
}
}

 @media(max-width : 767px){
     .td-block{
         display:block !important;
     }
    .tab-content {
    overflow: hidden!important;
    margin-top:20px !important;
    margin-bottom:10px !important;
}
.inner_header{
    font-size:32px !important!important;
}
.sel-item {
    max-width: 100% !important!important;
    margin: 1%!important;
    text-align: center!important;
}
}
.img-responsive{
    max-width:100%!important;
}
input[type=file].form-control {
    display: block!important;
    width: 100% !important!important;
    height: auto!important;
    padding: 1rem .5rem 0.5rem 0.9rem !important!important;
    font-size: 1rem!important;
    font-weight: 400!important;
    line-height: 1.5!important;
    color: #495057!important;
    background-color: #fff!important;
    background-clip: padding-box!important;
    border: 1px solid #b1b1b1!important;
    border-radius: 4px!important;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out!important;
}
</style>
<?php 

           



        $this->db->select('*');
        $this->db->from('slnt_crmn_booking');
        $this->db->where('userid',$_COOKIE["login_user"]);
        if ($this->uri->segment(3)!='') {
           $this->db->where('id',$this->uri->segment(3));
        }
        $this->db->where('status',0);
        $this->db->order_by('id','DESC');
        $this->db->limit(1);
        $mybooing = $this->db->get();
if ($mybooing->num_rows()>0) {
    $mybooingslot = $mybooing->row(); 

//decoration
    	$this->db->select('*');
		$this->db->from('slnt_arrangedecoration');
		$this->db->where('status',1);
		$this->db->where('id',$mybooingslot->decoration);
		$this->db->order_by('id','DESC');
		$dat_m=$this->db->get();      

?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="tab-pane fade  in active row " id="messages">
    	<div class="col-sm-12">
		<input type="hidden" name="pujaid" id="pujaid" value="<?=$mybooingslot->cer_evnt_type;?>">
		<input type="hidden" name="id" id="id" value="<?=$mybooingslot->id;?>">
			<h2 class="text-center">Payment Details
				<?php if($this->uri->segment(2)=='Cancel'){
					?>
					<span class="text-danger">Transaction cancelled, Please try again</span>
					<?php 
				} ?>
			</h2> 
			<div class="col-sm-12">
			    <table cellspacing="0" cellpadding="0"  class="table table-responsive tableList" style="width: 100% !important;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>DESCRIPTION</th>
                            <th>AMOUNT (SGD)</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php 
							$totalamt=0.00;
							$count =1;
                    		$this->db->select('*');
                            $this->db->from('slnt_ceremonies');
                            $this->db->where('id',$mybooingslot->cer_evnt_type);
                            $ceremony = $this->db->get();
                            $ceremonydata = $ceremony->row();
                    	?>
                    	<tr>
                            <td><?php echo $count; $count++;?></td>
                            <td><?=$ceremonydata->description_charge;?></td>
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
                                 
                                      if($chk>30){
                                          //redirect('poojaBooking/Services-Date-Time');
                                      }
                                     if($chk>=0 && $chk<=30){
                                         $states='is expiring within '.$chk;
                                    } else if($chk<0){
                                        $states='was expired overdue '.$chk;
                                    }
        						}
                                
                                if($chk>0){
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
                                    echo $decoamt = $dfghg->membership_amount;
                                    $totalamt=$totalamt+$dfghg->membership_amount;
                                } else {
                                    echo $decoamt = $dfghg->none_membership_amount; 
                                       $totalamt=$totalamt+$dfghg->none_membership_amount;
                                }
                            
                            //$mybooingslot->decoration
                                $datas= array('decoration_amt'=>$decoamt);
                                $this->db->where('id',$mybooingslot->id);
                                $this->db->update('slnt_crmn_booking',$datas);
                            
                            
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
	                        	<td><?php echo $count; $count++;?></td>
	                        	<td>Preferred Selected Priest Cost</td>
	                        	<td><?php 
	                        			echo $mybooingslot->sel_priest_rs; 
	                        			$totalamt=$totalamt+$mybooingslot->sel_priest_rs;
	                        		?>     	
	                            </td>
	                        </tr>
	                    <?php }  if($mybooingslot->venue==0){   ?>
                         <tr>
                        	<td><?php echo $count; $count++;?></td>
                        	<td>Temple Fee </td>
                        	<td><?php if($mybooingslot->venue==0){  echo $ceremonydata->venue_price; 
                                       $totalamt=$totalamt+$ceremonydata->venue_price; } ?> </td>
                        </tr>
                    <?php } ?>

                     <?php if($mybooingslot->puja_samagri==0){   ?>
                         <tr>
                        	<td><?php echo $count; $count++;?></td>
                        	<td>Puja  Samagri</td>
                        	<td><?php  echo $mybooingslot->pooja_samagri_amt; 
                                       $totalamt=$totalamt+$mybooingslot->pooja_samagri_amt; ?> </td>
                        </tr>
                    <?php } ?>
                     	<?php if($mybooingslot->havan_samagri==0){   ?>
                         <tr>
                        	<td><?php echo $count; $count++;?></td>
                        	<td>Havan  Samagri</td>
                        	<td><?php  echo $mybooingslot->havan_samagri_amt; 
                                       $totalamt=$totalamt+$mybooingslot->havan_samagri_amt; ?> </td>
                        </tr>
                    <?php } ?>
 
                    <?php if($mybooingslot->bhog_prasad==0){   ?>
                        <tr>
                            <td><?php echo $count; $count++;?></td>
                            <td>Bhog Prasad</td>
                        	<td><?php  echo $mybooingslot->bhog_prasad_amt; 
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
	                    	<td>Net amount to be  settled : </th>
	                    	<td></td>
	                    	<td>$<?=$totalamt;?> SGD</td>
                    	</tr>

                    	<tr>
	                    	<td>Payment Amount </th>
	                    	<td>
	                    		<select name="payment_parts" id="payment_parts" class="form-control prceDept" onchange="calprice(this.value,'<?=$mybooingslot->id;?>');">
	                    			<option value="100">100%</option>
	                    		</select>
	                    	</td>
	                    	<td>$<span class="txt-amount"><?=$totalamt;?></span> SGD


<input type="hidden" name="totalval" id="totalval" value="<?=$totalamt;?>">
<?php 
            $datan = array(
                'last_pay_amt'=> $totalamt,
                'dueamt'=> 0
            );
            $this->db->where(array('userid'=>$_COOKIE["login_user"],'id'=>$mybooingslot->id,'status'=>0));
            $this->db->update('slnt_crmn_booking',$datan);
?>
	                    	</td>
                    	</tr>
                    	<tr>
                    		<th colspan="3">
                    			<label>
                    				<input type="checkbox" name="tnc" id="tnc" /> <a href="<?=base_url('TermsAndCondition');?>" target="_blank"> I agree to the Terms & Conditions
                    			</a></label>
                    		</th>
                    	</tr>
                    	<tr>
                    		<th colspan="3"  align="center">
                    			 <div class="panel-group" id="accordion-ll">
                <div class="panel panel-default">
                    <div class="panel-heading-ss">
                        <h4 class="panel-title-a">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            <!--<img src="<?=base_url();?>assets/pay-now.png" class="img-responsive" style="max-width: 160px;">-->
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in show">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">



<form    action="https://www.paypal.com/cgi-bin/webscr" method="post" >
  <br />
 <button type="submit" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary text-white">
	<span class="mat-button-wrapper">Pay With PayPal </span></button>  
<?php 
//$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypal_url = 'https://www.paypal.com/cgi-bin/webscr'; //LIVE PayPal API URL
$paypal_id = 'info@lakshminarayantemple.com'; //Business Email

  
?>
<input type="hidden" name="business" value="info@lakshminarayantemple.com"  style="opacity: 0;">
<input type="hidden" name="cmd" value="_xclick" style="opacity: 0;">
<input type="hidden" name="item_name" value="<?=$ceremonydata->description_charge;?>" style="opacity: 0;">
<input type="hidden" name="item_number" value="<?=$mybooingslot->id;?>" style="opacity: 0;">
<input type="hidden" name="amount" class="amount"  value="<?=$totalamt;?>" style="opacity: 1;">
<input type="hidden" name="currency_code" value="SGD" style="opacity: 0;">
<input type='hidden' name='cancel_return' value='<?= base_url();?>Ceremonies/Cancel/<?=$mybooingslot->id;?>' style="opacity: 0;">
<input type='hidden' name='return' value='<?= base_url();?>Ceremonies/Success/<?=$mybooingslot->id;?>' style="opacity: 0;">
</form>           
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="panel panel-default">-->
                <!--    <div class="panel-heading">-->
                <!--        <h4 class="panel-title">-->
                <!--            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">-->
                <!--            <img src="<?=base_url();?>assets/strip.jpg" class="img-responsive" style="max-width: 160px;">-->

                <!--        </a>-->
                <!--        </h4>-->
                <!--    </div>-->
                <!--    <div id="collapseTwo" class="panel-collapse collapse">-->
                <!--        <div class="panel-body">-->
                <!--             <button type="submit" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary text-white">-->
                <!--                            <span class="mat-button-wrapper">Pay With Strip </span>-->
                <!--                            <div matripple="" class="mat-ripple mat-button-ripple"></div>-->
                <!--                            <div class="mat-button-focus-overlay"></div>-->
                <!--                        </button>   -->
                            
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->




        
            </div> 
                    		</th>
                    	</tr>
                    	<tr>
                    		<th colspan="3" align="center">
<a href="<?=base_url('Ceremonies/ChoosCateringMenu');?>" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary text-white">
    <span class="mat-button-wrapper">Go Back </span></a>  
                    		</th>
                    	</tr>
                    </tfoot>
                </table>
			</div>
</div></div>
<script type="text/javascript">
	function calprice(arg,userid) {
		var totalval=parseFloat($('#totalval').val());
		var arg=parseFloat(arg);
		var payble = totalval*arg/100;
		$('.amount').val(payble);
		$('.txt-amount').text(payble);
        if (arg==100) {
            var dueamts = 0;
        } else {
            var dueamts = payble;
        }

        var queryString = 'dueamts='+dueamts+'&payble='+payble+'&id='+userid;
                    $.ajax({
                       type: "post",
                       url: '<?php echo site_url('AjaxController/paymentupdate');?>',
                       cache: false,    
                       data:queryString,
                       success: function(response){
                            
                       },
                       error: function(){      
                        alert('Error while request..');
                       }
                      });

		//amount
	}
</script>

<style type="text/css">
    .form-inline .form-group { margin-right:10px; }
.well-primary {
color: rgb(255, 255, 255);
background-color: rgb(66, 139, 202);
border-color: rgb(53, 126, 189);
}
.glyphicon { margin-right:5px; }
.modal.in .modal-dialog {
    -webkit-transform: translate(0,0);
    -ms-transform: translate(0,0);
    -o-transform: translate(0,0);
    transform: translate(0,0);
    z-index: 99999999 !important;
}
.center {
    margin-top:50px;   
}

.modal-header {
    padding-bottom: 5px;
}

.modal-footer {
        padding: 0;
    }
    
.modal-footer .btn-group button {
    height:40px;
    border-top-left-radius : 0;
    border-top-right-radius : 0;
    border: none;
    border-right: 1px solid #ddd;
}
    
.modal-footer .btn-group:last-child > button {
    border-right: 0;
}
.form-control{
    margin-top: 10px !important;
}
</style>
<style>
    .table>tbody>tr>th{ border:1px solid #000 !important;}
    .invoice {
        position: relative;
        background: #fff;
        border: 1px solid #000 !important;
        //padding: 0 13px;
        //margin: 0 20px;
    }
    .table-bordered{ border-left:0 !important; border-right:0 !important;}
    .bpim{ width:40%; float:left; padding:0 20px;}
    .addim{ width:60%; float:right; padding:0 20px;}
    .addim .hpl{font-size: 50px; font-weight: 700; float: left;}
    .addim .all{ float:left; font-size:20px;}
    .addim .eml{ float:left;}
    .addim .ph{ float:left; }
    .addim .brn{ float:left;}
    .pdf{ padding:0 !important;}
    .pdf .table>tbody>tr>td{ border-top:0 !important;}
    .pdf .table>tbody>tr>td:nth-child(even) { border-bottom:1px dashed #CCCCCC;}
    .pdf.table>tbody>tr>td{ padding:4px !important;}
    .pdf .pdfth{ width:70%; padding-left: 0; padding-right: 0;  padding-top:0;}
    .pdf .pdfth .table>tr>th{}
    .btm .table{ margin-bottom:0;}
    .btm .table>tbody>tr>td{ border:0; padding:0 8px;}
    .btm .table>tbody>tr>th span{font-size:25px; font-weight:900;}
    .btm .table>tbody>tr>th .wb{width:80%; padding-bottom:0 !important;}
    .tbb{ padding:0; border-bottom:1px solid #000000; border-top:1px solid #000000;}
    .tbb .table>tbody>tr>td{ padding:4px !important;}
    .rt{ width:100%; border-bottom:0 !important;}
    .spnbf{background: #000;
        color: #fff;
        width: 100%;
        float: left;
        text-align: center;
        padding: 3px 0px;
        margin-bottom: 25px;
        
        -webkit-print-color-adjust: exact;}
        .ht{ margin:10px 0 0 25px;}
        .tshw{ padding-left:32%;}
        .table>tbody>tr>th{ border-top:1px solid #000 !important;}
        .table>tbody>tr>th{ border:0 !important;}
    </style>
    <style media="print" type="text/css">
    @media print
    
    {   
    .rt{ width:100%; border-bottom:0 !important;}
    .addim .all{ float:left; font-size:16px;} 
    .pdf .pdfth{ width:75%; padding-left: 0px; padding-right: 0;}
    .tbb{ padding-left:15px; padding-right:15px;  border-bottom:1px solid #000000; border-top:1px solid #000000;}
    .btm .table>tbody>tr>th span{font-size:20px; font-weight:500; }
    .btm .table>tbody>tr>th .wb{width:70%;}
    .btm .table{ margin-bottom:0;}
    .pdf{ padding:0 15px 0 15px !important; }
    .spnbf{background-color: #000 !important;
    color: #fff !important;
    -webkit-print-color-adjust: exact;
        }
        .btn, .btn-facebook *
        {
            display: none !important;
        }
    }
    
    table, tr, td, strong{
font-size: 11px !important;}
    @font-face {
    
    src: url(font/Individigital-Demibold.ttff);
}
 
 ul{
}
 ul > li{
 }
    </style>
<?php } else { ?>
<?php } ?>