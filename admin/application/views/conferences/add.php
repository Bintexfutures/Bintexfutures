               

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-yellow">
            <div class="panel-heading"> Add Conference
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
                    <label for="inputAddress" class="control-label">Conferences Type
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                      <select class="form-control" name="type" required="">
                        <option value="">Select Conferences</option>
                        <option value="1">Current Conferences</option>
                        <option value="2">Past Conferences</option>
                      </select>
                    </div>
                </div>

                <div class="form-group col-md-4 mbn">
                    <label for="inputAddress" class="control-label">Conferences Date
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="date" placeholder="Ex: October 27-29, 2016" class="form-control" required="">
                        <p><b>Note: Date Format  October 27-29, 2016</b></p>
                    </div>
                </div>

                <div class="form-group col-md-4 mbn">
                    <label for="inputAddress" class="control-label">Conferences Location
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="location" required=""  placeholder="Ex: Dubai, UAE" class="form-control">
                        <p><b>Note: Location Format Dubai, UAE</b></p>
                    </div>
                </div>


            


               <div class="form-group col-md-6 mbn">
                    <label for="inputAddress" class="control-label">Conferences Title
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="name" value="International Conference on" class="form-control">
                    </div>
                </div>

                 <div class="form-group col-md-6 mbn">
                    <label for="inputAddress" class="control-label">Conferences Sub Title
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="subname" class="form-control">
                    </div>
                </div>

                

                <div class="form-group col-md-6 mbn">
                    <label for="inputAddress" class="control-label">Conferences Link
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="url" class="form-control" required="">
                    </div>
                </div>

                 <div class="form-group col-md-6 mbn">
                    <label for="inputAddress" class="control-label"> Conferences Image
                        <span class='require'>*</span></label>
                    <div class="input-icon right">
                        <input type="file" placeholder="" class="form-control" 
                        name="image" required="required" 
                        accept="image/gif, image/jpeg,image/jpg,image/png" />
                        <p><b>Note: Images Size 270x98</b></p>
                    </div>
                </div>

               


<div class="form-group  col-md-12 mbn">
                    <label for="inputContent" class="control-label">Conferences  Description   </label>
                    <textarea id="inputContent" rows="10" col="15" class="form-control vbn" name="desc" ></textarea>
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
    $data1=$this->db->order_by('id', 'desc')->get_where('conferences')->result();
   
    ?>
<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">View Conferences 
         </div>
         <div class="panel-body">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th>S.No</th>
                     <th>Date</th>
                     <th>Image</th>
                     <th>Name</th>                     
                     <th>Link</th> 
                     <th>Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $i=1;?>
                  <?php foreach($data1 as $h){?>
                  <tr>
                     <td><?php echo $i ?></td>
                     <td><?php echo $h->crdate ?></td>
                     <td><img height="30" width="30" src="<?php echo base_url();?>assets/aboutpage/<?php echo $h->image ?>"></td>
                     <td><?php echo $h->name ?></td>
                     <td><?php echo $h->date ?></td>
                     
                     <td>
                       
                        <a class="btn btn-success btn-xs" href="<?php echo base_url();?>conferences/update/<?php echo $h->id?>">Edit</a>

<?php  $u= $this->session->userdata('login'); ?> 








                 <?php  $u= $this->session->userdata('login'); ?> 
<?php if($u->status=='1'){ ?>
        <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>conferences/delete/<?php echo $h->id?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
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