
  <div class="content-wrapper">
    <div class="container-fluid">
        	<?php $re=$this->session->userdata('userlogin');
					$k=$this->db->get_where('kyc',array('customer_id'=>$re->id))->row(); ?>
        <?php   if(@$k->status!='2'){  ?>
      <div class="row">
          
          
			<div class="col-md-12 col-lg-12">
				<div class="container">
			<div class="row">
				  <div class="col-md-4 col-xs-4"><a href="<?php echo base_url() ?>kyc" type="button" class="btn btn-success btn-circle">Personal Info</a></div>
			

	<?php if(@$k){ ?>
       
         <div class="col-md-4 col-xs-4"><a href="<?php echo base_url() ?>kyc/kycmain" type="button" class="btn btn-success btn-circle">ID Info</a></div>
				  <div class="col-md-4 col-xs-4"><a href="<?php echo base_url() ?>kyc/passed" type="button" class="btn btn-success btn-circle">Passed</a></div>
				  
                             <?php } else{ 
                             	?>
           <div class="col-md-4 col-xs-4"><a href="" onclick="return confirm('Upload Your Basic Information?')" type="button" class="btn btn-success btn-circle">ID Info</a></div>
				  <div class="col-md-4 col-xs-4"><a href="" onclick="return confirm('Upload Your Basic Information?')" type="button" class="btn btn-success btn-circle">Passed</a></div>
				  
				  
                             	 <?php } ?>

				
				  
				  
			</div>
				             
        <div class="">
		<div class="row">
      	
			<div class="col-md-12 col-sm-12">
				<div class="card card-primary mb-4">
					<div class="card-body border-color">
					<div class="panel-heading">
						 <h4 class="panel-title">Basic Information</h4>
					</div>
				
                    <form method="post" class="form-horizontal row mt-2" action="">
                        <div class="col-xl-2 col-lg-12 col-sm-12">
                            <label>First Name</label>
                        </div>
                        <div class="col-xl-4 col-lg-12 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="firstname" <?php if(@$k->fname){ ?>  value="<?php echo $k->fname ?>" <?php } else{ ?>  <?php } ?> >
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-12  col-sm-12">
                            <label>Middle Name</label>
                        </div>
                        <div class="col-xl-4 col-lg-12  col-sm-12">
                            <div class="form-group">
    <input type="text" class="form-control" name="middlename" <?php if(@$k->mname){ ?>  value="<?php echo $k->mname ?>" <?php } else{ ?>  value="" <?php } ?> >
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-12  col-sm-12">
                            <label>Last Name</label>
                        </div>
						<div class="col-xl-4 col-lg-12  col-sm-12">
                            <div class="form-group">
<input type="text" class="form-control" name="lastname" <?php if(@$k->lname){ ?>  value="<?php echo $k->lname ?>" <?php } else{ ?>  value="" <?php } ?> >
                       </div>
                        </div>
                        
                        
                        <div class="col-xl-2 col-lg-12  col-sm-12">
                            <label>Date Of birth</label>
                        </div>
						<div class="col-xl-4 col-lg-12  col-sm-12">
                            <div class="form-group">
<input type="date" class="form-control" name="dateofbirth" placeholder="dd-mm-yyyy"<?php if(@$k->dob){ ?>  value="<?php echo $k->dob ?>" <?php } else{ ?>  value="" <?php } ?> >
                 </div></div>
	     
                 <div class="col-xl-12"> 
                        <div class="panel-heading">
						 <h4 class="panel-title">Residential Address</h4>
					</div>
				       
				       </div>   
                   
				        <div class="col-xl-2 col-lg-12  col-sm-12">
                            <label>Address</label>
                        </div>
                        <div class="col-xl-4 col-lg-12  col-sm-12">
                            <div class="form-group">
<input type="text" class="form-control" name="address" <?php if(@$k->address){ ?>  value="<?php echo $k->address ?>" <?php } else{ ?>  value="" <?php } ?> >
</div>
                        </div>
                        <div class="col-xl-2 col-lg-12  col-sm-12">
                            <label>Postal Code</label>
                        </div>
						<div class="col-xl-4 col-lg-12  col-sm-12">
                            <div class="form-group">
<input type="text" class="form-control" name="postalcode" <?php if(@$k->pincode){ ?>  value="<?php echo $k->pincode ?>" <?php } else{ ?>  value="" <?php } ?> >

                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-12  col-sm-12">
                            <label >Location</label>
                        </div>
                        <div class="col-xl-4 col-lg-12  col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="location" <?php if(@$k->location){ ?>  value="<?php echo $k->location ?>" <?php } else{ ?>  value="" <?php } ?> >
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-12  col-sm-12">
                            <label for="old-password">Country/Region</label>
                        </div>
						<div class="col-xl-4 col-lg-12  col-sm-12">
                            <div class="form-group">
<input type="text" class="form-control" name="country" <?php if(@$k->country){ ?>  value="<?php echo $k->country ?>" <?php } else{ ?>  value="" <?php } ?> >
                            </div>
                        </div>
						
                        
                        
                        <div class="col-12 text-right">
                            
                            <?php if(@$k->status=='2'){ ?> 
                            
                            
                            
                             	 
                             	 
                            <?php } else { ?>
                            
                            	<?php if(@$k){ ?>
                             <button class="btn btn-default nextBtn pull-right" type="submit" name="update" >Begin Verification</button>
                             <?php } else{ ?>
                             <button class="btn btn-default nextBtn pull-right" type="submit" name="submit" >Begin Verification</button>
                             
                             	 <?php } ?>
                            
                            <?php } ?>
                        
                             	 
                             	 
                        </div>
                    </form>
                </div>
				</div>
				</div>
					
      	</div>
        </div></div>
        
        <div class="panel panel-primary setup-content" id="step-2">           
			<div class="row">
      	
			<div class="col-md-12 col-sm-12">
				<div class="card card-primary mb-4">
					<div class="card-body">
					<div class="panel-heading">
						
					<div class="panel-heading">
						 <h3 class="panel-title">Passport</h3>
					</div>
                    <div class="row">
                    	 <?php $re=$this->session->userdata('userlogin'); $dt=$this->db->get_where('passport',array('customer_id'=>$re->id, 'status'=>'1'))->row(); ?>
							<?php if($dt){ ?>	 
                        <div class="col-xl-4 col-lg-4 col-sm-4 mb-4">
                            <div class="prev-box text-center" name="passport">
                              
								
								<img src="<?php echo base_url() ?>assets/passport/<?php echo @$dt->frontimage ?>" style= "width:100%; height:80px" >
								<p >front Image Passport</p>
								
								
							</div>
							
								
                        </div>
                        <?php } else { ?>
                        		 
                        <div class="col-xl-4 col-lg-4 col-sm-4 mb-4">
                            <div class="prev-box text-center" name="passport">
                                <a href="<?php echo base_url() ?>kyc/uploadfile">
    								<i class="fa fa-globe fa-5x" aria-hidden="true"></i>
    								<p>Upload Frontside image for Passport</p>
								</a>
								
								
								
								
							</div>
							
								
                        </div>
                        <?php } ?>
                        
                         <?php $re=$this->session->userdata('userlogin'); $dt=$this->db->get_where('passport',array('customer_id'=>$re->id, 'status'=>'2'))->row(); ?>
							<?php if($dt){ ?>	 
                        <div class="col-xl-4 col-lg-4 col-sm-4 mb-4">
                            <div class="prev-box text-center" name="passport">
								<img src="<?php echo base_url() ?>assets/passport/<?php echo @$dt->backimage ?>" style=" width:100%; height:80px" >
								<p>Passport Back Image</p>
								
								
							</div>
							
								
                        </div>
                        <?php } else { ?>
                        		 
                        <div class="col-xl-4 col-lg-4 col-sm-4 mb-4">
                            <div class="prev-box text-center" name="passport">
                                <a href="<?php echo base_url() ?>kyc/uploadfile">
    								<i class="fa fa-globe fa-5x" aria-hidden="true"></i>
    								<p>Upload backside image for Passport</p>
								</a>
								
								
								
								
							</div>
							
								
                        </div>
                        <?php } ?>
                        <!--  -->
                        
                        </div>
                        <div class="panel-heading">
						 <h3 class="panel-title">ID Card</h3>
					</div>
                    <div class="row">

                        <?php $re=$this->session->userdata('userlogin'); $dt=$this->db->get_where('idcard',array('customer_id'=>$re->id, 'status'=>'1'))->row(); ?>
							<?php if($dt){ ?>	 
                        <div class="col-xl-4 col-lg-4 col-sm-4 mb-4">
                            <div class="prev-box text-center" name="idcard">
								<img src="<?php echo base_url() ?>assets/passport/<?php echo @$dt->frontimage ?>" style= " width:100%; height:80px" >
								<p >front Image Id Card</p>
								</div>
                        </div>
                        <?php } else { ?>
                        		 
                        <div class="col-xl-4 col-lg-4 col-sm-4 mb-4">
                            <div class="prev-box text-center" name="idcard">
                                <a href="<?php echo base_url() ?>kyc/idcard">
    								<i class="fa fa-id-card-o fa-5x" aria-hidden="true"></i>
    								<p>Upload Frontside ID Cards</p>
								</a>
							</div>
							</div>
                        <?php } ?>
                        
                         <?php $re=$this->session->userdata('userlogin'); $dt=$this->db->get_where('idcard', array('customer_id'=>$re->id, 'status'=>'2'))->row(); ?>
							<?php if($dt){ ?>	 
                        <div class="col-xl-4 col-lg-4 col-sm-4 mb-4">
                            <div class="prev-box text-center" name="idcard">
								<img src="<?php echo base_url() ?>assets/passport/<?php echo @$dt->backimage ?>" style= " width:100%; height:80px" >
								<p >Back Image ID Card</p>
								</div>
                        </div>
                        <?php } else { ?>
                        		 
                        <div class="col-xl-4 col-lg-4 col-sm-4 mb-4">
                            <div class="prev-box text-center" name="idcard">
                                <a href="<?php echo base_url() ?>kyc/idcard">
    								<i class="fa fa-id-card-o fa-5x" aria-hidden="true"></i>
    								<p>Upload Backside ID Cards</p>
								</a>
							</div>
							</div>
                        <?php } ?>
                       <!--  <div class="col-xl-4 col-lg-4 col-sm-4 mb-4">
                            <div class="prev-box text-center" name="idcard">
                                <div class="stepwizard-step col-xs-3"> 
								<a href="<?php echo base_url() ?>kyc/driverfile">
								<i class="fa fa-id-card-o fa-5x" aria-hidden="true"></i>
								<p>Identity Card</p>
							  </a>
							</div>
							</div>
                        </div> -->
                        
                        </div>
                        		
					<div class="panel-heading">
						 <h3 class="panel-title">Driver's License</h3>
					</div>
                    <div class="row">
                        <?php $re=$this->session->userdata('userlogin'); $dt=$this->db->get_where('driver',array('customer_id'=>$re->id, 'status'=>'1'))->row();?>
							<?php if($dt){ ?>	 
                        <div class="col-xl-4 col-lg-4 col-sm-4 mb-4">
                            <div class="prev-box text-center" name="license">
                              
								
								<img src="<?php echo base_url() ?>assets/passport/<?php echo @$dt->frontimage ?>" style= "width:100%; height:80px" >
								<p>Front Image Driver's License</p>
								
								
							</div>
							
								
                        </div>
                        <?php } else { ?>
                        		 
                        <div class="col-xl-4 col-lg-4 col-sm-4 mb-4">
                            <div class="prev-box text-center" name="license">
                                <a href="<?php echo base_url() ?>kyc/driverfile">
    								<i class="fa fa-car fa-5x" aria-hidden="true"></i>
    								<p>Upload Front Driver's License</p>
								</a>
								
								
								
								
							</div>
							
								
                        </div>
                        <?php } ?>
                        
                        <?php $re=$this->session->userdata('userlogin'); $dt=$this->db->get_where('driver',array('customer_id'=>$re->id, 'status'=>'2'))->row();?>
							<?php if($dt){ ?>	 
                        <div class="col-xl-4 col-lg-4 col-sm-4 mb-4">
                            <div class="prev-box text-center" name="license">
								<img src="<?php echo base_url() ?>assets/passport/<?php echo @$dt->backimage ?>" style="width:100%; height:80px" >
								<p>Back Image Driver's License</p>
								
								
							</div>
							
								
                        </div>
                        <?php } else { ?>
                        		 
                        <div class="col-xl-4 col-lg-4 col-sm-4 mb-4">
                            <div class="prev-box text-center" name="license">
                                <a href="<?php echo base_url() ?>kyc/driverfile">
    								<i class="fa fa-car fa-5x" aria-hidden="true"></i>
    								<p>Upload Backside Driver's License</p>
								</a>
								
								
								
								
							</div>
							
								
                        </div>
                        <?php } ?>
                        <!-- <div class="col-xl-4 col-lg-4 col-sm-4 mb-4">
                            <div class="prev-box text-center" name="license">
                                <a href="https://bintexfutures.com/upload_file.php">
                                    <i class="fa fa-car fa-5x" aria-hidden="true"></i>
    								<p>Driver's License</p>
								</a>
							</div>
                        </div> -->
                         <div class="col-12 text-right">
                             <button class="btn btn-default nextBtn pull-right" name="submit1"type="submit">Next</button>
                        </div>
                    </div>
                </div>
				</div>
				</div>
			  		
      	</div>
        </div>        
        <div class="panel panel-primary setup-content" id="step-3">
            <div class="row">				
					<div class="col-md-12 col-sm-12">
						<div class="card card-primary mb-4">
							<div class="card-body">
								 <div class="panel-body">              
									<button class="btn btn-default pull-right" type="submit" name="submit2">Finish!</button>
								</div>
							</div>
						</div>
					</div>				
			</div>
        </div>
       
</div>
			</div> 
			
      	</div>
      	<?php } ?>
      	<?php  if(@$k->status=='2'){ ?>
      	<div class="alert alert-success">
   <strong>Success!</strong> You are kyc successfully completed.
 </div>
      	<?php } ?>
      </div>
    </div>
	
    </div>
    