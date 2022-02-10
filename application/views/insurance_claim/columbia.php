<?php $i=0;?>
<div class="tab-pane active">
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-gift"></i> Columbia Insurance Claim
            </div>
        </div>
        <div class="portlet-body form">
            <form id="columbia_form_id" action="<?php echo base_url(); ?>Insurance_claim/columbia" class="horizontal-form" method="post">
                <input type="hidden" name="question1" id="CL_q1">
                <input type="hidden" name="question2" id="CL_q2">
                <input type="hidden" name="question3" id="CL_q3">
                <input type="hidden" name="question4" id="CL_q4">
                <input type="hidden" name="emp_state" id="CL_emp_state">
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-10">
                        <h2 class="text-center"><b>EMPLOYEE'S REPORT OF WORK-RELATED INJURY/ILLNESS</b></h2>
                        <h4 class="text-center"><b><i>State of Columbia - Workers' Compensation Board</i></b></h4>
                        <p>
                        </p>
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
                                <input type="text" value="<?php echo set_value('columbia[full_name]'); ?>" class="form-control AlphabetsOnly" name="columbia[full_name]" placeholder="" autocomplete="off">
                                &nbsp;First &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Middle &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Last
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
                                <textarea class="form-control" name="columbia[address]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="Address"><?php echo set_value('columbia[address]'); ?></textarea>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="col-md-3 control-label"><b><?php echo $i = $i + 1; ?>.</b> Insurer Name:<span class="required" aria-required="true">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" value="<?php echo set_value('columbia[insurer_name]'); ?>" class="form-control AlphabetsOnly" name="columbia[insurer_name]" placeholder="Insurer Name" autocomplete="off">
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
                                <input type="text" size="16" class="form-control" name="columbia[time_of_injury]" placeholder="Select Date" value="<?php echo set_value('columbia[time_of_injury]'); ?>"  id="maryaland_time_of_injury" readonly>
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
                            <input placeholder="Number of days worked each Week" name="columbia[no_of_day_worked]" class="form-control" type="text" value="<?php echo set_value('columbia[no_of_day_worked]'); ?>" id="columbia_days_week"/>
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
                                <input type="text" size="16" class="form-control timepicker" name="columbia[starting_time]" placeholder="Select Date" value="<?php echo set_value('columbia[starting_time]'); ?>" readonly id="columbia_starting_time">
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
                            <div class="input-group date date-picker">
                                <input type="text" size="16" class="form-control" name="columbia[return_to_work_date]" placeholder="Select Date" value="<?php echo set_value('columbia[return_to_work_date]'); ?>"  id="maryaland_return_to_work_date" readonly>
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
                            <input style="width: 100%!important;" name="columbia[wage]" placeholder="At What Wage ?" class="form-control form-control-inline input-medium" size="16" type="text" value="<?php echo set_value('columbia[wage]'); ?>" />
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
                                <input type="text" size="16" placeholder="Select Date" class="form-control" name="columbia[death_date]" id="date-time" value="<?php echo set_value('columbia[death_date]'); ?>">
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
                        <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Date Disability Began</label>
                    </div>
                    <div class="col-md-7">
                        <div class="input-group date date-picker">
                            <input type="text" size="16" class="form-control" name="columbia[date_disability]" placeholder="Select Date" value="<?php echo set_value('columbia[date_disability]'); ?>"  id="maryaland_date_disability" readonly>
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

                <div class="col-md-6">
                    <div class="col-md-5">
                        <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Was the injured paid in full for this day? <span class="required" aria-required="true">*</span></label>
                    </div>
                    <div class="col-md-7">
                        <input style="width: 100%!important;" name="columbia[injured_paid_full_day]" placeholder="Was the injured paid in full for this day?" class="form-control form-control-inline input-medium" size="16" type="text" value="<?php echo set_value('columbia[injured_paid_full_day]'); ?>" />
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
                        <input style="width: 100%!important;" name="columbia[was_injured]" placeholder="Was the injured given ?" class="form-control form-control-inline input-medium" size="16" type="text" value="<?php echo set_value('columbia[was_injured]'); ?>" />
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
                        <input style="width: 100%!important;" name="columbia[foreman]" placeholder="Foreman" class="form-control form-control-inline input-medium" size="16" type="text" value="<?php echo set_value('columbia[foreman]'); ?>" />
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
                        <textarea class="form-control" name="columbia[foremean_first_injury]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="When did you or the foreman first learn of the injury?"><?php echo set_value('columbia[foremean_first_injury]'); ?></textarea>
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
                                    <input type="radio" id="columbia_gender_1" name="columbia[gender]" value="1" <?php echo set_checkbox('columbia[gender]', '1') ?> class="md-radiobtn">
                                    <label for="columbia_gender_1">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span>Male </label>
                                    </div>
                                    <div class="md-radio">
                                        <input type="radio" id="columbia_gender_2" name="columbia[gender]" value="0" <?php echo set_checkbox('columbia[gender]', '0') ?> class="md-radiobtn">
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
                                    <input type="text" size="16" placeholder="Select Date" class="form-control" name="columbia[dob]" id="date-time" value="<?php echo set_value('columbia[dob]'); ?>">
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
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Employee’s Telephone No:</label>
                                </div>
                                <div class="col-md-8">
                                    <input  name="columbia[emp_phone]" placeholder="Employee’s Telephone No" class="form-control phone-number form-control-inline" size="16" type="text" value="<?php echo set_value('columbia[emp_phone]'); ?>" />
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
                                <input  name="columbia[occupation_injured]" placeholder="Occupation when injured ?" class="form-control form-control-inline" size="16" type="text" value="<?php echo set_value('columbia[occupation_injured]'); ?>" />
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
                                <input  name="columbia[regular_occupation]" placeholder="Was this his/her regular occupation?" class="form-control form-control-inline" size="16" type="text" value="<?php echo set_value('columbia[regular_occupation]'); ?>" />
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
                            <textarea class="form-control" name="columbia[emp_department]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="Department or branch regularly employed"><?php echo set_value('columbia[emp_department]'); ?></textarea>
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
                            <input  name="columbia[injured_hired_dc]" placeholder="Was the injured hired in DC?" class="form-control form-control-inline" size="16" type="text" value="<?php echo set_value('columbia[injured_hired_dc]'); ?>" />
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
                            <input  name="columbia[how_long_employee]" placeholder="How long employed by you?" class="form-control form-control-inline" size="16" type="text" value="<?php echo set_value('columbia[how_long_employee]'); ?>" />
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
                            <input  name="columbia[piece_time_worker]" placeholder="Piece or time worker?" class="form-control form-control-inline" size="16" type="text" value="<?php echo set_value('columbia[piece_time_worker]'); ?>" />
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
                            <input  name="columbia[hourly_wage]" placeholder="Hourly wage ?" class="form-control form-control-inline" size="16" type="text" value="<?php echo set_value('columbia[hourly_wage]'); ?>" />
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
                            <input  name="columbia[hour_work_day]" placeholder="Hours worked/day ?" class="form-control form-control-inline" size="16" type="text" value="<?php echo set_value('columbia[hour_work_day]'); ?>" />
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
                            <input  name="columbia[daily_wages]" placeholder="Daily wages ?" class="form-control form-control-inline" size="16" type="text" value="<?php echo set_value('columbia[daily_wages]'); ?>" />
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
                            <input  name="columbia[day_worked_week]" placeholder="Days worked per week" class="form-control form-control-inline" size="16" type="text" value="<?php echo set_value('columbia[day_worked_week]'); ?>" />
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
                            <input  name="columbia[avrge_weekly_earnings]" placeholder="Average weekly earnings" class="form-control form-control-inline" size="16" type="text" value="<?php echo set_value('columbia[avrge_weekly_earnings]'); ?>" />
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
                            <textarea class="form-control" aria-describedby="memo-error" name="columbia[estimated_value_per_day]" placeholder="If board and lodging were furnished or gratuities reported in addition to wages, give estimated value per day, week or month"><?php echo set_value('columbia[estimated_value_per_day]'); ?></textarea>

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

                            <textarea class="form-control" aria-describedby="memo-error" name="columbia[employee_business_function]" placeholder="Employer’s principal business function in DC ?"><?php echo set_value('columbia[employee_business_function]'); ?></textarea>
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
                            <input  name="columbia[insurance_policy_no]" placeholder="Insurance Policy No. ?" class="form-control form-control-inline" size="16" type="text" value="<?php echo set_value('columbia[insurance_policy_no]'); ?>" />
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
                            <textarea class="form-control" aria-describedby="memo-error" name="columbia[accident_location]"  placeholder="Location of plant or place where accident occurred ?"><?php echo set_value('columbia[accident_location]'); ?></textarea>
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
                            <textarea class="form-control" aria-describedby="memo-error" name="columbia[emp_permisses]" placeholder="On employer’s premises ?"><?php echo set_value('columbia[emp_permisses]'); ?></textarea>
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
                            <textarea class="form-control" rows='3' aria-describedby="memo-error" name="columbia[employee_body_affected]" placeholder="Describe fully the events which resulted in injury or disease, what the employee was doing when injured and type of injury including parts of the body affected"><?php echo set_value('columbia[employee_body_affected]'); ?></textarea>

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
                        <input placeholder="WITNESSES (NAME & PHONE #)" name="columbia[witnesses]" class="form-control" type="text" value="<?php echo set_value('columbia[witnesses]'); ?>" /><br>
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
                   <textarea class="form-control" name="columbia[department_branch]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="Nature and location of injury (Describe fully): "><?php echo set_value('columbia[department_branch]'); ?></textarea>
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
               <textarea class="form-control" name="columbia[address_of_phisician]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder=" Attending Physician and Address (If Hospital Involved – Indicate):"><?php echo set_value('columbia[address_of_phisician]'); ?></textarea>
               <?php if (isset($errors['columbia[address_of_phisician]'])) : ?>
                <label class="text-danger"><?= $errors['columbia[address_of_phisician]']; ?></label>
            <?php endif; ?>
            <div class="form-control-focus"> </div>
        </div>
    </div>
</div>
</div>
<div class="form-actions right">
    <!-- <button type="button" class="btn default">Cancel</button> -->
    <!-- <a  href="https://test.tendertouch.com/upload/WC-Instructions-Guidelines.pdf" target="_blank" class="btn blue"><i class="fa fa-print"></i> Print</a> -->
    <button type="submit" class="btn blue" name="save_print" formtarget="_blank" id="CL_print_and_save"><i class="fa fa-check"></i> Save & print</button>
    <button type="submit" class="btn blue" id="columbia_submit" name="onlysave"><i class="fa fa-check"></i> Save</button>
</div>
</form>
</div>
</div>