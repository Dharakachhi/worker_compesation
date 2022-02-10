<?php $i = $j = $k = 0; ?>
<div class="tab-pane active" id="missouri">
	<div class="portlet box blue">
		<div class="portlet-title">
			<div class="caption">
				<i class="fa fa-gift"></i> Missouri Insurance Claim
			</div>
		</div>
		<div class="portlet-body form">
			<form id="missouri_form_id" action="<?php echo base_url(); ?>Insurance_claim/missouri" method="post" class="horizontal-form">
				<div class="row">
					<div class="col-md-1">
					</div>
					<div class="col-md-10">
						<h2 class="text-center"><b>WORKERS COMPENSATION – FIRST REPORT OF INJURY OR ILLNESS</b></h2>
						<h4 class="text-center"><b><i>State of Missouri - Workers' Compensation Board</i></b></h4>
					</div>
					<div class="col-md-1">
					</div>
				</div>
				<div class="form-body">
					<h3 class="form-section" style="color: #4d86c4"><b>Employee/Wage</b></h3>
					<div class="row">
						<div class="col-md-7">
							<label class="col-md-3 control-label"><b><?php echo $i = $i + 1; ?>.</b> Employee Name:<span class="required" aria-required="true">*</span>
							</label>
							<div class="col-md-9">
								<input type="text" value="<?php echo set_value('missouri[full_name]'); ?>" class="form-control AlphabetsOnly" name="missouri[full_name]" placeholder="" autocomplete="off">
								&nbsp;First &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Middle &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Last
								<?php if (isset($errors['missouri[full_name]'])) : ?>
									<label class="text-danger"><?= $errors['missouri[full_name]']; ?></label>
								<?php endif; ?>
							</div>
						</div>
						<div class="col-md-5">
							<div class="col-md-4">
								<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b>.</b> Discipline: <span class="required" aria-required="true">*</span></label>
							</div>
							<div class="col-md-8">
								<div class="form-group">
									<select class="form-control select2" name="missouri[discipline]" data-placeholder="Choose a Discipline" tabindex="1" id="discipline_missouri">
										<option value="">Select Discipline</option>
										<option value="PT" <?php echo set_select('missouri[discipline]', 'PT'); ?>>PT</option>
										<option value="PTA" <?php echo set_select('missouri[discipline]', 'PTA'); ?>>PTA</option>
										<option value="OT" <?php echo set_select('missouri[discipline]', 'OT'); ?>>OT</option>
										<option value="COTA" <?php echo set_select('missouri[discipline]', 'COTA'); ?>>COTA</option>
										<option value="SLP" <?php echo set_select('missouri[discipline]', 'SLP'); ?>>SLP</option>
										<option value="Rehab Aide" <?php echo set_select('missouri[discipline]', 'Rehab Aide'); ?>>Rehab Aide</option>
										<option value="Regional Manager" <?php echo set_select('missouri[discipline]', 'Regional Manager'); ?>>Regional Manager</option>
										<option value="Corporate Staff" <?php echo set_select('missouri[discipline]', 'Corporate Staff'); ?>>Corporate Staff</option>
									</select>
									<?php if (isset($errors['missouri[discipline]'])) : ?>
										<label class="text-danger"><?= $errors['missouri[discipline]']; ?></label>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-2">
								<label class="control-label"><b><?php echo $i = $i + 1; ?>.</b> Facility Name :<span class="required" aria-required="true">*</span></label>
							</div>
							<div class="col-md-10">
								<input placeholder="Facility Name" name="missouri[facility_name]" class="form-control" type="text" value="<?php echo set_value('missouri[facility_name]') ?>" style="margin-left: -3rem;" />
								<?php if (isset($errors['missouri[facility_name]'])) : ?>
									<label class="text-danger"><?= $errors['missouri[facility_name]']; ?></label>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-7">
							<div class="col-md-3">
								<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Date Hire:</label>
							</div>
							<div class="col-md-7">
								<div class="input-group date date-picker">
									<input type="text" size="16" placeholder="Select Date" class="form-control" name="missouri[date_hire]" id="date-time" value="<?php echo set_value('missouri[date_hire]'); ?>">
									<span class="input-group-btn">
										<button class="btn default date-reset" type="button">
											<i class="fa fa-times"></i>
										</button>
										<button class="btn default date-set" type="button">
											<i class="fa fa-calendar"></i>
										</button>
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="col-md-4">
								<label class="control-label"><b><?php echo $i = $i + 1; ?>.</b> State Of Hire</label>
							</div>
							<div class="col-md-8">
								<div class="form-group">
									<input type="hidden" name="question1" id="MO_q1">
									<input type="hidden" name="question2" id="MO_q2">
									<input type="hidden" name="question3" id="MO_q3">
									<input type="hidden" name="question4" id="MO_q4">
									<input type="hidden" name="emp_state" id="MO_emp_state">
									<select class="form-control select2" name="missouri[state_injury]" data-placeholder="Choose a State of Hire" tabindex="1">
										<option value="">Select State Injury</option>
										<option value="AL" <?php echo set_select('missouri[state_injury]', 'AL'); ?>>Alabama</option>
										<option value="AK" <?php echo set_select('missouri[state_injury]', 'AK'); ?>>Alaska</option>
										<option value="AZ" <?php echo set_select('missouri[state_injury]', 'AZ'); ?>>Arizona</option>
										<option value="AR" <?php echo set_select('missouri[state_injury]', 'AR'); ?>>Arkansas</option>
										<option value="CA" <?php echo set_select('missouri[state_injury]', 'CA'); ?>>California</option>
										<option value="CO" <?php echo set_select('missouri[state_injury]', 'CO'); ?>>Colorado</option>
										<option value="CT" <?php echo set_select('missouri[state_injury]', 'CT'); ?>>Connecticut</option>
										<option value="DE" <?php echo set_select('missouri[state_injury]', 'DE'); ?>>Delaware</option>
										<option value="FL" <?php echo set_select('missouri[state_injury]', 'FL'); ?>>Florida</option>
										<option value="GA" <?php echo set_select('missouri[state_injury]', 'GA'); ?>>Georgia</option>
										<option value="HI" <?php echo set_select('missouri[state_injury]', 'HI'); ?>>Hawaii</option>
										<option value="ID" <?php echo set_select('missouri[state_injury]', 'ID'); ?>>Idaho</option>
										<option value="IL" <?php echo set_select('missouri[state_injury]', 'IL'); ?>>Illinois</option>
										<option value="IN" <?php echo set_select('missouri[state_injury]', 'IN'); ?>>Indiana</option>
										<option value="IA" <?php echo set_select('missouri[state_injury]', ''); ?>>Iowa</option>
										<option value="KS" <?php echo set_select('missouri[state_injury]', 'KS'); ?>>Kansas</option>
										<option value="KY" <?php echo set_select('missouri[state_injury]', 'KY'); ?>>Kentucky</option>
										<option value="LA" <?php echo set_select('missouri[state_injury]', 'LA'); ?>>Louisiana</option>
										<option value="ME" <?php echo set_select('missouri[state_injury]', 'ME'); ?>>Maine</option>
										<option value="MD" <?php echo set_select('missouri[state_injury]', 'MD'); ?>>Maryland</option>
										<option value="MA" <?php echo set_select('missouri[state_injury]', 'MA'); ?>>Massachusetts</option>
										<option value="MI" <?php echo set_select('missouri[state_injury]', 'MI'); ?>>Michigan</option>
										<option value="MN" <?php echo set_select('missouri[state_injury]', 'MN'); ?>>Minnesota</option>
										<option value="MS" <?php echo set_select('missouri[state_injury]', 'MS'); ?>>Mississippi</option>
										<option value="MO" <?php echo set_select('missouri[state_injury]', 'MO'); ?>>Missouri</option>
										<option value="MT" <?php echo set_select('missouri[state_injury]', 'MT'); ?>>Montana</option>
										<option value="NE" <?php echo set_select('missouri[state_injury]', 'NE'); ?>>Nebraska</option>
										<option value="NV" <?php echo set_select('missouri[state_injury]', 'NV'); ?>>Nevada</option>
										<option value="NH" <?php echo set_select('missouri[state_injury]', 'NH'); ?>>New Hampshire</option>
										<option value="NJ" <?php echo set_select('missouri[state_injury]', 'NJ'); ?>>New Jersey</option>
										<option value="NM" <?php echo set_select('missouri[state_injury]', 'NM'); ?>>New Mexico</option>
										<option value="NY" <?php echo set_select('missouri[state_injury]', 'NY'); ?>>New York</option>
										<option value="NC" <?php echo set_select('missouri[state_injury]', 'NC'); ?>>North Carolina</option>
										<option value="ND" <?php echo set_select('missouri[state_injury]', 'ND'); ?>>North Dakota</option>
										<option value="OH" <?php echo set_select('missouri[state_injury]', 'OH'); ?>>Ohio</option>
										<option value="OK" <?php echo set_select('missouri[state_injury]', 'OK'); ?>>Oklahoma</option>
										<option value="OR" <?php echo set_select('missouri[state_injury]', 'OR'); ?>>Oregon</option>
										<option value="PA" <?php echo set_select('missouri[state_injury]', 'PA'); ?>>Pennsylvania</option>
										<option value="RI" <?php echo set_select('missouri[state_injury]', 'RI'); ?>>Rhode Island</option>
										<option value="SC" <?php echo set_select('missouri[state_injury]', 'SC'); ?>>South Carolina</option>
										<option value="SD" <?php echo set_select('missouri[state_injury]', 'SD'); ?>>South Dakota</option>
										<option value="TN" <?php echo set_select('missouri[state_injury]', 'TN'); ?>>Tennessee</option>
										<option value="TX" <?php echo set_select('missouri[state_injury]', 'TX'); ?>>Texas</option>
										<option value="UT" <?php echo set_select('missouri[state_injury]', 'UT'); ?>>Utah</option>
										<option value="VT" <?php echo set_select('missouri[state_injury]', 'VT'); ?>>Vermont</option>
										<option value="VA" <?php echo set_select('missouri[state_injury]', 'VA'); ?>>Virginia</option>
										<option value="WA" <?php echo set_select('missouri[state_injury]', 'WA'); ?>>Washington</option>
										<option value="WD" <?php echo set_select('missouri[state_injury]', 'WD'); ?>>Washington DC</option>
										<option value="WV" <?php echo set_select('missouri[state_injury]', 'WV'); ?>>West Virginia</option>
										<option value="WI" <?php echo set_select('missouri[state_injury]', 'WI'); ?>>Wisconsin</option>
										<option value="WY" <?php echo set_select('missouri[state_injury]', 'WY'); ?>>Wyoming</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-7">
							<div class="col-md-3">
								<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Address (INC Zip)</label>
							</div>
							<div class="col-md-9">
								<textarea class="form-control" name="missouri[address]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="House number, City, State, and ZIP"><?php echo set_value('missouri[address]'); ?></textarea>
							</div>
						</div>
						<div class="col-md-5">
							<div class="col-md-4">
								<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Gender<span class="required" aria-required="true">*</span></label>
							</div>
							<div class="col-md-8">
								<div class="form-group form-md-radios">
									<div class="md-radio-inline">
										<div class="md-radio">
											<input type="radio" id="missouri_gender_1" name="missouri[gender]" value="1" <?php echo set_checkbox('missouri[gender]', '1') ?> class="md-radiobtn">
											<label for="missouri_gender_1">
												<span></span>
												<span class="check"></span>
												<span class="box"></span>Male </label>
										</div>
										<div class="md-radio">
											<input type="radio" id="missouri_gender_2" name="missouri[gender]" value="0" <?php echo set_checkbox('missouri[gender]', '0') ?> class="md-radiobtn">
											<label for="missouri_gender_2">
												<span></span>
												<span class="check"></span>
												<span class="box"></span> Female </label>
										</div>
										<?php if (isset($errors['missouri[gender]'])) : ?>
											<label class="text-danger"><?= $errors['missouri[gender]']; ?></label>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-11">
							<div class="col-md-2">
								<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Marital Status</label>
							</div>
							<div class="col-md-9" style="margin-left: -1rem">
								<div class="form-group form-md-radios">
									<div class="md-radio-inline">
										<div class="md-radio">
											<input type="radio" id="missouri_marital_status_option_1" name="missouri[marital_status]" value="0" <?php echo set_checkbox('missouri[marital_status]', '0'); ?> class="md-radiobtn">
											<label for="missouri_marital_status_option_1">
												<span></span>
												<span class="check"></span>
												<span class="box"></span>UNMARRIED SINGLE / DIVORCED </label>
										</div>
										<div class="md-radio">
											<input type="radio" id="missouri_marital_status_option_2" name="missouri[marital_status]" value="1" <?php echo set_checkbox('missouri[marital_status]', '1'); ?> class="md-radiobtn">
											<label for="missouri_marital_status_option_2">
												<span></span>
												<span class="check"></span>
												<span class="box"></span> MARRIED </label>
										</div>
										<div class="md-radio">
											<input type="radio" id="missouri_marital_status_option_3" name="missouri[marital_status]" value="2" <?php echo set_checkbox('missouri[marital_status]', '2'); ?> class="md-radiobtn">
											<label for="missouri_marital_status_option_3">
												<span></span>
												<span class="check"></span>
												<span class="box"></span> SEPARATED </label>
										</div>
										<div class="md-radio">
											<input type="radio" id="missouri_marital_status_option_4" name="missouri[marital_status]" value="3" <?php echo set_checkbox('missouri[marital_status]', '3'); ?> class="md-radiobtn">
											<label for="missouri_marital_status_option_4">
												<span></span>
												<span class="check"></span>
												<span class="box"></span> UNKNOWN </label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-7">
							<div class="col-md-5">
								<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Occupation / Job Title <span class="required" aria-required="true">*</span></label>
							</div>
							<div class="col-md-7">
								<input style="width: 100%!important;" name="missouri[job_title]" placeholder="Occupation / Job Title" class="form-control form-control-inline input-medium" size="16" type="text" value="<?php echo set_value('missouri[job_title]'); ?>" />
								<?php if (isset($errors['missouri[job_title]'])) : ?>
									<label class="text-danger"><?= $errors['missouri[job_title]']; ?></label>
								<?php endif; ?>
							</div>
						</div>
						<div class="col-md-5">
							<div class="col-md-5">
								<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b>Employment Status</label>
							</div>
							<div class="col-md-6">
								<div class="form-group form-md-radios">
									<div class="md-radio-inline" id="radio-msg">
										<div class="md-radio">
											<input type="radio" id="missouri_job_title_option_1" name="missouri[employment_status]" value="0" <?php echo set_checkbox('missouri[employment_status]', '0'); ?> class="md-radiobtn">
											<label for="missouri_job_title_option_1">
												<span></span>
												<span class="check"></span>
												<span class="box"></span>Part time </label>
										</div>
										<div class="md-radio">
											<input type="radio" id="missouri_job_title_option_2" name="missouri[employment_status]" value="1" <?php echo set_checkbox('missouri[employment_status]', '1'); ?> class="md-radiobtn">
											<label for="missouri_job_title_option_2">
												<span></span>
												<span class="check"></span>
												<span class="box"></span>Full time </label>
										</div>
										<?php if (isset($errors['missouri[employment_status]'])) : ?>
											<label class="text-danger"><?= $errors['missouri[employment_status]']; ?></label>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-7">
							<div class="col-md-5">
								<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Number of days worked each week</label>
							</div>
							<div class="col-md-7">
								<input placeholder="Number of days worked each Week" name="missouri[day_worked]" class="form-control" type="text" value="<?php echo set_value('missouri[day_worked]'); ?>" id="missouri_days_week" />
								<p id="possitive-error" style="color: red;display: none;">Please Enter number</p>
							</div>
						</div>
						<div class="col-md-5">
							<div class="col-md-5" style="margin-top: 5px;">
								<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Full Pay for day of Injury</label>
							</div>
							<div class="col-md-7">
								<div class="form-group form-md-radios">
									<div class="md-radio-inline">
										<div class="md-radio">
											<input type="radio" id="missouri_full_pay_for_day_of_injury_option_1" name="missouri[full_pay]" value="1" <?php echo set_checkbox('missouri[full_pay]', '1'); ?> checked class="md-radiobtn">
											<label for="missouri_full_pay_for_day_of_injury_option_1">
												<span></span>
												<span class="check"></span>
												<span class="box"></span>Yes </label>
										</div>
										<div class="md-radio">
											<input type="radio" id="missouri_full_pay_for_day_of_injury_option_2" name="missouri[full_pay]" value="0" <?php echo set_checkbox('missouri[full_pay]', '0'); ?> class="md-radiobtn">
											<label for="missouri_full_pay_for_day_of_injury_option_2">
												<span></span>
												<span class="check"></span>
												<span class="box"></span>No </label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-6">
							<div class="col-md-6" style="margin-right: -68px; margin-top: 6px;">
								<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Did Salary Continue</label>
							</div>
							<div class="col-md-6">
								<div class="form-group form-md-radios">
									<div class="md-radio-inline">
										<div class="md-radio">
											<input type="radio" id="missouri_did_salary_continue_option_1" name="missouri[salary_continue]" value="1" <?php echo set_checkbox('missouri[salary_continue]', '1'); ?> class="md-radiobtn">
											<label for="missouri_did_salary_continue_option_1">
												<span></span>
												<span class="check"></span>
												<span class="box"></span>Yes </label>
										</div>
										<div class="md-radio">
											<input type="radio" id="missouri_did_salary_continue_option_2" name="missouri[salary_continue]" value="0" <?php echo set_checkbox('missouri[salary_continue]', '0'); ?> class="md-radiobtn">
											<label for="missouri_did_salary_continue_option_2">
												<span></span>
												<span class="check"></span>
												<span class="box"></span>No </label>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="col-md-6">
								<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Preferred Employee Email address</label>
							</div>
							<div class="col-md-6">
								<input type="email" name="missouri[employee_email]" class="form-control" value="<?php echo set_value('missouri[employee_email]'); ?>" placeholder="Preferred Employee Email address">
							</div>
						</div>
					</div>
					<hr>
					<!-- <div class="row">
						<div class="col-md-6">
							<div class="col-md-2">
								<label class="control-label"><b><?php echo $i = $i + 1; ?>.</b>Rate of Pay :<span class="required" aria-required="true">*</span></label>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<select class="form-control select2" id="missouri_rateofpay" name="missouri[rate_of_pay]" data-placeholder="Choose a Rate of Pay" tabindex="1">
										<option value="">Select Rate of Pay </option>
										<option value="Hour" <?php echo set_select('missouri[rate_of_pay]', 'Hour'); ?>>Hour</option>
										<option value="Day" <?php echo set_select('missouri[rate_of_pay]', 'Day'); ?>>Day</option>
										<option value="Week" <?php echo set_select('missouri[rate_of_pay]', 'Week'); ?>>Week</option>
										<option value="Month" <?php echo set_select('missouri[rate_of_pay]', 'Month'); ?>>Month</option>
										<option value="Other" <?php echo set_select('missouri[rate_of_pay]', 'Other'); ?>>Other</option>
									</select>
								</div>
							</div>
						</div>
					</div> -->
					<h3 class="form-section" style="color: #4d86c4"><b>Occurrence/Treatment</b></h3>
					<div class="row">
						<div class="col-md-6">
							<div class="col-md-5">
								<label class=" control-label"><b><?php echo $j = $j + 1; ?>.</b> Time Employee Began Work :<span class="required" aria-required="true">*</span></label>
							</div>
							<div class="col-md-7">
								<!-- <div class="input-group date form_meridian_datetime"> -->
								<div class="input-group">
									<input type="text" size="16" class="form-control timepicker" name="missouri[began_work]" placeholder="Select Date" value="<?php echo set_value('missouri[began_work]'); ?>" readonly id="missouri_began_work">
									<span class="input-group-btn">
										<button class="btn default" type="button" id="injury_clock">
											<i class="fa fa-clock-o"></i>
										</button>
									</span>
								</div>
								<?php if (isset($errors['missouri[began_work]'])) : ?>
									<label class="text-danger"><?= $errors['missouri[began_work]']; ?></label>
								<?php endif; ?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="col-md-5">
								<label class=" control-label"><b><?php echo $j = $j + 1; ?>.</b> Date of Injury / Illness :<span class="required" aria-required="true">*</span></label>
							</div>
							<div class="col-md-7">
								<div class="input-group date date-picker">
									<input type="text" size="16" placeholder="Select Date" name="missouri[date_of_injury]" value="<?php echo set_value('missouri[date_of_injury]'); ?>" readonly class="form-control" id="date_injury_newjersey">
									<span class="input-group-btn">
										<button class="btn default date-reset" type="button">
											<i class="fa fa-times"></i>
										</button>
										<button class="btn default date-set" type="button">
											<i class="fa fa-calendar"></i>
										</button>
									</span>
								</div>
								<?php if (isset($errors['missouri[date_of_injury]'])) : ?>
									<label class="text-danger"><?= $errors['missouri[date_of_injury]']; ?></label>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-6">
							<div class="col-md-5">
								<label class=" control-label"><b><?php echo $j = $j + 1; ?>.</b> Time of Occurrence<span class="required" aria-required="true">*</span></label>
							</div>
							<div class="col-md-7">
								<div class="input-group meridian_1">
									<!-- <div class="input-group meridian_1 date form_meridian_datetime"> -->
									<input type="text" placeholder="Select Date Time" size="16" class="form-control timepicker" name="missouri[time_of_injury]" value="<?php echo set_value('missouri[time_of_injury]'); ?>" readonly id="time_occurance_newjersey">
									<span class="input-group-btn">
										<button class="btn default" type="button" id="injury_clock">
											<i class="fa fa-clock-o"></i>
										</button>
									</span>
								</div>
								<?php if (isset($errors['missouri[time_of_injury]'])) : ?>
									<label class="text-danger"><?= $errors['missouri[time_of_injury]']; ?></label>
								<?php endif; ?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="col-md-5">
								<label class=" control-label"><b><?php echo $j = $j + 1; ?>.</b> Last Work Date <span class="required" aria-required="true">*</span></label>
							</div>
							<div class="col-md-7">
								<div class="input-group date date-picker">
									<input type="text" size="16" placeholder="Select Date" name="missouri[work_stop_date]" class="form-control" value="<?php echo set_value('missouri[work_stop_date]'); ?>" readonly id="last_workdate_newjersey">
									<span class="input-group-btn">
										<button class="btn default date-reset" type="button">
											<i class="fa fa-times"></i>
										</button>
										<button class="btn default date-set" type="button">
											<i class="fa fa-calendar"></i>
										</button>
									</span>
								</div>
								<p class="min_date_error error" style="display:none">This date should be less than from Return Work Date</p>
								<p class="same_date_missouri error" style="display:none">You cannot select same date</p>
								<?php if (isset($errors['missouri[work_stop_date]'])) : ?>
									<label class="text-danger"><?= $errors['missouri[work_stop_date]']; ?></label>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-6">
							<div class="col-md-5">
								<label class=" control-label"><b><?php echo $j = $j + 1; ?>.</b> Date Employer Notified <span class="required" aria-required="true">*</span></label>
							</div>
							<div class="col-md-7">
								<div class="input-group date date-picker-today">
									<input type="text" size="16" class="form-control" name="missouri[date_notified]" placeholder="Select Date" value="<?php echo set_value('missouri[date_notified]'); ?>" readonly id="employee_notified_newjersey">
									<span class="input-group-btn">
										<button class="btn default date-reset" type="button">
											<i class="fa fa-times"></i>
										</button>
										<button class="btn default date-set" type="button">
											<i class="fa fa-calendar"></i>
										</button>
									</span>
								</div>
								<?php if (isset($errors['missouri[date_notified]'])) : ?>
									<label class="text-danger"><?= $errors['missouri[date_notified]']; ?></label>
								<?php endif; ?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="col-md-5">
								<label class=" control-label"><b><?php echo $j = $j + 1; ?>.</b> Date Disability Began</label>
							</div>
							<div class="col-md-7">
								<div class="input-group date date-picker">
									<input type="text" size="16" placeholder="Select Date" class="form-control" name="missouri[date_disability_began]" value="<?php echo set_value('missouri[date_disability_began]'); ?>" readonly>
									<span class="input-group-btn">
										<button class="btn default date-reset" type="button">
											<i class="fa fa-times"></i>
										</button>
										<button class="btn default date-set" type="button">
											<i class="fa fa-calendar"></i>
										</button>
									</span>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-6">
							<div class="col-md-5">
								<label class=" control-label"><b><?php echo $j = $j + 1; ?>.</b> Type of Injury / Illness <span class="required" aria-required="true">*</span></label>
							</div>
							<div class="col-md-7">
								<select class="form-control select2" name="missouri[type_of_injury]" data-placeholder="Choose a Type of Injury" tabindex="1" id="missouri_illness_injury">
									<option value="">Select Injury</option>
									<option value="Abrasion/Laceration" <?php echo set_select('missouri[type_of_injury]', 'Abrasion/Laceration'); ?>>Abrasion/Laceration</option>

									<option value="Concussion" <?php echo set_select('missouri[type_of_injury]', 'Concussion'); ?>>Concussion</option>

									<option value="Dislocation" <?php echo set_select('missouri[type_of_injury]', 'Dislocation'); ?>>Dislocation</option>

									<option value="Illness/Infection" <?php echo set_select('missouri[type_of_injury]', 'Illness/Infection'); ?>>Illness/Infection</option>

									<option value="Sprain/Strain" <?php echo set_select('missouri[type_of_injury]', 'Sprain/Strain'); ?>>Sprain/Strain</option>

									<option value="Burn" <?php echo set_select('missouri[type_of_injury]', 'Burn'); ?>>Burn</option>

									<option value="Contusion" <?php echo set_select('missouri[type_of_injury]', 'Contusion'); ?>>Contusion</option>

									<option value="Fracture" <?php echo set_select('missouri[type_of_injury]', 'Fracture'); ?>>Fracture</option>

									<option value="Puncture" <?php echo set_select('missouri[type_of_injury]', 'Puncture'); ?>>Puncture</option>

									<option value="No Apparent Injury" <?php echo set_select('missouri[type_of_injury]', 'No Apparent Injury'); ?>>No Apparent Injury</option>

									<option value="Other" <?php echo set_select('missouri[type_of_injury]', 'Other'); ?>>Other</option>
								</select>
								<?php if (isset($errors['missouri[type_of_injury]'])) : ?>
									<label class="text-danger"><?= $errors['missouri[type_of_injury]']; ?></label>
								<?php endif; ?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="col-md-5">
								<label class=" control-label"><b><?php echo $j = $j + 1; ?>.</b> Part of Body Affected <span class="required" aria-required="true">*</span></label>
							</div>
							<div class="col-md-7">
								<input placeholder="Part of Body Affected" name="missouri[part_body_affected]" class="form-control" type="text" value="<?php echo set_value('missouri[part_body_affected]'); ?>" />
								<?php if (isset($errors['missouri[part_body_affected]'])) : ?>
									<label class="text-danger"><?= $errors['missouri[part_body_affected]']; ?></label>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-8">
							<div class="col-md-8">
								<label class=" control-label"><b><?php echo $j = $j + 1; ?>.</b> Did Injury / Illness / Exposure occur on employer’s premises?</label>
							</div>
							<div class="col-md-4">
								<div class="form-group form-md-radios">
									<div class="md-radio-inline">
										<div class="md-radio">
											<input type="radio" id="missouri_did_injury_employer_permises_option_1" name="missouri[injury_permises]" value="1" <?php set_checkbox('missouri[injury_permises]', '1'); ?> class="md-radiobtn">
											<label for="missouri_did_injury_employer_permises_option_1">
												<span></span>
												<span class="check"></span>
												<span class="box"></span>Yes </label>
										</div>
										<div class="md-radio">
											<input type="radio" id="missouri_did_injury_employer_permises_option_2" name="missouri[injury_permises]" value="0" <?php echo set_checkbox('missouri[injury_permises]', '0'); ?> class="md-radiobtn" checked>
											<label for="missouri_did_injury_employer_permises_option_2">
												<span></span>
												<span class="check"></span>
												<span class="box"></span>No </label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-5">
								<label class="control-label"><b><?php echo $j = $j + 1; ?>.</b> Department or Location Where Accident or Illness occurred<span class="required" aria-required="true">*</span></label>
							</div>
							<div class="col-md-7">
								<textarea class="form-control" name="missouri[location_where_accident]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="Department or Location Where Accident or Illness occurred"><?php echo set_value('missouri[location_where_accident]'); ?></textarea>
								<?php if (isset($errors['missouri[location_where_accident]'])) : ?>
									<label class="text-danger"><?= $errors['missouri[location_where_accident]']; ?></label>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-5">
								<label class="control-label"><b><?php echo $j = $j + 1; ?>.</b> ALL EQUIPMENT, MATERIALS, OR CHEMICALS EMPLOYEE WAS USING WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED<span class="required" aria-required="true">*</span></label>
							</div>
							<div class="col-md-7">
								<textarea class="form-control" name="missouri[equipment_meterials]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="ALL EQUIPMENT, MATERIALS, OR CHEMICALS EMPLOYEE WAS USING WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED"><?php echo set_value('missouri[equipment_meterials]'); ?></textarea>
								<?php if (isset($errors['missouri[equipment_meterials]'])) : ?>
									<label class="text-danger"><?= $errors['missouri[equipment_meterials]']; ?></label>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-5">
								<label class="control-label"><b><?php echo $j = $j + 1; ?>.</b> SPECIFIC ACTIVITY THE EMPLOYEE WAS ENGAGED IN WHEN THE ACCIDENT OR ILLNESS EXPOSURE OCCURRED <span class="required" aria-required="true">*</span></label>
							</div>
							<div class="col-md-7">
								<textarea class="form-control" name="missouri[activity_engaed]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="SPECIFIC ACTIVITY THE EMPLOYEE WAS ENGAGED IN WHEN THE ACCIDENT OR ILLNESS EXPOSURE OCCURRED"><?php echo set_value('missouri[activity_engaed]'); ?></textarea>
								<?php if (isset($errors['missouri[activity_engaed]'])) : ?>
									<label class="text-danger"><?= $errors['missouri[activity_engaed]']; ?></label>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-5">
								<label class="control-label"><b><?php echo $j = $j + 1; ?>.</b> WORK PROCESS THE EMPLOYEE WAS ENGAGED IN WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED<span class="required" aria-required="true">*</span></label>
							</div>
							<div class="col-md-7">
								<textarea class="form-control" name="missouri[work_process_emp_engade]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="WORK PROCESS THE EMPLOYEE WAS ENGAGED IN WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED"><?php echo set_value('missouri[work_process_emp_engade]'); ?></textarea>
								<?php if (isset($errors['missouri[work_process_emp_engade]'])) : ?>
									<label class="text-danger"><?= $errors['missouri[work_process_emp_engade]']; ?></label>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-5">
								<label class="control-label"><b><?php echo $j = $j + 1; ?>.</b> HOW INJURY OR ILLNESS/ABNORMAL HEALTH CONDITION OCCURRED. DESCRIBE THE SEQUENCE OF EVENTS AND INCLUDE ANY OBJECTS OR SUBSTANCES THAT DIRECTLY INJURED THE EMPLOYEE OR MADE THE EMPLOYEE ILL <span class="required" aria-required="true">*</span></label>
							</div>
							<div class="col-md-7">
								<textarea class="form-control" name="missouri[how_injury_health_condition]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="HOW INJURY OR ILLNESS/ABNORMAL HEALTH CONDITION OCCURRED. DESCRIBE THE SEQUENCE OF EVENTS AND INCLUDE ANY OBJECTS OR SUBSTANCES THAT DIRECTLY INJURED THE EMPLOYEE OR MADE THE EMPLOYEE ILL"><?php echo set_value('missouri[how_injury_health_condition]') ?></textarea>
								<?php if (isset($errors['missouri[how_injury_health_condition]'])) : ?>
									<label class="text-danger"><?= $errors['missouri[how_injury_health_condition]']; ?></label>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-6">
							<div class="col-md-5">
								<label class=" control-label"><b><?php echo $j = $j + 1; ?>.</b> DATE RETURN(ED) TO WORK</label>
							</div>
							<div class="col-md-7">
								<div class="input-group date date-picker">
									<input type="text" size="16" placeholder="Select Date" class="form-control" name="missouri[return_work_date]" value="<?php echo set_value('missouri[return_work_date]'); ?>" readonly id="return_work_date_missouri">
									<span class="input-group-btn">
										<button class="btn default date-reset" type="button">
											<i class="fa fa-times"></i>
										</button>
										<button class="btn default date-set" type="button">
											<i class="fa fa-calendar"></i>
										</button>
									</span>
								</div>
								<p class="max_date_error error" style="display:none">This date should be greater than from on Last Work Date</p>
								<p class="same_date_missouri error" style="display:none">You cannot select same date</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="col-md-6">
								<label class=" control-label"><b><?php echo $j = $j + 1; ?>.</b> IF FATAL, GIVE DATE OF DEATH</label>
							</div>
							<div class="col-md-6">
								<div class="input-group date date-picker">
									<input type="text" size="16" placeholder="Select Date" class="form-control" name="missouri[if_fatel_death_date]" value="<?php echo set_value('missouri[if_fatel_death_date]'); ?>" readonly>
									<span class="input-group-btn">
										<button class="btn default date-reset" type="button">
											<i class="fa fa-times"></i>
										</button>
										<button class="btn default date-set" type="button">
											<i class="fa fa-calendar"></i>
										</button>
									</span>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-7">
							<div class="col-md-8">
								<label class=" control-label"><b><?php echo $j = $j + 1; ?>.</b> WERE SAFEGUARDS OR SAFETY EQUIPMENT PROVIDED?</label>
							</div>
							<div class="col-md-4">
								<div class="form-group form-md-radios">
									<div class="md-radio-inline">
										<div class="md-radio">
											<input type="radio" id="missouri_were_safeguards_option_1" name="missouri[where_safeguards]" value="1" class="md-radiobtn sefe_guards_eqp_cls" <?php echo set_checkbox('="missouri[where_safeguards]', '1'); ?>>
											<label for="missouri_were_safeguards_option_1">
												<span></span>
												<span class="check"></span>
												<span class="box"></span>Yes </label>
										</div>
										<div class="md-radio">
											<input type="radio" id="missouri_were_safeguards_option_2" name="missouri[where_safeguards]" value="0" <?php echo set_checkbox('missouri[where_safeguards]', '0'); ?> class="md-radiobtn sefe_guards_eqp_cls">
											<label for="missouri_were_safeguards_option_2">
												<span></span>
												<span class="check"></span>
												<span class="box"></span>No </label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="col-md-5">
								<label class=" control-label"><b><?php echo $j = $j + 1; ?>.</b> WERE THEY USED?</label>
							</div>
							<div class="col-md-7">
								<div class="form-group form-md-radios">
									<div class="md-radio-inline">
										<div class="md-radio">
											<input type="radio" id="missouri_were_they_used_option_1" name="missouri[where_used_safaguard]" value="1" <?php echo set_checkbox('missouri[where_used_safaguard]', '1') ?> class="md-radiobtn">
											<label for="missouri_were_they_used_option_1">
												<span></span>
												<span class="check"></span>
												<span class="box"></span>Yes </label>
										</div>
										<div class="md-radio">
											<input type="radio" id="missouri_were_they_used_option_2" name="missouri[where_used_safaguard]" value="0" <?php echo set_checkbox('missouri[where_used_safaguard]', '0'); ?> class="md-radiobtn">
											<label for="missouri_were_they_used_option_2">
												<span></span>
												<span class="check"></span>
												<span class="box"></span>No </label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-5">
								<label class="control-label"><b><?php echo $j = $j + 1; ?>.</b> PHYSICIAN/HEALTH CARE PROVIDER (NAME & ADDRESS)</label>
							</div>
							<div class="col-md-7">
								<textarea class="form-control" name="missouri[physician_provider]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="PHYSICIAN/HEALTH CARE PROVIDER (NAME & ADDRESS)"><?php echo set_value('missouri[physician_provider]'); ?></textarea>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-5">
								<label class="control-label"><b><?php echo $j = $j + 1; ?>.</b> HOSPITAL OR OFF SITE TREATMENT (NAME & ADDRESS)</label>
							</div>
							<div class="col-md-7">
								<textarea class="form-control" name="missouri[hospital_treatment]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="HOSPITAL OR OFF SITE TREATMENT (NAME & ADDRESS)"><?php echo set_value('missouri[hospital_treatment]'); ?></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="col-md-12" style="margin: 15px;">
								<label class="control-label"><b>Initial Treatment</b></label>
							</div>
							<div class="col-md-12">
								<div class="md-checkbox-inline">
									<div class="col-md-3">
										<div class="md-checkbox">
											<input type="checkbox" id="missouri_hospital_or_off_site_treatment_checkboxs_1" name="missouri[hospital_initial_treatment][]" <?php echo set_checkbox('missouri[hospital_initial_treatment][]', '0'); ?> value="0" class="md-check">
											<label for="missouri_hospital_or_off_site_treatment_checkboxs_1">
												<span class="inc"></span>
												<span class="check"></span>
												<span class="box"></span> NO MEDICAL TREATMENT </label>
										</div>
									</div>
									<div class="col-md-3">
										<div class="md-checkbox">
											<input type="checkbox" id="missouri_hospital_or_off_site_treatment_checkboxs_2" name="missouri[hospital_initial_treatment][]" value="1" <?php echo set_checkbox('missouri[hospital_initial_treatment][]', '1'); ?> class="md-check">
											<label for="missouri_hospital_or_off_site_treatment_checkboxs_2">
												<span class="inc"></span>
												<span class="check"></span>
												<span class="box"></span> MINOR: BY EMPLOYER </label>
										</div>
									</div>
									<div class="col-md-3">
										<div class="md-checkbox">
											<input type="checkbox" id="missouri_hospital_or_off_site_treatment_checkboxs_3" name="missouri[hospital_initial_treatment][]" value="2" <?php echo set_checkbox('missouri[hospital_initial_treatment][]', '2'); ?> class="md-check">
											<label for="missouri_hospital_or_off_site_treatment_checkboxs_3">
												<span class="inc"></span>
												<span class="check"></span>
												<span class="box"></span> MINOR CLINIC/HOSP </label>
										</div>
									</div>
									<div class="col-md-3">
										<div class="md-checkbox">
											<input type="checkbox" id="missouri_hospital_or_off_site_treatment_checkboxs_4" name="missouri[hospital_initial_treatment][]" value="3" <?php echo set_checkbox('missouri[hospital_initial_treatment][]', '3'); ?> class="md-check">
											<label for="missouri_hospital_or_off_site_treatment_checkboxs_4">
												<span class="inc"></span>
												<span class="check"></span>
												<span class="box"></span> EMERGENCY CARE </label>
										</div>
									</div>
									<div class="col-md-3">
										<div class="md-checkbox">
											<input type="checkbox" id="missouri_hospital_or_off_site_treatment_checkboxs_5" name="missouri[hospital_initial_treatment][]" <?php echo set_checkbox('missouri[hospital_initial_treatment][]', '4'); ?> value="4" class="md-check">
											<label for="missouri_hospital_or_off_site_treatment_checkboxs_5">
												<span class="inc"></span>
												<span class="check"></span>
												<span class="box"></span> HOSPITALIZED > 24 HOURS </label>
										</div>
									</div>
									<div class="col-md-3">
										<div class="md-checkbox">
											<input type="checkbox" id="missouri_hospital_or_off_site_treatment_checkboxs_6" name="missouri[hospital_initial_treatment][]" <?php echo set_checkbox('missouri[hospital_initial_treatment][]', '5'); ?> value="5" class="md-check">
											<label for="missouri_hospital_or_off_site_treatment_checkboxs_6">
												<span class="inc"></span>
												<span class="check"></span>
												<span class="box"></span> FUTURE MAJOR MEDICAL </label>
										</div>
									</div>
									<div class="col-md-3">
										<div class="md-checkbox">
											<input type="checkbox" id="missouri_hospital_or_off_site_treatment_checkboxs_7" name="missouri[hospital_initial_treatment][]" <?php echo set_checkbox('missouri[hospital_initial_treatment][]', '6'); ?> value="6" class="md-check">
											<label for="missouri_hospital_or_off_site_treatment_checkboxs_7">
												<span class="inc"></span>
												<span class="check"></span>
												<span class="box"></span> LOST TIME ANTICIPATED </label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<h3 class="form-section" style="color: #4d86c4"><b>Other</b></h3>
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-3">
								<label class="control-label"><b><?php echo $k = $k + 1; ?>.</b> WITNESSES (NAME & PHONE #)</label>
							</div>
							<div class="col-md-9">
								<input placeholder="WITNESSES (NAME & PHONE #)" name="missouri[witnesses]" class="form-control" type="text" value="<?php echo set_value('missouri[witnesses]'); ?>" /><br>
								<input placeholder="WITNESSES (NAME & PHONE #)" name="missouri[witnesses_1]" class="form-control" type="text" value="<?php echo set_value('missouri[witnesses_1]'); ?>" /><br>
								<input placeholder="WITNESSES (NAME & PHONE #)" name="missouri[witnesses_2]" class="form-control" type="text" value="<?php echo set_value('missouri[witnesses_2]'); ?>" />
								<div class="form-control-focus"> </div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-8">
							<div class="col-md-4">
								<label class=" control-label"><b><?php echo $k = $k + 1; ?>.</b> DATE ADMINISTRATOR NOTIFIED :</label>
							</div>
							<div class="col-md-6" style="margin-left: 3rem">
								<div class="input-group date date-picker-today">
									<input type="text" size="16" class="form-control" name="missouri[date_administrator_notified]" placeholder="Select Date" value="<?php echo set_value('missouri[date_administrator_notified]'); ?>" readonly>
									<span class="input-group-btn">
										<button class="btn default date-reset" type="button">
											<i class="fa fa-times"></i>
										</button>
										<button class="btn default date-set" type="button">
											<i class="fa fa-calendar"></i>
										</button>
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="col-md-5">
								<label class=" control-label"><b><?php echo $k = $k + 1; ?>.</b> DATE PREPARED </label>
							</div>
							<div class="col-md-7">
								<div class="input-group date date-picker-today">
									<input type="text" size="16" placeholder="Select Date" class="form-control" name="missouri[date_prepared]" value="<?php echo set_value('missouri[date_prepared]'); ?>" readonly>
									<span class="input-group-btn">
										<button class="btn default date-reset" type="button">
											<i class="fa fa-times"></i>
										</button>
										<button class="btn default date-set" type="button">
											<i class="fa fa-calendar"></i>
										</button>
									</span>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-8">
							<div class="col-md-4">
								<label class=" control-label"><b><?php echo $k = $k + 1; ?>.</b> PREPARER’S NAME & TITLE </label>
							</div>
							<div class="col-md-6">
								<input placeholder="Joyce Ginsberg , Benefits Manager" name="missouri[preparer_name]" class="form-control" type="text" value="<?php echo set_value('missouri[preparer_name]', 'Joyce Ginsberg , Benefits Manager'); ?>" style="margin-left: 3rem" />
							</div>
						</div>
						<div class="col-md-4">
							<div class="col-md-5">
								<label class=" control-label"><b><?php echo $k = $k + 1; ?>.</b> PHONE NUMBER </label>
							</div>
							<div class="col-md-7">
								<input placeholder="732-987-3817" name="missouri[phone_number]" class="form-control phone-number" type="text" value="<?php echo set_value('missouri[phone_number]', '732-987-3817'); ?>" />
								<!-- <input placeholder="732 987-3817" name="missouri[phone_number]" class="form-control phone-number" type="text" value="<?php echo set_value('missouri[phone_number]', '732-987-3817'); ?>" data-inputmask="'mask': '999-999-9999 t\\m', 'jitMasking': true, 'showMaskOnFocus': false, 'showMaskOnHover': false, 'hourFormat': '12', 'alias': 'datetime', 'nullable': true" /> -->
							</div>
						</div>
						<hr>
					</div>
					<div class="form-actions right">
						<!-- <button type="button" class="btn default" id="cancel_form_newjersey">Cancel</button> -->
						<!-- <a  href="https://test.tendertouch.com/upload/WC-Instructions-Guidelines.pdf" target="_blank" class="btn blue"><i class="fa fa-print"></i> Print</a> -->
						<button type="submit" class="btn blue" name="save_print" formtarget="_blank" id="NJ_print_and_save"><i class="fa fa-check"></i> Save & print</button>
						<button type="submit" class="btn blue" id="missouri_submit" name="onlysave"><i class="fa fa-check"></i> Save</button>
					</div>
			</form>
		</div>
	</div>
</div>
</div>