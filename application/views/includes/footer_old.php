
<!-- START FOOTER SECTION -->
<footer>
	<div class="footer_top" data-z-index="1" data-parallax="scroll">
		<div class="container">
		    <div class="row">
			<div class="col-lg-6 col-md-6">
			    <div class="video-responsive">
                    <iframe src="https://www.youtube.com/embed/uqANzNfZr9o" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
			</div>
			<div class="col-lg-6 col-md-6">
            	<div class="contact_box_s2 animation animated fadeInLeft" data-animation="fadeInLeft" data-animation-delay="0.1s" style="animation-delay: 0.1s; opacity: 1;">
                    <div class="contact_title text-center">
                        <i class="fa fa-send fa-2x" aria-hidden="true"></i>
						<h5 class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 1;">Official Bintex telegram</h5>
						<ul class="list_none contact_info mt-margin">
                        <li class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1; padding-right: 15px;"> 
                        	Bintex Chat: <a href="https://t.me/bintexfutures_chat" target="_blank">chatlink</a>
                        </li>
                    </ul>
                    </div>
                </div>  
	</div>
				
			</div>
			</div>
			</div>
	 <div class="top_footer" data-z-index="1" data-parallax="scroll">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-4 col-md-6 col-6 res_md_mt_30 res_sm_mt_20">
                	<h4 class="footer_title border_title animation" data-animation="fadeInUp" data-animation-delay="0.2s">Community</h4>
        
        
       <!-- <style>
        .list_arrow li i{ float: left; }
        </style>-->
        <ul class="footer_link list_arrow">


<?php $san=$this->db->get_where('socialmedia', array('id' => '1' ))->row(); ?>
 <li class="animation" data-animation="fadeInUp" data-animation-delay="0.4s"><a target="_blank" href="<?php echo $san->link; ?>">
     <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>   
   


<?php $san=$this->db->get_where('socialmedia', array('id' => '2' ))->row(); ?>
 <li class="animation" data-animation="fadeInUp" data-animation-delay="0.4s"><a target="_blank" href="<?php echo $san->link; ?>">
     <i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li> 
     
     

<?php $san=$this->db->get_where('socialmedia', array('id' => '3' ))->row(); ?>
 <li class="animation" data-animation="fadeInUp" data-animation-delay="0.4s"><a target="_blank" href="<?php echo $san->link; ?>">
     <i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></li> 
     
     

<?php $san=$this->db->get_where('socialmedia', array('id' => '4' ))->row(); ?>
 <li class="animation" data-animation="fadeInUp" data-animation-delay="0.4s"><a target="_blank" href="<?php echo $san->link; ?>">
     <i class="fa fa-telegram" aria-hidden="true"></i> Telegram</a></li>      
     
  


<?php $san=$this->db->get_where('socialmedia', array('id' => '5' ))->row(); ?>
 <li class="animation" data-animation="fadeInUp" data-animation-delay="0.4s"><a target="_blank" href="<?php echo $san->link; ?>">
     <span><i class="fa fa-youtube-play" aria-hidden="true"></i> Youtube</span></a></li> 
     

		</ul>
                </div>
				
				<div class="col-lg-3 col-md-6 col-6 res_md_mt_30 res_sm_mt_20">
                	<h4 class="footer_title border_title animation" data-animation="fadeInUp" data-animation-delay="0.2s">Legal</h4>

<ul class="footer_link list_arrow">
<?php $data1=$this->db->get_where('privacy', array('id'=>5))->row(); ?>					
    <li class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
        <a href="<?php echo base_url();?>admin/assets/aboutpage/<?php echo $data1->image ?>" target="_blank">Terms Of Use</a></li>
<?php $data1=$this->db->get_where('privacy', array('id'=>6))->row(); ?>
    <li class="animation" data-animation="fadeInUp" data-animation-delay="0.5s">
        <a href="<?php echo base_url();?>admin/assets/aboutpage/<?php echo $data1->image ?>" target="_blank">Privacy Policy</a></li>


