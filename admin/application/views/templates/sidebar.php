

<?php 
            $replyt=1;
            $this->db->select('*');
            $this->db->from('configuration_general');
            $this->db->where('id', $replyt);
            $set = $this->db->get();
            $webconfig = $set->row();
?><section>
<div class="mainwrapper">
    <div class="leftpanel">
        <ul class="nav nav-pills nav-stacked">
            <li <?php if($this->uri->segment(2)=='dashboard'){ ?> class="active"<?php } ?>><a href="<?php echo base_url();?>"><span>Dashboard</span></a></li>                        
 
            <li <?php if($this->uri->segment(2)=='BlockPoojaDate' or $this->uri->segment(2)=='BlockAllPoojaDate' or $this->uri->segment(2)=='ManagePoojaDetails' or $this->uri->segment(2)=='Add_Pooja' or $this->uri->segment(2)=='View_Pooja'or  $this->uri->segment(2)=='Pooja_Time' or  $this->uri->segment(2)=='Samagri' or  $this->uri->segment(2)=='BhogPrasad' or  $this->uri->segment(2)=='Catering'){ ?> class="active parent"<?php } else { ?> class="parent"<?php } ?>><a href="#"><span>Manage Pooja Type</span></a>
                <ul class="children">
                   <!--  <li><a href="<?php echo base_url();?>pages/Puja_Time">Puja Time</a></li> -->
                    <li><a href="<?php echo base_url();?>pages/Add_Pooja">Add Pooja Type</a></li>
                    <li><a href="<?php echo base_url();?>pages/View_Pooja">View Pooja Type</a></li>
                    <li><a href="<?php echo base_url();?>pages/BlockAllPoojaDate">Block All Pooja Date</a></li>
                    <!--<li><a href="<?php echo base_url();?>pages/BlockPoojaDate">Block Pooja Date</a></li>-->
              <!--       <li><a href="<?php echo base_url();?>pages/Samagri">Puja & Havan Samagri</a></li>
                    <li><a href="<?php echo base_url();?>pages/BhogPrasad">Bhog  / Prasad</a></li>
                    <li><a href="<?php echo base_url();?>pages/Catering">Catering</a></li> -->
                </ul>
             </li>
<li <?php if($this->uri->segment(2)=='All_Booking' or $this->uri->segment(2)=='OfflinePoojaBookings' or $this->uri->segment(2)=='CreatPoojaBookingSummery' or $this->uri->segment(2)=='CreatPoojaBookingPrint' or $this->uri->segment(2)=='CreatPoojaBooking'){ ?> class="active parent"<?php } else { ?> class="parent"<?php } ?>><a href="#"><span>Manage Bookings</span></a>
                <ul class="children">

<li><a href="<?php echo base_url();?>pages/All_Booking">All Pooja Bookings</a></li>
<li><a href="<?php echo base_url();?>pages/CreatPoojaBooking?type=pooja">Create Pooja Booking</a></li>
<li><a href="<?php echo base_url();?>pages/CreatPoojaBooking?type=yajman">Create Yajman Booking</a></li>
<li><a href="<?php echo base_url();?>pages/OfflinePoojaBookings">Offline Pooja Bookings</a></li>
                


                </ul>
</li>



 <li <?php if($this->uri->segment(2)=='Add_Ceremonies' or $this->uri->segment(2)=='View_Ceremonies' or  $this->uri->segment(2)=='Ceremonies_Time' or  $this->uri->segment(2)=='CeremoniesBooking' or  $this->uri->segment(2)=='Ceremonies_Samagri' or  $this->uri->segment(2)=='Ceremonies_BhogPrasad' or  $this->uri->segment(2)=='Ceremonies_Catering' or  $this->uri->segment(2)=='Arrange_Decoration' or  $this->uri->segment(2)=='BlockDate'){ ?> class="active parent"<?php } else { ?> class="parent"<?php } ?>><a href="#"><span>Manage Ceremonies</span></a>
    <ul class="children">
        <li>
            <a href="<?php echo base_url();?>pages/Add_Ceremonies">Add Ceremonies</a>
        </li>
        <li>
            <a href="<?php echo base_url();?>pages/View_Ceremonies">View Ceremonies</a>
        </li>   

        <li>
            <a href="<?php echo base_url();?>pages/Arrange_Decoration">Arrange Decoration </a>
        </li>
        <li>
            <a href="<?php echo base_url();?>pages/CeremoniesBooking">
                Ceremonies Booking
            </a>
        </li>
        <li>
            <a href="<?php echo base_url();?>pages/BlockDate">Block Date </a>
        </li>
    </ul>
