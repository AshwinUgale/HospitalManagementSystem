

            <?php
            $select_patient = $this->db->get_where('patient', array('department_id' => $department_id));
            if($select_patient->num_rows() > 0):
                $patient_id = $this->db->get_where('appointment', array('appointment_id' => $appointment_id))->row()->patient_id;
                $display_patient = $select_patient->result_array();
            ?>
                        <div class="form-group">
                             <label class="col-sm-12"><?php echo get_phrase('Patient');?>*</label>
                                <div class="col-sm-12">
									<select class="select2 form-control" name="patient_id" required>
                                    	<?php foreach ($display_patient as $key => $row):?>
                                    		<option value="<?php echo $row['patient_id'];?>"<?php if($row['patient_id'] == $patient_id) echo 'selected="selected"';?>><?php echo $row['name'];?></option>
                                        <?php endforeach;?>
                                    </select>
								</div>
						</div>
                <?php endif;?>

            <?php 
            $select_doctor = $this->db->get_where('doctor', array('department_id' => $department_id));
            if($select_doctor->num_rows() > 0):
                $doctor_id = $this->db->get_where('appointment', array('appointment_id' => $appointment_id))->row()->doctor_id;
                $display_doctor = $select_doctor->result_array();

            ?>
                        <div class="form-group">
                             <label class="col-sm-12"><?php echo get_phrase('Doctor');?>*</label>
                                <div class="col-sm-12">
									<select class="select2 form-control" name="doctor_id" onchange="return get_doctor_shedule(this.value)" required>
                                    <?php foreach ($display_doctor as $key => $row):?>
                                    		<option value="<?php echo $row['doctor_id'];?>"<?php if($row['doctor_id'] == $doctor_id) echo 'selected="selected"';?>><?php echo $row['name'];?></option>
                                            <?php endforeach;?>
                                    </select>
								</div>
						</div>
            <?php endif;?>