<?php
    $data1=$this->db->order_by('id', 'desc')->get_where('guidelines')->result();
   
    ?>
<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">Update <?php echo $h->title ?>
         </div>
         <div class="panel-body">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th style="width: 3%; padding: 10px; background: #efefef">S.No</th>
                     <th width="15%">crdate</th>
                     <th width="15%">Page Name</th>
                     
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
                        <a href="<?php echo base_url();?>abouts/singlepage/<?php echo $h->id?>"><button type="button" class="btn btn-info  btnsup"><i class="fa fa-edit"></i>&nbsp;View</button></a>
                        <a href="<?php echo base_url();?>abouts/updateabout/<?php echo $h->id?>"><button type="button" class="btn btn-success btnsup"><i class="fa fa-edit"></i>&nbsp;Edit</button></a>
                        <a href="<?php echo base_url();?>abouts/deletepage/<?php echo $h->id?>" 
                           onclick="return confirm('Are you sure you want to delete page?')"><button type="button" class="btn btn-danger btnsup"><i
                           class="fa fa-trash"></i>&nbsp;
                        Delete
                        </button></a>
                        <?php if($h->status=='1'){?>
                        <a href="<?php echo base_url();?>abouts/active/<?php echo $h->id?>" 
                           onclick="return confirm('Are you sure you want to deactive your page?')"><i
                           class="fa fa-check-square-o" style="font-size:20px" title="Active"></i>&nbsp;
                        </a>
                        <?php } else { ?>
                        <a href="<?php echo base_url();?>abouts/inactive/<?php echo $h->id?>" 
                           onclick="return confirm('Are you sure you want to  active page?')"><i
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