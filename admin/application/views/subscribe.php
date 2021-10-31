<?php
/**
 * @Auther:santhosh
 * function subscribe list
 * @return View
 */

 $data1=$this->db->get_where('subscribe')->result();

?>


<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">Subscribe Members
            <div class="pull-right"></div>
         </div>
         <?php if($this->session->flashdata('response')){ ?>
         <div class="alert alert-success">
       	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
       	 <strong><?php echo $this->session->flashdata('response');?></strong>  
        </div>
       <?php }  ?>
         
         <div class="panel-body">
             
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th>S.No</th>
                     <th>Date</th> 
                     <th>Email</th>
                     <th>Name</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
            
                  <?php foreach($data1 as $key=> $h){?>
                  
                  <tr id="accordion">
                     <td><?php echo $key+1; ?></td>
                     <td><?php echo $h->crdate; ?></td>
                     <td><?php echo $h->email; ?></td>
                     <td><?php echo $h->name; ?></td>
                     <td><a href="subscribe/delete?id=<?php echo $h->id; ?>" class="btn btn-danger">Delete</a></td>
                     <td><a data-toggle="collapse" href="#collapseOne_<?php echo $key; ?>" class="btn btn-danger">view list</a>
                     <tr>
                         <td colspan="6">
                              <div id="collapseOne_<?php echo $key; ?>" class="collapse" data-parent="#accordion">
        <div class="card-body">
                     <?php if($h->refer_link){ 
                   
                    
                    $this->db->select('*');
                    $this->db->from('subscribe');
                    $this->db->where('refer_by',$h->refer_link);
                    $query=$this->db->get();
                   
                     ?>
                      
           
            <?php foreach($query->result() as $key => $refer) {?>
                <div class="row">
                 <div class="col-md-2"><?php echo $key+1; ?></div>
                 <div class="col-md-2"><?php print_r($refer->crdate); ?></div>
                 <div class="col-md-2"><?php echo $refer->email; ?></div>
                 <div class="col-md-2"><?php echo $refer->name; ?></div>
                 <div class="col-md-2"><?php  echo $refer->refer_link; ?></div>
                </div>
                
            
                       
              
              
                     
                     <?php } } ?>
                         </td>
                     </tr>
                    
                      </div>
                     </td>
                     
                  </tr>
           
                  <?php }?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>