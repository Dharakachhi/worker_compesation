jQuery(document).ready(function($) {
    // var day_worked = $('#maryaland_day_worked').val();
    // $.validator.addMethod('positiveNumber',
    // function (value) {
    //     return Number(day_worked) > 0;
    // }, 'Enter a positive number.');

jQuery.validator.addMethod("alpha", function(value, element) {
      return this.optional(element) || /^[A-Za-z ]+$/.test(value)
  // just ascii letters
},"Alpahbet only");

	$('#maryland_form_id').validate({ // initialize the plugin
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
            "maryland[full_name]": {
                required: true,
                alpha:true,
            },
            "maryland[discipline]": {
                required: true,
            },
            "maryland[facility_name]": {
                required: true,
            },
            "maryland[gender]": {
                required: true,
            },
            "maryland[job_title]": {
                required: true,
            },
            "maryland[began_work]": {
                required: true,
            },
            "maryland[date_of_injury]": {
                required: true,
            },
            "maryland[time_of_injury]": {
                required: true,
            },
            "maryland[work_stop_date]": {
                required: true,
            },
            "maryland[date_notified]": {
                required: true,
            },
            "maryland[type_of_injury]": {
                required: true,
            },
            "maryland[part_body_affected]": {
                required: true,
            },
            "maryland[location_where_accident]": {
                required: true,
            },
            "maryland[equipment_meterials]": {
                required: true,
            },
            "maryland[activity_engaed]": {
                required: true,
            },
            "maryland[work_process_emp_engade]": {
                required: true,
            },
            "maryland[how_injury_health_condition]": {
                required: true,
            },
            "maryland[phone_number]": {
                // digits: true,
                minlength:12,
                maxlength:12,
            },
        },
         messages: {

            "maryland[phone_number]": {
                maxlength : "Please enter at least 10 characters.",
                minlength : "Please enter at least 10 characters.",

                },
            }
    });
});

 // only enter number validation
  $("#maryaland_eachday").on('keyup, blur, click, focusout', function (){
   var day_work = $(this).val();
   if((Number(day_work) > 0) ||day_work == '' ){
        $("#possitive-error_maraya").hide();
   }else{
        $("#possitive-error_maraya").show();
   }
  })


 $("#maryaland_submit,#maryaland_discipline,#maryaland_injury,#maryaland_began_work,#date_of_injury_maryaland,#time_of_injury_maryaland,#date_notified_maryaland,#last_date_maryaland,#phone_number").on('change click keyup', function (){
    select_required($("#maryaland_discipline").val(),"maryaland_discipline-error");
    select_required($("#maryaland_injury").val(),"maryaland_injury-error");
    date_required($("#maryaland_began_work").val(),"maryaland_began_work-error","#maryaland_began_work");
    date_required($("#date_of_injury_maryaland").val(),"date_of_injury_maryaland-error","#date_of_injury_maryaland");
    date_required($("#date_notified_maryaland").val(),"date_notified_maryaland-error","#date_notified_maryaland");
    date_required($("#time_of_injury_maryaland").val(),"time_of_injury_maryaland-error","#time_of_injury_maryaland");
    date_required($("#last_date_maryaland").val(),"last_date_maryaland-error","#last_date_maryaland");
    onkeyup_phone_fomat($("#phone_number").val(),"#phone_number");
});


   $("#maryaland_began_work").click(function(){
    $("#began_time_id").click();
})

 $("#last_date_maryaland").on("change",function(){
     var from = $("#last_date_maryaland").val();
    var to = $("#return_work_date_maryaland").val();
    // console.log(from,to);
    if(Date.parse(from) > Date.parse(to)){
        $(".min_date_error").show();
         $(".same_date_maryaland").hide();
         $('html, body').animate({
                    scrollTop: $("#last_date_maryaland").offset().top
                }, 1000);
        $(':input[type="submit"]').prop('disabled', true);
       // alert("Invalid Date Range");
    }else if(Date.parse(to) == Date.parse(from)){
        $(".same_date_maryaland").show();
        $(".max_date_error").hide();
        $(".min_date_error").hide();
        $(':input[type="submit"]').prop('disabled', true);
    }else if(Date.parse(from) < Date.parse(to)){
        $(".same_date_maryaland").hide();
        $(".max_date_error").hide();
        $(".min_date_error").hide();
        $(':input[type="submit"]').prop('disabled', false);
    }
    else{
         $(".same_date_maryaland").hide();
        $(".min_date_error").hide();
        $(':input[type="submit"]').prop('disabled', false);
       // alert("Valid date Range");
    }
})

$("#return_work_date_maryaland").on("change",function(){
     var from = $("#last_date_maryaland").val();
    var to = $("#return_work_date_maryaland").val();
    if(Date.parse(to) < Date.parse(from)){
        // console.log("fir");
        $(".max_date_error").show();
        $(".same_date_maryaland").hide();
         $('html, body').animate({
                    scrollTop: $("#return_work_date_maryaland").offset().top
                }, 1000);
        $(':input[type="submit"]').prop('disabled', true);
       // alert("Invalid Date Range");
    }else if(Date.parse(to) == Date.parse(from)){
        // console.log("sec");
        $(".same_date_maryaland").show();
          $(".min_date_error").hide();
          $(".max_date_error").hide();
        $(':input[type="submit"]').prop('disabled', true);
    }else if(Date.parse(to) > Date.parse(from)){
        // console.log("third");
        $(".same_date_maryaland").hide();
        $(".min_date_error").hide();
        $(".max_date_error").hide();
         $(':input[type="submit"]').prop('disabled', false);
    }
    else{
        console.log("for");
        $(".max_date_error").hide();
        $(".same_date_maryaland").hide();
        $(':input[type="submit"]').prop('disabled', false);
       // alert("Valid date Range");
    }
})

//    $(".email").change(function () {
//     var inputvalues = $(this).val();
//     var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
//     if(!regex.test(inputvalues)){
//     alert("invalid email id");
//     return regex.test(inputvalues);
//     }
// });

