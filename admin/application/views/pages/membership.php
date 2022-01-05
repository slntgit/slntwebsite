<div class="mainpanel">
    <div class="pageheader">
        <div class="media">
            <div class="media-body">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li> 
                    <li>Manage  Membership</li>
                </ul>
                <h4>Add Membership</h4>
            </div>
        </div>
        <!-- media -->
    </div>
    <!-- pageheader -->

    <div class="contentpanel">
        
        	<div class="row">
    <div class="col-sm-12">
        <?php if($this->uri->segment(3)!=''){ ?>
          
 <a href="<?php echo base_url();?>pages/Membership/" class="btn btn-info btn-xs pull-right">Add New Membership</a>        
        <?php }?>

 <a href="<?php echo base_url();?>pages/Membership_list/" class="btn btn-info btn-xs pull-right">List All Membership</a>
 <br />
</div> <br /> <br />
			</div><!-- col-sm-12 --> <br />
			
			
			
        <div class="row">
            <div class="col-sm-12 col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="">

<?php if($this->uri->segment(3)=='edit'){ ?>
		<form action="<?php echo base_url();?>Pages/Membership/update/<?php echo $this->uri->segment(4); ?>" class="" role="form" id="form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
<?php } else { ?>
		<form action="<?php echo base_url();?>Pages/Membership/insert" class="" role="form" id="form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
<?php } ?>
 <input type="hidden" name="inf_token" value="28d5456a8ff445c4125bf1435795a2ec" />

                                                <?php if($this->session->flashdata('success')){ ?>
                                                    <div class="alert alert-danger errorHandler no-display">
                                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                        <?php echo validation_errors(); ?>
                                                            <?php echo $this->session->flashdata('success'); ?>
                                                    </div>
                                                    <?php } ?>

                                                        <?php if(validation_errors()){ ?>
                                                            <div class="alert alert-danger errorHandler no-display">
                                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                                <?php echo validation_errors(); ?>

                                                            </div>
                                                            <?php } ?>
 

<div class="col-sm-6">

<div class="form-group">
	<label class="control-label required" for="title">Membership Title</label>
	<input type="text" class="form-control" name="title" id="title" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->title;  } else { echo set_value('title'); }?>" autocomplete="off" />
	<span name='form_err'></span>
</div>
</div>

 
 
<div class="col-sm-6">
<div class="form-group">
    <label class="control-label required" for="membership_days">Membership Days</label>
    <input class="form-control" type="number" name="membership_days" id="membership_days" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->membership_days;  } else { echo set_value('membership_days');}?>" autocomplete="off" />
</div>
</div>
 

<div class="col-sm-6">
<div class="form-group">
    <label class="control-label required" for="membership_amount">Membership Amount</label>
        <input class="form-control" type="number" name="membership_amount" id="membership_amount" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->membership_amount;  } else { echo set_value('membership_amount');}?>" autocomplete="off" />
</div>
</div>
  <div class="col-sm-8">
                        <table class="table table-responsive">
                            <tbody>
                                <tr>
                                    <th>Status</th>
                                    <th>
                                        <label>
                                            <input <?php if($this->uri->segment(3)=='edit'){ if($all_packages->status==1){ ?>  checked="checked" <?php }} else { ?> checked="checked" <?php } ?> type="radio" name="status" id="status" value="1" autocomplete="off"/> Active &nbsp; &nbsp;
                                        </label>
                                    
                                        <label>
                                            <input <?php if($this->uri->segment(3)=='edit'){ if($all_packages->status==0){ ?>  checked="checked" <?php }} else { ?>   <?php } ?>  type="radio" name="status" id="status2" value="0" autocomplete="off"/> Inactive &nbsp; &nbsp;
                                        </label>
                                    </th>
                                </tr>
  

                            </tbody>
                        </table>
                    </div>

 <div class="col-sm-12">
<div class="form-group">
    <label class="control-label required" for="editor1">Description</label>
     
        <textarea name="description" class="ckeditor" id="editor1"><?php if($this->uri->segment(3)=='edit'){ echo $all_packages->description;  } else { echo set_value('description');}?></textarea>
     
</div>
</div>


<div class="col-sm-12">
<div class="form-group">
   	<button type="submit" class="btn btn-sm btn-primary" name="submit_prod" id="submit_prod" value="add_product"><?php if($this->uri->segment(3)=='edit'){ echo 'Update';  } else echo 'Save'; ?></button>
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

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css">
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.min.js"></script>
    <script type="text/javascript">
      $(".livesearch").chosen();
</script>

<style type="text/css">
    .livesearch{
        text-transform: uppercase;
    }
    .chosen-container .chosen-results li.active-result {
    display: list-item;
    cursor: pointer;
    text-transform: capitalize;
    font-weight: 700;
}
</style>


