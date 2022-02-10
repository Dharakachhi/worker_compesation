<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script type="text/javascript">
    setTimeout(function() {
        $(".msg_email").fadeOut("slow");
    }, 4000);

function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

jQuery.validator.addMethod("alpha", function(value, element) {
      return this.optional(element) || /^[A-Za-z ]+$/.test(value)
  // just ascii letters
},"Alpahbet only");

$.validator.addMethod(
    "Dateformat",
    function(value, element) {
        // put your own logic here, this is just a (crappy) example
        return value.match(/^\d\d?\/\d\d?\/\d\d\d\d$/);
    },
    "Please enter a date in the format mm/dd/yyyy."
);
  var state_injury = $('#new_york_state').val();
     $.validator.addMethod("valueNotEquals", function(value, element, arg){
      return state_injury !== value;
     });
    var mask = $('.security').inputmask({oncleared: function() {
         $("input").val("");
    }} );
    $("#newyork_avrage_pay").inputmask();
// $('#new_york_dob1').mask('99/99/9999');


jQuery(document).ready(function($) {
	$('.menu-toggler').click();
	$('.employee_notice_cls').change(function() {
        if ($(this).val() == "1") {
            $('#notice_yes_div').show();
            $('.date_notice_yesdiv').show();
        }else{
            $('#notice_yes_div').hide();
            $('.date_notice_yesdiv').hide();
        }
     });
    $('.climant_info_cls').change(function() {
        if ($(this).val() == "1") {
            $('#have_cliement_info_div_id').show();
        }else{
            $('#have_cliement_info_div_id').hide();
        }
     });
    $('.was_employee_work_cls').change(function() {
        if ($(this).val() == "0") {
            $('#why_was_emp_there_div').show();
        }else{
            $('#why_was_emp_there_div').hide();
        }
     });
     // $('.security').keyup(function() {
     //    if ($(this).val().length <= 0) {
     //        $('.why_security').show();
     //    }else{
     //        $('.why_security').hide();
     //    }
     // });
    $('.did_anyone_seen_happen_cls').change(function() {
        if ($(this).val() == "1") {
            $('#gives_name_div').show();
        }else{
            $('#gives_name_div').hide();
        }
     });
    $('.was_an_object_cls').change(function() {
        if ($(this).val() == "1") {
            $('#what_was_it_div').show();
        }else{
            $('#what_was_it_div').hide();
        }
     });
    $('.was_injury_vehicle_cls').change(function() {
        if ($(this).val() == "1") {
            $('#was_vehicale_div').show();
        }else{
            $('#was_vehicale_div').hide();
        }
     });
    $('.did_death_cls').change(function() {
        if ($(this).val() == "1") {
            $('.did_death_div').show();
        }else{
            $('.did_death_div').hide();
        }
     });
     $('.any_one_treated_cls').change(function() {
        if ($(this).val() == "0" || $(this).val() == "2") {
            $('#doctore_treated_div').hide();
        }else{
            $('#doctore_treated_div').show();
        }
     });
     $('.doctore_previos_treated_cls').change(function() {
        if ($(this).val() == "0") {

            $('#doctore_previos_treated_div').hide();
        }else{

            $('#doctore_previos_treated_div').show();
        }
     });
     $('.emp_stop_work_cls').change(function() {
        if ($(this).val() == "0") {
            $('#on_what_date_div').hide();
        }else{
            $('#on_what_date_div').show();
        }
     });
     $('.has_emp_stop_work_cls').change(function() {
        if ($(this).val() == "0") {
            $('.has_emp_stop_work_div').hide();
        }else{
            $('.has_emp_stop_work_div').show();
        }
     });
    var emp_notice_cls = $('input[name="new_york[has_employee_notice]"]:checked', '#new_york_form_id').val();
    if (emp_notice_cls == "1") {
        $('#notice_yes_div').show();
        $('.date_notice_yesdiv').show();
    }else{
        $('#notice_yes_div').hide();
        $('.date_notice_yesdiv').hide();
    }
    var emp_claimant_info = $('input[name="new_york[given_claimant_information]"]:checked', '#new_york_form_id').val();
    if (emp_claimant_info == "1") {
        $('#have_cliement_info_div_id').show();
    }else{
        $('#have_cliement_info_div_id').hide();
    }
    var emp_where_location = $('input[name="new_york[location_where_worked]"]:checked', '#new_york_form_id').val();
    if (emp_where_location == "0") {
        $('#why_was_emp_there_div').show();
    }else{
        $('#why_was_emp_there_div').hide();
    }
    var did_any_see_happne = $('input[name="new_york[anyone_see_injury]"]:checked', '#new_york_form_id').val();
    if (did_any_see_happne == "1") {
        $('#gives_name_div').show();
    }else{
        $('#gives_name_div').hide();
    }
    var was_object = $('input[name="new_york[was_an_object]"]:checked', '#new_york_form_id').val();
    if (was_object == "1") {
        $('#what_was_it_div').show();
    }else{
        $('#what_was_it_div').hide();
    }
    var user_on_vehicale = $('input[name="new_york[was_the_injury_vehicle]"]:checked', '#new_york_form_id').val();
    if (user_on_vehicale == "1") {
        $('#was_vehicale_div').show();
    }else{
        $('#was_vehicale_div').hide();
    }
    var did_any_death = $('input[name="new_york[did_the_death]"]:checked', '#new_york_form_id').val();
    if (did_any_death == "1") {
        $('.did_death_div').show();
    }else{
        $('.did_death_div').hide();
    }
    var treted_injury = $('input[name="new_york[is_still_treated]"]:checked', '#new_york_form_id').val();
    if (treted_injury == "0" || treted_injury == '2') {
        $('#doctore_treated_div').hide();
    }else{
        $('#doctore_treated_div').show();
    }
    var treted_injury = $('input[name="new_york[did_anothre_work_injury]"]:checked', '#new_york_form_id').val();
    if (treted_injury == "0") {
        $('#doctore_previos_treated_div').hide();
    }else{
        $('#doctore_previos_treated_div').show();
    }
    var did_emp_stop_work = $('input[name="new_york[did_stop_work]"]:checked', '#new_york_form_id').val();
    if (did_emp_stop_work == "0") {
        $('#on_what_date_div').hide();
    }else{
        $('#on_what_date_div').show();
    }
    var has_emp_return_work = $('input[name="new_york[has_return_to_work]"]:checked', '#new_york_form_id').val();
    if (has_emp_return_work == "0") {
        $('.has_emp_stop_work_div').hide();
    }else{
        $('.has_emp_stop_work_div').show();
    }
     $('.new_york_addition_pay').click(function() {
        console.log($(this).val());
        if ($(this).val() == "1") {
            $('#describ').show();
        }else if($(this).val() == "0"){
            $('#describ').hide();
        }
     });


    // function validate_newyork(valid_place = "true"){
        // console.log(valid_place);
    $('#new_york_form_id').validate({ // initialize the plugin
        focusInvalid: false,
        invalidHandler: function(form, validator) {
            if (!validator.numberOfInvalids())
                return;
            $('html, body').animate({
                scrollTop: $(validator.errorList[0].element).offset().top
            }, 1000);
        },
        rules: {
            "new_york[full_name]": {
                required: true,
                alpha:true,
            },
            "new_york[state_injury]":{
                required:true,
                // valueNotEquals: "",
            },
            "new_york[work_stop_date]":{
                required:true,
            },
            "new_york[social_security_num]":{
                // digits:true,
                minlength: 11,
                maxlength: 11,
                required: true,
            },
            "new_york[gender]": {
                required: true,
            },
            "new_york[discipline]": {
                required: true,
            },
            "new_york[facility_name]": {
                required: true,
            },
            "new_york[began_work]": {
                required: true,
            },
            "new_york[time_of_injury]": {
                required: true,
            },
            "new_york[where_did_the_injury]": {
                required: true,
            },
            "new_york[location_where_worked]": {
                required: true,
            },
            "new_york[why_employee_there]": {
                required: function (element) {
                    if($("#new_york_was_this_location_where_the_emoloyee_normal_worked_option_2").is(':checked')){
                        return true;
                    }
                    else
                    {
                        return false;
                    }
                }
            },
            "new_york[employee_supervisor]": {
                required: true,
            },
            "new_york[supervisor_see_injury]": {
                required: true,
            },
            "new_york[what_employee_doing]": {
                required: true,
            },
            "new_york[how_did_the_injury]": {
                required: true,
            },
            "new_york[list_body_part_affected]": {
                required: true,
            },
            "new_york[was_an_object]": {
                required: true,
            },
            "new_york[did_the_death]": {
                required: true,
            },
            "new_york[death_date]": {
                required: function (element) {
                    if($("#new_york_did_the_injury_in_death_option_1").is(':checked')){
                        return true;
                    }
                    else
                    {
                        return false;
                    }
                }
            },
            "new_york[info_nearest_relative]": {
                required: function (element) {
                    if($("#new_york_did_the_injury_in_death_option_1").is(':checked')){
                        return true;
                    }
                    else
                    {
                        return false;
                    }
                }
            },
            "new_york[was_the_injury_vehicle]": {
                required: true,
            },
            "new_york[return_work_date_has_employee]": {
                required: function (element) {
                    if($("#new_york_has_the_employee_returned_to_work_option_1").is(':checked')){
                        return true;
                    }
                    else
                    {
                        return false;
                    }
                }
            },
            "new_york[did_stop_work]": {
                required: true,
            },
            "new_york[job_title]": {
                required: true,
            },
            "new_york[what_type_activities_work]": {
                required: true,
            },
            "new_york[address]":{
                required:true,
            },
            "new_york[contact_no]": {
                required: true,
                // digits: true,
                 minlength:12,
                maxlength:12,
            },
            "new_york[preferred_contact_no]": {
                // digits: true,
                minlength:12,
                maxlength:12,
            },
            "new_york[preferred_email]": {
                email:true,
            },
            "new_york[dob]":{
                required:true,
                date:true,
                Dateformat:true,
            },
            "new_york[date_hire]":{
                required:true,
            },
            "new_york[addition_phone]":{
                minlength:12,
                maxlength:12,
            },
        },
         messages: {
            "new_york[social_security_num]": {
                maxlength  : "Please enter no more than 9 characters.",
                minlength : "Please enter at least 9 characters.",
            },
            "new_york[preferred_contact_no]":{
                maxlength : "Please enter no more than 10 characters.",
                minlength : "Please enter at least 10 characters.",
            },
             "new_york[contact_no]":{
                maxlength : "Please enter no more than 10 characters.",
                minlength : "Please enter at least 10 characters.",
            },
             "new_york[addition_phone]":{
                maxlength : "Please enter no more than 10 characters.",
                minlength : "Please enter at least 10 characters.",
            }
        },
         highlight: function(element) {
        $(element).parent().addClass('has-error');
      },
      unhighlight: function(element) {
        $(element).parent().removeClass('has-error');
      },
      errorElement: 'span',
      errorClass: 'error',
      errorPlacement: function(error, element) {
        if(element){
            if (element.parent('.input-group').length) {
                // console.log(valid_place,"sec if")
              error.insertAfter(element.parent());
            } else {
                // console.log(valid_place,"sec else ")
              error.insertAfter(element);
            }
        }
      },
    });
});

