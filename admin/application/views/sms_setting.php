<div class="mainpanel">
    <div class="pageheader">
        <div class="media">
              <div class="media-body">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                    <li><a href="index.php">Dashboard</a></li>
                    <li>Setting</li>
                </ul>
                <h4>SMS Settings</h4>
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
                            <form action="<?php echo base_url();?>pages/sms_settings/save" class="form-horizontal" id="SmssettingIndexForm" method="post" accept-charset="utf-8">
                               
<?php if(validation_errors()){ ?>
    <div class="alert alert-danger errorHandler no-di/////\\\//\splay">
        <?php echo validation_errors(); ?>
        
    </div> 



 <?php } ?>

    <?php if($this->session->flashdata('success')){ ?>
    <div class="alert alert-success errorHandler no-display">
         
        <?php echo $this->session->flashdata('success'); ?> 
    </div> 
<?php } ?>


                                 
                                <div class="form-group">
                                    <label for="apilink" class="col-sm-2 control-label">API Link</label>
                                    <div class="col-sm-4">
<input name="apilink" class="form-control" placeholder="API Link" maxlength="255" type="text" value="<?php echo $sms_setting->apilink;?>" id="apilink" />
                                    </div>
                                    <label for="senderid" class="col-sm-2 control-label">Sender ID</label>
                                    <div class="col-sm-4">
<input name="senderid" class="form-control" placeholder="Sender ID" maxlength="10" type="text" value="<?php echo $sms_setting->senderid;?>" id="senderid" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label">User Name</label>
                                    <div class="col-sm-4">
<input name="username" class="form-control" placeholder="User Name" maxlength="100" type="text" value="<?php echo $sms_setting->username;?>" id="username" />
                                    </div>
                                    <label for="password" class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-4">
<input name="password" class="form-control" placeholder="Password" type="password" value="<?php echo $sms_setting->password;?>" id="password" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="headingusername" class="col-sm-2 control-label">Heading Username</label>
                                    <div class="col-sm-4">
<input name="headingusername" class="form-control" placeholder="Username field provided by sms gateway" maxlength="100" type="text" value="<?php echo $sms_setting->headingusername;?>"  id="headingusername" /> </div>
                                    <label for="headingpassword" class="col-sm-2 control-label">Heading Password</label>
                                    <div class="col-sm-4">
<input name="headingpassword" class="form-control" placeholder="Password field provided by sms gateway" maxlength="100" type="text" value="<?php echo $sms_setting->headingpassword;?>" id="headingpassword" /> </div>
                                </div>
                                <div class="form-group">
                                    <label for="headingmobile" class="col-sm-2 control-label">Heading Mobile No</label>
                                    <div class="col-sm-4">
<input name="headingmobile" class="form-control" placeholder="Mobile No field provided by sms gateway" maxlength="100" type="text" value="<?php echo $sms_setting->headingmobile;?>"  id="headingmobile" /> </div>
                                    <label for="headingmsg" class="col-sm-2 control-label">Heading Message</label>
                                    <div class="col-sm-4">
<input name="headingmsg" class="form-control" placeholder="Message field provided by sms gateway" maxlength="100" type="text" value="<?php echo $sms_setting->headingmsg;?>"   id="headingmsg" /> </div>
                                </div>
                                <div class="form-group">
                                    <label for="headingsenderid" class="col-sm-2 control-label">Heading Sender Id</label>
                                    <div class="col-sm-4">
<input name="headingsenderid" class="form-control" placeholder="Sender Id field provided by sms gateway" maxlength="100" value="<?php echo $sms_setting->headingsenderid;?>"  id="headingsenderid" /> </div>
                                    <label for="othersmsdetail" class="col-sm-2 control-label">Others</label>
                                    <div class="col-sm-4">
<input name="othersmsdetail" class="form-control" placeholder="Others fields provided by sms gateway" maxlength="255" type="text" value="<?php echo $sms_setting->othersmsdetail;?>" id="othersmsdetail" /> </div>
                                </div>
                              <!--  <div class="form-group">
                                    <label for="site_name" class="col-sm-2 control-label">Post Type</label>
                                    <div class="col-sm-4">
                                        <label class="radio-inline">
                                            <input type="radio" name="post_type" id="SmssettingPostTypePOST" value="POST" />POST</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="post_type" id="SmssettingPostTypeGET" value="GET" checked="checked" />GET </div>
                                    <label for="site_name" class="col-sm-offset-1 col-sm-5 control-label">e.g: channel=Trans&DCS=0&flashsms=0&route=2</label>
                                </div> -->
                                <div class="form-group text-left">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-success"><span class="fa fa-refresh"></span>&nbsp;Save Settings</button>
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