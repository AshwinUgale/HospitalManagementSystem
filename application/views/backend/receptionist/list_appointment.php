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
                                            <th><?php echo get_phrase('actions');?></th>
                                        </tr>
                                    </thead>
									
                                    <tbody>
									
                                    <?php $get_all_appointments = $this->appointment_model->select_all_appointment();
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
                                            <td>
												<a href="#" onclick="confirm_modal('<?php echo base_url();?>receptionist/add_appointment/delete/<?php echo $appointment['appointment_id'];?>');">
												<button type="button" class="btn btn-danger btn-circle btn-xs"><i class="fa fa-times"></i> </button>
												</a>

                             					<a href="<?php echo base_url();?>receptionist/edit_appointment/<?php echo $appointment['appointment_id'];?>">
												<button type="button" class="btn btn-primary btn-circle btn-xs"><i class="fa fa-edit"></i> </button>
												</a>
                                            </td>
             							</tr>
                                    <?php } ?>
									</tbody>
					

							</table>
			</div>
		</div>
	</div>
</div>

