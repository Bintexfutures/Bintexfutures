               

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-yellow">
            <div class="panel-heading"> Add Committee Members
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







               


              


                <div class="form-group col-md-6 mbn">
                    <label for="inputAddress" class="control-label">Member Type
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                       

                        <select name="cat" class="form-control"  required="required">                          
                             <option value="">Select</option>
                              <option value="1">Organizing Committee Members </option>
                              <option value="2">Speakers</option>                              
                        </select>
                    </div>
                </div>


                <div class="form-group col-md-6 mbn">
                    <label for="inputAddress" class="control-label">Member Name
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="name" class="form-control">
                    </div>
                </div>

                <div class="form-group col-md-6 mbn">
                    <label for="inputAddress" class="control-label">Designation
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="designation" class="form-control">
                    </div>
                </div>

                 <div class="form-group col-md-6 mbn">
                    <label for="inputAddress" class="control-label"> Select Image
                        <span class='require'>*</span></label>
                    <div class="input-icon right">
                        <input type="file" placeholder="" class="form-control" 
                        name="image" required="required" 
                        accept="image/gif, image/jpeg,image/jpg,image/png" />
                    </div>
                </div>

                <div class="form-group col-md-6 mbn">
                    <label for="inputAddress" class="control-label">Biography
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <textarea rows="3" name="biography" class="form-control"></textarea>
                    </div>
                </div>

                <div class="form-group col-md-6 mbn">
                    <label for="inputAddress" class="control-label">Reaserch Interst
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <textarea rows="3" name="reaserchinterst" class="form-control"></textarea>
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