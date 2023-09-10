<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-info">
			<div class="panel-heading"> <?php echo get_phrase('List Appointment');?></div>
				<div class="panel-body table-responsive">
 								<table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th><?php echo get_phrase('department');?></th>
                                            <th><?php echo get_phrase('Doctor Shedule');?></th>
                                            <th><?php echo get_phrase('patient_name');?></th>
                                            <th><?php echo get_phrase('Date Created');?></th>											
                                            <th><?php echo get_phrase('status');?></th>
                                        </tr>
                                    </thead>
									
                                    <tbody>
									
                                    <?php 
                                            $patient_info = $this->session->userdata('patient_id');
                                            $get_all_appointments = $this->db->get_where('appointment', array('patient_id' => $patient_info))->result_array();
                                            foreach($get_all_appointments as $key => $appointment){?>
                                        <tr>
                                 
                                            <td><?php echo $this->crud_model->get_type_name_by_id ('department', $appointment['department_id']);?></td>
                                            <td>
                                            <strong>Doctor Name:</strong> <?php echo $this->crud_model->get_type_name_by_id ('doctor', $appointment['doctor_id']);?><br>
                                            <strong>Start Time: </strong><?php echo $this->db->get_where('shedule', array('shedule_id' => $appointment['schedule_id']))->row()->start_time ;?><br>
                                            <strong>End Time: </strong><?php echo $this->db->get_where('shedule', array('shedule_id' => $appointment['schedule_id']))->row()->end_time ;?><br>
                                            <strong>Per Patient Time: </strong><?php echo $this->db->get_where('shedule', array('shedule_id' => $appointment['schedule_id']))->row()->per_patient_time ;?>
                                            </td>
                                            <td><?php echo $this->crud_model->get_type_name_by_id ('patient', $appointment['patient_id']);?></td>
                                            <td><?php echo date('d M Y', $appointment['date_created']);?></td>
											<td>
											<span class="label label-<?php if($appointment['status'] == '1') echo 'success'; else echo 'warning';?>">
                                            <?php if($appointment['status'] == '1'):?>
                                            <?php echo 'Active';?>
                                            <?php endif;?>
                                            <?php if($appointment['status'] == '2'):?>
                                            <?php echo 'Inactive';?>
                                            <?php endif;?>
                                            
                                            </span>
											</td>
                                           
             							</tr>
                                    <?php } ?>
									</tbody>
					

							</table>
			</div>
		</div>
	</div>
</div>

