<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>BINTEX FUTURES Dashboard</title>
  <!-- Favicon Icon -->
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/images/favicon.png">
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url();?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <!-- Icon Fonts-->
  <link href="<?php echo base_url();?>vendor/webfont/css/cryptocoins.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>vendor/webfont/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url();?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>css/admin.css" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
    .menu_user:hover .dropdown-menu.dropdown-menu-right, .menu-notification:hover .dropdown-menu.dropdown-menu-right
    {
        display:block;
    }
</style>
</head>

<body class="fixed-nav sticky-footer" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  	<a class="navbar-brand" href="<?php echo base_url();?>dashboard">
    	<img class="logo_icon" src="<?php echo base_url();?>images/logo_icon.png"/>
        <img class="logo" src="<?php echo base_url();?>images/dashboard_logo.png"/>
    </a>
    <div class="mobile_menu">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="icon-menu icons"></span>
    </button>
    <a href="#" class="navbar-toggler" data-toggle="collapse" data-target="#navbarheader" aria-controls="navbarheader" aria-expanded="false" aria-label="Toggle navigation"><i class="icon-options-vertical"></i></a>
    </div>
    <div class="collapse navbar-collapse" id="navbarheader">
    
      <ul class="navbar-nav ml-auto align-items-center">
 
    <?php 
$san=$this->session->userdata('userlogin');
$san->email;
?>


     <li class="nav-item dropdown menu_user">
          <a class="nav-link dropdown-toggle" id="userDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           
         
         
                    
                    <?php echo $san->email; ?>
                      

                    </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <ul class="menu-nav list_none">
                
                <li><a href="<?php echo base_url();?>profile"><span>My Profile</span></a></li>
                <li><a href="<?php echo base_url();?>dashboard/changepassword"><span>Security</span></a></li>
				<li><a href="<?php echo base_url();?>loginhistory"><span>History</span></a></li>
                <li><a href="<?php echo base_url();?>logout" data-toggle="modal" data-target="#exampleModal">Logout</a></li>
                
            </ul>
          </div>
        </li>
		<?php
$san=$this->session->userdata('userlogin');
 $data1=$this->db->order_by('id', 'desc')->get_where('notification', array('reg_id'=> $san->id))->result();
 $i=1;?>       
        <li class="nav-item dropdown menu-notification">
          <a class="nav-link dropdown-toggle" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span><span class="d-none d-lg-inline-block">Notification</span>
              <span class="badge badge-pill badge-warning">
                <?php echo count($data1); ?></span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle align-middle"></i>
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-content-body p-0" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">Notification:</h6>
            <ul class="list_none fc-scroll">
            	
            	<?php foreach($data1 as $h){?>

                <li>
                	<a class="dropdown-item" href="<?php echo base_url();?>notification">
                      <i class="icon_box icon-wallet icons bg-success"></i>
                      <div class="notification-content">
                      	<span class="small float-right text-muted"><?php echo $h->crdate; ?></span>
                      	<h6 class="text-success"><?php echo $h->heading; ?></h6>
                      	<div class="dropdown-message small"><?php echo $h->content; ?></div>
                      </div>
                    </a>
                </li>
                

        <?php $i++;?>
                  <?php }?>
            </ul>
            <div class="dropdown-content-footer text-center"><a class="small" href="<?php echo base_url();?>notification">View all notification</a></div>
          </div>
        </li>
      </ul>
    </div>
    
    <?php 
$current =  $this->uri->segment(1); 
$current_1 =  $this->uri->segment(2); 

