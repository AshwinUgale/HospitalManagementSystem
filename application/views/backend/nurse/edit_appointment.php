<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-info">
			<div class="panel-heading"> <?php echo get_phrase('edit_appointment');?>
				
			</div>
				<div class="panel-body">

                <?php foreach ($display_appointment as $key => $value) { ?>
                 
                
					<?php echo form_open(base_url() . 'nurse/add_appointment/update/' . $value['appointment_id'], 
					array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

					
                    <div class="form-group">
                             <label class="col-sm-12"><?php echo get_phrase('department');?>*</label>
                                 <div class="col-sm-12">
									<select class="select2 form-control" id="department_id" name="department_id" onchange="return get_doctor_patient_edit(this.value, <?php echo $appointment_id;?>)" required>
                                         	<option data-tokens=""><?php echo get_phrase('select_department');?></option>
                                    	<?php 
										$department = $this->db->get('department')->result_array();
										foreach($department as $row):
										?>
                                    		<option value="<?php echo $row['department_id'];?>"<?php if($value['department_id'] == $row['department_id']) echo 'selected="selected"';?>><?php echo $row['name'];?></option>
									 <?php endforeach;?>
                                    </select>
								</div>
						</div>

                        <div id="doctor_patient_holder"></div>

						
						<div class="form-group">
							<label class="col-sm-12"><?php echo get_phrase('Shedule');?>*</label>
								<div class="col-sm-12">
                                       <select class="form-control" name="schedule_id" id="get_doctor_shedule_holder" required>
                                       <?php 
                                    $shedule =  $this->db->get('shedule')->result_array();
                                    foreach ($shedule as $key => $row):?>
                                    		<option value="<?php echo $row['shedule_id'];?>"<?php if($value['shedule_id'] == $row['schedule_id']) echo 'selected="selected"';?>><?php echo 'Shedule Date: '. date('d M Y', $row['avail_day']) .' - '.'Start Time: '.$row['start_time'].' End Time: '.$row['end_time'];?></option>
                                    <?php endforeach;?>
                                    	
                                    </select>
								</div>
						</div>

							
                      

                        <div class="form-group">
                                <label class="col-md-12"><?php echo get_phrase('Diagnose');?></label>
                            <div class="col-md-12">
                                <textarea class="form-control" id="mymce" name="diagnose"><?php echo $value['diagnose'];?></textarea>
                            </div>
                        </div>

								
				
						<hr>
						<div class="form-group">
							<div class="col-sm-12">
								    <input type="radio" class="check" id="square-radio-1" name="status" value="1" <?php if($value['status'] == '1') echo 'checked';?> data-radio="iradio_square-red" required>
                                	<label for="square-radio-1"><?php echo get_phrase('active');?></label>        
                                  	
                                      <input type="radio" class="check" id="square-radio-2" name="status" value="2" <?php if($value['status'] == '2') echo 'checked';?> data-radio="iradio_square-red" required>
                                 	<label for="square-radio-2"><?php echo get_phrase('inactive');?></label>
							</div>
						</div>
								 
						<hr>
                                             
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10"><i class="fa fa-save"></i>&nbsp;<?php echo get_phrase('save');?></button>
                        <button type="reset" class="btn btn-inverse waves-effect waves-light"><?php echo get_phrase('reset');?></button>
                    <?php echo form_close();?>  

                    <?php } ?>              
                        </div>
			</div>
		</div>
	</div>
</div>


    <script type="text/javascript">
    function get_doctor_patient_edit(department_id, appointment_id){
        $.ajax({
            url: '<?php echo base_url();?>admin/get_doctor_patient_edit/' + department_id + '/' + appointment_id,
            success: function(response){
                jQuery('#doctor_patient_holder').html(response);
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

    <script>
        $(document).ready(function() {
            var department_id = $('#department_id').val();
            var appointment_id = '<?php echo $appointment_id;?>';
            get_doctor_patient_edit(department_id,appointment_id);
            
        });
    </script>
                    
      