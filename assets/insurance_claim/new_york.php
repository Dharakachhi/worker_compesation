<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
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
                <li><a href="#">New York</a><i class="fa fa-circle"></i></li>
                <!-- <li><span>Page Layouts</span></li> -->
            </ul>
        </div>
        <form id="new_york_form_id"
            action="<?php echo base_url('Insurance_manage/new_york/' . $this->uri->segment(3)); ?>"
            class="horizontal-form" method="post">
            <h1 class="page-title"> New York Claim
                <!-- <small>blank page layout</small> -->
            </h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-5">
                        <label class="control-label" for="state_injury_or_illness_occurred">Day return to work
                            :</label>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" size="16" placeholder="Select Date" class="form-control"
                                name="new_york[return_work_date]"
                                value="<?php echo (set_value('new_york[return_work_date]') != "") ? set_value('new_york[return_work_date]') : database_to_datepicker($data['return_work_date']); ?>"
                                readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-5">
                        <label class="control-label" for="state_injury_or_illness_occurred">Day missed
                            :</label>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <!-- <input type="text" class="form-control" value="<?php echo (set_value('new_york[work_stop_date]') != "") ? set_value('new_york[work_stop_date]') . '-' . set_value('new_york[return_work_date]') : database_to_datepicker($data['work_stop_date']) . ' - ' . database_to_datepicker($data['return_work_date']); ?>" name="new_york[return_work_date]" style="width: 225px;" readonly> -->
                            <input type="text" class="form-control" value="<?=$day_missed?>"
                                name="new_york[return_work_date]" style="width: 225px;" readonly>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-5">
                        <label class="control-label" for="state_injury_or_illness_occurred">Claim Number
                            :</label>
                    </div>
                    <div class="col-md-5">
                        <input type="text" placeholder="Claim Number" size="16" class="form-control"
                            name="new_york[claim_number]"
                            value="<?php echo (set_value('new_york[claim_number]') != "") ? set_value('new_york[claim_number]') : @$data['claim_number']; ?>"
                            name="new_york[claim_number]">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-5">
                        <label class="control-label" for="state_injury_or_illness_occurred">Insurance Company
                            :</label>
                    </div>
                    <div class="col-md-5">
                        <input type="text" placeholder="Insurance Company" size="16" class="form-control"
                            name="new_york[insurance_company]"
                            value="<?php echo (set_value('new_york[insurance_company]') != "") ? set_value('new_york[insurance_company]') : @$data['insurance_company']; ?>"
                            name="new_york[insurance_company]">
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 10px;">
                <div class="col-md-6">
                    <div class="col-md-5">
                        <label class="control-label" for="state_injury_or_illness_occurred">Date
                            submitted:</label>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" placeholder="Select Date" size="16" class="form-control"
                                value="<?php echo (!isset($data['addition_date'])) ? set_value('new_york[addition_date]', database_to_datepicker($data['created_at'])) : database_to_datepicker($data['addition_date']); ?>"
                                readonly>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-5">
                        <label class="control-label" for="state_injury_or_illness_occurred">WC Contact
                            Information:</label>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <!-- <input type="text" placeholder="WC Information" size="16" class="form-control" name="new_york[print_name]" value="<?php echo (set_value('new_york[print_name]') != "") ? set_value('new_york[print_name]') : @$data['print_name']; ?>" name="new_york[print_name]"> -->
                            <input type="text" placeholder="WC Information" size="16" class="form-control"
                                value="<?php echo (set_value('new_york[wc_contact_info]') != "") ? set_value('new_york[wc_contact_info]') : @$data['wc_contact_info']; ?>"
                                name="new_york[wc_contact_info]">
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
                            <select class="form-control" id="question1">
                                        <option value="0">Please Select these questions with free style space for responses</option>
                                        <option value="What action plan should be done to prevent similar incidents in the future?">a.   What action plan should be done to prevent similar incidents in the future? <br>
                                        (Determine if equipment, materials or people require additional attention). </option>
                                        <option value="What has been done thus far; take or recommend corrective action depending on your authority?">b.   What has been done thus far; take or recommend corrective action depending on your authority?</option>
                                        <option value="How will this improve operations (objective is to decrease job hindrances)?">c.  How will this improve operations (objective is to decrease job hindrances)?
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
                            <select class="form-control" id="question2">
                                        <option value="0">Please Select</option>
                                        <option value="Injured employee">a.  Injured employee</option>
                                        <option value="Rehab Supervisor">b.  Rehab Supervisor</option>
                                        <option value="HR/Benefits Department”">c.  HR/Benefits Department”</option>
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
                            <select class="form-control" name="new_york[status]" style="width:auto;padding:auto;">
                                <option value="0" <?php echo (isset($data['emp_status']) == '0') ? 'selected="selected"' : '';
