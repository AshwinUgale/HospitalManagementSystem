<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-info">
			<div class="panel-heading"> <?php echo get_phrase('add_prescription');?>
				
			</div>
				<div class="panel-body">
					<?php echo form_open(base_url() . 'prescription/add_prescription/create' , 
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
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Prescription Code'); ?></label>
                        <div class="col-sm-12">
                                <input name="prescription_code" value="<?php echo generateRandomString();?>" readonly="true" type="text" class="form-control"/ required>
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Name'); ?></label>
                        <div class="col-sm-12">
                                <input name="name" type="text" class="form-control"/ required>
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
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('weight'); ?></label>
                            <div class="col-sm-12">
                                    <input name="weight" type="text" class="form-control"/ required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('height'); ?></label>
                            <div class="col-sm-12">
                                    <input name="height" type="text" class="form-control"/ required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('visiting_fee'); ?></label>
                            <div class="col-sm-12">
                                    <input name="visiting_fee" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('blood_pressure'); ?></label>
                            <div class="col-sm-12">
                                    <input name="blood_pressure" type="text" class="form-control">
                            </div>
                        </div>


                        <div class="form-group">
                                <label class="col-md-12"><?php echo get_phrase('case_history');?></label>
                            <div class="col-md-12">
                                <textarea class="form-control" id="mymce" name="case_history"></textarea>
                            </div>
                        </div>

                        <div id="doc_entries">
                            <div class="form-group">
                                <label class="col-md-12"><?php echo get_phrase('prescription_entry'); ?></label>
                                    <div class="col-md-3">
                                    <input name="entry_diagnose[]" type="text" class="form-control" placeholder="<?php echo get_phrase('diagnose');?>">
                                    </div>

                                    <div class="col-md-2">
                                    <input name="entry_medicine_name[]" type="text" class="form-control" placeholder="<?php echo get_phrase('medicine_name');?>">
                                    </div>

                                    <div class="col-md-2">
                                    <input name="entry_medicine_type[]" type="text" class="form-control" placeholder="<?php echo get_phrase('medicine_type');?>">
                                    </div>

                                    <div class="col-md-2">
                                    <input name="entry_prescription[]" type="text" class="form-control" placeholder="<?php echo get_phrase('Usage Prescription');?>">
                                    </div>

                                    <div class="col-md-2">
                                    <input name="entry_days[]" type="text" class="form-control" placeholder="<?php echo get_phrase('Usage Days');?>">
                                    </div>

                                    <div class="col-md-1">
                                    <button type="button" class="btn btn-info btn-circle btn-sm" onClick="deleteParentElement(this)"><i class="fa fa-times"></i></button>
                                    </div>
                                   
						    </div>
                        </div>
                        <button type="button" class="btn btn-info btn-sm btn-rounded btn-block" onClick="doc_entry()"><i class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('Add More');?></button> 
                       
				
						<hr>
						<div class="form-group">
							<div class="col-sm-12">
								<input type="radio" class="check" id="square-radio-1" name="prescription_type" value="1" checked data-radio="iradio_square-red" required>
                                	<label for="square-radio-1"><?php echo get_phrase('New Prescription');?></label>        
                                  	<input type="radio" class="check" id="square-radio-2" name="prescription_type" value="2"  data-radio="iradio_square-red" required>
                                 	<label for="square-radio-2"><?php echo get_phrase('Old Prescription');?></label>
							</div>
						</div>
								 
						<hr>
                                             
                        <button type="submit" class="btn btn-success btn-block btn-rounded btn-sm"><i class="fa fa-save"></i>&nbsp;<?php echo get_phrase('save');?></button>
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
        // CREATING BLANK PRESCRIPTION ENTRY
        var blank_doc_entry = '';
            $(document).ready(function(){
            blank_doc_entry = $('#doc_entries').html();
        });

        function doc_entry(){
            $('#doc_entries').append(blank_doc_entry);
        }

        // REMOVING BLANK PRESCRIPTION ENTRY
        function deleteParentElement(n){
            n.parentNode.parentNode.parentNode.removeChild(n.parentNode.parentNode);
        }
    </script>


                    
      