?>



    <div class="collapse navbar-collapse navbar-sidenav fc-scroll" id="navbarResponsive">
      <ul class="navbar-nav" id="exampleAccordion" style="padding-top: 5px !important;">
          
        <li class="nav-item <?php if($current == 'dashboard' || $current == ''  ){ echo "active"; }  ?>">
          <a class="nav-link" href="<?php echo base_url();?>dashboard">
           <span class="nav-link-text"> My Dashboard</span>
          </a>
        </li>
        <li class="nav-item  <?php if($current == 'buy' || $current == ''  ){ echo "active"; }  ?>">
          <a class="nav-link" href="<?php echo base_url();?>buy">
            <span class="nav-link-text">Buy Tokens</span>
          </a>
        </li>
        <li class="nav-item  <?php if($current == 'buyorder' || $current == ''  ){ echo "active"; }  ?>">
          <a class="nav-link" href="<?php echo base_url();?>buyorder/ordersclaims">
			<span class="nav-link-text">Orders & Claims</span>
          </a>
        </li>
        <li class="nav-item  <?php if($current == 'kyc' || $current == ''  ){ echo "active"; }  ?>">
          <a class="nav-link" href="<?php echo base_url();?>kyc">
			<span class="nav-link-text">My KYC</span>
          </a>
        </li>
        <li class="nav-item  <?php if($current == 'documents' || $current == ''  ){ echo "active"; }  ?>">
          <a class="nav-link" href="<?php echo base_url();?>documents">
            <span class="nav-link-text">Documents</span>
          </a>
        </li>
       <!-- <li class="nav-item">
          <a class="nav-link" href="transactions.php">
            <span class="nav-link-text">Live Transactions</span>
          </a>
        </li> -->
		<li class="nav-item  <?php if($current == 'referral' || $current == ''  ){ echo "active"; }  ?>">
          <a class="nav-link" href="<?php echo base_url();?>referral">
            <span class="nav-link-text">Referral Program</span>
          </a>
        </li>
		<li class="nav-item  <?php if($current == 'mywallet' || $current == ''  ){ echo "active"; }  ?>">
          <a class="nav-link" href="<?php echo base_url();?>mywallet">
            <span class="nav-link-text">My Wallet</span>
          </a>
        </li>
		<li class="nav-item  <?php if($current == 'faq2' || $current == ''  ){ echo "active"; }  ?>">
          <a class="nav-link" href="<?php echo base_url();?>faq2">
            <span class="nav-link-text">FAQ</span>
          </a>
        </li>
      </ul>
    </div>    
  </nav>
  <script src="<?php echo base_url();?>vendor/jquery/jquery.min.js"></script>
  <script type="text/javascript">

 function test1(id){
     $.ajax({
        url:"<?php echo base_url();?>ajaxuser/gettoken/"+id,
        method:"GET",
        success: function(data) {
            cal();
          //alert(data);

     document.getElementById('token').value=data;
    // location.reload();
      },
      error: function(err) {
       console.log(err);
      }
      });
    }

    
    function cal(){
     token= $('#token').val();
     amount= $('#amount').val();
     $('#bonus_token').val(amount*token);
     bonus_token= $('#bonus_token').val();
     $('#bit_tokens').val(bonus_token/0.4)*1;
     bit_tokens= $('#bit_tokens').val();  // Left
    
    
     $('#bonus_tk').val(Math.round(bit_tokens*0.1)); //Right
     $('#bonus_tk1').val(Math.round(bit_tokens*0.05)); //Right
     $('#total_token').val((Math.round(bit_tokens*1))+(Math.round(bit_tokens*0.1)));
     total_token= $('#total_token').val();
    }
    
    function cal1(){
     token= $('#token').val();
      bit_tokens= $('#bit_tokens').val();
      bit_toke= bit_tokens/token;
     botkens= $('#bonus_token').val();
     amount= $('#amount').val(Math.round(bit_toke*0.4));
     
     $('#bonus_tk').val(Math.round(bit_tokens*0.1));
     $('#bonus_tk1').val(Math.round(bit_tokens*0.05));
     $('#total_token').val((Math.round(bit_tokens*1))+(Math.round(bit_tokens*0.1)));
     total_token= $('#total_token').val();
    }
    
    function cal2(){
     token= $('#token').val();
     total_token= $('#total_token').val();
     bit_toke= total_token/0.1;
     botkens= $('#bonus_token').val();
     
     //$('#bit_tokens').val(total_token*0.9);
     
      $('#bit_tokens').val(Math.round(total_token*0.9));
     
     $('#bonus_tk').val(Math.round(total_token*0.1));
     //Math.round(total_token*0.1); 
     //$('#bonus_tk1').val(total_token*0.05);
      $('#bonus_tk1').val(Math.round(total_token*0.05));
   
     var a= $('#bit_tokens').val();
     var res=(a*0.4)/token;
       
     $('#amount').val(Math.round(res));
     
     
   
    }
    </script>