

<!--<nav class="navbar navbar-inverse navbar-fixed-top" id="nav"></nav> -->
<?php 
$gt=$this->session->userdata('login');

$user=$this->db->get_where('tbl_admin_user',array('aid'=>$gt->aid))->row();

//echo $gt->email;
?>
<div class="container-fluid">
   <div class="row">
      <!-- -->          
      <div class="col-lg-12">
         <div class="panel panel-yellow">
            <div class="panel-heading">Change Password</div>
            
            <div class="panel-body pan">
               <form action="" method="post" class="form-horizontal">
                  <div class="form-body pal">
                        
                     <div class="form-group">
                        <label for="Product Price" class="col-md-3 control-label" required >Old Password:
                        </label>
                        <div class="col-md-6">
                           <input  name="old_name" type="password" class="form-control"
                              required value="<?php echo $user->password; ?>">
                        </div>
                     </div>


                     <div class="form-group">
                        <label for="Product Price" class="col-md-3 control-label" required >
                        New Password:
                        </label>
                        <div class="col-md-6">
                           <input 
                         name="new_password" type="password" class="form-control" 
                         value=""
                              required >
                        </div>
                     </div>


                      <div class="form-group">
                        <label  class="col-md-3 control-label" required >Conform Password:
                        </label>
                        <div class="col-md-6">
                        <input id="inputUsername" 
                           name="confirm_password" type="password" class="form-control"
                           value=""
                              required >
                              
                        </div>
                     </div>

                     


                     <div class="form-actions top">
                        <div class="col-md-offset-3 col-md-9">
                           <button type="submit" name="submit" class="btn btn-green">Change</button>
                        </div>
                     </div>
                  </div>


               </form>

               <div class="col-md-offset-3 col-md-6">
            
<?php if ($this->session->flashdata('error')):?>
<div class="alert alert-danger">
   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
   <strong style="color:red;"><?php echo $this->session->flashdata('error');?></strong>
</div>
<?php endif;?>
<?php if ($this->session->flashdata('msg')):?>
<div class="alert alert-success">
   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
   <strong style="color:green;"><?php echo $this->session->flashdata('msg');?></strong>
</div>
<?php endif;?>
</div>
            </div>

         </div>
      </div>
   </div>
</div>
</div>