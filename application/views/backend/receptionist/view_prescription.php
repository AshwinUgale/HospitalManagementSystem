<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-info">
			<div class="panel-heading"> <?php echo get_phrase("Print Prescription");?>
							
					<a href="<?php echo base_url();?>prescription/list_prescription" 
                     class="btn btn-orange btn-xs"><i class="fa fa-mail-reply-all"></i>&nbsp;<?php echo get_phrase('back');?>
                    </a>
					
					<a href="<?php echo base_url();?>prescription/add_prescription" 
                     class="btn btn-orange btn-xs"><i class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('New Prescription');?>
                    </a>
					
					<button type="button" name="b_print" class="btn btn-xs btn-info" onClick="printdiv('div_print');"><i class="fa fa-print"></i>
					<?php echo get_phrase('print');?></button>	
			</div>
			<div class="panel-body table-responsive" id="div_print">
    <?php foreach($select_prescription_by_id as $key => $prescription):?> 
        <table class="table" width="1030" border="1">
 
 <div class="alert alert-default" align="center"><img src="<?php echo base_url() ?>uploads/logo.png"  class="img-circle" width="80" height="80"/>
					<h3><?php echo $system_name;?></h3>
					<?php $address = $this->db->get_where('settings', array('type' => 'address'))->row()->description;?>
					<?php echo $address; ?>
					<h5><?php $phone = $this->db->get_where('settings', array('type' => 'phone'))->row()->description;?></h5>
					<?php echo $phone; ?>&nbsp;&nbsp;Email:&nbsp;&nbsp;<?php $system_email = $this->db->get_where('settings', array('type' => 'system_email'))->row()->description;?>
					<?php echo $system_email; ?>

					</div>
					<hr>
 
					  <tr>
						<td width="180" rowspan="4"><img src="<?php echo $this->crud_model->get_image_url('doctor',$prescription['doctor_id']);?>" alt="user" class="img-thumbnail img-responsive" width="260" height="260"></td>
						<td width="135"><div align="right">Doctor Name</div></td>
						<td colspan="2">&nbsp;&nbsp;<?php echo $this->crud_model->get_type_name_by_id('doctor',$prescription['doctor_id']);?></td>  
					 </tr>
					
					
					  <tr>
						<td><div align="right">Doctor Gender</div></td>
						<td colspan="2">&nbsp;&nbsp;<?php echo $this->db->get_where('doctor', array('doctor_id' => $prescription['doctor_id']))->row()->gender; ?></td>
					  </tr>
					  
					  <tr>
						<td><div align="right">Doctor Phone</div></td>
						<td>&nbsp;&nbsp;<?php echo $this->db->get_where('doctor', array('doctor_id' => $prescription['doctor_id']))->row()->phone; ?></td>
					  </tr>
					  
					  <tr>
						<td><div align="right">Doctor Department</div></td>
						<td colspan="2">&nbsp;&nbsp;<?php echo $this->db->get_where('department', array('department_id' => $prescription['department_id']))->row()->name;?></td>
					  </tr>
  
				  	<tr>
						<td colspan="3"><div class="alert alert-info">PATIENT FULL DETAILS</div> </td>
				  	</tr>
					
					<tr>
						<td width="180" rowspan="4"><img src="<?php echo $this->crud_model->get_image_url('patient',$prescription['patient_id']);?>" alt="user" class="img-thumbnail img-responsive" width="260" height="260"></td>
						<td width="135"><div align="right">Patient Name</div></td>
						<td colspan="2">&nbsp;&nbsp;<?php echo $this->crud_model->get_type_name_by_id('patient', $prescription['patient_id']);?></td>  
					</tr>
					
				   <tr>
						<td><div align="right">Patient Sex</div></td>
						<td colspan="2">&nbsp;&nbsp;<?php echo $this->db->get_where('patient', array('patient_id' => $prescription['patient_id']))->row()->sex;?></td>
				  </tr>
				  
				  <tr>
						<td><div align="right">Patient Age</div></td>
						<td colspan="2">&nbsp;&nbsp;<?php echo $this->db->get_where('patient', array('patient_id' => $prescription['patient_id']))->row()->age;?></td>
				  </tr>
				  
				  <tr>
						<td><div align="right">Patient Occupation</div></td>
						<td colspan="2">&nbsp;&nbsp;<?php echo $this->db->get_where('patient', array('patient_id' => $prescription['patient_id']))->row()->occupation;?></td>
				  </tr>
  
					<tr>
						<td><div align="right">Prescription Code</div></td>
						<td colspan="2">&nbsp;&nbsp;<strong><?php echo $prescription['prescription_code'];?></strong></td>
				  </tr>
  
					<tr>
						<td><div align="right">Prescription Name</div></td>
						<td colspan="2">&nbsp;&nbsp;<?php echo $prescription['name'];?></td>
					</tr>
				  
					  <tr>
							<td><div align="right">Weight</div></td>
							<td colspan="2">&nbsp;&nbsp;<?php echo $prescription['weight'];?></td>
					  </tr>
  
					   <tr>
							<td><div align="right">Height</div></td>
							<td colspan="2">&nbsp;&nbsp;<?php echo $prescription['height'];?></td>
					  </tr>

					  <tr>
							<td><div align="right">Blood Presure</div></td>
							<td colspan="2">&nbsp;&nbsp;<?php echo $prescription['blood_pressure'];?></td>
					  </tr>
  
					  <tr>
							<td><div align="right">Prescription Type</div></td>
							<td colspan="2">&nbsp;&nbsp;
                            
                            
                            <span class="label label-<?php if($prescription['prescription_type'] == '1') echo 'success'; else echo 'warning';?>">
                                            <?php if($prescription['prescription_type'] == '1'):?>
                                            <?php echo 'New Prescription';?>
                                            <?php endif;?>
                                            <?php if($prescription['prescription_type'] == '2'):?>
                                            <?php echo 'Old Prescription';?>
                                            <?php endif;?>
                            </span>
                            </td>
					  </tr>
 
					  <tr>
							<td><div align="right">Visiting Fee</div></td>
							<td colspan="2">&nbsp;&nbsp;<?php echo $prescription['visiting_fee'];?></td>
					  </tr>
  
						<tr>
							<td><div align="right">Case History</div></td>
							<td colspan="2">&nbsp;&nbsp;<?php echo $prescription['case_history'];?></td>
					  </tr>
 			</table>
    <?php endforeach;?>


			<div class="alert alert-info">DIAGNOSE INFORMATION</div>

				<table class="table table-bordered" width="100%" border="1" style="border-collapse:collapse;">
					<thead>
						<tr>
							 <th>#</th>
							 <th><?php echo get_phrase('Diagnose'); ?></th>
							 <th><?php echo get_phrase('Medicine Name'); ?></th>
							 <th><?php echo get_phrase('Medicine Type'); ?></th>
							<th><?php echo get_phrase('Prescription'); ?></th>
							<th><?php echo get_phrase('Usage Days'); ?></th>
						</tr>
					</thead>
					<tbody>
	  
	  <?php $prescription_entries = json_decode($prescription['prescription_entries']); 
	 			 $i = 1;
	  			foreach($prescription_entries as $key => $prescription_entry) : ?>
						<tr>
							<td><?php echo $i++;?></td>
							<td><?php echo $prescription_entry->diagnose;?></td>
							<td><?php echo $prescription_entry->medicine_name;?></td>
							<td><?php echo $prescription_entry->medicine_type;?></td>
							<td><?php echo $prescription_entry->usage_prescription;?></td>
							<td><?php echo $prescription_entry->usage_days;?></td>
						</tr>
				  <?php endforeach;?>
					</tbody>
				</table>

            </div>
		</div>
	</div>
</div>
	<script language="javascript">
		function printdiv(printpage){
		var headstr = "<html><head><title></title></head><body>";
		var footstr = "</body>";
		var newstr = document.all.item(printpage).innerHTML;
		var oldstr = document.body.innerHTML;
		document.body.innerHTML = headstr+newstr+footstr;
		window.print();
		document.body.innerHTML = oldstr;
		return false;
	}
	</script>