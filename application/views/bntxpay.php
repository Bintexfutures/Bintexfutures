<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://bintexfutures.com/images/favicon.png">

    <title>BintexPAY</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
      body{background-color: #fcfcfc;color: #515978;}
      .bg-img.pay-bg::before {
        background-image: url("http://bintexfutures.com/body-bg.svg");
      }
      .bg-img::before {
        content: '';
        top: 0;
        position: absolute;
        right: 0;
        width: 30%;
        height: 100%;
        background-position: right top;
        background-size: cover;
        background-repeat: no-repeat;
        background-color: inherit;}
        .pay_logo{display: inline-flex;}
        .pay_logo img{border-radius: 3px;
        box-shadow: 0 2px 4px 0 rgb(0 0 0 / 18%);
        background: #fff;
        padding: 8px;    width: 56px;
    height: 56px;
    line-height: 62px;}
    .pay_logo h2{    font-size: 18px;
    color: #0d2366;
    padding-left: 16px;
    line-height: 52px;
    font-weight: bold;}
      .payment-form{background-color:#fff;border-radius: 2px;
        box-shadow: 6px 11px 24px 0 rgb(23 31 37 / 12%);padding: 32px;}
      .payment-form h4{    color: #0d2366;
    overflow-wrap: break-word;
    font-weight: bold;
    font-size: 18px;
    line-height: 24px;}
      .payment-txt{color: #0d2366;}
      .payment-txt h2{font-size: 24px;line-height: 32px;color: #0d2366;font-weight:bold;}
      .title-underline {
      display: block;
      width: 28px;
      border-bottom: 5px solid;
      margin-top: 20px;
      border-color: rgb(15,8,63);
    }
    .payment-txt ul{padding-left:18px;}
    .payment-txt ul li{color: #0d2366;font-weight: 600;}
    .payment-txt ul li span{font-weight:bold;}
    h4.title-txt{margin-top: 24px;}
    .payment-txt h4{line-height: 1.5em;
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 8px;
    color: #0d2366;margin-top:24px;}
    .payment-txt h3{font-size: 14px;
    font-weight: bold;
    line-height: 18px;
    color: #0d2366;
    margin-bottom: 8px;}
    .payment-txt a{color: #0d2366;font-size: 14px;font-weight: 600;text-decoration: none;}
    .pay-contact{margin-top:48px;}
    #form-footer{margin: 48px -32px -32px -32px;}
    .form-footer-payment{background: #f5f6f7;min-height: 56px;padding-left: 32px;}
    .form-footer-payment #fin-logo {margin-top: 24px;width: 180px;float: left;}
    #form-footer .btn {
    position: relative;
    width: 180px;
    min-height: 56px;
    font-size: 16px;
    line-height: 20px;
    float: right;
    border-radius: 0;
    text-align: center;
    color: #fff;
}
#form-footer .btn {
    background-color: #4e86dd;
    color: #fff !important;
    outline: none;
}
label{ 
    font-size: 14px;
    line-height: 20px;
    color: #515978;}
    .qty .count {
    display: inline-block;
    vertical-align: top;
    font-size: 18px;
    line-height: 32px;
    padding: 0 2px
    ;width: 62px;
    text-align: center;
    border:1px solid #ced4da
}
.qty input::-webkit-outer-spin-button,
.qty input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

.qty .plus {
    cursor: pointer;
    width: 34px;
    height: 34px;
     padding: 8px;
    font-size: 2rem;
    line-height: 10px;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0 8px 8px 0;
    }
.qty .minus {
    cursor: pointer;
    width: 34px;
    height: 34px;
    background-clip: padding-box;
        padding: 8px;
    font-size: 2rem;
    line-height: 10px;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 8px 0 0 8px;
}
@media screen and (max-width:767px){
    .form-footer-payment{padding-left: 16px;}
    .form-footer-payment #fin-logo{width: 148px;}
    #form-footer .btn{font-size: 15px;width: 152px;}
}
input {
  width: 400px;
}
    </style>
  </head>

  <body class="bg-img pay-bg">
    <div class="container">
      <div class="py-5 pay_logo">
        <img class="d-block" src="http://bintexfutures.com/payment-logo.png" alt="" width="72" height="72">
        <h2>BintexPAY</h2>
      </div>

      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="payment-txt">
            <h2>BUY BNTX Here</h2>
            <div class="title-underline"></div>
            <h4 class="title-txt">Important Note !!</h4>
            <ul>
                <li>Please verify twice before entering Your <span>BNTX</span> Deposit Wallet Address</li>
              <li>If Given <span>BNTX</span> Deposit is wrong you may lose your <span>BNTX</span></li>
              <li><span>Minimum BUY Order must be 50 BNTX</span></li>
            </ul>
            <h4>Average delivery time</h4>
            <ul>
              <li>Once Transaction is Processed Your <span>BNTX</span> will be Deposited Within 20min - 40min</li>
            </ul>
            <h3 class="pay-contact">Contact Us:</h3>
            <a href="mailto:contact@bintexfutures.com">contact@bintexfutures.com</a>
          </div>
        </div>
        <div class="col-md-6"> 
          <div class="payment-form">
            <h4 class="mb-3">Payment Details</h4>
            <div class="title-underline"></div>
          <form class="" action="<?php echo base_url() ?>index.php/home/payemrnt" method="post"  style="margin-top:24px;">  
          <!--start popup-->
          
  <!-- The Modal -->
  <div class="modal" id="bntx">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Bintex Futures</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <div align="center">
                <span style="color:green">Pay</span></span><p  style="color:green" id="payment"></p>
          <img src="<?php echo base_url(); ?>images/Bintex_QR_Code_ICICI.jpeg" style="width: 205px;" />
          </div>
          
          <p>UPI ID</p>
          <!--<p>bintexfutures@icici</p>-->
            <input type="text"  id="copyTarget" value="bintexfuturesllp@icici" readonly required="false"> <button type="button" id="copyButton">Copy</button>
            <br>
          <label>Transaction Reference Id</label>
          <input type="text" class="form-control" name="ref" id="ref" minlength="12" maxlength="12" required />
          
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
        
      </div>
    </div>
  </div>
          <!--end-->
          <div class="mb-3">
              <?php if(!empty($this->session->flashdata('msg'))){ $alert=""; if(!empty($this->session->flashdata('success'))){ $alert="success"; }else{$alert="danger";} ?> 
              <label class="alert alert-<?php echo $alert; ?>"> <?php echo $this->session->flashdata('msg'); } ?></label>
          </div>
            <div class="mb-3">
              <label for="">Email</label>
              <input type="email" name="email" class="form-control" id="name" placeholder="" required>
            </div>

            <div class="mb-3">
              <label for="">Phone</label>
              <input type="text" name="Phone" class="form-control" id="Phone" placeholder=""  minlength="10" maxlength="10" required>
            </div>
            <div class="mb-3">
              <label for="">BNTX Deposit Address</label>
              <input type="text" name="d_address" class="form-control" id="d_address" placeholder="" required>
            </div> 
            <div class="mb-3">
              <label for="">BNTX(Optional)</label>
              <div class="input-group">
                <input type="text" readonly class="form-control" value="₹60" placeholder="₹60.00" id="usd" name="usd">
                <div class="input-group-append">
                  <div class="input-group-text qty">
                      <span class="minus">-</span>
                      <input type="number" class="count" name="qty" value="50" min="50"  step="50">
                      <span class="plus">+</span>
                    </div>
                </div>
              </div>
            </div>     
                <div id="form-footer" class="">    
              <div class="form-footer-payment"><img id="fin-logo" alt="pay-methods" src="http://bintexfutures.com/pay_methods.png"> 
                <button type="button" class="btn btn--gradient" data-toggle="modal" data-target="#bntx">BUY BNTX <span style="margin-left: 4px;" >₹<input readonly style="border:none;width: 73px;background: #4e86dd;color: #fff;" type="text" name="total" id="total" /></span></button></div></div>
          </form>
          </div>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2021 BintexPAY.</p>
      </footer>
    </div>    
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
    <script type="text/javascript">
          $(document).ready(function(){
              var USD=60;
              total(1);
        $('.count').prop('enabled', true);
         $(document).on('keyup','.count',function(){
            var keyup=1;
             $(document).on('focusout','.count',function(){
             var count=$('.count').val();
             if(count<50){
                 $('.count').val(50);
                 alert("Minimum BUY Order must be 50 BNTX");
                 total(keyup);
             }
         })
         
             total(keyup);
         })
        $(document).on('click','.plus',function(){
         //alert(total);
         total();
        });
        function total(keyup){
            if(keyup!=1){
            $('.count').val(parseInt($('.count').val()) + 1 );
            }
         var count= $(".count").val();
         var total=count*USD;
         var bind=$("#total").val(total);
         $("#payment").text(total);
        }
          $(document).on('click','.minus',function(){
            $('.count').val(parseInt($('.count').val()) - 1 );
            var count=$('.count').val();
             if(count<50){
                 $('.count').val(50);
                 alert("Minimum BUY Order must be 50 BNTX");
             }else{
         var total=count*USD;
         var bind=$("#total").val(total);
          $("#payment").text(total);
            if ($('.count').val() == 0) {
            $('.count').val(1);
          }
          }
            });
    });
    
    document.getElementById("copyButton").addEventListener("click", function() {
    copyToClipboard(document.getElementById("copyTarget"));
});

function copyToClipboard(elem) {
	  // create hidden text element, if it doesn't already exist
    var targetId = "_hiddenCopyText_";
    var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
    var origSelectionStart, origSelectionEnd;
    if (isInput) {
        // can just use the original source element for the selection and copy
        target = elem;
        origSelectionStart = elem.selectionStart;
        origSelectionEnd = elem.selectionEnd;
    } else {
        // must use a temporary form element for the selection and copy
        target = document.getElementById(targetId);
        if (!target) {
            var target = document.createElement("textarea");
            target.style.position = "absolute";
            target.style.left = "-9999px";
            target.style.top = "0";
            target.id = targetId;
            document.body.appendChild(target);
        }
        target.textContent = elem.textContent;
    }
    // select the content
    var currentFocus = document.activeElement;
    target.focus();
    target.setSelectionRange(0, target.value.length);
    
    // copy the selection
    var succeed;
    try {
    	  succeed = document.execCommand("copy");
    } catch(e) {
        succeed = false;
    }
    // restore original focus
    if (currentFocus && typeof currentFocus.focus === "function") {
        currentFocus.focus();
    }
    
    if (isInput) {
        // restore prior selection
        elem.setSelectionRange(origSelectionStart, origSelectionEnd);
    } else {
        // clear temporary content
        target.textContent = "";
    }
    return succeed;
}
    </script>
  </body>
</html>
