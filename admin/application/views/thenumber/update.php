               

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-yellow">
            <div class="panel-heading">Update 
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




                <div class="form-group col-md-12 mbn">
                    <label for="inputAddress" class="control-label">Heading
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="name" class="form-control" value="<?php echo @$k->name?>">
                    </div>
                </div>
                
                <div class="form-group col-md-3 mbn">
                    <label for="inputAddress" class="control-label">Counter Date
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="description" class="form-control" value="<?php echo @$k->description?>">
                    </div>
                </div>
                
                
                <div class="form-group col-md-3 mbn">
                    <label for="inputAddress" class="control-label">Token Sale Ends Date
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="pinterest" class="form-control"  value="<?php echo @$k->pinterest?>">
                    </div>
                </div>
                
                  <div class="form-group col-md-3 mbn">
                    <label for="inputAddress" class="control-label">Token Values
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="number1" class="form-control" value="<?php echo @$k->number1?>">
                    </div>
                </div>
                
                    <input type="hidden" placeholder="" class="form-control" 
                        name="image" accept="image/gif, image/jpeg,image/jpg,image/png" />
                
                
                <div class="form-group col-md-3 mbn">
                    <label for="inputAddress" class="control-label">Token Values
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="number2" class="form-control"  value="<?php echo @$k->number2?>">
                    </div>
                </div>

                <div class="form-group col-md-12 mbn">
                    <label for="inputAddress" class="control-label">Designation
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="designation" class="form-control" value="<?php echo @$k->designation?>">
                    </div>
                </div>
                
                
              <div class="row"></div>
                
                 <div class="form-group col-md-3 mbn">
                    <label for="inputAddress" class="control-label">ICO Rating Review 1
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="facebook" class="form-control" value="<?php echo @$k->facebook?>">
                    </div>
                </div>

                <div class="form-group col-md-3 mbn">
                    <label for="inputAddress" class="control-label">ICO Rating Review 2
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="twitter" class="form-control" value="<?php echo @$k->twitter?>">
                    </div>
                </div>

                <div class="form-group col-md-3 mbn">
                    <label for="inputAddress" class="control-label">ICO Rating Review 3
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="linkedin" class="form-control" value="<?php echo @$k->linkedin?>">
                    </div>
                </div>
                
                <div class="form-group col-md-3 mbn"></div>
                
                 <div class="form-group col-md-3 mbn">
                    <label for="inputAddress" class="control-label">Twitter
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="san1" class="form-control" value="<?php echo @$k->san1?>">
                    </div>
                </div>
                
                 <div class="form-group col-md-3 mbn">
                    <label for="inputAddress" class="control-label">Telegram
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="san2" class="form-control" value="<?php echo @$k->san2?>">
                    </div>
                </div>
                
                 <div class="form-group col-md-3 mbn">
                    <label for="inputAddress" class="control-label">Youtube
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="san3" class="form-control" value="<?php echo @$k->san3?>">
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