               

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-yellow">
            <div class="panel-heading">Update about Page
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
            
            <div class="form-body pal">







               


              


                <div class="form-group mbn">
                    <label for="inputAddress" class="control-label">TITLE
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                       <select name="category" class="form-control "  required="required">
                          
                             
                              <option <?php if($k->category=='MES Event Photos') echo "selected"; ?> >MES Event Photos</option>
                              <option <?php if($k->category=='Job Fair Photos') echo "selected"; ?> >Mytas Job Fair Photos</option>
                              <option <?php if($k->category=='Image Gallery') echo "selected"; ?> >Image Gallery</option>
                              
                           </select>
                    </div>
                </div>





                   




<div class="form-group  mbn">

  <label for="Product Description" class="col-md-3 control-label"  >OldImage
                        <span class="require">*</span></label>
                        <div class="col-md-9">
                        <?php 
                       $bb="assets/gallery/".$k->image;
             if(!file_exists ($bb)) { ?>
                 <img src="<?php echo base_url();?>assets/noimage/noimage.jpg" height="75" width="100">
                  <?php } else {?>
 

  <img   height="50" width="50" 
     src="<?php echo base_url();?>assets/gallery/<?php echo $k->image;?>">
                  <?php }?>
</div>
                 

 <div class="form-group mbn">

  
                    <label for="inputAddress" class="control-label"> Select Image
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="file" placeholder="" class="form-control" 
                        name="image" 
                        accept="image/gif, image/jpeg,image/jpg,image/png" />
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