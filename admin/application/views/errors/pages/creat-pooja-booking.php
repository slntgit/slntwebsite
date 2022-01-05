<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
		
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>Manage  Bookings</li>
				</ul>
				<h4>Create Booking</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	<?php if(isset($_GET['poojaId'])){
	                $this->db->select('*');
                    $this->db->from('slnt_puja');  
                    $this->db->where('id',$_GET['poojaId']);
                    $this->db->order_by("description_charge","ASC");
                    $this->db->limit(30);
                    $qu = $this->db->get()->row();
	}?>
	<div class="contentpanel">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
					    <?php if(isset($_GET['d'])){ ?>
					    <form action="<?=base_url();?>pages/CreatPoojaBooking?poojaId=<?=$_GET['poojaId'];?>&m=<?=$_GET['m'];?>&y=<?=$_GET['y'];?>&poojaTime=<?=$_GET['poojaTime'];?>&d=<?=$_GET['d'];?>&day=<?=$_GET['day'];?>&action=save" method="post">
					    <?php } else {  ?>
					    <form action="<?=base_url();?>pages/CreatPoojaBooking/save" method="post">
					    <?php } ?>
 					<div class="form-group col-sm-12">
    						<div class="col-sm-4">
    							<label class="control-label required" for="catering_title">Search Your Booking Service Type / Pooja Type <abbr class="text-danger">*</abbr></label>
    						</div>
    						<div class="col-sm-8">
                                <input value="<?php if(isset($_GET['poojaId'])){ echo $qu->description_charge; }?>" type="text" class="form-control searchPooja" name="search_service" id="search_service" autocomplete="off" placeholder="Search your pooja"/>
    							<span name ='form_err'><?=form_error('search_service');?></span>
    							
    						</div>
    						<div class="col-sm-4">
    						    </div>
    						<div class="col-sm-8">
            					<input type="hidden" name="puja_id" id="service_id" value="<?php if(isset($_GET['poojaId'])){ echo $qu->id; }?>">
                                <input type="hidden" name="member_price" id="member_price" value="<?php if(isset($_GET['poojaId'])){ echo $qu->member_price; }?>">
                                <input type="hidden" name="non_member" id="non_member" value="<?php if(isset($_GET['poojaId'])){ echo $qu->non_member_price; }?>">
                                <input type="hidden" name="title" id="title" value="<?php if(isset($_GET['poojaId'])){ echo $qu->description_charge; }?>">
                            <div class="col-sm-12" id="selecteddata">
            					<label for="search_service" id="search_string">
