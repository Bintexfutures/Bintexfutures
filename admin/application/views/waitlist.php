<?php
/**
 * @Auther:santhosh
 * function subscribe list
 * @return View
 */


?>

   <form action="<?php echo base_url(); ?>waitlist/update" method="POST" role="form">
<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">Wait list
            <div class="pull-right"></div>
         </div>
         <?php if($this->session->flashdata('response')){ ?>
         <div class="alert alert-success">
       	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
       	 <strong><?php echo $this->session->flashdata('response');?></strong>  
        </div>
       <?php }  ?>
         
         <div class="panel-body">
          

    
  <div class="form-group">
    <label for="">wait list</label>
    <input type="text" class="form-control" value="<?php echo $wait[0]->wait_value; ?>" name="wait" placeholder="add waitlist">
    <input type="hidden" class="form-control" value="<?php echo $wait[0]->id; ?>" name="id" >
  </div>

  

  <button type="submit" class="btn btn-primary">Submit</button>

           
         </div>
      </div>
   </div>
</div>
</form>