
 <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
<!--<nav class="navbar navbar-inverse navbar-fixed-top" id="nav"></nav> -->
<?php 
$gt=$this->session->userdata('userlogin');

$user=$this->db->get_where('users',array('id'=>$gt->id))->row();

//echo $gt->email;
?>

     <div class="col-md-12 text-center">
         <div class="panel panel-yellow">
		 <div class="card-header">
                <h4 class="mb-0">Change Password</h4>
            </div>
            
            <div class="panel-body pan border-color">
               <form action="" method="post" class="form-horizontal">
                  <div class="form-body pal"><br><br>
				  
        <div class="row">
		<div class="offset-md-3 col-md-5">
			<div class="col-form-label input-group">       
				<input name="old_name" type="password" class=" form-control" placeholder="Old Password" required>
			</div>
		</div>
		</div>
		
		<div class="row">
		<div class="offset-md-3 col-md-5">
			<div class="col-form-label input-group">       
			<input name="new_password" type="password" class="form-control" placeholder="New Password" value="" required >
			</div>
		</div>
		</div>
		
		<div class="row">
		<div class="offset-md-3 col-md-5">
		<div class="col-form-label input-group"> 
		    <input id="inputUsername" name="confirm_password" type="password" class="form-control" placeholder="Conform Password" value="" required >
		</div>
		</div>
		</div>
		
		<div class="col-md-3 offset-md-2">
		<button type="submit" name="submit" class="btn btn-default">Change</button>
		</div><br><br>
		
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