jQuery(document).ready(function($) {

    jQuery.validator.addMethod("alpha", function(value, element) {
      return this.optional(element) || /^[A-Za-z ]+$/.test(value)
  // just ascii letters
},"Alpahbet only");

	$('#connecticut_form_id').validate({ // initialize the plugin
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
            else if (element.parents('div').hasClass('checkbox') || element.parents('div').hasClass('md-checkbox-inline')) {
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
            "connecticut[last_name]": {
                required: true,
                alpha:true,
            },
            "connecticut[first_name]": {
                required: true,
                alpha:true,
            },
            "connecticut[gender]": {
                required: true,
            },
            "connecticut[discipline]": {
                required: true,
            },
            "connecticut[facility_name]": {
                required: true,
            },"connecticut[state_injury]": {
                required: true,
            },
            "connecticut[job_title]": {
                required: true,
            },
            "connecticut[date_of_injury]": {
                required: true,
            },

            "connecticut[began_work]": {
                required: true,
            },
            "connecticut[time_of_injury]": {
                required: true,
            },
            "connecticut[date_notified]": {
                required: true,
            },
            "connecticut[date_disability_began]": {
                required: true,
            },
            "connecticut[work_stop_date]": {
                required: true,
            },
            "connecticut[activity_engaed]": {
                required: true,
            },
            "connecticut[did_injury_employer_permises]": {
                required: true,
            },
            "connecticut[type_of_injury]": {
                required: true,
            },
            "connecticut[part_body_affected]": {
                required: true,
            },
            "connecticut[how_injury_health_condition]": {
                required: true,
            },
            "connecticut[hospital_or_off_site_treatment_checkboxs][]": {
                required: true,
            },
            "connecticut[phone_number]": {
                // digits: true,
                minlength:12,
                maxlength:12,
            },
            "connecticut[middle_name]":{
                required:true,
            },
            "connecticut[town_of_injury]":{
                required:true,
            },
        },
       /* errorPlacement: function(error, element) {
            if (element.attr("name") == "connecticut[hospital_or_off_site_treatment_checkboxs][]") {
             error.insertAfter("#checkbox-msg");
          } else {
             error.insertAfter(element);
          }
        },*/
         messages: {

            "connecticut[emp_phone_number]": {
                minlength : "Please enter at least 10 characters.",
                maxlength : "Please enter at least 10 characters.",

                },
        },
    });
});


$("#connecticut_submit,#connecticut_discipline,#connecticut_state_hire,#connecticut_job_title,#date_of_injury_connecticut,#connecticut_time_of_injury,#time_of_occurance_connecticut,#date_notified_connecticut,#disability_began_conne,#last_work_date_conne,#phone_number_conne1,#option_time_of_injurY_conne").on('change click keyup', function (){
    select_required($("#connecticut_discipline").val(),"connecticut_discipline-error");
    select_required($("#connecticut_state_hire").val(),"connecticut_state_hire-error");
    select_required($("#connecticut_job_title").val(),"connecticut_job_title-error");
    select_required($("#option_time_of_injurY_conne").val(),"option_time_of_injurY_conne-error");
    date_required($("#date_of_injury_connecticut").val(),"date_of_injury_connecticut-error","#date_of_injury_connecticut");
    date_required($("#connecticut_time_of_injury").val(),"connecticut_time_of_injury-error","#connecticut_time_of_injury");
    date_required($("#time_of_occurance_connecticut").val(),"time_of_occurance_connecticut-error","#time_of_occurance_connecticut");
    date_required($("#date_notified_connecticut").val(),"date_notified_connecticut-error","#date_notified_connecticut");
    date_required($("#disability_began_conne").val(),"disability_began_conne-error","#disability_began_conne");
    date_required($("#last_work_date_conne").val(),"last_work_date_conne-error","#last_work_date_conne");
    onload_phone_format($("#phone_number_conne1").val(),"#phone_number_conne1");
});


      $("#connecticut_time_of_injury").click(function(){
    $("#time_selct").click();
})


 $("#last_work_date_conne").on("change",function(){
     var from = $("#last_work_date_conne").val();
    var to = $("#return_work_date_connecticut").val();
    // console.log(from,to);
    if(Date.parse(from) > Date.parse(to)){
        $(".min_date_error").show();
         $(".same_date_conne").hide();
         $('html, body').animate({
                    scrollTop: $("#last_work_date_conne").offset().top
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

$("#return_work_date_connecticut").on("change",function(){
     var from = $("#last_work_date_conne").val();
    var to = $("#return_work_date_connecticut").val();
    if(Date.parse(to) < Date.parse(from)){
        // console.log("fir");
        $(".max_date_error").show();
        $(".same_date_conne").hide();
         $('html, body').animate({
                    scrollTop: $("#return_work_date_connecticut").offset().top
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

