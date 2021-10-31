
<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">Id card
            <div class="pull-right"></div>
         </div>
       <div class="panel-body">
             <div class="row">
      	<?php $id=$this->uri->segment(3) ?>
      	<?php $data1 = $this->db->get_where('kyc')->result(); ?>
      	
      	<table class="table table-hover">
               <thead>
                  <tr>
                     <th>S.No</th>
                     <th>Date</th>
                    <th>Customer Id</th>
                     <th>Name</th> 
                       <th>Date Of Birth</th>
                     <th>Address</th>             
                     <th>Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $i=1;?>
                  <?php foreach($data1 as $h){?>
                  <tr>
                     <td><?php echo $i ?></td>
                     <td><?php echo @$h->crdate ?></td>
                     <td><?php echo @$h->customer_id ?></td>
                     <td><?php echo @$h->lname, $h->fname, $h->mname ?></td>
                     <td><?php echo @$h->dob ?></td>
                      <td><?php echo @$h->address?> <?php echo $h->location?> <?php echo $h->country?> <?php echo $h->pincode ?></td>
                   
                     <td>
    <a class="btn btn-success btn-sm" href="<?php echo base_url();?>registration/kyc1/<?php echo $h->customer_id ?>">Full View</a>
    
    <?php if(@$h->status=='1'){ ?>
        <a class="btn btn-success " href="<?php echo base_url();?>registration/active/<?php echo @$h->id;?>">Verify</a>   
    
    <?php } else { ?>
    <a class="btn btn-danger" href="<?php echo base_url();?>registration/inactive/<?php echo @$h->id;?>">Pending</a>   
    <?php } ?>
    
    
    <a class="btn btn-danger" href="<?php echo base_url();?>registration/delete1/<?php echo @$h->id;?>">Delete</a>

      
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
