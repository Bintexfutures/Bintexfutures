  <div class="content-wrapper">
    <div class="container-fluid">
      
      <div class="row">
      	<div class="col-md-12">
      		<div class="card mb-4">
			<div class="card-header">
                <h4 class="mb-0">Notification</h4>
            </div>
            <div class="col-md-12">
			
			<table width="100%">
			    <tr>
			        <th width="180">Date</th>
			        <th width="290">Heading</th>
			        <th>Message</th>
			    </tr>
			    
			     <?php
$san=$this->session->userdata('userlogin');
 $data1=$this->db->order_by('id', 'desc')->get_where('notification', array('reg_id'=> $san->id))->result();
 $i=1;?>   
 
  <?php foreach($data1 as $h){?>

            <tr>
			        <td><?php echo $h->crdate; ?></td>
			        <td><?php echo $h->heading; ?></td>
			        <td><?php echo $h->content; ?></td>
			    </tr>
                

 <?php $i++;?>
  <?php }?>
			   
			  
			</table>
			</div>
     
                  
            </div></div><div class="col-md-2"><a class="navbar-brand" href="index_user.php">
    	<img class="logo_icon" src="images/logo_icon.png">
        <img class="logo" src="images/logo.png">
			</a></div>
      	</div>
		</div>
       
    </div>

    <script src="<?php echo base_url();?>vendor/jquery/jquery.min.js"></script>
  <script type="text/javascript">

 function test1(id){
     $.ajax({
        url:"<?php echo base_url();?>ajaxuser/gettoken/"+id,
        method:"GET",
        success: function(data) {
          alert(data);

     document.getElementById('token').value=data;
      },
      error: function(err) {
       console.log(err);
      }
      });
    }
//   function cal(){
//      token= $('#token').val()*0.4;
//      amount= $('#amount').val();
//      $('#bonus_token').val(amount/token);
//      bonus_token= $('#bonus_token').val();
//      $('#bit_tokens').val(bonus_token);
     
//      //$('#bit_tokens').val(bonus_token*0.4)*1;
     
//      bit_tokens= $('#bit_tokens').val();
//      $('#bonus_tk').val(bit_tokens*0.1);
//      $('#total_token').val((bit_tokens*1)+(bit_tokens*0.1));
//      total_token= $('#total_token').val();
//     }
    
    function cal(){
     token= $('#token').val();
     amount= $('#amount').val();
     $('#bonus_token').val(amount*token);
     bonus_token= $('#bonus_token').val();
     $('#bit_tokens').val(bonus_token/0.4)*1;
     
     bit_tokens= $('#bit_tokens').val();  // Left
     $('#bonus_tk').val(bit_tokens*0.1); //Right
     $('#bonus_tk1').val(bit_tokens*0.05); //Right
     
     $('#total_token').val((bit_tokens*1)+(bit_tokens*0.1));
     total_token= $('#total_token').val();
    }
    
    function cal1(){
     token= $('#token').val();
      bit_tokens= $('#bit_tokens').val();
     //$('#bit_tokens').val(bonus_token)*1;
      bit_toke= bit_tokens/token;
     
     
     botkens= $('#bonus_token').val();
     
     amount= $('#amount').val(bit_toke*0.4);
     
     $('#bonus_tk').val(bit_tokens*0.1);
     $('#bonus_tk1').val(bit_tokens*0.05);
     $('#total_token').val((bit_tokens*1)+(bit_tokens*0.1));
     total_token= $('#total_token').val();
    }
     </script>
     
     
 