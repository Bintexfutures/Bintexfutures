




       



<?php
    $data1=$this->db->order_by('id', 'desc')->get_where('users')->result();
   
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
                     <th>Username</th>                   
                     <th>Email</th>
                     <th>Wallet Address</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $i=1;?>
                  <?php foreach($data1 as $h){?>
                  <tr>
                     <td><?php echo $i ?></td>
                     <td><?php echo $h->username ?></td>
                     <td><?php echo $h->email ?></td>
                     <td><?php echo $h->address_wallet ?></td>
                     
                    
                  </tr>
                  <?php $i++;?>
                  <?php }?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>

