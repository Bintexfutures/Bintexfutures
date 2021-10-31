               

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-yellow">
            <div class="panel-heading">  Add Media Partners
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









                <div class="form-group col-md-4 mbn">
                    <label for="inputAddress" class="control-label">Name
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="heading" class="form-control">
                    </div>
                </div>
                
                 <div class="form-group col-md-4 mbn">
                    <label for="inputAddress" class="control-label">Website URL
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="url" class="form-control">
                    </div>
                </div>


                 <div class="form-group col-md-4 mbn">
                    <label for="inputAddress" class="control-label"> Select Image
                        <span class='require'>*</span></label>
                    <div class="input-icon right">
                        <input type="file" placeholder="" class="form-control" 
                        name="image" required="required" 
                        accept="image/gif, image/jpeg,image/jpg,image/png" />
                    </div>
                </div>


                <div class="form-group col-md-12 mbn">
                    <label for="inputContent" class="control-label">Description</label>
                    <textarea id="inputContent" rows="10" col="15" class="form-control vbn" name="description" ></textarea>
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


<?php
    $data1=$this->db->order_by('id', 'desc')->get_where('media')->result();
   
    ?>
<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">View Scientific Session </div>
         <div class="panel-body">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th>S.No</th>
                     <th>Image</th>
                     <th>Heading</th>                     
                     <th>Description</th> 
                     <th>Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $i=1;?>
                  <?php foreach($data1 as $h){?>
                  <tr>
                     <td><?php echo $i ?></td>
                     <td><img height="50" width="50" src="<?php echo base_url();?>assets/aboutpage/<?php echo $h->image ?>"></td>
                     <td><?php echo $h->heading ?></td>
                     <td><div class="fhfh"><?php echo $h->description ?></div></td>
                     
                     <td>                       
                        <a class="btn btn-success btn-xs" href="<?php echo base_url();?>media/update/<?php echo $h->id?>">Edit</a>
          <?php  $u= $this->session->userdata('login'); ?> 
<?php if($u->status=='1'){ ?>

                 <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>media/delete/<?php echo $h->id?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                
                  <?php }?>
                         
                     </td>
                  </tr>
                  <?php $i++;?>
                  <?php }?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>

