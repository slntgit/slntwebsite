<div class="mainpanel">
    <div class="pageheader">
        <div class="media">
            <div class="media-body">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li> 
                    <li>Manage Catering Menu</li>
                </ul>
                <h4>Add Catering Menu</h4>
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


                            <?php echo $this->session->flashdata('success'); ?>
                            <form action="<?=base_url('pages/ManageCatering/EditCatering');?>?action=doSave&id=<?=$_GET['id'];?>" method="post">
                                <div class="form-group col-sm-12">
                                    <div class="col-sm-2">
                                        <label class="control-label required" for="menu_name">Menu Name <abbr class="text-danger">*</abbr></label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="menu_name" id="menu_name" value="<?php echo $menus->menu_name; ?>" autocomplete="off" placeholder="Menu Name *" required/>
                                        <span name ='form_err'><?=form_error('menu_name');?></span>
                                    </div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <div class="col-sm-2">
                                        <label class="control-label required" for="menu_items">Menu Item <abbr class="text-danger">*</abbr></label>
                                    </div>
                                    <div class="col-sm-10">
                                        <textarea  name="menu_items" class="ckeditor" id="editor1" ><?php echo $menus->menu_items; ?></textarea>
                                        <span name ='form_err'><?=form_error('menu_items');?></span>
                                    </div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <div class="col-sm-2">
                                        <label class="control-label required" for="menu_name">Availability of Days <abbr class="text-danger">*</abbr></label>
                                    </div>
                                    <div class="col-sm-10">
                                         <label class="col-sm-3 col-xs-12">
<input  <?= isset($menus) ? in_array('Sun', json_decode($menus->days)) ? 'checked' : '' : ''  ?>  type="checkbox" name="days[]" id="Sun" value="Sun"> Sunday</label>
                                         <label class="col-sm-3 col-xs-12">
<input  <?= isset($menus) ? in_array('Mon', json_decode($menus->days)) ? 'checked' : '' : ''  ?>  type="checkbox" name="days[]" id="Mon" value="Mon"> Monday</label>
                                         <label class="col-sm-3 col-xs-12">
<input  <?= isset($menus) ? in_array('Tue', json_decode($menus->days)) ? 'checked' : '' : ''  ?>  type="checkbox" name="days[]" id="Tue" value="Tue"> Tuesday</label>
                                         <label class="col-sm-3 col-xs-12">
<input  <?= isset($menus) ? in_array('Wed', json_decode($menus->days)) ? 'checked' : '' : ''  ?>  type="checkbox" name="days[]" id="Wed" value="Wed"> Wednesday</label>
                                         <label class="col-sm-3 col-xs-12">
<input  <?= isset($menus) ? in_array('Thu', json_decode($menus->days)) ? 'checked' : '' : ''  ?>  type="checkbox" name="days[]" id="Thu" value="Thu"> Thursday</label>
                                         <label class="col-sm-3 col-xs-12">
<input  <?= isset($menus) ? in_array('Fri', json_decode($menus->days)) ? 'checked' : '' : ''  ?>  type="checkbox" name="days[]" id="Fri" value="Fri"> Friday </label>
                                         <label class="col-sm-3 col-xs-12">
<input  <?= isset($menus) ? in_array('Sat', json_decode($menus->days)) ? 'checked' : '' : ''  ?>  type="checkbox" name="days[]" id="Sat" value="Sat"> Saturday</label>
                                    </div>
                                </div>
                                 <div class="form-group col-sm-12">
                                    <div class="col-sm-2">
                                        <label class="control-label required" for="menu_name">Price <abbr class="text-danger">*</abbr></label>
                                    </div>
                                    <div class="col-sm-10">
                                        <table class="table table-responsive">
                                            <tbody id="price">

