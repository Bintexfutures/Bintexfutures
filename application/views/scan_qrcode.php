
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Bintex Dashboard</title>
  <!-- Favicon Icon -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <!-- Icon Fonts-->
  <link href="vendor/webfont/css/cryptocoins.css" rel="stylesheet" type="text/css">
  <link href="vendor/webfont/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  	<a class="navbar-brand" href="index_user.php">
    	<img class="logo_icon" src="images/logo_icon.png"/>
        <img class="logo" src="images/dashboard_logo.png"/>
    </a>
    <div class="mobile_menu">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="icon-menu icons"></span>
    </button>
    <a href="#" class="navbar-toggler" data-toggle="collapse" data-target="#navbarheader" aria-controls="navbarheader" aria-expanded="false" aria-label="Toggle navigation"><i class="icon-options-vertical"></i></a>
    </div>
    <div class="collapse navbar-collapse" id="navbarheader">
      <ul class="navbar-nav">
        <li class="nav-item d-none d-lg-block">
          <a class="nav-link text-center menubar" id="sidenavToggler">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
          </a>
        </li>
        <li class="nav-item">
          <a href="javascript:void(0)" class="search_icon"><i class="fa fa-search"></i></a>
          <form class="form-inline search_input">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto align-items-center">
        
        <li class="nav-item dropdown menu-notification">
          <a class="nav-link dropdown-toggle" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span><span class="d-none d-lg-inline-block">Notification</span>
              <span class="badge badge-pill badge-warning">4</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle align-middle"></i>
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-content-body p-0" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">Notification:</h6>
            <ul class="list_none fc-scroll">
            	<li>
                	<a class="dropdown-item" href="#">
                      <i class="icon_box icon-wallet icons bg-success"></i>
                      <div class="notification-content">
                      	<span class="small float-right text-muted">11:21 AM</span>
                      	<h6 class="text-success">New Wallet Added </h6>
                      	<div class="dropdown-message small">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</div>
                      </div>
                    </a>
                </li>
                <li>
                	<a class="dropdown-item" href="#">
                      <i class="icon_box icon-refresh icons bg-danger"></i>
                      <div class="notification-content">
                      	<span class="small float-right text-muted">11:21 AM</span>
                      	<h6 class="text-danger">Your Transferred Faild</h6>
                      	<div class="dropdown-message small">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</div>
                      </div>
                    </a>
                </li>
                <li>
                	<a class="dropdown-item" href="#">
                      <i class="icon_box icon-info icons bg-info"></i>
                      <div class="notification-content">
                      	<span class="small float-right text-muted">11:21 AM</span>
                      	<h6 class="text-info">New order received</h6>
                      	<div class="dropdown-message small">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</div>
                      </div>
                    </a>
                </li>
                <li>
                	<a class="dropdown-item" href="#">
                      <i class="icon_box fa fa-exclamation-triangle bg-warning"></i>
                      <div class="notification-content">
                      	<span class="small float-right text-muted">11:21 AM</span>
                      	<h6 class="text-warning">Upload Profile Image</h6>
                      	<div class="dropdown-message small">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</div>
                      </div>
                    </a>
                </li>
            </ul>
            <div class="dropdown-content-footer text-center"><a class="small" href="#">View all notification</a></div>
          </div>
        </li>
        <li class="nav-item dropdown menu_user">
          <a class="nav-link dropdown-toggle" id="userDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Vinod Kumar</a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <ul class="menu-nav list_none">
                <li><a href="profile.php"><span>My Profile</span></a></li>
                <li><a href="#"><span>Security</span></a></li>
                <li><a href="login_history.php"><span>History</span></a></li>
                <li><a href="#" data-toggle="modal" data-target="#exampleModal">Logout</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
    <div class="collapse navbar-collapse navbar-sidenav fc-scroll" id="navbarResponsive">
      <ul class="navbar-nav" id="exampleAccordion">
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php">
           <span class="nav-link-text"> My Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="buy.php">
            <span class="nav-link-text">Buy Tokens</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="orders_claims.php">
			<span class="nav-link-text">Orders & Claims</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kyc.php">
			<span class="nav-link-text">My KYC</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="documents.php">
            <span class="nav-link-text">Documents</span>
          </a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="referral.php">
            <span class="nav-link-text">Referral Program</span>
          </a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="my_wallet.php">
            <span class="nav-link-text">My Wallet</span>
          </a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="faq.php">
            <span class="nav-link-text">FAQ</span>
          </a>
        </li>
      </ul>
    </div>    
  </nav>
  <!DOCTYPE html>
  
  <html lang="en">
  <div class="content-wrapper">
    <div class="container-fluid">
      
      <div class="row">
      	<div class="offset-md-2 col-md-8">
      		<div class="card mb-4">
			<div class="card-header">
                <h4 class="mb-0">Scan QR Code</h4>
            </div><br><br> 
                    
            <div class="tab-content secmodify card-body">
                <div role="tabpanel" id="tab1" class="tab-pane fade show active">
                    

<div class="row">
	<div class="form-group offset-md-2 col-md-4 pt-2 text-center">
													<div class="qr-box">
														<img src="images/qr-code-img.png" alt="" class="img-responsive">
													</div>
												</div>
												<div class="col-md-5">
										<div class="card-body bg-light">
											<span> BWOJGBSJDFKVI</span>
										</div>
										<p>If you are unable to scan enter this manually</p>
										<div class="text-center">
							<a href="#" class="btn btn-default mt-4 mb-4 mar-rt" style="float: right;"> Next </a>
							            </div>
									</div>
</div><br><br><br><br>
                        
                    
            </div>
            </div>
      	</div>
		</div>
		<div class="col-md-2"><a class="navbar-brand" href="index_user.php">
    	<img class="logo_icon" src="images/logo_icon.png">
        <img class="logo" src="images/logo.png">
			</a></div>
      </div>
  

    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
<footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © 2019 All Rights Reserved.</small>
        </div>
      </div>
    </footer>
    <a class="scroll-to-top rounded btn-default" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="index.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!--Perfect scrollbar.js-->
    <script src="js/perfect-scrollbar.js"></script>
    <!-- countdown js  --> 
	<script src="js/jquery.countdown.min.js"></script> 
    <!-- Custom scripts for all pages-->
    <script src="js/admin.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/admin-datatables.min.js"></script>
    <script src="js/admin-charts.min.js"></script>
    <script src="js/step-wizard.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </div>
</body>
</html>