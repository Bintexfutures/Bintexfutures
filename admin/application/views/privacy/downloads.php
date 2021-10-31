




       



<?php
    $data1=$this->db->order_by('id', 'desc')->get_where('privacy')->result();
   
    ?>
<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">Update
         </div>
         <div class="panel-body">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th>S.No</th>
                     <th>crdate</th>
                     <th>Page Name</th>                     
                     <th>Url</th>
                     <th>Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $i=1;?>
                  <?php foreach($data1 as $h){?>
                  <tr>
                     <td><?php echo $i ?></td>
                     <td><?php echo $h->crdate ?></td>
                     <td><?php echo $h->name ?></td>
                     <td><?php echo $h->image ?></td>
                     
                     <td>
                        <a class="btn btn-success btn-xs" href="<?php echo base_url();?>privacy/updateabout/<?php echo $h->id?>">Edit</a>
                       
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

