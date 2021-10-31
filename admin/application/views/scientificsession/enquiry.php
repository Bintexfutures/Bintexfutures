<?php
    $data1=$this->db->order_by('id', 'desc')->get_where('enquriy')->result();
   
    ?>
<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">View Contact Enquriy
         </div>
         <div class="panel-body">
         <div class="table-responsive">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th>S.No</th>
                     <th>Date</th>
                     <th>Name</th>                     
                     <th>Email</th>            
                     <th>Subject</th>            
                     <th>Message</th> 
                  </tr>
               </thead>
               <tbody>
                  <?php $i=1;?>
                  <?php foreach($data1 as $h){?>
                  <tr>
                     <td><?php echo $i ?></td>
                     <td><?php echo $h->crdate ?></td>
                     <td><?php echo $h->name ?></td>
                     <td><?php echo $h->email ?></td>
                     <td><?php echo $h->subject ?></td>
                     <td><?php echo $h->message ?></td>
                  </tr>
                  <?php $i++;?>
                  <?php }?>
               </tbody>
            </table>
            </div>
         </div>
      </div>
   </div>
</div>

