               

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-yellow">
            <div class="panel-heading"> Add Courses
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
                        <input type="text" placeholder="" class="form-control" name="title" required="required"/>
                    </div>
                </div>

                 <div class="form-group mbn">
                    <label for="inputAddress" class="control-label"> Select Image
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="file" placeholder="" class="form-control" 
                        name="image" required="required" 
                        accept="image/gif, image/jpeg,image/jpg,image/png" />
                    </div>
                </div>





                   





                 

 



                <div class="form-group mbn">
                    <label for="inputAddress" class="control-label"> URL
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" placeholder="" class="form-control" name="url" required="required"/>
                         <span style="margin-left: 150px;line-height: 10px;color:#ccc">Note:Add '-' between the words</span>
                               
                    </div>
                </div>

                    <div class="form-group mbn">
                    <label for="inputContent" class="control-label">Research Articles   </label>
                    <textarea id="inputContent" rows="10" col="15" class="form-control vbn" name="articles" ></textarea>
                </div>


               


                <div class="form-group mbn">
                    <label for="inputAddress" class="control-label">SEO_Title
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" placeholder="" class="form-control" name="seo_title" />

                    </div>
                </div>


                <div class="form-group mbn">
                    <label for="inputAddress" class="control-label">SEO_Keywords
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" placeholder="" class="form-control" name="seo_keywords" />

                    </div>
                </div>

                
               <div class="form-group mbn">
                    <label for="inputAddress" class="control-label">SEO_Description
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        
                        <textarea id="inputContent" rows="5" class="form-control" name="seo_description" ></textarea>

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