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
                    <h1 class="title">Upcoming Events</h1>
                </section>
            </div>
        </section>

        <section _ngcontent-ngq-c160="" class="section-gap about-section">
            <div _ngcontent-ngq-c160="" class="container">
                <section class="eventsNavDate">
                    <div class="row">
                        <div class="col-sm-12 text-left">
                            <div class="btn-group btn-group-or btn-group-custom" role="group">
                                <a href="<?=base_url();?>Events/?fromdate=<?=$lstkstrt;?>&todate=<?=$ffdate;?>" class="btn leftBtn"> <i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                                <a href="<?=base_url();?>Events/?fromdate=<?=$ttdate;?>&todate=<?=$next7days;?>" class="btn rightBtn"> <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                <a href="<?=base_url();?>Events/?fromdate=<?=date('d-m-Y');?>&todate=<?=date('d-m-Y');?>" class="dateTodayBtn">Today</a>
                                <a href="<?=base_url();?>EventsCalendarView" class="monthDateBtn"><i class="fa fa-calendar" aria-hidden="true"></i> Calendar</a>
                                    <!--<a href="javascript:void();" class="btn btn-link-highlight font-size-17px"> -->
                                    <!--    <?=date('M Y',strtotime($date1));?>-->
                                    <!--</a>-->
                            </div>
                        </div>
                    </div>
                </section>
                                   
 
    <?php 
    if ($events->result()>0) {
      foreach($events->result() as $eventsdata){ ?>
         
        <div class="row pujaSectionListPage">
            <div class="col-md-1 col-sm-12 text-center">
                <time datetime="<?=$eventsdata->event_date;?>">
                    <span class="day">
                        <?=date('D', strtotime($eventsdata->event_date));?>        
                    </span>
                    <br />
                    <span class="month">
                        <?=date('d', strtotime($eventsdata->event_date));?>
                    </span>
                </time>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="info eventsDetiPujaList">
                    <p class="desc">
                        <?=date('d M Y', strtotime($eventsdata->event_date));?> at
                        <?php 
                            $fttrctd = $this->db->select('*')
                             ->from('event_time_table as et')
                             ->where('et.filterdate', $eventsdata->filterdate)
                             ->where('et.eventid', $eventsdata->id)
                             ->join('slnt_events_time as set', 'et.timeid = set.id')
                             ->get();
                            $m=$fttrctd->num_rows();
                            if ($m>0) { 
                                foreach ($fttrctd->result() as $xcvvalue) {      
                        ?>
                        <?='<label class="btn-tags">'.$xcvvalue->from_time;?> To <?=$xcvvalue->to_time.'</label>';?>
                        <?php     
                        }   
                        }
                        ?>
                    </p>
                    <h2 class="titleEvent">
                        <a href="<?=base_url();?>Events/<?=$eventsdata->id;?>">
                            <?=$eventsdata->title;?>
                        </a>
                    </h2>

                    <p><?= word_limiter(strip_tags($eventsdata->description),40);?></p>

                    <?php if($eventsdata->event_amount>0){ ?>
                        <p class="eventPriceList">
                            <a href="<?=base_url();?>Events/<?=$eventsdata->id;?>">
                                $<?=$eventsdata->event_amount;?> SGD
                            </a>
                        </p>
                        <?php } else { ?>
                        <p class="eventPriceList">
                            
                        </p>  
                    <?php } ?>
                    
                    <a href="<?=base_url();?>Events/<?=$eventsdata->id;?>#fillForm" class="btn btn-danger btn-events">Book Now</a>

                </div>
            </div>
            <div class="col-md-5 col-sm-12">
                <div class="imgEventPuja">
                    <img alt="<?=$eventsdata->title;?>" src="<?=base_url();?>assets/products/<?=$eventsdata->product_image;?>" class="img-fluid" />
                </div>
            </div>
        </div>
    <?php } } else { ?>
        <div class="row">
            <div class="col-sm-12">
                    No Record found From <?=$date1;?> To <?=$date1;?>
            </div>
        </div>
    <?php  } ?>

    <section _ngcontent-ngq-c160="" class="header-title eventsNavDate">
        <div class="row">
            <div class="col-sm-12 text-left">
                <div class="btn-group btn-group-or btn-group-custom" role="group">
                    <a href="<?=base_url();?>Events/?fromdate=<?=$lstkstrt;?>&todate=<?=$ffdate;?>" class="btn leftBtn"> <i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                    <a href="<?=base_url();?>Events/?fromdate=<?=$ttdate;?>&todate=<?=$next7days;?>" class="btn rightBtn"> <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    <a href="<?=base_url();?>Events/?fromdate=<?=date('d-m-Y');?>&todate=<?=date('d-m-Y');?>" class="dateTodayBtn">Today</a>
                    <a href="<?=base_url();?>EventsCalendarView" class="monthDateBtn"><i class="fa fa-calendar" aria-hidden="true"></i> Calendar</a>
                    <!--<a href="javascript:void();" class="btn btn-link-highlight font-size-17px"> -->
                    <!--    <?=date('M Y',strtotime($date1));?>-->
                    <!--</a>-->
                </div>
            </div>
        </div>
    </section>
            </div>
 
                             
                        </section>
                    </app-landing-home>
                    <!---->
                </div>

 <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/events.css">