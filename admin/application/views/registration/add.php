               

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-yellow">
            <div class="panel-heading"> Create  Registration Dates
                <div class="pull-right"></div>
            </div>


            <div class="panel-body pan new-form">

 
       
              <form role="form" class="form-horizontal form-validation" action="<?php echo base_url();?>registration/link/1" method="POST" enctype="multipart/form-data">
 <?php $a=$this->db->get_where('registrationdates')->row();  ?>  
<div class="form-body pal new-form">
                <div class="col-md-3 mbn">
                    <label for="inputAddress" class="control-label">Early Bird Registration Date
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="date1" class="form-control" value="<?php echo $a->date1; ?>">
                    </div>
                </div>

                 <div class="col-md-3 mbn">
                    <label for="inputAddress" class="control-label">Mid Term Registration Date
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="date2" class="form-control" value="<?php echo $a->date2; ?>">
                    </div>
                </div>
                
                <div class="col-md-3 mbn">
                    <label for="inputAddress" class="control-label">Final Term Registration Date
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input type="text" name="date3" class="form-control" value="<?php echo $a->date3; ?>">
                    </div>
                </div>

             

                <div class="col-md-1 mbn">
                    <label for="inputAddress" class="control-label">
                        <span class='require'>.</span></label>

                    <div class="input-icon right">
                         <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
                </div>

</div>
<?php  ?> 
</form>



   <form  method="post" enctype="multipart/form-data">
            
            
        </form>



            </div>
        </div>



               



    </div>
    </div>



<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-yellow">
            <div class="panel-heading"> Add Registration Amount
                <div class="pull-right"></div>
            </div>
             <div class="form-group mbn">
                    <?php if ($this->session->flashdata('msg')):?>
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong style="color:green;"><?php echo $this->session->flashdata('msg');?></strong>
                        </div>
                        <?php endif;?>

                            <?php if ($this->session->flashdata('error')):?>
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong style="color:red;"><?php echo $this->session->flashdata('error');?></strong>
                                </div>
                                <?php endif;?>

<?php if ($this->session->flashdata('del')):?>
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong style="color:green;"><?php echo $this->session->flashdata('del');?></strong>
                                </div>
                                <?php endif;?>


                </div>

            <div class="panel-body pan">

 
       
<form  method="post" enctype="multipart/form-data">
        
            <div class="form-body pal new-form">
                <div class="form-group col-md-3 mbn">
                    <label for="inputAddress" class="control-label">Category 
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input placeholder="Enter plan Name" type="text" name="plan" class="form-control">
                    </div>
                </div>

                <div class="form-group col-md-3 mbn">
                    <label for="inputAddress" class="control-label">Early Bird Registration
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input class="col-md-6" placeholder="Academic" type="text" name="amount1" class="form-control">
                        <input class="col-md-6" placeholder="Business" type="text" name="amount2" class="form-control">
                    </div>
                </div>

                 <div class="form-group col-md-3 mbn">
                    <label for="inputAddress" class="control-label">Mid Term Registration
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                          <input class="col-md-6" placeholder="Academic" type="text" name="amount3" class="form-control">
                        <input class="col-md-6" placeholder="Business" type="text" name="amount4" class="form-control">
                    </div>
                </div>
                
                 <div class="form-group col-md-3 mbn">
                    <label for="inputAddress" class="control-label">Final Term Registration
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                          <input class="col-md-6" placeholder="Academic" type="text" name="amount5" class="form-control">
                        <input class="col-md-6" placeholder="Business" type="text" name="amount6" class="form-control">
                    </div>
                </div>

               

                <div class="form-group col-md-1 mbn">
                    <label for="inputAddress" class="control-label">
                        <span class='require'>.</span></label>

                    <div class="input-icon right">
                         <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
                </div>

            </div>
        </form>

    </div>
</div>
</div>
</div>

<?php

 $query=$this->db->get_where('accommodation',array('id'=>1))->row();
    //print_r($query);

 if(isset($_POST['submit1'])) {
extract($_POST);    
            $date=date('y-m-d h:i:s');
            $ip=$_SERVER['REMOTE_ADDR'];    

            $add=array(
                'amount1'=>$amount1,
                'amount2'=>$amount2,
                'amount3'=>$amount3,
                'amount4'=>$amount4
                );
            $res=$this->db->update('accommodation',$add, array('id'=>1) );
            if($res==true){ 
                $this->session->set_flashdata('msg1','Sucessfully Update'); }            
            else{ 
                $this->session->set_flashdata('error1','Already there'); }
}
 else 
      {
        }

   



