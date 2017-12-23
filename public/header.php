	<header>
		<div class="container-fluid custom-container">
			<div class="row no_row row-header">
				<div class="brand-be">
					<a href="index-2.html">
						<img class="logo-c active be_logo"  src="<?=base_url()?>assets/public/img/logo.png" alt="logo">
						<img class="logo-c be_logo" src="<?=base_url()?>assets/public/img/logo-green.png" alt="logo2">
						<img  class="logo-c be_logo" src="<?=base_url()?>assets/public/img/logo-orang.png" alt="logo3">
						<img class="logo-c be_logo" src="<?=base_url()?>assets/public/img/logo-red.png" alt="logo4">
					</a>
				</div>
				<div class="header-menu-block">
					<button class="cmn-toggle-switch cmn-toggle-switch__htx"><span></span></button>
					<ul class="header-menu" id="one">
						<li><a href="activity.html">Activity</a></li>
						<li><a href="search.html">Discover</a>
							<ul>
								<li><a href="search.html">Explore</a></li>
								<li><a href="people.html">People</a></li>
								<li><a href="gallery.html">Galleries</a></li>
							</ul>
						</li>
						<li><a href="author-login.html">My Portfolio</a></li>
						<li><a href="site-map.html">Site Map</a></li>
						<li><a href="organization.html">Organization</a></li>
						<li id="ad-work-li"><a id="add-work-btn" class="btn color-1" href="work.html">Add Work </a></li>
					</ul>
				</div>
				<div class="login-header-block">
				<?php if ($this->session->userdata('admin_login') == '1' || $this->session->userdata('user_login') == '1') { ?>
					<div class="login_block">																	
						<a class="notofications-popup" href="blog-detail-2.html">
							<i class="fa fa-bell-o"></i>
							<span class="noto-count">23</span>
						</a>
						<div class="noto-popup notofications-block">
						<div class="m-close"><i class="fa fa-times"></i></div>
							<div class="noto-label">Your Notification</div>
							<div class="noto-body">
								<div class="noto-entry">
									<div class="noto-content clearfix">
										<div class="noto-img">	
											<a href="blog-detail-2.html">
												<img src="<?=base_url()?>assets/public/img/c1.png" alt="" class="be-ava-comment">
											</a>
										</div>
										<div class="noto-text">
											<div class="noto-text-top">
												<span class="noto-name"><a href="blog-detail-2.html">Ravi Sah</a></span>
												<span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
											</div>
											<a href="blog-detail-2.html" class="noto-message">Start following your work</a>
										</div>
									</div>
								</div>
								<div class="noto-entry">
									<div class="noto-content clearfix">
										<div class="noto-img">	
											<a href="blog-detail-2.html">
												<img src="<?=base_url()?>assets/public/img/c6.jpg" alt="" class="be-ava-comment">
											</a>
										</div>
										<div class="noto-text">
											<div class="noto-text-top">
												<span class="noto-name"><a href="blog-detail-2.html">Louis Paquet</a></span>
												<span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
											</div>
											<div class="noto-message">
												Saved “<a href="blog-detail-2.html">Omni-onepage app template</a>” to Inspiration
												<a class="portfolio-link type-2 clearfix" href="blog-detail-2.html">
													<img src="<?=base_url()?>assets/public/img/p_link_23.jpg" alt="">
													<img src="<?=base_url()?>assets/public/img/p_link_31.jpg" alt="">
													<img src="<?=base_url()?>assets/public/img/p_link_32.jpg" alt="">
													<img src="<?=base_url()?>assets/public/img/p_link_33.jpg" alt="">
													<img src="<?=base_url()?>assets/public/img/p_link_34.jpg" alt="">
													<div class="color_bg">
														<span>view portfolio</span>
														<span class="child"></span>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="noto-entry">
									<div class="noto-content clearfix">
										<div class="noto-img">	
											<a href="blog-detail-2.html">
												<img src="<?=base_url()?>assets/public/img/c7.jpg" alt="" class="be-ava-comment">
											</a>
										</div>
										<div class="noto-text">
											<div class="noto-text-top">
												<span class="noto-name"><a href="blog-detail-2.html">v-a studio</a></span>
												<span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
											</div>
											<div class="noto-message">
												<a class="noto-left" href="blog-detail-2.html">
													<img src="<?=base_url()?>assets/public/img/n_pop_1.jpg" alt="">
												</a>
												Saved “<a href="blog-detail-2.html">Omni-onepage app template</a>” to Inspiration
											</div>
										</div>
									</div>
								</div>
								<div class="noto-entry">
									<div class="noto-content clearfix">
										<div class="noto-img">	
											<a href="blog-detail-2.html">
												<img src="<?=base_url()?>assets/public/img/c8.jpg" alt="" class="be-ava-comment">
											</a>
										</div>
										<div class="noto-text">
											<div class="noto-text-top">
												<span class="noto-name"><a href="blog-detail-2.html">Hoang Nguyen</a></span>
												<span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
											</div>
											<div class="noto-message">
												<a class="noto-left" href="blog-detail-2.html">
													<img src="<?=base_url()?>assets/public/img/n_pop_2.jpg" alt="">
												</a>
												Awesome, love the big whitespace and also everything between :)
											</div>
										</div>
									</div>
								</div>
								<div class="noto-entry">
									<div class="noto-content clearfix">
										<div class="noto-img">	
											<a href="blog-detail-2.html">
												<img src="<?=base_url()?>assets/public/img/c9.jpg" alt="" class="be-ava-comment">
											</a>
										</div>
										<div class="noto-text">
											<div class="noto-text-top">
												<span class="noto-name"><a href="blog-detail-2.html">Cüneyt ŞEN</a></span>
												<span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
											</div>
											<a href="blog-detail-2.html" class="noto-message">
												Start following your work
											</a>
										</div>
									</div>
								</div>												
							</div>							
						</div>
						<a class="messages-popup" href="blog-detail-2.html">
							<i class="fa fa-envelope-o"></i>
							<span class="noto-count">4</span>
						</a>
						<div class="noto-popup messages-block">
						<div class="m-close"><i class="fa fa-times"></i></div>
							<div class="noto-label">Your Messages <span class="noto-label-links"><a href="messages-2.html">compose</a><a href="messages.html">View all messages</a></span></div>
							<div class="noto-body">
								<div class="noto-entry style-2">
									<div class="noto-content clearfix">
										<div class="noto-img">	
											<a href="blog-detail-2.html">
												<img src="<?=base_url()?>assets/public/img/c1.png" alt="" class="be-ava-comment">
											</a>
										</div>
										<div class="noto-text">
											<div class="noto-text-top">
												<span class="noto-name"><a href="blog-detail-2.html">Ravi Sah</a></span>
												<span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
											</div>
											<div class="noto-message">Sed velit mauris, pulvinar sit amet accumsan vitae, egestas, pulvinar sit amet accumsan vitae, egestas</div>
										</div>
									</div>
								</div>
								<div class="noto-entry style-2">
									<div class="noto-content clearfix">
										<div class="noto-img">	
											<a href="blog-detail-2.html">
												<img src="<?=base_url()?>assets/public/img/c6.jpg" alt="" class="be-ava-comment">
											</a>
										</div>
										<div class="noto-text">
											<div class="noto-text-top">
												<span class="noto-name"><a href="blog-detail-2.html">Louis Paquet</a></span>
												<span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
											</div>
											<div class="noto-message">
											Pellentesque habitant morbi tristique senectus et netus tristique senectus
											</div>
										</div>
									</div>
								</div>
								<div class="noto-entry style-2">
									<div class="noto-content clearfix">
										<div class="noto-img">	
											<a href="blog-detail-2.html">
												<img src="<?=base_url()?>assets/public/img/c9.jpg" alt="" class="be-ava-comment">
											</a>
										</div>
										<div class="noto-text">
											<div class="noto-text-top">
												<span class="noto-name"><a href="blog-detail-2.html">Cüneyt ŞEN</a></span>
												<span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
											</div>
											<div class="noto-message">
												Sed id erat vitae libero malesuada dictum vel sit amet eros
											</div>
										</div>
									</div>
								</div>								
								<div class="noto-entry style-2">
									<div class="noto-content clearfix">
										<div class="noto-img">	
											<a href="blog-detail-2.html">
												<img src="<?=base_url()?>assets/public/img/c10.jpg" alt="" class="be-ava-comment">
											</a>
										</div>
										<div class="noto-text">
											<div class="noto-text-top">
												<span class="noto-name"><a href="blog-detail-2.html">Tomasz Mazurczak</a></span>
												<span class="noto-date"><i class="fa fa-clock-o"></i> May 27, 2015</span>
											</div>
											<div class="noto-message">
												In molestie libero quis cursus ullamcorper eu rhoncus magna
											</div>
										</div>
									</div>
								</div>												
							</div>							
						</div>
						<div class="be-drop-down login-user-down">
							<img class="login-user" src="<?=$this->core_model->get_image_url($account_type, $this->session->userdata('login_user_id'))?>" alt="<?=$this->session->userdata('name')?>" width="40px" height="40px">
							<span class="be-dropdown-content">Hi, <span><?=$this->session->userdata('name')?></span></span>
							<div class="drop-down-list a-list">
								<a href="<?=base_url()?><?=$this->session->userdata('username')?>"><?=get_phrase('my_profile')?></a>
								<a href="statictics.html">Statistics </a>
								<a href="about-us.html">Work Experience</a>
								<a href="author-edit.html">Account Settings</a>
								<a href="<?=base_url()?>login/logout"><?=get_phrase('logout')?></a>
							</div>
						</div>																		
					</div>
				<?php } else { ?>
					<a class="btn-login btn color-1 size-2 hover-2" href="<?=base_url()?>login" ><i class="fa fa-user"></i><?=get_phrase('login')?></a>
				<?php } ?>
				</div>
			</div>
		</div>
	</header>