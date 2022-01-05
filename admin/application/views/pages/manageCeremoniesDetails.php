<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="<?=base_url();?>"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>Manage Pooja Details</li>
				</ul>
				<h4>  <?=$puja_data->description_charge;?></h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
						<div class="">
						 	<div class="jumbotron text-center">
			  				<h2> <?=$puja_data->description_charge;?></h2>
						  <a href="<?=base_url();?>pages/Ceremonies_Samagri/<?=$this->uri->segment(3);?>"><span class="btn btn-default btn-lg"> Samagri</span></a>
						  <a href="<?=base_url();?>pages/Ceremonies_BhogPrasad/<?=$this->uri->segment(3);?>"><span class="btn btn-info btn-lg"> Bhog / Prasad</span></a>
						 

						  </div>
												 
						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
	
</div>