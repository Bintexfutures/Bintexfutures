<?php
    $data1=$this->db->order_by('id', 'desc')->get_where('token_value')->result();
   
    ?>
<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">Received Orders
         </div>
         <div class="panel-body">
         <div class="table-responsive">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th>S.No</th>
                     <th>Date</th>
                     <th>Order Id</th> 
                     <th>Name</th>                     
                     <th>Ex Type</th>            
                     <th>Bintex Tokens</th>            
                     <th>Bonus Tokens</th>      
                     <th>Total Tokens</th>  
                     <th width="150">Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $i=1;?>
                  <?php foreach($data1 as $h){?>
                  <tr>
                     <td><?php echo $i ?></td>
                     <td><?php echo $h->crdate ?></td>
                     <td><?php echo $h->orderId ?></td>
                     <td><?php echo $h->customer_id; ?>-<?php echo $h->customer_name; ?></td>
                     <td><?php echo $h->extype ?></td>
                     <td><?php echo $h->buy_token ?></td>
                     <td><?php echo $h->percent_token ?></td>
                     <td><?php echo $h->totalamount ?></td>

                     
                     <td>
              <button class="btn btn-success btn-xs">

                        <?php if($h->status=='1'){ echo "Waiting"; } else if($h->status=='2'){ echo "Success" ; } else if($h->status=='3'){ echo "Expired"; } else if($h->status=='4'){ echo "Claimed";} ?>
                     </button>       

<?php if($h->status=='1'){ ?>
   <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>ordersclaims/successfulorders/<?php echo $h->id?>" onclick="return confirm('Are you sure you want to Successful?')" >Successful</a>
    <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>ordersclaims/expiredorders/<?php echo $h->id?>" onclick="return confirm('Are you sure you want to Expired?')">Expired</a>
   <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>ordersclaims/claimedtokens/<?php echo $h->id?>" onclick="return confirm('Are you sure you want to Claimed?')" >Claimed</a>
<a class="btn btn-danger btn-xs" href="<?php echo base_url();?>ordersclaims/delete/<?php echo $h->id?>" onclick="return confirm('Are you sure you want to Delete?')">Delete</a>
<?php } else if($h->status=='2'){ ?>
   <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>ordersclaims/expiredorders/<?php echo $h->id?>" onclick="return confirm('Are you sure you want to Expired?')">Expired</a>
   <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>ordersclaims/claimedtokens/<?php echo $h->id?>" onclick="return confirm('Are you sure you want to Claimed?')" >Claimed</a>
<a class="btn btn-danger btn-xs" href="<?php echo base_url();?>ordersclaims/delete/<?php echo $h->id?>" onclick="return confirm('Are you sure you want to Delete?')">Delete</a>
<?php } else if($h->status=='3') { ?>

<a class="btn btn-danger btn-xs" href="<?php echo base_url();?>ordersclaims/successfulorders/<?php echo $h->id?>" onclick="return confirm('Are you sure you want to Successful?')" >Successful</a>

<a class="btn btn-danger btn-xs" href="<?php echo base_url();?>ordersclaims/claimedtokens/<?php echo $h->id?>" onclick="return confirm('Are you sure you want to Claimed?')" >Claimed</a>
<a class="btn btn-danger btn-xs" href="<?php echo base_url();?>ordersclaims/delete/<?php echo $h->id?>" onclick="return confirm('Are you sure you want to Delete?')">Delete</a>
<?php } else if($h->status=='4'){ ?>
   <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>ordersclaims/successfulorders/<?php echo $h->id?>" onclick="return confirm('Are you sure you want to Successful?')" >Successful</a>
   <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>ordersclaims/expiredorders/<?php echo $h->id?>" onclick="return confirm('Are you sure you want to Expired?')">Expired</a>
<a class="btn btn-danger btn-xs" href="<?php echo base_url();?>ordersclaims/delete/<?php echo $h->id?>" onclick="return confirm('Are you sure you want to Delete?')">Delete</a>
<?php } ?>




                       
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

