            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="nav-item start <?php if ($page_name == 'dashboard' || $page_name == 'home') echo 'active open'; ?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title"><?= get_phrase('dashboard'); ?></span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item start ">
                                    <a href="<?= base_url(); ?>" class="nav-link ">
                                        <i class="icon-bar-chart"></i>
                                        <span class="title"><?= get_phrase('homepage'); ?></span>
                                    </a>
                                </li>
                                <li class="nav-item start <?php if ($page_name == 'dashboard') echo 'active open'; ?>">
                                    <a href="<?= base_url(); ?>admin/dashboard" class="nav-link ">
                                        <i class="icon-bulb"></i>
                                        <span class="title"><?= get_phrase('dashboard'); ?></span>
                                        <span class="selected"></span>
                                        <span class="badge badge-success">1</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="heading">
                            <h3 class="uppercase"><?= get_phrase('accounts'); ?></h3>
                        </li>
                        <li class="nav-item <?php if ($page_name == 'manage_author' || $page_name == 'manage_deleted_author') echo 'active open'; ?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-diamond"></i>
                                <span class="title"><?= get_phrase('authors'); ?></span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item <?php if ($page_name == 'manage_author') echo 'active open'; ?>">
                                    <a href="<?= base_url(); ?>admin/authors" class="nav-link ">
                                        <span class="title"><?= get_phrase('author_list'); ?></span>
                                    </a>
                                </li>
                                <li class="nav-item <?php if ($page_name == 'manage_deleted_author') echo 'active open'; ?>">
                                    <a href="<?= base_url(); ?>admin/deleted_authors" class="nav-link ">
                                        <span class="title"><?= get_phrase('deleted_author'); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?php if ($page_name == 'manage_freelancer' || $page_name == 'manage_deleted_freelancer') echo 'active open'; ?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-puzzle"></i>
                                <span class="title"><?= get_phrase('freelancers'); ?></span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item <?php if ($page_name == 'manage_freelancer') echo 'active open'; ?>">
                                    <a href="<?= base_url(); ?>admin/freelancers" class="nav-link ">
                                        <span class="title"><?= get_phrase('freelancer_list'); ?></span>
                                    </a>
                                </li>
                                <li class="nav-item <?php if ($page_name == 'manage_deleted_freelancer') echo 'active open'; ?>">
                                    <a href="<?= base_url(); ?>admin/deleted_freelancers" class="nav-link ">
                                        <span class="title"><?= get_phrase('deleted_freelancer'); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="heading">
                            <h3 class="uppercase"><?= get_phrase('managements'); ?></h3>
                        </li>
                        <li class="nav-item <?php if ($page_name == 'manage_job') echo 'active open'; ?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-settings"></i>
                                <span class="title"><?= get_phrase('jobs_management'); ?></span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item <?php if ($page_name == 'manage_job') echo 'active open'; ?>">
                                    <a href="<?= base_url(); ?>admin/jobs" class="nav-link ">
                                        <span class="title"><?= get_phrase('jobs_list'); ?></span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="form_controls_md.html" class="nav-link ">
                                        <span class="title"><?= get_phrase('jobs_invited'); ?></span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="form_validation.html" class="nav-link ">
                                        <span class="title"><?= get_phrase('proposals'); ?></span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="form_validation_states_md.html" class="nav-link ">
                                        <span class="title"><?= get_phrase('jobs_assigned'); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?php if ($page_name == 'manage_category' || $page_name == 'manage_subcategory') echo 'active open'; ?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-bulb"></i>
                                <span class="title"><?= get_phrase('categories'); ?></span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item <?php if ($page_name == 'manage_category') echo 'active open'; ?>">
                                    <a href="<?= base_url(); ?>admin/categories" class="nav-link ">
                                        <span class="title"><?= get_phrase('category_list'); ?></span>
                                    </a>
                                </li>
                                <li class="nav-item <?php if ($page_name == 'manage_subcategory') echo 'active open'; ?>">
                                    <a href="<?= base_url(); ?>admin/subcategories" class="nav-link ">
                                        <span class="title"><?= get_phrase('subcategory_list'); ?></span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="elements_ribbons.html" class="nav-link ">
                                        <span class="title"><?= get_phrase('change_category_position'); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?php if ($page_name == 'manage_skill') echo 'active open'; ?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-briefcase"></i>
                                <span class="title"><?= get_phrase('skills'); ?></span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item <?php if ($page_name == 'manage_skill') echo 'active open'; ?>">
                                    <a href="<?= base_url(); ?>admin/skills" class="nav-link ">
                                        <span class="title"><?= get_phrase('skill_list'); ?></span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="table_static_responsive.html" class="nav-link ">
                                        <span class="title"><?= get_phrase('deleted_skill'); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="?p=" class="nav-link nav-toggle">
                                <i class="icon-wallet"></i>
                                <span class="title"><?= get_phrase('message_reports'); ?></span>
                            </a>
                        </li>
                        <li class="heading">
                            <h3 class="uppercase"><?= get_phrase('payments'); ?></h3>
                        </li>
                        <li class="nav-item  ">
                            <a href="?p=" class="nav-link nav-toggle">
                                <i class="icon-wallet"></i>
                                <span class="title"><?= get_phrase('payments_list'); ?></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="?p=" class="nav-link nav-toggle">
                                <i class="icon-wallet"></i>
                                <span class="title"><?= get_phrase('pay_freelancer'); ?></span>
                            </a>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>