<?php $select_med_category =  $this->db->get_where('med_category', array('med_category_id' => $param2))->result_array();
        foreach ($select_med_category as $key => $med_category) : ?>


<div class="row">

    <div class="col-sm-12">
		<div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('Update Category'); ?></div>
				<div class="panel-body table-responsive">
        
                    <!----CREATION FORM STARTS---->
                    <?php echo form_open(base_url(). 'phamarcist/medicine_category/update/' . $param2, array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Name'); ?></label>
                        <div class="col-sm-12">
                                <input name="name" value="<?php echo $med_category['name'];?>" type="text" class="form-control"/ required>
                        </div>
                    </div>	
								
                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Description'); ?></label>
                        <div class="col-sm-12">
                                <textarea type="text" class="form-control" name="description"><?php echo $med_category['description'];?></textarea>
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