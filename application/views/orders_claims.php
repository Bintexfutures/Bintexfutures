
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row page_title">
      	<div class="col-sm-2" style="background-color: #72A0D4; color:#ffffff;">
        	<h4>Your Orders</h4>
        </div>
         <!-- <div class="col-sm-6">
          <ol class="breadcrumb">
            <a class="navbar-brand" href="#">
    	<img class="logo_icon" src="<?php echo base_url() ?>images/logo_icon.png">
        <img class="logo" src="<?php echo base_url() ?>images/logo.png">
			</a>
          </ol>
        </div>-->
        </div>
      
      <div class="row">
          
      	<div class=" col-md-12">
      	    
        	<div class="card claims-card mb-3">
        
        <div class="card-body border-color">
            <div class="orders">
        <ul class="nav nav-tabs border-0" role="tablist">
          <li role="presentation"><a href="#wait" aria-controls="wait" role="tab" data-toggle="tab" class="active"><span>Waiting funds</span></a></li>
          <li role="presentation"><a href="#success" aria-controls="success" role="tab" data-toggle="tab"><span> Successful Orders </span></a></li>
          <li role="presentation"><a href="#expire" aria-controls="expire" role="tab" data-toggle="tab"><span>Expired Orders </span></a></li>
          <li role="presentation"><a href="#refund" aria-controls="refund" role="tab" data-toggle="tab"><span>Claimed Tokens </span></a></li>
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="wait">
              <div class="accordion" id="accordionExample">
<?php $reee=$this->session->userdata('userlogin'); 
 $abcd=$reee->id
?>

 <?php $data=$this->db->get_where('token_value', array('customer_id' => $abcd, 'status' => 1))->result();  ?>  
<?php $i=0; foreach($data as $h){?>
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center" id="headingOne<?php echo $h->id ?>">
    <p>Order ID: <span><?php echo $h->orderId ?></span></p>
    <h5 class="mb-0"><button class="btn btn-link text-right" type="button" data-toggle="collapse" data-target="#collapseOne<?php echo $h->id ?>" aria-expanded="true" aria-controls="collapseOne<?php echo $h->id ?>">VIEW </button></h5>
    </div>

    <div id="collapseOne<?php echo $h->id ?>" class="collapse <?php if(!$i) echo 'show'; $i++; ?> fade" aria-labelledby="headingOne<?php echo $h->id ?>" data-parent="#accordionExample">
    <div class="card-body">
        <ul class="order_claim">
            <li><p><strong>QR Code: </strong></p> <span>
                <?php  $re=$this->db->get_where('qr', array('id'=>$h->extype))->row();   ?>
                <img src="<?php echo base_url() ?>admin/assets/qr/<?php echo $re->img; ?> " alt="" class="img-responsive"></span></li>
            <li><p><strong>Order ID: </strong></p> <span><?php echo $h->orderId ?></span></li>
            <li><p><strong>Date: </strong></p> <span><?php echo $h->crdate ?></span></li>
            <li><p><strong>Tokens: </strong></p> <span><?php echo $h->buy_token ?></span></li>
            <li><p><strong>Bonus Tokens: </strong></p> <span><?php echo $h->percent_token ?></span></li>
            <li><p><strong>Payment method: </strong></p> <span>
                
                <?php if($h->extype=='1' ){echo 'USDT';}  else if($h->extype=='2') { echo 'Bitcoin'; } else if($h->extype=='3') { echo 'Etherium'; }
                else if($h->extype=='4') { echo 'Ripple'; }
                else if($h->extype=='5') { echo 'Tron'; }
                else if($h->extype=='6') { echo 'Lite Coin'; }
                else if($h->extype=='7') { echo 'INR'; }
                ?>
                
                
                </span></li>
            <li><p><strong>Amount/QTY: </strong></p> <span><?php echo $h->amount ?></span></li>
            <li><p><strong>Exchange rate: </strong></p> <span><?php echo $h->extramount ?></span></li>
            <li><p><strong>status: </strong></p> <span class="badge-warning badge-pill">Waiting for funds</span></li>
            <li><p><strong>Confirmed blocks: </strong></p> <span>0/15</span></li>
            <li><p><strong>Transfer Address: </strong></p> <span>
                
                
                <?php if($h->transfer_id){ echo $h->transfer_id; } else { ?>
                
                <a class="btn btn-danger " href="<?php echo base_url() ?>buyorder/view/<?php echo $h->id ?>" >Trasfer</a> <?php } ?>
            
            </span></li>
        </ul>
    </div>
    </div>
</div>

 <?php $i++;?>
                  <?php }?>
    </div>
