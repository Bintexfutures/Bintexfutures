<?php
    $data1=$this->db->order_by('id', 'desc')->get_where('downloadsquiry')->result();
   
    ?>
<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">Downloads Reports
         </div>
         <div class="panel-body">
         <div class="table-responsive">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th>S.No1</th>
                     <th>Date</th>
                     <th>IP</th>
                     <th>Name</th>                     
                     <th>Email</th>            
                     <th>Phone</th>            
                     <th>Affiliation</th>      
                     <th>country</th>  
                     <th width="150">Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $i=1;?>
                  <?php foreach($data1 as $h){?>
                  <tr>
                     <td><?php echo $i ?></td>
                     <td><?php echo $h->crdate ?></td>
                     <td><?php echo $h->ip ?></td>
                     <td><?php echo $h->title ?>.&nbsp;<?php echo $h->firstname ?>&nbsp;<?php echo $h->lastname ?></td>
                     <td><?php echo $h->email ?></td>
                     <td><?php echo $h->phone ?></td>
                     <td><?php echo $h->affiliation ?></td>
                     <td><?php echo $h->country ?></td>
                     
                     <td>
                        <a class="btn btn-info btn-xs btn-xs2" href="<?php echo base_url();?>contactenquiry/singlepage/<?php echo $h->id?>">Full View</a>
                        <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>downloadsquiry/delete/<?php echo $h->id?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                       
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

