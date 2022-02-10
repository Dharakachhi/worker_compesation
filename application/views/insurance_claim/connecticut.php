<?php $i=0;?>
<div class="tab-pane active">
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-gift"></i> Connecticut Insurance Claim
            </div>
        </div>
        <div class="portlet-body form">
            <form id="connecticut_form_id" action="<?php echo base_url(); ?>Insurance_claim/connecticut" class="horizontal-form" method="post">
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-10">
                        <h2 class="text-center"><b>EMPLOYEE'S REPORT OF WORK-RELATED INJURY/ILLNESS</b></h2>
                        <h4 class="text-center"><b><i>State of Connecticut - Workers' Compensation Board</i></b></h4>
                        <p>
                        </p>
                    </div>
                    <div class="col-md-1">
                    </div>
                </div>
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-6">
                                <div class="col-md-4">
                                    <label class="control-label"><b><?php echo $i=$i+1;?>.</b> Employee Last Name :<span class="required" aria-required="true">*</span></label>
                                </div>
                                <div class="col-md-8">
                                    <input value="<?php echo set_value('connecticut[last_name]'); ?>" name="connecticut[last_name]" type="text" class="form-control AlphabetsOnly" placeholder="Employee Last Name" autocomplete="off">
                                    <?php if (isset($errors['connecticut[last_name]'])): ?>
                                        <label class="text-danger"><?=$errors['connecticut[last_name]'];?></label>
                                    <?php endif;?>
                                </div>
                        </div>
                        <div class="col-md-6">
                            <label class="col-md-4 control-label"><b><?php echo $i=$i+1;?>.</b>Employee First Name :<span class="required" aria-required="true">*</span></label>
                            <div class="col-md-8">
                                <input value="<?php echo set_value('connecticut[first_name]'); ?>" name="connecticut[first_name]" type="text" class="form-control AlphabetsOnly" placeholder="Employee First Name" autocomplete="off">
                                <?php if (isset($errors['connecticut[first_name]'])): ?>
                                    <label class="text-danger"><?=$errors['connecticut[first_name]'];?></label>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-4">
                                <label class="control-label"><b><?php echo $i=$i+1;?>.</b> Employee Middle Name :<span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-8">
                                <input value="<?php echo set_value('connecticut[middle_name]'); ?>" name="connecticut[middle_name]" type="text" class="form-control AlphabetsOnly" placeholder="Employee Middle Name" autocomplete="off">
                                 <?php if (isset($errors['connecticut[middle_name]'])): ?>
                                    <label class="text-danger"><?=$errors['connecticut[middle_name]'];?></label>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-4">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Gender<span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group form-md-radios">
                                    <div class="md-radio-inline">
                                        <div class="md-radio">
                                            <input type="radio" id="connecticut_gender_1" name="connecticut[gender]" value="1" class="md-radiobtn" <?php echo set_checkbox('connecticut[gender]','1'); ?>>
                                            <label for="connecticut_gender_1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>Male </label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio" id="connecticut_gender_2" name="connecticut[gender]" value="0" class="md-radiobtn" <?php echo set_checkbox('connecticut[gender]','0'); ?>>
                                            <label for="connecticut_gender_2">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Female </label>
                                        </div>
                                         <?php if (isset($errors['connecticut[gender]'])): ?>
                                    <label class="text-danger"><?=$errors['connecticut[gender]'];?></label>
                                <?php endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-4">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Address (INC Zip)</label>
                            </div>
                            <div class="col-md-8">
                                <textarea class="form-control" name="connecticut[address]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="House number, City, State, and ZIP"><?php echo set_value('connecticut[address]'); ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-4">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Discipline: <span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <select class="form-control select2" name="connecticut[discipline]" data-placeholder="Choose a Discipline" tabindex="1" id="connecticut_discipline">
                                        <option value="">Select Discipline</option>
                                        <option value="PT" <?php echo set_select('connecticut[discipline]','PT'); ?>>PT</option>
                                        <option value="PTA" <?php echo set_select('connecticut[discipline]','PTA'); ?>>PTA</option>
                                        <option value="OT" <?php echo set_select('connecticut[discipline]','OT'); ?>>OT</option>
                                        <option value="COTA" <?php echo set_select('connecticut[discipline]','COTA'); ?>>COTA</option>
                                        <option value="SLP" <?php echo set_select('connecticut[discipline]','SLP'); ?>>SLP</option>
                                        <option value="Rehab Aide" <?php echo set_select('connecticut[discipline]','Rehab Aide'); ?>>Rehab Aide</option>
                                        <option value="Regional Manager" <?php echo set_select('connecticut[discipline]','Regional Manager'); ?>>Regional Manager</option>
                                        <option value="Corporate Staff" <?php echo set_select('connecticut[discipline]','Corporate Staff'); ?>>Corporate Staff</option>
                                    </select>
                                </div>
                                 <?php if (isset($errors['connecticut[discipline]'])): ?>
                                    <label class="text-danger"><?=$errors['connecticut[discipline]'];?></label>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <label class="control-label"><b><?php echo $i=$i+1;?>.</b> Facility Name and Address:<span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-10">
                                <input placeholder="Facility Name and Address" name="connecticut[facility_name]"  class="form-control" type="text" value="<?php echo set_value('connecticut[facility_name]'); ?>" />
                                 <?php if (isset($errors['connecticut[facility_name]'])): ?>
                                    <label class="text-danger"><?=$errors['connecticut[facility_name]'];?></label>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Date Hired:</label>
                            </div>
                            <div class="col-md-7">
                                <div class="input-group date date-picker">
                                    <input type="text" size="16" class="form-control" name="connecticut[date_hire]" placeholder="Select Date" value="<?php echo set_value('connecticut[date_hire]'); ?>" readonly>
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
                                <label class="control-label"><b><?php echo $i=$i+1;?>.</b> State Of Hire<span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="hidden" name="question1" id="CT_q1">
                                    <input type="hidden" name="question2" id="CT_q2">
                                    <input type="hidden" name="question3" id="CT_q3">
                                    <input type="hidden" name="question4" id="CT_q4">
                                    <input type="hidden" name="CT_emp_state" id="CT_emp_state">
                                    <select class="form-control select2" name="connecticut[state_injury]" data-placeholder="Choose a State of Hire" tabindex="1" id="connecticut_state_hire">
                                        <option value="">Select State Injury</option>
                                       <option value="AL" <?php echo set_select('connecticut[state_injury]','AL'); ?>>Alabama</option>
                                        <option value="AK" <?php echo set_select('connecticut[state_injury]','AK'); ?>>Alaska</option>
                                        <option value="AZ" <?php echo set_select('connecticut[state_injury]','AZ'); ?>>Arizona</option>
                                        <option value="AR" <?php echo set_select('connecticut[state_injury]','AR'); ?>>Arkansas</option>
                                        <option value="CA" <?php echo set_select('connecticut[state_injury]','CA'); ?>>California</option>
                                        <option value="CO" <?php echo set_select('connecticut[state_injury]','CO'); ?>>Colorado</option>
                                        <option value="CT" <?php echo set_select('connecticut[state_injury]','CT'); ?>>Connecticut</option>
                                        <option value="DE" <?php echo set_select('connecticut[state_injury]','DE'); ?>>Delaware</option>
                                        <option value="FL" <?php echo set_select('connecticut[state_injury]','FL'); ?>>Florida</option>
                                        <option value="GA" <?php echo set_select('connecticut[state_injury]','GA'); ?>>Georgia</option>
                                        <option value="HI" <?php echo set_select('connecticut[state_injury]','HI'); ?>>Hawaii</option>
                                        <option value="ID" <?php echo set_select('connecticut[state_injury]','ID'); ?>>Idaho</option>
                                        <option value="IL" <?php echo set_select('connecticut[state_injury]','IL'); ?>>Illinois</option>
                                        <option value="IN" <?php echo set_select('connecticut[state_injury]','IN'); ?>>Indiana</option>
                                        <option value="IA" <?php echo set_select('connecticut[state_injury]',''); ?>>Iowa</option>
                                        <option value="KS" <?php echo set_select('connecticut[state_injury]','KS'); ?>>Kansas</option>
                                        <option value="KY" <?php echo set_select('connecticut[state_injury]','KY'); ?>>Kentucky</option>
                                        <option value="LA" <?php echo set_select('connecticut[state_injury]','LA'); ?>>Louisiana</option>
                                        <option value="ME" <?php echo set_select('connecticut[state_injury]','ME'); ?>>Maine</option>
                                        <option value="MD" <?php echo set_select('connecticut[state_injury]','MD'); ?>>Maryland</option>
                                        <option value="MA" <?php echo set_select('connecticut[state_injury]','MA'); ?>>Massachusetts</option>
                                        <option value="MI" <?php echo set_select('connecticut[state_injury]','MI'); ?>>Michigan</option>
                                        <option value="MN" <?php echo set_select('connecticut[state_injury]','MN'); ?>>Minnesota</option>
                                        <option value="MS" <?php echo set_select('connecticut[state_injury]','MS'); ?>>Mississippi</option>
                                        <option value="MO" <?php echo set_select('connecticut[state_injury]','MO'); ?>>Missouri</option>
                                        <option value="MT" <?php echo set_select('connecticut[state_injury]','MT'); ?>>Montana</option>
                                        <option value="NE" <?php echo set_select('connecticut[state_injury]','NE'); ?>>Nebraska</option>
                                        <option value="NV" <?php echo set_select('connecticut[state_injury]','NV'); ?>>Nevada</option>
                                        <option value="NH" <?php echo set_select('connecticut[state_injury]','NH'); ?>>New Hampshire</option>
                                        <option value="NJ" <?php echo set_select('connecticut[state_injury]','NJ'); ?>>New Jersey</option>
                                        <option value="NM" <?php echo set_select('connecticut[state_injury]','NM'); ?>>New Mexico</option>
                                        <option value="NY" <?php echo set_select('connecticut[state_injury]','NY'); ?>>New York</option>
                                        <option value="NC" <?php echo set_select('connecticut[state_injury]','NC'); ?>>North Carolina</option>
                                        <option value="ND" <?php echo set_select('connecticut[state_injury]','ND'); ?>>North Dakota</option>
                                        <option value="OH" <?php echo set_select('connecticut[state_injury]','OH'); ?>>Ohio</option>
                                        <option value="OK" <?php echo set_select('connecticut[state_injury]','OK'); ?>>Oklahoma</option>
                                        <option value="OR" <?php echo set_select('connecticut[state_injury]','OR'); ?>>Oregon</option>
                                        <option value="PA" <?php echo set_select('connecticut[state_injury]','PA'); ?>>Pennsylvania</option>
                                        <option value="RI" <?php echo set_select('connecticut[state_injury]','RI'); ?>>Rhode Island</option>
                                        <option value="SC" <?php echo set_select('connecticut[state_injury]','SC'); ?>>South Carolina</option>
                                        <option value="SD" <?php echo set_select('connecticut[state_injury]','SD'); ?>>South Dakota</option>
                                        <option value="TN" <?php echo set_select('connecticut[state_injury]','TN'); ?>>Tennessee</option>
                                        <option value="TX" <?php echo set_select('connecticut[state_injury]','TX'); ?>>Texas</option>
                                        <option value="UT" <?php echo set_select('connecticut[state_injury]','UT'); ?>>Utah</option>
                                        <option value="VT" <?php echo set_select('connecticut[state_injury]','VT'); ?>>Vermont</option>
                                        <option value="VA" <?php echo set_select('connecticut[state_injury]','VA'); ?>>Virginia</option>
                                        <option value="WA" <?php echo set_select('connecticut[state_injury]','WA'); ?>>Washington</option>
                                        <option value="WD" <?php echo set_select('connecticut[state_injury]','WD'); ?>>Washington DC</option>
                                        <option value="WV" <?php echo set_select('connecticut[state_injury]','WV'); ?>>West Virginia</option>
                                        <option value="WI" <?php echo set_select('connecticut[state_injury]','WI'); ?>>Wisconsin</option>
                                        <option value="WY" <?php echo set_select('connecticut[state_injury]','WY'); ?>>Wyoming</option>
                                    </select>
                                </div>
                                 <?php if (isset($errors['connecticut[state_injury]'])): ?>
                                    <label class="text-danger"><?=$errors['connecticut[state_injury]'];?></label>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Occupation / Job Title <span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">
                                 <select class="form-control select2" name="connecticut[job_title]" data-placeholder="Choose a Occupation" tabindex="1" id="connecticut_job_title">
                                        <option value="">Select Discipline</option>
                                        <option value="PT" <?php echo set_select('connecticut[job_title]','PT'); ?>>PT</option>
                                        <option value="PTA" <?php echo set_select('connecticut[job_title]','PTA'); ?>>PTA</option>
                                        <option value="OT" <?php echo set_select('connecticut[job_title]','OT'); ?>>OT</option>
                                        <option value="COTA" <?php echo set_select('connecticut[job_title]','COTA'); ?>>COTA</option>
                                        <option value="SLP" <?php echo set_select('connecticut[job_title]','SLP'); ?>>SLP</option>
                                        <option value="Rehab Aide" <?php echo set_select('connecticut[job_title]','Rehab Aide'); ?>>Rehab Aide</option>
                                        <option value="Regional Manager" <?php echo set_select('connecticut[job_title]','Regional Manager'); ?>>Regional Manager</option>
                                        <option value="Corporate Staff" <?php echo set_select('connecticut[job_title]','Corporate Staff'); ?>>Corporate Staff</option>
                                    </select>
                                <!-- <input style="width: 100%!important;" name="connecticut[job_title]" placeholder="What was the employee's job title?" class="form-control form-control-inline input-medium" size="16" type="text" value="<?php echo set_value('connecticut[job_title]'); ?>" /> -->
                             <?php if (isset($errors['connecticut[job_title]'])): ?>
                                    <label class="text-danger"><?=$errors['connecticut[job_title]'];?></label>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Date of Injury :<span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">
                                <div class="input-group date date-picker">
                                    <input type="text" size="16" placeholder="Select Date" name="connecticut[date_of_injury]" class="form-control" value="<?php echo set_value('connecticut[date_of_injury]'); ?>" id="date_of_injury_connecticut" readonly>
                                    <span class="input-group-btn">
                                        <button class="btn default date-reset" type="button">
                                            <i class="fa fa-times"></i>
                                        </button>
                                        <button class="btn default date-set" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                                </div>
                                 <?php if (isset($errors['connecticut[date_of_injury]'])): ?>
                                    <label class="text-danger"><?=$errors['connecticut[date_of_injury]'];?></label>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Town of Injury / Illness :<span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">
                                <input placeholder="Town of Injury / Illness" name="connecticut[town_of_injury]" class="form-control" type="text" value="<?php echo set_value('connecticut[town_of_injury]'); ?>" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Time Employee Began Work :<span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">
                                <div class="input-group date form_meridian_datetime">
                                    <input type="text" size="16" placeholder="Select Date" id="connecticut_time_of_injury" class="form-control" name="connecticut[began_work]" value="<?php echo set_value('connecticut[began_work]'); ?>" readonly>
                                    <span class="input-group-btn">
                                        <button class="btn default date-reset" type="button">
                                            <i class="fa fa-times"></i>
                                        </button>
                                        <button class="btn default date-set" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                                </div>
                                 <?php if (isset($errors['connecticut[began_work]'])): ?>
                                    <label class="text-danger"><?=$errors['connecticut[began_work]'];?></label>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Time of Occurrence <span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">
                                <div class="input-group meridian_1 date form_meridian_datetime">
                                    <input type="text" size="16" class="form-control" name="connecticut[time_of_injury]" placeholder="Select Date Time" value="<?php echo set_value('connecticut[time_of_injury]') ?>" id="time_of_occurance_connecticut" readonly>
                                    <span class="input-group-btn">
                                        <button class="btn default date-reset" type="button">
                                            <i class="fa fa-times"></i>
                                        </button>
                                        <button class="btn default date-set" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                                </div>
                                 <?php if (isset($errors['connecticut[time_of_injury]'])): ?>
                                    <label class="text-danger"><?=$errors['connecticut[time_of_injury]'];?></label>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Date Employer Notified <span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">
                                <div class="input-group date date-picker-today">
                                    <input type="text" size="16" placeholder="Select Date" class="form-control" name="connecticut[date_notified]" value="<?php echo set_value('connecticut[date_notified]'); ?>" id="date_notified_connecticut" readonly>
                                    <span class="input-group-btn">
                                        <button class="btn default date-reset" type="button">
                                            <i class="fa fa-times"></i>
                                        </button>
                                        <button class="btn default date-set" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                                </div>
                                 <?php if (isset($errors['connecticut[date_notified]'])): ?>
                                    <label class="text-danger"><?=$errors['connecticut[date_notified]'];?></label>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Date Disability Began <span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">
                                <div class="input-group date date-picker">
                                    <input type="text" size="16" placeholder="Select Date" class="form-control" name="connecticut[date_disability_began]" value="<?php echo set_value('connecticut[date_disability_began]'); ?>" id="disability_began_conne" readonly>
                                    <span class="input-group-btn">
                                        <button class="btn default date-reset" type="button">
                                            <i class="fa fa-times"></i>
                                        </button>
                                        <button class="btn default date-set" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                                </div>
                                 <?php if (isset($errors['connecticut[date_disability_began]'])): ?>
                                    <label class="text-danger"><?=$errors['connecticut[date_disability_began]'];?></label>
                                <?php endif;?>
                            </div>
                        </div>
                        <div  class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Last Work Date<span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">
                            <div class="input-group date date-picker">
                                    <input type="text" size="16" placeholder="Select Date" name="connecticut[work_stop_date]" class="form-control" value="<?php echo set_value('connecticut[work_stop_date]'); ?>" id="last_work_date_conne" readonly>
                                    <span class="input-group-btn">
                                        <button class="btn default date-reset" type="button">
                                            <i class="fa fa-times"></i>
                                        </button>
                                        <button class="btn default date-set" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                                </div>
                                 <?php if (isset($errors['connecticut[work_stop_date]'])): ?>
                                    <label class="text-danger"><?=$errors['connecticut[work_stop_date]'];?></label>
                                <?php endif;?>
                                <p class="min_date_error error" style="display:none">This date should be less than from Return Work Date</p>
                                <p class="same_date_conne error" style="display:none">You cannot select same date</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> DATE RETURN(ED) TO WORK</label>
                            </div>
                            <div class="col-md-7">
                                <div class="input-group date date-picker">
                                    <input type="text" size="16" placeholder="Select Date" class="form-control" name="connecticut[return_work_date]" value="<?php echo set_value('connecticut[return_work_date]'); ?>" readonly id="return_work_date_connecticut">
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
                                <p class="same_date_conne error" style="display:none">You cannot select same date</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> If fatal, Date of death</label>
                            </div>
                            <div class="col-md-7">
                                <div class="input-group date date-picker">
                                    <input type="text" size="16" placeholder="Select Date" class="form-control" name="connecticut[if_fatal_give_date]" value="<?php echo set_value('connecticut[if_fatal_give_date]'); ?>" readonly>
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
                        <div class="col-md-12">
                            <div class="col-md-5">
                                <label class="control-label"><b><?php echo $i=$i+1;?>.</b> ALL EQUIPMENT, MATERIALS, OR CHEMICALS EMPLOYEE WAS USING &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED </label>
                            </div>
                            <div class="col-md-7">
                                <textarea class="form-control" name="connecticut[equipment_meterials]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="ALL EQUIPMENT, MATERIALS, OR CHEMICALS EMPLOYEE WAS USING WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED"><?php echo set_value('connecticut[equipment_meterials]'); ?></textarea>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-5">
                                <label class="control-label"><b><?php echo $i=$i+1;?>.</b> SPECIFIC ACTIVITY THE EMPLOYEE WAS ENGAGED IN WHEN THE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ACCIDENT OR ILLNESS EXPOSURE OCCURRED <span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">
                                <textarea class="form-control" name="connecticut[activity_engaed]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="SPECIFIC ACTIVITY THE EMPLOYEE WAS ENGAGED IN WHEN THE ACCIDENT OR ILLNESS EXPOSURE OCCURRED"><?php echo set_value('connecticut[activity_engaed]'); ?></textarea>
                                <?php if (isset($errors['connecticut[activity_engaed]'])): ?>
                                    <label class="text-danger"><?=$errors['connecticut[activity_engaed]'];?></label>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="col-md-8">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Did Injury / Illness / Exposure occur on employer’s premises?<span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-md-radios">
                                        <div class="md-radio-inline">
                                            <div class="md-radio">
                                                <input type="radio" id="connecticut_did_injury_employer_permises_option_1" name="connecticut[did_injury_employer_permises]" value="1"  class="md-radiobtn" <?php echo set_checkbox('connecticut[did_injury_employer_permises]') ?>>
                                                <label for="connecticut_did_injury_employer_permises_option_1">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span>Yes </label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="connecticut_did_injury_employer_permises_option_2" name="connecticut[did_injury_employer_permises]"  class="md-radiobtn" <?php echo set_checkbox('connecticut[did_injury_employer_permises]'); ?> checked value="0">
                                                <label for="connecticut_did_injury_employer_permises_option_2">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span>No </label>
                                            </div>
                                        </div>
                                         <?php if (isset($errors['connecticut[did_injury_employer_permises]'])): ?>
                                            <label class="text-danger"><?=$errors['connecticut[did_injury_employer_permises]'];?></label>
                                        <?php endif;?>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Type of Injury / Illness<span class="required" aria-required="true">*</span> </label>
                            </div>
                            <div class="col-md-7">
                                <select class="form-control select2" name="connecticut[type_of_injury]" data-placeholder="Choose a Type of Injury" tabindex="1" id="option_time_of_injurY_conne">
                                        <option value="">Select Injury</option>
                                        <option value="Abrasion/Laceration" <?php echo set_select('connecticut[type_of_injury]','Abrasion/Laceration'); ?>>Abrasion/Laceration</option>

                                        <option value="Concussion" <?php echo set_select('connecticut[type_of_injury]','Concussion'); ?>>Concussion</option>

                                        <option value="Dislocation" <?php echo set_select('connecticut[type_of_injury]','Dislocation'); ?>>Dislocation</option>

                                        <option value="Illness/Infection" <?php echo set_select('connecticut[type_of_injury]','Illness/Infection'); ?>>Illness/Infection</option>

                                        <option value="Sprain/Strain" <?php echo set_select('connecticut[type_of_injury]','Sprain/Strain'); ?>>Sprain/Strain</option>

                                        <option value="Burn" <?php echo set_select('connecticut[type_of_injury]','Burn'); ?>>Burn</option>

                                        <option value="Contusion" <?php echo set_select('connecticut[type_of_injury]','Contusion'); ?>>Contusion</option>

                                        <option value="Fracture" <?php echo set_select('connecticut[type_of_injury]','Fracture'); ?>>Fracture</option>

                                        <option value="Puncture" <?php echo set_select('connecticut[type_of_injury]','Puncture'); ?>>Puncture</option>

                                        <option value="No Apparent Injury" <?php echo set_select('connecticut[type_of_injury]','No Apparent Injury'); ?>>No Apparent Injury</option>

                                        <option value="Other" <?php echo set_select('connecticut[type_of_injury]','Other'); ?>>Other</option>
                                    </select>
                                <!-- <input placeholder="Type of Injury / Illness " name="connecticut[type_of_injury]" class="form-control" type="text" value="<?php echo set_value('connecticut[type_of_injury]'); ?>" /> -->
                             <?php if (isset($errors['connecticut[type_of_injury]'])): ?>
                                    <label class="text-danger"><?=$errors['connecticut[type_of_injury]'];?></label>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Part of Body Affected <span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">

                                <textarea class="form-control" name="connecticut[part_body_affected]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="Part of body Affected"><?php echo (set_value('connecticut[part_body_affected]')); ?></textarea>
                                 <?php if (isset($errors['connecticut[part_body_affected]'])): ?>
                                    <label class="text-danger"><?=$errors['connecticut[part_body_affected]'];?></label>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-6">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> If provided, were they used?</label>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-md-radios">
                                    <div class="md-radio-inline">
                                        <div class="md-radio">
                                            <input type="radio" id="connecticut_if_provided_option_1" name="connecticut[if_provided]" value="1" class="md-radiobtn" <?php echo set_checkbox('connecticut[if_provided]','1'); ?>>
                                            <label for="connecticut_if_provided_option_1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>Yes </label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio" id="connecticut_if_provided_option_2" name="connecticut[if_provided]" value="0" class="md-radiobtn" <?php echo set_checkbox('connecticut[if_provided]','0'); ?>>
                                            <label for="connecticut_if_provided_option_2">
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
                        <div class="col-md-7">
                            <div class="col-md-7">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Were safeguards or safety equipment provided?</label>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group form-md-radios">
                                    <div class="md-radio-inline">
                                        <div class="md-radio">
                                            <input type="radio" id="connecticut_were_safeguards_option_1" name="connecticut[were_safeguards]" value="1" class="md-radiobtn" <?php echo set_checkbox('connecticut[were_safeguards]','1'); ?>>
                                            <label for="connecticut_were_safeguards_option_1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>Yes </label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio" id="connecticut_were_safeguards_option_2" name="connecticut[were_safeguards]" value="0" class="md-radiobtn" <?php echo set_checkbox('connecticut[were_safeguards]','0'); ?>>
                                            <label for="connecticut_were_safeguards_option_2">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>No </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="col-md-4">
                                <label class="control-label"><b><?php echo $i=$i+1;?>.</b>Rate of Pay :</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <select class="form-control select2" name="connecticut[rate_of_pay]" data-placeholder="Choose a Rate of Pay" tabindex="1">
                                        <option value="">Select Rate of Pay </option>
                                        <option value="Hour" <?php echo set_select('connecticut[rate_of_pay]','Hour'); ?>>Hour</option>
                                        <option value="Day" <?php echo set_select('connecticut[rate_of_pay]','Day'); ?>>Day</option>
                                        <option value="Week" <?php echo set_select('connecticut[rate_of_pay]','Week'); ?>>Week</option>
                                        <option value="Bi-Weekly" <?php echo set_select('connecticut[rate_of_pay]','Bi-Weekly'); ?>>Bi-Weekly</option>
                                        <option value="Other" <?php echo set_select('connecticut[rate_of_pay]','Other'); ?>>Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-5">
                                <label class="control-label"><b><?php echo $i=$i+1;?>.</b> How injury / illness occurred – describe the sequences of events, including any object or substances that directly injured the employee or made the employee il <span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">
                                <textarea class="form-control" name="connecticut[how_injury_health_condition]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="How injury / illness occurred – describe the sequences of events, including any object or substances that directly injured the employee or made the employee il"><?php echo set_value('connecticut[how_injury_health_condition]'); ?></textarea>
                                  <?php if (isset($errors['connecticut[how_injury_health_condition]'])): ?>
                                    <label class="text-danger"><?=$errors['connecticut[how_injury_health_condition]'];?></label>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-5">
                                <label class="control-label"><b><?php echo $i=$i+1;?>.</b> Physician / Health care provider (name address & ZIP)</label>
                            </div>
                            <div class="col-md-7">
                                <textarea class="form-control" name="connecticut[physician_health_care_provider]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="PHYSICIAN/HEALTH CARE PROVIDER (NAME & ADDRESS)"><?php echo set_value('connecticut[physician_health_care_provider]'); ?></textarea>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-5">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b>Hospital (Name, address & zip)</label>
                            </div>
                            <div class="col-md-7">
                                <textarea class="form-control" name="connecticut[hospital_address]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="House number, City, State, and ZIP"><?php echo set_value('connecticut[hospital_address]'); ?></textarea>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <label class="control-label"><b> <?php echo $i=$i+1;?>.</b> Initial treatment <span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-10" >
                                <div class="md-checkbox-inline">
                                    <div class="col-md-4">
                                        <div class="md-checkbox">
                                            <input type="checkbox" id="hospital_or_off_site_treatment_checkboxs_1" name="connecticut[hospital_or_off_site_treatment_checkboxs][]" value="0" class="md-check" <?php echo set_checkbox('connecticut[hospital_or_off_site_treatment_checkboxs][]','0'); ?>>
                                            <label for="hospital_or_off_site_treatment_checkboxs_1">
                                                <span class="inc"></span>
                                                <span class="check"></span>
                                                <span class="box"></span> No Medical treatment </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="md-checkbox">
                                            <input type="checkbox" id="hospital_or_off_site_treatment_checkboxs_2" name="connecticut[hospital_or_off_site_treatment_checkboxs][]" value="1" class="md-check" <?php echo set_checkbox('connecticut[hospital_or_off_site_treatment_checkboxs][]','1'); ?>>
                                            <label for="hospital_or_off_site_treatment_checkboxs_2">
                                                <span class="inc"></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Minor – by employer </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="md-checkbox">
                                            <input type="checkbox" id="hospital_or_off_site_treatment_checkboxs_3" name="connecticut[hospital_or_off_site_treatment_checkboxs][]" value="2" class="md-check" <?php echo set_checkbox('connecticut[hospital_or_off_site_treatment_checkboxs][]','2'); ?>>
                                            <label for="hospital_or_off_site_treatment_checkboxs_3">
                                                <span class="inc"></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Minor – by clinic / hospital </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4" >
                                        <div class="md-checkbox">
                                            <input type="checkbox" id="hospital_or_off_site_treatment_checkboxs_4" name="connecticut[hospital_or_off_site_treatment_checkboxs][]" value="3" class="md-check" <?php echo set_checkbox('connecticut[hospital_or_off_site_treatment_checkboxs][]','3'); ?>>
                                            <label for="hospital_or_off_site_treatment_checkboxs_4">
                                                <span class="inc"></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Emergency care </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="md-checkbox">
                                            <input type="checkbox" id="hospital_or_off_site_treatment_checkboxs_5" name="connecticut[hospital_or_off_site_treatment_checkboxs][]" value="4" class="md-check" <?php echo set_checkbox('connecticut[hospital_or_off_site_treatment_checkboxs][]','4'); ?>>
                                            <label for="hospital_or_off_site_treatment_checkboxs_5">
                                                <span class="inc"></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Hospitalized more than 24 hours </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4" id="checkbox-msg">
                                        <div class="md-checkbox">
                                            <input type="checkbox" id="hospital_or_off_site_treatment_checkboxs_6" name="connecticut[hospital_or_off_site_treatment_checkboxs][]" value="5" class="md-check" <?php echo set_checkbox('connecticut[hospital_or_off_site_treatment_checkboxs][]','5'); ?>>
                                            <label for="hospital_or_off_site_treatment_checkboxs_6">
                                                <span class="inc"></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Future major medical – Lost time anticipated  </label>
                                        </div>
                                    </div>
                                </div>
                                     <?php if (isset($errors['connecticut[hospital_or_off_site_treatment_checkboxs][]'])): ?>
                                        <label class="text-danger"><?=$errors['connecticut[hospital_or_off_site_treatment_checkboxs][]'];?></label>
                                    <?php endif;?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-6">
                                <label class="control-label"><b><?php echo $i=$i+1;?>.</b> Contact Name</label>
                            </div>
                            <div class="col-md-6">
                                <input placeholder="Joyce Ginsberg Benefit Manager" name="connecticut[contact_name]" class="form-control" type="text" value="<?php echo set_value('connecticut[contact_name]','Joyce Ginsberg'); ?>" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-6">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> PHONE NUMBER </label>
                            </div>
                            <div class="col-md-6">
                                <input placeholder="732-987-3817" name="connecticut[phone_number]" class="form-control" type="text" value="<?php echo set_value('connecticut[phone_number]','732-987-3817'); ?>" id="phone_number_conne1" />
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-6">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> DATE ADMINISTRATOR NOTIFIED :</label>
                            </div>
                             <div class="col-md-6">
                                <div class="input-group date date-picker-today">
                                    <input type="text" size="16" class="form-control valid" name="connecticut[date_administrator_notified]" placeholder="Select Date" value="<?php echo set_value('connecticut[date_administrator_notified]'); ?>" readonly="" aria-invalid="false">
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
                            <div class="col-md-6">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> DATE PREPARED </label>
                            </div>
                            <div class="col-md-6">
                            <div class="input-group date date-picker-today">
                                    <input type="text" size="16" placeholder="Select Date" class="form-control" name="connecticut[date_prepared]" value="<?php echo set_value('connecticut[date_prepared]'); ?>" readonly>
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
                            <div class="col-md-6">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b>Preparer’s Name & Title</label>
                            </div>
                            <div class="col-md-6">
                                <input placeholder="Joyce Ginsberg, HR Benefits Manager" name="connecticut[preparer_name]" class="form-control" type="text" value="<?php echo set_value('connecticut[preparer_name]','Joyce Ginsberg, HR Benefits Manager'); ?>" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-6">
                                <label class="control-label"><b><?php echo $i=$i+1;?>.</b> Preferred Employee Email address</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control email_emp" placeholder="Preferred Employee Email address"
                                    name="connecticut[employee_email]"
                                    value="<?php echo set_value('connecticut[employee_email]'); ?>">
                                    <p class="email-error" style="color: red; display: none;">Invalid Email</p>
                            </div>
                        </div>
                    </div>
                    <!-- <hr>   -->

                </div>
                <div class="form-actions right">
                    <!-- <button type="button" class="btn default">Cancel</button> -->
                    <!-- <a  href="https://test.tendertouch.com/upload/WC-Instructions-Guidelines.pdf" target="_blank" class="btn blue"><i class="fa fa-print"></i> Print</a> -->
                     <button type="submit" class="btn blue" name="save_print" formtarget="_blank" id="CT_print_and_save"><i class="fa fa-check"></i> Save & print</button>
                    <button type="submit" class="btn blue" id="connecticut_submit" name="onlysave"><i class="fa fa-check"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</div>