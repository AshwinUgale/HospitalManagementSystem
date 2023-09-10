 <!--row -->

                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box bg-danger">
                            <div class="r-icon-stats">
                                <i class="fa fa-calendar bg-danger"></i>
                                <div class="bodystate">
                                    <h4 style="color:white"><?php echo $this->db->get_where('shedule', array('doctor_id' => $this->session->userdata('doctor_id')))->num_rows();?></h4>
                                    <span class="text-muted"><a href="" style="color:white"><?php echo get_phrase('Total Shedule');?></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <div class="white-box bg-success">
                            <div class="r-icon-stats">
                                <i class="fa fa-users bg-success"></i>
                                <div class="bodystate">
                                <h4 style="color:white"><?php echo $this->db->get_where('prescription', array('doctor_id' => $this->session->userdata('doctor_id')))->num_rows();?></h4>
                                    <span class="text-muted"><a href="" style="color:white"><?php echo get_phrase('Prescription');?></a></span>
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
                                    $doctor_department = $this->db->get_where('doctor', array('doctor_id' => $this->session->userdata('doctor_id')))->row()->department_id; 
                                    echo $this->db->get_where('patient', array('department_id' => $doctor_department))->num_rows();?></h4>
                                    <span class="text-muted"><a href="" style="color:white"><?php echo get_phrase('New Patient');?></a></span>
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
                                $doctor_department = $this->db->get_where('doctor', array('doctor_id' => $this->session->userdata('doctor_id')))->row()->department_id;
                                echo $this->db->get_where('doctor', array('department_id' => $doctor_department))->num_rows();?></h4>
                                    <span class="text-muted"><a href="" style="color:white"><?php echo get_phrase('New Doctor');?></a></span>
                                </div>
                            </div>
                        </div>
                    </div>

         
           
              

                

                </div>
                <!--/row -->
                <!-- .row -->
               
                <!-- /.row -->
                
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="white-box">
                            <h3 class="box-title m-b-0"><?php echo get_phrase('New Patient List');?></h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th><?php echo get_phrase('Image');?></th>
                                            <th><?php echo get_phrase('Name');?></th>
                                            <th><?php echo get_phrase('Sex');?></th>
                                            <th><?php echo get_phrase('Email');?></th>
                                            <th><?php echo get_phrase('Number');?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                <?php 
                   $doctor_department = $this->db->get_where('doctor', array('doctor_id' => $this->session->userdata('doctor_id')))->row()->department_id; 
                    $sql = "SELECT * FROM patient where department_id='$doctor_department' order by patient_id desc LIMIT 1";
                    $array_select = $this->db->query($sql)->result_array();
                    foreach ($array_select as $key => $patient):?>
                                        <tr>
                                            <td><img src="<?php echo $this->crud_model->get_image_url('patient', $patient['patient_id']);?>" class="img-circle" height="30px" width="30px"></td>
                                            <td><?php echo $patient['name'];?></td>
                                            <td><?php echo $patient['sex'];?></td>
                                            <td><?php echo $patient['email'];?></td>
                                            <td><?php echo $patient['phone'];?></td>
                                        </tr>
                      <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="white-box">
                            <h3 class="box-title m-b-0"><?php echo get_phrase('New Doctor');?></h3>
                            <div class="table-responsive">
                            <table class="table">
                                    <thead>
                                        <tr>
                                            <th><?php echo get_phrase('Image');?></th>
                                            <th><?php echo get_phrase('Name');?></th>
                                            <th><?php echo get_phrase('Sex');?></th>
                                            <th><?php echo get_phrase('Email');?></th>
                                            <th><?php echo get_phrase('Number');?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                <?php 
                    $doctor_department = $this->db->get_where('doctor', array('doctor_id' => $this->session->userdata('doctor_id')))->row()->department_id; 
                    $sql = "SELECT * FROM doctor where department_id='$doctor_department' order by doctor_id desc LIMIT 1";
                    $array_select = $this->db->query($sql)->result_array();
                    foreach ($array_select as $key => $doctor):?>
                                        <tr>
                                            <td><img src="<?php echo $this->crud_model->get_image_url('doctor', $doctor['doctor_id']);?>" class="img-circle" height="30px" width="30px"></td>
                                            <td><?php echo $doctor['name'];?></td>
                                            <td><?php echo $doctor['gender'];?></td>
                                            <td><?php echo $doctor['email'];?></td>
                                            <td><?php echo $doctor['phone'];?></td>
                                        </tr>
                      <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->