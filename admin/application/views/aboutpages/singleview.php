<div class="row">

      <!-- -->          

      <div class="col-lg-12">

         <div class="panel panel-yellow">

            <div class="panel-heading" style="float: left">About</div>

            <div class="panel-heading" style="text-align: right">

            <a href="<?php echo base_url()?>abouts/add" style="color: white">

            ADD Page</a></div>

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
                <div class="col-md-12 col-lg-3 " align="center"> <img height="250" width="600" src="<?php echo base_url('')?>assets/aboutpage/<?php echo @$k->image?>" class="img-circle img-responsive"> </div>
                
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
                        <td><?php echo @$k->title ?></td>
                      </tr>
                      
                       
                      
                      
                   
                         
                             <tr>
                        <td>url</td>
                        <td><?php echo @$k->url ?></td>
                      </tr>

                      

                        
                      <tr>
                        <td>Product Descriptions</td>
                        <td><?php echo @$k->articles?></td>
                      </tr>

                      <tr>
                        <td>SEO TITLE</td>
                        <td><?php echo @$k->seo_title?></td>
                      </tr>
                      <tr>
                        <td>SEO Keywords</td>
                        <td><?php echo @$k->seo_keywords?></td>
                      </tr>
                      <tr>
                        <td>SEO Descriptions</td>
                        <td><?php echo @$k->seo_description?></td>
                      </tr>

                      
                      
                      
                       
                      
                      
                     
                    </tbody>
                  </table>
                  
                 <a href="<?php echo base_url('')?>abouts/updateabout/<?php echo @$k->id?>" class="btn btn-primary" style="margin-left:215px">Edit Profile</a>
                  
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        
                    </div>
            
          </div>
        </div>
      </div>
    