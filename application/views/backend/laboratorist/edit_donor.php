<?php $select_donor = $this->db->get_where('donor', array('donor_id' => $param2))->result_array();
        foreach ($select_donor as $key => $donor_selected_with_id):?>
<div class="row">
    <div class="col-sm-12">
	<div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('Edit donor'); ?></div>
	        <div class="panel-body table-responsive">
        
                    <!----CREATION FORM STARTS---->
                    <?php echo form_open(base_url(). 'donor/manage_donor/update/' . $param2, array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Name'); ?></label>
                        <div class="col-sm-12">
                                <input name="name" type="text" class="form-control" value="<?php echo $donor_selected_with_id['name'];?>" / required>
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Sex'); ?></label>
                        <div class="col-sm-12">
                               <select name="sex" class="form-control required">
                               <option>Select Sex</option>
                               <option value="Male"<?php if($donor_selected_with_id['sex'] == 'Male') echo 'selected="selected"' ;?>>Male</option>
                               <option value="Female"<?php if($donor_selected_with_id['sex'] == 'Female') echo 'selected="selected"' ;?>>Female</option>
                               </select>
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Age'); ?></label>
                        <div class="col-sm-12">
                                <input name="age" type="text" value="<?php echo $donor_selected_with_id['age'];?>" class="form-control">
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Phone'); ?></label>
                        <div class="col-sm-12">
                                <input name="phone" type="text"  value="<?php echo $donor_selected_with_id['phone'];?>" class="form-control">
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Email'); ?></label>
                        <div class="col-sm-12">
                                <input name="email" type="text" value="<?php echo $donor_selected_with_id['email'];?>" class="form-control">
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Blood Group'); ?></label>
                        <div class="col-sm-12">
                                <input name="blood_group" type="text" value="<?php echo $donor_selected_with_id['blood_group'];?>" class="form-control"/ required>
                        </div>
                    </div>	
								
                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Address'); ?></label>
                        <div class="col-sm-12">
                                <textarea type="text" class="form-control" name="address"><?php echo $donor_selected_with_id['address'];?></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Last Date Donated'); ?></label>
                        <div class="col-sm-12">
                                <input name="last_donation" type="date" value="<?php echo $donor_selected_with_id['last_donation'];?>" class="form-control" / required>
                        </div>
                    </div>	
                                                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-info btn-sm btn-block btn-rounded"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('Save'); ?></button>
                    </div>
                        <?php  echo form_close();?>
	        </div>
	</div>
    </div>
</div>
<?php endforeach;?>