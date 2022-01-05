<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script><?php 
  $my_membership=$this->Main_model->getData('slnt_user_membership','id','DESC',NULL,'user_id',$_COOKIE["login_user"]);
?> 
        <div class="list-group">
 

            <div class="container">
    <div class="row">
        <h1 class="text-center">My activated membership plan</h1>
    </div>
    
        <div class="row">
        
            <div class="col-md-12">
            
<form action="<?=base_url();?>Dashboard/MyMembership/renew" method="post">
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
                            <th>Type Of  Membership</th>
                            <th>Membership ID</th>
                            <th>Membership Since</th>
                            <th>Expiring Date / Expired date</th>
                            <th>Membership Amount</th>
                            <th>Transection File</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th colspan="6">
                               
<?php if($my_membership->num_rows()>0){  ?>
                                <button type="submit" class="btn btn-success" title="Renew your this plan">
                                    <i class="fa fa-refresh" aria-hidden="true"></i> Renew  This Plan
                                </button>
<?php } ?>
                                 <a href="<?=base_url();?>applyMembership" class="btn btn-warning" title="Renew your this plan">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Buy New Plan
                                </a>
                            </th>
                             
                        </tr>
                    </tfoot>
                    <tbody>
<?php 

if($my_membership->num_rows()>0){ 
    foreach($my_membership->result() as $member){
    ?>
                        <tr>
                            <td>
<label><input type="radio" name="renew" id="renew" value="<?=$member->membership_id;?>"  required>
    <?=$member->membership_title;?>
</label>
                                
                                    
                            </td>
                            <td><?=$member->membership_id;?></td>
                            <td><?=date('d-M-Y',strtotime($member->membership_buy));?></td>
                            <td><?=date('d-M-Y',strtotime($member->membership_expire));?></td>
                            <td>$<?=$member->membership_amount;?> SGD</td>
                            <td>
                            <?php if($member->transection_slip!=''){ ?>
 
       <a href="<?=base_url();?>assets/membership/<?=$member->transection_slip;?>" target="_blank">View</a>
     

<?php } ?>   
                            </td>
                        </tr>
<?php 
    }
} ?>                     
                    </tbody>
                </table>

    </form>
    </div>
    </div>
</div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="Tiger Nixon">
        </div>
        <div class="form-group">
        
        <input class="form-control " type="text" placeholder="System Architect">
        </div>
        <div class="form-group">
        
        
      <input class="form-control " type="text" placeholder="Edinburgh">
        
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
    
    
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