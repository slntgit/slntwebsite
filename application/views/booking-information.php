<?php if(isset($_GET['poojaId'])){
	                $this->db->select('*');
                    $this->db->from('slnt_puja');  
                    $this->db->where('id',$_GET['poojaId']);
                    $q = $this->db->get()->row();
	}?>
<div class="tab-pane fade <?php if($this->uri->segment(2)=='Booking-Information'){ ?> in active <?php } ?>" id="messages">
<form method="post" action="<?=base_url();?>poojaBooking/Booking-Information?poojaId=<?=$_GET['poojaId'];?>&poojaTime=<?=$_GET['poojaTime'];?>&m=<?=$_GET['m'];?>&y=<?=$_GET['y'];?>&d=<?=$_GET['d'];?>&day=<?=$_GET['day'];?>&action=do-save/data">
<input type="hidden" name="pujaid" id="pujaid" value="<?=$_GET['poojaId'];?>">
<input type="hidden" name="d" id="dssss" value="<?=$_GET['d'];?>">
<input type="hidden" name="m" id="m" value="<?=$_GET['m'];?>">
<input type="hidden" name="y" id="y" value="<?=$_GET['y'];?>">
<input type="hidden" name="day" id="day" value="<?=$_GET['day'];?>">
<input type="hidden" name="poojaTime" id="poojaTime" value="<?=$_GET['poojaTime'];?>">
<div class="row">
   <div class="col-sm-12">

<?php    if(isset($_GET['poojaId'])){  ?>
<hr />


<h4 for="search_service">Your Selected <?php if($_SESSION['type']['pooja']=='pooja'){ ?>Pooja<?php } else if($_SESSION['type']['pooja']=='yajman'){ ?>Yajman <?php } ?>  Type</h4>

<?php $fill_from_date2 =  $q->fill_from_date;
$fill_to_date2 =  $q->fill_to_date;
 if(date('Ymd')>=$fill_from_date2 && date('Ymd')<=$fill_to_date2){  ?>
 <h4 for="search_service" id="search_string">
    <?=$q->description_charge;?>, Member Price : <del style="color:red"><?=$q->member_price;?></del> <?=$q->offer_mem_price;?>, Non-Member Price : <del style="color:red"><?=$q->non_member_price;?></del> <?=$q->offer_non_mem_price;?>
    
    &nbsp;&nbsp;&nbsp;&nbsp; [Offer ends on <strong>“<?=date('d-m-Y',strtotime($q->fill_to_date));?>”</strong>]
    
    <?php 
     $pooja_time=$rowdata->puja_id;
     $date = date('Y-m-d');
     ?>
</h4>

 <?php } else { ?>
<h4 for="search_service" id="search_string">
    <?=$q->description_charge;?>, Member Price : <?=$q->member_price;?>, Non-Member Price : <?=$q->non_member_price;
     $pooja_time=$rowdata->puja_id;
     $date = date('Y-m-d');
     ?>
</h4>

<?php } ?>




<hr />
<?php } ?>
</div>
</div>

<h4 class="head"> Do you have any preferred priest

</h4> 
 
                        <label class="selection text-center selection" for="pre_priest">
<input type="radio" class="pre_priest" name="pre_priest" id="pre_priest" value="1" required=""> Yes (Extra charges 25 SGD)
                        </label>
                       
                         <label for="pre_priest_no" class="selection text-center">
<input type="radio" class="pre_priest" name="pre_priest" id="pre_priest_no" value="0" required=""> No
                        </label>

                        <div class="col-sm-12" id="priest_user">
                            
                        </div>
                        
<div>
    <br />
 
 <h4 class="head">Venue : <span> Note: Mundan can only be done in SPSLNT Premises </span></h4> 
<style type="text/css">
    .head span{
        font-size: 14px;
        color: red;
    }
</style>
 
 <label><input type="radio" value="0" name="venue" class="vanue"  required="" /> At Temple </label>
 
  <label><input type="radio" value="1" name="venue" class="vanue"  required=""  /> At your place. please enter address</label>
  
  
    <table class="table table-responsive">
        <tbody>
            <tr>
                <td colspan="2" id="vanues" style="display:none;">
                    <div  class="row">
                        <div class="col-md-6">
                            <input type="text" name="home_address" class="form-control" id="home_address" value="" placeholder="Enter address"></div>
                            <div class="col-md-6"><input type="text" name="postal_code"  maxlength="6" minlength="6"  class="form-control number" id="postal_code" value="" placeholder="Enter postal code"></div>
                            
                             
    <div class="col-md-6"><input type="text" class="form-control tpicker" name="time_range_from" id="time_range_from" placeholder='Journey Time From (Choose Time) '  /></div>
        
        <div class="col-md-6"><input type="text" class="form-control tpicker" name="time_range_to" id="time_range_to"  placeholder='Journey Time To (Choose Time) '   /></div>
        