//echo set_select('new_york[status]', '0', ($data['status as emp_status'] == "0") ? true : '');  ?>>
                                    Processing </option>
                                <option value="1"
                                    <?php echo set_select('new_york[status]', '1', ($data['emp_status'] == "1") ? true : ''); ?>>
                                    Pending </option>
                                <option value="2"
                                    <?php echo set_select('new_york[status]', '2', ($data['emp_status'] == "2") ? true : ''); ?>>
                                    Submitted </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid" style="margin-top: 50px;">
                 <?php if ($this->session->flashdata('success')) { ?>
                <div class="alert alert-success msg_email">
                                <button class="close" data-close="alert"></button>
                                <ul>
                                    <li>
                                        <strong>Sucess!</strong> <span>Your Message was sent</span><br>
                                    </li>
                                </ul>
                            </div>
                        <?php } ?>
                <div class="tab-pane active">
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i> New York Insurance Claim
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <h2 class="text-center"><b>EMPLOYER'S REPORT OF WORK-RELATED INJURY/ILLNESS</b></h2>
                                    <h4 class="text-center"><b><i>State of New York - Workers' Compensation
                                                Board</i></b></h4>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="form-body">
                                <h3 class="form-section" style="color: #4d86c4"><b>C. EMPLOYER INFORMATION</b></h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-6">
                                            <label class="control-label"
                                                for="state_injury_or_illness_occurred"><b><?php echo $i = $i + 1; ?>.</b>
                                                State injury or illness occurred :<span class="required"
                                                    aria-required="true"> *</span></label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="form-control select2 error" name="new_york[state_injury]"
                                                    data-placeholder="Select State Injury" tabindex="1"
                                                    id="new_york_state">
                                                    <option value="">Select State Injury</option>
                                                    <option value="AL"
                                                        <?php echo set_select('new_york[state_injury]', 'AL', ($data['state_injury'] == "AL") ? true : ''); ?>>
                                                        Alabama</option>
                                                    <option value="AK"
                                                        <?php echo set_select('new_york[state_injury]', 'AK', ($data['state_injury'] == "AK") ? true : ''); ?>>
                                                        Alaska</option>
                                                    <option value="AZ"
                                                        <?php echo set_select('new_york[state_injury]', 'AZ', ($data['state_injury'] == "AZ") ? true : ''); ?>>
                                                        Arizona</option>
                                                    <option value="AR"
                                                        <?php echo set_select('new_york[state_injury]', 'AR', ($data['state_injury'] == "AR") ? true : ''); ?>>
                                                        Arkansas</option>
                                                    <option value="CA"
                                                        <?php echo set_select('new_york[state_injury]', 'CA', ($data['state_injury'] == "CA") ? true : ''); ?>>
                                                        California</option>
                                                    <option value="CO"
                                                        <?php echo set_select('new_york[state_injury]', 'CO', ($data['state_injury'] == "CO") ? true : ''); ?>>
                                                        Colorado</option>
                                                    <option value="CT"
                                                        <?php echo set_select('new_york[state_injury]', 'CT', ($data['state_injury'] == "CT") ? true : ''); ?>>
                                                        Connecticut</option>
                                                    <option value="DE"
                                                        <?php echo set_select('new_york[state_injury]', 'DE', ($data['state_injury'] == "DE") ? true : ''); ?>>
                                                        Delaware</option>
                                                    <option value="FL"
                                                        <?php echo set_select('new_york[state_injury]', 'FL', ($data['state_injury'] == "FL") ? true : ''); ?>>
                                                        Florida</option>
                                                    <option value="GA"
                                                        <?php echo set_select('new_york[state_injury]', 'GA', ($data['state_injury'] == "GA") ? true : ''); ?>>
                                                        Georgia</option>
                                                    <option value="HI"
                                                        <?php echo set_select('new_york[state_injury]', 'HI', ($data['state_injury'] == "HI") ? true : ''); ?>>
                                                        Hawaii</option>
                                                    <option value="ID"
                                                        <?php echo set_select('new_york[state_injury]', 'ID', ($data['state_injury'] == "ID") ? true : ''); ?>>
                                                        Idaho</option>
                                                    <option value="IL"
                                                        <?php echo set_select('new_york[state_injury]', 'IL', ($data['state_injury'] == "IL") ? true : ''); ?>>
                                                        Illinois</option>
                                                    <option value="IN"
                                                        <?php echo set_select('new_york[state_injury]', 'IN', ($data['state_injury'] == "IN") ? true : ''); ?>>
                                                        Indiana</option>
                                                    <option value="IA"
                                                        <?php echo set_select('new_york[state_injury]', '', ($data['state_injury'] == "IA") ? true : ''); ?>>
                                                        Iowa</option>
                                                    <option value="KS"
                                                        <?php echo set_select('new_york[state_injury]', 'KS', ($data['state_injury'] == "KS") ? true : ''); ?>>
                                                        Kansas</option>
                                                    <option value="KY"
                                                        <?php echo set_select('new_york[state_injury]', 'KY', ($data['state_injury'] == "KY") ? true : ''); ?>>
                                                        Kentucky</option>
                                                    <option value="LA"
                                                        <?php echo set_select('new_york[state_injury]', 'LA', ($data['state_injury'] == "LA") ? true : ''); ?>>
                                                        Louisiana</option>
                                                    <option value="ME"
                                                        <?php echo set_select('new_york[state_injury]', 'ME', ($data['state_injury'] == "ME") ? true : ''); ?>>
                                                        Maine</option>
                                                    <option value="MD"
                                                        <?php echo set_select('new_york[state_injury]', 'MD', ($data['state_injury'] == "MD") ? true : ''); ?>>
                                                        Maryland</option>
                                                    <option value="MA"
                                                        <?php echo set_select('new_york[state_injury]', 'MA', ($data['state_injury'] == "MA") ? true : ''); ?>>
                                                        Massachusetts</option>
                                                    <option value="MI"
                                                        <?php echo set_select('new_york[state_injury]', 'MI', ($data['state_injury'] == "MI") ? true : ''); ?>>
                                                        Michigan</option>
                                                    <option value="MN"
                                                        <?php echo set_select('new_york[state_injury]', 'MN', ($data['state_injury'] == "MN") ? true : ''); ?>>
                                                        Minnesota</option>
                                                    <option value="MS"
                                                        <?php echo set_select('new_york[state_injury]', 'MS', ($data['state_injury'] == "MS") ? true : ''); ?>>
                                                        Mississippi</option>
                                                    <option value="MO"
                                                        <?php echo set_select('new_york[state_injury]', 'MO', ($data['state_injury'] == "MO") ? true : ''); ?>>
                                                        Missouri</option>
                                                    <option value="MT"
                                                        <?php echo set_select('new_york[state_injury]', 'MT', ($data['state_injury'] == "MT") ? true : ''); ?>>
                                                        Montana</option>
                                                    <option value="NE"
                                                        <?php echo set_select('new_york[state_injury]', 'NE', ($data['state_injury'] == "NE") ? true : ''); ?>>
                                                        Nebraska</option>
                                                    <option value="NV"
                                                        <?php echo set_select('new_york[state_injury]', 'NV', ($data['state_injury'] == "NV") ? true : ''); ?>>
                                                        Nevada</option>
                                                    <option value="NH"
                                                        <?php echo set_select('new_york[state_injury]', 'NH', ($data['state_injury'] == "NH") ? true : ''); ?>>
                                                        New Hampshire</option>
                                                    <option value="NJ"
                                                        <?php echo set_select('new_york[state_injury]', 'NJ', ($data['state_injury'] == "NJ") ? true : ''); ?>>
                                                        New Jersey</option>
                                                    <option value="NM"
                                                        <?php echo set_select('new_york[state_injury]', 'NM', ($data['state_injury'] == "NM") ? true : ''); ?>>
                                                        New Mexico</option>
                                                    <option value="NY"
                                                        <?php echo set_select('new_york[state_injury]', 'NY', ($data['state_injury'] == "NY") ? true : ''); ?>>
                                                        New York</option>
                                                    <option value="NC"
                                                        <?php echo set_select('new_york[state_injury]', 'NC', ($data['state_injury'] == "NC") ? true : ''); ?>>
                                                        North Carolina</option>
                                                    <option value="ND"
                                                        <?php echo set_select('new_york[state_injury]', 'ND', ($data['state_injury'] == "ND") ? true : ''); ?>>
                                                        North Dakota</option>
                                                    <option value="OH"
                                                        <?php echo set_select('new_york[state_injury]', 'OH', ($data['state_injury'] == "OH") ? true : ''); ?>>
                                                        Ohio</option>
                                                    <option value="OK"
                                                        <?php echo set_select('new_york[state_injury]', 'OK', ($data['state_injury'] == "OK") ? true : ''); ?>>
                                                        Oklahoma</option>
                                                    <option value="OR"
                                                        <?php echo set_select('new_york[state_injury]', 'OR', ($data['state_injury'] == "OR") ? true : ''); ?>>
                                                        Oregon</option>
                                                    <option value="PA"
                                                        <?php echo set_select('new_york[state_injury]', 'PA', ($data['state_injury'] == "PA") ? true : ''); ?>>
                                                        Pennsylvania</option>
                                                    <option value="RI"
                                                        <?php echo set_select('new_york[state_injury]', 'RI', ($data['state_injury'] == "RI") ? true : ''); ?>>
                                                        Rhode Island</option>
                                                    <option value="SC"
                                                        <?php echo set_select('new_york[state_injury]', 'SC', ($data['state_injury'] == "SC") ? true : ''); ?>>
                                                        South Carolina</option>
                                                    <option value="SD"
                                                        <?php echo set_select('new_york[state_injury]', 'SD', ($data['state_injury'] == "SD") ? true : ''); ?>>
                                                        South Dakota</option>
                                                    <option value="TN"
                                                        <?php echo set_select('new_york[state_injury]', 'TN', ($data['state_injury'] == "TN") ? true : ''); ?>>
                                                        Tennessee</option>
                                                    <option value="TX"
                                                        <?php echo set_select('new_york[state_injury]', 'TX', ($data['state_injury'] == "TX") ? true : ''); ?>>
                                                        Texas</option>
                                                    <option value="UT"
                                                        <?php echo set_select('new_york[state_injury]', 'UT', ($data['state_injury'] == "UT") ? true : ''); ?>>
                                                        Utah</option>
                                                    <option value="VT"
                                                        <?php echo set_select('new_york[state_injury]', 'VT', ($data['state_injury'] == "VT") ? true : ''); ?>>
                                                        Vermont</option>
                                                    <option value="VA"
                                                        <?php echo set_select('new_york[state_injury]', 'VA', ($data['state_injury'] == "VA") ? true : ''); ?>>
                                                        Virginia</option>
                                                    <option value="WA"
                                                        <?php echo set_select('new_york[state_injury]', 'WA', ($data['state_injury'] == "WA") ? true : ''); ?>>
                                                        Washington</option>
                                                    <option value="WD"
                                                        <?php echo set_select('new_york[state_injury]', 'WD', ($data['state_injury'] == "WD") ? true : ''); ?>>
                                                        Washington DC</option>
                                                    <option value="WV"
                                                        <?php echo set_select('new_york[state_injury]', 'WV', ($data['state_injury'] == "WV") ? true : ''); ?>>
                                                        West Virginia</option>
                                                    <option value="WI"
                                                        <?php echo set_select('new_york[state_injury]', 'WI', ($data['state_injury'] == "WI") ? true : ''); ?>>
                                                        Wisconsin</option>
                                                    <option value="WY"
                                                        <?php echo set_select('new_york[state_injury]', 'WY', ($data['state_injury'] == "WY") ? true : ''); ?>>
                                                        Wyoming</option>
                                                </select>
                                                <?php if (isset($errors['new_york[state_injury]'])): ?>
                                                <label
                                                    class="text-danger"><?=$errors['new_york[state_injury]'];?></label>
                                                <?php endif;?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-md-4 control-label"><b><?php echo $i = $i + 1; ?>.</b>
                                            Employee Name:</label>
                                        <div class="col-md-8">
                                            <input
                                                value="<?php echo (set_value('new_york[full_name]') != "") ? set_value('new_york[full_name]') : @$data['full_name']; ?>"
                                                name="new_york[full_name]" type="text" class="form-control AlphabetsOnly"
                                                placeholder="First &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Middle &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Last" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-6">
                                            <label class=" control-label"
                                                for="date_notice_provided"><b><?php echo $i = $i + 1; ?>.</b> Date of Birth: <span
                                                    class="required" aria-required="true">*</span></label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class=" meridian_2 date ">
                                                <input type="text" placeholder="Select Date" size="16"
                                                    class="form-control"
                                                    value="<?php echo ($data['dob'] == "") ? set_value('new_york[dob]') : database_to_datepicker($data['dob']); ?>"
                                                    name="new_york[dob]" id="new_york_dob1" readonly>
                                                <?php if (isset($errors['new_york[dob]'])): ?>
                                                <label class="text-danger"><?=$errors['new_york[dob]'];?></label>
                                                <?php endif;?>
                                                <!--  <span class="input-group-btn">
                                                    <button class="btn default date-reset" type="button">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                    <button class="btn default date-set" type="button">
                                                        <i class="fa fa-calendar"></i>
                                                    </button>
                                                </span> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-4">
                                            <label class="control-label"><b><?php echo $i = $i + 1; ?>.</b> Mailing
                                                Address: <span class="required" aria-required="true">*</span></label>
                                        </div>
                                        <div class="col-md-8">
                                            <textarea placeholder="Mailing Address" class="form-control"
                                                name="new_york[address]" rows="3" aria-required="true"
                                                aria-invalid="false"
                                                aria-describedby="memo-error"><?php echo (set_value('new_york[address]') != "") ? set_value('new_york[address]') : @$data['address']; ?></textarea>
                                            <?php if (isset($errors['new_york[address]'])): ?>
                                            <label class="text-danger"><?=$errors['new_york[address]'];?></label>
                                            <?php endif;?>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="col-md-6 control-label"
                                            for="contact_phone_number"><b><?php echo $i = $i + 1; ?>.</b> Social
                                            Security Number : <span class="required"
                                                aria-required="true">*</span></label>
                                        <div class="col-md-6">
                                            <!-- <input type="text" class="form-control security" placeholder="Enter Social Security Number" value="<?php echo ($data['social_security_num'] == "") ? set_value('new_york[social_security_num]') : @$data['social_security_num']; ?>" id="social_security_num" name="new_york[social_security_num]" data-inputmask="'mask': '999-99-9999 t\\m', 'jitMasking': true, 'showMaskOnFocus': false, 'showMaskOnHover': false, 'hourFormat': '12', 'alias': 'datetime', 'nullable': true" onkeypress="return isNumberKey(event)"> -->
                                            <input type="text" class="form-control security"
                                                placeholder="Enter Social Security Number"
                                                value="<?php echo ($data['social_security_num'] == "") ? set_value('new_york[social_security_num]') : @$data['social_security_num']; ?>"
                                                id="social_security_num" name="new_york[social_security_num]">
                                            <?php if (isset($errors['new_york[social_security_num]'])): ?>
                                            <label
                                                class="text-danger"><?=$errors['new_york[social_security_num]'];?></label>
                                            <?php endif;?>
                                            <!-- <p class="why_security error" style="display:none">Please Enter Social Security</p> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-md-4 control-label"
                                            for="contact_phone_number"><b><?php echo $i = $i + 1; ?>.</b> Contact Phone
                                            Number: <span class="required" aria-required="true">*</span></label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="phone_num_newyork"
                                                pattern="^\d{10}$" placeholder="Contact Phone Number"
                                                value="<?php echo (set_value('new_york[contact_no]') != "") ? set_value('new_york[contact_no]') : @$data['contact_no']; ?>"
                                                name="new_york[contact_no]">
                                            <?php if (isset($errors['new_york[contact_no]'])): ?>
                                            <label class="text-danger"><?=$errors['new_york[contact_no]'];?></label>
                                            <?php endif;?>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-6">
                                            <label class=" control-label"
                                                for="gender"><b><?php echo $i = $i + 1; ?>.</b> Gender</label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-radios">
                                                <div class="md-radio-inline">
                                                    <div class="md-radio">
                                                        <input type="radio" id="new_york_gender_1"
                                                            name="new_york[gender]" value="1"
                                                            <?php echo set_checkbox('new_york[gender]', '1', ($data['gender'] == "1") ? true : ''); ?>
                                                            class="md-radiobtn">
                                                        <label for="new_york_gender_1">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span>Male </label>
                                                    </div>
                                                    <div class="md-radio">
                                                        <input type="radio" id="new_york_gender_2"
                                                            name="new_york[gender]" value="0"
                                                            <?php echo set_checkbox('new_york[gender]', '0', ($data['gender'] == "0") ? true : ''); ?>
                                                            class="md-radiobtn">
                                                        <label for="new_york_gender_2">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Female </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-4">
                                            <label class="control-label"
                                                for="preferred_contact_no"><b><?php echo $i = $i + 1; ?>.</b> Preferred
                                                Contact Number:</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input placeholder="Preferred Contact Number"
                                                name="new_york[preferred_contact_no]" id="contact_no"
                                                class="form-control phone_no" type="text"
                                                value="<?php echo (set_value('new_york[preferred_contact_no]') != "") ? set_value('new_york[preferred_contact_no]') : @$data['preferred_contact_no']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="col-md-6 control-label"
                                            for="preferred_email"><b><?php echo $i = $i + 1; ?>.</b> Preferred Employee
                                            Email address:</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control"
                                                placeholder="Preferred Employee Email address"
                                                name="new_york[preferred_email]"
                                                value="<?php echo (set_value('new_york[preferred_email]') != "") ? set_value('new_york[preferred_email]') : @$data['preferred_email']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-4">
                                            <label class=" control-label"
                                                for="preferred_contact"><b><?php echo $i = $i + 1; ?>.</b> Preferred
                                                contact:</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group form-md-radios">
                                                <div class="md-radio-inline">
                                                    <div class="md-radio">
                                                        <input type="radio" id="new_york_preferred_contact_1"
                                                            name="new_york[preferred_contact]" value="phone"
                                                            <?php echo set_checkbox('new_york[preferred_contact]', 'phone', ($data['preferred_contact'] == 'phone') ? true : ''); ?>
                                                            class="md-radiobtn">
                                                        <label for="new_york_preferred_contact_1">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Phone </label>
                                                    </div>
                                                    <div class="md-radio">
                                                        <input type="radio" id="new_york_preferred_contact_2"
                                                            name="new_york[preferred_contact]" value="email"
                                                            <?php echo set_checkbox('new_york[preferred_contact]', 'email', ($data['preferred_contact'] == 'email') ? true : ''); ?>
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
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-6">
                                            <label class=" control-label"><b><?php echo $i = $i + 1; ?>.</b> Discipline:
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="form-control select2" name="new_york[discipline]"
                                                    data-placeholder="Choose a Category" tabindex="1" id="discipline">
                                                    <option value="">Select Discipline</option>
                                                    <option value="PT"
                                                        <?php echo set_select('new_york[discipline]', 'PT', ($data['discipline'] == "PT") ? true : ''); ?>>
                                                        PT</option>
                                                    <option value="PTA"
                                                        <?php echo set_select('new_york[discipline]', 'PTA', ($data['discipline'] == "PTA") ? true : ''); ?>>
                                                        PTA</option>
                                                    <option value="OT"
                                                        <?php echo set_select('new_york[discipline]', 'OT', ($data['discipline'] == "OT") ? true : ''); ?>>
                                                        OT</option>
                                                    <option value="COTA"
                                                        <?php echo set_select('new_york[discipline]', 'COTA', ($data['discipline'] == "COTA") ? true : ''); ?>>
                                                        COTA</option>
                                                    <option value="SLP"
                                                        <?php echo set_select('new_york[discipline]', 'SLP', ($data['discipline'] == "SLP") ? true : ''); ?>>
                                                        SLP</option>
                                                    <option value="Rehab Aide"
                                                        <?php echo set_select('new_york[discipline]', 'Rehab Aide', ($data['discipline'] == "Rehab Aide") ? true : ''); ?>>
                                                        Rehab Aide</option>
                                                    <option value="Regional Manager"
                                                        <?php echo set_select('new_york[discipline]', 'Regional Manager', ($data['discipline'] == "Regional Manager") ? true : ''); ?>>
                                                        Regional Manager</option>
                                                    <option value="Corporate Staff"
                                                        <?php echo set_select('new_york[discipline]', 'Corporate Staff', ($data['discipline'] == "Corporate Staff") ? true : ''); ?>>
                                                        Corporate Staff</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-4">
                                            <label class="control-label"><b><?php echo $i = $i + 1; ?>.</b> Facility
                                                Name :</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input placeholder="Facility Name" name="new_york[facility_name]"
                                                class="form-control" type="text"
                                                value="<?php echo (set_value('new_york[facility_name]') != "") ? set_value('new_york[facility_name]') : @$data['facility_name']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h3 class="form-section" style="color: #4d86c4"><b>D. EMPLOYEE'S INJURY OR ILLNESS</b>
                                </h3>
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="col-md-8">
                                            <label class=" control-label"
                                                for="began_work"><b><?php echo $j = $j + 1; ?>.</b> Time of day employee
                                                began work on date of injury / illness:</label>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group meridian_1 date form_meridian_datetime"
                                                style="width: 120%;">
                                                <input type="text" size="16" placeholder="Select Date Time"
                                                    class="form-control" name="new_york[began_work]" readonly
                                                    value="<?php echo (set_value('new_york[began_work]') != "") ? set_value('new_york[began_work]') : database_to_datetimepicker(@$data['began_work']); ?>">
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
                                        <div class="col-md-5">
                                            <label class=" control-label"
                                                for="time_of_injury"><b><?php echo $j = $j + 1; ?>.</b> Time of
                                                injury/illness:</label>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="input-group meridian_2 date form_meridian_datetime">
                                                <input type="text" size="16" class="form-control"
                                                    placeholder="Select Date Time" name="new_york[time_of_injury]"
                                                    readonly
                                                    value="<?php echo (set_value('new_york[time_of_injury]') != "") ? set_value('new_york[time_of_injury]') : database_to_datetimepicker($data['time_of_injury']); ?>">
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
                                        <div class="col-md-3">
                                            <label class=" control-label"
                                                for="has_employee_notice"><b><?php echo $j = $j + 1; ?>.</b> Has the
                                                employee given you notice of injury / illness?</label>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group form-md-radios">
                                                <div class="md-radio-inline">
                                                    <div class="md-radio">
                                                        <input type="radio" id="new_york_employee_notice_1"
                                                            name="new_york[has_employee_notice]" value="1"
                                                            <?php echo set_checkbox('new_york[has_employee_notice]', '1', ($data['has_employee_notice'] == '1') ? true : ''); ?>
                                                            class="md-radiobtn employee_notice_cls">
                                                        <label for="new_york_employee_notice_1">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Yes </label>
                                                    </div>
                                                    <div class="md-radio">
                                                        <input type="radio" id="new_york_employee_notice_2"
                                                            name="new_york[has_employee_notice]" value="0"
                                                            <?php echo set_checkbox('new_york[has_employee_notice]', '0', ($data['has_employee_notice'] == '0') ? true : ''); ?>
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
                                                    <div class="md-radio" style="margin: 0px;">
                                                        <input type="radio" id="new_york_employee_notice_option_1"
                                                            name="new_york[notice_given_to]" value="orally"
                                                            <?php echo set_checkbox('new_york[notice_given_to]', 'orally', ($data['notice_given_to'] == 'orally') ? true : ''); ?>
                                                            class="md-radiobtn">
                                                        <label for="new_york_employee_notice_option_1">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Orally </label>
                                                    </div>
                                                    <div class="md-radio">
                                                        <input type="radio" id="new_york_employee_notice_option_2"
                                                            name="new_york[notice_given_to]" value="writing"
                                                            <?php echo set_checkbox('new_york[notice_given_to]', 'writing', ($data['notice_given_to'] == 'writing') ? true : ''); ?>
                                                            class="md-radiobtn">
                                                        <label for="new_york_employee_notice_option_2">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Writing </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 date_notice_yesdiv" style="display: none">
                                            <div class="col-md-5">
                                                <label class=" control-label" for="date_notice_provided">Date notice
                                                    provided:</label>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="input-group meridian_2 date date-picker">
                                                    <input type="text" placeholder="Select Date" size="16"
                                                        class="form-control"
                                                        value="<?php echo (set_value('new_york[notice_date]') != "") ? set_value('new_york[notice_date]') : @$data['notice_date']; ?>"
                                                        readonly name="new_york[notice_date]">
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
                                            <label class=" control-label"
                                                for="given_claimant_information"><b><?php echo $j = $j + 1; ?>.</b> Have
                                                you given the employee a Claimant Information Packet? </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group form-md-radios">
                                            <div class="md-radio-inline">
                                                <div class="md-radio">
                                                    <input type="radio"
                                                        id="new_york_employee_claimant_information_packet_option_1"
                                                        name="new_york[given_claimant_information]" value="1"
                                                        class="md-radiobtn climant_info_cls"
                                                        <?php echo set_checkbox('new_york[given_claimant_information]', '1', ($data['given_claimant_information'] == "1") ? true : ''); ?>>
                                                    <label for="new_york_employee_claimant_information_packet_option_1">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Yes </label>
                                                </div>
                                                <div class="md-radio">
                                                    <input type="radio"
                                                        id="new_york_employee_claimant_information_packet_option_2"
                                                        name="new_york[given_claimant_information]" value="0"
                                                        class="md-radiobtn climant_info_cls"
                                                        <?php echo set_checkbox('new_york[given_claimant_information]', '0', ($data['given_claimant_information'] == "0") ? true : ''); ?>>
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
                                            <label class="control-label" for="where_did_the_injury_illness_happne">Date
                                                given</label>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="input-group date date-picker">
                                                <input type="text" size="16" readonly placeholder="Select Date"
                                                    class="form-control"
                                                    value="<?php echo (set_value('new_york[given_claimant_information_date]') != "") ? set_value('new_york[given_claimant_information_date]') : @$data['given_claimant_information_date']; ?>"
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
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <label class="control-label"
                                                for="where_did_the_injury_illness_happne"><b><?php echo $j = $j + 1; ?>.</b>
                                                Where did the injury / illness happen (e.g. 1 Main ST Portersville, at
                                                the front door)?</label>
                                        </div>
                                        <div class="col-md-6">
                                            <textarea
                                                placeholder="Where did the injury / illness happen (e.g. 1 Main ST Portersville, at the front door)"
                                                class="form-control" name="new_york[where_did_the_injury]" rows="3"
                                                aria-required="true" aria-invalid="false"
                                                aria-describedby="memo-error"><?php echo (set_value('new_york[where_did_the_injury]') != "") ? set_value('new_york[where_did_the_injury]') : @$data['where_did_the_injury']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-3">
                                            <label class="control-label"
                                                for="employee_claimant_information_packet_option"><b><?php echo $j = $j + 1; ?>.</b>
                                                Was this location where the employee normally worked?</label>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-md-radios">
                                                <div class="md-radio-inline">
                                                    <div class="md-radio">
                                                        <input type="radio"
                                                            id="new_york_was_this_location_where_the_emoloyee_normal_worked_option_1"
                                                            name="new_york[location_where_worked]" value="1"
                                                            <?php echo set_checkbox('new_york[location_where_worked]', '1', ($data['location_where_worked'] == "1") ? true : ''); ?>
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
                                                            <?php echo set_checkbox('new_york[location_where_worked]', '0', ($data['location_where_worked'] == "0") ? true : ''); ?>
                                                            class="md-radiobtn was_employee_work_cls">
                                                        <label
                                                            for="new_york_was_this_location_where_the_emoloyee_normal_worked_option_2">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> No </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5" id="why_was_emp_there_div">
                                            <div class="col-md-5">
                                                <label class="control-label" for="why_employee_there">Why was the
                                                    employee there?</label>
                                            </div>
                                            <div class="col-md-7">
                                                <textarea placeholder="Why was the employee there?"
                                                    class="form-control why_was_employe_text"
                                                    name="new_york[why_employee_there]" rows="3" aria-required="true"
                                                    aria-invalid="false"
                                                    aria-describedby="memo-error"><?php echo (set_value('new_york[why_employee_there]') != "") ? set_value('new_york[why_employee_there]') : @$data['why_employee_there']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="col-md-5">
                                            <label class="control-label"><b><?php echo $j = $j + 1; ?>.</b> Employee’s
                                                supervisor:</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input placeholder=" Employee’s supervisor"
                                                name="new_york[employee_supervisor]" class="form-control" type="text"
                                                value="<?php echo (set_value('new_york[employee_supervisor]') != "") ? set_value('new_york[employee_supervisor]') : @$data['employee_supervisor']; ?>" />
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="col-md-6">
                                            <label class=" control-label"
                                                for="supervisor_see_injury"><b><?php echo $j = $j + 1; ?>.</b> Did the
                                                supervisor see injury happen? </label>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group form-md-radios">
                                                <div class="md-radio-inline">
                                                    <div class="md-radio">
                                                        <input type="radio"
                                                            id="new_york_did_the_supervisor_see_injury_happen_option_1"
                                                            name="new_york[supervisor_see_injury]" value="1"
                                                            <?php echo set_checkbox('new_york[supervisor_see_injury]', '1', ($data['supervisor_see_injury'] == "1") ? true : ''); ?>
                                                            class="md-radiobtn">
                                                        <label
                                                            for="new_york_did_the_supervisor_see_injury_happen_option_1">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span>Yes </label>
                                                    </div>
                                                    <div class="md-radio">
                                                        <input type="radio"
                                                            id="new_york_did_the_supervisor_see_injury_happen_option_2"
                                                            name="new_york[supervisor_see_injury]" value="0"
                                                            <?php echo set_checkbox('new_york[supervisor_see_injury]', '0', ($data['supervisor_see_injury'] == "0") ? true : ''); ?>
                                                            class="md-radiobtn">
                                                        <label
                                                            for="new_york_did_the_supervisor_see_injury_happen_option_2">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> No </label>
                                                    </div>
                                                    <div class="md-radio">
                                                        <input type="radio"
                                                            id="new_york_did_the_supervisor_see_injury_happen_option_3"
                                                            name="new_york[supervisor_see_injury]" value="2"
                                                            <?php echo set_checkbox('new_york[supervisor_see_injury]', '2', ($data['supervisor_see_injury'] == "2") ? true : ''); ?>
                                                            class="md-radiobtn">
                                                        <label
                                                            for="new_york_did_the_supervisor_see_injury_happen_option_3">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Unknown </label>
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
                                            <label class=" control-label"
                                                for="anyone_see_injury"><b><?php echo $j = $j + 1; ?>.</b> Did anyone
                                                else see the injury happen</label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-radios">
                                                <div class="md-radio-inline">
                                                    <div class="md-radio">
                                                        <input type="radio"
                                                            id="new_york_did_the_any_see_injury_happen_option_1"
                                                            name="new_york[anyone_see_injury]" value="1"
                                                            <?php echo set_checkbox('new_york[anyone_see_injury]', '1', ($data['anyone_see_injury'] == "1") ? true : ''); ?>
                                                            class="md-radiobtn did_anyone_seen_happen_cls">
                                                        <label for="new_york_did_the_any_see_injury_happen_option_1">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span>Yes </label>
                                                    </div>
                                                    <div class="md-radio">
                                                        <input type="radio"
                                                            id="new_york_did_the_any_see_injury_happen_option_2"
                                                            name="new_york[anyone_see_injury]" value="0"
                                                            <?php echo set_checkbox('new_york[anyone_see_injury]', '0', ($data['anyone_see_injury'] == "0") ? true : ''); ?>
                                                            class="md-radiobtn did_anyone_seen_happen_cls">
                                                        <label for="new_york_did_the_any_see_injury_happen_option_2">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> No </label>
                                                    </div>
                                                    <div class="md-radio">
                                                        <input type="radio"
                                                            id="new_york_did_the_any_see_injury_happen_option_3"
                                                            name="new_york[anyone_see_injury]" value="2"
                                                            <?php echo set_checkbox('new_york[anyone_see_injury]', '2', ($data['anyone_see_injury'] == "2") ? true : ''); ?>
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
                                                aria-describedby="memo-error"><?php echo (set_value('new_york[see_injury_happen_names]') != "") ? set_value('new_york[see_injury_happen_names]') : @$data['see_injury_happen_names']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <label class="control-label"
                                                for="what_employee_doing"><b><?php echo $j = $j + 1; ?>.</b> What was
                                                the employee doing when he/she was injured or became ill? (e.g.,
                                                unloading a truck, stocking a shelf, typing annual report) Walking from
                                                her car</label>
                                        </div>
                                        <div class="col-md-6">
                                            <textarea
                                                placeholder="What was the employee doing when he/she was injured or became ill? (e.g., unloading a truck, stocking a shelf, typing annual report) Walking from her car"
                                                class="form-control" name="new_york[what_employee_doing]" rows="4"
                                                aria-required="true" aria-invalid="false"
                                                aria-describedby="memo-error"><?php echo (set_value('new_york[what_employee_doing]') != "") ? set_value('new_york[what_employee_doing]') : @$data['what_employee_doing']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <label class="control-label"
                                                for="how_did_the_injury"><b><?php echo $j = $j + 1; ?>.</b> How did the
                                                injury/illness occur? (e.g., the employee tripped over a pipe and fell
                                                on the floor)</label>
                                        </div>
                                        <div class="col-md-6">
                                            <textarea
                                                placeholder="How did the injury/illness occur? (e.g., the employee tripped over a pipe and fell on the floor)"
                                                class="form-control" name="new_york[how_did_the_injury]" rows="4"
                                                aria-required="true" aria-invalid="false"
                                                aria-describedby="memo-error"><?php echo (set_value('new_york[how_did_the_injury]') != "") ? set_value('new_york[how_did_the_injury]') : @$data['how_did_the_injury']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <label class="control-label"
                                                for="list_body_part_affected"><b><?php echo $j = $j + 1; ?>.</b> Explain
                                                fully the nature of the employee's injury/illness; list body parts
                                                affected (e.g., twisted left ankle and cut to forehead):</label>
                                        </div>
                                        <div class="col-md-6">
                                            <textarea
                                                placeholder="Explain fully the nature of the employee's injury/illness; list body parts affected (e.g., twisted left ankle and cut to forehead)"
                                                class="form-control" name="new_york[list_body_part_affected]" rows="4"
                                                aria-required="true" aria-invalid="false"
                                                aria-describedby="memo-error"><?php echo (set_value('new_york[list_body_part_affected]') != "") ? set_value('new_york[list_body_part_affected]') : @$data['list_body_part_affected']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="col-md-9">
                                            <label class=" control-label"
                                                for="was_an_object"><b><?php echo $j = $j + 1; ?>.</b> Was an object
                                                (e.g. forklift, hammer, acid) involved in the injury / illness<span
                                                    class="required" aria-required="true"> *</span> </label>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-radios">
                                                <div class="md-radio-inline">
                                                    <div class="md-radio">
                                                        <input type="radio" id="new_york_was_an_object_option_1"
                                                            name="new_york[was_an_object]" value="1"
                                                            <?php echo set_checkbox('new_york[was_an_object]', '1', ($data['was_an_object'] == "1") ? true : '') ?>
                                                            class="md-radiobtn was_an_object_cls">
                                                        <label for="new_york_was_an_object_option_1">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span>Yes </label>
                                                    </div>
                                                    <div class="md-radio">
                                                        <input type="radio" id="new_york_was_an_object_option_2"
                                                            name="new_york[was_an_object]" value="0"
                                                            <?php echo set_checkbox('new_york[was_an_object]', '0', ($data['was_an_object'] == "0") ? true : '') ?>
                                                            class="md-radiobtn was_an_object_cls">
                                                        <label for="new_york_was_an_object_option_2">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> No </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5" id="what_was_it_div">
                                        <div class="col-md-3">
                                            <label class="control-label" for="what_was_object">What was it?:</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control what_was" placeholder="What was it"
                                                name="new_york[what_was_object]"
                                                value="<?php echo (set_value('new_york[what_was_object]') != "") ? set_value('new_york[what_was_object]') : @$data['what_was_object']; ?>">
                                            <?php if (isset($errors['new_york[what_was_object]'])): ?>
                                            <label
                                                class="text-danger"><?=$errors['new_york[what_was_object]'];?></label>
                                            <?php endif;?>
                                            <!-- <p id="object-error" class="error" style="display: none;color: red">This field is required</p> -->
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <label class="control-label"
                                                for="was_the_injury_the_result_of_the_user_or_operation_of_a_licensed_moter_vehicle"><b><?php echo $j = $j + 1; ?>.</b>
                                                Was the injury the result of the user or operation of a licensed motor
                                                vehicle</label>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group form-md-radios">
                                                <div class="md-radio-inline">
                                                    <div class="md-radio">
                                                        <input type="radio" id="new_york_was_injury_by_vihicle_option_1"
                                                            name="new_york[was_the_injury_vehicle]" value="1"
                                                            <?php echo set_checkbox('new_york[was_the_injury_vehicle]', '1', ($data['was_the_injury_vehicle'] == "1") ? true : ''); ?>
                                                            class="md-radiobtn was_injury_vehicle_cls">
                                                        <label for="new_york_was_injury_by_vihicle_option_1">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span>Yes </label>
                                                    </div>
                                                    <div class="md-radio">
                                                        <input type="radio" id="new_york_was_injury_by_vihicle_option_2"
                                                            name="new_york[was_the_injury_vehicle]" value="0"
                                                            <?php echo set_checkbox('new_york[was_the_injury_vehicle]', '0', ($data['was_the_injury_vehicle'] == "0") ? true : ''); ?>
                                                            class="md-radiobtn was_injury_vehicle_cls">
                                                        <label for="new_york_was_injury_by_vihicle_option_2">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> No </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12" id="was_vehicale_div">
                                        <div class="col-md-7">
                                            <div class="col-md-3">
                                                <label class="control-label"
                                                    for="was_the_injury_the_result_of_the_user_or_operation_of_a_licensed_moter_vehicle">
                                                    Who’s vehicle </label>
                                            </div>
                                            <div class="form-group form-md-radios">
                                                <div class="md-radio-inline">
                                                    <div class="md-radio">
                                                        <input type="radio"
                                                            id="new_york_was_injury_by_vihicle_employee_option_1"
                                                            name="new_york[whos_vehicle]" value="employee_vehicle"
                                                            <?php echo set_checkbox('new_york[whos_vehicle]', 'employee_vehicle', ($data['whos_vehicle'] == "employee_vehicle") ? true : ''); ?>
                                                            class="md-radiobtn">
                                                        <label for="new_york_was_injury_by_vihicle_employee_option_1">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span>Employee's vehicle </label>
                                                    </div>
                                                    <div class="md-radio">
                                                        <input type="radio"
                                                            id="new_york_was_injury_by_vihicle_employee_option_2"
                                                            name="new_york[whos_vehicle]" value="employer_vehicle"
                                                            <?php echo set_checkbox('new_york[whos_vehicle]', 'employer_vehicle', ($data['whos_vehicle'] == "employer_vehicle") ? true : ''); ?>
                                                            class="md-radiobtn">
                                                        <label for="new_york_was_injury_by_vihicle_employee_option_2">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span>Employer's vehicle</label>
                                                    </div>
                                                    <div class="md-radio">
                                                        <input type="radio"
                                                            id="new_york_was_injury_by_vihicle_employee_option_3"
                                                            name="new_york[whos_vehicle]" value="other_vehicle"
                                                            <?php echo set_checkbox('new_york[whos_vehicle]', 'other_vehicle', ($data['whos_vehicle'] == "other_vehicle") ? true : ''); ?>
                                                            class="md-radiobtn">
                                                        <label for="new_york_was_injury_by_vihicle_employee_option_3">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span>Other vehicle</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="col-md-5">
                                                <label class="control-label">License plate number</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control"
                                                    placeholder="License plate number"
                                                    name="new_york[lincese_plate_number]"
                                                    value="<?php echo (set_value('new_york[lincese_plate_number]') != "") ? set_value('new_york[lincese_plate_number]') : @$data['lincese_plate_number']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-8">
                                            <label class=" control-label"><b><?php echo $j = $j + 1; ?>.</b> Did the
                                                injury/illness result in the employee's death?</label>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-md-radios">
                                                <div class="md-radio-inline">
                                                    <div class="md-radio">
                                                        <input type="radio"
                                                            id="new_york_did_the_injury_in_death_option_1"
                                                            name="new_york[did_the_death]" value="1"
                                                            class="md-radiobtn did_death_cls"
                                                            <?php echo set_checkbox('new_york[did_the_death]', '1', ($data['did_the_death'] == "1") ? true : '') ?>>
                                                        <label for="new_york_did_the_injury_in_death_option_1">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span>Yes </label>
                                                    </div>
                                                    <div class="md-radio">
                                                        <input type="radio"
                                                            id="new_york_did_the_injury_in_death_option_2"
                                                            name="new_york[did_the_death]" value="0"
                                                            class="md-radiobtn did_death_cls"
                                                            <?php echo set_checkbox('new_york[did_the_death]', '0', ($data['did_the_death'] == "0") ? true : '') ?>>
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
                                            <label class="control-label">What was the date of death?</label>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="input-group date date-picker">
                                                <input type="text" size="16" class="form-control"
                                                    placeholder="Select Date" name="new_york[death_date]" readonly
                                                    value="<?php echo (set_value('new_york[death_date]') != "") ? set_value('new_york[death_date]') : @$data['death_date']; ?>">
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
                                    <div class="col-md-12 did_death_div">
                                        <div class="col-md-12">
                                            <div class="col-md-4">
                                                <label class="control-label" for="info_nearest_relative">Name and
                                                    address of the nearest relative:</label>
                                            </div>
                                            <div class="col-md-8">
                                                <textarea class="form-control"
                                                    placeholder="Name and address of the nearest relative"
                                                    name="new_york[info_nearest_relative]" rows="3" aria-required="true"
                                                    aria-invalid="false"
                                                    aria-describedby="memo-error"><?php echo (set_value('new_york[info_nearest_relative]') != "") ? set_value('new_york[info_nearest_relative]') : @$data['info_nearest_relative']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h3 class="form-section" style="color: #4d86c4"><b>E. MEDICAL TREATMENT</b></h3>
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="col-md-8">
                                            <label class="control-label"
                                                for="first_treatment"><b><?php echo $k = $k + 1; ?>.</b> What was the
                                                date of the employee’s first treatment?:</label>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group date date-picker">
                                                <input type="text" name="new_york[first_treatment]"
                                                    placeholder="Select Date" size="16" class="form-control" readonly
                                                    value="<?php echo (set_value('new_york[first_treatment]') != "") ? set_value('new_york[first_treatment]') : @$data['first_treatment']; ?>">
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
                                                    <input type="radio"
                                                        id="new_york_what_was_employee_first_treatment_option_1"
                                                        name="new_york[first_treatment_option]" value="1"
                                                        class="md-radiobtn"
                                                        <?php echo set_checkbox('new_york[first_treatment_option]', '1', ($data['first_treatment_option'] == "1") ? true : ''); ?>>
                                                    <label for="new_york_what_was_employee_first_treatment_option_1">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span>None received </label>
                                                </div>
                                                <div class="md-radio">
                                                    <input type="radio"
                                                        id="new_york_what_was_employee_first_treatment_option_2"
                                                        name="new_york[first_treatment_option]" value="0"
                                                        class="md-radiobtn"
                                                        <?php echo set_checkbox('new_york[first_treatment_option]', '0', ($data['first_treatment_option'] == "0") ? true : ''); ?>>
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
                                            <label class=" control-label"
                                                for="where_receive_first_treatment"><b><?php echo $k = $k + 1; ?>.</b>
                                                Where did the employee first receive first medical treatment for this
                                                injury / illness?</label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="form-control select2"
                                                    name="new_york[where_receive_first_treatment]"
                                                    data-placeholder="Choose a First Medical Treatment" tabindex="1">
                                                    <option value="">Select Employee First Treatment Place</option>
                                                    <option value="On site"
                                                        <?php echo set_select('new_york[where_receive_first_treatment]', 'On site', ($data['where_receive_first_treatment'] == "On site") ? true : ''); ?>>
                                                        On site</option>
                                                    <option value="Doctor’s office"
                                                        <?php echo set_select('new_york[where_receive_first_treatment]', 'Doctor’s office', ($data['where_receive_first_treatment'] == "Doctor’s office") ? true : ''); ?>>
                                                        Doctor’s office</option>
                                                    <option value="Emergency Room"
                                                        <?php echo set_select('new_york[where_receive_first_treatment]', 'Emergency Room', ($data['where_receive_first_treatment'] == "Emergency Room") ? true : ''); ?>>
                                                        Emergency Room</option>
                                                    <option value="Clinical/ Hospital/ Urgent care"
                                                        <?php echo set_select('new_york[where_receive_first_treatment]', 'Clinical/ Hospital/ Urgent care', ($data['where_receive_first_treatment'] == "Clinical/ Hospital/ Urgent care") ? true : ''); ?>>
                                                        Clinical/ Hospital/ Urgent care</option>
                                                    <option value="SLP"
                                                        <?php echo set_select('new_york[where_receive_first_treatment]', 'SLP', ($data['where_receive_first_treatment'] == "SLP") ? true : ''); ?>>
                                                        Hospital stay over 24 hours</option>
                                                    <!--  <option value="Rehab Aide"
                                                        <?php echo set_select('new_york[where_receive_first_treatment]', 'Rehab Aide', ($data['where_receive_first_treatment'] == "Rehab Aide") ? true : ''); ?>>
                                                        Rehab Aide</option> -->
                                                    <option value="Regional Manager"
                                                        <?php echo set_select('new_york[where_receive_first_treatment]', 'Regional Manager', ($data['where_receive_first_treatment'] == "Regional Manager") ? true : ''); ?>>
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
                                                value="<?php echo (set_value('new_york[who_treated_where]') != "") ? set_value('new_york[who_treated_where]') : @$data['who_treated_where']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="col-md-7">
                                            <label class=" control-label"
                                                for="is_still_treated"><b><?php echo $k = $k + 1; ?>.</b> Is the
                                                employee still being treated for this injury / illness?</label>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group form-md-radios">
                                                <div class="md-radio-inline">
                                                    <div class="md-radio">
                                                        <input type="radio"
                                                            id="new_york_is_the_employee_still_being_treated_for_this_injury_option_1"
                                                            name="new_york[is_still_treated]" value="1"
                                                            <?php echo set_checkbox('new_york[is_still_treated]', '1', ($data['is_still_treated'] == "1") ? true : ''); ?>
                                                            class="md-radiobtn any_one_treated_cls">
                                                        <input type="hidden" name="" class="being_treatment_class"
                                                            value="<?=$data['is_still_treated']?> ">
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
                                                            <?php echo set_checkbox('new_york[is_still_treated]', '0', ($data['is_still_treated'] == "0") ? true : ''); ?>
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
                                                            <?php echo set_checkbox('new_york[is_still_treated]', '2', ($data['is_still_treated'] == "2") ? true : ''); ?>
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
                                    <div class="col-md-12" id="doctore_treated_div">
                                        <div class="col-md-12">
                                            <div class="col-md-3">
                                                <label class="control-label" for="info_treate_doctor">Name and address
                                                    of the doctor:</label>
                                            </div>
                                            <div class="col-md-9">
                                                <textarea class="form-control"
                                                    placeholder="Name and address of the doctor"
                                                    name="new_york[info_treate_doctor]" rows="3" aria-required="true"
                                                    aria-invalid="false"
                                                    aria-describedby="memo-error"><?php echo (set_value('new_york[info_treate_doctor]') != "") ? set_value('new_york[info_treate_doctor]') : @$data['info_treate_doctor']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-9">
                                            <label class="control-label"
                                                for="form_control_1"><b><?php echo $k = $k + 1; ?>.</b> To your
                                                knowledge, did the employee have another work-related injury to the same
                                                body part or a similar illness while working for you?</label>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-radios">
                                                <div class="md-radio-inline">
                                                    <div class="md-radio">
                                                        <input type="radio"
                                                            id="new_york_to_your_knowledge_did_the_employee_have_anothre_work_related_injury_to_the_same_body_pary_or_a_similar_illness_while_working_for_you_option_1"
                                                            name="new_york[did_anothre_work_injury]" value="1"
                                                            <?php echo set_checkbox('new_york[did_anothre_work_injury]', '1', ($data['did_anothre_work_injury'] == "1") ? true : ''); ?>
                                                            class="md-radiobtn doctore_previos_treated_cls">
                                                        <input type="hidden" name="" class="another_work_injury"
                                                            value="<?=$data['did_anothre_work_injury']?> ">
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
                                                            <?php echo set_checkbox('new_york[did_anothre_work_injury]', '0', ($data['did_anothre_work_injury'] == "0") ? true : ''); ?>
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
                                                <label class="control-label" for="who_treated_doctor_previous">Name the
                                                    doctor(s) who treated the previous injuries/illnesses (if
                                                    known):</label>
                                            </div>
                                            <div class="col-md-7">
                                                <textarea class="form-control"
                                                    placeholder="Name the doctor(s) who treated the previous injuries/illnesses (if known):"
                                                    name="new_york[who_treated_doctor_previous]" rows="3"
                                                    aria-required="true" aria-invalid="false"
                                                    aria-describedby="memo-error"><?php echo (set_value('new_york[who_treated_doctor_previous]') != "") ? set_value('new_york[who_treated_doctor_previous]') : @$data['who_treated_doctor_previous']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h3 class="form-section" style="color: #4d86c4"><b>F. RETURN TO WORK</b></h3>
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="col-md-9">
                                            <label class=" control-label"
                                                for="did_stop_work"><b><?php echo $a = $a + 1; ?>.</b> Did the employee
                                                stop work because of his injury/illness?</label>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-radios">
                                                <div class="md-radio-inline">
                                                    <div class="md-radio">
                                                        <input type="radio"
                                                            id="new_york_did_the_employee_stop_work_becuse_of_his_injury_option_1"
                                                            name="new_york[did_stop_work]" value="1"
                                                            <?php echo set_checkbox('new_york[did_stop_work]', '1', ($data['did_stop_work'] == "1") ? true : ''); ?>
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
                                                            <?php echo set_checkbox('new_york[did_stop_work]', '0', ($data['did_stop_work'] == "0") ? true : ''); ?>class="md-radiobtn emp_stop_work_cls">
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
                                            <label class="control-label" for="work_stop_date"> On what date?</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="input-group date date-picker">
                                                <input type="text" placeholder="Select Date" size="16"
                                                    class="form-control" name="new_york[work_stop_date]" readonly
                                                    value="<?php echo (set_value('new_york[work_stop_date]') != "") ? set_value('new_york[work_stop_date]') : database_to_datepicker($data['work_stop_date']); ?>"
                                                    id="return_work_date">
                                                <span class="input-group-btn">
                                                    <button class="btn default date-reset" type="button">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                    <button class="btn default date-set" type="button">
                                                        <i class="fa fa-calendar"></i>
                                                    </button>
                                                </span>
                                            </div>
                                            <p class="min_date_error" style="display:none;color: red">This date should be
                                                less than from What date</p>
                                            <p class="same_date" style="display:none;color: red">You cannot select same date</p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="col-md-7">
                                            <label class=" control-label"
                                                for="has_return_to_work"><b><?php echo $a = $a + 1; ?>.</b> Has the
                                                employee returned to work?</label>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-md-radios">
                                                <div class="md-radio-inline">
                                                    <div class="md-radio">
                                                        <input type="radio"
                                                            id="new_york_has_the_employee_returned_to_work_option_1"
                                                            name="new_york[has_return_to_work]" value="1"
                                                            <?php echo set_checkbox('new_york[has_return_to_work]', '1', ($data['has_return_to_work'] == "1") ? true : ''); ?>
                                                            class="md-radiobtn has_emp_stop_work_cls">
                                                        <input type="hidden" name="" class="return_work_option_newyork"
                                                            value="<?=$data['has_return_to_work']?>">

                                                        <label
                                                            for="new_york_has_the_employee_returned_to_work_option_1">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span>Yes </label>
                                                    </div>
                                                    <div class="md-radio">
                                                        <input type="radio"
                                                            id="new_york_has_the_employee_returned_to_work_option_2"
                                                            name="new_york[has_return_to_work]" value="0"
                                                            <?php echo set_checkbox('new_york[has_return_to_work]', '0', ($data['has_return_to_work'] == "0") ? true : ''); ?>
                                                            class="md-radiobtn has_emp_stop_work_cls">
                                                        <label
                                                            for="new_york_has_the_employee_returned_to_work_option_2">
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
                                            <label class="control-label" for="what_date">What date:</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="input-group date date-picker">
                                                <input type="text" size="16" readonly placeholder="Select Date"
                                                    class="form-control" name="new_york[return_work_date]"
                                                    value="<?php echo (set_value('new_york[return_work_date_has_employee]') != "") ? set_value('new_york[return_work_date]') : @$data['return_work_date']; ?>"
                                                    id="work_date">
                                                <span class="input-group-btn">
                                                    <button class="btn default date-reset" type="button">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                    <button class="btn default date-set" type="button">
                                                        <i class="fa fa-calendar"></i>
                                                    </button>
                                                </span>
                                            </div>
                                            <p class="same_date" style="display:none;color: red">You cannot select same date</p>
                                            <p class="max_date_error" style="display:none;color: red">This date should be
                                                greater than from on What date</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 has_emp_stop_work_div">
                                        <div class="form-group form-md-radios">
                                            <div class="md-radio-inline">
                                                <div class="md-radio">
                                                    <input type="radio"
                                                        id="new_york_has_the_employee_return_to_work_dury_type_option_1"
                                                        name="new_york[employment_status]" value="1" class="md-radiobtn"
                                                        <?php echo set_checkbox('new_york[employment_status]', '1', ($data['employment_status'] == "1") ? true : ''); ?>>
                                                    <label
                                                        for="new_york_has_the_employee_return_to_work_dury_type_option_1">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span>Regular duty</label>
                                                </div>
                                                <div class="md-radio">
                                                    <input type="radio"
                                                        id="new_york_has_the_employee_return_to_work_dury_type_option_2"
                                                        name="new_york[employment_status]" value="0" class="md-radiobtn"
                                                        <?php echo set_checkbox('new_york[employment_status]', '0', ($data['employment_status'] == "0") ? true : ''); ?>>
                                                    <label
                                                        for="new_york_has_the_employee_return_to_work_dury_type_option_2">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Limited duty</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h3 class="form-section" style="color: #4d86c4"><b>G. Employee’s work information on the
                                        date the injury or illness occurred</b></h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-5">
                                            <label class="control-label"
                                                for="e_date_birth"><b><?php echo $b = $b + 1; ?>.</b>Date employee was
                                                hired:<span class="required" aria-required="true">*</span></label>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="input-group date date-picker">
                                                <input type="text" size="16" placeholder="Select Date"
                                                    id="date_hire_newyork" class="form-control"
                                                    name="new_york[date_hire]" readonly
                                                    value="<?php echo (set_value('new_york[date_hire]') != "") ? set_value('new_york[date_hire]') : database_to_datepicker($data['date_hire']); ?>">
                                                <?php if (isset($errors['new_york[date_hire]'])): ?>
                                                <label class="text-danger"><?=$errors['new_york[date_hire]'];?></label>
                                                <?php endif;?>
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
                                            <label class="control-label"
                                                for="what_was_the_employee_job_title"><b><?php echo $b = $b + 1; ?>.</b>
                                                What is the employee's job title?</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input style="width: 100%!important;" name="new_york[job_title]"
                                                placeholder="What is the employee's job title?"
                                                class="form-control form-control-inline input-medium" size="16"
                                                type="text"
                                                value="<?php echo (set_value('new_york[job_title]') != "") ? set_value('new_york[job_title]') : @$data['job_title']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <label class="control-label"
                                                for="what_type_activities_work"><b><?php echo $b = $b + 1; ?>.</b> What
                                                types of activities did the employee normally perform at work? (Attach
                                                job description if available.)</label>
                                        </div>
                                        <div class="col-md-6">
                                            <textarea class="form-control"
                                                placeholder="What types of activities did the employee normally perform at work? (Attach job description if available.)"
                                                name="new_york[what_type_activities_work]" rows="4" aria-required="true"
                                                aria-invalid="false"
                                                aria-describedby="memo-error"><?php echo (set_value('new_york[what_type_activities_work]') != "") ? set_value('new_york[what_type_activities_work]') : @$data['what_type_activities_work']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h3 class="form-section" style="color: #4d86c4"><b>H. Employee’s Payroll Information</b>
                                </h3>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="col-md-8">
                                            <label class="control-label"><b><?php echo $c = $c + 1; ?>.</b> Employee’s
                                                gross pay in an average week was : </label>
                                        </div>
                                        <div class="col-md-4">
                                            <input placeholder="" name="new_york[emp_gross_pay]" class="form-control"
                                                type="text"
                                                value="<?php echo (!isset($data['emp_gross_pay']) || set_value('new_york[emp_gross_pay]') != "") ? set_value('new_york[emp_gross_pay]') : @$data['emp_gross_pay']; ?>"
                                                data-inputmask="'alias': 'decimal', 'groupSeparator': ',', 'autoGroup': true, 'digits': 2, 'digitsOptional': false, 'prefix': '$ '"
                                                style="text-align: right;" id="newyork_avrage_pay" />
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="col-md-8">
                                            <label class="control-label"><b><?php echo $c = $c + 1; ?>.</b> Did the
                                                employee receive lodging or tips in addition to pay?:</label>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group form-md-radios">
                                                <div class="md-radio-inline">
                                                    <div class="md-radio">
                                                        <input type="radio" id="new_york_addition_pay_option_1"
                                                            name="new_york[addition_pay]" value="1"
                                                            class="md-radiobtn new_york_addition_pay"
                                                            <?php echo set_checkbox('new_york[addition_pay]', '1', (@$data['addition_pay'] == "1") ? true : ''); ?>>
                                                        <input type="hidden" name="" class="newyork_addition_pay"
                                                            value="<?=@$data['addition_pay']?>">
                                                        <label for="new_york_addition_pay_option_1">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span>yes</label>
                                                    </div>
                                                    <div class="md-radio">
                                                        <input type="radio" id="new_york_addition_pay_option_2"
                                                            name="new_york[addition_pay]" value="0"
                                                            class="md-radiobtn new_york_addition_pay"
                                                            <?php echo set_checkbox('new_york[addition_pay]', '0', (@$data['addition_pay'] == "0") ? true : ''); ?>>
                                                        <label for="new_york_addition_pay_option_2">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> no</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="describ">
                                            <div class="col-md-2">
                                                <label class="control-label">Describ : </label>
                                            </div>
                                            <div class="col-md-9">
                                                <textarea class="form-control" placeholder="Describ"
                                                    name="new_york[describ]" rows="5" aria-required="true"
                                                    aria-invalid="false"
                                                    aria-describedby="memo-error"><?php echo (!isset($data['describ'])) ? set_value('new_york[describ]') : @$data['describ']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="col-md-5">
                                            <label class=" control-label"><b><?php echo $c = $c + 1; ?>.</b>Employee’s
                                                job was :</label>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group form-md-radios">
                                                <div class="md-radio-inline">
                                                    <div class="md-radio">
                                                        <input type="radio" id="new_york_employeement_status_option_1"
                                                            name="new_york[employment_job_was]" value="0"
                                                            <?php echo set_checkbox('new_york[employment_job_was]', '0', (isset($data['employment_job_was']) && $data['employment_job_was'] == "0") ? true : ''); ?>
                                                            class="md-radiobtn">
                                                        <label for="new_york_employeement_status_option_1">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span>Part time </label>
                                                    </div>
                                                    <div class="md-radio">
                                                        <input type="radio" id="new_york_employeement_status_option_2"
                                                            name="new_york[employment_job_was]" value="1"
                                                            <?php echo set_checkbox('new_york[employment_job_was]', '1', (isset($data['employment_job_was']) && $data['employment_job_was'] == "1") ? true : ''); ?>
                                                            class="md-radiobtn">
                                                        <label for="new_york_employeement_status_option_2">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span>Full time </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="col-md-12">
                                            <label class="control-label"><b><?php echo $c = $c + 1; ?>.</b> Which days
                                                of the week did the employee normally work?</label>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="md-checkbox-inline">
                                                <div class="col-md-3">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="new_york_emp_day_of_week_checkboxs_1"
                                                            name="new_york[emp_day_of_week][]" value="0"
                                                            class="md-check"
                                                            <?php echo set_checkbox('new_york[employment_job_was]', '0', (isset($data['emp_day_of_week']) && in_array('0', $data['emp_day_of_week'])) ? true : ''); ?>>
                                                        <label for="new_york_emp_day_of_week_checkboxs_1">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Sun </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="md-checkbox-inline">
                                                <div class="col-md-3">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="new_york_emp_day_of_week_checkboxs_2"
                                                            name="new_york[emp_day_of_week][]" value="1"
                                                            class="md-check"
                                                            <?php echo set_checkbox('new_york[employment_job_was]', '1', (isset($data['emp_day_of_week']) && in_array('1', $data['emp_day_of_week'])) ? true : ''); ?>>
                                                        <label for="new_york_emp_day_of_week_checkboxs_2">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Mon </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="md-checkbox-inline">
                                                <div class="col-md-3">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="new_york_emp_day_of_week_checkboxs_3"
                                                            name="new_york[emp_day_of_week][]" value="2"
                                                            class="md-check"
                                                            <?php echo set_checkbox('new_york[employment_job_was]', '2', (isset($data['emp_day_of_week']) && in_array('2', $data['emp_day_of_week'])) ? true : ''); ?>>
                                                        <label for="new_york_emp_day_of_week_checkboxs_3">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Tue </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="md-checkbox-inline">
                                                <div class="col-md-3">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="new_york_emp_day_of_week_checkboxs_4"
                                                            name="new_york[emp_day_of_week][]" value="3"
                                                            class="md-check"
                                                            <?php echo set_checkbox('new_york[employment_job_was]', '3', (isset($data['emp_day_of_week']) && in_array('3', $data['emp_day_of_week'])) ? true : ''); ?>>
                                                        <label for="new_york_emp_day_of_week_checkboxs_4">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Wed </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="md-checkbox-inline">
                                                <div class="col-md-3">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="new_york_emp_day_of_week_checkboxs_5"
                                                            name="new_york[emp_day_of_week][]" value="4"
                                                            class="md-check"
                                                            <?php echo set_checkbox('new_york[employment_job_was]', '4', (isset($data['emp_day_of_week']) && in_array('4', $data['emp_day_of_week'])) ? true : ''); ?>>
                                                        <label for="new_york_emp_day_of_week_checkboxs_5">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Thurs </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="md-checkbox-inline">
                                                <div class="col-md-3">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="new_york_emp_day_of_week_checkboxs_6"
                                                            name="new_york[emp_day_of_week][]" value="5"
                                                            class="md-check"
                                                            <?php echo set_checkbox('new_york[employment_job_was]', '5', (isset($data['emp_day_of_week']) && in_array('5', $data['emp_day_of_week'])) ? true : ''); ?>>
                                                        <label for="new_york_emp_day_of_week_checkboxs_6">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Fri </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="md-checkbox-inline">
                                                <div class="col-md-3">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="new_york_emp_day_of_week_checkboxs_7"
                                                            name="new_york[emp_day_of_week][]" value="6"
                                                            class="md-check"
                                                            <?php echo set_checkbox('new_york[employment_job_was]', '5', (isset($data['emp_day_of_week']) && in_array('6', $data['emp_day_of_week'])) ? true : ''); ?>>
                                                        <label for="new_york_emp_day_of_week_checkboxs_7">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Sat </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-5">
                                            <label class=" control-label"><b><?php echo $c = $c + 1; ?>.</b>Was the
                                                employee paid full day on he day of the injury / illness :</label>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-md-radios">
                                                <div class="md-radio-inline">
                                                    <div class="md-radio">
                                                        <input type="radio" id="new_york_emp_full_pay_option_1"
                                                            name="new_york[emp_full_pay]" value="0"
                                                            <?php echo set_checkbox('new_york[emp_full_pay]', '0', (isset($data['emp_full_pay']) && $data['emp_full_pay'] == "0") ? true : ''); ?>
                                                            class="md-radiobtn">
                                                        <label for="new_york_emp_full_pay_option_1">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span>Yes </label>
                                                    </div>
                                                    <div class="md-radio">
                                                        <input type="radio" id="new_york_emp_full_pay_option_2"
                                                            name="new_york[emp_full_pay]" value="1"
                                                            <?php echo set_checkbox('new_york[emp_full_pay]', '1', (isset($data['emp_full_pay']) && $data['emp_full_pay'] == "1") ? true : ''); ?>
                                                            class="md-radiobtn">
                                                        <label for="new_york_emp_full_pay_option_2">
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
                                        <div class="col-md-8">
                                            <label class=" control-label"><b><?php echo $c = $c + 1; ?>.</b>Did you
                                                continue to pay the employee after the injury /illness (e.g. sick leave,
                                                vacation, disability, regular salary)?:</label>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-radios">
                                                <div class="md-radio-inline">
                                                    <div class="md-radio">
                                                        <input type="radio" id="new_york_emp_pay_after_injury_option_1"
                                                            name="new_york[emp_pay_after_injury]" value="0"
                                                            <?php echo set_checkbox('new_york[emp_pay_after_injury]', '0', (isset($data['emp_pay_after_injury']) && $data['emp_pay_after_injury'] == "0") ? true : ''); ?>
                                                            class="md-radiobtn">
                                                        <label for="new_york_emp_pay_after_injury_option_1">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span>Yes </label>
                                                    </div>
                                                    <div class="md-radio">
                                                        <input type="radio" id="new_york_emp_pay_after_injury_option_2"
                                                            name="new_york[emp_pay_after_injury]" value="1"
                                                            <?php echo set_checkbox('new_york[emp_pay_after_injury]', '1', (isset($data['emp_pay_after_injury']) && $data['emp_pay_after_injury'] == "1") ? true : ''); ?>
                                                            class="md-radiobtn">
                                                        <label for="new_york_emp_pay_after_injury_option_2">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span>No </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <h3 class="form-section" style="color: #4d86c4"><b>I. Additional Comment</b></h3>
                                <div class="row">
                                    <div class="col-md-7">
                                        <label class="col-md-6 control-label"
                                            for="contact_phone_number"><b><?php echo $d = $d + 1; ?>.</b> Signature of
                                            person preparing from:</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" placeholder=""
                                                value="<?php echo (!isset($data['sign_of_preparing'])) ? set_value('new_york[sign_of_preparing]', 'Joyce Ginsberg') : @$data['sign_of_preparing']; ?>"
                                                name="new_york[sign_of_preparing]">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="col-md-4">
                                            <label class=" control-label"><b><?php echo $d = $d + 1; ?>.</b>
                                                Date:</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="input-group meridian_2 date date-picker">
                                                <input type="text" placeholder="Select Date" size="16"
                                                    class="form-control"
                                                    value="<?php echo (!isset($data['addition_date'])) ? set_value('new_york[addition_date]', database_to_datepicker($data['created_at'])) : database_to_datepicker($data['addition_date']); ?>"
                                                    readonly name="new_york[addition_date]">
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
                                    <div class="col-md-4">
                                        <label class="col-md-4 control-label"
                                            for="contact_phone_number"><b><?php echo $d = $d + 1; ?>.</b>Print
                                            Name:</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" placeholder="Print Name"
                                                value="<?php echo (!isset($data['print_name'])) ? set_value('new_york[print_name]', 'Joyce Ginsberg') : @$data['print_name']; ?>"
                                                name="new_york[print_name]">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="col-md-3 control-label"
                                            for="contact_phone_number"><b><?php echo $d = $d + 1; ?>.</b>Title: </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="Benefits Manager"
                                                value="<?php echo (!empty($data['addition_title'])) ? $data['addition_title'] : set_value('new_york[addition_title]', 'Benefits Manager'); ?>"
                                                name="new_york[addition_title]">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <label class="col-md-4 control-label"
                                            for="contact_phone_number"><b><?php echo $d = $d + 1; ?>.</b>Phone Number:
                                        </label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" placeholder="(732) 987-3817"
                                                value="<?php echo (!isset($data['addition_phone'])) ? set_value('new_york[addition_phone]', '7329873817') : @$data['addition_phone']; ?>"
                                                name="new_york[addition_phone]" id="last_phone_number_newyork">
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="display: none;">
                                    <div class="col-md-12">
                                        <textarea class="form-control" placeholder="ADDITIONAL INFORMATION"
                                            name="new_york[additional_information]" rows="5" aria-required="true"
                                            aria-invalid="false"
                                            aria-describedby="memo-error"><?php echo @$data['additional_information']; ?></textarea>
                                            <input type="hidden" name="previous_url" id="prev_url" value="<?= current_url(); ?>" class="form-control">
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="form-actions right">
                                <div class="row">
                                    <!-- <div class="col-md-6"> -->
                                    <div class="col-md-9">
                                        <!-- <a href="<?php echo base_url('Insurance_manage/generate_newyork_pdf/' . $this->uri->segment(3)); ?>"
                                            style="text-decoration: none">
                                            <button type="button" class="btn default txt-btn" id="generate_newyork_btn"><i class="fa fa-file-pdf-o" ></i>Generate Pdf</button>
                                        </a> -->
                                    </div>
                                   <!--  <div class="col-md-1 email_btn" style="display: none;">
                                        <a class="btn btn purple-sharp" id="generate_newyork_pdf" data-id="<?= $data['id'] ?>" data-state="1" >Email</a>
                                    </div>
                                    <div class="col-md-1 preview_btn" style="display: none;padding: 0px">
                                        <a href="<?php echo base_url()."upload/pdf/WC_NewYork_1".$data['id'].".pdf" ?>" class="btn btn blue-hoki" data-id="<?= $data['id'] ?>" target="_blank" data-state="1">Preview Pdf</a>
                                    </div> -->
                                    <!-- <div class="col-md-1"> -->
                                        <a href="<?php echo base_url('Insurance_manage'); ?>" target="_blank" style="text-decoration: none">
                                            <button type="button" class="btn default txt-btn" >Cancel</a></button>
                                        </a>
                                        <button type="submit" class="btn blue" id="new_york_submit"><i class="fa fa-check"></i>
                                            Save</button>
                                    <!-- </div> -->
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
</div>
</div>
<!-- Email popup  -->
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
    <!-- Email popup  -->

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