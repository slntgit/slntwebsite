<div _ngcontent-ngq-c159="" class="main-site about-main-site">
    <router-outlet _ngcontent-ngq-c159=""></router-outlet>
    <app-landing-home _nghost-ngq-c160="" class="ng-star-inserted">
     
        <section _ngcontent-ngq-c160="" class="section-gap about-section about-page">
            <div _ngcontent-ngq-c160="" class="container">
                <div _ngcontent-ngq-c160="" class="row align-item-center justify-content-between">
                    <div class="col-md-6">
                        <section _ngcontent-ngq-c160="" class="header-title">
                            <p _ngcontent-ngq-c160="" class="sub-title">My Temple / Refreshment Enquiry</p>
                           
                        </section></div>
                    <div class="col-md-6">
                        <div _ngcontent-ngq-c160="" class="wrapper img-wrapper">
                            
                                    <style>
table {
  font-family: arial, sans-serif !important;
  border-collapse: collapse !important;
  width: 100% !important;
}

td, th, tr {
  border: 1px solid #dddddd !important;
  text-align: left !important;
  padding: 8px !important;
}

tr:nth-child(even) {
  background-color: #dddddd !important;
}
</style>
          
								
                        </div>
                    </div>
                    <div _ngcontent-ngq-c160="" class="col-md-12">
                        <div _ngcontent-ngq-c160="" class="wrapper content-wrapper">
                              <table class="table table-bordered table-striped" id="example">
									<thead>
										<tr>
											<th>#</th>
										 	<th  class="width_action">Type</th>
											<th  class="width_action">Submitted Date</th>
											<th  class="width_action">Contact Information</th>
											<th  class="width_action">Temple Booking Date</th>
											<th  class="width_action">Temple Booking Time </th>
											<th  class="width_action">Status </th>
											<th  class="width_action">Action</th>
										</tr>
									</thead>
									<tbody> 
 							            <?php $count=1; foreach($temple_booking->result() as $trbooking){ ?>
 							                <tr>
    											<td><?=$count;?></td>
    										 	<td  class="width_action"><?php if($trbooking->choose_type==1){ echo 'Temple'; } else { echo 'Refreshment'; } ?></td>
    											<td  class="width_action"><?=date('d-M-Y',strtotime($trbooking->post_date));?></td>
    											<td  class="width_action">
    											    <?=$trbooking->name_prefix;?> <?=$trbooking->first_name;?> <?=$trbooking->last_name;?> <br />
    											    <?=$trbooking->email;?> <br />
    											    +65 <?=$trbooking->mobile;?>
    											</td>
    											<td  class="width_action"><?=date('d-M-Y',strtotime($trbooking->choose_date));?></td>
    											<td  class="width_action">Start : <?=date('h:i:s A',strtotime($trbooking->choose_start_time));?> 
    											    <br /> End :  <?=date('h:i:s A',strtotime($trbooking->choose_end_time));?></td>
    											<td  class="width_action"><?php  if($trbooking->status==0){ echo 'Pending'; } else if($trbooking->status==1){ echo 'Confirm'; } else if($trbooking->status==02){ echo 'Cancle'; } ?> </td>
    											<td  class="width_action" >
    											    <a href="<?=base_url();?>Dashboard/TempleRefreshmentEnquirydetails/<?=$trbooking->id;?>" class="btn btn-info btn-sm" target="_blank">View Details</a>
    											</td>
    										</tr>
 							            <?php $count++; } ?>
									</tbody>
								</table> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </app-landing-home>
    <!---->
</div>
<style>

.about-main-site {
    /* padding-top: 20px !important; */
    padding-bottom: 80px !important;
}
</style>