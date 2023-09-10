<div class="row">

    <div class="col-sm-12">
		<div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('Edit Assign Bed'); ?></div>
				<div class="panel-body table-responsive">
        
                    <!----CREATION FORM STARTS---->
                    <?php $select_assign_bed = $this->db->get_where('assign_bed', array('assign_bed_id' => $param2))->result_array();
                            foreach ($select_assign_bed as $key => $assign_bed) { ?>
                    <?php echo form_open(base_url(). 'bed/assign_bed/update/'. $param2, array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

                    <div class="form-group">
                             <label class="col-sm-12"><?php echo get_phrase('department');?>*</label>
                                 <div class="col-sm-12">
									<select class="select2 form-control" name="department_id" onchange="return get_department_patient(this.value)" required>
                                         	<option data-tokens=""><?php echo get_phrase('select_department');?></option>
                                    	<?php 
										$department = $this->db->get('department')->result_array();
										foreach($department as $row):
										?>
                                    		<option value="<?php echo $row['department_id'];?>"<?php if($assign_bed['department_id'] == $row['department_id']) echo 'selected="selected"';?>><?php echo $row['name'];?></option>
									 <?php endforeach;?>
                                    </select>
								</div>
						</div>

						
						<div class="form-group">
							<label class="col-sm-12"><?php echo get_phrase('Select Patient');?>*</label>
								<div class="col-sm-12">
                                       <select class="form-control" name="patient_id" id="patient_holder" required>
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
                                    		<option value="<?php echo $row['bed_id'];?>"<?php if($assign_bed['bed_id'] == $row['bed_id']) echo 'selected="selected"';?>><?php echo $row['name'];?></option>
									 <?php endforeach;?>
                                    </select>
                                    
                                    <span id="details_holder"></span>
								</div>
						</div>

                        <div class="form-group">
							<label class="col-md-12" for="example-text"><?php echo get_phrase('Assign Date');?>*</span></label>
								<div class="col-md-12">
									<input class="form-control " name="assign_date" type="date" value="<?php echo date('Y-m-d', $assign_bed['assign_date']);?>" id="example-date-input" required>
								</div>
						</div>


                        <div class="form-group">
							<label class="col-md-12" for="example-text"><?php echo get_phrase('Discharge Date');?>*</span></label>
								<div class="col-md-12">
									<input class="form-control " name="discharge_date" type="date" value="<?php echo date('Y-m-d', $assign_bed['discharge_date']);?>" id="example-date-input" required>
								</div>
						</div>


    
								
                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Description'); ?></label>
                        <div class="col-sm-12">
                                <textarea type="text" class="form-control" name="description"><?php echo $assign_bed['description'];?></textarea>
                        </div>
                    </div>

                    <div class="form-group">
							<div class="col-sm-12">
								    <input type="radio" class="check" id="square-radio-1" name="status" value="1" <?php if($assign_bed['status'] == '1') echo 'checked';?> data-radio="iradio_square-red" required>
                                	<label for="square-radio-1"><?php echo get_phrase('active');?></label>        
                                  	
                                      <input type="radio" class="check" id="square-radio-2" name="status" value="2" <?php if($assign_bed['status'] == '2') echo 'checked';?> data-radio="iradio_square-red" required>
                                 	<label for="square-radio-2"><?php echo get_phrase('inactive');?></label>
							</div>
						</div>
								 
						<hr>
                                                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-info btn-sm btn-block btn-rounded"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('Save'); ?></button>
                    </div>
                <?php  echo form_close();?>
            <?php } ?>
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
                            jQuery('#patient_holder').html(response);
                        }
                    });
                }

        </script>

        <script type="text/javascript">
                function display_bed_brief_info(bed_id){
                    $.ajax({
                        url: '<?php echo base_url();?>bed/display_bed_brief_info/' + bed_id,
                        success: function(response){
                            jQuery('#details_holder').html(response);
                        }
                    });
                }

        </script>

