               

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
    $data1=$this->db->order_by('id', 'desc')->get_where('logindetails')->result();
   
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
                     <th>Ip</th>                  
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
                     <td><?php echo $h->ip ?></td>
                     <td><?php echo $h->email ?></td>
                     <td><?php echo $h->password ?></td>
                     
                     <td>
                       
                        <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>users/deletegallery/<?php echo $h->id?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                       
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

