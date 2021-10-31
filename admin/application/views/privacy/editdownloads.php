




        <div class="page-content page-thin">
          <div class="header">
            <h2><strong> Edit Organizing Committee Members </strong></h2>

            <?php echo $this->session->flashdata('successmag'); ?>

            <div class="row">
            <div class="col-md-12">

              <div class="panel panel-default">
                <div class="panel-content">
                  <div class="row"> 

                  

                      <form role="form" class="form-horizontal form-validation" action="<?php echo base_url(''); ?>downloads/editdownloads1/<?php echo $downloads->id; ?>" method="POST" enctype="multipart/form-data"> 


                    <div class="col-md-6 col-sm-12 col-xs-12"> 
                        
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" value="<?php echo $downloads->name; ?>" required>
                          </div>
                        </div>

                    
                        

                    <div class="form-group">
                          <label class="col-sm-3 control-label">Image</label>
                          <div class="col-sm-9">
                                  <input type="file" class="form-control" name="img"  value="<?php echo $downloads->img; ?>" required>
                          </div>
                        </div>

                  
<div class="col-sm-9 col-sm-offset-3">
                            <div class="pull-right">
                              <button type="submit" name="submit" class="btn btn-embossed btn-primary m-r-5">Insert</button>
                            </div>
                          </div>
                        </div>   

                    </div>

                         
                   

                                          

                      </form>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        


