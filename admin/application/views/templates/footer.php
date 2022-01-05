    <footer class="section footer-classic context-dark bg-image" style="     ">
        <div class="row no-gutters social-container">
          <div class="col-sm-12">
              <a class="social-inner" href="#" style="color: #f9b2b2;">
                  <span class="icon mdi mdi-facebook"></span><span>copyright  &copy;<?=date('Y');?> all rights reserved</span>
                </a>
        </div>
        </div>
      </footer>


</div><!-- mainwrapper -->
</section>
<style>
    @media only screen and (max-width: 676px) {
      .footer-classic {
        background: #48263d;
        width: 100%;
      }
        .show-left .leftpanel {
            position: fixed;
            top: 0;
            bottom: 0;
            height: 100%;
            overflow-y: auto;
            z-index: 999;
        }
        .leftpanel {
            width: 230px;
            position: absolute;
            top: 61px !important;
            left: 0;
            background-color: #48263d;
        }
    }
    @media only screen and (min-width: 678px) {
      .footer-classic {
        background: #48263d;
        width: 83%;
        margin-left: 17%;
      }
      
    }
</style>

<script>
    $(document).ready(function(){
    $(".alphabet").keypress(function(event){
        var inputValue = event.charCode;
        if(!(inputValue >= 65 && inputValue <= 123) && (inputValue != 32 && inputValue != 0)){
            event.preventDefault();
        }
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
          .context-dark, .bg-gray-dark, .bg-primary {
    color: rgba(255, 255, 255, 0.8);
}

.footer-classic a, .footer-classic a:focus, .footer-classic a:active {
    color: #ffffff;
} 
.social-inner {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    padding: 23px;
    font: 900 13px/1 "Lato", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.5);
}
.social-container .col {
    border: 1px solid rgba(255, 255, 255, 0.1);
}
.nav-list li a:before {
    content: "\f14f";
    font: 400 21px/1 "Material Design Icons";
    color: #4d6de6;
    display: inline-block;
    vertical-align: baseline;
    margin-left: -28px;
    margin-right: 7px;
    opacity: 0;
    visibility: hidden;
    transition: .22s ease;
}
      </style>
        <script src="<?php echo base_url();?>assets/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/modernizr.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/pace.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/retina.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.cookies.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.sparkline.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/morris.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/raphael-2.1.0.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap-wizard.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/select2.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/custom.js"></script>
        <script src="<?php echo base_url();?>assets/js/dashboard.js"></script>
		
		
		
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>	
		<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
		
		 <script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
<!--END Scripts-->

<script type="text/javascript">
    var preventalert='\n\nPlease do not check "Prevent this page from creating additional dialogs."\n\n'
</script>
		 
		<script>
		$(document).ready(function() {
    $('#example').DataTable();
} );
		</script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$( function() {
    $( ".datepicker" ).datepicker();
} );
</script>

<script>
$( function() {
    $( ".timepicker" ).datepicker();
} );
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.min.js"></script>
<style type="text/css">  @import url("//cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css");
.btn-group,
.multiselect {
  width: 100%;
}
.multiselect {
  text-align: left;
  padding-right: 32px;
  overflow: hidden;
  text-overflow: ellipsis;
}
.multiselect .caret {
  right: 12px;
  top: 45%;
  position: absolute;
}
.multiselect-container.dropdown-menu {
    min-width: 0px;
}
.multiselect-container>li>a>label {
    white-space: normal;
    padding: 5px 15px 5px 35px;
}
.multiselect-container > li > a > label > input[type="checkbox"] {
    margin-top: 3px;
}
</style>
<script type="text/javascript">
    $(document).ready(function() {
  $('#example-getting-started').multiselect({
    numberDisplayed: 1,
    includeSelectAllOption: true,
    allSelectedText: 'All Topics selected',
    nonSelectedText: 'No Topics selected',
    selectAllValue: 'all',
    selectAllText: 'Select all',
    unselectAllText: 'Unselect all',
    onSelectAll: function(checked) {
      var all = $('#example-getting-started ~ .btn-group .dropdown-menu .multiselect-all .checkbox');
      all
      // get all child nodes including text and comment
        .contents()
        // iterate and filter out elements
        .filter(function() {
          // check node is text and non-empty
          return this.nodeType === 3 && this.textContent.trim().length;
          // replace it with new text
        }).replaceWith(checked ? this.unselectAllText : this.selectAllText);
    },
    onChange: function() {
        debugger;
      var select = $(this.$select[0]);
      var dropdown = $(this.$ul[0]);
      var options = select.find('option').length;
      var selected = select.find('option:selected').length;
      var all = dropdown.find('.multiselect-all .checkbox');
      all
      // get all child nodes including text and comment
        .contents()
        // iterate and filter out elements
        .filter(function() {
          // check node is text and non-empty
          return this.nodeType === 3 && this.textContent.trim().length;
          // replace it with new text
        }).replaceWith(options === selected ? this.options.unselectAllText : this.options.selectAllText);
    }
  });
  // $("#form").submit(function(e) {
  //   e.preventDefault();
  //   alert($(this).serialize());
  // });
});</script>
</body>
</html>