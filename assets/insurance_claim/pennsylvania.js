jQuery(document).ready(function($) {

    jQuery.validator.addMethod("alpha", function(value, element) {
      return this.optional(element) || /^[A-Za-z ]+$/.test(value)
  // just ascii letters
},"Alpahbet only");

	$('#pennsylvania_form_id').validate({ // initialize the plugin
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
            else if (element.parents('div').hasClass('checkbox') || element.parents('div').hasClass('md-checkbox')) {
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
        },
        rules: {
            "pennsylvania[first_name]": {
                required: true,
                alpha:true,
            },
            "pennsylvania[date_of_injury]":{
                required:true,
            },
            "pennsylvania[last_name]": {
                required: true,
            },
            "pennsylvania[gender]": {
                required: true,
            },
            "pennsylvania[marital_status]": {
                required: true,
            },
            "pennsylvania[discipline]": {
                required: true,
            },
            "pennsylvania[facility_name]": {
                required: true,
            },
            "pennsylvania[job_title]": {
                required: true,
            },
            "pennsylvania[contact_phone_number]": {
                // digits: true,
                minlength:12,
                maxlength:12,
            },
            "pennsylvania[employee_phone_number]":{
                // digits: true,
                minlength:12,
                maxlength:12,
            },
            "pennsylvania[type_of_injury]": {
                required: true,
            },
            "pennsylvania[part_body_affected]": {
                required: true,
            },
            "pennsylvania[were_safeguards]": {
                required: true,
            },
            "pennsylvania[where_used_safaguard]": {
                required: true,
            },
            "pennsylvania[how_injury_health_condition]": {
                required: true,
            },
            "pennsylvania[hospital_or_off_site_treatment_checkboxs][]": {
                required: true,
            },
            "pennsylvania[zip_code]":{
                digits:true,
            },
            "pennsylvania[witness_phone_number]":{
                // digits: true,
                minlength:12,
                maxlength:12,
            },
            "pennsylvania[person_phone]":{
                // digits: true,
                minlength:12,
                maxlength:12,
            }
        },
         /* errorPlacement: function(error, element) {
            if (element.attr("name") == "pennsylvania[hospital_or_off_site_treatment_checkboxs][]") {
             error.insertAfter("#required_msg");
          } else {
             error.insertAfter(element);
          }
        },*/
        messages: {
            "pennsylvania[person_phone]": {
                minlength : "Please enter at least 10 characters.",
                maxlength : "Please enter at least 10 characters.",

                },
            "pennsylvania[witness_phone_number]": {
                minlength  : "Please enter at least 10 characters.",
                maxlength : "Please enter no more than 10 characters.",
            },
            "pennsylvania[contact_phone_number]": {
                minlength  : "Please enter at least 10 characters.",
                maxlength : "Please enter no more than 10 characters.",
            },
             "pennsylvania[employee_phone_number]": {
                minlength  : "Please enter at least 10 characters.",
                maxlength : "Please enter no more than 10 characters.",
            },
        },
    });
});

 function filter_input_function(event) {

            var key = event.charCode ? event.charCode : event.keyCode ? event.keyCode : 0;

            // 8 = backspace, 9 = tab, 13 = enter, 35 = end, 36 = home, 37 = left, 39 = right, 46 = delete
            if (key == 8 || key == 9 || key == 13 || key == 35 || key == 36|| key == 37 || key == 39 || key == 46) {

              if ($.browser.mozilla) {

                // if charCode = key & keyCode = 0
                // 35 = #, 36 = $, 37 = %, 39 = ', 46 = .

                if (event.charCode == 0 && event.keyCode == key) {
                  return true;
                }

              }
        }
    }


$("#pennsylvania_time_of_injury").click(function(){
    $("#injury_clock").click();
})

$("#pennsylvania_submit,#pennsylvania_discipline,#pennsylvania_type_of_injury,#date_of_injury_penn,#contact_penn1,#phone_number_penn2,#employee_phone_number,#contact_phone_number2_penn").on('change click keyup', function (){
    select_required($("#pennsylvania_discipline").val(),"pennsylvania_discipline-error");
    select_required($("#pennsylvania_type_of_injury").val(),"pennsylvania_type_of_injury-error");
    date_required($("#date_of_injury_penn").val(),"date_of_injury_penn-error","#date_of_injury_penn");
    onload_phone_format($("#contact_penn1").val(),"#contact_penn1");
    onload_phone_format($("#phone_number_penn2").val(),"#phone_number_penn2");
    onload_phone_format($("#employee_phone_number").val(),"#employee_phone_number");
    onload_phone_format($("#contact_phone_number2_penn").val(),"#contact_phone_number2_penn");
});

  $("#connecticut_time_of_injury").click(function(){
    $("#time_selct").click();
})

// Date validation ( day missed )
 $("#last_work_date_penn").on("change",function(){
     var from = $("#last_work_date_penn").val();
    var to = $("#return_work_date_penn").val();
    // console.log(from,to);
    if(Date.parse(from) > Date.parse(to)){
        $(".min_date_error").show();
         $(".same_date_conne").hide();
         $('html, body').animate({
                    scrollTop: $("#last_work_date_penn").offset().top
                }, 1000);
        $(':input[type="submit"]').prop('disabled', true);
       // alert("Invalid Date Range");
    }else if(Date.parse(to) == Date.parse(from)){
        $(".same_date_conne").show();
        $(".max_date_error").hide();
        $(".min_date_error").hide();
        $(':input[type="submit"]').prop('disabled', true);
    }else if(Date.parse(from) < Date.parse(to)){
        $(".same_date_conne").hide();
        $(".max_date_error").hide();
        $(".min_date_error").hide();
        $(':input[type="submit"]').prop('disabled', false);
    }
    else{
         $(".same_date_conne").hide();
        $(".min_date_error").hide();
        $(':input[type="submit"]').prop('disabled', false);
       // alert("Valid date Range");
    }
})

$("#return_work_date_penn").on("change",function(){
     var from = $("#last_work_date_penn").val();
    var to = $("#return_work_date_penn").val();
    if(Date.parse(to) < Date.parse(from)){
        // console.log("fir");
        $(".max_date_error").show();
        $(".same_date_conne").hide();
         $('html, body').animate({
                    scrollTop: $("#return_work_date_penn").offset().top
                }, 1000);
        $(':input[type="submit"]').prop('disabled', true);
       // alert("Invalid Date Range");
    }else if(Date.parse(to) == Date.parse(from)){
        // console.log("sec");
        $(".same_date_conne").show();
          $(".min_date_error").hide();
          $(".max_date_error").hide();
        $(':input[type="submit"]').prop('disabled', true);
    }else if(Date.parse(to) > Date.parse(from)){
        // console.log("third");
        $(".same_date_conne").hide();
        $(".min_date_error").hide();
        $(".max_date_error").hide();
         $(':input[type="submit"]').prop('disabled', false);
    }
    else{
        console.log("for");
        $(".max_date_error").hide();
        $(".same_date_conne").hide();
        $(':input[type="submit"]').prop('disabled', false);
       // alert("Valid date Range");
    }
})