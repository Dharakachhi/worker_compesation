<?php $i = $j = $k = $a = $b = $c = $d = 0;
if ($data['return_work_date'] != '0000-00-00' && $data['work_stop_date'] != '0000-00-00') {
	$return_worked = date("Y/m/d", strtotime($data['return_work_date']));
	$stop_date = date("Y/m/d", strtotime($data['work_stop_date']));
	$return_worked = strtotime($return_worked);
	$stop_date = strtotime($stop_date);
	$datediff = $return_worked - $stop_date;
	$day_missed = round(@$datediff / (60 * 60 * 24));
} else {
	$day_missed = '';
}
?>
<div class="page-content-wrapper">
	<div class="page-content">
		<div class="page-bar">
			<ul class="page-breadcrumb">
				<li><a href="<?php echo base_url('dashbord'); ?>">Home</a><i class="fa fa-circle"></i></li>
				<li><a href="#">Pennsylvania Insurance Claim</a></li>
			</ul>
		</div>
		<h1 class="page-title"> Pennsylvania Insurance Claim
		</h1>
		<form id="pennsylvania_form_id" action="<?php echo base_url('Insurance_manage/pennsylvania/' . $this->uri->segment(3)); ?>" class="horizontal-form" method="post">
			<div class="row">
				<div class="col-md-6">
					<div class="col-md-5">
						<label class="control-label" for="state_injury_or_illness_occurred">Day return to work :</label>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<input type="text" size="16" placeholder="Select Date" class="form-control" name="pennsylvania[return_work_date]" value="<?php echo (set_value('pennsylvania[return_work_date]') != "") ? set_value('pennsylvania[return_work_date]') : database_to_datepicker($data['return_work_date']); ?>" readonly>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-5">
						<label class="control-label" for="state_injury_or_illness_occurred">Day missed :</label>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<input type="text" class="form-control" value="<?php echo $day_missed; ?>" name="pennsylvania[return_work_date]" style="width: 225px;" readonly>
							<!-- <input type="text" class="form-control"  value="<?php echo (set_value('pennsylvania[return_work_date]') != "") ? set_value('pennsylvania[return_work_date]') : database_to_datepicker($data['work_stop_date']) . ' - ';
																					echo (set_value('pennsylvania[return_work_date]') != "") ? set_value('pennsylvania[return_work_date]') : database_to_datepicker($data['return_work_date']); ?>" name="pennsylvania[return_work_date]" style="width: 225px;" readonly> -->
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="col-md-5">
						<label class="control-label" for="state_injury_or_illness_occurred">Claim Number :</label>
					</div>
					<div class="col-md-5">
						<input type="text" placeholder="Claim Number" size="16" class="form-control" name="pennsylvania[claim_number]" value="<?php echo (set_value('pennsylvania[claim_number]') != "") ? set_value('pennsylvania[claim_number]') : @$data['claim_number']; ?>" name="pennsylvania[claim_number]">
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-5">
						<label class="control-label" for="state_injury_or_illness_occurred">Insurance Company :</label>
					</div>
					<div class="col-md-5">
						<input type="text" placeholder="Insurance Company" size="16" class="form-control" name="pennsylvania[insurance_company]" value="<?php echo (set_value('pennsylvania[insurance_company]') != "") ? set_value('pennsylvania[insurance_company]') : @$data['insurance_company']; ?>" name="pennsylvania[insurance_company]">
					</div>
				</div>
			</div>

			<div class="row" style="margin-top: 10px;">
				<div class="col-md-6">
					<div class="col-md-5">
						<label class="control-label" for="state_injury_or_illness_occurred">Date submitted:</label>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<input type="text" placeholder="Select Date" size="16" class="form-control" value="<?php echo (!isset($data['addition_date'])) ? set_value('pennsylvania[addition_date]', database_to_datepicker($data['created_at'])) : database_to_datepicker($data['addition_date']); ?>" readonly>

						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-5">
						<label class="control-label" for="state_injury_or_illness_occurred">WC Contact Information:</label>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<input type="text" class="form-control" value="<?= @$data['wc_contact_info']; ?>" name="pennsylvania[wc_contact_info]" style="width: 225px;" placeholder="WC Information">
							<!-- <input type="text" class="form-control"  value="<?php echo (set_value('pennsylvania[work_stop_date]') != "") ? set_value('pennsylvania[work_stop_date]') . '-' . set_value('pennsylvania[return_work_date]') : database_to_datepicker($data['work_stop_date']) . ' - ' . database_to_datepicker($data['return_work_date']); ?>" name="pennsylvania[return_work_date]" style="width: 225px;" readonly> -->
						</div>
					</div>
				</div>
			</div>
			<div class="row" style="margin-top: 10px;">
				<div class="col-md-6">
					<div class="col-md-5">
						<label class="control-label" for="state_injury_or_illness_occurred">Date Of Injury:</label>
					</div>
					<div class="col-md-5">
						<input type="text" size="16" placeholder="Select Date Time" class="form-control" name="#" readonly value="<?php echo (set_value('pennsylvania[date_of_injury]') != "") ? set_value('pennsylvania[date_of_injury]') : database_to_datetimepicker(@$data['date_of_injury']); ?>">
					</div>
				</div>
				<!-- <div class="col-md-6">
                    <div class="col-md-5">
                        <label class="control-label" for="state_injury_or_illness_occurred"> Add these questions with free style space for responses:<span class="required" aria-required="true"> *</span></label>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <select class="form-control" id="question1" name="question1">
                                        <option value="0">Please Select these questions with free style space for responses</option>
                                        <option value="a"  <?php echo set_select('question1', 'a', ($data['question1'] == "a") ? true : ''); ?> >What action plan should be done to prevent similar incidents in the future? <br>
                                        (Determine if equipment, materials or people require additional attention). </option>
                                        <option value="b"  <?php echo set_select('question1', 'b', ($data['question1'] == "b") ? true : ''); ?> >What has been done thus far; take or recommend corrective action depending on your authority?</option>
                                        <option value="c"  <?php echo set_select('question1', 'c', ($data['question1'] == "c") ? true : ''); ?> >How will this improve operations (objective is to decrease job hindrances)?
                                        </option>
                                    </select>
                        </div>
                    </div>
            </div> -->
				<?php //echo $data['emp_status'];exit; 
				?>
				<div class="col-md-6">
					<div class="col-md-5">
						<label class="control-label" for="state_injury_or_illness_occurred">This form is being completed by <span class="required" aria-required="true"> *</span></label>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<select class="form-control" id="question2" name="question2">
								<option value="0">Please Select</option>
								<option value="a" <?php echo set_select('question2', 'a', ($data['question2'] == "a") ? true : ''); ?>>Injured employee</option>
								<option value="b" <?php echo set_select('question2', 'b', ($data['question2'] == "b") ? true : ''); ?>>Rehab Supervisor</option>
								<option value="c" <?php echo set_select('question2', 'c', ($data['question2'] == "c") ? true : ''); ?>>HR/Benefits Department”</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="row" style="margin-top: 6px;">
				<div class="col-md-6">
					<div class="col-md-5">
						<label class="control-label" for="state_injury_or_illness_occurred">Status:</label>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<select class="form-control" name="pennsylvania[status]" style="width:auto;padding:auto;">
								<option value="0" <?php echo set_select('pennsylvania[status]', '0', ($data['status'] == "0") ? TRUE : ''); ?>selected> Processing </option>
								<option value="1" <?php echo set_select('pennsylvania[status]', '1', ($data['status'] == "1") ? TRUE : ''); ?>> Pending </option>
								<option value="2" <?php echo set_select('pennsylvania[status]', '2', ($data['status'] == "2") ? TRUE : ''); ?>> Submitted </option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-12">
						<div class="tabbable-line boxless tabbable-reversed">
							<ul class="nav nav-tabs">
								<div class="form-group">
									<label class="control-label" for="state_injury_or_illness_occurred"> What action plan should be done to prevent similar incidents in the future? <br>
										(Determine if equipment, materials or people require additional attention). <span class="required" aria-required="true"> *</span></label>
									<input type="text" name="question1" id="question1" value="<?= $data['question1']; ?>" class="form-control">
								</div>
								<div class="form-group">
									<label class="control-label" for="state_injury_or_illness_occurred"> What has been done thus far; take or recommend corrective action depending on your authority?<span class="required" aria-required="true"> *</span></label>
									<input type="text" name="question2" id="question2" value="<?= $data['question2']; ?>" class="form-control">
								</div>
								<div class="form-group">
									<label class="control-label" for="state_injury_or_illness_occurred"> How will this improve operations (objective is to decrease job hindrances)?<span class="required" aria-required="true"> *</span></label>
									<input type="text" name="question3" id="question3" class="form-control" value="<?= $data['question3']; ?>">
								</div>
								<div class="form-group">
									<label class="control-label" for="state_injury_or_illness_occurred"> Who Conducted the work accident/illness investigation ?<span class="required" aria-required="true"> *</span></label>
									<input type="text" name="question4" id="question4" class="form-control" value="<?= $data['question4']; ?>">
								</div>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">

			</div>

			<div class="container-fluid">
				<?php if ($this->session->flashdata('success')) { ?>
					<div class="alert alert-success msg_email">
						<button class="close" data-close="alert"></button>
						<ul>
							<li>
								<strong>Sucess!</strong> <span>Email Sent Successfully</span><br>
							</li>
						</ul>
					</div>
				<?php } ?>
				<!-- <?php $this->load->view('flash_message'); ?>
                <?php if (isset($errors)) { ?>
                    <?php foreach ($errors as $key => $value) { ?>
                        <div class="alert alert-danger">
                            <button class="close" data-close="alert"></button>
                            <ul>
                                <li>
                                    <strong>Error!</strong><span><?= $value ?></span><br>
                                </li>
                            </ul>
                        </div>
                    <?php } ?>
                <?php } ?> -->
				<div class="tab-pane active">
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i> Pennsylvania Insurance Claim
							</div>
						</div>
						<div class="portlet-body form">
							<div class="row">
								<div class="col-md-1">
								</div>
								<div class="col-md-10">
									<h2 class="text-center"><b>EMPLOYER'S REPORT OF WORK-RELATED INJURY/ILLNESS</b></h2>
									<h4 class="text-center"><b><i>State of Pennsylvania - Workers' Compensation Board</i></b></h4>
								</div>
								<div class="col-md-1">
								</div>
							</div>
							<div class="form-body">
								<div class="row">
									<div class="col-md-6">
										<div class="col-md-5">
											<label class="control-label"><b><?php echo $i = $i + 1; ?>.</b> Employee First Name :<span class="required" aria-required="true">*</span></label>
										</div>
										<div class="col-md-7">
											<input value="<?php echo (set_value('pennsylvania[first_name]') != "") ? set_value('pennsylvania[first_name]') : @$data['first_name']; ?>" name="pennsylvania[first_name]" type="text" class="form-control AlphabetsOnly" placeholder="Employee First Name" autocomplete="off">
											<?php if (isset($errors['pennsylvania[first_name]'])) : ?>
												<label class="text-danger"><?= $errors['pennsylvania[first_name]']; ?></label>
											<?php endif; ?>
										</div>
									</div>
									<div class="col-md-6">
										<label class="col-md-5 control-label"><b><?php echo $i = $i + 1; ?>.</b>Employee Last Name :<span class="required" aria-required="true">*</span>
										</label>
										<div class="col-md-7">
											<input value="<?php echo (set_value('pennsylvania[last_name]') != "") ? set_value('pennsylvania[last_name]') : @$data['last_name']; ?>" name="pennsylvania[last_name]" type="text" class="form-control AlphabetsOnly" placeholder="Employee Last Name" autocomplete="off">
											<?php if (isset($errors['pennsylvania[last_name]'])) : ?>
												<label class="text-danger"><?= $errors['pennsylvania[last_name]']; ?></label>
											<?php endif; ?>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-6">
										<div class="col-md-5">
											<label class="control-label"><b><?php echo $i = $i + 1; ?>.</b> Street Address :</label>
										</div>
										<div class="col-md-7">
											<textarea class="form-control" name="pennsylvania[address]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="House number, City, State, and ZIP"><?php echo (set_value('pennsylvania[address]') != "") ? set_value('pennsylvania[address]') : @$data['address']; ?></textarea>
										</div>
									</div>
									<div class="col-md-6">
										<div class="col-md-5">
											<label class="control-label"><b><?php echo $i = $i + 1; ?>.</b> City :</label>
										</div>
										<div class="col-md-7">
											<input value="<?php echo (set_value('pennsylvania[city]') != "") ? set_value('pennsylvania[city]') : @$data['city']; ?>" name="pennsylvania[city]" type="text" class="form-control" placeholder="City">
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-6">
										<div class="col-md-5">
											<label class="control-label"><b><?php echo $i = $i + 1; ?>.</b> State :</label>
										</div>
										<div class="col-md-7">
											<select class="form-control select2 error" name="pennsylvania[state]" data-placeholder="Choose State" tabindex="1" id="pennsylvania_state">
												<option value="">Select State</option>
												<option value="AL" <?php echo set_select('pennsylvania[state]', 'AL', ($data['state'] == "AL") ? true : ''); ?>>
													Alabama</option>
												<option value="AK" <?php echo set_select('pennsylvania[state]', 'AK', ($data['state'] == "AK") ? true : ''); ?>>
													Alaska</option>
												<option value="AZ" <?php echo set_select('pennsylvania[state]', 'AZ', ($data['state'] == "AZ") ? true : ''); ?>>
													Arizona</option>
												<option value="AR" <?php echo set_select('pennsylvania[state]', 'AR', ($data['state'] == "AR") ? true : ''); ?>>
													Arkansas</option>
												<option value="CA" <?php echo set_select('pennsylvania[state]', 'CA', ($data['state'] == "CA") ? true : ''); ?>>
													California</option>
												<option value="CO" <?php echo set_select('pennsylvania[state]', 'CO', ($data['state'] == "CO") ? true : ''); ?>>
													Colorado</option>
												<option value="CT" <?php echo set_select('pennsylvania[state]', 'CT', ($data['state'] == "CT") ? true : ''); ?>>
													Connecticut</option>
												<option value="DE" <?php echo set_select('pennsylvania[state]', 'DE', ($data['state'] == "DE") ? true : ''); ?>>
													Delaware</option>
												<option value="FL" <?php echo set_select('pennsylvania[state]', 'FL', ($data['state'] == "FL") ? true : ''); ?>>
													Florida</option>
												<option value="GA" <?php echo set_select('pennsylvania[state]', 'GA', ($data['state'] == "GA") ? true : ''); ?>>
													Georgia</option>
												<option value="HI" <?php echo set_select('pennsylvania[state]', 'HI', ($data['state'] == "HI") ? true : ''); ?>>
													Hawaii</option>
												<option value="ID" <?php echo set_select('pennsylvania[state]', 'ID', ($data['state'] == "ID") ? true : ''); ?>>
													Idaho</option>
												<option value="IL" <?php echo set_select('pennsylvania[state]', 'IL', ($data['state'] == "IL") ? true : ''); ?>>
													Illinois</option>
												<option value="IN" <?php echo set_select('pennsylvania[state]', 'IN', ($data['state'] == "IN") ? true : ''); ?>>
													Indiana</option>
												<option value="IA" <?php echo set_select('pennsylvania[state]', '', ($data['state'] == "IA") ? true : ''); ?>>
													Iowa</option>
												<option value="KS" <?php echo set_select('pennsylvania[state]', 'KS', ($data['state'] == "KS") ? true : ''); ?>>
													Kansas</option>
												<option value="KY" <?php echo set_select('pennsylvania[state]', 'KY', ($data['state'] == "KY") ? true : ''); ?>>
													Kentucky</option>
												<option value="LA" <?php echo set_select('pennsylvania[state]', 'LA', ($data['state'] == "LA") ? true : ''); ?>>
													Louisiana</option>
												<option value="ME" <?php echo set_select('pennsylvania[state]', 'ME', ($data['state'] == "ME") ? true : ''); ?>>
													Maine</option>
												<option value="MD" <?php echo set_select('pennsylvania[state]', 'MD', ($data['state'] == "MD") ? true : ''); ?>>
													Maryland</option>
												<option value="MA" <?php echo set_select('pennsylvania[state]', 'MA', ($data['state'] == "MA") ? true : ''); ?>>
													Massachusetts</option>
												<option value="MI" <?php echo set_select('pennsylvania[state]', 'MI', ($data['state'] == "MI") ? true : ''); ?>>
													Michigan</option>
												<option value="MN" <?php echo set_select('pennsylvania[state]', 'MN', ($data['state'] == "MN") ? true : ''); ?>>
													Minnesota</option>
												<option value="MS" <?php echo set_select('pennsylvania[state]', 'MS', ($data['state'] == "MS") ? true : ''); ?>>
													Mississippi</option>
												<option value="MO" <?php echo set_select('pennsylvania[state]', 'MO', ($data['state'] == "MO") ? true : ''); ?>>
													Missouri</option>
												<option value="MT" <?php echo set_select('pennsylvania[state]', 'MT', ($data['state'] == "MT") ? true : ''); ?>>
													Montana</option>
												<option value="NE" <?php echo set_select('pennsylvania[state]', 'NE', ($data['state'] == "NE") ? true : ''); ?>>
													Nebraska</option>
												<option value="NV" <?php echo set_select('pennsylvania[state]', 'NV', ($data['state'] == "NV") ? true : ''); ?>>
													Nevada</option>
												<option value="NH" <?php echo set_select('pennsylvania[state]', 'NH', ($data['state'] == "NH") ? true : ''); ?>>
													New Hampshire</option>
												<option value="NJ" <?php echo set_select('pennsylvania[state]', 'NJ', ($data['state'] == "NJ") ? true : ''); ?>>
													New Jersey</option>
												<option value="NM" <?php echo set_select('pennsylvania[state]', 'NM', ($data['state'] == "NM") ? true : ''); ?>>
													New Mexico</option>
												<option value="NY" <?php echo set_select('pennsylvania[state]', 'NY', ($data['state'] == "NY") ? true : ''); ?>>
													New York</option>
												<option value="NC" <?php echo set_select('pennsylvania[state]', 'NC', ($data['state'] == "NC") ? true : ''); ?>>
													North Carolina</option>
												<option value="ND" <?php echo set_select('pennsylvania[state]', 'ND', ($data['state'] == "ND") ? true : ''); ?>>
													North Dakota</option>
												<option value="OH" <?php echo set_select('pennsylvania[state]', 'OH', ($data['state'] == "OH") ? true : ''); ?>>
													Ohio</option>
												<option value="OK" <?php echo set_select('pennsylvania[state]', 'OK', ($data['state'] == "OK") ? true : ''); ?>>
													Oklahoma</option>
												<option value="OR" <?php echo set_select('pennsylvania[state]', 'OR', ($data['state'] == "OR") ? true : ''); ?>>
													Oregon</option>
												<option value="PA" <?php echo set_select('pennsylvania[state]', 'PA', ($data['state'] == "PA") ? true : ''); ?>>
													Pennsylvania</option>
												<option value="RI" <?php echo set_select('pennsylvania[state]', 'RI', ($data['state'] == "RI") ? true : ''); ?>>
													Rhode Island</option>
												<option value="SC" <?php echo set_select('pennsylvania[state]', 'SC', ($data['state'] == "SC") ? true : ''); ?>>
													South Carolina</option>
												<option value="SD" <?php echo set_select('pennsylvania[state]', 'SD', ($data['state'] == "SD") ? true : ''); ?>>
													South Dakota</option>
												<option value="TN" <?php echo set_select('pennsylvania[state]', 'TN', ($data['state'] == "TN") ? true : ''); ?>>
													Tennessee</option>
												<option value="TX" <?php echo set_select('pennsylvania[state]', 'TX', ($data['state'] == "TX") ? true : ''); ?>>
													Texas</option>
												<option value="UT" <?php echo set_select('pennsylvania[state]', 'UT', ($data['state'] == "UT") ? true : ''); ?>>
													Utah</option>
												<option value="VT" <?php echo set_select('pennsylvania[state]', 'VT', ($data['state'] == "VT") ? true : ''); ?>>
													Vermont</option>
												<option value="VA" <?php echo set_select('pennsylvania[state]', 'VA', ($data['state'] == "VA") ? true : ''); ?>>
													Virginia</option>
												<option value="WA" <?php echo set_select('pennsylvania[state]', 'WA', ($data['state'] == "WA") ? true : ''); ?>>
													Washington</option>
												<option value="WD" <?php echo set_select('pennsylvania[state]', 'WD', ($data['state'] == "WD") ? true : ''); ?>>
													Washington DC</option>
												<option value="WV" <?php echo set_select('pennsylvania[state]', 'WV', ($data['state'] == "WV") ? true : ''); ?>>
													West Virginia</option>
												<option value="WI" <?php echo set_select('pennsylvania[state]', 'WI', ($data['state'] == "WI") ? true : ''); ?>>
													Wisconsin</option>
												<option value="WY" <?php echo set_select('pennsylvania[state]', 'WY', ($data['state'] == "WY") ? true : ''); ?>>
													Wyoming</option>
											</select>
											<!-- <input value="<?php echo (set_value('pennsylvania[state]') != "") ? set_value('pennsylvania[state]') : @$data['state']; ?>" name="pennsylvania[state]" type="text" class="form-control" placeholder="State"> -->
										</div>
									</div>
									<div class="col-md-6">
										<div class="col-md-5">
											<label class="control-label"><b><?php echo $i = $i + 1; ?>.</b> Zip Code :</label>
										</div>
										<div class="col-md-7">
											<input value="<?php echo (set_value('pennsylvania[zip_code]') != "") ? set_value('pennsylvania[zip_code]') : @$data['zip_code']; ?>" name="pennsylvania[zip_code]" type="text" class="form-control" placeholder="Zip Code">
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-6">
										<div class="col-md-5">
											<label class="control-label"><b><?php echo $i = $i + 1; ?>.</b> Phone Number :</label>
										</div>
										<div class="col-md-7">
											<input value="<?php echo (set_value('pennsylvania[employee_phone_number]') != "") ? set_value('pennsylvania[employee_phone_number]') : @$data['employee_phone_number']; ?>" name="pennsylvania[employee_phone_number]" type="text" class="form-control" placeholder="Phone Number" id="penn_emp_phone2">
										</div>
									</div>
									<div class="col-md-6">
										<div class="col-md-5">
											<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Gender<span class="required" aria-required="true">*</span></label>
										</div>
										<div class="col-md-7">
											<div class="form-group form-md-radios">
												<div class="md-radio-inline">
													<div class="md-radio">
														<input type="radio" id="pennsylvania_gender_1" name="pennsylvania[gender]" value="1" class="md-radiobtn" <?php echo set_checkbox('pennsylvania[gender]', '1', ($data['gender'] == "1") ? TRUE : '') ?> <?php //echo set_checkbox('pennsylvania[gender]','1',($data['gender'] == '1') ? TRUE : ''); 
																																																																?>>
														<label for="pennsylvania_gender_1">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>Male </label>
													</div>
													<div class="md-radio">
														<input type="radio" id="pennsylvania_gender_2" name="pennsylvania[gender]" value="0" class="md-radiobtn" <?php echo set_checkbox('pennsylvania[gender]', '1', ($data['gender'] == "0") ? TRUE : '') ?> <?php //echo set_value('pennsylvania[gender]','0',($data['gender'] == '0') ? TRUE : ''); 
																																																																?>>
														<label for="pennsylvania_gender_2">
															<span></span>
															<span class="check"></span>
															<span class="box"></span> Female </label>
													</div>
												</div>
												<?php if (isset($errors['pennsylvania[gender]'])) : ?>
													<label class="text-danger" style="color: #ed6b75;"><?= $errors['pennsylvania[gender]']; ?></label>
												<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-6">
										<div class="col-md-5">
											<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Marital Status<span class="required" aria-required="true">*</span></label>
										</div>
										<div class="col-md-7">
											<div class="form-group form-md-radios">
												<div class="md-radio-inline">
													<div class="md-radio">
														<input type="radio" id="pennsylvania_marital_status_option_1" name="pennsylvania[marital_status]" value="1" class="md-radiobtn" <?php echo set_checkbox('pennsylvania[marital_status]', '1', ($data['marital_status'] == "1") ? TRUE : '') ?> <?php //echo set_checkbox('pennsylvania[marital_status]','1',TRUE); 
																																																																										?>>
														<label for="pennsylvania_marital_status_option_1">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>SINGLE</label>
													</div>

													<div class="md-radio">
														<input type="radio" id="pennsylvania_marital_status_option_2" name="pennsylvania[marital_status]" value="0" class="md-radiobtn" <?php echo set_checkbox('pennsylvania[marital_status]', '0', ($data['marital_status'] == "0") ? TRUE : '') ?> <?php //echo set_checkbox('pennsylvania[marital_status]','0'); 
																																																																										?>>
														<label for="pennsylvania_marital_status_option_2">
															<span></span>
															<span class="check"></span>
															<span class="box"></span> MARRIED </label>
													</div>
												</div>
												<?php if (isset($errors['pennsylvania[marital_status]'])) : ?>
													<label class="text-danger"><?= $errors['pennsylvania[marital_status]']; ?></label>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="col-md-5">
											<label class="control-label"><b><?php echo $i = $i + 1; ?>.</b> Discipline: <span class="required" aria-required="true">*</span></label>
										</div>
										<div class="col-md-7">
											<div class="form-group">
												<select class="form-control select2" name="pennsylvania[discipline]" data-placeholder="Choose a Discipline" tabindex="1" id="pennsylvania_discipline">
													<option value="">Select Discipline</option>
													<option value="PT" <?php echo set_select('pennsylvania[discipline]', 'PT', ($data['discipline'] == "PT") ? TRUE : ''); ?>>PT</option>
													<option value="PTA" <?php echo set_select('pennsylvania[discipline]', 'PTA', ($data['discipline'] == "PTA") ? TRUE : ''); ?>>PTA</option>
													<option value="OT" <?php echo set_select('pennsylvania[discipline]', 'OT', ($data['discipline'] == "OT") ? TRUE : ''); ?>>OT</option>
													<option value="COTA" <?php echo set_select('pennsylvania[discipline]', 'COTA', ($data['discipline'] == "COTA") ? TRUE : ''); ?>>COTA</option>
													<option value="SLP" <?php echo set_select('pennsylvania[discipline]', 'SLP', ($data['discipline'] == "SLP") ? TRUE : ''); ?>>SLP</option>
													<option value="Rehab Aide" <?php echo set_select('pennsylvania[discipline]', 'Rehab Aide', ($data['discipline'] == "Rehab Aide") ? TRUE : ''); ?>>Rehab Aide</option>
													<option value="Regional Manager" <?php echo set_select('pennsylvania[discipline]', 'Regional Manager', ($data['discipline'] == "Regional Manager") ? TRUE : ''); ?>>Regional Manager</option>
													<option value="Corporate Staff" <?php echo set_select('pennsylvania[discipline]', 'Corporate Staff', ($data['discipline'] == "Corporate Staff") ? TRUE : ''); ?>>Corporate Staff</option>
												</select>
											</div>
											<?php if (isset($errors['pennsylvania[discipline]'])) : ?>
												<label class="text-danger"><?= $errors['pennsylvania[discipline]']; ?></label>
											<?php endif; ?>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-6">
										<div class="col-md-5">
											<label class="control-label"><b><?php echo $i = $i + 1; ?>.</b> Facility Name :<span class="required" aria-required="true">*</span></label>
										</div>
										<div class="col-md-7">
											<input placeholder="Facility Name" name="pennsylvania[facility_name]" class="form-control" type="text" value="<?php echo (set_value('pennsylvania[facility_name]') != "") ? set_value('pennsylvania[facility_name]') : @$data['facility_name']; ?>" />
											<div class="form-control-focus"> </div>
										</div>
										<?php if (isset($errors['pennsylvania[facility_name]'])) : ?>
											<label class="text-danger"><?= $errors['pennsylvania[facility_name]']; ?></label>
										<?php endif; ?>
									</div>
									<div class="col-md-6">
										<label class="col-md-5 control-label" for="contact_phone_number"><b><?php echo $i = $i + 1; ?>.</b> Social Security Number : <span class="required" aria-required="true">*</span></label>
										<div class="col-md-7">
											<input type="text" class="form-control" placeholder="Social Security Number" value="<?php echo ($data['social_security_num'] == "") ? set_value('pennsylvania[social_security_num]') : $data['social_security_num']; ?>" name="pennsylvania[social_security_num]" id="social_security_num">
											<p class="why_security error" style="display:none">Please Enter Social Security</p>
											<?php if (isset($errors['pennsylvania[social_security_num]'])) : ?>
												<label class="text-danger"><?= $errors['pennsylvania[social_security_num]']; ?></label>
											<?php endif; ?>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-6">
										<div class="col-md-5">
											<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Employment Status<span class="required" aria-required="true">*</span></label>
										</div>
										<div class="col-md-7">
											<div class="form-group form-md-radios">
												<div class="md-radio-inline">
													<div class="md-radio">
														<input type="radio" id="pennsylvania_job_title_option_1" name="pennsylvania[employment_status]" value="0" class="md-radiobtn" <?php echo set_checkbox('pennsylvania[employment_status]', '0', ($data['employment_status'] == '0') ? TRUE : ''); ?>>
														<label for="pennsylvania_job_title_option_1">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>Part time </label>
													</div>
													<div class="md-radio">
														<input type="radio" id="pennsylvania_job_title_option_2" name="pennsylvania[employment_status]" value="1" class="md-radiobtn" <?php echo set_checkbox('pennsylvania[employment_status]', '1', ($data['employment_status'] == '1') ? TRUE : ''); ?>>
														<label for="pennsylvania_job_title_option_2">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>Full time </label>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="col-md-5">
											<label class="control-label"><b><?php echo $i = $i + 1; ?>.</b> Date Of Birth :<span class="required" aria-required="true">*</span></label>
										</div>
										<div class="col-md-7">
											<div class=" date">
												<input type="text" placeholder="Select Date" size="16" class="form-control" value="<?php echo (!isset($data['dob'])) ? set_value('pennsylvania[dob]') : database_to_datepicker($data['dob']); ?>" readonly name="pennsylvania[dob]" id="pennsylvania_dob">
											</div>
											<?php if (isset($errors['pennsylvania[dob]'])) : ?>
												<label class="text-danger"><?= $errors['pennsylvania[dob]']; ?></label>
											<?php endif; ?>
										</div>
									</div>
									<!-- <div class="col-md-7">
                                        <div class="col-md-5">
                                            <label class=" control-label"><b>13.</b> Occupation / Job Title : <span class="required" aria-required="true">*</span></label>
                                        </div>
                                        <div class="col-md-7">
                                            <input placeholder="Occupation / Job Title" name="pennsylvania[job_title]" class="form-control" type="text" value="<?php echo (set_value('pennsylvania[job_title]') != "") ? set_value('pennsylvania[job_title]') : @$data['job_title']; ?>" />
                                        </div>

                                    </div> -->
								</div>
								<hr>
								<div class="row">
									<div class="col-md-6">
										<div class="col-md-5">
											<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Date of Injury :<span class="required" aria-required="true"> *</span></label>
										</div>
										<div class="col-md-7">
											<div class="input-group date date-picker">
												<input type="text" size="16" placeholder="Select Date" name="pennsylvania[date_of_injury]" class="form-control" value="<?php echo (set_value('pennsylvania[date_of_injury]') != "") ? set_value('pennsylvania[date_of_injury]') : database_to_datepicker($data['date_of_injury']); ?>" readonly id="date_of_injury">
												<span class="input-group-btn">
													<button class="btn default date-reset date_of_injury" type="button">
														<i class="fa fa-times"></i>
													</button>
													<button class="btn default date-set" type="button">
														<i class="fa fa-calendar"></i>
													</button>
												</span>
											</div>
											<?php if (isset($errors['pennsylvania[date_of_injury]'])) : ?>
												<label class="text-danger"><?= $errors['pennsylvania[date_of_injury]']; ?></label>
											<?php endif; ?>
										</div>
									</div>
									<div class="col-md-6">
										<div class="col-md-5">
											<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Time Employee Began Work:</label>
										</div>
										<div class="col-md-7">
											<div class="input-group meridian_1 date form_meridian_datetime">
												<input type="text" size="16" class="form-control" placeholder="Select Date Time" name="pennsylvania[began_work]" readonly value="<?php echo (set_value('pennsylvania[began_work]') != "") ? set_value('pennsylvania[began_work]') : database_to_datetimepicker(@$data['began_work']); ?>">
												<!--   <input type="text" size="16" placeholder="Select Date" class="form-control" name="pennsylvania[began_work]" value="<?php echo (set_value('pennsylvania[began_work]') != "") ? set_value('pennsylvania[began_work]') : database_to_datetimepicker($data['began_work']); ?>" readonly> -->
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
											<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Time of Occurrence</label>
										</div>
										<div class="col-md-7">
											<div class="input-group">
												<input type="text" size="16" placeholder="Select Date" class="form-control timepicker" name="pennsylvania[time_of_injury]" value="<?php echo (set_value('pennsylvania[time_of_injury]') != '') ? set_value('pennsylvania[time_of_injury]') : database_to_timepicker($data['time_of_injury']); ?>" readonly id="pennsylvania_time_of_injury">
												<span class="input-group-btn">
													<button class="btn default" type="button" id="injury_clock">
														<i class="fa fa-clock-o"></i>
													</button>
												</span>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="col-md-5">
											<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Last Day Worked<span class="required" aria-required="true">*</span></label>
										</div>
										<div class="col-md-7">
											<div class="input-group date date-picker">
												<input type="text" size="16" placeholder="Select Date" name="pennsylvania[work_stop_date]" class="form-control" value="<?php echo (set_value('pennsylvania[work_stop_date]') != "") ? set_value('pennsylvania[work_stop_date]') : database_to_datepicker($data['work_stop_date']); ?>" readonly id="last_work_date_penn">
												<span class="input-group-btn">
													<button class="btn default date-reset last_work_date_penn" type="button">
														<i class="fa fa-times"></i>
													</button>
													<button class="btn default date-set" type="button">
														<i class="fa fa-calendar"></i>
													</button>
												</span>
											</div>
											<p class="min_date_error" style="display:none;color: red">This date should be less than from Return Work Date</p>
											<p class="same_date_conne" style="display:none;color: red">You cannot select same date</p>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-6">
										<div class="col-md-5">
											<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Date Disability Began </label>
										</div>
										<div class="col-md-7">
											<div class="input-group date date-picker">
												<input type="text" size="16" placeholder="Select Date" class="form-control" name="pennsylvania[date_disability_began]" value="<?php echo (set_value('pennsylvania[date_disability_began]') != "") ? set_value('pennsylvania[date_disability_began]') : @$data['date_disability_began']; ?>" readonly id="date_disability_began">
												<span class="input-group-btn">
													<button class="btn default date-reset date_disability_began" type="button">
														<i class="fa fa-times"></i>
													</button>
													<button class="btn default date-set" type="button">
														<i class="fa fa-calendar"></i>
													</button>
												</span>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="col-md-5">
											<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Date Employer Notified</label>
										</div>
										<div class="col-md-7">
											<div class="input-group date date-picker-today">
												<input type="text" size="16" placeholder="Select Date" class="form-control" name="pennsylvania[date_notified]" value="<?php echo (set_value('pennsylvania[date_notified]') != "") ? set_value('pennsylvania[date_notified]') : @$data['date_notified']; ?>" readonly id="date_notified">
												<span class="input-group-btn">
													<button class="btn default date-reset date_notified" type="button">
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
											<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Date returned to work</label>
										</div>
										<div class="col-md-7">
											<div class="input-group date date-picker">
												<input type="text" size="16" placeholder="Select Date" class="form-control" name="pennsylvania[return_work_date]" value="<?php echo (set_value('pennsylvania[return_work_date]') != "") ? set_value('pennsylvania[return_work_date]') : database_to_datepicker($data['return_work_date']); ?>" readonly id="return_work_date_penn">
												<span class="input-group-btn">
													<button class="btn default date-reset return_work_date_penn" type="button">
														<i class="fa fa-times"></i>
													</button>
													<button class="btn default date-set" type="button">
														<i class="fa fa-calendar"></i>
													</button>
												</span>
											</div>
											<p class="max_date_error" style="display:none;color: red">This date should be greater than from on Last Work Date</p>
											<p class="same_date_conne" style="display:none;color: red">You cannot select same date</p>
										</div>
									</div>
									<div class="col-md-6">
										<div class="col-md-5">
											<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Date Hired:<span class="required" aria-required="true">*</span></label>
										</div>
										<div class="col-md-7">
											<div class="input-group date date-picker">
												<input type="text" size="16" id="date_hire_penn" placeholder="Select Date" class="form-control" name="pennsylvania[date_hire]" value="<?php echo (set_value('pennsylvania[date_hire]') != "") ? set_value('pennsylvania[date_hire]') : database_to_datepicker($data['date_hire']); ?>" readonly >
												<span class="input-group-btn">
													<button class="btn default date-reset date_hire_penn" type="button">
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
											<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b>Contact First name</label>
										</div>
										<div class="col-md-7">
											<input placeholder="Joyce" name="pennsylvania[contact_first_name]" class="form-control" type="text" value="<?php echo (set_value('pennsylvania[contact_first_name]') != "") ? set_value('pennsylvania[contact_first_name]') : @$data['contact_first_name']; ?>" />
											<div class="form-control-focus"> </div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="col-md-5">
											<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b>Contact Last name</label>
										</div>
										<div class="col-md-7">
											<input placeholder="Ginsberg" name="pennsylvania[contact_last_name]" class="form-control" type="text" value="<?php echo (set_value('pennsylvania[contact_last_name]') != "") ? set_value('pennsylvania[contact_last_name]', 'Ginsberg') : @$data['contact_last_name']; ?>" />
											<div class="form-control-focus"> </div>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-6">
										<div class="col-md-5">
											<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Contact Phone Number </label>
										</div>
										<div class="col-md-7">
											<input placeholder="(732) 987-3817" name="pennsylvania[contact_phone_number]" class="form-control" type="text" value="<?php echo (set_value('pennsylvania[contact_phone_number]') != "") ? set_value('pennsylvania[contact_phone_number]', '7329873817') : @$data['contact_phone_number']; ?>" id="contact_penn1" />
											<div class="form-control-focus"> </div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="col-md-5">
											<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Type of Injury or Illness <span class="required" aria-required="true">*</span></label>
										</div>
										<div class="col-md-7">
											<select class="form-control select2" name="pennsylvania[type_of_injury]" data-placeholder="Choose a Type of Injury" tabindex="1" id="pennsylvania_type_of_injury">
												<option value="">Select Injury</option>
												<option value="Abrasion/Laceration" <?php echo set_select('pennsylvania[type_of_injury]', 'Abrasion/Laceration', ($data['type_of_injury'] == "Abrasion/Laceration") ? TRUE : ''); ?>>Abrasion/Laceration</option>
												<option value="Concussion" <?php echo set_select('pennsylvania[type_of_injury]', 'Concussion', ($data['type_of_injury'] == "Concussion") ? TRUE : ''); ?>>Concussion</option>

												<option value="Dislocation" <?php echo set_select('pennsylvania[type_of_injury]', 'Dislocation', ($data['type_of_injury'] == "Dislocation") ? TRUE : ''); ?>>Dislocation</option>

												<option value="Illness/Infection" <?php echo set_select('pennsylvania[type_of_injury]', 'Illness/Infection', ($data['type_of_injury'] == "Illness/Infection") ? TRUE : ''); ?>>Illness/Infection</option>

												<option value="Sprain/Strain" <?php echo set_select('pennsylvania[type_of_injury]', 'Sprain/Strain', ($data['type_of_injury'] == "Sprain/Strain") ? TRUE : ''); ?>>Sprain/Strain</option>
												<option value="Burn" <?php echo set_select('pennsylvania[type_of_injury]', 'Burn', ($data['type_of_injury'] == "Burn") ? TRUE : ''); ?>>Burn</option>
												<option value="Contusion" <?php echo set_select('pennsylvania[type_of_injury]', 'Contusion', ($data['type_of_injury'] == "Contusion") ? TRUE : ''); ?>>Contusion</option>
												<option value="Fracture" <?php echo set_select('pennsylvania[type_of_injury]', 'Fracture', ($data['type_of_injury'] == "Fracture") ? TRUE : ''); ?>>Fracture</option>
												<option value="Puncture" <?php echo set_select('pennsylvania[type_of_injury]', 'Puncture', ($data['type_of_injury'] == "Puncture") ? TRUE : ''); ?>>Puncture</option>
												<option value="No Apparent Injury" <?php echo set_select('pennsylvania[type_of_injury]', 'No Apparent Injury', ($data['type_of_injury'] == "No Apparent Injury") ? TRUE : ''); ?>>No Apparent Injury</option>
												<option value="Other" <?php echo set_select('pennsylvania[type_of_injury]', 'Other', ($data['type_of_injury'] == "Other") ? TRUE : ''); ?>>Other</option>
											</select>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-5">
										<div class="col-md-6">
											<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Part of Body Affected <span class="required" aria-required="true">*</span></label>
										</div>
										<div class="col-md-5">
											<input placeholder="Part of Body Affected" name="pennsylvania[part_body_affected]" class="form-control" type="text" style="    width: 194px;" value="<?php echo (set_value('pennsylvania[part_body_affected]') != "") ? set_value('pennsylvania[part_body_affected]') : @$data['part_body_affected']; ?>" />
											<div class="form-control-focus"> </div>
										</div>
										<?php if (isset($errors['pennsylvania[part_body_affected]'])) : ?>
											<label class="text-danger"><?= $errors['pennsylvania[part_body_affected]']; ?></label>
										<?php endif; ?>
									</div>
									<div class="col-md-7">
										<div class="col-md-8">
											<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Did Injury / Illness / Exposure occur on employer’s premises?</label>
										</div>
										<div class="col-md-4">
											<div class="form-group form-md-radios">
												<div class="md-radio-inline">
													<div class="md-radio">
														<?php if ($data['did_injury_employer_permises'] == '') {
															$check = "checked='checked'";
														} else {
															$check = '';
														} ?>
														<input type="radio" id="pennsylvania_did_injury_employer_permises_option_1" name="pennsylvania[did_injury_employer_permises]" value="1" class="md-radiobtn" <?php echo set_checkbox('pennsylvania[did_injury_employer_permises]', '1', ($data['did_injury_employer_permises'] == '1') ? TRUE : ''); ?>>
														<label for="pennsylvania_did_injury_employer_permises_option_1">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>Yes </label>
													</div>
													<div class="md-radio">
														<input type="radio" id="pennsylvania_did_injury_employer_permises_option_2" name="pennsylvania[did_injury_employer_permises]" value="0" class="md-radiobtn" <?php echo set_checkbox('pennsylvania[did_injury_employer_permises]', '0', ($data['did_injury_employer_permises'] == '0') ? TRUE : ''); ?> <?= $check ?>>
														<label for="pennsylvania_did_injury_employer_permises_option_2">
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
									<div class="col-md-10">
										<div class="col-md-6">
											<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b>If Out of State of Injury specify state of injury </label>
										</div>
										<div class="col-md-6">
											<input placeholder="If Out of State of Injury specify state of injury" name="pennsylvania[out_of_state_injury]" class="form-control" type="text" value="<?php echo (set_value('pennsylvania[out_of_state_injury]') != "") ? set_value('pennsylvania[out_of_state_injury]') : @$data['out_of_state_injury']; ?>" />
											<div class="form-control-focus"></div>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-10">
										<div class="col-md-6">
											<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Were safeguards or safety equipment provided? <span class="required" aria-required="true">*</span></label>
										</div>
										<div class="col-md-6">
											<div class="form-group form-md-radios">
												<div class="md-radio-inline">
													<div class="md-radio">
														<input type="radio" id="pennsylvania_were_safeguards_option_1" name="pennsylvania[were_safeguards]" value="1" class="md-radiobtn" <?php echo set_checkbox('pennsylvania[were_safeguards]', '1', ($data['were_safeguards'] == '1') ? TRUE : ''); ?>>
														<label for="pennsylvania_were_safeguards_option_1">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>Yes </label>
													</div>
													<div class="md-radio">
														<input type="radio" id="pennsylvania_were_safeguards_option_2" name="pennsylvania[were_safeguards]" value="0" class="md-radiobtn" <?php echo set_checkbox('pennsylvania[were_safeguards]', '0', ($data['were_safeguards'] == '0') ? TRUE : ''); ?>>
														<label for="pennsylvania_were_safeguards_option_2">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>No </label>
													</div>
													<?php if (isset($errors['pennsylvania[were_safeguards]'])) : ?>
														<label class="text-danger"><?= $errors['pennsylvania[were_safeguards]']; ?></label>
													<?php endif; ?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-10">
										<div class="col-md-6">
											<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Were safeguards or safety equipment used? <span class="required" aria-required="true">*</span></label>
										</div>
										<div class="col-md-6">
											<div class="form-group form-md-radios">
												<div class="md-radio-inline">
													<div class="md-radio">
														<input type="radio" id="pennsylvania_were_safeguards_used_option_1" name="pennsylvania[where_used_safaguard]" value="1" class="md-radiobtn" <?php echo set_checkbox('pennsylvania[where_used_safaguard]', '1', ($data['where_used_safaguard'] == '1') ? TRUE : ''); ?>>
														<label for="pennsylvania_were_safeguards_used_option_1">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>Yes </label>
													</div>
													<div class="md-radio">
														<input type="radio" id="pennsylvania_were_safeguards_used_option_2" name="pennsylvania[where_used_safaguard]" value="0" class="md-radiobtn" <?php echo set_checkbox('pennsylvania[where_used_safaguard]', '0', ($data['where_used_safaguard'] == '0') ? TRUE : ''); ?>>
														<label for="pennsylvania_were_safeguards_used_option_2">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>No </label>
													</div>
													<?php if (isset($errors['pennsylvania[where_used_safaguard]'])) : ?>
														<label class="text-danger"><?= $errors['pennsylvania[where_used_safaguard]']; ?></label>
													<?php endif; ?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-12">
										<div class="col-md-5">
											<label class="control-label"><b><?php echo $i = $i + 1; ?>.</b> Equipment materials or chemicals employee was using when accident or illness exposure occurred</label>
										</div>
										<div class="col-md-7">
											<textarea placeholder="Equipment materials or chemicals employee was using when accident or illness exposure occurred" class="form-control" name="pennsylvania[equipment_meterials]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error"><?php echo (set_value('pennsylvania[equipment_meterials]') != "") ? set_value('pennsylvania[equipment_meterials]') : @$data['equipment_meterials']; ?></textarea>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-12">
										<div class="col-md-5">
											<label class="control-label"><b><?php echo $i = $i + 1; ?>.</b> How injury or illness/ abnormal health condition occurred. Describe the sequence of events and include any objects or substances directly responsible <span class="required" aria-required="true">*</span></label>
										</div>
										<div class="col-md-7">
											<textarea placeholder="How injury or illness/ abnormal health condition occurred. Describe the sequence of events and include any objects or substances directly responsible " class="form-control" name="pennsylvania[how_injury_health_condition]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error"><?php echo (set_value('pennsylvania[how_injury_health_condition]') != "") ? set_value('pennsylvania[how_injury_health_condition]') : @$data['how_injury_health_condition']; ?></textarea>
										</div>
										<?php if (isset($errors['pennsylvania[how_injury_health_condition]'])) : ?>
											<label class="text-danger"><?= $errors['pennsylvania[how_injury_health_condition]']; ?></label>
										<?php endif; ?>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-6">
										<div class="col-md-6">
											<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b>If Fatal, give data of death</label>
										</div>
										<div class="col-md-6">
											<div class="input-group date date-picker">
												<input type="text" size="16" placeholder="Select Date" class="form-control" name="pennsylvania[if_fatal_give_date]" value="<?php echo (set_value('pennsylvania[if_fatal_give_date]') != "") ? set_value('pennsylvania[if_fatal_give_date]') : @$data['if_fatal_give_date']; ?>" readonly id="if_fatal_give_date">
												<span class="input-group-btn">
													<button class="btn default date-reset if_fatal_give_date" type="button">
														<i class="fa fa-times"></i>
													</button>
													<button class="btn default date-set" type="button">
														<i class="fa fa-calendar"></i>
													</button>
												</span>
											</div>
										</div>
									</div>
									<!--  <div class="col-md-6">
                                        <div class="col-md-5">
                                            <label class="control-label"><b><?php echo $i = $i + 1; ?>.</b> Physician heath care provider</label>
                                        </div>
                                        <div class="col-md-7">
                                            <textarea class="form-control" name="pennsylvania[physician_health_care_provider]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="Physician heath care provider"><?php echo (set_value('pennsylvania[physician_health_care_provider]') != "") ? set_value('pennsylvania[physician_health_care_provider]') : @$data['physician_health_care_provider']; ?></textarea>
                                        </div>
                                    </div> -->
								</div>
								<hr>
								<div class="row">
									<div class="col-md-12">
										<div class="col-md-12">
											<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b>Physician heath care provider </label>
										</div>
									</div> <br> <br>
									<div class="col-md-4">
										<div class="col-md-4">
											<label class="control-label"><b>1.</b> First Name</label>
										</div>
										<div class="col-md-8">
											<input type="text" size="16" placeholder=" First Name" class="form-control" name="pennsylvania[physician_first_name]" value="<?php echo (set_value('pennsylvania[physician_first_name]') != "") ? set_value('pennsylvania[physician_first_name]') : @$data['physician_first_name']; ?>">
										</div>
									</div>
									<div class="col-md-4">
										<div class="col-md-4">
											<label class="control-label"><b>2.</b> Last Name</label>
										</div>
										<div class="col-md-8">
											<input type="text" size="16" placeholder="Last Name" class="form-control" name="pennsylvania[physician_last_name]" value="<?php echo (set_value('pennsylvania[physician_last_name]') != "") ? set_value('pennsylvania[physician_last_name]') : @$data['physician_last_name']; ?>">
										</div>
									</div>
									<div class="col-md-4">
										<div class="col-md-4">
											<label class="control-label"><b>3.</b> Street</label>
										</div>
										<div class="col-md-8">
											<input type="text" size="16" placeholder="Street" class="form-control" name="pennsylvania[physician_street]" value="<?php echo (set_value('pennsylvania[physician_street]') != "") ? set_value('pennsylvania[physician_street]') : @$data['physician_street']; ?>">
										</div>
									</div>
								</div> <br>
								<div class="row">
									<div class="col-md-4">
										<div class="col-md-4">
											<label class="control-label"><b>4.</b> State</label>
										</div>
										<div class="col-md-8">
											<input type="text" size="16" placeholder="State" class="form-control" name="pennsylvania[physician_state]" value="<?php echo (set_value('pennsylvania[physician_state]') != "") ? set_value('pennsylvania[physician_state]') : @$data['physician_state']; ?>">
										</div>
									</div>
									<div class="col-md-4">
										<div class="col-md-4">
											<label class="control-label"><b>5.</b> Zip</label>
										</div>
										<div class="col-md-8">
											<input type="text" size="16" placeholder="Zip" class="form-control" name="pennsylvania[physician_zip]" value="<?php echo (set_value('pennsylvania[physician_zip]') != "") ? set_value('pennsylvania[physician_zip]') : @$data['physician_zip']; ?>">
										</div>
									</div>
									<div class="col-md-4">
										<div class="col-md-4">
											<label class="control-label"><b>6.</b> Hospital name</label>
										</div>
										<div class="col-md-8">
											<input type="text" size="16" placeholder="Hospital name" class="form-control" name="pennsylvania[physician_hospital_name]" value="<?php echo (set_value('pennsylvania[physician_hospital_name]') != "") ? set_value('pennsylvania[physician_hospital_name]') : @$data['physician_hospital_name']; ?>">
										</div>
									</div>
								</div> <br>
								<div class="row">
									<div class="col-md-4">
										<div class="col-md-4">
											<label class="control-label"><b>7.</b>Street</label>
										</div>
										<div class="col-md-8">
											<input type="text" size="16" placeholder="Street" class="form-control" name="pennsylvania[physician_hospital_street]" value="<?php echo (set_value('pennsylvania[physician_hospital_street]') != "") ? set_value('pennsylvania[physician_hospital_street]') : @$data['physician_hospital_street']; ?>">
										</div>
									</div>
									<div class="col-md-4">
										<div class="col-md-4">
											<label class="control-label"><b>8.</b>City</label>
										</div>
										<div class="col-md-8">
											<input type="text" size="16" placeholder="City" class="form-control" name="pennsylvania[physician_hospital_city]" value="<?php echo (set_value('pennsylvania[physician_hospital_city]') != "") ? set_value('pennsylvania[physician_hospital_city]') : @$data['physician_hospital_city'];  ?>">
										</div>
									</div>
									<div class="col-md-4">
										<div class="col-md-4">
											<label class="control-label"><b>9.</b>State</label>
										</div>
										<div class="col-md-8">
											<input type="text" size="16" placeholder="State" class="form-control" name="pennsylvania[physician_hospital_state]" value="<?php echo (set_value('pennsylvania[physician_hospital_state]') != "") ? set_value('pennsylvania[physician_hospital_state]') : @$data['physician_hospital_state']; ?>">
										</div>
									</div>
								</div> <br>
								<hr>
								<div class="row">
									<div class="col-md-12">
										<div class="col-md-2">
											<label class="control-label"><b> <?php echo $i = $i + 1; ?>.</b> Initial treatment <span class="required" aria-required="true">*</span></label>
										</div>
										<div class="col-md-10">
											<div class="md-checkbox-inline">
												<div class="col-md-4">
													<div class="md-checkbox">
														<input type="checkbox" id="pennsylvania_hospital_or_off_site_treatment_checkboxs_1" name="pennsylvania[hospital_or_off_site_treatment_checkboxs][]" value="0" class="md-check" <?php echo set_checkbox('pennsylvania[hospital_or_off_site_treatment_checkboxs][]', '0', (in_array('0', $data['hospital_or_off_site_treatment_checkboxs'])) ? TRUE : ''); ?>>
														<label for="pennsylvania_hospital_or_off_site_treatment_checkboxs_1">
															<span class="inc"></span>
															<span class="check"></span>
															<span class="box"></span> No Medical treatment </label>
													</div>
												</div>
												<div class="col-md-4">
													<div class="md-checkbox">
														<input type="checkbox" id="pennsylvania_hospital_or_off_site_treatment_checkboxs_2" name="pennsylvania[hospital_or_off_site_treatment_checkboxs][]" value="1" class="md-check" <?php echo set_checkbox('pennsylvania[hospital_or_off_site_treatment_checkboxs][]', '1', (in_array('1', $data['hospital_or_off_site_treatment_checkboxs'])) ? TRUE : ''); ?>>
														<label for="pennsylvania_hospital_or_off_site_treatment_checkboxs_2">
															<span class="inc"></span>
															<span class="check"></span>
															<span class="box"></span> Minor – by employer </label>
													</div>
												</div>
												<div class="col-md-4">
													<div class="md-checkbox">
														<input type="checkbox" id="pennsylvania_hospital_or_off_site_treatment_checkboxs_3" name="pennsylvania[hospital_or_off_site_treatment_checkboxs][]" value="2" class="md-check" <?php echo set_checkbox('pennsylvania[hospital_or_off_site_treatment_checkboxs][]', '2', (in_array('2', $data['hospital_or_off_site_treatment_checkboxs'])) ? TRUE : ''); ?>>
														<label for="pennsylvania_hospital_or_off_site_treatment_checkboxs_3">
															<span class="inc"></span>
															<span class="check"></span>
															<span class="box"></span> Clinic / hospital </label>
													</div>
												</div>
												<div class="col-md-4">
													<div class="md-checkbox">
														<input type="checkbox" id="pennsylvania_hospital_or_off_site_treatment_checkboxs_4" name="pennsylvania[hospital_or_off_site_treatment_checkboxs][]" value="3" class="md-check" <?php echo set_checkbox('pennsylvania[hospital_or_off_site_treatment_checkboxs][]', '3', (in_array('3', $data['hospital_or_off_site_treatment_checkboxs'])) ? TRUE : ''); ?>>
														<label for="pennsylvania_hospital_or_off_site_treatment_checkboxs_4">
															<span class="inc"></span>
															<span class="check"></span>
															<span class="box"></span> Panel physician </label>
													</div>
												</div>
												<div class="col-md-4">
													<div class="md-checkbox">
														<input type="checkbox" id="pennsylvania_hospital_or_off_site_treatment_checkboxs_5" name="pennsylvania[hospital_or_off_site_treatment_checkboxs][]" value="4" class="md-check" <?php echo set_checkbox('pennsylvania[hospital_or_off_site_treatment_checkboxs][]', '4', (in_array('4', $data['hospital_or_off_site_treatment_checkboxs'])) ? TRUE : ''); ?>>
														<label for="pennsylvania_hospital_or_off_site_treatment_checkboxs_5">
															<span class="inc"></span>
															<span class="check"></span>
															<span class="box"></span> Employee physician</label>
													</div>
												</div>
												<div class="col-md-4">
													<div class="md-checkbox">
														<input type="checkbox" id="pennsylvania_hospital_or_off_site_treatment_checkboxs_6" name="pennsylvania[hospital_or_off_site_treatment_checkboxs][]" value="5" class="md-check" <?php echo set_checkbox('pennsylvania[hospital_or_off_site_treatment_checkboxs][]', '5', (in_array('5', $data['hospital_or_off_site_treatment_checkboxs'])) ? TRUE : ''); ?>>
														<label for="pennsylvania_hospital_or_off_site_treatment_checkboxs_6">
															<span class="inc"></span>
															<span class="check"></span>
															<span class="box"></span> Emergency care</label>
													</div>
												</div>
												<div class="col-md-4">
													<div class="md-checkbox">
														<input type="checkbox" id="pennsylvania_hospital_or_off_site_treatment_checkboxs_7" name="pennsylvania[hospital_or_off_site_treatment_checkboxs][]" value="6" class="md-check" <?php echo set_checkbox('pennsylvania[hospital_or_off_site_treatment_checkboxs][]', '6', (in_array('6', $data['hospital_or_off_site_treatment_checkboxs'])) ? TRUE : ''); ?>>
														<label for="pennsylvania_hospital_or_off_site_treatment_checkboxs_7">
															<span class="inc"></span>
															<span class="check"></span>
															<span class="box"></span> Hospitalized more than 24 hours</label>
													</div>
												</div>
												<div class="row" id="required_msg"></div>
											</div>
										</div>
										<?php if (isset($errors['pennsylvania[hospital_or_off_site_treatment_checkboxs][]'])) : ?>
											<label class="text-danger"><?= $errors['pennsylvania[hospital_or_off_site_treatment_checkboxs][]']; ?></label>
										<?php endif; ?>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-6">
										<div class="col-md-5">
											<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b>Witness First name</label>
										</div>
										<div class="col-md-7">
											<input placeholder="Witness First name" name="pennsylvania[witness_first_name]" class="form-control" type="text" value="<?php echo (set_value('pennsylvania[witness_first_name]') != "") ? set_value('pennsylvania[witness_first_name]') : @$data['witness_first_name']; ?>" />
											<div class="form-control-focus"> </div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="col-md-4">
											<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b>Witness last name</label>
										</div>
										<div class="col-md-8">
											<input placeholder="Witness last name" name="pennsylvania[witness_last_name]" class="form-control" type="text" value="<?php echo (set_value('pennsylvania[witness_last_name]') != "") ? set_value('pennsylvania[witness_last_name]') : @$data['witness_last_name']; ?>" />
											<div class="form-control-focus"> </div>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-6">
										<div class="col-md-5">
											<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b>Witness phone number</label>
										</div>
										<div class="col-md-7">
											<input placeholder="Witness phone number" name="pennsylvania[witness_phone_number]" class="form-control" type="text" value="<?php echo (set_value('pennsylvania[witness_phone_number]') != "") ? set_value('pennsylvania[witness_phone_number]') : @$data['witness_phone_number']; ?>" id="witness_phone_number_penn" />
											<div class="form-control-focus"> </div>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-12">
										<div class="col-md-12">
											<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b>Person completing this form </label>
										</div>
									</div>
									<br><br>
									<div class="col-md-12">
										<div class="col-md-6">
											<div class="col-md-5">
												<label class=" control-label">Name</label>
											</div>
											<div class="col-md-7">
												<input placeholder="Joyce Ginsberg" name="pennsylvania[person_name]" class="form-control" type="text" value="<?php echo (set_value('pennsylvania[person_name]') != "") ? set_value('pennsylvania[person_name]') : @$data['person_name']; ?>" />
												<div class="form-control-focus"> </div>
											</div>
										</div>
										<!--  <div class="col-md-4">
                                            <div class="col-md-3">
                                                <label class=" control-label">Title</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input placeholder="HR Benefits Manager" name="pennsylvania[person_title]" class="form-control" type="text" value="<?php echo (set_value('pennsylvania[person_title]') != "") ? set_value('pennsylvania[person_title]') : @$data['person_title']; ?>" />
                                                <div class="form-control-focus"> </div>
                                            </div>
                                        </div> -->
										<div class="col-md-6">
											<div class="col-md-6">
												<label class=" control-label">Phone</label>
											</div>
											<div class="col-md-6">
												<input placeholder="732-987-3817" name="pennsylvania[person_phone]" class="form-control" type="text" value="<?php echo (set_value('pennsylvania[person_phone]') != "") ? set_value('pennsylvania[person_phone]', '7329873817') : @$data['person_phone']; ?>" id="phone_penn2" />
												<div class="form-control-focus"> </div>
											</div>
										</div>
									</div>
								</div> <br>
								<div class="row">
									<div class="col-md-12">
										<div class="col-md-6">
											<div class="col-md-5">
												<label class=" control-label">Title</label>
											</div>
											<div class="col-md-7">
												<input placeholder="HR Benefits Manager" name="pennsylvania[person_title]" class="form-control" type="text" value="<?php echo (set_value('pennsylvania[person_title]') != "") ? set_value('pennsylvania[person_title]') : @$data['person_title']; ?>" />
												<div class="form-control-focus"> </div>
											</div>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-6">
										<div class="col-md-5">
											<label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b>DATE PREPARED </label>
										</div>
										<div class="col-md-7">
											<div class="input-group date date-picker-today">
												<input type="text" size="16" placeholder="Select Date" class="form-control" name="pennsylvania[date_prepared]" value="<?php echo (set_value('pennsylvania[date_prepared]') != "") ? set_value('pennsylvania[date_prepared]', '7329873817') : @$data['date_prepared']; ?>" readonly id="date_prepared">
												<span class="input-group-btn">
													<button class="btn default date-reset date_prepared" type="button">
														<i class="fa fa-times"></i>
													</button>
													<button class="btn default date-set" type="button">
														<i class="fa fa-calendar"></i>
													</button>
												</span>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="col-md-5">
											<label class="control-label"><b><?php echo $i = $i + 1; ?>.</b> Preferred Employee Email address</label>
										</div>
										<div class="col-md-7">
											<input type="text" class="form-control email_emp" placeholder="Preferred Employee Email address" name="pennsylvania[employee_email]" value="<?php echo (set_value('pennsylvania[employee_email]') != "") ? set_value('pennsylvania[employee_email]') : @$data['employee_email']; ?>">
											<input type="hidden" name="previous_url" id="prev_url" value="<?= current_url(); ?>" class="form-control">
											<p class="email-error" style="color: red; display: none;">Invalid Email</p>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">

								</div>
							</div>
							<!-- <div class="portlet light " id="blockui_sample_1_portlet_body"> -->


							<div class="form-actions right">
								<a href="<?php echo base_url('Insurance_manage/generate_pennsylvania_pdf/' . $this->uri->segment(3)); ?>" style="text-decoration: none">
									<!-- <button type="button" class="btn default txt-btn" id="generate_pennsylvenia_pdf" data-id="<?= $data['id'] ?>" data-state="5"><i class="fa fa-file-pdf-o"></i>Generate Pdf</a></button> -->
									<a href="<?php echo base_url('Insurance_manage'); ?>"><button type="button" class="btn default">Cancel</button></a>
									<a href="javascript:;"><button type="submit" id="save" class="btn blue"><i class="fa fa-check"></i> Save</button></a>
							</div>
							<!-- </div> -->
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<style type="text/css">
	.p-11 {
		padding: 11px;
	}
</style>
<div id="responsive" class="modal fade" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h4 class="modal-title">Email</h4>
			</div>
			<div class="modal-body html-contetn">

			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
				<!-- <button type="button" class="btn green">Save changes</button> -->
			</div>
		</div>
	</div>
</div>

<!-- loading model -->
<div class="modal fade bs-modal-sm" id="ajax" role="basic" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="text-center" style="width: 100px">
				<div class="modal-body">
					<img src="<?= base_url('assets/theme/') ?>assets/global/img/loading-spinner-grey.gif" alt="" class="loading">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- loading model -->