?>

<div class="clearfix"></div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-yellow">
            <div class="panel-heading"> Update Accommodation Amount
                <div class="pull-right"></div>
            </div>
      <div class="panel-body pan">

    <form  method="post" enctype="multipart/form-data">
        
         <div class="form-group mbn">
                    <?php if ($this->session->flashdata('msg1')):?>
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong style="color:green;"><?php echo $this->session->flashdata('msg1');?></strong>
                        </div>
                        <?php endif;?>

                            <?php if ($this->session->flashdata('error1')):?>
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong style="color:red;"><?php echo $this->session->flashdata('error1');?></strong>
                                </div>
                                <?php endif;?>

<?php if ($this->session->flashdata('del')):?>
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong style="color:green;"><?php echo $this->session->flashdata('del');?></strong>
                                </div>
                                <?php endif;?>


                </div>

            <div class="form-body pal new-form">
                <div class="form-group col-md-3 mbn"></div>

                <div class="form-group col-md-4 mbn">
                    <label for="inputAddress" class="control-label">Accommodation
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                        <input class="col-md-6" placeholder="Academic" value="<?php echo $query->amount1; ?>" type="text" name="amount1" class="form-control">
                        <input class="col-md-6" value="<?php echo $query->amount2; ?>" placeholder="Business" type="text" name="amount2" class="form-control">
                    </div>
                     <label for="inputAddress" class="control-label">1 Night + 2 Nights
                        <span class='require'>*</span></label>
                </div>

                 <div class="form-group col-md-4 mbn">
                    <label for="inputAddress" class="control-label">Accommodation
                        <span class='require'>*</span></label>

                    <div class="input-icon right">
                          <input class="col-md-6" value="<?php echo $query->amount3; ?>" placeholder="Academic" type="text" name="amount3" class="form-control">
                        <input class="col-md-6" value="<?php echo $query->amount4; ?>" placeholder="Business" type="text" name="amount4" class="form-control">
                    </div>
                     <label for="inputAddress" class="control-label">3 Nights + 4 Nights
                        <span class='require'>*</span></label>
                </div>

               

                <div class="form-group col-md-1 mbn">
                    <label for="inputAddress" class="control-label">
                        <span class='require'>.</span></label>

                    <div class="input-icon right">
                         <button type="submit" class="btn btn-primary" name="submit1">Submit</button>
                    </div>
                </div>

            </div>
        </form>



            </div>
        </div>



               



    </div>
    </div>

 

 <?php $data1=$this->db->order_by('id', 'desc')->get_where('registrationamount', array('status'=>'1'))->result(); ?>
<div class="row">
   <div class="col-lg-12">
      <div class="panel panel-yellow">
         <div class="panel-heading">Edit / Delete Package Amount
         </div>
         <div class="panel-body">
            <table class="table table-hover">
               <thead>
                  <tr>
                     <th>S.No</th>
                     <th width="250">Category</th>                     
                     <th class="text-center">Early&nbsp;Bird&nbsp;Reg..<br />Academic - Business</th>
                     <th class="text-center">Mid&nbsp;Term&nbsp;Reg..<br />Academic - Business</th>
                     <th class="text-center">Final&nbsp;Bird&nbsp;Reg..<br />Academic - Business</th>
                     <th width="120">Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $i=1;?>
                  <?php foreach($data1 as $h){?>
                  <tr>
                     <td><?php echo $i ?></td>  
                     <td><?php echo $h->plan ?></td>
                     <td class="text-center">$<?php echo $h->amount1 ?> - $<?php echo $h->amount2 ?></td>
                     <td class="text-center">$<?php echo $h->amount3 ?> - $<?php echo $h->amount4 ?></td>
                     <td class="text-center">$<?php echo $h->amount5 ?> - $<?php echo $h->amount6 ?></td>
                     
                     <td>
                       
                        <a class="btn btn-success btn-xs" href="<?php echo base_url();?>registration/update/<?php echo $h->id?>">Edit</a>
                

                 <?php  $u= $this->session->userdata('login'); ?> 
<?php if($u->status=='1'){ ?>

        <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>registration/delete/<?php echo $h->id?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
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


    

    <div class="clear-fix"></div>

<script type="text/javascript">
  function jou(value)
  {
   
    $.ajax({
        url:"<?php echo base_url();?>journals/ajaxEditor/"+value,
        method:"GET",
        success: function(data) {
         
    $("#res").html(data);
   
      },
      error: function(err) {
       console.log(err);
      }
    })

  }
</script>