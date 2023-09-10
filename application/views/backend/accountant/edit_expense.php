<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-info">
			
				<div class="panel-body">
                <?php $select_expense = $this->db->get_where('payment', array('payment_id' => $param2))->result_array();
                    foreach ($select_expense as $key => $expense) : ?>
                	<?php echo form_open(base_url() . 'payment/new_expense/update/'. $param2 , 
					array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
	
						<div class="form-group">
                 			<label class="col-md-12" for="example-text"><?php echo get_phrase('title');?></label>
                    		<div class="col-sm-12">
								<input type="text" class="form-control" name="title" value="<?php echo $expense['title'];?>" required>
                    		</div>
                		</div>

               			<div class="form-group">
                 			<label class="col-md-12" for="example-text"><?php echo get_phrase('category');?></label>
                    		<div class="col-sm-12">
                       
								<select name="expense_category_id" class="form-control select2" required>
									<option value=""><?php echo get_phrase('select_expense_category');?></option>
									
                                    <?php $select = $this->db->get('expense_category')->result_array();
                                            foreach ($select as $key => $category) : ?>
                                    <option value="<?php echo $category['expense_category_id'];?>"<?php if($expense['expense_category_id'] == $category['expense_category_id']) echo 'selected="selected"' ;?>><?php echo $category['name'];?></option>
                                    <?php endforeach;?>
								</select>
                    		</div> 
                		</div>
				
						<div class="form-group">
                 			<label class="col-md-12" for="example-text"><?php echo get_phrase('description');?></label>
                    		<div class="col-sm-12">
                				<textarea class="form-control textarea_editor" rows="5" name="description" class="form-control"><?php echo $expense['description'];?></textarea>
                    		</div> 
                		</div>
				
						<div class="form-group">
                 		<label class="col-md-12" for="example-text"><?php echo get_phrase('amount');?></label>
                   		 	<div class="col-sm-12">
                                <input type="text" class="form-control" name="amount" value="<?php echo $expense['amount'];?>" required>
                            </div>
                        </div>
				
	
						<div class="form-group">
                 			<label class="col-md-12" for="example-text"><?php echo get_phrase('method');?></label>
                    		<div class="col-sm-12">
								<select name="payment_method" class="form-control select2">
									<option value="1"<?php if($expense['payment_method'] == '1') echo 'selected="selected"' ;?>><?php echo get_phrase('cash');?></option>
									<option value="2"<?php if($expense['payment_method'] == '2') echo 'selected="selected"' ;?>><?php echo get_phrase('cheque');?></option>
									<option value="3"<?php if($expense['payment_method'] == '3') echo 'selected="selected"' ;?>><?php echo get_phrase('card');?></option>
								</select>
							</div>
						</div>
							
							
						<div class="form-group">
                 			<label class="col-md-12" for="example-text"><?php echo get_phrase('date');?></label>
                    		<div class="col-sm-12">
								<input class="form-control m-r-10" name="timestamp" type="date" value="<?php echo date('Y-m-d', $expense['timestamp']); ?>" id="example-date-input" required>
							</div>
						</div>

                    	<div class="form-group">
							<button type="submit" class="btn btn-info btn-rounded btn-block btn-sm"> <i class="fa fa-plus"></i>&nbsp;
							<?php echo get_phrase('save_expense');?></button>
						</div>
					<br>
                	<?php echo form_close();?>	
                    <?php endforeach;?>
									
									
				</div>
			</div>
		</div>
	</div> 
</div>