<div class="page-content page-thin">
               
          <div class="header">
            <h2><strong>Edit Slider Banner</strong></h2>               

              <?php
                $id=$this->uri->segment(3);
                 $k=$this->db->get_where('tbl_banners', array('id'=>$id))->row(); ?> 

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-yellow">
            <div class="panel-heading"> Edit 
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
            
            <div class="form-body pal fdgfhgfj">

 <div class="col-md-12 form-group mbn">
                    <label for="inputUsername" class="col-md-3 control-label">Title
                        <span class='require'>*</span></label>

                     <div class="col-md-9 input-icon right">
                        <input id="inputUsername" type="text"  class="form-control"  name="info" value="<?php echo $k->info;?>" />
                    </div>
                </div>



                <div class="col-md-12 form-group mbn">
                    <label for="inputUsername" class="col-md-3 control-label">Event Date
                        <span class='require'>*</span></label>

                     <div class="col-md-9 input-icon right">
                        <input id="inputUsername" type="text"  class="form-control"  name="date"  value="<?php echo $k->title;?>" />
                    </div>
                </div>
                
                  <div class="col-md-12 form-group mbn">
                    <label for="inputUsername" class="col-md-3 control-label">Venue
                        <span class='require'>*</span></label>

                     <div class="col-md-9 input-icon right">
                        <input id="inputUsername" type="text"  class="form-control"   value="<?php echo $k->sub_title;?>" name="sub_title"  />
                    </div>
                </div>







                <div class="col-md-12 form-group mbn">
                    <label for="inputUsername" class="col-md-3 control-label">Order
                        <span class='require'>*</span></label>

                     <div class="col-md-9 input-icon right">
                        <input id="inputUsername" type="text"  class="form-control"  name="cat"  value="<?php echo $k->cat;?>" />
                    </div>
                </div>



               <div class="col-md-12 form-group mbn">
                    <label for="inputEmail" class="col-md-3 control-label">Old Image<span class='require'>*</span></label>

                    <div class="col-md-9 input-icon right">
            <img src="<?php echo base_url();?>assets/images/<?php echo $k->image;?>" height="45" width="100" />
                    </div>
                </div>



                <div class="col-md-12 form-group mbn">
                    <label for="inputEmail" class="col-md-3 control-label">New Image<span class='require'>*</span></label>

                    <div class="col-md-9 input-icon right">
                        <input type="file"  class="form-control" name="updated_image" 
                        accept="image/gif, image/jpeg,image/jpg,image/png"  />
                    </div>
                </div>


            


            </div>
            <div class="form-actions pll prl pull-right">
                <button type="submit" class="btn btn-primary" name="submit">update</button>
                &nbsp;
                
            </div>
        </form>



            </div>
        </div>


               



    </div>
    </div>
    <div class="clear-fix"></div>

