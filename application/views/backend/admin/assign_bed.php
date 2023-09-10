<div class="row">

    <div class="col-sm-5">
		<div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('Assign bed'); ?></div>
				<div class="panel-body table-responsive">
        
                    <!----CREATION FORM STARTS---->
                    <?php echo form_open(base_url(). 'bed/assign_bed/create', array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

                    <div class="form-group">
                             <label class="col-sm-12"><?php echo get_phrase('department');?>*</label>
                                 <div class="col-sm-12">
									<select class="select2 form-control" name="department_id" onchange="return get_department_patient(this.value)" required>
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

						
						<div class="form-group">
							<label class="col-sm-12"><?php echo get_phrase('Select Patient');?>*</label>
								<div class="col-sm-12">
                                       <select class="form-control" name="patient_id" id="patient_selector_holder" required>
                                         <option data-tokens=""><?php echo get_phrase('Select Department First');?></option>
                                    	
                                    </select>
								</div>
						</div>

                        <div class="form-group">
                             <label class="col-sm-12"><?php echo get_phrase('Select Bed');?>*</label>
                                 <div class="col-sm-12">
									<select class="select2 form-control" name="bed_id" onchange="return display_bed_brief_info(this.value)" required>
                                         	<option data-tokens=""><?php echo get_phrase('Select Bed');?></option>
                                    	<?php 
										$beds = $this->db->get('bed')->result_array();
										foreach($beds as $row):
										?>
                                    		<option value="<?php echo $row['bed_id'];?>"><?php echo $row['name'];?></option>
									 <?php endforeach;?>
                                    </select>
                                    
                                    <span id="get_bed_details"></span>
								</div>
						</div>

                        <div class="form-group">
							<label class="col-md-12" for="example-text"><?php echo get_phrase('Assign Date');?>*</span></label>
								<div class="col-md-12">
									<input class="form-control " name="assign_date" type="date" value="<?php echo date('Y-m-d');?>" id="example-date-input" required>
								</div>
						</div>


                        <div class="form-group">
							<label class="col-md-12" for="example-text"><?php echo get_phrase('Discharge Date');?>*</span></label>
								<div class="col-md-12">
									<input class="form-control " name="discharge_date" type="date" value="<?php echo date('Y-m-d');?>" id="example-date-input" required>
								</div>
						</div>


    
								
                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Description'); ?></label>
                        <div class="col-sm-12">
                                <textarea type="text" class="form-control" name="description"></textarea>
                        </div>
                    </div>


                    <div class="form-group">
							<div class="col-sm-12">
								<input type="radio" class="check" id="square-radio-1" name="status" value="1" data-radio="iradio_square-red" required>
                                	<label for="square-radio-1"><?php echo get_phrase('active');?></label>        
                                  	<input type="radio" class="check" id="square-radio-2" name="status" value="2" checked data-radio="iradio_square-red" required>
                                 	<label for="square-radio-2"><?php echo get_phrase('inactive');?></label>
							</div>
						</div>
								 
						<hr>
                                                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-info btn-sm btn-block btn-rounded"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('Save'); ?></button>
                    </div>
                <?php  echo form_close();?>
                </div>                
		</div>
	</div>
		
    <div class="col-sm-7">
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
                                       
                                        <th><?php echo get_phrase('Actions'); ?></th>
                                    </tr>
                                </thead>
                        <tbody>
                    
                    <?php
                            $counter = 1;
                            $beds = $this->bed_model->select_from_assign_bed();
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
                                        <td>
                                        <a onclick="showAjaxModal('<?php echo base_url();?>modal/popup/edit_assign_bed/<?php echo $bed['assign_bed_id'];?>')" class="btn btn-info btn-circle btn-xs"><i class="fa fa-edit"></i></a>
                                        <a href="<?php echo base_url();?>bed/assign_bed/delete/<?php echo $bed['assign_bed_id'];?>" onclick="return confirm('Are you sure want to delete?');" class="btn btn-danger btn-circle btn-xs" style="color:white"><i class="fa fa-times"></i></a>
                                        
                                        </td>
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

