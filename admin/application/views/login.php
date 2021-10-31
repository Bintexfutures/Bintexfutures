<!DOCTYPE html>
<html lang="en">
   <head>
      <title>LOGIN</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="cache-control" content="no-cache">
      <meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT">
      <!--Loading bootstrap css-->
      <link rel="shortcut icon" type="image/x-icon" href="https://bintexfutures.com/assets/images/favicon.png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/login.css">
	


<link href="https://fonts.googleapis.com/css?family=Niramit:400,500,600,700" rel="stylesheet">


   </head>
   <body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="logo_card">
				<div class="d-flex justify-content-between">
				<a href="https://bintexfutures.com/">
					<img src="https://bintexfutures.com/assets/images/bintex-coins.png" class="brand_logo" alt="Logo">
				</a>	
				</div>
				</div>
				<div class="ua_card">
				<div class="d-flex justify-content-center form_container">
					<form id="signup-form" action="" class="form" method="post">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" placeholder="Username" name="user" class="form-control">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fa fa-lock" ></i></span>
							</div>
							<input id="password" type="password" placeholder="Password" name="password" class="form-control"> &nbsp;
							<button type="submit" class="btn login_btn" name= "submit">Login</button>
							</div>
							
					<div class="error col-md-4 col-md-offset-4">
                        <?php if ($this->session->flashdata('error')) :?>
                           <script type="text/javascript">
                           alert("<?php echo $this->session->flashdata('error');?>");
                           </script>
                        <?php endif;?>
                    </div>
				
				</form>
				</div>
		
			</div>
		</div>
	</div>
</body>
</html>