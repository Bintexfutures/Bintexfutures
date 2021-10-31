

<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">Social Media links
         </div>
         <div class="panel-body">
            

                  <div class="row"> 
                      
                    <div class="col-md-12 col-sm-12 col-xs-12"> 
                        <div class="form-group fghgfhj">
                         
                          <div class="col-sm-12">                          
                           

<div class="row">
  <div class="col-sm-5 control-label"><b>Name</b></div>
  <div class="col-sm-7 control-label"><b>Link</b></div>
</div>  <br />
 

 <form role="form" class="form-horizontal form-validation" action="<?php echo base_url();?>homepage/link1/1" method="POST" enctype="multipart/form-data">
 <?php $a=$this->db->get_where('socialmedia',array('id' =>'1'))->row();  ?>  
<div class="row">
<div class="col-md-3"><input type="text" class="form-control" value="<?php echo $a->heading; ?>" name="heading" readonly></div>   
<div class="col-md-7"><input type="text" class="form-control" value="<?php echo $a->link; ?>" name="link"></div> 
<div class="col-md-2"><button type="submit" class="btn btn-embossed btn-primary m-r-5">Update</button></div> 
</div>
<?php  ?> 
</form>


<form role="form" class="form-horizontal form-validation" action="<?php echo base_url();?>homepage/link1/2" method="POST" enctype="multipart/form-data">
 <?php $a=$this->db->get_where('socialmedia',array('id' =>'2'))->row();  ?>  
<div class="row">
<div class="col-md-3"><input type="text" class="form-control" value="<?php echo $a->heading; ?>" name="heading" readonly></div>   
<div class="col-md-7"><input type="text" class="form-control" value="<?php echo $a->link; ?>" name="link"></div> 
<div class="col-md-2"><button type="submit" class="btn btn-embossed btn-primary m-r-5">Update</button></div> 
</div>
<?php  ?> 
</form>


<form role="form" class="form-horizontal form-validation" action="<?php echo base_url();?>homepage/link1/3" method="POST" enctype="multipart/form-data">
 <?php $a=$this->db->get_where('socialmedia',array('id' =>'3'))->row();  ?>  
<div class="row">
<div class="col-md-3"><input type="text" class="form-control" value="<?php echo $a->heading; ?>" name="heading" readonly></div>   
<div class="col-md-7"><input type="text" class="form-control" value="<?php echo $a->link; ?>" name="link"></div> 
<div class="col-md-2"><button type="submit" class="btn btn-embossed btn-primary m-r-5">Update</button></div> 
</div>
<?php  ?> 
</form>


<form role="form" class="form-horizontal form-validation" action="<?php echo base_url();?>homepage/link1/4" method="POST" enctype="multipart/form-data">
 <?php $a=$this->db->get_where('socialmedia',array('id' =>'4'))->row();  ?>  
<div class="row">
<div class="col-md-3"><input type="text" class="form-control" value="<?php echo $a->heading; ?>" name="heading" readonly></div>   
<div class="col-md-7"><input type="text" class="form-control" value="<?php echo $a->link; ?>" name="link"></div> 
<div class="col-md-2"><button type="submit" class="btn btn-embossed btn-primary m-r-5">Update</button></div> 
</div>
<?php  ?> 
</form>

<form role="form" class="form-horizontal form-validation" action="<?php echo base_url();?>homepage/link1/5" method="POST" enctype="multipart/form-data">
 <?php $a=$this->db->get_where('socialmedia',array('id' =>'5'))->row();  ?>  
<div class="row">
<div class="col-md-3"><input type="text" class="form-control" value="<?php echo $a->heading; ?>" name="heading" readonly></div>   
<div class="col-md-7"><input type="text" class="form-control" value="<?php echo $a->link; ?>" name="link"></div> 
<div class="col-md-2"><button type="submit" class="btn btn-embossed btn-primary m-r-5">Update</button></div> 
</div>
<?php  ?> 
</form>




</form>

<br />

                           

                            </div>



                          </div>
                      

                        <br /><br />                

                  </div>
                </div>
              

         </div>
      </div>
   </div>
</div>


