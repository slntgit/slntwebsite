                        <?php if (isset($_GET['fromdate'])) {
                                $date1 = date("Y-m-d",strtotime($_GET['fromdate']));
                                $date2 = date("Y-m-d",strtotime($_GET['todate']));
                                $diff = abs(strtotime($date2) - strtotime($date1));
                                $years = floor($diff / (365*60*60*24));
                                $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                                $day = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                                $days=7;
                            } else {
                                $date1 = date('Ymd');
                                $date2 = date('Ymd', strtotime(date('Y-m-d')."+7 day"));
                                $diff = abs(strtotime($date2) - strtotime($date1));
                                $years = floor($diff / (365*60*60*24));
                                $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                                $day = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                                $days=7;
                            }
                            if ($day==0) {
                              $days=1;
                            }
                               $ffdate = date('Y-m-d',strtotime($date1));
                               $ttdate = date('Y-m-d',strtotime($date2));
                               $next7days = date('Y-m-d',strtotime($ttdate."+7 days"));
                               $lstkstrt = date('Y-m-d',strtotime($ffdate."-7 days"));
                        ?>
                <div _ngcontent-ngq-c159="" class="main-site about-main-site">
                    <router-outlet _ngcontent-ngq-c159=""></router-outlet>
                    <app-landing-home _nghost-ngq-c160="" class="ng-star-inserted">
                       <!-- <div id="parallax-world-of-ugg">
                          <section>
                              <div class="parallax-one">
                                <h2>Our Events</h2>
                              </div>
                          </section>
                        </div> -->
        <section class="section-gap banner-section-inner aboutUs-page">
        <div class="overlay"></div>
        <div class="container">
            <section class="header-title d-flex justify-content-center align-content-center">
                <h1 class="title">Our Events</h1>
            </section>
        </div>
        </section>

        <section _ngcontent-ngq-c160="" class="section-gap about-section">
            <div _ngcontent-ngq-c160="" class="container">
                <section class="eventsNavDate">
                    <div class="row">
                        <div class="col-sm-12 text-left">
                            <div class="btn-group btn-group-or  btn-group-custom" role="group">
                                <a href="<?=base_url();?>EventsCalendarView/?fromdate=<?=$lstkstrt;?>&todate=<?=$ffdate;?>" class="btn leftBtn"> <i class="fa fa-chevron-left" aria-hidden="true"></i>    </a>
                                <a href="<?=base_url();?>EventsCalendarView/?fromdate=<?=$ttdate;?>&todate=<?=$next7days;?>" class="btn rightBtn"> <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                <a href="<?=base_url();?>EventsCalendarView/?fromdate=<?=date('d-m-Y');?>&todate=<?=date('d-m-Y');?>" class="dateTodayBtn"><i class="fa fa-arrow-down" aria-hidden="true"></i>  Today  </a>
                                <a href="<?=base_url();?>Events" class="monthDateBtn"><i class="fa fa-list" aria-hidden="true"></i> List View</a>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="row">
                    <div class="col-xs-12 col-lg-12 text-center">
                        <div class="table-responsive text-center">
                            <table class="table table-responsive table-calender tableList" id="calendar">
                                <thead>
                                    <tr>
                                        <th><p>Time Slots </p><a href="javascript:void();" class="btn btn-link-highlight btn-xs"> <?=date('M Y',strtotime($date1));?></a></th> 
                                        <?php $dx =0;
                                        while ($days>$dx) { ?>
                                        <th class="text-center"> 
                                           <p class="table-heading">
                                               <?php 
                                                   if (isset($_GET['fromdate'])) {
                                                       $tomorrow = date('d, M-Y', strtotime($_GET['fromdate']."+".$dx." day"));
                                                           echo date('D', strtotime($_GET['fromdate']."+".$dx." day"));
                                                           echo '<br />';
                                                           echo date('d', strtotime($_GET['fromdate']."+".$dx." day"));
                                                   } else {
                                                       $tomorrow = date('d, M-Y', strtotime(date('Ymd')."+".$dx." day"));
                                                      echo date('D', strtotime(date('Ymd')."+".$dx." day"));
                                                      echo '<br />';
                                                      echo date('d', strtotime(date('Ymd')."+".$dx." day"));
                                                   }
                                               ?>
                                           </p>
                                        </th>
                                        <?php $dx++; } ?>     
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $this->db->select('*');
                                    $this->db->from('slnt_events_time');
                                    $this->db->order_by('id','ASC');
                                    $dslnt_events_tim = $this->db->get()->result();

                                    foreach ($dslnt_events_tim as $kevalue) { 
                                    ?>
                                    <tr>
                                        <td><?=$kevalue->from_time;?>-<?=$kevalue->to_time;?></td>
                                            <?php $dx =0;
                                            while ($days>$dx) {
                                            $tomorrow = date('Ymd', strtotime($_GET['fromdate']."+".$dx." day")); 
                                            $fttrctd = $this->db->select('*')
                                            ->from('event_time_table as et')
                                            ->where('et.filterdate', $tomorrow)
                                            ->where('et.timeid', $kevalue->id)
                                            ->join('add_products as p', 'et.eventid = p.id')
                                            ->get();
                                               $rowofevnt=$fttrctd->row();
                                            ?>
                                        <td title="<?php if($fttrctd->num_rows()>0){ echo $rowofevnt->title; echo ', '; echo $tomorrow = date('D d, M Y', strtotime($_GET['fromdate']."+".$dx." day")); echo ', '; echo $kevalue->from_time.' To '.$kevalue->to_time; } else { echo 'no events available';} ?>" class="text-center pointer <?php if($fttrctd->num_rows()>0){ ?> bg-orange <?php } ?>"> 

                                            <?php //echo $rowofevnt->title;; ?>

<?php if($fttrctd->num_rows()>0){ ?>
<a href="<?=base_url();?>Events/<?=$rowofevnt->id;?>">
  <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
</a>
<?php } else { ?>

<!-- <i class="fas fa-calendar-times" aria-hidden="true"></i> -->

<?php } ?>


</td>
                                       <?php $dx++; } ?> 

                                    </tr>
                                <?php } ?>

                               <?php ?>
                           </tbody>
                       </table>
                   </div>
                </div>
           </div>
                            <section class="eventsNavDate">
                                <div class="row">
                                    <div class="col-sm-12 text-left">
                                        <div class="btn-group btn-group-or  btn-group-custom" role="group">
                                            <a href="<?=base_url();?>EventsCalendarView/?fromdate=<?=$lstkstrt;?>&todate=<?=$ffdate;?>" class="btn leftBtn"> <i class="fa fa-chevron-left" aria-hidden="true"></i>    </a>
                                            <a href="<?=base_url();?>EventsCalendarView/?fromdate=<?=$ttdate;?>&todate=<?=$next7days;?>" class="btn rightBtn"> <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                            <a href="<?=base_url();?>EventsCalendarView/?fromdate=<?=date('d-m-Y');?>&todate=<?=date('d-m-Y');?>" class="dateTodayBtn"><i class="fa fa-arrow-down" aria-hidden="true"></i>  Today  </a>
                                            <a href="<?=base_url();?>Events" class="monthDateBtn"><i class="fa fa-list" aria-hidden="true"></i> List View</a>
                                        </div>
                                    </div>
                                </div>
                            </section>
       </div>
   </section></app-landing-home>
 <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/events.css">