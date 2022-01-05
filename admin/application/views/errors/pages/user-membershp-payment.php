<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>Membership of <?=$memberDetails->name_title;?> <?=$memberDetails->first_name;?>  <?=$memberDetails->last_name;?></li>
				</ul>
				<h4>Membership of <?=$lastmember->name_title;?> <?=$lastmember->name_as_nric;?></h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	 

	<div class="contentpanel">	
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
                                        <img src="<?=base_url();?>../assets/print-logo.png" />     
                                    </td>
                                    <td colspan="2"  style="padding: 6px 4px; border:1px solid;  text-align: right !important;"> 
                                    
<img src="<?php if($lastmember->userfile!=''){ ?><?=base_url();?>../assets/profile/<?=$lastmember->userfile;?><?php } else {?><?=base_url();?>../assets/mem.jpg<?php } ?>" id="profi" style="max-width: 109px !important;
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
			 





			<div class="col-sm-12 col-md-12 " id="payment-part">				
				<div class="panel panel-default">					
					<div class="panel-body">
						<div class="">
						  
 				 
                            <tbody>
                                       
                                
                                
<?php if($lastmember->status==0){ ?>
<tr>
    <td colspan="4" align="right">
          <form action="<?=base_url();?>pages/MembershipPayment/<?=$this->uri->segment(3);?>/collect" method="post">
              <table class="table table-bordered ">
              		<tr>
              			<td>Transection ID</td>
              			<td>
              				<input type="text" class="form-control" name="transection_id" id="transection_id" value="<?=date('Ymd').time();?>">
              			</td>
              		</tr>
              		<tr>
              			 <td colspan="2" align="center">
              			 	<input type="submit" name="collectpayment" value="Collect $
<?=$lastmember->membership_amount;?> SGD" class="btn btn-success">
              			 </td>
              		</tr>
              </table>                            	
          </form>
    </td>
</tr>

<tr>
    <td colspan="4" align="right">
          <form action="<?=base_url();?>pages/MembershipPayment/<?=$this->uri->segment(3);?>/onlinepayment" method="post">
              <table class="table table-bordered ">
              		<tr>
              			 <td colspan="2" align="center">
              			 	<input type="submit" name="collectpayment" value="Send payment link of  $
<?=$lastmember->membership_amount;?> SGD" class="btn btn-success">
              			 </td>
              		</tr>
              </table>                            	
          </form>
    </td>
</tr>



<?php } ?>

                            </tbody>


                    </table>
						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->



</div>


<script type="text/javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=600,height=600');
        popupWin.document.open();
        popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
     </script>
    