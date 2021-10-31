<?php
    $data1=$this->db->order_by('id', 'desc')->get_where('abstractsubmission')->result();
   
    ?>
<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">View Abstract Submission
         </div>
         <div class="panel-body">
         <div class="table-responsive">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th>S.No</th>
                     <th>Date</th>
                     <th>IP</th>
                     <th>Name</th>                     
                     <th>Country</th>            
                     <th>Phone</th>            
                     <th>Abstract&nbsp;Category</th> 
                     <th width="150">Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $i=1;?>
                  <?php foreach($data1 as $h){?>
                  <tr>
                     <td><?php echo $i ?></td>
                     <td><?php echo $h->date ?></td>
                     <td><?php echo $h->ip ?></td>
                     <td><?php echo $h->title ?>.&nbsp;<?php echo $h->firstname ?>&nbsp;<?php echo $h->lastname ?></td>
                     <td><?php echo $h->country ?></td>
                     <td><?php echo $h->phone ?></td>
                     <td><?php echo $h->abstractcategory ?></td>
                     
                     <td>
                       
                        <a class="btn btn-success btn-xs btn-xs2" href="<?php echo base_url();?>../assets/images/<?php echo $h->img; ?>" download>Download</a>
                        <a class="btn btn-info btn-xs btn-xs2" href="<?php echo base_url();?>abstractsubmission/singlepage/<?php echo $h->id?>">Full View</a>
                

                 <?php  $u= $this->session->userdata('login'); ?> 
<?php if($u->status=='1'){ ?>

        <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>committee/deletegallery/<?php echo $h->id?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
           
           <?php }?>
                       
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
</div>

