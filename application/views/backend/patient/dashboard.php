 <!--row -->

                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box bg-danger">
                            <div class="r-icon-stats">
                                <i class="fa fa-plus bg-danger"></i>
                                <div class="bodystate">
                                    <h4 style="color:white"><?php echo $this->db->get('donor')->num_rows();?></h4>
                                    <span class="text-muted"><a href="" style="color:white"><?php echo get_phrase('Blood Donor');?></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <div class="white-box bg-success">
                            <div class="r-icon-stats">
                                <i class="fa fa-plus bg-success"></i>
                                <div class="bodystate">
                                <h4 style="color:white"><?php echo $this->db->get('blood')->num_rows();?></h4>
                                    <span class="text-muted"><a href="" style="color:white"><?php echo get_phrase('Total Blood');?></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box bg-info">
                            <div class="r-icon-stats">
                                <i class="fa fa-users bg-info"></i>
                                <div class="bodystate">
                                    <h4 style="color:white"><?php
                                   
                                    echo $this->db->get('laboratorist')->num_rows();?></h4>
                                    <span class="text-muted"><a href="" style="color:white"><?php echo get_phrase('Laboratorist');?></a></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="white-box bg-purple">
                            <div class="r-icon-stats">
                                <i class="fa fa-users bg-purple"></i>
                                <div class="bodystate">
                                <h4 style="color:white"><?php 
                               
                                echo $this->db->get('patient')->num_rows();?></h4>
                                    <span class="text-muted"><a href="" style="color:white"><?php echo get_phrase('Total Patient');?></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/row -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="table-responsive">
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
                <!-- /.row -->