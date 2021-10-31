
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
          
          
			<div class="col-md-12 col-lg-12">

			<div class="row">
				  <div class="col-md-4 col-xs-4"><a href="<?php echo base_url() ?>kyc" type="button" class="btn btn-success btn-circle">Personal Info</a></div>
				  <div class="col-md-4 col-xs-4"><a href="<?php echo base_url() ?>kyc/kycmain" type="button" class="btn btn-success btn-circle">ID Info</a></div>
				  <div class="col-md-4 col-xs-4"><a href="<?php echo base_url() ?>kyc/passed" type="button" class="btn btn-success btn-circle">Passed</a></div>
			</div>
        
        <div>           
		      
            <div class="row">
                
                 <?php $re=$this->session->userdata('userlogin'); $dt=$this->db->get_where('kyc',array('customer_id'=>$re->id,))->row(); ?>
							<?php if(($dt->p1 ) AND ($dt->p2) AND ($dt->i1 ) AND ($dt->i2) AND ($dt->d1 ) AND ($dt->d2) ){ ?>	 
                       
                       <div class="col-md-12 col-sm-12">
						<div class="card card-primary mb-4">
							<div class="card-body">
								 <div class="panel-body">              
									<button class="btn btn-default pull-right" type="submit" name="submit2">Finish!</button>
								</div>
							</div>
						</div>
					</div>
                        
                        <?php } else { ?>
                        
                        <div class="col-md-12 col-sm-12">
						<div class="card card-primary mb-4">
							<div class="card-body">
								 <div class="panel-body">              
									<button class="btn btn-default pull-right" type="submit" name="submit2">Your KYC Not Completed</button>
								</div>
							</div>
						</div>
					</div>
					
                        
                        <?php } ?>
                        
                        
									
			</div>
      
       
</div>
			</div>    		
      	</div>
      </div>
    </div>
	
    </div>
    