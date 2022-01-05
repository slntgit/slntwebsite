<html lang="en">
    <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Home</title>
    
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400;1,600&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,500&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&amp;display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="<?=base_url();?>../assets/script/styles.695781241edc433b4ff1.css" />
<link rel="stylesheet" href="<?=base_url();?>../assets/custome.css" />
<link rel="stylesheet" href="<?=base_url();?>../assets/main.css" />
<style>
.banner[_ngcontent-ngq-c160] .banner-wrapper[_ngcontent-ngq-c160] {
                background-color: #48263d;
                background-position: 50%;
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
                max-width: 92%;
                max-height: 100vh;
                width: 100%;
                height: 100%;
                margin: auto;
                right: 0;
                left: 0;
                top: 0px;
                border-radius: 4px;
                overflow: hidden;
            }
             table thead th {
                    font-size: 11px!important;
                }
                .tableList thead th:last-child {
                    text-align: end;
                    padding-right: 2px !important;
                }
                .tableList tbody tr td:last-child {
                    text-align: end;
                    padding-right: 2px !important;
                }
                .tableList tbody tr td:first-child {
                    text-align: start;
                    padding-left: 2px !important;
                }
                .tableList thead th:first-child {
                    text-align: start;
                    padding-left: 2px !important;
                }
                
        </style>
        <script type="text/javascript">
            $(document).ready(function(){
                  $(".navbar-toggler").on("click", function(){
                    $('.collapse').toggle(500)
                  });
                  // $(".navbar-toggler").on("show.bs.collapse", function(){
                  //   $(".btn").html('<span class="glyphicon glyphicon-collapse-up"></span> Close');
                  // });
                });
        </script>
        <script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
    </head>

<body> 
                    
