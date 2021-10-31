               

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-yellow">
            <div class="panel-heading">Update Logo
                <div class="pull-right"></div>
            </div>
             <div class="form-group mbn">
                    <?php if ($this->session->flashdata('msg')):?>
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong style="color:green;"><?php echo $this->session->flashdata('msg');?></strong>
                        </div>
                        <?php endif;?>

                            <?php if ($this->session->flashdata('error')):?>
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong style="color:red;"><?php echo $this->session->flashdata('error');?></strong>
                                </div>
                                <?php endif;?>

<?php if ($this->session->flashdata('del')):?>
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong style="color:green;"><?php echo $this->session->flashdata('del');?></strong>
                                </div>
                                <?php endif;?>


                </div>

            <div class="panel-body pan">

 
       
                <form  method="post" enctype="multipart/form-data">
            
            <div class="form-body pal new-form">







               


              


                <div class="form-group mbn col-md-6">
                    <label for="inputAddress" class="control-label">TITLE
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" placeholder="" class="form-control" name="heading" required="required" value="<?php echo @$k->heading?>" />
                    </div>
                </div>

                
                
                <div class="form-group mbn col-md-6">
                    <label for="inputAddress" class="control-label"> Token Sales Date
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" placeholder="" class="form-control" name="eventdate" required="required" value="<?php echo @$k->eventdate?>" />                        
                               <p><b>Note Date Format 2019-10-25 (Year-Month-Date)</b></p>
                    </div>
                </div>





 <div class="form-group  col-md-6 mbn">
  
                    <label for="inputAddress" class="control-label"> Select Image
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="file" placeholder="" name="image" 
                        accept="image/gif, image/jpeg,image/jpg,image/png" />
                    </div>
 </div>



 <div class="form-group col-md-6  mbn">

  <label for="Product Description" class="col-md-3 control-label"  >Old Image
                        <span class="require">*</span></label>
                        <div class="col-md-9">
                        <?php 
                       $bb="assets/aboutpage/".$k->image;
             if(!file_exists ($bb)) { ?>
                 <img src="<?php echo base_url();?>assets/noimage/noimage.jpg" width="100">
                  <?php } else {?>
 

  <img   width="100" 
     src="<?php echo base_url();?>assets/aboutpage/<?php echo $k->image;?>">
                  <?php }?>
</div>
</div>






               



              












            </div>
            <div class="form-actions pll prl pull-right">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                &nbsp;
                
            </div>
        </form>



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