// $(".data-reset").on("click",function(){
//         $(this).parent('div').find(".form-control").datepicker('setDate', null);
//     })
dateremove_onclose(".date_began_work", "#began_work_id");
dateremove_onclose(".date_notice_date", "#notice_date");
dateremove_onclose(".date_first_treatment", "#first_treatment");
dateremove_onclose(".date_return_work_date", "#return_work_date");
dateremove_onclose(".date_work_date", "#work_date");
dateremove_onclose(".date_hire_newyork", "#date_hire_newyork");
dateremove_onclose(".date_addition_date", "#addition_date");

 $( window ).on( "load", function() {
        $("#date_hire_newyork-error").css('display','none !important');
        $( "#new_york_form_id" ).valid();
        $(".error").hide();
          // if ($( "#new_york_form_id" ).valid(error_placement)) {
          //   // alert("Form is valid, no missing field");
          // }
    });

 /* $("#social_security_num").on('keyup, blur', function (){
    var security_len = $('#social_security_num').val().length;
    console.log(security_len);
     if ($('#social_security_num').val() != ""  &&  security_len == 11){
        $(".why_security").hide();
        // return true;
     }else {
        $(".why_security").show();
        return false
     }
  })
*/

$("#generate_newyork_btn").on("click",function(){
    $(".email_btn").show();
    $(".preview_btn").show();
})




