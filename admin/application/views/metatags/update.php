               

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-yellow">
            <div class="panel-heading">Update <?php echo @$k->home?> Meta Tags
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
                    <label for="inputAddress" class="control-label">Page Title                        
                    <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <textarea rows="5" name="title" class="form-control"><?php echo @$k->title?></textarea>
                    </div>
                </div>

                <div class="form-group col-md-12 mbn">
                    <label for="inputAddress" class="control-label">Designation
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <textarea rows="3" name="description" class="form-control"><?php echo @$k->description?></textarea>
                    </div>
                </div>

                <div class="form-group col-md-12 mbn">
                    <label for="inputAddress" class="control-label">Keyword
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <textarea rows="10" name="keyword" class="form-control"><?php echo @$k->keyword?></textarea>
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