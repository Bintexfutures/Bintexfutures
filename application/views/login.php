

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
  <!-- Custom styles for this template-->
  <link href="css/admin.css" rel="stylesheet">
</head>
<!DOCTYPE html>


<?php if($this->session->flashdata('message')) :?>
    <div class="alert alert-danger alert-dismissable">
  <!-- Check Your Username and Password-->
    <?php echo $this->session->flashdata('message'); ?>
    </div>
<?php endif; ?>

  <div class="h-100">
      <div class="lr_wrap">
          <div class="card-body">
          	<div class="lr_icon text-center">
          	    <a href="https://bintexfutures.com">
          	<img src="assets/images/logo.png" alt="Bintex logo"/>
          	</a>
            </div>	<br>
            <!-- <h6 class="my-4 text-center text-uppercase">Welcome to Bintex</h6> -->
            <form action="" method="post">
              <div class="form-group">
                <input class="form-control" id="exampleInputEmail1" type="text" placeholder="Enter email" name="username" required>
              </div>
              <div class="form-group">
                <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" name="password" required>
              </div>
			  <div class="form-group">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Remember Password</label>
                </div>
              </div>
                <div class="col-md-12 text-center animation" data-animation="fadeInUp" data-animation-delay="1.2s">
                        <input type="submit" name="submit" class="btn btn-default">
                </div>
            </form>
            <div class="text-center mt-3 justify-content-between d-md-flex">
              <a class="d-block small" style="pointer-events: none;" href="<?php echo base_url();?>register" >Register</a>
              <a class="d-block small" href="<?php echo base_url();?>forgotpassword">Forgot Password?</a>
            </div>
          </div>
        </div>
  </div>
