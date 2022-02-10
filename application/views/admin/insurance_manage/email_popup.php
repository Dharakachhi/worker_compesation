 <div class="scroller"  data-always-visible="1" data-rail-visible1="1">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">Email Content </div>
                        </div>
                        <div class="portlet-body">
                         <form action="<?php echo base_url(); ?>Insurance_manage/email_send_file" method="post" id="email_form">
                            <div>
                                <div class="row" id="to_focuse">
                                    <div class="form-group col-md-1 p-11">
                                        <label>To</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="to" id="edit_item_address" class="form-control">
                                        <input type="hidden" name="emp_id" value="<?= $emp_id ?>" class="form-control">
                                        <input type="hidden" name="state" value="<?= $state ?>" class="form-control">
                                        <input type="hidden" name="filename" value="<?= $fileName ?>" class="form-control">
                                        <input type="hidden" name="current_url" value="<?= $current_url ?>" class="form-control">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-1">
                                    <label>CC:</label>
                                </div>
                                    <div class="form-group  col-md-10">
                                        <input type="text" id="edit_submit" name="cc" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-1">
                                        <label>BCC:</label>
                                    </div>
                                    <div class="form-group  col-md-10">
                                        <input type="text" id="edit_submit" name="bcc" class="form-control">
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="form-group col-md-1">
                                        <label>Body:</label>
                                    </div>
                                    <div class="form-group  col-md-10">
                                        <textarea class="form-control" row="3" name="body"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-1">
                                        <label>File:</label>
                                    </div>
                                    <div class="form-group col-md-10">
                                    <p>
                                       <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 309.267 309.267" style="enable-background:new 0 0 309.267 309.267;width: 35px;" xml:space="preserve"><g><path style="fill:#E2574C;" d="M38.658,0h164.23l87.049,86.711v203.227c0,10.679-8.659,19.329-19.329,19.329H38.658 c-10.67,0-19.329-8.65-19.329-19.329V19.329C19.329,8.65,27.989,0,38.658,0z"/><path style="fill:#B53629;" d="M289.658,86.981h-67.372c-10.67,0-19.329-8.659-19.329-19.329V0.193L289.658,86.981z"/><path style="fill:#FFFFFF;" d="M217.434,146.544c3.238,0,4.823-2.822,4.823-5.557c0-2.832-1.653-5.567-4.823-5.567h-18.44 c-3.605,0-5.615,2.986-5.615,6.282v45.317c0,4.04,2.3,6.282,5.412,6.282c3.093,0,5.403-2.242,5.403-6.282v-12.438h11.153 c3.46,0,5.19-2.832,5.19-5.644c0-2.754-1.73-5.49-5.19-5.49h-11.153v-16.903C204.194,146.544,217.434,146.544,217.434,146.544z M155.107,135.42h-13.492c-3.663,0-6.263,2.513-6.263,6.243v45.395c0,4.629,3.74,6.079,6.417,6.079h14.159 c16.758,0,27.824-11.027,27.824-28.047C183.743,147.095,173.325,135.42,155.107,135.42z M155.755,181.946h-8.225v-35.334h7.413 c11.221,0,16.101,7.529,16.101,17.918C171.044,174.253,166.25,181.946,155.755,181.946z M106.33,135.42H92.964 c-3.779,0-5.886,2.493-5.886,6.282v45.317c0,4.04,2.416,6.282,5.663,6.282s5.663-2.242,5.663-6.282v-13.231h8.379 c10.341,0,18.875-7.326,18.875-19.107C125.659,143.152,117.425,135.42,106.33,135.42z M106.108,163.158h-7.703v-17.097h7.703 c4.755,0,7.78,3.711,7.78,8.553C113.878,159.447,110.863,163.158,106.108,163.158z"/ width="15%"></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg><span style="position: absolute;top: 10px;left: : 50px"><?= $fileName ?></span></p>
                                    </div>
                                </div>
                                       <!-- <span><?= $fileName ?></span> -->
                                      <!--  <div class="row">
                                       	<div class="col-md-10">
                                         <iframe src="<?= base_url() .'upload/pdf/'.$fileName ?>" width="400" height="300"></iframe>
                                         	</div>
                                         	</div>
 -->
                                <div class="row">
                                    <div class="col-md-12" style="text-align: center">
                                      <button type="submit" class="btn green">Send Email</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>

                    <script type="text/javascript">
                        //# validation for email
                        $('#email_form').validate({
                            focusInvalid: false,
                                invalidHandler: function(form, validator) {
                                    if (!validator.numberOfInvalids())
                                        return;
                                    $('html, body').animate({
                                        scrollTop: $(validator.errorList[0].element).offset().top
                                    }, 1000);
                                },
                                rules: {
                                    "to":{
                                        required:true,
                                        email:true,
                                    },
                                    "body":{
                                        required:true,
                                    },
                                    "cc":{
                                        email:true,
                                    },
                                    "bcc":{
                                        email:true,
                                    },

                                }
                        })
                    </script>