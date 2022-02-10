<style type="text/css">
label.error{
    color:#FF0000;
}
#empTable_filter{
    float: right;
}
.meridian_2 .form-control[readonly]{
    background-color: #ffffff;
}
span::after{

}
</style>

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="<?php echo base_url('dashbord'); ?>">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="#">Email Setting</a>
                    <i class="icon-envelope-open"></i>
                </li>

            </ul>
        </div>
        <h1 class="page-title"> Email Setting
            <!-- <small>blank page layout</small> -->
        </h1>
        <div class="container-fluid">
            <?php $this->load->view('flash_message'); ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light portlet-fit portlet-datatable bordered">
                        <div class="portlet-title">
                            <div class="row">
                                <div class="caption">
                                    <i class="fa fa-users"></i>
                                    <span class="caption-subject font-dark sbold uppercase">Email Setting</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                     <form action="<?php echo base_url('insurance_manage/insert_email_setting'); ?>" name="form_profile" method="post" class="form-horizontal" enctype="multipart/form-data" id="email_setting">
                                        <div class="alert alert-danger" style="display: none;">
                                        <button class="close" data-close="alert"></button>
                                        <ul>
                                            <li>
                                            <strong>Error!</strong> <span>The DOB field is required.</span><br>
                                            </li>
                                        </ul>
                            </div>
                                <div class="form-body">
                                    <input type="hidden" name="email_id" id="email_id" class="form-control">
                                    <!-- <div class="form-group">
                                        <label class="col-md-2 control-label">SMTP Host Name<span class="required">*</span> </label>
                                        <div class="col-md-4">
                                            <input type="text" name="host" id="host" class="form-control" value="<?php echo @$email_info['host']; ?>">
                                            <input type="hidden" name="user_id" value="<?= $this->session->userdata('id'); ?>">
                                        </div>
                                    </div> -->
                                   <!--  <div class="form-group">
                                        <label class="col-md-2 control-label">SMTP Port<span class="required">*</span> </label>
                                        <div class="col-md-4">
                                            <input type="text" name="port" id="port" class="form-control" value="<?php echo @$email_info['port']; ?>">
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">From Email<span class="required">*</span> </label>
                                        <div class="col-md-4">
                                            <input type="text" name="from_email" id="username" class="form-control" value="<?php echo @$email_data['from_email']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">To Email<span class="required">*</span> </label>
                                        <div class="col-md-4">
                                            <input type="text" name="to_email"  class="form-control" value="<?php echo @$email_data['to_email']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">CC Email </label>
                                        <div class="col-md-4">
                                            <input type="text" name="cc_email" class="form-control" value="<?php echo @$email_data['cc_email']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">BCC Email</label>
                                        <div class="col-md-4">
                                            <input type="text" name="bcc_email" class="form-control" value="<?php echo @$email_data['bcc_email']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Body <span class="required">*</span> </label>
                                        <div class="col-md-4">
                                           <textarea class="form-control" name="body" rows="4"><?php echo @$email_data['body']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Email Title <span class="required">*</span> </label>
                                        <div class="col-md-4">
                                            <input type="text" name="email_title" id="email_title" class="form-control" value="<?php echo @$email_data['email_title']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-4">
                                            <button type="submit" id="" class="btn btngreen">Save</button>
                                            <a href="<?php echo base_url('insurance_manage'); ?>" class="btn default">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>