</div>


<div role="tabpanel" class="tab-pane" id="success">
              <div class="accordion" id="accordionExample">
<?php $data=$this->db->get_where('token_value', array('customer_id' => $abcd, 'status' => 2))->result();  ?>  
<?php $i=0; foreach($data as $h){?>
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center" id="successOne<?php echo $h->id ?>">
    <p>Order ID: <span><?php echo $h->orderId ?></span></p>
    <h5 class="mb-0"><button class="btn btn-link text-right" type="button" data-toggle="collapse" data-target="#collapseOne<?php echo $h->id ?>" aria-expanded="true" aria-controls="collapseOne<?php echo $h->id ?>">VIEW </button></h5>
    </div>

    <div id="collapseOne<?php echo $h->id ?>" class="collapse fade" aria-labelledby="successOne<?php echo $h->id ?>" data-parent="#accordionExample">
    <div class="card-body">
        <ul class="order_claim">
                      <li><p><strong>QR Code: </strong></p> <span>
                <?php  $re=$this->db->get_where('qr', array('id'=>$h->extype))->row();   ?>
                <img src="<?php echo base_url() ?>admin/assets/qr/<?php echo $re->img; ?>" alt="" class="img-responsive"></span></li>
            <li><p><strong>Order ID: </strong></p> <span><?php echo $h->orderId ?></span></li>
            <li><p><strong>Date: </strong></p> <span><?php echo $h->crdate ?></span></li>
            <li><p><strong>Tokens: </strong></p> <span><?php echo $h->buy_token ?></span></li>
            <li><p><strong>Tokens for claim: </strong></p> <span><?php echo $h->percent_token ?></span></li>
            <li><p><strong>Payment method: </strong></p> <span>
                
                <?php if($h->extype=='7' ){echo 'Debit/Credit Card';} else { echo 'Crypto'; } ?>
                
                
                </span></li>
            <li><p><strong>Amount/QTY: </strong></p> <span><?php echo $h->amount ?></span></li>
            <li><p><strong>Exchange rate: </strong></p> <span><?php echo $h->extramount ?></span></li>
            <li><p><strong>status: </strong></p> <span class="badge-success badge-pill">Success</span></li>
            <li><p><strong>Confirmed blocks: </strong></p> <span>0/15</span></li>
            <li><p><strong>Transfer Address: </strong></p> <span><?php echo $h->transfer_id ?></span></li>
        </ul>
    </div>
    </div>
</div>

 <?php $i++;?>
                  <?php }?>
    </div>
</div>



<div role="tabpanel" class="tab-pane" id="expire">
              <div class="accordion" id="accordionExample">
