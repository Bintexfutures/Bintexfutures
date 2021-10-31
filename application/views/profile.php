
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row page_title">
      	<div class="col-sm-6">
        	<h4>Profile</h4>
        </div>
        <div class="col-sm-6">
          <!-- Breadcrumbs-->
      
        </div>
      </div>
      
      <div class="row">
      	<div class="col-xl-12 col-md-12">
      		<div class="card mb-4">
            	<div class="card-header">General Settings</div>
                <div class="card-body">
    

    <?php $re=$this->session->userdata('userlogin');
                    $k=$this->db->get_where('users',array('id'=>$re->id))->row();
//print_r($k); ?>

                <form class="form-horizontal row mt-2" method="post">
                        <div class="col-xl-6 col-lg-12  col-sm-12">
                            <div class="form-group">
                                <label>User name</label>
                                <input type="text" class="form-control" name="username" <?php if(@$k->username){ ?>  value="<?php echo $k->username ?>" <?php } else{ ?>  value="-" <?php } ?>  readonly >
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12  col-sm-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" <?php if(@$k->email){ ?>  value="<?php echo $k->email ?>" <?php } else{ ?>  value="-" <?php } ?> readonly>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12  col-sm-12">
                            <div class="form-group">
                                <label>Address</label>
                               <input type="text" class="form-control" name="address" <?php if(@$k->address){ ?>  value="<?php echo $k->address ?>" <?php } else{ ?>  value="-" <?php } ?> >
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12  col-sm-12">
                            <div class="form-group">
                                <label>Date of Birth</label>
                               <input type="date" class="form-control" name="birth" <?php if(@$k->birth){ ?>  value="<?php echo $k->birth ?>" <?php } else{ ?>  value="-" <?php } ?> >
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-12  col-sm-12">
                            <div class="form-group">
                                <label for="old-password">City</label>
                                <input type="text" class="form-control" name="city" <?php if(@$k->city){ ?>  value="<?php echo $k->city ?>" <?php } else{ ?>  value="-" <?php } ?> >
                           
                          
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-12  col-sm-12">
                            <div class="form-group">
                                <label>Zipcode</label>
                               <input type="text" class="form-control" name="pincode" <?php if(@$k->pincode){ ?>  value="<?php echo $k->pincode ?>" <?php } else{ ?>  value="-" <?php } ?> >
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-12  col-sm-12">
                            <div class="form-group">
                                <label>New password</label>
                                <input type="text" class="form-control" name="password" <?php if(@$k->password){ ?>  value="<?php echo $k->password ?>" <?php } else{ ?>  value="-" <?php } ?> >
                            </div>
                        </div>
                        <div class="col-12 text-right">
                            <button name="submitu" type="submit" class="btn btn-default mt-2">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>

      	</div>
       
      </div>
    </div>
