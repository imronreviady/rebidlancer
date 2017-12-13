<?php
	$single_author_info = $this->db->get_where('author', array('author_id' => $this->uri->segment(4)))->result_array();
	foreach ($single_author_info as $row) {
?>
			<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
									<?= $page_title; ?>
								</h3>
								<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
									<li class="m-nav__item m-nav__item--home">
										<a href="<?=base_url()?>admin/dashboard/" class="m-nav__link m-nav__link--icon">
											<i class="m-nav__link-icon la la-home"></i>
										</a>
									</li>
									<li class="m-nav__separator">
										-
									</li>
									<li class="m-nav__item">
										<a href="<?=base_url()?>admin/dashboard/authors" class="m-nav__link">
											<span class="m-nav__link-text">
												<?=get_phrase('authors')?>
											</span>
										</a>
									</li>
									<li class="m-nav__separator">
										-
									</li>
									<li class="m-nav__item">
										<a href="<?=base_url()?>admin/dashboard/authors/add/" class="m-nav__link">
											<span class="m-nav__link-text">
												<?= $page_title; ?>
											</span>
										</a>
									</li>
								</ul>
							</div>
							<div>
								<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
									<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
										<i class="la la-plus m--hide"></i>
										<i class="la la-ellipsis-h"></i>
									</a>
									<div class="m-dropdown__wrapper">
										<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
										<div class="m-dropdown__inner">
											<div class="m-dropdown__body">
												<div class="m-dropdown__content">
													<ul class="m-nav">
														<li class="m-nav__section m-nav__section--first m--hide">
															<span class="m-nav__section-text">
																Quick Actions
															</span>
														</li>
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																<i class="m-nav__link-icon flaticon-share"></i>
																<span class="m-nav__link-text">
																	Activity
																</span>
															</a>
														</li>
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																<i class="m-nav__link-icon flaticon-chat-1"></i>
																<span class="m-nav__link-text">
																	Messages
																</span>
															</a>
														</li>
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																<i class="m-nav__link-icon flaticon-info"></i>
																<span class="m-nav__link-text">
																	FAQ
																</span>
															</a>
														</li>
														<li class="m-nav__item">
															<a href="" class="m-nav__link">
																<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																<span class="m-nav__link-text">
																	Support
																</span>
															</a>
														</li>
														<li class="m-nav__separator m-nav__separator--fit"></li>
														<li class="m-nav__item">
															<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
																Submit
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END: Subheader -->
					<div class="m-content">
						<div class="row">
							<div class="col-lg-12">
								<!--begin::Portlet-->
								<div class="m-portlet">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
												<h3 class="m-portlet__head-text">
													<?=$page_title;?>
												</h3>
											</div>
										</div>
									</div>
									<!--begin::Form-->
									<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" action="<?=base_url()?>admin/authors/update/<?=$row['author_id']?>" method="post" enctype="multipart/form-data">
										<div class="m-portlet__body">
											<div class="form-group m-form__group row">
												<div class="col-lg-6">
													<label>
														<?=get_phrase('full_name')?>:
													</label>
													<input type="text" name="name" id="name" class="form-control m-input" placeholder="<?=get_phrase('enter_full_name')?>" value="<?=$row['name']?>" required>
													<span class="m-form__help">
														<?=get_phrase('please_enter_author_full_name')?>
													</span>
												</div>
												<div class="col-lg-6">
													<label class="">
														<?=get_phrase('username')?>:
													</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="text" name="username" id="username" class="form-control m-input" placeholder="<?=get_phrase('enter_username')?>" value="<?=$row['username']?>" required>
														<span class="m-input-icon__icon m-input-icon__icon--right">
															<span>
																<i class="fa fa-refresh fa-spin" id="loaderIcon" style="display: none"></i>
																<i class="fa fa-check-circle-o" id="successIcon" style="display: none"></i>
																<i class="fa fa-ban" id="failedIcon" style="display: none"></i>
															</span>
														</span>
													</div>
													<span class="m-form__help">
														<?=get_phrase('please_enter_author_username')?>
													</span>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<div class="col-lg-6">
													<label>
														<?=get_phrase('email')?>:
													</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="text" name="email" id="email" class="form-control m-input" placeholder="<?=get_phrase('enter_email_address')?>" value="<?=$row['email']?>" required>
														<span class="m-input-icon__icon m-input-icon__icon--right">
															<span>
																<i class="la la-envelope-o"></i>
															</span>
														</span>
													</div>
													<span class="m-form__help">
														<?=get_phrase('please_enter_author_email')?>
													</span>
												</div>
												<div class="col-lg-6">
													<label class="">
														<?=get_phrase('phone')?>:
													</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="text" name="phone" id="phone" class="form-control m-input" placeholder="<?=get_phrase('enter_phone_number')?>" value="<?=$row['phone']?>">
														<span class="m-input-icon__icon m-input-icon__icon--right">
															<span>
																<i class="la la-phone"></i>
															</span>
														</span>
													</div>
													<span class="m-form__help">
														<?=get_phrase('please_enter_author_phone_number')?>
													</span>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<div class="col-lg-6">
													<label class="">
														<?=get_phrase('author_image')?>
													</label>
													<div></div>
													<img src="<?=$this->core_model->get_image_url('author' , $row['author_id'])?>" class="m--img-rounded m--marginless" alt="" width="40" height="40">
													<label class="custom-file">
														<input type="file" name="image" id="image" class="custom-file-input" accept="image/*">
														<span class="custom-file-control"></span>
													</label>
												</div>
												<div class="col-lg-6">
													<label class="">
														<?=get_phrase('password')?>:
													</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="password" name="password" id="password" class="form-control m-input" placeholder="<?=get_phrase('enter_password')?>">
														<span class="m-input-icon__icon m-input-icon__icon--right">
															<span>
																<i class="la la-key"></i>
															</span>
														</span>
													</div>
													<span class="m-form__help">
														<?=get_phrase('please_enter_author_password')?>
													</span>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<div class="col-lg-6">
													<label class="">
														<?=get_phrase('status')?>:
													</label>
													<span class="m-bootstrap-switch m-bootstrap-switch--pill m-bootstrap-switch--air">
														<input data-switch="true" name="status" id="status" type="checkbox" data-on-text="active" data-off-text="inactive" data-on-color="info" data-off-color="danger">
														<input type="hidden" name="is_active" id="is_active" value="<?=$row['is_active']?>">
													</span>
													<span class="m-form__help">
														<?=get_phrase('please_select_user_status')?>
													</span>
												</div>
											</div>
										</div>
										<div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
											<div class="m-form__actions m-form__actions--solid">
												<div class="row">
													<div class="col-lg-6">
														<button type="submit" class="btn btn-primary">
															Save
														</button>
														<button type="reset" class="btn btn-secondary">
															Cancel
														</button>
													</div>
												</div>
											</div>
										</div>
									</form>
									<!--end::Form-->
								</div>
								<!--end::Portlet-->
							</div>
						</div>
					</div>
				</div>

				<script type="text/javascript">
					// phone number
        			$("#phone").inputmask("mask", {
            			"mask": "(999) 999-999-9999",
            			placeholder: ""
        			});

        			//email address
        			$("#email").inputmask({
            			mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]",
            			greedy: false,
            			onBeforePaste: function (pastedValue, opts) {
                			pastedValue = pastedValue.toLowerCase();
                			return pastedValue.replace("mailto:", "");
            			},
            			definitions: {
                			'*': {
                    			validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~\-]",
                    			cardinality: 1,
                    			casing: "lower"
                			}
            			}
        			});
        		<?php if ($row['is_active'] == 'true') { ?>
        			$('[data-switch=true]').bootstrapSwitch('state', true);
        		<?php } else { ?>
        			$('[data-switch=true]').bootstrapSwitch('state', false);
        		<?php } ?>
        			$('#status').on('switchChange.bootstrapSwitch',function (e,state) {
    					if ($("#status").bootstrapSwitch('state') === true) {
        					var value = 'true';
        					$('#is_active').val(value);
    					}
    					else {
        					var value = 'false';
        					$('#is_active').val(value);
    					}
					});
				</script>
<?php } ?>