        <div class="page-footer">
            <div class="page-footer-inner"> 2016 &copy; Chaim Pollak
                <a href="#">For Tender Touch Rehab Services</a> &nbsp;|&nbsp;
                <a href="#">Purchase Metronic!</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
    </div>
    <!-- BEGIN CORE PLUGINS -->
    <script src="<?php echo base_url('assets/theme/') ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/theme/'); ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/theme/'); ?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/theme/'); ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/theme/'); ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/theme/'); ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <!-- Date time picker -->
    <script src="<?php echo base_url('assets/theme/'); ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/theme/'); ?>assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <!-- JQUERY VALIDATION -->
    <script src="<?php echo base_url('assets/theme/'); ?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <!-- END JQUERY VALIDATION -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="<?php echo base_url('assets/theme/'); ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?php echo base_url('assets/theme/'); ?>assets/pages/scripts/form-samples.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="<?php echo base_url('assets/theme/'); ?>assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/theme/'); ?>assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
    <!-- select2 -->
    <script src="<?php echo base_url('assets/theme/'); ?>assets/pages/scripts/components-select2.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/theme/'); ?>assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    <!-- timepicker -->
    <script src="<?php echo base_url('assets/theme/'); ?>assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/theme/'); ?>assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/theme/'); ?>assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>

    <script type="text/javascript">
jQuery(document).ready(function($) {

function status_change_fun(id) {
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "500",
        "hideDuration": "1000",
        "timeOut": "7000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    status = $('#select_status_'+id).val();
    $.ajax({
        url: '<?php echo base_url('Insurance_manage/change_status'); ?>',
        dataType: 'json',
        type: 'POST',
        data: {status: status,id:id},
    })
    .done(function(data) {
        if (data.status == true) {
            toastr["success"](data.name+" Status Updated!");            
        }else{
            toastr["error"]("Somethin Went Wrong!");
        }        
    })
    .fail(function() {
        toastr["error"]("Something Went Wrong!");
    });

    }
});

function select_required(selectinput,hide_error_msgid){
    if (selectinput != "") {
        $('#'+hide_error_msgid).hide();
        return true;
    }
}


 $(".email_emp").change(function () {    
        var inputvalues = $(this).val();    
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;    
        if(!regex.test(inputvalues)){    
            $(".email-error").show();
            return regex.test(inputvalues);    
        }  else {
             $(".email-error").hide();
        }  
    });  

    function date_required(date,error_id,input_id = null){
    if(date == ''){
        $("#"+error_id).show();
    } else {
        $("#"+error_id).hide();
        $(input_id).removeClass("error")
    }
} 


    // phone number format set
function onload_phone_format(input,id_replace){
    // console.log(input);
     if (input.length > 0) {      
      var temp = input.match(/\d{3}(?=\d{2,4})|\d+/g).join(""); 
           if ($.isNumeric(parseFloat(temp))) { 
                // $(".phone_digit").hide(); 
               $(id_replace).val(temp.match(/\d{3}(?=\d{2,4})|\d+/g).join("-"));
           } 
   }
    alpha_disable(id_replace); 
}

function onkeyup_phone_fomat(input,id_replace){
    alpha_disable(id_replace); 
    $(id_replace).on('keyup', function (){ 
   if (input.length > 0) {      
      var temp = $(this).val().match(/\d{3}(?=\d{2,4})|\d+/g).join(""); 
           if ($.isNumeric(parseFloat(temp))) { 
                // $(".phone_digit").hide(); 
               $(id_replace).val(temp.match(/\d{3}(?=\d{2,4})|\d+/g).join("-"));
           } 
   }
});
}

function alpha_disable(input){
    // console.log(input);
   $(input).keypress(function(e){
     var keyCode = e.which;
    /*
      8 - (backspace)
      32 - (space)
      48-57 - (0-9)Numbers
    */
 
    if ( (keyCode != 8 || keyCode ==32 ) && (keyCode < 48 || keyCode > 57)) { 
      return false;
    }
  });
}
</script>
</body>