               

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-yellow">
            <div class="panel-heading"> Add Faq
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
                    <label for="inputAddress" class="control-label">Select
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                       

                        <select name="cat" class="form-control"  required="required">                          
                             <option value="">Select</option>
                              <option value="General">General</option>
                              <option value="Payment">Payment</option>   
                              <option value="Tokens">Tokens</option>   
                              <option value="Other">Other</option>                              
                        </select>
                    </div>
                </div>


              

                <div class="form-group col-md-6 mbn">
                    <label for="inputAddress" class="control-label">Question
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="time" class="form-control">
                    </div>
                </div>

                <div class="form-group col-md-12 mbn">
                    <label for="inputAddress" class="control-label">Answer
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                      <textarea rows="4" name="session" class="form-control"> </textarea>
                        
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
    $data1=$this->db->order_by('id', 'desc')->get_where('scientific2')->result();
   
    ?>
<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">View Faq
           
         </div>
         <div class="panel-body">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th style="width: 3%; padding: 10px; background: #efefef">S.No</th>
                     <th>Category</th>
                     <th>Question </th>
                     <th>Answer</th>
                     <th width="15%">Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $i=1;?>
                  <?php foreach($data1 as $h){?>
                  <tr>
                     <td><?php echo $i ?></td>
                     <td><?php echo $h->cat ?></td>
                     <td><?php echo $h->time ?></td>
                     <td><?php echo $h->session ?></td>
                     
                     <td>
                       
                        <a href="<?php echo base_url();?>clientfaq/update/<?php echo $h->id?>"><button type="button" class="btn btn-success btn-xs btnsup">
                            Edit</button></a>
                        <a href="<?php echo base_url();?>clientfaq/delete/<?php echo $h->id?>" 
                           onclick="return confirm('Are you sure you want to delete?')"><button type="button" class="btn btn-danger btn-xs btnsup"><i
                           class="fa fa-trash"></i>&nbsp;
                        Delete
                        </button></a>
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