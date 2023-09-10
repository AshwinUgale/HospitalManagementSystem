<div class="row">
    <div class="col-lg-12 col-sm-12">
        <div class="panel panel-info">
		    <div class="panel-body table-responsive">


            <table class="table" id="table_export">
						<thead>
							<tr>
								<th><?php echo get_phrase('all_tables');?> </th>
								<th><div align="right"><?php echo get_phrase('actions');?></div></th>
							</tr>
						</thead>
                    <tbody>

                    <?php 

                        for($i = 1; $i<= 14; $i++):

                        if($i	==	1)	$type	=	'admin';

                        else if($i	==	2)$type	=	'doctor';

                        else if($i	==	3)$type	=	'patient';

                        else if($i	==	4)$type	=	'accountant';

                        else if($i	==	5)$type	=	'phamarcist';

                        else if($i	==	6)$type	=	'invoice';

                        else if($i	==	7)$type	=	'appointment';

                        else if($i	==	8)$type	=	'shedule';

                        else if($i	==	9)$type	=	'prescription';

                        else if($i	==	10)$type=	'medicine';

                        else if($i	==	11)$type=	'laboratorist';

                        else if($i	==	12)$type=	'donor';

                        else if($i	==	13)$type=	'bed';

                        else if($i	==	14)$type=	'all';

                    ?>

                    	<tr>
                        	<td><?php echo get_phrase($type);?></td>
								<td>
									<div align="right">
										<a href="<?php echo base_url();?>setting/backup_database/create_backup/<?php echo $type;?>">
										<button type="button" class="btn btn-success btn-sm"><i class="fa fa-edit"></i>
										<?php echo get_phrase('Backup');?></button></a>
										
										<a href="<?php echo base_url();?>setting/backup_database/delete_database/<?php echo $type;?>">
										<button type="button" class="btn btn-danger btn-circle btn-xs"><i class="fa fa-times" onclick="return confirm('Delete Language ?');"></i>
										</button></a></div>		
									</div>
								</td>
                       	 	</tr>
                        <?php endfor;?>
                   

						</tbody>
					</table>

            </div>
        </div>
    </div>
</div>