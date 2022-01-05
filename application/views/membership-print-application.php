
<div class="tab-pane fade  <?php if($this->uri->segment(2)=='MembershipPrintApplication'){ ?> in active <?php } ?>" id="profile">
<?php

    $this->db->select('*');
    $this->db->from('slnt_user_membership');
    $this->db->where(array('user_id'=>$_COOKIE["login_user"],'final_submit_status'=>1));
    $this->db->order_by('id','DESC');
    $this->db->limit(1);
    $lastx  = $this->db->get();
    $lastmember = $lastx->row();
    if($lastx->num_rows()==0){
        redirect('Membership/MembershipApplicationPreview');
    }
?>
 
<div class="row"  id="divToPrint">
    <div class="col-sm-12">
            <div class="table-reasponsive">
<table  cellpadding="0" cellspacing="0" border="0" class="table table-bordered tableList">
<!--                    <thead>-->
<!--                        <tr>-->
<!--                            <th align="center" colspan="4" style="padding: 6px 4px; border:1px solid; text-align: center !important;">-->
<!--                            <?php if($this->uri->segment(4)=='Cancel'){?>-->
<!--<h2>Transaction cancelled try again later</h2>-->
<!--                           <?php  }?>-->
<!--                                    <p style=" color: #ffefe2 !important;" class="text-center">-->
<!--                                       Thank you for your submission. Please check your email we have send your details below PDF. Or you can print here. -->
<!--                                    </p>-->
<!--                                    <p style=" color: #ffefe2 !important;" class="text-center">-->
<!--                                        Please take a print of this copy and get is signed by two proposer and submit it to SLNT Gereral Office.  -->
<!--                                    </p>-->
<!--                                    <p style=" color: #ffefe2 !important;" class="text-center">-->
<!--                                        SLNT General Office will notify you outcome of your application.-->
<!--                                    </p>-->
           
<!--                </th>-->
<!--            </tr>-->
<!--                        </thead>-->
                            <tbody>
                                
                                <tr>
                                     <td colspan="2" style="padding: 6px 4px; border:1px solid;  text-align: left !important;">
                                        <img src="<?=base_url();?>assets/print-logo.png" />     
                                    </td>
                                    <td colspan="2"  style="padding: 6px 4px; border:1px solid;  text-align: right !important;"> 
                                    
<img src="<?php if($lastmember->userfile!=''){ ?><?=base_url();?>assets/profile/<?=$lastmember->userfile;?><?php } else {?><?=base_url();?>assets/mem.jpg<?php } ?>" id="profi" style="max-width: 109px !important;
    width: 250px !important;     border: 2px solid #48263d;" />
                                    </td>
                                </tr>
                                
                                
 <tr>
    <td colspan="4" style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
        <h2>Application For Membership</h2> 
    </td>
</tr>                               
 <tr>
    <td colspan="4" style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
        <h4>Dear Sir,</h4> 
        <p>I wish to apply for membership  of the Shree Lakshminarayan  Temple, Singapore, I agree to abide by the rules
        and regulations as laid down by the constitution  and standing orders  of the Managing Committee. I confirm that I am  a hindu by Religion.</p>
    </td>
</tr>                                
                                
<tr>
    <td colspan="4" style="padding: 8px 4px; border:1px solid;  text-align: center !important;">
        <h3>PERSONAL DATA</h3> 
    </td>
</tr>    

<tr>
    <td style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
        <h5>Name (in block letters)</h5> 
    </td>
    
     <td colspan="3" style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
        <p><?=$lastmember->name_as_nric;?></p> 
    </td>
    
    
</tr>    


<tr>
    <td style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
        <h5>Address</h5> 
    </td>
    
     <td colspan="3" style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
        <p><?=$lastmember->emp_address_1;?> <?=$lastmember->emp_postalcode;?></p> 
    </td>
    
    
</tr>    



                                
<tr>
    <td style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
        <h5>NRIC/Passport</h5> 
    </td>
    
     <td style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
        <p><?=$lastmember->nric_passport;?></p> 
    </td>
    
     <td style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
        <h5>Date of Birth</h5> 
    </td>
    
     <td style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
        <p><?=$lastmember->days;?>-<?=$lastmember->month;?>-<?=$lastmember->year;?></p> 
    </td>
    
    
</tr>    

<tr>
    <td style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
        <h5>Contact Details</h5> 
    </td>
    
     <td style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
        <h5>H +65 
<?=$lastmember->home_tel;?></h5> 
    </td>
    
     <td style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
        <h5>O +65 
<?=$lastmember->emp_tel;?></h5> 
    </td>
    
     <td style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
        <h5>M +65
<?=$lastmember->mobile;?></h5> 
    </td>
</tr>    

<tr>
   
     <td style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
        <h5>Email  </h5> 
    </td>
    
     <td colspan="3" style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
        <h5><?=$lastmember->email;?></h5> 
    </td>
     
</tr>    


<tr>
   
     <td style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
        <h5>Gender</h5> 
    </td>
    
     <td  style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
        <h5><?=$lastmember->gende;?></h5> 
    </td>
      
     <td style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
        <h5>Marital Status</h5> 
    </td>
     
     <td style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
        <p><?=$lastmember->marital_status;?></p> 
    </td>
     
