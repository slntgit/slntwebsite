 
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<?php 
        $this->db->select('*');
        $this->db->from('slnt_crmn_booking');
        //$this->db->where("booking_id!=''");
        $this->db->where('userid',$_COOKIE["login_user"]);
        $this->db->order_by('id','DESC');
        $bookign_list = $this->db->get();
?> 
        <div class="list-group">
 

            <div class="container">
    <div class="row">
        <h1 class="text-center">List of my all Ceremonie booking schedule</h1>
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
                                    <th>#</th>
                                    <th  class="width_action">Booking ID</th>
                                    <th  class="width_action">Booking Type </th>
                                    <th  class="width_action">Booking Date &  Time</th>
                                    <th  class="width_action">Total Amount (SGD)</th>
                                    <th  class="width_action">Due Amount (SGD) </th>
                                    <th class="width_action">Status</th>
                                </tr>
                            </thead>
                            <tbody> 
                                <?php 
                                    $count =1;
                                    foreach($bookign_list->result() as $myresult){

                            $totalamt=0.00;
                            $count =1;
                            $this->db->select('*');
                            $this->db->from('slnt_ceremonies');
                            $this->db->where('id',$myresult->cer_evnt_type);
                            $ceremony = $this->db->get();
                            $ceremonydata = $ceremony->row();
                        ?>
                                <tr>
                                    <td><?=$count;?></td>
                                    <td><?=$myresult->booking_id;?></td>
                                    <td><?=$ceremonydata->description_charge;?></td>
                                    <td><?=date('d-M-Y h:i:s A',strtotime($myresult->datetimeids));?></td>
                                    <td>$<?=$myresult->last_pay_amt+$myresult->dueamt;?></td>
                                <td>
                                    $<?=$myresult->dueamt;?>
                                    <?php if($myresult->dueamt>0){ ?>
<a href="<?=base_url();?>pages/CeremoniesBookingInvoiceCreateNMail/<?=$myresult->id;?>/<?=$myresult->booking_id;?>" class="btn btn-xs btn-info">Gerate Invoice</a>
                                    <?php } ?>
                                </td>
                                    <td>
                                        <?php if($myresult->booking_id==''){ ?>
<a href="<?=base_url();?>Ceremonies/Cancel/<?=$myresult->id;?>" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary text-white">Re-Pay</a>
                                        <?php } else { ?>
                                            <a href="<?=base_url();?>Ceremonies/Print/<?=$myresult->id;?>" target="_blank" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary text-white">Print Invoice</a>
                                        <?php } ?>

                                    </td>
                                </tr>                                       
                                         

                                <?php $count++; } ?>                                        
                                    </tbody>
                </table>
 
    </div>
    </div>
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

