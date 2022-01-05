<div class="mainpanel">
    <div class="pageheader">
        <div class="media">
            <div class="media-body">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                    <li><a href="index.php">Dashboard</a></li>
                    <li>Configuration</li>
                </ul>
                <h4>Payment Options</h4>
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
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <!-- Tab panes -->

                                                        <div class="form-group">
<label for="offer_title" class="col-sm-3 control-label"></label>
<div class="col-sm-9">
<?php echo validation_errors(); ?>
    <?php echo $this->session->flashdata('success');

    //edit_coupon

     ?> 
</div></div>

<form action="<?php if ($this->uri->segment(3)=='edit') {?><?php echo base_url();?>pages/offer_n_coupon_cod/update/<?php echo $this->uri->segment(4);?><?php  } else {?><?php echo base_url();?>pages/offer_n_coupon_cod/add <?php } ?>" class="form-horizontal"  method="post" accept-charset="utf-8">
                                                       
                                                        <div class="form-group">
<label for="offer_title" class="col-sm-3 control-label">Offer Title</label>
<div class="col-sm-9">
<input name="offer_title" value="<?php if ($this->uri->segment(3)=='edit') { echo $edit_coupon->offer_title; }?>" class="form-control" placeholder="Offer Title" maxlength="255" type="text" id="offer_title" /> </div>
                                                        </div>
                                                        <div class="form-group">
<label for="offinpercent" class="col-sm-3 control-label">% Off</label>
                                                            <div class="col-sm-9">
<input name="offinpercent" value="<?php if ($this->uri->segment(3)=='edit') { echo $edit_coupon->offinpercent; }?>" class="form-control" placeholder="Enter offer rat in %" maxlength="255" type="text" id="offinpercent" /> </div>
                                                        </div>
                                                        <div class="form-group">
<label for="color" class="col-sm-3 control-label">Color</label>
                                                            <div class="col-sm-9">
<input name="color" value="<?php if ($this->uri->segment(3)=='edit') { echo $edit_coupon->color; }?>" class="form-control" placeholder="Select Color" type="color" id="color" /> </div>
                                                        </div>
                                                        <div class="form-group">
<label for="coupon_code" class="col-sm-3 control-label">Coupon Code</label>
                                                            <div class="col-sm-9">
<input name="coupon_code" value="<?php if ($this->uri->segment(3)=='edit') { echo $edit_coupon->coupon_code; }?>" class="form-control" placeholder="Enter Coupon Code" maxlength="255" type="text" id="coupon_code" /> </div>
                                                        </div>

<div class="form-group">
<label for="offer_status" class="col-sm-3 control-label">Published</label>
                                                            <div class="col-sm-9">
<label class="radio-inline">
<input type="radio" name="offer_status" id="offer_status" value="1" class="" <?php if ($this->uri->segment(3)=='edit') { if($edit_coupon->offer_status==1){ ?> checked <?php } }?> />Yes</label>
<label class="radio-inline">
<input type="radio" name="offer_status" id="offer_status" value="0" class="" <?php if ($this->uri->segment(3)=='edit') { if($edit_coupon->offer_status==0){ ?> checked <?php } }?> />No </div>
                                                        </div>

<div class="form-group">
<label for="ptm_status" class="col-sm-3 control-label">Description</label>
<div class="col-sm-9">
<textarea name="content" class="ckeditor" id="editor1"><?php if ($this->uri->segment(3)=='edit') { echo $edit_coupon->content; }?></textarea></div>
</div>


                                                        <input type="hidden" name="data[PaymentSetting][type]" value="PPL" id="PaymentSettingType" />
                                                        <div class="form-group text-left">
                                                            <div class="col-sm-offset-3 col-sm-7">
                                                                <button class="btn btn-success" type="submit"><span class="fa fa-refresh"></span>&nbsp;Save Settings</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                            
                                </div>
                            </div>
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
<!-- Associated Member Modal -->
<div id="associatedMemberList" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Associated Member List</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!-- End Associated Member Modal -->

<!-- Member Modal -->
<div id="memberDetails" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Member Details</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>