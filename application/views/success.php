
	<div class="container" style="padding-top: 150px; padding-bottom: 60px;">
        <div class="col-md-6 col-sm-6 offset-md-3">
            	<div style='background-color:#eeefef; padding:15px 20px;'>
            	     <div class='col-md-12'>
                        <div style='margin:0 auto; text-align: center!important;'>
                            <a href="https://bintexfutures.com">
                        <img style='float: right;' src='<?php echo base_url();?>assets/images/dashboard_logo.png' alt='logo' height='32' width='100'/></a>
                        <h5 style='margin-left:70px;'>Email Verification</h5>
                        </div>
                    </div>
                    <div class='col-md-6 col-sm-6 offset-md-4'>
                        <i class='fa fa-envelope fa-5x' aria-hidden='true' style='color:#f7e590;'></i>
                    </div>
                    <div class='col-md-12 col-lg-12'>
                        <div>
                         <i class='fa fa-check-circle fa-3x' aria-hidden='true' style='float: left; background-color: #cce7d4; color: #6d9648;'></i>
                         <p style='font-size: 12px; background-color: #ffffff; font-weight: bold;'>We have sent a confirmation email to your registered Email Address.
                            (<?php $re=$this->db->limit('1')->order_by('id', "desc")->get('users')->row(); ?> <?php echo $re->email; ?>) Please confirm Email to continue.</p>
                        </div>
                    </div>
              	</div>
		</div>
    </div>
