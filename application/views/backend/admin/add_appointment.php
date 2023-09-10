<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-info">
			<div class="panel-heading"> <?php echo get_phrase('add_appointment');?>
				
			</div>
				<div class="panel-body">
					<?php echo form_open(base_url() . 'admin/add_appointment/create' , 
					array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
					

                    <?php
                        function generateRandomString($length = 10) {
                        $characters = 'ABCDEFGHIJKLMNO0123456789PQRSTUVWXYZ0123456789ABCDEFGHIJ0123456789KLMNOPQRSTUVWXYZ';
                        $charactersLength = strlen($characters);
                        $randomString = '';
                        for ($i = 0; $i < $length; $i++) {
                        $randomString .= $characters[rand(0, $charactersLength - 1)];
                        }
                        return $randomString;
                        }
                    ?>  
                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Appointment Code'); ?></label>
                        <div class="col-sm-12">
                                <input name="appointment_code" value="<?php echo generateRandomString();?>" readonly="true" type="text" class="form-control"/ required>
                        </div>
                    </div>	


					<div class="form-group">
                             <label class="col-sm-12"><?php echo get_phrase('department');?>*</label>
                                 <div class="col-sm-12">
									<select class="select2 form-control" name="department_id" onchange="return get_doctor_patient(this.value)" required>
                                         	<option data-tokens=""><?php echo get_phrase('select_department');?></option>
                                    	<?php 
										$department = $this->db->get('department')->result_array();
										foreach($department as $row):
										?>
                                    		<option value="<?php echo $row['department_id'];?>"><?php echo $row['name'];?></option>
									 <?php endforeach;?>
                                    </select>
								</div>
						</div>

						
						<div id="select_doctor_patient_holder"></div>

						<div class="form-group">
							<label class="col-sm-12"><?php echo get_phrase('Shedule');?>*</label>
								<div class="col-sm-12">
                                       <select class="form-control" name="schedule_id" id="get_doctor_shedule_holder" required>
                                         <option data-tokens=""><?php echo get_phrase('Select Doctor First');?></option>
                                    	
                                    </select>
								</div>
						</div>

							
				
                        <div class="form-group">
                                <label class="col-md-12"><?php echo get_phrase('Diagnose');?></label>
                            <div class="col-md-12">
                                <textarea class="form-control" id="mymce" name="diagnose"></textarea>
                            </div>
                        </div>


								
				
						<hr>
						<div class="form-group">
							<div class="col-sm-12">
								<input type="radio" class="check" id="square-radio-1" name="status" value="1" data-radio="iradio_square-red" required>
                                	<label for="square-radio-1"><?php echo get_phrase('active');?></label>        
                                  	<input type="radio" class="check" id="square-radio-2" name="status" value="2" checked data-radio="iradio_square-red" required>
                                 	<label for="square-radio-2"><?php echo get_phrase('inactive');?></label>
							</div>
						</div>
								 
						<hr>
                                             
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10"><i class="fa fa-save"></i>&nbsp;<?php echo get_phrase('save');?></button>
                        <button type="reset" class="btn btn-inverse waves-effect waves-light"><?php echo get_phrase('reset');?></button>
                    <?php echo form_close();?>                
                        </div>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
 function get_doctor_patient(department_id){
	 $.ajax({
		 url: '<?php echo base_url();?>admin/select_doctor_patient/' + department_id,
		 success: function(response){
			jQuery('#select_doctor_patient_holder').html(response);
		 }
	 });
 }

</script>


<script type="text/javascript">
 function get_doctor_shedule(doctor_id){
	 $.ajax({
		 url: '<?php echo base_url();?>admin/get_doctor_shedule/' + doctor_id,
		 success: function(response){
			jQuery('#get_doctor_shedule_holder').html(response);
		 }
	 });
 }

</script>
                    
      