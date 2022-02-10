<style type="text/css">
    /*.bootstrap-timepicker-widget.dropdown-menu.timepicker-orient-left.timepicker-orient-top.open{
        top: 1396px !important;
        left: 368.703px !important;
    }*/
</style>
<div class="tab-pane active" id="maryland">
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-gift"></i> Maryland Insurance Claim
            </div>
        </div>
        <div class="portlet-body form">
            <form id="maryland_form_id" action="<?php echo base_url(); ?>Insurance_claim/maryland" method="post" class="horizontal-form">
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-10">
                        <h2 class="text-center"><b>WORKERS COMPENSATION – FIRST REPORT OF INJURY OR ILLNESS</b></h2>
                        <h4 class="text-center"><b><i>State of Maryland-Workers’ Compensation Board</i></b></h4>
                    </div>
                    <div class="col-md-1">
                    </div>
                </div>
                <div class="form-body">
                    <h3 class="form-section" style="color: #4d86c4"><b>Employee/Wage</b></h3>
                    <div class="row">
                        <div class="col-md-8">
                            <label class="col-md-3 control-label">1. Employee Name:<span class="required" aria-required="true">*</span>
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control AlphabetsOnly" name="maryland[full_name]" value="<?php echo set_value('maryland[full_name]'); ?>"  placeholder="" autocomplete="off">
                                 &nbsp;First &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Middle &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Last
                             <?php if(isset($errors['maryland[full_name]'])): ?>
                                    <label class="text-danger"><?=$errors['maryland[full_name]']; ?></label>
                             <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-4">
                                <label class=" control-label">2. Discipline: <span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="hidden" name="question1" id="ML_q1">
                                    <input type="hidden" name="question2" id="ML_q2">
                                    <input type="hidden" name="question3" id="ML_q3">
                                    <input type="hidden" name="question4" id="ML_q4">
                                    <input type="hidden" name="ML_emp_state" id="ML_emp_state">
                                    <select class="form-control select2" name="maryland[discipline]" data-placeholder="Choose a Discipline" tabindex="1" id="maryaland_discipline">
                                        <option value="">Select Discipline</option>
                                        <option value="PT" <?php echo set_select('maryland[discipline]','PT'); ?>>PT</option>
                                        <option value="PTA" <?php echo set_select('maryland[discipline]','PTA'); ?>>PTA</option>
                                        <option value="OT" <?php echo set_select('maryland[discipline]','OT'); ?>>OT</option>
                                        <option value="COTA" <?php echo set_select('maryland[discipline]','COTA'); ?>>COTA</option>
                                        <option value="SLP" <?php echo set_select('maryland[discipline]','SLP'); ?>>SLP</option>
                                        <option value="Rehab Aide" <?php echo set_select('maryland[discipline]','Rehab Aide'); ?>>Rehab Aide</option>
                                        <option value="Regional Manager" <?php echo set_select('maryland[discipline]','Regional Manager'); ?>>Regional Manager</option>
                                        <option value="Corporate Staff" <?php echo set_select('maryland[discipline]','Corporate Staff'); ?>>Corporate Staff</option>
                                    </select>
                                    <?php if(isset($errors['maryland[discipline]'])): ?>
                                        <label class="text-danger"><?=$errors['maryland[discipline]']; ?></label>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <label class="control-label">3. Facility Name :<span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-10">
                                <input placeholder="Facility Name" name="maryland[facility_name]"  class="form-control" type="text" value="<?php echo set_value('maryland[facility_name]'); ?>" />
                                <?php if(isset($errors['maryland[facility_name]'])): ?>
                                    <label class="text-danger"><?=$errors['maryland[facility_name]']; ?></label>
                             <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="col-md-3">
                                <label class=" control-label">4. Date Hired:</label>
                            </div>
                            <div class="col-md-5">
                                <div class="input-group date date-picker">
                                    <input type="text" size="16" class="form-control" name="maryland[date_hire]" placeholder="Select Date" value="<?php echo set_value('maryland[date_hire]'); ?>" readonly>
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
                            <div class="col-md-4">
                                <label class="control-label">5.State Of Hire</label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <select class="form-control select2" name="maryland[state_injury]" data-placeholder="Choose a State of Hire" tabindex="1">
                                        <option value="">Select State Injury</option>
                                        <option value="AL" <?php echo set_select('maryland[state_injury]','AL'); ?>>Alabama</option>
                                        <option value="AK" <?php echo set_select('maryland[state_injury]','AK'); ?>>Alaska</option>
                                        <option value="AZ" <?php echo set_select('maryland[state_injury]','AZ'); ?>>Arizona</option>
                                        <option value="AR" <?php echo set_select('maryland[state_injury]','AR'); ?>>Arkansas</option>
                                        <option value="CA" <?php echo set_select('maryland[state_injury]','CA'); ?>>California</option>
                                        <option value="CO" <?php echo set_select('maryland[state_injury]','CO'); ?>>Colorado</option>
                                        <option value="CT" <?php echo set_select('maryland[state_injury]','CT'); ?>>Connecticut</option>
                                        <option value="DE" <?php echo set_select('maryland[state_injury]','DE'); ?>>Delaware</option>
                                        <option value="FL" <?php echo set_select('maryland[state_injury]','FL'); ?>>Florida</option>
                                        <option value="GA" <?php echo set_select('maryland[state_injury]','GA'); ?>>Georgia</option>
                                        <option value="HI" <?php echo set_select('maryland[state_injury]','HI'); ?>>Hawaii</option>
                                        <option value="ID" <?php echo set_select('maryland[state_injury]','ID'); ?>>Idaho</option>
                                        <option value="IL" <?php echo set_select('maryland[state_injury]','IL'); ?>>Illinois</option>
                                        <option value="IN" <?php echo set_select('maryland[state_injury]','IN'); ?>>Indiana</option>
                                        <option value="IA" <?php echo set_select('maryland[state_injury]',''); ?>>Iowa</option>
                                        <option value="KS" <?php echo set_select('maryland[state_injury]','KS'); ?>>Kansas</option>
                                        <option value="KY" <?php echo set_select('maryland[state_injury]','KY'); ?>>Kentucky</option>
                                        <option value="LA" <?php echo set_select('maryland[state_injury]','LA'); ?>>Louisiana</option>
                                        <option value="ME" <?php echo set_select('maryland[state_injury]','ME'); ?>>Maine</option>
                                        <option value="MD" <?php echo set_select('maryland[state_injury]','MD'); ?>>Maryland</option>
                                        <option value="MA" <?php echo set_select('maryland[state_injury]','MA'); ?>>Massachusetts</option>
                                        <option value="MI" <?php echo set_select('maryland[state_injury]','MI'); ?>>Michigan</option>
                                        <option value="MN" <?php echo set_select('maryland[state_injury]','MN'); ?>>Minnesota</option>
                                        <option value="MS" <?php echo set_select('maryland[state_injury]','MS'); ?>>Mississippi</option>
                                        <option value="MO" <?php echo set_select('maryland[state_injury]','MO'); ?>>Missouri</option>
                                        <option value="MT" <?php echo set_select('maryland[state_injury]','MT'); ?>>Montana</option>
                                        <option value="NE" <?php echo set_select('maryland[state_injury]','NE'); ?>>Nebraska</option>
                                        <option value="NV" <?php echo set_select('maryland[state_injury]','NV'); ?>>Nevada</option>
                                        <option value="NH" <?php echo set_select('maryland[state_injury]','NH'); ?>>New Hampshire</option>
                                        <option value="NJ" <?php echo set_select('maryland[state_injury]','NJ'); ?>>New Jersey</option>
                                        <option value="NM" <?php echo set_select('maryland[state_injury]','NM'); ?>>New Mexico</option>
                                        <option value="NY" <?php echo set_select('maryland[state_injury]','NY'); ?>>New York</option>
                                        <option value="NC" <?php echo set_select('maryland[state_injury]','NC'); ?>>North Carolina</option>
                                        <option value="ND" <?php echo set_select('maryland[state_injury]','ND'); ?>>North Dakota</option>
                                        <option value="OH" <?php echo set_select('maryland[state_injury]','OH'); ?>>Ohio</option>
                                        <option value="OK" <?php echo set_select('maryland[state_injury]','OK'); ?>>Oklahoma</option>
                                        <option value="OR" <?php echo set_select('maryland[state_injury]','OR'); ?>>Oregon</option>
                                        <option value="PA" <?php echo set_select('maryland[state_injury]','PA'); ?>>Pennsylvania</option>
                                        <option value="RI" <?php echo set_select('maryland[state_injury]','RI'); ?>>Rhode Island</option>
                                        <option value="SC" <?php echo set_select('maryland[state_injury]','SC'); ?>>South Carolina</option>
                                        <option value="SD" <?php echo set_select('maryland[state_injury]','SD'); ?>>South Dakota</option>
                                        <option value="TN" <?php echo set_select('maryland[state_injury]','TN'); ?>>Tennessee</option>
                                        <option value="TX" <?php echo set_select('maryland[state_injury]','TX'); ?>>Texas</option>
                                        <option value="UT" <?php echo set_select('maryland[state_injury]','UT'); ?>>Utah</option>
                                        <option value="VT" <?php echo set_select('maryland[state_injury]','VT'); ?>>Vermont</option>
                                        <option value="VA" <?php echo set_select('maryland[state_injury]','VA'); ?>>Virginia</option>
                                        <option value="WA" <?php echo set_select('maryland[state_injury]','WA'); ?>>Washington</option>
                                        <option value="WD" <?php echo set_select('maryland[state_injury]','WD'); ?>>Washington DC</option>
                                        <option value="WV" <?php echo set_select('maryland[state_injury]','WV'); ?>>West Virginia</option>
                                        <option value="WI" <?php echo set_select('maryland[state_injury]','WI'); ?>>Wisconsin</option>
                                        <option value="WY" <?php echo set_select('maryland[state_injury]','WY'); ?>>Wyoming</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="col-md-3">
                                <label class=" control-label">6. Address (INC Zip)</label>
                            </div>
                            <div class="col-md-9">
                                <textarea class="form-control" name="maryland[address]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="House number, City, State, and ZIP"><?php echo set_value('maryland[address]'); ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-4">
                                <label class=" control-label">7. Gender<span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group form-md-radios">
                                    <div class="md-radio-inline" id="radio-msg">
                                        <div class="md-radio">
                                            <input type="radio" id="maryland_gender_1" name="maryland[gender]" value="1" class="md-radiobtn" <?php echo set_checkbox('maryland[gender]','1'); ?>>
                                            <label for="maryland_gender_1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>Male </label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio" id="maryland_gender_2" name="maryland[gender]" value="0" class="md-radiobtn" <?php echo set_checkbox('maryland[gender]','0'); ?>>
                                            <label for="maryland_gender_2">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Female </label>
                                        </div>
                                        <?php if(isset($errors['maryland[gender]'])): ?>
                                            <label class="text-danger"><?=$errors['maryland[gender]']; ?></label>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <label class=" control-label">8. Marital Status</label>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group form-md-radios">
                                    <div class="md-radio-inline">
                                        <div class="md-radio">
                                            <input type="radio" id="maryland_marital_status_option_1" name="maryland[marital_status]" value="0" class="md-radiobtn" <?php echo set_checkbox('maryland[marital_status]','0'); ?>>
                                            <label for="maryland_marital_status_option_1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>UNMARRIED SINGLE / DIVORCED </label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio" id="maryland_marital_status_option_2" name="maryland[marital_status]" value="1" class="md-radiobtn" <?php echo set_checkbox('maryland[marital_status]','1'); ?>>
                                            <label for="maryland_marital_status_option_2">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> MARRIED </label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio" id="maryland_marital_status_option_3" name="maryland[marital_status]" value="2" class="md-radiobtn" <?php echo set_checkbox('maryland[marital_status]','2'); ?>>
                                            <label for="maryland_marital_status_option_3">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> SEPARATED </label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio" id="maryland_marital_status_option_4" name="maryland[marital_status]" value="3" class="md-radiobtn" <?php echo set_checkbox('maryland[marital_status]','3'); ?>>
                                            <label for="maryland_marital_status_option_4">
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
                        <div class="col-md-5">
                            <div class="col-md-5">
                                <label class="control-label">9. Occupation / Job Title <span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">
                                <input placeholder="Occupation / Job Title" name="maryland[job_title]" class="form-control" type="text" value="<?php echo set_value('maryland[job_title]'); ?>" />
                            <?php if(isset($errors['maryland[job_title]'])): ?>
                                    <label class="text-danger"><?=$errors['maryland[job_title]']; ?></label>
                             <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="col-md-5">
                                <label class="control-label">10. Preferred Employee Email address</label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control email" placeholder="Preferred Employee Email address"
                                    name="maryland[employee_email]" style="margin-left: 8px;"
                                    value="<?php echo set_value('maryland[employee_email]'); ?>">
                                    <!-- <p class="email-error" style="color: red; display: none;">Invalid Email</p> -->
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="col-md-5">
                                <label class=" control-label">11. Employment Status :</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group form-md-radios">
                                    <div class="md-radio-inline">
                                        <div class="md-radio">
                                            <input type="radio" id="maryland_job_title_option_1" name="maryland[employment_status]" value="0" class="md-radiobtn" <?php echo set_checkbox('maryland[employment_status]','0') ?>>
                                            <label for="maryland_job_title_option_1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>Part time </label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio" id="maryland_job_title_option_2" name="maryland[employment_status]" value="1" class="md-radiobtn" <?php echo set_checkbox('maryland[employment_status]','1'); ?>>
                                            <label for="maryland_job_title_option_2">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>Full time </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-6">
                                <label class=" control-label">12. Number of days worked each week</label>
                            </div>
                            <div class="col-md-6">
                                <input placeholder="Number of days worked each week" name="maryland[day_worked]" class="form-control" type="text" value="<?php echo set_value('maryland[day_worked]'); ?>" id="maryaland_eachday" />
                                <p id="possitive-error_maraya" style="color: red;display: none;">Please Enter number</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="col-md-5">
                                <label class=" control-label">13. Full Pay for day of Injury</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group form-md-radios">
                                    <div class="md-radio-inline">
                                        <div class="md-radio">
                                            <input type="radio" id="maryland_full_pay_for_day_of_injury_option_1" name="maryland[full_pay]" value="1" class="md-radiobtn" <?php echo set_checkbox('maryland[full_pay]','1'); ?> checked>
                                            <label for="maryland_full_pay_for_day_of_injury_option_1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>Yes </label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio" id="maryland_full_pay_for_day_of_injury_option_2" name="maryland[full_pay]" value="0" class="md-radiobtn" <?php echo set_checkbox('maryland[full_pay]','0'); ?>>
                                            <label for="maryland_full_pay_for_day_of_injury_option_2">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>No </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="col-md-5">
                                <label class=" control-label">14. Did Salary Continue</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group form-md-radios">
                                    <div class="md-radio-inline">
                                        <div class="md-radio">
                                            <input type="radio" id="maryland_did_salary_continue_option_1" name="maryland[did_salary_continue]" value="1" class="md-radiobtn" <?php echo set_checkbox('maryland[did_salary_continue]','1'); ?>>
                                            <label for="maryland_did_salary_continue_option_1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>Yes </label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio" id="maryland_did_salary_continue_option_2" name="maryland[did_salary_continue]" value="0" class="md-radiobtn" <?php echo set_checkbox('maryland[did_salary_continue]','0'); ?>>
                                            <label for="maryland_did_salary_continue_option_2">
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
                    <h3 class="form-section" style="color: #4d86c4"><b>Occurrence/Treatment</b></h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label">1. Time Employee Began Work :<span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">
                                <div class="input-group date form_meridian_datetime">
                                    <input type="text" size="16" class="form-control" name="maryland[began_work]" placeholder="Select Date" value="<?php echo set_value('maryland[began_work]'); ?>"  id="maryaland_began_work" readonly>
                                   <span class="input-group-btn">
                                        <button class="btn default date-reset" type="button">
                                            <i class="fa fa-times"></i>
                                        </button>
                                        <button class="btn default date-set" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                                </div>
                                 <?php if(isset($errors['maryland[began_work]'])): ?>
                                    <label class="text-danger"><?=$errors['maryland[began_work]']; ?></label>
                             <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label">2. Date of Injury / Illness :<span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">
                                <div class="input-group date date-picker">
                                    <input type="text" size="16" placeholder="Select Date" name="maryland[date_of_injury]" class="form-control" value="<?php echo set_value('maryland[date_of_injury]'); ?>" readonly id="date_of_injury_maryaland">
                                    <span class="input-group-btn">
                                        <button class="btn default date-reset" type="button">
                                            <i class="fa fa-times"></i>
                                        </button>
                                        <button class="btn default date-set" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                                </div>
                                    <?php if(isset($errors['maryland[date_of_injury]'])): ?>
                                         <label class="text-danger"><?=$errors['maryland[date_of_injury]']; ?></label>
                                     <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label">3. Time of Occurrence <span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">
                                <div class="input-group meridian_1 date form_meridian_datetime">
                                    <input type="text" placeholder="Select Date Time" size="16" class="form-control" name="maryland[time_of_injury]" value="<?php echo set_value('maryland[time_of_injury]'); ?>" id="time_of_injury_maryaland" readonly>
                                    <span class="input-group-btn">
                                        <button class="btn default date-reset" type="button">
                                            <i class="fa fa-times"></i>
                                        </button>
                                        <button class="btn default date-set" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                                </div>
                                <?php if(isset($errors['maryland[time_of_injury]'])): ?>
                                    <label class="text-danger"><?=$errors['maryland[time_of_injury]']; ?></label>
                             <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label">4. Last Work Date <span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">
                            <div class="input-group date date-picker">
                                    <input type="text" size="16" placeholder="Select Date" name="maryland[work_stop_date]" class="form-control" value="<?php echo set_value('maryland[work_stop_date]'); ?>" id="last_date_maryaland" readonly >
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
                                <p class="same_date_maryaland error" style="display:none">You cannot select same date</p>
                                <?php if(isset($errors['maryland[work_stop_date]'])): ?>
                                    <label class="text-danger"><?=$errors['maryland[work_stop_date]']; ?></label>
                             <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label">5. Date Employer Notified <span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">
                                <div class="input-group date date-picker-today">
                                    <input type="text" size="16" placeholder="Select Date" class="form-control" name="maryland[date_notified]" value="<?php echo set_value('maryland[date_notified]'); ?>" id="date_notified_maryaland" readonly>
                                    <span class="input-group-btn">
                                        <button class="btn default date-reset" type="button">
                                            <i class="fa fa-times"></i>
                                        </button>
                                        <button class="btn default date-set" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                                </div>
                                <?php if(isset($errors['maryland[date_notified]'])): ?>
                                    <label class="text-danger"><?=$errors['maryland[date_notified]']; ?></label>
                             <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label">6. Date Disability Began</label>
                            </div>
                            <div class="col-md-7">
                                <div class="input-group date date-picker">
                                    <input type="text" size="16" placeholder="Select Date" class="form-control" name="maryland[date_disability_began]" value="<?php echo set_value('maryland[date_disability_began]'); ?>" readonly>
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
                                <label class=" control-label">7. Type of Injury / Illness <span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">
                                <select class="form-control select2" name="maryland[type_of_injury]" data-placeholder="Choose a Type of Injury" tabindex="1" id="maryaland_injury">
                                    <option value="">Select Injury</option>
                                    <option value="Abrasion/Laceration" <?php echo set_select('maryland[type_of_injury]','Abrasion/Laceration'); ?>>Abrasion/Laceration</option>

                                    <option value="Concussion" <?php echo set_select('maryland[type_of_injury]','Concussion'); ?>>Concussion</option>

                                    <option value="Dislocation" <?php echo set_select('maryland[type_of_injury]','Dislocation'); ?>>Dislocation</option>

                                    <option value="Illness/Infection" <?php echo set_select('maryland[type_of_injury]','Illness/Infection'); ?>>Illness/Infection</option>

                                    <option value="Sprain/Strain" <?php echo set_select('maryland[type_of_injury]','Sprain/Strain'); ?>>Sprain/Strain</option>

                                    <option value="Burn" <?php echo set_select('maryland[type_of_injury]','Burn'); ?>>Burn</option>

                                    <option value="Contusion" <?php echo set_select('maryland[type_of_injury]','Contusion'); ?>>Contusion</option>

                                    <option value="Fracture" <?php echo set_select('maryland[type_of_injury]','Fracture'); ?>>Fracture</option>

                                    <option value="Puncture" <?php echo set_select('maryland[type_of_injury]','Puncture'); ?>>Puncture</option>

                                    <option value="No Apparent Injury" <?php echo set_select('maryland[type_of_injury]','No Apparent Injury'); ?>>No Apparent Injury</option>

                                    <option value="Other" <?php echo set_select('maryland[type_of_injury]','Other'); ?>>Other</option>
                                    </select>
                                    <?php if(isset($errors['maryland[type_of_injury]'])): ?>
                                    <label class="text-danger"><?=$errors['maryland[type_of_injury]']; ?></label>
                             <?php endif; ?>
                            <!-- <input placeholder="Type of Injury / Illness " name="maryland[type_of_injury]" class="form-control" type="text" value="<?php echo set_value('maryland[type_of_injury]'); ?>" />
                                <div class="form-control-focus"> </div> -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label">8. Part of Body Affected <span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">
                            <input placeholder="Part of Body Affected" name="maryland[part_body_affected]" class="form-control" type="text" value="<?php echo set_value('maryland[part_body_affected]'); ?>" />
                                <div class="form-control-focus"> </div>
                                <?php if(isset($errors['maryland[part_body_affected]'])): ?>
                                    <label class="text-danger"><?=$errors['maryland[part_body_affected]']; ?></label>
                             <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="col-md-8">
                                <label class=" control-label">9. Did Injury / Illness / Exposure occur on employer’s premises?</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-md-radios">
                                    <div class="md-radio-inline">
                                        <div class="md-radio">
                                            <input type="radio" id="maryland_did_injury_employer_permises_option_1" name="maryland[did_injury_employer_permises]" value="1" class="md-radiobtn" <?php echo set_checkbox('maryland[did_injury_employer_permises]','1'); ?>>
                                            <label for="maryland_did_injury_employer_permises_option_1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>Yes </label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio" id="maryland_did_injury_employer_permises_option_2" name="maryland[did_injury_employer_permises]" value="0" class="md-radiobtn" <?php echo set_checkbox('maryland[did_injury_employer_permises]','0'); ?> checked>
                                            <label for="maryland_did_injury_employer_permises_option_2">
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
                                <label class="control-label">10. Department or Location Where Accident or Illness occurred<span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">
                                <textarea class="form-control" name="maryland[location_where_accident]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="Department or Location Where Accident or Illness occurred"><?php echo set_value('maryland[location_where_accident]'); ?></textarea>
                            <?php if(isset($errors['maryland[location_where_accident]'])): ?>
                                    <label class="text-danger"><?=$errors['maryland[location_where_accident]']; ?></label>
                             <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-5">
                                <label class="control-label">11. ALL EQUIPMENT, MATERIALS, OR CHEMICALS EMPLOYEE WAS USING &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED<span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">
                                <textarea class="form-control" name="maryland[equipment_meterials]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder=" ALL EQUIPMENT, MATERIALS, OR CHEMICALS EMPLOYEE WAS USING WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED"><?php echo set_value('maryland[equipment_meterials]'); ?></textarea>
                                <?php if(isset($errors['maryland[equipment_meterials]'])): ?>
                                    <label class="text-danger"><?=$errors['maryland[equipment_meterials]']; ?></label>
                             <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-5">
                                <label class="control-label">12. SPECIFIC ACTIVITY THE EMPLOYEE WAS ENGAGED IN WHEN THE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ACCIDENT OR ILLNESS EXPOSURE OCCURRED <span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">
                                <textarea class="form-control" name="maryland[activity_engaed]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="SPECIFIC ACTIVITY THE EMPLOYEE WAS ENGAGED IN WHEN THE ACCIDENT OR ILLNESS EXPOSURE OCCURRED"><?php echo set_value('maryland[activity_engaed]'); ?></textarea>
                                <?php if(isset($errors['maryland[activity_engaed]'])): ?>
                                    <label class="text-danger"><?=$errors['maryland[activity_engaed]']; ?></label>
                             <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-5">
                                <label class="control-label">13. WORK PROCESS THE EMPLOYEE WAS ENGAGED IN WHEN ACCIDENT OR &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ILLNESS EXPOSURE OCCURRED<span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">
                                <textarea class="form-control" name="maryland[work_process_emp_engade]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="WORK PROCESS THE EMPLOYEE WAS ENGAGED IN WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED"><?php echo set_value('maryland[work_process_emp_engade]'); ?></textarea>
                                <?php if(isset($errors['maryland[work_process_emp_engade]'])): ?>
                                    <label class="text-danger"><?=$errors['maryland[work_process_emp_engade]']; ?></label>
                             <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-5">
                                <label class="control-label">14. HOW INJURY OR ILLNESS/ABNORMAL HEALTH CONDITION OCCURRED. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DESCRIBE THE SEQUENCE OF EVENTS AND INCLUDE ANY OBJECTS OR &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SUBSTANCES THAT DIRECTLY INJURED THE EMPLOYEE OR MADE THE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EMPLOYEE ILL <span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">
                                <textarea class="form-control" name="maryland[how_injury_health_condition]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder=" HOW INJURY OR ILLNESS/ABNORMAL HEALTH CONDITION OCCURRED. DESCRIBE THE SEQUENCE OF EVENTS AND INCLUDE ANY OBJECTS OR SUBSTANCES THAT DIRECTLY INJURED THE EMPLOYEE OR MADE THE EMPLOYEE ILL"><?php echo set_value('maryland[how_injury_health_condition]'); ?></textarea>
                                <?php if(isset($errors['maryland[how_injury_health_condition]'])): ?>
                                    <label class="text-danger"><?=$errors['maryland[how_injury_health_condition]']; ?></label>
                             <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label">15. DATE RETURN(ED) TO WORK</label>
                            </div>
                            <div class="col-md-7">
                                <div class="input-group date date-picker">
                                    <input type="text" size="16" placeholder="Select Date" class="form-control" name="maryland[return_work_date]" value="<?php echo set_value('maryland[return_work_date]') ?>" readonly id="return_work_date_maryaland">
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
                                <p class="same_date_maryaland error" style="display:none">You cannot select same date</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-6">
                                <label class=" control-label">16. IF FATAL, GIVE DATE OF DEATH</label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group date date-picker">
                                    <input type="text" size="16" placeholder="Select Date" class="form-control" name="maryland[if_fatal_give_date]" value="<?php echo set_value('maryland[if_fatal_give_date]'); ?>" readonly>
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
                                <label class=" control-label">17. WERE SAFEGUARDS OR SAFETY EQUIPMENT PROVIDED?</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-md-radios">
                                    <div class="md-radio-inline">
                                        <div class="md-radio">
                                            <input type="radio" id="maryland_were_safeguards_option_1" name="maryland[were_safeguards]" value="1" class="md-radiobtn" <?php echo set_checkbox('maryland[were_safeguards]','1'); ?>>
                                            <label for="maryland_were_safeguards_option_1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>Yes </label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio" id="maryland_were_safeguards_option_2" name="maryland[were_safeguards]" value="0" class="md-radiobtn" <?php echo set_checkbox('maryland[were_safeguards]','0'); ?>>
                                            <label for="maryland_were_safeguards_option_2">
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
                                <label class=" control-label">18. WERE THEY USED?</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group form-md-radios">
                                    <div class="md-radio-inline">
                                        <div class="md-radio">
                                            <input type="radio" id="maryland_were_they_used_option_1" name="maryland[were_they_used]" value="1" class="md-radiobtn" <?php echo set_checkbox('maryland[were_they_used]','1'); ?>>
                                            <label for="maryland_were_they_used_option_1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>Yes </label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio" id="maryland_were_they_used_option_2" name="maryland[were_they_used]" value="0" class="md-radiobtn" <?php echo set_checkbox('maryland[were_they_used]','0'); ?>>
                                            <label for="maryland_were_they_used_option_2">
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
                                <label class="control-label">19. PHYSICIAN/HEALTH CARE PROVIDER (NAME & ADDRESS)</label>
                            </div>
                            <div class="col-md-7">
                                <textarea class="form-control" name="maryland[physician_health_care_provider]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="PHYSICIAN/HEALTH CARE PROVIDER (NAME & ADDRESS)"><?php echo set_value('maryland[physician_health_care_provider]'); ?></textarea>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-5">
                                <label class="control-label">20. HOSPITAL OR OFF SITE TREATMENT (NAME & ADDRESS)</label>
                            </div>
                            <div class="col-md-7">
                                <textarea class="form-control" name="maryland[hospital_or_off_site_treatment]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="HOSPITAL OR OFF SITE TREATMENT (NAME & ADDRESS)"><?php echo set_value('maryland[hospital_or_off_site_treatment]'); ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-12" style="margin: 15px;">
                                <label class="control-label"><b>Initial Treatment</b></label>
                            </div>
                            <div class="md-checkbox-inline">
                                <div class="col-md-3">
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="maryland_hospital_or_off_site_treatment_checkboxs_1" name="maryland[hospital_or_off_site_treatment_checkboxs][]" value="0" class="md-check" <?php echo set_checkbox('maryland[hospital_or_off_site_treatment_checkboxs][]','0') ?>>
                                        <label for="maryland_hospital_or_off_site_treatment_checkboxs_1">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> NO MEDICAL TREATMENT </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="maryland_hospital_or_off_site_treatment_checkboxs_2" name="maryland[hospital_or_off_site_treatment_checkboxs][]" value="1" class="md-check" <?php echo set_checkbox('maryland[hospital_or_off_site_treatment_checkboxs][]','1') ?>>
                                        <label for="maryland_hospital_or_off_site_treatment_checkboxs_2">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> MINOR: BY EMPLOYER </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="maryland_hospital_or_off_site_treatment_checkboxs_3" name="maryland[hospital_or_off_site_treatment_checkboxs][]" value="2" class="md-check" <?php echo set_checkbox('maryland[hospital_or_off_site_treatment_checkboxs][]','2') ?>>
                                        <label for="maryland_hospital_or_off_site_treatment_checkboxs_3">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> MINOR CLINIC/HOSP </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="maryland_hospital_or_off_site_treatment_checkboxs_4" name="maryland[hospital_or_off_site_treatment_checkboxs][]" value="3" class="md-check" <?php echo set_checkbox('maryland[hospital_or_off_site_treatment_checkboxs][]','3') ?>>
                                        <label for="maryland_hospital_or_off_site_treatment_checkboxs_4">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> EMERGENCY CARE </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="maryland_hospital_or_off_site_treatment_checkboxs_5" name="maryland[hospital_or_off_site_treatment_checkboxs][]" value="4" class="md-check" <?php echo set_checkbox('maryland[hospital_or_off_site_treatment_checkboxs][]','4') ?>>
                                        <label for="maryland_hospital_or_off_site_treatment_checkboxs_5">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> HOSPITALIZED > 24 HOURS </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="maryland_hospital_or_off_site_treatment_checkboxs_6" name="maryland[hospital_or_off_site_treatment_checkboxs][]" value="5" class="md-check" <?php echo set_checkbox('maryland[hospital_or_off_site_treatment_checkboxs][]','5') ?>>
                                        <label for="maryland_hospital_or_off_site_treatment_checkboxs_6">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> FUTURE MAJOR MEDICAL </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="maryland_hospital_or_off_site_treatment_checkboxs_7" name="maryland[hospital_or_off_site_treatment_checkboxs][]" value="6" class="md-check" <?php echo set_checkbox('maryland[hospital_or_off_site_treatment_checkboxs][]','6') ?>>
                                        <label for="maryland_hospital_or_off_site_treatment_checkboxs_7">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> LOST TIME ANTICIPATED </label>
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
                                <label class="control-label">1. WITNESSES (NAME & PHONE #)</label>
                            </div>
                            <div class="col-md-9">
                                <input  placeholder="WITNESSES (NAME & PHONE #)" name="maryland[witnesses]"   class="form-control" type="text" value="<?php echo set_value('maryland[witnesses]'); ?>"/><br>
                                <input placeholder="WITNESSES (NAME & PHONE #)" name="maryland[witnesses_1]"  class="form-control" type="text" value="<?php echo set_value('maryland[witnesses_1]'); ?>"/><br>
                                <input placeholder="WITNESSES (NAME & PHONE #)" name="maryland[witnesses_2]"  class="form-control" type="text" value="<?php echo set_value('maryland[witnesses_2]'); ?>"/>
                                <div class="form-control-focus"> </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-6">
                                <label class=" control-label">2. DATE ADMINISTRATOR NOTIFIED :</label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group date date-picker-today">
                                    <input type="text" size="16" class="form-control valid" name="maryland[date_administrator_notified]" placeholder="Select Date" value="<?php echo set_value('maryland[date_administrator_notified]'); ?>" readonly="" aria-invalid="false">
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
                                <label class=" control-label">3. DATE PREPARED </label>
                            </div>
                            <div class="col-md-7">
                                <div class="input-group date date-picker-today">
                                    <input type="text" size="16" placeholder="Select Date" class="form-control" name="maryland[date_prepared]" value="<?php echo set_value('maryland[date_prepared]'); ?>" readonly>
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
                                <label class=" control-label">4. PREPARER’S NAME & TITLE </label>
                            </div>
                            <div class="col-md-6">
                                <input placeholder="" name="maryland[preparer_name]" class="form-control" type="text" value="<?php echo set_value('maryland[preparer_name]') == false ? 'Joyce Ginsberg , Benefits Manager' : set_value('maryland[preparer_name]'); ?>" />
                                <div class="form-control-focus"> </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label">5. PHONE NUMBER </label>
                            </div>
                            <div class="col-md-7">
                                <input name="maryland[phone_number]" id="phone_number" class="form-control" type="text" value="<?php echo set_value('maryland[phone_number]') == false ? '732-987-3817' : set_value('maryland[phone_number]'); ?>" />
                                <div class="form-control-focus"> </div>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="form-actions right">
                    <!-- <button type="button" class="btn default">Cancel</button> -->
                    <!-- <a  href="https://test.tendertouch.com/upload/WC-Instructions-Guidelines.pdf" target="_blank" class="btn blue"><i class="fa fa-print"></i> Print</a> -->
                     <button type="submit" class="btn blue" name="save_print" formtarget="_blank" id="ML_print_and_save"><i class="fa fa-check"></i> Save & print</button>
                    <button type="submit" class="btn blue" id="maryaland_submit" name="onlysave"><i class="fa fa-check"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>