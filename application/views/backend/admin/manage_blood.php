<div class="row">

    <div class="col-sm-5">
		<div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('Add blood'); ?></div>
				<div class="panel-body table-responsive">
        
                    <!----CREATION FORM STARTS---->
                    <?php echo form_open(base_url(). 'blood/manage_blood/create', array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Blood Group'); ?></label>
                        <div class="col-sm-12">
                                <input name="name" type="text" class="form-control"/ required>
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Quantity'); ?></label>
                        <div class="col-sm-12">
                                <input name="quantity" type="number" class="form-control"/ required>
                        </div>
                    </div>	


                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Status'); ?></label>
                        <div class="col-sm-12">
                               <select name="status" class="form-control required">
                               <option>Select Status</option>
                               <option value="Available">Available</option>
                               <option value="Unavailable">Unavailable</option>
                               </select>
                        </div>
                    </div>	
								
                                                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-info btn-sm btn-block btn-rounded"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('Save'); ?></button>
                    </div>
                <?php  echo form_close();?>
                </div>                
		</div>
	</div>
		
    <div class="col-sm-7">
        <div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('List blood'); ?></div>		
                <div class="panel-body table-responsive">
		            <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th><?php echo get_phrase('ID'); ?></th>
                                        <th><?php echo get_phrase('Blood Group'); ?></th>
                                        <th><?php echo get_phrase('Quantity'); ?></th>
                                        <th><?php echo get_phrase('Status'); ?></th>
                                        <th><?php echo get_phrase('Actions'); ?></th>
                                    </tr>
                                </thead>
                        <tbody>
                    
                    <?php
                            $counter = 1;
                            $select_blood = $this->blood_model->select_all_bloods(); 
                            foreach ($select_blood as $key => $blood) : ?>
                                    <tr>
                                        <td><?php echo $counter++;?></td>
                                        <td><?php echo $blood['name'];?></td>
                                        <td><?php echo $blood['quantity'];?></td>
                                        <td>
                                        <span class="label label-<?php if($blood['status'] == 'Available') echo 'success'; else echo 'danger';?>"><?php echo $blood['status'];?></span>
                                        </td>
                                        <td>
                                        <a onclick="showAjaxModal('<?php echo base_url();?>modal/popup/edit_blood/<?php echo $blood['blood_id'];?>')" class="btn btn-info btn-circle btn-xs"><i class="fa fa-edit"></i></a>
                                        <a href="<?php echo base_url();?>blood/manage_blood/delete/<?php echo $blood['blood_id'];?>" onclick="return confirm('Are you sure want to delete?');" class="btn btn-danger btn-circle btn-xs" style="color:white"><i class="fa fa-times"></i></a>
                                        
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
			