// #on submit button click and select2 chnage event hide error msg
  $("#new_york_submit,#discipline,#new_york_state,#new_york_dob1,#phone_num_newyork,#contact_no,#last_phone_number_newyork,#date_hire_newyork,#return_date,#work_date,#return_work_date").on('change keyup', function (){
    if($(this).attr("id") == 'new_york_submit'){
          if( $( "#new_york_form_id" ).valid()){
            $.blockUI({
                  target: "#new_york_form_id",
                  css: { backgroundColor: 'rgba(100, 100, 100, 0.5)', color: '#fff',border:"0px"},
              });
              var url = '<?php echo base_url('Insurance_manage?q=true'); ?>';
              setTimeout(function(){ window.location = url;}, 8000);
          } else {
             $(".error").show();
             $(".why_security").hide();
          }
    }

    if($(this).attr("id") == 'return_work_date'){
    var from = $("#return_work_date").val();
        var to = $("#work_date").val();
        if(Date.parse(from) > Date.parse(to)){
            $(".min_date_error").show();
            $(".same_date").hide();
             $('html, body').animate({
                        scrollTop: $("#on_what_date_div").offset().top
                    }, 1000);
            $(':input[type="submit"]').prop('disabled', true);
           // alert("Invalid Date Range");
        }else if(Date.parse(to) == Date.parse(from)){
            $(".same_date").show();
            $(".max_date_error").hide();
            $(".min_date_error").hide();
            $(':input[type="submit"]').prop('disabled', true);
        } else{
            $(".min_date_error").hide();
            $(".same_date").hide();
            $(':input[type="submit"]').prop('disabled', false);
           // alert("Valid date Range");
        }
    }
        if($(this).attr("id") == 'work_date'){
         var from = $("#return_work_date").val();
        var to = $("#work_date").val();
        if(Date.parse(to) < Date.parse(from)){
            $(".max_date_error").show();
            $(".same_date").hide();
            $('html, body').animate({
                            scrollTop: $("#on_what_date_div").offset().top
                        }, 1000);
            $(':input[type="submit"]').prop('disabled', true);
           // alert("Invalid Date Range");
        }else if(Date.parse(to) == Date.parse(from)){
            $(".same_date").show();
              $(".min_date_error").hide();
              $(".max_date_error").hide();
            $(':input[type="submit"]').prop('disabled', true);
        } else{
            $(".max_date_error").hide();
            $(".same_date").hide();
            $(':input[type="submit"]').prop('disabled', false);
           // alert("Valid date Range");
        }
    }
        // console.log($(this).attr("id"));
      // $(".why_security").hide();
     // var was_obj = $('.was_an_object_cls').val();
     // if((was_obj == '1') && ($(".what_was").val() == '')){ $("#object-error").show(); } else {  $("#object-error").hide(); }
     if($(this).attr("id") == 'new_york_dob1'){
        date_required($("#new_york_dob1").val(),"new_york_dob1-error");
    }
    if($(this).attr("id") == 'date_hire_newyork'){
        date_required($("#date_hire_newyork").val(),"date_hire_newyork-error","#date_hire_newyork");
    }
    if($(this).attr("id") == 'discipline'){
        select_required($("#discipline").val(),"discipline-error","#discipline");
    }
    if($(this).attr("id") == 'new_york_state'){
        select_required($("#new_york_state").val(),"new_york_state-error","#new_york_state");
    }
    if($(this).attr("id") == 'phone_num_newyork'){
        onkeyup_phone_fomat($("#phone_num_newyork").val(),"#phone_num_newyork");
    }
    if($(this).attr("id") == 'contact_no'){
        onkeyup_phone_fomat($("#contact_no").val(),"#contact_no");
    }
    if($(this).attr("id") == 'last_phone_number_newyork'){
        onkeyup_phone_fomat($("#last_phone_number_newyork").val(),"#last_phone_number_newyork");
    }

});




