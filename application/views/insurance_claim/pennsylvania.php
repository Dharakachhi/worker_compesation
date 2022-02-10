<?php $i=0; ?>
<div class="tab-pane active">
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-gift"></i> Pennsylvania Insurance Claim
            </div>
        </div>
        <div class="portlet-body form">
            <form id="pennsylvania_form_id" action="<?php echo base_url(); ?>Insurance_claim/pennsylvania" class="horizontal-form" method="post">
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
                                    <label class="control-label"><b><?php echo $i=$i+1;?>.</b> Employee First Name :<span class="required" aria-required="true">*</span></label>
                                </div>
                                <div class="col-md-7">
                                    <input value="<?php echo set_value('pennsylvania[first_name]'); ?>" name="pennsylvania[first_name]" type="text" class="form-control AlphabetsOnly" placeholder="Employee First Name" id="fname" autocomplete="off">
                                    <?php if (isset($errors['pennsylvania[first_name]'])): ?>
                                        <label class="text-danger" style="color: #ed6b75;"><?=$errors['pennsylvania[first_name]'];?></label>
                                    <?php endif;?>
                                </div>
                        </div>
                        <div class="col-md-6">
                            <label class="col-md-5 control-label"><b><?php echo $i=$i+1;?>.</b>Employee Last Name :<span class="required" aria-required="true">*</span>
                            </label>
                            <div class="col-md-7">
                                <input value="<?php echo set_value('pennsylvania[last_name]'); ?>" name="pennsylvania[last_name]" type="text" class="form-control AlphabetsOnly" placeholder="Employee Last Name" autocomplete="off">
                                <?php if (isset($errors['pennsylvania[last_name]'])): ?>
                                    <label class="text-danger" style="color: #ed6b75;"><?=$errors['pennsylvania[last_name]'];?></label>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class="control-label"><b><?php echo $i=$i+1;?>.</b> Street Address :</label>
                            </div>
                            <div class="col-md-7">
                                <textarea class="form-control" name="pennsylvania[address]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="House number, City, State, and ZIP"><?php echo set_value('pennsylvania[address]'); ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class="control-label"><b><?php echo $i=$i+1;?>.</b> City :</label>
                            </div>
                            <div class="col-md-7">
                                <input value="<?php echo set_value('pennsylvania[city]'); ?>" name="pennsylvania[city]" type="text" class="form-control" placeholder="City">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class="control-label"><b><?php echo $i=$i+1;?>.</b> State :</label>
                            </div>
                            <div class="col-md-7">
                                    <input type="hidden" name="question1" id="PL_q1">
                                    <input type="hidden" name="question2" id="PL_q2">
                                    <input type="hidden" name="question3" id="PL_q3">
                                    <input type="hidden" name="question4" id="PL_q4">
                                    <input type="hidden" name="PL_emp_state" id="PL_emp_state">
                                     <select class="form-control select2" name="pennsylvania[state]"
                                        data-placeholder="Choose a State" tabindex="1" id="pennsylvania_state">
                                        <option value="">Select State</option>
                                        <option value="AL" <?php echo set_select('pennsylvania[state]','AL'); ?>>
                                            Alabama</option>
                                        <option value="AK" <?php echo set_select('pennsylvania[state]','AK'); ?>>
                                            Alaska</option>
                                        <option value="AZ" <?php echo set_select('pennsylvania[state]','AZ'); ?>>
                                            Arizona</option>
                                        <option value="AR" <?php echo set_select('pennsylvania[state]','AR'); ?>>
                                            Arkansas</option>
                                        <option value="CA" <?php echo set_select('pennsylvania[state]','CA'); ?>>
                                            California</option>
                                        <option value="CO" <?php echo set_select('pennsylvania[state]','CO'); ?>>
                                            Colorado</option>
                                        <option value="CT" <?php echo set_select('pennsylvania[state]','CT'); ?>>
                                            Connecticut</option>
                                        <option value="DE" <?php echo set_select('pennsylvania[state]','DE'); ?>>
                                            Delaware</option>
                                        <option value="FL" <?php echo set_select('pennsylvania[state]','FL'); ?>>
                                            Florida</option>
                                        <option value="GA" <?php echo set_select('pennsylvania[state]','GA'); ?>>
                                            Georgia</option>
                                        <option value="HI" <?php echo set_select('pennsylvania[state]','HI'); ?>>
                                            Hawaii</option>
                                        <option value="ID" <?php echo set_select('pennsylvania[state]','ID'); ?>>
                                            Idaho</option>
                                        <option value="IL" <?php echo set_select('pennsylvania[state]','IL'); ?>>
                                            Illinois</option>
                                        <option value="IN" <?php echo set_select('pennsylvania[state]','IN'); ?>>
                                            Indiana</option>
                                        <option value="IA" <?php echo set_select('pennsylvania[state]',''); ?>>Iowa
                                        </option>
                                        <option value="KS" <?php echo set_select('pennsylvania[state]','KS'); ?>>
                                            Kansas</option>
                                        <option value="KY" <?php echo set_select('pennsylvania[state]','KY'); ?>>
                                            Kentucky</option>
                                        <option value="LA" <?php echo set_select('pennsylvania[state]','LA'); ?>>
                                            Louisiana</option>
                                        <option value="ME" <?php echo set_select('pennsylvania[state]','ME'); ?>>
                                            Maine</option>
                                        <option value="MD" <?php echo set_select('pennsylvania[state]','MD'); ?>>
                                            Maryland</option>
                                        <option value="MA" <?php echo set_select('pennsylvania[state]','MA'); ?>>
                                            Massachusetts</option>
                                        <option value="MI" <?php echo set_select('pennsylvania[state]','MI'); ?>>
                                            Michigan</option>
                                        <option value="MN" <?php echo set_select('pennsylvania[state]','MN'); ?>>
                                            Minnesota</option>
                                        <option value="MS" <?php echo set_select('pennsylvania[state]','MS'); ?>>
                                            Mississippi</option>
                                        <option value="MO" <?php echo set_select('pennsylvania[state]','MO'); ?>>
                                            Missouri</option>
                                        <option value="MT" <?php echo set_select('pennsylvania[state]','MT'); ?>>
                                            Montana</option>
                                        <option value="NE" <?php echo set_select('pennsylvania[state]','NE'); ?>>
                                            Nebraska</option>
                                        <option value="NV" <?php echo set_select('pennsylvania[state]','NV'); ?>>
                                            Nevada</option>
                                        <option value="NH" <?php echo set_select('pennsylvania[state]','NH'); ?>>New
                                            Hampshire</option>
                                        <option value="NJ" <?php echo set_select('pennsylvania[state]','NJ'); ?>>New
                                            Jersey</option>
                                        <option value="NM" <?php echo set_select('pennsylvania[state]','NM'); ?>>New
                                            Mexico</option>
                                        <option value="NY" <?php echo set_select('pennsylvania[state]','NY'); ?>>New
                                            York</option>
                                        <option value="NC" <?php echo set_select('pennsylvania[state]','NC'); ?>>
                                            North Carolina</option>
                                        <option value="ND" <?php echo set_select('pennsylvania[state]','ND'); ?>>
                                            North Dakota</option>
                                        <option value="OH" <?php echo set_select('pennsylvania[state]','OH'); ?>>Ohio
                                        </option>
                                        <option value="OK" <?php echo set_select('pennsylvania[state]','OK'); ?>>
                                            Oklahoma</option>
                                        <option value="OR" <?php echo set_select('pennsylvania[state]','OR'); ?>>
                                            Oregon</option>
                                        <option value="PA" <?php echo set_select('pennsylvania[state]','PA'); ?>>
                                            Pennsylvania</option>
                                        <option value="RI" <?php echo set_select('pennsylvania[state]','RI'); ?>>
                                            Rhode Island</option>
                                        <option value="SC" <?php echo set_select('pennsylvania[state]','SC'); ?>>
                                            South Carolina</option>
                                        <option value="SD" <?php echo set_select('pennsylvania[state]','SD'); ?>>
                                            South Dakota</option>
                                        <option value="TN" <?php echo set_select('pennsylvania[state]','TN'); ?>>
                                            Tennessee</option>
                                        <option value="TX" <?php echo set_select('pennsylvania[state]','TX'); ?>>
                                            Texas</option>
                                        <option value="UT" <?php echo set_select('pennsylvania[state]','UT'); ?>>Utah
                                        </option>
                                        <option value="VT" <?php echo set_select('pennsylvania[state]','VT'); ?>>
                                            Vermont</option>
                                        <option value="VA" <?php echo set_select('pennsylvania[state]','VA'); ?>>
                                            Virginia</option>
                                        <option value="WA" <?php echo set_select('pennsylvania[state]','WA'); ?>>
                                            Washington</option>
                                        <option value="WD" <?php echo set_select('pennsylvania[state]','WD'); ?>>
                                            Washington DC</option>
                                        <option value="WV" <?php echo set_select('pennsylvania[state]','WV'); ?>>West
                                            Virginia</option>
                                        <option value="WI" <?php echo set_select('pennsylvania[state]','WI'); ?>>
                                            Wisconsin</option>
                                        <option value="WY" <?php echo set_select('pennsylvania[state]','WY'); ?>>
                                            Wyoming</option>
                                    </select>
                                <!-- <input value="<?php echo set_value('pennsylvania[state]'); ?>" name="pennsylvania[state]" type="text" class="form-control" placeholder="State"> -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class="control-label"><b><?php echo $i=$i+1;?>.</b> Zip Code :</label>
                            </div>
                            <div class="col-md-7">
                                <input value="<?php echo set_value('pennsylvania[zip_code]'); ?>" name="pennsylvania[zip_code]" type="text" class="form-control" placeholder="Zip Code">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class="control-label"><b><?php echo $i=$i+1;?>.</b> Phone Number :</label>
                            </div>
                            <div class="col-md-7">
                                <input value="<?php echo set_value('pennsylvania[employee_phone_number]'); ?>" name="pennsylvania[employee_phone_number]" type="text" class="form-control" placeholder="Phone Number" id="employee_phone_number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Gender<span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group form-md-radios">
                                    <div class="md-radio-inline">
                                        <div class="md-radio">
                                            <input type="radio" id="pennsylvania_gender_1" name="pennsylvania[gender]" value="1" class="md-radiobtn" <?php echo set_checkbox('pennsylvania[gender]','1'); ?>>
                                            <label for="pennsylvania_gender_1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>Male </label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio" id="pennsylvania_gender_2" name="pennsylvania[gender]" value="0" class="md-radiobtn" <?php echo set_value('pennsylvania[gender]','0'); ?>>
                                            <label for="pennsylvania_gender_2">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Female </label>
                                        </div>
                                    </div>
                                    <?php if (isset($errors['pennsylvania[gender]'])): ?>
                                        <label class="text-danger" style="color: #ed6b75;"><?=$errors['pennsylvania[gender]'];?></label>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Marital Status<span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group form-md-radios">
                                    <div class="md-radio-inline">
                                        <div class="md-radio">
                                            <input type="radio" id="pennsylvania_marital_status_option_1" name="pennsylvania[marital_status]" value="1" class="md-radiobtn" <?php echo set_checkbox('pennsylvania[marital_status]','1'); ?>>
                                            <label for="pennsylvania_marital_status_option_1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>SINGLE</label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio" id="pennsylvania_marital_status_option_2" name="pennsylvania[marital_status]" value="0" class="md-radiobtn" <?php echo set_checkbox('pennsylvania[marital_status]','0'); ?>>
                                            <label for="pennsylvania_marital_status_option_2">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> MARRIED </label>
                                        </div>
                                        <?php if (isset($errors['pennsylvania[marital_status]'])): ?>
                                            <label class="text-danger" style="color: #ed6b75;"><?=$errors['pennsylvania[marital_status]'];?></label>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class="control-label"><b><?php echo $i=$i+1;?>.</b> Discipline: <span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <select class="form-control select2" name="pennsylvania[discipline]" data-placeholder="Choose a Discipline" tabindex="1" id="pennsylvania_discipline">
                                        <option value="">Select Discipline</option>
                                        <option value="PT" <?php echo set_select('pennsylvania[discipline]','PT'); ?>>PT</option>
                                        <option value="PTA" <?php echo set_select('pennsylvania[discipline]','PTA'); ?>>PTA</option>
                                        <option value="OT" <?php echo set_select('pennsylvania[discipline]','OT'); ?>>OT</option>
                                        <option value="COTA" <?php echo set_select('pennsylvania[discipline]','COTA'); ?>>COTA</option>
                                        <option value="SLP" <?php echo set_select('pennsylvania[discipline]','SLP'); ?>>SLP</option>
                                        <option value="Rehab Aide" <?php echo set_select('pennsylvania[discipline]','Rehab Aide'); ?>>Rehab Aide</option>
                                        <option value="Regional Manager" <?php echo set_select('pennsylvania[discipline]','Regional Manager'); ?>>Regional Manager</option>
                                        <option value="Corporate Staff" <?php echo set_select('pennsylvania[discipline]','Corporate Staff'); ?>>Corporate Staff</option>
                                    </select>
                                </div>
                                <?php if (isset($errors['pennsylvania[discipline]'])): ?>
                                    <label class="text-danger" style="color: #ed6b75;"><?=$errors['pennsylvania[discipline]'];?></label>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                       <!--  <div class="col-md-6">
                            <div class="col-md-4">
                                <label class="control-label"><b><?php echo $i=$i+1;?>.</b> Date Of Birth :</label>
                            </div>
                            <div class="col-md-6">
                                 <div class="input-group date date-picker">
                                    <input type="text" size="16" placeholder="Select Date" class="form-control" name="pennsylvania[dob]" value="<?php echo set_value('pennsylvania[dob]'); ?>" readonly>
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
                        </div> -->
                        <div class="col-md-10">
                            <div class="col-md-3">
                                <label class="control-label"><b><?php echo $i=$i+1;?>.</b> Facility Name :<span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-9">
                                <input placeholder="Facility Name" name="pennsylvania[facility_name]"  class="form-control" type="text" value="<?php echo set_value('pennsylvania[facility_name]'); ?>" />
                                <div class="form-control-focus"> </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Employment Status</label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group form-md-radios">
                                    <div class="md-radio-inline">
                                        <div class="md-radio">
                                            <input type="radio" id="pennsylvania_job_title_option_1" name="pennsylvania[employment_status]" value="0" class="md-radiobtn" <?php echo set_checkbox('pennsylvania[employment_status]','0'); ?>>
                                            <label for="pennsylvania_job_title_option_1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>Part time </label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio" id="pennsylvania_job_title_option_2" name="pennsylvania[employment_status]" value="1" class="md-radiobtn" <?php echo set_checkbox('pennsylvania[employment_status]','1'); ?>>
                                            <label for="pennsylvania_job_title_option_2">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>Full time </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-7">
                            <div class="col-md-5">
                                <label class=" control-label"><b>.</b> Occupation / Job Title : <span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">
                                <input placeholder="Occupation / Job Title" name="pennsylvania[job_title]" class="form-control" type="text" value="<?php echo set_value('pennsylvania[job_title]'); ?>" />
                            </div>
                        </div> -->
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Date of Injury :<span
                                                    class="required" aria-required="true"> *</span></label>
                            </div>
                            <div class="col-md-7">
                            <div class="input-group date date-picker">
                                    <input type="text" size="16" placeholder="Select Date" name="pennsylvania[date_of_injury]" class="form-control" value="<?php echo set_value('pennsylvania[date_of_injury]'); ?>" id="date_of_injury_penn" readonly>
                                    <span class="input-group-btn">
                                        <button class="btn default date-reset" type="button">
                                            <i class="fa fa-times"></i>
                                        </button>
                                        <button class="btn default date-set" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                                </div>
                                <?php if (isset($errors['pennsylvania[date_of_injury]'])): ?>
                                    <label class="text-danger" style="color: #ed6b75;"><?=$errors['pennsylvania[date_of_injury]'];?></label>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Time Employee Began Work :</label>
                            </div>
                            <div class="col-md-7">
                                <div class="input-group meridian_1 date form_meridian_datetime">
                                    <input type="text" size="16" placeholder="Select Date" class="form-control" name="pennsylvania[began_work]" value="<?php echo set_value('pennsylvania[began_work]') ?>" readonly>
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
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Time of Occurrence</label>
                            </div>
                            <div class="col-md-7    ">
                                <div class="input-group">
                                    <input type="text" size="16" placeholder="Select Date" class="form-control timepicker" name="pennsylvania[time_of_injury]" value="<?php echo set_value('pennsylvania[time_of_injury]'); ?>" id="pennsylvania_time_of_injury" readonly>
                                    <span class="input-group-btn">
                                        <button class="btn default" id="injury_clock" type="button">
                                            <i class="fa fa-clock-o"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div  class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Last Day Worked</label>
                            </div>
                            <div class="col-md-7">
                            <div class="input-group date date-picker">
                                    <input type="text" size="16" placeholder="Select Date" name="pennsylvania[work_stop_date]" class="form-control" value="<?php echo set_value('pennsylvania[work_stop_date]'); ?>" readonly id="last_work_date_penn">
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
                                <p class="same_date_conne error" style="display:none">You cannot select same date</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Date Disability Began </label>
                            </div>
                            <div class="col-md-7">
                                <div class="input-group date date-picker">
                                    <input type="text" size="16" placeholder="Select Date" class="form-control" name="pennsylvania[date_disability_began]" value="<?php echo set_value('pennsylvania[date_disability_began]'); ?>" readonly>
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
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Date Employer Notified</label>
                            </div>
                            <div class="col-md-7">
                                <div class="input-group date date-picker-today">
                                    <input type="text" size="16" placeholder="Select Date" class="form-control" name="pennsylvania[date_notified]" value="<?php echo set_value('pennsylvania[date_notified]'); ?>" readonly>
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
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Date returned to work</label>
                            </div>
                            <div class="col-md-7">
                                <div class="input-group date date-picker">
                                    <input type="text" size="16" placeholder="Select Date" class="form-control" name="pennsylvania[return_work_date]" value="<?php echo set_value('pennsylvania[return_work_date]'); ?>" readonly id="return_work_date_penn">
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
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Date Hired:</label>
                            </div>
                            <div class="col-md-7">
                                <div class="input-group date date-picker">
                                    <input type="text" size="16" placeholder="Select Date" class="form-control" name="pennsylvania[date_hire]" value="<?php echo set_value('pennsylvania[date_hire]'); ?>" readonly>
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
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b>Contact First name</label>
                            </div>
                            <div class="col-md-7">
                                <input placeholder="Joyce" name="pennsylvania[contact_first_name]" class="form-control" type="text" value="<?php echo set_value('pennsylvania[contact_first_name]','Joyce'); ?>"  />
                                <div class="form-control-focus"> </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b>Contact Last name</label>
                            </div>
                            <div class="col-md-7">
                                <input placeholder="Ginsberg" name="pennsylvania[contact_last_name]" class="form-control" type="text" value="<?php echo set_value('pennsylvania[contact_last_name]','Ginsberg'); ?>" />
                                <div class="form-control-focus"> </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Contact Phone Number </label>
                            </div>
                            <div class="col-md-7">
                                <input placeholder="732-987-3817" name="pennsylvania[contact_phone_number]" class="form-control" type="text" value="<?php echo set_value('pennsylvania[contact_phone_number]','732-987-3817'); ?>" id="contact_penn1" />
                                <div class="form-control-focus"> </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Type of Injury Or Illness <span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <select class="form-control select2" name="pennsylvania[type_of_injury]" data-placeholder="Choose a Type of Injury" tabindex="1" id="pennsylvania_type_of_injury">
                                        <option value="">Select Injury</option>
                                        <option value="Abrasion/Laceration" <?php echo set_select('pennsylvania[type_of_injury]','Abrasion/Laceration'); ?>>Abrasion/Laceration</option>

                                        <option value="Concussion" <?php echo set_select('pennsylvania[type_of_injury]','Concussion'); ?>>Concussion</option>

                                        <option value="Dislocation" <?php echo set_select('pennsylvania[type_of_injury]','Dislocation'); ?>>Dislocation</option>

                                        <option value="Illness/Infection" <?php echo set_select('pennsylvania[type_of_injury]','Illness/Infection'); ?>>Illness/Infection</option>

                                        <option value="Sprain/Strain" <?php echo set_select('pennsylvania[type_of_injury]','Sprain/Strain'); ?>>Sprain/Strain</option>

                                        <option value="Burn" <?php echo set_select('pennsylvania[type_of_injury]','Burn'); ?>>Burn</option>

                                        <option value="Contusion" <?php echo set_select('pennsylvania[type_of_injury]','Contusion'); ?>>Contusion</option>

                                        <option value="Fracture" <?php echo set_select('pennsylvania[type_of_injury]','Fracture'); ?>>Fracture</option>

                                        <option value="Puncture" <?php echo set_select('pennsylvania[type_of_injury]','Puncture'); ?>>Puncture</option>

                                        <option value="No Apparent Injury" <?php echo set_select('pennsylvania[type_of_injury]','No Apparent Injury'); ?>>No Apparent Injury</option>

                                        <option value="Other" <?php echo set_select('pennsylvania[type_of_injury]','Other'); ?>>Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="col-md-5">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Part of Body Affected <span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">
                            <input placeholder="Part of Body Affected" name="pennsylvania[part_body_affected]" class="form-control" type="text" value="<?php echo set_value('pennsylvania[part_body_affected]'); ?>" />
                            <?php if (isset($errors['pennsylvania[part_body_affected]'])): ?>
                                <label class="text-danger" style="color: #ed6b75;"><?=$errors['pennsylvania[part_body_affected]'];?></label>
                            <?php endif;?>
                                <div class="form-control-focus"> </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="col-md-8">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Did Injury / Illness / Exposure occur on employer’s premises?</label>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group form-md-radios">
                                    <div class="md-radio-inline">
                                        <div class="md-radio">
                                            <input type="radio" id="pennsylvania_did_injury_employer_permises_option_1" name="pennsylvania[did_injury_employer_permises]" value="1" class="md-radiobtn" <?php echo set_value('pennsylvania[did_injury_employer_permises]','1'); ?> >
                                            <label for="pennsylvania_did_injury_employer_permises_option_1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>Yes </label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio" id="pennsylvania_did_injury_employer_permises_option_2" name="pennsylvania[did_injury_employer_permises]" value="0" class="md-radiobtn" <?php echo set_value('pennsylvania[did_injury_employer_permises]','0'); ?> checked>
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
                        <div class="col-md-8">
                            <div class="col-md-5">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b>If Out of State of Injury specify state of injury </label>
                            </div>
                            <div class="col-md-7">
                                <input placeholder="If Out of State of Injury specify state of injury" name="pennsylvania[out_of_state_injury]" class="form-control" type="text" value="<?php echo set_value('pennsylvania[out_of_state_injury]') ?>" />
                                <div class="form-control-focus"></div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Were safeguards or safety equipment provided? <span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group form-md-radios">
                                    <div class="md-radio-inline">
                                        <div class="md-radio">
                                            <input type="radio" id="pennsylvania_were_safeguards_option_1" name="pennsylvania[were_safeguards]" value="1" class="md-radiobtn" <?php echo set_checkbox('pennsylvania[were_safeguards]','1'); ?>>
                                            <label for="pennsylvania_were_safeguards_option_1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>Yes </label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio" id="pennsylvania_were_safeguards_option_2" name="pennsylvania[were_safeguards]" value="0" class="md-radiobtn" <?php echo set_checkbox('pennsylvania[were_safeguards]','0'); ?>>
                                            <label for="pennsylvania_were_safeguards_option_2">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>No </label>
                                        </div>
                                        <?php if (isset($errors['pennsylvania[were_safeguards]'])): ?>
                                            <label class="text-danger" style="color: #ed6b75;"><?=$errors['pennsylvania[were_safeguards]'];?></label>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Were safeguards or safety equipment used? <span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group form-md-radios">
                                    <div class="md-radio-inline">
                                        <div class="md-radio">
                                            <input type="radio" id="pennsylvania_were_safeguards_used_option_1" name="pennsylvania[where_used_safaguard]" value="1" class="md-radiobtn" <?php echo set_checkbox('pennsylvania[where_used_safaguard]','1'); ?>>
                                            <label for="pennsylvania_were_safeguards_used_option_1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>Yes </label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio" id="pennsylvania_were_safeguards_used_option_2" name="pennsylvania[where_used_safaguard]" value="0" class="md-radiobtn" <?php echo set_checkbox('pennsylvania[where_used_safaguard]','0'); ?>>
                                            <label for="pennsylvania_were_safeguards_used_option_2">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span>No </label>
                                        </div>
                                        <?php if (isset($errors['pennsylvania[where_used_safaguard]'])): ?>
                                            <label class="text-danger" style="color: #ed6b75;"><?=$errors['pennsylvania[where_used_safaguard]'];?></label>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-5">
                                <label class="control-label"><b><?php echo $i=$i+1;?>.</b> Equipment materials or chemicals employee was using when accident or illness exposure occurred</label>
                            </div>
                            <div class="col-md-7">
                                <textarea placeholder="Equipment materials or chemicals employee was using when accident or illness exposure occurred" class="form-control" name="pennsylvania[equipment_meterials]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error"><?php echo set_value('pennsylvania[equipment_meterials]'); ?></textarea>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-5">
                                <label class="control-label"><b><?php echo $i=$i+1;?>.</b> How injury or illness/ abnormal health condition occurred. Describe the sequence of events and include any objects or substances directly responsible <span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-7">
                                <textarea placeholder="How injury or illness/ abnormal health condition occurred. Describe the sequence of events and include any objects or substances directly responsible " class="form-control" name="pennsylvania[how_injury_health_condition]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error"><?php echo set_value('pennsylvania[how_injury_health_condition]'); ?></textarea>
                                <?php if (isset($errors['pennsylvania[how_injury_health_condition]'])): ?>
                                    <label class="text-danger" style="color: #ed6b75;"><?=$errors['pennsylvania[how_injury_health_condition]'];?></label>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-6">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b>If Fatal, give data of death</label>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group date date-picker">
                                    <input type="text" size="16" placeholder="Select Date" class="form-control" name="pennsylvania[if_fatal_give_date]" value="<?php echo set_value('pennsylvania[if_fatal_give_date]') ?>" readonly>
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
                        <!-- <div class="col-md-6">
                            <div class="col-md-5">
                                <label class="control-label"><b><?php echo $i=$i+1;?>.</b> Physician heath care provider</label>
                            </div>
                            <div class="col-md-7">
                                <textarea class="form-control" name="pennsylvania[physician_health_care_provider]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="Physician heath care provider"><?php echo set_value('pennsylvania[physician_health_care_provider]'); ?></textarea>
                            </div>
                        </div> -->
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b>Physician heath care provider </label>
                            </div>
                        </div> <br> <br>
                            <div class="col-md-4">
                                 <div class="col-md-4">
                                    <label class="control-label"><b>1.</b> First Name</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" size="16" placeholder=" First Name" class="form-control" name="pennsylvania[physician_first_name]" value="<?php echo set_value('pennsylvania[physician_first_name]') ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-md-4">
                                    <label class="control-label"><b>2.</b> Last Name</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" size="16" placeholder="Last Name" class="form-control" name="pennsylvania[physician_last_name]" value="<?php echo set_value('pennsylvania[physician_last_name]') ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-md-4">
                                    <label class="control-label"><b>3.</b> Street</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" size="16" placeholder="Street" class="form-control" name="pennsylvania[physician_street]" value="<?php echo set_value('pennsylvania[physician_street]') ?>">
                                </div>
                            </div>
                    </div> <br>
                     <div class="row">
                        <div class="col-md-4">
                            <div class="col-md-4">
                                <label class="control-label"><b>4.</b> State</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" size="16" placeholder="State" class="form-control" name="pennsylvania[physician_state]" value="<?php echo set_value('pennsylvania[physician_state]') ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-4">
                                <label class="control-label"><b>5.</b> Zip</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" size="16" placeholder="Zip" class="form-control" name="pennsylvania[physician_zip]" value="<?php echo set_value('pennsylvania[physician_zip]') ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-4">
                                <label class="control-label"><b>6.</b>  Hospital name</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" size="16" placeholder="Hospital name" class="form-control" name="pennsylvania[physician_hospital_name]" value="<?php echo set_value('pennsylvania[physician_hospital_name]') ?>">
                            </div>
                        </div>
                    </div> <br>
                     <div class="row">
                        <div class="col-md-4">
                            <div class="col-md-4">
                                <label class="control-label"><b>7.</b>Street</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" size="16" placeholder="Street" class="form-control" name="pennsylvania[physician_hospital_street]" value="<?php echo set_value('pennsylvania[physician_hospital_street]') ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-4">
                                <label class="control-label"><b>8.</b>City</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" size="16" placeholder="City" class="form-control" name="pennsylvania[physician_hospital_city]" value="<?php echo set_value('pennsylvania[physician_hospital_city]') ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-4">
                                <label class="control-label"><b>9.</b>State</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" size="16" placeholder="State" class="form-control" name="pennsylvania[physician_hospital_state]" value="<?php echo set_value('pennsylvania[physician_hospital_state]') ?>">
                            </div>
                        </div>
                    </div> <br>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <label class="control-label"><b> <?php echo $i=$i+1;?>.</b> Initial treatment <span class="required" aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-10">
                                <div class="md-checkbox-inline" >
                                    <div class="col-md-4">
                                        <div class="md-checkbox">
                                            <input type="checkbox" id="pennsylvania_hospital_or_off_site_treatment_checkboxs_1" name="pennsylvania[hospital_or_off_site_treatment_checkboxs][]" value="0" class="md-check" <?php echo set_checkbox('pennsylvania[hospital_or_off_site_treatment_checkboxs][]','0'); ?>>
                                            <label for="pennsylvania_hospital_or_off_site_treatment_checkboxs_1">
                                                <span class="inc"></span>
                                                <span class="check"></span>
                                                <span class="box"></span> No Medical treatment </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="md-checkbox">
                                            <input type="checkbox" id="pennsylvania_hospital_or_off_site_treatment_checkboxs_2" name="pennsylvania[hospital_or_off_site_treatment_checkboxs][]" value="1" class="md-check" <?php echo set_checkbox('pennsylvania[hospital_or_off_site_treatment_checkboxs][]','1'); ?>>
                                            <label for="pennsylvania_hospital_or_off_site_treatment_checkboxs_2">
                                                <span class="inc"></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Minor – by employer </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="md-checkbox">
                                            <input type="checkbox" id="pennsylvania_hospital_or_off_site_treatment_checkboxs_3" name="pennsylvania[hospital_or_off_site_treatment_checkboxs][]" value="2" class="md-check" <?php echo set_checkbox('pennsylvania[hospital_or_off_site_treatment_checkboxs][]','2'); ?>>
                                            <label for="pennsylvania_hospital_or_off_site_treatment_checkboxs_3">
                                                <span class="inc"></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Clinic / hospital </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="md-checkbox">
                                            <input type="checkbox" id="pennsylvania_hospital_or_off_site_treatment_checkboxs_4" name="pennsylvania[hospital_or_off_site_treatment_checkboxs][]" value="3" class="md-check" <?php echo set_checkbox('pennsylvania[hospital_or_off_site_treatment_checkboxs][]','3'); ?>>
                                            <label for="pennsylvania_hospital_or_off_site_treatment_checkboxs_4">
                                                <span class="inc"></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Panel physician </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="md-checkbox">
                                            <input type="checkbox" id="pennsylvania_hospital_or_off_site_treatment_checkboxs_5" name="pennsylvania[hospital_or_off_site_treatment_checkboxs][]" value="4" class="md-check" <?php echo set_checkbox('pennsylvania[hospital_or_off_site_treatment_checkboxs][]','4'); ?>>
                                            <label for="pennsylvania_hospital_or_off_site_treatment_checkboxs_5">
                                                <span class="inc"></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Employee physician</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="md-checkbox">
                                            <input type="checkbox" id="pennsylvania_hospital_or_off_site_treatment_checkboxs_6" name="pennsylvania[hospital_or_off_site_treatment_checkboxs][]" value="5" class="md-check" <?php echo set_checkbox('pennsylvania[hospital_or_off_site_treatment_checkboxs][]','5'); ?>>
                                            <label for="pennsylvania_hospital_or_off_site_treatment_checkboxs_6">
                                                <span class="inc"></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Emergency care</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="md-checkbox">
                                            <input type="checkbox" id="pennsylvania_hospital_or_off_site_treatment_checkboxs_7" name="pennsylvania[hospital_or_off_site_treatment_checkboxs][]" value="6" class="md-check" <?php echo set_checkbox('pennsylvania[hospital_or_off_site_treatment_checkboxs][]','6'); ?>>
                                            <label for="pennsylvania_hospital_or_off_site_treatment_checkboxs_7" id="required_msg">
                                                <span class="inc"></span>
                                                <span class="check"></span>
                                                <span class="box" id="pennsylvania_submit"></span> Hospitalized more than 24 hours</label>
                                        </div>
                                    <?php if (isset($errors['pennsylvania[hospital_or_off_site_treatment_checkboxs][]'])): ?>
                                        <label class="text-danger" style="color: #ed6b75;"><?=$errors['pennsylvania[hospital_or_off_site_treatment_checkboxs][]'];?></label>
                                    <?php endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b>Witness First name</label>
                            </div>
                            <div class="col-md-7">
                                <input placeholder="Witness First name" name="pennsylvania[witness_first_name]" class="form-control" type="text" value="<?php echo set_value('pennsylvania[witness_first_name]'); ?>" />
                                <div class="form-control-focus"> </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-4">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b>Witness last name</label>
                            </div>
                            <div class="col-md-8">
                                <input placeholder="Witness last name" name="pennsylvania[witness_last_name]" class="form-control" type="text" value="<?php echo set_value('pennsylvania[witness_last_name]'); ?>" />
                                <div class="form-control-focus"> </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b>Witness phone number</label>
                            </div>
                            <div class="col-md-7">
                                <input placeholder="Witness phone number" name="pennsylvania[witness_phone_number]" class="form-control" type="text" value="<?php echo set_value('pennsylvania[witness_phone_number]'); ?>" id="phone_number_penn2" />
                                <div class="form-control-focus"> </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b>Person completing this form </label>
                            </div>
                        </div>
                        <br><br>
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="col-md-5">
                                    <label class=" control-label">Name</label>
                                </div>
                                <div class="col-md-7">
                                    <input placeholder="Joyce Ginsberg, HR Benefits Manager" name="pennsylvania[person_name]" class="form-control" type="text" value="<?php echo set_value('pennsylvania[person_name]','Joyce Ginsberg, HR Benefits Manager') ?>" />
                                    <div class="form-control-focus"> </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-5">
                                    <label class=" control-label">Phone</label>
                                </div>
                                <div class="col-md-7">
                                    <input placeholder="732-987-3817" name="pennsylvania[person_phone]" class="form-control" type="text" value="<?php echo set_value('pennsylvania[person_phone]','732-987-3817'); ?>" id="contact_phone_number2_penn" />
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
                                <input placeholder="HR Benefits Manager" name="pennsylvania[person_title]" class="form-control" type="text" value="<?php echo set_value('pennsylvania[person_title]','HR Benefits Manager'); ?>" />
                                <div class="form-control-focus"> </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-5">
                                <label class=" control-label"><b><?php echo $i=$i+1;?>.</b>DATE PREPARED </label>
                            </div>
                            <div class="col-md-7">
                            <div class="input-group date date-picker-today">
                                    <input type="text" size="16" placeholder="Select Date" class="form-control" name="pennsylvania[date_prepared]" value="<?php echo set_value('pennsylvania[date_prepared]'); ?>" readonly>
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
                                <label class="control-label"><b><?php echo $i=$i+1;?>.</b> Preferred Employee Email address</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control email_emp" placeholder="Preferred Employee Email address"
                                    name="pennsylvania[employee_email]"
                                    value="<?php echo set_value('pennsylvania[employee_email]'); ?>">
                                    <p class="email-error" style="color: red; display: none;">Invalid Email</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                     <div class="row">

                    </div>
                </div>
                <div class="form-actions right">
                    <!-- <button type="button" class="btn default">Cancel</button> -->
                    <!-- <a  href="https://test.tendertouch.com/upload/WC-Instructions-Guidelines.pdf" target="_blank" class="btn blue"><i class="fa fa-print"></i> Print</a> -->
                      <button type="submit" class="btn blue" name="save_print" id="PL_print_and_save" formtarget="_blank"><i class="fa fa-check"></i> Save & print</button>
                    <button type="submit" class="btn blue" name="onlysave"><i class="fa fa-check"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</div>