<style>
 @media(min-width : 768px){
    .tab-content {
    overflow: hidden!important;
    margin-top: 100px !important;
    margin-bottom:10px !important;
}
}

 @media(max-width : 767px){
     .table>tbody>tr>th {
    border: 0 !important;
    font-size: 13px;
    font-weight: 500;
}
     .td-block{
         display:block !important;
     }
    .tab-content {
    overflow: hidden!important;
    margin-top:20px !important;
    margin-bottom:10px !important;
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
.img-responsive{
    max-width:100%!important;
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
<?php 
        $this->db->select('*');
        $this->db->from('slnt_crmn_booking');
        $this->db->where('userid',$_COOKIE["login_user"]);
        $this->db->where('status',1);
        $this->db->where('id',$this->uri->segment(3));
        $this->db->order_by('id','DESC');
        $this->db->limit(1);
        $mybooing = $this->db->get();
if ($mybooing->num_rows()>0) {
    $mybooingslot = $mybooing->row();
?>
<?php 
                            $totalamt=0.00;
                            $count =1;
                            $this->db->select('*');
                            $this->db->from('slnt_ceremonies');
                            $this->db->where('id',$mybooingslot->cer_evnt_type);
                            $ceremony = $this->db->get();
                            $ceremonydata = $ceremony->row();
                        ?>
<div  id="messages">
    <div class="row"  id="divToPrint">
            <div class="col-sm-12">
                <table cellspacing="0" cellpadding="0"  class="table table-striped" style="width: 100% !important;">
                   
                    <tbody>
                        <tr>
                            <th colspan="3">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="text-success">Thank you for your booking.</p>
                                        <p class="text-">Your bookings detail will be as below</p>
<?php if($mybooingslot->dueamt>0){  ?>
    <p class="text-danger">Your bookings settled the payment 50% of Deposit. Hence, it will due 5 days before appointed date. It will be due on  <?php  $dues = date('d-m-Y',strtotime($mybooingslot->datetimeids));?>
                                    <?=date('d M Y', strtotime($dues."-5 day"))?>. If due amount will not be refunded and this booking will be cancelled.</p>
                     
                     
<?php  }  ?>

                                        


                                        <p class="text-">We have sent email to your registered email, for your future reference </p>
                                        <p class="text-">See you!</p>

                                    </div>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th></th>
                            <th class="text-left"></th>
                            <th class="text-right">Submitted Date : <?=date('d M Y',strtotime($mybooingslot->create_time))?></th>
                        </tr>
                        <tr>
                            <th colspan="3">Booking Information</th>
                        </tr>

                        <tr>
                            <th colspan="3">Booking ID : <?=$mybooingslot->booking_id;?></th>
                        </tr>

                         <tr>
                            <th colspan="3">Booked Date / Time : <?=date('d M Y h:i:s A',strtotime($mybooingslot->datetimeids));?></th>
                        </tr>

                         <tr>
                            <th colspan="3">Type of Pooja : <?=$ceremonydata->description_charge;?></th>
                        </tr>
                          <tr>
                            <th colspan="3">Venue : 


                                <?php if($mybooingslot->venue==0){  echo 'Yes';  } else { ?>
                                    <p>Home  Address : <?=$mybooingslot->home_address;?></p>
                                    <p>Postal Code : <?=$mybooingslot->postal_code;?></p>
                                    <p><?=$mybooingslot->picup;?> of preis</p>
                                <?php } ?></th>
                        </tr>

                          <tr>
                            <th colspan="3">Catering Menu :  <?php if($mybooingslot->catering==0){  echo 'Yes'; } else { echo 'No'; } ?></th>
                        </tr>

                          <tr>
                            <th colspan="3">Priest Information :

                                <?php 
                                    $this->db->select('*');
                                    $this->db->from('adminlogin');
                                    $this->db->where('id',$mybooingslot->sel_priest);
                                    $pujaListpriest = $this->db->get();
                                    $actpriest = $pujaListpriest->row();
                                ?></th>
                        </tr>
                           <tr>
                            <th colspan="3">Priest ID/Name : <?= $actpriest->name_title;?> <?= $actpriest->name;?> <?= $actpriest->last_name;?></th>
                        </tr>

                        <tr>
                            <th colspan="3">Contact Information : Mobile : +65 <?= $actpriest->mobleno;?> / Email : <?= $actpriest->email;?></th>
                        </tr>

                          <tr>
                            <th colspan="3">Payment Information : </th>
                        </tr>

                        <tr>
                            <th>No</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-right">AMOUNT (SGD)</th>
                        </tr>
                   
                        
                        <tr>
                            <td class="text-left"><?php echo $count; $count++;?></td>
                           <td class="text-left"><?=$ceremonydata->description_charge;?></td>
                            <td class="text-left"><?php
                                $this->db->select('*');
                                $this->db->from('slnt_user_membership');
                                $this->db->where('user_id',$_COOKIE["login_user"]);
                                $this->db->where('pay_status',1);
                                $this->db->order_by('id','DESC');
                                $this->db->limit(1);
                                $membership = $this->db->get();
                                $getmembershipplan = $membership->row();
                                    if($membership->num_rows()>0){
                                       echo $ceremonydata->member_price;
                                       $totalamt=$totalamt+$ceremonydata->member_price;
                                    } else {
                                       echo $ceremonydata->non_member_price; 
                                       $totalamt=$totalamt+$ceremonydata->non_member_price;
                                    }
                                
                               ?> 
                            </td>
                        </tr>
                        <?php 
                                    $this->db->select('*');
                                    $this->db->from('adminlogin');
                                    $this->db->where('id',$mybooingslot->sel_priest);
                                    $pujaListpriest = $this->db->get();
                         if($pujaListpriest->num_rows()>0){  
                            $actpriest = $pujaListpriest->row();        
                        ?>
                            <tr>
                                <td class="text-left"><?php echo $count; $count++;?></td>
                                <td class="text-left">Preferred Selected Priest Cost</td>
                                <td class="text-left"><?php 
                                        echo $actpriest->priest_price; 
                                        $totalamt=$totalamt+$actpriest->priest_price;
                                    ?>      
                                </td>
                            </tr>
                        <?php }  if($mybooingslot->venue==0){   ?>
                         <tr>
                            <td class="text-left"><?php echo $count; $count++;?></td>
                            <td class="text-left">Temple Fee </td>
                            <td class="text-left"><?php if($mybooingslot->venue==0){  echo $ceremonydata->venue_price; 
                                       $totalamt=$totalamt+$ceremonydata->venue_price; } ?> </td>
                        </tr>
                    <?php } ?>

                     <?php if($mybooingslot->puja_samagri==0){   ?>
                         <tr>
                            <td class="text-left"><?php echo $count; $count++;?></td>
                            <td class="text-left">Pooja  Samagri</td>
                            <td class="text-left"><?php  echo $mybooingslot->pooja_samagri_amt; 
                                       $totalamt=$totalamt+$mybooingslot->pooja_samagri_amt; ?> </td>
                        </tr>
                    <?php } ?>
                        <?php if($mybooingslot->havan_samagri==0){   ?>
                         <tr>
                            <td class="text-left"><?php echo $count; $count++;?></td>
                            <td class="text-left">Havan  Samagri</td>
                            <td class="text-left"><?php  echo $mybooingslot->havan_samagri_amt; 
                                       $totalamt=$totalamt+$mybooingslot->havan_samagri_amt; ?> </td>
                        </tr>
                    <?php } ?>
 
                    <?php if($mybooingslot->bhog_prasad==0){   ?>
                         <tr>
                            <td class="text-left"><?php echo $count; $count++;?></td>
                            <td class="text-left">Bhog Prasad</td>
                            <td class="text-left"><?php  echo $mybooingslot->bhog_prasad_amt; 
                                       $totalamt=$totalamt+$mybooingslot->bhog_prasad_amt; ?> </td>
                        </tr>
                    <?php } ?>
 
     <?php if($mybooingslot->catering==0){   ?>
                  
                    <?php if($mybooingslot->dinner==0){ 
                                    $this->db->select('*');
                                    $this->db->from('slnt_ceremonies_catering');
                                    $this->db->where('puja_id',$mybooingslot->cer_evnt_type);
                                    $this->db->where('catering_type','Dinner');
                                    $priest2 = $this->db->get()->result();
                                    $dinner=0.00;
                                     foreach ($priest2 as $value) {
                                        $dinner=$dinner+$value->catering_price;
                                    }
                                      
                                    $totalamt=$totalamt+$dinner;
                     ?>
                         <tr>
                            <td class="text-left"><?php echo $count; $count++;?></td>
                            <td class="text-left">Dinner</td>
                            <td class="text-left"><?php    echo $dinner; ?> </td>
                        </tr>
                    <?php } ?>

                    <?php if($mybooingslot->lunch==0){ 
                                    $this->db->select('*');
                                    $this->db->from('slnt_ceremonies_catering');
                                    $this->db->where('puja_id',$mybooingslot->cer_evnt_type);
                                    $this->db->where('catering_type','Lunch');
                                    $priest2 = $this->db->get()->result();
                                    $lunch=0.00;
                                     foreach ($priest2 as $value) {
                                        $lunch=$lunch+$value->catering_price;
                                    }
                                      
                                    $totalamt=$totalamt+$lunch;
                     ?>
                         <tr>
                            <td class="text-left"><?php echo $count; $count++;?></td>
                            <td class="text-left">Lunch</td>
                            <td class="text-left"><?php    echo $lunch; ?> </td>
                        </tr>
                    <?php } ?>

                    <?php if($mybooingslot->refreshment==0){ 
                                    $this->db->select('*');
                                    $this->db->from('slnt_ceremonies_catering');
                                    $this->db->where('puja_id',$mybooingslot->cer_evnt_type);
                                    $this->db->where('catering_type','Refreshment');
                                    $priest2 = $this->db->get()->result();
                                    $refreshment=0.00;
                                     foreach ($priest2 as $value) {
                                        $refreshment=$refreshment+$value->catering_price;
                                    }
                                      
                                    $totalamt=$totalamt+$refreshment;
                     ?>
                         <tr>
                            <td class="text-left"><?php echo $count; $count++;?></td>
                            <td class="text-left">Refreshment</td>
                            <td class="text-left"><?php    echo $refreshment; ?></td>
                        </tr>
                    <?php } ?>
                  <?php } ?>
 

                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="text-left" colspan="2">Net amount to be  settled : </th>
                         
                            <td class="text-left">$<?=$totalamt;?> SGD</td>
                        </tr>
<?php if($mybooingslot->dueamt>0){  ?>
                        <tr>
                            <td class="text-left  text-danger" colspan="2">50% Diposit Payment :  </th>
                         
                            <td class="text-left">$<span class="txt-amount"><?=$totalamt/2;?></span> SGD</td>
                        </tr>
                        <tr>
                            <td class="text-left text-danger" colspan="2">Due Amount <br />
                                Due Date :  
                                   <?php  $dues = date('d-m-Y',strtotime($mybooingslot->datetimeids));?>
                                    <?=date('d M Y', strtotime($dues."-5 day"))?>
                            </th>
                         
                            <td class="text-left">$<span class="txt-amount"><?=$totalamt/2;?></span> SGD</td>
                        </tr>
<?php  } else { ?>
        <tr>
                            <td class="text-left" colspan="2">100% Diposit Payment :  </th>
                         
                            <td class="text-left">$<span class="txt-amount"><?=$totalamt;?></span> SGD</td>
                        </tr>
                        <tr>
                            <td class="text-left" colspan="2">Due Amount Payment :  </th>
                        
                            <td class="text-left">$<span class="txt-amount">0</span> SGD</td>
                        </tr>
<?php } ?>
                    </tfoot>
                </table>
            </div>
        </div>
 <div class="row">
        <div class="col-sm-12">
                <div class="table-reasponsive text-center">

         <a href="#" onclick="PrintDiv();"  mat-flat-button="" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary text-white">
                                            <span class="mat-button-wrapper">Print</span>
                                            <div matripple="" class="mat-ripple mat-button-ripple"></div>
                                            <div class="mat-button-focus-overlay"></div>
                                        </a> 
                                    <br />    <br />
</div></div></div>


</div>
<script type="text/javascript">
    function calprice(arg) {
        var totalval=parseFloat($('#totalval').val());
        var arg=parseFloat(arg);
        var payble = totalval*arg/100;
        $('.amount').val(payble);
        $('.txt-amount').text(payble);
        //amount
    }
</script>
<script type="text/javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=600,height=600');

        popupWin.document.open();

        popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
     </script>
<style type="text/css">
    .form-inline .form-group { margin-right:10px; }
.well-primary {
color: rgb(255, 255, 255);
background-color: rgb(66, 139, 202);
border-color: rgb(53, 126, 189);
}
.glyphicon { margin-right:5px; }
.modal.in .modal-dialog {
    -webkit-transform: translate(0,0);
    -ms-transform: translate(0,0);
    -o-transform: translate(0,0);
    transform: translate(0,0);
    z-index: 99999999 !important;
}
.center {
    margin-top:50px;   
}

.modal-header {
    padding-bottom: 5px;
}

.modal-footer {
        padding: 0;
    }
    
.modal-footer .btn-group button {
    height:40px;
    border-top-left-radius : 0;
    border-top-right-radius : 0;
    border: none;
    border-right: 1px solid #ddd;
}
    
.modal-footer .btn-group:last-child > button {
    border-right: 0;
}
.form-control{
    margin-top: 10px !important;
}
</style>
<style>
    .table>tbody>tr>th{ border:1px solid #000 !important;}
    .invoice {
        position: relative;
        background: #fff;
        border: 1px solid #000 !important;
        //padding: 0 13px;
        //margin: 0 20px;
    }
    .table-bordered{ border-left:0 !important; border-right:0 !important;}
    .bpim{ width:40%; float:left; padding:0 20px;}
    .addim{ width:60%; float:right; padding:0 20px;}
    .addim .hpl{font-size: 50px; font-weight: 700; float: left;}
    .addim .all{ float:left; font-size:20px;}
    .addim .eml{ float:left;}
    .addim .ph{ float:left; }
    .addim .brn{ float:left;}
    .pdf{ padding:0 !important;}
    .pdf .table>tbody>tr>td{ border-top:0 !important;}
    .pdf .table>tbody>tr>td:nth-child(even) { border-bottom:1px dashed #CCCCCC;}
    .pdf.table>tbody>tr>td{ padding:4px !important;}
    .pdf .pdfth{ width:70%; padding-left: 0; padding-right: 0;  padding-top:0;}
    .pdf .pdfth .table>tr>th{}
    .btm .table{ margin-bottom:0;}
    .btm .table>tbody>tr>td{ border:0; padding:0 8px;}
    .btm .table>tbody>tr>th span{font-size:25px; font-weight:900;}
    .btm .table>tbody>tr>th .wb{width:80%; padding-bottom:0 !important;}
    .tbb{ padding:0; border-bottom:1px solid #000000; border-top:1px solid #000000;}
    .tbb .table>tbody>tr>td{ padding:4px !important;}
    .rt{ width:100%; border-bottom:0 !important;}
    .spnbf{background: #000;
        color: #fff;
        width: 100%;
        float: left;
        text-align: center;
        padding: 3px 0px;
        margin-bottom: 25px;
        
        -webkit-print-color-adjust: exact;}
        .ht{ margin:10px 0 0 25px;}
        .tshw{ padding-left:32%;}
        .table>tbody>tr>th{ border-top:1px solid #000 !important;}
        .table>tbody>tr>th{ border:0 !important;}
    </style>
    <style media="print" type="text/css">
    @media print
    
    {   
    .rt{ width:100%; border-bottom:0 !important;}
    .addim .all{ float:left; font-size:16px;} 
    .pdf .pdfth{ width:75%; padding-left: 0px; padding-right: 0;}
    .tbb{ padding-left:15px; padding-right:15px;  border-bottom:1px solid #000000; border-top:1px solid #000000;}
    .btm .table>tbody>tr>th span{font-size:20px; font-weight:500; }
    .btm .table>tbody>tr>th .wb{width:70%;}
    .btm .table{ margin-bottom:0;}
    .pdf{ padding:0 15px 0 15px !important; }
    .spnbf{background-color: #000 !important;
    color: #fff !important;
    -webkit-print-color-adjust: exact;
        }
        .btn, .btn-facebook *
        {
            display: none !important;
        }
    }
    
    table, tr, td, strong{
font-size: 11px !important;}
    @font-face {
    
    src: url(font/Individigital-Demibold.ttff);
}
 
 ul{
}
 ul > li{
 }
    </style>
<?php } ?>
</body>
</html>