</ul>
                </div> 
				<div class="col-lg-5 col-md-12">
                    <div class="footer_logo mb-3 animation" data-animation="fadeInUp" data-animation-delay="0.2s"> 
                        <!--<a href="#home_section" class="page-scroll">
                            <img alt="logo" src="<?php echo base_url();?>assets/images/dashboard_logo.png">
                        </a> --><div class="newsletter_form text-center" style="background: unset; padding: unset;">
                        <h2 class="border_title animation" data-animation="fadeInUp" data-animation-delay="0.2s" hidden style="    color: #68E3FC; font-weight: 600; float: left;">Subscribe to our Mailing List</h2>
                        <!--<p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">We'll send you updates about Bintex</p> -->
                        
    <?php 

   if(isset($_POST['subscribe']))
   {
     extract($_POST);
     $dt=$this->db->get_where('subscribe', array( 'email'=>$email));
     if ($dt->num_rows() > 0) {
        
          $check=$this->db->get_where('subscribe', array( 'refer_by'=>$dt->result()[0]->refer_link));
         $rows=$check->num_rows();
       if($check){
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
        if($_GET['referal_id']){
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
            echo '<script>
         swal({
            title: "Thank you for Your Subscription.!",
            icon: "success",
            button: "Ok",
          });
         </script>';
         
            }else{
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
	font-family: "Lato", sans-serif;
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
	color: #4e4e4e;
	font-size: 28px;
	margin-bottom: 8px;
	font-weight: 400;
}
.intro .text h2 span{
	font-weight: 600;
	color: #ffc0d0;
}
.intro .text p{font-size: 17px;
    line-height: 30px;
    margin-top: 0;
    color: #737373;padding: 0 48px;}
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
	content: "";
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
ul.social{padding: 0;}
ul.social li{
	display: inline-block;
	margin-right: 10px;
}
/*FOOTER*/
.footer1{border-top: 1px solid rgba(0,0,0,.1);color: rgba(0,0,0,.5);}
.footer{color: rgba(0,0,0,.5);}
.footer .heading{
	color: #4e4e4e;
	font-size: 16px;
    margin-top: 12px;
	margin-bottom: 4px;
}
.footer ul{margin: 0;padding: 0;}
.footer ul li{list-style: none;margin-bottom: 10px;}
.footer ul li a{color: rgba(0,0,0,1);}
.thank_you{margin: 28px;text-align:center;}
.thank_you h3{color: #d6b92c;margin-bottom: 0;font-size: 14px;}
.thank_you p{color: #7a7a7a;margin: 0;}
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
      <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;border-top:6px solid #678E2F;">
      	<tr>
          <td valign="top" class="bg_grey" style="padding: 1em 2.5em 0 2.5em;background: #041824;">
          	<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
          		<tr>
          			<td class="logo" style="text-align: center;">
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
                        <img src="https://www.bintexfutures.com/email_temp/email-img2.png" alt="" style="width: 100%;padding-top:26px; max-width: 220px; height: auto; margin: auto; display: block;">
                      </td>
                    </tr>
                  </table>
                </td>
            	</tr>
            </table>
          </td>
	      </tr>
				<tr>
          <td valign="middle" class="intro bg_white" style="padding: 2em 0 2em 0;">
            <table>
            	<tr>
            		<td>
            			<div class="text" style="padding: 0 2.5em; text-align: center;">
            				<h2 style="font-size: 28px;">Thank you for Subscribing!</h2>
            				<p style="font-size: 18px;padding: 0 42px;">We"ll be in touch soon. In the meantime, please tell your friends about us.</p>
            			</div>
            		</td>
            	</tr>
            </table>
          </td>
	      </tr>
      <!-- 1 Column Text + Button : END -->
      </table>
      <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;border-bottom: 8px solid #00426B;">
      	<tr>
          <td valign="middle" class="bg_white footer1">
            <table>
            	<tr style="text-align: left;">
                <td valign="middle" width="100%" style="padding-top: 20px; text-align: center;">
                	<h3 class="heading">Use your personal share Links</h3>
					<ul class="social" style="list-style:none;display:flex;">
					    <li><a href="https://t.me/bintexfutures_chat"><img src="https://www.bintexfutures.com/email_temp/telegram.png" alt="" style="width: 30px; max-width: 600px; height: auto; display: block;"></a></li>
                		<li><a href="https://twitter.com/Bintexfutures"><img src="https://www.bintexfutures.com/email_temp/twitter.png" alt="" style="width: 30px; max-width: 600px; height: auto; display: block;"></a></li>
                		<li><a href="https://www.facebook.com/bintexfutures2019/"><img src="https://www.bintexfutures.com/email_temp/fb.png" alt="" style="width: 30px; max-width: 600px; height: auto; display: block;"></a></li>
                	</ul>
                </td>
              </tr>			  
            </table>
			<p style="text-align:center;margin:0;font-weight:900;color:#333;">[ Or ]</p>
          </td>
        </tr><!-- end: tr -->
        <tr style="text-align: left;">
          <td valign="middle" width="100%" class="bg_white footer" style="text-align: center;">
                	<h3 class="heading">copy and paste this link into your favourite service</h3>
					<a href="https://www.bintexfutures.com?referal_id='.$refer_link.'_'.$dt_1->result()[0]->id.'" style="margin-top: 0;">https://www.bintexfutures.com?referal_id='.$refer_link.'_'.$dt_1->result()[0]->id.'</a>
                </td>
        </tr>
		<tr style="text-align: left;">
			<td valign="middle" width="100%" class="bg_white">
				<div class="thank_you" style="text-align:right;margin-right:28px;">
					<h3 style="margin-bottom: 0;color: #e09c20;font-weight: 300;">Thank you again</h3>
					<p style="margin-top: 0;font-size: 16px;">Team Bintexfutures</p>
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


//redirect('home');

         
     }
   }
   }
	?>
                        
                        <!--<form class="subscribe_form animation" method="POST" data-animation="fadeInUp" data-animation-delay="0.4s" >
                            <input class="input-rounded" type="text" name="email" required placeholder="Enter Email Address"/>
                          <button type="submit" title="Subscribe" class="btn-info" name="subscribe" value="Submit" style="     background-image: linear-gradient(#1990FF, #1CD0FF);"> Subscribe </button>
                        </form>-->
                    </div>
                 </div>                    
         		</div>
      		</div>
      		<div class="col-md-12">
          <p class="copyright"> © 2019 Bintexfutures.com All rights reserved</p>
        </div>
    	</div>
    </div>
   <!--<div class="bottom_footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        </div>
        <div class="col-md-6">
          <ul class="list_none footer_menu">
            <li><a href="#contact">Contact Us</a></li>
          </ul>
        </div><p class="copyright" style="float: right;">Copyright &copy; Bintexfutures 2019 All Rights Reserved.</p>
      </div> 
    </div>
    </div>-->
</footer>
<!-- END FOOTER SECTION --> 

<script src="<?php echo base_url();?>assets/js/jquery-1.12.4.min.js"></script> 
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url();?>assets/owlcarousel/js/owl.carousel.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/magnific-popup.min.js"></script>
<script src="<?php echo base_url();?>assets/js/waypoints.min.js"></script>
<script src="<?php echo base_url();?>assets/js/parallax.js"></script> 
<!--<script src="<?php echo base_url();?>assets/js/jquery.countdown.min.js"></script> -->
<script src="<?php echo base_url();?>assets/js/particles.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.dd.min.js"></script> 
<!--<script src="<?php echo base_url();?>assets/js/jquery.counterup.min.js"></script> -->
<script src="<?php echo base_url();?>assets/js/spop.min.js"></script> 
<!--<script src="<?php echo base_url();?>assets/js/notification.js"></script> -->
<script src="<?php echo base_url();?>assets/js/scripts.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} )
</script>

<script>
  $(document).ready(function(){
 
   $.get("https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd", function(data, status){
         
      $.each(data, function (a, b) {
         
          if(a<4){
          $(".table_m").append('<div class="col-lg-3 col-md-3"><div class="market_price"><h6 class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 1;"><span id="id">'+b.name +'</span> <i class="fa fa-area-chart chart fa-2x"></i></h6><p class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;"><p1> </p1>  <p2 id="current_price">'+b.current_price+'</p2></p><p class="animation animated fadeInUp " data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;"><p3 id="market_cap_change_percentage_24h">'+b.market_cap_change_percentage_24h+'</p3> <p4 id="high_24h">Volume: '+b.market_cap_change_percentage_24h+' USDT</p4></p></div></div>');
            
          }
            $(".display").append("<tr><td>"+b.market_cap_rank+"</td>" +
                    "<td>"+b.name+"</td>"+
                    "<td>" + b.market_cap + "</td>" +
                    "<td>" + b.current_price + "</td>" +
                    "<td>" + b.total_volume + "</td>" +
                    "<td>" + b.circulating_supply + "</td>" +
                    "<td>" + b.ath_change_percentage + "</td>" +"</tr>");
          
            });



  });
    /*$('#myTable').DataTable( {
        "ajax": "https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd",
         “dataSrc”: “users”,
            “headers”: “Content-Type: application/json”,
       
        "columns": [
             { data: "market_cap_rank" },
            { data: "name" },
            { data: "market_cap" },
            { data: "current_price" },
            { data: "total_volume" },
            { data: "circulating_supply" },
            { data: "ath_change_percentage" }
        ]
       
    } );*/
   

    


   
     
   
  });
</script>

</body>
</html>