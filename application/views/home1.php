
<!-- START SECTION BANNER -->
<section class="bg-color small_pt small_pb">
    <div class="row-fluid">
        <div class="container">
        <div class="row align-items-center">
<?php $san=$this->db->get_where('thenumber', array('id' => '1' ))->row(); ?>

            <!--<div class="col-xl-6 col-lg-6 col-sm-12 order-lg-first">
                <div class="banner_text text_md_center">
                    <h1 class="animation" data-animation="fadeInUp" data-animation-delay="1.1s"><?php echo $san->name; ?></h1>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="1.3s"><?php echo $san->designation; ?> </p>
                    <div class="btn_group animation" data-animation="fadeInUp" data-animation-delay="1.4s"> 
                        <a href="https://bintexfutures.com/admin/assets/aboutpage/careers.docx" class="btn btn-default page-scroll btn-radius nav-link btn-sm">White paper </a> 
                        <a href="<?php echo base_url() ?>login" target="_blank" class="btn btn-default btn-radius">Buy Token Now</a> 
                    </div>
                </div>
            </div>--->
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                <div class="mail_form text-center" style="margin-bottom: 30px;">
                        <h5 class="border_title animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.2s">Subscribe to our Mailing List</h5>
                        <form class="subscribe_form animation" method="POST" data-animation="fadeInUp" data-animation-delay="0.4s">
                           <div class="form-group">
                                <input class="input-rounded" type="text" required="" name="user" placeholder="Your Name">
                           </div>
                           <div class="form-group">
                            <input class="input-rounded" type="email" name="email" required="" placeholder="Enter Email Address">   
                           </div>
                            	<button type="submit" title="Subscribe" class="btn-info" name="subscribe" value="Submit"> Subscribe </button>
						</form>
					
                    </div>
					<div class="btn_group animation" data-animation="fadeInUp" data-animation-delay="1.4s" style="text-align: center;"> 
                        <a href="https://bintexfutures.com/admin/assets/aboutpage/careers.docx" class="btn btn-default btn-sm page-scroll btn-radius nav-link paper-btn">White paper </a> 
                        <a href="https://www.bintexfutures.com/login" target="_blank" class="btn btn-default btn-radius token-btn">Buy Token Now</a> 
                    </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 order-first">
                <div class="banner_inner res_md_mb_50 res_xs_mb_30">
                    <div class="tk_countdown text-center animation" data-animation="fadeIn" data-animation-delay="1.1s">
                        <div class="banner_text tk_counter_inner">
                            

                           <?php $i=1; $a=$this->db->get_where('logo')->row();  ?>  
<script>
// Set the date we're counting down to
// var countDownDate = new Date("Jan 23, 2020 00:59:59").getTime();


// // Update the count down every 1 second
// var x = setInterval(function() {

//   // Get today's date and time
//   var now = new Date().getTime();
    
//   // Find the distance between now and the count down date
//   var distance = countDownDate - now;
    
//   // Time calculations for days, hours, minutes and seconds
//   var days = Math.floor(distance / (1000 * 60 * 60 * 24));
//   var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//   var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
//   var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
//   // Output the result in an element with id="demo"
//   document.getElementById("demo").innerHTML = days + " : " + hours + " : "
//   + minutes + " : " + seconds + "";
//   document.getElementById("demo2").innerHTML = days + " : " + hours + " : "
//   + minutes + " : " + seconds + "";
    
//   // If the count down is over, write some text 
//   if (distance < 0) {
//     clearInterval(x);
//     document.getElementById("demo").innerHTML = "EXPIRED";
//   }
// }, 1000);
</script>

