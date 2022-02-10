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
				<li><a href="#">Columbia</a><i class="fa fa-circle"></i></li>
				<!-- <li><span>Page Layouts</span></li> -->
			</ul>
		</div>
		<h1 class="page-title"> Columbia Claim
			<!-- <small>blank page layout</small> -->
		</h1>
		<form id="columbia_form_id" action="<?php echo base_url('Insurance_manage/columbia/' . $this->uri->segment(3)); ?>" method="post" class="horizontal-form">
			<div class="row">
				<div class="col-md-6">
					<div class="col-md-5">
						<label class="control-label" for="state_injury_or_illness_occurred">Day return to work :</label>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<input type="text" size="16" placeholder="Select Date" class="form-control" name="columbia[return_work_date]" value="<?php echo (set_value('columbia[return_work_date]') != "") ? set_value('columbia[return_work_date]') : database_to_datepicker($data['return_work_date']); ?>" readonly>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-5">
						<label class="control-label" for="state_injury_or_illness_occurred">Day missed :</label>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<input type="text" class="form-control" value="<?php echo $day_missed; ?>" name="columbia[return_work_date]" style="width: 225px;" readonly>
							<!-- <input type="text" class="form-control"  value="<?php echo (set_value('columbia[work_stop_date]') != "") ? set_value('columbia[work_stop_date]') . '-' . set_value('columbia[return_work_date]') : database_to_datepicker($data['work_stop_date']) . ' - ' . database_to_datepicker($data['return_work_date']); ?>" name="columbia[return_work_date]" style="width: 225px;" readonly> -->
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
						<input type="text" placeholder="Claim Number" size="16" class="form-control" name="columbia[claim_number]" value="<?php echo (set_value('columbia[claim_number]') != "") ? set_value('columbia[claim_number]') : @$data['claim_number']; ?>" name="columbia[claim_number]">
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-5">
						<label class="control-label" for="state_injury_or_illness_occurred">Insurance Company :</label>
					</div>
					<div class="col-md-5">
						<input type="text" placeholder="Insurance Company" size="16" class="form-control" name="columbia[insurance_company]" value="<?php echo (set_value('columbia[insurance_company]') != "") ? set_value('columbia[insurance_company]') : @$data['insurance_company']; ?>" name="columbia[insurance_company]">
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
							<input type="text" placeholder="Select Date" size="16" class="form-control" value="<?php echo (!isset($data['addition_date'])) ? set_value('columbia[addition_date]', database_to_datepicker($data['created_at'])) : database_to_datepicker($data['addition_date']); ?>" readonly>

						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-5">
						<label class="control-label" for="state_injury_or_illness_occurred">WC Contact Information:</label>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<input type="text" placeholder="WC Information" size="16" class="form-control" value="<?php echo (set_value('columbia[wc_contact_info]') != "") ? set_value('columbia[wc_contact_info]') : @$data['wc_contact_info']; ?>" name="columbia[wc_contact_info]">
							<!-- <input type="text" placeholder="WC Information" size="16" class="form-control" name="columbia[preparer_name]" value="<?php echo (set_value('columbia[preparer_name]') != "") ? set_value('columbia[preparer_name]') : @$data['preparer_name']; ?>" name="columbia[preparer_name]"> -->
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
							<select class="form-control" name="columbia[status]" style="width:auto;padding:auto;">
								<option value="0" <?php echo set_select('columbia[status]', '0', ($data['status'] == "0") ? TRUE : ''); ?>selected> Processing </option>
								<option value="1" <?php echo set_select('columbia[status]', '1', ($data['status'] == "1") ? TRUE : ''); ?>> Pending </option>
								<option value="2" <?php echo set_select('columbia[status]', '2', ($data['status'] == "2") ? TRUE : ''); ?>> Submitted </option>
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
				<div class="tab-pane active" id="columbia">
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i> Columbia Insurance Claim
							</div>
						</div>
						<div class="portlet-body form">
							<div class="row">
								<div class="col-md-1">
								</div>
								<div class="col-md-10">
									<h2 class="text-center"><b>WORKERS COMPENSATION – FIRST REPORT OF INJURY OR ILLNESS</b></h2>
									<h4 class="text-center"><b><i>State of Columbia - Workers' Compensation Board</i></b></h4>

								</div>
								<div class="col-md-1">
								</div>
							</div>
					 <div class="form-body">

                    <div class="row">
                        <div class="col-md-12">
                            <label class="col-md-3 control-label"><b><?php echo $i = $i + 1; ?>.</b> Employee Name:<span class="required" aria-required="true">*</span>
                            </label>
                            <div class="col-md-9">
                               <input type="text" value="<?php echo (set_value('columbia[full_name]') != "") ? set_value('columbia[full_name]') : $data['full_name']; ?>" class="form-control AlphabetsOnly" name="columbia[full_name]" placeholder="Last &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; First &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Middle" autocomplete="off">
                                <?php if (isset($errors['columbia[full_name]'])) : ?>
                                    <label class="text-danger"><?= $errors['columbia[full_name]']; ?></label>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Address:<span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-9">
                                <textarea class="form-control" name="columbia[address]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="Address"><?php echo (set_value('columbia[address]') != "") ? set_value('columbia[address]') : $data['address']; ?></textarea>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="col-md-3 control-label"><b><?php echo $i = $i + 1; ?>.</b> Insurer Name:<span class="required" aria-required="true">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" value="<?php echo (set_value('columbia[insurer_name]') != "") ? set_value('columbia[insurer_name]') : $data['insurer_name']; ?>" class="form-control AlphabetsOnly" name="columbia[insurer_name]" placeholder="Insurer Name" autocomplete="off">
                                <?php if (isset($errors['columbia[insurer_name]'])) : ?>
                                    <label class="text-danger"><?= $errors['columbia[insurer_name]']; ?></label>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                   <!--  <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Address</label>
                            </div>
                            <div class="col-md-9">
                                <textarea class="form-control" name="columbia[insurer_address]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="House number, City, State, and ZIP"><?php echo set_value('columbia[insurer_address]'); ?></textarea>
                            </div>
                        </div>
                    </div>
                    <hr> -->

                    <div class="row">
                      <div class="col-md-6">
                        <div class="col-md-5">
                            <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Date and time of Injury :<span class="required" aria-required="true">*</span></label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group date form_meridian_datetime">
                                <input type="text" size="16" class="form-control" name="columbia[time_of_injury]" placeholder="Select Date" value="<?php echo (set_value('columbia[time_of_injury]') != "") ? set_value('columbia[time_of_injury]') : database_to_datetimepicker(@$data['time_of_injury']); ?>"  id="columbia_time_of_injury" readonly>
                                <span class="input-group-btn">
                                    <button class="btn default date-reset" type="button">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <button class="btn default date-set" type="button">
                                        <i class="fa fa-calendar"></i>
                                    </button>
                                </span>
                            </div>
                            <?php if(isset($errors['columbia[time_of_injury]'])): ?>
                                <label class="text-danger"><?=$errors['columbia[time_of_injury]']; ?></label>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-5">
                            <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Number of days worked each week</label>
                        </div>
                        <div class="col-md-7">
                            <input placeholder="Number of days worked each Week" name="columbia[no_of_day_worked]" class="form-control" type="text" value="<?php echo (set_value('columbia[no_of_day_worked]') != "") ? set_value('columbia[no_of_day_worked]') : $data['no_of_day_worked']; ?>" id="columbia_days_week"/>
                            <p id="possitive-error" style="color: red;display: none;">Please Enter number</p>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row">
                   <div class="col-md-6">
                    <div class="col-md-5">
                        <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Normal starting time :<span class="required" aria-required="true">*</span></label>
                    </div>
                    <div class="col-md-7">
                        <!-- <div class="input-group date form_meridian_datetime"> -->
                            <div class="input-group">
                                <input type="text" size="16" class="form-control timepicker" name="columbia[starting_time]" placeholder="Select Date"  value="<?php echo (set_value('columbia[starting_time]') != "") ? set_value('columbia[starting_time]') : database_to_timepicker($data['starting_time']); ?>" readonly id="columbia_starting_time">
                                <span class="input-group-btn">
                                    <button class="btn default" type="button" id="injury_clock">
                                        <i class="fa fa-clock-o"></i>
                                    </button>
                                </span>
                            </div>
                            <?php if (isset($errors['columbia[starting_time]'])) : ?>
                                <label class="text-danger"><?= $errors['columbia[starting_time]']; ?></label>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="col-md-5">
                            <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b>  If employee back to work, give date and time :<span class="required" aria-required="true">*</span></label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group date form_meridian_datetime">
                            	  <input type="text" size="16" class="form-control" name="columbia[return_work_date]" placeholder="Select Date" value="<?php echo (set_value('columbia[return_work_date]') != "") ? set_value('columbia[return_work_date]') : database_to_datepicker(@$data['return_work_date']); ?>"  id="columbia_time_of_injury" readonly>
                                <span class="input-group-btn">
                                    <button class="btn default date-reset" type="button">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <button class="btn default date-set" type="button">
                                        <i class="fa fa-calendar"></i>
                                    </button>
                                </span>
                            </div>
                            <?php if(isset($errors['columbia[return_to_work_date]'])): ?>
                                <label class="text-danger"><?=$errors['columbia[return_to_work_date]']; ?></label>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-5">
                            <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> At what wage? <span class="required" aria-required="true">*</span></label>
                        </div>
                        <div class="col-md-7">
                            <input style="width: 100%!important;" name="columbia[wage]" placeholder="At What Wage ?" class="form-control form-control-inline input-medium" size="16" type="text" value="<?php echo (set_value('columbia[wage]') != "") ? set_value('columbia[wage]') : $data['wage']; ?>" />
                            <?php if (isset($errors['columbia[wage]'])) : ?>
                                <label class="text-danger"><?= $errors['columbia[wage]']; ?></label>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="col-md-5">
                            <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> If fatal, give date of death:</label>
                        </div>
                        <div class="col-md-7">
                            <div class="input-group date date-picker">
                                <input type="text" size="16" placeholder="Select Date" class="form-control" name="columbia[death_date]" id="date-time" value="<?php echo (set_value('columbia[death_date]') != "") ? set_value('columbia[death_date]') : $data['death_date']; ?>">
                                <span class="input-group-btn">
                                    <button class="btn default date-reset date-time" type="button">
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
                        <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Date Disability Began</label>
                    </div>
                    <div class="col-md-7">
                        <div class="input-group date date-picker">
                            <input type="text" size="16" class="form-control" name="columbia[date_disability]" placeholder="Select Date" value="<?php echo (set_value('columbia[date_disability]') != "") ? set_value('columbia[date_disability]') : $data['date_disability']; ?>"  id="maryaland_date_disability" readonly>
                            <span class="input-group-btn">
                                <button class="btn default date-reset maryaland_date_disability" type="button">
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
                        <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Was the injured paid in full for this day? <span class="required" aria-required="true">*</span></label>
                    </div>
                    <div class="col-md-7">
                        <input style="width: 100%!important;" name="columbia[injured_paid_full_day]" placeholder="Was the injured paid in full for this day?" class="form-control form-control-inline input-medium" size="16" type="text" value="<?php echo (set_value('columbia[injured_paid_full_day]') != "") ? set_value('columbia[injured_paid_full_day]') : $data['injured_paid_full_day']; ?>" />
                        <?php if (isset($errors['columbia[injured_paid_full_day]'])) : ?>
                            <label class="text-danger"><?= $errors['columbia[injured_paid_full_day]']; ?></label>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-5">
                        <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Was the injured given Form No. 7 DCWC? <span class="required" aria-required="true">*</span></label>
                    </div>
                    <div class="col-md-7">
                        <input style="width: 100%!important;" name="columbia[was_injured]" placeholder="Was the injured given ?" class="form-control form-control-inline input-medium" size="16" type="text" value="<?php echo (set_value('columbia[was_injured]') != "") ? set_value('columbia[was_injured]') : $data['was_injured']; ?>" />
                        <?php if (isset($errors['columbia[was_injured]'])) : ?>
                            <label class="text-danger"><?= $errors['columbia[was_injured]']; ?></label>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="col-md-5">
                        <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b>Foreman <span class="required" aria-required="true">*</span></label>
                    </div>
                    <div class="col-md-7">
                        <input style="width: 100%!important;" name="columbia[foreman]" placeholder="Foreman" class="form-control form-control-inline input-medium" size="16" type="text" value="<?php echo (set_value('columbia[foreman]') != "") ? set_value('columbia[foreman]') : $data['foreman']; ?>"/>
                        <?php if (isset($errors['columbia[foreman]'])) : ?>
                            <label class="text-danger"><?= $errors['columbia[foreman]']; ?></label>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-5">
                        <label class="control-label"><b><?php echo $i = $i + 1; ?>.</b> When did you or the foreman first learn of the injury?</label>
                    </div>
                    <div class="col-md-7">
                        <textarea class="form-control" name="columbia[foremean_first_injury]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="When did you or the foreman first learn of the injury?"><?php echo (set_value('columbia[foremean_first_injury]') != "") ? set_value('columbia[foremean_first_injury]') : $data['foremean_first_injury']; ?></textarea>
                        <?php if (isset($errors['columbia[foremean_first_injury]'])) : ?>
                            <label class="text-danger"><?= $errors['columbia[foremean_first_injury]']; ?></label>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-md-4">
                    <div class="col-md-4">
                        <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Gender<span class="required" aria-required="true">*</span></label>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group form-md-radios">
                            <div class="md-radio-inline">
                               	<div class="md-radio">
									<input type="radio" id="columbia_gender_1" name="columbia[gender]" value="1" <?php echo set_checkbox('columbia[gender]', '1', ($data['gender'] == "1") ? TRUE : '') ?> class="md-radiobtn">
									<label for="columbia_gender_1">
										<span></span>
										<span class="check"></span>
										<span class="box"></span>Male </label>
								</div>
								<div class="md-radio">
									<input type="radio" id="columbia_gender_2" name="columbia[gender]" value="0" <?php echo set_checkbox('columbia[gender]', '0', ($data['gender'] == "0") ? TRUE : '') ?> class="md-radiobtn">
									<label for="columbia_gender_2">
										<span></span>
										<span class="check"></span>
										<span class="box"></span> Female </label>
								</div>
                                        <?php if (isset($errors['columbia[gender]'])) : ?>
                                            <label class="text-danger"><?= $errors['columbia[gender]']; ?></label>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="col-md-3">
                                <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> DOB:</label>
                            </div>
                            <div class="col-md-7">
                                <div class="input-group date date-picker">
                                    <input type="text" size="16" placeholder="Select Date" class="form-control" name="columbia[dob]" value="<?php echo (set_value('columbia[dob]') != "") ? set_value('columbia[dob]') : $data['dob']; ?>" id="dob">
                                    <span class="input-group-btn">
                                        <button class="btn default date-reset dob" type="button">
                                            <i class="fa fa-times"></i>
                                        </button>
                                        <button class="btn default date-set" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                                    <?php if (isset($errors['columbia[dob]'])) : ?>
                                    <label class="text-danger"><?= $errors['columbia[dob]']; ?></label>
                                <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Employee’s Telephone No:</label>
                                </div>
                                <div class="col-md-8">
                                    <input  name="columbia[emp_phone]" placeholder="Employee’s Telephone No" class="form-control phone-number form-control-inline" size="16" type="text" value="<?php echo (set_value('columbia[emp_phone]') != "") ? set_value('columbia[emp_phone]') : $data['emp_phone']; ?>" />
                                    <!-- <input type="text" size="16" placeholder="Telephone No" class="form-control" name="columbia[mobile]" id="date-time" value="<?php echo set_value('columbia[mobile]'); ?>"> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                     <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Occupation when injured?</label>
                            </div>
                            <div class="col-md-8">
                                <input  name="columbia[occupation_injured]" placeholder="Occupation when injured ?" class="form-control form-control-inline" size="16" type="text" value="<?php echo (set_value('columbia[occupation_injured]') != "") ? set_value('columbia[occupation_injured]') : $data['occupation_injured']; ?>" />
                                <!-- <input type="text" size="16" placeholder="Telephone No" class="form-control" name="columbia[mobile]" id="date-time" value="<?php echo set_value('columbia[mobile]'); ?>"> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Was this his/her regular occupation ?</label>
                            </div>
                            <div class="col-md-8">
                                <input  name="columbia[regular_occupation]" placeholder="Was this his/her regular occupation?" class="form-control form-control-inline" size="16" type="text" value="<?php echo (set_value('columbia[regular_occupation]') != "") ? set_value('columbia[regular_occupation]') : $data['regular_occupation']; ?>" />
                                <!-- <input type="text" size="16" placeholder="Telephone No" class="form-control" name="columbia[mobile]" id="date-time" value="<?php echo set_value('columbia[mobile]'); ?>"> -->
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-5">
                            <label class="control-label"><b><?php echo $i = $i + 1; ?>.</b> (Department or branch regularly employed) </label>
                        </div>
                        <div class="col-md-7">
                            <textarea class="form-control" name="columbia[emp_department]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="Department or branch regularly employed"><?php echo (set_value('columbia[emp_department]') != "") ? set_value('columbia[emp_department]') : $data['emp_department']; ?></textarea>
                            <?php if (isset($errors['columbia[emp_department]'])) : ?>
                                <label class="text-danger"><?= $errors['columbia[emp_department]']; ?></label>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row">
                 <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Was the injured hired in DC?</label>
                        </div>
                        <div class="col-md-8">
                            <input  name="columbia[injured_hired_dc]" placeholder="Was the injured hired in DC?" class="form-control form-control-inline" size="16" type="text" value="<?php echo (set_value('columbia[injured_hired_dc]') != "") ? set_value('columbia[injured_hired_dc]') : $data['injured_hired_dc']; ?>" />
                            <!-- <input type="text" size="16" placeholder="Telephone No" class="form-control" name="columbia[mobile]" id="date-time" value="<?php echo set_value('columbia[mobile]'); ?>"> -->
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> How long employed by you?</label>
                        </div>
                        <div class="col-md-8">
                            <input  name="columbia[how_long_employee]" placeholder="How long employed by you?" class="form-control form-control-inline" size="16" type="text" value="<?php echo (set_value('columbia[how_long_employee]') != "") ? set_value('columbia[how_long_employee]') : $data['how_long_employee']; ?>" />
                            <!-- <input type="text" size="16" placeholder="Telephone No" class="form-control" name="columbia[mobile]" id="date-time" value="<?php echo set_value('columbia[mobile]'); ?>"> -->
                        </div>
                    </div>
                </div>
            </div>
            <hr>


            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Piece or time worker?</label>
                        </div>
                        <div class="col-md-8">
                            <input  name="columbia[piece_time_worker]" placeholder="Piece or time worker?" class="form-control form-control-inline" size="16" type="text" value="<?php echo (set_value('columbia[piece_time_worker]') != "") ? set_value('columbia[piece_time_worker]') : $data['piece_time_worker']; ?>" />
                            <!-- <input type="text" size="16" placeholder="Telephone No" class="form-control" name="columbia[mobile]" id="date-time" value="<?php echo set_value('columbia[mobile]'); ?>"> -->
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b>  Hourly wage?</label>
                        </div>
                        <div class="col-md-8">
                            <input  name="columbia[hourly_wage]" placeholder="Hourly wage ?" class="form-control form-control-inline" size="16" type="text" value="<?php echo (set_value('columbia[hourly_wage]') != "") ? set_value('columbia[hourly_wage]') : $data['hourly_wage']; ?>" />
                            <!-- <input type="text" size="16" placeholder="Telephone No" class="form-control" name="columbia[mobile]" id="date-time" value="<?php echo set_value('columbia[mobile]'); ?>"> -->
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Hours worked/day:</label>
                        </div>
                        <div class="col-md-8">
                            <input  name="columbia[hour_work_day]" placeholder="Hours worked/day ?" class="form-control form-control-inline" size="16" type="text" value="<?php echo (set_value('columbia[hour_work_day]') != "") ? set_value('columbia[hour_work_day]') : $data['hour_work_day']; ?>" />
                            <!-- <input type="text" size="16" placeholder="Telephone No" class="form-control" name="columbia[mobile]" id="date-time" value="<?php echo set_value('columbia[mobile]'); ?>"> -->
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Daily wages:</label>
                        </div>
                        <div class="col-md-8">
                            <input  name="columbia[daily_wages]" placeholder="Daily wages ?" class="form-control form-control-inline" size="16" type="text" value="<?php echo (set_value('columbia[daily_wages]') != "") ? set_value('columbia[daily_wages]') : $data['daily_wages']; ?>" />
                            <!-- <input type="text" size="16" placeholder="Telephone No" class="form-control" name="columbia[mobile]" id="date-time" value="<?php echo set_value('columbia[mobile]'); ?>"> -->
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b>  Days worked per week:</label>
                        </div>
                        <div class="col-md-8">
                            <input  name="columbia[day_worked_week]" placeholder="Days worked per week" class="form-control form-control-inline" size="16" type="text" value="<?php echo (set_value('columbia[day_worked_week]') != "") ? set_value('columbia[day_worked_week]') : $data['day_worked_week']; ?>" />
                            <!-- <input type="text" size="16" placeholder="Telephone No" class="form-control" name="columbia[mobile]" id="date-time" value="<?php echo set_value('columbia[mobile]'); ?>"> -->
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Average weekly earnings :</label>
                        </div>
                        <div class="col-md-8">
                            <input  name="columbia[avrge_weekly_earnings]" placeholder="Average weekly earnings" class="form-control form-control-inline" size="16" type="text" value="<?php echo (set_value('columbia[avrge_weekly_earnings]') != "") ? set_value('columbia[avrge_weekly_earnings]') : $data['avrge_weekly_earnings']; ?>" />
                            <!-- <input type="text" size="16" placeholder="Telephone No" class="form-control" name="columbia[mobile]" id="date-time" value="<?php echo set_value('columbia[mobile]'); ?>"> -->
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> If board and lodging were furnished or gratuities reported in addition to wages, give estimated value per day, week or month:</label>
                        </div>
                        <div class="col-md-8">
                            <textarea class="form-control" aria-describedby="memo-error" name="columbia[estimated_value_per_day]" placeholder="If board and lodging were furnished or gratuities reported in addition to wages, give estimated value per day, week or month"><?php echo (set_value('columbia[estimated_value_per_day]') != "") ? set_value('columbia[estimated_value_per_day]') : $data['estimated_value_per_day']; ?></textarea>

                            <!-- <input type="text" size="16" placeholder="Telephone No" class="form-control" name="columbia[mobile]" id="date-time" value="<?php echo set_value('columbia[mobile]'); ?>"> -->
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Employer’s principal business function in DC:</label>
                        </div>
                        <div class="col-md-8">

                            <textarea class="form-control" aria-describedby="memo-error" name="columbia[employee_business_function]" placeholder="Employer’s principal business function in DC ?"><?php echo (set_value('columbia[employee_business_function]') != "") ? set_value('columbia[employee_business_function]') : $data['employee_business_function']; ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div class="row">
                   <!-- <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Employer’s Telephone No.</label>
                        </div>
                        <div class="col-md-8">
                            <input  name="columbia[emp_phone]" placeholder="hired when injured ?" class="form-control form-control-inline" size="16" type="text" value="<?php echo set_value('columbia[emp_phone]'); ?>" />
                        </div>
                    </div>
                </div> -->

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b>  Insurance Policy No.</label>
                        </div>
                        <div class="col-md-8">
                            <input  name="columbia[insurance_policy_no]" placeholder="Insurance Policy No. ?" class="form-control form-control-inline" size="16" type="text" value="<?php echo (set_value('columbia[insurance_policy_no]') != "") ? set_value('columbia[insurance_policy_no]') : $data['insurance_policy_no']; ?>" />
                            <!-- <input type="text" size="16" placeholder="Telephone No" class="form-control" name="columbia[mobile]" id="date-time" value="<?php echo set_value('columbia[mobile]'); ?>"> -->
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Location of plant or place where accident occurred:</label>
                        </div>
                        <div class="col-md-8">
                            <textarea class="form-control" aria-describedby="memo-error" name="columbia[accident_location]"  placeholder="Location of plant or place where accident occurred ?"><?php echo (set_value('columbia[accident_location]') != "") ? set_value('columbia[accident_location]') : $data['accident_location']; ?></textarea>
                            <!-- <input type="text" size="16" placeholder="Telephone No" class="form-control" name="columbia[mobile]" id="date-time" value="<?php echo set_value('columbia[mobile]'); ?>"> -->
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> On employer’s premises?:</label>
                        </div>
                        <div class="col-md-8">
                            <textarea class="form-control" aria-describedby="memo-error" name="columbia[emp_permisses]" placeholder="On employer’s premises ?"><?php echo (set_value('columbia[emp_permisses]') != "") ? set_value('columbia[emp_permisses]') : $data['emp_permisses']; ?></textarea>
                            <!-- <input type="text" size="16" placeholder="Telephone No" class="form-control" name="columbia[mobile]" id="date-time" value="<?php echo set_value('columbia[mobile]'); ?>"> -->
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Describe fully the events which resulted in injury or disease, what the employee was doing when injured and type of injury including parts of the
                            body affected::</label>
                        </div>
                        <div class="col-md-8">
                            <textarea class="form-control" rows='3' aria-describedby="memo-error" name="columbia[employee_body_affected]" placeholder="Describe fully the events which resulted in injury or disease, what the employee was doing when injured and type of injury including parts of the body affected"><?php echo (set_value('columbia[employee_body_affected]') != "") ? set_value('columbia[employee_body_affected]') : $data['employee_body_affected']; ?></textarea>

                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3">
                        <label class="control-label"><b><?php echo $i = $i + 1; ?>.</b> Name of Witnesses</label>
                    </div>
                    <div class="col-md-9">
                        <input placeholder="WITNESSES (NAME & PHONE #)" name="columbia[witnesses]" class="form-control" type="text" value="<?php echo (set_value('columbia[witnesses]') != "") ? set_value('columbia[witnesses]') : $data['witnesses']; ?>" /><br>
                        <!-- <input placeholder="WITNESSES (NAME & PHONE #)" name="columbia[witnesses_1]" class="form-control" type="text" value="<?php echo set_value('columbia[witnesses_1]'); ?>" /><br> -->
                        <!-- <input placeholder="WITNESSES (NAME & PHONE #)" name="columbia[witnesses_2]" class="form-control" type="text" value="<?php echo set_value('columbia[witnesses_2]'); ?>" /> -->
                        <div class="form-control-focus"> </div>
                    </div>
                </div>
            </div>
            <hr>


            <div class="row">
                <div class="col-md-12">
                 <div class="col-md-3">
                    <label class="control-label"><b><?php echo $i = $i + 1; ?>.</b> Nature and location of injury (Describe fully): </label>
                </div>
                <div class="col-md-9">
                   <textarea class="form-control" name="columbia[department_branch]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="Nature and location of injury (Describe fully): "><?php echo (set_value('columbia[department_branch]') != "") ? set_value('columbia[department_branch]') : $data['department_branch']; ?></textarea>
                   <?php if (isset($errors['columbia[department_branch]'])) : ?>
                    <label class="text-danger"><?= $errors['columbia[department_branch]']; ?></label>
                <?php endif; ?>
                <div class="form-control-focus"> </div>
            </div>
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-12">
            <div class="col-md-3">
                <label class="control-label"><b><?php echo $i = $i + 1; ?>.</b> Attending Physician and Address (If Hospital Involved – Indicate): </label>
            </div>
            <div class="col-md-9">
               <textarea class="form-control" name="columbia[address_of_phisician]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder=" Attending Physician and Address (If Hospital Involved – Indicate):"><?php echo (set_value('columbia[address_of_phisician]') != "") ? set_value('columbia[address_of_phisician]') : $data['address_of_phisician']; ?></textarea>
               <?php if (isset($errors['columbia[address_of_phisician]'])) : ?>
                <label class="text-danger"><?= $errors['columbia[address_of_phisician]']; ?></label>
            <?php endif; ?>
            <div class="form-control-focus"> </div>
        </div>
    </div>
</div>
</div>
								<div class="form-actions right">
									<a href="<?php echo base_url('Insurance_manage/generate_columbia_pdf/' . $this->uri->segment(3)); ?>" style="text-decoration: none">
										<!-- <button type="button" class="btn default txt-btn" id="generate_newjersey_pdf" data-id="<?= $data['id'] ?>" data-state="2"><i class="fa fa-file-pdf-o"></i>Generate Pdf</button> -->
										<!-- <button type="button" class="btn default txt-btn"><i class="fa fa-file-pdf-o"></i>Generate Pdf</button> -->
									</a>
									<a href="<?php echo base_url('Insurance_manage'); ?>">
										<button type="button" class="btn default">Cancel</button>
									</a>
									<button type="submit" class="btn blue" id="columbia_submit"></i> Save</button>
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
