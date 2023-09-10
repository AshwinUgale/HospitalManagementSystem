<?php 
$system_name    = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
$system_address = $this->db->get_where('settings', array('type' => 'address'))->row()->description;
$footer         = $this->db->get_where('settings', array('type' => 'footer'))->row()->description;
$text_align     = $this->db->get_where('settings', array('type' => 'text_align'))->row()->description;
$system_email   = $this->db->get_where('settings', array('type' => 'system_email'))->row()->description;
$loginType      = $this->session->userdata('login_type');
?>
<?php include 'css.php'; ?>

    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
    

	<?php include 'header.php'; ?>
	<?php include $loginType.'/navigation.php';?>
	<?php include 'page_info.php';?>
	<?php include $loginType.'/'.$page_name.'.php';?>
		
       			
	<?php // include 'dashboard.php'; ?>
				
				
                
				
                <!-- .right-sidebar -->
                <div class="right-sidebar" style="background:url(<?php echo base_url(); ?>assets/images/10.png); opacity: 0.9;">
                    <div class="slimscrollright">
                        <div class="rpanel-title">Current Mesage Thread<span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                          
                            <ul class="m-t-20 chatonline">
					
<li>

                                </li>
								
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
			
			
			
					

  
         <?php include 'footer.php'; ?>
         <style>

            .chat {
                width: 300px;
                position: fixed;
                right: 10px;
                background: #fff;
                padding: 10px;
                bottom: 90px;
                display: none;
                box-shadow: 0px 0px 10px 5px #ddd;
            }
            .chat .messages-box {
                margin-top: 10px;
                max-height: 300px;
                transition: all 0.3s linear;
            }
            .chat .messages-box .message {
                padding: 5px 10px;
                margin-bottom: 2px;
                background-color: #5290f5;
                color: #fff;
                position: relative;
                border-radius: 10px 0 0 10px;
                width: 80%;
                float: right;
                transition: all 0.3s linear;
            }
            .chat .messages-box .message:first-child {
                border-radius: 10px 10px 0px 10px;
            }
            .chat .messages-box .message:last-child {
                border-radius: 10px 0px 10px 10px;
            }
            .chat .messages-box .message.active {
                background-color: #f37660;
            }
            .chat .messages-box .message p {
                margin: 0 10px 0 0;
            }
            .chat .messages-box .message .fa {
                position: absolute;
                top: 5px;
                right: 7px;
                cursor: pointer;
                font-size: 12px;
                transform: scale(0.5);
                opacity: 0;
                transition: all 0.3s linear;
            }
            .chat .messages-box .message:hover .fa {
                transform: scale(1);
                opacity: 1;
            }
            .chat form {
                border-top: 1px solid #ddd;
                padding: 10px;
                margin: -10px;
                margin-top: 20px;
                background-color: #fff;
            }
            .chat form input {
                padding: 7px 10px;
                font-size: 15px;
                width: 87%;
                border: 1px solid #ddd;
                color: #9a9797;
                font-weight: 300;
            }
            .chat form input:focus {
                outline: inherit;
            }
            .chat form input.error {
                border: 1px solid rgba(255, 0, 0, 0.5);
            }
            .chat form button {
                border: none;
                background-color: transparent;
                font-size: 18px;
                color: #4085f6;
                cursor: pointer;
            }
            .chat form button:focus {
                outline: inherit;
            }
            .message-icon {
                width: 40px;
                height: 40px;
                background: #4085f6;
                line-height: 40px;
                text-align: center;
                color: #fff;
                font-size: 20px;
                border-radius: 50%;
                position: fixed;
                bottom: 30px;
                right: 30px;
                cursor: pointer;
            }
            </style>

        <script>
			
            $(document).ready(function(){
              
              $('.message-icon').click(function(){
                $('.chat').fadeToggle(500);
              });
              
              // for nicescroll
              // $('.messages-box').niceScroll({
              //   cursorcolor:'#5290F5',
              //   cursoropacitymin:0.7,
              //   cursorborder:'none',
              //   cursorborderradius: "3px",
              //   scrollspeed: 400,
              //   background: "#ddd",
              //   railoffset: {left: 7},
              //   cursorwidth :'4px'
              // });
              
            
              // delete massage
              $(document).on('click', '.fa-close', function(){ 
                 $(this).parent().fadeOut(500,function(){
                  $(this).remove();
                  });
               }); 
              
              // mouse enter add class
              $(document).on('mouseenter', '.fa-close', function(){
                $(this).parent().addClass('active');
              });
              
              // mouse leave remove class
              $(document).on('mouseleave', '.fa-close', function(){
                $(this).parent().removeClass('active');
              });
              
            });  // document ready
        </script>


    <div class="chat">
        <div class="refresh">

            <?php $select_all_messages = $this->db->get('general_message')->result_array();
                    foreach($select_all_messages as $key => $all_messages_selected) : 
                    $user_list = explode('-', $all_messages_selected['user_id']);
                    $user_type = $user_list[0];
                    $user_id = $user_list[1];
                    ?>
            <div class="messages-box clearfix" id="messages-box">
				<p class="pull-right"><?php echo $this->db->get_where($user_type, array($user_type.'_id' => $user_id))->row()->name ;?></p>
					<div class="message">
						<p><?php echo $all_messages_selected['message'];?></p>
				    </div>
			</div><!-- /.massage-box -->
            <?php endforeach;?>


        </div><!-- / .refresh div -->

		<div class="create-massage">
			<form>
				<input class="form-control" type="hidden" id="user_id" name="user_id" 
                value="<?php echo $this->session->userdata('login_type').'-'.$this->session->userdata('login_user_id');?>"/>
				<input type="text" style="width:100%" id="chatSend" name="chatSend"  placeholder="Type your message here and hit enter key">
			</form>
		</div><!-- / .create-massage -->
 
	</div><!-- /.chat -->

	<div class="message-icon">
	    <i class="fa fa-comments"></i>
	</div>
    <script language="javascript" src="<?php echo base_url();?>js/optimumajax.js"></script>
    <script language="javascript">
        $(function(){
            $("#chatSend").keypress(function(e){
                if(e.which == 13){
                    var chatSend = $("input#chatSend").val();
                    var user_id  = $("input#user_id").val();
                    jQuery.ajax({
                        type: "POST",
                        url: "<?php echo base_url();?>" + "admin/saveGeneralMessage",
                        dataType: "json",
                        data:{chatSend: chatSend, user_id: user_id},
                        success: function (res){
                            if(res){
                                // display some success message here if any
                            }
                        }
                    });
                    $(this).val("");
                    e.preventDefault();
                }
            });
        });

    </script>




		 

		
        </div>
        <!-- /#page-wrapper -->
    </div>
 <?php include 'modal.php'; ?>
 <?php include 'js.php'; ?>