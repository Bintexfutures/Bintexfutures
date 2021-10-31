            <?php 
           if(empty($this->session->tempdata('email'))){ 
           //if(empty(get_cookie('remember_me'))){
           ?>
           <!--model-->
           <!-- Modal -->
  <div class="modal hide fade" id="myModal" style="top:68px">
      <div class="modal-dialog modal-sm">
      <div class="modal-content">
    <!--<div class="modal-header">
        <a class="close" data-dismiss="modal">×</a>
        <h3>Modal header</h3>
    </div>-->
    <div class="modal-body">
         <form>
       <?php if(!empty($this->session->tempdata('email'))) { ?>
                <div class="alert alert-success" id="success_message" style="color:green"></div> <?php } ?>
                                         <label id="error_message" style="color:red"></label>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" style="padding:0px;padding-left: 6px;" id="email" placeholder="Email or Phone number" required>
                                    </div>
                                     <div class="form-group" >
                                      <a href="<?php echo base_url(); ?>Subscriber/skip?id=1"> 
                                      <button type="button" class="btn btn-info" >Skip</button>
                                      </a>
                                        <button type="button" class="btn btn-success" id="submit" style="font-size: 1rem;padding: .375rem .75rem;">Subscribe Now</button>
                                    </div>
            </form>
    </div>
    
    <!-- <div class="modal-footer">
       <a href="#" class="btn">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
    </div>-->
    </div>
    </div>
</div>

<script type="text/javascript">
    $(window).on('load', function() {
        $('#myModal').modal('show');
    });
    $('#myModal').modal({
    backdrop: 'static',
    keyboard: false
})
</script>
           <!--end-->
           
           
           
           


 <script>
// Get the modal
var modal = document.getElementById("subscribe");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
 modal.style.display = "block";
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<?php } ?>
 <?php 

   if(isset($_POST['subscribe']))
   {
     extract($_POST);
     if(!empty($email) && !empty($email)){
         $dt=$this->db->get_where('subscribe', array( 'email'=>$email));
     if ($dt->num_rows() > 0) {
        
          $check=$this->db->get_where('subscribe', array( 'refer_by'=>$dt->result()[0]->refer_link));
         $rows=$check->num_rows();
       if($check){
           $this->session->set_flashdata('Message','Email already exits you have referd by '.$rows.' users');
           redirect(base_url());
          echo '<script>
       swal({
          title: "Email Already Exits you have referd by '.$rows.' Users",
          icon: "error",
          button: "Ok",
        });
       </script>'; 
       }
     }  
   
    
     else {
       extract($_POST);
       $refer_link = uniqid(); 
        if(isset($_GET['referal_id'])){
           $referal_id=$_GET['referal_id'];
       }else{
           $referal_id=''; 
       }
       $data = array(
       'email'=>$email,'name'=>$user,'refer_by'=>$referal_id);
      
       $res=$this->db->insert('subscribe', $data);
       
      
       if($res){
           $dt_1=$this->db->get_where('subscribe', array( 'email'=>$email));
       $data_1 = array('refer_link'=>$refer_link.'_'.$dt_1->result()[0]->id);
           $this->db->where('id', $dt_1->result()[0]->id);
            $update=$this->db->update('subscribe', $data_1);
            if($update){
                 $this->session->set_flashdata('Message','Thank you for your subscription.!');
                 redirect(base_url());
            echo '<script>
         swal({
            title: "Thank you for Your Subscription.!",
            icon: "success",
            button: "Ok",
          });
         </script>';
         
            }else{
                $this->session->set_flashdata('Message','Error');
                redirect(base_url());
                 echo '<script>
         swal({
            title: "Error",
            icon: "success",
            button: "Ok",
          });
         </script>';
            }
         
         $this->email->from('do-not-reply@bintexfutures.com', "Bintexfutures");
$this->email->to($email);
//$this->email->cc('tsanthu108@gmail.com');
//$this->email->bcc('them@their-example.com');

$this->email->subject("[Bintexfutures] Subscribe");
//$this->email->body = $this->load->view('reg_email.php');
$this->email->message('<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

    <!-- CSS Reset : BEGIN -->
    <style>
        html,
body {
    margin: 0 auto !important;
    padding: 0 !important;
    height: 100% !important;
    width: 100% !important;
    background: #f1f1f1;
}
/* What it does: Stops email clients resizing small text. */
* {
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
/* What it does: Centers email on Android 4.4 */
div[style*="margin: 16px 0"] {
    margin: 0 !important;
}
/* What it does: Stops Outlook from adding extra spacing to tables. */
table,
td {
    mso-table-lspace: 0pt !important;
    mso-table-rspace: 0pt !important;
}
/* What it does: Fixes webkit padding issue. */
table {
    border-spacing: 0 !important;
    border-collapse: collapse !important;
    table-layout: fixed !important;
    margin: 0 auto !important;
}
/* What it does: Uses a better rendering method when resizing images in IE. */
img {
    -ms-interpolation-mode:bicubic;
}
/* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
a {
    text-decoration: none;
}
/* What it does: A work-around for email clients meddling in triggered links. */
*[x-apple-data-detectors],  /* iOS */
.unstyle-auto-detected-links *,
.aBn {
    border-bottom: 0 !important;
    cursor: default !important;
    color: inherit !important;
    text-decoration: none !important;
    font-size: inherit !important;
    font-family: inherit !important;
    font-weight: inherit !important;
    line-height: inherit !important;
}
/* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
.a6S {
    display: none !important;
    opacity: 0.01 !important;
}
/* What it does: Prevents Gmail from changing the text color in conversation threads. */
.im {
    color: inherit !important;
}

img.g-img + div {
    display: none !important;
}
/* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */


/* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
@media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
    u ~ div .email-container {
        min-width: 320px !important;
    }
}
/* iPhone 6, 6S, 7, 8, and X */
@media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
    u ~ div .email-container {
        min-width: 375px !important;
    }
}
/* iPhone 6+, 7+, and 8+ */
@media only screen and (min-device-width: 414px) {
    u ~ div .email-container {
        min-width: 414px !important;
    }
}
    </style>
    <!-- CSS Reset : END -->
    <!-- Progressive Enhancements : BEGIN -->
    <style>
.bg_white{background: #ffffff;}
.bg_grey{background: #041824;}
.bg_light{background: #fafafa;}
h1,h2,h3,h4,h5,h6{
	color: #4e4e4e;
	margin-top: 0;
	font-weight: 400;
}
body{

	font-weight: 400;
	font-size: 15px;
	line-height: 1.8;
	color: rgba(0,0,0,.5);
}
a{color: #ffc0d0;}
table{}
/*LOGO*/
.logo img{width:160px;height:auto;}
/*INTRO*/
.intro{position: relative;z-index: 0;}
.intro .text{color: rgba(0,0,0,.3);}
.intro .text h2{
	color: #2771b4;
	font-size: 28px;
	margin-bottom: 8px;
	font-weight: 600;
}
.intro .text h2 span{
	font-weight: 600;
	color: #ffc0d0;
}
.intro .text p{font-size: 18px;
    line-height: 30px;
    margin-top: 0;
    color: #333;padding: 0 48px;}
/*HEADING SECTION*/
.heading-section{}
.heading-section h2{
	color: #000000;
	font-size: 28px;
	margin-top: 0;
	line-height: 1.4;
	font-weight: 400;
}
.heading-section .subheading{
	margin-bottom: 20px !important;
	display: inline-block;
	font-size: 13px;
	text-transform: uppercase;
	letter-spacing: 2px;
	color: rgba(0,0,0,.4);
	position: relative;
}
.heading-section .subheading::after{
	position: absolute;
	left: 0;
	right: 0;
	bottom: -10px;
	
	width: 100%;
	height: 2px;
	background: #ffc0d0;
	margin: 0 auto;
}
.heading-section-white{color: rgba(255,255,255,.8);}
.heading-section-white h2{
	font-family: 
	line-height: 1;
	padding-bottom: 0;
}
.heading-section-white h2{color: #ffffff;}
.heading-section-white .subheading{
	margin-bottom: 0;
	display: inline-block;
	font-size: 13px;
	text-transform: uppercase;
	letter-spacing: 2px;
	color: rgba(255,255,255,.4);
}
ul.social{padding: 0;display:inline-block;vertical-align:middle;margin-left: 14px;}
ul.social li{
	display: inline-block;
	margin-right: 0px;
}
/*FOOTER*/
.footer1{/* border-top: 1px solid rgba(0,0,0,.1); */color: rgba(0,0,0,.5);}
.footer{color: rgba(0,0,0,.5);}
.footer .heading{
	color: #333;
	font-size: 16px;
    margin-top: 12px;
	margin-bottom: 4px;
	font-weight: 600;
}
.footer ul{margin: 0;padding: 0;}
.footer ul li{list-style: none;margin-bottom: 10px;}
.footer ul li a{color: rgba(0,0,0,1);}
.thank_you{margin: 28px;text-align:right;}
.thank_you h3{color: #333;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 600;}
.thank_you p{color: #2771b4;
    margin: 0;
    font-weight: 600;}
@media screen and (max-width: 500px) {}

</style>


</head>

<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #222222;">
	<center style="width: 100%; background-color: #f1f1f1;">
    <div style="display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
      &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
    </div>
    <div style="max-width: 600px; margin: 0 auto;background:#fff;" class="email-container">
    	<!-- BEGIN BODY -->
      <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
      	<tr>
          <td valign="top" class="bg_white" style="padding: 1em 2.5em 0 2.5em;background: #041824;">
          	<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
          		<tr>
          			<td class="logo" style="text-align: left;">
			            <img src="https://www.bintexfutures.com/admin/assets/aboutpage/1571828596image2092417050.jpg" alt="Bintex Logo" style="width:180px;"/>
			          </td>
          		</tr>
          	</table>
          </td>
	      </tr><!-- end tr -->
	      <tr>
          <td valign="middle" class="hero bg_white">
            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
            	<tr>
            		<td valign="middle" width="100%">
                  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                      <td>
                        <img src="https://www.bintexfutures.com/email_temp/mail-img.jpg" alt="" style="width: 100%;padding-top:26px; max-width: 220px; height: auto; margin: auto; display: block;">
                      </td>
                    </tr>
                  </table>
                </td>
            	</tr>
            </table>
          </td>
	      </tr>
				<tr>
          <td valign="middle" class="intro bg_white" style="padding: 2em 0 0 0;">
            <table>
            	<tr>
            		<td>
            			<div class="text" style="padding: 0 2.5em; text-align: center;">
            				<h2 style="    color: #2771b4;
    font-size: 28px;
    margin-bottom: 8px;
    font-weight: 600;">Thanks for Subscribing!</h2>
            				<p style="font-size: 18px;
    line-height: 30px;
    margin-top: 0;
    color: #333;
    padding: 0 48px;">We"ll be in touch soon. In the meantime, please tell your friends about us.</p>
            			</div>
            		</td>
            	</tr>
            </table>
          </td>
	      </tr>
      <!-- 1 Column Text + Button : END -->
      </table>
      <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
      	<tr>
          <td valign="middle" class="bg_white footer1">
            <table>
            	<tr style="text-align: left;">
                <td valign="middle" width="100%" style="padding-top: 20px; text-align: center;">
                	<h3 class="heading" style="font-size: 22px;font-weight: 600;display: inline-block;">Use your personal share Links</h3>
					<ul class="social" style="list-style:none;padding: 0;
    display: inline-block;
    vertical-align: middle;
    margin-left: 14px;">
					    <li style="display: inline-block;margin-right: 0px;"><a href="https://t.me/bintexfutures_chat"><img src="https://www.bintexfutures.com/email_temp/telegram.png" alt="" style="width: 30px; max-width: 600px; height: auto; display: block;"></a></li>
                		<li style="display: inline-block;margin-right: 0px;"><a href="https://twitter.com/Bintexfutures"><img src="https://www.bintexfutures.com/email_temp/twitter.png" alt="" style="width: 30px; max-width: 600px; height: auto; display: block;"></a></li>
                		<li style="display: inline-block;margin-right: 0px;"><a href="https://www.facebook.com/bintexfutures2019/"><img src="https://www.bintexfutures.com/email_temp/fb.png" alt="" style="width: 30px; max-width: 600px; height: auto; display: block;"></a></li>
                	</ul>
                </td>
              </tr>			  
            </table>
			<p style="text-align:center;margin:0;font-weight:900;color:#333;">[ Or ]</p>
          </td>
        </tr><!-- end: tr -->
        <tr style="text-align: left;">
          <td valign="middle" width="100%" class="bg_white footer" style="text-align: center;">
                	<h3 class="heading" style="color: #333;
    font-size: 16px;
    margin-top: 12px;
    margin-bottom: 4px;
    font-weight: 600;">copy and paste this link into your favourite service</h3>
					<a href="https://www.bintexfutures.com?referal_id='.$refer_link.'_'.$dt_1->result()[0]->id.'" style="font-size:20px;    display: inline;
    background-color: #fbf2d3;
    padding: 4px 8px;
    border: 2px solid #4d8ac1;
    color: #2771b4;
    vertical-align: middle;">https://www.bintexfutures.com?referal_id='.$refer_link.'_'.$dt_1->result()[0]->id.'</a>
                </td>
        </tr>
		<tr style="text-align: right;">
			<td valign="middle" width="100%" class="bg_white">
				<div class="thank_you" style="text-align:right;margin-right:28px;">
					<h3 style="    color: #333;
    margin-bottom: 0;
    font-size: 18px;
    font-weight: 600;">Thank you again</h3>
					<p style="font-size:18px;color: #2771b4;
    margin: 0;
    font-weight: 600;">Team Bintexfutures</p>
				</div>
            </td>
        </tr>
      </table>

    </div>
  </center>
</body>
</html>');  
$this->email->set_mailtype('html');
$this->email->send();


redirect(base_url());

         
     }
   }
         
     }else{
          $this->session->set_flashdata('Message','Please enter user name and email');
     }
     
   }
	?>
         <!--footer started-->
         <div id="rec200865530" class="r t-rec t-rec_pt_75 t-rec_pb_75" style="padding-top:75px;padding-bottom:75px;background-color:#000000;border-top:4px solid #3375bb " data-animationappear="off" data-record-type="420" data-bg-color="#002136">
            <!-- T420 -->
            <div class="t420">
               <div class="t-container t-align_left">
                  <div class="t420__col t-col t-col_3">
                     <a href="#" style="color:#ffffff;font-size:20px;"><img src="images/tild6334-3064-4534-a131-346434646662__logo-02.svg" class="t420__logo" imgfield="img" alt="Resources"></a> 
                     <div class="t-sociallinks">
                        <div class="t-sociallinks__wrapper">
                           <div class="t-sociallinks__item">
                              <a href="https://www.facebook.com/bintexfutures2019/" target="_blank">
                                 <svg class="t-sociallinks__svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">
                                    <desc>Facebook</desc>
                                    <path style="fill:#aabbd4;" d="M47.761,24c0,13.121-10.638,23.76-23.758,23.76C10.877,47.76,0.239,37.121,0.239,24c0-13.124,10.638-23.76,23.764-23.76C37.123,0.24,47.761,10.876,47.761,24 M20.033,38.85H26.2V24.01h4.163l0.539-5.242H26.2v-3.083c0-1.156,0.769-1.427,1.308-1.427h3.318V9.168L26.258,9.15c-5.072,0-6.225,3.796-6.225,6.224v3.394H17.1v5.242h2.933V38.85z"/>
                                 </svg>
                              </a>
                           </div>
                           <div class="t-sociallinks__item">
                              <a href="https://twitter.com/Bintexfutures" target="_blank">
                                 <svg class="t-sociallinks__svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">
                                    <desc>Twitter</desc>
                                    <path style="fill:#aabbd4;" d="M47.762,24c0,13.121-10.639,23.76-23.761,23.76S0.24,37.121,0.24,24c0-13.124,10.639-23.76,23.761-23.76 S47.762,10.876,47.762,24 M38.031,12.375c-1.177,0.7-2.481,1.208-3.87,1.481c-1.11-1.186-2.694-1.926-4.455-1.926 c-3.364,0-6.093,2.729-6.093,6.095c0,0.478,0.054,0.941,0.156,1.388c-5.063-0.255-9.554-2.68-12.559-6.367 c-0.524,0.898-0.825,1.947-0.825,3.064c0,2.113,1.076,3.978,2.711,5.07c-0.998-0.031-1.939-0.306-2.761-0.762v0.077 c0,2.951,2.1,5.414,4.889,5.975c-0.512,0.14-1.05,0.215-1.606,0.215c-0.393,0-0.775-0.039-1.146-0.109 c0.777,2.42,3.026,4.182,5.692,4.232c-2.086,1.634-4.712,2.607-7.567,2.607c-0.492,0-0.977-0.027-1.453-0.084 c2.696,1.729,5.899,2.736,9.34,2.736c11.209,0,17.337-9.283,17.337-17.337c0-0.263-0.004-0.527-0.017-0.789 c1.19-0.858,2.224-1.932,3.039-3.152c-1.091,0.485-2.266,0.811-3.498,0.958C36.609,14.994,37.576,13.8,38.031,12.375"/>
                                 </svg>
                              </a>
                           </div>
                           <div class="t-sociallinks__item">
                              <a href="https://www.youtube.com/watch?v=uqANzNfZr9o&amp;feature=youtu.be" target="_blank">
                                 <svg class="t-sociallinks__svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">
                                    <desc>Youtube</desc>
                                    <path style="fill:#aabbd4;" d="M24 0.0130005C37.248 0.0130005 47.987 10.753 47.987 24C47.987 37.247 37.247 47.987 24 47.987C10.753 47.987 0.0130005 37.247 0.0130005 24C0.0130005 10.753 10.752 0.0130005 24 0.0130005ZM35.815 18.093C35.565 16.756 34.452 15.758 33.173 15.635C30.119 15.439 27.054 15.28 23.995 15.278C20.936 15.276 17.882 15.432 14.828 15.625C13.544 15.749 12.431 16.742 12.182 18.084C11.898 20.017 11.756 21.969 11.756 23.92C11.756 25.871 11.898 27.823 12.182 29.756C12.431 31.098 13.544 32.21 14.828 32.333C17.883 32.526 20.935 32.723 23.995 32.723C27.053 32.723 30.121 32.551 33.173 32.353C34.452 32.229 35.565 31.084 35.815 29.747C36.101 27.817 36.244 25.868 36.244 23.919C36.244 21.971 36.101 20.023 35.815 18.093ZM21.224 27.435V20.32L27.851 23.878L21.224 27.435Z"/>
                                 </svg>
                              </a>
                           </div>
                           <div class="t-sociallinks__item">
                              <a href="https://www.instagram.com/bintexfutures/" target="_blank">
                                 <svg class="t-sociallinks__svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" height="25px" viewBox="0 0 30 30" xml:space="preserve">
                                    <desc>Instagram</desc>
                                    <path style="fill:#aabbd4;" d="M15,11.014 C12.801,11.014 11.015,12.797 11.015,15 C11.015,17.202 12.802,18.987 15,18.987 C17.199,18.987 18.987,17.202 18.987,15 C18.987,12.797 17.199,11.014 15,11.014 L15,11.014 Z M15,17.606 C13.556,17.606 12.393,16.439 12.393,15 C12.393,13.561 13.556,12.394 15,12.394 C16.429,12.394 17.607,13.561 17.607,15 C17.607,16.439 16.444,17.606 15,17.606 L15,17.606 Z"></path>
                                    <path style="fill:#aabbd4;" d="M19.385,9.556 C18.872,9.556 18.465,9.964 18.465,10.477 C18.465,10.989 18.872,11.396 19.385,11.396 C19.898,11.396 20.306,10.989 20.306,10.477 C20.306,9.964 19.897,9.556 19.385,9.556 L19.385,9.556 Z"></path>
                                    <path style="fill:#aabbd4;" d="M15.002,0.15 C6.798,0.15 0.149,6.797 0.149,15 C0.149,23.201 6.798,29.85 15.002,29.85 C23.201,29.85 29.852,23.202 29.852,15 C29.852,6.797 23.201,0.15 15.002,0.15 L15.002,0.15 Z M22.666,18.265 C22.666,20.688 20.687,22.666 18.25,22.666 L11.75,22.666 C9.312,22.666 7.333,20.687 7.333,18.28 L7.333,11.734 C7.333,9.312 9.311,7.334 11.75,7.334 L18.25,7.334 C20.688,7.334 22.666,9.312 22.666,11.734 L22.666,18.265 L22.666,18.265 Z"></path>
                                 </svg>
                              </a>
                           </div>
                           <div class="t-sociallinks__item">
                              <a href="https://www.linkedin.com/company/bintexfutures/" target="_blank">
                                 <svg class="t-sociallinks__svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">
                                    <desc>LinkedIn</desc>
                                    <path style="fill:#aabbd4;" d="M8.99402 37.97V38.47H9.49402H15.714H16.214V37.97V17.9659V17.4659H15.714H9.49402H8.99402V17.9659V37.97ZM26.077 19.2614V17.969V17.469H25.577H19.613H19.113V17.969V37.973V38.473H19.613H25.829H26.329V37.973V28.077C26.329 26.7816 26.4561 25.6098 26.9179 24.7713C27.1424 24.3639 27.4438 24.0395 27.8525 23.8131C28.2641 23.585 28.814 23.4399 29.558 23.4399C30.2745 23.4399 30.7691 23.6067 31.1207 23.8523C31.4735 24.0988 31.7253 24.4547 31.9038 24.906C32.2721 25.8373 32.29 27.0626 32.29 28.245V37.974V38.474H32.79H39H39.5V37.974V27C39.5 24.2955 39.2136 21.7867 38.0551 19.9487C36.8633 18.0579 34.8148 16.9709 31.546 16.9709C29.0885 16.9709 27.2261 18.003 26.077 19.2614ZM47.501 24C47.501 36.9798 36.9789 47.5 24.001 47.5C11.0211 47.5 0.499023 36.9798 0.499023 24C0.499023 11.0222 11.0211 0.5 24.001 0.5C36.9788 0.5 47.501 11.0261 47.501 24ZM12.604 15.74C14.8675 15.74 16.706 13.9008 16.706 11.634C16.706 9.36816 14.8674 7.52905 12.604 7.52905C10.3344 7.52905 8.5 9.36834 8.5 11.634C8.5 13.8952 10.3339 15.74 12.604 15.74Z"/>
                                 </svg>
                              </a>
                           </div>
                           <div class="t-sociallinks__item">
                              <a href="https://t.me/bintexfutures_chat" target="_blank">
                                 <svg class="t-sociallinks__svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" height="25px" viewBox="0 0 60 60" xml:space="preserve">
                                    <desc>Telegram</desc>
                                    <path style="fill:#aabbd4;" d="M30 0C13.4 0 0 13.4 0 30s13.4 30 30 30 30-13.4 30-30S46.6 0 30 0zm16.9 13.9l-6.7 31.5c-.1.6-.8.9-1.4.6l-10.3-6.9-5.5 5.2c-.5.4-1.2.2-1.4-.4L18 32.7l-9.5-3.9c-.7-.3-.7-1.5 0-1.8l37.1-14.1c.7-.2 1.4.3 1.3 1z"/>
                                    <path style="fill:#aabbd4;" d="M22.7 40.6l.6-5.8 16.8-16.3-20.2 13.3"/>
                                 </svg>
                              </a>
                           </div>
                           <div class="fa_link"> 
                              <a href="https://www.reddit.com/user/BintexFutures" target="_blank"> 
                              <i class="fa fa-reddit-alien" aria-hidden="true"></i>
                              </a> 
                           </div>
                           <div class="fa_link"> 
                              <a href="https://www.bintexfutures.com/blog" target="_blank"> 
                              <i class="fa fa-medium" aria-hidden="true"></i>
                              </a> 
                           </div>
                           <div class="img_link"> 
                              <a href="https://coinmarketcap.com/currencies/bintex-futures" target="_blank"> 
                              <img src="images/coincap-logo.png" alt="" />
                              </a> 
                           </div>
                        </div>
                     </div>
                     <div class="t420__text t-descr t-descr_xxs" style="" field="text">
                        <div style="color:#818fa4;" data-customstyle="yes">© 2019-2021 BintexFutures All Rights Reserved</div>
                     </div>
                  </div>
                  <div class="t420__col t-col t-col_3">
                     <div class="t420__title t-name t-name_xs t420__title_uppercase" field="title" style="color: #ffffff;font-weight:700;font-family:'Arial';">Resources</div>
                     <div class="t420__descr t-descr t-descr_xxs" field="descr" style="color: #ffffff;color:#9caeba;font-weight:100;font-family:'Arial';">
                        <ul>
                           <li><a href="https://bintexfutures.com/Bintexfutures%20white%20paper%20V%201.0.pdf" style="color:#aabbd4 !important;" target="_blank">Whitepaper</a></li>
                           <li><a href="#rec201688787" style="color:#aabbd4 !important;">Roadmap</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="t420__floatbeaker_lr3"></div>
                  <div>
                     <div class="t420__col t-col t-col_3">
                        <div class="t420__title t-name t-name_xs t420__title_uppercase" field="title2" style="color: #ffffff;font-weight:700;font-family:'Arial';">Support</div>
                        <div class="t420__descr t-descr t-descr_xxs" field="descr2" style="color: #ffffff;color:#9caeba;font-weight:100;font-family:'Arial';">
                           <ul>
                              <li><a href="https://t.me/bintexfutures_chat" style="color:#aabbd4 !important;" target="_blank">Official Chat</a></li>
                              <li><a href="mailto:contact@bintexfutures.com" style="color:#aabbd4 !important;">contact@bintexfutures.com</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="t420__col t-col t-col_3">
                        <div class="t420__title t-name t-name_xs t420__title_uppercase" field="title3" style="color: #ffffff;font-weight:700;font-family:'Arial';">Legal</div>
                        <div class="t420__descr t-descr t-descr_xxs" field="descr3" style="color: #ffffff;color:#9caeba;font-weight:100;font-family:'Arial';">
                           <ul>
                              <li><a href="https://bintexfutures.com/admin/assets/aboutpage/terms-conditions-privacy.pdf" style="color:#aabbd4 !important;" target="_blank">Terms Of Use</a></li>
                              <li><a href="https://bintexfutures.com/admin/assets/aboutpage/terms-conditions-privacy.pdf" style="color:#aabbd4 !important;" target="_blank">Privacy Policy</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!--total visitors-->
                  <div style="padding:10px;position:fixed;right:0px;bottom:10px;font-family: calibri;"><p style="color:#fff"><b>Total visitors : <?php echo $total_visitors; ?></b></p></div>
                  <!--end-->
               </div>
            </div>
         </div>
      </div>
      <!--/allrecords--><!-- Stat --> <script type="text/javascript">if (! window.mainTracker) { window.mainTracker = 'tilda'; }	(function (d, w, k, o, g) { var n=d.getElementsByTagName(o)[0],s=d.createElement(o),f=function(){n.parentNode.insertBefore(s,n);}; s.type = "text/javascript"; s.async = true; s.key = k; s.id = "tildastatscript"; s.src=g; if (w.opera=="[object Opera]") {d.addEventListener("DOMContentLoaded", f, false);} else { f(); } })(document, window, '40f590df066ba3d3edad4a0aa438b28e','script','https://stat.tildacdn.com/js/tildastat-0.2.min.js');</script> 
   <script type="text/javascript">
       $(document).ready(function(){
                                        $("#success_message").hide();
                                         $('#submit').click(function(){  
                                             
           var email = $('#email').val();  
           if(email == '')  
           {  
                $('#error_message').html("Please fill email");  
                return false;
           }
           if(IsEmail(email)==false){
                $('#error_message').html("invalid email");   
                return false;
            }
           else  
           {  
               $("#submit").attr("style","cursor: not-allowed");
                $('#error_message').html('');  
                $.ajax({  
                     url:"<?php echo  base_url(); ?>Home/subscribe",  
                     method:"POST",  
                     data:{email:email},  
                     success:function(data){  
                         $("#submit").removeAttr("style","cursor: not-allowed");
                          $("form").trigger("reset");  
                            $("#success_message").show();
                          $('#success_message').fadeIn().html('<div class="alert alert-success" id="success_message">'+data+'</div>');  
                          setTimeout(function(){  
                               $('#success_message').fadeOut("Slow");  
                                window.location.href='https://bintexfutures.com/';
                          }, 2000);  
                     }  
                });  
           }  
      });  
      
      function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test(email)) {
           return false;
        }else{
           return true;
        }
      }
                                    })
   </script>
   </body>
</html>