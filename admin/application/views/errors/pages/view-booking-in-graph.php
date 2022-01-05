<style type="text/css">
	.table-heading{
		font-size: 20px;
	}
</style>

<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>All Booking  of <?=$userDetails->name_title;?> <?=$userDetails->name;?> <?=$userDetails->last_name;?></li>
				</ul>
				<h4>All Booking of <?=$userDetails->name_title;?> <?=$userDetails->name;?> <?=$userDetails->last_name;?></h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	<div class="contentpanel">		
 		<div class="row">	
			<div class="col-sm-12 col-md-12 ">	

				<form action="<?=base_url();?>pages/ViewBookingInGraph/<?=$this->uri->segment(3);?>">
					<div class="row">
						<div class="col-sm-3 col-xs-12">
							<select class="form-control" name="bookingType" id="bookingType" required>
									<option value="puja" <?php if(isset($_GET['bookingType'])){ if ($_GET['bookingType']=='puja') { echo 'selected';  } } ?>>Pooja</option>
							</select>
						</div>
						<div class="col-sm-3 col-xs-12">
							 <input type="date" name="fromdate" id="fromdate" class="form-control" value="<?php if(isset($_GET['fromdate'])){ echo $_GET['fromdate'];} else { echo date('Y-m-d');} ?>" required>
						</div>
						<div class="col-sm-3 col-xs-12">
							<input type="date" name="todate" id="todate" class="form-control" value="<?php if(isset($_GET['todate'])){ echo $_GET['todate'];} else { echo date('Y-m-d', strtotime("+7day"));} ?>" required>
						</div>
						<div class="col-sm-3 col-xs-12">
							 <button type="submit" class="btn btn-info btn-lg">Search</button>
						</div>

						<div class="col-sm-12 text-center">
							<h3 class="text-danger"> View Booking Difference Max One week</h3>
						</div>
					</div>
					<br />
				</form>
			</div>
			<div class="col-sm-12 col-md-12 text-center">	

<?=$this->session->flashdata('success');?>


<?php 
	if (isset($_GET['bookingType'])) {
		$bookingType=$_GET['bookingType'];
	} else {
		$bookingType='puja';
	}

	 $ffdate = date('Y-m-d',strtotime($u_from_date));
	 $ttdate = date('Y-m-d',strtotime($u_todate));
	 $next7days = date('Y-m-d',strtotime($ttdate."+7 days"));
	 $lstkstrt = date('Y-m-d',strtotime($ffdate."-7 days"));
?>



 			<table class="custom-table">
            
            <thead>
            	<tr>
            		<th class="text-center">
            		 
						        <div class="row">
						            <div class="col-sm-12 text-center">
						                
						                <div class="btn-group btn-group-or" role="group">
