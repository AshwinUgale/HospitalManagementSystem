<div class="row">

    
		
    <div class="col-sm-12">
        <div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('List Assign Bed'); ?></div>		
                <div class="panel-body table-responsive">
		            <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th><?php echo get_phrase('Department'); ?></th>
                                        <th><?php echo get_phrase('Patient'); ?></th>
                                        <th><?php echo get_phrase('Bed Name'); ?></th>
                                        <th><?php echo get_phrase('Assign Date'); ?></th>
                                        <th><?php echo get_phrase('Discharge Date'); ?></th>
                                        <th><?php echo get_phrase('Status'); ?></th>
                                        <th><?php echo get_phrase('Description'); ?></th>
                                       
                                    </tr>
                                </thead>
                        <tbody>
                    
                    <?php
                            $counter = 1;
                            $patient_info = $this->session->userdata('patient_id');
                            $beds = $this->db->get_where('assign_bed', array('patient_id' => $patient_info))->result_array();
                            foreach ($beds as $key => $bed) : ?>
                                    <tr>
                                        <td><?php echo $this->crud_model->get_type_name_by_id ('department', $bed['department_id']);?></td>
                                        <td><?php echo $this->crud_model->get_type_name_by_id ('patient', $bed['patient_id']);?></td>
                                        <td><?php echo $this->crud_model->get_type_name_by_id ('bed', $bed['bed_id']);?></td>
                                        <td><?php echo date('d M Y', $bed['assign_date']);?></td>
                                        <td><?php echo  date('d M Y', $bed['discharge_date']);?></td>
                                        <td>
                                        <span class="label label-<?php if($bed['status'] == '1') echo 'success'; else echo 'warning';?>">
                                            <?php if($bed['status'] == '1'):?>
                                            <?php echo 'Active';?>
                                            <?php endif;?>
                                            <?php if($bed['status'] == '2'):?>
                                            <?php echo 'Inactive';?>
                                            <?php endif;?>
                                        </td>
                                        <td><?php echo $bed['description'];?></td>
                                        
                                    </tr>
                            <?php  endforeach; ?>
                        </tbody>
                    </table>
		        </div>
	    </div>
	</div>
</div>
            <!----TABLE LISTING ENDS--->
			<script type="text/javascript">
                function get_department_patient(department_id){
                    $.ajax({
                        url: '<?php echo base_url();?>bed/get_department_patient/' + department_id,
                        success: function(response){
                            jQuery('#patient_selector_holder').html(response);
                        }
                    });
                }

            </script>

        <script type="text/javascript">
                function display_bed_brief_info(bed_id){
                    $.ajax({
                        url: '<?php echo base_url();?>bed/display_bed_brief_info/' + bed_id,
                        success: function(response){
                            jQuery('#get_bed_details').html(response);
                        }
                    });
                }

        </script>

