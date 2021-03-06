<?php foreach ($profile_info as $row) { ?>
	<div id="content-block">
		<div class="container be-detail-container">
			<div class="row">
				<div class="col-xs-12 col-md-3 left-feild">
					<div class="be-vidget back-block">
						<a class="btn full color-1 size-1 hover-1" href="<?=base_url()?><?=$row['username']?>"><i class="fa fa-chevron-left"></i><?=get_phrase('back_to_profile')?></a>
					</div>
					<div class="be-vidget hidden-xs hidden-sm" id="scrollspy">
						<h3 class="letf-menu-article">
							<?=get_phrase('choose_category')?>
						</h3>
						<div class="creative_filds_block">
							<ul class="ul nav">
								<li class="edit-ln"><a href="#basic-information">Basic Information</a></li>
								<li class="edit-ln"><a href="#edit-password">Edit Password</a></li>
								<li class="edit-ln"><a href="#on-the-web">On The Web</a></li>
								<li class="edit-ln"><a href="#about-me">About Me</a></li>
								<li class="edit-ln"><a href="#web-references">Web References</a></li>
							</ul>
						</div>
						<a class="btn full color-1 size-1 hover-1 add_section"><i class="fa fa-plus"></i>add sections</a>	
					</div>

				</div>
				<div class="col-xs-12 col-md-9 _editor-content_">
					<div class="sec"  data-sec="basic-information">
						<div class="be-large-post">
							<div class="info-block style-2">
								<div class="be-large-post-align "><h3 class="info-block-label">Basic Information</h3></div>
							</div>
							<div class="be-large-post-align">
								<div class="be-change-ava">
									<a class="be-ava-user style-2" href="blog-detail-2.html">
										<img class="img-circle" src="<?=$this->core_model->get_image_url('user', $row['user_id'])?>" alt=""> 
									</a>
									<a class="btn color-4 size-2 hover-7">replace image</a>
								</div>
							</div>
							<div class="be-large-post-align">
								<div class="row">
									<div class="input-col col-xs-12 col-sm-6">
										<div class="form-group fg_icon focus-2">
											<div class="form-label"><?=get_phrase('first_name')?></div>
											<input class="form-input" type="text" name="first_name" id="first_name" value="<?=$row['first_name']?>">
										</div>
									</div>
									<div class="input-col col-xs-12 col-sm-6">
										<div class="form-group focus-2">
											<div class="form-label"><?=get_phrase('last_name')?></div>									
											<input class="form-input" type="text" name="last_name" id="last_name" value="<?=$row['last_name']?>">
										</div>								
									</div>
									<div class="input-col col-xs-12">
										<div class="form-group focus-2">
											<div class="form-label"><?=get_phrase('professional_title')?></div>									
											<input class="form-input" type="text" name="professional_title" id="professional_title" value="<?=$row['professional_title']?>">
										</div>								
									</div>
									<div class="input-col col-xs-12">
										<div class="form-group focus-2">
											<div class="form-label">Company</div>									
											<input class="form-input" type="text" placeholder="">
										</div>								
									</div>
									<div class="input-col col-xs-12 col-sm-6">
										<div class="form-label">Country</div>
										<div class="be-drop-down icon-none">
											<span class="be-dropdown-content"> United Kingdom </span>
											<ul class="drop-down-list">
												<li><a>USA</a></li>
												<li><a>India</a></li>
												<li><a>Mexica</a></li>
												<li><a>Russia</a></li>
												<li><a>Italy</a></li>
											</ul>
										</div>
									</div>
									<div class="input-col col-xs-12 col-sm-6">
										<div class="form-group focus-2">
											<div class="form-label">City</div>									
											<input class="form-input" type="text" value="Barnsley">
										</div>								
									</div>
									<div class="input-col col-xs-12">
										<div class="form-group focus-2">
											<div class="form-label">Website URL</div>									
											<input class="form-input" type="text" value="http:// www.phoenix.cool">
										</div>								
									</div>								
								</div>
							</div>
						</div>
					</div>
					<div class="sec"  data-sec="edit-password">
						<div class="be-large-post">
							<div class="info-block style-2">
								<div class="be-large-post-align"><h3 class="info-block-label">Password</h3></div>
							</div>
							<div class="be-large-post-align">
								<div class="row">
									<div class="input-col col-xs-12 col-sm-4">
										<div class="form-group focus-2">
											<div class="form-label">Old Password</div>									
											<input class="form-input" type="password" placeholder="">
										</div>								
									</div>
									<div class="input-col col-xs-12 col-sm-4">
										<div class="form-group focus-2">
											<div class="form-label">New Password</div>									
											<input class="form-input" type="password" placeholder="">
										</div>								
									</div>
									<div class="input-col col-xs-12 col-sm-4">
										<div class="form-group focus-2">
											<div class="form-label">Repeat Password</div>									
											<input class="form-input" type="password" placeholder="">
										</div>								
									</div>
									<div class="col-xs-12">
										<a class="btn color-1 size-2 hover-1 btn-right">change password</a>
									</div>																
								</div>
							</div>
						</div>
					</div>
					<div class="sec" data-sec="on-the-web">
						<div class="be-large-post m-social">
							<div class="info-block style-2">
								<div class="be-large-post-align"><h3 class="info-block-label">On The Web</h3></div>
							</div>
							<div class="be-large-post-align">
								<div class="social-input form-group focus-2">
									<div class="s_icon">
										<div class="social-bars"><i class="fa fa-bars"></i></div>
										<a class="social-btn color-1" href="blog-detail-2.html"><i class="fa fa-facebook"></i></a>
									</div>
									<div class="s_input">
										<input class="form-input" type="text" value="http:// facebook.com/taylor">
									</div>
								</div>
								<div class="social-input form-group focus-2">
									<div class="s_icon">
										<div class="social-bars"><i class="fa fa-bars"></i></div>
										<a class="social-btn color-2" href="blog-detail-2.html"><i class="fa fa-twitter"></i></a>
									</div>
									<div class="s_input">
										<input class="form-input" type="text" value="http:// twitter.com/taylor">
									</div>
								</div>
								<div class="social-input form-group focus-2">
									<div class="s_icon">
										<div class="social-bars"><i class="fa fa-bars"></i></div>
										<a class="social-btn color-3" href="blog-detail-2.html"><i class="fa fa-google-plus"></i></a>
									</div>
									<div class="s_input">
										<input class="form-input" type="text" value="http:// googleplus.com/taylor">
									</div>
								</div>
								<div class="social-input form-group focus-2">
									<div class="s_icon">
										<div class="social-bars"><i class="fa fa-bars"></i></div>
										<a class="social-btn color-4" href="blog-detail-2.html"><i class="fa fa-pinterest-p"></i></a>
									</div>
									<div class="s_input">
										<input class="form-input" type="text" value="http:// pinterest.com/taylor">
									</div>
								</div>
								<div class="social-input form-group focus-2">
									<div class="s_icon">
										<div class="social-bars"><i class="fa fa-bars"></i></div>
										<a class="social-btn color-5" href="blog-detail-2.html"><i class="fa fa-instagram"></i></a>
									</div>
									<div class="s_input">
										<input class="form-input" type="text" value="http:// instagram.com/taylor">
									</div>
								</div>																													
							</div>
						</div>
					</div>

					<div class="sec"  data-sec="about-me" >
						<div class="be-large-post">
							<div class="info-block style-2">
								<div class="be-large-post-align"><h3 class="info-block-label">About Me</h3></div>
							</div>
							<div class="be-large-post-align">
								<div class="row">
									<div class="input-col col-xs-12">
										<div class="form-group focus-2">
											<div class="form-label">Section Title</div>									
											<input class="form-input" type="text" placeholder="About Me">
										</div>								
									</div>
									<div class="input-col col-xs-12">
										<div class="form-group focus-2">
											<div class="form-label">Description</div>
											<textarea class="form-input" required="" placeholder="Something about you"></textarea>
										</div>
									</div>
								</div>
							</div>						
						</div>
					</div>

					<div class=" sec" data-sec="web-references">
						<div class="be-large-post">
							<div class="info-block style-2">
								<div class="be-large-post-align"><h3 class="info-block-label">Web References</h3></div>
							</div>
							<div class="be-large-post-align">
								<div class="row">
									<div class="input-col col-xs-12 col-sm-5">
										<div class="form-group focus-2">
											<div class="form-label">Link Title</div>									
											<input class="form-input" type="text" placeholder="Enter title">
										</div>								
									</div>
									<div class="input-col col-xs-12 col-sm-5">
										<div class="form-group focus-2">
											<div class="form-label">Link descriprion</div>									
											<input class="form-input" type="text" placeholder="Enter descriprion">
										</div>								
									</div>
									<div class="col-xs-12 col-sm-2">								
										<a href="blog-detail-2.html" class="btn full btn-input color-1 size-4 hover-1">add</a>
									</div>
								</div>							
							</div>
						</div>
					</div>
					<a class="btn full color-1 size-1 hover-1 add_section"><i class="fa fa-plus"></i>add sections</a>																				
				</div>				
			</div>
		</div>
	</div>
<?php } ?>