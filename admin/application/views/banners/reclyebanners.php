



<div class="row">
                    <div class="col-lg-12">


                        <div class="panel panel-yellow">
                            <div class="panel-heading">View Flyer Images</div>



                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                          <th>S.No</th>
                            
                           <th>title</th>
                            <th>Date</th>
                            <th>venue</th>
                          
                           <th>Image</th>
                            
                            
                           
                           
                           <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
<?php 
$i=1;
$gt=$this->db->get_where('tbl_banners',array('status'=>'0'))->result();
foreach ($gt as $tg) { ?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $tg->info;?></td>
        <td><?php echo  $tg->title;?></td>
        <td><?php echo  $tg->sub_title;?></td>
        <td><?php  
                        $bb="assets/images/".$tg->image;
             if(!file_exists ($bb)) { ?>
                 <img src="<?php echo base_url();?>assets/noimage/noimage.jpg" height="50" width="100">
                  <?php } else { ?>
 

  <img src="<?php echo base_url();?>assets/images/<?php echo $tg->image;?>" height="50" width="100">
                  <?php } ?></td>


                      
    <td>


       <a href="<?php echo base_url();?>banners/update/<?php echo $tg->id?>" class="btn btn-success btn-xs"><i>Edit</i></a>

               


                              

<a href="<?php echo base_url();?>banners/activebanners/<?php echo $tg->id;?>" class="btn btn-danger btn-xs">
<i onclick="return confirm('Are you sure you want to Active Banner?')" title="Delete"> Go Active </i></a>

                                    </td>  

    </tr>
<?php $i++;} ?>
                             

                             
                           </tbody>
                                </table>
                            </div>
                        </div>
                       
                  
                        </div>  
                 
                </div> 
               



    </div>
    </div>
    <div class="clear-fix"></div>

