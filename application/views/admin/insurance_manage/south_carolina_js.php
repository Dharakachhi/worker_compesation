<script type="text/javascript">
jQuery(document).ready(function($) {

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

      var mask = $('.phone').inputmask({oncleared: function() {
         $("input").val("");
    }} );

       var mask = $('.security').inputmask({oncleared: function() {
         $("input").val("");
    }} );

    $("#newyork_avrage_pay").inputmask();

	$('.menu-toggler').click();
	$('#south_carolina_form_id').validate({ // initialize the plugin
        focusInvalid: false,
        invalidHandler: function(form, validator) {
            if (!validator.numberOfInvalids())
                return;
            $('html, body').animate({
                scrollTop: $(validator.errorList[0].element).offset().top
            }, 1000);
        },
        rules: {
            "south_carolina[full_name]": {
                required: true,
                alpha:true,
            },
            "south_carolina[discipline]": {
                required: true,
            },
            "south_carolina[facility_name]": {
                required: true,
            },
            "south_carolina[gender]": {
                required: true,
            },
            "south_carolina[job_title]": {
                required: true,
            },
            "south_carolina[began_work]": {
                required: true,
            },
            "south_carolina[date_of_injury]": {
                required: true,
            },
            // "south_carolina[state_injury]": {
            //     required: true,
            // },
            "south_carolina[time_of_injury]": {
                required: true,
            },
            "south_carolina[work_stop_date]": {
                required: true,
            },
            "south_carolina[date_notified]": {
                required: true,
            },
            "south_carolina[type_of_injury]": {
                required: true,
            },
            "south_carolina[part_body_affected]": {
                required: true,
            },
            "south_carolina[location_where_accident]": {
                required: true,
            },
            "south_carolina[equipment_meterials]": {
                required: true,
            },
            "south_carolina[activity_engaed]": {
                required: true,
            },
            "south_carolina[work_process_emp_engade]": {
                required: true,
            },
            "south_carolina[how_injury_health_condition]": {
                required: true,
            },
            "south_carolina[phone_number]": {
            	// digits: true,
                 minlength:12,
                maxlength:12,
            },
            "south_carolina[dob]":{
                required:true,
            },
            "south_carolina[social_security_num]":{
                required:true,
                 minlength: 11,
                maxlength: 11,
            },
            "south_carolina[date_hire]":{
                required:true,
            },
            "south_carolina[address]":{
                required:true,
            },
            "south_carolina[employment_status]":{
                required:true,
            }
        },
         messages: {

            "south_carolina[phone_number]": {
                minlength : "Please enter at least 10 characters.",
                maxlength : "Please enter at least 10 characters.",

                },
                 "south_carolina[social_security_num]": {
                minlength  : "Please enter at least 9 characters.",
                maxlength : "Please enter no more than 9 characters.",
            },
        },
         /*errorPlacement: function(error, element) {
            if (element.attr("name") == "south_carolina[employment_status]") {
             error.insertAfter("#radio-msg");
          } else {
             error.insertAfter(element);
          }
        },*/
          highlight: function(element) {
        $(element).parent().addClass('has-error');
        // $(element).removeClass(errorClass);
      },
      unhighlight: function(element) {
        $(element).parent().removeClass('has-error');
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
    });
});


 $( window ).on( "load", function() {
        $( "#south_carolina_form_id" ).valid();
        $(".error").hide();
    });
/*$( window ).on( "load", function() {
             $(".error").hide();
          if ($( "#south_carolina_form_id" ).valid()) {
            // alert("Form is valid, no missing field");
          }
    });*/

dateremove_onclose(".date_hired_newjersey", "#date_hired_newjersey");
dateremove_onclose(".date_of_injury", "#date_of_injury");
dateremove_onclose(".work_stop_date_newjersey", "#work_stop_date_newjersey");
dateremove_onclose(".date_notified", "#date_notified");
dateremove_onclose(".date_disability_began", "#date_disability_began");
dateremove_onclose(".return_work_date", "#return_work_date");
dateremove_onclose(".if_fatel_death_date", "#if_fatel_death_date");
dateremove_onclose(".date_administrator_notified", "#date_administrator_notified");
dateremove_onclose(".date_prepared", "#date_prepared");

// # allow only possitive number and number
$("#south_carolina_day_worked").on('keyup, blur, click, focusout', function (){
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

// disable alpha
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
        // console.log(newVal,this.value);
      });

  $("#south_carolina_submit,#phone_number,#state_injury_south_carolina,#date_hired_south_carolina,#dob_south_carolina,#date_of_injury,#time_of_injury_south_carolina,#work_stop_date_south_carolina,#date_notified").on('change click keyup', function (){
     if($(this).attr("id") == 'south_carolina_submit' ){
             $(".error").show();
             $(".why_security").hide();
     }
     if($(this).attr("id") == 'phone_number'){
        onkeyup_phone_fomat($("#phone_number").val(),"#phone_number");
      }
      if($(this).attr("id") == 'date_hired_south_carolina'){
        date_required($("#date_hired_south_carolina").val(),"date_hired_south_carolina-error","#date_hired_south_carolina");
      }
      if($(this).attr("id") == 'dob_south_carolina'){
        date_required($("#dob_south_carolina").val(),"dob_south_carolina-error","#dob_south_carolina");
      }

      if($(this).attr("id") == 'date_of_injury'){
        date_required($("#date_of_injury").val(),"date_of_injury-error","#date_of_injury");
      }
      if($(this).attr("id") == 'time_of_injury_south_carolina'){
        date_required($("#time_of_injury_south_carolina").val(),"time_of_injury_south_carolina-error","#time_of_injury_south_carolina");
      }
      if($(this).attr("id") == 'work_stop_date_south_carolina'){
        date_required($("#work_stop_date_south_carolina").val(),"work_stop_date_south_carolina-error","#work_stop_date_south_carolina");
      }
      if($(this).attr("id") == 'date_notified'){
        date_required($("#date_notified").val(),"date_notified-error","#date_notified");
      }
    // select_required($("#state_injury_south_carolina").val(),"state_injury_south_carolina-error");
});

$("#south_carolina_submit").on("click",function(){
  if( $( "#south_carolina_form_id" ).valid()){
     $.blockUI({
          target: "#south_carolina_form_id",
          css: { backgroundColor: 'rgba(100, 100, 100, 0.5)', color: '#fff',border:"0px"},
      });
      var url = '<?php echo base_url('Insurance_manage?q=true'); ?>';
      setTimeout(function(){ window.location = url;}, 5000);
  }
})

  $("#south_carolina_began_work").click(function(){
    $("#began_time_id").click();
})

   $( window ).on( "load", function() {
    remove_highlight_phone($("#phone_number").val().length,"#phone_number");
    onload_social_format($("#social_security_num").val(),"#social_security_num");
    onload_phone_format($("#phone_number").val(),"#phone_number");
});



  // #dob date
$('input[name="south_carolina[dob]"]').daterangepicker({
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
$('#dob_south_carolina').on('apply.daterangepicker', function (ev, picker) {
        $(this).val(picker.startDate.format('MM/DD/YYYY'));
        $("#dob_south_carolina").parent().removeClass('has-error');
         $("#dob_south_carolina-error").hide();
    });

// #end dob here

$("#work_stop_date_south_carolina").on("change",function(){
     var from = $("#work_stop_date_south_carolina").val();
    var to = $("#return_work_date").val();
    // console.log(from,to);
    if(Date.parse(from) > Date.parse(to)){
        $(".min_date_error").show();
         $(".same_date").hide();
         $('html, body').animate({
                    scrollTop: $("#work_stop_date_south_carolina").offset().top
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
     var from = $("#work_stop_date_south_carolina").val();
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