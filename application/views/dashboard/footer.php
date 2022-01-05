<footer _ngcontent-ngq-c159="" id="footer" class="footer-section">
    <app-langing-footer _ngcontent-ngq-c159="" _nghost-ngq-c158="">
        <div _ngcontent-ngq-c158="" class="footer-widthX">
            <div _ngcontent-ngq-c158="" class="container">
                <div _ngcontent-ngq-c158="" class="row">
                    <div _ngcontent-ngq-c158="" class="col-12 text-center mb-30"><img _ngcontent-ngq-c158="" src="<?=base_url();?>assets/script/slnt_logo_footer.png" alt="Shree Lakshminarayan Temple" class="img-fluid logo" /></div>
                    <div _ngcontent-ngq-c158="" class="col-md-3">
                        <div _ngcontent-ngq-c158="" class="widget">
                            <div _ngcontent-ngq-c158="" class="widget-description">
                                <p _ngcontent-ngq-c158="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            </div>
                            <div _ngcontent-ngq-c158="" class="widget-nav content">
                                                <ul _ngcontent-ngq-c158="" class="social-media d-flex">
                                                    <li _ngcontent-ngq-c158="">
                                                        <a _ngcontent-ngq-c158="" href="https://www.facebook.com/spslnt/"><i _ngcontent-ngq-c158="" class="fa fa-facebook"></i></a>
                                                    </li>
                                                   <!-- <li _ngcontent-ngq-c158="">
                                                        <a _ngcontent-ngq-c158="" href="# "><i _ngcontent-ngq-c158="" class="fa fa-twitter"></i></a>
                                                    </li>-->
                                                    <li _ngcontent-ngq-c158="">
                                                        <a _ngcontent-ngq-c158="" href="https://www.youtube.com/channel/UCS5HOjefXsPyRL5heHTSU2g"><i _ngcontent-ngq-c158="" class="fa fa-youtube-play"></i></a>
                                                    </li>
                                                    <!--<li _ngcontent-ngq-c158="">
                                                        <a _ngcontent-ngq-c158="" href="# "><i _ngcontent-ngq-c158="" class="fa fa-instagram"></i></a>
                                                    </li> -->
                                                </ul>
                            </div>
                        </div>
                    </div>
                    <div _ngcontent-ngq-c158="" class="col-md-2"></div>
                    <div _ngcontent-ngq-c158="" class="col-md-4"></div>
                    <div _ngcontent-ngq-c158="" class="col-md-3">
                        <div _ngcontent-ngq-c158="" class="widget">
                            <div _ngcontent-ngq-c158="" class="widget-header"><h4 _ngcontent-ngq-c158="">Contact us</h4></div>
                            <div _ngcontent-ngq-c158="" class="widget-nav content mb-30">
                                <ul _ngcontent-ngq-c158="">
                                    <li _ngcontent-ngq-c158=""><a _ngcontent-ngq-c158="" href="tel:+6562930195 "><span><i class="fa fa-phone"></i></span> &nbsp;&nbsp; +65 62930195</a></li>
                                    <li _ngcontent-ngq-c158=""><a _ngcontent-ngq-c158="" href="mailto:mailgoeshere@gmail.com "><span><i class="fab fa-whatsapp"></i></span> &nbsp;&nbsp; Mailgoeshere@gmail.com</a></li>
                                </ul>
                            </div>
                            <div _ngcontent-ngq-c158="" class="widget-header"><h4 _ngcontent-ngq-c158="">Address</h4></div>
                            <div _ngcontent-ngq-c158="" class="widget-description"><p _ngcontent-ngq-c158=""><span><i class="far fa-envelope"></i></span> &nbsp;&nbsp; 5 Chander Rd, Singapore 219528</p></div>
                        </div>
                    </div>
                </div>
                <div _ngcontent-ngq-c158="" class="row">
                    <div _ngcontent-ngq-c158="" class="col-12">
                        <div _ngcontent-ngq-c158="" class="copyright">
                            Copyright © <span _ngcontent-ngq-c158=""><a _ngcontent-ngq-c158="" href="/">Shree Lakshminarayan Temple</a></span> 2020 All rights reserved.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-langing-footer>
