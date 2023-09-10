 <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header" style="background-color:#A02929"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><span class="hidden-xs"><strong><?php echo $this->db->get_where('settings', array('type' => 'abb'))->row()->description;?></strong></span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                    <li>
                            <!--<form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>-->
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                <?php  if ($session_language = $this->session->userdata('language')){

                }else{
                    $session_language = $this->db->get_where('settings', array('type' => 'language'))->row()->description; 
                }
                      $langauge = $this->db->get_where('language_list', array('name' => $session_language))->row()->name;
                ?>
                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <div class=""><span class=""></span><span class="point"></span></div>
                    </a>

          
          <ul class="dropdown-menu mailbox ">
                            
          <?php $language = $this->db->list_fields('language');
                            foreach ($language as $key => $field) { 
                                if($field == 'phrase_id'|| $field == 'phrase') 
                                continue;

                                $current_language = $this->db->get_where('settings', array('type' => 'language'))->row()->description;
                    ?>
                    <style>
                    .pointer{
                        cursor:pointer;
                    }
                    </style>
                            <li class="<?php if($field == $current_language) echo 'active';?>">
                                <div class="message-center">
                                    <a class="set_langs pointer" data-href="<?php echo base_url();?>admin/set_language/<?php echo $field;?>">
                                        <div class="user-img"> <img src="<?php echo base_url();?>optimum/flag/<?php echo $field;?>.png" alt="user" class="img-circle" style="width:16px; height:16px;"> <span ></span> </div>
                                        <div class="mail-contnet">
                                            <h5><?php echo ucwords($field);?></h5> <span class="mail-desc"></span> </div>
                                    </a>
                                </div>
                            </li>

            <?php } ?>           
                          
                        </ul>
                        <!-- <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul> -->
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                   
                    <li class="dropdown">

                    <?php 
                    $key = $this->session->userdata('login_type') . '_id';
                    

                 
                    
                    ?>
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> 
            
                        
                        <b class="hidden-xs">

                    <?php 
                    $account_type   = $this->session->userdata('login_type');
                    $account_id     = $account_type.'_id';
                    $name = $this->crud_model->get_type_name_by_id($account_type, $this->session->userdata($account_id), 'name');
                    echo $name;
                    ?>

                        </b> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li><a href=""><i class="ti-user"></i> Edit Profile</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-email"></i>  Inbox</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-settings"></i>  Account Setting</a></li>
                            <li><a href="<?php echo base_url();?>login/logout"><i class="fa fa-power-off"></i>  Logout</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <li class="right-side-toggle"> <a class="" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>

        <script type="text/javascript">
            $(document).ready(function(){
                $('.set_langs').on('onclick', function(){
                    var lang_url = $(this).data('href');
                    $ajax({url: lang_url,success: function(result){
                        location.reload();
                    }});
                }) ; 
            });
        </script>
    