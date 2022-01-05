<div class="mainpanel">
    <div class="pageheader">
        <div class="media">
            <div class="media-body">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                    <li><a href="index.php">Dashboard</a></li>
                    <li>Bank NEFT/RTGS Setting</li>
                </ul>
                <h4>Bank NEFT/RTGS Setting</h4>
            </div>
        </div>
        <!-- media -->
    </div>
    <!-- pageheader -->

    <div class="contentpanel">
        <div class="row">
            <div class="col-sm-12 col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="">
                            <form action="<?php echo base_url();?>pages/neft_bank_detail/save" class="form-horizontal" id="SmssettingIndexForm" method="post" accept-charset="utf-8">
                               
<?php if(validation_errors()){ ?>
    <div class="alert alert-danger errorHandler no-display">
        <?php echo validation_errors(); ?>
        
    </div> 



 <?php } ?>

    <?php if($this->session->flashdata('success')){ ?>
    <div class="alert alert-success errorHandler no-display">
         
        <?php echo $this->session->flashdata('success'); ?> 
    </div> 
<?php } ?>


                                 
                                <div class="form-group">
                                    <label for="bankname" class="col-sm-2 control-label">Bank Name</label>
                                    <div class="col-sm-4">
<input name="bankname" class="form-control" placeholder="Bank Name" maxlength="255" type="text" value="<?php echo $sms_setting->bankname;?>" id="bankname" />
                                    </div>
                                    <label for="accounthodername" class="col-sm-2 control-label">Account Holder Name</label>
                                    <div class="col-sm-4">
<input name="accounthodername" class="form-control" placeholder="Account Holder Name" type="text" value="<?php echo $sms_setting->accounthodername;?>" id="accounthodername" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="ifsccode" class="col-sm-2 control-label">IFSC Code</label>
                                    <div class="col-sm-4">
<input name="ifsccode" class="form-control" placeholder="IFSC Code" maxlength="100" type="text" value="<?php echo $sms_setting->ifsccode;?>" id="ifsccode" />
                                    </div>
                                    <label for="branchname" class="col-sm-2 control-label">Branch Name</label>
                                    <div class="col-sm-4">
<input name="branchname" class="form-control" placeholder="Branch Name" type="text" value="<?php echo $sms_setting->branchname;?>" id="branchname" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="accountnumber" class="col-sm-2 control-label">Account Number</label>
                                    <div class="col-sm-4">
<input name="accountnumber" class="form-control" placeholder="Account Number" maxlength="100" type="text" value="<?php echo $sms_setting->accountnumber;?>"  id="accountnumber" /> </div>
                                  
                                  <div class="col-sm-6">
                                      
                                       <button type="submit" class="btn btn-success pull-right"><span class="fa fa-refresh"></span>&nbsp;Save Settings</button>
                                  </div>
                                </div>
                                 
                                <div class="form-group text-left">
                                    <div class="col-sm-offset-2 col-sm-10">
                                       
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- col-sm-12 -->
        </div>
        <!-- row -->
    </div>
    <!-- contentpanel -->

</div>