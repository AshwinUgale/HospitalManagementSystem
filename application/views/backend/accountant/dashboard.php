 <!--row -->

                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box bg-danger">
                            <div class="r-icon-stats">
                                <i class="fa fa-credit-card bg-danger"></i>
                                <div class="bodystate">
                                    <h4 style="color:white"><?php echo $this->db->get_where('payment', array('payment_type' => 'income'))->num_rows();?></h4>
                                    <span class="text-muted"><a href="" style="color:white"><?php echo get_phrase('Total Income');?></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <div class="white-box bg-success">
                            <div class="r-icon-stats">
                                <i class="fa fa-users bg-success"></i>
                                <div class="bodystate">
                                <h4 style="color:white"><?php echo $this->db->get_where('payment', array('payment_type' => 'expense'))->num_rows();?></h4>
                                    <span class="text-muted"><a href="" style="color:white"><?php echo get_phrase('Total Expense');?></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box bg-info">
                            <div class="r-icon-stats">
                                <i class="fa fa-users bg-info"></i>
                                <div class="bodystate">
                                    <h4 style="color:white"><?php echo $this->db->get('accountant')->num_rows();?></h4>
                                    <span class="text-muted"><a href="" style="color:white"><?php echo get_phrase('Accountant');?></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box bg-purple">
                            <div class="r-icon-stats">
                                <i class="fa fa-users bg-purple"></i>
                                <div class="bodystate">
                                <h4 style="color:white"><?php echo $this->db->get('patient')->num_rows();?></h4>
                                    <span class="text-muted"><a href="" style="color:white"><?php echo get_phrase('New patient');?></a></span>
                                </div>
                            </div>
                        </div>
                    </div>

         
           
              

                

                </div>
                <!--/row -->
                <!-- .row -->
               
                <!-- /.row -->
                <!--row -->
                <div class="row">
                    <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><?php echo get_phrase('Total Expense');?></h3>
                           
                            <!-- Resources -->
                            <script src="https://www.amcharts.com/lib/4/core.js"></script>
                            <script src="https://www.amcharts.com/lib/4/charts.js"></script>
                            <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
                            <script>
                                am4core.ready(function() {

                                // Themes begin
                                am4core.useTheme(am4themes_animated);
                                // Themes end

                                // Create chart instance
                                var chart = am4core.create("chartdiv", am4charts.PieChart);

                                // Add data
                                chart.data = [
                                
                                <?php $select_expense = $this->db->get_where('payment', array('payment_type' => 'expense'))->result_array();
                                       foreach($select_expense as $key => $expense) : ?>
                                    {
                                    "country": "<?php echo $expense['title'];?>",
                                    "litres": <?php echo $expense['amount'];?>
                                    }, 
                                <?php endforeach;?>
                                  ];

                                // Add and configure Series
                                var pieSeries = chart.series.push(new am4charts.PieSeries());
                                pieSeries.dataFields.value = "litres";
                                pieSeries.dataFields.category = "country";
                                pieSeries.innerRadius = am4core.percent(50);
                                pieSeries.ticks.template.disabled = true;
                                pieSeries.labels.template.disabled = true;

                                var rgm = new am4core.RadialGradientModifier();
                                rgm.brightnesses.push(-0.8, -0.8, -0.5, 0, - 0.5);
                                pieSeries.slices.template.fillModifier = rgm;
                                pieSeries.slices.template.strokeModifier = rgm;
                                pieSeries.slices.template.strokeOpacity = 0.4;
                                pieSeries.slices.template.strokeWidth = 0;

                                chart.legend = new am4charts.Legend();
                                chart.legend.position = "right";

                                }); // end am4core.ready()
                                </script>
                                <div id="chartdiv" style="height: 250px;"></div>
                        </div>
                    </div>

                    <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><?php echo get_phrase('Total Income');?></h3>
                            
                            <script>
                                am4core.ready(function() {

                                // Themes begin
                                am4core.useTheme(am4themes_animated);
                                // Themes end

                                // Create chart instance
                                var chart = am4core.create("chartdiv2", am4charts.XYChart);

                                // Add data
                                chart.data = [
                                    <?php
                                        $select_income = $this->db->get_where('payment', array('payment_type' => 'income'))->result_array();
                                        foreach($select_income as $key => $income) : 
                                        $invoice = $this->db->get_where('invoice', array('invoice_id' => $income['invoice_id']))->row()->patient_id;
                                        ?>    
                                {
                                "date": new Date(<?php echo date('Y', $income['timestamp']);?>,<?php echo date('m', $income['timestamp'])-1;?>,<?php echo date('d', $income['timestamp']);?>),
                                "value": <?php echo $income['amount'];?>
                                }, 
                                <?php endforeach;?>
                                
                                ];

                                // Create axes
                                var dateAxis = chart.xAxes.push(new am4charts.DateAxis());

                                // Create value axis
                                var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

                                // Create series
                                var lineSeries = chart.series.push(new am4charts.LineSeries());
                                lineSeries.dataFields.valueY = "value";
                                lineSeries.dataFields.dateX = "date";
                                lineSeries.name = "Sales";
                                lineSeries.strokeWidth = 3;

                                // Add simple bullet
                                var bullet = lineSeries.bullets.push(new am4charts.Bullet());
                                var image = bullet.createChild(am4core.Image);
                                image.href = "https://www.amcharts.com/lib/images/star.svg";
                                image.width = 30;
                                image.height = 30;
                                image.horizontalCenter = "middle";
                                image.verticalCenter = "middle";

                                }); // end am4core.ready()
                                </script>

                                <!-- HTML -->

                                <!-- HTML -->
                                <div id="chartdiv2" style="height: 250px;"></div>
                            
                        </div>
                    </div>
                </div>
                <!-- row -->
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
                   
                    $sql = "SELECT * FROM patient order by patient_id desc LIMIT 5";
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
                            <h3 class="box-title m-b-0"><?php echo get_phrase('Blood Donor');?></h3>
                            <div class="table-responsive">
                            <table class="table">
                                    <thead>
                                    <tr>
                                            <th><?php echo get_phrase('Name');?></th>
                                            <th><?php echo get_phrase('Sex');?></th>
                                            <th><?php echo get_phrase('Number');?></th>
                                            <th><?php echo get_phrase('Email');?></th>
                                            <th><?php echo get_phrase('Blood');?></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                   <?php  
                                  
                                    $sql = "SELECT * FROM donor order by donor_id desc LIMIT 5";
                                    $array_select = $this->db->query($sql)->result_array();
                                    foreach ($array_select as $key => $donor):?>
                                        <tr>
                                            <td><?php echo $donor['name'];?></td>
                                            <td><?php echo $donor['sex'];?></td>
                                            <td><?php echo $donor['phone'];?></td>
                                            <td><?php echo $donor['email'];?></td>
                                            <td><?php echo $donor['blood_group'];?></td>
                                        </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->