<!-- START SECTION ABOUT US -->

<section id="about" class="small_pt small_pb">
    
    <div class="container">
        <div class="row align-items-center">
<?php $data1=$this->db->get_where('aboutus', array('id' => '2' ))->row(); ?>
   

            <div class="col-lg-6 col-md-12 col-sm-12">
            	<div class="text-center">
                	<img class="animation" data-animation="zoomIn" data-animation-delay="0.2s" src="<?php echo base_url() ?>admin/assets/aboutpage/<?php echo $data1->image ?>" alt="aboutimg3"/> 
                </div>
                <div class="chart_icon text-center">
                	<img class="animation" data-animation="zoomIn" data-animation-delay="0.2s" src="assets/images/chart_icon.png" alt="aboutimg3"/> 
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 res_md_mt_30 res_sm_mt_20">
                <div class="title_default_light title_border">

    <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s"><?php echo $data1->heading; ?></h4>
    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
        <?php echo $data1->content; ?></p>
                 
                </div>
                <a href="#!" class="btn btn-default btn-radius video animation" data-animation="fadeInUp" data-animation-delay="1s">Let's Start </a> 
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ABOUT US -->

<link href="<?php echo base_url() ?>css/timeTo.css" type="text/css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="node_modules/jquery/dist/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url() ?>css/jquery.time-to.js"></script>
 