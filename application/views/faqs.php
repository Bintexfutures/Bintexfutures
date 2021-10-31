
  <div class="content-wrapper">
    <div class="container-fluid">
    	<div class="row page_title">
      	<div class="col-sm-6">
        	<h4>FAQS</h4>
        </div>
         <div class="col-sm-6">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <a class="navbar-brand" href="index_user.php">
    	<img class="logo_icon" src="images/logo_icon.png">
        <img class="logo" src="images/logo.png">
			</a>
          </ol>
        </div>
      </div>
        <div class="row">
            <div class="col-xl-2 col-md-3">
            	<div class="tab_nav">
                	<ul role="tablist" id="pills-tab" class="nav nav-pills">
                  <li class="nav-item">
                    <a href="#tab1" data-toggle="tab" class="tab-link active">General</a>
                  </li>
                  <li class="nav-item">
                    <a href="#tab2" data-toggle="tab" class="tab-link">Payment</a>
                  </li>
                  <li class="nav-item">
                    <a href="#tab3" data-toggle="tab" class="tab-link">Tokens</a>
                  </li>
                  <li class="nav-item">
                    <a href="#tab4" data-toggle="tab" class="tab-link">Other</a>
                  </li>
                </ul>
                </div>
            </div>
            <div class="col-xl-10 col-md-9">
                <div class="tab-content">

<div role="tabpanel" id="tab1" class="tab-pane fade show active">
    <div class="faq_content2" id="accordion1">

<?php $data1=$this->db->order_by('id', 'desc')->get_where('scientific2', array('cat' => 'General' ))->result(); ?>
<?php foreach($data1 as $h){?>
<div class="card mb-3">
    <div id="headingFive" class="card-header">
    <h6 class="mb-0"> <a aria-controls="collapse<?php echo $h->id; ?>" aria-expanded="false" href="#collapse<?php echo $h->id; ?>" data-toggle="collapse" class="collapsed"><?php echo $h->time; ?></a> </h6>
    </div>
    <div data-parent="#accordion<?php echo $h->id; ?>" aria-labelledby="heading<?php echo $h->id; ?>" class="collapse show" id="collapse<?php echo $h->id; ?>">
    <div class="card-body"> <?php echo $h->session; ?></div>
    </div>
</div>
<?php }?>

</div>
</div>


<div role="tabpanel" id="tab2" class="tab-pane fade">
    <div class="faq_content2" id="accordion2">
    
    <?php $data1=$this->db->order_by('id', 'desc')->get_where('scientific2', array('cat' => 'Payment' ))->result(); ?>
<?php foreach($data1 as $h){?>
<div class="card mb-3">
    <div id="headingFive" class="card-header">
    <h6 class="mb-0"> <a aria-controls="collapse<?php echo $h->id; ?>" aria-expanded="false" href="#collapse<?php echo $h->id; ?>" data-toggle="collapse" class="collapsed"><?php echo $h->time; ?></a> </h6>
    </div>
    <div data-parent="#accordion<?php echo $h->id; ?>" aria-labelledby="heading<?php echo $h->id; ?>" class="collapse show" id="collapse<?php echo $h->id; ?>">
    <div class="card-body"> <?php echo $h->session; ?></div>
    </div>
</div>
<?php }?>

</div>	
</div>


<div role="tabpanel" id="tab3" class="tab-pane fade">
    <div class="faq_content2" id="accordion3">
                          
   <?php $data1=$this->db->order_by('id', 'desc')->get_where('scientific2', array('cat' => 'Tokens' ))->result(); ?>
<?php foreach($data1 as $h){?>
<div class="card mb-3">
    <div id="headingFive" class="card-header">
    <h6 class="mb-0"> <a aria-controls="collapse<?php echo $h->id; ?>" aria-expanded="false" href="#collapse<?php echo $h->id; ?>" data-toggle="collapse" class="collapsed"><?php echo $h->time; ?></a> </h6>
    </div>
    <div data-parent="#accordion<?php echo $h->id; ?>" aria-labelledby="heading<?php echo $h->id; ?>" class="collapse show" id="collapse<?php echo $h->id; ?>">
    <div class="card-body"> <?php echo $h->session; ?></div>
    </div>
</div>
<?php }?>

</div>	
</div>


<div role="tabpanel" id="tab4" class="tab-pane fade">
    <div class="faq_content2" id="accordion4">
    <?php $data1=$this->db->order_by('id', 'desc')->get_where('scientific2', array('cat' => 'Other' ))->result(); ?>
<?php foreach($data1 as $h){?>
<div class="card mb-3">
    <div id="headingFive" class="card-header">
    <h6 class="mb-0"> <a aria-controls="collapse<?php echo $h->id; ?>" aria-expanded="false" href="#collapse<?php echo $h->id; ?>" data-toggle="collapse" class="collapsed"><?php echo $h->time; ?></a> </h6>
    </div>
    <div data-parent="#accordion<?php echo $h->id; ?>" aria-labelledby="heading<?php echo $h->id; ?>" class="collapse show" id="collapse<?php echo $h->id; ?>">
    <div class="card-body"> <?php echo $h->session; ?></div>
    </div>
</div>
<?php }?>

</div>	
</div>

                </div>
            </div>
        </div>
    </div>
    