<div class="tk_countdown_time border-0 animation animated fadeInUp">
 <div class="text-center fgju count-no" id="demo"> </div>
    <div> 
    <span style="font-size: 12px; font-weight: 600; padding: 10px 0px 10px 10px; color: #fff;">DAYS</span>
    <span style="font-size: 12px; font-weight: 600; padding: 10px 10px 10px 30px; color: #fff;">HOURS</span>
    <span style="font-size: 12px; font-weight: 600; padding: 10px; color: #fff;">MINUTES</span>
    <span style="font-size: 12px; font-weight: 600; padding: 10px; color: #fff;">SECONDS</span>
    </div>
 </div>


                            <div class="progress animation" data-animation="fadeInUp" data-animation-delay="1.3s">
                            <div class="progress-bar progress-bar-striped gradient" role="progressbar" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100" style="width:16%;color:#fff;"> 6% </div>
                                <span class="progress_label bg-white" style="left: 25%"> <strong> <?php echo $san->number1; ?> </strong></span>
                                <span class="progress_label bg-white" style="left: 75%"> <strong> <?php echo $san->number2; ?> </strong></span>
                                <span class="progress_min_val">Sale Raised</span>
                                <span class="progress_max_val">Soft-caps</span>
                            </div>
                        	<!-- <span class="tk_ending_txt animation" data-animation="fadeInUp" data-animation-delay="1.4s"><?php echo $san->pinterest; ?></span> -->
                            <!-- <ul class="icon_list list_none d-flex justify-content-center">
                            	<li class="animation" data-animation="fadeInUp" data-animation-delay="1.5s"><i class="fa fa-cc-visa"></i></li>
                                <li class="animation" data-animation="fadeInUp" data-animation-delay="1.6s"><i class="fa fa-cc-mastercard"></i></li>
                                <li class="animation" data-animation="fadeInUp" data-animation-delay="1.7s"><i class="fa fa-bitcoin"></i></li>
                                <li class="animation" data-animation="fadeInUp" data-animation-delay="1.8s"><i class="fa fa-rupee"></i></li>
                            </ul> -->
                            <ul class="icon_list list_none d-flex justify-content-center">
                            	<li class="animation" data-animation="fadeInUp" data-animation-delay="1.5s"><img src="assets/images/payment_icons.png" alt=""></li>
                            </ul>
                        </div>
                	</div>
                </div>
          	</div>
            <div class="col-xl-1">
            	<ul class="list_none social_icon banner_vr_social text-center res_md_mt_20">
                	<li class="animation zoom" data-animation="fadeInRight" data-animation-delay="0.3s"><a target="_blank" href="<?php echo $san->san2; ?>" class="send" style="background-color:#00aced; border-radius: 34px 34px 34px 34px;"><i class=" fa fa-send fa-lg" style="color:#fff;"></i></a></li>
                	<li class="animation zoom" data-animation="fadeInRight" data-animation-delay="0.5s"><a target="_blank" href="<?php echo $san->san1; ?>" class="twt" style="background-color:#00aced; border-radius: 34px 34px 34px 34px;"><i class=" fa fa-twitter fa-lg" style="color:#fff;"></i></a></li>
					<li class="animation zoom" data-animation="fadeInRight" data-animation-delay="0.3s"><a target="_blank" href="<?php echo $san->san3; ?>" class="gplus" style="background-color:#ff0000; border-radius: 34px 34px 34px 34px;"><i class="fa fa-youtube-play fa-lg" style="color:#fff;"></i></a></li>

                </ul>
            </div>
        </div>
        </div>
        <!-- Carousel items start here-->
        
        <!-- Carousel items end here -->
        <div class="row-fluid">
            <div class="row align-items-center market-bg">
                <div class="container">
            <div class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <!--<div class="row">-->
                        
                           <?php  if(!empty($markets_cap->data)){ foreach($markets_cap->data as $key=>$result){ ?>
                               <div class="col-lg-3 col-md-3">
                    	        <div class="market_price">
                                <h6 class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 1;"><?php echo  $result->name; ?> <i class="fa fa-area-chart chart fa-2x"></i></h6>
                                <p class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;"><p1> </p1>  <p2><?php echo $result->quote->USD->price; ?></p2> </p>
                                <p class="animation animated fadeInUp " data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;"><p3><?php echo $result->quote->USD->percent_change_24h; ?></p3> <p4>Volume: <?php echo  $result->quote->USD->volume_24h; ?> USDT</p4></p>
                                </div>
                            </div>
                            <?php if($key==3){break;}} }else{?> 
                            <div  class="row table">
                                
                            </div>
                             
                            <?php } ?>
                       <!-- </div>-->
                    </div>
                    <div class="carousel-item">
                       <!-- <div class="row">-->
                           <?php if(!empty($markets_cap->data)){  foreach($markets_cap->data as $key=>$result){ ?>
                               <div class="col-lg-3 col-md-3">
                    	        <div class="market_price">
                                <h6 class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 1;"><?php echo  $result->name; ?> <i class="fa fa-area-chart chart fa-2x"></i></h6>
                                <p class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;"><p1> </p1>  <p2><?php echo $result->quote->USD->price; ?></p2> </p>
                                <p class="animation animated fadeInUp " data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;"><p3><?php echo $result->quote->USD->percent_change_24h; ?></p3> <p4>Volume: <?php echo  $result->quote->USD->volume_24h; ?> USDT</p4></p>
                                </div>
                            </div>
                             <?php if($key==3){break;}} }else{?> 
                            <div  class="row table">
                                
                            </div>
                             
                            <?php } ?>
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
                <!-- <?php foreach($markets_cap->data as $key=>$result){ ?>
                       <div class="col-lg-3 col-md-3">
            	        <div class="market_price">
                        <h6 class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 1;"><?php echo  $result->name; ?> <i class="fa fa-area-chart chart fa-2x"></i></h6>
                        <p class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;"><p1> </p1>  <p2><?php echo $result->quote->USD->price; ?></p2> </p>
                        <p class="animation animated fadeInUp " data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;"><p3><?php echo $result->quote->USD->percent_change_24h; ?></p3> <p4>Volume: <?php echo  $result->quote->USD->volume_24h; ?> USDT</p4></p>
                        </div>
                    </div>
                <?php if($key==3){break;}} ?> -->
                
                 <!--<div class="col-lg-3 col-md-4 col-6">
            	<div class="market_price">
                      <h6 class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 1;">BNB / USDT <i class="fa fa-area-chart chart fa-3x"></i></h6>
                      <p class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;"><p1>24.2652 </p1>  <p2>$24.27</p2> </p>
                      <p class="animation animated fadeInUp " data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;"><p3>-7.15%</p3> <p4>Volume: 89,009,934,72 USDT</p4></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
            	<div class="market_price">
                      <h6 class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 1;">BNB / USDT <i class="fa fa-area-chart chart fa-3x"></i></h6>
                      <p class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;"><p1>24.2652 </p1>  <p2>$24.27</p2> </p>
                      <p class="animation animated fadeInUp " data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;"><p3>-7.15%</p3> <p4>Volume: 89,009,934,72 USDT</p4></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
            	<div class="market_price">
                      <h6 class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 1;">BNB / USDT <i class="fa fa-area-chart chart fa-3x"></i></h6>
                      <p class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;"><p1>24.2652 </p1>  <p2>$24.27</p2> </p>
                      <p class="animation animated fadeInUp " data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;"><p3>-7.15%</p3> <p4>Volume: 89,009,934,72 USDT</p4></p>
                </div>
            </div>-->
            </div>
	                
	            
             
           
            </div>
        <!--<div class="row">
        	<div class="col-12">
            	<div class="divider large_divider"></div>
            </div>
        </div>-->
        <div class="container">
        <div class="row align-items-center justify-content-center">
        	<div class="col-lg-3 col-md-6 col-sm-12">
            	<h5 class="rate_title text_md_center animation" data-animation="fadeInUp" data-animation-delay="0.2s">Latest Updates :</h5>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
            	<div class="review_box animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                	<div class="review_icon">
                    	<i class="fa fa-bar-chart"></i>
                    </div>
                    <div class="review_info">
                    	<h6><?php echo $san->facebook; ?></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
            	<div class="review_box animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                	<div class="review_icon">
                    	<i class="fa fa-users"></i>
                    </div>
                    <div class="review_info">
                    	<h6><?php echo $san->twitter; ?></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
            	<div class="review_box animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                	<div class="review_icon">
                    	<i class="fa fa-snowflake-o"></i>
                    </div>
                    <div class="review_info">
                    	<h6><?php echo $san->linkedin; ?></h6>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER -->



    <link href="<?php echo base_url() ?>css/timeTo.css" type="text/css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="node_modules/jquery/dist/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url() ?>css/jquery.time-to.js"></script>
    <script>
        // $('#clock-w-step-cb').timeTo({
        //   step: function() {
        //       console.log('Executing every 3 ticks');
        //   },
        //   stepCount: 3
        // });

        // var date = getRelativeDate(2);
        // document.getElementById('date-str').innerHTML = date.toISOString();        /**
        //  * Set timer countdown to specyfied date
        //  */
        // $('#countdown-2').timeTo(date);
        
        // var time = '<?php echo $a->eventdate ; ?>';
        // document.getElementById('date2-str').innerHTML = time;
        // $('#countdown-3').timeTo({
        //     time: time,
        //     displayDays: 2,
        //     theme: "black",
        //     displayCaptions: true,
        //     fontSize: 38,
        //     captionSize: 14,
        //     lang: 'en'
        // });
        // $('#clock-1').timeTo();
        // function getRelativeDate(days, hours, minutes) {
        //     var d = new Date(Date.now() + 60000 /* milisec */ * 60 /* minutes */ * 24 /* hours */ * days /* days */);
        //     d.setHours(hours || 0);
        //     d.setMinutes(minutes || 0);
        //     d.setSeconds(0);
        //     return d;
        // }
        
        function makeTimer() {

	//		var endTime = new Date("29 April 2018 9:56:00 GMT+01:00");	
		var endTime = new Date("27 March 2020 9:56:00 GMT+01:00");			
			endTime = (Date.parse(endTime) / 1000);

			var now = new Date();
			now = (Date.parse(now) / 1000);

			var timeLeft = endTime - now;

			var days = Math.floor(timeLeft / 86400); 
			var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
			var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
			var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
  
			if (hours < "10") { hours = "0" + hours; }
			if (minutes < "10") { minutes = "0" + minutes; }
			if (seconds < "10") { seconds = "0" + seconds; }

// 			$("#days").html(days + "<span>Days</span>");
// 			$("#hours").html(hours + "<span>Hours</span>");
// 			$("#minutes").html(minutes + "<span>Minutes</span>");
// 			$("#seconds").html(seconds + "<span>Seconds</span>");		
            $(".fgju").html(days +" : "+ hours+" : "+ minutes +" : "+ seconds);	
	}

	setInterval(function() { makeTimer(); }, 1000);
	
    </script>