<a href="<?=base_url();?>pages/ViewBookingInGraph/<?=$this->uri->segment(3);?>?bookingType=<?=$bookingType;?>&fromdate=<?=$lstkstrt;?>&todate=<?=$ffdate;?>" class="btn btn-success text-white"> <i class="fa fa-angle-double-left" aria-hidden="true"></i> Previous Week  </a>
		
		<a href="<?=base_url();?>Pages/ViewBooking/<?=$this->uri->segment(3);?>?bookingType=<?=$bookingType;?>&fromdate=<?=$ttdate;?>&todate=<?=$next7days;?>" class="btn btn-success text-white"> <i class="fa fa-list" aria-hidden="true"></i> List View  </a>


 <a href="<?=base_url();?>pages/ViewBookingInGraph/<?=$this->uri->segment(3);?>?bookingType=<?=$bookingType;?>&fromdate=<?=$ttdate;?>&todate=<?=$next7days;?>" class="btn btn-success text-white">Next Week <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						                </div>
						                
						            </div>
						        </div>
						    
            		</th>
            	</tr>
            </thead>
                <?php 

                $count =0;
				foreach ($slot_of_booking as $pujalist) { 
					$count++;	
					$this->db->select('*');
					$this->db->from('slnt_puja');
					$this->db->where('id',$pujalist->puja_id); 
					$pujadetails = $this->db->get()->row();
				?>
<tbody>
<tr>
	<td class="page-header"><button type="button" class="tbtn">
 <?php if($count==1){ ?>
                    	<i class="fa fa-plus-circle fa-minus-circle"></i>
<?php } else { ?>
<i class="fa fa-plus-circle"></i>
<?php  } ?>
                    	 <?=$pujadetails->description_charge;?></button> </td>
                </tr>
                <tr class="toggler  <?php if($count==1){ ?>toggler1<?php } ?>">
                    <td><div class="col-sm-12">
						<?php if (isset($_GET['fromdate'])) {
								$date1 = date("Y-m-d",strtotime($_GET['fromdate']));
								$date2 = date("Y-m-d",strtotime($_GET['todate']));
								$diff = abs(strtotime($date2) - strtotime($date1));
								$years = floor($diff / (365*60*60*24));
								$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
								$day = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
								$days=7;
							} else {
								$date1 = date('Ymd');
								$date2 = date('Ymd', strtotime(date('Y-m-d')."+7 day"));
								$diff = abs(strtotime($date2) - strtotime($date1));
								$years = floor($diff / (365*60*60*24));
								$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
								$day = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
								$days=7;
							}
						?>
								 	<table class="table table-responsive table-bordered">
								 		<thead>
								 			<tr>
								 			<?php $dx =0;
								 				while ($days>$dx) { ?>
								 				<th class="text-center"> 
								 					<p class="table-heading">
														<?php 
															if (isset($_GET['fromdate'])) {
																echo $tomorrow = date('d, M-Y', strtotime($_GET['fromdate']."+".$dx." day"));
															} else {
																echo $tomorrow = date('d, M-Y', strtotime(date('Ymd')."+".$dx." day"));
															}
														?>
								 					</p>
								 				</th>
								 			<?php $dx++; } ?>	
								 			</tr>
								 		</thead>
								 		<tbody>
								 			<tr>
								 			<?php $dx =0;
								 				while ($days>$dx) { 

													if (isset($_GET['fromdate'])) {
														$tomorrowx = date('Ymd', strtotime($_GET['fromdate']."+".$dx." day"));
													} else {
														$tomorrowx = date('Ymd', strtotime(date('Ymd')."+".$dx." day"));
													}
													?>
								 				<td class="text-center">
                                                    <ul class="list-group">
													    <?php 
													        $this->db->select('*');
													        $this->db->from('slnt_puja_time');
													        $this->db->where('pooja_time',$pujadetails->id);
													        $this->db->order_by('id','ASC');
													        $listtime = $this->db->get()->result();
													        foreach ($listtime as $rowsdata) {
													             $sel_date=$tomorrowx;
													                $time_id=$rowsdata->id.'-';
													             $puja_id=$pujadetails->id;

													            $this->db->select('*');
													            $this->db->from('slnt_booking_slot');
													             $this->db->where('sel_date',$sel_date);
													            $this->db->where('time_id',$time_id);
													            $this->db->where('puja_id',$puja_id);
													            $this->db->where('sel_priest',$this->uri->segment(3));
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

	if ($blk_count==0) { ?>
		<li class="list-group-item  assign-priest <?php if($tselcountprst>0){ echo 'bg-info';} else { echo '';} ?>"  data-toggle="modal" data-target="#login-modal"  id="<?=$this->uri->segment(3);?>" data-time="<?=$rowsdata->id;?>"  title="<?=$tomorrowx;?>" data-puja="<?=$puja_id;?>">
				<label class="timer-slot  <?php if($tselcountprst>0){ echo 'bg-info';} ?>">
					<?=$rowsdata->from_time;?> - <?=$rowsdata->to_time;?>
					<br />
					<?php 	if($tselcountprst>0){ 
								echo 'Booking ID : '.$ts->booking_id;
							} else { ?>
																			 
					<?php } ?>
			</label>
		</li>
<?php } else { 
$blk_data=$block_pujatime->row();
	if ($blk_data->sel_priest==0) { ?>
		 <li class="list-group-item  bg-danger"  >
				<label class="timer-slot  bg-danger">
					<?=$rowsdata->from_time;?> - <?=$rowsdata->to_time;?>
					<br />
					<?php 	if($tselcountprst>0){ 
								echo 'Booking ID : '.$ts->booking_id;
							} else { ?>
																			 
					<?php } ?>
						Blocked for all priest
			</label>
		</li>
<?php	} else {
		if ($blk_data->sel_priest==$this->uri->segment(3)) { ?> 
			<li class="list-group-item  bg-danger"  >
					<label class="timer-slot   bg-danger <?php if($tselcountprst>0){ echo 'bg-info';} ?>">
						<?=$rowsdata->from_time;?> - <?=$rowsdata->to_time;?>
						<br />
						<?php 	if($tselcountprst>0){ 
									echo 'Booking ID : '.$ts->booking_id;
						} else { ?>

						<?php } ?>
						 This time slot booked for : <?=$userDetails->name_title;?> <?=$userDetails->name;?> <?=$userDetails->last_name;?>
				</label>
			</li>
		<?php } else { ?>
			<li class="list-group-item  assign-priest <?php if($tselcountprst>0){ echo 'bg-info';} else { echo '';} ?>"  data-toggle="modal" data-target="#login-modal"  id="<?=$this->uri->segment(3);?>" data-time="<?=$rowsdata->id;?>"  title="<?=$tomorrowx;?>" data-puja="<?=$puja_id;?>">
				<label class="timer-slot  <?php if($tselcountprst>0){ echo 'bg-info';} ?>">
					<?=$rowsdata->from_time;?> - <?=$rowsdata->to_time;?>
					<br />
					<?php 	if($tselcountprst>0){ 
								echo 'Booking ID : '.$ts->booking_id;
							} else { ?>
																			 
					<?php } ?>
					<br />
					 This time slot booked for : <?php 
					 foreach ($block_pujatime->result() as $selItem) { 
					 		$this->db->select('*');
							$this->db->from('adminlogin');
							$this->db->where('id',$blk_data->sel_priest);
							$block_pujatimec = $this->db->get();    
							$blk_countc=$block_pujatimec->row();

							echo $blk_countc->name_title.' '.$blk_countc->name.' '.$blk_countc->last_name.', ';
					 	?>
					


					<?php  }  ?>
			</label>
		</li>
		<?php }
	}
} ?>

													        <?php $chkcount++;} ?>
													    </ul>
													    </td>
								 			<?php $dx++; } ?>	
								 			</tr>
								 		</tbody>
								 	</table>
							<?php //} ?></td>
                </tr></tbody>
               <?php 
			}
			?>
            
        </table>
				</div>
			</div>
		</div><!-- row -->  
	</div><!-- contentpanel -->
