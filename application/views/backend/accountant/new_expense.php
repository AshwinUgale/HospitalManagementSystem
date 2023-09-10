<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-info">
			<div class="panel-heading">NEW EXPENSE
				<div class="pull-right">
					<a href="#" data-perform="panel-collapse">
					<i class="fa fa-plus"></i>&nbsp;&nbsp;ADD NEW EXPENSE HERE
					<i class="btn btn-info btn-xs"></i></a> <a href="#" data-perform="panel-dismiss"></a> 
				</div>
			</div>
			<div class="panel-wrapper collapse out" aria-expanded="true">
				<div class="panel-body">
                	<?php echo form_open(base_url() . 'payment/new_expense/create/' , 
					array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
	
						<div class="form-group">
                 			<label class="col-md-12" for="example-text"><?php echo get_phrase('title');?></label>
                    		<div class="col-sm-12">
								<input type="text" class="form-control" name="title" autofocus required>
                    		</div>
                		</div>

               			<div class="form-group">
                 			<label class="col-md-12" for="example-text"><?php echo get_phrase('category');?></label>
                    		<div class="col-sm-12">
                       
								<select name="expense_category_id" class="form-control select2" required>
									<option value=""><?php echo get_phrase('select_expense_category');?></option>
									
                                    <?php $select = $this->db->get('expense_category')->result_array();
                                            foreach ($select as $key => $category) : ?>
                                    <option value="<?php echo $category['expense_category_id'];?>"><?php echo $category['name'];?></option>
                                    <?php endforeach;?>
								</select>
                    		</div> 
                		</div>
				
						<div class="form-group">
                 			<label class="col-md-12" for="example-text"><?php echo get_phrase('description');?></label>
                    		<div class="col-sm-12">
                				<textarea class="form-control textarea_editor" rows="5" name="description" class="form-control"></textarea>
                    		</div> 
                		</div>
				
						<div class="form-group">
                 		<label class="col-md-12" for="example-text"><?php echo get_phrase('amount');?></label>
                   		 	<div class="col-sm-12">
                                <input type="text" class="form-control" name="amount" value="" required>
                            </div>
                        </div>
				
	
						<div class="form-group">
                 			<label class="col-md-12" for="example-text"><?php echo get_phrase('method');?></label>
                    		<div class="col-sm-12">
								<select name="payment_method" class="form-control select2">
									<option value="1"><?php echo get_phrase('cash');?></option>
									<option value="2"><?php echo get_phrase('cheque');?></option>
									<option value="3"><?php echo get_phrase('card');?></option>
								</select>
							</div>
						</div>
							
							
						<div class="form-group">
                 			<label class="col-md-12" for="example-text"><?php echo get_phrase('date');?></label>
                    		<div class="col-sm-12">
								<input class="form-control m-r-10" name="timestamp" type="date" value="<?php echo date('Y-m-d'); ?>" id="example-date-input" required>
							</div>
						</div>

                    	<div class="form-group">
							<button type="submit" class="btn btn-info btn-rounded btn-block btn-sm"> <i class="fa fa-plus"></i>&nbsp;
							<?php echo get_phrase('save_expense');?></button>
						</div>
					<br>
                	<?php echo form_close();?>	
									
									
					</div>
				</div>
			</div>
		</div>
	</div>  

 	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-info">
				<div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('list_expenses');?></div>
					<div class="panel-body table-responsive">
								
						<table id="example23" class="display nowrap" cellspacing="0" width="100%">
							<thead>
								<tr>
									
									<th><div><?php echo get_phrase('title');?></div></th>
									<th><div><?php echo get_phrase('category');?></div></th>
									<th><div><?php echo get_phrase('method');?></div></th>
									<th><div><?php echo get_phrase('amount');?></div></th>
									<th><div><?php echo get_phrase('date');?></div></th>
									<th><div><?php echo get_phrase('options');?></div></th>
								</tr>
							</thead>
							<tbody>
                            <?php $select_expense = $this->db->get_where('payment', array('payment_type' => 'expense'))->result_array();
                                            foreach ($select_expense as $key => $expense) : ?>
							<tr>
								<td><?php echo $expense['title'];?></td>
								<td><?php echo $this->crud_model->get_type_name_by_id('expense_category', $expense['expense_category_id']);?></td>
								<td>
                                <?php if($expense['payment_method'] == '1'):?>
                                <?php echo 'Cash';?>
                                <?php endif;?>
                                <?php if($expense['payment_method'] == '2'):?>
                                <?php echo 'Cheque';?>
                                <?php endif;?>
                                <?php if($expense['payment_method'] == '3'):?>
                                <?php echo 'Card';?>
                                <?php endif;?>

                                
                                </td>
								<td><?php echo $expense['amount'];?></td>
								<td><?php echo date('d M, Y', $expense['timestamp']);?></td>
								
								<td>
								<a onclick="showAjaxModal('<?php echo base_url();?>modal/popup/edit_expense/<?php echo $expense['payment_id'];?>')" class="btn btn-info btn-circle btn-xs">
									<i class="fa fa-edit"></i>
								</a>
								<a onclick="confirm_modal('<?php echo base_url();?>payment/new_expense/delete/<?php echo $expense['payment_id'];?>')" class="btn btn-danger btn-circle btn-xs" style="color:white">
									<i class="fa fa-times"></i>
								</a>
								</td>
							</tr>
                            <?php endforeach;?>
    					</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>
</div>
