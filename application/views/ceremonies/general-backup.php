<style>
 @media(min-width : 768px){
    .tab-content {
    overflow: hidden!important;
    margin-top: 100px !important;
}
}

 @media(max-width : 767px){
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
 <link rel="stylesgeet" href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">
 
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script src="https://rawgit.com/creativetimofficial/material-kit/master/assets/js/core/jquery.min.js"></script>
    <script src="https://rawgit.com/creativetimofficial/material-kit/master/assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="https://rawgit.com/creativetimofficial/material-kit/master/assets/js/plugins/moment.min.js"></script>
    <script src="https://rawgit.com/creativetimofficial/material-kit/master/assets/js/plugins/bootstrap-datetimepicker.js"></script>
    <script src="https://rawgit.com/creativetimofficial/material-kit/master/assets/js/material-kit.js"></script>

<?php 
        $this->db->select('*');
        $this->db->from('slnt_crmn_booking');
        $this->db->where('userid',$_COOKIE["login_user"]);
        $this->db->where('status',0);
        $this->db->order_by('id','DESC');
        $this->db->limit(1);
        $mybooing = $this->db->get();
        $cvr = $mybooing->row();
        $cvr_count = $mybooing->num_rows();
        
        
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
?>

 <div class="row">
    <div class="col-sm-12">
      <form id="submit" action="<?=base_url();?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-12 chooesBtn">
                <h2 for="memberid" class="titleHead">
                	Choose Event Type
                </h2>
                    <?php 
                    $count=0;
                    foreach($list_ceremonies->result() as $cerData){ ?>   
	            <label for="cer_evnt_type<?=$count?>" class="btn <?php  if($cvr_count>0){ if($cvr->cer_evnt_type==$cerData->id){ echo 'btn-warning'; } else { echo 'btn-info';} }else { if($count==0){ echo 'btn-info'; } else { ?> btn-info <?php }}  ?> sel-item "> 
                    <input required type="radio" onchange="getSDetails(this.value,'<?=$cerData->solomnization?>')" value="<?=$cerData->id?>" name="cer_evnt_type" id="cer_evnt_type<?=$count?>" <?php if($cvr_count>0){ if($cvr->cer_evnt_type==$cerData->id){ echo 'checked'; } else { echo 'btn-info';} }else { if($count==0){ echo ''; } else { ?>  <?php } } ?>>
                    <?=$cerData->description_charge?>
                </label>
                    <?php 
                    $count++;
                    }?>
            </div>
            <div class="row">
                <div class="col-sm-12" id="solm" style="display: none;">
                    <div class="wrapperChooseCemo d-flex" >    
                        <p for="memberid" class=""> Are you going to do solemnisation in the temple</p>
                        <label for="do_solemnisation" class="click_solemnisation" title="yes">
                            <input type="radio" class="solms" name="do_solemnisation" id="do_solemnisation" value="yes"  required="" <?php if($cvr_count>0){ if($cvr->do_solemnisation=='yes'){   echo 'checked'; }}?>>
                            Yes
                        </label>
                        <label for="do_solemnisation2" class="click_solemnisation" title="no">
                            <input type="radio" class="solms" name="do_solemnisation" id="do_solemnisation2" value="no"  required="" <?php if($cvr_count>0){ if($cvr->do_solemnisation=='no'){  echo 'checked'; }}?>>
                            No
                        </label>
                    </div>
               
                    <div class="col-sm-12 " id="upload_solemnisation" style=" <?php if($cvr_count>0){  } else { ?>display: none!important;<?php } ?>">
		                <?php if($cvr_count>0){ 
                        $this->db->select('*');
                        $this->db->from('slnt_arrangedecoration');
                        $this->db->where('status',1);
                        $this->db->order_by('id','DESC');
                        $dat_m=$this->db->get();
                        if($cvr->do_solemnisation=='yes'){ ?> 
                    <div class="row hiddenFileUpload">
                        <div class="col-sm-12">
                            <label>Upload solemnisation application copy of form(.pdf)</label>
                            <input type="file" name="solemnisation_copy" id="solemnisation_copy" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                      <label for="arrange_solemnisation" class="col-sm-6 col-xs-12">
                          Arrange solemnisation
                        </label>
                        <label for="arrange_solemnisation" class="col-sm-3 col-xs-12">
                           <input type="radio" name="arrange_solemnisation" id="arrange_solemnisation"  <?php if($cvr->arrange_solemnisation=='on'){ echo 'checked'; } ?> required="" value="on">
                                Yes
                        </label>
                        <label for="arrange_solemnisation2" class="col-sm-3 col-xs-12">
                           <input type="radio" name="arrange_solemnisation" id="arrange_solemnisation2" <?php if($cvr->arrange_solemnisation=='off'){ echo 'checked'; } ?> required="" value="off">
                                No
                        </label>
                    </div>


                    <div class="row">
                      <label for="memberid" class="col-sm-6 col-xs-12">
                          Arrange the tables/Chairs/Decoration for the occasion(Paid)
                        </label>
                        <label for="arrange_table_chair" class="col-sm-3 col-xs-12 chk_chair_deco" value="yes">
                           <input type="radio" name="arrange_table_chair" id="arrange_table_chair" value="yes" <?php if($cvr->arrange_table_chair=='yes'){ echo 'checked'; } ?>   onclick="chnageTab('Yes');" required="">
                                Yes
                        </label>
                        <label for="arrange_table_chair2" class="col-sm-3 col-xs-12 chk_chair_deco" value="no" onclick="chnageTab('no');">
                           <input type="radio" name="arrange_table_chair" id="arrange_table_chair2" value="no" <?php if($cvr->arrange_table_chair=='no'){ echo 'checked'; } ?>  required="">
                                No
                        </label>
                    </div>    
                    <div class="col-sm-12">
                        <?php $count=0; foreach($dat_m->result() as $deco){ ?> 
                        <label for="memberid_<?=$count;?>" class="col-xs-12">
                            <input type="radio" name="decoration" id="memberid_<?=$count;?>" required="" value="<?=$deco->id;?>" <?php if($cvr->decoration==$deco->id){ echo 'checked'; } ?>>
                            <?=$deco->title;?> - <?php if($chk>0 ){ ?>$<?=$deco->membership_amount;?> SGD <?php } else { ?>$<?=$deco->none_membership_amount;?> SGD <?php  } ?>
                        </label>
                        <?php $count++;} ?>
                    </div>

    <?php } else  if($cvr->do_solemnisation=='no'){ ?>
<hr />
    <div class="row">
      <label for="memberid" class="col-sm-6 col-xs-12">
            Room Certificate
        </label>
        <label for="room_certificate" class="col-sm-3 col-xs-12">
           <input type="radio" name="room_certificate" id="room_certificate" required="" value="on" <?php if($cvr->room_certificate=='no'){ echo 'checked'; } ?>>
                Yes
        </label>
        <label for="room_certificate2" class="col-sm-3 col-xs-12">
           <input type="radio" name="room_certificate" id="room_certificate2" required="" value="off" <?php if($cvr->room_certificate=='off'){ echo 'checked'; } ?>>
                No
        </label>
    </div>
    <hr />
      <div class="row">
      <div class="col-sm-12">
        <label for="solemnisation_copy">Upload solemnisation application copy of form</label>
        <input type="file" name="solemnisation_copy" id="solemnisation_copy" class="form-control">
      </div>
    </div>

    <?php  } } ?>
	</div>
	</div>
	</div>
	<div class="col-sm-12">
    <div class="row">
        <div class='col-sm-12'>
               <div class="form-group">
                    <label for="datetimeids" class="label-control">Date</label>
 <input type="datetime-local" class="form-control" value="<?php  if($cvr_count>0){ echo $cvr->datetimeids; } ?>" name="datetimeids" id="datetimeids" required>
                </div>
        </div>
    </div>
</div></div>
    
      <div class="col-sm-12" id="uploaded_image">  
      </div>
  
 
        <div class='col-sm-12'>
            <div class="form-group">
               <div class='input-group text-center'>
                  <button type="submit" color="primary" id="submit-step1" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary">
                    <span class="mat-button-wrapper">Save & Next</span>
                  </button> 
                </div>
            </div>
            <br /> <br />
    </div></div>
  </form>
</div>
</div>
 


<style type="text/css">
	.datepicker table tr th,.datepicker table tr td {
        background: #ffefe2!important;
        color: #48263d!important;
         padding:4px!important;
        border:1px solid #000 !important;
    }
.datepicker table tr td.disabled {
    background: #eee!important;
    color: red!important;
}
</style>

<style>
  
 
/* dropdown */

.dropdown-menu.bootstrap-datetimepicker-widget.open {
    opacity: 1!important;
    transform: scale(1);
    top: 20!important;
}

.bootstrap-datetimepicker-widget.dropdown-menu {
    padding: 4px!important;
    width: 19em!important;
}

.bootstrap-datetimepicker-widget .list-unstyled {
    margin: 10!important;
}
 
.bootstrap-datetimepicker-widget {
    list-style: none!important;
}

.bootstrap-datetimepicker-widget a:hover {
    box-shadow: none !important!important;
}

.bootstrap-datetimepicker-widget a .btn:hover {
    background-color: transparent!important;
}

.bootstrap-datetimepicker-widget.dropdown-menu {
    padding: 4px!important;
    width: 19em!important;
}

@media (min-width: 768px) {
    .bootstrap-datetimepicker-widget.dropdown-menu.timepicker-sbs {
        width: 38em!important;
    }
}

@media (min-width: 991px) {
    .bootstrap-datetimepicker-widget.dropdown-menu.timepicker-sbs {
        width: 38em!important;
    }
}

@media (min-width: 1200px) {
    .bootstrap-datetimepicker-widget.dropdown-menu.timepicker-sbs {
        width: 38em!important;
    }
}

.bootstrap-datetimepicker-widget.dropdown-menu.bottom:before,
.bootstrap-datetimepicker-widget.dropdown-menu.bottom:after {
    right: auto!important;
    left: 12px!important;
}

.bootstrap-datetimepicker-widget.dropdown-menu.top {
    margin-top: auto!important;
    margin-bottom: 27px!important;
}

.bootstrap-datetimepicker-widget.dropdown-menu.top.open {
    margin-top: auto!important;
    margin-bottom: 27px!important;
}

.bootstrap-datetimepicker-widget.dropdown-menu.pull-right:before {
    left: auto!important;
    right: 6px!important;
}

.bootstrap-datetimepicker-widget.dropdown-menu.pull-right:after {
    left: auto!important;
    right: 7px!important;
}

.bootstrap-datetimepicker-widget .list-unstyled {
    margin: 0!important;
}

.bootstrap-datetimepicker-widget a[data-action] {
    padding: 0!important;
    margin: 0!important;
    border-width: 0!important;
    background-color: transparent!important;
    
    box-shadow: none!important;
}

.bootstrap-datetimepicker-widget a[data-action]:hover {
    background-color: transparent!important;
}

.bootstrap-datetimepicker-widget a[data-action]:hover span {
    background-color: #eee!important;
  
}

.bootstrap-datetimepicker-widget a[data-action]:active {
    box-shadow: none!important;
}


.bootstrap-datetimepicker-widget .picker-switch td {
    padding: 0!important;
    margin: 0!important;
    height: auto!important;
    width: auto!important;
    line-height: inherit!important;
}

.bootstrap-datetimepicker-widget .picker-switch td span {
    line-height: 2.5!important;
    height: 2.5em!important;
    width: 100%!important;
    border-radius: 3px!important;
    margin: 2px 0px !important!important;
}

.bootstrap-datetimepicker-widget table {
    width: 100%!important;
    margin: 0!important;
}

.bootstrap-datetimepicker-widget table.table-condensed tr>td {
    text-align: center!important;
}

.bootstrap-datetimepicker-widget table td>div,
.bootstrap-datetimepicker-widget table th>div {
    text-align: center!important;
}
.bootstrap-datetimepicker-widget{
     min-height:100px;
 }
 
</style>
<script type="text/javascript">
$(document).ready(function() {
     var disabledDate = [<?php foreach($all_block_date->result() as $xsc2){ echo "'".$xsc2->title."'".","; }?> '2020-01-01'];
        $('.datetimepicker').datetimepicker({
            minDate:new Date(),
             disabledDates: disabledDate,
            icons: {
               time: "fa fa-clock-o",
               date: "fa fa-calendar",
               up: "fa fa-chevron-up",
               down: "fa fa-chevron-down",
               previous: 'fa fa-chevron-left',
               next: 'fa fa-chevron-right',
               today: 'fa fa-screenshot',
               clear: 'fa fa-trash',
               close: 'fa fa-remove'
           }
        });
});
</script>

<script type="text/javascript">
  $('.sel-item').on('click',function(){
      $('.sel-item').removeClass('btn-warning');
      $('.sel-item').addClass('btn-info');
      $(this).removeClass('btn-info');
      $(this).addClass('btn-warning');
  });
  $(document).ready(function() {
  $('.accordion').find('.accordion-toggle').click(function() {
    $(this).next().slideToggle('600');
    $(".accordion-content").not($(this).next()).slideUp('600');
  });
  $('.accordion-toggle').on('click', function() {
    $(this).toggleClass('active').siblings().removeClass('active');
  });
});
  
$('.click_solemnisation').on('click',function(){
	var title = $(this). attr("title");
     
	$.ajax({
        type: "post",
        url: '<?php echo site_url('AjaxController/getSolemnisationDetails');?>',
        cache: false,    
        data:'title='+title,
        success: function(response){
        		$('#upload_solemnisation').css('display','block');
        		$('#upload_solemnisation').html(response);
        },
        error: function(){      
            alert('Error while request..');
        }
    });
});

 
</script>
 <script>
    function getSDetails(str,str2){
        if(str2=='0'){
            $('.solms').removeAttr('required');
            $('.solms').removeAttr('checked');
            $('#solm').hide(500);
        } else if(str2=='1'){
            $('.solms').attr('required','required');
            $('#solm').show(500);
        }
    }
</script>