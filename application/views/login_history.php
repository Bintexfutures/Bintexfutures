
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row page_title">
      	<div class="col-sm-6">
        	<h4>Login History</h4>
        </div>
        <div class="col-sm-6">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="dashboard.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Histroy</li>
          </ol>
        </div>
      </div>
      <div class="row">
      	<div class="col-md-12">
        	<div class="card">
            	<div class="card-header">Login History</div>
                <div class="card-body">
                	<div class="col-12">
                    	<div class="login_list_head d-none d-md-block">
                        	<div class="row">
                                <div class="col-md-4 col-12">
                                    <p class="mb-0">Sl .No</p>
                                </div>
                                <div class="col-md-4 col-12">
                                    <p class="mb-0">Date</p>
                                </div>
                                <div class="col-md-4 col-12">
                                    <p class="mb-0">IP Address</p>
                                </div>
                        	</div>
                        </div>
                        <div class="login_list_body">

<?php
$san=$this->session->userdata('userlogin');
 $i=1;
$data1=$this->db->order_by('id', 'desc')->get_where('sub_log', array('username' => $san->email ))->result(); ?>
<?php foreach($data1 as $h){?>

                            <div class="row">
                                <div class="col-md-4 col-12 py-2">
                                    <p class="mb-0"><span class="d-inline-block d-md-none">Date: </span> <?php echo $i++; ?></p>
                                </div>
                                <div class="col-md-4 col-12 py-2">
                                    <p class="mb-0"><span class="d-inline-block d-md-none">Date: </span> <?php echo $h->crdate; ?></p>
                                </div>
                                <div class="col-md-4 col-12 py-2">
                                    <p class="mb-0"><span class="d-inline-block d-md-none">IP: </span>  <?php echo $h->ip_address; ?></p>
                                </div>                                
                                </div>
     <?php }?>

                            </div>
                          




					
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    