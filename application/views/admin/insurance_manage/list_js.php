<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js">
</script>
<script type="text/javascript">
	var hiddenUrl = "<?php echo base_url(); ?>";
	var emp_table = '';
	$(document).ready(function() {
		$('#example').DataTable();
	});
	if (window.location.href.includes("?q=true")) {
		var emp_url = window.location.href.split('?')[0]
		window.history.pushState({}, null, emp_url)
	}

	console.log(check_array);
	// var check_array = [];
	jQuery(document).on('click', '.employee_id', function() {
		var checkbox_ids = checkbox_selection($(this), $(this).prop("checked"), check_array);
		console.log($(this).val(), check_array)
		$('.old_chk').val(JSON.stringify(check_array))
	})


	/*$(".injury_date_to_clear").on("click", function() {
		$('#injury_date_to').val("");
	})
	$(".injury_date_from_clear").on("click", function() {
		$('#injury_date_from').val("");
	})*/

dateremove_onclose(".injury_date_from_clear", "#injury_date_from");
dateremove_onclose(".injury_date_to_clear", "#injury_date_to");


	function checkbox_selection(emp_obj, previous_checked = null, check_array = []) {
		if (!previous_checked && ($.inArray(emp_obj.val(), check_array) !== -1)) {
			check_array.splice(check_array.indexOf(emp_obj.val()), 1);

		}

		if (previous_checked && ($.inArray(emp_obj.val(), check_array) === -1)) {
			check_array.push(emp_obj.val());

		}
		return check_array;
	}

	function selectall_checkbox() {

		var hidden_data = JSON.parse($('.old_chk').val());

		var slct_all = $("#get_checked_po").val();

		$.each(hidden_data, function(index, el) {

			if ($.inArray(el, hidden_data) !== -1) {
				console.log(hidden_data, 'true', "input[type=checkbox][value=" + el + "]")
				$("input[type=checkbox][value=" + el + "]").prop("checked", true);

			} else {
				console.log(hidden_data, 'false')
				$("input[type=checkbox][value=" + el + "]").prop("checked", false);
			}
		})
	}

	$("#sample_editable_1").DataTable({});


	jQuery(document).ready(function($) {
		$('.menu-toggler').click();
		$('#return_work_date,#last_work_date,#injury_date').mask('99/99/99', {
			placeholder: "mm/dd/yy"
		});



		var handleTable = function() {

			function editRow(emp_table, nRow) {

				var aData = emp_table.fnGetData(nRow);
				console.log(aData);
				var string = aData['id'];
				var id = (string.replace(/\D/g, ''));

				var jqTds = $('>td', nRow)

				jqTds[2].innerHTML = '<input type="text" class="form-control input-small fullname" value="' + (aData["full_name"] == "" || aData["full_name"] == null ? "" : aData["full_name"]) + '">';
				jqTds[3].innerHTML = '<input type="text" class="form-control input-small lastname" value="' + (aData["last_name"] == "" || aData["last_name"] == null ? "" : aData["last_name"]) + '">';
				jqTds[5].innerHTML = '<input type="text" class="form-control input-small toi" id="injury_date" value="' + (aData["time_of_injury"] == "" || aData["time_of_injury"] == null ? "" : aData["time_of_injury"]) + '">';
				jqTds[7].innerHTML = '<input type="text" class="form-control input-small state " readonly value="' + (aData["state"] == "" || aData["state"] == null ? "" : aData["state"]) + '">';
				jqTds[10].innerHTML = '<input type="text" class="form-control input-small lwd" id="last_work_date" value="' + (aData["last_work_date"] == "" || aData["last_work_date"] == null ? "" : aData["last_work_date"]) + '">';
				jqTds[11].innerHTML = '<input type="text" class="form-control input-small rtw" id="return_work_date" value="' + (aData["return_to_work"] == "" || aData["return_to_work"] == null ? "" : aData["return_to_work"]) + '">';
				jqTds[12].innerHTML = '<input type="text" class="form-control input-small dm" readonly value="' + (aData["day_missed"] == "" || aData["day_missed"] == null ? "" : aData["day_missed"]) + '">';
				jqTds[13].innerHTML = '<input type="text" class="form-control input-small cn" value="' + (aData["claim_number"] == "" || aData["claim_number"] == null ? "" : aData["claim_number"]) + '">';
				jqTds[14].innerHTML = '<input type="text" class="form-control input-small pn" value="' + (aData["preparer_name"] == "" || aData["preparer_name"] == null ? "" : aData["preparer_name"]) + '">';
				jqTds[15].innerHTML = '<input type="text" class="form-control input-small ic" value="' + (aData["insurance_company"] == "" || aData["insurance_company"] == null ? "" : aData["insurance_company"]) + '">';
				jqTds[17].innerHTML = '<a class="edit btn btn-success btn-sm" href="">Save</a><input type="hidden" value="' + id + '" class="id" /> <a class="cancel btn btn-sm btn-danger" href="">Cancel</a>';


			}

			function saveRow(emp_table, nRow) {

				var jqInputs = $('input', nRow);
				console.log(jqInputs);
				var last_name = jqInputs[1].value;
				var fist_name = jqInputs[2].value;
				var date_of_injury = jqInputs[3].value;
				var state = jqInputs[4].value;
				var last_work_date = jqInputs[5].value;
				var return_to_work = jqInputs[6].value;
				var day_missed = jqInputs[7].value;
				var claim_number = jqInputs[8].value;
				var contact_information = jqInputs[9].value;
				var insurance_company = jqInputs[10].value;
				var id = jqInputs[11].value;



				if (Date.parse(date_of_injury) < Date.parse(last_work_date)) {
					alert("Please Check Injury Date");
					location.reload();
					return;
				} else if (Date.parse(last_work_date) > Date.parse(return_to_work)) {
					alert("Please Check Last Work Date")
					location.reload();
					return;
				} else if (Date.parse(return_to_work) < Date.parse(last_work_date)) {
					alert("Please Check Return to work date");
					location.reload();
					return;
				}



				$.ajax({
					type: "post",
					url: '<?php echo base_url("Insurance_manage/update_requested_cliam"); ?>',
					data: {
						last_name: last_name,
						first_name: fist_name,
						time_of_injury: date_of_injury,
						state_injury: state,
						work_stop_date: last_work_date,
						return_work_date: return_to_work,
						day_missed: day_missed,
						claim_number: claim_number,
						contact_information: contact_information,
						insurance_company: insurance_company,
						id: id
					},
					dataType: "json",
					success: function(response) {}
				});
				emp_table.fnDraw();
			}

			function cancelEditRow(emp_table, nRow) {
				var jqInputs = $('input', nRow);
				emp_table.fnUpdate(jqInputs[0].value, nRow, 0, false);
				emp_table.fnUpdate(jqInputs[1].value, nRow, 1, false);
				emp_table.fnUpdate(jqInputs[2].value, nRow, 2, false);
				emp_table.fnUpdate(jqInputs[3].value, nRow, 3, false);
				emp_table.fnUpdate('<a class="edit" href="">Edit</a>', nRow, 4, false);
				emp_table.fnDraw();
			}




			var table = $('#empTable');

			var emp_table = $('#empTable').dataTable({
				"autoWidth": false,
				'stateSave': true,
				// "autoWidth":false,
				// 'processing': true,
				'serverSide': true,
				'serverMethod': 'post',
				'ajax': {
					'url': '<?php echo base_url('Insurance_manage/get_requested_cliam'); ?>',
					'type': 'POST',
					'data': {
						"state": "<?php echo $this->session->userdata('state'); ?>",
						"injury_date_from": "<?php echo $this->session->userdata('injury_date_from'); ?>",
						"injury_date_to": "<?php echo $this->session->userdata('injury_date_to'); ?>",
						"firstname": "<?php echo $this->session->userdata('firstname'); ?>",
						"lastname": "<?php echo $this->session->userdata('lastname'); ?>",
						// "status":"<?php echo $this->session->userdata('status'); ?>",
						// "submitted_date":"<?php echo $this->session->userdata('submitted_date'); ?>",
					},
				},
				"columnDefs": [{
						"targets": [0],
						"searchable": false,
						"orderable": false,
					},
					{
						"width": "2.4%",
						"targets": 0
					},
					{
						"width": "0%",
						"targets": 1
					},
					{
						"width": "9%",
						"targets": 2
					},
					{
						"width": "9%",
						"targets": 3
					},
					{
						"width": "0%",
						"targets": 4
					},
					{
						"width": "9%",
						"targets": 5
					},
					{
						"width": "8%",
						"targets": 6
					},
					{
						"width": "0%",
						"targets": 7
					},
					{
						"width": "8%",
						"targets": 8
					},
					{
						"width": "18%",
						"targets": 9
					},
					{
						"width": "8%",
						"targets": 10
					},
					{
						"width": "8%",
						"targets": 11
					},
					{
						"width": "7%",
						"targets": 12
					},
					{
						"width": "8%",
						"targets": 13
					},
					{
						"width": "8%",
						"targets": 14
					},
					{
						"width": "8%",
						"targets": 15
					},
					{
						"width": "8%",
						"targets": 16
					},
					{
						"width": "11%",
						"targets": 17
					},
				],
				'columns': [{
						data: 'id_first'
					},
					{
						data: 'id'
					},
					{
						data: 'full_name'
					},
					{
						data: 'last_name'
					},
					// { data: 'gender' },
					{
						data: 'discipline'
					},
					{
						data: 'time_of_injury'
					},
					{
						data: 'facility'
					},
					{
						data: 'state'
					},
					{
						data: 'body_part'
					},
					{
						data: 'type_of_injury'
					},
					// { data: 'submited_date' },
					{
						data: 'last_work_date'
					},
					{
						data: 'return_to_work'
					},
					{
						data: 'day_missed'
					},
					{
						data: 'claim_number'
					},
					{
						data: 'preparer_name'
					},
					{
						data: 'insurance_company'
					},
					// { data: 'status' },
					{
						data: 'comments'
					},
					{
						data: 'action'
					},
					// { data: 'view' },

				],
				"drawCallback": function(settings) {
					// console.log(settings);
					selectall_checkbox();
				},



			});

			var tableWrapper = $("#sample_editable_1_wrapper");

			var nEditing = null;
			var nNew = false;


			table.on('click', '.delete', function(e) {
				e.preventDefault();

				if (confirm("Are you sure to delete this row ?") == false) {
					return;
				}

				var nRow = $(this).parents('tr')[0];
				emp_table.fnDeleteRow(nRow);
				alert("Deleted! Do not forget to do some ajax to sync with backend :)");
			});

			table.on('click', '.cancel', function(e) {
				e.preventDefault();
				if (nNew) {
					emp_table.fnDeleteRow(nEditing);
					nEditing = null;
					nNew = false;
				} else {
					restoreRow(emp_table, nEditing);
					nEditing = null;
				}
			});


			function restoreRow(emp_table, nRow) {

				var aData = emp_table.fnGetData(nRow);
				var jqTds = $('>td', nRow);

				for (var i = 0, iLen = jqTds.length; i < iLen; i++) {
					emp_table.fnUpdate(aData[i], nRow, i, false);
				}

				emp_table.fnDraw();


			}

			table.on('click', '.edit', function(e) {
				e.preventDefault();
				nNew = false;
				/* Get the row as a parent of the link that was clicked on */
				var nRow = $(this).parents('tr')[0];

				if (nEditing !== null && nEditing != nRow) {
					/* Currently editing - but not this row - restore the old before continuing to edit mode */
					// editRow(emp_table, nRow);
					// restoreRow(emp_table, nEditing);
					// emp_table.fnDraw();
					nEditing = nRow;
				} else if (nEditing == nRow && this.innerHTML == "Save") {
					/* Editing this row and want to save it */
					saveRow(emp_table, nEditing);
					nEditing = null;
					alert("Updated! Successfully :)");
				} else {
					/* No edit in progress - let's start one */
					editRow(emp_table, nRow);
					nEditing = nRow;
				}
			});
		}


		handleTable();


	});




	$(document).delegate(".group-checkable", "change", function(e) {
		e.stopImmediatePropagation();
		e.preventDefault();
		var all_pro = $("#get_checked").prop('checked');
		if (all_pro == true) {
			$("#get_checked").prop('checked', false);
			$("#get_checked").parent().removeClass("checked");
		}
	});

	function status_change_fun(id) {
		toastr.options = {
			"closeButton": true,
			"debug": false,
			"newestOnTop": false,
			"progressBar": true,
			"positionClass": "toast-bottom-right",
			"preventDuplicates": false,
			"onclick": null,
			"showDuration": "500",
			"hideDuration": "1000",
			"timeOut": "7000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		}
		status = $('#select_status_' + id).val();
		$.ajax({
				url: '<?php echo base_url('Insurance_manage/change_status '); ?>',
				dataType: 'json',
				type: 'POST',
				data: {
					status: status,
					id: id
				},
			})
			.done(function(data) {
				if (data.status == true) {
					toastr["success"](data.name + " Status Updated!");
				} else {
					toastr["error"]("Something Went Wrong!");
				}
			})
			.fail(function() {
				toastr["error"]("Something Went Wrong!");
			});
	}

	$('#injury_date_to').change(function(event) {
		var from = $('#injury_date_from').val();
		var to = $('#injury_date_to').val();
		if (from != "" && to != "") {
			compare_date(from, to);
		}
	});
	$('#injury_date_from').change(function(event) {
		var from = $('#injury_date_from').val();
		var to = $('#injury_date_to').val();
		if (from != "" && to != "") {
			compare_date(from, to);
		}
	});

	function compare_date(from, to) {
		var from = from.split('/');
		from = new Date(from[2], from[0], from[1])
		console.log(from.getTime())
		var to = to.split('/');
		to = new Date(to[2], to[0], to[1])
		console.log(to.getTime())
		if (from.getTime() <= to.getTime()) {
			return true;
		} else {
			return false;
		}
	} // punch email valiadatoin $('#email_setting').validate({ // initialize the plugin focusInvalid: false, invalidHandler: function(form, validator) { if (!validator.numberOfInvalids()) return; $('html, body').animate({ scrollTop: $(validator.errorList[0].element).offset().top }, 1000); }, rules: { "from_email" : { required: true, email: true, }, "cc_email" : { email: true, }, "bcc_email" : { email: true, }, "to_email" : { required: true, email: true, }, "body" : { required: true, }, "email_title" : { required: true, }, } });
</script>