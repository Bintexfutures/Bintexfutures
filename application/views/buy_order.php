<?php echo $id=$this->uri->segment(3); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
      	<div class="col-md-12 col-lg-12">
      		<div class="card card-primary mb-4 border-color">
			<div class="card-header">
			    <h4 class="mb-0">Buy Tokens</h4>
			</div>
			
		<div class="form-group mbn">
                    

<?php if ($this->session->flashdata('msg')):?>
    <div class="alert alert-success">
        <strong style="color:green;"><?php echo $this->session->flashdata('msg');?></strong>
    </div>
<?php endif;?>






                </div>
		    
                    </ul>
                    <div class="tab-content card-body">
                        <div role="tabpanel" id="tab1" class="tab-pane fade show active">
                        	<div class="row">
                               <div class="col-md-12">
										<div class="copy-button">                                       
											<div class="card-body buy-bg">
                                        <h2 class="text-success text-center"><i class="fa fa-check" aria-hidden="true"></i> You have successfully created an order</h2>
												<div class="row buy-brdr">
													<div class="col-md-5">
														<div class="card-body">
														    <?php $id=$this->uri->segment(3); $re=$this->db->get_where('token_value', array('id'=>$id))->row();   ?>
														Amount:<span>  <?php echo $re->amount; ?> <?php if($re->extype=='1' ){echo 'USDT';} elseif($re->extype=='2') { echo 'Bitcoin'; } elseif($re->extype=='3') { echo 'Etherium'; } elseif($re->extype=='4') { echo 'Ripple'; } elseif($re->extype=='5') { echo 'Tron'; }  elseif($re->extype=='6') { echo 'Lite'; } elseif($re->extype=='1') { echo 'INR'; }?> </span></div>
													</div>
													<div class="col-md-2 text-center">
														<div class="card-body eq">
														=</div>
													</div>
													<div class="col-md-5">
														<div class="card-body">
														Tokens Amount :<span> <?php echo $re->buy_token; ?></span></div>
													</div>
													</div>
												</div>
												<div class="form-group offset-md-4 col-md-4 pt-2 text-center">
													<h6>QR Code</h6>
													<div class="qr-box">
													  <?php  $qr=$this->db->get_where('qr', array('id'=>$re->extype))->row(); ?>
														<img src="<?php echo base_url() ?>admin/assets/qr/<?php echo $qr->img; ?> " alt="" class="img-responsive">
													</div>
												</div>
												<div class="form-group col-md-12">
                                	<div id="Usdt" class="payment_option d-block">
                                        <h6 class="mb-2" style="font-weight: bold;">Transfer to the following wallet</h6>
                                        <div class="copy-button">
                                            <input type="text" name="address" class="form-control copy_input" readonly="" value="<?php echo $qr->code; ?>" placeholder="lojhagtert">
                                            <span class="copy-link btn-default" data-toggle="tooltip" title="" data-original-title="Copy to Clipboard"><i class="fa fa-clipboard" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                    <div id="Bitcoin" class="payment_option d-none">
                                        <h6 class="mb-2">Payment Address</h6>
                                        <div class="copy-button">
                                            <input type="text" name="address" class="form-control copy_input" readonly="" value="lojhagtert" placeholder="lojhagtert">
                                            <span class="copy-link btn-default" data-toggle="tooltip" title="" data-original-title="Copy to Clipboard">Copy</span>
                                        </div>
                                    </div>
                                    <div id="Etherium" class="payment_option d-none">
                                        <h6 class="mb-2">Payment Address</h6>
                                        <div class="copy-button">
                                            <input type="text" name="address" class="form-control copy_input" readonly="" value="lojhagtert" placeholder="lojhagtert">
                                            <span class="copy-link btn-default" data-toggle="tooltip" title="" data-original-title="Copy to Clipboard">Copy</span>
                                        </div>
                                    </div>
                                    <div id="Ripple" class="payment_option d-none">
                                        <h6 class="mb-2">Payment Address</h6>
                                        <div class="copy-button">
                                            <input type="text" name="address" class="form-control copy_input" readonly="" value="lojhagtert" placeholder="lojhagtert">
                                            <span class="copy-link btn-default" data-toggle="tooltip" title="" data-original-title="Copy to Clipboard"> Copy </span>
                                        </div>
                                    </div>
                                    <div id="Tron" class="payment_option d-none">
                                       <h6 class="mb-2">Payment Address</h6>
                                        <div class="copy-button">
                                            <input type="text" name="address" class="form-control copy_input" readonly="" value="lojhagtert" placeholder="lojhagtert">
                                            <span class="copy-link btn-default" data-toggle="tooltip" title="" data-original-title="Copy to Clipboard"> Copy</span>
                                        </div>
                                    </div>  
									<div id="Litecoin" class="payment_option d-none">
                                       <h6 class="mb-2">Payment Address</h6>
                                        <div class="copy-button">
                                            <input type="text" name="address" class="form-control copy_input" readonly="" value="lojhagtert" placeholder="lojhagtert">
                                            <span class="copy-link btn-default" data-toggle="tooltip" title="" data-original-title="Copy to Clipboard"> Copy</span>
                                        </div>
                                    </div>
									<div id="Inr" class="payment_option d-none">
                                       <h6 class="mb-2">Payment Address</h6>
                                        <div class="copy-button">
                                            <input type="text" name="address" class="form-control copy_input" readonly="" value="lojhagtert" placeholder="lojhagtert">
                                            <span class="copy-link btn-default" data-toggle="tooltip" title="" data-original-title="Copy to Clipboard"> Copy</span>
                                        </div>
                                    </div>									
                                </div>
											</div>
                                        </div>
                                    </div>
									
                            </div>
							<div class="col-md-12 alert buy-alert alert-dismissible fade show mb-4">
								<i class="fa fa-exclamation" aria-hidden="true"></i> To complete your purchase send the selected amount of BTC to the wallet address shown above
							</div>
							<div class="col-md-12">
								<div class="text-center">
								    <form class="row" method="POST" enctype="multipart/form-data">
    <div class="col-md-5"><input type="text" class="form-control" placeholder="Enter Transaction Id" name="category" required ></div>
    <div class="col-md-5"><input type="file" class="form-control" placeholder="" name="image" required ></div>
    <div class="col-md-2"> <input type="submit" class="btn btn-success mb-4" name="submit" value="Confirm"></div>
</form>
								    
								    							   
								      
								<a href="<?php echo base_url() ?>buy" class="btn btn-default mt-4 mb-4 mar-rt">Place New Order</a>
								<a href="<?php echo base_url() ?>buyorder/ordersclaims" class="btn btn-default mt-4 mb-4">View My Orders</a>
								
								
								
								</div>
							</div>
						 </div>
                        
                    
                </div>
            </div>
            
        </div>
		</div>
      
    </div>
   

