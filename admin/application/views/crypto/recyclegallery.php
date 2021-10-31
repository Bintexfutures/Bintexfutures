               



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
    $data1=$this->db->order_by('id', 'desc')->get_where('gallery', array('status'=>'0'))->result();
   
    ?>
<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">View Gallery</div>
         <div class="panel-body">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th>S.No</th>
                     <th>crdate</th>
                     <th>Image Name</th>
                     <th>Image</th>
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


                        <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>gallery/inactive/<?php echo $h->id?>" 
                           onclick="return confirm('Are you sure you want to  Restore gallery?')">Restore</a>
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