</div>

<div  class="row"><div class="col-sm-12 pickCab"><label><input type="radio" value="I will pick up priest" name="picup" id="time_range_to" /> I will pick up priest</label>
                            <label><input type="radio" value=" will reimburse taxi fare" name="picup" /> I will reimburse taxi fare</label></div></div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php if($q->pooja_samgri==1){ ?>
<div class="bookingSub pujaSamagri">
 <h4 class="head">Pooja Samagri  : </h4>
 
   <label><input type="radio" value="0" name="puja_samagri" class="puja_samagri"  required="" /> Yes </label>
    <label><input type="radio" value="1" name="puja_samagri" class="puja_samagri"  required="" /> No</label>
   
    <table class="table table-responsive">
        <tbody>
             
            <tr>
                <td colspan="2" id="puja_samagri_list"  class="td-block">
                    
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php } else { ?>
    <input type="hidden" name="puja_samagri" value="1">
    <input type="hidden" name="pooja_samagri_amt" value="0.00">
			 
<?php } ?>
<?php if($q->havan_samagri==1){ ?>
<div class="bookingSub">
 
 <h4 class="head">Havan Samagri  : </h4> 
 <label><input type="radio" value="0" name="havan_samagri" class="havan_samagri"  required="" /> Yes </label>
 <label><input type="radio" value="1" name="havan_samagri" class="havan_samagri"  required="" /> No</label>
 
    <table class="table table-responsive">
        <tbody>
            <tr>
                <td colspan="2" id="havan_samagri_list"  class="td-block">
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php } else { ?>
    <input type="hidden" name="havan_samagri" value="1">
	<input type="hidden" name="havan_samagri_amt" value="0.00">
<?php } ?>
<?php if($q->blog_prasads==1){ ?>


<div class="bookingSub">
 <h4 class="head">Bhog / Prasad  : </h4> 
 <label><input type="radio" value="0" name="bhog_prasad" class="bhog_prasad"  required="" /> Yes </label>
  <label><input type="radio" value="1" name="bhog_prasad" class="bhog_prasad"  required="" /> No</label>
    <table class="table table-responsive">
        <tbody>
            
            <tr>
                <td colspan="2" id="bhog_prasad_list"  class="td-block">
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php } else { ?>
<input type="hidden" value="1" name="bhog_prasad" class="bhog_prasad" required="">
<input type="hidden" name="bhog_prasad_amt" value="0.00" required="">
<?php } ?>
<?php if($q->catering_menu==1){ ?>
<div class="" id="catering-u">
  
 <h4 class="head">Do you need catering  : </h4> 
 <label><input type="radio" value="0" name="catering" class="catering"  required="" /> Yes </label>
 <label><input type="radio" value="1" name="catering" class="catering"  required=""/> No</label>
    <div class="row"  id="catering_list"  class="td-block">
    </div>
</div>

<?php } else { ?>
    
<?php } ?>
<hr />


<div class="">
 
 <label class="head">Note For Temple  : </label> 
    <div class="row">
        <div class="col-sm-12">
            <textarea class="form-control" name="note_for_temple" placeholder="Note for temple"></textarea>
        </div>
    </div>
</div>


<div class="">
 
 <label class="head">Is the booking for self? : </label> 
    <div class="row">
        <div class="col-sm-12">
           <label for="yes"> &nbsp;<input type="radio" name="booking_for" id="yes" value="Yes" checked/> Yes</label> 
							 <label for="no"> &nbsp;<input type="radio" name="booking_for" id="no" value="No" /> No</label> 
        </div>
    </div>
</div>





<div class="row">
    <div class="col-sm-12">
        <br />
        <br />
        <p class="text-center">
          
<a href="<?=base_url();?>poojaBooking/Services-Date-Time?poojaId=<?=$_GET['poojaId'];?>&m=<?=$_GET['m'];?>&y=<?=$_GET['y'];?>&d=<?=$_GET['d'];?>&day=<?=$_GET['day'];?>#calendar" mat-flat-button="" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary text-white pull-left">
    <span class="mat-button-wrapper">Back</span>
</a> 
   <button _ngcontent-ngq-c157="" mat-flat-button="" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary  pull-right">
                <span class="mat-button-wrapper">Save & Next</span>
                <div matripple="" class="mat-ripple mat-button-ripple"></div>
                <div class="mat-button-focus-overlay"></div>
            </button>  
        </p>
    </div>
</div>
 <br />
 
  <br />
 
</form>
</div>
<style>
/*label{*/
/*    padding-right:10px !important;*/
/*}*/
@media(max-width : 767px){
    .td-block{
    padding: 0.2rem .2rem !important;
    vertical-align: top !important;
    display: block;
    border-top: 1px solid #ffefe2 !important;
}}
</style>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
 
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script>
    $(document).ready(function(){
    $('input.tpicker').timepicker({});
});
</script>