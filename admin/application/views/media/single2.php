          



      <div class="row">
      
        <div class=" col-md-12   toppad" >
   
   
          <div class="panel panel-yellow">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo @$k->title ?> <?php echo @$k->firstname ?> <?php echo @$k->lastname ?>  Details</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                

                
                <div class=" col-md-6"> 
                <table class="table table-user-information">
                    <tbody>
                    
                      
                      <tr>
                        <td>Date</td>
                        <td>-</td>
                        <td><b><?php echo @$k->date ?></b></td>
                      </tr>




                      <tr>
                        <td>ip </td>
                        <td>-</td>
                        <td><b><?php echo @$k->ip ?></b></td>
                      </tr>

                      <tr>
                        <td>Name</td>
                        <td>-</td>
                        <td><b><?php echo @$k->title ?> <?php echo @$k->firstname ?> <?php echo @$k->lastname ?></b></td>
                      </tr>

                      <tr>
                        <td>E-Mail</td>
                        <td>-</td>
                        <td><b><?php echo @$k->email ?></b></td>
                      </tr>

                      <tr>
                        <td>phone</td>
                        <td>-</td>
                        <td><b><?php echo @$k->phone ?></b></td>
                      </tr>

                      <tr>
                        <td>Country</td>
                        <td>-</td>
                        <td><b><?php echo @$k->country ?></b></td>
                      </tr>

                      <tr>
                        <td>Abstract Category</td>
                        <td>-</td>
                        <td><b><?php echo @$k->abstractcategory ?></b></td>
                      </tr>

                       <tr>
                        <td>Session</td>
                        <td>-</td>
                        <td><b><?php echo @$k->session ?></b></td>
                      </tr>
                    
                    <tr>
                        <td>Address</td>
                        <td>-</td>
                        <td><b><?php echo @$k->address ?></b></td>
                      </tr>

                      <tr>
                        <td>Message</td>
                        <td>-</td>
                        <td><b><?php echo @$k->message ?></b></td>
                      </tr>


                      <tr>
                        <td></td>
                        <td></td>
                        <td><a class="btn btn-danger btn-md" href="<?php echo base_url();?>../assets/images/<?php echo $k->img; ?>" download><b>Download</b></a></td>
                      </tr>

                     
                      
                      
                     
                    </tbody>
                  </table>
                  
               
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        
                    </div>
            
          </div>
        </div>
      </div>
    