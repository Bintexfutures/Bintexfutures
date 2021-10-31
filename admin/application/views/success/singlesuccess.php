<div class="row">

      <!-- -->          

      <div class="col-lg-12">

         <div class="panel panel-yellow">

            <div class="panel-heading" style="float: left">success</div>

            <div class="panel-heading" style="text-align: right">

            <a href="<?php echo base_url()?>success/addsuccess" style="color: white">

            ADD success</a></div>

            </div>

            </div>

            </div>

          



      <div class="row">
      
        <div class=" col-md-12   toppad" >
   
   
          <div class="panel panel-yellow">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo @$k->title?>  Details</h3>
            </div>
            <div class="panel-body">
              <div class="row">

                <div class="col-md-12 col-lg-3 " align="center"> <img height="250" width="600" src="<?php echo base_url('')?>assets/success/<?php echo @$k->image?>" class="img-circle img-responsive"> </div>
               
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                <table class="table table-user-information">
                    <tbody>
                    
                      
                      <tr>
                        <td>Title</td>
                        <td><?php echo @$k->name ?></td>
                      </tr>
                      
                       
                      
                      
                   
                         
                             <tr>
                        <td>url</td>
                        <td><?php echo @$k->professional ?></td>
                      </tr>

                      

                        
                      <tr>
                        <td> Descriptions</td>
                        <td><?php echo $k->descriptions ?></td>
                      </tr>

                     
                     
                     

                      
                      
                      
                       
                      
                      
                     
                    </tbody>
                  </table>
                  
                 <a href="<?php echo base_url('')?>success/updatesuccess/<?php echo @$k->id?>" class="btn btn-primary" style="margin-left:215px">Edit Profile</a>
                  
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        
                    </div>
            
          </div>
        </div>
      </div>
    