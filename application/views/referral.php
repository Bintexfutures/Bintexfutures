

  <div class="content-wrapper">
    <div class="container-fluid">
      <!--<div class="row page_title">
      	<div class="col-sm-6">
        	<h4>Referral Program</h4>
        </div>
        </div>-->
      
      <div class="row">
      	<div class="col-sm-12 col-md-12">
			<div class="col-md-12 col-sm-12">
				<div class="card mb-4 border-color">
					<div class="card-header"><i class="fa fa-link" aria-hidden="true"></i> Referral Program</div>
					<div class="col-md-12 mt-4">
						<div class="order-bl">
							<ol>
								<li>You can share the referral link with your friends.</li>
								<li>Once a new customer register through your share link, you can get a new referral person.</li>
								<li>Once the investor you have invited finishes a contribution, you can get a fixed percent bonus of the order.</li>
								<li>You can claim the tokens after the referral end.</li>
							</ol>
						</div>
						<div class="form-group">
							
							<div id="BTC" class="payment_option d-block">
										<div class="row">
										<div class="col-md-5">
											<h6 class="mb-2">My Referral ID</h6>
                                        <div class="copy-button">

<?php $re=$this->session->userdata('userlogin'); 
	$array = array('referral' => $re->id);
    $this->db->where($array);
    $query = $this->db->get('users');	
    $ref=$query->num_rows();
    
    $querys = $this->db->get_where('token_value', array('referral' => $re->id))->result();
    foreach ($querys as $k){
        @$amount+=$k->referral_token;
    
    }

    ?>

<input type="text" name="address" class="form-control copy_input" readonly="" value="<?php echo $re->id; ?>">
<span class="copy-link btn-default" data-toggle="tooltip" title="Copy to Clipboard"><i class="fa fa-clipboard" aria-hidden="true"></i></span>
                                        </div>

<div id="BTC" class="payment_option d-block">
<h6 class="mb-2 mt-4">Referral Link</h6>
<div class="copy-button">
<input type="text" name="address" class="form-control copy_input" readonly="" value="<?php echo base_url() ?>register/referral/<?php echo $re->id; ?>" >
<span class="copy-link btn-default" data-toggle="tooltip" title="Copy to Clipboard">
	<i class="fa fa-clipboard" aria-hidden="true"></i></span>



                                        </div>
                                    </div>
									<div class="order-bl ref-soc-ico mt-4">
										<ul>
											<li>Share: </li>
											<li><a target="_balnk" href="https://www.facebook.com/login/device-based/regular/login/?login_attempt=1&lwv=110"><i class="r-fb fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a target="_balnk" href="https://twitter.com/login?lang=en"><i class="r-tw fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a target="_balnk" href="https://web.whatsapp.com/"><i class="r-wp fa fa-whatsapp" aria-hidden="true"></i></a></li>		
										</ul>
									</div>
										</div>
<div class="col-md-7 mt-4 copy-button">
<div class="row">
<div class="col-md-4 ">
	<div class="card-body bg-light">
	Referral Friends<span class="text-success"> <?php echo $ref; ?></span></div>
	</div>
													<div class="col-md-8">
														<div class="card-body bg-light">
														Estimated Commission Value<span class="text-success"> 
															
						<?php if(@$amount){ ?>
                  <?php echo @$amount ?>
                  <?php } else { ?>
                <b>0</b>                  <?php } ?>
                  </span></div>
													</div>
													</div>
										</div>
										</div>
                                        
										 </div>
									
						</div>
											
					</div>
				</div>
				<div class="card mb-4 border-color">
				<div class="card-header">Referral Friends</div>
					<div class="col-md-12 mt-4 mb-4">
					
						<div class="table-responsive text-center">
							<table class="table table-bordered table-hover mb-0 table_s1 " id="" width="100%" cellspacing="0">
							  <thead>
								<tr>
								  <th>User Name</th>
								  <th>Email</th>
								  <th>Date</th>
								  
								</tr>
							  </thead>
							  <tbody>

<?php
$san=$this->session->userdata('userlogin');
 $i=1;
$data1=$this->db->order_by('id', 'desc')->get_where('users', array('referral' => $san->id ))->result(); ?>
<?php foreach($data1 as $h){;
?>
<tr>
	<td><?php echo $h->username; ?></td>
	<td><?php echo $h->email; ?></td>
	<td class="text-success"><strong><?php echo $h->crdate; ?></strong></td>
</tr>

<?php }?>

							</table>
						</div>
						</div>
					</div>
					<div class="card mb-4 border-color">
					<div class="card-header">Commission History</div>
						<div class="col-md-12 mt-4 mb-4">
						<div class="table-responsive text-center">
							<table class="table table-bordered table-hover mb-0 table_s1 " id="" width="100%" cellspacing="0">
							  <thead>
								<tr>
								  <th>Commission</th>
								  <th>Email</th>
								  <th>Date</th>
								</tr>
							  </thead>
							  <tbody>
							      
<?php $data1=$this->db->order_by('id', 'desc')->get_where('token_value',  array('referral' => $san->id ))->result(); ?>
    <?php $i=1;?>
    <?php foreach($data1 as $h){ ?>
    <?php if($h->referral){ ?>
                  	<tr>
								  <td><?php echo $h->referral_token ?></td>
								  <td><?php $datass=$this->db->get_where('users', array('id' => $h->customer_id))->row(); echo $datass->email; ?></td>
								  <td class="text-success"><strong><?php echo $h->crdate ?></strong></td>
								</tr>
                  <?php } ?>
                  <?php $i++;?>
                  <?php }?>
                  
							
							</table>
						</div>
						</div>
					</div>
				</div>
			</div>     		
      	</div>

      </div>
    </div>

    </div>
    