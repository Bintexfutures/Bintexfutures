

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>BINTEX FUTURES</title>
  <!-- Favicon Icon -->
<link rel="shortcut icon" type="image/x-icon" href="https://bintexfutures.com/assets/images/favicon.png">
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


<?php if($this->session->flashdata('msg')) :?>
    <div class="alert alert-success alert-dismissable" style="z-index:1">
    <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
    <strong><?php echo $this->session->flashdata('msg'); ?></strong>  
    </div>
<?php endif; ?>

<?php if($this->session->flashdata('emsg')) :?>
    <div class="alert alert-danger alert-dismissable" style="z-index:1">
    <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
   <strong><?php echo $this->session->flashdata('emsg'); ?></strong> 
    </div>
<?php endif; ?>

  <div class="bg_image h-100">
      <div class="lr_wrap">
          <div class="card-body">
          	<div class="lr_icon text-center">
          	    <a href="https://bintexfutures.com/">
          	<img src="assets/images/logo.png" alt="Bintex logo"/>
          	</a>
            </div>
            
            <h6 class="my-4 text-center text-uppercase">Reset Password</h6>
            <p class="small text-center">Enter your email address and we will send you instructions on how to reset your password.</p>
            <!-- <h6 class="my-4 text-center text-uppercase">Welcome to Bintex</h6> -->
            <form action="" method="post">
              <div class="form-group">
                <input class="form-control" id="exampleInputEmail1" type="text" value="" placeholder="Enter email" name="email" required>
              </div>
              <div class="col-md-12 text-center animation" data-animation="fadeInUp" data-animation-delay="1.2s">
                        <input type="submit" name="submit" class="btn btn-default">
                      </div>
            </form>
            <div class="text-center mt-3 justify-content-between d-md-flex">
              <a class="d-block small" href="<?php echo base_url();?>register">Register</a>
             
            </div>
          </div>
        </div>
  </div>
