


<?php
    $data1=$this->db->order_by('id', 'desc')->get_where('scientificprograms', array('status'=>'0'))->result();
   
    ?>
<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">View Scientific Session </div>
         <div class="panel-body">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th>S.No</th>
                     <th>Image</th>
                     <th>Heading</th>                     
                     <th>Description</th> 
                     <th>Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $i=1;?>
                  <?php foreach($data1 as $h){?>
                  <tr>
                     <td><?php echo $i ?></td>
                     <td><img height="50" width="50" src="<?php echo base_url();?>assets/aboutpage/<?php echo $h->image ?>"></td>
                     <td><?php echo $h->heading ?></td>
                     <td><div class="fhfh"><?php echo $h->description ?></div></td>
                     
                     <td>                       
                        <a class="btn btn-success btn-xs" href="<?php echo base_url();?>scientificsession/update/<?php echo $h->id?>">Edit</a>
          <?php  $u= $this->session->userdata('login'); ?> 
<?php if($u->status=='1'){ ?>

                 <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>scientificsession/inactive/<?php echo $h->id?>" onclick="return confirm('Are you sure you want to Restore?')">Restore</a>
                
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

