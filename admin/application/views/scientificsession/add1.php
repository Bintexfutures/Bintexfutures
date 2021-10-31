<?php
    $data1=$this->db->order_by('id', 'desc')->get_where('ocm', array('cat' => '1'))->result();
   
    ?>
<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">Organizing Committee Members 
            <div class="pull-right"><a href="<?php echo base_url() ?>committee/addmember">ADD Committee Members </a></div>
         </div>
         <div class="panel-body">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th>S.No</th>
                     <th>Date</th>
                     <th>Image</th>
                     <th>Name</th>                     
                     <th>Designation</th>             
                     <th>Biography</th>             
                     <th>Reaserch interst</th>
                     <th>Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $i=1;?>
                  <?php foreach($data1 as $h){?>
                  <tr>
                     <td><?php echo $i ?></td>
                     <td><?php echo $h->crdate ?></td>
                     <td><img height="50" width="50" src="<?php echo base_url();?>assets/aboutpage/<?php echo $h->image ?>"></td>
                     <td><?php echo $h->name ?></td>
                     <td><?php echo $h->designation ?></td>
                     <td><?php echo $h->biography ?></td>
                     <td><?php echo $h->reaserchinterst ?></td>
                     
                     <td>
                       
                        <a class="btn btn-success btn-xs" href="<?php echo base_url();?>committee/update/<?php echo $h->id?>">Edit</a>
                        <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>gallery/deletegallery/<?php echo $h->id?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                       
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
<!-- <div class="row">
   <div class="col-lg-12">
      <div class="panel panel-green">
         <div class="panel-heading">
            All Gift Products [ Current Product]
            
         </div>
         <div class="panel-body">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th style="width: 3%; padding: 10px; background: #efefef">S.No</th>
                     <th width="15%">crdate</th>
                     <th width="15%">Product Name</th>
                     <th width="15%">Product Company</th>
                     <th width="15%">End Date</th>
                     
                  </tr>
               </thead>
               <tbody>
                  <?php $i=1;?>
                  <?php foreach($data2 as $h){?>
                  <tr>
                     <td><?php echo $i ?></td>
                     <td><?php echo $h->crdate ?></td>
                     <td><?php echo $h->product_name ?></td>
                     <td><?php echo $h->prodcut_company ?></td>
                     <td><?php echo $h->enddate ?></td>
                    
                  </tr>
                  <?php $i++;?>
                  <?php }?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-red">
         <div class="panel-heading">
            All Gift Products [ Sold Products ]
           
         </div>
         <div class="panel-body">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th style="width: 3%; padding: 10px; background: #efefef">S.No</th>
                     <th width="15%">crdate</th>
                     <th width="15%">Product Name</th>
                     <th width="15%">Product Company</th>
                     <th width="15%">End Date</th>
                     
                  </tr>
               </thead>
               <tbody>
                  <?php $i=1;?>
                  <?php foreach($data3 as $h){?>
                  <tr>
                     <td><?php echo $i ?></td>
                     <td><?php echo $h->crdate ?></td>
                     <td><?php echo $h->product_name ?></td>
                     <td><?php echo $h->prodcut_company ?></td>
                     <td><?php echo $h->enddate ?></td>
                    
                  </tr>
                  <?php $i++;?>
                  <?php }?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div> -->