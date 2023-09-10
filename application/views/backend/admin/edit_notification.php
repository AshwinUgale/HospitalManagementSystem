<div class="row">

    <div class="col-sm-12">
		<div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('Edit Event'); ?></div>
				<div class="panel-body table-responsive">
        
                    <!----CREATION FORM STARTS---->
                    <?php $select_nofication = $this->db->get_where('noticeboard', array('noticeboard_id' => $param2))->result_array();
                            foreach($select_nofication as $key => $noticeboard) : ?>
                    <?php echo form_open(base_url(). 'admin/notification/update/'. $param2, array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Title'); ?></label>
                        <div class="col-sm-12">
                                <input name="title" type="text" value="<?php echo $noticeboard['title'];?>" class="form-control"/ required>
                        </div>
                    </div>	


                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Start Date'); ?></label>
                        <div class="col-sm-12">
                                <input name="start_date" type="date" value="<?php echo date('Y-m-d', $noticeboard['start_date']);?>" class="form-control"/ required>
                        </div>
                    </div>	

                     <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('End Date'); ?></label>
                        <div class="col-sm-12">
                                <input name="end_date" type="date" value="<?php echo date('Y-m-d', $noticeboard['end_date']);?>" class="form-control"/ required>
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Location'); ?></label>
                        <div class="col-sm-12">
                                <input name="location" value="<?php echo $noticeboard['location'];?>" type="text" class="form-control"/ required>
                        </div>
                    </div>	

	
                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Description'); ?></label>
                        <div class="col-sm-12">
                                <textarea type="text" class="form-control" name="description"><?php echo $noticeboard['description'];?></textarea>
                        </div>
                    </div>
                                                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-info btn-sm btn-block btn-rounded"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('Save'); ?></button>
                    </div>
                <?php  echo form_close();?>
                <?php endforeach;?>
                </div>                
		</div>
	</div>
</div>