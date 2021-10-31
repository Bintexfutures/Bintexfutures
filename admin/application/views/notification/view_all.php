<?php
 $data1=$this->db->get_where('notification', array('reg_id'=>$this->uri->segment(3)))->result();
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
                    <th>Heading</th>
                     <th>Content</th>    
                   
                       
                              
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
                     <td><?php echo $h->content ?></td>
                    
                    
                   
                     <td>
                       
                       


     <a class="btn btn-danger btn-sm" href="<?php echo base_url();?>notification/delete/<?php echo $h->id?>/<?php echo $this->uri->segment(3); ?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
          
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