</tr>    


  <tr>
   
     <td style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
        <h5>Type Of Membership applied for : </h5> 
    </td>
    
     <td colspan="3" style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
        <p><?=$lastmember->membership_title;?></p> 
    </td>
    
</tr>    
  <tr>
    <td colspan="4" style="padding: 8px 4px; border:1px solid;  text-align: center !important;">
        <h3>DECLARATION</h3> 
    </td>
</tr>    
  <tr>
    <td colspan="4" style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
        <p>I hereby declare that all inforamtion given in  this application form  are true   to the best of my  knowledge. 
        I understand  and agree that any false information given will disqualify my application.</p> 
    </td>
</tr>    
        
        
<tr>
    <td colspan="2" style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
        <h4>Applicant's  Signature.....................................</h4> 
    </td>
    
    
     <td colspan="2" style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
        <h4>Date.....................................</h4> 
    </td>
</tr>    
        
        
                
        
<tr>
    <td colspan="2" style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
        <h4>Proposed By.....................................</h4> 
    </td>
    
    
     <td colspan="2" style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
        <h4>Seconded by .....................................</h4> 
    </td>
</tr>    
        
        
                 
        
<tr>
    <td colspan="2" style="padding: 8px 4px; border:1px solid;  text-align: center !important;">
        <p>.................................................</p> 
        <h4>Signature</h4> 
    </td>
    
    
     <td colspan="2" style="padding: 8px 4px; border:1px solid;  text-align: center !important;">
        <p>.................................................</p> 
        <h4>Signature</h4> 
    </td>
</tr>    
        
               
        
        
        

<tr>
    <td colspan="4" style="padding: 8px 4px; border:1px solid;  text-align: center !important;">
        <h3>FOR OFFICE USE ONLY</h3> 
    </td>
</tr>    
    
<tr>
    <td colspan="2" style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
        <h4>Commeittee meeting held on</h4> 
    </td>
    
    
     <td colspan="2" style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
        <h4>Membership No:..........................</h4> 
    </td>
</tr>    
        
    
                 
        
<tr>
    <td colspan="2" style="padding: 8px 4px; border:1px solid;  text-align: center !important;">
        <p>.................................................</p> 
        <h4>Secretary</h4> 
    </td>
    
    
     <td colspan="2" style="padding: 8px 4px; border:1px solid;  text-align: center !important;">
        <p>.................................................</p> 
        <h4>President</h4> 
    </td>
</tr>    
        
               
   <tr>
    <td colspan="2" style="padding: 8px 4px; border:1px solid;  text-align: center !important;">
         
    </td>
    
    
     <td colspan="2" style="padding: 8px 4px; border:1px solid;  text-align: center !important;">
        
        <h4>Payment Receipt No: .................................................</h4> 
    </td>
</tr>    
        
                 
   <tr>
    <td style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
       <h4>Date Received .................................................</h4>  
    </td>
    <td colspan="2"  style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
        
        <h4>Date Approved .................................................</h4> 
    </td>
     <td   style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
        
        <h4>Date Update POS .................................................</h4> 
    </td>
</tr>    
                  
<tr>
    <td colspan="4" style="padding: 8px 4px; border:1px solid;  text-align: left !important;">
       <h4>Date Acknowledgement letter send  .................................................</h4>  
    </td>
  
</tr>    
        
          
        
        
          
                             
                                <tr>
                                    <td colspan="4" align="center">
                                        <center>
                                    <?php if($lastmember->pay_status==0){ ?>
                                        <a href="#" onclick="PrintDiv();"  mat-flat-button="" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary text-white">
                                            <span class="mat-button-wrapper">Print For Offline</span>
                                            <div matripple="" class="mat-ripple mat-button-ripple"></div>
                                            <div class="mat-button-focus-overlay"></div>
                                        </a>  
                                         


                                           
                                    <?php } else if($lastmember->pay_status==1){ ?>
                                            <a href="#" onclick="PrintDiv();"  mat-flat-button="" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary text-white">
                                            <span class="mat-button-wrapper">Print</span>
                                            <div matripple="" class="mat-ripple mat-button-ripple"></div>
                                            <div class="mat-button-focus-overlay"></div>
                                        </a> 
                                    <?php } ?>
                                       
                                       </center>
                                    </td>
                                </tr>








                            </tbody>

                          
                    </table>
     <style type="text/css">
                        @media print {
                           * { color: black; background: white!important; }
                           table { font-size: 80%!important; }
                           table, th, td
                            {
                              border-collapse:collapse!important;
                              border: 1px solid black!important;
                              width:100%!important;
                              text-align:right!important;
                            }
                        }
                    </style>

                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-sm-12">
                <div class="table-reasponsive">
                    <table class="table table-reasponsive table-bordered table-striped table-hover">
                    
                            
                    </table>
               
                    </div>
            </div>
        </div>
    
</div>
 
<!-- line modal -->

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

.wrapperBoard{
    width:100%;
}
.center, .membershipSection {
    margin-top:50px;   
}
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
 th p {
    color: #ffefe2 !important;
}

@media only screen and (max-width: 767.98px) {
 
  .footer-section::before {
        width: 280px!important;
        height: 280px!important;
        top:  28%!important;
    }
}
    </style>