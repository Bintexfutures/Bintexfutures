<!-- START SECTION CONTACT -->
<section class="contact_section small_pt small_pb pb-0">
	<div class="container">
    	<div class="row align-items-center small_space">
    	    <div class="col-lg-4 col-md-4 offset-md-4">
    	        <div class="title_default_light title_border text-center">
                <h4 class="animation sup-head" data-animation="fadeInUp" data-animation-delay="0.2s">Send Us A Mail</h4>
              </div>
            	<div class="pt-4 pt-md-0 animation" data-animation="fadeInRight" data-animation-delay="0.1s" style="color:#FFE991";>
            	    
<?php
$ip_address=$_SERVER['REMOTE_ADDR'];
if(isset($_POST['submits'])) {
extract($_POST);


$data = array(
        'name'=>$name,
        'email'=>$email,         
        'subject'=>$subject,              
        'message'=>$message);

$res=$this->db->insert('enquriy', $data);
if($res){
  echo '
  <script>
 swal({
  title: "Successfully Sent",
  icon: "success",
  button: "Ok",
});
</script>';
}
else
{
  echo '
  <script>
 swal({
  title: "Error",
  icon: "warning",
  button: "Ok",
});
</script>';
}
}
?>
                    <form method="post" name="" class="field_form">
                    <div class="row">
                      <div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                        <input type="text" required="required" placeholder="Name" id="first-name" class="form-control" name="name">
                      </div>
                      <div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                        <input type="email" required="required" placeholder="Email" id="email" class="form-control" name="email">
                      </div>
                      <div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                        <input type="text" required="required" placeholder="Subject" id="subject" class="form-control" name="subject">
                      </div>
                      <div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="1s">
                        <textarea required="required" placeholder="Message" id="description" class="form-control" name="message" rows="2"></textarea>
                      </div>
                      <div class="col-md-12 text-center animation" data-animation="fadeInUp" data-animation-delay="1.2s">
                        <button type="submit" title="Submit Your Message!" class="btn btn-default" id="submitButton" name="submits" value="Submit">Submit</button>
                      </div>
                      <div class="col-md-12">
                        <div id="alert-msg" class="alert-msg text-center"></div>
                      </div>
                    </div>
                    </form>
                </div>
        	</div>
        	</div>
        </div>
</section>
<!-- END SECTION CONTACT --> 


<link href="<?php echo base_url() ?>css/timeTo.css" type="text/css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="node_modules/jquery/dist/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url() ?>css/jquery.time-to.js"></script>