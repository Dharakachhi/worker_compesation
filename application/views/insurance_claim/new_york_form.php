
<style type="text/css">
select {
       /*max-width: 100%;
      box-sizing: border-box;
      white-space: normal;
      word-wrap: break-word;*/
  }

/*option {
  border: solid 1px #DDDDDD;
  }*/
</style>
<div class="tab-pane active">
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-gift"></i> New York Insurance Claim
            </div>
        </div>

        <div class="portlet-body form">
            <form id="new_york_form_id" action="<?php echo base_url(); ?>Insurance_claim/new_york"
                class="horizontal-form" method="post">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <h2 class="text-center"><b>EMPLOYEE'S REPORT OF WORK-RELATED INJURY/ILLNESS</b></h2>
                        <h4 class="text-center"><b><i>State of New York - Workers' Compensation Board</i></b></h4>
                    </div>
                    <div class="col-md-1"></div>
                </div> <br><br>
                <div class="form-body">
                    <h3 class="form-section" style="color: #4d86c4"><b>C. EMPLOYEE PERSONAL INFORMATION</b></h3>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="col-md-6">
                                <label class="control-label" for="state_injury_or_illness_occurred"><b>1.</b>State
                                    injury or illness occurred:<span class="required" aria-required="true"> *</span></label>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="hidden" name="question1" id="NY_q1">
                                        <input type="hidden" name="question2" id="NY_q2">
                                        <input type="hidden" name="question3" id="NY_q3">
                                        <input type="hidden" name="question4" id="NY_q4">
                                        <input type="hidden" name="NY_emp_state" id="NY_emp_state">
                                        <select class="form-control select2" name="new_york[state_injury]"
                                        data-placeholder="Choose a State Injury" tabindex="1" id="new_york_state">
                                        <option value="">Select State Injury</option>
                                        <option value="AL" <?php echo set_select('new_york[state_injury]','AL'); ?>>
                                        Alabama</option>
                                        <option value="AK" <?php echo set_select('new_york[state_injury]','AK'); ?>>
                                        Alaska</option>
                                        <option value="AZ" <?php echo set_select('new_york[state_injury]','AZ'); ?>>
                                        Arizona</option>
                                        <option value="AR" <?php echo set_select('new_york[state_injury]','AR'); ?>>
                                        Arkansas</option>
                                        <option value="CA" <?php echo set_select('new_york[state_injury]','CA'); ?>>
                                        California</option>
                                        <option value="CO" <?php echo set_select('new_york[state_injury]','CO'); ?>>
                                        Colorado</option>
                                        <option value="CT" <?php echo set_select('new_york[state_injury]','CT'); ?>>
                                        Connecticut</option>
                                        <option value="DE" <?php echo set_select('new_york[state_injury]','DE'); ?>>
                                        Delaware</option>
                                        <option value="FL" <?php echo set_select('new_york[state_injury]','FL'); ?>>
                                        Florida</option>
                                        <option value="GA" <?php echo set_select('new_york[state_injury]','GA'); ?>>
                                        Georgia</option>
                                        <option value="HI" <?php echo set_select('new_york[state_injury]','HI'); ?>>
                                        Hawaii</option>
                                        <option value="ID" <?php echo set_select('new_york[state_injury]','ID'); ?>>
                                        Idaho</option>
                                        <option value="IL" <?php echo set_select('new_york[state_injury]','IL'); ?>>
                                        Illinois</option>
                                        <option value="IN" <?php echo set_select('new_york[state_injury]','IN'); ?>>
                                        Indiana</option>
                                        <option value="IA" <?php echo set_select('new_york[state_injury]',''); ?>>Iowa
                                        </option>
                                        <option value="KS" <?php echo set_select('new_york[state_injury]','KS'); ?>>
                                        Kansas</option>
                                        <option value="KY" <?php echo set_select('new_york[state_injury]','KY'); ?>>
                                        Kentucky</option>
                                        <option value="LA" <?php echo set_select('new_york[state_injury]','LA'); ?>>
                                        Louisiana</option>
                                        <option value="ME" <?php echo set_select('new_york[state_injury]','ME'); ?>>
                                        Maine</option>
                                        <option value="MD" <?php echo set_select('new_york[state_injury]','MD'); ?>>
                                        Maryland</option>
                                        <option value="MA" <?php echo set_select('new_york[state_injury]','MA'); ?>>
                                        Massachusetts</option>
                                        <option value="MI" <?php echo set_select('new_york[state_injury]','MI'); ?>>
                                        Michigan</option>
                                        <option value="MN" <?php echo set_select('new_york[state_injury]','MN'); ?>>
                                        Minnesota</option>
                                        <option value="MS" <?php echo set_select('new_york[state_injury]','MS'); ?>>
                                        Mississippi</option>
                                        <option value="MO" <?php echo set_select('new_york[state_injury]','MO'); ?>>
                                        Missouri</option>
                                        <option value="MT" <?php echo set_select('new_york[state_injury]','MT'); ?>>
                                        Montana</option>
                                        <option value="NE" <?php echo set_select('new_york[state_injury]','NE'); ?>>
                                        Nebraska</option>
                                        <option value="NV" <?php echo set_select('new_york[state_injury]','NV'); ?>>
                                        Nevada</option>
                                        <option value="NH" <?php echo set_select('new_york[state_injury]','NH'); ?>>New
                                        Hampshire</option>
                                        <option value="NJ" <?php echo set_select('new_york[state_injury]','NJ'); ?>>New
                                        Jersey</option>
                                        <option value="NM" <?php echo set_select('new_york[state_injury]','NM'); ?>>New
                                        Mexico</option>
                                        <option value="NY" <?php echo set_select('new_york[state_injury]','NY'); ?>>New
                                        York</option>
                                        <option value="NC" <?php echo set_select('new_york[state_injury]','NC'); ?>>
                                        North Carolina</option>
                                        <option value="ND" <?php echo set_select('new_york[state_injury]','ND'); ?>>
                                        North Dakota</option>
                                        <option value="OH" <?php echo set_select('new_york[state_injury]','OH'); ?>>Ohio
                                        </option>
                                        <option value="OK" <?php echo set_select('new_york[state_injury]','OK'); ?>>
                                        Oklahoma</option>
                                        <option value="OR" <?php echo set_select('new_york[state_injury]','OR'); ?>>
                                        Oregon</option>
                                        <option value="PA" <?php echo set_select('new_york[state_injury]','PA'); ?>>
                                        Pennsylvania</option>
                                        <option value="RI" <?php echo set_select('new_york[state_injury]','RI'); ?>>
                                        Rhode Island</option>
                                        <option value="SC" <?php echo set_select('new_york[state_injury]','SC'); ?>>
                                        South Carolina</option>
                                        <option value="SD" <?php echo set_select('new_york[state_injury]','SD'); ?>>
                                        South Dakota</option>
                                        <option value="TN" <?php echo set_select('new_york[state_injury]','TN'); ?>>
                                        Tennessee</option>
                                        <option value="TX" <?php echo set_select('new_york[state_injury]','TX'); ?>>
                                        Texas</option>
                                        <option value="UT" <?php echo set_select('new_york[state_injury]','UT'); ?>>Utah
                                        </option>
                                        <option value="VT" <?php echo set_select('new_york[state_injury]','VT'); ?>>
                                        Vermont</option>
                                        <option value="VA" <?php echo set_select('new_york[state_injury]','VA'); ?>>
                                        Virginia</option>
                                        <option value="WA" <?php echo set_select('new_york[state_injury]','WA'); ?>>
                                        Washington</option>
                                        <option value="WD" <?php echo set_select('new_york[state_injury]','WD'); ?>>
                                        Washington DC</option>
                                        <option value="WV" <?php echo set_select('new_york[state_injury]','WV'); ?>>West
                                        Virginia</option>
                                        <option value="WI" <?php echo set_select('new_york[state_injury]','WI'); ?>>
                                        Wisconsin</option>
                                        <option value="WY" <?php echo set_select('new_york[state_injury]','WY'); ?>>
                                        Wyoming</option>
                                    </select>
                                    <?php if(isset($errors['new_york[state_injury]'])): ?>

                                        <label class="text-danger"><?=$errors['new_york[state_injury]']; ?></label>

                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <label class="col-md-3 control-label"><b>2.</b> Employee Name:<span class="required"
                                aria-required="true">*</span></label>
                                <div class="col-md-9">
                                    <input value="<?php echo set_value('new_york[full_name]'); ?>"
                                    name="new_york[full_name]" type="text" class="form-control AlphabetsOnly"
                                    placeholder="" autocomplete="off">
                                    &nbsp;First &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Middle &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Last
                                    <?php if(isset($errors['new_york[full_name]'])): ?>

                                        <label class="text-danger"><?=$errors['new_york[full_name]']; ?></label>

                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="col-md-2 control-label"><b>3.</b> Mailing Address:</label>
                                <div class="col-md-10">
                                    <textarea placeholder="Mailing Address" class="form-control" name="new_york[address]"
                                    rows="3" aria-required="true" aria-invalid="false"
                                    aria-describedby="memo-error"><?php echo set_value('new_york[address]'); ?></textarea>
                                </div>
                                <?php if(isset($errors['new_york[address]'])): ?>

                                    <label class="text-danger"><?=$errors['new_york[address]']; ?></label>

                                <?php endif; ?>
                            </div>

                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="col-md-5 control-label" for="contact_phone_number"><b>4.</b> Contact Phone
                                Number:</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" placeholder="Contact Phone Number"
                                    value="<?php echo set_value('new_york[contact_no]'); ?>"
                                    name="new_york[contact_no]" pattern="^\d{10}$" id="newyork_contact_phone_number">
                                    <p class="phone_digit" style="color: red;display: none;">Pealse Enter digits</p>
                                </div>
                                <?php if(isset($errors['new_york[contact_no]'])): ?>

                                    <label class="text-danger"><?=$errors['new_york[contact_no]']; ?></label>

                                <?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label class=" control-label" for="gender"><b>5.</b> Gender<span class="required"
                                        aria-required="true">*</span></label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group form-md-radios">
                                            <div class="md-radio-inline">
                                                <div class="md-radio">
                                                    <input type="radio" id="new_york_gender_1" name="new_york[gender]" value="1"
                                                    <?php echo set_checkbox('new_york[gender]', '1'); ?>
                                                    class="md-radiobtn">
                                                    <label for="new_york_gender_1">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span>Male </label>
                                                    </div>
                                                    <div class="md-radio">
                                                        <input type="radio" id="new_york_gender_2" name="new_york[gender]" value="0"
                                                        <?php echo set_checkbox('new_york[gender]', '0'); ?>
                                                        class="md-radiobtn">
                                                        <label for="new_york_gender_2">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Female </label>
                                                        </div>
                                                        <?php if(isset($errors['new_york[gender]'])): ?>

                                                            <label class="text-danger"><?=$errors['new_york[gender]']; ?></label>

                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-md-5">
                                                <label class="control-label" for="preferred_contact_no"><b>6.</b> Preferred Contact
                                                Number:</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input placeholder="Preferred Contact Number" name="new_york[preferred_contact_no]"
                                                class="form-control" type="text" id="newyork_prefre_contact"
                                                value="<?php echo set_value('new_york[preferred_contact_no]'); ?>" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-md-6 control-label" for="preferred_email"><b>7.</b> Preferred Employee
                                            Email address:</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Preferred Employee Email address"
                                                name="new_york[preferred_email]"
                                                value="<?php echo set_value('new_york[preferred_email]'); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="col-md-5">
                                                <label class=" control-label" for="preferred_contact"><b>8.</b> Preferred
                                                contact:</label>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group form-md-radios">
                                                    <div class="md-radio-inline">
                                                        <div class="md-radio">
                                                            <input type="radio" id="new_york_preferred_contact_1"
                                                            name="new_york[preferred_contact]" value="phone"
                                                            <?php echo set_checkbox('new_york[preferred_contact]', 'phone'); ?>
                                                            class="md-radiobtn">
                                                            <label for="new_york_preferred_contact_1">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Phone </label>
                                                            </div>
                                                            <div class="md-radio">
                                                                <input type="radio" id="new_york_preferred_contact_2"
                                                                name="new_york[preferred_contact]" value="email"
                                                                <?php echo set_checkbox('new_york[preferred_contact]', 'email'); ?>
                                                                class="md-radiobtn">
                                                                <label for="new_york_preferred_contact_2">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Email </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="col-md-3">
                                                        <label class=" control-label"><b>9.</b> Discipline: <span class="required"
                                                            aria-required="true">*</span></label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="form-group">
                                                                <select class="form-control select2" name="new_york[discipline]"
                                                                data-placeholder="Please Select Discipline" tabindex="1" id="discipline">
                                                                <option value="">Select Discipline</option>
                                                                <option value="PT" <?php echo set_select('new_york[discipline]','PT'); ?>>PT
                                                                </option>
                                                                <option value="PTA" <?php echo set_select('new_york[discipline]','PTA'); ?>>PTA
                                                                </option>
                                                                <option value="OT" <?php echo set_select('new_york[discipline]','OT'); ?>>OT
                                                                </option>
                                                                <option value="COTA" <?php echo set_select('new_york[discipline]','COTA'); ?>>
                                                                COTA</option>
                                                                <option value="SLP" <?php echo set_select('new_york[discipline]','SLP'); ?>>SLP
                                                                </option>
                                                                <option value="Rehab Aide"
                                                                <?php echo set_select('new_york[discipline]','Rehab Aide'); ?>>Rehab Aide
                                                            </option>
                                                            <option value="Regional Manager"
                                                            <?php echo set_select('new_york[discipline]','Regional Manager'); ?>>
                                                        Regional Manager</option>
                                                        <option value="Corporate Staff"
                                                        <?php echo set_select('new_york[discipline]','Corporate Staff'); ?>>
                                                    Corporate Staff</option>
                                                </select>
                                                <?php if(isset($errors['new_york[discipline]'])): ?>
                                                    <label class="text-danger"><?=$errors['new_york[discipline]']; ?></label>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-2">
                                            <label class="control-label"><b>10.</b> Facility Name :<span class="required"
                                                aria-required="true">*</span></label>
                                            </div>
                                            <div class="col-md-10">
                                                <input placeholder="Facility Name" name="new_york[facility_name]" class="form-control"
                                                type="text" value="<?php echo set_value('new_york[facility_name]'); ?>" />
                                                <?php if(isset($errors['new_york[facility_name]'])): ?>
                                                    <label class="text-danger"><?=$errors['new_york[facility_name]']; ?></label>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <h3 class="form-section" style="color: #4d86c4"><b>D. EMPLOYEE'S INJURY OR ILLNESS</b></h3>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="col-md-8">
                                                <label class=" control-label" for="began_work"><b>1.</b> Time of day employee began work
                                                    on date of injury / illness:<span class="required"
                                                    aria-required="true">*</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input-group meridian_1 date form_meridian_datetime" style="width: 120%;">
                                                        <input type="text" size="16" placeholder="Select Date Time" class="form-control"
                                                        name="new_york[began_work]" readonly
                                                        value="<?php echo set_value('new_york[began_work]'); ?>" id="newyork_began_work">
                                                        <span class="input-group-btn">
                                                            <button class="btn default date-reset" type="button">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                            <button class="btn default date-set" type="button">
                                                                <i class="fa fa-calendar"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                    <?php if(isset($errors['new_york[began_work]'])): ?>
                                                        <label class="text-danger"><?=$errors['new_york[began_work]']; ?></label>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="col-md-5">
                                                    <label class=" control-label" for="time_of_injury"><b>2.</b> Time of
                                                        injury/illness:<span class="required" aria-required="true">*</span></label>
                                                    </div>
                                                    <div class="col-md-7">

                                                        <div class="input-group">
                                                            <!-- <div class="input-group meridian_2 date form_meridian_datetime"> -->

                                                                <input type="text" size="16" class="form-control timepicker" placeholder="Select Time"
                                                                name="new_york[time_of_injury]" readonly
                                                                value="<?php echo set_value('new_york[time_of_injury]'); ?>" id="date_injury_1">
                                                                <span class="input-group-btn">
                                                                    <button class="btn default" type="button" id="injury_clock">
                                                                        <i class="fa fa-clock-o"></i>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                            <?php if(isset($errors['new_york[time_of_injury]'])): ?>
                                                                <label class="text-danger"><?=$errors['new_york[time_of_injury]']; ?></label>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-3">
                                                            <label class=" control-label" for="has_employee_notice"><b>3.</b> Has the employee given
                                                            you notice of injury / illness?</label>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group form-md-radios">
                                                                <div class="md-radio-inline">
                                                                    <div class="md-radio">
                                                                        <input type="radio" id="new_york_employee_notice_1"
                                                                        name="new_york[has_employee_notice]" value="1"
                                                                        <?php echo set_checkbox('new_york[has_employee_notice]', '1',TRUE); ?>
                                                                        checked class="md-radiobtn employee_notice_cls">
                                                                        <label for="new_york_employee_notice_1">
                                                                            <span></span>
                                                                            <span class="check"></span>
                                                                            <span class="box"></span> Yes </label>
                                                                        </div>
                                                                        <div class="md-radio">
                                                                            <input type="radio" id="new_york_employee_notice_2"
                                                                            name="new_york[has_employee_notice]" value="0"
                                                                            <?php echo set_checkbox('new_york[has_employee_notice]', '0'); ?>
                                                                            class="md-radiobtn employee_notice_cls">
                                                                            <label for="new_york_employee_notice_2">
                                                                                <span></span>
                                                                                <span class="check"></span>
                                                                                <span class="box"></span> No </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2" id="notice_yes_div">
                                                                    <div class="form-group form-md-radios">
                                                                        <div class="md-radio-inline">
                                                                            <div class="md-radio">
                                                                                <input type="radio" id="new_york_employee_notice_option_1"
                                                                                name="new_york[notice_given_to]" value="orally"
                                                                                <?php echo set_checkbox('new_york[notice_given_to]','orally'); ?>
                                                                                class="md-radiobtn">
                                                                                <label for="new_york_employee_notice_option_1">
                                                                                    <span></span>
                                                                                    <span class="check"></span>
                                                                                    <span class="box"></span> Orally </label>
                                                                                </div>
                                                                                <div class="md-radio">
                                                                                    <input type="radio" id="new_york_employee_notice_option_2"
                                                                                    name="new_york[notice_given_to]" value="writing"
                                                                                    <?php echo set_checkbox('new_york[notice_given_to]','writing'); ?>
                                                                                    class="md-radiobtn">
                                                                                    <label for="new_york_employee_notice_option_2">
                                                                                        <span></span>
                                                                                        <span class="check"></span>
                                                                                        <span class="box"></span> Writing </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5 date_notice_yesdiv" style="display: none;">
                                                                            <div class="col-md-5">
                                                                                <label class=" control-label" for="date_notice_provided">Date notice provided:</label>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="input-group meridian_2 date date-picker">
                                                                                    <input type="text" placeholder="Select Date" size="16" class="form-control"
                                                                                    value="<?php echo set_value('new_york[notice_date]'); ?>" readonly
                                                                                    name="new_york[notice_date]">
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
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        <div class="col-md-12">
                                                                            <label class=" control-label" for="given_claimant_information"><b>4.</b> Have you given
                                                                            the employee a Claimant Information Packet? </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-group form-md-radios">
                                                                            <div class="md-radio-inline">
                                                                                <div class="md-radio">
                                                                                    <input type="radio" id="new_york_employee_claimant_information_packet_option_1"
                                                                                    name="new_york[given_claimant_information]" value="1"
                                                                                    class="md-radiobtn climant_info_cls"
                                                                                    <?php echo set_checkbox('new_york[given_claimant_information]','1'); ?>>
                                                                                    <label for="new_york_employee_claimant_information_packet_option_1">
                                                                                        <span></span>
                                                                                        <span class="check"></span>
                                                                                        <span class="box"></span> Yes </label>
                                                                                    </div>
                                                                                    <div class="md-radio">
                                                                                        <input type="radio" id="new_york_employee_claimant_information_packet_option_2"
                                                                                        name="new_york[given_claimant_information]" value="0"
                                                                                        class="md-radiobtn climant_info_cls"
                                                                                        <?php echo set_checkbox('new_york[given_claimant_information]','0'); ?>>
                                                                                        <label for="new_york_employee_claimant_information_packet_option_2">
                                                                                            <span></span>
                                                                                            <span class="check"></span>
                                                                                            <span class="box"></span> No </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-5" id="have_cliement_info_div_id">
                                                                               <div class="col-md-5">
                                                                                   <label class="control-label" for="where_did_the_injury_illness_happne">Date given</label>
                                                                               </div>
                                                                               <div class="col-md-7">
                                                                                <div class="input-group date date-picker">
                                                                                    <input type="text" size="16" readonly placeholder="Select Date" class="form-control"
                                                                                    value="<?php echo set_value('new_york[given_claimant_information_date]'); ?>"
                                                                                    name="new_york[given_claimant_information_date]">
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
                                                                        <hr>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="col-md-6">
                                                                                    <label class="control-label" for="where_did_the_injury_illness_happne"><b>5.</b> Where
                                                                                        did the injury / illness happen (e.g. 1 Main ST Portersville, at the front
                                                                                        door)?<span class="required" aria-required="true">*</span></label>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <textarea
                                                                                        placeholder="Where did the injury / illness happen (e.g. 1 Main ST Portersville, at the front door)"
                                                                                        class="form-control" name="new_york[where_did_the_injury]" rows="3"
                                                                                        aria-required="true" aria-invalid="false"
                                                                                        aria-describedby="memo-error"><?php echo set_value('new_york[where_did_the_injury]'); ?></textarea>
                                                                                        <?php if(isset($errors['new_york[where_did_the_injury]'])): ?>
                                                                                            <label class="text-danger"><?=$errors['new_york[where_did_the_injury]']; ?></label>
                                                                                        <?php endif; ?>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="col-md-4">
                                                                                        <label class="control-label" for="employee_claimant_information_packet_option"><b>6.</b>
                                                                                            Was this location where the employee normally worked?<span class="required"
                                                                                            aria-required="true">*</span></label>
                                                                                        </div>
                                                                                        <div class="col-md-2">
                                                                                            <div class="form-group form-md-radios">
                                                                                                <div class="md-radio-inline" id="radio_msg">
                                                                                                    <div class="md-radio">
                                                                                                        <input type="radio"
                                                                                                        id="new_york_was_this_location_where_the_emoloyee_normal_worked_option_1"
                                                                                                        name="new_york[location_where_worked]"
                                                                                                        value="1" <?php echo set_checkbox('new_york[location_where_worked]','1'); ?>
                                                                                                        class="md-radiobtn was_employee_work_cls">
                                                                                                        <label
                                                                                                        for="new_york_was_this_location_where_the_emoloyee_normal_worked_option_1">
                                                                                                        <span></span>
                                                                                                        <span class="check"></span>
                                                                                                        <span class="box"></span> Yes </label>
                                                                                                    </div>
                                                                                                    <div class="md-radio">
                                                                                                        <input type="radio"
                                                                                                        id="new_york_was_this_location_where_the_emoloyee_normal_worked_option_2"
                                                                                                        name="new_york[location_where_worked]" value="0"
                                                                                                        <?php echo set_checkbox('new_york[location_where_worked]','0'); ?>
                                                                                                        class="md-radiobtn was_employee_work_cls">
                                                                                                        <label
                                                                                                        for="new_york_was_this_location_where_the_emoloyee_normal_worked_option_2" >
                                                                                                        <span></span>
                                                                                                        <span class="check"></span>
                                                                                                        <span class="box"></span> No </label>
                                                                                                    </div>
                                                                                                    <?php if(isset($errors['new_york[location_where_worked]'])): ?>
                                                                                                        <label class="text-danger"><?=$errors['new_york[location_where_worked]']; ?></label>
                                                                                                    <?php endif; ?>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6" id="why_was_emp_there_div">
                                                                                            <div class="col-md-5">
                                                                                                <label class="control-label" for="why_employee_there">Why was the employee
                                                                                                    there?<span class="required" aria-required="true">*</span></label>
                                                                                                </div>
                                                                                                <div class="col-md-7">
                                                                                                    <textarea placeholder="Why was the employee there?"
                                                                                                    class="form-control why_was_employe_text" name="new_york[why_employee_there]"
                                                                                                    rows="3" aria-required="true" aria-invalid="false"
                                                                                                    aria-describedby="memo-error"><?php echo set_value('new_york[why_was_employe_there]'); ?></textarea>
                                                                                                </div>
                                                                                                <?php if(isset($errors['new_york[why_employee_there]'])): ?>
                                                                                                    <label class="text-danger"><?=$errors['new_york[why_employee_there]']; ?></label>
                                                                                                <?php endif; ?>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <hr>
                                                                                    <div class="row">
                                                                                        <div class="col-md-5">
                                                                                            <div class="col-md-5">
                                                                                                <label class="control-label" for="social_securit_number"><b>7.</b> Employee’s
                                                                                                    supervisor:<span class="required" aria-required="true">*</span></label>
                                                                                                </div>
                                                                                                <div class="col-md-7">
                                                                                                    <input placeholder=" Employee’s supervisor" name="new_york[employee_supervisor]"
                                                                                                    class="form-control" type="text"
                                                                                                    value="<?php echo set_value('new_york[employee_supervisor]');?>" />
                                                                                                    <?php if(isset($errors['new_york[employee_supervisor]'])): ?>
                                                                                                        <label class="text-danger"><?=$errors['new_york[employee_supervisor]']; ?></label>
                                                                                                    <?php endif; ?>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-7">
                                                                                                <div class="col-md-6">
                                                                                                    <label class=" control-label" for="supervisor_see_injury"><b>8.</b> Did the supervisor
                                                                                                        see injury happen? <span class="required" aria-required="true">*</span></label>
                                                                                                    </div>
                                                                                                    <div class="col-md-5">
                                                                                                        <div class="form-group form-md-radios">
                                                                                                            <div class="md-radio-inline" id="injury_msg">
                                                                                                                <div class="md-radio">
                                                                                                                    <input type="radio"
                                                                                                                    id="new_york_did_the_supervisor_see_injury_happen_option_1"
                                                                                                                    name="new_york[supervisor_see_injury]" value="1"
                                                                                                                    <?php echo set_checkbox('new_york[supervisor_see_injury]','1'); ?>
                                                                                                                    class="md-radiobtn">
                                                                                                                    <label for="new_york_did_the_supervisor_see_injury_happen_option_1">
                                                                                                                        <span></span>
                                                                                                                        <span class="check"></span>
                                                                                                                        <span class="box"></span>Yes </label>
                                                                                                                    </div>
                                                                                                                    <div class="md-radio">
                                                                                                                        <input type="radio"
                                                                                                                        id="new_york_did_the_supervisor_see_injury_happen_option_2"
                                                                                                                        name="new_york[supervisor_see_injury]" value="0"
                                                                                                                        <?php echo set_checkbox('new_york[supervisor_see_injury]','0'); ?>
                                                                                                                        class="md-radiobtn">
                                                                                                                        <label for="new_york_did_the_supervisor_see_injury_happen_option_2">
                                                                                                                            <span></span>
                                                                                                                            <span class="check"></span>
                                                                                                                            <span class="box"></span> No </label>
                                                                                                                        </div>
                                                                                                                        <div class="md-radio">
                                                                                                                            <input type="radio"
                                                                                                                            id="new_york_did_the_supervisor_see_injury_happen_option_3"
                                                                                                                            name="new_york[supervisor_see_injury]" value="2"
                                                                                                                            <?php echo set_checkbox('new_york[supervisor_see_injury]','2'); ?>
                                                                                                                            class="md-radiobtn">
                                                                                                                            <label for="new_york_did_the_supervisor_see_injury_happen_option_3">
                                                                                                                                <span></span>
                                                                                                                                <span class="check"></span>
                                                                                                                                <span class="box"></span> Unknown </label>
                                                                                                                            </div>
                                                                                                                            <?php if(isset($errors['new_york[supervisor_see_injury]'])): ?>
                                                                                                                                <label class="text-danger"><?=$errors['new_york[supervisor_see_injury]']; ?></label>
                                                                                                                            <?php endif; ?>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <hr>
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-6">
                                                                                                                <div class="col-md-6">
                                                                                                                    <label class=" control-label" for="anyone_see_injury"><b>9.</b> Did anyone else see the
                                                                                                                    injury happen</label>
                                                                                                                </div>
                                                                                                                <div class="col-md-6">
                                                                                                                    <div class="form-group form-md-radios">
                                                                                                                        <div class="md-radio-inline" id="radio_msg">
                                                                                                                            <div class="md-radio">
                                                                                                                                <input type="radio" id="new_york_did_the_any_see_injury_happen_option_1"
                                                                                                                                name="new_york[anyone_see_injury]" value="1"
                                                                                                                                <?php echo set_checkbox('new_york[anyone_see_injury]','1'); ?>
                                                                                                                                class="md-radiobtn did_anyone_seen_happen_cls">
                                                                                                                                <label for="new_york_did_the_any_see_injury_happen_option_1">
                                                                                                                                    <span></span>
                                                                                                                                    <span class="check"></span>
                                                                                                                                    <span class="box"></span>Yes </label>
                                                                                                                                </div>
                                                                                                                                <div class="md-radio">
                                                                                                                                    <input type="radio" id="new_york_did_the_any_see_injury_happen_option_2"
                                                                                                                                    name="new_york[anyone_see_injury]" value="0"
                                                                                                                                    <?php echo set_checkbox('new_york[anyone_see_injury]','0'); ?>
                                                                                                                                    class="md-radiobtn did_anyone_seen_happen_cls">
                                                                                                                                    <label for="new_york_did_the_any_see_injury_happen_option_2">
                                                                                                                                        <span></span>
                                                                                                                                        <span class="check"></span>
                                                                                                                                        <span class="box"></span> No </label>
                                                                                                                                    </div>
                                                                                                                                    <div class="md-radio">
                                                                                                                                        <input type="radio" id="new_york_did_the_any_see_injury_happen_option_3"
                                                                                                                                        name="new_york[anyone_see_injury]" value="2"
                                                                                                                                        <?php echo set_checkbox('new_york[anyone_see_injury]','2'); ?>
                                                                                                                                        class="md-radiobtn did_anyone_seen_happen_cls">
                                                                                                                                        <label for="new_york_did_the_any_see_injury_happen_option_3">
                                                                                                                                            <span></span>
                                                                                                                                            <span class="check"></span>
                                                                                                                                            <span class="box"></span> Unknown </label>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="col-md-6" id="gives_name_div">
                                                                                                                            <div class="col-md-3">
                                                                                                                                <label class="control-label" for="form_control_1">give name(s):</label>
                                                                                                                            </div>
                                                                                                                            <div class="col-md-9">
                                                                                                                                <textarea class="form-control" placeholder="Give Name(s)"
                                                                                                                                name="new_york[see_injury_happen_names]" rows="3" aria-required="true"
                                                                                                                                aria-invalid="false"
                                                                                                                                aria-describedby="memo-error"><?php echo set_value('new_york[see_injury_happen_names]'); ?></textarea>
                                                                                                                            </div>
                                                                                                                            <?php if(isset($errors['new_york[see_injury_happen_names]'])): ?>
                                                                                                                                <label class="text-danger"><?=$errors['new_york[see_injury_happen_names]']; ?></label>
                                                                                                                            <?php endif; ?>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <hr>
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="col-md-6">
                                                                                                                                <label class="control-label" for="what_employee_doing"><b>10.</b> What was the employee
                                                                                                                                    doing when he/she was injured or became ill? (e.g., unloading a truck, stocking a
                                                                                                                                    shelf, typing annual report) Walking from her car<span class="required"
                                                                                                                                    aria-required="true">*</span></label>
                                                                                                                                </div>
                                                                                                                                <div class="col-md-6">
                                                                                                                                    <textarea
                                                                                                                                    placeholder="What was the employee doing when he/she was injured or became ill? (e.g., unloading a truck, stocking a shelf, typing annual report) Walking from her car"
                                                                                                                                    class="form-control" name="new_york[what_employee_doing]" rows="4"
                                                                                                                                    aria-required="true" aria-invalid="false"
                                                                                                                                    aria-describedby="memo-error"><?php echo set_value('new_york[what_employee_doing]'); ?></textarea>
                                                                                                                                    <?php if(isset($errors['new_york[what_employee_doing]'])): ?>
                                                                                                                                        <label class="text-danger"><?=$errors['new_york[what_employee_doing]']; ?></label>
                                                                                                                                    <?php endif; ?>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <hr>
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-md-12">
                                                                                                                                <div class="col-md-6">
                                                                                                                                    <label class="control-label" for="how_did_the_injury"><b>11.</b> How did the
                                                                                                                                        injury/illness occur? (e.g., the employee tripped over a pipe and fell on the
                                                                                                                                        floor)<span class="required" aria-required="true">*</span></label>
                                                                                                                                    </div>
                                                                                                                                    <div class="col-md-6">
                                                                                                                                        <textarea
                                                                                                                                        placeholder="How did the injury/illness occur? (e.g., the employee tripped over a pipe and fell on the floor)"
                                                                                                                                        class="form-control" name="new_york[how_did_the_injury]" rows="4"
                                                                                                                                        aria-required="true" aria-invalid="false"
                                                                                                                                        aria-describedby="memo-error"><?php echo set_value('new_york[how_did_the_injury]'); ?></textarea>
                                                                                                                                        <?php if(isset($errors['new_york[how_did_the_injury]'])): ?>
                                                                                                                                            <label class="text-danger"><?=$errors['new_york[how_did_the_injury]']; ?></label>
                                                                                                                                        <?php endif; ?>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <hr>
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-md-12">
                                                                                                                                    <div class="col-md-6">
                                                                                                                                        <label class="control-label" for="list_body_part_affected"><b>12.</b> Explain fully the
                                                                                                                                            nature of the employee's injury/illness; list body parts affected (e.g., twisted
                                                                                                                                            left ankle and cut to forehead):<span class="required"
                                                                                                                                            aria-required="true">*</span></label>
                                                                                                                                        </div>
                                                                                                                                        <div class="col-md-6">
                                                                                                                                            <textarea
                                                                                                                                            placeholder="Explain fully the nature of the employee's injury/illness; list body parts affected (e.g., twisted left ankle and cut to forehead)"
                                                                                                                                            class="form-control" name="new_york[list_body_part_affected]" rows="4"
                                                                                                                                            aria-required="true" aria-invalid="false"
                                                                                                                                            aria-describedby="memo-error"><?php echo set_value('new_york[list_body_part_affected]'); ?></textarea>
                                                                                                                                            <?php if(isset($errors['new_york[list_body_part_affected]'])): ?>
                                                                                                                                                <label class="text-danger"><?=$errors['new_york[list_body_part_affected]']; ?></label>
                                                                                                                                            <?php endif; ?>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <hr>
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-md-7">
                                                                                                                                        <div class="col-md-9">
                                                                                                                                            <label class=" control-label" for="was_an_object"><b>13.</b> Was an object (e.g.
                                                                                                                                                forklift, hammer, acid) involved in the injury / illness <span class="required"
                                                                                                                                                aria-required="true">*</span></label>
                                                                                                                                            </div>
                                                                                                                                            <div class="col-md-3">
                                                                                                                                                <div class="form-group form-md-radios">
                                                                                                                                                    <div class="md-radio-inline">
                                                                                                                                                        <div class="md-radio">
                                                                                                                                                            <input type="radio" id="new_york_was_an_object_option_1"
                                                                                                                                                            name="new_york[was_an_object]" value="1"
                                                                                                                                                            <?php echo set_checkbox('new_york[was_an_object]','1') ?>
                                                                                                                                                            class="md-radiobtn was_an_object_cls">
                                                                                                                                                            <label for="new_york_was_an_object_option_1">
                                                                                                                                                                <span></span>
                                                                                                                                                                <span class="check"></span>
                                                                                                                                                                <span class="box"></span>Yes </label>
                                                                                                                                                            </div>
                                                                                                                                                            <div class="md-radio">
                                                                                                                                                                <input type="radio" id="new_york_was_an_object_option_2"
                                                                                                                                                                name="new_york[was_an_object]" value="0"
                                                                                                                                                                <?php echo set_checkbox('new_york[was_an_object]','0') ?>
                                                                                                                                                                class="md-radiobtn was_an_object_cls">
                                                                                                                                                                <label for="new_york_was_an_object_option_2">
                                                                                                                                                                    <span></span>
                                                                                                                                                                    <span class="check"></span>
                                                                                                                                                                    <span class="box"></span> No </label>
                                                                                                                                                                </div>
                                                                                                                                                                <?php if(isset($errors['new_york[was_an_object]'])): ?>
                                                                                                                                                                    <label class="text-danger"><?=$errors['new_york[was_an_object]']; ?></label>
                                                                                                                                                                <?php endif; ?>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                                <div class="col-md-5" id="what_was_it_div">
                                                                                                                                                    <div class="col-md-3">
                                                                                                                                                        <label class="control-label" for="what_was_object">What was it?:<span
                                                                                                                                                            class="required" aria-required="true"> *</span></label>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="col-md-9">
                                                                                                                                                            <input type="text" class="form-control" placeholder="What was it"
                                                                                                                                                            name="new_york[what_was_object]"
                                                                                                                                                            value="<?php echo set_value('new_york[what_was_object]'); ?>" id="newyork_was_obj">
                                                                                                                                                            <p id="object-error" class="error" style="display: none;color: red">This field is required</p>
                                                                                                                                                        </div>
                                                                                                                                                        <?php if(isset($errors['new_york[what_was_object]'])): ?>
                                                                                                                                                            <label class="text-danger"><?=$errors['new_york[what_was_object]']; ?></label>
                                                                                                                                                        <?php endif; ?>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                                <hr>
                                                                                                                                                <div class="row">
                                                                                                                                                    <div class="col-md-12">
                                                                                                                                                        <div class="col-md-6">
                                                                                                                                                            <label class="control-label"
                                                                                                                                                            for="was_the_injury_the_result_of_the_user_or_operation_of_a_licensed_moter_vehicle"><b>14.</b>
                                                                                                                                                            Was the injury the result of the user or operation of a licensed motor vehicle<span
                                                                                                                                                            class="required" aria-required="true">*</span></label>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="col-md-2">
                                                                                                                                                            <div class="form-group form-md-radios">
                                                                                                                                                                <div class="md-radio-inline">
                                                                                                                                                                    <div class="md-radio">
                                                                                                                                                                        <input type="radio" id="new_york_was_injury_by_vihicle_option_1"
                                                                                                                                                                        name="new_york[was_the_injury_vehicle]" value="1"
                                                                                                                                                                        <?php echo set_checkbox('new_york[was_the_injury_vehicle]','1'); ?>
                                                                                                                                                                        class="md-radiobtn was_injury_vehicle_cls">
                                                                                                                                                                        <label for="new_york_was_injury_by_vihicle_option_1">
                                                                                                                                                                            <span></span>
                                                                                                                                                                            <span class="check"></span>
                                                                                                                                                                            <span class="box"></span>Yes </label>
                                                                                                                                                                        </div>
                                                                                                                                                                        <div class="md-radio">
                                                                                                                                                                            <input type="radio" id="new_york_was_injury_by_vihicle_option_2"
                                                                                                                                                                            name="new_york[was_the_injury_vehicle]" value="0"
                                                                                                                                                                            <?php echo set_checkbox('new_york[was_the_injury_vehicle]','0'); ?>
                                                                                                                                                                            class="md-radiobtn was_injury_vehicle_cls">
                                                                                                                                                                            <label for="new_york_was_injury_by_vihicle_option_2">
                                                                                                                                                                                <span></span>
                                                                                                                                                                                <span class="check"></span>
                                                                                                                                                                                <span class="box"></span> No </label>
                                                                                                                                                                            </div>
                                                                                                                                                                            <?php if(isset($errors['new_york[was_the_injury_vehicle]'])): ?>
                                                                                                                                                                                <label class="text-danger"><?=$errors['new_york[was_the_injury_vehicle]']; ?></label>
                                                                                                                                                                            <?php endif; ?>
                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                            <div class="col-md-12" id="was_vehicale_div">
                                                                                                                                                                <div class="col-md-7">
                                                                                                                                                                    <div class="col-md-3">
                                                                                                                                                                        <label class="control-label"
                                                                                                                                                                        for="was_the_injury_the_result_of_the_user_or_operation_of_a_licensed_moter_vehicle">
                                                                                                                                                                        Who’s vehicle <span class="required" aria-required="true">*</span></label>
                                                                                                                                                                    </div>
                                                                                                                                                                    <div class="form-group form-md-radios">
                                                                                                                                                                        <div class="md-radio-inline">
                                                                                                                                                                            <div class="md-radio">
                                                                                                                                                                                <input type="radio" id="new_york_was_injury_by_vihicle_employee_option_1"
                                                                                                                                                                                name="new_york[whos_vehicle]" value="employee_vehicle"
                                                                                                                                                                                <?php echo set_checkbox('new_york[whos_vehicle]','employee_vehicle'); ?>
                                                                                                                                                                                class="md-radiobtn">
                                                                                                                                                                                <label for="new_york_was_injury_by_vihicle_employee_option_1">
                                                                                                                                                                                    <span></span>
                                                                                                                                                                                    <span class="check"></span>
                                                                                                                                                                                    <span class="box"></span>Employee's vehicle </label>
                                                                                                                                                                                </div>
                                                                                                                                                                                <div class="md-radio">
                                                                                                                                                                                    <input type="radio" id="new_york_was_injury_by_vihicle_employee_option_2"
                                                                                                                                                                                    name="new_york[whos_vehicle]" value="employer_vehicle"
                                                                                                                                                                                    <?php echo set_checkbox('new_york[whos_vehicle]','employer_vehicle'); ?>
                                                                                                                                                                                    class="md-radiobtn">
                                                                                                                                                                                    <label for="new_york_was_injury_by_vihicle_employee_option_2">
                                                                                                                                                                                        <span></span>
                                                                                                                                                                                        <span class="check"></span>
                                                                                                                                                                                        <span class="box"></span>Employer's vehicle</label>
                                                                                                                                                                                    </div>
                                                                                                                                                                                    <div class="md-radio">
                                                                                                                                                                                        <input type="radio" id="new_york_was_injury_by_vihicle_employee_option_3"
                                                                                                                                                                                        name="new_york[whos_vehicle]" value="other_vehicle"
                                                                                                                                                                                        <?php echo set_checkbox('new_york[whos_vehicle]','other_vehicle'); ?>
                                                                                                                                                                                        class="md-radiobtn">
                                                                                                                                                                                        <label for="new_york_was_injury_by_vihicle_employee_option_3">
                                                                                                                                                                                            <span></span>
                                                                                                                                                                                            <span class="check"></span>
                                                                                                                                                                                            <span class="box"></span>Other vehicle</label>
                                                                                                                                                                                        </div>
                                                                                                                                                                                        <?php if(isset($errors['new_york[whos_vehicle]'])): ?>
                                                                                                                                                                                            <label class="text-danger"><?=$errors['new_york[whos_vehicle]']; ?></label>
                                                                                                                                                                                        <?php endif; ?>
                                                                                                                                                                                    </div>
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                            <div class="col-md-5">
                                                                                                                                                                                <div class="col-md-5">
                                                                                                                                                                                    <label class="control-label">License plate number</label>
                                                                                                                                                                                </div>
                                                                                                                                                                                <div class="col-md-7">
                                                                                                                                                                                    <input type="text" class="form-control" placeholder="License plate number"
                                                                                                                                                                                    name="new_york[lincese_plate_number]"
                                                                                                                                                                                    value="<?php echo set_value('new_york[lincese_plate_number]'); ?>">
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                    <hr>
                                                                                                                                                                    <div class="row">
                                                                                                                                                                        <div class="col-md-6">
                                                                                                                                                                            <div class="col-md-8">
                                                                                                                                                                                <label class=" control-label"><b>15.</b> Did the injury/illness result in the employee's
                                                                                                                                                                                    death?<span class="required" aria-required="true">*</span></label>
                                                                                                                                                                                </div>
                                                                                                                                                                                <div class="col-md-4">
                                                                                                                                                                                    <div class="form-group form-md-radios">
                                                                                                                                                                                        <div class="md-radio-inline">
                                                                                                                                                                                            <div class="md-radio">
                                                                                                                                                                                                <input type="radio" id="new_york_did_the_injury_in_death_option_1"
                                                                                                                                                                                                name="new_york[did_the_death]" value="1"
                                                                                                                                                                                                class="md-radiobtn did_death_cls"
                                                                                                                                                                                                <?php echo set_checkbox('new_york[did_the_death]','1') ?>>
                                                                                                                                                                                                <label for="new_york_did_the_injury_in_death_option_1">
                                                                                                                                                                                                    <span></span>
                                                                                                                                                                                                    <span class="check"></span>
                                                                                                                                                                                                    <span class="box"></span>Yes </label>
                                                                                                                                                                                                </div>
                                                                                                                                                                                                <div class="md-radio">
                                                                                                                                                                                                    <input type="radio" id="new_york_did_the_injury_in_death_option_2"
                                                                                                                                                                                                    name="new_york[did_the_death]" value="0"
                                                                                                                                                                                                    class="md-radiobtn did_death_cls"
                                                                                                                                                                                                    <?php echo set_checkbox('new_york[did_the_death]','0') ?> >
                                                                                                                                                                                                    <label for="new_york_did_the_injury_in_death_option_2">
                                                                                                                                                                                                        <span></span>
                                                                                                                                                                                                        <span class="check"></span>
                                                                                                                                                                                                        <span class="box"></span> No </label>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                    </div>
                                                                                                                                                                                    <div class="col-md-6 did_death_div">
                                                                                                                                                                                        <div class="col-md-5">
                                                                                                                                                                                            <label class="control-label">What was the date of death?<span class="required"
                                                                                                                                                                                                aria-required="true">*</span></label>
                                                                                                                                                                                            </div>
                                                                                                                                                                                            <div class="col-md-5">
                                                                                                                                                                                                <div class="input-group date date-picker">
                                                                                                                                                                                                    <input type="text" size="16" class="form-control" placeholder="Select Date"
                                                                                                                                                                                                    name="new_york[death_date]" readonly
                                                                                                                                                                                                    value="<?php echo set_value('new_york[death_date]'); ?>">
                                                                                                                                                                                                    <span class="input-group-btn">
                                                                                                                                                                                                        <button class="btn default date-reset" type="button">
                                                                                                                                                                                                            <i class="fa fa-times"></i>
                                                                                                                                                                                                        </button>
                                                                                                                                                                                                        <button class="btn default date-set" type="button">
                                                                                                                                                                                                            <i class="fa fa-calendar"></i>
                                                                                                                                                                                                        </button>
                                                                                                                                                                                                    </span>
                                                                                                                                                                                                </div>
                                                                                                                                                                                                <?php if(isset($errors['new_york[death_date]'])): ?>
                                                                                                                                                                                                    <label class="text-danger"><?=$errors['new_york[death_date]']; ?></label>
                                                                                                                                                                                                <?php endif; ?>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                        <div class="col-md-12 did_death_div">
                                                                                                                                                                                            <div class="col-md-12">
                                                                                                                                                                                                <div class="col-md-4">
                                                                                                                                                                                                    <label class="control-label" for="info_nearest_relative">Name and address of the
                                                                                                                                                                                                        nearest relative:<span class="required" aria-required="true">*</span></label>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <div class="col-md-8">
                                                                                                                                                                                                        <textarea class="form-control"
                                                                                                                                                                                                        placeholder="Name and address of the nearest relative"
                                                                                                                                                                                                        name="new_york[info_nearest_relative]" rows="3" aria-required="true"
                                                                                                                                                                                                        aria-invalid="false"
                                                                                                                                                                                                        aria-describedby="memo-error"><?php echo set_value('new_york[info_nearest_relative]'); ?></textarea>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                    <?php if(isset($errors['new_york[info_nearest_relative]'])): ?>
                                                                                                                                                                                                        <label class="text-danger"><?=$errors['new_york[info_nearest_relative]']; ?></label>
                                                                                                                                                                                                    <?php endif; ?>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div>
                                                                                                                                                                                        <hr>
                                                                                                                                                                                        <h3 class="form-section" style="color: #4d86c4"><b>E. MEDICAL TREATMENT</b></h3>
                                                                                                                                                                                        <div class="row">
                                                                                                                                                                                            <div class="col-md-7">
                                                                                                                                                                                                <div class="col-md-8">
                                                                                                                                                                                                    <label class="control-label" for="first_treatment"><b>1.</b> What was the date of the
                                                                                                                                                                                                    employee’s first treatment?:</label>
                                                                                                                                                                                                </div>
                                                                                                                                                                                                <div class="col-md-4">
                                                                                                                                                                                                    <div class="input-group date date-picker">
                                                                                                                                                                                                        <input type="text" name="new_york[first_treatment]" placeholder="Select Date"
                                                                                                                                                                                                        size="16" class="form-control" readonly
                                                                                                                                                                                                        value="<?php echo set_value('new_york[first_treatment]'); ?>">
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
                                                                                                                                                                                                <div class="form-group form-md-radios">
                                                                                                                                                                                                    <div class="md-radio-inline">
                                                                                                                                                                                                        <div class="md-radio">
                                                                                                                                                                                                            <input type="radio" id="new_york_what_was_employee_first_treatment_option_1"
                                                                                                                                                                                                            name="new_york[first_treatment_option]" value="1" class="md-radiobtn"
                                                                                                                                                                                                            <?php echo set_checkbox('new_york[first_treatment_option]','1'); ?>>
                                                                                                                                                                                                            <label for="new_york_what_was_employee_first_treatment_option_1">
                                                                                                                                                                                                                <span></span>
                                                                                                                                                                                                                <span class="check"></span>
                                                                                                                                                                                                                <span class="box"></span>None received </label>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                            <div class="md-radio">
                                                                                                                                                                                                                <input type="radio" id="new_york_what_was_employee_first_treatment_option_2"
                                                                                                                                                                                                                name="new_york[first_treatment_option]" value="0" class="md-radiobtn"
                                                                                                                                                                                                                <?php echo set_checkbox('new_york[first_treatment_option]','0'); ?>>
                                                                                                                                                                                                                <label for="new_york_what_was_employee_first_treatment_option_2">
                                                                                                                                                                                                                    <span></span>
                                                                                                                                                                                                                    <span class="check"></span>
                                                                                                                                                                                                                    <span class="box"></span> Unknown </label>
                                                                                                                                                                                                                </div>
                                                                                                                                                                                                            </div>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                                <hr>
                                                                                                                                                                                                <div class="row">
                                                                                                                                                                                                    <div class="col-md-12">
                                                                                                                                                                                                        <div class="col-md-6">
                                                                                                                                                                                                            <label class=" control-label" for="where_receive_first_treatment"><b>2.</b> Where did
                                                                                                                                                                                                                the employee first receive first medical treatment for this injury /
                                                                                                                                                                                                            illness?</label>
                                                                                                                                                                                                        </div>
                                                                                                                                                                                                        <div class="col-md-6">
                                                                                                                                                                                                            <div class="form-group">
                                                                                                                                                                                                                <select class="form-control select2" name="new_york[where_receive_first_treatment]"
                                                                                                                                                                                                                data-placeholder="Choose a Employee First Treatment" tabindex="1">
                                                                                                                                                                                                                <option value="">Select Employee First Treatment Place</option>
                                                                                                                                                                                                                <option value="On site"
                                                                                                                                                                                                                <?php echo set_select('new_york[where_receive_first_treatment]','On site'); ?>>
                                                                                                                                                                                                            On site</option>
                                                                                                                                                                                                            <option value="Doctor’s office"
                                                                                                                                                                                                            <?php echo set_select('new_york[where_receive_first_treatment]','Doctor’s office'); ?>>
                                                                                                                                                                                                        Doctor’s office</option>
                                                                                                                                                                                                        <option value="Emergency Room"
                                                                                                                                                                                                        <?php echo set_select('new_york[where_receive_first_treatment]','Emergency Room'); ?>>
                                                                                                                                                                                                    Emergency Room</option>
                                                                                                                                                                                                    <option value="Clinical/ Hospital/ Urgent care"
                                                                                                                                                                                                    <?php echo set_select('new_york[where_receive_first_treatment]','Clinical/ Hospital/ Urgent care'); ?>>
                                                                                                                                                                                                Clinical/ Hospital/ Urgent care</option>
                                                                                                                                                                                                <option value="SLP"
                                                                                                                                                                                                <?php echo set_select('new_york[where_receive_first_treatment]','SLP'); ?>>
                                                                                                                                                                                            Hospital stay over 24 hours</option>
                                        <!-- <option value="Rehab Aide"
                                            <?php echo set_select('new_york[where_receive_first_treatment]','Rehab Aide'); ?>>
                                        Rehab Aide</option> -->
                                        <option value="Regional Manager"
                                        <?php echo set_select('new_york[where_receive_first_treatment]','Regional Manager'); ?>>
                                    Unknown</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label class="control-label">Who treated the employee and where?</label>
                        </div>
                        <div class="col-md-9">
                            <input placeholder="Who treated the employee and where?"
                            name="new_york[who_treated_where]" class="form-control" type="text"
                            value="<?php echo set_value('new_york[who_treated_where]') ?>" />
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-8">
                        <div class="col-md-7">
                            <label class=" control-label" for="is_still_treated"><b>3.</b> Is the employee still
                            being treated for this injury / illness?</label>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group form-md-radios">
                                <div class="md-radio-inline">
                                    <div class="md-radio">
                                        <input type="radio"
                                        id="new_york_is_the_employee_still_being_treated_for_this_injury_option_1"
                                        name="new_york[is_still_treated]" value="1"
                                        <?php echo set_checkbox('new_york[is_still_treated]','1'); ?>
                                        class="md-radiobtn any_one_treated_cls">
                                        <label
                                        for="new_york_is_the_employee_still_being_treated_for_this_injury_option_1">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span>Yes </label>
                                    </div>
                                    <div class="md-radio">
                                        <input type="radio"
                                        id="new_york_is_the_employee_still_being_treated_for_this_injury_option_2"
                                        name="new_york[is_still_treated]" value="0"
                                        <?php echo set_checkbox('new_york[is_still_treated]','0'); ?>
                                        class="md-radiobtn any_one_treated_cls">
                                        <label
                                        for="new_york_is_the_employee_still_being_treated_for_this_injury_option_2">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> No </label>
                                    </div>
                                    <div class="md-radio">
                                        <input type="radio"
                                        id="new_york_is_the_employee_still_being_treated_for_this_injury_option_3"
                                        name="new_york[is_still_treated]" value="2"
                                        <?php echo set_checkbox('new_york[is_still_treated]','2'); ?>
                                        class="md-radiobtn any_one_treated_cls">
                                        <label
                                        for="new_york_is_the_employee_still_being_treated_for_this_injury_option_3">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Unknown </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" id="doctore_treated_div" style="display: none">
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <label class="control-label" for="info_treate_doctor">Name and address of the
                                doctor:</label>
                            </div>
                            <div class="col-md-9">
                                <textarea class="form-control" placeholder="Name and address of the doctor"
                                name="new_york[info_treate_doctor]" rows="3" aria-required="true"
                                aria-invalid="false"
                                aria-describedby="memo-error"><?php echo set_value('new_york[info_treate_doctor]'); ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-9">
                            <label class="control-label" for="form_control_1"><b>4.</b> To your knowledge, did the
                                employee have another work-related injury to the same body part or a similar illness
                            while working for you?</label>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group form-md-radios">
                                <div class="md-radio-inline">
                                    <div class="md-radio">
                                        <input type="radio"
                                        id="new_york_to_your_knowledge_did_the_employee_have_anothre_work_related_injury_to_the_same_body_pary_or_a_similar_illness_while_working_for_you_option_1"
                                        name="new_york[did_anothre_work_injury]" value="1"
                                        <?php echo set_checkbox('new_york[did_anothre_work_injury]','1'); ?>
                                        class="md-radiobtn doctore_previos_treated_cls">
                                        <label
                                        for="new_york_to_your_knowledge_did_the_employee_have_anothre_work_related_injury_to_the_same_body_pary_or_a_similar_illness_while_working_for_you_option_1">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span>Yes </label>
                                    </div>
                                    <div class="md-radio">
                                        <input type="radio"
                                        id="new_york_to_your_knowledge_did_the_employee_have_anothre_work_related_injury_to_the_same_body_pary_or_a_similar_illness_while_working_for_you_option_2"
                                        name="new_york[did_anothre_work_injury]" value="0"
                                        <?php echo set_checkbox('new_york[did_anothre_work_injury]','0'); ?>
                                        class="md-radiobtn doctore_previos_treated_cls">
                                        <label
                                        for="new_york_to_your_knowledge_did_the_employee_have_anothre_work_related_injury_to_the_same_body_pary_or_a_similar_illness_while_working_for_you_option_2">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> No </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" id="doctore_previos_treated_div">
                        <div class="col-md-12">
                            <div class="col-md-5">
                                <label class="control-label" for="who_treated_doctor_previous">Name the doctor(s)
                                who treated the previous injuries/illnesses (if known):</label>
                            </div>
                            <div class="col-md-7">
                                <textarea class="form-control"
                                placeholder="Name the doctor(s) who treated the previous injuries/illnesses (if known):"
                                name="new_york[who_treated_doctor_previous]" rows="3" aria-required="true"
                                aria-invalid="false"
                                aria-describedby="memo-error"><?php echo set_value('new_york[who_treated_doctor_previous]'); ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <h3 class="form-section" style="color: #4d86c4"><b>F. RETURN TO WORK</b></h3>
                <div class="row">
                    <div class="col-md-7">
                        <div class="col-md-9">
                            <label class=" control-label" for="did_stop_work"><b>1.</b> Did the employee stop work
                                because of his injury/illness?<span class="required"
                                aria-required="true">*</span></label>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group form-md-radios">
                                    <div class="md-radio-inline">
                                        <div class="md-radio">
                                            <input type="radio"
                                            id="new_york_did_the_employee_stop_work_becuse_of_his_injury_option_1"
                                            name="new_york[did_stop_work]" value="1"
                                            <?php echo set_checkbox('new_york[did_stop_work]','1'); ?>
                                            class="md-radiobtn emp_stop_work_cls">
                                            <label
                                            for="new_york_did_the_employee_stop_work_becuse_of_his_injury_option_1">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>Yes </label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio"
                                            id="new_york_did_the_employee_stop_work_becuse_of_his_injury_option_2"
                                            name="new_york[did_stop_work]" value="0"
                                            <?php echo set_checkbox('new_york[did_stop_work]','0'); ?>class="md-radiobtn emp_stop_work_cls">
                                            <label
                                            for="new_york_did_the_employee_stop_work_becuse_of_his_injury_option_2">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> No </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5" id="on_what_date_div">
                            <div class="col-md-4">
                                <label class="control-label" for="work_stop_date"> On what date?<span class="required"
                                    aria-required="true">*</span></label>
                                </div>
                                <div class="col-md-8">
                                    <div class="input-group date date-picker">
                                        <input type="text" placeholder="Select Date" size="16" class="form-control"
                                        name="new_york[work_stop_date]" readonly
                                        value="<?php echo set_value('new_york[work_stop_date]'); ?>" id="new_york_what_date2">
                                        <span class="input-group-btn">
                                            <button class="btn default date-reset" type="button">
                                                <i class="fa fa-times"></i>
                                            </button>
                                            <button class="btn default date-set" type="button">
                                                <i class="fa fa-calendar"></i>
                                            </button>
                                        </span>
                                    </div>
                                    <p class="min_date_error error" style="display:none">This date should be less than from What date</p>
                                    <p class="same_date error" style="display:none">You cannot select same date</p>
                                    <?php if(isset($errors['new_york[work_stop_date]'])): ?>
                                        <label class="text-danger"><?=$errors['new_york[work_stop_date]']; ?></label>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="col-md-7">
                                    <label class=" control-label" for="has_return_to_work"><b>2.</b> Has the employee
                                    returned to work?</label>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-md-radios">
                                        <div class="md-radio-inline">
                                            <div class="md-radio">
                                                <input type="radio" id="new_york_has_the_employee_returned_to_work_option_1"
                                                name="new_york[has_return_to_work]" value="1"
                                                <?php echo set_checkbox('new_york[has_return_to_work]','1'); ?>
                                                class="md-radiobtn has_emp_stop_work_cls">
                                                <label for="new_york_has_the_employee_returned_to_work_option_1">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span>Yes </label>
                                                </div>
                                                <div class="md-radio">
                                                    <input type="radio" id="new_york_has_the_employee_returned_to_work_option_2"
                                                    name="new_york[has_return_to_work]" value="0"
                                                    <?php echo set_checkbox('new_york[has_return_to_work]','0'); ?>
                                                    class="md-radiobtn has_emp_stop_work_cls">
                                                    <label for="new_york_has_the_employee_returned_to_work_option_2">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> No </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 has_emp_stop_work_div">
                                        <div class="col-md-4">
                                            <label class="control-label" for="what_date">What date:<span class="required"
                                                aria-required="true">*</span></label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="input-group date date-picker">
                                                    <input type="text" size="16" readonly placeholder="Select Date" class="form-control"
                                                    name="new_york[return_work_date]"
                                                    value="<?php echo set_value('new_york[return_work_date]'); ?>" id="new_york_what_date3">
                                                    <span class="input-group-btn">
                                                        <button class="btn default date-reset" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <button class="btn default date-set" type="button">
                                                            <i class="fa fa-calendar"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                                <p class="same_date error" style="display:none">You cannot select same date</p>
                                                <p class="max_date_error error" style="display:none">This date should be greater than from on What
                                                   <?php if(isset($errors['new_york[return_work_date]'])): ?>
                                                    <label class="text-danger"><?=$errors['new_york[return_work_date]']; ?></label>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3 has_emp_stop_work_div">
                                            <div class="form-group form-md-radios">
                                                <div class="md-radio-inline">
                                                    <div class="md-radio">
                                                        <input type="radio"
                                                        id="new_york_has_the_employee_return_to_work_dury_type_option_1"
                                                        name="new_york[employment_status]" value="1" class="md-radiobtn"
                                                        <?php echo set_checkbox('new_york[employment_status]','1'); ?>>
                                                        <label for="new_york_has_the_employee_return_to_work_dury_type_option_1">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span>Regular duty</label>
                                                        </div>
                                                        <div class="md-radio">
                                                            <input type="radio"
                                                            id="new_york_has_the_employee_return_to_work_dury_type_option_2"
                                                            name="new_york[employment_status]" value="0" class="md-radiobtn"
                                                            <?php echo set_checkbox('new_york[employment_status]','0'); ?>>
                                                            <label for="new_york_has_the_employee_return_to_work_dury_type_option_2">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Limited duty</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <h3 class="form-section" style="color: #4d86c4"><b>G. Employee’s work information on the date the
                                            injury or illness occurred</b></h3>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="col-md-5">
                                                        <label class="control-label" for="e_date_birth"><b>1.</b>Date employee was
                                                        hired:</label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div class="input-group date date-picker">
                                                            <input type="text" size="16" placeholder="Select Date" class="form-control"
                                                            name="new_york[date_hire]" readonly
                                                            value="<?php set_value('new_york[date_hire]'); ?>">
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
                                                        <label class="control-label" for="what_was_the_employee_job_title"><b>2.</b> What is
                                                            the employee's job title?<span class="required"
                                                            aria-required="true">*</span></label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input style="width: 100%!important;" name="new_york[job_title]"
                                                            placeholder="What is the employee's job title?"
                                                            class="form-control form-control-inline input-medium" size="16" type="text"
                                                            value="<?php echo set_value('new_york[job_title]'); ?>" />
                                                            <?php if(isset($errors['new_york[job_title]'])): ?>
                                                                <label class="text-danger"><?=$errors['new_york[job_title]']; ?></label>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-6">
                                                            <label class="control-label" for="what_type_activities_work"><b>3.</b> What types of
                                                                activities did the employee normally perform at work? (Attach job description
                                                                if available.)<span class="required" aria-required="true">*</span></label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <textarea class="form-control"
                                                                placeholder="What types of activities did the employee normally perform at work? (Attach job description if available.)"
                                                                name="new_york[what_type_activities_work]" rows="4" aria-required="true"
                                                                aria-invalid="false"
                                                                aria-describedby="memo-error"><?php echo set_value('new_york[what_type_activities_work]') ?></textarea>
                                                                <?php if(isset($errors['new_york[what_type_activities_work]'])): ?>
                                                                    <label class="text-danger"><?=$errors['new_york[what_type_activities_work]']; ?></label>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <h3 class="form-section" style="color: #4d86c4"><b>I. ADDITIONAL INFORMATION</b></h3>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <textarea class="form-control" placeholder="ADDITIONAL INFORMATION"
                                                            name="new_york[additional_information]" rows="5" aria-required="true"
                                                            aria-invalid="false"
                                                            aria-describedby="memo-error"><?php echo set_value('new_york[additional_information]'); ?></textarea>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <div class="form-actions right">

                                                    <!-- <button type="button" class="btn default" id="cancel_form_newyork">Cancel</button> -->
                                                    <!-- <a href="<?php echo base_url('Insurance_claim/new_york'); ?>" class="btn blue"><i class="fa fa-print"></i> Save & Print</a> -->
                                                    <button type="submit" class="btn blue" name="save_print"  formtarget="_blank" id="print_and_save"><i class="fa fa-check"></i> Save & print</button>
                                                    <button type="submit" class="btn blue"  id="new_york_submit" name="onlysave"><i class="fa fa-check"></i> Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>

