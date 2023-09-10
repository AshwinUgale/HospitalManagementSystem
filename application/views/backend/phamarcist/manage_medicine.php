<div class="row">

    <div class="col-sm-5">
		<div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('Add Medicine'); ?></div>
				<div class="panel-body table-responsive">
        
                    <!----CREATION FORM STARTS---->
                    <?php echo form_open(base_url(). 'phamarcist/manage_medicine/create', array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

                    <div class="form-group">
                             <label class="col-sm-12"><?php echo get_phrase('Medicine Category');?>*</label>
                                 <div class="col-sm-12">
									<select class="select2 form-control" name="med_category_id" onchange="return get_department_bed_ward(this.value)" required>
                                         	<option data-tokens=""><?php echo get_phrase('select_category');?></option>
                                    	<?php 
										$med_category = $this->db->get('med_category')->result_array();
										foreach($med_category as $key => $row):
										?>
                                    		<option value="<?php echo $row['med_category_id'];?>"><?php echo $row['name'];?></option>
									 <?php endforeach;?>
                                    </select>
								</div>
						</div>

						
					

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Name'); ?></label>
                        <div class="col-sm-12">
                                <input name="name" type="text" class="form-control"/ required>
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Medicine Price'); ?></label>
                        <div class="col-sm-12">
                                <input name="price" type="number" class="form-control"/ required>
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Medicine Quantity'); ?></label>
                        <div class="col-sm-12">
                                <input name="quantity" type="number" class="form-control"/ required>
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Manafacturer'); ?></label>
                        <div class="col-sm-12">
                                <input name="company" type="text" class="form-control"/ required>
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
								<input type="radio" class="check" id="square-radio-1" name="status" value="1" checked data-radio="iradio_square-red" required>
                                	<label for="square-radio-1"><?php echo get_phrase('available');?></label>        
                                  	<input type="radio" class="check" id="square-radio-2" name="status" value="2" data-radio="iradio_square-red" required>
                                 	<label for="square-radio-2"><?php echo get_phrase('unavailable');?></label>
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
            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('List Medicine'); ?></div>		
                <div class="panel-body table-responsive">
		            <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th><?php echo get_phrase('Category Name'); ?></th>
                                        <th><?php echo get_phrase('Medicine Name'); ?></th>
                                        <th><?php echo get_phrase('Price'); ?></th>
                                        <th><?php echo get_phrase('Quantity'); ?></th>
                                        <th><?php echo get_phrase('Status'); ?></th>
                                        <th><?php echo get_phrase('Description'); ?></th>
                                        <th><?php echo get_phrase('Date Added'); ?></th>

                                        <th><?php echo get_phrase('Actions'); ?></th>
                                    </tr>
                                </thead>
                        <tbody>
                    
                    <?php
                            $counter = 1;
                            $currency = $this->db->get_where('settings', array('type' => 'currency'))->row()->description;
                            $select_all_medicines = $this->medicine_model->select_all_medicine();
                            foreach ($select_all_medicines as $key => $medicine) : ?>
                                    <tr>
                                        <td><?php echo $this->crud_model->get_type_name_by_id ('med_category', $medicine['med_category_id']);?></td>
                                        <td><?php echo $medicine['name'];?></td>
                                        <td><?php echo $currency.' '.$medicine['price'];?></td>
                                        <td><?php echo $medicine['quantity'];?></td>
                                        <td>
                                        <span class="label label-<?php if($medicine['status'] == '1') echo 'success'; else echo 'warning';?>">
                                            <?php if($medicine['status'] == '1'):?>
                                            <?php echo 'Available';?>
                                            <?php endif;?>
                                            <?php if($medicine['status'] == '2'):?>
                                            <?php echo 'Unavailable';?>
                                            <?php endif;?>
                                        </td>
                                        <td><?php echo $medicine['description'];?></td>
                                        <td><?php echo date('d M, Y', $medicine['date_added']);?></td>
                                        <td>
                                        <a onclick="showAjaxModal('<?php echo base_url();?>modal/popup/edit_medicine/<?php echo $medicine['medicine_id'];?>')" class="btn btn-info btn-circle btn-xs"><i class="fa fa-edit"></i></a>
                                        <a href="<?php echo base_url();?>phamarcist/manage_medicine/delete/<?php echo $medicine['medicine_id'];?>" onclick="return confirm('Are you sure want to delete?');" class="btn btn-danger btn-circle btn-xs" style="color:white"><i class="fa fa-times"></i></a>
                                        
                                        </td>
                                    </tr>
                            <?php  endforeach; ?>
                        </tbody>
                    </table>
		        </div>
	    </div>
	</div>
</div>
