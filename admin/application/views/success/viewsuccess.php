<?php
    $data1=$this->db->order_by('id', 'desc')->get_where('success')->result();
   
    ?>
<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">
       success
            <div class="pull-right"><a href="<?php echo base_url() ?>success/addsuccess">ADD success</a></div>
         </div>
         <div class="panel-body">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th style="width: 3%; padding: 10px; background: #efefef">S.No</th>
                     <th width="15%">crdate</th>
                     <th width="15%">success Name</th>
                     
                     <th width="15%">Professional Work</th>
                     <th width="30%">Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $i=1;?>
                  <?php foreach($data1 as $h){?>
                  <tr>
                     <td><?php echo $i ?></td>
                     <td><?php echo $h->crdate ?></td>
                     <td><?php echo $h->name ?></td>
                     <td><?php echo $h->professional ?></td>
                     
                     <td>
                        <a href="<?php echo base_url();?>success/singlepage/<?php echo $h->id?>"><button type="button" class="btn btn-info  btnsup"><i class="fa fa-edit"></i>&nbsp;View</button></a>
                        <a href="<?php echo base_url();?>success/updatesuccess/<?php echo $h->id?>"><button type="button" class="btn btn-success btnsup"><i class="fa fa-edit"></i>&nbsp;Edit</button></a>
                        <a href="<?php echo base_url();?>success/deletesuccess/<?php echo $h->id?>" 
                           onclick="return confirm('Are you sure you want to delete success?')"><button type="button" class="btn btn-danger btnsup"><i
                           class="fa fa-trash"></i>&nbsp;
                        Delete
                        </button></a>
                        <?php if($h->status=='1'){?>
                        <a href="<?php echo base_url();?>success/active/<?php echo $h->id?>" 
                           onclick="return confirm('Are you sure you want to deactive your success?')"><i
                           class="fa fa-check-square-o" style="font-size:20px" title="Active"></i>&nbsp;
                        </a>
                        <?php } else { ?>
                        <a href="<?php echo base_url();?>success/inactive/<?php echo $h->id?>" 
                           onclick="return confirm('Are you sure you want to  active success?')"><i
                           class="fa fa-square-o" style="font-size:20px", title="IN Active" ></i>&nbsp;
                        </a>
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