$("#new_york_submit").on("click",function(){
  if( $( "#new_york_form_id" ).valid()){
     $.blockUI({
          target: "#new_york_form_id",
          css: { backgroundColor: 'rgba(100, 100, 100, 0.5)', color: '#fff',border:"0px"},
      });
      var url = '<?php echo base_url('Insurance_manage?q=true'); ?>';
      setTimeout(function(){ window.location = url;}, 5000);
  }
})


// #on load pr some input hide if yes or blank // #on load pr security and phone format set // #phone number format set on keyup
 $( window ).on( "load", function() {
        remove_highlight_phone($("#phone_num_newyork").val().length,"#phone_num_newyork");
        remove_highlight_phone($("#contact_no").val().length,"#contact_no");
        remove_highlight_phone($("#last_phone_number_newyork").val().length,"#last_phone_number_newyork");
        $('#describ').hide();
        $('#doctore_previos_treated_div').hide();
        // $('#doctore_treated_div').hide();
        var being_treatment = $(".being_treatment_class").val();
        // var work_injury = $(".another_work_injury").val();
        if($.trim(being_treatment) == '1'){
            $("#doctore_treated_div").show()
        }else if($.trim(being_treatment) == '' || $.trim(being_treatment) == '0'){
            $("#doctore_treated_div").hide();
        }

        var doctore_treated = $(".another_work_injury").val();
        // console.log(doctore_treated);
        if($.trim(doctore_treated) == '1'){
            $("#doctore_previos_treated_div").show()
        }else if($.trim(doctore_treated) == '' || $.trim(doctore_treated) == '0'){
            $("#doctore_previos_treated_div").hide();
        }

        var describ = $(".newyork_addition_pay").val();
        // console.log(describ);
        if(describ == '' ){
            $("#describ").hide();
        }else if(describ == '1'){
            $("#describ").show();
        }


            // $(".has_emp_stop_work_div").hide();
         var has_stop_work = $(".return_work_option_newyork").val();
         console.log(has_stop_work);
        if($.trim(has_stop_work) == ''){
            $(".has_emp_stop_work_div").hide();
        }else if($.trim(has_stop_work) == '1'){
            $(".has_emp_stop_work_div").show();
        }

        onload_social_format($("#social_security_num").val(),"#social_security_num");
        onload_phone_format($("#phone_num_newyork").val(),"#phone_num_newyork");
        onload_phone_format($("#contact_no").val(),"#contact_no");
        onload_phone_format($("#last_phone_number_newyork").val(),"#last_phone_number_newyork");
        // date_required($("#date_hire_newyork").val(),"date_hire_newyork-error","#date_hire_newyork");
    });

          $('#social_security_num').on('input', function (event) {
            this.value = this.value.replace(/[^0-9-]/g, '');
          });

          $("#new_york_dob1").keyup(function(){
            mdata($("#new_york_dob1").val(),"#new_york_dob1")

          })

    // #on keyup pr security format set
  $('#social_security_num').keyup(function() {

        var val = this.value.replace(/[^\d\*]/g, '');
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
        this.value = newVal;
        // console.log(newVal,this.value);
      });

    $("#work_date").on('change',function(){
        var on_date = $(this).val();
        var what_date = $("#").val();
    })



