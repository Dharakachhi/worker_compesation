<script type="text/javascript">

	jQuery(document).ready(function ($) {

	var mask = $('.phone-number').inputmask({
		oncleared: function () {
			$("input").val("");
		}
	});

	jQuery.validator.addMethod("alpha", function (value, element) {
		return this.optional(element) || /^[A-Za-z ]+$/.test(value)
		// just ascii letters
	}, "Alpahbet only");

	jQuery.validator.setDefaults({
		debug: false,
		success: "valid"
	});
	$('#columbia_form_id').validate({ // initialize the plugin
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
				} else {
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
			} else {
				error.insertAfter(element);
			}
		},
		focusInvalid: false,
		invalidHandler: function (form, validator) {
			if (!validator.numberOfInvalids())
				return;
			$('html, body').animate({
				scrollTop: $(validator.errorList[0].element).offset().top
			}, 1000);
		},
		rules: {
			"columbia[full_name]": {
				required: true,
				alpha: true,
			},
			"columbia[time_of_injury]": {
				required: true,
			},
			"columbia[starting_time]": {
				required: true,
			},
			"columbia[gender]": {
				required: true,
			},
			"columbia[return_to_work_date]": {
				required: true,
			},
			"columbia[wage]": {
				required: true,
			},
			"columbia[insurer_name]": {
				required: true,
			},
			"columbia[address]": {
				required: true,
			},
			"columbia[injured_paid_full_day]": {
				required: true,
			},

			"columbia[was_injured]": {
				required: true,
			},
			"columbia[foreman]": {
				required: true,
			},

			// "missouri[phone_number]": {
			// 	// digits: true,
			// 	minlength: 12,
			// 	maxlength: 12,
			// },

		},
		//  errorPlacement: function(error, element) {
		//     if (element.attr("name") == "missouri[employment_status]") {
		//      error.insertAfter("#radio-msg");
		//   } else {
		//      error.insertAfter(element);
		//   }
		// },
		/*messages: {

			"missouri[phone_number]": {
				maxlength: "Please enter at least 10 characters.",
				minlength: "Please enter at least 10 characters.",

			},
		}*/
	});
});

dateremove_onclose(".date-time", "#date-time");
dateremove_onclose(".maryaland_date_disability", "#maryaland_date_disability");
dateremove_onclose(".dob", "#dob");
	
// only enter number validation
/*$("#missouri_days_week").on('keyup, blur, click, focusout', function () {
	var day_work = $(this).val();
	if ((Number(day_work) > 0) || day_work == '') {
		$("#possitive-error").hide();
	} else {
		$("#possitive-error").show();
	}
})

$("#missouri_submit,#discipline_missouri,#missouri_illness_injury,#missouri_rateofpay,#date_injury_newjersey,#time_occurance_newjersey,#missouri_began_work,#last_workdate_newjersey,#employee_notified_newjersey,.phone-number").on('change click keyup', function () {
	select_required($("#discipline_missouri").val(), "discipline_missouri-error");
	select_required($("#missouri_rateofpay").val(), "missouri_rateofpay-error");
	select_required($("#missouri_illness_injury").val(), "missouri_illness_injury-error");
	date_required($("#date_injury_newjersey").val(), "date_injury_newjersey-error", "#date_injury_newjersey");
	date_required($("#time_occurance_newjersey").val(), "time_occurance_newjersey-error", "#time_occurance_newjersey");
	date_required($("#missouri_began_work").val(), "missouri_began_work-error", "#missouri_began_work");
	date_required($("#last_workdate_newjersey").val(), "last_workdate_newjersey-error", "#last_workdate_newjersey");
	date_required($("#employee_notified_newjersey").val(), "employee_notified_newjersey-error", "#employee_notified_newjersey");
	onkeyup_phone_fomat($(".phone-number").val(), ".phone-number");
});

$("#missouri_began_work").click(function () {
	$("#began_time_id").click();
})


$("#last_workdate_newjersey").on("change", function () {
	var from = $("#last_workdate_newjersey").val();
	var to = $("#return_work_date_missouri").val();
	console.log(from, to);
	if (Date.parse(from) > Date.parse(to)) {
		$(".min_date_error").show();
		$(".same_date_missouri").hide();
		$('html, body').animate({
			scrollTop: $("#last_workdate_newjersey").offset().top
		}, 1000);
		$(':input[type="submit"]').prop('disabled', true);
		// alert("Invalid Date Range");
	} else if (Date.parse(to) == Date.parse(from)) {
		console.log("dsfdssss");
		$(".same_date_missouri").show();
		$(".max_date_error").hide();
		$(".min_date_error").hide();
		$(':input[type="submit"]').prop('disabled', true);
	} else if (Date.parse(from) < Date.parse(to)) {
		$(".same_date_missouri").hide();
		$(".max_date_error").hide();
		$(".min_date_error").hide();
		$(':input[type="submit"]').prop('disabled', false);
	} else {
		$(".same_date_missouri").hide();
		$(".min_date_error").hide();
		$(':input[type="submit"]').prop('disabled', false);
		// alert("Valid date Range");
	}
})

$("#return_work_date_missouri").on("change", function () {
	var from = $("#last_workdate_newjersey").val();
	var to = $("#return_work_date_missouri").val();
	console.log(from, to);
	if (Date.parse(to) < Date.parse(from)) {
		$(".max_date_error").show();
		$(".same_date_missouri").hide();
		$('html, body').animate({
			scrollTop: $("#return_work_date_missouri").offset().top
		}, 1000);
		$(':input[type="submit"]').prop('disabled', true);
		// alert("Invalid Date Range");
	} else if (Date.parse(to) == Date.parse(from)) {
		console.log("dsf");
		$(".same_date_missouri").show();
		$(".min_date_error").hide();
		$(".max_date_error").hide();
		$(':input[type="submit"]').prop('disabled', true);
	} else if (Date.parse(to) > Date.parse(from)) {
		$(".same_date_missouri").hide();
		$(".min_date_error").hide();
		$(".max_date_error").hide();
		$(':input[type="submit"]').prop('disabled', false);
	} else {
		$(".max_date_error").hide();
		$(".same_date_missouri").hide();
		$(':input[type="submit"]').prop('disabled', false);
		// alert("Valid date Range");
	}
})*/
</script>