</footer>
            </app-landing-page>
 
        </app-root>
 
        <script src="<?=base_url();?>assets/script/runtime.f075f429250b51d39258.js" defer=""></script>
        <script src="<?=base_url();?>assets/script/polyfills.cb5f75d090e9d167e969.js" defer=""></script>
        <script src="<?=base_url();?>assets/script/main.28cf6d753a273ef09461.js" defer=""></script>
      
        <script type="text/javascript">
            $('.hrefLink').click(function(){
                var url = $(this). attr("href");
                window.location.href=url;
            });

            $('#search_service').on('keyup',function(){
                 var val = $(this).val();
                  if (val.length>0) {
                    $.ajax({
                       type: "post",
                       url: '<?php echo site_url('PoojaBooking/getServices');?>',
                       cache: false,    
                       data:'id='+val,
                       success: function(response){
                            $('#records').show();
                            $('#finalResult').html(response);
                       },
                       error: function(){      
                        alert('Error while request..');
                       }
                      });

                  }
            });
            function closethis() {
                    $('#records').hide(); 
            }

            function getSelService(arg,arg2,arg3,arg4) {
                    $.ajax({
                       type: "post",
                       url: '<?php echo site_url('PoojaBooking/getTimeSlot');?>',
                       cache: false,    
                       data:'id='+arg,
                       success: function(response){
                            //$('#records').show();
                            $('#settimeslot').html(response);
                       },
                       error: function(){      
                        alert('Error while request..');
                       }
                      });

                 $('#search_service').val(arg2);
                  $('#search_string').html(arg2+', <strong>Member Price : '+arg3+', Non-Member Price : '+arg4+'<strong>');
                 $('#service_id').val(arg);
                 $('#title').val(arg2);
                 $('#member_price').val(arg3);
                 $('#non_member').val(arg4);
                 //$('#finalResult li').css('background','#48263d');
                 //$(this).css('background','#fff');
                 //$('#records').hide();
            }

             $('.pre_priest').on('click',function(){
                 var priestval = $(this).val();
                if(priestval==0){
                    $('#priest_user').html("<input type='hidden' value='0' name='sel_priest' />");
                } else if(priestval==1){
                    var poojaTime = '<?=@$_GET['poojaTime'];?>';
                    var dssss = $('#dssss').val();
                    
                    var m = '<?=@$_GET['m'];?>';
                    var y = '<?=@$_GET['y'];?>';
                    var QueryString ='d='+dssss+'&m='+m+'&y='+y+'&poojaTime='+poojaTime;
                    $.ajax({
                       type: "post",
                       url: '<?php echo site_url('PoojaBooking/getPriestList');?>',
                       cache: false, 
                       data: QueryString, 
                       success: function(response){
                            $('#priest_user').html(response);
                       },
                       error: function(){      
                        alert('Error while request..');
                       }
                      });
                }
             });

             $('.vanue').on('click',function(){
                var priestval = $(this).val();
                if (priestval==0) {
                     $('#home_address').removeAttr('required');
                   $('#postal_code').removeAttr('required');
                   $('#time_range_from').removeAttr('required');
                   $('#time_range_to').removeAttr('required');
                   $('#time_range_to').removeAttr('required');
                   $('.catering').attr('required','required');
                    $('#vanues').hide();
                    $('#catering-u').show();
                } else {
                   $('#home_address').attr('required','required');
                   $('#postal_code').attr('required','required');
                   $('#time_range_from').attr('required','required');
                   $('#time_range_to').attr('required','required');
                   $('#time_range_to').attr('required','required');
                    $('.catering').removeAttr('required');
                   $('#vanues').show();
                   $('#catering-u').hide();
                }
             });
             $('.puja_samagri').on('click',function(){
                var priestval = $(this).val();
                var  pujaid = $('#pujaid').val();
                var queryString='pujaid='+pujaid+'&status='+priestval;
                 $.ajax({
                       type: "post",
                       url: '<?php echo site_url('PoojaBooking/getPujaSamagri');?>',
                       cache: false, 
                       data:queryString,
                       success: function(response){
                            $('#puja_samagri_list').html(response);
                       },
                       error: function(){      
                        alert('Error while request..');
                    }
                });
             });

              $('.havan_samagri').on('click',function(){
                var priestval = $(this).val();
                var  pujaid = $('#pujaid').val();
                var queryString='pujaid='+pujaid+'&status='+priestval;
                 $.ajax({
                       type: "post",
                       url: '<?php echo site_url('PoojaBooking/getHavanSamagri');?>',
                       cache: false, 
                       data:queryString,
                       success: function(response){
                            $('#havan_samagri_list').html(response);
                       },
                       error: function(){      
                        alert('Error while request..');
                    }
                });
             });

               $('.bhog_prasad').on('click',function(){
                var priestval = $(this).val();
                var  pujaid = $('#pujaid').val();
                var queryString='pujaid='+pujaid+'&status='+priestval;
                 $.ajax({
                       type: "post",
                       url: '<?php echo site_url('PoojaBooking/getBhogPrasad');?>',
                       cache: false, 
                       data:queryString,
                       success: function(response){
                            $('#bhog_prasad_list').html(response);
                       },
                       error: function(){      
                        alert('Error while request..');
                    }
                });
             });

            $('.catering').on('click',function(){
                var priestval = $(this).val();
                var  pujaid = $('#pujaid').val();
                var queryString='pujaid='+pujaid+'&status='+priestval;
                 $.ajax({
                       type: "post",
                       url: '<?php echo site_url('PoojaBooking/getCatering');?>',
                       cache: false, 
                       data:queryString,
                       success: function(response){
                            $('#catering_list').html(response);
                       },
                       error: function(){      
                        alert('Error while request..');
                    }
                });
             });
             
             
           $('.donation_cat').on('click',function(){
                var catidofdon = $(this).attr('data-id');
                var queryString='catidofdon='+catidofdon;
                 $.ajax({
                       type: "post",
                       url: '<?php echo site_url('donation/getSlabDetails');?>',
                       cache: false, 
                       data:queryString,
                       success: function(response){
                            $('#donationslab').html(response);
                       },
                       error: function(){      
                        alert('Error while request..');
                    }
                });
             });
             
             
             
              
             
            $('.sel_membership_plan').on('click',function(){
                var membershipindex = $(this).val();
                 var queryString='membershipindex='+membershipindex;
                 $.ajax({
                       type: "post",
                       url: '<?php echo site_url('PoojaBooking/getMemberShipDetails');?>',
                       cache: false, 
                       data:queryString,
                       success: function(response){
                            $('#memberShipDetails').html(response);
                       },
                       error: function(){      
                        alert('Error while request..');
                    }
                });
            });
            $('.nationality').on('click',function(){
                var loval = $(this).val();
                if(loval=='Other'){
                    $('#nationality_other').removeAttr('readonly');
                    $('#nationality_other').attr('required','required');

                } else {
                    $('#nationality_other').attr('readonly','readonly');
                    $('#nationality_other').removeAttr('required');

                }
            });
    $('.other_intrst').on('click',function(){
        var oth = $(this).val();
            if(oth=='Other'){
                    $('#interest_other').removeAttr('readonly');
                    $('#interest_other').attr('required','required');

                } else {
                    $('#interest_other').attr('readonly','readonly');
                    $('#interest_other').removeAttr('required');

                }
    });

    function openCatGallery(ar) {
       window.location.href=ar;
    }
