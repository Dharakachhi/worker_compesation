<script type="text/javascript">
jQuery(document).ready(function($) {

    setTimeout(function() {
        $(".msg_email").fadeOut("slow");
    }, 4000);

    jQuery.validator.addMethod("alpha", function(value, element) {
      return this.optional(element) || /^[A-Za-z ]+$/.test(value)
  // just ascii letters
},"Alpahbet only");

	$('.menu-toggler').click();
	$('#connecticut_form_id').validate({ // initialize the plugin
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
            },
            // "connecticut[job_title]": {
            //     required: true,
            // },
            "connecticut[date_of_injury]": {
                required: true,
            },
            // "connecticut[town_of_injury]": {
            //     required: true,
            // },
            "connecticut[date_hire]":{
                required:true,
            },
            "connecticut[rate_of_pay]":{
                required:true,
            },
            "connecticut[dob]":{
                required:true,
            },
            "connecticut[address]":{
                required:true,
            },
            // "connecticut[began_work]": {
            //     required: true,
            // },
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
             "connecticut[emp_phone_number]": {
                // digits: true,
                minlength:12,
                maxlength:12,
            },
            "connecticut[social_security_num]":{
                required:true,
                maxlength:11,
                minlength:11,
            }
        },
        highlight: function(element) {
            console.log($(element));
            // $(element)
        if ($(element).hasClass('md-checkbox')) {
              error.appendTo($(element).parent().parent().addClass('has-error'));
            }else {

                $(element).parent().addClass('has-error');
            }
        // $(element).removeClass(errorClass);
      },
      unhighlight: function(element) {
        // $(element).parent().removeClass('has-error');
         if ($(element).hasClass('md-checkbox')) {
              error.appendTo($(element).parent().parent().removeClass('has-error'));
            }else {

                $(element).parent().removeClass('has-error');
            }
        // $(element).removeClass(errorClass);
      },
      errorElement: 'span',
      errorClass: 'error',
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
         messages: {

            "connecticut[emp_phone_number]": {
                minlength : "Please enter at least 10 characters.",
                maxlength : "Please enter at least 10 characters.",

                },
            "connecticut[phone_number]": {
                minlength  : "Please enter at least 10 characters.",
                maxlength : "Please enter no more than 10 characters.",
            },
             "connecticut[social_security_num]": {
                minlength  : "Please enter at least 9 characters.",
                maxlength : "Please enter no more than 9 characters.",
            },
        },
        //  errorPlacement: function(error, element) {
        //     if (element.attr("name") == "connecticut[hospital_or_off_site_treatment_checkboxs][]") {
        //      error.insertAfter("#checkbox-msg");
        //   } else {
        //      error.insertAfter(element);
        //   }
        // },
    });
});

dateremove_onclose(".date_hire_conne", "#date_hire_conne");
dateremove_onclose(".date_of_injury", "#date_of_injury");
dateremove_onclose(".date_notified", "#date_notified");
dateremove_onclose(".date_disability_began", "#date_disability_began");
dateremove_onclose(".last_work_date_conne", "#last_work_date_conne");
dateremove_onclose(".return_work_date_connecticut", "#return_work_date_connecticut");
dateremove_onclose(".if_fatal_give_date", "#if_fatal_give_date");
dateremove_onclose(".date_administrator_notified", "#date_administrator_notified");
dateremove_onclose(".date_prepared", "#date_prepared");

$( window ).on( "load", function() {
      $( "#connecticut_form_id" ).valid();
        $(".error").hide();
          /*if ($( "#connecticut_form_id" ).valid()) {
            // alert("Form is valid, no missing field");
          }*/
    remove_highlight_social($("#social_security_num").val().length,"#social_security_num");
    remove_highlight_phone($("#phone_number_conne").val().length,"#phone_number_conne");
    remove_highlight_phone($("#phone_number_sec").val().length,"#phone_number_sec");
    onload_social_format($("#social_security_num").val(),"#social_security_num");
    onload_phone_format($("#phone_number_sec").val(),"#phone_number_sec");
    onload_phone_format($("#phone_number_conne").val(),"#phone_number_conne");
    });

// $("#social_security_num").on('keyup, blur', function (){
//     var security_len = $('#social_security_num').val().length;
//     // console.log(security_len);
//      if ($('#social_security_num').val() != ""  &&  security_len == 9){
//         $(".why_security").hide();
//         // return true;
//      }
//      // else if($('#social_security_num').val() != ""  &&  security_len == 9) {
//      //    $(".why_security").show();
//      //    return false
//      // }
//   })


 $("#connecticut_submit,#connecticut_type_injury,#connecticut_rate_of_pay,#phone_number_conne,#connecticut_began_work,#date_hire_conne,#connecticut_state_of_hire").on('change keyup', function (){
    if($(this).attr("id") == 'connecticut_submit'){
             $(".error").show();
             $(".why_security").hide();
     }
     if($(this).attr("id") == 'connecticut_began_work'){
        date_required($("#connecticut_began_work").val(),"connecticut_began_work-error","#connecticut_began_work");
     }
     if($(this).attr("id") == 'date_hire_conne'){
        date_required($("#date_hire_conne").val(),"date_hire_conne-error","#date_hire_conne");
     }
     if($(this).attr("id") == 'phone_number_conne'){
        onkeyup_phone_fomat($("#phone_number_conne").val(),"#phone_number_conne");
     }
      if($(this).attr("id") == 'connecticut_type_injury'){
        select_required($("#connecticut_type_injury").val(),"connecticut_type_injury-error","#connecticut_type_injury");
     }
      if($(this).attr("id") == 'connecticut_rate_of_pay'){
        select_required($("#connecticut_rate_of_pay").val(),"connecticut_rate_of_pay-error","#connecticut_rate_of_pay");
     }
     if($(this).attr("id") == 'connecticut_state_of_hire'){
        select_required($("#connecticut_state_of_hire").val(),"connecticut_state_of_hire-error","#connecticut_state_of_hire");
     }
});


$("#connecticut_submit").on("click",function(){
  if( $( "#connecticut_form_id" ).valid()){
     $.blockUI({
          target: "#connecticut_form_id",
          css: { backgroundColor: 'rgba(100, 100, 100, 0.5)', color: '#fff',border:"0px"},
      });
      var url = '<?php echo base_url('Insurance_manage?q=true'); ?>';
      setTimeout(function(){ window.location = url;}, 5000);
  }
})


  $('#social_security_num').on('input', function (event) {
            this.value = this.value.replace(/[^0-9-]/g, '');
          });


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
        alpha_disable("#social_security_num"); 
        // console.log(newVal,this.value);
      });


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


   $("#connecticut_time_of_injury").click(function(){
    $("#time_selct").click();
})

     // #dob date
$('input[name="connecticut[dob]"]').daterangepicker({
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
$('#connecticut_dob').on('apply.daterangepicker', function (ev, picker) {
        $(this).val(picker.startDate.format('MM/DD/YYYY'));
        $("#connecticut_dob").parent().removeClass('has-error');
         $("#connecticut_dob-error").hide();
    });

// #end dob here


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
</script>