<div class="row">

    <div class="col-sm-5">
		<div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('Add Event'); ?></div>
				<div class="panel-body table-responsive">
        
                    <!----CREATION FORM STARTS---->
                    <?php echo form_open(base_url(). 'admin/notification/create', array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Title'); ?></label>
                        <div class="col-sm-12">
                                <input name="title" type="text" class="form-control"/ required>
                        </div>
                    </div>	


                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Start Date'); ?></label>
                        <div class="col-sm-12">
                                <input name="start_date" type="date" value="<?php echo date('Y-m-d');?>" class="form-control"/ required>
                        </div>
                    </div>	

                     <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('End Date'); ?></label>
                        <div class="col-sm-12">
                                <input name="end_date" type="date" value="<?php echo date('Y-m-d');?>" class="form-control"/ required>
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Location'); ?></label>
                        <div class="col-sm-12">
                                <input name="location" type="text" class="form-control"/ required>
                        </div>
                    </div>	

	
                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Description'); ?></label>
                        <div class="col-sm-12">
                                <textarea type="text" class="form-control" name="description"></textarea>
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
            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('List Events'); ?></div>		
                <div class="panel-body table-responsive">
		            <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th><?php echo get_phrase('Title'); ?></th>
                                        <th><?php echo get_phrase('start_date'); ?></th>
                                        <th><?php echo get_phrase('end_date'); ?></th>
                                        <th><?php echo get_phrase('location'); ?></th>
                                        <th><?php echo get_phrase('Description'); ?></th>
                                        <th><?php echo get_phrase('Actions'); ?></th>
                                    </tr>
                                </thead>
                        <tbody>
                    
                    <?php
                           
                            $select_noticeboards = $this->db->get('noticeboard')->result_array(); 
                            foreach ($select_noticeboards as $key => $noticeboard) : ?>
                                    <tr>
                                        <td><?php echo $noticeboard['title'];?></td>
                                        <td><?php echo date('d M, Y', $noticeboard['start_date']);?></td>
                                        <td><?php echo date('d M, Y', $noticeboard['end_date']);?></td>
                                        <td><?php echo $noticeboard['location'];?></td>
                                        <td><?php echo $noticeboard['description'];?></td>
                                       
                                        <td>
                                        <a onclick="showAjaxModal('<?php echo base_url();?>modal/popup/edit_notification/<?php echo $noticeboard['noticeboard_id'];?>')" class="btn btn-info btn-circle btn-xs"><i class="fa fa-edit"></i></a>
                                        <a href="<?php echo base_url();?>admin/notification/delete/<?php echo $noticeboard['noticeboard_id'];?>" onclick="return confirm('Are you sure want to delete?');" class="btn btn-danger btn-circle btn-xs" style="color:white"><i class="fa fa-times"></i></a>
                                        
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
			