<script type="text/javascript">
jQuery(document).ready(function($) {
	$('.menu-toggler').click();
     jQuery.validator.setDefaults({
        debug: false,
        success: "valid"
    });

       jQuery.validator.addMethod("alpha", function(value, element) {
      return this.optional(element) || /^[A-Za-z ]+$/.test(value)
  // just ascii letters
},"Alpahbet only");

     setTimeout(function() {
        $(".msg_email").fadeOut("slow");
    }, 4000);

	$('#maryland_form_id').validate({ // initialize the plugin
    highlight: function (element, errorClass) {
            // $(element).removeClass(errorClass);
            $(element).parent().addClass('has-error');
          },
          unhighlight: function (element, errorClass) {
            $(element).parent().removeClass('has-error');
            // $(element).removeClass(errorClass);
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
            "maryland[social_security_num]":{
                required:true,
                maxlength:11,
                minlength:11,
                // digits:true,
            },
            "maryland[address]":{
                required:true,
            },
            "maryland[date_hire]":{
                required:true,
            },
            "maryland[state_injury]":{
                required:true,
            },

            "maryland[dob]":{
                required:true,
            },
            "maryland[employment_status]":{
                required:true,
            }
        },
         messages: {

            "maryland[phone_number]": {
                minlength : "Please enter at least 10 characters.",
                maxlength : "Please enter at least 10 characters.",

                },
            "maryland[social_security_num]": {
                minlength  : "Please enter at least 9 characters.",
                maxlength : "Please enter no more than 9 characters.",
            },
        }
    });
});

/*$( window ).on( "load", function() {
          if ($( "#maryland_form_id" ).valid()) {
            // alert("Form is valid, no missing field");
          }
    });*/

 $( window ).on( "load", function() {
        $( "#maryland_form_id" ).valid();
        $(".error").hide();
    remove_highlight_phone($("#phone_number").val().length,"#phone_number");
    onload_social_format($("#social_security_num").val(),"#social_security_num");
    onload_phone_format($("#phone_number").val(),"#phone_number");
          // if ($( "#new_york_form_id" ).valid(error_placement)) {
          //   // alert("Form is valid, no missing field");
          // }
    });

 dateremove_onclose(".date_hire_maryaland", "#date_hire_maryaland");
 dateremove_onclose(".date_of_injury", "#date_of_injury");
 dateremove_onclose(".last_work_date", "#last_work_date");
 dateremove_onclose(".date_notified", "#date_notified");
 dateremove_onclose(".date_disability_began", "#date_disability_began");
 dateremove_onclose(".return_work_date", "#return_work_date");
 dateremove_onclose(".if_fatal_give_date", "#if_fatal_give_date");
 dateremove_onclose(".date_administrator_notified", "#date_administrator_notified");
dateremove_onclose(".date_prepared", "#date_prepared");

// $("#social_security_num").on('keyup, blur', function (){
//     var security_len = $('#social_security_num').val().length;
//     // console.log(security_len);
//      if ($('#social_security_num').val() != ""  &&  security_len == 9){
//         $(".why_security").hide();
//         // return true;
//      }else {
//         $(".why_security").show();
//         return false
//      }
//   })

    $(".data-reset").click(function(){
        $(this).parents().find(".form-control").val()
    })


 $("#maryaland_day_worked").on('keyup, blur, click, focusout', function (){
   var day_work = $(this).val();
   // console.log(day_work);
   if((Number(day_work) > 0) ||day_work == '' ){
        $("#possitive-error").hide();
   }else{
        $("#possitive-error").show();
   }
    // var security_len = $('#social_security_num').val().length;
    // console.log(security_len);
    // positiveNumber:true;
  })

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

    $("#maryaland_began_work").click(function(){
    $("#began_time_id_manage").click();
})

    // disable apha
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

$( window ).on( "load", function() {

});


 $("#maryaland_submit,#phone_number,#maryaland_dob,#date_hire_maryaland,#state_maryaland").on('change keyup', function (){
     if($(this).attr("id") == 'maryaland_submit'){
             $(".error").show();
             $(".why_security").hide();
       }    // $(".why_security").hide();
     if($(this).attr("id") == 'phone_number'){
        onkeyup_phone_fomat($("#phone_number").val(),"#phone_number");
     }
     if($(this).attr("id") == 'maryaland_dob'){
        date_required($("#maryaland_dob").val(),"maryaland_dob-error","#maryaland_dob");
     }
     if($(this).attr("id") == 'date_hire_maryaland'){
        date_required($("#date_hire_maryaland").val(),"date_hire_maryaland-error","#date_hire_maryaland");
     }
     if($(this).attr("id") == 'state_maryaland'){
        select_required($("#state_maryaland").val(),"state_maryaland-error","#state_maryaland");
     }

});

$("#maryaland_submit").on("click",function(){
  if( $( "#maryland_form_id" ).valid()){
     $.blockUI({
          target: "#maryland_form_id",
          css: { backgroundColor: 'rgba(100, 100, 100, 0.5)', color: '#fff',border:"0px"},
      });
      var url = '<?php echo base_url('Insurance_manage?q=true'); ?>';
      setTimeout(function(){ window.location = url;}, 5000);
  }
})

   // #dob date
$('input[name="maryland[dob]"]').daterangepicker({
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
$('#maryaland_dob').on('apply.daterangepicker', function (ev, picker) {
        $(this).val(picker.startDate.format('MM/DD/YYYY'));
        $("#maryaland_dob").parent().removeClass('has-error');
         $("#maryaland_dob-error").hide();
    });

// #end dob here

 $("#last_work_date").on("change",function(){
     var from = $("#last_work_date").val();
    var to = $("#return_work_date").val();
    // console.log(from,to);
    if(Date.parse(from) > Date.parse(to)){
        $(".min_date_error").show();
         $(".same_date").hide();
         $('html, body').animate({
                    scrollTop: $("#last_work_date").offset().top
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

$("#return_work_date").on("change",function(){
     var from = $("#last_work_date").val();
    var to = $("#return_work_date").val();
    if(Date.parse(to) < Date.parse(from)){
        $(".max_date_error").show();
        $(".same_date").hide();
         $('html, body').animate({
                    scrollTop: $("#return_work_date").offset().top
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
    }
    else{
        $(".max_date_error").hide();
        $(".same_date").hide();
        $(':input[type="submit"]').prop('disabled', false);
       // alert("Valid date Range");
    }
})

</script>