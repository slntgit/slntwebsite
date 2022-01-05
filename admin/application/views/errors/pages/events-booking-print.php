<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>Events Booking</li>
				</ul>
				<h4>Events Booking</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
<div class="contentpanel">		
	<div class="row">	
		<div class="col-sm-12 col-md-12 ">				
<?php
		$this->db->select('*');
		$this->db->from('add_products');
		$this->db->where("id",$booking->event_id);
		$this->db->order_by('id','DESC');
	    $eventsDetails = $this->db->get()->row();
?>
<div _ngcontent-ngq-c159="" class="main-site about-main-site">
         <div class="row">
            <div class="col-sm-12">
              <hr />

                <div class="table-reasponsive">
                <table class="table table-reasponsive table-bordered table-striped tableList">
                  <thead>
                    <tr>
                      <th colspan="2">
                          <h2 class="text-white">My Booking  Summery</h2>
                      </th>
                    </tr>
                  </thead>
                     <tbody>
                                
                              <?php if($booking->memberid!=''){ ?>
                                <tr>
                                    <td>Membership ID </td>
                                    <td><?= $booking->memberid?></td>
                                </tr>
                              <?php } else { ?>
                                <tr>
                                    <td>Membership </td>
                                    <td>Non-Member User</td>
                                </tr>
                              <?php } ?>

                                <tr>
                                    <td>Event Title </td>
                                    <td>  <?=$eventsDetails->title;?></td>
                                </tr>

                                <tr>
                                    <td>Event Date </td>
                                    <td>  <?=$booking->date_of_event;?></td>
                                </tr>


                                  <tr>
                                    <td>Event Time </td>
                                    <td><?=$booking->time_of_event;?></td>
                                </tr>


                                 <tr>
                                    <td>Name </td>
                                    <td>  <?= $booking->title?> <?= $booking->first_name?> <?= $booking->last_name?></td>
                                </tr>
                                 <tr>
                                    <td>Email </td>
                                    <td> <?= $booking->email?></td>
                                </tr>

                                <tr>
                                    <td>Mobile </td>
                                    <td>  <?= $booking->mobile_code?> <?= $booking->mobile?></td>
                                </tr>
                            
                               <tr>
                                    <td>Yajman Type </td>
                                    <td>  <?= $booking->description_charge?></td>
                                </tr>
                               <tr>
                                    <td>Yajman Amount </td>
                                    <td>  $<?= $booking->puja_amount?> SGD</td>
                                </tr>
                            
                                 <tr>
                                    <td>Event Amount </td>
                                    <td> $<?= $booking->event_amount?> SGD</td>
                                </tr>
                              <tr>
                                <td>
                                  Total 
                                </td>
                                <td>
                                  $<?= $booking->puja_amount+$booking->event_amount;?> SGD
                                </td>
                              </tr>
          
	                            </tbody>
	                    </table>
	               </div>
</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->			
		</div><!-- row -->  
	</div><!-- contentpanel -->
</div> 