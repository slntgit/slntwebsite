<div class="mainpanel">
    <div class="pageheader">
        <div class="media">
            <div class="media-body">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                    <li><a href="<?php echo base_url();?>" style="color: #666 !important;">Dashboard</a></li>
                    <li>Add Events</li>
                </ul>
                <h4>Add Events</h4>
            </div>
        </div>
        <!-- media -->
    </div>
    <!-- pageheader -->
<div class="contentpanel">
    <div class="row">
        <div class="col-sm-12">
            <?php if($this->uri->segment(3)!=''){ ?>
          
 <a href="<?php echo base_url();?>pages/Events/" class="btn btn-info btn-xs pull-right">Add New Events</a>        
        <?php }?>

 <a href="<?php echo base_url();?>pages/Events_list/" class="btn btn-info btn-xs pull-right">List All Events</a>
 <br />
</div> <br /> <br />
			</div><!-- col-sm-12 --> <br />
			
			
			
        <div class="row">
            <div class="col-sm-12 col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">

<?php if($this->uri->segment(3)=='edit'){ ?>
		<form action="<?php echo base_url();?>Pages/Events/edit/<?php echo $this->uri->segment(4); ?>/update" class="" role="form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
<?php } else { ?>
		<form action="<?php echo base_url();?>Pages/Events/insert" class="" role="form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
<?php } ?>
                                                <input type="hidden" name="inf_token" value="28d5456a8ff445c4125bf1435795a2ec" />

<?php if($this->session->flashdata('success')){ ?>

<?php echo validation_errors(); ?>
<?php echo $this->session->flashdata('success'); ?>
 
                                                    <?php } ?>

<?php if(validation_errors()){ ?>
<div class="alert alert-danger errorHandler no-display">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<?php echo validation_errors(); ?>
</div>
<?php } ?>
<input class="form-control" name="category" id="category" type="hidden" value="na">
<div class="col-sm-6">
<div class="form-group">
	<label class="control-label required" for="title"> Title</label>
	<input type="text" class="form-control" name="title" id="title" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->title;  } else { echo set_value('title'); }?>" autocomplete="off" />
	<span name='form_err'></span>
</div>
</div>
<input type="hidden" class="form-control" name="short_title" id="short_title" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->short_title;  } else { echo set_value('short_title'); }?>" autocomplete="off" />
<input type="hidden" class="form-control" name="advanceamt" id="advanceamt" value="0.00" autocomplete="off" /> 
<input class="form-control" type="hidden" name="mrp_price" id="mrp_price" value="0.00" autocomplete="off" />
<input class="form-control" type="hidden" name="selling_price" id="selling_price" value="0.00" autocomplete="off" />
<input class="form-control" type="hidden" name="metatitle" id="metatitle" value="na" autocomplete="off" />
<input class="form-control" type="hidden" name="metkeywords" id="metkeywords" value="na" autocomplete="off" />      
<input class="form-control" type="hidden" name="metdescription" id="metdescription" value="na" autocomplete="off" />
<div class="col-sm-6">
<div class="form-group">
    <label class="control-label required" for="event_date">Events Date</label>
            
                <input class="form-control" type="date" name="event_date" id="txtDate" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->event_date;  } else { echo set_value('event_date');}?>" autocomplete="off" />
             
</div>
</div>

<div class="col-sm-6">
<div class="form-group">
    <label class="control-label required" for="event_from_time">Event Time </label>
            <select name="event_from_time[]"  multiple="multiple"  class="form-control livesearch chosen-select" required="" >
                <?php 
if($this->uri->segment(3)=='edit'){
    foreach ($slnt_events_time as $kvalue) { 

            $this->db->select('*');
            $this->db->from('event_time_table');
            $where2 = array('eventid' => $this->uri->segment(4),'timeid' => $kvalue->id);
            $this->db->where($where2);
            $getcount = $this->db->get();
        ?>
<option value="<?=$kvalue->id;?>" <?php if($this->uri->segment(3)=='edit'){  if($getcount->num_rows()>0){ echo 'selected';} }?>><?=$kvalue->from_time;?>-<?=$kvalue->to_time;?><?php echo $getcount->num_rows();?></option>
  <?php  }
} else {
            foreach ($slnt_events_time as $kvalue) {
        ?>
<option value="<?=$kvalue->id;?>" <?php if($this->uri->segment(3)=='edit'){  if($kvalue->id==$all_packages->event_from_time){ echo 'selected';} }?>><?=$kvalue->from_time;?>-<?=$kvalue->to_time;?></option>
                    <?php
                    }
}


                ?>
                
            </select>
            
