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
				<li><a href="#">New Jersey</a><i class="fa fa-circle"></i></li>
				<!-- <li><span>Page Layouts</span></li> -->
			</ul>
		</div>
		<h1 class="page-title"> New Jersey Claim
			<!-- <small>blank page layout</small> -->
		</h1>
		<form id="new_jersey_form_id" action="<?php echo base_url('Insurance_manage/new_jersey/' . $this->uri->segment(3)); ?>" method="post" class="horizontal-form">
			<div class="row">
				<div class="col-md-6">
					<div class="col-md-5">
						<label class="control-label" for="state_injury_or_illness_occurred">Day return to work :</label>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<input type="text" size="16" placeholder="Select Date" class="form-control" name="new_jersey[return_work_date]" value="<?php echo (set_value('new_jersey[return_work_date]') != "") ? set_value('new_jersey[return_work_date]') : database_to_datepicker($data['return_work_date']); ?>" readonly>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-5">
						<label class="control-label" for="state_injury_or_illness_occurred">Day missed :</label>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<input type="text" class="form-control" value="<?php echo $day_missed; ?>" name="new_jersey[return_work_date]" style="width: 225px;" readonly>
							<!-- <input type="text" class="form-control"  value="<?php echo (set_value('new_jersey[work_stop_date]') != "") ? set_value('new_jersey[work_stop_date]') . '-' . set_value('new_jersey[return_work_date]') : database_to_datepicker($data['work_stop_date']) . ' - ' . database_to_datepicker($data['return_work_date']); ?>" name="new_jersey[return_work_date]" style="width: 225px;" readonly> -->
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
						<input type="text" placeholder="Claim Number" size="16" class="form-control" name="new_jersey[claim_number]" value="<?php echo (set_value('new_jersey[claim_number]') != "") ? set_value('new_jersey[claim_number]') : @$data['claim_number']; ?>" name="new_jersey[claim_number]">
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-5">
						<label class="control-label" for="state_injury_or_illness_occurred">Insurance Company :</label>
					</div>
					<div class="col-md-5">
						<input type="text" placeholder="Insurance Company" size="16" class="form-control" name="new_jersey[insurance_company]" value="<?php echo (set_value('new_jersey[insurance_company]') != "") ? set_value('new_jersey[insurance_company]') : @$data['insurance_company']; ?>" name="new_jersey[insurance_company]">
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
							<input type="text" placeholder="Select Date" size="16" class="form-control" value="<?php echo (!isset($data['addition_date'])) ? set_value('new_jersey[addition_date]', database_to_datepicker($data['created_at'])) : database_to_datepicker($data['addition_date']); ?>" readonly>

						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-5">
						<label class="control-label" for="state_injury_or_illness_occurred">WC Contact Information:</label>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<input type="text" placeholder="WC Information" size="16" class="form-control" value="<?php echo (set_value('new_jersey[wc_contact_info]') != "") ? set_value('new_jersey[wc_contact_info]') : @$data['wc_contact_info']; ?>" name="new_jersey[wc_contact_info]">
							<!-- <input type="text" placeholder="WC Information" size="16" class="form-control" name="new_jersey[preparer_name]" value="<?php echo (set_value('new_jersey[preparer_name]') != "") ? set_value('new_jersey[preparer_name]') : @$data['preparer_name']; ?>" name="new_jersey[preparer_name]"> -->
						</div>
					</div>
				</div>
			</div>
			<div class="row" style="margin-top: 10px;">
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

				<!-- <div class="col-md-6"> -->
				<!-- <div class="col-md-5">
                        <label class="control-label" for="state_injury_or_illness_occurred"> Add these questions with free style space for responses:<span class="required" aria-required="true"> *</span></label>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <select class="form-control" id="question1"  name="question1">
                                        <option value="0">Please Select these questions with free style space for responses</option>
                                        <option value="a"  <?php echo set_select('question1', 'a', ($data['question1'] == "a") ? true : ''); ?> >What action plan should be done to prevent similar incidents in the future? <br>
                                        (Determine if equipment, materials or people require additional attention). </option>
                                        <option value="b"  <?php echo set_select('question1', 'b', ($data['question1'] == "b") ? true : ''); ?> >What has been done thus far; take or recommend corrective action depending on your authority?</option>
                                        <option value="c"  <?php echo set_select('question1', 'c', ($data['question1'] == "c") ? true : ''); ?> >How will this improve operations (objective is to decrease job hindrances)?
                                        </option>
                                    </select>
                        </div>
                    </div> -->
				<!-- </div> -->
				<?php //echo $data['emp_status'];exit;
				?>

			</div>
			<div class="row" style="margin-top: 0px;">
				<div class="col-md-6">
					<div class="col-md-5">
						<label class="control-label" for="state_injury_or_illness_occurred">Status:</label>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<select class="form-control" name="new_jersey[status]" style="width:auto;padding:auto;">
								<option value="0" <?php echo set_select('new_jersey[status]', '0', ($data['status'] == "0") ? TRUE : ''); ?>selected> Processing </option>
								<option value="1" <?php echo set_select('new_jersey[status]', '1', ($data['status'] == "1") ? TRUE : ''); ?>> Pending </option>
								<option value="2" <?php echo set_select('new_jersey[status]', '2', ($data['status'] == "2") ? TRUE : ''); ?>> Submitted </option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-md-6">
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
                                        <strong>Error!</strong> <span><?= $value ?></span><br>
                                    </li>
                                </ul>
                            </div>
                        <?php } ?>
                    <?php } ?> -->
				<div class="tab-pane active" id="new_jersey">
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i> New Jersey Insurance Claim
							</div>
						</div>
						<div class="portlet-body form">
							<div class="row">
								<div class="col-md-1">
								</div>
								<div class="col-md-10">
									<h2 class="text-center"><b>WORKERS COMPENSATION – FIRST REPORT OF INJURY OR ILLNESS</b></h2>
									<h4 class="text-center"><b><i>State of New Jersey - Workers' Compensation Board</i></b></h4>

								</div>
								<div class="col-md-1">
								</div>
							</div>
							<div class="form-body">
								<h3 class="form-section" style="color: #4d86c4"><b>Employee/Wage</b></h3>
								<div class="row">
									<div class="col-md-7">
										<label class="col-md-4 control-label"><b>1.</b> Employee Name:<span class="required" aria-required="true">*</span>
										</label>
										<div class="col-md-8">
											<input type="text" value="<?php echo (set_value('new_jersey[full_name]') != "") ? set_value('new_jersey[full_name]') : $data['full_name']; ?>" class="form-control AlphabetsOnly" name="new_jersey[full_name]" placeholder="Last &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; First &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Middle" autocomplete="off">
										</div>
										<?php if (isset($errors['new_jersey[full_name]'])) : ?>
											<label class="text-danger"><?= $errors['new_jersey[full_name]']; ?></label>
										<?php endif; ?>
									</div>
									<div class="col-md-5">
										<div class="col-md-3">
											<label class=" control-label" for="date_notice_provided"><b>2.</b> DOB: <span class="required" aria-required="true">*</span></label>
										</div>
										<div class="col-md-9">
											<div class="meridian_2 date">
												<input type="text" placeholder="Select Date" size="16" class="form-control" value="<?php echo ($data['dob'] == "") ? set_value('new_jersey[dob]') : database_to_datepicker($data['dob']); ?>" id="dob_newjeresy" name="new_jersey[dob]" readonly>
												<!--  <span class="input-group-btn">
                                                        <button class="btn default date-reset" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <button class="btn default date-set" type="button">
                                                            <i class="fa fa-calendar"></i>
                                                        </button>
                                                    </span> -->
											</div>
											<?php if (isset($errors['new_jersey[dob]'])) : ?>
												<label class="text-danger"><?= $errors['new_jersey[dob]']; ?></label>
											<?php endif; ?>
										</div>
									</div>
								</div>
								<hr>
								<?php //echo  set_value('new_jersey[social_security_num]');exit;
								?>
								<div class="row">
									<div class="col-md-6">
										<label class="col-md-5 control-label" for="contact_phone_number"><b>3.</b> Social Security Number <span class="required" aria-required="true">*</span> : </label>
										<div class="col-md-7">
											<input type="text" class="form-control security" placeholder="Enter Social Security Number" value="<?php echo ($data['social_security_num'] == "") ? set_value('new_jersey[social_security_num]') : $data['social_security_num']; ?>" name="new_jersey[social_security_num]" id="social_security_num" style="margin-left: -1rem" />

											<!-- <input type="text" class="form-control security" placeholder="Enter Social Security Number" value="<?php echo ($data['social_security_num'] == "") ? set_value('new_jersey[social_security_num]') : $data['social_security_num']; ?>" name="new_jersey[social_security_num]"  id="social_security_num" name="new_york[social_security_num]" data-inputmask="'mask': '999-99-9999 t\\m', 'jitMasking': true, 'showMaskOnFocus': false, 'showMaskOnHover': false, 'hourFormat': '12', 'alias': 'datetime', 'nullable': true"> -->
											<p class="why_security error" style="display:none">Please Enter Social Security</p>
											<?php if (isset($errors['new_jersey[social_security_num]'])) : ?>
												<label class="text-danger"><?= $errors['new_jersey[social_security_num]']; ?></label>
											<?php endif; ?>
										</div>
									</div>
									<div class="col-md-6" style="display: none;">
										<div class="col-md-4">
											<label class=" control-label"><b>4.</b> Discipline: </label>
										</div>
										<div class="col-md-8">
											<div class="form-group">
												<select class="form-control select2" name="new_jersey[discipline]" data-placeholder="Choose a Category" tabindex="1">
													<option value="">Select Discipline</option>
													<option value="PT" <?php echo set_select('new_jersey[discipline]', 'PT', ($data['discipline'] == "PT") ? TRUE : ''); ?>>PT</option>
													<option value="PTA" <?php echo set_select('new_jersey[discipline]', 'PTA', ($data['discipline'] == "PTA") ? TRUE : ''); ?>>PTA</option>
													<option value="OT" <?php echo set_select('new_jersey[discipline]', 'OT', ($data['discipline'] == "OT") ? TRUE : ''); ?>>OT</option>
													<option value="COTA" <?php echo set_select('new_jersey[discipline]', 'COTA', ($data['discipline'] == "COTA") ? TRUE : ''); ?>>COTA</option>
													<option value="SLP" <?php echo set_select('new_jersey[discipline]', 'SLP', ($data['discipline'] == "SLP") ? TRUE : ''); ?>>SLP</option>
													<option value="Rehab Aide" <?php echo set_select('new_jersey[discipline]', 'Rehab Aide', ($data['discipline'] == "Rehab Aide") ? TRUE : ''); ?>>Rehab Aide</option>
													<option value="Regional Manager" <?php echo set_select('new_jersey[discipline]', 'Regional Manager', ($data['discipline'] == "Regional Manager") ? TRUE : ''); ?>>Regional Manager</option>
													<option value="Corporate Staff" <?php echo set_select('new_jersey[discipline]', 'Corporate Staff', ($data['discipline'] == "Corporate Staff") ? TRUE : ''); ?>>Corporate Staff</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<hr>
								<div class="row" style="display: none;">
									<div class="col-md-12">
										<div class="col-md-2">
											<label class="control-label"><b>5.</b> Facility Name :</label>
										</div>
										<div class="col-md-10">
											<input placeholder="Facility Name" name="new_jersey[facility_name]" class="form-control" type="text" value="<?php echo (set_value('new_jersey[facility_name]') != "") ? set_value('new_jersey[facility_name]') : $data['facility_name']; ?>" />
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-7">
										<div class="col-md-4">
											<label class=" control-label"><b>4.</b> Date Hired <span class="required" aria-required="true">*</span> :</label>
										</div>
										<div class="col-md-6">
											<div class="input-group date date-picker">
												<input type="text" size="16" placeholder="Select Date" class="form-control" name="new_jersey[date_hire]" readonly value="<?php echo (set_value('new_jersey[date_hire]') != "") ? set_value('new_jersey[date_hire]') : database_to_datepicker($data['date_hire']); ?>" id="date_hired_newjersey">
												<span class="input-group-btn">
													<button class="btn default date-reset date_hired_newjersey" type="button">
														<i class="fa fa-times"></i>
													</button>
													<button class="btn default date-set" type="button">
														<i class="fa fa-calendar"></i>
													</button>
												</span>
											</div>
											<?php if (isset($errors['new_jersey[date_hire]'])) : ?>
												<label class="text-danger"><?= $errors['new_jersey[date_hire]']; ?></label>
											<?php endif; ?>
										</div>
									</div>
									<div class="col-md-5">
										<div class="col-md-4">
											<label class="control-label"><b>5.</b> State Of Hired</label>
										</div>
										<div class="col-md-8">
											<div class="form-group">
												<select class="form-control select2" name="new_jersey[state_injury]" data-placeholder="Choose a State of Hire" tabindex="1">
													<option value="">Select State Injury</option>
													<option value="AL" <?php echo set_select('new_jersey[state_injury]', 'AL', ($data['state_injury'] == "AL") ? TRUE : ''); ?>>Alabama</option>
													<option value="AK" <?php echo set_select('new_jersey[state_injury]', 'AK', ($data['state_injury'] == "AK") ? TRUE : ''); ?>>Alaska</option>
													<option value="AZ" <?php echo set_select('new_jersey[state_injury]', 'AZ', ($data['state_injury'] == "AZ") ? TRUE : ''); ?>>Arizona</option>
													<option value="AR" <?php echo set_select('new_jersey[state_injury]', 'AR', ($data['state_injury'] == "AR") ? TRUE : ''); ?>>Arkansas</option>
													<option value="CA" <?php echo set_select('new_jersey[state_injury]', 'CA', ($data['state_injury'] == "CA") ? TRUE : ''); ?>>California</option>
													<option value="CO" <?php echo set_select('new_jersey[state_injury]', 'CO', ($data['state_injury'] == "CO") ? TRUE : ''); ?>>Colorado</option>
													<option value="CT" <?php echo set_select('new_jersey[state_injury]', 'CT', ($data['state_injury'] == "CT") ? TRUE : ''); ?>>Connecticut</option>
													<option value="DE" <?php echo set_select('new_jersey[state_injury]', 'DE', ($data['state_injury'] == "DE") ? TRUE : ''); ?>>Delaware</option>
													<option value="FL" <?php echo set_select('new_jersey[state_injury]', 'FL', ($data['state_injury'] == "FL") ? TRUE : ''); ?>>Florida</option>
													<option value="GA" <?php echo set_select('new_jersey[state_injury]', 'GA', ($data['state_injury'] == "GA") ? TRUE : ''); ?>>Georgia</option>
													<option value="HI" <?php echo set_select('new_jersey[state_injury]', 'HI', ($data['state_injury'] == "HI") ? TRUE : ''); ?>>Hawaii</option>
													<option value="ID" <?php echo set_select('new_jersey[state_injury]', 'ID', ($data['state_injury'] == "ID") ? TRUE : ''); ?>>Idaho</option>
													<option value="IL" <?php echo set_select('new_jersey[state_injury]', 'IL', ($data['state_injury'] == "IL") ? TRUE : ''); ?>>Illinois</option>
													<option value="IN" <?php echo set_select('new_jersey[state_injury]', 'IN', ($data['state_injury'] == "IN") ? TRUE : ''); ?>>Indiana</option>
													<option value="IA" <?php echo set_select('new_jersey[state_injury]', '', ($data['state_injury'] == "IA") ? TRUE : ''); ?>>Iowa</option>
													<option value="KS" <?php echo set_select('new_jersey[state_injury]', 'KS', ($data['state_injury'] == "KS") ? TRUE : ''); ?>>Kansas</option>
													<option value="KY" <?php echo set_select('new_jersey[state_injury]', 'KY', ($data['state_injury'] == "KY") ? TRUE : ''); ?>>Kentucky</option>
													<option value="LA" <?php echo set_select('new_jersey[state_injury]', 'LA', ($data['state_injury'] == "LA") ? TRUE : ''); ?>>Louisiana</option>
													<option value="ME" <?php echo set_select('new_jersey[state_injury]', 'ME', ($data['state_injury'] == "ME") ? TRUE : ''); ?>>Maine</option>
													<option value="MD" <?php echo set_select('new_jersey[state_injury]', 'MD', ($data['state_injury'] == "MD") ? TRUE : ''); ?>>Maryland</option>
													<option value="MA" <?php echo set_select('new_jersey[state_injury]', 'MA', ($data['state_injury'] == "MA") ? TRUE : ''); ?>>Massachusetts</option>
													<option value="MI" <?php echo set_select('new_jersey[state_injury]', 'MI', ($data['state_injury'] == "MI") ? TRUE : ''); ?>>Michigan</option>
													<option value="MN" <?php echo set_select('new_jersey[state_injury]', 'MN', ($data['state_injury'] == "MN") ? TRUE : ''); ?>>Minnesota</option>
													<option value="MS" <?php echo set_select('new_jersey[state_injury]', 'MS', ($data['state_injury'] == "MS") ? TRUE : ''); ?>>Mississippi</option>
													<option value="MO" <?php echo set_select('new_jersey[state_injury]', 'MO', ($data['state_injury'] == "MO") ? TRUE : ''); ?>>Missouri</option>
													<option value="MT" <?php echo set_select('new_jersey[state_injury]', 'MT', ($data['state_injury'] == "MT") ? TRUE : ''); ?>>Montana</option>
													<option value="NE" <?php echo set_select('new_jersey[state_injury]', 'NE', ($data['state_injury'] == "NE") ? TRUE : ''); ?>>Nebraska</option>
													<option value="NV" <?php echo set_select('new_jersey[state_injury]', 'NV', ($data['state_injury'] == "NV") ? TRUE : ''); ?>>Nevada</option>
													<option value="NH" <?php echo set_select('new_jersey[state_injury]', 'NH', ($data['state_injury'] == "NH") ? TRUE : ''); ?>>New Hampshire</option>
													<option value="NJ" <?php echo set_select('new_jersey[state_injury]', 'NJ', ($data['state_injury'] == "NJ") ? TRUE : ''); ?>>New Jersey</option>
													<option value="NM" <?php echo set_select('new_jersey[state_injury]', 'NM', ($data['state_injury'] == "NM") ? TRUE : ''); ?>>New Mexico</option>
													<option value="NY" <?php echo set_select('new_jersey[state_injury]', 'NY', ($data['state_injury'] == "NY") ? TRUE : ''); ?>>New York</option>
													<option value="NC" <?php echo set_select('new_jersey[state_injury]', 'NC', ($data['state_injury'] == "NC") ? TRUE : ''); ?>>North Carolina</option>
													<option value="ND" <?php echo set_select('new_jersey[state_injury]', 'ND', ($data['state_injury'] == "ND") ? TRUE : ''); ?>>North Dakota</option>
													<option value="OH" <?php echo set_select('new_jersey[state_injury]', 'OH', ($data['state_injury'] == "OH") ? TRUE : ''); ?>>Ohio</option>
													<option value="OK" <?php echo set_select('new_jersey[state_injury]', 'OK', ($data['state_injury'] == "OK") ? TRUE : ''); ?>>Oklahoma</option>
													<option value="OR" <?php echo set_select('new_jersey[state_injury]', 'OR', ($data['state_injury'] == "OR") ? TRUE : ''); ?>>Oregon</option>
													<option value="PA" <?php echo set_select('new_jersey[state_injury]', 'PA', ($data['state_injury'] == "PA") ? TRUE : ''); ?>>Pennsylvania</option>
													<option value="RI" <?php echo set_select('new_jersey[state_injury]', 'RI', ($data['state_injury'] == "RI") ? TRUE : ''); ?>>Rhode Island</option>
													<option value="SC" <?php echo set_select('new_jersey[state_injury]', 'SC', ($data['state_injury'] == "SC") ? TRUE : ''); ?>>South Carolina</option>
													<option value="SD" <?php echo set_select('new_jersey[state_injury]', 'SD', ($data['state_injury'] == "SD") ? TRUE : ''); ?>>South Dakota</option>
													<option value="TN" <?php echo set_select('new_jersey[state_injury]', 'TN', ($data['state_injury'] == "TN") ? TRUE : ''); ?>>Tennessee</option>
													<option value="TX" <?php echo set_select('new_jersey[state_injury]', 'TX', ($data['state_injury'] == "TX") ? TRUE : ''); ?>>Texas</option>
													<option value="UT" <?php echo set_select('new_jersey[state_injury]', 'UT', ($data['state_injury'] == "UT") ? TRUE : ''); ?>>Utah</option>
													<option value="VT" <?php echo set_select('new_jersey[state_injury]', 'VT', ($data['state_injury'] == "VT") ? TRUE : ''); ?>>Vermont</option>
													<option value="VA" <?php echo set_select('new_jersey[state_injury]', 'VA', ($data['state_injury'] == "VA") ? TRUE : ''); ?>>Virginia</option>
													<option value="WA" <?php echo set_select('new_jersey[state_injury]', 'WA', ($data['state_injury'] == "WA") ? TRUE : ''); ?>>Washington</option>
													<option value="WD" <?php echo set_select('new_jersey[state_injury]', 'WD', ($data['state_injury'] == "WD") ? TRUE : ''); ?>>Washington DC</option>
													<option value="WV" <?php echo set_select('new_jersey[state_injury]', 'WV', ($data['state_injury'] == "WV") ? TRUE : ''); ?>>West Virginia</option>
													<option value="WI" <?php echo set_select('new_jersey[state_injury]', 'WI', ($data['state_injury'] == "WI") ? TRUE : ''); ?>>Wisconsin</option>
													<option value="WY" <?php echo set_select('new_jersey[state_injury]', 'WY', ($data['state_injury'] == "WY") ? TRUE : ''); ?>>Wyoming</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-7">
										<div class="col-md-4">
											<label class=" control-label"><b>6.</b> Address (INC Zip) <span class="required" aria-required="true">*</span></label>
										</div>
										<div class="col-md-8">
											<textarea class="form-control" name="new_jersey[address]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="House number, City, State, and ZIP"><?php echo (set_value('new_jersey[address]') != "") ? set_value('new_jersey[address]') : $data['address']; ?></textarea>
											<?php if (isset($errors['new_jersey[address]'])) : ?>
												<label class="text-danger"><?= $errors['new_jersey[address]']; ?></label>
											<?php endif; ?>
										</div>
									</div>
									<div class="col-md-5">
										<div class="col-md-4">
											<label class=" control-label"><b>7.</b> Gender <span class="required" aria-required="true">*</span></label>
										</div>
										<div class="col-md-8">
											<div class="form-group form-md-radios">
												<div class="md-radio-inline">
													<div class="md-radio">
														<input type="radio" id="new_jersey_gender_1" name="new_jersey[gender]" value="1" <?php echo set_checkbox('new_jersey[gender]', '1', ($data['gender'] == "1") ? TRUE : '') ?> class="md-radiobtn">
														<label for="new_jersey_gender_1">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>Male </label>
													</div>
													<div class="md-radio">
														<input type="radio" id="new_jersey_gender_2" name="new_jersey[gender]" value="0" <?php echo set_checkbox('new_jersey[gender]', '0', ($data['gender'] == "0") ? TRUE : '') ?> class="md-radiobtn">
														<label for="new_jersey_gender_2">
															<span></span>
															<span class="check"></span>
															<span class="box"></span> Female </label>
													</div>
													<?php if (isset($errors['new_jersey[gender]'])) : ?>
														<label class="text-danger"><?= $errors['new_jersey[gender]']; ?></label>
													<?php endif; ?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-9">
										<div class="col-md-3">
											<label class=" control-label"><b>8.</b> Marital Status</label>
										</div>
										<div class="col-md-9">
											<div class="form-group form-md-radios">
												<div class="md-radio-inline">
													<div class="md-radio">
														<input type="radio" id="new_jersey_marital_status_option_1" name="new_jersey[marital_status]" value="0" <?php echo set_checkbox('new_jersey[marital_status]', '0', ($data['marital_status'] == "0") ? TRUE : ''); ?> class="md-radiobtn">
														<label for="new_jersey_marital_status_option_1">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>UNMARRIED SINGLE / DIVORCED </label>
													</div>
													<div class="md-radio">
														<input type="radio" id="new_jersey_marital_status_option_2" name="new_jersey[marital_status]" value="1" <?php echo set_checkbox('new_jersey[marital_status]', '1', ($data['marital_status'] == "1") ? TRUE : ''); ?> class="md-radiobtn">
														<label for="new_jersey_marital_status_option_2">
															<span></span>
															<span class="check"></span>
															<span class="box"></span> MARRIED </label>
													</div>
													<div class="md-radio">
														<input type="radio" id="new_jersey_marital_status_option_3" name="new_jersey[marital_status]" value="2" <?php echo set_checkbox('new_jersey[marital_status]', '2', ($data['marital_status'] == "2") ? TRUE : ''); ?> class="md-radiobtn">
														<label for="new_jersey_marital_status_option_3">
															<span></span>
															<span class="check"></span>
															<span class="box"></span> SEPARATED </label>
													</div>
													<div class="md-radio">
														<input type="radio" id="new_jersey_marital_status_option_4" name="new_jersey[marital_status]" value="3" <?php echo set_checkbox('new_jersey[marital_status]', '3', ($data['marital_status'] == "3") ? TRUE : ''); ?> class="md-radiobtn">
														<label for="new_jersey_marital_status_option_4">
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
											<label class=" control-label"><b>9.</b> Occupation / Job Title <span class="required" aria-required="true">*</span></label>
										</div>
										<div class="col-md-7">
											<input style="width: 100%!important;" name="new_jersey[job_title]" placeholder="Occupation / Job Title" class="form-control form-control-inline input-medium" size="16" type="text" value="<?php echo (set_value('new_jersey[job_title]') != "") ? set_value('new_jersey[job_title]') : $data['job_title']; ?>" />
										</div>
										<?php if (isset($errors['new_jersey[job_title]'])) : ?>
											<label class="text-danger"><?= $errors['new_jersey[job_title]']; ?></label>
										<?php endif; ?>
									</div>

									<div class="col-md-5">
										<div class="col-md-5">
											<label class=" control-label"><b>10.</b>Employment Status <span class="required" aria-required="true">*</span></label>
										</div>
										<div class="col-md-7">
											<div class="form-group form-md-radios">
												<div class="md-radio-inline" id="radio-msg">
													<div class="md-radio">
														<input type="radio" id="new_jersey_job_title_option_1" name="new_jersey[employment_status]" value="0" <?php echo set_checkbox('new_jersey[employment_status]', '0', ($data['employment_status'] == "0") ? TRUE : ''); ?> class="md-radiobtn">
														<label for="new_jersey_job_title_option_1">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>Part time </label>
													</div>
													<div class="md-radio">
														<input type="radio" id="new_jersey_job_title_option_2" name="new_jersey[employment_status]" value="1" <?php echo set_checkbox('new_jersey[employment_status]', '1', ($data['employment_status'] == "1") ? TRUE : ''); ?> class="md-radiobtn">
														<label for="new_jersey_job_title_option_2">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>Full time </label>
													</div>
													<?php if (isset($errors['new_jersey[employment_status]'])) : ?>
														<label class="text-danger"><?= $errors['new_jersey[employment_status]']; ?></label>
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
											<label class=" control-label"><b>11.</b>Number of days worked each week</label>
										</div>
										<div class="col-md-7">
											<input placeholder="Number of days worked each week" name="new_jersey[day_worked]" class="form-control" type="text" value="<?php echo (set_value('new_jersey[day_worked]') != "") ? set_value('new_jersey[day_worked]') : $data['day_worked']; ?>" id="newjersey_day_worked" />
											<p id="possitive-error" style="color: red;display: none;">Please Enter number</p>
										</div>
									</div>
									<div class="col-md-5">
										<div class="col-md-5">
											<label class=" control-label"><b>12.</b> Full Pay for day of Injury</label>
										</div>
										<div class="col-md-7">
											<div class="form-group form-md-radios">
												<div class="md-radio-inline">
													<div class="md-radio">
														<input type="radio" id="new_jersey_full_pay_for_day_of_injury_option_1" name="new_jersey[full_pay]" value="1" <?php echo set_checkbox('new_jersey[full_pay]', '1', ($data['full_pay'] == "1") ? TRUE : ''); ?> class="md-radiobtn" checked>
														<label for="new_jersey_full_pay_for_day_of_injury_option_1">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>Yes </label>
													</div>
													<div class="md-radio">
														<input type="radio" id="new_jersey_full_pay_for_day_of_injury_option_2" name="new_jersey[full_pay]" value="0" <?php echo set_checkbox('new_jersey[full_pay]', '0', ($data['full_pay'] == "0") ? TRUE : ''); ?> class="md-radiobtn">
														<label for="new_jersey_full_pay_for_day_of_injury_option_2">
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
										<div class="col-md-5">
											<label class=" control-label"><b>13.</b> Did Salary Continue</label>
										</div>
										<div class="col-md-7">
											<div class="form-group form-md-radios">
												<div class="md-radio-inline">
													<div class="md-radio">
														<input type="radio" id="new_jersey_did_salary_continue_option_1" name="new_jersey[salary_continue]" value="1" <?php echo set_checkbox('new_jersey[salary_continue]', '1', ($data['salary_continue'] == "1") ? TRUE : ''); ?> class="md-radiobtn">
														<label for="new_jersey_did_salary_continue_option_1">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>Yes </label>
													</div>
													<div class="md-radio">
														<input type="radio" id="new_jersey_did_salary_continue_option_2" name="new_jersey[salary_continue]" value="0" <?php echo set_checkbox('new_jersey[salary_continue]', '0', ($data['salary_continue'] == "0") ? TRUE : ''); ?> class="md-radiobtn">
														<label for="new_jersey_did_salary_continue_option_2">
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
											<label class=" control-label"><b>14.</b> Preferred Employee Email address</label>
										</div>
										<div class="col-md-6">
											<input type="email" name="new_jersey[employee_email]" class="form-control" value="<?php echo (set_value('new_jersey[employee_email]') != "") ? set_value('new_jersey[employee_email]') : @$data['employee_email']; ?>" placeholder="Preferred Employee Email address">
										</div>
									</div>
								</div>
								<h3 class="form-section" style="color: #4d86c4"><b>Occurrence/Treatment</b></h3>
								<div class="row">
									<div class="col-md-6">
										<div class="col-md-5">
											<label class=" control-label"><b>1.</b> Time Employee Began Work : <span class="required" aria-required="true">*</span></label>
										</div>
										<div class="col-md-7">
											<!-- <div class="input-group date form_meridian_datetime"> -->
											<div class="input-group">
												<input type="text" size="16" class="form-control timepicker" name="new_jersey[began_work]" placeholder="Select Time" value="<?php echo (set_value('new_jersey[began_work]') != "") ? set_value('new_jersey[began_work]') : database_to_timepicker($data['began_work']); ?>" readonly id="new_jersey_began_work">
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
											<label class=" control-label"><b>2.</b> Date of Injury / Illness <span class="required" aria-required="true">*</span>:</label>
										</div>
										<div class="col-md-7">
											<div class="input-group date date-picker">
												<input type="text" size="16" placeholder="Select Date" name="new_jersey[date_of_injury]" value="<?php echo (set_value('new_jersey[date_of_injury]') != "") ? set_value('new_jersey[date_of_injury]') : $data['date_of_injury']; ?>" readonly class="form-control" id="date_of_injury">
												<span class="input-group-btn">
													<button class="btn default date-reset date_of_injury" type="button">
														<i class="fa fa-times"></i>
													</button>
													<button class="btn default date-set" type="button">
														<i class="fa fa-calendar"></i>
													</button>
												</span>
											</div>
											<?php if (isset($errors['new_jersey[date_of_injury]'])) : ?>
												<label class="text-danger"><?= $errors['new_jersey[date_of_injury]']; ?></label>
											<?php endif; ?>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-6">
										<div class="col-md-5">
											<label class=" control-label"><b>3.</b> Time of Occurrence <span class="required" aria-required="true">*</span></label>
										</div>
										<div class="col-md-7">
											<!-- <div class="input-group meridian_1 date form_meridian_datetime"> -->
											<div class="input-group">
												<input type="text" placeholder="Select Date Time" size="16" class="form-control timepicker" name="new_jersey[time_of_injury]" value="<?php echo (set_value('new_jersey[time_of_injury]') != "") ? set_value('new_jersey[time_of_injury]') : database_to_timepicker($data['time_of_injury']); ?>" readonly id="time_of_injury_newjersey">
												<span class="input-group-btn">
													<button class="btn default" type="button" id="injury_clock">
														<i class="fa fa-clock-o"></i>
													</button>
												</span>
											</div>
											<?php if (isset($errors['new_jersey[time_of_injury]'])) : ?>
												<label class="text-danger"><?= $errors['new_jersey[time_of_injury]']; ?></label>
											<?php endif; ?>
										</div>
									</div>
									<div class="col-md-6">
										<div class="col-md-5">
											<label class=" control-label"><b>4.</b> Last Work Date <span class="required" aria-required="true">*</span></label>
										</div>
										<div class="col-md-7">
											<div class="input-group date date-picker">
												<input type="text" size="16" placeholder="Select Date" name="new_jersey[work_stop_date]" class="form-control" value="<?php echo (set_value('new_jersey[work_stop_date]') != "") ? set_value('new_jersey[work_stop_date]') : database_to_datepicker($data['work_stop_date']); ?>" readonly id="work_stop_date_newjersey">
												<span class="input-group-btn">
													<button class="btn default date-reset date_work_stop_date" type="button">
														<i class="fa fa-times"></i>
													</button>
													<button class="btn default date-set" type="button">
														<i class="fa fa-calendar"></i>
													</button>
												</span>
											</div>
											<p class="min_date_error " style="display:none;color: red">This date should be less than from Return Work Date</p>
											<p class="same_date " style="display:none;color: red">You cannot select same date</p>
											<?php if (isset($errors['new_jersey[work_stop_date]'])) : ?>
												<label class="text-danger"><?= $errors['new_jersey[work_stop_date]']; ?></label>
											<?php endif; ?>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-6">
										<div class="col-md-5">
											<label class=" control-label"><b>5.</b> Date Employer Notified <span class="required" aria-required="true">*</span></label>
										</div>
										<div class="col-md-7">
											<div class="input-group date date-picker">
												<input type="text" size="16" class="form-control" name="new_jersey[date_notified]" placeholder="Select Date" value="<?php echo (set_value('new_jersey[date_notified]') != "") ? set_value('new_jersey[date_notified]') : $data['date_notified']; ?>" readonly id="date_notified">
												<span class="input-group-btn">
													<button class="btn default date-reset date_notified" type="button">
														<i class="fa fa-times"></i>
													</button>
													<button class="btn default date-set" type="button">
														<i class="fa fa-calendar"></i>
													</button>
												</span>
											</div>
											<?php if (isset($errors['new_jersey[date_notified]'])) : ?>
												<label class="text-danger"><?= $errors['new_jersey[date_notified]']; ?></label>
											<?php endif; ?>
										</div>
									</div>
									<div class="col-md-6">
										<div class="col-md-5">
											<label class=" control-label"><b>6.</b> Date Disability Began</label>
										</div>
										<div class="col-md-7">
											<div class="input-group date date-picker">
												<input type="text" size="16" placeholder="Select Date" class="form-control" name="new_jersey[date_disability_began]" value="<?php echo (set_value('new_jersey[date_disability_began]') != "") ? set_value('new_jersey[date_disability_began]') : $data['date_disability_began']; ?>" readonly id="date_disability">
												<span class="input-group-btn">
													<button class="btn default date-reset date_disability" type="button">
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
											<label class=" control-label"><b>7.</b> Type of Injury / Illness <span class="required" aria-required="true">*</span></label>
										</div>
										<div class="col-md-7">
											<select class="form-control select2" name="new_jersey[type_of_injury]" data-placeholder="Choose a Category" tabindex="1">
												<option value="">Select Injury</option>
												<option value="Abrasion/Laceration" <?php echo set_select('new_jersey[type_of_injury]', 'Abrasion/Laceration', ($data['type_of_injury'] == "Abrasion/Laceration") ? TRUE : ''); ?>>Abrasion/Laceration</option>
												<option value="Concussion" <?php echo set_select('new_jersey[type_of_injury]', 'Concussion', ($data['type_of_injury'] == "Concussion") ? TRUE : ''); ?>>Concussion</option>

												<option value="Dislocation" <?php echo set_select('new_jersey[type_of_injury]', 'Dislocation', ($data['type_of_injury'] == "Dislocation") ? TRUE : ''); ?>>Dislocation</option>

												<option value="Illness/Infection" <?php echo set_select('new_jersey[type_of_injury]', 'Illness/Infection', ($data['type_of_injury'] == "Illness/Infection") ? TRUE : ''); ?>>Illness/Infection</option>

												<option value="Sprain/Strain" <?php echo set_select('new_jersey[type_of_injury]', 'Sprain/Strain', ($data['type_of_injury'] == "Sprain/Strain") ? TRUE : ''); ?>>Sprain/Strain</option>
												<option value="Burn" <?php echo set_select('new_jersey[type_of_injury]', 'Burn', ($data['type_of_injury'] == "Burn") ? TRUE : ''); ?>>Burn</option>
												<option value="Contusion" <?php echo set_select('new_jersey[type_of_injury]', 'Contusion', ($data['type_of_injury'] == "Contusion") ? TRUE : ''); ?>>Contusion</option>
												<option value="Fracture" <?php echo set_select('new_jersey[type_of_injury]', 'Fracture', ($data['type_of_injury'] == "Fracture") ? TRUE : ''); ?>>Fracture</option>
												<option value="Puncture" <?php echo set_select('new_jersey[type_of_injury]', 'Puncture', ($data['type_of_injury'] == "Puncture") ? TRUE : ''); ?>>Puncture</option>
												<option value="No Apparent Injury" <?php echo set_select('new_jersey[type_of_injury]', 'No Apparent Injury', ($data['type_of_injury'] == "No Apparent Injury") ? TRUE : ''); ?>>No Apparent Injury</option>
												<option value="Other" <?php echo set_select('new_jersey[type_of_injury]', 'Other', ($data['type_of_injury'] == "Other") ? TRUE : ''); ?>>Other</option>
											</select>
											<?php if (isset($errors['new_jersey[type_of_injury]'])) : ?>
												<label class="text-danger"><?= $errors['new_jersey[type_of_injury]']; ?></label>
											<?php endif; ?>
										</div>
									</div>
									<div class="col-md-6">
										<div class="col-md-5">
											<label class=" control-label"><b>8.</b> Part of Body Affected <span class="required" aria-required="true">*</span></label>
										</div>
										<div class="col-md-7">
											<input placeholder="Part of Body Affected" name="new_jersey[part_body_affected]" class="form-control" type="text" value="<?php echo (set_value('new_jersey[part_body_affected]') != "") ? set_value('new_jersey[part_body_affected]') : $data['part_body_affected']; ?>" />
										</div>
										<?php if (isset($errors['new_jersey[part_body_affected]'])) : ?>
											<label class="text-danger"><?= $errors['new_jersey[part_body_affected]']; ?></label>
										<?php endif; ?>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-8">
										<div class="col-md-8">
											<label class=" control-label"><b>9.</b> Did Injury / Illness / Exposure occur on employer’s premises?</label>
										</div>
										<div class="col-md-4">
											<div class="form-group form-md-radios">
												<div class="md-radio-inline">
													<div class="md-radio">
														<?php if ($data['injury_permises'] == '') {
															$check = "checked='checked'";
														} else {
															$check = '';
														} ?>
														<input type="radio" id="new_jersey_did_injury_employer_permises_option_1" name="new_jersey[injury_permises]" value="1" <?php echo set_checkbox('new_jersey[injury_permises]', '1', ($data['injury_permises'] == "1") ? true : ''); ?> class="md-radiobtn">
														<label for="new_jersey_did_injury_employer_permises_option_1">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>Yes </label>
													</div>
													<div class="md-radio">
														<input type="radio" id="new_jersey_did_injury_employer_permises_option_2" name="new_jersey[injury_permises]" value="0" <?php echo set_checkbox('new_jersey[injury_permises]', '0', ($data['injury_permises'] == "0") ? true : ''); ?> <?php //echo set_checkbox('new_jersey[injury_permises]','0',($data['injury_permises'] == "0")?TRUE:'');
																																																																								?> class="md-radiobtn" <?= $check ?>>
														<label for="new_jersey_did_injury_employer_permises_option_2">
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
											<label class="control-label"><b>10.</b> Department or Location Where Accident or Illness occurred <span class="required" aria-required="true">*</span></label>
										</div>
										<div class="col-md-7">
											<textarea class="form-control" name="new_jersey[location_where_accident]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="Department or Location Where Accident or Illness occurred"><?php echo (set_value('new_jersey[location_where_accident]') != "") ? set_value('new_jersey[location_where_accident]') : $data['location_where_accident']; ?></textarea>
											<?php if (isset($errors['new_jersey[location_where_accident]'])) : ?>
												<label class="text-danger"><?= $errors['new_jersey[location_where_accident]']; ?></label>
											<?php endif; ?>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-12">
										<div class="col-md-5">
											<label class="control-label"><b>11.</b> ALL EQUIPMENT, MATERIALS, OR CHEMICALS EMPLOYEE WAS USING WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED <span class="required" aria-required="true">*</span></label>
										</div>
										<div class="col-md-7">
											<textarea class="form-control" name="new_jersey[equipment_meterials]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="ALL EQUIPMENT, MATERIALS, OR CHEMICALS EMPLOYEE WAS USING WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED"><?php echo (set_value('new_jersey[equipment_meterials]') != "") ? set_value('new_jersey[equipment_meterials]') : $data['equipment_meterials']; ?></textarea>
											<?php if (isset($errors['new_jersey[equipment_meterials]'])) : ?>
												<label class="text-danger"><?= $errors['new_jersey[equipment_meterials]']; ?></label>
											<?php endif; ?>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-12">
										<div class="col-md-5">
											<label class="control-label"><b>12.</b> SPECIFIC ACTIVITY THE EMPLOYEE WAS ENGAGED IN WHEN THE ACCIDENT OR ILLNESS EXPOSURE OCCURRED <span class="required" aria-required="true">*</span></label>
										</div>
										<div class="col-md-7">
											<textarea class="form-control" name="new_jersey[activity_engaed]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="SPECIFIC ACTIVITY THE EMPLOYEE WAS ENGAGED IN WHEN THE ACCIDENT OR ILLNESS EXPOSURE OCCURRED"><?php echo (set_value('new_jersey[activity_engaed]') != "") ? set_value('new_jersey[activity_engaed]') : $data['activity_engaed']; ?></textarea>
											<?php if (isset($errors['new_jersey[activity_engaed]'])) : ?>
												<label class="text-danger"><?= $errors['new_jersey[activity_engaed]']; ?></label>
											<?php endif; ?>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-12">
										<div class="col-md-5">
											<label class="control-label"><b>13.</b> WORK PROCESS THE EMPLOYEE WAS ENGAGED IN WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED <span class="required" aria-required="true">*</span></label>
										</div>
										<div class="col-md-7">
											<textarea class="form-control" name="new_jersey[work_process_emp_engade]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="WORK PROCESS THE EMPLOYEE WAS ENGAGED IN WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED"><?php echo (set_value('new_jersey[work_process_emp_engade]') != "") ? set_value('new_jersey[work_process_emp_engade]') : $data['work_process_emp_engade']; ?></textarea>
											<?php if (isset($errors['new_jersey[work_process_emp_engade]'])) : ?>
												<label class="text-danger"><?= $errors['new_jersey[work_process_emp_engade]']; ?></label>
											<?php endif; ?>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-12">
										<div class="col-md-5">
											<label class="control-label"><b>14.</b> HOW INJURY OR ILLNESS/ABNORMAL HEALTH CONDITION OCCURRED. DESCRIBE THE SEQUENCE OF EVENTS AND INCLUDE ANY OBJECTS OR SUBSTANCES THAT DIRECTLY INJURED THE EMPLOYEE OR MADE THE EMPLOYEE ILL <span class="required" aria-required="true">*</span></label>
										</div>
										<div class="col-md-7">
											<textarea class="form-control" name="new_jersey[how_injury_health_condition]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="HOW INJURY OR ILLNESS/ABNORMAL HEALTH CONDITION OCCURRED. DESCRIBE THE SEQUENCE OF EVENTS AND INCLUDE ANY OBJECTS OR SUBSTANCES THAT DIRECTLY INJURED THE EMPLOYEE OR MADE THE EMPLOYEE ILL"><?php echo (set_value('new_jersey[how_injury_health_condition]') != "") ? set_value('new_jersey[how_injury_health_condition]') : $data['how_injury_health_condition']; ?></textarea>
											<?php if (isset($errors['new_jersey[how_injury_health_condition]'])) : ?>
												<label class="text-danger"><?= $errors['new_jersey[how_injury_health_condition]']; ?></label>
											<?php endif; ?>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-6">
										<div class="col-md-5">
											<label class=" control-label"><b>15.</b> DATE RETURN(ED) TO WORK</label>
										</div>
										<div class="col-md-7">
											<div class="input-group date date-picker">
												<input type="text" size="16" placeholder="Select Date" class="form-control" name="new_jersey[return_work_date]" value="<?php echo (set_value('new_jersey[return_work_date]') != "") ? set_value('new_jersey[return_work_date]') : database_to_datepicker($data['return_work_date']); ?>" readonly id="return_work_date">
												<span class="input-group-btn">
													<button class="btn default date-reset date_return_work_date" type="button">
														<i class="fa fa-times"></i>
													</button>
													<button class="btn default date-set" type="button">
														<i class="fa fa-calendar"></i>
													</button>
												</span>
											</div>
											<p class="max_date_error " style="display:none;color: red">This date should be greater than from on Last Work Date</p>
											<p class="same_date " style="display:none;color: red">You cannot select same date</p>
										</div>
									</div>
									<div class="col-md-6">
										<div class="col-md-6">
											<label class=" control-label"><b>16.</b> IF FATAL, GIVE DATE OF DEATH</label>
										</div>
										<div class="col-md-6">
											<div class="input-group date date-picker">
												<input type="text" size="16" placeholder="Select Date" class="form-control" name="new_jersey[if_fatel_death_date]" value="<?php echo (set_value('new_jersey[if_fatel_death_date]') != "") ? set_value('new_jersey[if_fatel_death_date]') : $data['if_fatel_death_date']; ?>" readonly id="if_fatel_death_date">
												<span class="input-group-btn">
													<button class="btn default date-reset date_if_fatel_death_date" type="button">
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
											<label class=" control-label"><b>17.</b> WERE SAFEGUARDS OR SAFETY EQUIPMENT PROVIDED?</label>
										</div>
										<div class="col-md-4">
											<div class="form-group form-md-radios">
												<div class="md-radio-inline">
													<div class="md-radio">
														<input type="radio" id="new_jersey_were_safeguards_option_1" name="new_jersey[where_safeguards]" value="1" class="md-radiobtn sefe_guards_eqp_cls" <?php echo set_checkbox('="new_jersey[where_safeguards]', '1', ($data['where_safeguards'] == "1") ? TRUE : ''); ?>>
														<label for="new_jersey_were_safeguards_option_1">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>Yes </label>
													</div>
													<div class="md-radio">
														<input type="radio" id="new_jersey_were_safeguards_option_2" name="new_jersey[where_safeguards]" value="0" <?php echo set_checkbox('new_jersey[where_safeguards]', '0', ($data['where_safeguards'] == "0") ? TRUE : ''); ?> class="md-radiobtn sefe_guards_eqp_cls">
														<label for="new_jersey_were_safeguards_option_2">
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
											<label class=" control-label"><b>18.</b> WERE THEY USED?</label>
										</div>
										<div class="col-md-7">
											<div class="form-group form-md-radios">
												<div class="md-radio-inline">
													<div class="md-radio">
														<input type="radio" id="new_jersey_were_they_used_option_1" name="new_jersey[where_used_safaguard]" value="1" <?php echo set_checkbox('new_jersey[where_used_safaguard]', '1', ($data['where_used_safaguard'] == "1") ? TRUE : '') ?> class="md-radiobtn">
														<label for="new_jersey_were_they_used_option_1">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>Yes </label>
													</div>
													<div class="md-radio">
														<input type="radio" id="new_jersey_were_they_used_option_2" name="new_jersey[where_used_safaguard]" value="0" <?php echo set_checkbox('new_jersey[where_used_safaguard]', '0', ($data['where_used_safaguard'] == "0") ? TRUE : ''); ?> class="md-radiobtn">
														<label for="new_jersey_were_they_used_option_2">
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
											<label class="control-label"><b>19.</b> PHYSICIAN/HEALTH CARE PROVIDER (NAME & ADDRESS)</label>
										</div>
										<div class="col-md-7">
											<textarea class="form-control" name="new_jersey[physician_provider]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="PHYSICIAN/HEALTH CARE PROVIDER (NAME & ADDRESS)"><?php echo (set_value('new_jersey[physician_provider]') != "") ? set_value('new_jersey[physician_provider]') : $data['physician_provider']; ?></textarea>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-12">
										<div class="col-md-5">
											<label class="control-label"><b>20.</b> HOSPITAL OR OFF SITE TREATMENT (NAME & ADDRESS)</label>
										</div>
										<div class="col-md-7">
											<textarea class="form-control" name="new_jersey[hospital_treatment]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="HOSPITAL OR OFF SITE TREATMENT (NAME & ADDRESS)"><?php echo (set_value('new_jersey[hospital_treatment]') != "") ? set_value('new_jersey[hospital_treatment]') : $data['hospital_treatment']; ?></textarea>
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
														<input type="checkbox" id="new_jersey_hospital_or_off_site_treatment_checkboxs_1" name="new_jersey[hospital_initial_treatment][]" <?php echo set_checkbox('new_jersey[hospital_initial_treatment][]', '0', (isset($data['hospital_initial_treatment']) && in_array('0', $data['hospital_initial_treatment'])) ? TRUE : ''); ?> value="0" class="md-check">
														<label for="new_jersey_hospital_or_off_site_treatment_checkboxs_1">
															<span class="inc"></span>
															<span class="check"></span>
															<span class="box"></span> NO MEDICAL TREATMENT </label>
													</div>
												</div>
												<div class="col-md-3">
													<div class="md-checkbox">
														<input type="checkbox" id="new_jersey_hospital_or_off_site_treatment_checkboxs_2" name="new_jersey[hospital_initial_treatment][]" value="1" <?php echo set_checkbox('new_jersey[hospital_initial_treatment][]', '1', (isset($data['hospital_initial_treatment']) && in_array('1', $data['hospital_initial_treatment'])) ? TRUE : ''); ?> class="md-check">
														<label for="new_jersey_hospital_or_off_site_treatment_checkboxs_2">
															<span class="inc"></span>
															<span class="check"></span>
															<span class="box"></span> MINOR: BY EMPLOYER </label>
													</div>
												</div>
												<div class="col-md-3">
													<div class="md-checkbox">
														<input type="checkbox" id="new_jersey_hospital_or_off_site_treatment_checkboxs_3" name="new_jersey[hospital_initial_treatment][]" value="2" <?php echo set_checkbox('new_jersey[hospital_initial_treatment][]', '2', (isset($data['hospital_initial_treatment']) && in_array('2', $data['hospital_initial_treatment'])) ? TRUE : ''); ?> class="md-check">
														<label for="new_jersey_hospital_or_off_site_treatment_checkboxs_3">
															<span class="inc"></span>
															<span class="check"></span>
															<span class="box"></span> MINOR CLINIC/HOSP </label>
													</div>
												</div>
												<div class="col-md-3">
													<div class="md-checkbox">
														<input type="checkbox" id="new_jersey_hospital_or_off_site_treatment_checkboxs_4" name="new_jersey[hospital_initial_treatment][]" value="3" <?php echo set_checkbox('new_jersey[hospital_initial_treatment][]', '3', (isset($data['hospital_initial_treatment']) && in_array('3', $data['hospital_initial_treatment'])) ? TRUE : ''); ?> class="md-check">
														<label for="new_jersey_hospital_or_off_site_treatment_checkboxs_4">
															<span class="inc"></span>
															<span class="check"></span>
															<span class="box"></span> EMERGENCY CARE </label>
													</div>
												</div>
												<div class="col-md-3">
													<div class="md-checkbox">
														<input type="checkbox" id="new_jersey_hospital_or_off_site_treatment_checkboxs_5" name="new_jersey[hospital_initial_treatment][]" <?php echo set_checkbox('new_jersey[hospital_initial_treatment][]', '4', (isset($data['hospital_initial_treatment']) && in_array('4', $data['hospital_initial_treatment'])) ? TRUE : ''); ?> value="4" class="md-check">
														<label for="new_jersey_hospital_or_off_site_treatment_checkboxs_5">
															<span class="inc"></span>
															<span class="check"></span>
															<span class="box"></span> HOSPITALIZED > 24 HOURS </label>
													</div>
												</div>
												<div class="col-md-3">
													<div class="md-checkbox">
														<input type="checkbox" id="new_jersey_hospital_or_off_site_treatment_checkboxs_6" name="new_jersey[hospital_initial_treatment][]" <?php echo set_checkbox('new_jersey[hospital_initial_treatment][]', '5', (isset($data['hospital_initial_treatment']) && in_array('5', $data['hospital_initial_treatment'])) ? TRUE : ''); ?> value="5" class="md-check">
														<label for="new_jersey_hospital_or_off_site_treatment_checkboxs_6">
															<span class="inc"></span>
															<span class="check"></span>
															<span class="box"></span> FUTURE MAJOR MEDICAL </label>
													</div>
												</div>
												<div class="col-md-3">
													<div class="md-checkbox">
														<input type="checkbox" id="new_jersey_hospital_or_off_site_treatment_checkboxs_7" name="new_jersey[hospital_initial_treatment][]" <?php echo set_checkbox('new_jersey[hospital_initial_treatment][]', '6', (isset($data['hospital_initial_treatment']) && in_array('6', $data['hospital_initial_treatment'])) ? TRUE : ''); ?> value="6" class="md-check">
														<label for="new_jersey_hospital_or_off_site_treatment_checkboxs_7">
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
											<label class="control-label"><b>1.</b> WITNESSES (NAME & PHONE #)</label>
										</div>
										<div class="col-md-9">
											<input placeholder="WITNESSES (NAME & PHONE #)" name="new_jersey[witnesses]" class="form-control" type="text" value="<?php echo (set_value('new_jersey[witnesses]') != "") ? set_value('new_jersey[witnesses]') : @$data['witnesses']; ?>" /><br>
											<input placeholder="WITNESSES (NAME & PHONE #)" name="new_jersey[witnesses_1]" class="form-control" type="text" value="<?php echo (set_value('new_jersey[witnesses_1]') != "") ? set_value('new_jersey[witnesses_1]') : @$data['witnesses_1']; ?>" /><br>
											<input placeholder="WITNESSES (NAME & PHONE #)" name="new_jersey[witnesses_2]" class="form-control" type="text" value="<?php echo (set_value('new_jersey[witnesses_2]') != "") ? set_value('new_jersey[witnesses_2]') : @$data['witnesses_2']; ?>" />
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-8">
										<div class="col-md-4">
											<label class=" control-label"><b>2.</b> DATE ADMINISTRATOR NOTIFIED:</label>
										</div>
										<div class="col-md-6" style="margin-left: 3rem">
											<div class="input-group date date-picker">
												<input type="text" size="16" class="form-control" name="new_jersey[date_administrator_notified]" placeholder="Select Date" value="<?php echo (set_value('new_jersey[date_administrator_notified]') != "") ? set_value('new_jersey[date_administrator_notified]') : $data['date_administrator_notified']; ?>" readonly id="date_administrator_notified">
												<span class="input-group-btn">
													<button class="btn default date-reset  date_administrator_notified" type="button">
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
											<label class=" control-label"><b>3.</b> DATE PREPARED </label>
										</div><? php // echo $data['date_prepared'];exit;
												?>
										<div class="col-md-7">
											<div class="input-group date date-picker">
												<input type="text" size="16" placeholder="Select Date" class="form-control" name="new_jersey[date_prepared]" value="<?php echo (set_value('new_jersey[date_prepared]') != "") ? set_value('new_jersey[date_prepared]') : $data['date_prepared']; ?>" readonly id="date_prepare">
												<span class="input-group-btn">
													<button class="btn default date-reset date_prepare" type="button">
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
											<label class=" control-label"><b>4.</b> PREPARER’S NAME & TITLE </label>
										</div>
										<div class="col-md-6">
											<input placeholder="Joyce Ginsberg , Benefits Manager" name="new_jersey[preparer_name]" class="form-control" type="text" value="<?php echo (set_value('new_jersey[preparer_name]') != "") ? set_value('new_jersey[preparer_name]', 'Joyce Ginsberg , Benefits Manager') : $data['preparer_name']; ?>" style="margin-left: 3rem" />
										</div>
									</div>
									<div class="col-md-4">
										<div class="col-md-5">
											<label class=" control-label"><b>5.</b> PHONE NUMBER </label>
										</div>
										<div class="col-md-7">
											<input placeholder="732-987-3817" name="new_jersey[phone_number]" class="form-control" type="text" value="<?php echo (set_value('new_jersey[phone_number]') != "") ? set_value('new_jersey[phone_number]', '732-987-3817') : $data['phone_number']; ?>" id="phone_number" />
											<!-- <input placeholder="(732) 987-3817" name="new_jersey[phone_number]" class="form-control phone" type="text" value="<?php echo (set_value('new_jersey[phone_number]') != "") ? set_value('new_jersey[phone_number]', '732 987-3817') : $data['phone_number']; ?>" data-inputmask="'mask': '999-999-9999 t\\m', 'jitMasking': true, 'showMaskOnFocus': false, 'showMaskOnHover': false, 'hourFormat': '12', 'alias': 'datetime', 'nullable': true"/> -->
											<input type="hidden" name="previous_url" id="prev_url" value="<?= current_url(); ?>" class="form-control">

										</div>
									</div>
									<hr>
								</div>
								<div class="form-actions right">
									<a href="<?php echo base_url('Insurance_manage/generate_new_jeresy_pdf/' . $this->uri->segment(3)); ?>" style="text-decoration: none">
										<!-- <button type="button" class="btn default txt-btn" id="generate_newjersey_pdf" data-id="<?= $data['id'] ?>" data-state="2"><i class="fa fa-file-pdf-o"></i>Generate Pdf</button> -->
										<!-- <button type="button" class="btn default txt-btn"><i class="fa fa-file-pdf-o"></i>Generate Pdf</button> -->
									</a>
									<a href="<?php echo base_url('Insurance_manage'); ?>">
										<button type="button" class="btn default">Cancel</button>
									</a>
									<button type="submit" class="btn blue" id="new_jersey_submit"></i> Save</button>
								</div>
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
			<div class="modal-body">
				<img src="<?= base_url('assets/theme/') ?>assets/global/img/loading-spinner-grey.gif" alt="" class="loading">
				<span> &nbsp;&nbsp;</span>
			</div>
		</div>
	</div>
</div>
<!-- loading model -->
