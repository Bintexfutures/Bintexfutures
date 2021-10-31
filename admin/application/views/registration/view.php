<?php

 $data1=$this->db->get_where('profile')->result();

?>


<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">Registered Members
            <div class="pull-right"></div>
         </div>
         <div class="panel-body">
             
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th>S.No</th>
                     <th>Date</th>
                    <th>Customer Id</th>
                     <th>Name</th>    
                     <th>Email</th>         
                     <th>Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $i=1;?>
                  <?php $res = $this->db->get_where('users')->result(); ?>
                  <?php foreach($res as $h){?>
                   
                  <tr>
                     <td><?php echo $i ?></td>
                     <td><?php echo $h->crdate ?></td>
                     <td><?php echo $h->id ?></td>
                     <td><?php echo $h->username ?></td>
                     <td><?php echo $h->email ?></td>
                   
                     <td>
                       
                        <a class="btn btn-success btn-sm" href="<?php echo base_url();?>registration/kyc/<?php echo $h->id ?>">View KYC</a>
                


      
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