<div class="tab-pane fade  <?php if($this->uri->segment(2)=='Services-Date-Time'){ ?> in active <?php } ?>" id="profile">

    <?php

    
    
    if(isset($_GET['poojaId'])){
	                $this->db->select('*');
                    $this->db->from('slnt_puja');  
                    $this->db->where('id',$_GET['poojaId']);
                    $q = $this->db->get()->row();
	}?>
        <form method="post" action="<?=base_url();?>poojaBooking/Services-Date-Time/Update_services">           
                        <h2 class="head text-center">Choose Service & Date / Time</h2>
                            <div class="row">
                                <div class="col-sm-12">
                                   <label for="search_service">Search Your Booking Service Type / <?php if($_SESSION['type']['pooja']=='pooja'){ ?>Pooja<?php } else if($_SESSION['type']['pooja']=='yajman'){ ?>Yajman <?php } ?>  Type</label>
<input type="text" name="search_service" id="search_service" value="<?php  if(isset($_GET['poojaId'])){  echo $q->description_charge; }?>" class="form-control">
                                    
<?php    if(isset($_GET['poojaId'])){ 

$fill_from_date2 =  $q->fill_from_date;
$fill_to_date2 =  $q->fill_to_date;
 if(date('Ymd')>=$fill_from_date2 && date('Ymd')<=$fill_to_date2){  ?>


<input type="hidden" name="puja_id" id="service_id" value="<?php  if(isset($_GET['poojaId'])){  echo $q->id; }?>">
<input type="hidden" name="member_price" id="member_price" value="<?php  if(isset($_GET['poojaId'])){  echo $q->offer_mem_price; }?>">
<input type="hidden" name="non_member" id="non_member" value="<?php  if(isset($_GET['poojaId'])){  echo $q->offer_non_mem_price; }?>">
<input type="hidden" name="title" id="title" value="<?php  if(isset($_GET['poojaId'])){  echo $q->description_charge; }?>">
                                    
<label for="search_service" id="search_string">
    <?=$q->description_charge;?>, Member Price : <del style="color:red"><?=$q->member_price;?></del> 
    <?=$q->offer_mem_price;?>, Non-Member Price : <del style="color:red"><?=$q->non_member_price;?></del> <?=$q->offer_non_mem_price;?>  &nbsp;&nbsp;&nbsp;&nbsp; [Offer ends on <strong>“<?=date('d-m-Y',strtotime($q->fill_to_date));?>”</strong>]
    
    <?php 
     $pooja_time=$rowdata->puja_id;
     $date = date('Y-m-d');
     ?>
</label>


     
<?php  } else {
?>
<input type="hidden" name="puja_id" id="service_id" value="<?php  if(isset($_GET['poojaId'])){  echo $q->id; }?>">
<input type="hidden" name="member_price" id="member_price" value="<?php  if(isset($_GET['poojaId'])){  echo $q->member_price; }?>">
<input type="hidden" name="non_member" id="non_member" value="<?php  if(isset($_GET['poojaId'])){  echo $q->non_member_price; }?>">
<input type="hidden" name="title" id="title" value="<?php  if(isset($_GET['poojaId'])){  echo $q->description_charge; }?>">
                                    
<label for="search_service" id="search_string">
    <?=$q->description_charge;?>, Member Price : <?=$q->member_price;?>, Non-Member Price : <?=$q->non_member_price;
     $pooja_time=$rowdata->puja_id;
     $date = date('Y-m-d');
     ?>
</label>
 <?php }  } ?>
                                </div>
                                <div class="col-sm-12"  id='calendar'>
                <div id="records">
                          <ul id="finalResult">
                <?php 
                if(!isset($_GET['poojaId'])){
                    
                  
                    $this->db->select('*');
                    $this->db->from('slnt_puja');  
                    $this->db->where('status',1);
                        if($_SESSION['type']['pooja']=='pooja'){  
                            $this->db->where('puja_type','Puja');
                        } else if($_SESSION['type']['pooja']=='yajman'){  
                           $this->db->where('puja_type','Yajman');
                        } 
                    $this->db->order_by("description_charge","ASC");
                    $this->db->limit(30);
                    $query = $this->db->get();
                    if ($query->num_rows()>0) {
                    foreach ($query->result() as $value) {
                        
                       $fill_from_date =  $value->fill_from_date; 
                       $fill_to_date =  $value->fill_to_date;
                        
                   if(date('Ymd')>=$fill_from_date && date('Ymd')<=$fill_to_date){ ?>
                        <li class="itmesssss" data-href="<?=base_url();?>poojaBooking/Services-Date-Time?type=<?=$_SESSION['type']['pooja'];?>&poojaId=<?=$value->id;?>#calendar" >
                    <a href="<?=base_url();?>poojaBooking/Services-Date-Time?type=<?=$_SESSION['type']['pooja'];?>&poojaId=<?=$value->id;?>#calendar">
<?=$value->description_charge;?> / <strong>Member:<del style="color:red;"> <?=$value->member_price;?></del> <?=$value->offer_mem_price;?></strong> / 
<strong>Non-Member: <del style="color:red;"><?=$value->non_member_price;?></del>  <?=$value->offer_non_mem_price;?></strong>  &nbsp;&nbsp;&nbsp;&nbsp; [Offer ends on <strong>“<?=date('d-m-Y',strtotime($value->fill_to_date));?>”</strong>]
                    </a>
                     
                </li>
                   <?php }    else { ?>
                <li class="itmesssss" data-href="<?=base_url();?>poojaBooking/Services-Date-Time?type=<?=$_SESSION['type']['pooja'];?>&poojaId=<?=$value->id;?>#calendar" >
                    <a href="<?=base_url();?>poojaBooking/Services-Date-Time?type=<?=$_SESSION['type']['pooja'];?>&poojaId=<?=$value->id;?>#calendar">
                        <?=$value->description_charge;?> / <strong>Member: <?=$value->member_price;?></strong> / <strong>Non-Member: <?=$value->non_member_price;?></strong>
                    </a>
                     
                </li>
                 <?php  }  
               
                        }
                    } else {
                        echo 'No record found';
                    }
                }
                ?>
                        </ul>
                    </div>
                </div>
            </div>
           
                <div class="row">
                    <div class="col-sm-12" id="settimeslot" style="">
                            <?php if(!isset($_GET['poojaTime'])){ ?>
                                <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
 <style>
  body{font-family: Lato;}
  caption{font-size: 22pt; margin: 10px 0 20px 0; font-weight: 700;}
  table.calendar{width:100%; border:1px solid #000;}
  td.day{    height: 56px;
    border: 1px solid #000;
    vertical-align: middle;
    text-align: center;}
  td.day span.day-date{font-size: 14pt; font-weight: 700;}
  th.header {
    background-color: #db4242;
    max-width: 14.28%;
    width: 14.28%;
    text-align: center !important;
    color: #fff;
    font-size: 14pt;
    padding: 5px;
}
  .not-month{background-color: #ffefe2;}
  td.today {background-color:#6ed47a;}
  td.day span.today-date{font-size: 16pt;}
 </style>
    <div class="form-group col-sm-12">
        <div class="col-sm-12">
            <div class="span12_calender">
    	     <?php
                if(isset($_GET['poojaId'])){
    
                    $this->db->select('*');
                    $this->db->from('slnt_puja_time');  
                    $this->db->where('pooja_time',$_GET['poojaId']);
                    $this->db->where('pooja_date','Sun');
                    $qsun = $this->db->get();
                    $sun=$qsun->num_rows();
                    
                    $this->db->select('*');
                    $this->db->from('slnt_puja_time');  
                    $this->db->where('pooja_time',$_GET['poojaId']);
                    $this->db->where('pooja_date','Mon');
                    $qsun12 = $this->db->get();
                    $mon=$qsun12->num_rows(); 
                    
                    $this->db->select('*');
                    $this->db->from('slnt_puja_time');  
                    $this->db->where('pooja_time',$_GET['poojaId']);
                    $this->db->where('pooja_date','Tue');
                    $qsun12t = $this->db->get();
                    $tue=$qsun12t->num_rows(); 
                    
                    $this->db->select('*');
                    $this->db->from('slnt_puja_time');  
                    $this->db->where('pooja_time',$_GET['poojaId']);
                    $this->db->where('pooja_date','Wed');
                    $qsun12w = $this->db->get();
                    $wed=$qsun12w->num_rows(); 
                     
                     
                    $this->db->select('*');
                    $this->db->from('slnt_puja_time');  
                    $this->db->where('pooja_time',$_GET['poojaId']);
                    $this->db->where('pooja_date','Thu');
                    $qsun12th = $this->db->get();
                    $thu=$qsun12th->num_rows(); 
                     
                    $this->db->select('*');
                    $this->db->from('slnt_puja_time');  
                    $this->db->where('pooja_time',$_GET['poojaId']);
                    $this->db->where('pooja_date','Fri');
                    $q= $this->db->get();
                    $fri=$q->num_rows(); 
                     
                    $this->db->select('*');
                    $this->db->from('slnt_puja_time');  
                    $this->db->where('pooja_time',$_GET['poojaId']);
                    $this->db->where('pooja_date','Sat');
                    $q4= $this->db->get();
                    $sat=$q4->num_rows(); 
              
function build_calendar($month,$year,$dateArray,$sun,$mon,$tue,$wed,$thu,$fri,$sat) {

     // Create array containing abbreviations of days of week.
     $daysOfWeek = array('Sun','Mon','Tues','Wed','Thurs','Fri','Sat');

     // What is the first day of the month in question?
     $firstDayOfMonth = mktime(0,0,0,$month,1,$year);

     // How many days does this month contain?
     $numberDays = date('t',$firstDayOfMonth);

     // Retrieve some information about the first day of the
     // month in question.
     $dateComponents = getdate($firstDayOfMonth);

     // What is the name of the month in question?
     $monthName = $dateComponents['month'];

     // What is the index value (0-6) of the first day of the
     // month in question.
     $dayOfWeek = $dateComponents['wday'];

     // Create the table tag opener and day headers
  $calendar = "<h2 align='center' style='text-align: center;'>$monthName $year</h2>";
  $calendar .= "<hr />"; 
  
  $calendar .= "<p align='center' style='text-align: center;'><strong>Note : </strong> Please click on the date to select the time slot.</p>";
  $calendar .= "<hr />";
  $calendar .= '<div class="col-sm-12 text-center">
        <span> <span class="not-gray"></span> &nbsp;  Unavailable </span> &nbsp; <span><span class="not-green"></span> &nbsp;  Available</span> &nbsp; <span><span class="not-Cream"></span> &nbsp;  Not Available</span>
    </div>';
  $calendar .= "<hr />";
     $calendar .= "<table class='calendar'>";
   
     $calendar .= "<tr>";

     // Create the calendar headers

     foreach($daysOfWeek as $day) {
          $calendar .= "<th class='header'>$day</th>";
     } 

     // Create the rest of the calendar

     // Initiate the day counter, starting with the 1st.

     $currentDay = 1;

     $calendar .= "</tr><tr>";

     // The variable $dayOfWeek is used to
     // ensure that the calendar
     // display consists of exactly 7 columns.

     if ($dayOfWeek > 0) { 
          $calendar .= "<td colspan='$dayOfWeek' class='not-month'>&nbsp;</td>"; 
     }
     
     $month = str_pad($month, 2, "0", STR_PAD_LEFT);
  
     while ($currentDay <= $numberDays) {

          // Seventh column (Saturday) reached. Start a new row.
          if ($dayOfWeek == 7) {
               $dayOfWeek = 0;
               $calendar .= "</tr><tr>";
          }
      $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
          $date = "$year-$month-$currentDayRel";
        //   if ($date == date("Y-m-d")){
        //   $calendar .= "<td class='day today' rel='$date'><span class='today-date'>$currentDay</span></td>";
        //   }
        //   else{

                $d= date('d',strtotime($date));
                $dayofdates= date('D',strtotime($date));
                $monthofdates= date('m',strtotime($date));
                $yearofdates= date('Y',strtotime($date));
                $poojaId = $_GET['poojaId'];
               $todaydate=date('Ymd');
                $tcaldate = date('Ymd',strtotime($yearofdates.$monthofdates.$d));
                
              if($dayofdates=='Sun' &&  $sun>0){
                  if($tcaldate>=$todaydate){
                      $calendar .= "<td class='day'  data-toggle='modal' data-target='#sem-login' data-pooja-id='$poojaId' data-month='$monthofdates'  data-year='$yearofdates'  style='background:#6ed47a;' id='$currentDay' rel='$dayofdates'>
                        <span class='day-date'>$currentDay</span></td>";
                  } else {
                      $calendar .= "<td class='day' data-pooja-id='$poojaId' data-month='$monthofdates'  data-year='$yearofdates'  style='background: #616263; color: #fff; ' id='$currentDay' rel='$dayofdates'>
                        <span class='day-date'>$currentDay</span></td>";
                  }
                 
                   
              } else if($dayofdates=='Mon' &&  $mon>0){
                   if($tcaldate>=$todaydate){
                      $calendar .= "<td class='day'  data-toggle='modal' data-target='#sem-login' data-pooja-id='$poojaId' data-month='$monthofdates'  data-year='$yearofdates'  style='background:#6ed47a;' id='$currentDay' rel='$dayofdates'>
                        <span class='day-date'>$currentDay </span></td>";
                  } else {
                      $calendar .= "<td class='day' data-pooja-id='$poojaId' data-month='$monthofdates'  data-year='$yearofdates'  style='background: #616263; color: #fff; ' id='$currentDay' rel='$dayofdates'>
                        <span class='day-date'>$currentDay </span></td>";
                  }
                 
              } else if($dayofdates=='Tue' &&  $tue>0){
                   if($tcaldate>=$todaydate){
                      $calendar .= "<td class='day'  data-toggle='modal' data-target='#sem-login' data-pooja-id='$poojaId' data-month='$monthofdates'  data-year='$yearofdates'  style='background:#6ed47a;' id='$currentDay' rel='$dayofdates'>
                        <span class='day-date'>$currentDay </span></td>";
                  } else {
                      $calendar .= "<td class='day'   data-pooja-id='$poojaId' data-month='$monthofdates'  data-year='$yearofdates'  style='background: #616263; color: #fff; ' id='$currentDay' rel='$dayofdates'>
                        <span class='day-date'>$currentDay </span></td>";
                  }
                 
              } else if($dayofdates=='Wed' &&  $wed>0){
                   if($tcaldate>=$todaydate){
                      $calendar .= "<td class='day'  data-toggle='modal' data-target='#sem-login' data-pooja-id='$poojaId' data-month='$monthofdates'  data-year='$yearofdates'  style='background:#6ed47a;' id='$currentDay' rel='$dayofdates'>
                        <span class='day-date'>$currentDay </span></td>";
                  } else {
                      $calendar .= "<td class='day' data-pooja-id='$poojaId' data-month='$monthofdates'  data-year='$yearofdates'  style='background: #616263; color: #fff; ' id='$currentDay' rel='$dayofdates'>
                        <span class='day-date'>$currentDay </span></td>";
                  }
                 
              } else if($dayofdates=='Thu' &&  $thu>0){
                  if($tcaldate>=$todaydate){
                      $calendar .= "<td class='day'  data-toggle='modal' data-target='#sem-login' data-pooja-id='$poojaId' data-month='$monthofdates'  data-year='$yearofdates'  style='background:#6ed47a;' id='$currentDay' rel='$dayofdates'>
                        <span class='day-date'>$currentDay </span></td>";
                  } else {
                      $calendar .= "<td class='day'  data-pooja-id='$poojaId' data-month='$monthofdates'  data-year='$yearofdates'  style='background: #616263; color: #fff; ' id='$currentDay' rel='$dayofdates'>
                        <span class='day-date'>$currentDay </span></td>";
                  }
                 
              } else if($dayofdates=='Fri' &&  $fri>0){
                   if($tcaldate>=$todaydate){
                      $calendar .= "<td class='day'  data-toggle='modal' data-target='#sem-login' data-pooja-id='$poojaId' data-month='$monthofdates'  data-year='$yearofdates'  style='background:#6ed47a;' id='$currentDay' rel='$dayofdates'>
                        <span class='day-date'>$currentDay </span></td>";
                  } else {
                      $calendar .= "<td class='day'  data-pooja-id='$poojaId' data-month='$monthofdates'  data-year='$yearofdates'  style='background: #616263; color: #fff; ' id='$currentDay' rel='$dayofdates'>
                        <span class='day-date'>$currentDay </span></td>";
                  }
                 
              } else if($dayofdates=='Sat' &&  $sat>0){
                   if($tcaldate>=$todaydate){
                      $calendar .= "<td class='day'  data-toggle='modal' data-target='#sem-login' data-pooja-id='$poojaId' data-month='$monthofdates'  data-year='$yearofdates'  style='background:#6ed47a;' id='$currentDay' rel='$dayofdates'>
                        <span class='day-date'>$currentDay </span></td>";
                  } else {
                      $calendar .= "<td class='day' data-pooja-id='$poojaId' data-month='$monthofdates'  data-year='$yearofdates'  style='background: #616263; color: #fff; ' id='$currentDay' rel='$dayofdates'>
                        <span class='day-date'>$currentDay </span></td>";
                  }
                 
              } else {
                   $calendar .= "<td class='day' style='background:#ffefe2;' id='$currentDay' rel='$dayofdates'>
                        <span class='day-date'>$currentDay</span>
                   </td>";
              }
                 
          
         // }
          
   
          // Increment counters
 
          $currentDay++;
          $dayOfWeek++;

     }
     
     

     // Complete the row of the last week in month, if necessary

     if ($dayOfWeek != 7) { 
     
          $remainingDays = 7 - $dayOfWeek;
          $calendar .= "<td colspan='$remainingDays' class='not-month'>&nbsp;</td>"; 

     }
     
     $calendar .= "</tr>";

     $calendar .= "</table>";

     return $calendar;

}

function build_previousMonth($month,$year,$monthString){
 
 $prevMonth = $month - 1;
  
  if ($prevMonth == 0) {
   $prevMonth = 12;
  }
  
 if ($prevMonth == 12){  
  $prevYear = $year - 1;
 } else {
  $prevYear = $year;
 }
 
 $dateObj = DateTime::createFromFormat('!m', $prevMonth);
 $monthName = $dateObj->format('F'); 
 
 return "<div style='width: 33%; display:inline-block;'><a class='mat-focus-indicator mat-flat-button mat-button-base mat-primary text-white' href='?poojaId=".$_GET['poojaId']."&m=" . $prevMonth . "&y=". $prevYear ."#calendar'><- " . $monthName . "</a></div>";
}

function build_nextMonth($month,$year,$monthString){
 
 $nextMonth = $month + 1;
  
  if ($nextMonth == 13) {
   $nextMonth = 1;
  }
 
 if ($nextMonth == 1){  
  $nextYear = $year + 1;
 } else {
  $nextYear = $year;
 }
 
 $dateObj = DateTime::createFromFormat('!m', $nextMonth);
 $monthName = $dateObj->format('F'); 
 
 return "<div style='width: 33%; display:inline-block;'>&nbsp;</div><div style='width: 33%; display:inline-block; text-align:right;'>
 <a  class='mat-focus-indicator mat-flat-button mat-button-base mat-primary text-white '  href='?poojaId=".$_GET['poojaId']."&m=" . $nextMonth . "&y=". $nextYear ."#calendar'>" . $monthName . " -></a></div>";
}

 
   parse_str($_SERVER['QUERY_STRING']);  
 
   if ($m == ""){
    
    $dateComponents = getdate();
    $month = $dateComponents['mon'];
    $year = $dateComponents['year'];
   } else {
   
     $month = $m;
     $year = $y;
   
   }

 echo build_previousMonth($month, $year, $monthString);

 echo build_nextMonth($month,$year,$monthString);
  echo "<hr />";

 echo build_calendar($month,$year,$dateArray,$sun,$mon,$tue,$wed,$thu,$fri,$sat);
 
 
}
?>
<script>
    $('.day').on('click',function(){
        var selday = $(this).attr('rel');
        var selmonth = $(this).attr('data-month');
        var selyear = $(this).attr('data-year');
        var selpooja = $(this).attr('data-pooja-id');
        var selnoday = $(this).attr('id');
        var QueryString ='selday='+selday+'&selmonth='+selmonth+'&selyear='+selyear+'&selpooja='+selpooja+'&selnoday='+selnoday;
                    $.ajax({
                      type: "post",
                      url: '<?php echo site_url('poojaBooking/getTimeSlotOfPooja');?>',
                      cache: false,    
                      data:QueryString,
                      success: function(response){
                            $('.loginmodal-container').html(response);
                      },
                      error: function(){      
                        alert('Error while request..');
                      }
                    }); 
    });
    
   
</script>
		                        </div>   
    						</div>
    					</div>
                            <?php }?>  
                 
                    </div>
            </div>
        </form>
  
  <!-- The Modal -->
  <div class="modal fade seminor-login-modal" data-backdrop="static" id="sem-login">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal body -->
        <div class="modal-body seminor-login-modal-body">
         <h5 class="modal-title text-center">Select your time slot</h5>
          <button type="button" class="close" data-dismiss="modal">
              <span><i class="fa fa-times-circle" aria-hidden="true"></i></span>
          </button>
      <div class="form-group loginmodal-container">
      </div>
        </div>
      </div>
    </div>
  </div>

    </div>
      <?php 
    if(isset($_GET['poojaId'])){?>
    <script>
        document.getElementById('calendar').focus();
    </script>
    <?php }?>
    
    <style>
     <?php 
    if(isset($_GET['poojaId'])){?>
    #records{
        display:none;
    }
    <?php }?>
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
<script>
    jQuery('.itmesssss').on('click',function(){
        var  reddd = jQuery(this).attr('data-href');
        window.location.href=reddd;
    });
</script>