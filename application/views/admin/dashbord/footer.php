    <div class="">
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
</div>
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo base_url('assets/theme/') ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/theme/') ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/theme/') ?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/theme/') ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/theme/') ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/theme/') ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url('assets/theme/') ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url('assets/theme/') ?>assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/theme/') ?>assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/theme/') ?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/theme/') ?>assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <!-- datepiker -->
        <script src="<?php echo base_url('assets/theme/') ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <!-- datetimepicker -->
        <script src="<?php echo base_url('assets/theme/'); ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/theme/'); ?>assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <!-- datatable -->
        <script src="<?php echo base_url('assets/theme/') ?>assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/theme/') ?>assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/theme/') ?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/theme/');?>/assets/pages/scripts/table-datatables-responsive.min.js" type="text/javascript"></script>
        <!-- ajax -->
        <script src="<?php echo base_url('assets/theme/') ?>assets/pages/scripts/table-datatables-ajax.min.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script type="text/javascript" src="<?php echo base_url('assets/theme/') ?>/assets/global/plugins/moment.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/theme/') ?>/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js"></script>
        <!-- JQUERY VALIDATION -->
        <script src="<?php echo base_url('assets/theme/'); ?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <!-- toast notificaion -->
        <script src="<?php echo base_url('assets/theme/'); ?>assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
        <!-- select 2 -->
        <script src="<?php echo base_url('assets/theme/'); ?>assets/pages/scripts/components-select2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/theme/'); ?>assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
         <script src="<?php echo base_url('assets/theme/'); ?>assets/layouts/layout/scripts/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
         <script src="<?php echo base_url('assets/theme/'); ?>/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
          <script src="<?php echo base_url('assets/theme/'); ?>assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
          <script src="<?php echo base_url('assets/theme/'); ?>assets/pages/scripts/ui-blockui.min.js" type="text/javascript"></script>
          <script src="<?php echo base_url('assets/theme/'); ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    </body>
