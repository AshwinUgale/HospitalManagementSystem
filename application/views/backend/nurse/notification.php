<div class="row">

    
		
    <div class="col-sm-12">
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
                                       
                                       
                                    </tr>
                            <?php  endforeach; ?>
                        </tbody>
                    </table>
		        </div>
	    </div>
	</div>
</div>
            <!----TABLE LISTING ENDS--->
			