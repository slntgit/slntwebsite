<div class="mainpanel">
    <div class="pageheader">
        <div class="media">
            <div class="media-body">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                    <li><a href="<?= base_url();?>" style="color: #666 !important;">Dashboard</a></li>
                    <li>Change Password</li>
                </ul>
                <h4>Change Password</h4>
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



<form action="<?= base_url();?>Pages/change_password/confirm" class="" role="form" id="form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                                                 


<div class="text-danger"> <?php echo validation_errors(); ?></div>

    <?php echo  $this->session->flashdata('profile_update_success') ? '<div class="text-success text-center"><b>' . $this->session->flashdata('profile_update_success') . '</b></div>' : ''; ?>

 

 <div class="row">
<div class="col-sm-6">
<div class="form-group">
	<label class="control-label required" for="password"> Password *</label>
        
                <input class="form-control" type="password" name="password" id="password" value="" autocomplete="off">
			 
</div>
</div>
</div>
 <div class="row">
<div class="col-sm-6">
<div class="form-group">
	<label class="control-label required" for="c_password">Confirm  Password *</label>
            
                <input class="form-control" type="password" name="confirmpassword" id="c_password" value="" autocomplete="off">
			 
</div>
</div>
</div>
 

<div class="col-sm-12">
<div class="form-group">
   <button type="submit" class="btn btn-sm btn-primary" name="submit_prod" id="submit_prod" value="add_product">Save Password</button>
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