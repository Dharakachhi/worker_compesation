<link href="<?php echo base_url('assets/theme/') ?>assets/global/css/datatable-expand.css" rel="stylesheet" type="text/css" />

<style type="text/css">
	label.error {
		color: #FF0000;
	}

	#empTable_filter {
		float: right;
	}

	.meridian_2 .form-control[readonly] {
		background-color: #ffffff;
	}

	/*table.dataTable.no-footer {
    border: inherit !important;
}
table.dataTable tbody th, table.dataTable tbody td {
    width: 1px;
    white-space: nowrap;
}*/
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
					<a href="#">Claim Request</a>
					<i class="fa fa-circle"></i>
				</li>

			</ul>
		</div>
		<h1 class="page-title"> Claim Request
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
									<span class="caption-subject font-dark sbold uppercase">Employee Claim</span>
								</div>
								<div class="text-right">
									<a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to Reset Filter?')" href="<?php echo base_url('Insurance_manage/index/reset'); ?>"><i class="fa fa-check"></i>Reset Filter</a>
								</div>
							</div>
							<hr>
							<form id="filter_form" action="<?php echo base_url(); ?>Insurance_manage/" class="horizontal-form" method="post">
								<div class="row">
									<div class="col-md-6">
										<div class="col-md-5">
											<label class=" control-label" for="date_notice_provided">Injury Date
												From:</label>
										</div>
										<div class="col-md-7">
											<div class="input-group meridian_2 date date-picker">
												<input type="hidden" name="current_url" id="current_url" value="<?= current_url(); ?>" class="form-control">
												<input type="text" placeholder="Select Date" id="injury_date_from" size="16" class="form-control " value="<?php echo $this->session->userdata('injury_date_from'); ?>" readonly name="injury_date_from">
												<span class="input-group-btn">
													<button class="btn default date-reset injury_date_from_clear" type="button">
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
											<label class=" control-label" for="date_notice_provided">Injury Date
												To:</label>
										</div>
										<div class="col-md-7">
											<div class="input-group meridian_2 date date-picker">
												<input type="text" placeholder="Select Date" size="16" id="injury_date_to" class="form-control" value="<?php echo $this->session->userdata('injury_date_to'); ?>" readonly name="injury_date_to">

												<span class="input-group-btn">
													<button class="btn default date-reset injury_date_to_clear" type="button">
														<i class="fa fa-times"></i>
													</button>
													<button class="btn default date-set" type="button">
														<i class="fa fa-calendar"></i>
													</button>
												</span>
											</div>
										</div>
									</div>
									<br><br><br>
									<div class="col-md-6">
										<div class="col-md-5">
											<label class="control-label">First Name </label>
										</div>
										<div class="col-md-7">
											<div class="form-group">
												<input type="text" placeholder="First Name" size="16" class="form-control" value="<?php echo $this->session->userdata('firstname'); ?>" id="fname" name="first_name">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="col-md-5">
											<label class="control-label">last Name </label>
										</div>
										<div class="col-md-7">
											<div class="form-group">
												<input type="text" placeholder="Last Name" size="16" class="form-control" value="<?php echo $this->session->userdata('lastname'); ?>" id="lname" name="last_name">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="col-md-5">
											<label class="control-label">Select State : </label>
										</div>
										<div class="col-md-7">
											<div class="form-group">
												<select id="state" class="form-control select2" data-placeholder="Choose a state" tabindex="1" name="state">
													<option value="">Select State</option>
													<option value="1" <?php echo ($this->session->userdata('state') == '1') ? 'selected' : ''; ?>>
														New York</option>
													<option value="2" <?php echo ($this->session->userdata('state') == '2') ? 'selected' : ''; ?>>
														New Jersey</option>
													<option value="3" <?php echo ($this->session->userdata('state') == '3') ? 'selected' : ''; ?>>
														Maryland</option>
													<option value="4" <?php echo ($this->session->userdata('state') == '4') ? 'selected' : ''; ?>>
														Connecticut</option>
													<option value="5" <?php echo ($this->session->userdata('state') == '5') ? 'selected' : ''; ?>>
														Pennsylvania</option>
													<option value="6" <?php echo ($this->session->userdata('state') == '6') ? 'selected' : ''; ?>>
														South Carolina</option>
													<option value="7" <?php echo ($this->session->userdata('state') == '7') ? 'selected' : ''; ?>>
														Missouri</option>
													<option value="8" <?php echo ($this->session->userdata('state') == '8') ? 'selected' : ''; ?>>
														Columbia</option>
												</select>

											</div>
										</div>
									</div>
									<!-- <div class="col-md-6">
                                        <div class="col-md-5">
                                            <label class="control-label">Select Status : </label>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <select id="status" class="form-control select2"
                                                    data-placeholder="Choose a Status" tabindex="1" name="status">
                                                    <option value="">Select Status</option>
                                                    <option value="2"
                                                        <?php echo ($this->session->userdata('status') == '2') ? 'selected' : ''; ?>>
                                                        Submitted</option>
                                                    <option value="1"
                                                        <?php echo ($this->session->userdata('status') == '1') ? 'selected' : ''; ?>>
                                                        Pending</option>
                                                    <option value="0"
                                                        <?php echo ($this->session->userdata('status') == '0') ? 'selected' : ''; ?>>
                                                        Processing</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> -->

									<!--  <div class="col-md-6">
                                        <div class="col-md-5">
                                            <label class=" control-label" for="date_notice_provided">Submitted
                                                Date:</label>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="input-group meridian_2 date date-picker">
                                                <input type="text" placeholder="Select Date" id="submitted_date"
                                                    size="16" class="form-control "
                                                    value="<?php echo $this->session->userdata('submitted_date'); ?>"
                                                    readonly name="submitted_date">
                                                <span class="input-group-btn">
                                                    <button class="btn default date-reset submitted_date_reset" type="button">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                    <button class="btn default date-set" type="button">
                                                        <i class="fa fa-calendar"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div> -->
									<div class="text-center">
										<button type="submit" class="btn blue"><i class="fa fa-check"></i>
											Filter</button>
										<!-- <button type="button" class="btn blue excel" id="excel"><i class="fa fa-check"></i> Excel</button> -->
									</div>
									<!-- <a href="<?= base_url('Insurance_manage/excel'); ?>"> -->
									<!-- <div class="text-center" style="float: right;margin-right: 100px;">
                                    </div> -->
								</div>
							</form>
						</div>
						<!-- END PAGE TITLE-->
						<!-- END PAGE HEADER-->
						<div class="row" style="margin: 15px">
							<div class="col-md-12">
								<!-- BEGIN EXAMPLE TABLE PORTLET-->
								<div class="portlet light bordered">
									<div class="portlet-title">
										<div class="caption font-dark">
											<span class="caption-subject bold uppercase"> Employee Table</span>
										</div>
										<div class="actions">
											<a class="btn btn-sm animated-button thar-two mb-30 btn-group dark btn-outline btn-circle btn-sm btn-group-devided" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-angle-down"></i></a>
											<button class="btn btn-transparent dark btn-outline btn-circle btn-sm active excel" id="excel" data-toggle="dropdown">Excel </button>
										</div>

									</div>
									<div class="collapse in" id="collapseExample">
										<div class="portlet-body">
											<input type="hidden" class="old_chk" name="old_chk" value="[]">
											<table class="table table-bordered table-striped  mb-none dataTable no-footer dt-responsive" id="empTable">
												<thead>
													<tr>
														<th></th>
														<th style="width:13px !important">
															<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
																<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" id="get_checked_po" /> <span></span>
															</label>
														</th>
														<!-- <input type="checkbox" class="group-checkable getChecked" id="get_checked" name="checkbox" /> -->
														<th style="width:13px !important"> Last </th>
														<th class="all"> First </th>

														<!-- <th> Gender </th> -->
														<th class="none"> Discipline </th>
														<th>Date of Injury </th>
														<th class="none"> Facility</th>
														<th> State </th>
														<!-- <th> Submited Date</th> -->
														<th class="type-injury none"> Body Part</th>
														<th class="type-injury none"> Type of Injury</th>
														<th> Last Work Date </th>
														<th> Return to Work </th>
														<th> Day missed </th>
														<th> Claim Number </th>
														<th> Contact Information </th>
														<th> Insurance Company </th>
														<th class="none"> comments </th>
														<!-- <th> Status </th> -->
														<th> Actions </th>
														<!-- <th> View </th> -->
													</tr>
												</thead>
												<tbody>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!-- END EXAMPLE TABLE PORTLET-->
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
