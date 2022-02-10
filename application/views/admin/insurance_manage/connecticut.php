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
                <li><a href="#">Connecticut</a><i class="fa fa-circle"></i></li>
            </ul>
        </div>
        <h1 class="page-title"> Connecticut
            <!-- <small>blank page layout</small> -->
        </h1>
        <form id="connecticut_form_id" action="<?php echo base_url('Insurance_manage/connecticut/'.$this->uri->segment(3)); ?>" class="horizontal-form" method="post">


        <div class="row">
            <div class="col-md-6">
                <div class="col-md-5">
                    <label class="control-label" for="state_injury_or_illness_occurred">Day return to work :</label>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <input type="text" size="16" placeholder="Select Date" class="form-control" name="connecticut[return_work_date]" value="<?php echo (set_value('connecticut[return_work_date]') != "")?set_value('connecticut[return_work_date]'):database_to_datepicker($data['return_work_date']); ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-5">
                    <label class="control-label" for="state_injury_or_illness_occurred">Day missed :</label>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <input type="text" class="form-control"  value="<?php echo $day_missed; ?>" name="connecticut[return_work_date]" style="width: 225px;" readonly>
                        <!-- <input type="text" class="form-control"  value="<?php echo (set_value('connecticut[work_stop_date]') != "")?set_value('connecticut[work_stop_date]').'-'.set_value('connecticut[return_work_date]'):database_to_datepicker($data['work_stop_date']).' - '.database_to_datepicker($data['return_work_date']); ?>" name="connecticut[return_work_date]" style="width: 225px;" readonly> -->
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
                    <input type="text" placeholder="Claim Number" size="16" class="form-control"  name="connecticut[claim_number]" value="<?php echo (set_value('connecticut[claim_number]') != "")?set_value('connecticut[claim_number]'):@$data['claim_number']; ?>" name="connecticut[claim_number]">
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-5">
                    <label class="control-label" for="state_injury_or_illness_occurred">Insurance Company :</label>
                </div>
                <div class="col-md-5">
                    <input type="text" placeholder="Insurance Company" size="16" class="form-control"  name="connecticut[insurance_company]" value="<?php echo (set_value('connecticut[insurance_company]') != "")?set_value('connecticut[insurance_company]'):@$data['insurance_company']; ?>" name="connecticut[insurance_company]">
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
                        <input type="text" placeholder="Select Date" size="16" class="form-control" value="<?php echo (!isset($data['addition_date']))?set_value('connecticut[addition_date]',database_to_datepicker($data['created_at'])):database_to_datepicker($data['addition_date']); ?>" readonly >

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-5">
                    <label class="control-label" for="state_injury_or_illness_occurred">WC Contact Information:</label>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <!-- <input type="text" placeholder="WC Information" size="16" class="form-control" name="connecticut[contact_name]" value="<?php echo (set_value('connecticut[contact_name]') != "")?set_value('connecticut[contact_name]'):@$data['contact_name']; ?>" name="connecticut[contact_name]"> -->
                        <input type="text" placeholder="WC Information" size="16" class="form-control" name="connecticut[wc_contact_info]" value="<?php echo (set_value('connecticut[wc_contact_info]') != "")?set_value('connecticut[wc_contact_info]'):@$data['wc_contact_info']; ?>" name="connecticut[wc_contact_info]">
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
                            <select class="form-control" id="question1"  name="question1">
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
                            <select class="form-control" id="question2"  name="question2">
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
                        <select class="form-control"  name="connecticut[status]" style="width:auto;padding:auto;">
                            <option value="0" <?php echo set_select('connecticut[status]','0',($data['status'] == "0")?TRUE:''); ?>selected> Processing </option>
                            <option value="1" <?php echo set_select('connecticut[status]','1',($data['status'] == "1")?TRUE:''); ?>> Pending </option>
                            <option value="2" <?php echo set_select('connecticut[status]','2',($data['status'] == "2")?TRUE:''); ?>>  Submitted </option>
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
            <div class="tab-pane active">
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i> Connecticut Insurance Claim
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="row">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-10">
                                    <h2 class="text-center"><b>EMPLOYER'S REPORT OF WORK-RELATED INJURY/ILLNESS</b></h2>
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
                                            <div class="col-md-5">
                                                <label class="control-label"><b><?php echo $i=$i+1;?>.</b> Employee Last Name :</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input value="<?php echo (set_value('connecticut[last_name]') != "")?set_value('connecticut[last_name]'):$data['last_name']; ?>" name="connecticut[last_name]" type="text" class="form-control AlphabetsOnly" placeholder="Employee Last Name" autocomplete="off">
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-md-5 control-label"><b><?php echo $i=$i+1;?>.</b>Employee First Name :</label>
                                        <div class="col-md-7">
                                            <input value="<?php echo (set_value('connecticut[first_name]') != "")?set_value('connecticut[first_name]'):$data['first_name']; ?>" name="connecticut[first_name]" type="text" class="form-control AlphabetsOnly" placeholder="Employee First Name" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-5">
                                            <label class="control-label"><b><?php echo $i=$i+1;?>.</b> Employee Middle Name :</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input value="<?php echo (set_value('connecticut[middle_name]') != "")?set_value('connecticut[middle_name]'):$data['middle_name']; ?>" name="connecticut[middle_name]" type="text" class="form-control AlphabetsOnly" placeholder="Employee Middle Name" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-5">
                                            <label class=" control-label" for="date_notice_provided"><b><?php echo $i=$i+1;?>.</b> DOB: <span class="required" aria-required="true">*</span></label>
                                        </div>
                                        <div class="col-md-7">
                                            <div class=" meridian_2 date">
                                                <input type="text" placeholder="Select Date" size="16" class="form-control" value="<?php echo (!isset($data['dob']))?set_value('connecticut[dob]'):database_to_datepicker($data['dob']); ?>" readonly name="connecticut[dob]" id="connecticut_dob">
                                               <!--  <span class="input-group-btn">
                                                    <button class="btn default date-reset" type="button">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                    <button class="btn default date-set" type="button">
                                                        <i class="fa fa-calendar"></i>
                                                    </button>
                                                </span> -->
                                            </div>
                                             <?php if (isset($errors['connecticut[dob]'])): ?>
                                            <label
                                                class="text-danger"><?=$errors['connecticut[dob]'];?></label>
                                            <?php endif;?>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="col-md-5 control-label" for="contact_phone_number"><b><?php echo $i=$i+1;?>.</b> Social Security Number : <span class="required" aria-required="true">*</span></label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" placeholder="Social Security Number" value="<?php echo ($data['social_security_num'] == "")?set_value('connecticut[social_security_num]'):$data['social_security_num']; ?>" name="connecticut[social_security_num]" id="social_security_num">
                                             <p class="why_security error" style="display:none">Please Enter Social Security</p>
                                         <?php if (isset($errors['connecticut[social_security_num]'])): ?>
                                            <label
                                                class="text-danger"><?=$errors['connecticut[social_security_num]'];?></label>
                                            <?php endif;?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-5">
                                            <label class="control-label"><b><?php echo $i=$i+1;?>.</b> Phone Number</label>
                                        </div>
                                        <div class="col-md-7">
                                             <input placeholder="Phone Number" name="connecticut[emp_phone_number]"  class="form-control" type="text" value="<?php echo (!isset($data['emp_phone_number']))?set_value('connecticut[emp_phone_number]'):$data['emp_phone_number']; ?>" id="phone_number_conne" />
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-5">
                                            <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Gender :</label>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group form-md-radios">
                                                <div class="md-radio-inline">
                                                    <div class="md-radio">
                                                        <input type="radio" id="connecticut_gender_1" name="connecticut[gender]" value="1" class="md-radiobtn" <?php echo set_checkbox('connecticut[gender]','1',($data['gender'] == "1")?TRUE:''); ?> >
                                                        <label for="connecticut_gender_1">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span>Male </label>
                                                    </div>
                                                    <div class="md-radio">
                                                        <input type="radio" id="connecticut_gender_2" name="connecticut[gender]" value="0" class="md-radiobtn" <?php echo set_checkbox('connecticut[gender]','0',($data['gender'] == "0")?TRUE:''); ?>>
                                                        <label for="connecticut_gender_2">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Female </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-5">
                                            <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Address (INC Zip): <span class="required" aria-required="true">*</span></label>
                                        </div>
                                        <div class="col-md-7">
                                            <textarea class="form-control" name="connecticut[address]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="House number, City, State, and ZIP"><?php echo (set_value('connecticut[address]') != "")?set_value('connecticut[address]'):$data['address']; ?></textarea>
                                        </div>
                                         <?php if (isset($errors['connecticut[address]'])): ?>
                                            <label
                                                class="text-danger"><?=$errors['connecticut[address]'];?></label>
                                            <?php endif;?>
                                    </div>
                                    <div class="col-md-6" style="display: none;">
                                        <div class="col-md-3">
                                            <label class=" control-label"><b>8.</b> Discipline: </label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <select class="form-control select2" name="connecticut[discipline]" data-placeholder="Choose a Discipline" tabindex="1">
                                                    <option value="">Select Discipline</option>
                                                    <option value="">Select Discipline</option>
                                                    <option value="PT" <?php echo set_select('connecticut[discipline]','PT',($data['discipline'] == "PT")?TRUE:''); ?>>PT</option>
                                                    <option value="PTA" <?php echo set_select('connecticut[discipline]','PTA',($data['discipline'] == "PTA")?TRUE:''); ?>>PTA</option>
                                                    <option value="OT" <?php echo set_select('connecticut[discipline]','OT',($data['discipline'] == "OT")?TRUE:''); ?>>OT</option>
                                                    <option value="COTA" <?php echo set_select('connecticut[discipline]','COTA',($data['discipline'] == "COTA")?TRUE:''); ?>>COTA</option>
                                                    <option value="SLP" <?php echo set_select('connecticut[discipline]','SLP',($data['discipline'] == "SLP")?TRUE:''); ?>>SLP</option>
                                                    <option value="Rehab Aide" <?php echo set_select('connecticut[discipline]','Rehab Aide',($data['discipline'] == "Rehab Aide")?TRUE:''); ?>>Rehab Aide</option>
                                                    <option value="Regional Manager" <?php echo set_select('connecticut[discipline]','Regional Manager',($data['discipline'] == "Regional Manager")?TRUE:''); ?>>Regional Manager</option>
                                                    <option value="Corporate Staff" <?php echo set_select('connecticut[discipline]','Corporate Staff',($data['discipline'] == "Corporate Staff")?TRUE:''); ?>>Corporate Staff</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row" style="display: none;">
                                    <div class="col-md-12">
                                        <div class="col-md-2">
                                            <label class="control-label"><b><?php echo $i=$i+1;?>.</b> Facility Name :</label>
                                        </div>
                                        <div class="col-md-10">
                                            <input placeholder="Facility Name" name="connecticut[facility_name]"  class="form-control" type="text" value="<?php echo (set_value('connecticut[facility_name]') != "")?set_value('connecticut[facility_name]'):$data['facility_name']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-5">
                                            <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Date Hired:<span class="required" aria-required="true">*</span></label>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="input-group date date-picker">
                                                <input type="text" size="16" class="form-control" name="connecticut[date_hire]" placeholder="Select Date" value="<?php echo (set_value('connecticut[date_hire]') != "")?set_value('connecticut[date_hire]'):database_to_datepicker($data['date_hire']); ?>" id="date_hire_conne" readonly>
                                                <span class="input-group-btn">
                                                    <button class="btn default date-reset date_hire_conne" type="button">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                    <button class="btn default date-set" type="button">
                                                        <i class="fa fa-calendar"></i>
                                                    </button>
                                                </span>
                                            </div>
                                             <?php if (isset($errors['connecticut[date_hire]'])): ?>
                                            <label
                                                class="text-danger"><?=$errors['connecticut[date_hire]'];?></label>
                                            <?php endif;?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-5">
                                            <label class="control-label"><b><?php echo $i=$i+1;?>.</b> State Of Hire<span class="required" aria-required="true">*</span></label>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <select class="form-control select2" name="connecticut[state_injury]" data-placeholder="Choose a State of Hire" tabindex="1" id="connecticut_state_of_hire">
                                                    <option value="">Select State Injury</option>
                                                <option value="AL" <?php echo set_select('connecticut[state_injury]','AL',($data['state_injury'] == "AL")?TRUE:''); ?>>Alabama</option>
                                                <option value="AK" <?php echo set_select('connecticut[state_injury]','AK',($data['state_injury'] == "AK")?TRUE:''); ?>>Alaska</option>
                                                <option value="AZ" <?php echo set_select('connecticut[state_injury]','AZ',($data['state_injury'] == "AZ")?TRUE:''); ?>>Arizona</option>
                                                <option value="AR" <?php echo set_select('connecticut[state_injury]','AR',($data['state_injury'] == "AR")?TRUE:''); ?>>Arkansas</option>
                                                <option value="CA" <?php echo set_select('connecticut[state_injury]','CA',($data['state_injury'] == "CA")?TRUE:''); ?>>California</option>
                                                <option value="CO" <?php echo set_select('connecticut[state_injury]','CO',($data['state_injury'] == "CO")?TRUE:''); ?>>Colorado</option>
                                                <option value="CT" <?php echo set_select('connecticut[state_injury]','CT',($data['state_injury'] == "CT")?TRUE:''); ?>>Connecticut</option>
                                                <option value="DE" <?php echo set_select('connecticut[state_injury]','DE',($data['state_injury'] == "DE")?TRUE:''); ?>>Delaware</option>
                                                <option value="FL" <?php echo set_select('connecticut[state_injury]','FL',($data['state_injury'] == "FL")?TRUE:''); ?>>Florida</option>
                                                <option value="GA" <?php echo set_select('connecticut[state_injury]','GA',($data['state_injury'] == "GA")?TRUE:''); ?>>Georgia</option>
                                                <option value="HI" <?php echo set_select('connecticut[state_injury]','HI',($data['state_injury'] == "HI")?TRUE:''); ?>>Hawaii</option>
                                                <option value="ID" <?php echo set_select('connecticut[state_injury]','ID',($data['state_injury'] == "ID")?TRUE:''); ?>>Idaho</option>
                                                <option value="IL" <?php echo set_select('connecticut[state_injury]','IL',($data['state_injury'] == "IL")?TRUE:''); ?>>Illinois</option>
                                                <option value="IN" <?php echo set_select('connecticut[state_injury]','IN',($data['state_injury'] == "IN")?TRUE:''); ?>>Indiana</option>
                                                <option value="IA" <?php echo set_select('connecticut[state_injury]','',($data['state_injury'] == "IA")?TRUE:''); ?>>Iowa</option>
                                                <option value="KS" <?php echo set_select('connecticut[state_injury]','KS',($data['state_injury'] == "KS")?TRUE:''); ?>>Kansas</option>
                                                <option value="KY" <?php echo set_select('connecticut[state_injury]','KY',($data['state_injury'] == "KY")?TRUE:''); ?>>Kentucky</option>
                                                <option value="LA" <?php echo set_select('connecticut[state_injury]','LA',($data['state_injury'] == "LA")?TRUE:''); ?>>Louisiana</option>
                                                <option value="ME" <?php echo set_select('connecticut[state_injury]','ME',($data['state_injury'] == "ME")?TRUE:''); ?>>Maine</option>
                                                <option value="MD" <?php echo set_select('connecticut[state_injury]','MD',($data['state_injury'] == "MD")?TRUE:''); ?>>Maryland</option>
                                                <option value="MA" <?php echo set_select('connecticut[state_injury]','MA',($data['state_injury'] == "MA")?TRUE:''); ?>>Massachusetts</option>
                                                <option value="MI" <?php echo set_select('connecticut[state_injury]','MI',($data['state_injury'] == "MI")?TRUE:''); ?>>Michigan</option>
                                                <option value="MN" <?php echo set_select('connecticut[state_injury]','MN',($data['state_injury'] == "MN")?TRUE:''); ?>>Minnesota</option>
                                                <option value="MS" <?php echo set_select('connecticut[state_injury]','MS',($data['state_injury'] == "MS")?TRUE:''); ?>>Mississippi</option>
                                                <option value="MO" <?php echo set_select('connecticut[state_injury]','MO',($data['state_injury'] == "MO")?TRUE:''); ?>>Missouri</option>
                                                <option value="MT" <?php echo set_select('connecticut[state_injury]','MT',($data['state_injury'] == "MT")?TRUE:''); ?>>Montana</option>
                                                <option value="NE" <?php echo set_select('connecticut[state_injury]','NE',($data['state_injury'] == "NE")?TRUE:''); ?>>Nebraska</option>
                                                <option value="NV" <?php echo set_select('connecticut[state_injury]','NV',($data['state_injury'] == "NV")?TRUE:''); ?>>Nevada</option>
                                                <option value="NH" <?php echo set_select('connecticut[state_injury]','NH',($data['state_injury'] == "NH")?TRUE:''); ?>>New Hampshire</option>
                                                <option value="NJ" <?php echo set_select('connecticut[state_injury]','NJ',($data['state_injury'] == "NJ")?TRUE:''); ?>>New Jersey</option>
                                                <option value="NM" <?php echo set_select('connecticut[state_injury]','NM',($data['state_injury'] == "NM")?TRUE:''); ?>>New Mexico</option>
                                                <option value="NY" <?php echo set_select('connecticut[state_injury]','NY',($data['state_injury'] == "NY")?TRUE:''); ?>>New York</option>
                                                <option value="NC" <?php echo set_select('connecticut[state_injury]','NC',($data['state_injury'] == "NC")?TRUE:''); ?>>North Carolina</option>
                                                <option value="ND" <?php echo set_select('connecticut[state_injury]','ND',($data['state_injury'] == "ND")?TRUE:''); ?>>North Dakota</option>
                                                <option value="OH" <?php echo set_select('connecticut[state_injury]','OH',($data['state_injury'] == "OH")?TRUE:''); ?>>Ohio</option>
                                                <option value="OK" <?php echo set_select('connecticut[state_injury]','OK',($data['state_injury'] == "OK")?TRUE:''); ?>>Oklahoma</option>
                                                <option value="OR" <?php echo set_select('connecticut[state_injury]','OR',($data['state_injury'] == "OR")?TRUE:''); ?>>Oregon</option>
                                                <option value="PA" <?php echo set_select('connecticut[state_injury]','PA',($data['state_injury'] == "PA")?TRUE:''); ?>>Pennsylvania</option>
                                                <option value="RI" <?php echo set_select('connecticut[state_injury]','RI',($data['state_injury'] == "RI")?TRUE:''); ?>>Rhode Island</option>
                                                <option value="SC" <?php echo set_select('connecticut[state_injury]','SC',($data['state_injury'] == "SC")?TRUE:''); ?>>South Carolina</option>
                                                <option value="SD" <?php echo set_select('connecticut[state_injury]','SD',($data['state_injury'] == "SD")?TRUE:''); ?>>South Dakota</option>
                                                <option value="TN" <?php echo set_select('connecticut[state_injury]','TN',($data['state_injury'] == "TN")?TRUE:''); ?>>Tennessee</option>
                                                <option value="TX" <?php echo set_select('connecticut[state_injury]','TX',($data['state_injury'] == "TX")?TRUE:''); ?>>Texas</option>
                                                <option value="UT" <?php echo set_select('connecticut[state_injury]','UT',($data['state_injury'] == "UT")?TRUE:''); ?>>Utah</option>
                                                <option value="VT" <?php echo set_select('connecticut[state_injury]','VT',($data['state_injury'] == "VT")?TRUE:''); ?>>Vermont</option>
                                                <option value="VA" <?php echo set_select('connecticut[state_injury]','VA',($data['state_injury'] == "VA")?TRUE:''); ?>>Virginia</option>
                                                <option value="WA" <?php echo set_select('connecticut[state_injury]','WA',($data['state_injury'] == "WA")?TRUE:''); ?>>Washington</option>
                                                <option value="WD" <?php echo set_select('connecticut[state_injury]','WD',($data['state_injury'] == "WD")?TRUE:''); ?>>Washington DC</option>
                                                <option value="WV" <?php echo set_select('connecticut[state_injury]','WV',($data['state_injury'] == "WV")?TRUE:''); ?>>West Virginia</option>
                                                <option value="WI" <?php echo set_select('connecticut[state_injury]','WI',($data['state_injury'] == "WI")?TRUE:''); ?>>Wisconsin</option>
                                                <option value="WY" <?php echo set_select('connecticut[state_injury]','WY',($data['state_injury'] == "WY")?TRUE:''); ?>>Wyoming</option>
                                                </select>
                                            </div>
                                             <?php if (isset($errors['connecticut[state_injury]'])): ?>
                                            <label
                                                class="text-danger"><?=$errors['connecticut[state_injury]'];?></label>
                                            <?php endif;?>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-5">
                                            <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Occupation / Job Title </label>
                                        </div>
                                        <div class="col-md-7">
                                            <select class="form-control select2" name="connecticut[job_title]" data-placeholder="Choose a Occupation" tabindex="1" id="connecticut_job_title">
                                                <option value="">Select Discipline</option>
                                                <option value="PT" <?php echo set_select('connecticut[job_title]','PT',(isset($data['job_title']) && $data['job_title'] == "PT")?TRUE:''); ?>>PT</option>
                                                <option value="PTA" <?php echo set_select('connecticut[job_title]','PTA',(isset($data['job_title']) && $data['job_title'] == "PTA")?TRUE:''); ?>>PTA</option>
                                                <option value="OT" <?php echo set_select('connecticut[job_title]','OT',(isset($data['job_title']) && $data['job_title'] == "OT")?TRUE:''); ?>>OT</option>
                                                <option value="COTA" <?php echo set_select('connecticut[job_title]','COTA',(isset($data['job_title']) && $data['job_title'] == "COTA")?TRUE:''); ?>>COTA</option>
                                                <option value="SLP" <?php echo set_select('connecticut[job_title]','SLP',(isset($data['job_title']) && $data['job_title'] == "SLP")?TRUE:''); ?>>SLP</option>
                                                <option value="Rehab Aide" <?php echo set_select('connecticut[job_title]','Rehab Aide',(isset($data['job_title']) && $data['job_title'] == "Rehab Aide")?TRUE:''); ?>>Rehab Aide</option>
                                                <option value="Regional Manager" <?php echo set_select('connecticut[job_title]','Regional Manager'); ?>>Regional Manager</option>
                                                <option value="Corporate Staff" <?php echo set_select('connecticut[job_title]','Corporate Staff'); ?>>Corporate Staff</option>
                                            </select>
                                           <!--  <input style="width: 100%!important;" name="connecticut[job_title]" placeholder="Occupation / job title?" class="form-control form-control-inline input-medium" size="16" type="text" value="<?php echo (set_value('connecticut[job_title]') != "")?set_value('connecticut[job_title]'):$data['job_title']; ?>" /> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-5">
                                            <label class=" control-label"><b><?php echo $i=$i+1;?>.</b>Rate of Pay : <span class="required" aria-required="true">*</span></label>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <select class="form-control select2" name="connecticut[rate_of_pay]" data-placeholder="Choose a Rate of pay" tabindex="1" id="connecticut_rate_of_pay">
                                                    <option value="">Select Rate of Pay </option>
                                                    <option value="Hour" <?php echo set_select('connecticut[rate_of_pay]','Hour',(isset($data['rate_of_pay']) && $data['rate_of_pay'] == "Hour")?TRUE:''); ?>>Hour</option>
                                                    <option value="Day" <?php echo set_select('connecticut[rate_of_pay]','Day',(isset($data['rate_of_pay']) && $data['rate_of_pay'] == "Day")?TRUE:''); ?>>Day</option>
                                                    <option value="Week" <?php echo set_select('connecticut[rate_of_pay]','Week',(isset($data['rate_of_pay']) && $data['rate_of_pay'] == "Week")?TRUE:''); ?>>Week</option>
                                                    <option value="Bi-Weekly" <?php echo set_select('connecticut[rate_of_pay]','Bi-Weekly',(isset($data['rate_of_pay']) &&$data['rate_of_pay'] == "Bi-Weekly")?TRUE:''); ?>>Bi-Weekly</option>
                                                    <option value="Other" <?php echo set_select('connecticut[rate_of_pay]','Other',(isset($data['rate_of_pay']) && $data['rate_of_pay'] == "Other")?TRUE:''); ?>>Other</option>
                                                </select>
                                            </div>
                                             <?php if (isset($errors['connecticut[rate_of_pay]'])): ?>
                                            <label
                                                class="text-danger"><?=$errors['connecticut[rate_of_pay]'];?></label>
                                            <?php endif;?>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-5">
                                            <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Date of Injury :</label>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="input-group date date-picker">
                                                <input type="text" size="16" placeholder="Select Date" name="connecticut[date_of_injury]" class="form-control" value="<?php echo (set_value('connecticut[date_of_injury]') != "")?set_value('connecticut[date_of_injury]'):$data['date_of_injury']; ?>" readonly id="date_of_injury">
                                                <span class="input-group-btn">
                                                    <button class="btn default date-reset date_of_injury" type="button">
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
                                            <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Town of Injury / Illness :</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input placeholder="Town of Injury / Illness" name="connecticut[town_of_injury]" class="form-control" type="text" value="<?php echo (set_value('connecticut[town_of_injury]') != "")?set_value('connecticut[town_of_injury]'):$data['town_of_injury']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-5">
                                            <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Time Employee Began Work :</label>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="input-group date form_meridian_datetime">
                                                <input type="text" size="16" placeholder="Select Date" class="form-control" name="connecticut[began_work]" value="<?php echo (set_value('connecticut[began_work]')!='')?set_value('connecticut[began_work]'):database_to_datetimepicker(@$data['began_work']);?>" readonly id="connecticut_began_work">
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
                                            <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Time of Occurrence </label>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="input-group meridian_1 date form_meridian_datetime">
                                                <input type="text" size="16" class="form-control" name="connecticut[time_of_injury]" placeholder="Select Date Time" value="<?php echo (set_value('connecticut[time_of_injury]') != "")?set_value('connecticut[time_of_injury]'):database_to_datetimepicker($data['time_of_injury']); ?>" readonly>
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
                                            <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Date Employer Notified </label>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="input-group date date-picker-today">
                                                <input type="text" size="16" placeholder="Select Date" class="form-control" name="connecticut[date_notified]" value="<?php echo (set_value('connecticut[date_notified]') != "")?set_value('connecticut[date_notified]'):@$data['date_notified']; ?>" readonly id="date_notified">
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
                                    <div class="col-md-6">
                                        <div class="col-md-5">
                                            <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Date Disability Began </label>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="input-group date date-picker">
                                                <input type="text" size="16" placeholder="Select Date" class="form-control" name="connecticut[date_disability_began]" value="<?php echo (set_value('connecticut[date_disability_began]') != "")?set_value('connecticut[date_disability_began]'):$data['date_disability_began']; ?>" readonly id="date_disability_began">
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
                                    <div  class="col-md-6">
                                        <div class="col-md-5">
                                            <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Last Work Date </label>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="input-group date date-picker">
                                                <input type="text" size="16" placeholder="Select Date" name="connecticut[work_stop_date]" class="form-control" value="<?php echo (set_value('connecticut[work_stop_date]') != "")?set_value('connecticut[work_stop_date]'):database_to_datepicker($data['work_stop_date']); ?>" readonly id="last_work_date_conne">
                                                <span class="input-group-btn">
                                                    <button class="btn default date-reset last_work_date_conne" type="button">
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
                                    <div class="col-md-6">
                                        <div class="col-md-5">
                                            <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> DATE RETURN(ED) TO WORK</label>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="input-group date date-picker">
                                                <input type="text" size="16" placeholder="Select Date" class="form-control" name="connecticut[return_work_date]" value="<?php echo (set_value('connecticut[return_work_date]') != "")?set_value('connecticut[return_work_date]'):database_to_datepicker($data['return_work_date']); ?>" readonly id="return_work_date_connecticut">
                                                <span class="input-group-btn">
                                                    <button class="btn default date-reset return_work_date_connecticut" type="button">
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
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-5">
                                            <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> If fatal, Date of death</label>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="input-group date date-picker">
                                                <input type="text" size="16" placeholder="Select Date" class="form-control" name="connecticut[if_fatal_give_date]" value="<?php echo (set_value('connecticut[if_fatal_give_date]') != "")?set_value('connecticut[if_fatal_give_date]'):$data['if_fatal_give_date']; ?>" readonly id="if_fatal_give_date">
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
                                    <div class="col-md-12">
                                        <div class="col-md-5">
                                            <label class="control-label"><b><?php echo $i=$i+1;?>.</b> ALL EQUIPMENT, MATERIALS, OR CHEMICALS EMPLOYEE WAS USING WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED </label>
                                        </div>
                                        <div class="col-md-7">
                                            <textarea class="form-control" name="connecticut[equipment_meterials]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="ALL EQUIPMENT, MATERIALS, OR CHEMICALS EMPLOYEE WAS USING WHEN ACCIDENT OR ILLNESS EXPOSURE OCCURRED"><?php echo (set_value('connecticut[equipment_meterials]') != "")?set_value('connecticut[equipment_meterials]'):$data['equipment_meterials']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-5">
                                            <label class="control-label"><b><?php echo $i=$i+1;?>.</b> SPECIFIC ACTIVITY THE EMPLOYEE WAS ENGAGED IN WHEN THE ACCIDENT OR ILLNESS EXPOSURE OCCURRED </label>
                                        </div>
                                        <div class="col-md-7">
                                            <textarea class="form-control" name="connecticut[activity_engaed]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="SPECIFIC ACTIVITY THE EMPLOYEE WAS ENGAGED IN WHEN THE ACCIDENT OR ILLNESS EXPOSURE OCCURRED"><?php echo (set_value('connecticut[activity_engaed]') != "")?set_value('connecticut[activity_engaed]'):$data['activity_engaed']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-5">
                                            <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Did Injury / Illness / Exposure occur on employer’s premises?<span class="required" aria-required="true">*</span></label>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group form-md-radios">
                                                    <div class="md-radio-inline">
                                                        <div class="md-radio">
                                                            <?php if($data['did_injury_employer_permises'] == '') { $check = "checked='checked'";} else { $check = ''; } ?>
                                                            <input type="radio" id="connecticut_did_injury_employer_permises_option_1" name="connecticut[did_injury_employer_permises]" value="1" class="md-radiobtn" <?php echo set_checkbox('connecticut[did_injury_employer_permises]','1',($data['did_injury_employer_permises'] == "1")? TRUE : '') ?>  >
                                                            <label for="connecticut_did_injury_employer_permises_option_1">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span>Yes </label>
                                                        </div>
                                                        <div class="md-radio">

                                                            <input type="radio" id="connecticut_did_injury_employer_permises_option_2" name="connecticut[did_injury_employer_permises]" value="0" class="md-radiobtn" <?php echo set_checkbox('connecticut[did_injury_employer_permises]','0',($data['did_injury_employer_permises'] == "0")?TRUE:''); ?> <?= $check ?> >
                                                            <label for="connecticut_did_injury_employer_permises_option_2">
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
                                            <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Type of Injury / Illness </label>
                                        </div>
                                        <div class="col-md-7">
                                            <select class="form-control select2" name="connecticut[type_of_injury]" data-placeholder="Choose a Type of Injury" id="connecticut_type_injury" tabindex="1">
                                                <option value="">Select Injury</option>
                                                <option value="Abrasion/Laceration" <?php echo set_select('connecticut[type_of_injury]','Abrasion/Laceration',($data['type_of_injury']=="Abrasion/Laceration")?TRUE:''); ?>>Abrasion/Laceration</option>

                                                <option value="Concussion" <?php echo set_select('connecticut[type_of_injury]','Concussion',($data['type_of_injury']=="Concussion")?TRUE:''); ?>>Concussion</option>

                                                <option value="Dislocation" <?php echo set_select('connecticut[type_of_injury]','Dislocation',($data['type_of_injury']=="Dislocation")?TRUE:''); ?>>Dislocation</option>

                                                <option value="Illness/Infection" <?php echo set_select('connecticut[type_of_injury]','Illness/Infection',($data['type_of_injury']=="Illness/Infection")?TRUE:''); ?>>Illness/Infection</option>

                                                <option value="Sprain/Strain" <?php echo set_select('connecticut[type_of_injury]','Sprain/Strain',($data['type_of_injury']=="Sprain/Strain")?TRUE:''); ?>>Sprain/Strain</option>

                                                <option value="Burn" <?php echo set_select('connecticut[type_of_injury]','Burn',($data['type_of_injury']=="Burn")?TRUE:''); ?>>Burn</option>

                                                <option value="Contusion" <?php echo set_select('connecticut[type_of_injury]','Contusion'),($data['type_of_injury']=="Contusion")?TRUE:''; ?>>Contusion</option>

                                                <option value="Fracture" <?php echo set_select('connecticut[type_of_injury]','Fracture'),($data['type_of_injury']=="Fracture")?TRUE:''; ?>>Fracture</option>

                                                <option value="Puncture" <?php echo set_select('connecticut[type_of_injury]','Puncture'),($data['type_of_injury']=="Puncture")?TRUE:''; ?>>Puncture</option>

                                                <option value="No Apparent Injury" <?php echo set_select('connecticut[type_of_injury]','No Apparent Injury',($data['type_of_injury']=="No Apparent Injury")?TRUE:''); ?>>No Apparent Injury</option>

                                                <option value="Other" <?php echo set_select('connecticut[type_of_injury]','Other',($data['type_of_injury']=='Other')?TRUE:''); ?>>Other</option>
                                            </select>
                                            <!-- <input placeholder="Type of Injury / Illness " name="connecticut[type_of_injury]" class="form-control" type="text" value="<?php echo (set_value('connecticut[type_of_injury]') != "")?set_value('connecticut[type_of_injury]'):$data['type_of_injury']; ?>" /> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-5">
                                            <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Part of Body Affected </label>
                                        </div>
                                        <div class="col-md-7">
                                            <textarea class="form-control" name="connecticut[part_body_affected]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="Part of body affected"><?php echo (set_value('connecticut[part_body_affected]') != "")?set_value('connecticut[part_body_affected]'):@$data['part_body_affected']; ?></textarea>
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
                                                        <input type="radio" id="connecticut_if_provided_option_1" name="connecticut[if_provided]" value="1" class="md-radiobtn" <?php echo set_checkbox('connecticut[if_provided]','1',($data['were_safeguards']=="1")?TRUE:''); ?>>
                                                        <label for="connecticut_if_provided_option_1">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span>Yes </label>
                                                    </div>
                                                    <div class="md-radio">
                                                        <input type="radio" id="connecticut_if_provided_option_2" name="connecticut[if_provided]" value="0" class="md-radiobtn" <?php echo set_checkbox('connecticut[if_provided]','0',($data['were_safeguards']=="0")?TRUE:''); ?>>
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
                                    <div class="col-md-12">
                                        <div class="col-md-5">
                                            <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> Were safeguards or safety equipment provided?</label>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-md-radios">
                                                <div class="md-radio-inline">
                                                    <div class="md-radio">
                                                        <input type="radio" id="connecticut_were_safeguards_option_1" name="connecticut[were_safeguards]" value="1" class="md-radiobtn" <?php echo set_checkbox('connecticut[were_safeguards]','1',($data['were_safeguards'] == "1")?TRUE:''); ?>>
                                                        <label for="connecticut_were_safeguards_option_1">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span>Yes </label>
                                                    </div>
                                                    <div class="md-radio">
                                                        <input type="radio" id="connecticut_were_safeguards_option_2" name="connecticut[were_safeguards]" value="0" class="md-radiobtn" <?php echo set_checkbox('connecticut[were_safeguards]','0',($data['were_safeguards'] == "0")?TRUE:''); ?>>
                                                        <label for="connecticut_were_safeguards_option_2">
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
                                            <label class="control-label"><b><?php echo $i=$i+1;?>.</b> How injury / illness occurred – describe the sequences of events, including any object or substances that directly injured the employee or made the employee il </label>
                                        </div>
                                        <div class="col-md-7">
                                            <textarea class="form-control" name="connecticut[how_injury_health_condition]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="How injury / illness occurred – describe the sequences of events, including any object or substances that directly injured the employee or made the employee il"><?php echo (set_value('connecticut[how_injury_health_condition]') != "")?set_value('connecticut[how_injury_health_condition]'):$data['how_injury_health_condition']; ?></textarea>
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
                                            <textarea class="form-control" name="connecticut[physician_health_care_provider]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="PHYSICIAN/HEALTH CARE PROVIDER (NAME & ADDRESS)"><?php echo (set_value('connecticut[physician_health_care_provider]') != "")?set_value('connecticut[physician_health_care_provider]'):$data['physician_health_care_provider']; ?></textarea>
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
                                            <textarea class="form-control" name="connecticut[hospital_address]" rows="3" aria-required="true" aria-invalid="false" aria-describedby="memo-error" placeholder="House number, City, State, and ZIP"><?php echo (set_value('connecticut[hospital_address]') != "")?set_value('connecticut[hospital_address]'):$data['hospital_address']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-2">
                                            <label class="control-label"><b> <?php echo $i=$i+1;?>.</b> Initial treatment </label>
                                        </div>
                                        <div class="col-md-10" >
                                            <div class="md-checkbox-inline" id="checkbox-msg">
                                                <div class="col-md-4">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="hospital_or_off_site_treatment_checkboxs_1" name="connecticut[hospital_or_off_site_treatment_checkboxs][]" value="0" class="md-check" <?php echo set_checkbox('connecticut[hospital_or_off_site_treatment_checkboxs][]','0',(in_array('0',$data['hospital_or_off_site_treatment_checkboxs']))?TRUE:''); ?>>
                                                        <label for="hospital_or_off_site_treatment_checkboxs_1">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> No Medical treatment </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="hospital_or_off_site_treatment_checkboxs_2" name="connecticut[hospital_or_off_site_treatment_checkboxs][]" value="1" class="md-check" <?php echo set_checkbox('connecticut[hospital_or_off_site_treatment_checkboxs][]','1',(in_array('1',$data['hospital_or_off_site_treatment_checkboxs']))?TRUE:''); ?>>
                                                        <label for="hospital_or_off_site_treatment_checkboxs_2">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Minor – by employer </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="hospital_or_off_site_treatment_checkboxs_3" name="connecticut[hospital_or_off_site_treatment_checkboxs][]" value="2" class="md-check" <?php echo set_checkbox('connecticut[hospital_or_off_site_treatment_checkboxs][]','2',(in_array('2',$data['hospital_or_off_site_treatment_checkboxs']))?TRUE:''); ?>>
                                                        <label for="hospital_or_off_site_treatment_checkboxs_3">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Minor – by clinic / hospital </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="hospital_or_off_site_treatment_checkboxs_4" name="connecticut[hospital_or_off_site_treatment_checkboxs][]" value="3" class="md-check" <?php echo set_checkbox('connecticut[hospital_or_off_site_treatment_checkboxs][]','3',(in_array('3',$data['hospital_or_off_site_treatment_checkboxs']))?TRUE:''); ?>>
                                                        <label for="hospital_or_off_site_treatment_checkboxs_4">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Emergency care </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="hospital_or_off_site_treatment_checkboxs_5" name="connecticut[hospital_or_off_site_treatment_checkboxs][]" value="4" class="md-check" <?php echo set_checkbox('connecticut[hospital_or_off_site_treatment_checkboxs][]','4',(in_array('4',$data['hospital_or_off_site_treatment_checkboxs']))?TRUE:''); ?>>
                                                        <label for="hospital_or_off_site_treatment_checkboxs_5">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Hospitalized more than 24 hours </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="hospital_or_off_site_treatment_checkboxs_6" name="connecticut[hospital_or_off_site_treatment_checkboxs][]" value="5" class="md-check" <?php echo set_checkbox('connecticut[hospital_or_off_site_treatment_checkboxs][]','5',(in_array('5',$data['hospital_or_off_site_treatment_checkboxs']))?TRUE:''); ?>>
                                                        <label for="hospital_or_off_site_treatment_checkboxs_6">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Future major medical – Lost time anticipated  </label>
                                                    </div>
                                                </div>
                                            </div>
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
                                            <input placeholder="Joyce Ginsberg" name="connecticut[contact_name]" class="form-control" type="text" value="<?php echo (set_value('connecticut[contact_name]') != "")?set_value('connecticut[contact_name]','Joyce Ginsberg'):$data['contact_name']; ?>" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-6">
                                            <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> PHONE NUMBER </label>
                                        </div>
                                        <div class="col-md-6">
                                            <input placeholder="(732) 987-3817" name="connecticut[phone_number]" class="form-control" type="text" value="<?php echo (set_value('connecticut[phone_number]') != "")?set_value('connecticut[phone_number]','(732) 987-3817'):$data['phone_number']; ?>" id="phone_number_sec" />
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
                                                <input type="text" size="16" class="form-control valid" name="connecticut[date_administrator_notified]" placeholder="Select Date" value="<?php echo (set_value('connecticut[date_administrator_notified]') != "")?set_value('connecticut[date_administrator_notified]'):$data['date_administrator_notified']; ?>" readonly aria-invalid="false" id="date_administrator_notified">

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
                                        <div class="col-md-6">
                                            <label class=" control-label"><b><?php echo $i=$i+1;?>.</b> DATE PREPARED </label>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="input-group date date-picker-today">
                                                <input type="text" size="16" placeholder="Select Date" class="form-control" name="connecticut[date_prepared]" value="<?php echo (set_value('connecticut[date_prepared]') != "")?set_value('connecticut[date_prepared]'):$data['date_prepared']; ?>" readonly id="date_prepared">
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
                                            <label class=" control-label"><b><?php echo $i=$i+1;?>.</b>Preparer’s Name & Title</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input placeholder="Joyce Ginsberg" name="connecticut[preparer_name]" class="form-control" type="text" value="<?php echo (set_value('connecticut[preparer_name]') != "")?set_value('connecticut[preparer_name]','Joyce Ginsberg'):$data['preparer_name']; ?>" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-6">
                                            <label class="control-label"><b><?php echo $i=$i+1;?>.</b> Preferred Employee Email address</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control email_emp" placeholder="Preferred Employee Email address"
                                                name="connecticut[employee_email]"
                                                value="<?php echo (set_value('connecticut[employee_email]') != "")?set_value('connecticut[employee_email]'):@$data['employee_email']; ?>">
                                                <input type="hidden" name="previous_url" id="prev_url" value="<?= current_url(); ?>" class="form-control">
                                                <p class="email-error" style="color: red; display: none;">Invalid Email</p>
                                        </div>
                                    </div>
                            </div>
                            <div class="form-actions right">
                                <a href="<?php echo base_url('Insurance_manage/generate_connecticut_pdf/'.$this->uri->segment(3));?>" style="text-decoration: none">
                                <!-- <button type="button" class="btn default txt-btn" id="generate_connecticut_pdf" data-id="<?= $data['id'] ?>" data-state="4"><i class="fa fa-file-pdf-o"></i>Generate Pdf</a></button> -->
                                <a href="<?php echo base_url('Insurance_manage');?>"><button type="button" class="btn default">Cancel</a></button>
                                <button type="submit" class="btn blue" id="connecticut_submit"><i class="fa fa-check"></i> Save</button>
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