<label for="search_service" id="search_string"><?php if(isset($_GET['poojaId'])){ if(isset($_GET['poojaId'])){ echo $qu->description_charge; }?>, <strong>Member Price : <?php if(isset($_GET['poojaId'])){ echo $qu->member_price; }?>, Non-Member Price : <?php if(isset($_GET['poojaId'])){ echo $qu->non_member_price; }}?><strong></strong></strong></label>
                                </label>
    						</div>
    						</div>
    					</div>
    					<div class="form-group col-sm-12">
    						<div class="col-sm-12">
    							 <div class="searchData">
                <?php 
                if(isset($_GET['poojaId'])){ }else {
                    $this->db->select('*');
                    $this->db->from('slnt_puja');  
                    $this->db->where('status',1);
                    $this->db->order_by("description_charge","ASC");
                    $this->db->limit(30);
                    $query = $this->db->get();
                    if ($query->num_rows()>0) {
                    foreach ($query->result() as $value) {
                ?>
<h5 class="itmesssss searchdata" onclick="getSelService(<?=$value->id;?>,'<?=$value->description_charge;?>','<?=$value->member_price;?>','<?=$value->non_member_price;?>');">
    <a href="<?=base_url();?>pages/CreatPoojaBooking?poojaId=<?=$value->id;?>" class="text-white"><?=$value->description_charge;?> / <strong>Member: <?=$value->member_price;?></strong> / <strong>Non-Member: <?=$value->non_member_price;?>
    </strong></a></h5>
                    <?php 
                        }
                    } else {
                        echo 'No record found';
                    }
                }
                ?>
                 
    							 </div>
    						</div>
    					</div>
    					
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

     $calendar = "<table class='calendar'>";
     $calendar .= "<caption align='center' style='text-align: center;'>$monthName $year</caption>";
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

                $dayofdates= date('D',strtotime($date));
                $monthofdates= date('m',strtotime($date));
                $yearofdates= date('Y',strtotime($date));
                $poojaId = $_GET['poojaId'];
                 $todaydate=date('Ymd');
                $tcaldate = date('Ymd',strtotime($yearofdates.$monthofdates.$currentDay));
                
                
                
              if($dayofdates=='Sun' &&  $sun>0){
                   if($tcaldate>=$todaydate){
                      
                   $calendar .= "<td class='day'  data-toggle='modal' data-target='#login-modal' data-pooja-id='$poojaId' data-month='$monthofdates'  data-year='$yearofdates'  style='background:#6ed47a;' id='$currentDay' rel='$dayofdates'>
                        <span class='day-date'>$currentDay</span>
                   </td>";
                  } else {
                      $calendar .= "<td class='day' data-pooja-id='$poojaId' data-month='$monthofdates'  data-year='$yearofdates'  style='background: #616263; color: #fff; ' id='$currentDay' rel='$dayofdates'>
                        <span class='day-date'>$currentDay </span></td>";
                  }
              } else if($dayofdates=='Mon' &&  $mon>0){
                      if($tcaldate>=$todaydate){
                      
                   $calendar .= "<td class='day'  data-toggle='modal' data-target='#login-modal' data-pooja-id='$poojaId' data-month='$monthofdates'  data-year='$yearofdates'  style='background:#6ed47a;' id='$currentDay' rel='$dayofdates'>
                        <span class='day-date'>$currentDay</span>
                   </td>";
                  } else {
                      $calendar .= "<td class='day' data-pooja-id='$poojaId' data-month='$monthofdates'  data-year='$yearofdates'  style='background: #616263; color: #fff; ' id='$currentDay' rel='$dayofdates'>
                        <span class='day-date'>$currentDay </span></td>";
                  }
              } else if($dayofdates=='Tue' &&  $tue>0){
                     if($tcaldate>=$todaydate){
                      
                   $calendar .= "<td class='day'  data-toggle='modal' data-target='#login-modal' data-pooja-id='$poojaId' data-month='$monthofdates'  data-year='$yearofdates'  style='background:#6ed47a;' id='$currentDay' rel='$dayofdates'>
                        <span class='day-date'>$currentDay</span>
                   </td>";
                  } else {
                      $calendar .= "<td class='day' data-pooja-id='$poojaId' data-month='$monthofdates'  data-year='$yearofdates'  style='background: #616263; color: #fff; ' id='$currentDay' rel='$dayofdates'>
                        <span class='day-date'>$currentDay </span></td>";
                  }
              } else if($dayofdates=='Wed' &&  $wed>0){
                      if($tcaldate>=$todaydate){
                      
                   $calendar .= "<td class='day'  data-toggle='modal' data-target='#login-modal' data-pooja-id='$poojaId' data-month='$monthofdates'  data-year='$yearofdates'  style='background:#6ed47a;' id='$currentDay' rel='$dayofdates'>
                        <span class='day-date'>$currentDay</span>
                   </td>";
                  } else {
                      $calendar .= "<td class='day' data-pooja-id='$poojaId' data-month='$monthofdates'  data-year='$yearofdates'  style='background: #616263; color: #fff; ' id='$currentDay' rel='$dayofdates'>
                        <span class='day-date'>$currentDay </span></td>";
                  }
              } else if($dayofdates=='Thu' &&  $thu>0){
                     if($tcaldate>=$todaydate){
                      
                   $calendar .= "<td class='day'  data-toggle='modal' data-target='#login-modal' data-pooja-id='$poojaId' data-month='$monthofdates'  data-year='$yearofdates'  style='background:#6ed47a;' id='$currentDay' rel='$dayofdates'>
                        <span class='day-date'>$currentDay</span>
                   </td>";
                  } else {
                      $calendar .= "<td class='day' data-pooja-id='$poojaId' data-month='$monthofdates'  data-year='$yearofdates'  style='background: #616263; color: #fff; ' id='$currentDay' rel='$dayofdates'>
                        <span class='day-date'>$currentDay </span></td>";
                  }
              } else if($dayofdates=='Fri' &&  $fri>0){
                     if($tcaldate>=$todaydate){
                      
                   $calendar .= "<td class='day'  data-toggle='modal' data-target='#login-modal' data-pooja-id='$poojaId' data-month='$monthofdates'  data-year='$yearofdates'  style='background:#6ed47a;' id='$currentDay' rel='$dayofdates'>
                        <span class='day-date'>$currentDay</span>
                   </td>";
                  } else {
                      $calendar .= "<td class='day' data-pooja-id='$poojaId' data-month='$monthofdates'  data-year='$yearofdates'  style='background: #616263; color: #fff; ' id='$currentDay' rel='$dayofdates'>
                        <span class='day-date'>$currentDay </span></td>";
                  }
              } else if($dayofdates=='Sat' &&  $sat>0){
                      if($tcaldate>=$todaydate){
                      
                   $calendar .= "<td class='day'  data-toggle='modal' data-target='#login-modal' data-pooja-id='$poojaId' data-month='$monthofdates'  data-year='$yearofdates'  style='background:#6ed47a;' id='$currentDay' rel='$dayofdates'>
                        <span class='day-date'>$currentDay</span>
                   </td>";
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
 
 return "<div style='width: 33%; display:inline-block;'><a class='btn btn-info' href='?poojaId=".$_GET['poojaId']."&m=" . $prevMonth . "&y=". $prevYear ."'><- " . $monthName . "</a></div>";
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
 <a  class='btn btn-info'  href='?poojaId=".$_GET['poojaId']."&m=" . $nextMonth . "&y=". $nextYear ."'>" . $monthName . " -></a></div>";
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
                      url: '<?php echo site_url('pages/getTimeSlotOfPooja');?>',
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
    						    
    						    
<?php } else { 
//poojaTime
?>

<div class="row">
    <div class="col-sm-12">
        <a href="<?=base_url();?>pages/CreatPoojaBooking?poojaId=<?=$_GET['poojaId'];?>&m=<?=$_GET['m'];?>&y=<?=$_GET['y'];?>" class="btn btn-warning"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back To Calender</a>
    </div>
</div>
<?php 
                    $this->db->select('*');
                    $this->db->from('slnt_puja_time');  
                    $this->db->where('id',$_GET['poojaTime']);
                    $seltimeofpooja = $this->db->get();
                    $seltime=$seltimeofpooja->num_rows();
                   $sl = $seltimeofpooja->row();
?>
<div class="row">
    <div class="col-sm-12">
        <br />
        <table class="table table-responsive table-bordered">
            <tr>
                <td>
                    <lable>Enter Pooja Amount </lable>
                    <input type="text" class="form-control" name="pooja_amount" id="pooja_amount" value="0" required="">
                </td>
            </tr>
            <tr>
                <td>
<strong class="text-info">Selected Date & Time : </strong>
<strong class="text-danger"> 
    <?=$_GET['d'];?>-<?=$_GET['m'];?>-<?=$_GET['y'];?>, 
    <?=date('l', strtotime($_GET['day']));?> 
</strong>
<strong class="text-info"> 
    From  </strong> <strong class="text-warning">  <?=$sl->from_time;?> To  <?=$sl->to_time;?> 
</strong>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Do you have any preferred priest </strong>
                </td>
            </tr>
            
            
            <tr>
                <td>
                    <label class="selection text-center selection" for="pre_priest">
                            <input type="radio" class="pre_priest" name="pre_priest" id="pre_priest" value="1" required=""> Yes (Extra charges 10 SGD)
                        </label>
                         &nbsp; 
                        &nbsp;
                        
                         <label for="pre_priest_no" class="selection text-center">
                            <input type="radio" class="pre_priest" name="pre_priest" id="pre_priest_no" value="0" required=""> No
                        </label>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-sm-12" id="priest_user">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="col-sm-12 table-responsive venue-section">
    <br />
 
 <label class="head text-center">Venue : </label> 
    <table class="table table-responsive">
        <tbody>
           
             <tr>
                <td class="td-block">
                    <label><input type="radio" value="0" name="venue" class="vanue"  required="" /> At Temple </label>


                </td>
                <td class="td-block">
                    <label><input type="radio" value="1" name="venue" class="vanue"  required="" /> At your place. please enter address</label>
                
                </td>
            </tr>

            <tr>
                <td colspan="2" id="vanues" style="display:none;">
                    <div  class="row">
                        <div class="col-md-6">
                            <input type="text" name="home_address" class="form-control" id="home_address" value="" placeholder="Enter address"></div>
                            <div class="col-md-6"><input type="text" name="postal_code"  maxlength="6" minlength="6"  class="form-control number" id="postal_code" value="" placeholder="Enter postal code"></div>
                            
                             
    <div class="col-md-6">
        <br />
        <input type="text" class="form-control tpicker" name="time_range_from" id="time_range_from" placeholder='Journey Time From (Choose Time) '  />
        
    </div>
    <div class="col-md-6">
        <br />
        <input type="text" class="form-control tpicker" name="time_range_to" id="time_range_to"  placeholder='Journey Time To (Choose Time) '   />
    </div>
        
</div>

<div  class="row"><div class="col-sm-12 pickCab"><label><input type="radio" value="I will pick up priest" name="picup" id="time_range_to" /> I will pick up priest</label>
                            <label><input type="radio" value=" will reimburse taxi fare" name="picup" /> I will reimburse taxi fare</label></div></div>
                </td>
            </tr>
        </tbody>
    </table>
</div>


<div class="col-sm-12 bookingSub pujaSamagri">
 <label class="head text-center">Pooja Samagri  : </label> 
    <table class="table table-responsive">
        <tbody>
            <tr>
                 
                <td class="td-block">
                    <label><input type="radio" value="0" name="puja_samagri" class="puja_samagri"  required="" /> Yes </label></td>
                <td class="td-block">
                    <label><input type="radio" value="1" name="puja_samagri" class="puja_samagri"  required="" /> No</label>


                </td>
            </tr>
            <tr>
                <td colspan="2" id="puja_samagri_list"  class="td-block">
                    
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
                <td  class="td-block">
                    <label><input type="radio" value="0" name="havan_samagri" class="havan_samagri"  required="" /> Yes </label></td>
                <td  class="td-block">
                    <label><input type="radio" value="1" name="havan_samagri" class="havan_samagri"  required="" /> No</label>
               </td>
            </tr>
            <tr>
                <td colspan="2" id="havan_samagri_list"  class="td-block">
                    
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
                <td  class="td-block">
                    <label><input type="radio" value="0" name="bhog_prasad" class="bhog_prasad"  required="" /> Yes </label></td>
                <td  class="td-block">
                    <label><input type="radio" value="1" name="bhog_prasad" class="bhog_prasad"  required="" /> No</label>
               </td>
            </tr>
            <tr>
                <td colspan="2" id="bhog_prasad_list"  class="td-block">
                    
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="col-sm-12">
<br />
    <br />
 <label class="head text-center">Do you need catering  : </label> 
    <table class="table table-responsive">
        <tbody>
            <tr>
                <td  class="td-block">
                    <label><input type="radio" value="0" name="catering" class="catering"  required="" /> Yes </label></td>
                <td  class="td-block">
                    <label><input type="radio" value="1" name="catering" class="catering"  required=""/> No</label>
               </td>
            </tr>
      
        </tbody>
    </table>

    <div class="row"  id="catering_list"  class="td-block">
    </div>
</div>

                </td>
            </tr>
            
<tr>
    <td>
         <div class="col-sm-12">
             <label class="head">Note For Temple  : </label> 
                <div class="row">
                    <div class="col-sm-12">
                        <textarea class="form-control" name="note_for_temple" placeholder="Note for temple"></textarea>
                    </div>
                </div>
            </div>

    </td>
</tr>


          
    <tr>
        <td>
            <br />
    <br />


 <div class="col-sm-12">
      <div class="col-sm-12">
     <label class="head text-center">User Basic Contact Information </label> 
	</div>
 
<hr>
<div class="form-group col-sm-12">
	<div class="col-md-4 col-sm-6">
        <div class="form-group">
            <label for="name_title">Name Prefix <abbr class="text-danger">*</abbr></label>
              <select class="form-control" id="name_title" name="name_title">
                <option value="Mr">Mr.</option>
                <option value="Madam">Madam.</option>
                <option value="Miss">Miss.</option>
                <option value="Dr">Dr.</option>
                <option value="A/Prof">A/Prof.</option>
                <option value="Prof">Prof.</option>
              </select>
              <span name="form_err"></span>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="form-group">
            <label for="name">First Name <abbr class="text-danger">*</abbr></label>
            <input value="" type="text" name="name" id="name" tabindex="1" class="form-control alphabet" placeholder="First name">
            <span name="form_err"><?=form_error();?></span>
        </div>
    </div>

    <div class="col-md-4 col-sm-6">
        <div class="form-group">
            <label for="last_name">Last Name <abbr class="text-danger">*</abbr></label>
            <input type="text" name="last_name" id="last_name" tabindex="1" class="form-control alphabet" placeholder="Last name" value="">
        <span name="form_err"></span>
    </div>
    </div>
</div>
	
					<div class="form-group col-sm-6">
						<div class="col-sm-12">
							<label class="control-label required" for="mobleno">Mobile <abbr class="text-danger">*</abbr></label>
                            <input type="text" class="form-control number" name="mobleno" id="mobleno" value="" maxlength="8" placeholder="Mobile">
							<span name="form_err"><?=form_error('mobleno');?></span>
						</div>
					</div>
					<div class="form-group col-sm-6">
						<div class="col-sm-12">
							<label class="control-label required" for="email">Email </label>
						 
							<input type="text" class="form-control" name="email" id="email" value="" autocomplete="off" placeholder="Email">
							<span name="form_err"></span>
						</div>
					</div>
					<div class="form-group col-sm-6">
						<div class="col-sm-12">
							<label class="control-label required" for="u_city">City </label>
						 
							<input type="text" class="form-control" name="u_city" id="u_city" value="" autocomplete="off" placeholder="City">
							<span name="form_err"></span>
						</div>
					</div>
					<div class="form-group col-sm-6">
						<div class="col-sm-12">
							<label class="control-label required" for="u_postalcode">Postal Code </label>
						 
							<input type="text" class="form-control number"   maxlength="6" minlength="6"   name="u_postalcode" id="u_postalcode" value="" autocomplete="off" placeholder="Postal Code">
							<span name="form_err"></span>
						</div>
					</div>
					
						<div class="form-group col-sm-6">
						<div class="col-sm-12">
							<label class="control-label required" for="u_address">Address </label>
							<textarea  class="form-control" name="u_address" id="u_address" value="" autocomplete="off" placeholder="Address"></textarea>
							<span name="form_err"></span>
						</div>
					</div>
					
					
					</div>
					<div class="form-group col-sm-12">
						<div class="col-sm-12 text-center">
							 <button class="btn btn-info">Create Booking</button> 
						</div>
					</div>
        </td>
    </tr>
             
        </table>
    </div>
</div>




<?php  } ?>
    						    
    						    
					 </form>
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
 <script>
                function getSelService(arg,arg2,arg3,arg4) {
                    // $.ajax({
                    //   type: "post",
                    //   url: '<?php echo site_url('PoojaBooking/getTimeSlot');?>',
                    //   cache: false,    
                    //   data:'id='+arg,
                    //   success: function(response){
                    //         //$('#records').show();
                    //         $('.searchData').hide();
                    //         $('#settimeslot').html(response);
                    //   },
                    //   error: function(){      
                    //     alert('Error while request..');
                    //   }
                    //   });
                window.location.href='<?=base_url();?>pages/CreatPoojaBooking?poojaId='+arg;
                 $('#search_service').val(arg2);
                  $('#search_string').html(arg2+', <strong>Member Price : '+arg3+', Non-Member Price : '+arg4+'<strong>');
                 $('#service_id').val(arg);
                 $('#title').val(arg2);
                 $('#member_price').val(arg3);
                 $('#non_member').val(arg4);
            }
    $('.searchPooja').on('keyup',function(){
        var searchcontent = $(this).val();
        $.ajax({
            type: "post",
            url: '<?php echo site_url('pages/getpooja');?>',
            cache: false,    
            data:'searchkey='+searchcontent,
            success: function(response){
                $('.searchData').show();
                $('.searchData').html(response);
            },
                error: function(){      
                alert('Error while request..');
            }
        });
        
        
        //alert(searchcontent);
    });
    
    
            $('.pre_priest').on('click',function(){
                 var priestval = $(this).val();
                 
                 var poojaTime = '<?=$_GET['poojaTime'];?>';
                 var poojaId = '<?=$_GET['poojaId'];?>';
                 var d = '<?=$_GET['d'];?>';
                 var m = '<?=$_GET['m'];?>';
                 var y = '<?=$_GET['y'];?>';
                 
                if(priestval==0){
                    $('#priest_user').html("<input type='hidden' value='0' name='sel_priest' />");
                } else if(priestval==1){
                    
                    var QueryString ='d='+d+'&m='+m+'&y='+y+'&poojaTime='+poojaTime;
                    $.ajax({
                       type: "post",
                       url: '<?php echo site_url('pages/getPriestListOfBooking');?>',
                       cache: false, 
                       data: QueryString, 
                       success: function(response){
                            $('#priest_user').html(response);
                       },
                       error: function(){      
                        alert('Error while request..');
                       }
                      });
                }
             });
             
          $('.vanue').on('click',function(){
                var priestval = $(this).val();
                if (priestval==0) {
                     $('#home_address').removeAttr('required');
                   $('#postal_code').removeAttr('required');
                   $('#time_range_from').removeAttr('required');
                   $('#time_range_to').removeAttr('required');
                   $('#time_range_to').removeAttr('required');
                    $('#vanues').hide();
                } else {
                   $('#home_address').attr('required','required');
                   $('#postal_code').attr('required','required');
                   $('#time_range_from').attr('required','required');
                   $('#time_range_to').attr('required','required');
                   $('#time_range_to').attr('required','required');
                   $('#vanues').show();
                }
             });
             $('.puja_samagri').on('click',function(){
                var priestval = $(this).val();
                var  pujaid = $('#service_id').val();
                var queryString='pujaid='+pujaid+'&status='+priestval;
                 $.ajax({
                       type: "post",
                       url: '<?php echo site_url('pages/getPujaSamagri');?>',
                       cache: false, 
                       data:queryString,
                       success: function(response){
                            $('#puja_samagri_list').html(response);
                       },
                       error: function(){      
                        alert('Error while request..');
                    }
                });
             });

              $('.havan_samagri').on('click',function(){
                var priestval = $(this).val();
                var  pujaid = $('#service_id').val();
                var queryString='pujaid='+pujaid+'&status='+priestval;
                 $.ajax({
                       type: "post",
                       url: '<?php echo site_url('pages/getHavanSamagri');?>',
                       cache: false, 
                       data:queryString,
                       success: function(response){
                            $('#havan_samagri_list').html(response);
                       },
                       error: function(){      
                        alert('Error while request..');
                    }
                });
             });

               $('.bhog_prasad').on('click',function(){
                var priestval = $(this).val();
                var  pujaid = $('#service_id').val();
                var queryString='pujaid='+pujaid+'&status='+priestval;
                 $.ajax({
                       type: "post",
                       url: '<?php echo site_url('pages/getBhogPrasad');?>',
                       cache: false, 
                       data:queryString,
                       success: function(response){
                            $('#bhog_prasad_list').html(response);
                       },
                       error: function(){      
                        alert('Error while request..');
                    }
                });
             });

            $('.catering').on('click',function(){
                var priestval = $(this).val();
                var  pujaid = $('#service_id').val();
                var queryString='pujaid='+pujaid+'&status='+priestval;
                 $.ajax({
                       type: "post",
                       url: '<?php echo site_url('pages/getCatering');?>',
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
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	 <div class="modal-dialog">
		    <div class="loginmodal-container">
			</div>
		</div>
	</div>
		  
		  
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
		  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
 
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script>
    $(document).ready(function(){
    $('input.tpicker').timepicker({});
});
</script>