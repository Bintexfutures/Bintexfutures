               

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-yellow">
            <div class="panel-heading"> Add Road map
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


                <div class="form-group col-md-2 mbn">
                    <label for="inputAddress" class="control-label">Date
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="cat" class="form-control">
                    </div>
                </div>
                
                
                <div class="form-group col-md-6 mbn">
                    <label for="inputAddress" class="control-label">Icon
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="name" class="form-control">
                    </div>
                </div>

                <div class="form-group col-md-4 mbn">
                    <label for="inputAddress" class="control-label">Designation
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="description" class="form-control">
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
    
    
    <?php
    $data1=$this->db->order_by('id', 'desc')->get_where('roadmap')->result();
   
    ?>
<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">Roadmap
         </div>
         <div class="panel-body">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th>S.No</th>
                     <th>Date</th>
                     <th>Name</th>                     
                     <th>Description</th>      
                     <th>Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $i=1;?>
                  <?php foreach($data1 as $h){?>
                  <tr>
                     <td><?php echo $i ?></td>
                     <td><?php echo $h->cat ?></td>
                     <td><?php echo $h->name ?></td>
                     <td><?php echo $h->description ?></td>
                     
                     <td>
                       
                        <a class="btn btn-success btn-xs" href="<?php echo base_url();?>roadmap/update/<?php echo $h->id?>">Edit</a>
                

                 <?php  $u= $this->session->userdata('login'); ?> 
<?php if($u->status=='1'){ ?>

        <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>roadmap/delete/<?php echo $h->id?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
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