</script>

<script type="text/javascript">
jQuery(document).ready(function($) {
$("paypalpayment").submit();
});
</script> 


<script type="text/javascript">
$(document).ready(function(){

  $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
    
    $(".zoom").hover(function(){
        
        $(this).addClass('transition');
    }, function(){
        
        $(this).removeClass('transition');
    });

    $('.video-popup').on('click',function(){
        var  working = $(this).attr('data-title');
        var  title = $(this).attr('title');
        $('#heading_video').html(title);
        $('#videocontent').html('<iframe height="320" style="width:100%;" src="'+working+'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');

    });
});
</script>


<script>
    $(document).ready(function(){
    $(".alphabet").keypress(function(event){
        var inputValue = event.charCode;
        if(!(inputValue >= 65 && inputValue <= 123) && (inputValue != 32 && inputValue != 0)){
            event.preventDefault();
        }
    });
    
   $('.itmesssss').on('click',function(){
       $('.itmesssss').removeClass('itmactive');
       $(this).addClass('itmactive');
   }); 
    
    $('.number').keyup(function(e)
                                {
  if (/\D/g.test(this.value))
  {
    // Filter non-digits from input value.
    this.value = this.value.replace(/\D/g, '');
  }
});
});


</script>
 <style>
     .facebook{
             color: #fff;
 
            padding:  10px !important;
            background-color: #4267b2;
    border-color: #4267b2;
    transition: 200ms cubic-bezier(.08,.52,.52,1) background-color, 200ms cubic-bezier(.08,.52,.52,1) box-shadow, 200ms cubic-bezier(.08,.52,.52,1) transform;
    border: 1px solid;
    border-radius: 2px;
    box-sizing: content-box;
    font-size: 12px;
    -webkit-font-smoothing: antialiased;
    font-weight: bold;
    justify-content: center;
    padding: 0 8px;
    position: relative;
    text-align: center;
    text-shadow: none;
    vertical-align: middle;
     }
     
      .whatsapp{
             color: #fff;
 
            padding:  10px !important;
            background-color: #00e676 !important;
    border-color: #FFF !important;
    transition: 200ms cubic-bezier(.08,.52,.52,1) background-color, 200ms cubic-bezier(.08,.52,.52,1) box-shadow, 200ms cubic-bezier(.08,.52,.52,1) transform;
    border: 1px solid;
    border-radius: 2px;
    box-sizing: content-box;
    font-size: 12px;
    -webkit-font-smoothing: antialiased;
    font-weight: bold;
    justify-content: center;
    padding: 0 8px;
    position: relative;
    text-align: center;
    text-shadow: none;
    vertical-align: middle;
     }
     
 </style>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
  <!-- The Modal -->
  <div class="modal " id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" id="heading_video"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body" id="videocontent">
        </div>
       <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
      </body>
</html>