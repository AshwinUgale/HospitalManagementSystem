<div class="row">
    <div class="col-lg-12 col-sm-12">
        <div class="panel panel-info">
		<div class="panel-body table-responsive">
					 <?php echo get_phrase('Manage Language'); ?>
						
						<a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/add_language/');">
						<button type="button" class="btn btn-default btn-xs pull-right"><i class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('add_language');?>
						</button></a>
						
						<a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/popup/add_phrase/');">
						<button type="button" class="btn btn-default btn-xs pull-right"><i class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('add_phrase');?>
						</button></a>
						<hr>
	


	  				<?php if (!isset($edit_system_phrase)) : ?>
				
                	<table class="table" id="table_export">
						<thead>
							<tr>
								<th><?php echo get_phrase('all_languages');?> </th>
								<th><div align="right"><?php echo get_phrase('actions');?></div></th>
							</tr>
						</thead>
                    <tbody>

                    <?php $language = $this->db->list_fields('language');
                            foreach ($language as $key => $field) { 
                                if($field == 'phrase_id'|| $field == 'phrase') 
                                continue;
                    ?>
                    	<tr>
                        	<td><?php echo ucwords($field);?></td>
								<td>
									<div align="right">
										<a href="<?php echo base_url();?>setting/manage_language/edit_phrase/<?php echo $field;?>">
										<button type="button" class="btn btn-success btn-sm"><i class="fa fa-edit"></i>
										<?php echo get_phrase('Translate');?></button></a>
										
										<a href="<?php echo base_url();?>setting/manage_language/delete_language/<?php echo $field;?>">
										<button type="button" class="btn btn-danger btn-circle btn-xs"><i class="fa fa-times" onclick="return confirm('Delete Language ?');"></i>
										</button></a></div>		
									</div>
								</td>
                       	 	</tr>
                    <?php } ?>

						</tbody>
					</table>
				<?php endif;?>

				<?php if (isset($edit_system_phrase)) : ?>
					
					<?php 
						$current_editing_language = $edit_system_phrase;
						echo form_open(base_url() . 'setting/manage_language/update_phrase/'. $current_editing_language , array('id' => 'phrase_form'));
						$count = 1;
						$language_phrases = $this->db->query("SELECT `phrase_id`, `phrase`, `$current_editing_language` FROM `language`")->result_array();
						foreach($language_phrases as $key => $row){
							$phrase_id = $row['phrase_id'];
							$phrase = $row['phrase'];
							$phrase_language = $row[$current_editing_language];
					?>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="panel panel-info">
                          
                           <div class="row panel-body">
						   <?php echo $count++ .'. '. $row['phrase'];?>
						   <hr class="sep-2">
							
							 <div class="col-sm-10">
 								<input type="text" name="phrase<?php echo $row['phrase_id'];?>" 
								 id="phrase-<?php echo $row['phrase_id'];?>" value="<?php echo $phrase_language;?>"
								  onkeyup="enableUpdateButton(<?php echo $row['phrase_id'];?>)" class="form-control"/>
 							</div>
 
 							<div class="col-sm-2">
								<button type="button" name="button" class = "btn btn-xs btn-success pull-right" 
								id="button-<?php echo $row['phrase_id'];?>" disabled onclick="updatePhrase(<?php echo $row['phrase_id'];?>)">  
									<i class="fa fa-check"></i>
								</button>
							</div>
									  
                            </div>
                        </div>
                    </div>
				<?php } ?>
				<?php echo form_close();?>
				<?php endif;?>

			</div>	
		</div>
	</div>
</div>	

<script>
function enableUpdateButton(id){
	$('#button-'+id).prop('disabled', false);
}

function updatePhrase(phraseId) {
			$('#button-'+phraseId).text('...');
			var updatedValue = $('#phrase-'+phraseId).val();
			var currentEditingLanguage = '<?php echo $current_editing_language; ?>';
			$.ajax({
				type : "POST",
				url  : "<?php echo site_url('setting/updatePhraseWithAjax/'); ?>",
				data : {updatedValue : updatedValue, currentEditingLanguage : currentEditingLanguage, phraseId : phraseId},
				success : function(response) {
					
				}
			});
		} 

</script>