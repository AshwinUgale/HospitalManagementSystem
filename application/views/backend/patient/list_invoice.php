<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-info">
			<div class="panel-heading"> <?php echo get_phrase('List Invoice');?></div>
				<div class="panel-body table-responsive">
 								<table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th><?php echo get_phrase('department');?></th>
                                            <th><?php echo get_phrase('patient_name');?></th>
                                            <th><?php echo get_phrase('Date Created');?></th>	
                                            <th><?php echo get_phrase('Due Date');?></th>											
                                            <th><?php echo get_phrase('status');?></th>
                                            <th><?php echo get_phrase('actions');?></th>
                                        </tr>
                                    </thead>
									
                                    <tbody>
									
                                    <?php 
                                            $patient_info = $this->session->userdata('patient_id');
                                            $get_all_Invoices = $this->db->get_where('invoice', array('patient_id' => $patient_info))->result_array();;
                                            foreach($get_all_Invoices as $key => $Invoice){?>
                                        <tr>
                                 
                                            <td><?php echo $this->crud_model->get_type_name_by_id ('department', $Invoice['department_id']);?></td>
                                            <td><?php echo $this->crud_model->get_type_name_by_id ('patient', $Invoice['patient_id']);?></td>
                                            <td><?php echo date('d M Y', $Invoice['date_created']);?></td>
                                            <td><?php echo date('d M Y', $Invoice['due_date']);?></td>
											<td>
											<span class="label label-<?php if($Invoice['status'] == '1') echo 'danger'; else echo 'success';?>">
                                            <?php if($Invoice['status'] == '1'):?>
                                            <?php echo 'Unpaid Invoice';?>
                                            <?php endif;?>
                                            <?php if($Invoice['status'] == '2'):?>
                                            <?php echo 'Paid Invoice';?>
                                            <?php endif;?>
                                            
                                            </span>
											</td>
                                            <td>
												
                                            <a href="<?php echo base_url();?>payment/view_invoice/<?php echo $Invoice['invoice_id'];?>">
												<button type="button" class="btn btn-success btn-rounded btn-sm"><i class="fa fa-print"></i> View Invoice</button>
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

