               

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-yellow">
            <div class="panel-heading"> Add New User
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
                    <label for="inputAddress" class="control-label">User Name
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="username" class="form-control">
                    </div>
                </div>

                <div class="form-group col-md-4 mbn">
                    <label for="inputAddress" class="control-label">User ID
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="email" class="form-control">
                    </div>
                </div>

                 


                 <div class="form-group col-md-4 mbn">
                    <label for="inputAddress" class="control-label">Password
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="password" class="form-control">
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
    $data1=$this->db->order_by('aid', 'desc')->get_where('tbl_admin_user')->result();
   
    ?>
<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">View Users 
            <div class="pull-right"><a href="<?php echo base_url() ?>committee/addmember">ADD Committee Members </a></div>
         </div>
         <div class="panel-body">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th>S.No</th>
                     <th>Date</th>
                     <th>User Name</th>                  
                     <th>E-mail</th>     
                     <th>Password</th> 
                     <th>Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $i=1;?>
                  <?php foreach($data1 as $h){?>
                  <tr>
                     <td><?php echo $i ?></td>
                     <td><?php echo $h->crdate ?></td>
                     <td><?php echo $h->username ?></td>
                     <td><?php echo $h->email ?></td>
                     <td><?php echo $h->password ?></td>
                     
                     <td>
                       
                        <a class="btn btn-success btn-xs" href="<?php echo base_url();?>users/update/<?php echo $h->aid?>">Edit</a>
                        <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>users/deletegallery/<?php echo $h->aid?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                       
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

