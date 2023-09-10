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
                        <a href="#" class="waves-effect">
                    
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
                            <li><a href="<?php echo base_url();?>admin/manage_profile"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                            <li><a href="<?php echo base_url();?>login/logout"><i class="fa fa-sign-out-off"></i> Logout</a></li>
                        </ul>
                    </li>

                    <li class="<?php if($page_name == 'dashboard') echo 'active';?>"> 
                        <a href="<?php echo base_url();?>admin/dashboard" class="waves-effect">
                            <i class="ti-dashboard p-r-10"></i>
                            <span class="hide-menu"><?php echo get_phrase('dashboard');?></span>
                        </a> 
                    </li>
                
                    <li> 
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-plus p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('Manage Department');?> <span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level"<?php if($page_name == 'manage_department') echo 'active';?>>

                            <li class="<?php if($page_name == 'manage_department') echo 'active';?>"> 
                                <a href="<?php echo base_url();?>department/manage_department">
                                    <i class="fa fa-angle-double-right p-r-10"></i>
                                    <span class="hide-menu"><?php echo get_phrase('Manage Department');?></span>
                                </a> 
                            </li>
                    </ul>
                </li>

                 <li> 
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-md p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('Human Resources');?> <span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level"<?php if($page_name == 'manage_doctor') echo 'active';?>>

                        <li class="<?php if($page_name == 'manage_doctor') echo 'active';?>"> 
                            <a href="<?php echo base_url();?>admin/manage_doctor">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Manage Doctor');?></span>
                            </a> 
                        </li>

                        <li class="<?php if($page_name == 'manage_nurse') echo 'active';?>"> 
                            <a href="<?php echo base_url();?>admin/manage_nurse">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Manage Nurse');?></span>
                            </a> 
                        </li>

                        <li class="<?php if($page_name == 'manage_accountant') echo 'active';?>"> 
                            <a href="<?php echo base_url();?>admin/manage_accountant">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Manage Accountant');?></span>
                            </a> 
                        </li>

                        <li class="<?php if($page_name == 'manage_phamarcist') echo 'active';?>"> 
                            <a href="<?php echo base_url();?>admin/manage_phamarcist">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Manage Phamarcist');?></span>
                            </a> 
                        </li>

                        <li class="<?php if($page_name == 'manage_receptionist') echo 'active';?>"> 
                            <a href="<?php echo base_url();?>admin/manage_receptionist">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Manage Receptionist');?></span>
                            </a> 
                        </li>

                        <li class="<?php if($page_name == 'manage_laboratorist') echo 'active';?>"> 
                            <a href="<?php echo base_url();?>admin/manage_laboratorist">
                                <i class="fa fa-angle-double-right p-r-10"></i>
                                <span class="hide-menu"><?php echo get_phrase('Manage Laboratorist');?></span>
                            </a> 
                        </li>
                    </ul>
                </li>



                <li> 
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-heart p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('Manage Blood');?> <span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level"<?php if($page_name == 'manage_donor' || $page_name == 'manage_blood') echo 'active';?>>

                            <li class="<?php if($page_name == 'manage_donor') echo 'active';?>"> 
                                <a href="<?php echo base_url();?>donor/manage_donor">
                                    <i class="fa fa-angle-double-right p-r-10"></i>
                                    <span class="hide-menu"><?php echo get_phrase('Manage Donor');?></span>
                                </a> 
                            </li>

                            <li class="<?php if($page_name == 'manage_blood') echo 'active';?>"> 
                                <a href="<?php echo base_url();?>blood/manage_blood">
                                    <i class="fa fa-angle-double-right p-r-10"></i>
                                    <span class="hide-menu"><?php echo get_phrase('Manage Blood');?></span>
                                </a> 
                            </li>
                    </ul>
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
                                <a href="<?php echo base_url();?>admin/add_schedule">
                                    <i class="fa fa-angle-double-right p-r-10"></i>
                                    <span class="hide-menu"><?php echo get_phrase('Add Schedule');?></span>
                                </a> 
                            </li>

                            <li class="<?php if($page_name == 'list_schedule') echo 'active';?>"> 
                                <a href="<?php echo base_url();?>admin/list_schedule">
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
                                <a href="<?php echo base_url();?>admin/add_appointment">
                                    <i class="fa fa-angle-double-right p-r-10"></i>
                                    <span class="hide-menu"><?php echo get_phrase('Add Appointment');?></span>
                                </a> 
                            </li>

                            <li class="<?php if($page_name == 'list_appointment') echo 'active';?>"> 
                                <a href="<?php echo base_url();?>admin/list_appointment">
                                    <i class="fa fa-angle-double-right p-r-10"></i>
                                    <span class="hide-menu"><?php echo get_phrase('List Appointment');?></span>
                                </a> 
                            </li>
                    </ul>
                </li>

                <li> 
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-edit p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('Manage Medicine');?> <span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level"<?php if($page_name == 'manage_medicine' || $page_name == 'medicine_category' || $page_name == 'list_medicine') echo 'active';?>>
                            
                            <li class="<?php if($page_name == 'category') echo 'active';?>"> 
                                <a href="<?php echo base_url();?>admin/medicine_category">
                                    <i class="fa fa-angle-double-right p-r-10"></i>
                                    <span class="hide-menu"><?php echo get_phrase('Medicine Category');?></span>
                                </a> 
                            </li>

                            <li class="<?php if($page_name == 'manage_medicine') echo 'active';?>"> 
                                <a href="<?php echo base_url();?>admin/manage_medicine">
                                    <i class="fa fa-angle-double-right p-r-10"></i>
                                    <span class="hide-menu"><?php echo get_phrase('manage_medicine');?></span>
                                </a> 
                            </li>

                           
                    </ul>
                </li>


                <li> 
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-edit p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('Manage Prescripton');?> <span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level"<?php if($page_name == 'add_prescripton' || $page_name == 'list_prescripton') echo 'active';?>>

                            <li class="<?php if($page_name == 'add_prescripton') echo 'active';?>"> 
                                <a href="<?php echo base_url();?>prescription/add_prescription">
                                    <i class="fa fa-angle-double-right p-r-10"></i>
                                    <span class="hide-menu"><?php echo get_phrase('Add Prescription');?></span>
                                </a> 
                            </li>

                            <li class="<?php if($page_name == 'list_prescripton') echo 'active';?>"> 
                                <a href="<?php echo base_url();?>prescription/list_prescription">
                                    <i class="fa fa-angle-double-right p-r-10"></i>
                                    <span class="hide-menu"><?php echo get_phrase('List Prescription');?></span>
                                </a> 
                            </li>
                    </ul>
                </li>

                <li> 
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-credit-card p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('Manage Payment');?> <span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level"<?php if($page_name == 'add_invoice' || $page_name == 'list_invoice') echo 'active';?>>

                            <li class="<?php if($page_name == 'add_invoice') echo 'active';?>"> 
                                <a href="<?php echo base_url();?>payment/add_invoice">
                                    <i class="fa fa-angle-double-right p-r-10"></i>
                                    <span class="hide-menu"><?php echo get_phrase('Add Invoice');?></span>
                                </a> 
                            </li>

                            <li class="<?php if($page_name == 'list_invoice') echo 'active';?>"> 
                                <a href="<?php echo base_url();?>payment/list_invoice">
                                    <i class="fa fa-angle-double-right p-r-10"></i>
                                    <span class="hide-menu"><?php echo get_phrase('List Invoice');?></span>
                                </a> 
                            </li>
                    </ul>
                </li>


                <li> 
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-credit-card p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('Manage Expense');?> <span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level"<?php if($page_name == 'new_expense' || $page_name == 'expense_category') echo 'active';?>>
                            <li class="<?php if($page_name == 'expense_category') echo 'active';?>"> 
                                <a href="<?php echo base_url();?>payment/expense_category">
                                    <i class="fa fa-angle-double-right p-r-10"></i>
                                    <span class="hide-menu"><?php echo get_phrase('Expense Category');?></span>
                                </a> 
                            </li>

                            <li class="<?php if($page_name == 'new_expense') echo 'active';?>"> 
                                <a href="<?php echo base_url();?>payment/new_expense">
                                    <i class="fa fa-angle-double-right p-r-10"></i>
                                    <span class="hide-menu"><?php echo get_phrase('Add Expense');?></span>
                                </a> 
                            </li>

                    </ul>
                </li>

                <li> 
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-plus p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('Manage Notification');?> <span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level"<?php if($page_name == 'notification') echo 'active';?>>

                            <li class="<?php if($page_name == 'notification') echo 'active';?>"> 
                                <a href="<?php echo base_url();?>admin/notification">
                                    <i class="fa fa-angle-double-right p-r-10"></i>
                                    <span class="hide-menu"><?php echo get_phrase('New Notification');?></span>
                                </a> 
                            </li>
                    </ul>
                </li>


                <li> 
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-gears p-r-10"></i> <span class="hide-menu"> <?php echo get_phrase('System Setting');?> <span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level"<?php if($page_name == 'general_settings' || $page_name == 'backup_database' || $page_name == 'manage_language') echo 'active';?>>

                            <li class="<?php if($page_name == 'general_settings') echo 'active';?>"> 
                                <a href="<?php echo base_url();?>setting/general_settings">
                                    <i class="fa fa-angle-double-right p-r-10"></i>
                                    <span class="hide-menu"><?php echo get_phrase('General Setting');?></span>
                                </a> 
                            </li>

                            <li class="<?php if($page_name == 'manage_language') echo 'active';?>"> 
                                <a href="<?php echo base_url();?>setting/manage_language">
                                    <i class="fa fa-angle-double-right p-r-10"></i>
                                    <span class="hide-menu"><?php echo get_phrase('Manage Language');?></span>
                                </a> 
                            </li>

                            <li class="<?php if($page_name == 'backup_database') echo 'active';?>"> 
                                <a href="<?php echo base_url();?>setting/backup_database">
                                    <i class="fa fa-angle-double-right p-r-10"></i>
                                    <span class="hide-menu"><?php echo get_phrase('Backup Database');?></span>
                                </a> 
                            </li>
                    </ul>
                </li>


                <li class="<?php if($page_name == 'change_profile') echo 'active';?>"> 
                    <a href="<?php echo base_url();?>admin/change_profile" class="waves-effect">
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