<?php $data=$this->db->get_where('token_value', array('customer_id' => $abcd, 'status' => 3))->result();  ?>  
<?php $i=0; foreach($data as $h){?>
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center" id="eheadingOne<?php echo $h->id ?>">
    <p>Order ID: <span><?php echo $h->orderId ?></span></p>
    <h5 class="mb-0"><button class="btn btn-link text-right" type="button" data-toggle="collapse" data-target="#expireOne<?php echo $h->id ?>" aria-expanded="true" aria-controls="expireOne<?php echo $h->id ?>">VIEW </button></h5>
    </div>

    <div id="expireOne<?php echo $h->id ?>" class="collapse fade" aria-labelledby="eheadingOne<?php echo $h->id ?>" data-parent="#accordionExample">
    <div class="card-body">
        <ul class="order_claim">
                        <li><p><strong>QR Code: </strong></p> <span>
                <?php  $re=$this->db->get_where('qr', array('id'=>$h->extype))->row();   ?>
                <img src="<?php echo base_url() ?>admin/assets/qr/<?php echo $re->img; ?>" alt="" class="img-responsive"></span></li>
            <li><p><strong>Order ID: </strong></p> <span><?php echo $h->orderId ?></span></li>
            <li><p><strong>Date: </strong></p> <span><?php echo $h->crdate ?></span></li>
            <li><p><strong>Tokens: </strong></p> <span><?php echo $h->buy_token ?></span></li>
            <li><p><strong>Tokens for claim: </strong></p> <span><?php echo $h->percent_token ?></span></li>
            <li><p><strong>Payment method: </strong></p> <span>
                
                <?php if($h->extype=='7' ){echo 'Debit/Credit Card';} else { echo 'Crypto'; } ?>
                
                
                </span></li>
            <li><p><strong>Amount/QTY: </strong></p> <span><?php echo $h->amount ?></span></li>
            <li><p><strong>Exchange rate: </strong></p> <span><?php echo $h->extramount ?></span></li>
            <li><p><strong>status: </strong></p> <span class="badge-danger badge-pill">Expired</span></li>
            <li><p><strong>Confirmed blocks: </strong></p> <span>0/15</span></li>
            <li><p><strong>Transfer Address: </strong></p> <span><?php echo $h->transfer_id ?></span></li>
        </ul>
    </div>
    </div>
</div>

 <?php $i++;?>
                  <?php }?>
    </div>
</div>



<div role="tabpanel" class="tab-pane" id="refund">
              <div class="accordion" id="accordionExample">
<?php $data=$this->db->get_where('token_value', array('customer_id' => $abcd, 'status' => 4))->result();  ?>  
<?php $i=0; foreach($data as $h){?>
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center" id="rheadingOne<?php echo $h->id ?>">
    <p>Order ID: <span><?php echo $h->orderId ?></span></p>
    <h5 class="mb-0"><button class="btn btn-link text-right" type="button" data-toggle="collapse" data-target="#refundOne<?php echo $h->id ?>" aria-expanded="true" aria-controls="refundOne<?php echo $h->id ?>">VIEW </button></h5>
    </div>

    <div id="refundOne<?php echo $h->id ?>" class="collapse fade" aria-labelledby="rheadingOne<?php echo $h->id ?>" data-parent="#accordionExample">
    <div class="card-body">
        <ul class="order_claim">
                        <li><p><strong>QR Code: </strong></p> <span>
                <?php  $re=$this->db->get_where('qr', array('id'=>$h->extype))->row();   ?>
                <img src="<?php echo base_url() ?>admin/assets/qr/<?php echo $re->img; ?>" alt="" class="img-responsive"></span></li>
            <li><p><strong>Order ID: </strong></p> <span><?php echo $h->orderId ?></span></li>
            <li><p><strong>Date: </strong></p> <span><?php echo $h->crdate ?></span></li>
            <li><p><strong>Tokens: </strong></p> <span><?php echo $h->buy_token ?></span></li>
            <li><p><strong>Tokens for claim: </strong></p> <span><?php echo $h->percent_token ?></span></li>
            <li><p><strong>Payment method: </strong></p> <span>
                
                <?php if($h->extype=='7' ){echo 'Debit/Credit Card';} else { echo 'Crypto'; } ?>
                
                
                </span></li>
            <li><p><strong>Amount/QTY: </strong></p> <span><?php echo $h->amount ?></span></li>
            <li><p><strong>Exchange rate: </strong></p> <span><?php echo $h->extramount ?></span></li>
            <li><p><strong>status: </strong></p> <span class="badge-success badge-pill">Refounded</span></li>
            <li><p><strong>Confirmed blocks: </strong></p> <span>0/15</span></li>
            <li><p><strong>Transfer Address: </strong></p> <span><?php echo $h->transfer_id ?></span></li>
        </ul>
    </div>
    </div>
</div>

 <?php $i++;?>
                  <?php }?>
    </div>
</div>





        </div>
      </div>
          
        </div>
      </div>
      	</div>
      	</div>
    </div>

    </div>