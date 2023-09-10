<?php $select_blood = $this->db->get_where('blood', array('blood_id' => $param2))->result_array();
        foreach ($select_blood as $key => $blood_selected_with_id):?>
<div class="row">

    <div class="col-sm-12">
		<div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('Edit blood'); ?></div>
				<div class="panel-body table-responsive">
        
                    <!----CREATION FORM STARTS---->
                    <?php echo form_open(base_url(). 'blood/manage_blood/update/' . $param2, array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Blood Group'); ?></label>
                        <div class="col-sm-12">
                                <input name="name" type="text" class="form-control" value="<?php echo $blood_selected_with_id['name'];?>" / required>
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Quantity'); ?></label>
                        <div class="col-sm-12">
                                <input name="quantity" type="number" class="form-control" value="<?php echo $blood_selected_with_id['quantity'];?>" / required>
                        </div>
                    </div>	


                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Status'); ?></label>
                        <div class="col-sm-12">
                               <select name="status" class="form-control required">
                               <option>Select Status</option>
                               <option value="Available"<?php if($blood_selected_with_id['status'] == 'Available') echo 'selected="selected"' ;?>>Available</option>
                               <option value="Unavailable"<?php if($blood_selected_with_id['status'] == 'Unavailable') echo 'selected="selected"' ;?>>Unavailable</option>
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
    </div>
</div>
<?php endforeach;?>