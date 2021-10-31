<div id="wrapper"><!--BEGIN SIDEBAR MENU-->
        <nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    <li class="user-panel">
                    </li>
                    

    			
    <?php 
$current =  $this->uri->segment(1); 
$current_1 =  $this->uri->segment(2); 

?>					
<li class="nav-parent ">
    <a href="#" style="<?php 
    if($current == 'homepage' || $current == 'logo' || $current == 'thenumber'|| $current == 'abouts' || $current == 'roadmap'|| $current == 'faq' || $current == 'contactenquiry' 
    || $current == 'contact' || $current == 'clients' || $current == 'subscribe' || $current == 'privacy')
    { 
        echo "background-color: #264257; color: #F0C26C;";  
    }  
    ?>"><i class="icon-home"><div class="icon-bg bg-pink"></div></i><span class="menu-title"> Home Page</span> <span class="fa arrow"></span></a>
  <ul class="nav nav-second-level">
      <li><a href="<?php echo base_url()?>Markets">Markets</a></li>      
    <li><a href="<?php echo base_url();?>logo/update/1">Logo Edit</a></li>
    <li><a href="<?php echo base_url()?>thenumber/update/1">The Number of Token Sales</a></li>
    <li><a href="<?php echo base_url();?>abouts/updateabout/1">The BNTX Token</a></li>
    <li><a href="<?php echo base_url();?>abouts/updateabout/2">About The Bintex</a></li>
    <li><a href="<?php echo base_url()?>thenumber/update2/2">Token Sales</a></li>
    <li><a href="<?php echo base_url();?>abouts/updateabout/4">Token Sale Proceeds</a></li>
    <li><a href="<?php echo base_url();?>abouts/updateabout/5">Token Distribution</a></li>
    <li><a href="<?php echo base_url();?>roadmap/add">Roadmap</a></li>
    <li><a href="<?php echo base_url();?>abouts/updateabout/6">Download Mobile App</a></li>
    <li><a href="<?php echo base_url();?>abouts/updateabout/3">Download Whitepaper</a></li>
    <li><a href="<?php echo base_url()?>faq/add">Faq</a></li>
    <li><a href="<?php echo base_url()?>contactenquiry/view">Contact Enquiry</a></li>
    <li><a href="<?php echo base_url()?>contact/updateabout/1">Contact Address</a></li> 
    <li><a href="<?php echo base_url()?>clients/addgallery">Our Clients</a></li> 
    <li><a href="<?php echo base_url()?>subscribe">Subscribe</a></li>
    <!--<li><a href="<?php echo base_url()?>Waitlist">waitlist</a></li>-->
    <li><a href="<?php echo base_url();?>homepage">Social Media links</a></li>
    <li><a href="<?php echo base_url();?>privacy/add">Terms Of Use & Privacy Policy</a></li>
  </ul>
</li>

               
					
<li class="nav-parent"><a href="#" style="<?php 
    if($current == 'latestupdates' || $current == 'ico' || $current == 'ordersclaims'|| $current == 'registration' || $current == 'downloads'|| $current == 'ordersclaims' || $current == 'dashboard' 
    || $current == 'clientfaq' || $current == 'notification' || $current == 'qr' || $current == 'crypto')
    { 
        echo "background-color: #264257; color: #F0C26C;";  
    }  
    ?>"><i class="icon-home"><div class="icon-bg bg-pink"></div></i>
<span class="menu-title"> Dashboard</span> <span class="fa arrow"></span></a>
  <ul class="nav nav-second-level">
    <li><a href="<?php echo base_url();?>latestupdates/add">Latest Updates</a></li>
    <li><a href="<?php echo base_url();?>ico/add">ICO Stages</a></li>
    <li><a href="<?php echo base_url()?>ordersclaims">Orders & Claims</a></li>
    <li><a href="<?php echo base_url()?>registration/view">Registration</a></li>
    <li><a href="<?php echo base_url()?>registration/kyc">Kyc</a></li>
    <li><a href="<?php echo base_url();?>downloads/add">Documents Uploads</a></li>
    <li><a href="<?php echo base_url();?>ordersclaims/referral">Referal Program</a></li>
    <li><a href="<?php echo base_url();?>dashboard/mywallet">My Wallet</a></li>
    <li><a href="<?php echo base_url()?>clientfaq/add">Client Faq</a></li>
    <li><a href="<?php echo base_url()?>notification/view">Notification</a></li>
    <li><a href="<?php echo base_url()?>qr/addgallery">QR Code</a></li>
    <li><a href="<?php echo base_url()?>crypto/addgallery">Cryptocurrency Price</a></li>
 </ul>