// #dob date
$('input[name="new_york[dob]"]').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
    autoUpdateInput: false, //disable default date
    autoApply:true,
     locale: {
          cancelLabel: 'Clear'
      },
  }, function(start, end, label) {
    // var years = moment().diff(start, 'years');

  });
$('#new_york_dob1').on('apply.daterangepicker', function (ev, picker) {
        $(this).val(picker.startDate.format('MM/DD/YYYY'));
        $("#new_york_dob1").parent().removeClass('has-error');
         $("#new_york_dob1-error").hide();
    });

// #end dob here

// # date validation


$("#return_work_date").on("change",function(){
     var from = $("#return_work_date").val();
    var to = $("#work_date").val();
    if(Date.parse(from) > Date.parse(to)){
        $(".min_date_error").show();
         $(".same_date").hide();
         $('html, body').animate({
                    scrollTop: $("#on_what_date_div").offset().top
                }, 1000);
        $(':input[type="submit"]').prop('disabled', true);
       // alert("Invalid Date Range");
    }else if(Date.parse(to) == Date.parse(from)){
        $(".same_date").show();
        $(".max_date_error").hide();
        $(".min_date_error").hide();
        $(':input[type="submit"]').prop('disabled', true);
    }else if(Date.parse(from) < Date.parse(to)){
        $(".same_date").hide();
        $(".max_date_error").hide();
        $(".min_date_error").hide();
         $(':input[type="submit"]').prop('disabled', false);
    }
    else{
         $(".same_date").hide();
        $(".min_date_error").hide();
        $(':input[type="submit"]').prop('disabled', false);
       // alert("Valid date Range");
    }
})

