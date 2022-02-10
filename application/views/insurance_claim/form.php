<?php $this->load->view('insurance_claim/header'); ?>
<style type="text/css">
	label.error {
		color: #FF0000;
		float: left;
		width: 100%;
	}

	.tab-content .form-control[readonly] {
		background-color: #ffffff;
	}

	.long-shadow {
		text-transform: uppercase;
		font-family: unset;
		font-weight: 500;
		background: linear-gradient(90deg, rgba(255, 255, 255, 1) 50%, rgba(255, 63, 63, 1) 51%, rgba(109, 214, 239, 1) 142%);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
		font-size: 23px;
	}

	.select2.narrow {
		width: 200px;
	}

	.wrap.select2-selection--single {
		height: 100%;
	}

	.select2-container .wrap.select2-selection--single .select2-selection__rendered {
		word-wrap: break-word;
		text-overflow: inherit;
		white-space: normal;
	}
</style>

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
	<div class="page-wrapper">
		<div class="page-header navbar navbar-fixed-top">
			<div class="page-header-inner ">
				<div class="page-logo">
					<a href="#">
						<h4 class="long-shadow">Tender Touch</h4>
						<!-- <img src="<?php echo base_url('assets/theme/'); ?>assets/layouts/layout/img/logo.png" alt="logo" class="logo-default" /></a> -->
				</div>
				<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"><span></span></a>
			</div>
		</div>
		<div class="clearfix"> </div>
		<div class="page-container">
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div>
							<a href="https://test.tendertouch.com/upload/WC-Instructions-Guidelines.pdf" target="_blank" style="float: left; width: 50%;" download>
								<p style="margin:5px;font-size: x-large;"><b>For WC Instructions and Guidelines, click here</b></p>
							</a>
							<a href="https://lr.tendertouch.com/leave-form" target="_blank" style="float: left; width: 50%;" download>
								<p style="margin:5px;font-size: x-large;"><b>To Submit a Request For Leave, Click Here</b></p>
							</a>
						</div>
						<ul class="page-breadcrumb">
							<li>
								<a href="#">Insurance</a>
								<i class="fa fa-circle"></i>
							</li>
							<li>
								<span>Claim</span>
							</li>
						</ul>
					</div>
					<h1 class="page-title">Tender Touch Rehab Services
						<small> Insurance Claim</small>
					</h1>
					<div class="row">

					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-6">
								<div class="tabbable-line boxless tabbable-reversed">
									<ul class="nav nav-tabs">
										<div class="form-group">
											<label class="control-label">Select Employment State where injury/illness occurred</label>
											<select id="state_select" class="form-control" data-placeholder="Choose a Category" tabindex="1">
												<option <?php echo ($state_type == "new_york" || $state_type == "") ? 'selected' : ''; ?> value="new_york_div">New York</option>
												<option <?php echo ($state_type == "new_jersey") ? 'selected' : ''; ?> value="new_jersey_div">New Jersey</option>
												<option <?php echo ($state_type == "maryland") ? 'selected' : ''; ?> value="maryland_div">Maryland</option>
												<option <?php echo ($state_type == "connecticut") ? 'selected' : ''; ?> value="connecticut_div">Connecticut</option>
												<option <?php echo ($state_type == "pennsylvania") ? 'selected' : ''; ?> value="pennsylvania_div">Pennsylvania</option>
												<option <?php echo ($state_type == "southcarolina") ? 'selected' : ''; ?> value="southcarolina_div">South Carolina</option>
												<option <?php echo ($state_type == "missouri") ? 'selected' : ''; ?> value="missouri_div">Missouri</option>
												<option <?php echo ($state_type == "columbia") ? 'selected' : ''; ?> value="columbia_div">Columbia</option>
											</select>
										</div>
										<br><br><br><br><br>
										<div class="form-group">
											<label class="control-label">This form is being completed by </label>
											<select class="form-control" name="emp_state" id="emp_state">
												<option value="0">Please Select</option>
												<option value="a">Injured employee</option>
												<option value="b">Rehab Supervisor</option>
												<option value="c">HR/Benefits Department”</option>
											</select>
										</div>
									</ul>
								</div>
							</div>

							<div class="col-md-6">
								<div class="tabbable-line boxless tabbable-reversed">
									<ul class="nav nav-tabs">
										<div class="form-group">
											<label class="control-label" for="state_injury_or_illness_occurred"> What action plan should be done to prevent similar incidents in the future? <br>
												(Determine if equipment, materials or people require additional attention). <span class="required" aria-required="true"> *</span></label>
											<input type="text" name="question1" id="question1" class="form-control">
										</div>

										<div class="form-group">
											<label class="control-label" for="state_injury_or_illness_occurred"> What has been done thus far; take or recommend corrective action depending on your authority?<span class="required" aria-required="true"> *</span></label>
											<input type="text" name="question2" id="question2" class="form-control">
										</div>

										<div class="form-group">
											<label class="control-label" for="state_injury_or_illness_occurred"> How will this improve operations (objective is to decrease job hindrances)?<span class="required" aria-required="true"> *</span></label>
											<input type="text" name="question3" id="question3" class="form-control">
										</div>

										<div class="form-group">
											<label class="control-label" for="state_injury_or_illness_occurred"> Who Conducted the work accident/illness investigation ?<span class="required" aria-required="true"> *</span></label>
											<input type="text" name="question4" id="question4" class="form-control">
										</div>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<div class="tabbable-line boxless tabbable-reversed">
								<?php $this->load->view('flash_message'); ?>
								<div class="tab-content">
									<div class="form_div" id="new_york_div" style="display: <?php echo ($state_type == "new_york" || $state_type == "") ? 'block' : 'none'; ?>;">
										<?php $this->load->view('insurance_claim/new_york_form'); ?>
									</div>
									<div class="form_div" id="new_jersey_div" style="display: <?php echo ($state_type == "new_jersey") ? 'block' : 'none'; ?>;">
										<?php $this->load->view('insurance_claim/new_jersey_form'); ?>
									</div>
									<div class="form_div" id="maryland_div" style="display: <?php echo ($state_type == "maryland") ? 'block' : 'none'; ?>;">
										<?php $this->load->view('insurance_claim/maryland'); ?>
									</div>
									<div class="form_div" id="connecticut_div" style="display: <?php echo ($state_type == "connecticut") ? 'block' : 'none'; ?>;">
										<?php $this->load->view('insurance_claim/connecticut'); ?>
									</div>
									<div class="form_div" id="pennsylvania_div" style="display: <?php echo ($state_type == "pennsylvania") ? 'block' : 'none'; ?>;">
										<?php $this->load->view('insurance_claim/pennsylvania'); ?>
									</div>
									<div class="form_div" id="southcarolina_div" style="display: <?php echo ($state_type == "southcarolina") ? 'block' : 'none'; ?>;">
										<?php $this->load->view('insurance_claim/south_carolina'); ?>
									</div>
									<div class="form_div" id="missouri_div" style="display: <?php echo ($state_type == "missouri") ? 'block' : 'none'; ?>;">
										<?php $this->load->view('insurance_claim/missouri'); ?>
									</div>
									<div class="form_div" id="columbia_div" style="display: <?php echo ($state_type == "columbia") ? 'block' : 'none'; ?>;">
										<?php $this->load->view('insurance_claim/columbia'); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php $this->load->view('insurance_claim/footer'); ?>
		<script>
			$(window).on("load", function() {
				$('#doctore_previos_treated_div').hide();
				$('#doctore_treated_div').hide();
			});
			$('#state_select').change(function() {
				$('.form_div').hide();
				$('#' + $(this).val()).show();
			});

			// date picker
			var date = new Date();
			var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
			$('.date-picker').datepicker({
				format: 'mm/dd/yyyy',
				"autoclose": true,
				todayBtn: true,
				todayHighlight: true,

			});
			// $('.date-picker').datepicker('setDate', "0");
			$('.date-picker-today').datepicker({
				format: 'mm/dd/yyyy',
				"autoclose": true,
				todayBtn: true,
				todayHighlight: true
			});
			$('.date-picker-today').datepicker('setDate', today);

			// date-time picker
			$(".form_meridian_datetime").datetimepicker({
				format: "mm/dd/yyyy - HH:ii P",
				changeMonth: true,
				changeYear: true,
				showButtonPanel: true,
				isRTL: App.isRTL(),
				showMeridian: !0,
				autoclose: !0,
				pickerPosition: App.isRTL() ? "bottom-right" : "bottom-left",
				todayBtn: !0,
			})

			$('.AlphabetsOnly').keypress(function(e) {
				var regex = new RegExp(/^[a-zA-Z\s]+$/);
				var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
				if (regex.test(str)) {
					return true;
				} else {
					e.preventDefault();
					return false;
				}
			});

			$("#state_select").change(function() {
				$("#emp_state").val('0');
				$("#question1").val('');
				$("#question2").val('');
				$("#question3").val('');
				$("#question4").val('');
			})

			$("#question1,#question2,#question3,#question4").keyup(function() {
				var state = $('#state_select').val();
				if (state == 'new_york_div') {

					if ($(this).attr("id") == 'question1') {
						var question1 = $(this).val();
						$("#NY_q1").val(question1);

					} else if ($(this).attr("id") == 'question2') {
						var question2 = $(this).val();
						$("#NY_q2").val(question2);
					} else if ($(this).attr("id") == 'question3') {
						var question3 = $(this).val();
						$("#NY_q3").val(question3);
					} else if ($(this).attr("id") == 'question4') {
						var question4 = $(this).val();
						$("#NY_q4").val(question4);
					}

				} else if (state == 'new_jersey_div') {

					if ($(this).attr("id") == 'question1') {
						var question1 = $(this).val();
						$("#NJ_q1").val(question1);

					} else if ($(this).attr("id") == 'question2') {
						var question2 = $(this).val();
						$("#NJ_q2").val(question2);
					} else if ($(this).attr("id") == 'question3') {
						var question3 = $(this).val();
						$("#NJ_q3").val(question3);
					} else if ($(this).attr("id") == 'question4') {
						var question4 = $(this).val();
						$("#NJ_q4").val(question4);
					}

				} else if (state == 'maryland_div') {

					if ($(this).attr("id") == 'question1') {
						var question1 = $(this).val();
						$("#ML_q1").val(question1);

					} else if ($(this).attr("id") == 'question2') {
						var question2 = $(this).val();
						$("#ML_q2").val(question2);
					} else if ($(this).attr("id") == 'question3') {
						var question3 = $(this).val();
						$("#ML_q3").val(question3);
					} else if ($(this).attr("id") == 'question4') {
						var question4 = $(this).val();
						$("#ML_q4").val(question4);
					}

				} else if (state == 'connecticut_div') {

					if ($(this).attr("id") == 'question1') {
						var question1 = $(this).val();
						$("#CT_q1").val(question1);

					} else if ($(this).attr("id") == 'question2') {
						var question2 = $(this).val();
						$("#CT_q2").val(question2);
					} else if ($(this).attr("id") == 'question3') {
						var question3 = $(this).val();
						$("#CT_q3").val(question3);
					} else if ($(this).attr("id") == 'question4') {
						var question4 = $(this).val();
						$("#CT_q4").val(question4);
					}

				} else if (state == 'pennsylvania_div') {

					if ($(this).attr("id") == 'question1') {
						var question1 = $(this).val();
						$("#PL_q1").val(question1);

					} else if ($(this).attr("id") == 'question2') {
						var question2 = $(this).val();
						$("#PL_q2").val(question2);
					} else if ($(this).attr("id") == 'question3') {
						var question3 = $(this).val();
						$("#PL_q3").val(question3);
					} else if ($(this).attr("id") == 'question4') {
						var question4 = $(this).val();
						$("#PL_q4").val(question4);
					}

				} else if (state == 'missouri_div') {
					if ($(this).attr("id") == 'question1') {
						var question1 = $(this).val();
						$("#MO_q1").val(question1);
					} else if ($(this).attr("id") == 'question2') {
						var question2 = $(this).val();
						$("#MO_q2").val(question2);
					} else if ($(this).attr("id") == 'question3') {
						var question3 = $(this).val();
						$("#MO_q3").val(question3);
					} else if ($(this).attr("id") == 'question4') {
						var question4 = $(this).val();
						$("#MO_q4").val(question4);
					}

				} else if (state == 'columbia_div') {
					if ($(this).attr("id") == 'question1') {
						var question1 = $(this).val();
						$("#CL_q1").val(question1);
					} else if ($(this).attr("id") == 'question2') {
						var question2 = $(this).val();
						$("#CL_q2").val(question2);
					} else if ($(this).attr("id") == 'question3') {
						var question3 = $(this).val();
						$("#CL_q3").val(question3);
					} else if ($(this).attr("id") == 'question4') {
						var question4 = $(this).val();
						$("#CL_q4").val(question4);
					}
				}
			})

			$("#emp_state").change(function() {
				var state = $('#state_select').val();
				var emp = $(this).val();

				if (state == 'new_york_div') {
					$("#NY_emp_state").val(emp);

				} else if (state == 'new_jersey_div') {
					$("#NJ_emp_state").val(emp);

				} else if (state == 'maryland_div') {
					$("#ML_emp_state").val(emp);

				} else if (state == 'connecticut_div') {
					$("#CT_emp_state").val(emp);

				} else if (state == 'pennsylvania_div') {
					$("#PL_emp_state").val(emp);
				} else if (state == 'missouri_div') {
					$("#MO_emp_state").val(emp);
				} else if (state == 'columbia_div') {
					$("#CL_emp_state").val(emp);
				}

			})

			$("#print_and_save,#NJ_print_and_save,#CT_print_and_save,#ML_print_and_save,#PL_print_and_save").on("click", function() {

				if ($(this).attr("id") == 'print_and_save') {

					if ($("#new_york_form_id").valid()) {
						setTimeout(function() {
							//$('#new_york_form_id')[0].reset();
							// $(".select2").select2('val', 'All');
						}, 6000)
					}

				} else if ($(this).attr("id") == 'NJ_print_and_save') {

					if ($("#new_jersey_form_id").valid()) {
						setTimeout(function() {
							// $('#new_jersey_form_id')[0].reset();
							// $(".select2").select2('val', 'All');
						}, 6000)
					}
				} else if ($(this).attr("id") == 'CT_print_and_save') {

					if ($("#connecticut_form_id").valid()) {
						setTimeout(function() {
							// $('#connecticut_form_id')[0].reset();
							// $(".select2").select2('val', 'All');
						}, 6000)
					}

				} else if ($(this).attr("id") == 'ML_print_and_save') {

					if ($("#maryland_form_id").valid()) {
						setTimeout(function() {
							// $('#maryland_form_id')[0].reset();
							// $(".select2").select2('val', 'All');
						}, 6000)
					}

				} else if ($(this).attr("id") == 'PL_print_and_save') {

					if ($("#pennsylvania_form_id").valid()) {
						setTimeout(function() {
							// $('#pennsylvania_form_id')[0].reset();
							// $(".select2").select2('val', 'All');
						}, 6000)
					}
				}

				// } else if($(this).attr("id") == 'NJ_print_and_save') {
				// alert("dgfdsf");

				// }
			});
		</script>

		</html>
		<!-- new york js -->
		<script type="text/javascript" src="<?php echo base_url('assets/insurance_claim/new_york.js') ?>"></script>
		<!-- new jersey js -->
		<script type="text/javascript" src="<?php echo base_url('assets/insurance_claim/new_jersey.js') ?>"></script>
		<!-- maryaland js -->
		<script type="text/javascript" src="<?php echo base_url('assets/insurance_claim/maryaland.js') ?>"></script>
		<!-- connecticut js -->
		<script type="text/javascript" src="<?php echo base_url('assets/insurance_claim/connecticut.js') ?>"></script>
		<!-- pennsylvania js -->
		<script type="text/javascript" src="<?php echo base_url('assets/insurance_claim/pennsylvania.js') ?>"></script>

		<script type="text/javascript" src="<?php echo base_url('assets/insurance_claim/missouri.js') ?>"></script>

		<script type="text/javascript" src="<?php echo base_url('assets/insurance_claim/columbia.js') ?>"></script>