<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li><a href="">Dashboard</a></li>
					<li>Manage Blogs</li>
				</ul>
				<h4>Manage Blogs</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	<script type="text/javascript" >
    function cleanStringData(str) {
 
    	var base_url="<?php echo base_url();?>";
        if (str.length == 0) {
            $("#blog_url").val('');
            return;
        } else {
        	$.ajax({
        		type: "POST",
        		url: base_url+'pages/cleanDataString/'+str,
      			data: ({string: str}),
      			success: function(data) {
      				$("#blog_url").val(data);
      			}
        	});
            return;
        }
 
    }
</script>


	<div class="contentpanel">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">
				<a href="<?= base_url();?>pages/adminblogslist/" class="btn btn-info btn-xs pull-right">List Of Blog</a>
				<br />
				<br />
			</div>


			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
<?php 
	if ($this->uri->segment(3)=='edit') {
       echo form_open_multipart('Pages/adminblogs/update/'.$this->uri->segment(4));
	} else {
		echo form_open_multipart('Pages/adminblogs/insert/');
	}?>
<div style="font-size: 11px !important; color: green;"><?php echo $this->session->flashdata('success'); ?></div>
			
<div class="card-body">
                <div class="row">
					 <input type="hidden" name="addin" id="addin" value="NA" class="form-control" placeholder="Enter Banner Content.." >
					

<div class="col-md-6 col-lg-6">
    <div class="form-group ">
        <label class="form-label">Title</label>
<input type="text" name="title" id="title" value="<?php if ($this->uri->segment(3)=='edit') { echo $query[0]->title; } ?>" class="form-control" placeholder="Enter Title.." onKeyUp="cleanStringData(this.value)" >
          </div>
</div>

<div class="form-group col-sm-6">
   <label class="control-label required" for="blog_url">Url </label>
 	<input type="text" name="blog_url" id="blog_url" class="form-control" readonly="" value="<?php if($this->uri->segment(3)=='edit'){ echo $query[0]->blog_url;  } else {  echo set_value('blog_url'); }?>">
 </div>



<div class="form-group col-sm-6">
   <label class="control-label required" for="post_by">Post By </label>
 	<input type="text" name="post_by" id="post_by" class="form-control"   value="<?php if($this->uri->segment(3)=='edit'){ echo $query[0]->post_by;  } else {  echo set_value('post_by'); }?>">
 </div>




<div class="col-md-6 col-lg-6">
							<div class="form-group ">
                            <label class="form-label">Image</label>
                         
                                    <input type="file" name="gallery" id="gallery" value="" class="form-control">
                                    <p style="color: red !important; font-size: 14px;">
                                    	<?php if(isset($error)){ echo $error;} ?>
                                    </p>
                             
                        </div>
                    </div>

<div class="col-md-6 col-lg-6">
	<div class="form-group ">
		<label class="form-label">Category</label>
			 <select name="category" id="category" class="form-control" >
			 	<option value="">----Select category----</option>
			 	<?php foreach($result->result() as $category){?>
			 		<option value="<?=$category->id;?>" <?php if($this->uri->segment(3)=='edit'){ if($category->id==$query[0]->category){ echo 'selected';} }?>><?=$category->name;?></option>
			 	<?php }?>
			 </select>
	</div>
</div>

                    





                    <div class="col-md-12 col-lg-12">

                        <div class="form-group ">
                            
                            <label class="form-label">Content</label>
                                    <textarea name="url" class="ckeditor" id="editor1"  ><?php if ($this->uri->segment(3)=='edit') { echo $query[0]->url; } ?></textarea>
                        </div>
                    </div>

<div class="col-md-6 col-lg-6">
<div class="form-group">
	<label class="control-label required" for="metatitle">Meta Title</label>
            
                <input class="form-control" type="text" name="metatitle" id="metatitle" value="<?php if($this->uri->segment(3)=='edit'){ echo $query[0]->metatitle;  } else { echo set_value('metatitle');}?>" autocomplete="off" />
			 
</div>
</div>

<div class="col-md-6 col-lg-6">
<div class="form-group">
    <label class="control-label required" for="metkeywords">Meta Keywords</label>
    <input class="form-control" type="text" name="metkeywords" id="metkeywords" value="<?php if($this->uri->segment(3)=='edit'){ echo $query[0]->metkeywords;  } else { echo set_value('metkeywords');}?>" autocomplete="off" />      
</div>
</div>


<div class="col-md-6 col-lg-6">
<div class="form-group">
    <label class="control-label required" for="metdescription">Meta Description</label>
            
                <input class="form-control" type="text" name="metdescription" id="metdescription" value="<?php if($this->uri->segment(3)=='edit'){ echo $query[0]->metdescription;  } else { echo set_value('metdescription');}?>" autocomplete="off" />
             
</div>
</div>

 
                </div>

            </div>
             <div class="card-footer text-right">
                <div class="d-flex">
                    <button type="submit" class="btn btn-primary ml-auto">Save Blogs</button>
                </div>
            </div>
    </form>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
	
</div>