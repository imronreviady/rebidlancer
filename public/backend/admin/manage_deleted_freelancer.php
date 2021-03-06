                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase"> <?= $page_title; ?> <?= get_phrase('list'); ?></span>
                                    </div>
                                    <div class="actions">
                                        <!--<div class="btn-group btn-group-devided" data-toggle="buttons">
                                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                                                <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                                                <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                                        </div>-->
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <!--<div class="btn-group">
                                                    <button id="sample_editable_1_new" onclick="showAjaxModal('<?= base_url(); ?>modal/popup/add_freelancer/');" class="btn sbold green"> <?= get_phrase('add_new'); ?>
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>-->
                                            </div>
                                            <div class="col-md-6">
                                                <!--<div class="btn-group pull-right">
                                                    <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-print"></i> Print </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                                        </li>
                                                    </ul>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                        <span></span>
                                                    </label>
                                                </th>
                                                <th> <?= get_phrase('name'); ?> </th>
                                                <th> <?= get_phrase('email'); ?> </th>
                                                <th> <?= get_phrase('status'); ?> </th>
                                                <th> <?= get_phrase('joined'); ?> </th>
                                                <th> <?= get_phrase('actions'); ?> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($deleted_freelancer_info as $row) { ?>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <img src="<?= $this->core_model->get_image_url('freelancer' , $row['freelancer_id']);?>" class="img-circle" width="40px" height="40px">
                                                    <?= $row['name'] ?>
                                                </td>
                                                <td>
                                                    <a href="mailto:<?= $row['email'] ?>"> <?= $row['email'] ?> </a>
                                                </td>
                                                <td>
                                                <?php if ($row['is_active'] == 'true') { ?>
                                                    <span class="label label-sm label-success"> <?= get_phrase('approved'); ?> </span>
                                                <?php } elseif ($row['is_active'] == 'false') { ?>
                                                    <span class="label label-sm label-warning"> <?= get_phrase('in_active'); ?> </span>
                                                <?php } ?>
                                                </td>
                                                <td class="center"> <?=english_date(substr($row['created_at'], 0, 10))?> </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> <?= get_phrase('actions'); ?>
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu pull-left" role="menu">
                                                            <li>
                                                                <a href="javascript:;" class="restorebtn" data-type="deleted_freelancer" data-id="<?= $row['freelancer_id'] ?>">
                                                                    <i class="icon-docs"></i> <?= get_phrase('restore'); ?> </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;" class="deletebtn" data-type="deleted_freelancer" data-id="<?= $row['freelancer_id'] ?>">
                                                                    <i class="icon-user"></i> <?= get_phrase('delete_permanent'); ?> </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-flag"></i> <?= get_phrase('details'); ?>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?= base_url(); ?>assets-backend/assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets-backend/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets-backend/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets-backend/assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->