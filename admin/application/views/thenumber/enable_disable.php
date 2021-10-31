               

<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">Update  Enable Disable 
         </div>
         <div class="panel-body">
            
             <div class="row"> 
                      
                    <div class="col-md-12 col-sm-12 col-xs-12"> 
                        <div class="form-group fghgfhj">
                         
                          <div class="col-sm-12">                          
                           

<div class="row">
  <div class="col-sm-10 control-label"><b>Page Name</b></div>
  <div class="col-sm-2 control-label"><b>Update</b></div>
</div>  <br />
 

 <form role="form" class="form-horizontal form-validation" action="<?php echo base_url();?>homepage/link/1" method="POST" enctype="multipart/form-data">
 <?php $a=$this->db->get_where('enable_disable',array('id' =>'1'))->row();  ?>  
<div class="row">
<div class="col-md-10"><input type="text" class="form-control" value="<?php echo $a->heading; ?>" name="heading"></div> 
<div class="col-md-2">

               
<?php if($a->status==1){?> <a href="<?php echo base_url('')?>committee/inactive3/<?php echo $a->id;?>" class="btn btn-info btn-sm"><i  onclick="return confirm('Are you sure you want to  Disable?')" title="Inactive">  Enable  </i></a>
<?php }else { ?>
<a href="<?php echo base_url('')?>committee/active3/<?php echo $a->id;?>" class="btn btn-primary btn-sm"><i onclick="return confirm('Are you sure you want to Enable?')" title="Active"> Disable </i></a>
<?php } ?></div> 


</div>
<?php  ?> 
</form>


 <form role="form" class="form-horizontal form-validation" action="<?php echo base_url();?>homepage/link/1" method="POST" enctype="multipart/form-data">
 <?php $a=$this->db->get_where('enable_disable',array('id' =>'2'))->row();  ?>  
<div class="row">
<div class="col-md-10"><input type="text" class="form-control" value="<?php echo $a->heading; ?>" name="heading"></div> 
<div class="col-md-2"><?php if($a->status==1){?> <a href="<?php echo base_url('')?>committee/inactive3/<?php echo $a->id;?>" class="btn btn-info btn-sm"><i  onclick="return confirm('Are you sure you want to  Disable?')" title="Inactive">  Enable  </i></a>
<?php }else { ?>
<a href="<?php echo base_url('')?>committee/active3/<?php echo $a->id;?>" class="btn btn-primary btn-sm"><i onclick="return confirm('Are you sure you want to Enable?')" title="Active"> Disable </i></a>
<?php } ?></div> 
</div>
<?php  ?> 
</form>


 <form role="form" class="form-horizontal form-validation" action="<?php echo base_url();?>homepage/link/1" method="POST" enctype="multipart/form-data">
 <?php $a=$this->db->get_where('enable_disable',array('id' =>'3'))->row();  ?>  
<div class="row">
<div class="col-md-10"><input type="text" class="form-control" value="<?php echo $a->heading; ?>" name="heading"></div> 
<div class="col-md-2"><?php if($a->status==1){?> <a href="<?php echo base_url('')?>committee/inactive3/<?php echo $a->id;?>" class="btn btn-info btn-sm"><i  onclick="return confirm('Are you sure you want to  Disable?')" title="Inactive">  Enable  </i></a>
<?php }else { ?>
<a href="<?php echo base_url('')?>committee/active3/<?php echo $a->id;?>" class="btn btn-primary btn-sm"><i onclick="return confirm('Are you sure you want to Enable?')" title="Active"> Disable </i></a>
<?php } ?></div> 
</div>
<?php  ?> 
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






    <div class="clear-fix"></div>

<script type="text/javascript">
  function jou(value)
  {
   
    $.ajax({
        url:"<?php echo base_url();?>journals/ajaxEditor/"+value,
        method:"GET",
        success: function(data) {
         
    $("#res").html(data);
   
      },
      error: function(err) {
       console.log(err);
      }
    })

  }
</script>