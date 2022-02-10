jQuery(document).ready(function($) {

    var mask = $('.phone-number').inputmask({oncleared: function() {
         $("input").val("");
    }} );

    jQuery.validator.addMethod("alpha", function(value, element) {
      return this.optional(element) || /^[A-Za-z ]+$/.test(value)
  // just ascii letters
},"Alpahbet only");

     jQuery.validator.setDefaults({
        debug: false,
        success: "valid"
    });
	$('#new_jersey_form_id').validate({ // initialize the plugin
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
        },
        rules: {
            "new_jersey[full_name]": {
                required: true,
                alpha:true,
            },
            "new_jersey[discipline]": {
                required: true,
            },
            "new_jersey[facility_name]": {
                required: true,
            },
            "new_jersey[gender]": {
                required: true,
            },
            "new_jersey[job_title]": {
                required: true,
            },
            // "new_jersey[employment_status]": {
            //     required: true,
            // },
            "new_jersey[date_of_injury]": {
                required: true,
            },

            "new_jersey[time_of_injury]": {
                required: true,
            },
            "new_jersey[work_stop_date]": {
                required: true,
            },
            "new_jersey[date_notified]": {
                required: true,
            },
            "new_jersey[type_of_injury]": {
                required: true,
            },
            "new_jersey[part_body_affected]": {
                required: true,
            },
            "new_jersey[location_where_accident]": {
                required: true,
            },
            "new_jersey[equipment_meterials]": {
                required: true,
            },
            "new_jersey[activity_engaed]": {
                required: true,
            },
            "new_jersey[work_process_emp_engade]": {
                required: true,
            },
            "new_jersey[how_injury_health_condition]": {
                required: true,
            },
            "new_jersey[phone_number]": {
            	// digits: true,
                minlength:12,
                maxlength:12,
            },
            "new_jersey[began_work]":{
                required:true,
            },
        },
        //  errorPlacement: function(error, element) {
        //     if (element.attr("name") == "new_jersey[employment_status]") {
        //      error.insertAfter("#radio-msg");
        //   } else {
        //      error.insertAfter(element);
        //   }
        // },
         messages: {

            "new_jersey[phone_number]": {
                maxlength : "Please enter at least 10 characters.",
                minlength : "Please enter at least 10 characters.",

                },
            }
    });
});
    // only enter number validation
  $("#new_jersey_days_week").on('keyup, blur, click, focusout', function (){
   var day_work = $(this).val();
   if((Number(day_work) > 0) ||day_work == '' ){
        $("#possitive-error").hide();
   }else{
        $("#possitive-error").show();
   }
  })

$("#new_jersey_submit,#discipline_new_jersey,#new_jersey_illness_injury,#date_injury_newjersey,#time_occurance_newjersey,#new_jersey_began_work,#last_workdate_newjersey,#employee_notified_newjersey,.phone-number").on('change click keyup', function (){
    select_required($("#discipline_new_jersey").val(),"discipline_new_jersey-error");
    select_required($("#new_jersey_illness_injury").val(),"new_jersey_illness_injury-error");
    date_required($("#date_injury_newjersey").val(),"date_injury_newjersey-error","#date_injury_newjersey");
    date_required($("#time_occurance_newjersey").val(),"time_occurance_newjersey-error","#time_occurance_newjersey");
    date_required($("#new_jersey_began_work").val(),"new_jersey_began_work-error","#new_jersey_began_work");
    date_required($("#last_workdate_newjersey").val(),"last_workdate_newjersey-error","#last_workdate_newjersey");
    date_required($("#employee_notified_newjersey").val(),"employee_notified_newjersey-error","#employee_notified_newjersey");
    onkeyup_phone_fomat($(".phone-number").val(),".phone-number");
});

$("#new_jersey_began_work").click(function(){
    $("#began_time_id").click();
})


 $("#last_workdate_newjersey").on("change",function(){
     var from = $("#last_workdate_newjersey").val();
    var to = $("#return_work_date_new_jersey").val();
    console.log(from,to);
    if(Date.parse(from) > Date.parse(to)){
        $(".min_date_error").show();
         $(".same_date_new_jersey").hide();
         $('html, body').animate({
                    scrollTop: $("#last_workdate_newjersey").offset().top
                }, 1000);
        $(':input[type="submit"]').prop('disabled', true);
       // alert("Invalid Date Range");
    }else if(Date.parse(to) == Date.parse(from)){
        console.log("dsfdssss");
        $(".same_date_new_jersey").show();
        $(".max_date_error").hide();
        $(".min_date_error").hide();
        $(':input[type="submit"]').prop('disabled', true);
    }else if(Date.parse(from) < Date.parse(to)){
        $(".same_date_new_jersey").hide();
        $(".max_date_error").hide();
        $(".min_date_error").hide();
        $(':input[type="submit"]').prop('disabled', false);
    }
    else{
         $(".same_date_new_jersey").hide();
        $(".min_date_error").hide();
        $(':input[type="submit"]').prop('disabled', false);
       // alert("Valid date Range");
    }
})

$("#return_work_date_new_jersey").on("change",function(){
     var from = $("#last_workdate_newjersey").val();
    var to = $("#return_work_date_new_jersey").val();
    console.log(from,to);
    if(Date.parse(to) < Date.parse(from)){
        $(".max_date_error").show();
        $(".same_date_new_jersey").hide();
         $('html, body').animate({
                    scrollTop: $("#return_work_date_new_jersey").offset().top
                }, 1000);
        $(':input[type="submit"]').prop('disabled', true);
       // alert("Invalid Date Range");
    }else if(Date.parse(to) == Date.parse(from)){
        console.log("dsf");
        $(".same_date_new_jersey").show();
        $(".min_date_error").hide();
        $(".max_date_error").hide();
        $(':input[type="submit"]').prop('disabled', true);
    }else if(Date.parse(to) > Date.parse(from)){
        $(".same_date_new_jersey").hide();
        $(".min_date_error").hide();
        $(".max_date_error").hide();
        $(':input[type="submit"]').prop('disabled', false);
    }
    else{
        $(".max_date_error").hide();
        $(".same_date_new_jersey").hide();
        $(':input[type="submit"]').prop('disabled', false);
       // alert("Valid date Range");
    }
})