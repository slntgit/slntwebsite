<!DOCTYPE html>
<html lang="en">    
<?php 
            $replyt=1;
            $this->db->select('*');
            $this->db->from('configuration_general');
            $this->db->where('id', $replyt);
            $set = $this->db->get();
            $webconfig = $set->row();
?>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Login:: Admin</title>
		
	 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link href="<?php echo base_url();?>assets/css/style.default.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/bootstrap-override.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/weather-icons.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/jquery-ui-1.10.3.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/animate.delay.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/toggles.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/pace.css" rel="stylesheet">
        <style type="text/css">
            .panel {
    margin-bottom: 20px;
    background-color: #48263d !important;
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
}
.signin {
    background-color: #00ffe8b5;
    /*background-image: url('<?= base_url();?>assets/admin-background.jpg');*/
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

h4,p{
    color: #fd8f8f;
}
.text-white{
    color: #fd8f8f;
}
.btn-success {
    color: #48263d;
    background-color: #fd8f8f;
    border-color: #fd8f8f;
    font-weight: 600;
    font-size: 15px;
}
.btn-success:hover {
    color: #48263d;
    background-color: #ffefe2;
    border-color: #ffefe2;
    font-weight: 600;
    font-size: 15px;
}
.panel-signin, .panel-signup {
    margin: 61px auto 0 auto;
}
        </style>
    </head>

    <body class="signin" style="background-color: #ffefe2;">      
        
        <section>            
            <div class="panel panel-signin" style=" margin-bottom: 20px;
    
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    box-shadow: 0 1px 1px rgba(0, 0, 0, .05);">
                <div class="panel-body">
                    <div class="logo text-center">
                        <img src="<?php echo base_url();?>../assets/setting/<?php echo $webconfig->company_logo;?>" alt="Please Wait.." style="max-width: 200px;" >
                    </div>
                    <br />
                    <h4 class="text-center mb5">Welcome Admin</h4>
                    <p class="text-center">Sign in to your account</p>
                    <p style="font-size: 11px !important; color: red;"><?php echo validation_errors(); ?></p>
                    <div class="mb30"></div>
                    
                    <?php echo form_open('pages/home/login'); ?>
					<p class="text-danger"><?= $this->session->flashdata('failiur');?></p>
                        <div class="input-group mb15">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" name="loginid" id="loginid" placeholder="Enter User ID">
                        </div><!-- input-group -->
                        <div class="input-group mb15">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" class="form-control" id="loginpassword" name="loginpassword" placeholder="Enter Password">
                        </div><!-- input-group -->
                        <div class="input-group mb15">
                            <div class="row">
                                <div class="col-sm-10">
                                    <?php
                                        $captcha=$this->Captcha->captchaCode();
                                    ?>
                                    <p id="image_captcha"><?= $captcha['image'];?></p>
                                </div>
                                <div class="col-sm-2">
                                    <a href="javascript:void(0);"  class="captcha-refresh input-group-addon" title="Generate New captcha"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <input type="text" name="captcha" id="captcha" class="form-control" placeholder="Enter captcha code..">
                          
                        </div>
<!-- 
                        <div class="row">
                            <div class="col-sm-12">
                                <a href="<?=base_url();?>pages/forgotPassword" class="pull-right">Forgot Password</a>
                            </div>
                        </div> -->
                      <!--    <div class="row">
                            <div class="col-sm-12">
                               <label class="text-white">
                                    <input type="checkbox" name="remeber"> Remember Me
                            </label>
                            </div>
                        </div> -->

                        <br />
                        <div class="clearfix">
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Login <i class="fa fa-angle-right ml5"></i></button>
                            </div>
                        </div>  
                        <input type="hidden" value="<?=$captcha['word'];?>" name="xcap" />
                    </form>
                    
                </div><!-- panel-body -->                
            </div><!-- panel -->
            
        </section>



        <script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/modernizr.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/pace.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/retina.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.cookies.js"></script>
        <script src="<?php echo base_url();?>assets/js/custom.js"></script>
        <script>
       $(document).ready(function(){
           $('.captcha-refresh').on('click', function(){
               window.location.href=window.location.href;
                /*var loader = "<p>Please wait......</>";
                $('#image_captcha').html(loader);
               $.get('<?php echo base_url().'pages/refresh'; ?>', function(data){
                   $('#image_captcha').html(data);
               }); */
           });
       });
   </script>
    <script type="text/javascript">
    /*
   $(document).ready(function(){
   setInterval(function(){
                var loader = "<p>Please wait......</>";
                $('#image_captcha').html(loader);
               $.get('<?php echo base_url().'pages/refresh'; ?>', function(data){
                   $('#image_captcha').html(data);
               });
    }, 25000);
  }); */
  </script>
    </body>

</html>


