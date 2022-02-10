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
	$('#pennsylvania_form_id').validate({ // initialize the plugin
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
            "pennsylvania[last_name]": {
                required: true,
                alpha:true,
            },
            "pennsylvania[date_of_injury]": {
                required:true,
            },
            "pennsylvania[gender]": {
                required: true,
            },
            "pennsylvania[marital_status]": {
                required: true,
            },
            "pennsylvania[employment_status]":{
                required:true,
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
            "pennsylvania[witness_phone_number]":{
                // digits: true,
                minlength:12,
                maxlength:12,
            },
            "pennsylvania[zip_code]":{
                digits:true,
            },
            "pennsylvania[person_phone]":{
                // digits: true,
                minlength:12,
                maxlength:12,
            },
            "pennsylvania[dob]":{
                required:true,
            },
            "pennsylvania[social_security_num]":{
                required:true,
                minlength:11,
                maxlength:11,
            },
            "pennsylvania[date_hire]":{
                required:true,
            },
            "pennsylvania[work_stop_date]":{
                required:true,
            },
            "pennsylvania[date_hire]":{
                required:true,
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
     /* errorPlacement: function(error, element) {
        if (element.parent('.input-group').length) {
          error.insertAfter(element.parent());
        } else if(element.attr("name") == "pennsylvania[hospital_or_off_site_treatment_checkboxs][]"){
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
            "pennsylvania[social_security_num]": {
                minlength  : "Please enter at least 9 characters.",
                maxlength : "Please enter no more than 9 characters.",
            },
        },
        // errorPlacement: function(error, element) {
        //     if (element.attr("name") == "pennsylvania[hospital_or_off_site_treatment_checkboxs][]") {
        //      error.insertAfter("#required_msg");
        //   } else {
        //      error.insertAfter(element);
        //   }
        // },
    });
});

dateremove_onclose(".date_of_injury", "#date_of_injury");
dateremove_onclose(".last_work_date_penn", "#last_work_date_penn");
dateremove_onclose(".date_disability_began", "#date_disability_began");
dateremove_onclose(".date_notified", "#date_notified");
dateremove_onclose(".return_work_date_penn", "#return_work_date_penn");
dateremove_onclose(".date_hire_penn", "#date_hire_penn");
dateremove_onclose(".if_fatal_give_date", "#if_fatal_give_date");
dateremove_onclose(".date_prepared", "#date_prepared");

$( window ).on( "load", function() {
       $( "#pennsylvania_form_id" ).valid();
        $(".error").hide();
         remove_highlight_phone($("#contact_penn1").val().length,"#contact_penn1");
         remove_highlight_phone($("#witness_phone_number_penn").val().length,"#witness_phone_number_penn");
         remove_highlight_phone($("#phone_penn2").val().length,"#phone_penn2");
         remove_highlight_phone($("#penn_emp_phone2").val().length,"#penn_emp_phone2");
         onload_phone_format($("#contact_penn1").val(),"#contact_penn1");
         onload_phone_format($("#witness_phone_number_penn").val(),"#witness_phone_number_penn");
         onload_phone_format($("#phone_penn2").val(),"#phone_penn2");
         onload_phone_format($("#penn_emp_phone2").val(),"#penn_emp_phone2");
         remove_highlight_social($("#social_security_num").val().length,"#social_security_num");
          /*if ($( "#pennsylvania_form_id" ).valid()) {
            // alert("Form is valid, no missing field");
          }*/
    });

$("#pennsylvania_time_of_injury").click(function(){
    $("#injury_clock").click();
})

$("#save,#pennsylvania_discipline,#pennsylvania_type_of_injury,#pennsylvania_dob,#contact_penn1,#witness_phone_number_penn,#phone_penn2,#penn_emp_phone2,#social_security_num,#last_work_date_penn,#date_hire_penn").on('change keyup', function (){
    if($(this).attr("id") == 'save'){
             $(".error").show();
             $(".why_security").hide();
     }
     if($(this).attr("id") == 'contact_penn1'){
       onkeyup_phone_fomat($("#contact_penn1").val(),"#contact_penn1");
     }
     if($(this).attr("id") == 'witness_phone_number_penn'){
       onkeyup_phone_fomat($("#witness_phone_number_penn").val(),"#witness_phone_number_penn");
     }
     if($(this).attr("id") == 'phone_penn2'){
       onkeyup_phone_fomat($("#phone_penn2").val(),"#phone_penn2");
     }
     if($(this).attr("id") == 'penn_emp_phone2'){
       onkeyup_phone_fomat($("#penn_emp_phone2").val(),"#penn_emp_phone2");
     }
      if($(this).attr("id") == 'pennsylvania_dob'){
        date_required($("#pennsylvania_dob").val(),"pennsylvania_dob-error","#pennsylvania_dob");
     }
     if($(this).attr("id") == 'date_hire_penn'){
        date_required($("#date_hire_penn").val(),"date_hire_penn-error","#date_hire_penn");
     }
     if($(this).attr("id") == 'last_work_date_penn'){
        date_required($("#last_work_date_penn").val(),"last_work_date_penn-error","#last_work_date_penn");
     }
      if($(this).attr("id") == 'pennsylvania_discipline'){
        select_required($("#pennsylvania_discipline").val(),"pennsylvania_discipline-error");
     }
      if($(this).attr("id") == 'pennsylvania_type_of_injury'){
        select_required($("#pennsylvania_type_of_injury").val(),"pennsylvania_type_of_injury-error");
     }
     if($(this).attr("id") == 'social_security_num'){
        onload_social_format($("#social_security_num").val(),"#social_security_num");
     }

});


$("#save").on("click",function(){
  if( $( "#pennsylvania_form_id" ).valid()){
     $.blockUI({
          target: "#pennsylvania_form_id",
          css: { backgroundColor: 'rgba(100, 100, 100, 0.5)', color: '#fff',border:"0px"},
      });
      var url = '<?php echo base_url('Insurance_manage?q=true'); ?>';
      setTimeout(function(){ window.location = url;}, 5000);
  }
})

 function select_required(selectinput,hide_error_msgid){
    if (selectinput != "") {
        $('#'+hide_error_msgid).hide();
        return true;
    }
}

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


  // #dob date
$('input[name="pennsylvania[dob]"]').daterangepicker({
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
$('#pennsylvania_dob').on('apply.daterangepicker', function (ev, picker) {
        $(this).val(picker.startDate.format('MM/DD/YYYY'));
        $("#pennsylvania_dob").parent().removeClass('has-error');
         $("#pennsylvania_dob-error").hide();
    });

// #end dob here

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
        console.log("fir");
        $(".max_date_error").show();
        $(".same_date_conne").hide();
         $('html, body').animate({
                    scrollTop: $("#return_work_date_penn").offset().top
                }, 1000);
        $(':input[type="submit"]').prop('disabled', true);
       // alert("Invalid Date Range");
    }else if(Date.parse(to) == Date.parse(from)){
        console.log("sec");
        $(".same_date_conne").show();
          $(".min_date_error").hide();
          $(".max_date_error").hide();
        $(':input[type="submit"]').prop('disabled', true);
    }else if(Date.parse(to) > Date.parse(from)){
        console.log("third");
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