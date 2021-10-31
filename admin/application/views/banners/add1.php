<div class="page-content page-thin">
               
          <div class="header">
            <h2><strong>Add Slider Banner</strong></h2>               

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-yellow">
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


                <div class="col-md-6 form-group mbn">
                    <label for="inputUsername" class="col-md-3 control-label">Title
                        <span class='require'>*</span></label>

                     <div class="col-md-9 input-icon right">
                        <input id="inputUsername" type="text"  class="form-control"  name="info" />
                    </div>
                </div>




                <div class="col-md-6 form-group mbn">
                    <label for="inputUsername" class="col-md-3 control-label">Date
                        <span class='require'>*</span></label>

                     <div class="col-md-9 input-icon right">
                        <input id="inputUsername" type="text"  class="form-control"  name="title" />
                    </div>
                </div>


               <div class="col-md-6 form-group mbn">
                    <label for="inputUsername" class="col-md-3 control-label">Venue
                        <span class='require'>*</span></label>

                     <div class="col-md-9 input-icon right">
                        <input id="inputUsername" type="text"  class="form-control"  name="sub_title"  />
                    </div>
                </div>


               <div class="col-md-6 form-group mbn">
                    <label for="inputEmail" class="col-md-3 control-label">Image<span class='require'>*</span></label>

                    <div class="col-md-9 input-icon right">
                        <input type="file"  class="form-control" name="image" 
                        accept="image/gif, image/jpeg,image/jpg,image/png" required="required" />
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



<div class="row">
                    <div class="col-lg-12">


                        <div class="panel panel-yellow">
                            <div class="panel-heading">View Flyer Images</div>



                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                          <th>S.No</th>
                            
                           <th>title</th>
                            <th>Date</th>
                            <th>venue</th>
                          
                           <th>Image</th>
                            
                            
                           
                           
                           <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
<?php 
$i=1;
$gt=$this->db->get_where('tbl_banners',array('status'=>'1'))->result();
foreach ($gt as $tg) { ?>
    <tr>
        <td><?php echo @$i;?></td>
        <td><?php echo @$tg->info;?></td>
        <td><?php echo  @$tg->title;?></td>
        <td><?php echo  @$tg->sub_title;?></td>
        <td><?php  
                        $bb="assets/images/".$tg->image;
             if(!file_exists ($bb)) { ?>
                 <img src="<?php echo base_url();?>assets/noimage/noimage.jpg" height="50" width="100">
                  <?php } else { ?>
 

  <img src="<?php echo base_url();?>assets/images/<?php echo $tg->image;?>" height="50" width="100">
                  <?php } ?></td>


                      
    <td>


       <a href="<?php echo base_url();?>banners/update/<?php echo $tg->id?>" class="btn btn-success btn-xs"><i>Edit</i></a>

               
<?php if($tg->status==1){?> <a href="<?php echo base_url('')?>banners/inactive/<?php echo $tg->id;?>" class="btn btn-info btn-xs"><i  onclick="return confirm('Are you sure you want to  Inactive Banner?')" title="Inactive"> Active </i></a>
<?php }else { ?>
<a href="<?php echo base_url('')?>banners/active/<?php echo $tg->id;?>" class="btn btn-warning btn-xs"><i onclick="return confirm('Are you sure you want to ActiveBanner?')" title="Active"> Inactive </i></a>
<?php } ?>


                              

<a href="<?php echo base_url();?>banners/delete/<?php echo $tg->id;?>" class="btn btn-danger btn-xs">
<i onclick="return confirm('Are you sure you want to Delete Banner?')" title="Delete"> Delete </i></a>

                                    </td>  

    </tr>
<?php $i++;} ?>
                             

                             
                           </tbody>
                                </table>
                            </div>
                        </div>
                       
                  
                        </div>  
                 
                </div> 
               



    </div>
    </div>
    <div class="clear-fix"></div>