</html>
<script type="text/javascript">
    // date picker
    $('.date-picker').datepicker({format: 'mm/dd/yyyy',"autoclose": true,todayBtn: true,
            todayHighlight: true});
    $('.date-picker-today').datepicker({format: 'mm/dd/yyyy'});
    var date = new Date();
    var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
    $('.date-picker-today').datepicker('setDate', today);
    $('.date-picker-dob').datepicker({format: 'mm/dd/yyyy',"autoclose": true,todayBtn: true,
            todayHighlight: true,changeMonth: true, changeYear: true,});

    // date-time picker
    $(".form_meridian_datetime").datetimepicker({
        format:"mm/dd/yyyy - HH:ii P",
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        isRTL:App.isRTL(),
        showMeridian:!0,
        autoclose:!0,
        pickerPosition:App.isRTL()?"bottom-right":"bottom-left",
        todayBtn:!0,
    });


    // Show email popup

 $("#generate_newyork_pdf,#generate_newjersey_pdf,#generate_maryaland_pdf,#generate_connecticut_pdf,#generate_pennsylvenia_pdf").click(function(){
    // setTimeout(function () {
        var id = $(this).data('id');
        var state = $(this).data('state');
        var current_url = $("#prev_url").val();
       $('#responsive').modal('show');
        // console.log(id);

        $.ajax({
            url: "<?php echo base_url()?>/Insurance_manage/view_email_body",
            method: "POST",
            data: {
                id: id,
                state: state,
                current_url: current_url,
            },
             dataType: 'HTML',
            // contentType: false,
            // processData: false,
            success: function(response) {
                $(".modal-body").html(response);
            }
        });   //}, 5000);
    });



    $('#excel').on('click', function(){
        console.log("Sdf");
    var chk = $('.old_chk').val();
    var injury_date_from = $('#injury_date_from').val();
    var injury_date_to = $('#injury_date_to').val();
    var state = $('#state').val();
    // var status = $('#status').val();
    // var submitted_date = $('#submitted_date').val();
    var lname = $('#lname').val();
    var fname = $('#fname').val();
    console.log(chk);
    //  if(check_array.length > 0){
         $.ajax({
                url: '<?php echo base_url('Insurance_manage/export_excel'); ?>',
                method: "POST",
                data: { chk : chk,
                        injury_date_from:injury_date_from,
                        injury_date_to:injury_date_to,
                        lname:lname,
                        fname:fname,
                        state:state,
                        // status:status,
                        // submitted_date:submitted_date
                 },
                dataType: 'json',
                success: function(response) {
                    // console.log(response);
                    window.open(response,"_blank");

                }
            });
     //   }else{
     //    return confirm('Please select Record');
     // }
    });

  /* array_chk = [];
 $(document).delegate('#get_checked_po', 'click', function() {
     // var rows, checked;
    checked = $(this).prop('checked');
     // rows = $('#empTable').find('tbody tr');
   //  $.each(rows, function() {
   //    var checkbox = $($(this).find('td').eq(0)).find('input').prop('checked', checked);
   // });
   console.log(checked);
   $(".employee_id").each(function(index, el) {
    $(this).prop("checked", checked);
    if($.inArray($(this).val(), array_chk) !== -1) {
        array_chk.splice(array_chk.indexOf($(this).val()), 1);
    } else {
        array_chk.push($(this).val());
    }
    var chk_val = $('.old_chk').val(JSON.stringify(array_chk));
 });
});*/
    // all table checkbox select
  /* $(document).delegate('#get_checked', 'click', function() {
   var rows, checked;
   rows = $('#empTable').find('tbody tr');
   checked = $(this).prop('checked');
   console.log(checked);
   $.each(rows, function() {
      var checkbox = $($(this).find('td').eq(0)).find('input').prop('checked', checked);
   });
});*/
/*array_chk = [];
   $(".employee_id").each(function(index, el) {
    $(this).prop("checked", checked);
    if($.inArray($(this).val(), array_chk) !== -1) {
        array_chk.splice(array_chk.indexOf($(this).val()), 1);
    } else {
        array_chk.push($(this).val());
    }
    var chk_val = $('.old_chk').val(JSON.stringify(array_chk));
    // console.log(chk_val.val());
        // if($.inArray(el, hidden_data) !== -1) {
            // console.log($(this).eq(index).prop("checked", checked))
            //   $("input[type=checkbox][value="+ el +"]").parent().addClass("checked");
            // $(":checkbox[value=4]").prop("checked","true");
        // } else {
        //     console.log(hidden_data, 'false')
        //     $("input[type=checkbox][value="+ el +"]").prop("checked", false);
        // }
    })

 });*/


 var check_array= [];
 var array_chk = [];
 $(document).delegate('#get_checked_po', 'click', function() {
     // var rows, checked;
    checked = $(this).prop('checked');

     // rows = $('#empTable').find('tbody tr');
   //  $.each(rows, function() {
   //    var checkbox = $($(this).find('td').eq(0)).find('input').prop('checked', checked);
   // });
   // console.log(checked);
   $(".employee_id").each(function(index, el) {
    $(this).prop("checked", checked);
    // console.log()
    if (!checked && ($.inArray($(this).val(), check_array) !== -1)) {
        check_array.splice(check_array.indexOf($(this).val()), 1);
        // console.log("not_chek_",check_array);
    }
    // console.log("2nd conition",($(this).prop("checked") && ($.inArray($(this).val(), check_array) === -1)));
    if (checked && ($.inArray($(this).val(), check_array) === -1)) {
        check_array.push($(this).val());
        // console.log("cheked",check_array);
    }
    // if($.inArray($(this).val(), array_chk) !== -1) {
    //     array_chk.splice(array_chk.indexOf($(this).val()), 1);
    // } else {
    //     array_chk.push($(this).val());
    // }
    $('.old_chk').val(JSON.stringify(check_array));
 });
});


 function date_required(date,error_id,input_id = null){
    if(date == ''){
        $("#"+error_id).show();
    } else {
        $(input_id).parent().removeClass('has-error');
        $("#"+error_id).hide();
        $(input_id).removeClass("error")
    }
}

// remove phone number valition on highlight
function remove_highlight_phone(input,id_error){
    if(input == 10){
        // console.log("input");
        $(id_error).parent().removeClass('has-error');
         $(id_error+"-error").hide();
    }
}

// remove Social number on highlight
function remove_highlight_social(input,id_error){
    if(input == 9){
        $(id_error).parent().removeClass('has-error');
         $(id_error+"-error").hide();
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

function dateremove_onclose(close_btn_cls, date_id){
         $(close_btn_cls).on('click',function(){
            $(date_id).val("");
         });
    }

function onload_social_format(input,id_replace){
    security_val = $(id_replace).val();
        var val = security_val.replace(/[^\d\*]/g, '');
        var newVal = '';
        var sizes = [3, 2, 4];
        var maxSize = 10;

        for (var i in sizes) {
          if (val.length > sizes[i]) {
            newVal += val.substr(0, sizes[i]) + '-';
            val = val.substr(sizes[i]);
          } else {
            break;
          }
        }

        newVal += val;
        security_val = newVal;
        $(id_replace).val(security_val);
}


function select_required(selectinput,hide_error_msgid,input_id = null){
    if (selectinput != "") {
        $('#'+hide_error_msgid).hide();
        $(input_id).parent().removeClass('has-error');
        return true;
    }
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


$('.AlphabetsOnly').keypress(function (e) {
        var regex = new RegExp(/^[a-zA-Z\s]+$/);
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else {
            e.preventDefault();
            return false;
        }
    });
</script>