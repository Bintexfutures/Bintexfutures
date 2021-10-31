

<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">Price list
         </div>
         <div class="panel-body">
            

                  <div class="row"> 
                      
                    <div class="col-md-12 col-sm-12 col-xs-12"> 
                        <div class="form-group fghgfhj">
                         
                          <div class="col-sm-12">                          
                           
<div class="row">
    <?php
    if(!empty($this->session->flashdata('msg'))){
    ?>
    <div class="alert alert-success">
    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
       	 <strong><?php echo $this->session->flashdata('msg');?></strong>
       	 </div>
    <?php }
    ?>
</div>
<div class="row">
  <div class="col-sm-4 control-label"><b>Bitforex</b></div>
  <div class="col-sm-3 control-label"><b>BuyUcoin / INR</b></div>
  <div class="col-sm-3 control-label"><b>BuyUcoin /USDT</b></div>
</div>  <br />
 

 <form role="form" class="form-horizontal form-validation" action="https://bintexfutures.com/admin/Crypto_price/update" method="POST" enctype="multipart/form-data">
 <?php  foreach($data as $key=>$value){ ?>  
<div class="row">
    <input type="hidden" class="form-control" value="<?php echo $value->id; ?>" name="id">
<div class="col-md-4"><input type="text" class="form-control" value="<?php echo $value->Bitforex; ?>" name="Bitforex"></div>   
<div class="col-md-3"><input type="text" class="form-control" value="<?php echo $value->Buyucoin_inr; ?>" name="buyucoin_d"></div>
<div class="col-md-3"><input type="text" class="form-control" value="<?php echo $value->Buyucoin_usdt; ?>" name="buyucoin_us"></div>
<div class="col-md-2"><button type="submit" name="update" class="btn btn-embossed btn-primary m-r-5">Update</button></div> 
</div>
<?php } ?> 
</form>


<br />

                           

                            </div>



                          </div>
                      

                        <br /><br />                

                  </div>
                </div>
              

         </div>
      </div>
   </div>
</div>


