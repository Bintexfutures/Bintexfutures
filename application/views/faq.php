<!-- START SECTION FAQ -->
<section class="small_pb small_pt">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-8 col-md-12 offset-lg-2">
              <div class="title_default_light text-center">
                <h4 class="animation sup-head" data-animation="fadeInUp" data-animation-delay="0.2s">Have Any Questions?</h4>
                <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Frequently asked questions (FAQ) or Questions and Answers (Q&A), are listed questions and answers, all supposed to be commonly asked in some context</p>
              </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-lg-12 col-md-12">
            	<div class="tab_content">
                    <ul class="nav nav-pills tab_nav_s6 animation" id="pills-tab" role="tablist" data-animation="fadeInUp" data-animation-delay="0.5s">
                      <li class="nav-item animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                        <a class="active" data-toggle="tab" href="#tab1">General</a>
                      </li>
                      <!-- <li class="nav-item animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                        <a data-toggle="tab" href="#tab2">Pre-ICO & ICC </a>
                      </li>
                      <li class="nav-item animation" data-animation="fadeInUp" data-animation-delay="0.7s">
                        <a data-toggle="tab" href="#tab3">ICO Tokens</a>
                      </li> -->
                      <li class="nav-item animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                        <a data-toggle="tab" href="#tab4">Legal</a>
                      </li>
                    </ul>
                    <div class="tab-content half_tab">
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
<div class="row">

<?php $data1=$this->db->order_by('id', 'desc')->get_where('scientific1', array('cat' => 'General' ))->result(); ?>
<?php foreach($data1 as $h){?>

<div class="col-md-6" style="margin-bottom: 15px;">
    <div id="accordion1" class="faq_content2">
    <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
    <div class="card-header" id="heading<?php echo $h->id; ?>">
    <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapse<?php echo $h->id; ?>" aria-expanded="false" aria-controls="collapse<?php echo $h->id; ?>"><?php echo $h->time ?></a> </h6>
    </div>
    <div id="collapse<?php echo $h->id; ?>" class="collapse" aria-labelledby="heading<?php echo $h->id; ?>" data-parent="#accordion1">
    <div class="card-body"> <?php echo $h->session ?></div>
    </div>
    </div>
</div>
</div>
 

<?php }?>

                          	</div>
                        </div>

<div class="tab-pane fade" id="tab2" role="tabpanel">
    <div class="row">

<?php $data1=$this->db->order_by('id', 'desc')->get_where('scientific1', array('cat' => 'Pre-ICO & ICC' ))->result(); ?>
<?php foreach($data1 as $h){?>

<div class="col-md-6" style="margin-bottom: 15px;">
    <div id="accordion1" class="faq_content2">
    <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
    <div class="card-header" id="heading<?php echo $h->id; ?>">
    <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapse<?php echo $h->id; ?>" aria-expanded="false" aria-controls="collapse<?php echo $h->id; ?>"><?php echo $h->time ?></a> </h6>
    </div>
    <div id="collapse<?php echo $h->id; ?>" class="collapse" aria-labelledby="heading<?php echo $h->id; ?>" data-parent="#accordion1">
    <div class="card-body"> <?php echo $h->session ?></div>
    </div>
    </div>
</div>
</div>
 

<?php }?>

    </div>
</div>

<div class="tab-pane fade" id="tab3" role="tabpanel">
    <div class="row">

<?php $data1=$this->db->order_by('id', 'desc')->get_where('scientific1', array('cat' => 'ICO Tokens' ))->result(); ?>
<?php foreach($data1 as $h){?>

<div class="col-md-6" style="margin-bottom: 15px;">
    <div id="accordion1" class="faq_content2">
    <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
    <div class="card-header" id="heading<?php echo $h->id; ?>">
    <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapse<?php echo $h->id; ?>" aria-expanded="false" aria-controls="collapse<?php echo $h->id; ?>"><?php echo $h->time ?></a> </h6>
    </div>
    <div id="collapse<?php echo $h->id; ?>" class="collapse" aria-labelledby="heading<?php echo $h->id; ?>" data-parent="#accordion1">
    <div class="card-body"> <?php echo $h->session ?></div>
    </div>
    </div>
</div>
</div>
 

<?php }?>
</div>
</div>

<div class="tab-pane fade" id="tab4" role="tabpanel">
    <div class="row">
     <?php $data1=$this->db->order_by('id', 'desc')->get_where('scientific1', array('cat' => 'Legal' ))->result(); ?>
<?php foreach($data1 as $h){?>

<div class="col-md-6" style="margin-bottom: 15px;">
    <div id="accordion1" class="faq_content2">
    <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
    <div class="card-header" id="heading<?php echo $h->id; ?>">
    <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapse<?php echo $h->id; ?>" aria-expanded="false" aria-controls="collapse<?php echo $h->id; ?>"><?php echo $h->time ?></a> </h6>
    </div>
    <div id="collapse<?php echo $h->id; ?>" class="collapse" aria-labelledby="heading<?php echo $h->id; ?>" data-parent="#accordion1">
    <div class="card-body"> <?php echo $h->session ?></div>
    </div>
    </div>
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
</section>
<!-- END SECTION FAQ -->


<link href="<?php echo base_url() ?>css/timeTo.css" type="text/css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="node_modules/jquery/dist/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url() ?>css/jquery.time-to.js"></script>