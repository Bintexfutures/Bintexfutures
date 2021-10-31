<body class=" ">
<div>
    
    <!--BEGIN BACK TO TOP--><a id="totop" href="#"><i class="fa fa-angle-up"></i></a><!--END BACK TO TOP-->
    <!--BEGIN TOPBAR-->
    <div id="header-topbar-option-demo" class="page-header-topbar">
        <nav id="topbar" role="navigation" style="margin-bottom: 0; z-index: 2;"
             class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span
                        class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                        class="icon-bar"></span><span class="icon-bar"></span></button>
                


<?php $i=1; $a=$this->db->get_where('logo')->row();  ?>                 
    <a href="<?php echo base_url();?>dashboard"><img src="<?php echo base_url();?>assets/aboutpage/<?php echo @$a->image; ?>" alt="<?php echo @$a->heading; ?>" title="<?php echo @$a->heading; ?>" width="160"  ></a>
<?php  ?>




            </div>
            <div class="topbar-main">
               

                <ul class="nav navbar navbar-top-links navbar-right mbn">
                  
                    <li class="dropdown topbar-user">
                        <a data-hover="dropdown" href="#" class="dropdown-toggle border-left">
                        <span class="">  <?php echo $this->session->userdata('login')->email;?></span>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="<?php echo base_url() ?>login/changepassword"><i class="fa fa-user"></i>Change Password</a></li>
                            <li><a href="<?php echo base_url(); ?>dashboard/logout""><i class="fa fa-key"></i>Log Out</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </nav>
        
        </div>
    <!--END TOPBAR-->