</li>
<li <?php if($this->uri->segment(2)=='ManageCatering'){ ?> class="active parent"<?php } else { ?> class="parent"<?php } ?>><a href="#"><span>Manage Catering Menu (All Pooja & All Ceremonies)</span></a>
    <ul class="children">
        <li><a href="<?php echo base_url();?>pages/ManageCatering/AddNewCatering">Add New Catering</a></li>
        <li><a href="<?php echo base_url();?>pages/ManageCatering/ViewAllCatering">View All Catering</a></li>
    </ul>
</li>


<li <?php if($this->uri->segment(2)=='View_Event_Yajman' or $this->uri->segment(2)=='Add_Event_Yajman' or $this->uri->segment(2)=='Events' or $this->uri->segment(2)=='Events_list' or $this->uri->segment(2)=='Events_time_slot' or $this->uri->segment(2)=='EventsBooking'){ ?> class="active parent"<?php } else { ?> class="parent"<?php } ?>><a href="#"><span>Manage Events</span></a>
    <ul class="children">
        <li><a href="<?php echo base_url();?>pages/Events">Add Events</a></li>
        <li><a href="<?php echo base_url();?>pages/Events_list">View Events</a></li>
        <li><a href="<?php echo base_url();?>pages/Events_time_slot">Events Time Slots</a></li>
        <li><a href="<?php echo base_url();?>pages/Add_Event_Yajman">Yajman</a></li>
        <li><a href="<?php echo base_url();?>pages/EventsBooking">Events Booking</a></li>
    </ul>
</li>



<li <?php if($this->uri->segment(2)=='TempleBookingEnquiry'){ ?> class="active parent"<?php } else { ?> class="parent"<?php } ?>><a href="#"><span>Temple Booking Enquiry</span></a>
    <ul class="children">
        <li><a href="<?php echo base_url();?>pages/TempleBookingEnquiry">Temple Booking Enquiry</a></li>
    </ul>
