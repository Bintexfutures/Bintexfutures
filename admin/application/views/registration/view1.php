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
                       <th>Date Of Birth</th>
                     <th>Address</th>             
                     <th>Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $i=1;?>
                  <?php foreach($data1 as $h){?>
                   <?php $res = $this->db->get_where('users', array('id'=>$h->customer_id))->row(); ?>
                  <tr>
                     <td><?php echo $i ?></td>
                     <td><?php echo $res->crdate ?></td>
                     <td><?php echo $h->customer_id ?></td>
                     <td><?php echo $h->lastname, $h->firstname,$h->middlename ?></td>
                     <td><?php echo $res->email ?></td>
                     <td><?php echo $h->dateofbirth ?></td>
                      <td><?php echo $h->address?> <?php echo $h->location?> <?php echo $h->country?> <?php echo $h->postalcode ?></td>
                   
                     <td>
                       
                        <a class="btn btn-success btn-sm" href="<?php echo base_url();?>registration/kyc/<?php echo $h->customer_id ?>">View KYC</a>
                


      
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