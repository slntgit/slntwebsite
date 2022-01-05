<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>All Booking</li>
				</ul>
				<h4>All Booking</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<form action="<?=base_url();?>pages/ViewBooking/<?=$this->uri->segment(3);?>">
					<div class="row">
						<div class="col-sm-3 col-xs-12">
							<select class="form-control" name="bookingType" id="bookingType" required>
									<option value="puja" <?php if(isset($_GET['bookingType'])){ if ($_GET['bookingType']=='puja') { echo 'selected';  } } ?>>Puja</option>
									<option value="events"  <?php if(isset($_GET['bookingType'])){ if ($_GET['bookingType']=='events') { echo 'selected';  } } ?>>Events</option>
									<option value="ceremonies" <?php if(isset($_GET['bookingType'])){ if ($_GET['bookingType']=='ceremonies') { echo 'selected';  } } ?> >Ceremonies</option>
							</select>
						</div>
						<div class="col-sm-3 col-xs-12">
							 <input type="date" name="fromdate" id="fromdate" class="form-control" value="<?php if(isset($_GET['fromdate'])){ echo $_GET['fromdate'];} ?>" required>
						</div>
						<div class="col-sm-3 col-xs-12">
							<input type="date" name="todate" id="todate" class="form-control" value="<?php if(isset($_GET['todate'])){ echo $_GET['todate'];}?>" required>
						</div>
						<div class="col-sm-3 col-xs-12">
							 <button type="submit" class="btn btn-info btn-lg">Search</button>
						</div>
					</div>
					<br />
				</form>
			</div>





			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
						<div class="">
								<?php echo $this->session->flashdata('success');?>  
						 <table class="table table-bordered table-striped" id="example">
									<thead>
										<tr>
											<th>#</th>
										 	<th  class="width_action">Booking ID</th>
											<th  class="width_action">Booking Type </th>
											<th  class="width_action">Booking Date &  Time</th>
											<th  class="width_action">Registered  Date </th>
											<th  class="width_action">Paid Amount (SGD)</th>
											<th  class="width_action">Due Amount (SGD) </th>
											<th class="width_action">Status</th>
											<!-- <th class="width_action">Action</th> -->
										</tr>
									</thead>
									<tbody> 
									<?php 
										$count =1;
										foreach($bookinglist->result() as $myresult){

											$this->db->select('*');
											$this->db->from('slnt_puja_time');
											$this->db->where('id',$myresult->time_id);
											$this->db->order_by('id','DESC');
											$timinglist = $this->db->get()->row();

											$this->db->select('*');
											$this->db->from('slnt_payment_summery');
											$this->db->where('booking_id',$myresult->id);
											$this->db->order_by('id','DESC');
											$payment = $this->db->get();
											$dueamt=0.00;
											$paidamt=0.00;
											foreach ($payment->result() as $payval) {
												if ($payval->paystatus==1) {
													$paidamt=$paidamt+$payval->amt_pay;
												}
											}
											$this->db->select('*');
											$this->db->from('slnt_payment_summery');
											$this->db->where('booking_id',$myresult->id);
											$this->db->order_by('id','DESC');
											$this->db->limit(1);
											$payment2 = $this->db->get()->row();
									?>	
																			
										<tr>
											<td><?php echo $count; ?></td>
											<td><?php echo $myresult->booking_id; ?></td>
											<td style="text-transform: capitalize;"><?php echo $myresult->puja_type; ?></td>
											<td>
											
												<strong><?php echo date('d-M-Y',strtotime($myresult->sel_date)); ?> </strong>
												<br />
												<strong><?php echo $timinglist->from_time; ?> To <?php echo $timinglist->to_time; ?></strong>
											 

											</td>
											<td><?php echo $myresult->create_date; ?></td>
											<td><?php echo $paidamt; ?></td>
											<td><?php if($payment->num_rows()>0){ echo $dueamt=$payment2->total-$paidamt; } ?></td>
											<td>
												<a href="<?=base_url();?>Pages/All_Booking/<?php echo $myresult->id; ?>" class="" target="_blank">
												<?php 
													if ($payment->num_rows()>0) {
														if ($dueamt==0) {
															echo 'Confirmed';
														} else {
															echo 'Partial Pay';
														}
													} else {
														echo 'Partial Booking';
													}
												?>
												 </a>

											</td>
 										<!-- 	<td>                                                                            
												<a href="<?php echo base_url();?>Pages/Add_Puja/edit/<?php echo $myresult->id; ?>" title="Edit" class="btn-link btn_size has-tooltip text-info" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
												
											</td> -->       

</tr>

<?php $count++; } ?>										
									</tbody>
								</table>
								
						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
	
</div>