</li>
 


         





             <li <?php if($this->uri->segment(2)=='BlockUserTimeSlot' or $this->uri->segment(2)=='Add_User' or $this->uri->segment(2)=='View_User'){ ?> class="active parent"<?php } else { ?> class="parent"<?php } ?>><a href="#"><span>Manage Staff</span></a>
                <ul class="children">
                    <li><a href="<?php echo base_url();?>pages/Add_User">Add User</a></li>
                    <li><a href="<?php echo base_url();?>pages/View_User">View Users</a></li>
                    
                </ul>
             </li>

              <li <?php if($this->uri->segment(2)=='View_Register_User'){ ?> class="active parent"<?php } else { ?> class="parent"<?php } ?>><a href="#"><span>Manage Registered Users</span></a>
                <ul class="children">
                 
                    <li><a href="<?php echo base_url();?>pages/View_Register_User">View Registered Users</a></li>
                    
                </ul>
             </li>




             <!--<li <?php if($this->uri->segment(2)=='services_list' or $this->uri->segment(2)=='services'or $this->uri->segment(2)=='request'){ ?> class="active parent"<?php } else { ?> class="parent"<?php } ?>><a href="#"><span>Manage Master</span></a>-->
             <!--   <ul class="children">-->
             <!--       <li><a href="<?php echo base_url();?>pages/Events">Add Events</a></li>-->
             <!--       <li><a href="<?php echo base_url();?>pages/Events_list">View Events</a></li>-->
             <!--   </ul>-->
             <!--</li>-->

             <!--<li <?php if($this->uri->segment(2)=='services_list' or $this->uri->segment(2)=='services'or $this->uri->segment(2)=='request'){ ?> class="active parent"<?php } else { ?> class="parent"<?php } ?>><a href="#"><span>Manage Reports</span></a>-->
             <!--   <ul class="children">-->
             <!--       <li><a href="<?php echo base_url();?>pages/Events">Add Events</a></li>-->
             <!--       <li><a href="<?php echo base_url();?>pages/Events_list">View Events</a></li>-->
             <!--   </ul>-->
             <!--</li>-->

 
  <li <?php if($this->uri->segment(2)=='Membership' or $this->uri->segment(2)=='Membership_list' or $this->uri->segment(2)=='TypeInterest'){ ?> class="active parent"<?php } else { ?> class="parent"<?php } ?>><a href="#"><span>Membership</span></a>
    <ul class="children">
        <li><a href="<?php echo base_url();?>pages/Membership">Add Membership</a></li>
        <li><a href="<?php echo base_url();?>pages/Membership_list">View Membership</a></li>
        <li><a href="<?php echo base_url();?>pages/TypeInterest">Volunteering Services Interest</a></li>
    </ul>
</li>
<li <?php if($this->uri->segment(2)=='Career'){ ?> class="active parent"<?php } else { ?> class="parent"<?php } ?>><a href="#"><span>Application</span></a>
    <ul class="children">
        <li><a href="<?php echo base_url();?>pages/Career">Career</a></li>
    </ul>
</li>
 

 <li<?php if($this->uri->segment(2)=='DonationSlab' or $this->uri->segment(2)=='DonationCategory' or $this->uri->segment(2)=='CreditDonation' ){ ?> class="active parent"<?php } else { ?> class="parent"<?php } ?>><a href="#">  <span> Donation</span></a>
    <ul class="children">
        <li><a href="<?php echo base_url();?>pages/DonationCategory">Category</a></li>
        <li><a href="<?php echo base_url();?>pages/CreditDonation">Donation  Records</a></li>
        
        <li><a href="<?php echo base_url();?>pages/DonationSlab">
             Donation Slab</a></li>
        
        
    </ul>
</li>



                 
<li <?php if($this->uri->segment(2)=='imageGalleryCategory' or $this->uri->segment(2)=='configuration_general' or $this->uri->segment(2)=='web_images' or  $this->uri->segment(2)=='imageGallery' or $this->uri->segment(2)=='manage_pages'){ ?> class="active parent"<?php } else { ?> class="parent"<?php } ?>><a href="#"> <span>Setting</span></a>
            <ul class="children">
                <li><a href="<?php echo base_url();?>pages/configuration_general">General</a></li>
                <li><a href="<?php echo base_url();?>pages/web_images">Manage Images</a></li>
                <li><a href="<?php echo base_url();?>pages/manage_pages">Manage Pages</a></li>
                <li><a href="<?php echo base_url();?>pages/imageGallery">Gallery</a></li>
                <li><a href="<?php echo base_url();?>pages/imageGalleryCategory">Gallery Category</a></li>

            <!-- <li><a href="<?php echo base_url();?>pages/news_n_press_media">News</a></li>
                <li><a href="<?php echo base_url();?>pages/testimonials">Testimonials</a></li>
                <li><a href="<?php echo base_url();?>pages/facilities">Facilities</a></li>
                <li><a href="<?php echo base_url();?>pages/how_we_work">How We Work</a></li>  -->            
            </ul>
        </li>

        <li><a href="<?php echo base_url('slider/add-slider');?>"> <span>Add Slider</span></a></li>


        <li><a href="<?php echo base_url();?>pages/logout"> <span>LogOut</span></a></li>
    </ul>
</div><!-- leftpanel -->
