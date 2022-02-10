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
                <li><a href="#">Maryland</a><i class="fa fa-circle"></i></li>
            </ul>
        </div>
        <h1 class="page-title"> Maryland
            <!-- <small>blank page layout</small> -->
        </h1>
        <form id="maryland_form_id" action="<?php echo base_url('Insurance_manage/maryland/'.$this->uri->segment(3)); ?>" method="post" class="horizontal-form">

            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-5">
                        <label class="control-label" for="state_injury_or_illness_occurred">Day return to work :</label>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                        <input type="text" size="16" placeholder="Select Date" class="form-control" name="maryland[return_work_date]" value="<?php echo (set_value('maryland[return_work_date]') != "")?set_value('maryland[return_work_date]'):database_to_datepicker($data['return_work_date']); ?>" readonly>

                            </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-5">
                        <label class="control-label" for="state_injury_or_illness_occurred">Day missed :</label>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" class="form-control"  value="<?php echo $day_missed; ?>" name="maryland[return_work_date]" style="width: 225px;" readonly>
                            <!-- <input type="text" class="form-control"  value="<?php echo (set_value('maryland[work_stop_date]') != "")?set_value('maryland[work_stop_date]').'-'.set_value('maryland[return_work_date]'):database_to_datepicker($data['work_stop_date']).' - '.database_to_datepicker($data['return_work_date']); ?>" name="maryland[return_work_date]" style="width: 225px;" readonly> -->
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
                        <input type="text" placeholder="Claim Number" size="16" class="form-control"  name="maryland[claim_number]" value="<?php echo (set_value('maryland[claim_number]') != "")?set_value('maryland[claim_number]'):@$data['claim_number']; ?>" name="maryland[claim_number]">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-5">
                        <label class="control-label" for="state_injury_or_illness_occurred">Insurance Company :</label>
                    </div>
                    <div class="col-md-5">
                        <input type="text" placeholder="Insurance Company" size="16" class="form-control"  name="maryland[insurance_company]" value="<?php echo (set_value('maryland[insurance_company]') != "")?set_value('maryland[insurance_company]'):@$data['insurance_company']; ?>" name="maryland[insurance_company]">
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
                            <input type="text" placeholder="Select Date" size="16" class="form-control" value="<?php echo (!isset($data['addition_date']))?set_value('maryland[addition_date]',database_to_datepicker($data['created_at'])):database_to_datepicker($data['addition_date']); ?>" readonly >

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-5">
                        <label class="control-label" for="state_injury_or_illness_occurred">WC Contact Information:</label>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" placeholder="WC Information" size="16" class="form-control" name="maryland[wc_contact_info]" value="<?php echo (set_value('maryland[wc_contact_info]') != "")?set_value('maryland[wc_contact_info]'):@$data['wc_contact_info']; ?>" >
                            <!-- <input type="text" placeholder="WC Information" size="16" class="form-control" name="maryland[preparer_name]" value="<?php echo (set_value('maryland[preparer_name]') != "")?set_value('maryland[preparer_name]'):@$data['preparer_name']; ?>" name="maryland[preparer_name]"> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 10px;">
            <div class="col-md-6">
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
            </div>
            <?php //echo $data['emp_status'];exit; ?>
                <div class="col-md-6">
                    <div class="col-md-5">
                       <label class="control-label" for="state_injury_or_illness_occurred">This form is being completed by <span class="required" aria-required="true"> *</span></label>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <select class="form-control" id="question2" name="question2">
                                        <option value="0">Please Select</option>
                                        <option value="a"  <?php echo set_select('question2', 'a', ($data['question2'] == "a") ? true : ''); ?> >Injured employee</option>
                                        <option value="b"  <?php echo set_select('question2', 'b', ($data['question2'] == "b") ? true : ''); ?> >Rehab Supervisor</option>
                                        <option value="c"  <?php echo set_select('question2', 'c', ($data['question2'] == "c") ? true : ''); ?> >HR/Benefits Department”</option>
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
                            <select class="form-control"  name="maryland[status]" style="width:auto;padding:auto;">
                                <option value="0" <?php echo set_select('maryland[status]','0',($data['status'] == "0")?TRUE:''); ?>selected> Processing </option>
                                <option value="1" <?php echo set_select('maryland[status]','1',($data['status'] == "1")?TRUE:''); ?>> Pending </option>
                                <option value="2" <?php echo set_select('maryland[status]','2',($data['status'] == "2")?TRUE:''); ?>>  Submitted </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                 <?php if ($this->session->flashdata('success')) {?>
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
                                    <strong>Error!</strong> <span><?=$value?></span><br>
                                </li>
                            </ul>
                        </div>
                    <?php } ?>
                <?php } ?> -->
                <div class="tab-pane active" id="maryland">
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i> Maryland Insurance Claim
                            </div>
                        </div>
                        <div class="portlet-body form">
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
                                            <label class="col-md-3 control-label">1. Employee Name:<span class="required" aria-required="true">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control AlphabetsOnly" name="maryland[full_name]" value="<?php echo (set_value('maryland[full_name]') != "")?set_value('maryland[full_name]'):@$data['full_name']; ?>"  placeholder="Last &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; First &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Middle" autocomplete="off">
                                                 <?php if(isset($errors['maryland[full_name]'])): ?>
                                                        <label class="text-danger"><?=$errors['maryland[full_name]']; ?></label>
                                                 <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="col-md-5">
                                                <label class=" control-label" for="date_notice_provided">2. DOB: <span class="required" aria-required="true">*</span></label>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="input-group meridian_2 date">
                                                    <input type="text" placeholder="Select Date" size="16" class="form-control" value="<?php echo ($data['dob'] == "")?set_value('maryland[dob]'):database_to_datepicker($data['dob']); ?>" readonly name="maryland[dob]" id="maryaland_dob">
                                                   <!--  <span class="input-group-btn">
                                                        <button class="btn default date-reset" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <button class="btn default date-set" type="button">
                                                            <i class="fa fa-calendar"></i>
                                                        </button>
                                                    </span> -->
                                                </div>
                                                 <?php if(isset($errors['maryland[dob]'])): ?>
                                                       <label class="text-danger"><?=$errors['maryland[dob]']; ?></label>
                                                 <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label class="col-md-3 control-label" for="contact_phone_number">3. Social Security Number  : <span class="required" aria-required="true">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Enter Social Security Number" value="<?php echo ($data['social_security_num'] == "")?set_value('maryland[social_security_num]'):@$data['social_security_num']; ?>" name="maryland[social_security_num]" id="social_security_num">
                                                 <!-- <p class="why_security error" style="display:none">Please Enter Social Security</p> -->
                                             <?php if(isset($errors['maryland[social_security_num]'])): ?>
                                                <label class="text-danger"><?=$errors['maryland[social_security_num]']; ?></label>
                                             <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="col-md-5">
                                                <label class=" control-label">2. Discipline: </label>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <select class="form-control select2" name="maryland[discipline]" data-placeholder="Choose a Category" tabindex="1">
                                                    <option value="PT" <?php echo set_select('maryland[discipline]','PT',($data['discipline'] == "PT")?TRUE:''); ?>>PT</option>
                                                        <option value="PTA" <?php echo set_select('maryland[discipline]','PTA',($data['discipline'] == "PTA")?TRUE:''); ?>>PTA</option>
                                                        <option value="OT" <?php echo set_select('maryland[discipline]','OT',($data['discipline'] == "OT")?TRUE:''); ?>>OT</option>
                                                        <option value="COTA" <?php echo set_select('maryland[discipline]','COTA',($data['discipline'] == "COTA")?TRUE:''); ?>>COTA</option>
                                                        <option value="SLP" <?php echo set_select('maryland[discipline]','SLP',($data['discipline'] == "SLP")?TRUE:''); ?>>SLP</option>
                                                        <option value="Rehab Aide" <?php echo set_select('maryland[discipline]','Rehab Aide',($data['discipline'] == "Rehab Aide")?TRUE:''); ?>>Rehab Aide</option>
                                                        <option value="Regional Manager" <?php echo set_select('maryland[discipline]','Regional Manager',($data['discipline'] == "Regional Manager")?TRUE:''); ?>>Regional Manager</option>
                                                        <option value="Corporate Staff" <?php echo set_select('maryland[discipline]','Corporate Staff',($data['discipline'] == "Corporate Staff")?TRUE:''); ?>>Corporate Staff</option>
                                                    </select>
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
                                                <input placeholder="Facility Name" name="maryland[facility_name]"  class="form-control" type="text" value="<?php echo (set_value('maryland[facility_name]') != "")?set_value('maryland[facility_name]'):@$data['facility_name']; ?>" />
                                            </div>
                                             <?php if(isset($errors['maryland[facility_name]'])): ?>
                                                <label class="text-danger"><?=$errors['maryland[facility_name]']; ?></label>
                                             <?php endif; ?>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="col-md-3">
                                                <label class=" control-label">4. Date Hired:<span class="required" aria-required="true">*</span></label>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="input-group date date-picker">
                                                    <input type="text" size="16" class="form-control" name="maryland[date_hire]" placeholder="Select Date" value="<?php echo (set_value('maryland[date_hire]') != "")?set_value('maryland[date_hire]'):database_to_datepicker($data['date_hire']); ?>" readonly id="date_hire_maryaland">
                                                    <span class="input-group-btn">
                                                        <button class="btn default date-reset date_hire_maryaland" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <button class="btn default date-set" type="button">
                                                            <i class="fa fa-calendar"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                                 <?php if(isset($errors['maryland[date_hire]'])): ?>
                                                <label class="text-danger"><?=$errors['maryland[date_hire]']; ?></label>
                                             <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="col-md-5">
                                                <label class="control-label">5. State Of Hired<span class="required" aria-required="true">*</span></label>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <select class="form-control select2" name="maryland[state_injury]" data-placeholder="Choose a State of Hired" tabindex="1" id="state_maryaland">
                                                        <option value="">Select State Injury</option>
                                                        <option value="AL" <?php echo set_select('maryland[state_injury]','AL',($data['state_injury'] == "AL")?TRUE:''); ?>>Alabama</option>
                                                    <option value="AK" <?php echo set_select('maryland[state_injury]','AK',($data['state_injury'] == "AK")?TRUE:''); ?>>Alaska</option>
                                                    <option value="AZ" <?php echo set_select('maryland[state_injury]','AZ',($data['state_injury'] == "AZ")?TRUE:''); ?>>Arizona</option>
                                                    <option value="AR" <?php echo set_select('maryland[state_injury]','AR',($data['state_injury'] == "AR")?TRUE:''); ?>>Arkansas</option>
                                                    <option value="CA" <?php echo set_select('maryland[state_injury]','CA',($data['state_injury'] == "CA")?TRUE:''); ?>>California</option>
                                                    <option value="CO" <?php echo set_select('maryland[state_injury]','CO',($data['state_injury'] == "CO")?TRUE:''); ?>>Colorado</option>
                                                    <option value="CT" <?php echo set_select('maryland[state_injury]','CT',($data['state_injury'] == "CT")?TRUE:''); ?>>Connecticut</option>
                                                    <option value="DE" <?php echo set_select('maryland[state_injury]','DE',($data['state_injury'] == "DE")?TRUE:''); ?>>Delaware</option>
                                                    <option value="FL" <?php echo set_select('maryland[state_injury]','FL',($data['state_injury'] == "FL")?TRUE:''); ?>>Florida</option>
                                                    <option value="GA" <?php echo set_select('maryland[state_injury]','GA',($data['state_injury'] == "GA")?TRUE:''); ?>>Georgia</option>
                                                    <option value="HI" <?php echo set_select('maryland[state_injury]','HI',($data['state_injury'] == "HI")?TRUE:''); ?>>Hawaii</option>
                                                    <option value="ID" <?php echo set_select('maryland[state_injury]','ID',($data['state_injury'] == "ID")?TRUE:''); ?>>Idaho</option>
                                                    <option value="IL" <?php echo set_select('maryland[state_injury]','IL',($data['state_injury'] == "IL")?TRUE:''); ?>>Illinois</option>
                                                    <option value="IN" <?php echo set_select('maryland[state_injury]','IN',($data['state_injury'] == "IN")?TRUE:''); ?>>Indiana</option>
                                                    <option value="IA" <?php echo set_select('maryland[state_injury]','',($data['state_injury'] == "IA")?TRUE:''); ?>>Iowa</option>
                                                    <option value="KS" <?php echo set_select('maryland[state_injury]','KS',($data['state_injury'] == "KS")?TRUE:''); ?>>Kansas</option>
                                                    <option value="KY" <?php echo set_select('maryland[state_injury]','KY',($data['state_injury'] == "KY")?TRUE:''); ?>>Kentucky</option>
                                                    <option value="LA" <?php echo set_select('maryland[state_injury]','LA',($data['state_injury'] == "LA")?TRUE:''); ?>>Louisiana</option>
                                                    <option value="ME" <?php echo set_select('maryland[state_injury]','ME',($data['state_injury'] == "ME")?TRUE:''); ?>>Maine</option>
                                                    <option value="MD" <?php echo set_select('maryland[state_injury]','MD',($data['state_injury'] == "MD")?TRUE:''); ?>>Maryland</option>
                                                    <option value="MA" <?php echo set_select('maryland[state_injury]','MA',($data['state_injury'] == "MA")?TRUE:''); ?>>Massachusetts</option>
                                                    <option value="MI" <?php echo set_select('maryland[state_injury]','MI',($data['state_injury'] == "MI")?TRUE:''); ?>>Michigan</option>
                                                    <option value="MN" <?php echo set_select('maryland[state_injury]','MN',($data['state_injury'] == "MN")?TRUE:''); ?>>Minnesota</option>
                                                    <option value="MS" <?php echo set_select('maryland[state_injury]','MS',($data['state_injury'] == "MS")?TRUE:''); ?>>Mississippi</option>
                                                    <option value="MO" <?php echo set_select('maryland[state_injury]','MO',($data['state_injury'] == "MO")?TRUE:''); ?>>Missouri</option>
                                                    <option value="MT" <?php echo set_select('maryland[state_injury]','MT',($data['state_injury'] == "MT")?TRUE:''); ?>>Montana</option>
                                                    <option value="NE" <?php echo set_select('maryland[state_injury]','NE',($data['state_injury'] == "NE")?TRUE:''); ?>>Nebraska</option>
                                                    <option value="NV" <?php echo set_select('maryland[state_injury]','NV',($data['state_injury'] == "NV")?TRUE:''); ?>>Nevada</option>
                                                    <option value="NH" <?php echo set_select('maryland[state_injury]','NH',($data['state_injury'] == "NH")?TRUE:''); ?>>New Hampshire</option>
                                                    <option value="NJ" <?php echo set_select('maryland[state_injury]','NJ',($data['state_injury'] == "NJ")?TRUE:''); ?>>New Jersey</option>
                                                    <option value="NM" <?php echo set_select('maryland[state_injury]','NM',($data['state_injury'] == "NM")?TRUE:''); ?>>New Mexico</option>
                                                    <option value="NY" <?php echo set_select('maryland[state_injury]','NY',($data['state_injury'] == "NY")?TRUE:''); ?>>New York</option>
                                                    <option value="NC" <?php echo set_select('maryland[state_injury]','NC',($data['state_injury'] == "NC")?TRUE:''); ?>>North Carolina</option>
                                                    <option value="ND" <?php echo set_select('maryland[state_injury]','ND',($data['state_injury'] == "ND")?TRUE:''); ?>>North Dakota</option>
                                                    <option value="OH" <?php echo set_select('maryland[state_injury]','OH',($data['state_injury'] == "OH")?TRUE:''); ?>>Ohio</option>
                                                    <option value="OK" <?php echo set_select('maryland[state_injury]','OK',($data['state_injury'] == "OK")?TRUE:''); ?>>Oklahoma</option>
                                                    <option value="OR" <?php echo set_select('maryland[state_injury]','OR',($data['state_injury'] == "OR")?TRUE:''); ?>>Oregon</option>
                                                    <option value="PA" <?php echo set_select('maryland[state_injury]','PA',($data['state_injury'] == "PA")?TRUE:''); ?>>Pennsylvania</option>
                                                    <option value="RI" <?php echo set_select('maryland[state_injury]','RI',($data['state_injury'] == "RI")?TRUE:''); ?>>Rhode Island</option>
                                                    <option value="SC" <?php echo set_select('maryland[state_injury]','SC',($data['state_injury'] == "SC")?TRUE:''); ?>>South Carolina</option>
                                                    <option value="SD" <?php echo set_select('maryland[state_injury]','SD',($data['state_injury'] == "SD")?TRUE:''); ?>>South Dakota</option>
                                                    <option value="TN" <?php echo set_select('maryland[state_injury]','TN',($data['state_injury'] == "TN")?TRUE:''); ?>>Tennessee</option>
                                                    <option value="TX" <?php echo set_select('maryland[state_injury]','TX',($data['state_injury'] == "TX")?TRUE:''); ?>>Texas</option>
                                                    <option value="UT" <?php echo set_select('maryland[state_injury]','UT',($data['state_injury'] == "UT")?TRUE:''); ?>>Utah</option>
                                                    <option value="VT" <?php echo set_select('maryland[state_injury]','VT',($data['state_injury'] == "VT")?TRUE:''); ?>>Vermont</option>
                                                    <option value="VA" <?php echo set_select('maryland[state_injury]','VA',($data['state_injury'] == "VA")?TRUE:''); ?>>Virginia</option>
                                                    <option value="WA" <?php echo set_select('maryland[state_injury]','WA',($data['state_injury'] == "WA")?TRUE:''); ?>>Washington</option>
                                                    <option value="WD" <?php echo set_select('maryland[state_injury]','WD',($data['state_injury'] == "WD")?TRUE:''); ?>>Washington DC</option>
                                                    <option value="WV" <?php echo set_select('maryland[state_injury]','WV',($data['state_injury'] == "WV")?TRUE:''); ?>>West Virginia</option>
                                                    <option value="WI" <?php echo set_select('maryland[state_injury]','WI',($data['state_injury'] == "WI")?TRUE:''); ?>>Wisconsin</option>
                                                    <option value="WY" <?php echo set_select('maryland[state_injury]','WY',($data['state_injury'] == "WY")?TRUE:''); ?>>Wyoming</option>
                                                    </select>
                                                </div>
                                                 <?php if(isset($errors['maryland[state_injury]'])): ?>
                                                <label class="text-danger"><?=$errors['maryland[state_injury]']; ?></label>
                                             <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="col-md-3">
                                                <label class=" control-label">6. Address (INC Zip): <span class="required" aria-required="true">*</span></label>
                                            </div>
                                            <div class="col-md-9">
                                                <textarea class="form-control" name="maryland[address]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="House number, City, State, and ZIP"><?php echo (set_value('maryland[address]') != "")?set_value('maryland[address]'):@$data['address']; ?></textarea>
                                                 <?php if(isset($errors['maryland[address]'])): ?>
                                                <label class="text-danger"><?=$errors['maryland[address]']; ?></label>
                                             <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="col-md-5">
                                                <label class=" control-label">7. Gender:<span class="required" aria-required="true">*</span></label>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group form-md-radios">
                                                    <div class="md-radio-inline">
                                                        <div class="md-radio">
                                                            <input type="radio" id="maryland_gender_1" name="maryland[gender]" value="1" class="md-radiobtn" <?php echo set_checkbox('maryland[gender]','1',($data['gender'] == '1')?TRUE:''); ?> >
                                                            <label for="maryland_gender_1">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span>Male </label>
                                                        </div>
                                                        <div class="md-radio">
                                                            <input type="radio" id="maryland_gender_2" name="maryland[gender]" value="0" class="md-radiobtn" <?php echo set_checkbox('maryland[gender]','0',($data['gender'] == '0')?TRUE:''); ?>>
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
                                            <div class="col-md-9">
                                                <div class="form-group form-md-radios">
                                                    <div class="md-radio-inline">
                                                        <div class="md-radio">
                                                            <input type="radio" id="maryland_marital_status_option_1" name="maryland[marital_status]" value="0" class="md-radiobtn" <?php echo set_checkbox('maryland[marital_status]','0',($data['marital_status'] == '0')?TRUE:''); ?>>
                                                            <label for="maryland_marital_status_option_1">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span>UNMARRIED SINGLE / DIVORCED </label>
                                                        </div>
                                                        <div class="md-radio">
                                                            <input type="radio" id="maryland_marital_status_option_2" name="maryland[marital_status]" value="1" class="md-radiobtn" <?php echo set_checkbox('maryland[marital_status]','1',($data['marital_status'] == '1')?TRUE:''); ?>>
                                                            <label for="maryland_marital_status_option_2">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> MARRIED </label>
                                                        </div>
                                                        <div class="md-radio">
                                                            <input type="radio" id="maryland_marital_status_option_3" name="maryland[marital_status]" value="2" class="md-radiobtn" <?php echo set_checkbox('maryland[marital_status]','2',($data['marital_status'] == '2')?TRUE:''); ?>>
                                                            <label for="maryland_marital_status_option_3">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> SEPARATED </label>
                                                        </div>
                                                        <div class="md-radio">
                                                            <input type="radio" id="maryland_marital_status_option_4" name="maryland[marital_status]" value="3" class="md-radiobtn" <?php echo set_checkbox('maryland[marital_status]','3',($data['marital_status'] == '4')?TRUE:''); ?>>
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
                                        <div class="col-md-6">
                                            <div class="col-md-4">
                                                <label class="control-label">9. Occupation / Job Title: <span class="required" aria-required="true">*</span></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input placeholder="Occupation / Job Title" name="maryland[job_title]" class="form-control" type="text" value="<?php echo (set_value('maryland[job_title]') != "")?set_value('maryland[job_title]'):@$data['job_title']; ?>" />
                                                 <?php if(isset($errors['maryland[job_title]'])): ?>
                                                    <label class="text-danger"><?=$errors['maryland[job_title]']; ?></label>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                         <div class="col-md-6">
                                            <div class="col-md-6">
                                                <label class="control-label">10. Preferred Employee Email address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control email" placeholder="Preferred Employee Email address"
                                                    name="maryland[employee_email]"
                                                    value="<?php echo set_value('maryland[employee_email]'); ?>">
                                                    <!-- <p class="email-error" style="color: red; display: none;">Invalid Email</p> -->
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-md-4">
                                                <label class=" control-label">11. Employment Status:<span class="required" aria-required="true">*</span></label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group form-md-radios">
                                                    <div class="md-radio-inline">
                                                        <div class="md-radio">
                                                            <input type="radio" id="maryland_job_title_option_1" name="maryland[employment_status]" value="0" class="md-radiobtn" <?php echo set_checkbox('maryland[employment_status]','0',($data['employment_status'] == '0')?TRUE:'') ?>>
                                                            <label for="maryland_job_title_option_1">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span>Part time </label>
                                                        </div>
                                                        <div class="md-radio">
                                                            <input type="radio" id="maryland_job_title_option_2" name="maryland[employment_status]" value="1" class="md-radiobtn" <?php echo set_checkbox('maryland[employment_status]','1',($data['employment_status'] == '1')?TRUE:''); ?>>
                                                            <label for="maryland_job_title_option_2">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span>Full time </label>
                                                        </div>
                                                         <?php if(isset($errors['maryland[employment_status]'])): ?>
                                                            <label class="text-danger"><?=$errors['maryland[employment_status]']; ?></label>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-6">
                                                <label class=" control-label">12. Number of days worked each week</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input placeholder="Number of days worked each week" name="maryland[day_worked]" class="form-control" type="text" value="<?php echo (set_value('maryland[day_worked]') != "")?set_value('maryland[day_worked]'):@$data['day_worked']; ?>" id="maryaland_day_worked"/>
                                                <p id="possitive-error" style="color: red;display: none;">Please Enter number</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-md-5">
                                                <label class=" control-label">13. Full Pay for day of Injury</label>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group form-md-radios">
                                                    <div class="md-radio-inline">
                                                        <div class="md-radio">
                                                            <input type="radio" id="maryland_full_pay_for_day_of_injury_option_1" name="maryland[full_pay]" value="1" class="md-radiobtn" <?php echo set_checkbox('maryland[full_pay]','1',($data['full_pay'] == '1')?TRUE:''); ?>>
                                                            <label for="maryland_full_pay_for_day_of_injury_option_1">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span>Yes </label>
                                                        </div>
                                                        <div class="md-radio">
                                                            <input type="radio" id="maryland_full_pay_for_day_of_injury_option_2" name="maryland[full_pay]" value="0" class="md-radiobtn" <?php echo set_checkbox('maryland[full_pay]','0',($data['full_pay'] == '0')?TRUE:''); ?>>
                                                            <label for="maryland_full_pay_for_day_of_injury_option_2">
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
                                                <label class=" control-label">14. Did Salary Continue</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-md-radios">
                                                    <div class="md-radio-inline">
                                                        <div class="md-radio">
                                                            <input type="radio" id="maryland_did_salary_continue_option_1" name="maryland[did_salary_continue]" value="1" class="md-radiobtn" <?php echo set_checkbox('maryland[did_salary_continue]','1',($data['did_salary_continue'] == '1')?TRUE:''); ?>>
                                                            <label for="maryland_did_salary_continue_option_1">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span>Yes </label>
                                                        </div>
                                                        <div class="md-radio">
                                                            <input type="radio" id="maryland_did_salary_continue_option_2" name="maryland[did_salary_continue]" value="0" class="md-radiobtn" <?php echo set_checkbox('maryland[did_salary_continue]','0',($data['did_salary_continue'] == '0')?TRUE:''); ?>>
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
                                            <div class="col-md-6">
                                                <label class=" control-label">1. Time Employee Began Work :<span class="required" aria-required="true">*</span></label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group date form_meridian_datetime">
                                                    <input type="text" size="16" class="form-control" name="maryland[began_work]" placeholder="Select Time" value="<?php echo (set_value('maryland[began_work]') != "")?set_value('maryland[began_work]'):database_to_datetimepicker(@$data['began_work']); ?>" id="maryaland_began_work" readonly>
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
                                                    <input type="text" size="16" placeholder="Select Date" name="maryland[date_of_injury]" class="form-control" value="<?php echo (set_value('maryland[date_of_injury]') != "")?set_value('maryland[date_of_injury]'):@$data['date_of_injury']; ?>" readonly id="date_of_injury">
                                                    <span class="input-group-btn">
                                                        <button class="btn default date-reset date_of_injury" type="button">
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
                                            <div class="col-md-6">
                                                <label class=" control-label">3. Time of Occurrence: <span class="required" aria-required="true">*</span></label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group meridian_1 date form_meridian_datetime">
                                                    <input type="text" placeholder="Select Date Time" size="16" class="form-control" name="maryland[time_of_injury]" value="<?php echo (set_value('maryland[time_of_injury]') != "")?set_value('maryland[time_of_injury]'):database_to_datetimepicker($data['time_of_injury']); ?>" readonly>
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
                                                <label class=" control-label">4. Last Work Date: <span class="required" aria-required="true">*</span></label>
                                            </div>
                                            <div class="col-md-7">
                                            <div class="input-group date date-picker">
                                                    <input type="text" size="16" placeholder="Select Date" name="maryland[work_stop_date]" class="form-control" value="<?php echo (set_value('maryland[work_stop_date]') != "")?set_value('maryland[work_stop_date]'):database_to_datepicker($data['work_stop_date']); ?>" readonly id="last_work_date">
                                                    <span class="input-group-btn">
                                                        <button class="btn default date-reset last_work_date" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <button class="btn default date-set" type="button">
                                                            <i class="fa fa-calendar"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                                 <p class="min_date_error" style="display:none;color: red">This date should be
                                                less than from Return Work Date</p>
                                            <p class="same_date" style="display:none;color: red">You cannot select same date</p>
                                                 <?php if(isset($errors['maryland[work_stop_date]'])): ?>
                                                    <label class="text-danger"><?=$errors['maryland[work_stop_date]']; ?></label>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-md-6">
                                                <label class=" control-label">5. Date Employer Notified: <span class="required" aria-required="true">*</span></label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group date date-picker-today">
                                                    <input type="text" size="16" placeholder="Select Date" class="form-control" name="maryland[date_notified]" value="<?php echo (set_value('maryland[date_notified]') != "")?set_value('maryland[date_notified]'):@$data['date_notified']; ?>" readonly id="date_notified">
                                                    <span class="input-group-btn">
                                                        <button class="btn default date-reset date_notified" type="button">
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
                                                    <input type="text" size="16" placeholder="Select Date" class="form-control" name="maryland[date_disability_began]" value="<?php echo (set_value('maryland[date_disability_began]') != "")?set_value('maryland[date_disability_began]'):@$data['date_disability_began']; ?>" readonly id="date_disability_began">
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
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-md-6">
                                                <label class=" control-label">7. Type of Injury / Illness <span class="required" aria-required="true">*</span></label>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control select2" name="maryland[type_of_injury]" data-placeholder="Choose a Category" tabindex="1">
                                                    <option value="">Select Injury</option>
                                                    <option value="Abrasion/Laceration" <?php echo set_select('maryland[type_of_injury]','Abrasion/Laceration',($data['type_of_injury'] == "Abrasion/Laceration")?TRUE:''); ?>>Abrasion/Laceration</option>
                                                    <option value="Concussion" <?php echo set_select('maryland[type_of_injury]','Concussion',($data['type_of_injury'] == "Concussion")?TRUE:''); ?>>Concussion</option>

                                                    <option value="Dislocation" <?php echo set_select('maryland[type_of_injury]','Dislocation',($data['type_of_injury'] == "Dislocation")?TRUE:''); ?>>Dislocation</option>

                                                    <option value="Illness/Infection" <?php echo set_select('maryland[type_of_injury]','Illness/Infection',($data['type_of_injury'] == "Illness/Infection")?TRUE:''); ?>>Illness/Infection</option>

                                                    <option value="Sprain/Strain" <?php echo set_select('maryland[type_of_injury]','Sprain/Strain',($data['type_of_injury'] == "Sprain/Strain")?TRUE:''); ?>>Sprain/Strain</option>
                                                    <option value="Burn" <?php echo set_select('maryland[type_of_injury]','Burn',($data['type_of_injury'] == "Burn")?TRUE:''); ?>>Burn</option>
                                                    <option value="Contusion" <?php echo set_select('maryland[type_of_injury]','Contusion',($data['type_of_injury'] == "Contusion")?TRUE:''); ?>>Contusion</option>
                                                    <option value="Fracture" <?php echo set_select('maryland[type_of_injury]','Fracture',($data['type_of_injury'] == "Fracture")?TRUE:''); ?>>Fracture</option>
                                                    <option value="Puncture" <?php echo set_select('maryland[type_of_injury]','Puncture',($data['type_of_injury'] == "Puncture")?TRUE:''); ?>>Puncture</option>
                                                    <option value="No Apparent Injury" <?php echo set_select('maryland[type_of_injury]','No Apparent Injury',($data['type_of_injury'] == "No Apparent Injury")?TRUE:''); ?>>No Apparent Injury</option>
                                                    <option value="Other" <?php echo set_select('maryland[type_of_injury]','Other',($data['type_of_injury'] == "Other")?TRUE:''); ?>>Other</option>
                                                </select>
                                            <!-- <input placeholder="Type of Injury / Illness " name="maryland[type_of_injury]" class="form-control" type="text" value="<?php echo (set_value('maryland[type_of_injury]') != "")?set_value('maryland[type_of_injury]'):@$data['type_of_injury']; ?>" />
                                                <div class="form-control-focus"> </div> -->
                                            </div>
                                             <?php if(isset($errors['maryland[type_of_injury]'])): ?>
                                                    <label class="text-danger"><?=$errors['maryland[type_of_injury]']; ?></label>
                                                <?php endif; ?>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-5">
                                                <label class=" control-label">8. Part of Body Affected: <span class="required" aria-required="true">*</span></label>
                                            </div>
                                            <div class="col-md-7">
                                            <input placeholder="Part of Body Affected" name="maryland[part_body_affected]" class="form-control" type="text" value="<?php echo (set_value('maryland[part_body_affected]') != "")?set_value('maryland[part_body_affected]'):@$data['part_body_affected']; ?>" />
                                                <div class="form-control-focus">
                                                 <?php if(isset($errors['maryland[part_body_affected]'])): ?>
                                                    <label class="text-danger"><?=$errors['maryland[part_body_affected]']; ?></label>
                                                <?php endif; ?> </div>
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
                                                            <?php if($data['did_injury_employer_permises'] == '') { $check = "checked='checked'";} else { $check = ''; } ?>
                                                            <input type="radio" id="maryland_did_injury_employer_permises_option_1" name="maryland[did_injury_employer_permises]" value="1" class="md-radiobtn" <?php echo set_checkbox('maryland[did_injury_employer_permises]','1',($data['did_injury_employer_permises'] == '1')?TRUE:''); ?>  >
                                                            <label for="maryland_did_injury_employer_permises_option_1">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span>Yes </label>
                                                        </div>
                                                        <div class="md-radio">
                                                            <input type="radio" id="maryland_did_injury_employer_permises_option_2" name="maryland[did_injury_employer_permises]" value="0" class="md-radiobtn" <?php echo set_checkbox('maryland[did_injury_employer_permises]','0',($data['did_injury_employer_permises'] == '0')?TRUE:''); ?> <?= $check ?> >
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
                                                <label class="control-label">10. Department or Location Where Accident or Illness occurred <span class="required" aria-required="true">*</span></label>
                                            </div>
                                            <div class="col-md-7">
                                                <textarea class="form-control" name="maryland[location_where_accident]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="Department or Location Where Accident or Illness occurred"><?php echo (set_value('maryland[location_where_accident]') != "")?set_value('maryland[location_where_accident]'):@$data['location_where_accident']; ?>
                                                </textarea>
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
                                                <label class="control-label">11. ALL EQUIPMENT, MATERIALS, OR CHEMICALS EMPLOYEE WAS USING WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED <span class="required" aria-required="true">*</span></label>
                                            </div>
                                            <div class="col-md-7">
                                                <textarea class="form-control" name="maryland[equipment_meterials]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder=" ALL EQUIPMENT, MATERIALS, OR CHEMICALS EMPLOYEE WAS USING WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED"><?php echo (set_value('maryland[equipment_meterials]') != "")?set_value('maryland[equipment_meterials]'):@$data['equipment_meterials']; ?></textarea>
                                                 <?php if(isset($errors['maryland[job_title]'])): ?>
                                                    <label class="text-danger"><?=$errors['maryland[job_title]']; ?></label>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-5">
                                                <label class="control-label">12. SPECIFIC ACTIVITY THE EMPLOYEE WAS ENGAGED IN WHEN THE ACCIDENT OR ILLNESS EXPOSURE OCCURRED <span class="required" aria-required="true">*</span></label>
                                            </div>
                                            <div class="col-md-7">
                                                <textarea class="form-control" name="maryland[activity_engaed]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="SPECIFIC ACTIVITY THE EMPLOYEE WAS ENGAGED IN WHEN THE ACCIDENT OR ILLNESS EXPOSURE OCCURRED"><?php echo (set_value('maryland[activity_engaed]') != "")?set_value('maryland[activity_engaed]'):@$data['activity_engaed']; ?></textarea>
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
                                                <label class="control-label">13. WORK PROCESS THE EMPLOYEE WAS ENGAGED IN WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED <span class="required" aria-required="true">*</span></label>
                                            </div>
                                            <div class="col-md-7">
                                                <textarea class="form-control" name="maryland[work_process_emp_engade]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="WORK PROCESS THE EMPLOYEE WAS ENGAGED IN WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED"><?php echo (set_value('maryland[work_process_emp_engade]') != "")?set_value('maryland[work_process_emp_engade]'):@$data['work_process_emp_engade']; ?></textarea>
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
                                                <label class="control-label">14. HOW INJURY OR ILLNESS/ABNORMAL HEALTH CONDITION OCCURRED. DESCRIBE THE SEQUENCE OF EVENTS AND INCLUDE ANY OBJECTS OR SUBSTANCES THAT DIRECTLY INJURED THE EMPLOYEE OR MADE THE EMPLOYEE ILL <span class="required" aria-required="true">*</span></label>
                                            </div>
                                            <div class="col-md-7">
                                                <textarea class="form-control" name="maryland[how_injury_health_condition]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder=" HOW INJURY OR ILLNESS/ABNORMAL HEALTH CONDITION OCCURRED. DESCRIBE THE SEQUENCE OF EVENTS AND INCLUDE ANY OBJECTS OR SUBSTANCES THAT DIRECTLY INJURED THE EMPLOYEE OR MADE THE EMPLOYEE ILL"><?php echo (set_value('maryland[how_injury_health_condition]') != "")?set_value('maryland[how_injury_health_condition]'):@$data['how_injury_health_condition']; ?></textarea>
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
                                                    <input type="text" size="16" placeholder="Select Date" class="form-control" name="maryland[return_work_date]" value="<?php echo (set_value('maryland[return_work_date]') != "")?set_value('maryland[return_work_date]'):database_to_datepicker($data['return_work_date']); ?>" readonly id="return_work_date">
                                                    <span class="input-group-btn">
                                                        <button class="btn default date-reset return_work_date" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <button class="btn default date-set" type="button">
                                                            <i class="fa fa-calendar"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                                 <p class="max_date_error" style="display:none;color: red">This date should be
                                                greater than from on Last Work Date</p>
                                            <p class="same_date" style="display:none;color: red">You cannot select same date</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-6">
                                                <label class=" control-label">16. IF FATAL, GIVE DATE OF DEATH</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group date date-picker">
                                                    <input type="text" size="16" placeholder="Select Date" class="form-control" name="maryland[if_fatal_give_date]" value="<?php echo (set_value('maryland[if_fatal_give_date]') != "")?set_value('maryland[if_fatal_give_date]'):@$data['if_fatal_give_date']; ?>" readonly id="if_fatal_give_date">
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
                                                            <input type="radio" id="maryland_were_safeguards_option_1" name="maryland[were_safeguards]" value="1" class="md-radiobtn" <?php echo set_checkbox('maryland[were_safeguards]','1',($data['were_safeguards'] == '1')?TRUE:''); ?>>
                                                            <label for="maryland_were_safeguards_option_1">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span>Yes </label>
                                                        </div>
                                                        <div class="md-radio">
                                                            <input type="radio" id="maryland_were_safeguards_option_2" name="maryland[were_safeguards]" value="0" class="md-radiobtn" <?php echo set_checkbox('maryland[were_safeguards]','0',($data['were_safeguards'] == '0')?TRUE:''); ?>>
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
                                                            <input type="radio" id="maryland_were_they_used_option_1" name="maryland[were_they_used]" value="1" class="md-radiobtn" <?php echo set_checkbox('maryland[were_they_used]','1',($data['were_they_used'] == '1')?TRUE:''); ?>>
                                                            <label for="maryland_were_they_used_option_1">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span>Yes </label>
                                                        </div>
                                                        <div class="md-radio">
                                                            <input type="radio" id="maryland_were_they_used_option_2" name="maryland[were_they_used]" value="0" class="md-radiobtn" <?php echo set_checkbox('maryland[were_they_used]','0',($data['were_they_used'] == '0')?TRUE:''); ?>>
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
                                                <textarea class="form-control" name="maryland[physician_health_care_provider]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="PHYSICIAN/HEALTH CARE PROVIDER (NAME & ADDRESS)"><?php echo (set_value('maryland[physician_health_care_provider]') != "")?set_value('maryland[physician_health_care_provider]'):@$data['physician_health_care_provider']; ?></textarea>
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
                                                <textarea class="form-control" name="maryland[hospital_or_off_site_treatment]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="HOSPITAL OR OFF SITE TREATMENT (NAME & ADDRESS)"><?php echo (set_value('maryland[hospital_or_off_site_treatment]') != "")?set_value('maryland[hospital_or_off_site_treatment]'):@$data['hospital_or_off_site_treatment']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-md-12" style="margin: 15px;">
                                                <label class="control-label"><b>Initial Treatment</b></label>
                                            </div>
                                            <div class="md-checkbox-inline">
                                                <div class="col-md-3">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="maryland_hospital_or_off_site_treatment_checkboxs_1" name="maryland[hospital_or_off_site_treatment_checkboxs][]" value="0" class="md-check" <?php echo set_checkbox('maryland[hospital_or_off_site_treatment_checkboxs][]','0',(isset($data['hospital_or_off_site_treatment_checkboxs']) &&in_array('0', @$data['hospital_or_off_site_treatment_checkboxs']))?TRUE:'') ?>>
                                                        <label for="maryland_hospital_or_off_site_treatment_checkboxs_1">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> NO MEDICAL TREATMENT </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="maryland_hospital_or_off_site_treatment_checkboxs_2" name="maryland[hospital_or_off_site_treatment_checkboxs][]" value="1" class="md-check" <?php echo set_checkbox('maryland[hospital_or_off_site_treatment_checkboxs][]','1',(isset($data['hospital_or_off_site_treatment_checkboxs']) &&in_array('1', @$data['hospital_or_off_site_treatment_checkboxs']))?TRUE:'') ?>>
                                                        <label for="maryland_hospital_or_off_site_treatment_checkboxs_2">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> MINOR: BY EMPLOYER </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="maryland_hospital_or_off_site_treatment_checkboxs_3" name="maryland[hospital_or_off_site_treatment_checkboxs][]" value="2" class="md-check" <?php echo set_checkbox('maryland[hospital_or_off_site_treatment_checkboxs][]','2',(isset($data['hospital_or_off_site_treatment_checkboxs']) &&in_array('2', @$data['hospital_or_off_site_treatment_checkboxs']))?TRUE:'') ?>>
                                                        <label for="maryland_hospital_or_off_site_treatment_checkboxs_3">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> MINOR CLINIC/HOSP </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="maryland_hospital_or_off_site_treatment_checkboxs_4" name="maryland[hospital_or_off_site_treatment_checkboxs][]" value="3" class="md-check" <?php echo set_checkbox('maryland[hospital_or_off_site_treatment_checkboxs][]','3',(isset($data['hospital_or_off_site_treatment_checkboxs']) &&in_array('3', @$data['hospital_or_off_site_treatment_checkboxs']))?TRUE:'') ?>>
                                                        <label for="maryland_hospital_or_off_site_treatment_checkboxs_4">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> EMERGENCY CARE </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="maryland_hospital_or_off_site_treatment_checkboxs_5" name="maryland[hospital_or_off_site_treatment_checkboxs][]" value="4" class="md-check" <?php echo set_checkbox('maryland[hospital_or_off_site_treatment_checkboxs][]','4',(isset($data['hospital_or_off_site_treatment_checkboxs']) &&in_array('4', @$data['hospital_or_off_site_treatment_checkboxs']))?TRUE:'') ?>>
                                                        <label for="maryland_hospital_or_off_site_treatment_checkboxs_5">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> HOSPITALIZED > 24 HOURS </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="maryland_hospital_or_off_site_treatment_checkboxs_6" name="maryland[hospital_or_off_site_treatment_checkboxs][]" value="5" class="md-check" <?php echo set_checkbox('maryland[hospital_or_off_site_treatment_checkboxs][]','5',(isset($data['hospital_or_off_site_treatment_checkboxs']) && in_array('5', @$data['hospital_or_off_site_treatment_checkboxs']))?TRUE:'') ?>>
                                                        <label for="maryland_hospital_or_off_site_treatment_checkboxs_6">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> FUTURE MAJOR MEDICAL </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="maryland_hospital_or_off_site_treatment_checkboxs_7" name="maryland[hospital_or_off_site_treatment_checkboxs][]" value="6" class="md-check" <?php echo set_checkbox('maryland[hospital_or_off_site_treatment_checkboxs][]','6',(isset($data['hospital_or_off_site_treatment_checkboxs']) &&in_array('6', @$data['hospital_or_off_site_treatment_checkboxs']))?TRUE:'') ?>>
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
                                                <input placeholder="WITNESSES (NAME & PHONE #)" name="maryland[witnesses]"  class="form-control" type="text" value="<?php echo (set_value('maryland[witnesses]') != "")?set_value('maryland[witnesses]'):@$data['witnesses']; ?>" /><br>

                                                <input placeholder="WITNESSES (NAME & PHONE #)" name="maryland[witnesses_1]"  class="form-control" type="text" value="<?php echo (set_value('maryland[witnesses_1]') != "")?set_value('maryland[witnesses_1]'):@$data['witnesses_1']; ?>"/><br>

                                                <input placeholder="WITNESSES (NAME & PHONE #)" name="maryland[witnesses_2]"  class="form-control" type="text" value="<?php echo (set_value('maryland[witnesses_2]') != "")?set_value('maryland[witnesses_2]'):@$data['witnesses_2']; ?>"/>
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
                                                    <input type="text" size="16" class="form-control valid" name="maryland[date_administrator_notified]" placeholder="Select Date" value="<?php echo (set_value('maryland[date_administrator_notified]') != "")?set_value('maryland[date_administrator_notified]'):@$data['date_administrator_notified']; ?>" readonly="" aria-invalid="false" id="date_administrator_notified">
                                                    <span class="input-group-btn">
                                                        <button class="btn default date-reset date_administrator_notified" type="button">
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
                                                    <input type="text" size="16" placeholder="Select Date" class="form-control" name="maryland[date_prepared]" value="<?php echo (set_value('maryland[date_prepared]') != "")?set_value('maryland[date_prepared]'):@$data['date_prepared']; ?>" readonly id="date_prepared">
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
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-md-6">
                                                <label class=" control-label">4. PREPARER’S NAME & TITLE </label>
                                            </div>
                                            <div class="col-md-6">
                                                <input placeholder="Joyce Ginsberg" name="maryland[preparer_name]" class="form-control" type="text" value="<?php echo (set_value('maryland[preparer_name]') != "")?set_value('maryland[preparer_name]',"Joyce Ginsberg"):@$data['preparer_name']; ?>" />
                                                <div class="form-control-focus"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-5">
                                                <label class=" control-label">5. PHONE NUMBER </label>
                                            </div>
                                            <div class="col-md-7">
                                                <input name="maryland[phone_number]" class="form-control" id="phone_number" type="text" value="<?php echo (set_value('maryland[phone_number]') != "")?set_value('maryland[phone_number]'):@$data['phone_number']; ?>" />
                                                <input type="hidden" name="previous_url" id="prev_url" value="<?= current_url(); ?>" class="form-control">
                                                <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="form-actions right">
                                    <a href="<?php echo base_url('Insurance_manage/generate_maryland_pdf/'.$this->uri->segment(3));?>" style="text-decoration: none">
                                        <!-- <button type="button" class="btn default txt-btn" id="generate_maryaland_pdf" data-id="<?= $data['id'] ?>" data-state="3"><i class="fa fa-file-pdf-o"></i>Generate Pdf</button> -->
                                    </a>
                                    <a href="<?php echo base_url('Insurance_manage');?>"><button type="button" class="btn default">Cancel</a></button>
                                    <button type="submit" id="maryaland_submit" class="btn blue"><i class="fa fa-check"></i> Save</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<style type="text/css">
    .p-11{ padding: 11px; }
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
                    <span> &nbsp;&nbsp; </span>
                </div>
            </div>
    </div>
</div>
<!-- loading model -->