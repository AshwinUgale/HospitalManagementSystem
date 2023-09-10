
<div class="row">
                    <div class="col-sm-6">
				  	<div class="panel panel-info">
                            <div class="panel-heading"> <i class="fa fa-gear"></i> <?php echo get_phrase('General Settings');?></div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
        
						
<?php echo form_open(base_url() . 'setting/general_settings/update_setting/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
 
					
										
										<div class="form-group">
                                    <label class="col-md-12" for="example-text"><?php echo get_phrase('system_name');?>*</span>
                                            <div class="col-md-12">
                                                <input type="text" name="system_name" value="<?php echo $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;?>" class="form-control form-control-line">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                    <label class="col-md-12" for="example-text"><?php echo get_phrase('system_title');?>*</span>
                                            <div class="col-md-12">
                                                <input type="text" name="system_title" value="<?php echo $this->db->get_where('settings', array('type' => 'system_title'))->row()->description;?>" class="form-control form-control-line">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                    <label class="col-md-12" for="example-text"><?php echo get_phrase('Short Name');?>*</span>
                                            <div class="col-md-12">
                                                <input type="text" name="abb" value="<?php echo $this->db->get_where('settings', array('type' => 'abb'))->row()->description;?>" class="form-control form-control-line">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                    <label class="col-md-12" for="example-text"><?php echo get_phrase('system_email');?>*</span>
                                            <div class="col-md-12">
                                                <input type="email" name="system_email" value="<?php echo $this->db->get_where('settings', array('type' => 'system_email'))->row()->description;?>"  class="form-control form-control-line" id="example-email">
                                            </div>
                                        </div>
                                       
                                        <div class="form-group">
                                    <label class="col-md-12" for="example-text"><?php echo get_phrase('phone_number');?>*</span>
                                            <div class="col-md-12">
                                          <input type="text" name="phone" value="<?php echo $this->db->get_where('settings', array('type' => 'phone'))->row()->description;?>" class="form-control form-control-line">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                    <label class="col-md-12" for="example-text"><?php echo get_phrase('paypal_email');?>*</span>
                                            <div class="col-md-12">
                                                <input type="text" name="paypal_email" value="<?php echo $this->db->get_where('settings', array('type' => 'paypal_email'))->row()->description;?>" class="form-control form-control-line">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                    <label class="col-md-12" for="example-text"><?php echo get_phrase('Test Align');?>*</span>
                                            <div class="col-md-12">
                                        <?php $text_align =  $this->db->get_where('settings', array('type' => 'text_align'))->row()->description;?>      
                                        <select class="form-control" name="text_align">
                                        <option value="left-to-right"<?php if($text_align == 'left-to-right') echo 'selected="selected"';?>>Left to Right</option>
                                        <option value="right-to-left"<?php if($text_align == 'right-to-left') echo 'selected="selected"';?>>Right to Left</option>

                                        </select>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                    <label class="col-md-12" for="example-text"><?php echo get_phrase('System Currency');?>*</span>
                                            <div class="col-md-12">
                                        <?php $currency =  $this->db->get_where('settings', array('type' => 'currency'))->row()->description;?>   
                                        <select class="form-control" name="currency">
                                        <option selected value="">Select currency</option>
                                        <option value="USD"<?php if($currency == 'USD') echo 'selected="selected"';?>>America (United States) Dollars – USD</option>
                                        <option value="AFN"<?php if($currency == 'AFN') echo 'selected="selected"';?>>Afghanistan Afghanis – AFN</option>
                                        </select>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-12" for="example-text"><?php echo get_phrase('System langiage');?>*</span>
                                            <div class="col-md-12">
                                            
                                            <select class="form-control" name="language">
                                            <?php $language = $this->db->list_fields('language');
                                                foreach ($language as $key => $field) { 
                                                    if($field == 'phrase_id'|| $field == 'phrase') 
                                                    continue;

                                                    $current_language = $this->db->get_where('settings', array('type' => 'language'))->row()->description;
                                            ?>
                                            
                                                <option value="<?php echo $field; ?>"<?php if($field == $current_language) echo 'selected="selected"' ;?>><?php echo ucwords($field); ?></option>

                                        <?php } ?>
                                            </select>
                                            </div>
                                        </div>



                                        
										
                                        <div class="form-group">
                                    <label class="col-md-12" for="example-text"><?php echo get_phrase('system_address');?>*</span>
                                    <div class="col-md-12">
									 <textarea class="form-control" name="address"><?php echo $this->db->get_where('settings', array('type' => 'address'))->row()->description;?></textarea>
                                    </div>
                                	</div>


                                    <div class="form-group">
                                    <label class="col-md-12" for="example-text"><?php echo get_phrase('footer');?>*</span>
                                            <div class="col-md-12">
                                                <input type="text" name="footer" value="<?php echo $this->db->get_where('settings', array('type' => 'footer'))->row()->description;?>" class="form-control form-control-line">
                                            </div>
                                        </div>
                                       
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success btn-block btn-rounded btn-sm"><i class="fa fa-save"></i> <?php echo get_phrase('change');?></button>
                                            </div>
                                        </div>
                                    <?php echo form_close();?>
                                  

								
								
								
								
								
</div>
</div>
</div>
</div>



                    <div class="col-sm-6">
				  	<div class="panel panel-info">
                            <div class="panel-heading"><i class="fa fa-upload"></i>  <?php echo get_phrase('Upload Logo');?></div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
								
<?php echo form_open(base_url() . 'setting/general_settings/upload_logo/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>	
									
<div class="form-group"> 
					 <div class="col-sm-12">
  		  			 <input type='file' class="form-control" value="" name="userfile" onChange="readURL(this);" />
       				 <img id="blah" src="<?php echo base_url();?>uploads/logo.png" alt="" height="200" width="200"/>
					</div>
					</div>	


                    <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-info btn-block btn-rounded btn-sm"><i class="fa fa-save"></i> <?php echo get_phrase('save');?></button>
                                            </div>
                                        </div>
                <?php echo form_close();?>		

                THEME SETTINGS
				<hr>
				
				<?php echo form_open(base_url() . 'setting/general_settings/update_theme/', array('class' => 'form-horizontal form-groups-bordered validate', 'target' => '_top', 'enctype' => 'multipart/form-data'));
        ?>
                
				<div class="radio radio-custom">
                  <input type="radio" <?php if($skin = $this->db->get_where('settings' , array('type'=>'skin_colour'))->row()->description == 'default') echo 'checked';?> name="skin_colour" id="radio2" value="default">
                  <label for="radio2"> Default </label>
				</div>

				<div class="radio radio-success">
                  <input type="radio" <?php if($skin = $this->db->get_where('settings' , array('type'=>'skin_colour'))->row()->description == 'green') echo 'checked';?> name="skin_colour" id="radio3" value="green">
                  <label for="radio3"> Green </label>
				</div>

				<div class="radio radio-gray">
                  <input type="radio" <?php if($skin = $this->db->get_where('settings' , array('type'=>'skin_colour'))->row()->description == 'gray') echo 'checked';?> name="skin_colour" id="radio4" value="gray">
                  <label for="radio4"> Gray </label>
				</div>

				<div class="radio radio-black">
                  <input type="radio" <?php if($skin = $this->db->get_where('settings' , array('type'=>'skin_colour'))->row()->description == 'black') echo 'checked';?> name="skin_colour" id="radio5" value="black">
                  <label for="radio5"> Black </label>
				</div>

				<div class="radio radio-purple">
                  <input type="radio" <?php if($skin = $this->db->get_where('settings' , array('type'=>'skin_colour'))->row()->description == 'purple') echo 'checked';?> name="skin_colour" id="radio6" value="purple">
                  <label for="radio6"> Purple </label>
				</div>

				<div class="radio radio-info">
                  <input type="radio" <?php if($skin = $this->db->get_where('settings' , array('type'=>'skin_colour'))->row()->description == 'blue') echo 'checked';?> name="skin_colour" id="radio7" value="blue">
                  <label for="radio7"> Blue </label>
				</div>
				
                    <br>		
				
                <div class="form-group">
                          <button type="submit" class="btn btn-block btn-info btn-rounded btn-sm"><i class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('change_theme');?></button>
                    </div>
                    <?php echo form_close();?>			
								
</div>
</div>
</div>
</div>
</div>

