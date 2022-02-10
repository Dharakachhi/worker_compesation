<style type="text/css">
    div#sample_editable_1_filter { float: right; }
</style>
<div id="result_message" style="display: none;"></div>
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN THEME PANEL -->
                        <h1 class="page-title"> Email History </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="portlet light portlet-fit bordered">
                                    <div class="portlet-body">
                                        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                            <thead>
                                                <tr>
                                                    <th> Employee Name </th>
                                                    <th> State </th>
                                                    <th> To </th>
                                                    <th> Body </th>
                                                    <th> Date </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1; foreach ($email_data as $key => $value) {
                                                    ?>

                                                    <tr>
                                                        <td> <?= $value['full_name'] ?></td>
                                                        <td> <?= $value['state_name'] ?></td>
                                                        <td> <?= $value['to'] ?> </td>
                                                        <td> <?= $value['body'] ?> </td>
                                                        <td> <?= database_to_datetimepicker($value['created_date']) ?> </td>
                                                    </tr>
                                                <?php $i++; } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
                <!-- BEGIN QUICK SIDEBAR -->
            </div>
            <!-- END CONTAINER -->
        </div>

        <!-- END THEME LAYOUT SCRIPTS -->
