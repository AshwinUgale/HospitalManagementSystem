<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-info">
            <div class="panel-heading"> <?php echo get_phrase("patient's_profile");?>
							
					<a href="<?php echo base_url();?>patient/list_patient" 
                     class="btn btn-orange btn-xs"><i class="fa fa-mail-reply-all"></i>&nbsp;<?php echo get_phrase('back');?>
                    </a>
					
					<a href="<?php echo base_url();?>patient/add_patient" 
                     class="btn btn-orange btn-xs"><i class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('add_new_patient');?>
                    </a>
					<button type="button" name="b_print" class="btn btn-xs btn-info" onClick="printdiv('div_print');"><i class="fa fa-print"></i><?php echo get_phrase('print');?></button>	</div>
                    <div class="panel-wrapper collapse in" aria-expanded="true">
                        <div class="panel-body table-responsive" id="div_print">
                
				
				
                    <?php foreach($select_patient as $patient => $row):?>		
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
                                <td width="180" rowspan="4"><img src="<?php echo $this->crud_model->get_image_url('patient',$row['patient_id']);?>" alt="user" class="img-thumbnail img-responsive" width="260" height="260"></td>
                                <td width="135"><div align="right">PATIENT ID</div></td>
                                <td colspan="2">&nbsp;&nbsp;	
                                    <button class="btn btn-sm btn-outline btn-rounded btn-info" type="button" data-toggle="collapse" data-target="#collapseExample11" aria-expanded="false" aria-controls="collapseExample"><?php echo get_phrase ('get_patient_id');?></button>
                                        <div class="collapse m-t-15" id="collapseExample11">
                                            <div class="well"> <strong><?php echo $row ['pid']; ?></strong> </div>
                                        </div>
                                                
                                </td>  
                            </tr>
                            <tr>
                                <td><div align="right">NAME</div></td>
                                <td colspan="2">&nbsp;&nbsp;<?php echo $row ['name']; ?></td>
                            </tr>
                            <tr>
                                <td><div align="right">AGE</div></td>
                                <td>&nbsp;&nbsp;<?php echo $row ['age']; ?>&nbsp;Years</td>
                            </tr>
                            <tr>
                                <td><div align="right">GENDER</div></td>
                                <td>&nbsp;&nbsp;<?php echo $row ['sex']; ?></td>
                            </tr>
                            <tr>
                                <td colspan="3"><div class="alert alert-info">FULL PERSONAL DETAILS</div> </td>
                            </tr>
                            <tr>
                                <td><div align="right">DATE OF BIRTH </div></td>
                                <td colspan="2">&nbsp;&nbsp;<?php echo $row ['birth_date']; ?></td>
                            </tr>
                            <tr>
                                <td><div align="right">PLACE OF BIRTH </div></td>
                                <td colspan="2">&nbsp;&nbsp;<?php echo $row ['place_of_birth']; ?></td>
                            </tr>
                            <tr>
                                <td><div align="right">ID CARD </div></td>
                                <td colspan="2">&nbsp;&nbsp;<?php echo $row ['idcard']; ?></td>
                            </tr>
                            <tr>
                                <td><div align="right">ISSUE AT</div></td>
                                <td colspan="2">&nbsp;&nbsp;<?php echo $row ['issue_at']; ?></td>
                            </tr>
                            <tr>
                                <td><div align="right">ISSUE ON</div></td>
                                <td colspan="2">&nbsp;&nbsp;<?php echo $row ['issue_on']; ?></td>
                            </tr>
                            <tr>
                                <td><div align="right">MOTHER TONGUE </div></td>
                                <td colspan="2">&nbsp;&nbsp;<?php echo $row ['mother_tongue']; ?></td>
                            </tr>
                            <tr>
                                <td><div align="right">BLOOD GROUP </div></td>
                                <td colspan="2">&nbsp;&nbsp;<?php echo $row ['blood_group']; ?></td>
                            </tr>
                            <tr>
                                <td><div align="right">MARITAL STATUS </div></td>
                                <td colspan="2">&nbsp;&nbsp;<?php echo $row ['marital_status']; ?></td>
                            </tr>
                            <tr>
                                <td><div align="right">RELIGION</div></td>
                                <td colspan="2">&nbsp;&nbsp;<?php echo $row ['religion']; ?></td>
                            </tr>
                            <tr>
                                <td><div align="right">CITY</div></td>
                                <td colspan="2">&nbsp;&nbsp;<?php echo $row ['city']; ?></td>
                            </tr>
                            <tr>
                                <td><div align="right">STATE</div></td>
                                <td colspan="2">&nbsp;&nbsp;<?php echo $row ['state']; ?></td>
                            </tr>
                            <tr>
                                <td><div align="right">ADDRESS</div></td>
                                <td colspan="2">&nbsp;&nbsp;<?php echo $row ['address']; ?></td>
                            </tr>
                            <tr>
                                <td><div align="right">OCCUPATION</div></td>
                                <td colspan="2">&nbsp;&nbsp;<?php echo $row ['occupation']; ?></td>
                            </tr>
                            <tr>
                                <td><div align="right">DEPARTMENT</div></td>
                                <td colspan="2">&nbsp;&nbsp;<?php echo $this->crud_model->get_type_name_by_id('department',$row['department_id']);?></td>
                            </tr>
                            <tr>
                                <td colspan="3"><div class="alert alert-info">PATIENT ACCOUNTINFORMATION</div></td>
                            </tr>
                            <tr>
                                <td><div align="right">MOBILE NUMBER </div></td>
                                <td colspan="2">&nbsp;&nbsp;<?php echo $row ['phone']; ?></td>
                            </tr>
                            <tr>
                                <td><div align="right">EMAIL</div></td>
                                <td colspan="2">&nbsp;&nbsp;<?php echo $row ['email']; ?></td>
                            </tr>
                    
                        </table>
            <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</div>
<script language="javascript">
function printdiv(printpage)
{
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
                    
<script type="text/javascript" src="js/html2canvas.min.js"></script>
<script type="text/javascript" src="js/jspdf.min.js"></script>
<script type="text/javascript">
    var pages = $('.print');
    var doc = new jsPDF();
    var j = 0;
    for (var i = 0 ; i < pages.length; i++) {
        html2canvas(pages[i]).then(function(canvas) {
        var img=canvas.toDataURL("image/png");
        // debugger;
        var height =  canvas.height / 440 * 80;
        doc.addImage(img,'JPEG',10,0,190,height);
        if (j < (pages.length - 1) ) doc.addPage();
        if (j == (pages.length - 1) ) {doc.save('Report.pdf');}
        j++;
        });
    }
    
</script>