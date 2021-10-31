<?php
    $data1=$this->db->order_by('id', 'desc')->get_where('sponser')->result();
   
    ?>
<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">Sponser
         </div>
         <div class="panel-body">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th>S.No</th>
                     <th>crdate</th>
                     <th>heading</th>                     
                     <th>content</th>
                     <th>Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $i=1;?>
                  <?php foreach($data1 as $h){?>
                  <tr>
                     <td><?php echo $i ?></td>
                     <td><?php echo $h->crdate ?></td>
                     <td><?php echo $h->heading ?></td>
                     <td><div class="fhfh"><?php echo $h->content ?></div></td>
                     
                     <td>
                     <a class="btn btn-success btn-xs" href="<?php echo base_url();?>sponser/update/<?php echo $h->id?>">Edit</a>
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
