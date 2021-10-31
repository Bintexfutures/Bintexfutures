Token Sale Proceeds<!-- START SECTION TOKEN SALE -->
<section class="bg-color small_pb">
	<div class="row-fluid token_bg1"> 
	    <div class="container">
	        <?php $i=1; $a=$this->db->get_where('logo')->row();  ?>  


<?php $sans=$this->db->get_where('thenumber', array('id' => '2' ))->row(); ?>
		
        <div class="row align-items-center">
        	
<?php $san=$this->db->get_where('thenumber', array('id' => '1' ))->row(); ?>
            <div class="col-lg-5">
            	<div class="token_sale res_md_mb_40 res_md_mt_40 res_sm_mb_30 res_sm_mt_30">
                    <div class="tk_countdown text-center animation token_countdown_bg" data-animation="fadeIn" data-animation-delay="1s">
                        <div class="tk_counter_inner">
                          <h4>Public / IEO Sale Starts In :</h4>
                          <div class="tk_countdown_time border-0 animation animated fadeInUp">
 <div class="text-center fgju count-no" id="demo"> </div>
    <div> 
    <span class="dys">DAYS</span>
    <span class="hrs">HOURS</span>
    <span class="mnts">MINUTES</span>
    <span class="sec">SECONDS</span>
    </div>
 </div>

                        </div>
                	</div>
                </div>  
            </div>
            <div class="col-lg-7">
            	 <div class="row token_right">
                                <div class="col-md-4 col-4">
                                    <h4 class="l-head">Price :</h4>
                                </div>
                                <div class="col-md-8 col-8">
                                    <h5 class="r-head">1 BNTX = 0.0125 USD</h5>
                                </div>
                                <div class="col-md-4 col-4">
                                    <h4 class="l-head">Accepted currency :</h4>
                                </div>
                                <div class="col-md-8 col-8">
                                    <h5 class="r-head">BTC, ETH, USDT, XLM</h5>
                                </div>
                                <div class="col-md-4 col-4">
                                    <h4 class="l-head">Token Sale End Time :</h4>
                                </div>
                                <div class="col-md-8 col-8">
                                    <h5 class="r-head">When Hard Cap is reached / July 20<sup>th</sup></h5>
                                </div>
                            </div>
            </div>
        </div>
	    </div>
    </div>
    <div class="container small_pt lg_pb_20">
        <div class="row align-items-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
		    	<div class="title_default_light text-center title_border">
                    <h4 class="animation animated fadeInUp pt26 clr-head small_pt" data-animation="fadeInUp" data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 1;">BNTX Token Sale and Economics</h4>
                </div>              
            </div>
        </div>
    </div>
    <div class="container">
    	<div class="row">
    	    <div class="offset-md-2 col-md-8">
    	        <table class="table table-striped token-table">
                  <tbody>
                    <tr class="table-secondary">
                      <td>Token Sale Start Time</td>
                      <td>June 26<sup>th</sup></td>
                    </tr>
                    <tr class="table-light">
                      <td>Token Sale End Time</td>
                      <td>When Hard Cap is reached / July 20<sup>th</sup></td>
                    </tr>
                    <tr class="table-secondary">
                      <td>Hard Cap</td>
                      <td>62,50,000 USD</td>
                    </tr>
                    <tr class="table-light">
                      <td>Total Token Supply</td>
                      <td>2,000,000,000</td>
                    </tr>
                    <!--<tr class="table-secondary">
                      <td>Initial Circulating Supply</td>
                      <td>25% of Total Token Supply</td>
                    </tr>-->
                    <tr class="table-secondary">
                      <td>Public Sale Token Price</td>
                      <td>1 BNTX = 0.0125 USD</td>
                    </tr>
                    <tr class="table-light">
                      <td>Launchpad Allocation</td>
                      <td>500,000,000 BNTX(25% of Total Token Supply)</td>
                    </tr>
                    <tr class="table-secondary">
                      <td>Public Sale Vesting Period</td>
                      <td>No vesting period / No Lockup</td>
                    </tr>
                    <tr class="table-light">
                      <td>Individual Cap</td>
                      <td>50000 USD</td>
                    </tr>
                    <tr class="table-secondary">
                      <td>Individual Minimum Purchase Amount</td>
                      <td>30 USD</td>
                    </tr>
                    <tr class="table-light">
                      <td>Private Sale Token Price</td>
                      <td>1 BNTX = 0.005 USD</td>
                    </tr>
                    <tr class="table-secondary">
                      <td>Private Sale Allocation</td>
                      <td>1% of Total Token Supply</td>
                    </tr>
                    <tr class="table-light">
                      <td>Private Sale Vesting Period</td>
                      <td>Vesting over 6 months</td>
                    </tr>
                    <tr class="table-light">
                      <td>Token Type</td>
                      <td>ERC - 20</td>
                    </tr>
                    <tr class="table-secondary">
                      <td>Token Distribution</td>
                      <td>Within 15 days after the token sale ends</td>
                    </tr>
                  </tbody>
                </table>
    	    </div>
        </div>
    </div>
    <div class="container small_pt lg_pb_20">
        <div class="row align-items-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
		    	<div class="title_default_light text-center title_border">
                    <h4 class="animation animated fadeInUp pt26 clr-head small_pt" data-animation="fadeInUp" data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 1;">Token Allocation</h4>
                </div>              
            </div>
        </div>
    </div>
    <div class="row-fluid white-paper-bg1">
        <div class="offset-md-2 col-md-8 wp-inner">
                <img src="assets/images/token-graph.svg" alt="">
            </div>
    </div>
</section>
<!-- END SECTION TOKEN SALE --> 


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
		var endTime = new Date("26 June 2020 03:30:00 GMT+01:00");			
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