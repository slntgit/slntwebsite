<div class="mainpanel">
    <div class="pageheader">
        <div class="media">
            <div class="media-body">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li> 
                    <li>Manage Ceremonies</li>
                </ul>
                <h4>Block Date</h4>
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

<?php if($this->uri->segment(3)=='edit'){ ?>
		<form action="<?php echo base_url();?>Pages/BlockDate/edit/<?php echo $this->uri->segment(4); ?>/update/" class="" role="form" id="form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
<?php } else { ?>
		<form action="<?php echo base_url();?>Pages/BlockDate/insert" class="" role="form" id="form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
<?php } ?>
  
                                                <?php if($this->session->flashdata('success')){ ?>
                                                     
                                                        <?php echo validation_errors(); ?>
                                                            <?php echo $this->session->flashdata('success'); ?>
                                                   
                                                    <?php } ?>

                                                        <?php if(validation_errors()){ ?>
                                                            
                                                                <?php echo validation_errors(); ?>
 
                                                            <?php } ?>
 

<div class="col-sm-6">

<div class="form-group">
	<label class="control-label required" for="title">Date</label>
	<input type="date" class="form-control" name="title" id="title" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->title;  } else { echo set_value('title'); }?>" autocomplete="off" />
	<span name='form_err'></span>
</div>
</div>

  
 
 

<div class="col-sm-12">
<div class="form-group">
 <button type="submit" class="btn btn-sm btn-primary" name="submit_prod" id="submit_prod" value="add_product"><?php if($this->uri->segment(3)=='edit'){ echo 'Update';  } else echo 'Save'; ?></button>
</div>
</div>
</form>



                                            <div class="row">   
            <div class="col-sm-12 col-md-12 ">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered " style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                              
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                         
                <?php $counts=1; foreach($all_block_date->result() as $mproduct){ ?>        

                        <tr>
                            <td><?php echo $counts; ?></td>
                            <td><?php echo date('d-M-Y',strtotime($mproduct->title)); ?></td>
                       
                            <td>
<a href="<?php echo base_url();?>pages/BlockDate/edit/<?php echo $mproduct->id; ?>"   class="btn btn-xs btn-default"   onclick="if (confirm('Are you sure?')){return true;}else{event.stopPropagation(); event.preventDefault();};">
                                    <i class="fa fa-pencil"></i> Edit/View</a>
  <a href="<?php echo base_url();?>pages/BlockDate/delete/<?php echo $mproduct->id; ?>" class="btn btn-xs btn-danger" onclick="if (confirm('Are you sure?')){return true;}else{event.stopPropagation(); event.preventDefault();};">Delete</a> 

 


                            </td>
                        </tr>   
                            
                <?php $counts++; } ?>


                        </tbody>
                    </table>
                </div>  
            
            </div><!-- col-sm-12 -->    
        </div><!-- row -->  
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


