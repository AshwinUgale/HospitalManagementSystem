<div class="row">

    <div class="col-sm-5">
		<div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('Add donor'); ?></div>
				<div class="panel-body table-responsive">
        
                    <!----CREATION FORM STARTS---->
                    <?php echo form_open(base_url(). 'donor/manage_donor/create', array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Name'); ?></label>
                        <div class="col-sm-12">
                                <input name="name" type="text" class="form-control"/ required>
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Sex'); ?></label>
                        <div class="col-sm-12">
                               <select name="sex" class="form-control required">
                               <option>Select Sex</option>
                               <option value="Male">Male</option>
                               <option value="Female">Female</option>


                               </select>
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Age'); ?></label>
                        <div class="col-sm-12">
                                <input name="age" type="text" class="form-control">
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Phone'); ?></label>
                        <div class="col-sm-12">
                                <input name="phone" type="text" class="form-control">
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Email'); ?></label>
                        <div class="col-sm-12">
                                <input name="email" type="text" class="form-control">
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Blood Group'); ?></label>
                        <div class="col-sm-12">
                                <input name="blood_group" type="text" class="form-control"/ required>
                        </div>
                    </div>	
								
                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Address'); ?></label>
                        <div class="col-sm-12">
                                <textarea type="text" class="form-control" name="address"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Last Date Donated'); ?></label>
                        <div class="col-sm-12">
                                <input name="last_donation" type="date" value="<?php echo date('Y-m-d');?>" class="form-control" / required>
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
            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('List donor'); ?></div>		
                <div class="panel-body table-responsive">
		            <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th><?php echo get_phrase('ID'); ?></th>
                                        <th><?php echo get_phrase('Name'); ?></th>
                                        <th><?php echo get_phrase('Sex'); ?></th>
                                        <th><?php echo get_phrase('Blood Group'); ?></th>
                                        <th><?php echo get_phrase('Last Donation'); ?></th>
                                        <th><?php echo get_phrase('Actions'); ?></th>
                                    </tr>
                                </thead>
                        <tbody>
                    
                    <?php
                            $counter = 1;
                            $select_donors = $this->donor_model->select_all_blood_donors();
                            foreach ($select_donors as $key => $all_selected_blood_donors) : ?>
                                    <tr>
                                        <td><?php echo $counter++;?></td>
                                        <td><?php echo $all_selected_blood_donors['name'];?></td>
                                        <td><?php echo $all_selected_blood_donors['sex'];?></td>
                                        <td><?php echo $all_selected_blood_donors['blood_group'];?></td>
                                        <td><?php echo $all_selected_blood_donors['last_donation'];?></td>
                                        <td>
                                        <a onclick="showAjaxModal('<?php echo base_url();?>modal/popup/edit_donor/<?php echo $all_selected_blood_donors['donor_id'];?>')" class="btn btn-info btn-circle btn-xs"><i class="fa fa-edit"></i></a>
                                        <a href="<?php echo base_url();?>donor/manage_donor/delete/<?php echo $all_selected_blood_donors['donor_id'];?>" onclick="return confirm('Are you sure want to delete?');" class="btn btn-danger btn-circle btn-xs" style="color:white"><i class="fa fa-times"></i></a>
                                        
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
			