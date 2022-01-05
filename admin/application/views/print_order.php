<?php 
            $this->db->select('*');
            $this->db->from('tbl_members');
            $this->db->where('id',$order_details->id);
            $member = $this->db->get()->row();
?>

 <div class="mainpanel">
    <div class="pageheader">
        <div class="media">
            <div class="media-body">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                    <li><a href="<?= base_url();?>pages/dashboard" style="color: #666 !important;">Dashboard</a></li>
                    <li>Orders</li>
                </ul>
                <h4>Orders</h4>
            </div>
        </div>
        <!-- media -->
    </div>
    <!-- pageheader -->
    <style type="text/css">
        @media (min-width: 790px) {
            .content-area {
                margin-left: 0px !important;
            }
        }
        
        .list-unstyled li {
            /* border-bottom: 1px solid rgba(167, 180, 201,.3); */
            width: auto !important;
            float: left !important;
        }
        
        #sidebar {
            padding-bottom: 2px !important;
        }
        
        @media (min-width: 790px) {
            footer {
                margin-left: 00px;
            }
        }
        
        .page-title {
            margin-top: 31px;
            /* top: 100px; */
            font-size: 25px;
            font-weight: 600;
            line-height: 1.5rem;
            position: relative;
            border-bottom: 1px solid rgba(167, 180, 201, .3);
            width: 100%;
            margin-bottom: 30px;
            padding-bottom: 13px;
        }
        
        #sidebar {
            min-width: 100%;
            max-width: 100%;
            background: #0d102c;
            box-shadow: 0 0 0 1px rgba(181, 201, 227, .12), 0 8px 16px 0 rgba(181, 201, 227, .24);
            color: #fcfdff !important;
            -webkit-transition: all 0.3s !important;
            -o-transition: all 0.3s !important;
            transition: all 0.3s !important;
            z-index: 10 !important;
            position: absolute !important;
            overflow: auto !important;
            height: auto !important;
        }
    </style>
    <style type="text/css">
        .jqstooltip {
            position: absolute;
            left: 0px;
            top: 0px;
            visibility: hidden;
            background: rgb(0, 0, 0) transparent;
            background-color: rgba(0, 0, 0, 0.6);
            filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            color: white;
            font: 10px arial, san serif;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            border: 1px solid white;
            z-index: 10000;
        }
        
        .jqsfield {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }
    </style>
 
    <div class="contentpanel">
        
                    <div class="row">
                        <div class="col-sm-12 col-lg-12">

                            <div class="card">

                                <div class="card-body">

                                    <div class="table-responsive">

                                       
                                        <button onclick="PrintElem('printableArea2')" class="btn btn-success btn-xs">Print Slip</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <div class="row" id="printableArea2">

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



                    <div class="col-sm-12">
                            <table class="table table-bordered table-responsive">

        <tr>
            <td>Name </td>
            <td>: <?= $member->name;?></td>
            <td>Mobile  </td>
            <td>: <?= $member->mobile;?> </td>
        </tr>

         <tr>
            <td>Order ID  </td>
            <td>: <?= $order_details->id;?></td>
            <td>Member ID  </td>
            <td>: <?= $order_details->id?> </td>
        </tr>

        <tr>
            <td>Register Address</td>
            <td colspan="3">:  <?= $member->address;?></td>
        </tr>


         <tr>
            <td>Shipping Address</td>
            <td colspan="3">:  <?= $order_details->address;?></td>
        </tr>

</table>




                    </div>
            </div>
     







    
                    <div class="row">
                        <div class="col-sm-12 col-lg-12">

                            <div class="card">

                                <div class="card-body">

                                    <div class="table-responsive">

                                       
                                        <button onclick="PrintElem('printableArea')" class="btn btn-success btn-xs">Print Invoice</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" id="printableArea">

                        <script type="text/javascript">
                            $(function() {

                                $("#export_excel_button").click(function() {
                                    $("#export_excel_table").btechco_excelexport({
                                        containerid: " export_excel_table ",
                                        datatype: $datatype.Table
                                    });
                                });

                            });

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

                            /*
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

      document.body.innerHTML = originalContents;
}

*/
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
 
                               
                                        <div class="table-responsive">
                                             
 
                                                    <div class="row">
                                                        <div class="col-sm-12">


<table class="table table-bordered table-responsive">

        <tr>
            <td>Name </td>
            <td>: <?= $member->name;?></td>
            <td>Mobile  </td>
            <td>: <?= $member->mobile;?> </td>
        </tr>

         <tr>
            <td>Order ID  </td>
            <td>: <?= $order_details->id;?></td>
            <td>Member ID  </td>
            <td>: <?= $order_details->id?> </td>
        </tr>

        <tr>
            <td>Register Address</td>
            <td colspan="3">:  <?= $member->address;?></td>
        </tr>


         <tr>
            <td>Shipping Address</td>
            <td colspan="3">:  <?= $order_details->address;?></td>
        </tr>



        <tr>
            <th>Image</th>
            <th>Title</th>
            <th>Amount</th>
            <th>Quantity</th>
         </tr>
         <?php 
            $this->db->select('*');
            $this->db->from('mypackage');
            $this->db->where('order_id',$this->uri->segment(3));
            $this->db->group_by('product_id');
            $my_pacck = $this->db->get();
            $total=0;
            foreach ($my_pacck->result() as $keymy_pacck) {

        $this->db->select('*');
        $this->db->from('add_products');
        $this->db->where('id', $keymy_pacck->product_id);
        $my_product = $this->db->get()->row();

$this->db->select('*');
$this->db->from('mypackage');
$this->db->where('order_id',$keymy_pacck->order_id);
$this->db->where('product_id',$keymy_pacck->product_id);
$myquant = $this->db->get()->num_rows();
$total=$total+$my_product->selling_price*$myquant;
         ?>

                <tr>
                        <td><img src='<?= base_url()?>../assets/products/<?= $my_product->product_image; ?>' style='max-width:80px;' /></td>
                        <td><?= $my_product->title; ?></td>
                        <td><?= $my_product->selling_price; ?></td>
                        <td><?= $myquant; ?></td>
                </tr>
<?php } ?>
    <tr>
        <td colspan="2" align="right">Total</td>
        <td>Rs. <?php  
            if($order_details->order_type==1){ ?>
          
        <del style="color: red;">  <?php  echo $total; ?></del>

       <?php }  
echo $order_details->total_amount;

        
            ?></td>

            <td></td>
    </tr>

<tr>
    <td>Status</td>

    <td colspan="3"><?= $order_details->cstatus?></td>
</tr>
</table>
                                                            
                                                        </div>
                                                    </div>
 </div>
                                    

                            </div>
               </div></div></div>
</div>
    <script src="http://ccsucctv.co.in/assets/style/js/vendors/jquery-3.2.1.min.js"></script>

    <script type="text/javascript" src="http://utscorp.co.in/js/jquery.battatech.excelexport.min.js">
    </script>
    <script type="text/javascript" src="http://utscorp.co.in/js/customjs.js"></script>

 