</div>
</div>


 

<div class="col-sm-6">
<div class="form-group">
    <label class="control-label required" for="event_amount">Event Amount <strong>(Leave empty if unpaid)</strong></label>
            
                <input class="form-control" type="number" name="event_amount" id="event_amount" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->event_amount;  } else { echo set_value('event_amount');}?>" autocomplete="off" />
             
</div>
</div>





<div class="col-sm-6">
<div class="form-group">
	<label class="control-label required" for="product_image">Image</label>
            
                <input class="form-control" type="file" name="product_image" id="product_image" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->product_image;  } else { echo set_value('product_image');}?>" autocomplete="off" />
			 
</div>
</div>

<div class="col-sm-6">
<div class="form-group">
    <label class="control-label required" for="video_link">Video Link <span>(https://www.youtube.com/watch?v=<strong><mark style="background: #ff0">Copy  & Add This ID</mark></strong>)</span></label>
            
                <input class="form-control" type="text" name="video_link" id="video_link" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->video_link;  } else { echo set_value('video_link');}?>" autocomplete="off" />
             
</div>
</div>
</div>
<div class="row">
    
<div class="col-sm-6">
<div class="form-group">
	<label class="control-label required" for="product_image">Yajman Type : </label>
             <br />
		<label class="control-label required" for="neet_to_pay">
		    <input type="radio"  name="neet_to_pay" id="neet_to_pay" class="neet_to_pay" value="1" <?php if($this->uri->segment(3)=='edit'){  if($all_packages->neet_to_pay==1){ echo 'checked';}  }else {  echo 'checked'; } ?>/>
		    Yes
		    </label>
		
			<label class="control-label required" for="neet_to_pay2">
			     <input type="radio"  name="neet_to_pay" id="neet_to_pay2" class="neet_to_pay" value="0" <?php if($this->uri->segment(3)=='edit'){  if($all_packages->neet_to_pay==0){ echo 'checked';}  } ?>/>
			    No</label>
			
			
			
</div>
</div>

 
 <div class="col-sm-6">
<div class="form-group" id="yajman_status">
    <label class="control-label required" for="sel_yajman">Select yajman </label>
            <select name="sel_yajman[]"  multiple="multiple"   class="form-control livesearch chosen-select" required="" >
                <?php 
    	$this->db->select('*');
		$this->db->from('slnt_event_yajman');
		$this->db->order_by('id','DESC');
        $type_yajman = $this->db->get()->result();
    foreach ($type_yajman as $kvaluey) { 
        ?>
<option value="<?=$kvaluey->id;?>" <?= isset($all_packages) ? in_array($kvaluey->id, json_decode($all_packages->sel_yajman)) ? 'selected' : '' : ''  ?>><?=$kvaluey->description_charge;?></option>
  <?php  } ?>
                
            </select>
            
</div>
</div>


</div>
<div class="row"> 
 
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
      
      $('#submit_prod').click(function(){
            if ($("#example-getting-started option:selected").length > 0){
                 
            } else {
                $('#example-getting-started').focus();
            }
      });
      
      $(function(){
        var dtToday = new Date();
        
        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if(month < 10)
            month = '0' + month.toString();
        if(day < 10)
            day = '0' + day.toString();
            var maxDate = year + '-' + month + '-' + day;
            $('#txtDate').attr('min', maxDate);
    });
    
    $('.neet_to_pay').on('click',function(){
        var neet_to_pay = $(this).val();
        if(neet_to_pay==0){
            $('#yajman_status').css('opacity','0');
         } else {
            $('#yajman_status').css('opacity','1');
        }
        
    });
    
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


