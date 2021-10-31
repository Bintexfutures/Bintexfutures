

  <div class="content-wrapper">
    <div class="container-fluid">
     <!-- <div class="row page_title">
      	<div class="col-sm-6">
        	<h4>My Wallet</h4>
        </div>
        </div> -->
      
      <div class="row">
		<div class="col-md-12">
			<div class="card mb-4">
            <div class="card-header text_md_center">My Wallet</div>
            <div class="card-body">
				<div class="form-group col-md-12">
					<div class="avail-box">
					    
					   	<?php $ve='2'; $san=$this->session->userdata('userlogin');  $this->db->select('*');
$this->db->select('SUM(totalamount) as tamount');

$this->db->from('token_value');
$this->db->where('customer_id=', $san->id);
$this->db->where('status=',$ve);
$this->db->group_by('customer_id'); 


$data2=$this->db->get()->row();  ?>
<?php 
$re=$this->session->userdata('userlogin');
if(isset($_POST['submit'])){
	extract($_POST);   
		
		        $data = array(
		           'address_wallet' => $address_wallet,
		         
		       );

        $res=	$this->db->update('users', $data, array('id'=>$re->id)); 
      	    
	if($res==true)	{
	    $userid=$re->id;
// re update 
$this->db->where("id = '$userid' ");
		$res=$this->db->get('users');
		$user=$res->row();

$row = array('userlogin' => $user);
$this->session->set_userdata($row);
echo "sucess";
	}

}
?>

               <div class="row">
                   <div class="col">
                       <h4>Available Tokens:
						
						<?php if(@$data2->tamount){ ?>
                  <?php echo @$data2->tamount; ?>
                  <?php } else { ?>
                 0
                  <?php } ?>
                  
                  </h4>
                   </div >
                   <div class="col">
                       <h4>USDT:
						
						<?php if(@$data2->tamount){ ?>
                  <?php echo @$data2->tamount/100; ?>
                  <?php } else { ?>
                 0
                  <?php } ?>
                  
                  </h4>
                   </div>
               </div>
						
					</div>
                    <p>Your Ethereum ERC20 Wallet Address</p>
                    <form class="row" method="post" enctype="multipart/form-data">
					<div class="input-group">
                        <input type="text" class="form-control" placeholder="" name="address_wallet" value="<?php $re=$this->session->userdata('userlogin'); echo @$re->address_wallet  ?>" >
                    </div>
					<button class="btn btn-default mt-4" name="submit">Save</button>
				</div>
			</form>
				<hr>
				<p>After successfully passing KYC and/or AML (if required), your tokens will be automatically sent to the wallet specified below after 15/09/2019 - 00:00.</p>
				<div class="alert alert-danger alert-dismissible fade show mt-4 mb-4">
				<div class="alert alert-danger alert-dismissible fade show mt-4 mb-4">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong><i class="fa fa-info-circle"></i> Important notice: !</strong> This is an automated process and cannot be reversed! Please, make sure that the wallet address is correct and that it's compatible with ERC-20 tokens
				</div>
            </div>
          </div>
		</div>
      </div>
    </div>
    