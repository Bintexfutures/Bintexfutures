
  <div class="bg-color h-100">
      <div class="lr_wrap">
          <div class="card-body">
          	<div class="lr_icon text-center">
          	    <a href="https://bintexfutures.com">
          	<img src="assets/images/logo.png" alt="Bintex logo"/>
          	</a>
            </div>	<br>
            <!-- <h6 class="my-4 text-center text-uppercase">Welcome to Bintex</h6> -->
  

    <?php

   $ip_address=$_SERVER['REMOTE_ADDR'];
   $date=date("Y-d-m H:i:s");
   if(isset($_POST['submit']))
   {
     extract($_POST);
     $dt=$this->db->get_where('users', array( 'email'=>$email, 'username'=>$username));
    // $dt2=$this->db->get_where('users', array( $password==!$cpassword));
//$res=$dt->row();

//die();
     // $dt5=$this->db->get_where('users', array( 'id'=>$referral));
     // $dt3=$this->db->get_where('users', array( 'username'=>$username));

     if ($dt->num_rows() > 0) {
       echo '<script>
       swal({
          title: "Email Already Exits",
          icon: "error",
          button: "Ok",
        });
       </script>';
     }
     
    //   else if ($password==!$cpassword) {
    //   echo '<script>
    //   swal({
    //       title: "password and confirm password does not match",
    //       icon: "error",
    //       button: "Ok",
    //     });
    //   </script>';
    //  }
     
     else if($this->db->get_where('users', array( 'id'=>$referral))) {
   
   
   $bintex=md5(uniqid("ferry", true)).rand('0','2000');
   $bintex1=md5(uniqid("ferry", true));
   $bintex2=md5(uniqid("jkll", true));
   $bintex3=md5(uniqid("rret", true));
   $bintex4=md5(uniqid("tyutyut", true));
   $bintex5=md5(uniqid("sdfsdf", true));
   $bintex6=md5(uniqid("sdfsdf", true));
   $bintex7=md5(uniqid("sdf", true));
   $bintex8=md5(uniqid("esdi", true)); 

   
       $data = array(
         'username'=>$username,
         'email'=>$email,
         'password'=>$password,
         'referral'=>$referral   
       );
       //print_r($data); die();
       $ress=$this->db->insert('users', $data);
        
       if($ress){

       $nee=$this->db->get_where('users', array( 'username'=>$username))->row();
       $naa=$nee->id;
         
         
$this->email->from('do-not-reply@bintexfutures.com', "Bintexfutures");
$this->email->to($data["email"]);
//$this->email->cc('tsanthu108@gmail.com');
//$this->email->bcc('them@their-example.com');

$this->email->subject("[Bintexfutures] New Account Registered from  27.6.3.80 - 2019-10-24 06:44:57(UTC)");
//$this->email->body = $this->load->view('reg_email.php');
$this->email->message("  <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet'>


<div style='width:100%'>
<div style='width:70%; margin:50px auto 0 auto'>

<div style='width:97%; text-align:center; padding:10px; background:#eeefef;; color:#000000;'>
<div style='width:100%;' align='center text-align:center; padding:5px 0; color:#1a3457;'>
<img src='https://bintexfutures.com/assets/images/dashboard_logo.png' style='float:right; width:100px; height:31px;'> 
<h2 style='text-decoration-line: underline;'>Account Registration</h2>
</div>

<h2 style='text-align: initial;'>Welcome to Bintex Futures!</h2>
<p style='text-align: initial;'>If you completed our registration form and you were expecting this email, please click the button below to confirm registration.</p>

<div style='width:100%; text-align:center; margin:20px 0;'>
<a href='https://bintexfutures.com/register/active/$bintex1/$bintex2/$naa/$bintex3/$bintex4/$bintex5/$bintex6/$bintex7' style='background:#1a3457; color:#FFF; margin:0 10px; padding:10px; border-radius:5px; text-decoration:none;'> Confirm Registration</a>
</div>

<p style='color:#437ca1!important;'><img src='images/security_icon.png' height='16px' width='15px'><a target='blank' href='http://bintexfutures.com/register/active/$bintex1/$bintex2/$naa/$bintex3/$bintex4/$bintex5/$bintex6/$bintex7'> http://bintexfutures.com/$bintex3/$bintex4/$bintex5/$bintex6/$bintex7/?verifyCode=$bintex;&LinkID=$naa</a></p>
</div>

</div>
</div>
");  
$this->email->set_mailtype('html');
$this->email->send();


redirect('register/success');

       }
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
  
   
   
   ?>


             <form action="" method="POST" role="form">
              <div class="form-group">
                <input class="form-control" id="exampleInputname" type="text" placeholder="Enter Your Name" name="username" required>
              </div>
              <div class="form-group">
                <input class="form-control" id="exampleInputEmail1" type="email" placeholder="Enter email" name="email" required>
              </div>
              <div class="form-group">
                <input class="form-control" id="password" type="password" placeholder="Password" name="password" required>
              </div>
              <div class="form-group">
                <input class="form-control" id="confirm_password" type="password" name="cpassword" placeholder="Confirm Password" required="">
              </div>
              
              <script> 
              var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
               </script> 
			  <!-- <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input class="form-control" id="" type="password" placeholder="Confirm Password" name="" required>
              </div> -->
			  <div class="form-group">
                <input class="form-control" id="" type="text" placeholder="Referral ID" name="referral">
              </div>
              <div class="form-group">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" required> I agree to Terms & Pollicy.</label>
                </div>
              </div>
              
              <div class="col-md-6 offset-md-3 text-center animation" data-animation="fadeInUp" data-animation-delay="1.2s">
                        <input type="submit" class="btn btn-default" name="submit" value="Sign Up"></button>
              </div>
            </form>
            <div class="text-center mt-3">
              <span class="small">Already have an account? <a href="login">Login</a></span>
            </div>
          </div>
        </div>
  </div>