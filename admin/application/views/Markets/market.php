<div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">Market Cap
            <div class="pull-right"></div>
         </div>
         <div class="panel-body">
             <?php 
             if($this->session->flashdata('success')){
                 ?>
                 <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
            <?php }
             ?>

             <!-- Nav pills -->
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="pill" href="#add">Add</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="#actions">Actions</a>
  </li>

</ul>

<div class="tab-content">
  <div class="tab-pane  active" id="add">
      
       <form action="Markets/Add" method="post">
  <div class="form-row">
    <div class="form-group">
      <input type="text" class="form-control" id="email" placeholder="Enter Name" name="name" required>
    </div>
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Enter Market Cap" name="Market_Cap" required>
    </div>
    
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Enter Price" name="Price" required>
    </div>
    
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Enter Volume" name="Volume" required>
    </div>
    
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Enter Circulating" name="Circulating" required>
    </div>
    
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Enter Change" name="Change">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Enter Price Graph" name="Price_Graph">
    </div>
    
    <div class="form-group">
    <button type="submit" class="btn btn-success" name="add" value="SUBMIT">Add</button>    
    </div>
    
  </div>
</form>
  </div>
  <div class="tab-pane  fade" id="actions">
        <form method="post" action="Markets/actions">
      
      <div class="container-fluid">
  <table class="table table-condensed" style="background-color: #336699; border-top: 10px solid #04365C; border-bottom: 10px solid #04365C;">
    <thead style="color:#FFE991;">
      <tr>
        <th>Name</th>
        <th>Market Cap</th>
        <th>Price</th>
        <th>Volume (24)</th>
        <th>Circulating Supply</th>
        <th>Change (24)</th>
        <th>Price Graph (7d)</th>
        <th>Actions</th>
      </tr>
    </thead>
    
    <tbody>
        <?php  foreach($data as $key=>$result){ ?>
        
      <tr>
        <td><?php echo  $result->Name; ?></td>
        <td><?php echo  $result->Market_Cap; ?></td>
        <td><?php echo  $result->Price; ?></td>
        <td><?php echo  $result->Volume; ?></td>
        <td><?php echo  $result->Circulating; ?></td>
        <td><?php echo  $result->Change; ?></td>
        <td><?php echo  $result->Graph; ?></td>
        <input type="hidden" value="<?php echo $result->id; ?>" name="id"/>
        <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit_<?php echo $result->id; ?>" >Edit</button>
        <a href="<?php echo base_url() ?>Markets/delete/<?php echo $result->id; ?>" class="btn btn-danger" name="delete" value="delete" >Delete</button>
        </td>
        
      </tr>
      
      <!-- The Modal -->
    
  <div class="modal" id="edit_<?php echo $result->id; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Market Cap</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <div class="form-row">
    <div class="form-group">
        <input type="hidden" value="<?php echo $result->id; ?>" name="id"/>
      <input type="text" class="form-control" id="email" value="<?php echo  $result->Name; ?>" placeholder="Enter Name" name="name" required="">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Enter Market Cap" value="<?php echo  $result->Market_Cap; ?>" name="Market_Cap" required="">
    </div>
    
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Enter Price" value="<?php echo  $result->Price; ?>" name="Price" required="">
    </div>
    
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Enter Volume" value="<?php echo  $result->Volume; ?>" name="Volume" required="">
    </div>
    
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Enter Circulating" value="<?php echo  $result->Circulating; ?>" name="Circulating" required="">
    </div>
    
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Enter Change" value="<?php echo  $result->Change; ?>" name="Change">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Enter Price Graph" value="<?php echo  $result->Graph; ?>" name="Price_Graph">
    </div>
    
    <div class="form-group">
    <button type="submit" class="btn btn-success"  value="edit" name="edit">Save</button>    
    </div>
    
  </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
 
      <?php } ?>
    
    </tbody>
   
  </table>
  
</div>
</form>
  
  
  </div>
  

</div>
           
         </div>
      </div>
   </div>