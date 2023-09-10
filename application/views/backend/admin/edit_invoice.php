<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-info">
				<div class="panel-body">
                <?php echo get_phrase('Edit Invoice');?>
                <hr>
                <?php foreach ($select_invoice_by_id as $key => $value) { ?>
					<?php echo form_open(base_url() . 'payment/add_invoice/update/' . $value['invoice_id'] , 
					array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
					

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Invoice Title'); ?></label>
                        <div class="col-sm-12">
                                <input name="title" type="text" class="form-control" value="<?php echo $value['title'];?>" / required>
                        </div>
                    </div>


					<div class="form-group">
                             <label class="col-sm-12"><?php echo get_phrase('department');?>*</label>
                                 <div class="col-sm-12">
									<select class="select2 form-control" id="department_id" name="department_id" onchange="return get_department_patients(this.value, <?php echo $invoice_id;?>)" required>
                                         	<option data-tokens=""><?php echo get_phrase('select_department');?></option>
                                    	<?php 
										$department = $this->db->get('department')->result_array();
										foreach($department as $row):
										?>
                                    		<option value="<?php echo $row['department_id'];?>"<?php if($value['department_id']== $row['department_id']) echo 'selected="selected"';?>><?php echo $row['name'];?></option>
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
                                    <input name="date_created" type="date" id="date" value="<?php echo date('Y-m-d', $value['date_created']);?>" class="form-control" / required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('due_date'); ?></label>
                            <div class="col-sm-12">
                                    <input name="due_date" type="date" id="date" value="<?php echo date('Y-m-d', $value['due_date']);?>" class="form-control" / required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('vat_percentage'); ?></label>
                            <div class="col-sm-12">
                                    <input name="vat_percentage" type="number" value="<?php echo $value['vat_percentage'];?>" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Invoice Discount'); ?></label>
                            <div class="col-sm-12">
                                    <input name="discount" type="number" value="<?php echo $value['discount'];?>" class="form-control">
                            </div>
                        </div>



                    
                        <div id="doc_entries">
                        <?php $invoice_entries = json_decode($value['invoice_entries']); 
                        foreach($invoice_entries as $key => $invoice_entry) : ?>

                            <div class="form-group">
                                <label class="col-md-12"><?php echo get_phrase('invoice_entry'); ?></label>
                                    <div class="col-md-6">
                                    <input name="entry_title[]" type="text" class="form-control" value="<?php echo $invoice_entry->title;?>">
                                    </div>

                                    <div class="col-md-5">
                                    <input name="entry_amount[]" type="text" class="form-control" value="<?php echo $invoice_entry->amount;?>">
                                    </div>

                                    <div class="col-md-1">
                                    <button type="button" class="btn btn-info btn-circle btn-sm" onClick="deleteParentElement(this)"><i class="fa fa-times"></i></button>
                                    </div>   
						    </div>
                            <?php endforeach;?>    
                        </div>

                        <div id="two_doc_entries">
                            <div class="form-group">
                                <label class="col-md-12"><?php echo get_phrase('invoice_entry'); ?></label>
                                    <div class="col-md-6">
                                    <input name="entry_title[]" type="text" class="form-control" placeholder="<?php echo get_phrase('Invoice Title');?>">
                                    </div>

                                    <div class="col-md-5">
                                    <input name="entry_amount[]" type="text" class="form-control" placeholder="<?php echo get_phrase('Invoice Amount');?>">
                                    </div>

                                    <div class="col-md-1">
                                    <button type="button" class="btn btn-info btn-circle btn-sm" onClick="deleteParentElement(this)"><i class="fa fa-times"></i></button>
                                    </div>   
						    </div>
                        </div>
                        
                        <button type="button" class="btn btn-info btn-sm btn-rounded btn-block" onClick="two_doc_entry()"><i class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('Add More');?></button> 
                       
				
						<hr>
						<div class="form-group">
							<div class="col-sm-12">
								    <input type="radio" class="check" id="square-radio-1" name="status" value="1" <?php if($value['status'] == '1') echo 'checked';?> data-radio="iradio_square-red" required>
                                	<label for="square-radio-1"><?php echo get_phrase('Unpaid Invoice');?></label>        
                                  	
                                      <input type="radio" class="check" id="square-radio-2" name="status" value="2" <?php if($value['status'] == '2') echo 'checked';?> data-radio="iradio_square-red" required>
                                 	<label for="square-radio-2"><?php echo get_phrase('Paid Invoice');?></label>
							</div>
						</div>
								 
						<hr>
                                             
                        <button type="submit" class="btn btn-success btn-block btn-rounded btn-sm"><i class="fa fa-save"></i>&nbsp;<?php echo get_phrase('save');?></button>
                    <?php echo form_close();?>   
                    <?php } ?>             
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


    <script>
        $(document).ready(function() {
            var department_id = $('#department_id').val();
            var invoice_id = '<?php echo $invoice_id;?>';
            get_department_patients(department_id,invoice_id);
            
        });
    </script>

    
<script type="text/javascript">
        // CREATING BLANK PRESCRIPTION ENTRY
        var blank_doc_entry = '';
            $(document).ready(function(){
            blank_doc_entry = $('#two_doc_entries').html();
        });

        function two_doc_entry(){
            $('#two_doc_entries').append(blank_doc_entry);
        }

        // REMOVING BLANK PRESCRIPTION ENTRY
        function deleteParentElement(n){
            n.parentNode.parentNode.parentNode.removeChild(n.parentNode.parentNode);
        }
    </script>


                    
      