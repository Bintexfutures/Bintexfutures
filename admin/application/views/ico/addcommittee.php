
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
    $data1=$this->db->order_by('id', 'desc')->get_where('ico')->result();
   
    ?>
<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">View ICO Stages
           
         </div>
         <div class="panel-body">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th style="width: 3%; padding: 10px; background: #efefef">S.No</th>
                     <th>Category</th>
                     <th>Question </th>
                     <th>Answer</th>
                     <th>Actions</th>
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
                       
                        <a href="<?php echo base_url();?>ico/update/<?php echo $h->id?>"><button type="button" class="btn btn-success btn-xs btnsup">
                            Edit</button></a>
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