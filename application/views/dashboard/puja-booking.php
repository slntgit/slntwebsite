 
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
 
        <div class="list-group">
  

            <div class="container">
    <div class="row">
        <h2 class="text-center">List of my all booking schedule</h2>
    </div>
    
        <div class="row">
        
            <div class="col-md-12">
            <style>
table {
  font-family: arial, sans-serif !important;
  border-collapse: collapse !important;
  width: 100% !important;
}

td, th, tr {
  border: 1px solid #dddddd !important;
  text-align: left !important;
  padding: 8px !important;
}

tr:nth-child(even) {
  background-color: #dddddd !important;
}
</style>
            
<table id="example" class="table table-striped"  width="100%">
                    <thead>
                        <tr>
                             <th>Sr. No.</th>
                            <th>Booked ID</th>
                            <th>Booked Date and Time</th>
                            <th>Pooja Type</th>
                            <th>Decription Of Charge</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Booked ID</th>
                            <th>Booked Date and Time</th>
                            <th>Pooja Type</th>
                            <th>Decription Of Charge</th>
                            <th>Action</th>
                            
                        </tr>
                    </tfoot>

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
        											$this->db->from('slnt_puja');
        											$this->db->where('id',$myresult->puja_id);
        											$slntpoojas = $this->db->get()->row();

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
												<td>
											<a href="<?=base_url();?>poojaBooking/Thank-You/<?php echo $payment2->id; ?>/<?=$payment2->payment_id;?>">
												<strong><?php echo date('d-M-Y',strtotime($myresult->sel_date)); ?> </strong>
												<br />
												<strong><?php echo $timinglist->from_time; ?> To <?php echo $timinglist->to_time; ?></strong>
												
											 </a>


<hr />

                                            <?php
											   if($myresult->req_date!=''){ 
											   
											   	$this->db->select('*');
    											$this->db->from('slnt_puja_time');
    											$this->db->where('id',$myresult->req_time);
    											$this->db->order_by('id','DESC');
    											$timin = $this->db->get()->row();
											   ?>
											    <h5>Request  For Postpone Posted </h5>  
											    
											     
											    <strong>Date : <?php echo date('d-M-Y',strtotime($myresult->req_date)); ?> </strong>
												<br />
												<strong>Time : <?php echo $timin->from_time; ?> To <?php echo $timin->to_time; ?></strong>
												<strong>Status : 
												<?php  if($timin->req_status==0){ echo 'Pending'; } ?>
												<?php  if($timin->req_status==2){ echo 'Accepted'; } ?>
												<?php  if($timin->req_status==3){ echo 'Rejected'; } ?>
												
												</strong>
											 <?php   }
											   ?> 
											</td>
											<td style="text-transform: capitalize;"><?php echo $myresult->puja_type; ?></td>
										
											<td><?php echo $slntpoojas->description_charge; ?></td>
											<td>
											    
											   <?php if($myresult->status==3){ ?>
											   <p data-placement="top" data-toggle="tooltip" title="Delete">
                                                        <a  class="btn btn-danger btn-sm text-white" >
                                                            Booking Canceled on  <?=$myresult->cancledattime;?>
                                                        </a>
                                                    </p>
											   <?php } else { ?>
											   
											  
											    
											       <p data-placement="top" data-toggle="tooltip" title="Edit">
<a class="btn btn-primary btn-sm text-white pospone"  data-title="Request for Change Booking Date/Time" data-id="<?php echo $myresult->id; ?>" data-toggle="modal" data-target="#edit"   >
                                                            Request For Postpone<span class="glyphicon glyphicon-pencil"></span>
                                                        </a>
                                                    </p>
                                                    
                                                    <p data-placement="top" data-toggle="tooltip" title="Delete">
                                                        <a class="btn btn-danger btn-sm text-white" href="<?=base_url();?>Dashboard/MyPujaBooking/?action=doCancel&bookingId=<?php echo $myresult->booking_id; ?>&actId=<?php echo $myresult->id; ?>" onclick="if (confirm('Are you sure you are canceling the booking?')){return true;}else{event.stopPropagation(); event.preventDefault();};" >
                                                            Cancel Booking 
                                                        </a>
                                                    </p>
                                                   <?php } ?> 
                                                    
											</td>
										 
 									       

</tr>

<?php $count++; } ?>							
                    </tbody>
                </table>

    
    </div>
    </div>
</div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
          <form method="post" action="">
    <div class="modal-content">
          <div class="modal-header">
        
        <h4 class="modal-title custom_align" id="Heading">Request for Change Booking Date/Time</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
          <div class="modal-body">
          <div class="form-group">
              <label>Choose Date</label>
                <input type="hidden" id="booking_id" name="booking_id" value="" />
                <input class="form-control" type="date" name="date" id="sel_date" placeholder="Choose date" min="<?=date('Y-m-d');?>" onchange='changedate(this.value)'>
        </div>
        <div class="form-group">
            <label>Choose Time</label>
         <select class="form-control " id="sel_time" name="sel_time">
             
         </select>
        </div>
        
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg saveit" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>Request</button>
      </div>
        </div>
        </form>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
    <script>
            $('.saveit').on('click',function(){
                var booking_id=$('#booking_id').val();
                var sel_date=$('#sel_date').val();
                var sel_time=$('#sel_time').val();
                var datas= 'booking_id='+booking_id+'&sel_date='+sel_date+'&sel_time='+sel_time;
                     $.ajax({
                       type: "post",
                       url: '<?=base_url();?>Dashboard/ResetTimeSlotMyBooking',
                       cache: false,    
                       data:datas,
                       success: function(response){
                            $('.modal-body').html(response);
                       },
                       error: function(){      
                        alert('Error while request..');
                       }
                      });
            });
        function changedate(str){
                    var booking_id=$('#booking_id').val();
                    var datas= 'booking_id='+booking_id+'&date='+str;
                    $.ajax({
                       type: "post",
                       url: '<?=base_url();?>Dashboard/getTimeSlot',
                       cache: false,    
                       data:datas,
                       success: function(response){
                            $('#sel_time').html(response);
                       },
                       error: function(){      
                        alert('Error while request..');
                       }
                      });
        }
        
        $('.pospone').on('click',function(){
            var selid=$(this).attr('data-id');
            $('#booking_id').val(selid);
        })
    </script>
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
        </div>
    </div>
</main>
<script>
    $(document).ready(function() {
    $('#example').DataTable(
        
         {     

      "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
        "iDisplayLength": 5
       } 
        );
} );


function checkAll(bx) {
  var cbs = document.getElementsByTagName('input');
  for(var i=0; i < cbs.length; i++) {
    if(cbs[i].type == 'checkbox') {
      cbs[i].checked = bx.checked;
    }
  }
}
</script>
<style>
    table{
    width:100%;
}
#example_filter{
    float:right;
}
#example_paginate{
    float:right;
}
label {
    display: inline-flex;
    margin-bottom: .5rem;
    margin-top: .5rem;
   
}
select,.form-control, input{
    border-radius: 0px !important;
    padding: 6px 10px !important;
    height: 34px !important;
    line-height: 15px !important;
    margin: 0px 10px !important;
}
</style>
