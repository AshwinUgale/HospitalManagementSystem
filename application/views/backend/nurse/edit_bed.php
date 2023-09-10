<div class="row">

    <div class="col-sm-12">
		<div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('Edit Bed'); ?></div>
				<div class="panel-body table-responsive">


                <?php $get_beds = $this->db->get_where('bed', array('bed_id' => $param2))->result_array();
                            foreach ($get_beds as $key => $bed) { ?>
        
                    <!----CREATION FORM STARTS---->
                    <?php echo form_open(base_url(). 'bed/manage_bed/update/'. $bed['bed_id'], array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

                    <div class="form-group">
                             <label class="col-sm-12"><?php echo get_phrase('department');?>*</label>
                                 <div class="col-sm-12">
									<select class="select2 form-control" name="department_id" onchange="return get_department_bed_ward(this.value)" required>
                                         	<option data-tokens=""><?php echo get_phrase('select_department');?></option>
                                    	<?php 
										$department = $this->db->get('department')->result_array();
										foreach($department as $row):
										?>
                                    		<option value="<?php echo $row['department_id'];?>"<?php if($bed['department_id'] == $row['department_id']) echo 'selected="selected"';?>><?php echo $row['name'];?></option>
									 <?php endforeach;?>
                                    </select>
								</div>
						</div>

						
						<div class="form-group">
							<label class="col-sm-12"><?php echo get_phrase('Bed Ward');?>*</label>
								<div class="col-sm-12">
                                       <select class="form-control" name="bed_ward_id" id="bed_ward" required>
                                         <option data-tokens=""><?php echo get_phrase('Select Department First');?></option>
                                    	
                                    </select>
								</div>
						</div>

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Name'); ?></label>
                        <div class="col-sm-12">
                                <input name="name" type="text" value="<?php echo $bed['name'];?>" class="form-control"/ required>
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Bed Size'); ?></label>
                        <div class="col-sm-12">
                                <input name="bed_size" type="text" value="<?php echo $bed['bed_size'];?>" class="form-control"/ required>
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Bed Price'); ?></label>
                        <div class="col-sm-12">
                                <input name="bed_price" type="number" value="<?php echo $bed['bed_price'];?>" class="form-control"/ required>
                        </div>
                    </div>	


								
                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Description'); ?></label>
                        <div class="col-sm-12">
                                <textarea type="text" class="form-control" name="description"><?php echo $bed['description'];?></textarea>
                        </div>
                    </div>


                    <div class="form-group">
							<div class="col-sm-12">
								    <input type="radio" class="check" id="square-radio-1" name="status" value="1" <?php if($bed['status'] == '1') echo 'checked';?> data-radio="iradio_square-red" required>
                                	<label for="square-radio-1"><?php echo get_phrase('active');?></label>        
                                  	
                                      <input type="radio" class="check" id="square-radio-2" name="status" value="2" <?php if($bed['status'] == '2') echo 'checked';?> data-radio="iradio_square-red" required>
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
                function get_department_bed_ward(department_id){
                    $.ajax({
                        url: '<?php echo base_url();?>bed/get_department_bed_ward/' + department_id,
                        success: function(response){
                            jQuery('#bed_ward').html(response);
                        }
                    });
                }

    </script>
