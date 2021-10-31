
<!-- START SECTION BINTEX -->
<section class="bg-color small_pt small_pb">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 col-md-12 col-sm-12">				
	
<?php $ress=$this->db->get_where('aboutus', array('id' => '1' ))->row(); ?>

			<div class="title_default_light text-center title_border">
                <h4 class="animation animated fadeInUp pt26 clr-head small_pt" data-animation="fadeInUp" data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 1;"><?php echo $ress->heading; ?></h4>
                <p class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1; text-align: justify;"><?php echo $ress->content; ?></p>
              </div>              
            </div>
        </div>
    </div>
    <div class="container">
    	<div class="row">
    	    <div class="bntx-icon text-center">
    	        <img src="assets/images/btnx-icon.png" alt="">
    	    </div>
            

   <?php $down=$this->db->get_where('aboutus', array('id' => '3' ))->row(); ?>

        </div>
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <div class="bntx-txt">
                    <p class="text-white">An ERC-20 Ethereum Token will be used as the base currency on the BINTEXFUTURES
Exchange.All traders on the exchange must own BNTX to participate in our commission,
non-custodial markets. Demand for BNTX from traders is an integral part of the revenue model
that allows the exchange to operate sustainably with low transaction fees on all trades.</p>
<p class="text-white">Platform will be the major source of revenue for the company. Exchange will have several service
fees: Exchange Trading Fees Coin/Token Listing Fees BINTEXFUTURES will actively participate into
innovative blockchain projects and list new tokens, crypto-coins and stocks on the exchange.
Which will bring both liquidity and users associated to the project.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row-fluid white-paper-bg">
        <div class="container">
            <div class="offset-md-2 col-md-8 col-12 wp-inner">
                <div class="wp-txt">
                     <h2>White Paper is out now</h2>
                </div>
                <div class="wp-img">
                    <img src="assets/images/wp-icon.png" alt=""/>
                    <a href="<?php echo base_url(); ?>Bintexfutures white paper V 1.0.pdf" target="_blank" class="btn btn-default btn-sm page-scroll btn-radius nav-link text-white">White paper </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BINTEX -->  



<link href="<?php echo base_url() ?>css/timeTo.css" type="text/css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="node_modules/jquery/dist/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url() ?>css/jquery.time-to.js"></script>
    