<?php $select =  $this->db->get_where('expense_category', array('expense_category_id' => $param2))->result_array();
        foreach ($select as $key => $select) : ?>

<div class="row">

    <div class="col-sm-12">
		<div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('expense_category'); ?></div>
				<div class="panel-body table-responsive">
        
                    <!----CREATION FORM STARTS---->
                    <?php echo form_open(base_url(). 'payment/expense_category/update/'. $param2, array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Name'); ?></label>
                        <div class="col-sm-12">
                                <input name="name" type="text" value="<?php echo $select['name'];?>" class="form-control"/ required>
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