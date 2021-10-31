
<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">Id card
            <div class="pull-right"></div>
         </div>
       <div class="panel-body">
             <div class="row">
      	<?php $id=$this->uri->segment(3) ?>
      	
      	
      	
      	
      	
      	
           <?php $res = $this->db->get_where('kyc',array('customer_id'=>$id))->row(); ?>
           
           
           
           
           <?php if($res->i1){ ?>
            
                 <div class="col-md-3">
                     <img height="80"  src="<?php echo base_url();?>../assets/passport/<?php echo @$res->i1 ?>"><br />
                     <a>Id card Front Image</a>
                 </div>
                 
           
           <?php } else { ?>
                 <div class="col-md-4">
                     <img height="80"  src="https://www.dakshashop.com/media/avatar/noimage.png"><br />
                     <a>Id card Front Image</a>
                 </div>
           
           <?php } ?>
           
           <?php $res = $this->db->get_where('kyc',array('customer_id'=>$id))->row(); ?>
           <?php if($res->i2){ ?>
                  <div class="col-md-3">
                      <img height="80" src="<?php echo base_url();?>../assets/passport/<?php echo @$res->i2 ?>"><br />
                     <a>Id card Back Image</a>
                  </div>
           
           <?php } else { ?>
           
                 <div class="col-md-4">
                     <img height="80"  src="https://www.dakshashop.com/media/avatar/noimage.png"><br />
                     <a>Id card Front Image</a>
                 </div>
           
           <?php } ?>
           
             </div>
         </div>
        
      </div>
   </div>
</div>
<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">Passport
            <div class="pull-right"></div>
         </div>
       
      
          <div class="panel-body">
             <div class="row">
      	<?php $id=$this->uri->segment(3) ?>
      		
           <?php $res = $this->db->get_where('kyc',array('customer_id'=>$id))->row(); ?>
           <?php if($res->p1){ ?>
            
                 <div class="col-md-3">
                     <img height="80"  src="<?php echo base_url();?>../assets/passport/<?php echo @$res->p1 ?>"><br />
                     <a>Passport Front</a>
                 </div>
                 
           
           <?php } else { ?>
                 <div class="col-md-4">
                     <img height="80"  src="https://www.dakshashop.com/media/avatar/noimage.png"><br />
                     <a>Passport Front</a>
                 </div>
           
           <?php } ?>
           
           <?php $res = $this->db->get_where('kyc',array('customer_id'=>$id))->row(); ?>
           <?php if($res->p2){ ?>
                  <div class="col-md-3">
                      <img height="80" src="<?php echo base_url();?>../assets/passport/<?php echo @$res->p2 ?>"><br />
                     <a>Passport Back</a>
                  </div>
           
           <?php } else { ?>
           
                 <div class="col-md-4">
                     <img height="80"  src="https://www.dakshashop.com/media/avatar/noimage.png"><br />
                     <a>Passport Back</a>
                 </div>
           
           <?php } ?>
           
             </div>
         </div>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">Driving License
            <div class="pull-right"></div>
         </div>
         
         
         <div class="panel-body">
             <div class="row">
      	<?php $id=$this->uri->segment(3) ?>
      		
           <?php $res = $this->db->get_where('kyc',array('customer_id'=>$id))->row(); ?>
           <?php if($res->d1){ ?>
            
                 <div class="col-md-3">
                     <img height="80"  src="<?php echo base_url();?>../assets/passport/<?php echo @$res->d1 ?>"><br />
                     <a>Driving License Front Image</a>
                 </div>
                 
           
           <?php } else { ?>
                 <div class="col-md-4">
                     <img height="80"  src="https://www.dakshashop.com/media/avatar/noimage.png"><br />
                     <a>Driving License Front Image</a></a>
                 </div>
           
           <?php } ?>
           
           <?php $res = $this->db->get_where('kyc',array('customer_id'=>$id))->row(); ?>
           <?php if($res->d2){ ?>
                  <div class="col-md-3">
                      <img height="80" src="<?php echo base_url();?>../assets/passport/<?php echo @$res->d2 ?>"><br />
                     <a>Driving License back Image</a>
                  </div>
           
           <?php } else { ?>
           
                 <div class="col-md-4">
                     <img height="80"  src="https://www.dakshashop.com/media/avatar/noimage.png"><br />
                     <a>Driving License Back Image</a></a>
                 </div>
           
           <?php } ?>
           
             </div>
         </div>
      </div>
   </div>
</div>