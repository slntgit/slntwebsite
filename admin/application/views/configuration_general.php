<div class="mainpanel">
    <div class="pageheader">
        <div class="media">
            <div class="media-body">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                    <li><a href="index.php">Dashboard</a></li>
                    <li>Configuration</li>
                </ul>
                <h4>General Configuration</h4>
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
                            <form action="<?php echo base_url();?>pages/configuration_general/save" controller="Configurations" name="post_req" id="post_req" class="form-horizontal"  enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                <div style="display:none;">
                                </div>
                                <div class="form-group">
                                    <label for="site_name" class="col-sm-2 control-label">Site Name</label>
                                    <div class="col-sm-4">
                                        <input name="site_name" class="form-control" placeholder="Site Name" maxlength="255" type="text" value="<?php echo $configuration_details->site_name;?>" id="site_name" required="required" /> </div>
                                    <label for="organization_name" class="col-sm-2 control-label">Organization Name</label>
                                    <div class="col-sm-4">
                                        <input name="organization_name" class="form-control" placeholder="Organization Name" maxlength="255" type="text" value="<?php echo $configuration_details->organization_name;?>" id="organization_name" required="required" /> </div>
                                </div>
                                <div class="form-group">
                                    <label for="domain_name" class="col-sm-2 control-label">Domain Name</label>
                                    <div class="col-sm-4">
                                        <input name="domain_name" class="form-control" placeholder="Domain Name" maxlength="255" type="text" value="<?php echo $configuration_details->domain_name;?>" id="domain_name" required="required" /> </div>
                                    <label for="organization_email" class="col-sm-2 control-label">Organization Email</label>
                                    <div class="col-sm-4">
                                        <input name="organization_email" class="form-control" placeholder="Organization Email" maxlength="100" type="email" value="<?php echo $configuration_details->organization_email;?>" id="organization_email" /> </div>
                                </div>
                                <div class="form-group">
                                    <label for="meta_title" class="col-sm-2 control-label">Meta Title</label>
                                     <div class="col-sm-4">
                                        <textarea name="meta_title" class="form-control" placeholder="Meta Title" cols="30" rows="6" id="meta_title"><?php echo $configuration_details->meta_title;?></textarea>
                                    </div>
                                    <label for="meta_keyword" class="col-sm-2 control-label">Meta Keyword</label>
                                    <div class="col-sm-4">
                                        <textarea name="meta_keyword" class="form-control" placeholder="Meta Keyword" cols="30" rows="6" id="meta_keyword"><?php echo $configuration_details->meta_keyword;?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="meta_content" class="col-sm-2 control-label">Meta Description</label>
                                    <div class="col-sm-4">
                                        <textarea name="meta_content" class="form-control"  placeholder="Meta Content" cols="30" rows="6" id="meta_content"><?php echo $configuration_details->meta_content;?></textarea>
                                    </div>


                                    <label for="address" class="col-sm-2 control-label">Address</label>
                                    <div class="col-sm-4">
                                       

                                        <textarea name="address" class="form-control"  placeholder="Meta Content" cols="30" rows="6" id="address"><?php echo $configuration_details->address;?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="primary_mobile" class="col-sm-2 control-label">Primary Mobile Number</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="primary_mobile" value="<?php echo $configuration_details->primary_mobile;?>"  class="form-control"  id="primary_mobile">
                                    </div>
                                      
                                </div>


                                  <div class="form-group">
                                    
                                    <label for="opening_days" class="col-sm-2 control-label">Office Opening Days/Time</label>
                                    <div class="col-sm-4">
                                         <input type="text" name="opening_days" value="<?php echo $configuration_details->opening_days;?>" class="form-control" id="opening_days">
                                    </div>

                                    <label for="company_logo" class="col-sm-2 control-label">Comapny Logo</label>
                                    <div class="col-sm-4">
                                         <input type="file" name="company_logo" class="form-control" id="company_logo">
                                    </div>


                                </div>




                                    <div class="form-group">
                                    
                                    <label for="other_mobile" class="col-sm-2 control-label">Other Mobile Number (Separated by commas)</label>
                                    <div class="col-sm-4">
                                         <textarea name="other_mobile" class="form-control"  placeholder="Other Mobile Number (Separated by commas)" cols="30" rows="6" id="other_mobile"><?php echo $configuration_details->other_mobile;?></textarea>
                                    </div>

                                    <label for="other_email" class="col-sm-2 control-label">Other Email (Separated by commas)</label>
                                    <div class="col-sm-4">
                                         <textarea name="other_email" class="form-control"  placeholder="Other Email (Separated by commas)" cols="30" rows="6" id="other_email"><?php echo $configuration_details->other_email;?></textarea>
                                    </div>

                                </div>


                                 <div class="form-group">
                                    
                                    <label for="facebook" class="col-sm-2 control-label">Facebook</label>
                                    <div class="col-sm-4">
