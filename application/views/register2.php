
  <div class="bg_image h-100">
      <div class="lr_wrap">
          <div class="card-body">
          	<div class="lr_icon text-center">
          	<img src="<?php echo base_url();?>assets/images/logo.png" alt="Bintex logo"/>
            </div>	
            <!-- <h6 class="my-4 text-center text-uppercase">Welcome to Bintex</h6> -->
  

    <?php

   $ip_address=$_SERVER['REMOTE_ADDR'];
   $date=date("Y-d-m H:i:s");
   if(isset($_POST['submit']))
   {
     extract($_POST);
     $dt=$this->db->get_where('users', array( 'email'=>$email));
     $dt5=$this->db->get_where('users', array( 'id'=>$referral));
     $dt3=$this->db->get_where('users', array( 'username'=>$username));
     if ($dt->num_rows() > 0) {
       echo '<script>
       swal({
          title: "Email Already Exits",
          icon: "error",
          button: "Ok",
        });
       </script>';
     } 
     
      if ($dt5->num_rows() < 0) {
      echo '<script>
      swal({
          title: "Reference Id Not Exits",
          icon: "error",
          button: "Ok",
        });
      </script>';
     } 

     
     else 
     {
       if ($dt3->num_rows() > 0 ) {
            echo '<script>
            swal({
                title: "Username Already Exits",
               icon: "error",
                button: "Ok",
              });
            </script>';
           }  
           
           else {
    
       $data = array(
         'username'=>$username,
         'email'=>$email,
         'password'=>$password,
         'referral'=>$referral   
       );
       //print_r($data); die();
       $res=$this->db->insert('users', $data);
        
       if($res){

         echo '<script>
         swal({
            title: "Succesfully Registered...!",
            icon: "success",
            button: "Ok",
          });
         </script>';
       }
       else
       {
         echo '<script>
         swal({
            title: "Unable To Register...!",
            icon: "error",
            button: "Ok",
          });
         </script>';
       }
   }
   }
   }
   ?>


             <form action="" method="POST" role="form">
              <div class="form-group">
                <label for="exampleInputname">Username</label>
                <input class="form-control" id="exampleInputname" type="text" placeholder="Enter Your Name" name="username" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input class="form-control" id="exampleInputEmail1" type="email" placeholder="Enter email" name="email" required>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" name="password" required>
              </div>
			  <!-- <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input class="form-control" id="" type="password" placeholder="Confirm Password" name="" required>
              </div> -->


			  <div class="form-group">
                <label for="exampleInputPassword1">Referral ID</label>
                <input class="form-control" id="" type="text" value="<?php echo $re=$this->uri->segment(3); ?>"  name="referral">
              </div>
              <div class="form-group">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" required> I agree to Terms & Pollicy.</label>
                </div>
              </div>
              <input type="submit" class="btn btn-default btn-block" name="submit" value="Sign Up">
            </form>
            <div class="text-center mt-3">
              <span class="small">Already have an account? <a href="login">Login</a></span>
            </div>
          </div>
        </div>
  </div>