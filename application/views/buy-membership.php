<style type="text/css">
    .inner_banner[_ngcontent-gko-c162] {
        position: relative;
        height: 30vh;
        background-color: #48263d;
        background-image: url(<?=base_url();?>assets/script/slnt_banner.8c737315d88f1d38dab3.jpg);
        background-position: 50%;
        background-size: cover;
        background-repeat: no-repeat;
    }
    .inner_header {
        font-size: 58px !important;
        font-weight: 500;
        color: #ffefe2;
        text-shadow: 2px 10px 10px rgba(0,0,0,.78);
    }
</style>
<link href="<?=base_url();?>assets/membership.css" rel="stylesheet" id="bootstrap-css">
<div>
    <app-landing-donation _ngcontent-ngq-c159="" _nghost-ngq-c157="">
        <section class="section-gap banner-section-inner aboutUs-page">
            <div class="overlay"></div>
            <div class="container">
                <section class="header-title d-flex justify-content-center align-content-center">
                    <h1 class="title">Membership</h1>
                </section>
            </div>
        </section>
 <section class="membershipSection">
    <div class="container">
        <div class="row">

<?php if ($this->uri->segment(2)=='recover') { ?>
 
<?php } else { ?>
    <div class="wrapperBoard">
 


<div class="tab-content">
<!-- Login & MemberShip Plan  -->
 

<?php if (!isset($_COOKIE["login_user"])) { 
    $_SESSION['user']['last']='Membership/buyNow/'.$this->uri->segment(3);
    redirect('Login');
} else {
            if ($this->uri->segment(2)=='buyNow') { 
                require_once'user_membership.php';
            } 
            if ($this->uri->segment(2)=='MembershipStep2') { 
                require_once'membership-step-2.php';
            }

            if ($this->uri->segment(2)=='MembershipStep3') { 
                    require_once'membership-step-3.php';
            }


            if ($this->uri->segment(2)=='MembershipApplicationPreview') { 
                    require_once'membership-application-preview.php';
            }


            if ($this->uri->segment(2)=='MembershipPrintApplication') { 
                require_once'membership-print-application.php';
            }

            if ($this->uri->segment(2)=='PayNow') {
                 require_once'dashboard/paypal-payment-member.php';
            }

            if ($this->uri->segment(2)=='MembershipPay') {

                 require_once'onliine-email-invoice.php';
            }

            if ($this->uri->segment(2)=='Membership_success') { 
                require_once'membership_success.php';
            }
?>

 
<?php 
if ($this->uri->segment(2)=='Thank-You') {
    require_once'thank-you.php';
} 
            } ?>
                    <div class="clearfix"></div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</section>
   </app-landing-donation>
</div>
<style type="text/css">
  
</style>
<?php if($this->uri->segment(2)=='Thank-You' or $this->uri->segment(2)=='Preview-and-Payment'){ ?>
<style type="text/css">
    
    #invoice{
    padding: 30px;
}

.invoice {
    position: relative;
    background-color: #FFF;
    min-height: 680px;
    padding: 15px
}

.invoice header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #3989c6
}

.invoice .company-details {
    //text-align: right
}

.invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}

.invoice .invoice-to .to {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .invoice-details {
    text-align: left
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
    color: #3989c6
}

.invoice main {
    padding-bottom: 50px
}

.invoice main .thanks {
    margin-top: -100px;
    font-size: 2em;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #3989c6
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px
}

.invoice table td,.invoice table th {
    padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff
}

.invoice table th {
    white-space: nowrap;
    font-weight: 400;
    font-size: 16px
}

.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #3989c6;
    font-size: 1.2em
}

.invoice table .qty,.invoice table .total,.invoice table .unit {
    text-align: right;
    font-size: 1.2em
}

.invoice table .no {
    color: #fff;
    font-size: 1.6em;
    background: #3989c6
}

.invoice table .unit {
    background: #ddd
}

.invoice table .total {
    background: #3989c6;
    color: #fff
}

.invoice table tbody tr:last-child td {
    border: none
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
    border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
    border-top: none
}

.invoice table tfoot tr:last-child td {
    color: #3989c6;
    font-size: 1.4em;
    border-top: 1px solid #3989c6
}

.invoice table tfoot tr td:first-child {
    border: none
}

.invoice footer {
    width: 100%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
    padding: 8px 0
}

@media print {
    .invoice {
        font-size: 11px!important;
        overflow: hidden!important
    }

    .invoice footer {
        position: absolute;
        bottom: 10px;
        page-break-after: always
    }

    .invoice>div:last-child {
        page-break-before: always
    }
}
</style>
<script type="text/javascript">
     $('#printInvoice').click(function(){
            Popup($('.invoice')[0].outerHTML);
            function Popup(data) 
            {
                window.print();
                return true;
            }
        });
</script>

<?php } ?>
 
<script type="text/javascript">
    $(function(){
$('a[title]').tooltip();
});


$(function() {

    $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

});

</script>
                
                