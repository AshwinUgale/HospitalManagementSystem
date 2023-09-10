<?php $select_bed_ward =  $this->db->get_where('bed_ward', array('bed_ward_id' => $param2))->result_array();
        foreach ($select_bed_ward as $key => $bed_ward) : ?>


<div class="row">

    <div class="col-sm-12">
		<div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('Update Ward'); ?></div>
				<div class="panel-body table-responsive">
        
                    <!----CREATION FORM STARTS---->
                    <?php echo form_open(base_url(). 'bed/bed_ward/update/' . $param2, array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>


                    <div class="form-group">
                             <label class="col-sm-12"><?php echo get_phrase('department');?>*</label>
                                 <div class="col-sm-12">
									<select class="select2 form-control" name="department_id" onchange="return get_department_doctors(this.value)" required>
                                         	<option data-tokens=""><?php echo get_phrase('select_department');?></option>
                                    	<?php 
										$department = $this->db->get('department')->result_array();
										foreach($department as $row):
										?>
                                    		<option value="<?php echo $row['department_id'];?>"<?php if($bed_ward['department_id'] == $row['department_id']) echo 'selected="selected"';?>><?php echo $row['name'];?></option>
									 <?php endforeach;?>
                                    </select>
								</div>
						</div>

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Name'); ?></label>
                        <div class="col-sm-12">
                                <input name="name" value="<?php echo $bed_ward['name'];?>" type="text" class="form-control"/ required>
                        </div>
                    </div>	
								
                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Description'); ?></label>
                        <div class="col-sm-12">
                                <textarea type="text" class="form-control" name="description"><?php echo $bed_ward['description'];?></textarea>
                        </div>
                    </div>
                                                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-info btn-sm btn-block btn-rounded"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('Update'); ?></button>
                    </div>
                <?php  echo form_close();?>
                </div>                
		</div>
	</div>
</div>
<?php endforeach;?>