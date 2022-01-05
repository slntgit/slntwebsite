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
        <title><?php echo $webconfig->site_name;?> Admin</title>
        <link rel="icon" href="<?=base_url();?>assets/favicon.png" sizes="32x32" />
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
        <link href="<?php echo base_url();?>assets/css/morris.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/select2.css" rel="stylesheet" />
		<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet" />
		<!-- include summernote css/js-->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<style>
    body {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #48263d;
    background-color: #ffefe2;
}
.headerwrapper {
    background-color: #351b2d;
    min-height: 60px;
    position: fixed;
    width: 100%;
    z-index: 1000;
}
.leftpanel .nav > li {
    margin: 0 1px 0 0;
    font-size: 12px;
    font-weight: 500;
    /* border-top: 1px solid #e7e7e7; */
    position: relative;
    border-bottom: 1px solid #ffefe2 !important;
}
.leftpanel .nav > li {
    margin: 0 1px 0 0;
    font-size: 12px;
    font-weight: 500;
    /* border-top: 1px solid #e7e7e7; */
    position: relative;
    border-bottom: 1px solid #ffefe2 !important;
    background: #48263d;
}

.leftpanel .nav > li > a {
    color: #f9b2b2;
    -moz-border-radius: 0;
    -webkit-border-radius: 0;
    font-weight:600;
    border-radius: 0;
    -moz-transition: all 0.2s ease-out 0s;
    -webkit-transition: all 0.2s ease-out 0s;
    transition: all 0.2s ease-out 0s;
    padding: 12px 15px;
}
.leftpanel .nav .children li a:hover, .leftpanel .nav > li.active > a, .leftpanel .nav > li.active > a:hover {
    color: #48263d !important;
    background-color: #f9b2b2 !important;
    font-weight: 600 !important;
}
.leftpanel .nav > li > a:hover, .leftpanel .nav > li > a:focus, .leftpanel .nav > li > a:active {
      color: #48263d !important;
    background-color: #f9b2b2 !important;
}
.btn{
    color: #f9b2b2 !important;
    background-color: #48263d !important;
    border-color: #48263d !important;
}

.btn:hover{
    color: #48263d !important;
    background-color: #f9b2b2 !important;
    border-color: #f9b2b2 !important;
}
.mainwrapper:before {
    background-color: #48263d !important
}
.headerwrapper .header-left {
    width: 230px;
    min-height: 60px;
    padding: 14px 15px;
    float: left;
    border-right: 1px solid rgb(255 239 226);
    background-color: rgb(255 239 226);
    position: relative;
}
.headerwrapper .header-left .menu-collapse {
    border-color: #351b2d;
    color: #351b2d;
}
.headerwrapper .header-left .menu-collapse:hover {
    border-color: #351b2d;
    color: #351b2d;
}
.mainpanel{
    min-height:489px!important;
}
.pageheader .breadcrumb li a i {
    color: #351b2d;
    font-size: 12px;
    font-weight: 600;
}
.pageheader .breadcrumb {
    margin: 0;
    padding: 0;
    background: none;
    font-weight: 600;
    font-size: 12px;
    color: #351b2d;
    line-height: 18px;
}
</style>

    </head>
    <body>        
        <header>
            <div class="headerwrapper">
                <div class="header-left">
                    <a href="<?php echo base_url();?>" class="logo">
                        <img style="max-width: 80px;" src="<?php echo base_url();?>../assets/setting/<?php echo $webconfig->company_logo;?>" alt="Logo">

                    </a>
                    <div class="pull-right">
                        <a href="#" class="menu-collapse">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                </div><!-- header-left -->                
                <div class="header-right">                    
                    <div class="pull-right"> 
						  
                                                
                        
                       
                        
                        <div class="btn-group btn-group-option">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-caret-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                              
							  <li><a href="<?php echo base_url();?>pages/change_password"><i class="glyphicon glyphicon-cog"></i> Change Password</a></li>
                              <li class="divider"></li>
                              <li><a href="<?php echo base_url();?>pages/logout"><i class="glyphicon glyphicon-log-out"></i>Sign Out</a></li>
                            </ul>
                        </div><!-- btn-group -->
                        
                    </div><!-- pull-right -->
                    
                </div><!-- header-right -->
                
            </div><!-- headerwrapper -->
        </header>
              <script type="text/javascript" >
    function cleanStringData(str) {
        var base_url="<?php echo base_url();?>";
        if (str.length == 0) {
            $("#search_id").val('');
            return;
        } else {
            $.ajax({
                type: "POST",
                url: base_url+'pages/cleanDataString/'+str,
                data: ({string: str}),
                success: function(data) {
                    $("#search_id").val(data);
                }
            });
            return;
        }
 
    }
</script>