</div>
<style type="text/css">
	 .bg-info{background: green!important; color: #fff !important;}
	   .custom-table{border-collapse:collapse;width:100%;border:solid 1px #c0c0c0;font-family:open sans;font-size:11px}
            .custom-table th,.custom-table td{text-align:left;padding:8px;border:solid 1px #c0c0c0}
            .custom-table th{color:#000080}
            .custom-table tr:nth-child(odd){background-color:#f7f7ff}
            .custom-table>thead>tr{background-color:#dde8f7!important}
            .tbtn{border:0;outline:0;background-color:transparent;font-size:28px;cursor:pointer}
            .toggler{display:none}
            .toggler1{display:table-row;}
            .custom-table a{color: #0033cc;}
            .custom-table a:hover{color: #f00;}
            .page-header{background-color: #eee;}
            .btn-danger{
            	background: red !important;
            }
            .text-white{
            	color: #fff !important;
            }
            .list-group-item{ cursor: pointer; }
            .bg-danger{
            	background: red; color: #fff !important;
            }

</style>
<script type="text/javascript">
	 $(document).ready(function () {
                $(".tbtn").click(function () {
                    $(this).parents(".custom-table").find(".toggler1").removeClass("toggler1");
                    $(this).parents("tbody").find(".toggler").addClass("toggler1");
                    $(this).parents(".custom-table").find(".fa-minus-circle").removeClass("fa-minus-circle");
                    $(this).parents("tbody").find(".fa-plus-circle").addClass("fa-minus-circle");
                });
            });
</script>
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<?php 
						$stringurl ='';
						if (isset($_GET['bookingType'])) {
							$stringurl ='&bookingType='.$_GET['bookingType'].'&fromdate='.$_GET['fromdate'].'&todate='.$_GET['todate'];
						}
						$sengment = $this->uri->segment(3);
					?>
<form action="<?=base_url();?>pages/ViewBookingInGraph/<?=$sengment;?>?action=submit<?=$stringurl;?>" id="modalrsp" method="post" onsubmit="return confirm('Do you really want to block the slot?');">
</form>				  
				</div>
			</div>
		  </div>
		    <style type="text/css">
		  	@import url(http://fonts.googleapis.com/css?family=Roboto);

/****** LOGIN MODAL ******/
.loginmodal-container {
  padding: 30px;
  max-width: 650px;
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
.mtop20{
    margin-top:20px;
}

.btn-group-or>.btn:first-child {
    padding-right: 1.2rem;
} 
.btn-group-or>.btn:last-child {
    padding-left: 1.2rem;
} 
.btn-group-or .or {
    position: relative;
    width: .3rem;
    height: 2.5rem;
    z-index: 3;
}
.btn-group-or .or:before {
    position: absolute;
    text-align: center;
    border-radius: 50%;
    content: 'or';
    top: 50%;
    left: 50%;
    background-color: #fff;
    margin-top: -1rem;
    margin-left: -1rem;
    width: 2rem;
    height: 2rem;
    line-height:1.8rem;
    color: #868e96;
}
		  </style>
		   <script type="text/javascript">
		  	$('.assign-priest').on('click',function(){
		  		var dataPuja=$(this).attr("data-puja");
		  		var dataPujaTime=$(this).attr("data-time");
		  		var date=$(this).attr("title");
		  		var idPreist=$(this).attr("id");
		  		var queryString='dataPuja='+dataPuja+'&date='+date+'&idPreist='+idPreist+'&dataPujaTime='+dataPujaTime;
		  		 $.ajax({
                       type: "post",
                       url: '<?php echo site_url('Pages/getGraphPopup');?>',
                       cache: false, 
                       data:queryString,
                       success: function(response){
                            $('#modalrsp').html(response);
                       },
                       error: function(){      
                        alert('Error while request..');
                    }
                });
		  	});
		  </script>