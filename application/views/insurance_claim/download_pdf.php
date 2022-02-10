<html lang="en">

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	.back-btn {
		text-align: center;
		margin-left: 47px;
		/*margin-top: 23px;*/
	}
</style>

<body>
	<?php if ($this->session->flashdata('success')) { ?>

		<div class="alert alert-success">
			<button class="close" data-close="alert"></button>
			<ul>
				<li>
					<strong>Sucess!</strong> <span><?= $this->session->flashdata('success') ?></span><br>
				</li>
			</ul>
		</div>
	<?php } else if ($this->session->flashdata('error')) { ?>

		<div class="alert alert-danger">
			<button class="close" data-close="alert"></button>
			<ul>
				<li>
					<strong>Error!</strong> <span><?= $this->session->flashdata('error') ?></span><br>
				</li>
			</ul>
		</div>

	<?php } else {
	} //echo "<pre>"; print_r($result);exit;
	?>

	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8">
				<center style="margin-left: 500px;">
					<h6 style="margin-top: 100px;">If you want to download form as a pdf ,click on below button</h6>
					<a href="<?= base_url('insurance_claim/' . $this->data['state_name'] . '/' . $this->data['id']) ?>"><button type="submit" class="btn btn-primary"><i class="fa fa-file-pdf-o"></i> Download pdf</button></a>
					<a href="<?= base_url('/') ?>" class="btn btn-primary back-btn">Go Back</a>
				</center>
			</div>
		</div>
	</div>

	<!-- <div class="col-md-12" style="text-align: center">
        <a href="<?= base_url('/') ?>" class="btn btn-primary back-btn">Go Back</a>
    </div> -->
	<script type="text/javascript">
		$('.alert-success').delay(1000).fadeOut();
	</script>
</body>

</html>
