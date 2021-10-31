<?php
    $data1=$this->db->order_by('id', 'desc')->get_where('courses')->result();
   
    ?>

    <style type="text/css">
       .DTTT_container{ display: none; }
    </style>
<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">
       Courses
            <div class="pull-right"><a href="<?php echo base_url() ?>courses/addcourses">ADD Courses</a></div>
         </div>
         <div class="panel-body">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th style="width: 3%; padding: 10px; background: #efefef">S.No</th>
                     <th width="15%">crdate</th>
                     <th width="15%">Courses Name</th>
                     
                     <th width="15%">Url</th>
                     <th width="30%">Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $i=1;?>
                  <?php foreach($data1 as $h){?>
                  <tr>
                     <td><?php echo $i ?></td>
                     <td><?php echo $h->crdate ?></td>
                     <td><?php echo $h->title ?></td>
                     <td><?php echo $h->url ?></td>
                     
                     <td>
                        <a href="<?php echo base_url();?>courses/singlepage/<?php echo $h->id?>"><button type="button" class="btn btn-info  btnsup"><i class="fa fa-edit"></i>&nbsp;View</button></a>
                        <a href="<?php echo base_url();?>courses/updatecourses/<?php echo $h->id?>"><button type="button" class="btn btn-success btnsup"><i class="fa fa-edit"></i>&nbsp;Edit</button></a>
                        <a href="<?php echo base_url();?>courses/deletecourses/<?php echo $h->id?>" 
                           onclick="return confirm('Are you sure you want to delete courses?')"><button type="button" class="btn btn-danger btnsup"><i
                           class="fa fa-trash"></i>&nbsp;
                        Delete
                        </button></a>
                        <?php if($h->status=='1'){?>
                        <a href="<?php echo base_url();?>courses/active/<?php echo $h->id?>" 
                           onclick="return confirm('Are you sure you want to deactive your courses?')"><i
                           class="fa fa-check-square-o" style="font-size:20px" title="Active"></i>&nbsp;
                        </a>
                        <?php } else { ?>
                        <a href="<?php echo base_url();?>courses/inactive/<?php echo $h->id?>" 
                           onclick="return confirm('Are you sure you want to  active courses?')"><i
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