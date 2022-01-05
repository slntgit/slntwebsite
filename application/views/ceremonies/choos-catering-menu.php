<style>
 @media(min-width : 768px){
    .tab-content {
    overflow: hidden!important;
    margin-top: 100px !important;
}
}
@media(max-width : 767px){
     .td-block{
         display:block !important;
     }
    .tab-content {
    overflow: hidden!important;
    margin-top: 40px !important;
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
        $this->db->where('status',0);
        $this->db->order_by('id','DESC');
        $this->db->limit(1);
        $mybooing = $this->db->get();
if ($mybooing->num_rows()>0) {
    $mybooingslot = $mybooing->row();
?>

<div class="tab-pane fade  in active " id="messages">

<form method="post" action="#" id="saveCateringPriest">
<input type="hidden" name="pujaid" id="pujaid" value="<?=$mybooingslot->cer_evnt_type;?>">
<input type="hidden" name="id" id="id" value="<?=$mybooingslot->id;?>">
<h2 class="head">Choose Priest</h2> 
<div class="col-sm-12" id="priest_user">
    <div class="row">
    <?php foreach($priest_list->result() as $userpriest){ ?>        

        <div class="col-md-3 text-center" for="sel_priest11<?=$userpriest->id;?>">
            <div class="bookingPrist">
        	<?php if($userpriest->profilepic!=''){ ?>
				<img src="<?=base_url();?>assets/profile/<?=$userpriest->profilepic;?>" class="img-responsive">
					<?php } else { ?>		
                        <label><img src="<?=base_url();?>assets/pandit.png" class="img-responsive">	</label>	
                            <?php } ?>
                    <label class="text-danger">
                        <input type="radio" name="sel_priest" id="sel_priest11<?=$userpriest->id;?>" required="" value="<?=$userpriest->id;?>" <?php if($mybooingslot->sel_priest==$userpriest->id){ ?> checked <?php } ?> />
                        <?=$userpriest->name_title;?> <?=$userpriest->name;?> <?=$userpriest->last_name;?>		
                    </label>
							
            </div>
              
                    </div>
    <?php } ?> 
    </div>
</div>

                        
<div class="col-sm-12 table-responsive venue-section">
    <br />
    <br />
 <label class="head text-center">Venue : </label> 
    <table class="table table-responsive">
        <tbody>
           
             <tr>
                <td class="td-block">
                    <label><input type="radio" value="0" name="venue" class="vanue"  required="" <?php if($mybooingslot->venue==0){ ?> checked <?php } ?> /> At Temple </label>


                </td>
                <td class="td-block">
                    <label><input type="radio" value="1" name="venue" class="vanue"  required="" <?php if($mybooingslot->venue==1){ ?> checked <?php } ?> /> At your place. please enter address</label>

                </td>
            </tr>

            <tr>
                <td colspan="2" id="vanues">
                    <?php if($mybooingslot->venue==0){ ?>
<div  class="row"><div class="col-md-6"><input type="hidden" name="home_address" class="form-control" id="home_address" value="" placeholder="Enter address" required></div><div class="col-md-6"><input type="hidden" name="postal_code" class="form-control" id="postal_code" value="" placeholder="Enter postal code" required></div><input type="hidden" value="na" name="picup" required /> </div>
                    <?php } else if($mybooingslot->venue==1){ ?>

<div  class="row">
    <div class="col-md-6">
        <input type="text" name="home_address" class="form-control" id="home_address" value="<?php echo $mybooingslot->home_address;?>" placeholder="Enter address" required>
    </div>
    <div class="col-md-6">
        <input type="text" name="postal_code" class="form-control" id="postal_code" value="<?php echo $mybooingslot->postal_code;?>" placeholder="Enter postal code" required>
    </div>
    <div class="col-sm-12 pickCab">
        <label>
            <input type="radio" value="I will pick up priest" name="picup" <?php if($mybooingslot->picup=='I will pick up priest'){ echo 'checked';}?> required /> I will pick up priest
        </label>
        <label>
            <input type="radio" value="will reimburse taxi fare" name="picup" <?php if($mybooingslot->picup=='will reimburse taxi fare'){ echo 'checked';}?> /> I will reimburse taxi fare
        </label>
    </div>
</div>
                    <?php } ?>
                </td>
            </tr>
        </tbody>
    </table>
</div>


<div class="col-sm-12 bookingSub pujaSamagri">
 <label class="head text-center">Puja Samagri  : </label> 
    <table class="table table-responsive">
        <tbody>
            <tr>
                 
                <td class="td-block">
                    <label><input type="radio" value="0" name="puja_samagri" class="puja_samagri2"  required=""  <?php if($mybooingslot->puja_samagri==0){ ?> checked <?php } ?> /> Yes </label></td>
                <td class="td-block">
                    <label><input type="radio" value="1" name="puja_samagri" class="puja_samagri2"  required=""  <?php if($mybooingslot->puja_samagri==1){ ?> checked <?php } ?> /> No</label>


                </td>
            </tr>
            <tr>
                <td colspan="2" id="puja_samagri_list">
                    <?php
                    $type = 'Puja Samagri';
                    $this->db->select('*');
                    $this->db->from('slnt_ceremonies_samagri');
                    $this->db->where('puja_id',$mybooingslot->cer_evnt_type);
                    $this->db->where('samagri_type',$type);
                    $priest = $this->db->get();

                     if($mybooingslot->puja_samagri==0){ ?>
                <div  class="table-responsive" >
                <div class="pujaSamagriList">
                 <table class="table table-responsive tableList">
                        <thead>
                            <tr>
                                 
                                <th>Puja Samagri Title</th>
                                <th>Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $count = 1;
                                $total=0.00;
                            foreach ($priest->result() as $samagri) {
                             ?>                         
                            <tr>
                                 
                                <td><?=$samagri->samagri_title;?></td>
                                <td><?=$samagri->measurement;?> <?=$samagri->unit_of_measurement;?></td>
                            </tr>
                            <?php   
                            $total=$total+$samagri->samagri_price;
                            $count++; } ?>

                        </tbody>
                         
                 </table>
                </div>
                <div class="priceValue text-left">
                <h3 class="priceTitle"><label>Total :  <span>$  <?=$total;?> SGD</span></label>
<input type="hidden" name="pooja_samagri_amt" value="<?=$total;?>"   required="">
                </h3>
                </div>
            </div>
                     <?php } else if($mybooingslot->puja_samagri==1){ ?>
<div  class="table-responsive" >
            <h2 class="text-danger">
                I will prepere myself
            </h2>
            <div class="pujaSamagriList">
                 <table class="table table-responsive tableList">
                        <thead>
                            <tr>
                                 
                                <th>Puja Samagri Title</th>
                                    <th>Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $count = 1;
                                $total=0.00;
                            foreach ($priest->result() as $samagri) {
                             ?>                         
                            <tr>
                                 
                                <td><?=$samagri->samagri_title;?></td>
                                <td><?=$samagri->measurement;?> <?=$samagri->unit_of_measurement;?></td>
                            </tr>
                            <?php   
                            $total=$total+$samagri->samagri_price;
                            $count++; } ?>

                        </tbody>
                    
                 </table>
                 <input type="hidden" name="pooja_samagri_amt" value="0.00" >
                 </div>
    </div>
                      <?php } ?>
                </td>
            </tr>
        </tbody>
    </table>
</div>


<div class="col-sm-12 bookingSub">
<br />
    <br />
 <label class="head text-center">Havan Samagri  : </label> 
    <table class="table table-responsive">
        <tbody>
            <tr>
                <td class="td-block">
                    <label><input type="radio" value="0" name="havan_samagri" class="havan_samagri2"  required=""  <?php if($mybooingslot->havan_samagri==0){ ?> checked <?php } ?> /> Yes </label></td>
                <td class="td-block">
                    <label><input type="radio" value="1" name="havan_samagri" class="havan_samagri2"  required="" <?php if($mybooingslot->havan_samagri==1){ ?> checked <?php } ?>  /> No</label>
               </td>
            </tr>
            <tr>
                <td colspan="2" id="havan_samagri_list">
                    <?php
                    $type2 = 'Havan Samagri';
                    $this->db->select('*');
                    $this->db->from('slnt_ceremonies_samagri');
                    $this->db->where('puja_id',$mybooingslot->cer_evnt_type);
                    $this->db->where('samagri_type',$type2);
                    $priest2 = $this->db->get();
                    if($mybooingslot->havan_samagri==0){ ?>
                <div  class="table-responsive" >
                <div  class="havanSamagriList">
                 <table class="table table-responsive tableList">
                        <thead>
                            <tr>
                             
                                <th>Havan Samagri Title</th>
                                <th>Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $count = 1;
                                $total=0.00;
                            foreach ($priest2->result() as $samagri2) {
                             ?>                         
                            <tr>
                                 
                                <td><?=$samagri2->samagri_title;?></td>
                                <td><?=$samagri2->measurement;?> <?=$samagri2->unit_of_measurement;?></td>
                            </tr>
                            <?php   
                            $total=$total+$samagri2->samagri_price;
                            $count++; } ?>

                        </tbody>
                     
                 </table>
                </div>
                <div class="priceValue text-left">
                <h3 class="priceTitle"><label>Total :  <span>$  <?=$total;?> SGD</span></label></h3>
                <input type="hidden" name="havan_samagri_amt" value="<?=$total;?>"   required="">
                </div>
            </div>

                    <?php } else if($mybooingslot->havan_samagri==1){  ?>
        <div  class="table-responsive" >
            <h2 class="text-danger">
                I will prepere myself
            </h2>
            <div  class="havanSamagriList">
                 <table class="table table-responsive tableList">
                        <thead>
                            <tr>
                              
                                <th>Havan Samagri Title</th>
                                    <th>Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $count = 1;
                                $total=0.00;
                            foreach ($priest2->result() as $samagri2) {
                             ?>                         
                            <tr>
                                 
                                <td><?=$samagri2->samagri_title;?></td>
                                <td><?=$samagri2->measurement;?> <?=$samagri2->unit_of_measurement;?></td>
                            </tr>
                            <?php   
                            $total=$total+$samagri2->samagri_price;
                            $count++; } ?>

                        </tbody>
                    
                 </table>
                 </div>
                 <input type="hidden" name="havan_samagri_amt" value="0.00">
    </div>
                    <?php } ?>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="col-sm-12 bookingSub">
<br />
    <br />
 <label class="head text-center">Bhog / Prasad  : </label> 
    <table class="table table-responsive">
        <tbody>
            <tr>
                <td class="td-block">
                    <label><input type="radio" value="0" name="bhog_prasad" class="bhog_prasad2"  required="" <?php if($mybooingslot->bhog_prasad==0){ ?> checked <?php } ?> /> Yes </label></td>
                <td class="td-block">
                    <label><input type="radio" value="1" name="bhog_prasad" class="bhog_prasad2"  required="" <?php if($mybooingslot->bhog_prasad==1){ ?> checked <?php } ?> /> No</label>
               </td>
            </tr>
            <tr>
                <td colspan="2" id="bhog_prasad_list">
                     <?php
                        $this->db->select('*');
                        $this->db->from('slnt_ceremonies_bhog_prasad');
                        $this->db->where('puja_id',$mybooingslot->cer_evnt_type);
                        $priest3 = $this->db->get();
                    if($mybooingslot->bhog_prasad==0){ ?>
                <div  class="table-responsive" >
                <div class="BhogPrasadList">
                 <table class="table table-responsive tableList">
                        <thead>
                            <tr>
                                    <th>Bhog / Prasad Title</th>
                                <th>Bhog / Prasad  Price (SGD)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $count = 1;
                                $total=0.00;
                            foreach ($priest3->result() as $samagri3) {
                             ?>                         
                            <tr>
                             
                                <td><?=$samagri3->bhog_prasad_title;?></td>
                                <td><?=$samagri3->bhog_prasad_price;?></td>
                            </tr>
                            <?php   
                            $total=$total+$samagri3->bhog_prasad_price;
                            $count++; } ?>

                        </tbody>
                     
                 </table>
                </div>
                <div class="priceValue text-left">
                <h3 class="priceTitle"><label>Total :  <span>$  <?=$total;?> SGD</span></label></h3>
                <input type="hidden" name="bhog_prasad_amt" value="<?=$total;?>"   required="">
                </div>
            </div>
                    <?php } else  if($mybooingslot->bhog_prasad==1){ ?>
<div  class="table-responsive" >
            <h2 class="text-danger">
                I will prepere myself
            </h2>
            <div   class="BhogPrasadList">
                 <table class="table table-responsive tableList">
                        <thead>
                            <tr>
                                <th>Bhog / Prasad Title</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $count = 1;
                                $total=0.00;
                            foreach ($priest3->result() as $samagri3) {
                             ?>                         
                            <tr>
                                <td><?=$samagri3->bhog_prasad_title;?></td>
                             
                            </tr>
                            <?php   
                            $total=$total+$samagri3->bhog_prasad_price;
                            $count++; } ?>

                        </tbody>
                    
                 </table>
                 </div>
                 <input type="hidden" name="bhog_prasad_amt" value="0.00"   required="">
    </div>
                    <?php } ?>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="col-sm-12">
<br />
    <br />
    <input type="hidden" name="day" id="day" value="<?=date('D',strtotime($mybooingslot->datetimeids))?>">
 <label class="head text-center">Do you need catering  : </label> 
    <table class="table table-responsive">
        <tbody>
            <tr>
                <td class="td-block">
                    <label><input type="radio" value="0" name="catering" class="catering"  required=""  <?php if($mybooingslot->catering==0){ ?> checked <?php } ?>  /> Yes </label></td>
                <td class="td-block">
                    <label><input type="radio" value="1" name="catering" class="catering"  required=""  <?php if($mybooingslot->catering==1){ ?> checked <?php } ?> /> No</label>
               </td>
            </tr>
      
        </tbody>
    </table>

    <div class="row"  id="catering_list"> 

    </div>
</div>
<div class="row"> 
      <div class="col-sm-12" id="uploaded_image">  
      </div>
</div>


                                                
<div class="row">
 
 <label class="head col-sm-12">Is the booking for self? : </label> 
     
        <div class="col-sm-12">
           <label for="yes"> &nbsp;<input type="radio" name="booking_for" id="yes" value="Yes" checked/> Yes</label> 
							 <label for="no"> &nbsp;<input type="radio" name="booking_for" id="no" value="No" /> No</label> 
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
                var priestval = <?=$mybooingslot->catering;?>;
                var  pujaid = $('#pujaid').val();
                var  day = $('#day').val();
                var queryString='pujaid='+pujaid+'&status='+priestval+'&day='+day;
                 $.ajax({
                       type: "post",
                       url: '<?php echo site_url('PoojaBooking/getCatering');?>',
                       cache: false, 
                       data:queryString,
                       success: function(response){
                            $('#catering_list').html(response);
                       },
                       error: function(){      
                        alert('Error while request..');
                    }
                });  
    });
</script>


<div class="row">
    <div class="col-sm-12">
        <p class="text-center">
          <br /><br />
<a href="<?=base_url();?>Ceremonies/ChoosEvents" mat-flat-button="" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary text-white pull-left">
    <span class="mat-button-wrapper">Back</span>
 
</a> 
   <button type="submit" id="submit-step1" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary  pull-right">
                <span class="mat-button-wrapper">Save & Next</span>
                <div matripple="" class="mat-ripple mat-button-ripple"></div>
                <div class="mat-button-focus-overlay"></div>
            </button>  
        </p>
    </div>
</div>
<br /><br />
</form>
</div>
<div id="alreadyitem">
    <script type="text/javascript">
        $( document ).ready(function() {
            console.log( "ready!" );
        });
    </script>
</div>


<script type="text/javascript">
    
    $(document).ready(function(){
        $('#saveCateringPriest').submit(function(e){
            // $('#submit-step1').attr('disabled','disabled');
            e.preventDefault();
                    $.ajax({
                     url:'<?php echo base_url();?>AjaxController/ChoosCateringMenu',
                     type:"post",
                     data:new FormData(this),
                     processData:false,
                     contentType:false,
                     cache:false,
                     async:false,
                     success: function(data){
                        if (data==0) {
                            window.location.href='<?=base_url();?>Ceremonies/Payments';
                        } else {
                             $('#submit-step1').removeAttr('disabled');
                             $('#uploaded_image').html(data); 
                        }
                     }
                     });
        });
    });
     
</script>
<?php } ?>