<?php $countp=0; foreach(json_decode($menus->price) as $prices){ ?>

                                               <tr <?php if($countp==0){ } else { ?>id="size_<?=$countp;?>"<?php } ?>>
                                                <td>
                                                    <label>No. of Pax *</label>
                                                    <input required type="number" class="form-control" name="no_of_pax[]" id="" value="<?=$prices->no_of_pax;?>">
                                                </td>
                                                <td>
                                                    <label>Member Price *</label>
                                                    <input required type="number" class="form-control" name="mem_price[]" id="" value="<?=$prices->mem_price;?>">
                                                </td>
                                                <td>
                                                    <label>Non-Member Price *</label>
                                                    <input required type="number" class="form-control" name="none_mem_price[]" id="" value="<?=$prices->none_mem_price;?>">
                                                </td>
                                                <td>
                                                    <br />
                                                    <button class="btn btn-primary btn-xs" type="button" onclick="delete_size('<?=$countp;?>',0);">
                                                        <i class="fa fa-trash"></i> Remove
                                                    </button>
                                                </td>
                                            </tr>


<?php $countp++; } ?>


                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="4" align="right">
                                                        <button class="btn btn-primary btn-xs" onclick="add_size()" type="button"><i class="fa fa-plus"></i> Add More</button>
                                                    </th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>



  <script type="text/javascript">
   
      function add_size() {
        var x =0;
        var d = new Date();
        x = Math.floor((Math.random() * 10 * d.getTime()) + 1);
        $('#price').append(
            '<tr id="size_'+x+'"><td><label>No. of Pax *</label><input required type="number" class="form-control" name="no_of_pax[]" id="" value=""></td><td><label>Member Price *</label><input required type="number" class="form-control" name="mem_price[]" id="" value=""></td><td><label>Non-Member Price *</label><input required type="number" class="form-control" name="none_mem_price[]" id="" value=""></td><td><br /><button type="button" class="btn btn-danger btn-xs" onclick="delete_size('+x+',0);"><i class="fa fa-trash"></i> Delete</button></td></tr>');
     }
 
 
 function delete_size(str, str2) {
    
         $("#size_"+str).remove();
     
 }
 </script>

                                     <div class="form-group col-sm-12">
                                    <div class="col-sm-2">
                                        <label class="control-label required" for="menu_name">Additional Items <abbr class="text-danger">*</abbr></label>
                                    </div>
                                    <div class="col-sm-10">
                                        <table class="table table-responsive">
                                            <tbody id="items">
                                               

<?php $countad=0; foreach(json_decode($menus->additional) as $add){ 
 
    ?>


                                                <tr  id="sizex_<?=$countad;?>">
                                                <td>
                                                    <label>Name *</label>
                                                    <input type="text" class="form-control" name="item_name[]" id="" value="<?=$add->item_name;?>" required>
                                                </td>
                                                <td>
                                                    <label>Price *</label>
                                                    <input type="number" class="form-control" name="item_price[]" id="" value="<?=$add->item_price;?>" required>
                                                </td>
                                              
                                                <td>
                                                    <br />
                                                   
                                                     <button class="btn btn-primary btn-xs" type="button"  onclick="delete_item('<?=$countad;?>',0);">
                                                        <i class="fa fa-trash"></i> Remove
                                                    </button>
                                                </td>
                                            </tr>

<?php $countad++; } ?>


                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="4" align="right">
                                                        <button class="btn btn-primary btn-xs" onclick="add_items()" type="button"><i class="fa fa-plus"></i> Add More</button>
                                                    </th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>

  <script type="text/javascript">
   
      function add_items() {
        var x =0;
        var d = new Date();
        x = Math.floor((Math.random() * 10 * d.getTime()) + 1);
        $('#items').append(
            '<tr id="sizex_'+x+'"><td><label>Name *</label><input type="text" class="form-control" name="item_name[]" id="" value="" required></td><td><label>Price *</label><input type="number" class="form-control" name="item_price[]" id="" value="" required></td><td><br /><button type="button" class="btn btn-danger btn-xs" onclick="delete_item('+x+',0);"><i class="fa fa-trash"></i> Delete</button></td></tr>');
     }
 
 
 function delete_item(str, str2) {
    
         $("#sizex_"+str).remove();
     
 }
 </script>

                                <div class="form-group col-sm-12 text-center">
                                    <button class="btn btn-primary btn-md"   type="submit"><i class="fa fa-save"></i> Save</button>
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


