 <style>
 div.main-site[_ngcontent-ngq-c159] {
    padding: 98px 0 0;
    margin-top: 100px;
}
</style>

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="breadcrumb__title">Latest Vacancy</h2>
                    <ul class="breadcrumb__list">
                        <li class="active__list-item"><a href="<?php echo base_url()?>">home</a></li>
                        <li class="active__list-item">pages</li>
                        <li>Vacancy List</li>
                    </ul>
                    
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<section class="about-area about-area2">
    <div class="container">	
		<div class="row">
			<div class="tab">
				<button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">London</button>
				<button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
				<button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
			</div>

			<div id="London" class="tabcontent">
			  <h3>London</h3>
			  <p>London is the capital city of England.</p>
			</div>

			<div id="Paris" class="tabcontent">
			  <h3>Paris</h3>
			  <p>Paris is the capital of France.</p> 
			</div>

			<div id="Tokyo" class="tabcontent">
			  <h3>Tokyo</h3>
			  <p>Tokyo is the capital of Japan.</p>
			</div>
		</div>
        <div class="row">
            <div class="col-lg-9 col-xs-12">
                <div class="section-heading">                    
                    <h2 class="section__title">Job Description </h2>                   
                    <p class="section__desc">
                       To meet farmers and to guide them to maximise their productivity and income by use of right products and technology along with the knowledge of all schemes for the farmers .be a friend to farmers to vailable all the times with all resources.

                    </p>
					<h2 class="section__title">Salary -30,000/- </h2>
                    <p class="section__desc">
                        Under given some data and details of Indian farmer income and agriculture economy .
                    </p>
					
					<p class="section__desc">Location of the job is rural india where daily expenses will lesser than urban /metro city local candidate also have an option to stay near with their loved ones /family.</p>
					<p class="section__desc">Number of openings 300</p>
					<p class="section__desc">Freshers are highly welcome </p>
					<p class="section__desc">Minimum qualification graduate</p>
					<p class="section__desc">Age No Bar </p>
					
					
                    <a href="login.php" class="btn btn-danger btn-lg">Apply Now</a>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-3  col-xs-12">
                <div class="feature-item feature-item2 aab" style="">
                    <div class="hover-overlay"></div>
                    <i class="la la-paper-plane-o feature__icon"></i>
                    <h3 class="feature__title" style=" margin-bottom: 30px;">Sample paper  </h3>                    
                    <a href="#" style="color: #fff;" class="feature__btn">Download Now</a>
                </div><!-- end feature-item -->
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end about-area -->


<?php include('footer.php'); ?>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>