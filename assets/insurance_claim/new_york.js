
jQuery(document).ready(function($) {
    $('#doctore_treated_div').hide();
     var state_injury = $('#new_york_state').val();
     $.validator.addMethod("valueNotEquals", function(value, element, arg){
      return state_injury !== value;
     },"This Field is required");


     jQuery.validator.addMethod("alpha", function(value, element) {
      return this.optional(element) || /^[A-Za-z ]+$/.test(value)
  // just ascii letters
},"Alpahbet only");

      $.validator.addMethod('selectcheck', function (value) {
        if(value != ''){
            return false;
        }else {
            return true;
        }
        // return (value != '');
    }, "This item is  required");

    $(document).delegate('#new_york_is_the_employee_still_being_treated_for_this_injury_option_3', 'change', function() {

//
    if($(this).val() == "2"){
        $('#doctore_treated_div').hide();
    }
    });
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
    $('.did_anyone_seen_happen_cls').change(function() {
        if ($(this).val() == "1") {
            $('#gives_name_div').show();
        }else{
            $('#gives_name_div').hide();
        }
     });
    $('.was_an_object_cls').change(function() {
        var what_object = $(this).val();
        if ($(this).val() == "1") {
            $("#object-error").show();
            $('#what_was_it_div').show();
        }else{
            object_sts = '0';
            $('#what_was_it_div').hide();
            $("#object-error").hide();
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
        if ($(this).val() == "0") {
            $('#doctore_treated_div').hide();
        }else{
            $('#doctore_treated_div').show();
        }
     });
     $('.doctore_previos_treated_cls').change(function() {
        if ($(this).val() == "0") {
            // console.log("Dfdgdfg");
            $('#doctore_previos_treated_div').hide();
        }else{
            // console.log("cxcxc");
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
    var emp_where_location = $('input[name="new_york[was_the_injury_vehicle]"]:checked', '#new_york_form_id').val();
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
    if (treted_injury == "0") {
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

    jQuery.validator.setDefaults({
        debug: false,
        success: "valid"
    });
    $('#new_york_form_id').validate({
        highlight: function (element, errorClass) {
            $(element).removeClass(errorClass);
          },
          unhighlight: function (element, errorClass) {
            $(element).removeClass(errorClass);
          },
          // Different components require proper error label placement
          errorPlacement: function (error, element) {
            // Styled checkboxes, radios, bootstrap switch
            if (element.parents('div').hasClass("checker") || element.parents('div').hasClass("choice") || element.parent().hasClass('bootstrap-switch-container')) {
              if (element.parents('label').hasClass('checkbox-inline') || element.parents('div').hasClass('md-radio')) {
                error.appendTo(element.parent().parent().parent().parent());
              }
              else {
                error.appendTo(element.parent().parent().parent().parent().parent());
              }
            }
            // Unstyled checkboxes, radios
            else if (element.parents('div').hasClass('checkbox') || element.parents('div').hasClass('md-radio')) {
              error.appendTo(element.parent().parent().parent());
            }

            // Input with icons and Select2
            else if (element.parents('div').hasClass('has-feedback') || element.hasClass('select2-hidden-accessible')) {
              error.appendTo(element.parent());
            }
            // Inline checkboxes, radios
            else if (element.parents('label').hasClass('checkbox-inline') || element.parents('div').hasClass('md-radio')) {
              error.appendTo(element.parent().parent());
            }
            // Input group, styled file input
            else if (element.parent().hasClass('uploader') || element.parents().hasClass('input-group')) {
              error.appendTo(element.parent().parent());
            }
            else {
              error.insertAfter(element);
            }
        },
        focusInvalid: false,
        invalidHandler: function(form, validator) {
            if (!validator.numberOfInvalids())
                return;
            $('html, body').animate({
                scrollTop: $(validator.errorList[0].element).offset().top
            }, 1000);
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
            "new_york[gender]": {
                required: true,
            },
            "new_york[discipline]": {
                required: true,
                // valueNotEquals: "default",
                // selectcheck:true,
            },
           "new_york[state_injury]":{
                // valueNotEquals: "default",
                required:true,
            },
           /* "new_york[social_security_num]": {
                // digits: true,
            },*/
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
             "new_york[whos_vehicle]": {
                required: function (element) {
                    if($("#new_york_was_injury_by_vihicle_option_1").is(':checked')){
                        return true;
                    }
                    else
                    {
                        return false;
                    }
                }
            },
            "new_york[return_work_date]": {
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
            "new_york[work_stop_date]": {
                required:true,
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
            "new_york[contact_no]": {
                // required: true,
                // alphanumeric: true,
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
            "new_york[address]":{
                // required:true,
            },
            "new_york[was_the_injury_vehicle]":{
                required:true,
            },
            "new_york[was_the_injury_vehicle]":{
                required:true,

            },
            // "new_york[what_was_object]":{
            //     object_sts : '1',
            // }
        },
             messages: {
            "new_york[preferred_contact_no]":{
                maxlength : "Please enter no more than 10 characters.",
                minlength : "Please enter at least 10 characters.",
            },
             "new_york[contact_no]":{
                maxlength : "Please enter no more than 10 characters.",
                minlength : "Please enter at least 10 characters.",
            }
        }
    });
});
$("#new_york_submit,#discipline,#new_york_state,#date_injury_1,#newyork_began_work,#new_york_what_date2,#new_york_what_date3,#newyork_contact_phone_number,#newyork_prefre_contact,#new_york_what_date2,#new_york_what_date3").on('change click keyup', function (){

     var was_obj = $('.was_an_object_cls').val();
     if(was_obj == '1'){ $("#object-error").show(); } else {  $("#object-error").hide(); }
    date_required($("#date_injury_1").val(),"date_injury_1-error","#date_injury_1");
    date_required($("#newyork_began_work").val(),"newyork_began_work-error","#newyork_began_work");
    date_required($("#new_york_what_date2").val(),"new_york_what_date2-error","#new_york_what_date2");
    date_required($("#new_york_what_date3").val(),"new_york_what_date3-error","#new_york_what_date3");
    select_required($("#discipline").val(),"discipline-error");
    select_required($("#new_york_state").val(),"new_york_state-error");
    onkeyup_phone_fomat($("#newyork_contact_phone_number").val(),"#newyork_contact_phone_number");
    onkeyup_phone_fomat($("#newyork_prefre_contact").val(),"#newyork_prefre_contact");
});



$("#newyork_was_obj").on('keyup', function (){
    $("#object-error").hide();
    })


$( window ).on( "load", function() {
    $("#on_what_date_div").hide();
    $(".has_emp_stop_work_div").hide();
    $("#has_emp_stop_work_div").hide();
});

$("#new_york_what_date2").on("change",function(){
     var from = $("#new_york_what_date2").val();
    var to = $("#new_york_what_date3").val();
    // console.log(from,to);
    if(Date.parse(from) > Date.parse(to)){
        console.log('f');
        $(".min_date_error").show();
         $(".same_date").hide();
         $('html, body').animate({
                    scrollTop: $("#on_what_date_div").offset().top
                }, 1000);
        $(':input[type="submit"]').prop('disabled', true);
       // alert("Invalid Date Range");
    }else if(Date.parse(to) == Date.parse(from)){
        $(".same_date").show();
        console.log('s');
        $(".max_date_error").hide();
        $(".min_date_error").hide();
        $(':input[type="submit"]').prop('disabled', true);
    }else if(Date.parse(from) < Date.parse(to)){
        console.log('t');
        $(".same_date").hide();
        $(".max_date_error").hide();
        $(".min_date_error").hide();
         $(':input[type="submit"]').prop('disabled', false);
    }
    else{
        console.log('for');
         $(".same_date").hide();
        $(".min_date_error").hide();
        $(':input[type="submit"]').prop('disabled', false);
       // alert("Valid date Range");
    }
})

$("#new_york_what_date3").on("change",function(){
     var from = $("#new_york_what_date2").val();
    var to = $("#new_york_what_date3").val();
    // console.log(from,to);
    if(Date.parse(to) < Date.parse(from)){
        console.log("1");
        $(".max_date_error").show();
        $(".same_date").hide();
         $('html, body').animate({
                    scrollTop: $("#on_what_date_div").offset().top
                }, 1000);
        $(':input[type="submit"]').prop('disabled', true);
       // alert("Invalid Date Range");
    }else if(Date.parse(to) == Date.parse(from)){
        console.log("2");
        $(".same_date").show();
          $(".min_date_error").hide();
          $(".max_date_error").hide();
        $(':input[type="submit"]').prop('disabled', true);
    }else if(Date.parse(to) > Date.parse(from)){
        console.log("3");
        $(".same_date").hide();
        $(".min_date_error").hide();
        $(".max_date_error").hide();
         $(':input[type="submit"]').prop('disabled', false);
    } else{
        console.log("4");
        $(".max_date_error").hide();
        $(".same_date").hide();
        $(':input[type="submit"]').prop('disabled', false);
       // alert("Valid date Range");
    }
})


