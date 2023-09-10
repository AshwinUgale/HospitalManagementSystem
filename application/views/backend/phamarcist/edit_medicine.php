<div class="row">

    <div class="col-sm-12">
		<div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('Edit Medicine'); ?></div>
				<div class="panel-body table-responsive">
        
                    <!----CREATION FORM STARTS---->
                <?php $select_medicine = $this->db->get_where('medicine', array('medicine_id' => $param2))->result_array();
                foreach ($select_medicine as $key => $value) {  ?>
                    <?php echo form_open(base_url(). 'phamarcist/manage_medicine/update/'. $param2, array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

                    <div class="form-group">
                             <label class="col-sm-12"><?php echo get_phrase('Medicine Category');?>*</label>
                                 <div class="col-sm-12">
									<select class="select2 form-control" name="med_category_id" onchange="return get_department_bed_ward(this.value)" required>
                                         	<option data-tokens=""><?php echo get_phrase('select_category');?></option>
                                    	<?php 
										$med_category = $this->db->get('med_category')->result_array();
										foreach($med_category as $key => $row):
										?>
                                    		<option value="<?php echo $row['med_category_id'];?>"<?php if($value['med_category_id'] == $row['med_category_id']) echo 'selected="selected"' ;?>><?php echo $row['name'];?></option>
									 <?php endforeach;?>
                                    </select>
								</div>
						</div>

						
					

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Name'); ?></label>
                        <div class="col-sm-12">
                                <input name="name" type="text" value="<?php echo $value['name'];?>" class="form-control"/ required>
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Medicine Price'); ?></label>
                        <div class="col-sm-12">
                                <input name="price" type="number" value="<?php echo $value['price'];?>" class="form-control"/ required>
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Medicine Quantity'); ?></label>
                        <div class="col-sm-12">
                                <input name="quantity" type="number" value="<?php echo $value['quantity'];?>" class="form-control"/ required>
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Manafacturer'); ?></label>
                        <div class="col-sm-12">
                                <input name="company" type="text" value="<?php echo $value['company'];?>" class="form-control"/ required>
                        </div>
                    </div>	


								
                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Description'); ?></label>
                        <div class="col-sm-12">
                                <textarea type="text" class="form-control" name="description"><?php echo $value['description'];?></textarea>
                        </div>
                    </div>


                    <div class="form-group">
							<div class="col-sm-12">
								    <input type="radio" class="check" id="square-radio-1" name="status" value="1" <?php if($value['status'] == '1') echo 'checked';?> data-radio="iradio_square-red" required>
                                	<label for="square-radio-1"><?php echo get_phrase('Available');?></label>        
                                  	
                                      <input type="radio" class="check" id="square-radio-2" name="status" value="2" <?php if($value['status'] == '2') echo 'checked';?> data-radio="iradio_square-red" required>
                                 	<label for="square-radio-2"><?php echo get_phrase('Unavailable');?></label>
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