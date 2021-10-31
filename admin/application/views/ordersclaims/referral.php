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
                     <th>Customer Id</th>
                     <th>Order Id</th> 
                     <th>Referral Id</th>                
                     <th>Referral Tokens</th>  
                  </tr>
               </thead>
               <tbody>
                  <?php $i=1;?>
                  <?php foreach($data1 as $h){?>
                   
                   
                   <?php if($h->referral){ ?>
                
                
                  <tr>
                     <td><?php echo $i ?></td>
                     <td><?php echo $h->crdate ?></td>
                     <td><?php echo $h->referral ?></td>
                     <td><?php echo $h->orderId ?></td>
                     <td><?php echo $h->customer_id; ?></td>
                     <td><?php echo $h->referral_token ?></td>

                    
                  </tr>
                  <?php } ?>
                  <?php $i++;?>
                  <?php }?>
               </tbody>
            </table>
            </div>
         </div>
      </div>
   </div>
</div>

