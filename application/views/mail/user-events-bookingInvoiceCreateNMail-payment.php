<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
     <script type="text/javascript">
                             function PrintElem(elem) {
                                var mywindow = window.open('', 'PRINT', 'height=400,width=600');
                                mywindow.document.write('<html><head><title>' + document.title + '</title>');
                                mywindow.document.write('</head><body >');
                                mywindow.document.write(document.getElementById(elem).innerHTML);
                                mywindow.document.write('</body></html>');
                                mywindow.document.close(); // necessary for IE >= 10
                                mywindow.focus(); // necessary for IE >= 10*/
                                mywindow.print();
                                mywindow.close();
                                return true;
                            }
                        </script>
                       <style>
                            table,
                            td,
                            th {
                                border: 1px solid black;
                                padding: 5px;
                            }
                            
                            table {
                                border-collapse: collapse;
                                border-spacing: 0px;
                                width: 100%;
                            }
                        </style>
                        <style>
                            .table-bordered th,
                            .text-wrap table th,
                            .table-bordered td,
                            .text-wrap table td {
                                border: 1px solid rgba(167, 180, 201, .3);
                                font-weight: 700 !important;
                                font-size: 14px;
                            }
                        </style>
<div class="col-12">
    <style type="text/css">
            .error {
                color: red;
                padding: 5px;
            }
    </style>
	<div class="mainpanel">
	   <div class="contentpanel">		
		  <div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
						<div class="">
						 
            <table class="table table-bordered table-responsive">
    <thead>
                    <tr>
                      <th colspan="2">
                          <img src="<?=base_url();?>assets/print-logo.png">
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
 <td>  <?=date('Y-m-d',strtotime($booking->date_of_event));?></td>
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
                                

                                 <tr>
                                <td>
                                  Booking ID 
                                </td>
                                <td>
                                <?= $booking->evnt_bookin_id;?>
                                </td>
                              </tr>
                              



                               <tr>
                                <td>
                                  Status 
                                </td>
                                <td>
                                   <?php if($booking->status==1){ ?>
                                      <label class="btn btn-success">Pay Successfully</label>
                                   <?php } else { ?>
                                      <label class="btn btn-warning">Pay Un-Successfully</label>
                                   <?php }?>
                                </td>
                              </tr>



                            </tbody>

        
            </table>
       
						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
</div>
</body>
</html>