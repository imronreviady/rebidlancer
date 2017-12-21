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
										<a href="<?=base_url()?>admin/dashboard/jobs" class="m-nav__link">
											<span class="m-nav__link-text">
												<?=get_phrase('jobs')?>
											</span>
										</a>
									</li>
									<li class="m-nav__separator">
										-
									</li>
									<li class="m-nav__item">
										<a href="<?=base_url()?>admin/dashboard/jobs/add/" class="m-nav__link">
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
									<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" action="<?=base_url()?>admin/jobs/create/" method="post" enctype="multipart/form-data">
										<div class="m-portlet__body">
											<div class="form-group m-form__group row">
												<div class="col-lg-6">
													<label>
														<?=get_phrase('title')?>:
													</label>
													<input type="text" name="title" id="title" class="form-control m-input" placeholder="<?=get_phrase('enter_title')?>" required>
													<span class="m-form__help">
														<?=get_phrase('please_enter_job_title')?>
													</span>
												</div>
												<div class="col-lg-6">
													<label>
														<?=get_phrase('slug')?>:
													</label>
													<input type="text" name="slug" id="slug" class="form-control m-input" placeholder="<?=get_phrase('enter_slug')?>" required>
													<span class="m-form__help">
														<?=get_phrase('please_enter_job_slug')?>
													</span>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<div class="col-lg-6">
													<label>
														<?=get_phrase('category')?>
													</label>
													<select class="form-control m-bootstrap-select m-bootstrap-select--air m-bootstrap-select--pill m_selectpicker" data-live-search="true" name="category_id" id="category_id" title="<?=get_phrase('choose_one_of_the_following')?>...">
												<?php 
													$query = $this->db->get_where('category', array('is_active' => 'true', 'is_deleted' => 'false'))->result_array();
													foreach ($query as $row) {
												?>
														<option value="<?=$row['category_id']?>">
															<?= $row['name'] ?>
														</option>
												<?php } ?>
													</select>
													<span class="m-form__help">
														<?=get_phrase('please_select_parent_category')?>
													</span>
												</div>
												<div class="col-lg-6">
													<label>
														<?=get_phrase('subcategory')?>
													</label>
													<select class="form-control m-bootstrap-select m-bootstrap-select--air m-bootstrap-select--pill m_selectpicker" data-live-search="true" name="subcategory_id" id="subcategory_id" title="<?=get_phrase('choose_one_of_the_following')?>...">
												<?php 
													$query = $this->db->get_where('subcategory', array('is_active' => 'true', 'is_deleted' => 'false'))->result_array();
													foreach ($query as $row) {
												?>
														<option value="<?=$row['subcategory_id']?>">
															<?= $row['name'] ?>
														</option>
												<?php } ?>
													</select>
													<span class="m-form__help">
														<?=get_phrase('please_select_parent_category')?>
													</span>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<div class="col-lg-6">
													<label>
														<?=get_phrase('budget')?>:
													</label>
													<input type="number" name="budget" id="budget" class="form-control m-input" placeholder="<?=get_phrase('enter_budget')?>" required>
													<span class="m-form__help">
														<?=get_phrase('please_enter_budget_in_USD')?>
													</span>
												</div>
												<div class="col-lg-6">
													<label>
														<?=get_phrase('skill')?>
													</label>
													<select class="form-control m-select2" id="skills" name="skills" multiple="multiple">
												<?php 
													$query = $this->db->get_where('skill', array('is_active' => 'true', 'is_deleted' => 'false'))->result_array();
													foreach ($query as $row) {
												?>
														<option value="<?=$row['name']?>">
															<?= $row['name'] ?>
														</option>
												<?php } ?>
													</select>
													<span class="m-form__help">
														<?=get_phrase('please_select_skill_require')?>
													</span>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<div class="col-lg-6">
													<label>
														<?=get_phrase('start_and_finish_date')?>
													</label>
													<div class="input-daterange input-group" id="start_finish_date">
														<input type="text" class="form-control m-input" name="started_at" id="started_at" />
														<span class="input-group-addon">
															<i class="la la-ellipsis-h"></i>
														</span>
														<input type="text" class="form-control" name="ended_at" id="ended_at" />
													</div>
													<span class="m-form__help">
														<?=get_phrase('please_select_start_and_finish_date')?>
													</span>
												</div>
												<div class="col-lg-6">
													<label>
														<?=get_phrase('status')?>
													</label>
													<select class="form-control m-bootstrap-select m-bootstrap-select--air m-bootstrap-select--pill m_selectpicker" data-live-search="true" name="status" id="status" title="<?=get_phrase('choose_one_of_the_following')?>...">
														<option value="open">
															open
														</option>
														<option value="closed">
															closed
														</option>
														<option value="pending">
															pending
														</option>
													</select>
													<span class="m-form__help">
														<?=get_phrase('please_select_job_status')?>
													</span>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<div class="col-lg-6">
													<label class="">
														<?=get_phrase('public')?>:
													</label>
													<span class="m-bootstrap-switch m-bootstrap-switch--pill m-bootstrap-switch--air">
														<input data-switch="true" name="public" id="public" type="checkbox" data-on-text="public" data-off-text="not public" data-on-color="info" data-off-color="danger">
														<input type="hidden" name="is_public" id="is_public" value="false">
													</span>
													<span class="m-form__help">
														<?=get_phrase('please_select_job_privacy')?>
													</span>
												</div>
												<div class="col-lg-6">
													<label class="">
														<?=get_phrase('featured')?>:
													</label>
													<span class="m-bootstrap-switch m-bootstrap-switch--pill m-bootstrap-switch--air">
														<input data-switch="true" name="featured" id="featured" type="checkbox" data-on-text="featured" data-off-text="not featured" data-on-color="info" data-off-color="danger">
														<input type="hidden" name="is_featured" id="is_featured" value="false">
													</span>
													<span class="m-form__help">
														<?=get_phrase('job_is_featured_or_not_?')?>
													</span>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<div class="col-lg-12">
													<label class="">
														<?=get_phrase('description')?>:
													</label>
													<div class="m-input-icon m-input-icon--right">
														<textarea name="description" id="description" class="form-control m-input summernote" placeholder="<?=get_phrase('enter_description')?>" rows="5" required></textarea>
														<span class="m-input-icon__icon m-input-icon__icon--right">
															<span>
																<i class="fa fa-refresh fa-spin" id="loaderIcon" style="display: none"></i>
																<i class="fa fa-check-circle-o" id="successIcon" style="display: none"></i>
																<i class="fa fa-ban" id="failedIcon" style="display: none"></i>
															</span>
														</span>
													</div>
													<span class="m-form__help">
														<?=get_phrase('please_enter_job_description')?>
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
					$('#start_finish_date').datepicker({
            			todayHighlight: true,
            				templates: {
                				leftArrow: '<i class="la la-angle-left"></i>',
                				rightArrow: '<i class="la la-angle-right"></i>'
            				},
            			format: "yyyy-mm-dd"
        			});
					$('#skills').select2({
						placeholder: "<?=get_phrase('select_skill_required')?>",
        			});
					$('.m_selectpicker').selectpicker();
        			$('[data-switch=true]').bootstrapSwitch();
        			$('#public').on('switchChange.bootstrapSwitch',function (e,state) {
    					if ($("#public").bootstrapSwitch('state') === true) {
        					var value = 'true';
        					$('#is_public').val(value);
    					}
    					else {
        					var value = 'false';
        					$('#is_public').val(value);
    					}
					});
					$('#featured').on('switchChange.bootstrapSwitch',function (e,state) {
    					if ($("#featured").bootstrapSwitch('state') === true) {
        					var value = 'true';
        					$('#is_featured').val(value);
    					}
    					else {
        					var value = 'false';
        					$('#is_featured').val(value);
    					}
					});
					$('.summernote').summernote({
            			height: 300
        			});
					$("#title").keyup(function() {
						var Text = $(this).val();
						Text = Text.toLowerCase();
						Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
						$("#slug").val(Text);
					});
				</script>