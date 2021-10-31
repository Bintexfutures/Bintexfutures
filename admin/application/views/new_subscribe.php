<?php
/**
 * @Auther:santhosh
 * function subscribe list
 * @return View
 */

 $data1=$this->db->get_where('subscribe')->result();

?>
<script  type="text/javascript" src="<?php echo base_url(); ?>assets/custom/js/message.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-select.min.css">
<script src="<?php echo base_url(); ?>assets/js/bootstrap-select.min.js?<?php echo time();?>"></script>
<style>
    .filter-option{width:181px !important;}
</style>
<script>
$(document).ready(function(){
   // Img();
    $(".changeimg").change(function(){
        $(".setimg").attr("src","./assets/img/"+$(this).val());
    })
   /* function Img(){
        alert('s');
        $(".setimg").attr("src","./assets/img/"+$(this).val());
    }*/
})
</script>
<!--file popup-->
<!-- Modal -->
<div id="files" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <form action="https://bintexfutures.com/admin/New_subscribe/file" method="post" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">File upload</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <input type="file" class="form-control" name="file" />
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-default" >submit</button>
      </div>
    </div>
    </form>

  </div>
</div>
<!--end-->
<div class="row">
    <div class="col-lg-3">
        <div class="panel panel-yellow">
            
           <div class="panel-heading">Messanger
            <div class="pull-right"></div>
         </div>
            <div class="panel-body">
                <button class="btn btn-primary" data-toggle="modal" data-target="#files">Add files</button>
                <?php $attributes=array("class"=>"form_message","id"=>"form_message","enctype"=>"multipart/form-data"); 
                     echo form_open(base_url().'New_subscribe/send',$attributes); ?>
                     <?php if(!empty($this->session->flashdata('msg'))){?>
                     <div class="alert alert-success">
                	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                   	 <strong><?php echo $this->session->flashdata('msg'); ?></strong>
                   	 </div>
                     
                    <?php }?>
                     <div class="msg"></div>
                <div class="form-group">
							<label for="message-text" class="control-label">Select User*:</label>
							<div class="input-group">
								<select data-live-search="true" class="form-control custom-select selectpicker" name="userdata[]" id="userdata" multiple data-actions-box="true"   multiple='multiple' required>
									<option  disabled value="">Select User</option>
									
								 </select>                                                                   
							</div>
							<label for="message-text" class="control-label"></label>
						</div>
                            <div class="form-group">
                                <div for="message-text" class="control-label">Message*:</div>
                                <div class="input-group">
                                    <textarea class="form-control" style="width: 100%" name="comment" id="comment" rows="3" placeholder="Enter your comments here" required></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div for="message-text" class="control-label">Subject*:</div>
                                <div class="input-group">
                                    <textarea class="form-control" style="width: 100%" name="sub" id="sub" rows="3" placeholder="Enter your subject" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div for="message-text" class="control-label">file:</div>
                                <div class="input-group">
                                   <select class="changeimg form-control" name="img" required>
                                       <option selected disable>--SELECT FILE--</option>
                <?php if(!empty($image)){ 
                foreach($image as $key=>$val){
                ?>
                <option><?php echo $val->image; ?></option>
                <?php } } ?>
            </select>
                                </div>
                                <br/>
                                <div class="form-group">
                                    <img width="200" height="200"  class="setimg"/>
                                </div>
                            </div>
                            <button type="submit" class="btn inner-btn"><i class="mdi mdi-send"></i> Send</button>
					 <?php echo form_close(); ?>
            </div>
        </div>
    </div>
   <div class="col-lg-9">
      <div class="panel panel-yellow">
         <div class="panel-heading">Subscribe Members
            <div class="pull-right"></div>
         </div>
         <?php if($this->session->flashdata('response')){ ?>
         <div class="alert alert-success">
       	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
       	 <strong><?php echo $this->session->flashdata('response');?></strong>  
        </div>
       <?php }  ?>
         
         <div class="panel-body">
             
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th>S.No</th>
                     <th>Date</th> 
                     <th>Email</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
            
                  <?php foreach($data as $key=> $h){?>
                  
                  <tr id="accordion">
                     <td><?php echo $key+1; ?></td>
                     <td><?php echo $h->time; ?></td>
                     <td><?php echo $h->email; ?></td>
                     <td><a href="New_subscribe/delete?id=<?php echo $h->id; ?>" class="btn btn-danger">Delete</a></td>
           
                  <?php }?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>