<input type="text" name="facebook" class="form-control" value="<?php echo $configuration_details->facebook;?>" placeholder="Facebook Link" cols="30" rows="6" id="facebook">
                                    </div>

                                    <label for="twitter" class="col-sm-2 control-label">Twitter</label>
                                    <div class="col-sm-4">
<input type="text" name="twitter" class="form-control" value="<?php echo $configuration_details->twitter;?>" placeholder="Twitter Link" cols="30" rows="6" id="twitter">
                                    </div>

                                </div>


                                 <div class="form-group">
                                    
                                    <label for="linkedin" class="col-sm-2 control-label">LinkedIn</label>
                                    <div class="col-sm-4">
<input type="text" name="linkedin" class="form-control" value="<?php echo $configuration_details->linkedin;?>" placeholder="Linked In " cols="30" rows="6" id="linkedin">
                                    </div>

                                    <label for="youtube" class="col-sm-2 control-label">YouTube</label>
                                    <div class="col-sm-4">
<input type="text" name="youtube" class="form-control" value="<?php echo $configuration_details->youtube;?>" placeholder="YouTube" id="youtube">
                                    </div>

                                </div>





                                <div class="form-group">
                                    
                                    <label for="pinterest" class="col-sm-2 control-label">Pinterest</label>
                                    <div class="col-sm-4">
<input type="text" name="pinterest" class="form-control"  placeholder="Pinterest " value="<?php echo $configuration_details->pinterest;?>" id="pinterest">
                                    </div>

</div>
 

<div class="form-group">
    <label for="instagram" class="col-sm-2 control-label">Instagram</label>
        <div class="col-sm-4">
            <input type="text" name="instagram" class="form-control"  placeholder="Instagram " value="<?php echo $configuration_details->instagram;?>" id="instagram">
        </div>
</div>





 
 
<input type="hidden" name="reffererrern" class="form-control"  placeholder="" value="<?php echo $configuration_details->reffererrern;?>" id="reffererrern">
 
<input type="hidden" name="cashbackpercent" class="form-control"  placeholder="" value="<?php echo $configuration_details->cashbackpercent;?>" id="cashbackpercent">
 













                                <div class="form-group">
                                    <label for="powerd_by" class="col-sm-2 control-label">PoweredBy Name</label>
                                    <div class="col-sm-4">
                                        <input name="powerd_by" class="form-control" placeholder="PoweredBy Name" maxlength="100" type="text" value="<?php echo $configuration_details->powerd_by;?>" id="powerd_by" /> </div>
                                    <label for="powerd_by_link" class="col-sm-2 control-label">PoweredBy Link</label>
                                    <div class="col-sm-4">
                                        <input name="powerd_by_link" class="form-control" placeholder="PoweredBy Link" maxlength="100" type="text" value="<?php echo $configuration_details->powerd_by;?>" id="powerd_by_link" /> </div>
                                        
                                        
                                                 
                                        
                                </div>
 <div class="form-group">
   <label for="signupbonus" class="col-sm-2 control-label">Maximum Donation Amount </label>                   
               <div class="col-sm-4">
 <input type="text" name="signupbonus" class="form-control"  placeholder="Maximum Donation Amount" value="<?php echo $configuration_details->signupbonus;?>" id="signupbonus" /> </div>  

 </div>

                                <div class="form-group text-left">
                                    <div class="col-sm-offset-2 col-sm-7">
                                        <button class="btn btn-success" type="submit"><span class="fa fa-refresh"></span>&nbsp;Save Settings</button>
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