               

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-yellow">
            <div class="panel-heading"> Add Clinet Logos
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
                    <label for="inputAddress" class="control-label"> Select Image
                        <span class='require'>*</span></label>
                    <div class="input-icon right">
                        <input type="file" placeholder="" class="form-control" 
                        name="image" required="required" 
                        accept="image/gif, image/jpeg,image/jpg,image/png" />
                    </div>
        </div>

        <div class="form-group col-md-6 mbn">
                    <label for="inputAddress" class="control-label"> Image Alt Name
                        <span class='require'>*</span></label>
                    <div class="input-icon right">
                        <input type="text" placeholder="" class="form-control" 
                        name="category" required="required" />
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


<?php
    $data1=$this->db->order_by('id', 'desc')->get_where('gallery')->result();
   
    ?>
<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">View  Clinet Logos</div>
         <div class="panel-body">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th>S.No</th>
                     <th>crdate</th>
                     <th>Image</th>
                     <th>Logo Name</th>
                     <th>Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $i=1;?>
                  <?php foreach($data1 as $h){?>
                  <tr>
                     <td><?php echo $i ?></td>
                     <td><?php echo $h->crdate ?></td>
                     <td><img width="40" src="<?php echo base_url() ?>assets/gallery/<?php echo $h->image ?>"></td>
                     <td><?php echo $h->category ?></td>
                     
                     <td>
                       
                    
         

         <?php  $u= $this->session->userdata('login'); ?> 
<?php if($u->status=='1'){ ?>


                        <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>gallery/active/<?php echo $h->id?>" 
                           onclick="return confirm('Are you sure you want to  delete gallery?')">Delete</a>
                        <?php } ?>
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
