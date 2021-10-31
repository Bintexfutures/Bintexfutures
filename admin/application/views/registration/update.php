               

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





              


                <div class="form-group col-md-3 mbn">
                    <label for="inputAddress" class="control-label">Category 
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                    

                       <input type="text" name="plan" class="form-control" value="<?php echo @$k->plan?>" readonly="">

                         


                    </div>
                </div>

                <div class="form-group col-md-3 mbn">
                    <label for="inputAddress" class="control-label">Early Bird Registration 
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="amount1" class="form-control" style="width: 50%; float: left;" value="<?php echo @$k->amount1?>">
                         <input type="text" name="amount2" class="form-control" style="width: 50%; float: left;" value="<?php echo @$k->amount2?>">
                    </div>
                </div>

                 <div class="form-group col-md-3 mbn">
                    <label for="inputAddress" class="control-label">Mid Term Registration

                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="amount3" class="form-control" style="width: 50%; float: left;" value="<?php echo @$k->amount3?>">
                         <input type="text" name="amount4" class="form-control" style="width: 50%; float: left;" value="<?php echo @$k->amount4?>">
                    </div>
                </div>
                
                 <div class="form-group col-md-3 mbn">
                    <label for="inputAddress" class="control-label">Final Term Registration

                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="amount5" class="form-control" style="width: 50%; float: left;" value="<?php echo @$k->amount5?>">
                         <input type="text" name="amount6" class="form-control" style="width: 50%; float: left;" value="<?php echo @$k->amount6?>">
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