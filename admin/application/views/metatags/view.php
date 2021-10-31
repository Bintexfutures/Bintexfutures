<?php
    $data1=$this->db->order_by('id', 'desc')->get_where('metatags')->result();
   
    ?>
<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">View Meta Tags
         </div>
         <div class="panel-body">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th>S.No</th>
                     <th>Page Name</th>                     
                     <th>Title</th>             
                    <!--  <th>description</th>             
                    <th>keyword</th> -->
                     <th>Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $i=1;?>
                  <?php foreach($data1 as $h){?>
                  <tr>
                     <td><?php echo $i ?></td>
                     <td><?php echo $h->home ?></td>
                     <td><div class="fhfh2"><?php echo $h->title ?></div></td>
                   <!--  <td><div class="fhfh2"><?php echo $h->description ?></div></td>
                     <td><div class="fhfh2"><?php echo $h->keyword ?></div></td> -->
                     
                     <td>
                       
                        <a class="btn btn-success btn-xs" href="<?php echo base_url();?>metatags/update/<?php echo $h->id?>">Edit</a>
                       
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