</li>
		

<li><a href="#" style="<?php 
    if($current == 'committee')
    { 
        echo "background-color: #264257; color: #F0C26C;";  
    }  
    ?>"><i class="icon-users"><div class="icon-bg bg-dark"></div></i>
    <span class="menu-title">Members</span><span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li><a href="<?php echo base_url()?>committee/addmember"><span class="submenu-title">Add Member</span></a></li>
        <li><a href="<?php echo base_url()?>committee/ocm"><span class="submenu-title">View Our team</span></a></li>
        <li><a href="<?php echo base_url()?>committee/speaker"><span class="submenu-title">View Invester Board</span></a></li>
    </ul>
</li>

<li class="nav-parent ">
    <a href="#" ><i class="icon-home"><div class="icon-bg bg-pink"></div></i><span class="menu-title">Content Mangement</span> <span class="fa arrow"></span></a>
  <ul class="nav nav-second-level">
      <li><a href="<?php echo base_url()?>New_subscribe">New Subscribers</a></li>
      <li><a href="<?php echo base_url()?>Crypto_price">Crypto Price</a></li>
      <li><a href="<?php echo base_url()?>homepage">Home</a></li>      
    <li><a href="<?php echo base_url();?>Exchange">Exchange</a></li>
    <li><a href="<?php echo base_url()?>BNTX">BNTX</a></li>
    <li><a href="<?php echo base_url();?>Token">Token</a></li>
    <li><a href="<?php echo base_url();?>Road Map">Road Map</a></li>
    <li><a href="<?php echo base_url()?>Team">Team</a></li>
    <li><a href="<?php echo base_url();?>News">News</a></li>
    <li><a href="<?php echo base_url();?>Markets">Markets</a></li>
    <li><a href="<?php echo base_url();?>About Us">About Us</a></li>
    <li><a href="<?php echo base_url();?>Get Support">Get Support</a></li>
    <li><a href="<?php echo base_url();?>FAQS">FAQS</a></li>
    <li><a href="<?php echo base_url()?>faq/add">Faq</a></li>
    <li><a href="<?php echo base_url()?>Contact Us">Contact Us</a></li>
    <li><a href="<?php echo base_url()?>contact/updateabout/1">Contact Address</a></li> 
    <li><a href="<?php echo base_url()?>clients/addgallery">Our Clients</a></li> 
    <li><a href="<?php echo base_url()?>subscribe">Subscribe</a></li>
    <li><a href="<?php echo base_url()?>Waitlist">waitlist</a></li>
    <li><a href="<?php echo base_url();?>homepage">Social Media links</a></li>
    <li><a href="<?php echo base_url();?>privacy/add">Terms Of Use & Privacy Policy</a></li>
  </ul>
</li>




 <?php  $u= $this->session->userdata('login'); ?> 






</ul>
</li>
          </ul>
            </div>
        </nav>
        <!--END SIDEBAR MENU--><!--BEGIN CHAT FORM-->



          <div id="page-wrapper"><!--BEGIN TITLE & BREADCRUMB PAGE-->
            <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                <div class="page-header pull-left">
                    <div class="page-title"><?php if (@$title) {
                        echo $title;
                    } ?></div>
                </div>
                <ol class="breadcrumb page-breadcrumb">
                <?php if (@$bc) {
                    foreach ($bc as $k => $v) { ?>
                
                    <li><a href="<?php if (@$v) {  echo $v;}else echo "#"; ?>"><?php echo $k;?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
  <?php  }
                    } ?>
                    </ol>
                <div class="btn btn-blue reportrange hide"><i class="fa fa-calendar"></i>&nbsp;<span></span>&nbsp;report&nbsp;<i
                        class="fa fa-angle-down"></i><input type="hidden" name="datestart"/><input type="hidden"
                                                                                                   name="endstart"/>
                </div>
                <div class="clearfix"></div>
            </div>
            <!--END TITLE & BREADCRUMB PAGE--><!--BEGIN CONTENT-->
            <div class="page-content">
                
                