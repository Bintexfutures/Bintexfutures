  <div class="content-wrapper" >

    <div class="container-fluid">
      
      <div class="row">
      	<div class="col-md-12">
      		<div class="card mb-4  border-color">
			<div class="card-header">
                <h4 class="mb-0">Buy Tokens</h4>
            </div>
			
     
                    <div class="tab-content card-body">
                        <div role="tabpanel" id="tab1" class="tab-pane fade show active">
                        	
                            <form action="" method="post">
                              <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="col-form-label">Cryptocurrency</label>
                                    <select class="custom_select form-control" onchange="test1(this.value)" name="extype" required>
                                        <option value="">Select Cryptocurrency</option>
                                        <option value="1">USDT</option>
                                        <option value="2">Bitcoin</option>
                                        <option value="3">Etherium</option>
										<option value="4">Ripple</option>
                                        <option value="5">Tron</option>
                                        <option value="6">Lite Coin</option>
                                        <option value="7">INR</option>
                                    </select>
                                </div>
                                <input type="hidden" class="form-control" placeholder="Amount"  id="token" value="0" onchange="cal();" required>
                                <div class="form-group col-md-6">
                                    <label class="col-form-label">Amount</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Amount" id="amount" onkeypress="cal();" value="" name="camount">
                                    </div>
                                </div>
								<div class="form-group col-md-6">
                                    <label class="col-form-label">Bintex Tokens</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" onchange="cal1();" name="buy_token"  id="bit_tokens" required>
                                    </div>
                                </div>
								<div class="form-group col-md-6">
                                    <label class="col-form-label">Bonus Tokens</label>
                                    <div class="input-group wm-lg">
                                        <input type="hidden" class="form-control" placeholder="" id="bonus_token" value="1">
                                        <input type="text" class="form-control" placeholder="" name="percent_token" id="bonus_tk" readonly>
                                        
                                        
                                        <input type="hidden" class="form-control" placeholder="" name="referral_token" id="bonus_tk1" readonly>
                                        
                                    </div>
                                </div>
								<div class="form-group col-md-6 offset-md-3">
                                    <label class="col-form-label">Total Tokens</label>
                                    <div class="input-group wm-lg">
                                        <input type="text" class="form-control"   placeholder="" name="totalamount" id="total_token" onkeypress="cal2();">
                                    </div>
                                </div>
							
									
                            </div>
                            <button type="submit" class="btn btn-default mt-4 mb-4 pull-right" name="submit" value="Proceed">Proceed<i class="fa fa-long-arrow-right" aria-hidden="true" ></i></button>
        
                        </div>
                      </form>    
                    </div>
            </div>
          </div>
      	</div>
		</div>
       
    </div>