$("#work_date").on("change",function(){
     var from = $("#return_work_date").val();
    var to = $("#work_date").val();
    if(Date.parse(to) < Date.parse(from)){
        $(".max_date_error").show();
        $(".same_date").hide();
         $('html, body').animate({
                    scrollTop: $("#on_what_date_div").offset().top
                }, 1000);
        $(':input[type="submit"]').prop('disabled', true);
       // alert("Invalid Date Range");
    }else if(Date.parse(to) == Date.parse(from)){
        $(".same_date").show();
          $(".min_date_error").hide();
          $(".max_date_error").hide();
        $(':input[type="submit"]').prop('disabled', true);
    }else if(Date.parse(to) > Date.parse(from)){
        $(".same_date").hide();
        $(".min_date_error").hide();
        $(".max_date_error").hide();
         $(':input[type="submit"]').prop('disabled', false);
    } else{
        $(".max_date_error").hide();
        $(".same_date").hide();
        $(':input[type="submit"]').prop('disabled', false);
       // alert("Valid date Range");
    }
})


// #set phone number format on keyup and blur
/*$(".phone_num_newyork").on('blur keyup', function (){ 
   if ($(this).val().length > 0) {      
      var temp = $(this).val().match(/\d{3}(?=\d{2,4})|\d+/g).join(""); 
           if ($.isNumeric(parseFloat(temp))) { 
                // $(".phone_digit").hide(); 
               $("#newyork_contact_phone_number").val(temp.match(/\d{3}(?=\d{2,4})|\d+/g).join("-"));
           } 
   }
    alpha_disable("#newyork_contact_phone_number"); 
});*/


/*// #on load pr phone number format set
$( window ).on( "load", function() {
    security_val = $("#social_security_num").val();
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
        $("#social_security_num").val(security_val);
      });
*/
/*// #date validation
var what_date_val = $("#work_date").val();
 var stop_date = moment();
 $('input[name="new_york[work_stop_date]"]').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
     autoApply:true,
    minYear: 1901,
    maxYear: parseInt(moment().format('YYYY'),10),
    minDate: moment(),
  },  function(start, end, label) {
    if(what_date_val >= stop_date){
         $(".min_date_error").show();
    }
    console.log(what_date_val,stop_date)
    stop_date = start.format("MM-DD-YYYY");
    var years = moment().diff(start, 'years');
    // console.log(start,end,label);
    // console.log(stop_date);

    // sat(stop_date)
  });*/

/*// function sat(mindate = moment()) {
     var stop_date = moment();
     mindate = moment();
    $('#return_work_date').daterangepicker({
        singleDatePicker: true,
        autoApply:true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format('YYYY'),10),
        minDate: mindate,
      }, function(start, end, label) {
        current_date = start.format("MM-DD-YYYY");
        var years = moment().diff(start, 'years');
        console.log(mindate,current_date,start,stop_date,current_date >= stop_date);
        // if(current_date >= mindate){
        //      $(".min_date_error").show();
        //  }if(current_date <= mindate){
        //     console.log("Aa");
        //      $(".min_date_error").hide();
        //  }
      });

// }*/
// # end validatino
</script>