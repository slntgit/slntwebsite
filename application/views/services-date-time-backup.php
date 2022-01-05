
<div class="tab-pane fade  <?php if($this->uri->segment(2)=='Services-Date-Time'){ ?> in active <?php } ?>" id="profile">

<?php 



if(isset($_SESSION['pooja']['id'])){
                    $this->db->select('*');
                    $this->db->from('slnt_puja');  
                    $this->db->where("id",$_SESSION['pooja']['id']);
                    $q = $this->db->get()->row();
 
 ?>   
    
    <form method="post" action="<?=base_url();?>poojaBooking/Services-Date-Time/Update_services">           
                        <h3 class="head text-center">Choose Service & Date / Time</h3>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="search_service">Search Your Booking Service Type / Pooja Type</label>
<input type="text" name="search_service" id="search_service" value="<?=$q->description_charge;?>" class="form-control">
<input type="hidden" name="puja_id" id="service_id" value="<?=$q->id;?>">
<input type="hidden" name="member_price" id="member_price" value="<?=$q->member_price;?>">
<input type="hidden" name="non_member" id="non_member" value="<?=$q->non_member_price;?>">
<input type="hidden" name="title" id="title" value="<?=$q->description_charge;?>">

<label for="search_service" id="search_string">
    <?=$q->description_charge;?>, Member Price : <?=$q->member_price;?>, Non-Member Price : <?=$q->non_member_price;
     $pooja_time=$rowdata->puja_id;
     $date = date('Y-m-d');
     ?>
</label>
                                </div>
                                <div class="col-sm-12">
                <div id="records">
                          <ul id="finalResult">
                <?php 
                    $this->db->select('*');
                    $this->db->from('slnt_puja');  
                    $this->db->where('status',1);
                    $this->db->order_by("description_charge","ASC");
                    $this->db->limit(30);
                    $query = $this->db->get();
                    if ($query->num_rows()>0) {
                    foreach ($query->result() as $value) {
                ?>
                <li class="itmesssss"  onclick="getSelService(<?=$value->id;?>,'<?=$value->description_charge;?>','<?=$value->member_price;?>','<?=$value->non_member_price;?>');"><a href="javascript:void();"><?=$value->description_charge;?> / <strong>Member: <?=$value->member_price;?></strong> / <strong>Non-Member: <?=$value->non_member_price;?></strong></a></li>
                    <?php 
                        }
                    } else {
                        echo 'No record found';
                    }
                ?>
                        </ul>
                    </div>
                </div>
            </div>
           
                <div class="row">
                    <div class="col-sm-12" id="settimeslot" style="">
         <table class="table table-responsive table-bordered tableList">
                                            <?php 
                                                $maxdays=6;
                                            ?>
                                        <thead>
                                            <tr>
                                                <?php 
                                                    $i=0;
                                                    while ($i <= $maxdays) { 
                                                ?>
<th class="text-center">
<?php  $tomorrow = date("Y-m-d", strtotime("+".$i." day"));?>
<?php echo date("D", strtotime($tomorrow)) ;?>
<br />
<?php echo date("M Y", strtotime($tomorrow)) ;?>
</th>


<?php 
                                                  $i++;  }
                                                ?>
 

                                            </tr>
                                        </thead>
                                        <tbody>
                                             <tr>
                                                <?php 
                                                    $i2=0;
                                                    $chkcount = 0;
                                                    $chk2=0;
                                                    $todaydate=date('Ymd');
                                                    $nowtime=date('H:i a');
                                                    while ($i2 <= $maxdays) { 
                                                ?>
                                                <?php  $tomorrow = date("Y-m-d", strtotime("+".$i2." day"));?>
                                                <td class="text-center">
                                                    <ul class="list-group">
    <?php 
        $this->db->select('*');
        $this->db->from('slnt_puja_time');
        $this->db->where('pooja_time',$pooja_time);
        $this->db->order_by('id','ASC');
        $listtime = $this->db->get()->result();
        foreach ($listtime as $rowsdata) {
            

            $this->db->select('*');
            $this->db->from('adminlogin');
            $this->db->where('rol',3);
            $this->db->where('status',1);
            $priest = $this->db->get(); 
            $countPriest=$priest->num_rows();


                $sel_date=date("Ymd", strtotime($tomorrow));
                $time_id=$rowsdata->id;
                $puja_id=$pooja_time;

$this->db->select('*');
$this->db->from('booking_slot_block');
$this->db->where('block_date',$sel_date);
$this->db->where('time_slot',$time_id);
$this->db->where('dataPuja',$puja_id);
$this->db->where('sel_priest!=0');
$this->db->order_by('id','DESC');
$bl = $this->db->get();    
$blk=$bl->num_rows();
    $totalavailpristnow=$countPriest-$blk;


                $this->db->select('*');
                $this->db->from('slnt_booking_slot');
                $this->db->where('sel_date',$sel_date);
                $this->db->where('time_id',$time_id);
                $this->db->where('puja_id',$puja_id);
                $selprst = $this->db->get();    
                $tselcountprst=$selprst->num_rows();
                $ts=$selprst->row();
$this->db->select('*');
$this->db->from('booking_slot_block');
$this->db->where('block_date',$sel_date);
$this->db->where('time_slot',$time_id);
$this->db->where('dataPuja',$puja_id);
$this->db->order_by('id','DESC');
$block_pujatime = $this->db->get();    
$blk_count=$block_pujatime->num_rows();

 if ($blk_count==0) {
 ?>
 <li class="list-group-item <?php if($totalavailpristnow>$tselcountprst){ ?> <?php } else { echo 'disabled'; }?>">
            <label class="timer-slot">
                <?php if($totalavailpristnow>$tselcountprst){ ?>
                    <input type="radio" name="time_slot_index" value="<?=$chkcount;?>" <?php if($chk2==0){ echo 'checked';} ?>>
                <?php  $chk2++; } else { ?>
                    <input type="radio" name="" disabled="disabled">
                <?php  } ?>
                <?=$rowsdata->from_time;?> - <?=$rowsdata->to_time;?>
                <input type="hidden" name="time_slot<?=$chkcount;?>" id="time_slot<?=$chkcount;?>" value="<?=$rowsdata->id;?>">
                <input type="hidden" name="sel_date<?=$chkcount;?>" id="sel_date<?=$chkcount;?>" value="<?=date("Ymd", strtotime("+".$i2." day"))?>">
            </label>
            </li>
 <?php
} else {
    $sel_items=$block_pujatime->row();
     if ($sel_items->sel_priest==0) {
 ?>
        <li class="list-group-item disabled   <?php if($totalavailpristnow>$tselcountprst){ ?> <?php } else { echo 'disabled'; }?>">
            <label class="timer-slot">
                <?php if($totalavailpristnow>$tselcountprst){ ?>
                    <input type="radio" name="time_slot_index" value="<?=$chkcount;?>" <?php if($chk2==0){ echo 'checked';} ?>>
                <?php  $chk2++; } else { ?>
                    <input type="radio" name="" disabled="disabled">
                <?php  } ?>
                <?=$rowsdata->from_time;?> - <?=$rowsdata->to_time;?>
                <input type="hidden" name="time_slot<?=$chkcount;?>" id="time_slot<?=$chkcount;?>" value="<?=$rowsdata->id;?>">
                <input type="hidden" name="sel_date<?=$chkcount;?>" id="sel_date<?=$chkcount;?>" value="<?=date("Ymd", strtotime("+".$i2." day"))?>">
            </label>
            </li>
<?php }    else {
    ?>
    <li class="list-group-item <?php if($totalavailpristnow>$tselcountprst){ ?> <?php } else { echo 'disabled'; }?>">
            <label class="timer-slot">
                <?php if($totalavailpristnow>$tselcountprst){ ?>
                    <input type="radio" name="time_slot_index" value="<?=$chkcount;?>" <?php if($chk2==0){ echo 'checked';} ?>>
                <?php  $chk2++; } else { ?>
                    <input type="radio" name="" disabled="disabled">
                <?php  } ?>
                <?=$rowsdata->from_time;?> - <?=$rowsdata->to_time;?>
                <input type="hidden" name="time_slot<?=$chkcount;?>" id="time_slot<?=$chkcount;?>" value="<?=$rowsdata->id;?>">
                <input type="hidden" name="sel_date<?=$chkcount;?>" id="sel_date<?=$chkcount;?>" value="<?=date("Ymd", strtotime("+".$i2." day"))?>">
            </label>
            </li>
    <?php
}  

}      
    ?>
            
        <?php $chkcount++;} ?>
    </ul>
    </td>
    <?php 
        $i2++;  }
    ?>
 </tr>
 </tbody>
 <tfoot>
    <tr>
        <td colspan="7" class="m-auto text-center">




            
             <button _ngcontent-ngq-c157="" mat-flat-button="" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary">
                            <span class="mat-button-wrapper">Save & Proceed</span>
                            <div matripple="" class="mat-ripple mat-button-ripple"></div>
                            <div class="mat-button-focus-overlay"></div>
                        </button>
        </td>
    </tr>
 </tfoot>
 </table>
                           
                 
                    </div>
            </div>
        </form>
    
 <?php   
} else { 
                            $this->db->select('*');
                            $this->db->from('slnt_booking_slot');
                            $this->db->where('user_id',$_COOKIE["login_user"]);
                            $this->db->where('status',0);
                            $this->db->order_by('id','DESC');
                            $this->db->limit(1);
                            $mybooing = $this->db->get();
  if ($mybooing->num_rows()==0) {                        
?>


    <form method="post" action="<?=base_url();?>poojaBooking/Services-Date-Time/save">           
                        <h3 class="head text-center">Choose Service & Date / Time</h3>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="search_service">Search Your Booking Service Type / Pooja Type</label>
 <input type="text" name="search_service" id="search_service" value="" class="form-control">
 <input type="hidden" name="puja_id" id="service_id">
 <input type="hidden" name="member_price" id="member_price">
 <input type="hidden" name="non_member" id="non_member">
 <input type="hidden" name="title" id="title">
 <label for="search_service" id="search_string">dddd</label>
 </div>
 <div class="col-sm-8">

                                 <div id="records">
      <!--   <a href="javascript:void();" onclick="closethis();" style="margin-left: 90%;">
            <i class="fa fa-times" aria-hidden="true"></i></a> -->
            <ul id="finalResult">
                <?php 
                    $this->db->select('*');
                    $this->db->from('slnt_puja');  
                    $this->db->where('status',1);
                    $this->db->order_by("description_charge","ASC");
                    $this->db->limit(30);
                    $query = $this->db->get();
                    if ($query->num_rows()>0) {
                    foreach ($query->result() as $value) {
                ?>
                <li class="itmesssss"  onclick="getSelService(<?=$value->id;?>,'<?=$value->description_charge;?>','<?=$value->member_price;?>','<?=$value->non_member_price;?>');"><a href="javascript:void();" ><?=$value->description_charge;?> / <strong>Member: <?=$value->member_price;?></strong> / <strong>Non-Member: <?=$value->non_member_price;?></strong></a></li>
                    <?php 
                        }
                    } else {
                        echo 'No record found';
                    }
                ?>
                        </ul> 
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-sm-12" id="settimeslot">
                    </div>
            </div>
        </form>    
<?php } else { 
                    $rowdata=$mybooing->row();
                    $this->db->select('*');
                    $this->db->from('slnt_puja');  
                    $this->db->where("id",$rowdata->puja_id);
                    $q = $this->db->get()->row();
 

    ?>
        <form method="post" action="<?=base_url();?>poojaBooking/Services-Date-Time/Update_services">           
                        <h3 class="head text-center">Choose Service & Date / Time</h3>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="search_service">Search Your Booking Service Type / Pooja Type</label>
<input type="text" name="search_service" id="search_service" value="<?=$q->description_charge;?>" class="form-control">
<input type="hidden" name="puja_id" id="service_id" value="<?=$rowdata->puja_id;?>">
<input type="hidden" name="member_price" id="member_price" value="<?=$q->member_price;?>">
<input type="hidden" name="non_member" id="non_member" value="<?=$q->non_member_price;?>">
<input type="hidden" name="title" id="title" value="<?=$q->description_charge;?>">

<label for="search_service" id="search_string">
    <?=$q->description_charge;?>, Member Price : <?=$q->member_price;?>, Non-Member Price : <?=$q->non_member_price;
     $pooja_time=$rowdata->puja_id;
     $date = date('Y-m-d');
     ?>
</label>
                                </div>
                                <div class="col-sm-12">
                <div id="records">
                          <ul id="finalResult">
                <?php 
                    $this->db->select('*');
                    $this->db->from('slnt_puja');  
                    $this->db->where('status',1);
                    $this->db->order_by("description_charge","ASC");
                    $this->db->limit(30);
                    $query = $this->db->get();
                    if ($query->num_rows()>0) {
                    foreach ($query->result() as $value) {
                ?>
                <li class="itmesssss"  onclick="getSelService(<?=$value->id;?>,'<?=$value->description_charge;?>','<?=$value->member_price;?>','<?=$value->non_member_price;?>');"><a href="javascript:void();"><?=$value->description_charge;?> / <strong>Member: <?=$value->member_price;?></strong> / <strong>Non-Member: <?=$value->non_member_price;?></strong></a></li>
                    <?php 
                        }
                    } else {
                        echo 'No record found';
                    }
                ?>
                        </ul>
                    </div>
                </div>
            </div>
           
                <div class="row">
                    <div class="col-sm-12" id="settimeslot" style="">
         <table class="table table-responsive table-bordered tableList">
                                            <?php 
                                                $maxdays=6;
                                            ?>
                                        <thead>
                                            <tr>
                                                <?php 
                                                    $i=0;
                                                    while ($i <= $maxdays) { 
                                                ?>
<th class="text-center">
<?php  $tomorrow = date("Y-m-d", strtotime("+".$i." day"));?>
<?php echo date("D", strtotime($tomorrow)) ;?>
<br />
<?php echo date("M Y", strtotime($tomorrow)) ;?>
</th>


<?php 
                                                  $i++;  }
                                                ?>
 

                                            </tr>
                                        </thead>
                                        <tbody>
                                             <tr>
                                                <?php 
                                                    $i2=0;
                                                    $chkcount = 0;
                                                    $chk2=0;
                                                    $todaydate=date('Ymd');
                                                    $nowtime=date('H:i a');
                                                    while ($i2 <= $maxdays) { 
                                                ?>
                                                <?php  $tomorrow = date("Y-m-d", strtotime("+".$i2." day"));?>
                                                <td class="text-center">
                                                    <ul class="list-group">
    <?php 
        $this->db->select('*');
        $this->db->from('slnt_puja_time');
        $this->db->where('pooja_time',$pooja_time);
        $this->db->order_by('id','ASC');
        $listtime = $this->db->get()->result();
        foreach ($listtime as $rowsdata) {
            

            $this->db->select('*');
            $this->db->from('adminlogin');
            $this->db->where('rol',3);
            $this->db->where('status',1);
            $priest = $this->db->get(); 
            $countPriest=$priest->num_rows();


                $sel_date=date("Ymd", strtotime($tomorrow));
                $time_id=$rowsdata->id;
                $puja_id=$pooja_time;

$this->db->select('*');
$this->db->from('booking_slot_block');
$this->db->where('block_date',$sel_date);
$this->db->where('time_slot',$time_id);
$this->db->where('dataPuja',$puja_id);
$this->db->where('sel_priest!=0');
$this->db->order_by('id','DESC');
$bl = $this->db->get();    
$blk=$bl->num_rows();
    $totalavailpristnow=$countPriest-$blk;


                $this->db->select('*');
                $this->db->from('slnt_booking_slot');
                $this->db->where('sel_date',$sel_date);
                $this->db->where('time_id',$time_id);
                $this->db->where('puja_id',$puja_id);
                $selprst = $this->db->get();    
                $tselcountprst=$selprst->num_rows();
                $ts=$selprst->row();
$this->db->select('*');
$this->db->from('booking_slot_block');
$this->db->where('block_date',$sel_date);
$this->db->where('time_slot',$time_id);
$this->db->where('dataPuja',$puja_id);
$this->db->order_by('id','DESC');
$block_pujatime = $this->db->get();    
$blk_count=$block_pujatime->num_rows();

 if ($blk_count==0) {
 ?>
 <li class="list-group-item <?php if($totalavailpristnow>$tselcountprst){ ?> <?php } else { echo 'disabled'; }?>">
            <label class="timer-slot">
                <?php if($totalavailpristnow>$tselcountprst){ ?>
                    <input type="radio" name="time_slot_index" value="<?=$chkcount;?>" <?php if($chk2==0){ echo 'checked';} ?>>
                <?php  $chk2++; } else { ?>
                    <input type="radio" name="" disabled="disabled">
                <?php  } ?>
                <?=$rowsdata->from_time;?> - <?=$rowsdata->to_time;?>
                <input type="hidden" name="time_slot<?=$chkcount;?>" id="time_slot<?=$chkcount;?>" value="<?=$rowsdata->id;?>">
                <input type="hidden" name="sel_date<?=$chkcount;?>" id="sel_date<?=$chkcount;?>" value="<?=date("Ymd", strtotime("+".$i2." day"))?>">
            </label>
            </li>
 <?php
} else {
    $sel_items=$block_pujatime->row();
     if ($sel_items->sel_priest==0) {
 ?>
        <li class="list-group-item disabled   <?php if($totalavailpristnow>$tselcountprst){ ?> <?php } else { echo 'disabled'; }?>">
            <label class="timer-slot">
                <?php if($totalavailpristnow>$tselcountprst){ ?>
                    <input type="radio" name="time_slot_index" value="<?=$chkcount;?>" <?php if($chk2==0){ echo 'checked';} ?>>
                <?php  $chk2++; } else { ?>
                    <input type="radio" name="" disabled="disabled">
                <?php  } ?>
                <?=$rowsdata->from_time;?> - <?=$rowsdata->to_time;?>
                <input type="hidden" name="time_slot<?=$chkcount;?>" id="time_slot<?=$chkcount;?>" value="<?=$rowsdata->id;?>">
                <input type="hidden" name="sel_date<?=$chkcount;?>" id="sel_date<?=$chkcount;?>" value="<?=date("Ymd", strtotime("+".$i2." day"))?>">
            </label>
            </li>
<?php }    else {
    ?>
    <li class="list-group-item <?php if($totalavailpristnow>$tselcountprst){ ?> <?php } else { echo 'disabled'; }?>">
            <label class="timer-slot">
                <?php if($totalavailpristnow>$tselcountprst){ ?>
                    <input type="radio" name="time_slot_index" value="<?=$chkcount;?>" <?php if($chk2==0){ echo 'checked';} ?>>
                <?php  $chk2++; } else { ?>
                    <input type="radio" name="" disabled="disabled">
                <?php  } ?>
                <?=$rowsdata->from_time;?> - <?=$rowsdata->to_time;?>
                <input type="hidden" name="time_slot<?=$chkcount;?>" id="time_slot<?=$chkcount;?>" value="<?=$rowsdata->id;?>">
                <input type="hidden" name="sel_date<?=$chkcount;?>" id="sel_date<?=$chkcount;?>" value="<?=date("Ymd", strtotime("+".$i2." day"))?>">
            </label>
            </li>
    <?php
}  

}      
    ?>
            
        <?php $chkcount++;} ?>
    </ul>
    </td>
    <?php 
        $i2++;  }
    ?>
 </tr>
 </tbody>
 <tfoot>
    <tr>
        <td colspan="7" class="m-auto text-center">




            
             <button _ngcontent-ngq-c157="" mat-flat-button="" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary">
                            <span class="mat-button-wrapper">Save & Proceed</span>
                            <div matripple="" class="mat-ripple mat-button-ripple"></div>
                            <div class="mat-button-focus-overlay"></div>
                        </button>
        </td>
    </tr>
 </tfoot>
 </table>
                           
                 
                    </div>
            </div>
        </form>
    
<?php } } ?>


    </div>
    <style>
        .tab-content #records #finalResult li a {
    background-color: #48263d00;
    color: #fff;
}
#finalResult li.itmesssss:hover, #finalResult li.itmesssss:hover a {
    list-style: none;
    background-color: #ffefe2 !important;
    color: #48263d !important;
}
li.itmactive, li.itmactive a{
    list-style: none;
    background-color: #ffefe2 !important;
    color: #48263d !important; 
}
    </style>
