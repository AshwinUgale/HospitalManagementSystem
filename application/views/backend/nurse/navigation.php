    <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> 
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                                </span> 
                        </div>
                        <!-- /input-group -->
                </li>
                    <li class="user-pro">
                    <?php 
                    $key = $this->session->userdata('login_type') . '_id';
                    $image_path = 'uploads/' . $this->session->userdata('login_type') . '_image/' . $this->session->userdata($key). '.jpg';

                    if(!file_exists($image_path)){
                        $image_path = 'uploads/default.jpg';
                    }
                    
                    ?>
                        <a href="#" class="waves-effect"><img src="<?php echo base_url(). $image_path;?>" alt="user-img" class="img-circle"> 
                    
                        <span class="hide-menu">
                        
                    <?php 
                    $account_type   = $this->session->userdata('login_type');
                    $account_id     = $account_type.'_id';
                    $name = $this->crud_model->get_type_name_by_id($account_type, $this->session->userdata($account_id), 'name');
                    echo $name;
                    ?>
                    <span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url();?>nurse/manage_profile"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                            <li><a href="<?php echo base_url();?>login/logout"><i class="fa fa-sign-out-off"></i> Logout</a></li>
                        </ul>
                    </li>

                    <li class="<?php if($page_name == 'dashboard') echo 'active';?>"> 
                        <a href="<?php echo base_url();?>nurse/dashboard" class="waves-effect">
                            <i class="ti-dashboard p-r-10"></i>
                            <span class="hide-menu"><?php echo get_phrase('dashboard');?></span>
                        </a> 
                    </li>

                <li> 
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-users p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('Manage Patient');?> <span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level"<?php if($page_name == 'add_patient' 
                    || $page_name == 'edit_patient' || $page_name == 'list_patient') echo 'active';?>>

                            <li class="<?php if($page_name == 'add_patient') echo 'active';?>"> 
                                <a href="<?php echo base_url();?>patient/add_patient">
                                    <i class="fa fa-angle-double-right p-r-10"></i>
                                    <span class="hide-menu"><?php echo get_phrase('Add Patient');?></span>
                                </a> 
                            </li>

                    

                            <li class="<?php if($page_name == 'list_patient') echo 'active';?>"> 
                                <a href="<?php echo base_url();?>patient/list_patient">
                                    <i class="fa fa-angle-double-right p-r-10"></i>
                                    <span class="hide-menu"><?php echo get_phrase('List Patient');?></span>
                                </a> 
                            </li>

                    </ul>
                </li>

                <li> 
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-calendar p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('Manage Schedule');?> <span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level"<?php if($page_name == 'add_schedule' || $page_name == 'list_schedule') echo 'active';?>>

                            <li class="<?php if($page_name == 'add_schedule') echo 'active';?>"> 
                                <a href="<?php echo base_url();?>nurse/add_schedule">
                                    <i class="fa fa-angle-double-right p-r-10"></i>
                                    <span class="hide-menu"><?php echo get_phrase('Add Schedule');?></span>
                                </a> 
                            </li>

                            <li class="<?php if($page_name == 'list_schedule') echo 'active';?>"> 
                                <a href="<?php echo base_url();?>nurse/list_schedule">
                                    <i class="fa fa-angle-double-right p-r-10"></i>
                                    <span class="hide-menu"><?php echo get_phrase('List Schedule');?></span>
                                </a> 
                            </li>
                    </ul>
                </li>                 

                <li> 
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-bed p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('Manage Bed');?> <span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level"<?php if($page_name == 'manage_bed' 
                    || $page_name == 'bed_ward' || $page_name == 'assign_bed') echo 'active';?>>

                            <li class="<?php if($page_name == 'manage_bed') echo 'active';?>"> 
                                <a href="<?php echo base_url();?>bed/manage_bed">
                                    <i class="fa fa-angle-double-right p-r-10"></i>
                                    <span class="hide-menu"><?php echo get_phrase('Manage Bed');?></span>
                                </a> 
                            </li>

                            <li class="<?php if($page_name == 'bed_ward') echo 'active';?>"> 
                                <a href="<?php echo base_url();?>bed/bed_ward">
                                    <i class="fa fa-angle-double-right p-r-10"></i>
                                    <span class="hide-menu"><?php echo get_phrase('Bed Ward');?></span>
                                </a> 
                            </li>

                            <li class="<?php if($page_name == 'assign_bed') echo 'active';?>"> 
                                <a href="<?php echo base_url();?>bed/assign_bed">
                                    <i class="fa fa-angle-double-right p-r-10"></i>
                                    <span class="hide-menu"><?php echo get_phrase('Assign Bed');?></span>
                                </a> 
                            </li>

                    </ul>
                </li>



                <li> 
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-calendar p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('Manage Appointment');?> <span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level"<?php if($page_name == 'add_appointment' || $page_name == 'list_appointment') echo 'active';?>>

                            <li class="<?php if($page_name == 'add_appointment') echo 'active';?>"> 
                                <a href="<?php echo base_url();?>nurse/add_appointment">
                                    <i class="fa fa-angle-double-right p-r-10"></i>
                                    <span class="hide-menu"><?php echo get_phrase('Add Appointment');?></span>
                                </a> 
                            </li>

                            <li class="<?php if($page_name == 'list_appointment') echo 'active';?>"> 
                                <a href="<?php echo base_url();?>nurse/list_appointment">
                                    <i class="fa fa-angle-double-right p-r-10"></i>
                                    <span class="hide-menu"><?php echo get_phrase('List Appointment');?></span>
                                </a> 
                            </li>
                    </ul>
                </li>
                
               

               
                <li> 
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-plus p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('Manage Notification');?> <span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level"<?php if($page_name == 'notification') echo 'active';?>>

                            <li class="<?php if($page_name == 'notification') echo 'active';?>"> 
                                <a href="<?php echo base_url();?>nurse/notification">
                                    <i class="fa fa-angle-double-right p-r-10"></i>
                                    <span class="hide-menu"><?php echo get_phrase('New Notification');?></span>
                                </a> 
                            </li>
                    </ul>
                </li>


                <li class="<?php if($page_name == 'change_profile') echo 'active';?>"> 
                    <a href="<?php echo base_url();?>nurse/change_profile" class="waves-effect">
                        <i class="ti-user p-r-10"></i>
                        <span class="hide-menu"><?php echo get_phrase('Update Profile');?></span></a> 
                </li>
            

                <li> 
                    <a href="<?php echo base_url();?>login/logout" class="waves-effect">
                        <i class="fa fa-sign-out p-r-10"></i>
                        <span class="hide-menu"><?php echo get_phrase('Logout');?></span></a> 
                </li>
                    
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->