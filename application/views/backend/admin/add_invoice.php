<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-info">
			<div class="panel-heading"> <?php echo get_phrase('Add Invoice');?>
				
			</div>
				<div class="panel-body">
					<?php echo form_open(base_url() . 'payment/add_invoice/create' , 
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
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Invoice Number'); ?></label>
                        <div class="col-sm-12">
                                <input name="invoice_number" value="<?php echo generateRandomString();?>" readonly="true" type="text" class="form-control"/ required>
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Invoice Title'); ?></label>
                        <div class="col-sm-12">
                                <input name="title" type="text" class="form-control"/ required>
                        </div>
                    </div>


					<div class="form-group">
                             <label class="col-sm-12"><?php echo get_phrase('department');?>*</label>
                                 <div class="col-sm-12">
									<select class="select2 form-control" name="department_id" onchange="return get_department_patients(this.value)" required>
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
							<label class="col-sm-12"><?php echo get_phrase('patient');?>*</label>
								<div class="col-sm-12">
                                       <select class="form-control" name="patient_id" id="patient_selector_holder" required>
                                         <option data-tokens=""><?php echo get_phrase('Select Department First');?></option>
                                    	
                                    </select>
								</div>
						</div>

						
						
						
                        
                        <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('date_created'); ?></label>
                            <div class="col-sm-12">
                                    <input name="date_created" type="date" id="date" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('due_date'); ?></label>
                            <div class="col-sm-12">
                                    <input name="due_date" type="date" id="date" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('vat_percentage'); ?></label>
                            <div class="col-sm-12">
                                    <input name="vat_percentage" type="number" id="" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Invoice Discount'); ?></label>
                            <div class="col-sm-12">
                                    <input name="discount" type="number" id="date" class="form-control">
                            </div>
                        </div>



                    
                        <div id="doc_entries">
                            <div class="form-group">
                                <label class="col-md-12"><?php echo get_phrase('invoice_entry'); ?></label>
                                    <div class="col-md-6">
                                    <input name="entry_title[]" type="text" class="form-control" placeholder="<?php echo get_phrase('Invoice Description');?>">
                                    </div>

                                    <div class="col-md-5">
                                    <input name="entry_amount[]" type="text" class="form-control" placeholder="<?php echo get_phrase('Invoice Amount');?>">
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
								<input type="radio" class="check" id="square-radio-1" name="status" value="1" checked data-radio="iradio_square-red" required>
                                	<label for="square-radio-1"><?php echo get_phrase('Unpaid Invoice');?></label>        
                                  	<input type="radio" class="check" id="square-radio-2" name="status" value="2"  data-radio="iradio_square-red" required>
                                 	<label for="square-radio-2"><?php echo get_phrase('Paid Invoice');?></label>
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
        function get_department_patients(department_id){
            $.ajax({
                url: '<?php echo base_url();?>admin/get_department_patient/' + department_id,
                success: function(response){
                    jQuery('#patient_selector_holder').html(response);
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


                    
      