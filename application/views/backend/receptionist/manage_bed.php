<div class="row">

    <div class="col-sm-5">
		<div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('Add bed'); ?></div>
				<div class="panel-body table-responsive">
        
                    <!----CREATION FORM STARTS---->
                    <?php echo form_open(base_url(). 'bed/manage_bed/create', array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

                    <div class="form-group">
                             <label class="col-sm-12"><?php echo get_phrase('department');?>*</label>
                                 <div class="col-sm-12">
									<select class="select2 form-control" name="department_id" onchange="return get_department_bed_ward(this.value)" required>
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
							<label class="col-sm-12"><?php echo get_phrase('Bed Ward');?>*</label>
								<div class="col-sm-12">
                                       <select class="form-control" name="bed_ward_id" id="bed_ward_selector_holder" required>
                                         <option data-tokens=""><?php echo get_phrase('Select Department First');?></option>
                                    	
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
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Bed Size'); ?></label>
                        <div class="col-sm-12">
                                <input name="bed_size" type="text" class="form-control"/ required>
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Bed Price'); ?></label>
                        <div class="col-sm-12">
                                <input name="bed_price" type="number" class="form-control"/ required>
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
            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('List bed'); ?></div>		
                <div class="panel-body table-responsive">
		            <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th><?php echo get_phrase('Department'); ?></th>
                                        <th><?php echo get_phrase('Bed Ward'); ?></th>
                                        <th><?php echo get_phrase('Bed Name'); ?></th>
                                        <th><?php echo get_phrase('Bed Size'); ?></th>
                                        <th><?php echo get_phrase('Bed Price'); ?></th>
                                        <th><?php echo get_phrase('Status'); ?></th>
                                        <th><?php echo get_phrase('Description'); ?></th>
                                       
                                        <th><?php echo get_phrase('Actions'); ?></th>
                                    </tr>
                                </thead>
                        <tbody>
                    
                    <?php
                            $counter = 1;
                            $beds = $this->bed_model->select_all_beds();
                            foreach ($beds as $key => $bed) : ?>
                                    <tr>
                                        <td><?php echo $this->crud_model->get_type_name_by_id ('department', $bed['department_id']);?></td>
                                        <td><?php echo $this->crud_model->get_type_name_by_id ('bed_ward', $bed['bed_ward_id']);?></td>
                                        <td><?php echo $bed['name'];?></td>
                                        <td><?php echo $bed['bed_size'];?></td>
                                        <td><?php echo $this->db->get_where('settings', array('type' => 'currency'))->row()->description;?> <?php echo number_format($bed['bed_price'], 2,",",".");?> Per Day</td>
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
                                        <a onclick="showAjaxModal('<?php echo base_url();?>modal/popup/edit_bed/<?php echo $bed['bed_id'];?>')" class="btn btn-info btn-circle btn-xs"><i class="fa fa-edit"></i></a>
                                        <a href="<?php echo base_url();?>bed/manage_bed/delete/<?php echo $bed['bed_id'];?>" onclick="return confirm('Are you sure want to delete?');" class="btn btn-danger btn-circle btn-xs" style="color:white"><i class="fa fa-times"></i></a>
                                        
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
                function get_department_bed_ward(department_id){
                    $.ajax({
                        url: '<?php echo base_url();?>bed/get_department_bed_ward/' + department_id,
                        success: function(response){
                            jQuery('#bed_ward_selector_holder').html(response);
                        }
                    });
                }

            </script>