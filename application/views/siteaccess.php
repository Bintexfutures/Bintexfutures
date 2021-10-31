

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
   <script src="<?php echo base_url(); ?>js/jquery-1.10.2.min.js"></script><script src="<?php echo base_url(); ?>js/tilda-scripts-2.8.min.js"></script>
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
          	<img class="img img-fluid" width="200" height="50" src="<?php echo base_url(); ?>images/tild6563-3437-4963-b061-633866323331__logo.png" alt="Bintex logo"/>
          	</a>
            </div>	<br>
            <!-- <h6 class="my-4 text-center text-uppercase">Welcome to Bintex</h6> -->
            <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 col-xs-12">
            <form>
                <div class="alert alert-success" id="success_message" style="color:green"></div>
                                         <label id="error_message" style="color:red"></label>
                                    <div class="search_box form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email or Phone number" required>
                                    </div>
                                     <div class="form-group" >
                                      <a href="<?php echo base_url(); ?>Subscriber/skip?id=1"> 
                                      <button type="button" class="search_btn t-descr btn brn-success" >Skip</button>
                                      </a>
                                        <button type="button" class="search_btn t-descr btn brn-success" id="submit">Subscribe Now</button>
                                    </div>
            </form>
            </div>
            <div class="col-md-4"></div>
            </div>
            <div class="text-center mt-3 justify-content-between d-md-flex">
              <!--<a class="d-block small" style="pointer-events: none;" href="<?php echo base_url();?>subscriber" >Existing Subscribe</a>-->
             
            </div>
          </div>
        </div>
  </div>
  
   <script type="text/javascript">
       $(document).ready(function(){
                                        $("#success_message").hide();
                                         $('#submit').click(function(){  
                                             
           var email = $('#email').val();  
           if(email == '')  
           {  
                $('#error_message').html("Please fill email");  
                return false;
           }
           if(IsEmail(email)==false){
                $('#error_message').html("invalid email");   
                return false;
            }
           else  
           {  
               $("#submit").attr("style","cursor: not-allowed");
                $('#error_message').html('');  
                $.ajax({  
                     url:"<?php echo  base_url(); ?>Subscriber/subscribe",  
                     method:"POST",  
                     data:{email:email},  
                     success:function(data){  
                         $("#submit").removeAttr("style","cursor: not-allowed");
                          $("form").trigger("reset");  
                            $("#success_message").show();
                          $('#success_message').fadeIn().html(data);  
                          //localStorage.setItem("email", data.email);
                          setTimeout(function(){  
                               $('#success_message').fadeOut("Slow");  
                               window.location.href='https://bintexfutures.com/';
                          }, 2000);  
                     }  
                });  
           }  
      });  
      
      function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test(email)) {
           return false;
        }else{
           return true;
        }
      }
                                    })
   </script>
