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
										<a href="<?=base_url()?>admin/dashboard/skills" class="m-nav__link">
											<span class="m-nav__link-text">
												<?=get_phrase('skills')?>
											</span>
										</a>
									</li>
									<li class="m-nav__separator">
										-
									</li>
									<li class="m-nav__item">
										<a href="<?=base_url()?>admin/dashboard/skills/add/" class="m-nav__link">
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
									<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" action="<?=base_url()?>admin/skills/create/" method="post" enctype="multipart/form-data">
										<div class="m-portlet__body">
											<div class="form-group m-form__group row">
												<div class="col-lg-6">
													<label class="col-form-label col-lg-3 col-sm-12">
														<?=get_phrase('name')?>:
													</label>
													<input type="text" name="name" id="name" class="form-control m-input" placeholder="<?=get_phrase('enter_name')?>" required>
													<span class="m-form__help">
														<?=get_phrase('please_enter_skill_name')?>
													</span>
												</div>
												<div class="col-lg-6">
													<div class="col-lg-6">
													<label class="col-form-label col-lg-3 col-sm-12">
														<?=get_phrase('status')?>:
													</label></br>
													<span class="m-bootstrap-switch m-bootstrap-switch--pill m-bootstrap-switch--air">
														<input data-switch="true" name="status" id="status" type="checkbox" data-on-text="active" data-off-text="inactive" data-on-color="info" data-off-color="danger">
														<input type="hidden" name="is_active" id="is_active" value="false">
													</span>
													<span class="m-form__help">
														<?=get_phrase('please_select_status')?>
													</span>
												</div>
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
        			$('[data-switch=true]').bootstrapSwitch();
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