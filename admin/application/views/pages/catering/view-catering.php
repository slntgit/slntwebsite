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
                            <div class="row">   
                                <div class="col-sm-12 col-md-12 ">
                                     <?php echo $this->session->flashdata('success'); ?>
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered " style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Days</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $count=1;
                                                    foreach ($menus->result() as $value) {
                                                    ?>
                                                    <tr>
                                                        <td><?=$count++;?></td>
                                                        <td><?=$value->menu_name;?></td>
                                                        <td>
                                                            <?php foreach(json_decode($value->days) as $dv){
                                                                echo $dv.', ';
                                                            }?>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-info btn-xs" href="<?=base_url();?>pages/ManageCatering/EditCatering?id=<?=$value->id;?>">Edit</a>
                                                            <a class="btn btn-info btn-xs" href="<?=base_url();?>pages/ManageCatering/ViewAllCatering?id=<?=$value->id;?>&action=delete"  onclick="if (confirm('Are you sure?')){return true;}else{event.stopPropagation(); event.preventDefault();};" >Delete</a>
                                                        </td>
                                                    </tr>

                                                    <?php
                                                    }
                                                ?>
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
</div>