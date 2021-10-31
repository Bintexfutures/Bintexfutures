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
                  <?php foreach($data1 as $h){?>
                   <?php $res = $this->db->get_where('users',array('id'=>$h->customer_id))->row(); ?>
                  <tr>
                     <td><?php echo $i ?></td>
                     <td><?php echo $res->crdate ?></td>
                     <td><?php echo $h->customer_id ?></td>
                     <td><?php echo $h->lastname, $h->firstname,$h->middlename ?></td>
                     <td><?php echo $res->email ?></td>
                    
                   
                     <td>
                       
                        <a class="btn btn-success btn-sm" href="<?php echo base_url();?>notification/add/<?php echo $h->customer_id ?>">ADD Notification</a>
                


        <a class="btn btn-danger btn-sm" href="<?php echo base_url();?>notification/view_all/<?php echo $h->customer_id?>" >view Notification</a>
                </a>
          
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