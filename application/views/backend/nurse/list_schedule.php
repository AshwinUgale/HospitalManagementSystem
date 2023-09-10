<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-info">
			<div class="panel-heading"> <?php echo get_phrase('List Shedule');?></div>
				<div class="panel-body table-responsive">
 								<table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th><?php echo get_phrase('doctor_name');?></th>
                                            <th><?php echo get_phrase('date');?></th>
                                            <th><?php echo get_phrase('start_time');?></th>
											
											<th><?php echo get_phrase('end_time');?></th>
                                            <th><?php echo get_phrase('patient_time');?></th>
                                            <th><?php echo get_phrase('department');?></th>
                                            <th><?php echo get_phrase('status');?></th>
                                            <th><?php echo get_phrase('actions');?></th>
                                        </tr>
                                    </thead>
									
                                    <tbody>
									
                                    <?php $get_all_shedule = $this->shedule_model->select_shedule();
                                            foreach($get_all_shedule as $key => $shedule){?>
                                        <tr>
                                            <td><?php echo $this->crud_model->get_type_name_by_id ('doctor', $shedule['doctor_id']);?></td>
                                            <td><?php echo date('d M Y', $shedule['avail_day']);?></td>
											<td><?php echo $shedule['start_time'];?></td>
                                            <td><?php echo $shedule['end_time'];?></td>
											<td><?php echo $shedule['per_patient_time'];?></td>
                                            <td><?php echo $this->crud_model->get_type_name_by_id ('department', $shedule['department_id']);?></td>
											<td>
											<span class="label label-<?php if($shedule['status'] == '1') echo 'success'; else echo 'warning';?>">
                                            <?php if($shedule['status'] == '1'):?>
                                            <?php echo 'Active';?>
                                            <?php endif;?>
                                            <?php if($shedule['status'] == '2'):?>
                                            <?php echo 'Inactive';?>
                                            <?php endif;?>
                                            
                                            </span>
											</td>
                                            <td>
												<a href="#" onclick="confirm_modal('<?php echo base_url();?>nurse/add_schedule/delete/<?php echo $shedule['shedule_id'];?>');">
												<button type="button" class="btn btn-danger btn-circle btn-xs"><i class="fa fa-times"></i> </button>
												</a>

                             					<a href="<?php echo base_url();?>nurse/edit_shedule/<?php echo $shedule['shedule_id'];?>">
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

