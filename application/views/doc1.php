
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
          
          
			<div class="col-md-12 col-lg-12">
				<div class="container">
				  <div class="row">
				  <div class="col-md-4 col-xs-4">
				      <a href="<?php echo base_url() ?>kyc" type="button" class="btn btn-success btn-circle">Personal Info</a>
				  </div>
				  
				  <div class="col-md-4 col-xs-4">
				      <a href="<?php echo base_url() ?>kyc/kycmain" type="button" class="btn btn-success btn-circle">ID Info</a>
				  </div>
				  
				  <div class="col-md-4 col-xs-4">
				      <a href="<?php echo base_url() ?>kyc/passed" type="button" class="btn btn-success btn-circle">Passed</a>
				  </div>
				 </div>
				 
			  <div class="row">
				<div class="card card-primary mb-4">
					<div class="card-body border-color">
					<div class="panel-heading">
						 <h3 class="panel-title">Passport</h3>
					</div>
                    <div class="row">
                    	 <?php $re=$this->session->userdata('userlogin'); $dt=$this->db->get_where('passport',array('customer_id'=>$re->id, 'status'=>'1'))->row(); ?>
							

                        <div class="col-xl-12 col-lg-12 col-sm-12 d-flex justify-content-center">
      	                    <?php $re=$this->session->userdata('userlogin'); 
                         $dt=$this->db->get_where('kyc',array('customer_id'=>$re->id))->row(); ?>
							<?php if($dt->p1){ ?>	
							
						<div class="col-xl-4 col-lg-4 col-sm-12 d-flex justify-content-center">
                            <div class="prev-box text-center" name="passport">
								<img src="<?php echo base_url() ?>assets/passport/<?php echo @$dt->p1 ?>" style=" width:100%; height:auto" >
								<p>Passport Front Image</p>
							</div>
						</div>
                        
                        <div class="col-xl-4 col-lg-4 col-sm-12 d-flex justify-content-center">
                            <div class="prev-box text-center" name="passport">
								<img src="<?php echo base_url() ?>assets/passport/<?php echo @$dt->p2 ?>" style=" width:100%; height:auto" >
								<p>Passport Back Image</p>
							</div>
						</div>
                        <?php } else { ?>
                        		 
                     
                     	<div class="mb-0">
			<div class="file-header">
                <h6 class="mb-0 file">Upload Your File</h6>
            </div>
            <div class="upload d-flex justify-content-between align-items-center">
 <form class="row" method="post" enctype="multipart/form-data">
     
     	  <div class="col-md-6">
           <div class="form-group files" "text-center"="">
                <label>Upload front of ID card </label>
                <input type="file" class="form-control" multiple="" name="frontimage" required>
            </div>
	   </div>
	   <div class="col-md-6">
           <div class="form-group files color">
                <label>Upload back of ID card </label>
                <input type="file" class="form-control" multiple=""  name="backimage" required>
              </div>
	     </div>

	<div class="col-md-12">
	     <p>Note: *Please provide a clear, color picture of the enre
document. Screen shots are not allowed. JPG or PNG only.</p>
 <div class="col-12 text-right">
                             <button class="btn btn-default pull-right" name="submit" type="submit">Submit!</button>
                        </div>
                        </div>
                        </form>
            </div>
            </div>
                     
                     
                     
                        <?php } ?>
                        <!--  -->
                        
                        </div>
                     
                    </div>
				</div>
				</div>
			  		
      	</div>
      	</div>
        </div>       
      
      
</div>   		
      	</div>
      </div>    