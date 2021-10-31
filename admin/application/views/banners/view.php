
               

<div class="row">
    <div class="col-lg-12">

        <div class="panel panel-yellow">
            <div class="panel-heading"> View  
                <div class="pull-right"><a href="<?php echo base_url();?>banners/update/<?php echo $k->id;?>" style="color: white" > Edit</a></div>
            </div>

         
            <div class="panel-body pan">
<form method="post">
 <div class="row">
    <div class=" col-md-9 col-lg-9 "> 
                <table class="table table-user-information">
                    <tbody>
                    
                      
                       <tr>
                        <td>Info:</td>
                        <td><?php echo $k->info;?></td>
                      </tr>
                        
                     <tr>
                        <td>Title:</td>
                        <td><?php echo $k->title;?></td>
                      </tr>

                     
                      <tr>
                        <td>Image:</td>
                        <td><img src="<?php echo base_url();?>assets/uploads/banners/<?php echo $k->image;?>" height="75" width="100" /></td>
                      </tr>

                      <tr>
                        <td>Alt_tag:</td>
                        <td><?php echo $k->font_color;?></td>
                      </tr>

                     
                     

                    </tbody>
                  </table>
                  <!-- <div class="row">
                    <div class="form-actions pll prl pull-right">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button></div>
                  </div> -->
                
                  
                </div>
 </div>

</form>

            </div>
        </div>






    </div>
    </div>
    <div class="clear-fix"></div>

